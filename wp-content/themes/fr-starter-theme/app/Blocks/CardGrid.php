<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class CardGrid extends Block
{
	/**
	 * The block name.
	 *
	 * @var string
	 */
	public $name = 'Card Grid';

	/**
	 * The block slug.
	 *
	 * @var string
	 */
	public $slug = 'fr-page-builder-module-card-grid';

	/**
	 * The block description.
	 *
	 * @var string
	 */
	public $description = 'A Card Grid block.';

	/**
	 * The block category.
	 *
	 * @var string
	 */
	public $category = 'fr-page-builder-content-blocks';

	/**
	 * The block icon.
	 *
	 * @var string|array
	 */
	public $icon = ' fricon fricon--card-grid';

	/**
	 * The block keywords.
	 *
	 * @var array
	 */
	public $keywords = [];

	/**
	 * The block post type allow list.
	 *
	 * @var array
	 */
	public $post_types = [];

	/**
	 * The parent block type allow list.
	 *
	 * @var array
	 */
	public $parent = ['acf/block-container'];


	/**
	 * The default block mode.
	 *
	 * @var string
	 */
	public $mode = 'preview';

	/**
	 * The default block alignment.
	 *
	 * @var string
	 */
	public $align = '';

	/**
	 * The default block text alignment.
	 *
	 * @var string
	 */
	public $align_text = '';

	/**
	 * The default block content alignment.
	 *
	 * @var string
	 */
	public $align_content = '';

	/**
	 * The supported block features.
	 *
	 * @var array
	 */
	public $supports = [
		'align' => false,
		'align_text' => false,
		'align_content' => false,
		'full_height' => false,
		'anchor' => true,
		'mode' => 'edit',
		'multiple' => true,
		'jsx' => true,
	];

	/**
	 * Data to be passed to the block before rendering.
	 *
	 * @return array
	 */
	public function with()
	{
		$postsPerPage = get_field('posts_per_page') ?: 8;
		$postType = get_field('post_type');

		$result =  array_merge([
			'heading_content' => get_field('heading_content') ? trim(get_field('heading_content')) : '',
			'loadMoreText' => get_field('load_more_button_label'),
			'filterId' => uniqid('card-grid-filter_'),
			'frontendFilters' => $this->getFrontendFilters($postType),
			'postsPerPage' => $postsPerPage,
			'blockData' => [
				'block_name' => 'card_grid',
				'source' => get_field('source'),
				'posts_per_page' => $postsPerPage,
				'post_type' => get_field('post_type') ? [get_field('post_type')] : [],
				'posts' => get_field('posts'),
				'taxonomies' => get_field('taxonomies'),
			]
		]);

		return $result;
	}

	public $example = [
		'attributes' => [
			'preview_image' => 'CardGrid.png'
		],
	];

	/**
	 * The block field group.
	 *
	 * @return array
	 */
	public function fields()
	{
		$cardGrid = new FieldsBuilder('card_grid');

		$cardGrid
			->addWysiwyg('heading_content')
			->addRadio('post_type', [
				'choices' => [
					'after-school-program' => 'After School Program',
					'camp' => 'Camp',
					'post' => 'Blog Post',
					'team-member' => 'Team Member',
					'childhood-education' => 'Early Childhood Education'
				],
				'required' => 1,
				'layout' => 'horizontal',
				'wrapper' => [
					'width' => 100
				]
			])
			->addNumber('posts_per_page', [
				'label' => 'Cards Per Page',
				'min' => 2,
				'default_value' => 2,
				'wrapper' => [
					'width' => 50
				]
			])
			->addText('load_more_button_label', [
				'label' => '\'View More\' Button Label',
				'default_value' => 'View More',
				'wrapper' => [
					'width' => 50
				]
			])
			->addRadio('source', [
				'choices' => [
					'posts' => 'Select from Posts',
					'from_filters' => 'Dynamically Pulled from Filters',
				],
				'layout' => 'horizontal',
				'default_value' => 'posts',
				'wrapper' => [
					'width' => 50
				]
			])
			->addGroup('posts', [
				'layout' => 'block'
			])
			->conditional('source', '==', 'posts')
			->addPostObject('after-school-program', [
				'label' => 'Selected Posts',
				'return_format' => 'id',
				'post_type' => [
					'after-school-program'
				],
				'required' => 1,
				'multiple' => 1
			])
			->conditional('post_type', '==', 'after-school-program')
			->addPostObject('camp', [
				'label' => 'Selected Posts',
				'return_format' => 'id',
				'post_type' => [
					'camp'
				],
				'required' => 1,
				'multiple' => 1
			])
			->conditional('post_type', '==', 'camp')
			->addPostObject('post', [
				'label' => 'Selected Posts',
				'return_format' => 'id',
				'post_type' => [
					'post'
				],
				'required' => 1,
				'multiple' => 1
			])
			->conditional('post_type', '==', 'post')
			->addPostObject('childhood-education', [
				'label' => 'Selected Posts',
				'return_format' => 'id',
				'post_type' => [
					'childhood-education'
				],
				'required' => 1,
				'multiple' => 1
			])
			->conditional('post_type', '==', 'childhood-education')
			->addPostObject('team-member', [
				'label' => 'Selected Posts',
				'return_format' => 'id',
				'post_type' => [
					'team-member'
				],
				'required' => 1,
				'multiple' => 1
			])
			->conditional('post_type', '==', 'team-member')
			->endGroup()
			->addGroup('taxonomies', [
				'layout' => 'block'
			])
			->conditional('source', '==', 'from_filters')
			->addPostObject('programs', [
				'label' => 'Programs',
				'return_format' => 'id',
				'post_type' => [
					'after-school-program',
					'camp'
				],
				'multiple' => 1,
			])
			->conditional('post_type', '==', 'post')
			->addTaxonomy('age', [
				'label' => 'Age',
				'taxonomy' => 'age',
				'field_type' => 'checkbox',
				'return_format' => 'object',
				'multiple' => 1,
				'add_term' => 0,
				'wrapper' => [
					'width' => 50
				]
			])
			->conditional('post_type', '==', 'after-school-program')
			->or('post_type', '==', 'camp')
			->or('post_type', '==', 'post')
			->or('post_type', '==', 'childhood-education')
			->addTaxonomy('activity', [
				'label' => 'Activity',
				'taxonomy' => 'activity',
				'field_type' => 'checkbox',
				'return_format' => 'object',
				'multiple' => 1,
				'add_term' => 0,
				'wrapper' => [
					'width' => 50
				]
			])
			->conditional('post_type', '==', 'after-school-program')
			->or('post_type', '==', 'camp')
			->or('post_type', '==', 'post')
			->or('post_type', '==', 'childhood-education')
			->endGroup();

		return $cardGrid->build();
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function exampleData()
	{
		$result = [
			'posts' => [
				view('components.card', [
					'post_type' => 'after-school-program',
					'card_data' => [
						'title' => 'Strategy 1 Name Lorem Ipsum Dolor',
						'post_type' => 'after-school-program',
						'permalink' => '',
						'featured_image' => [
							'url' => '',
						],
						'excerpt' => 'Strategy 1 Name Lorem Ipsum Dolor',
						'location' => 'Strategy 1 Name Lorem Ipsum Dolor',
						'program_email' => 'strategy1@example.com',
						'school_website' => [
							'url' => '',
						],
						'program_phone_number' => '123-456-7890',
						'registration_link' => false,
					]
				])->render(),
				view('components.card', [
					'post_type' => 'childhood-education',
					'card_data' => [
						'title' => 'Strategy 1 Name Lorem Ipsum Dolor',
						'post_type' => 'childhood-education',
						'permalink' => '',
						'featured_image' => [
							'url' => '',
						],
						'excerpt' => 'Strategy 1 Name Lorem Ipsum Dolor',
						'location' => 'Strategy 1 Name Lorem Ipsum Dolor',
						'program_email' => 'strategy2@example.com',
						'program_phone_number' => '987-654-3210',
						'registration_link' => false,
					]
				])->render(),
			],
			'hasMore' => true,
			'ajax_config' => '',
			'source' => 'posts',
			'load_more_text' => 'View More',
		];

		return $result;
	}


	public function getFrontendFilters($postType)
	{

		return array_unique(array_filter([
			in_array($postType, ['post']) ? 'programs' : null,
			in_array($postType, ['post']) ? 'age' : null,
			in_array($postType, ['post']) ? 'activity' : null,
		]));
	}


	/**
	 * Assets to be enqueued when rendering the block.
	 *
	 * @return void
	 */
	public function enqueue()
	{
		//
	}
}
