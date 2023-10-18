<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class FrColumns extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Free Range Columns';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Free Range Columns block.';

    /**
     * The block slug.
     *
     * @var string
     */
    public $slug = 'fr-page-builder-module-free-range-columns';

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
    public $icon = '';

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
        'mode' => false,
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
        $allowed_blocks = [
            'acf/fr-column'
        ];

        $items = $this->items();

        return [
            'layouts' => $items['layouts'],
            'is_flipped' => $items['is_flipped'],
            'choices' => $items['choices'],
            'max_width' => $this->getMaxWidthAttr(),
            'allowed_blocks' => json_encode($allowed_blocks),
            'bottom_spacing' => $this->preview && !get_field('bottom_spacing') ? $this->example['bottom_spacing'] : get_field('bottom_spacing'),

        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $frLayout = new FieldsBuilder('fr_layout');

        $frLayout
            ->addButtonGroup('layouts', [
                'choices' => $this->choices(),
                'allow_null' => 0,
                'wpml_cf_preferences' => 0,
                'wrapper' => [
                    'class' => 'fr-hide-first-opt'
                ]
            ])
            ->addTrueFalse('is_flipped')
            ->conditional('layouts', '==', '13_23')
            ->or('layouts', '==', '14_34')
            ->addRange('max_width', [
                'label' => 'Layout\'s Max Width',
                'min' => 10,
                'max' => 100,
                'append' => '%',
                'default_value' => 100
            ])
            ->addSelect('bottom_spacing', [
                'choices' => [
                    'default' => 'default',
                    'zero-space' => 'zero',
                    'heading-space' => 'heading',
                    'module-space' => 'module',
                ],
                'default_value' => [],
                'ui' => 0,
                'return_format' => 'both',
                'placeholder' => '',
                'wrapper' => [
                    'width' => '30'
                ],
                'required' => '1'
            ]);

        return $frLayout->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function items()
    {
        return [
            'layouts' => get_field('layouts'),
            'is_flipped' => get_field('is_flipped') ?: false,
            'choices' => $this->choices(['remove_first' => true]),
        ];
    }

    public function choices($args = [])
    {
        $choices = [];
        $choices['-1'] = 'None';
        $choices['1_1'] = '1/1';
        $choices['12_12'] = '1/2 1/2';
        $choices['13_13_13'] = '1/3 1/3 1/3';
        $choices['13_23'] = '1/3 2/3';
        $choices['14_34'] = '1/4 3/4';

        if (isset($args['remove_first']) && $args['remove_first']) {
            unset($choices['-1']);
        }

        return $choices;
    }

    public function getMaxWidthAttr()
    {
        $max_width = get_field('max_width');
        return $max_width && $max_width !== 100 ? 'style=\'max-width:' . $max_width . '%;\'' : '';
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
