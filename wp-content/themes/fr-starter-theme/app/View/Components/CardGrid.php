<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardGrid extends Component
{

    const GET_TEAM_MEMBER_ACTION = 'get_team_member';
    public $queryArgs;
    public $posts;
	public $hasMore;
	public $ajaxConfigArgs;
    public $ajaxConfig;
    public $cardModalConfig;
    public $connectedFilters;
	public $postsPerPage = \App\Providers\PostSearchProvider::POSTS_PER_PAGE;
	public $postType = \App\Providers\PostSearchProvider::GENERAL_SEARCH_POST_TYPES;
    public $loadMoreText;
    public $loadMoreUrl;
    public $includePublishCard;
    public $blockData;
    public $showNoResult;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($postsPerPage = false, $postType = false, $ajaxConfig = false, $connectedFilters = [], $loadMoreText = 'View More',$loadMoreUrl = '', $includePublishCard = false, $blockData = false, $showNoResult = false)
    {
        $this->posts = [];
        $this->postsPerPage = $postsPerPage ? : $this->postsPerPage;
		$this->postType = $postType ? : $this->postType;
        $this->connectedFilters = $connectedFilters;
        $this->loadMoreText = $loadMoreText;
        $this->loadMoreUrl = $loadMoreUrl;
        $this->includePublishCard = $includePublishCard ? json_decode($includePublishCard) : false;
        $this->blockData = $blockData;
        $this->showNoResult = $showNoResult;

        // Assign blockdata
        if($blockData){
            $this->postType = $blockData['post_type'] ? : $this->postType;
        }

        $this->setQueryArgs();
        $this->preparePosts();

        $this->setAjaxConfigArgs();
		$this->prepareAjaxConfig();
        $this->prepareCardModalConfig();
    }


    public function setQueryArgs(){
		$this->queryArgs = array_merge([
            'block_grid_name' => $this->blockData['block_name'],
            'post_type' => $this->postType,
            'post_program' => isset($this->blockData['post_program']) ?  $this->blockData['post_program'] : '',
			'posts_per_page' => $this->postsPerPage,
		], $this->getArgsFromBlockData(), $this->getArgsFromUrl());
	}


    public function setAjaxConfigArgs(){
		$this->ajaxConfigArgs = array_filter([
			'block_name' => 'card_grid_component',
			'source' => 'filters',
			'post_type' => $this->postType,
            'post_program' => isset($this->blockData['post_program']) ?  $this->blockData['post_program'] : '' ,
			'posts_per_page' => $this->postsPerPage,
            'post__in' => $this->setPostIn(),
		]);

        if($this->blockData){
            $this->ajaxConfigArgs = array_merge($this->ajaxConfigArgs, $this->blockData);
        }
	}

    public function getArgsFromBlockData(){
        if(!$this->blockData){
            return [];
        }

        $taxonomies = $this->blockData['taxonomies'];

        $args = array_filter([
			'post_type' => $this->blockData['post_type'],
            'post__in' => $this->setPostIn(),
            'programs' => isset($this->blockData['programs']) ? $this->blockData['programs'] : null
		]);

        if(!$taxonomies){
            return $args;
        }

        return array_merge($args, [
            'programs' => isset($taxonomies['programs'])? $taxonomies['programs'] : null,
            'age' => \App\Providers\PostSearchProvider::GetTermsSlugs($taxonomies['age']?:[]),
            'activity' => \App\Providers\PostSearchProvider::GetTermsSlugs($taxonomies['activity']?:[]),
        ]);
	}

    public function getArgsFromUrl(){
		return array_filter([
			'order_by' => filter_input(INPUT_GET, 'order_by')?: null,
			's' => filter_input(INPUT_GET, 's')?: null,
			'age' => filter_input(INPUT_GET, 'age', FILTER_UNSAFE_RAW)? explode(',', filter_input(INPUT_GET, 'age', FILTER_UNSAFE_RAW)): null,
            'activity' => filter_input(INPUT_GET, 'activity', FILTER_UNSAFE_RAW)? explode(',', filter_input(INPUT_GET, 'activity', FILTER_UNSAFE_RAW)): null,
            'programs' => filter_input(INPUT_GET, 'programs', FILTER_UNSAFE_RAW)? explode(',', filter_input(INPUT_GET, 'programs', FILTER_UNSAFE_RAW)): null,
            'post_program' => filter_input(INPUT_GET, 'post_program')?: '',
        ]);
	}

    public function setPostIn(){
        $postIn = null;

        if(!$this->blockData){
            return $postIn;
        }

        $posts = $this->blockData['posts'];

        if($this->blockData['source'] !== 'posts'){
            return $postIn;
        }

        switch($this->blockData['post_type'][0]){
            case 'after-school-program':
                $postIn = $posts['after-school-program'];
                break;
            case 'camp':
                $postIn = $posts['camp'];
                break;
            case 'childhood-education':
                $postIn = $posts['childhood-education'];
                break;
            case 'post':
                $postIn = $posts['post'];
                break;
            case 'team-member':
                $postIn = $posts['team-member'];
                break;
            default:
                break;
        }

        return $postIn;
	}

	/**
     * Prepare posts data.
     *
     * @return void
     */
    public function preparePosts(){
		$result = \App\Providers\PostSearchProvider::GetPosts($this->queryArgs);

		$this->posts = \App\Providers\PostSearchProvider::ConvertDataToHtmlArray($result['posts']);
		$this->hasMore = $result['hasMore'];
	}

	/**
     * Prepare ajax config.
     *
     * @return void
     */
	public function prepareAjaxConfig(){
		$this->ajaxConfig = \App\Providers\PostSearchProvider::getAjaxConfig($this->ajaxConfigArgs);
	}

    /**
     * Prepare team member modal config.
     *
     * @return void
     */
	public function prepareCardModalConfig(){
		$this->cardModalConfig = \App\Providers\CardsDataProvider::getAjaxConfig();
	}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-grid');
    }
}
