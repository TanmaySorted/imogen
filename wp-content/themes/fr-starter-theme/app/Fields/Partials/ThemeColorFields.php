<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ThemeColorFields extends Partial
{
    /**
     * The partial field group.
     *
     * @return \StoutLogic\AcfBuilder\FieldsBuilder
     */
    public function fields()
    {
        $fields = new FieldsBuilder('theme_colors');

        $fields
            ->addColorPicker('main_color', [
                'wrapper' => [
                    'width' => 50
                ]
            ])
            ->addTextarea('main_color_filter', [
                'rows' => 3,
                'wrapper' => [
                    'width' => 50
                ]
            ])
            ->addColorPicker('secondary_color')
            ->addGroup('CTA_hover_setting', [
                'wrapper' => [
                    'width' => 100
                ]
            ])
                ->addColorPicker('main_color_hover', [
                    'wrapper' => [
                        'width' => 50
                    ]
                ])
                ->addColorPicker('secondary_color_hover', [
                    'wrapper' => [
                        'width' => 50
                    ]
                ])
            ->endGroup()
            ->addMessage('Background colors','Select colors to show in block container background.')
            ->addGroup('fade_to_white', [
                'wrapper' => [
                    'width' => 50
                ]
            ])
                ->addColorPicker('top_color', [
                    'wrapper' => [
                        'width' => 50
                    ]
                ])
                ->addColorPicker('mid_color', [
                    'wrapper' => [
                        'width' => 50
                    ]
                ])
                ->addTextarea('wave_top_filter', [
                    'rows' => 3
                ])
            ->endGroup()
            ->addGroup('fade_to_color', [
                'wrapper' => [
                    'width' => 50
                ]
            ])
                ->addColorPicker('top_color', [
                    'wrapper' => [
                        'width' => 50
                    ]
                ])
                ->addColorPicker('bottom_color', [
                    'wrapper' => [
                        'width' => 50
                    ]
                ])
                ->addTextarea('wave_top_filter', [
                    'rows' => 3
                ])
            ->endGroup();

        return $fields;
    }
}
