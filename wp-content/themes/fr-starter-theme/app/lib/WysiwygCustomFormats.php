<?php
if (!class_exists('WysiwygCustomFormats')) :

    class WysiwygCustomFormats
    {

        public function __construct()
        {

            add_filter('mce_buttons_2', [$this, 'AddFormtDropdownToWysisyg']);

            // Attach callback to 'tiny_mce_before_init' 
            add_filter('tiny_mce_before_init', [$this, 'my_custom_styles']);
        }

        public function AddFormtDropdownToWysisyg($buttons)
        {
            array_unshift($buttons, 'styleselect');
            return $buttons;
        }

        //add custom styles to the WordPress editor
        public function my_custom_styles($init_array)
        {

            $style_formats = array(
                // These are the custom styles
                array(
                    'title' => 'Subheading',
                    'block' => 'h5',
                    'classes' => 'sub'
                ),
                array(
                    'title' => 'Subheading without margin',
                    'block' => 'h5',
                    'classes' => 'sub mb-0'
                ),
                array(
                    'title' => 'Theme Colour',
                    'inline' => 'span',
                    'classes' => 'theme-color'
                ),
                array(
                    'title' => 'News paper column',
                    'block' => 'div',
                    'wrapper' => 'true',
                    'classes' => 'news-paper-column'
                ),
                array(
                    'title' => 'Desktop right aligned',
                    'block' => 'div',
                    'classes' => 'desktop-right-aligned'
                )
            );
            // Insert the array, JSON ENCODED, into 'style_formats'
            $init_array['style_formats'] = json_encode($style_formats);

            return $init_array;
        }
    }
    /**
     * Initialize class
     */
    global $WysiwygCustomFormats;
    $WysiwygCustomFormats = new \WysiwygCustomFormats();
endif;
