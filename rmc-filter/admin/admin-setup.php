<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_filter( 'carbon_fields_theme_options_container_admin_only_access', '__return_false' );

add_action( 'carbon_fields_register_fields', 'theme_options' );

function theme_options() {
Container::make( 'theme_options', __( 'Blog Filter Settings' ) )
    ->set_page_parent( 'options-general.php' ) // identificator of the "Tools" admin section
    ->add_tab( __( 'Category Checklist Style' ), array(
        Field::make( 'separator', 'title_separator', __( 'Filter Title Options' ) ),
        Field::make( 'color', 'nav_title_color', __( 'Title Color' ) )
            ->set_alpha_enabled( true )
            ->set_width(33 ),
        Field::make( 'number', 'title_font_size', __( 'Title Font Size' ) )
            ->set_default_value(24)
            ->set_min(18)
            ->set_max(30)
            ->set_help_text( 'Set title font size - font size range is 18px to 30px' )
            ->set_width( 33 ),
        Field::make( 'radio', 'title_font_weight', __( 'Title Font Weight' ) )
            ->set_options( array( 
                '400' => __('Lightly Bold'), 
                '600' => __('Bold'),
                '700' => __('Heavy Bold'),
                '0' => __('None'),
                ) )
            ->set_width( 33 ),
            Field::make( 'separator', 'checklist_separator', __( 'Filter Checklist Text Options' ) ),
            Field::make( 'color', 'checklist_active_color', __( 'Checkbox Active Color' ) )
                ->set_alpha_enabled( true )
                ->set_help_text('When checkbox is checked, what color is selected')
                ->set_width( 25 ),
            Field::make( 'number', 'checklist_label_fs', __( 'Label Font Size' ) )
                ->set_default_value(14)
                ->set_min(12)
                ->set_max(20)
                ->set_help_text( 'Set title font size - font size range is 12px to 20px' )
                ->set_width( 25 ),
            Field::make( 'color', 'checklist_label_color', __( 'Label Text Color' ) )
                ->set_alpha_enabled( true )
                ->set_width( 25 ),
            Field::make( 'radio', 'checklist_label_weight', __( 'Label Font Weight' ) )
                ->set_options( array( 
                    '400' => __('Lightly Bold'), 
                    '600' => __('Bold'),
                    '700' => __('Heavy Bold'),
                    '0' => __('None'),
                    ) )
                ->set_width( 25 ),
       
    ) )
    ->add_tab( __( 'Card Style Options' ), array(
        Field::make( 'color', 'card_background', __( 'Card Background Color' ) )
            ->set_alpha_enabled( true )     
    ) )
    ->add_tab( __( 'Card Content Style Options' ), array(
        Field::make( 'separator', 'card_title_separator', __( 'Card Title' ) ),
            
        Field::make( 'color', 'card_title_color', __( 'Title Color' ) )
            ->set_alpha_enabled( true )
            ->set_width(33 ),
        Field::make( 'number', 'card_title_font_size', __( 'Title Font Size' ) )
            ->set_default_value(21)
            ->set_min(18)
            ->set_max(30)
            ->set_help_text( 'Set card title font size - font size range is 18px to 30px' )
            ->set_width( 33 ),
        Field::make( 'radio', 'card_title_font_weight', __( 'Title Font Weight' ) )
            ->set_options( array( 
                '400' => __('Lightly Bold'), 
                '600' => __('Bold'),
                '700' => __('Heavy Bold'),
                '0' => __('None'),
                ) )
            ->set_width( 33 ),
        Field::make( 'separator', 'card_content_separator', __( 'Card Content' ) ),        
        Field::make( 'color', 'card_text_color', __( 'Text Color' ) )
            ->set_alpha_enabled( true )
            ->set_width(33 ),
        Field::make( 'number', 'card_text_font_size', __( 'Text Font Size' ) )
            ->set_default_value(14)
            ->set_min(12)
            ->set_max(20)
            ->set_help_text( 'Set card text font size - font size range is 12px to 20px' )
            ->set_width( 33 ),
        Field::make( 'radio', 'card_text_font_weight', __( 'Text Font Weight' ) )
            ->set_options( array( 
                '400' => __('Lightly Bold'), 
                '600' => __('Bold'),
                '700' => __('Heavy Bold'),
                '0' => __('None'),
                ) )
            ->set_width( 33 ),
     
    ) ) 
    ->add_tab( __( 'Meta Button Options' ), array(
        Field::make( 'separator', 'active_content_separator', __( 'Meta Button Content' ) ),        
        Field::make( 'number', 'meta_text_fs', __( 'Meta Font Size' ) )
            ->set_default_value(14)
            ->set_min(12)
            ->set_max(20)
            ->set_help_text( 'Set meta button font size - font size range is 12px to 20px' )
            ->set_width( 50 ),
        Field::make( 'radio', 'meta_font_weight', __( 'Meta Font Weight' ) )
            ->set_options( array( 
                '400' => __('Lightly Bold'), 
                '600' => __('Bold'),
                '700' => __('Heavy Bold'),
                '0' => __('None'),
                ) )
            ->set_width( 50 ),
        Field::make( 'separator', 'meta_active_separator', __( 'Active State' ) ),            
        Field::make( 'color', 'active_bg_color', __( 'Button Background Color' ) )
            ->set_alpha_enabled( true )
            ->set_width(33 ),
        Field::make( 'color', 'active_text_color', __( 'Button Text Color' ) )
            ->set_alpha_enabled( true )
            ->set_width(33 ),
        Field::make( 'color', 'active_border_color', __( 'Button Border Color' ) )
            ->set_alpha_enabled( true )
            ->set_width(33 )      
    ) )
    ->add_tab( __( 'Pagination Options' ), array(
        Field::make( 'separator', 'page_numbers_separator', __( 'Page Numbers' ) ),
        Field::make( 'color', 'numbers_color', __( 'Numbers Color' ) )
            ->set_alpha_enabled( true )
            ->set_width(33 ),          
        Field::make( 'number', 'numbers_fs', __( 'Numbers Font Size' ) )
            ->set_default_value(14)
            ->set_min(12)
            ->set_max(20)
            ->set_help_text( 'Set page numbers font size - font size range is 12px to 20px' )
            ->set_width( 33 ),
        Field::make( 'radio', 'numbers_font_weight', __( 'Numbers Font Weight' ) )
            ->set_options( array( 
                '400' => __('Lightly Bold'), 
                '600' => __('Bold'),
                '700' => __('Heavy Bold'),
                '0' => __('None'),
                ) )
            ->set_width( 33 ),
        Field::make( 'separator', 'current_separator', __( 'Current Number' ) )
            ->set_help_text('Use this section to style what the current number looks like when active'),            
        Field::make( 'color', 'current_bg_color', __( 'Current Background Color' ) )
            ->set_alpha_enabled( true )
            ->set_width(33 ),
        Field::make( 'color', 'current_text_color', __( 'Current Text Color' ) )
            ->set_alpha_enabled( true )
            ->set_width(33 ),
        Field::make( 'color', 'current_border_color', __( 'Current Border Color' ) )
            ->set_alpha_enabled( true )
            ->set_width(33 ),
        Field::make( 'separator', 'next_separator', __( 'Next Button' ) ),
        Field::make( 'icon', 'next_icon',  __( 'Next Icon' ))
            ->set_width( 33 )    
            ->add_fontawesome_options(),            
        Field::make( 'color', 'next_color', __( 'Icon Color' ) )
            ->set_alpha_enabled( true )
            ->set_width(33 ),
        Field::make( 'number', 'next_fs', __( 'Icon Size' ) )
            ->set_default_value(25)
            ->set_min(10)
            ->set_max(30)
            ->set_help_text( 'Set icon font size - font size range is 10px to 30px' )
            ->set_width( 33 ),       
        Field::make( 'separator', 'back_separator', __( 'Back Button' ) ),
        Field::make( 'icon', 'back_icon',  __( 'Back Icon' ))
            ->add_fontawesome_options()
            ->set_width(33 ),            
        Field::make( 'color', 'back_color', __( 'Icon Color' ) )
            ->set_alpha_enabled( true )
            ->set_width(33 ),
        Field::make( 'number', 'back_fs', __( 'Icon Size' ) )
            ->set_default_value(25)
            ->set_min(10)
            ->set_max(30)
            ->set_help_text( 'Set icon font size - font size range is 10px to 30px' )
            ->set_width( 33 ),   
    ) );
}


/*adding in style function to add carbon variables from page options */
function carbon_styles() {
	$checklist_title_color = carbon_get_theme_option( 'nav_title_color' );
	$checklist_title_fs = carbon_get_theme_option( 'title_font_size' );
	$checklist_title_weight = carbon_get_theme_option( 'title_font_weight' );

	$checkbox_active = carbon_get_theme_option( 'checklist_active_color' );

    $label_color = carbon_get_theme_option( 'checklist_label_color' );
	$label_fs = carbon_get_theme_option( 'checklist_label_fs' );
	$label_weight = carbon_get_theme_option( 'checklist_label_weight' );

	$card_bg = carbon_get_theme_option( 'card_background' );

	$card_title_color = carbon_get_theme_option( 'card_title_color' );
	$card_title_fs = carbon_get_theme_option( 'card_title_font_size' );
	$card_title_weight = carbon_get_theme_option( 'card_title_font_weight' );
	
	$card_text_color = carbon_get_theme_option( 'card_text_color' );
	$card_text_fs = carbon_get_theme_option( 'card_text_font_size' );
	$card_text_weight = carbon_get_theme_option( 'card_text_font_weight' );

    $meta_fs = carbon_get_theme_option( 'meta_text_fs' );
	$meta_weight = carbon_get_theme_option( 'meta_font_weight' );

    $active_bg_color = carbon_get_theme_option( 'active_bg_color' );
    $active_text_color = carbon_get_theme_option( 'active_text_color' );
    $active_border_color = carbon_get_theme_option( 'active_border_color' );

    $pagination_text_color = carbon_get_theme_option( 'numbers_color' );
	$pagination_text_fs = carbon_get_theme_option( 'numbers_fs' );
	$pagination_text_weight = carbon_get_theme_option( 'numbers_font_weight' );

    $current_bg_color = carbon_get_theme_option( 'current_bg_color' );
    $current_text_color = carbon_get_theme_option( 'current_text_color' );
    $current_border_color = carbon_get_theme_option( 'current_border_color' );

    $next_color = carbon_get_theme_option( 'next_color' );
	$next_fs = carbon_get_theme_option( 'next_fs' );

    $back_color = carbon_get_theme_option( 'back_color' );
	$back_fs = carbon_get_theme_option( 'back_fs' );

	echo '<style>
			.nav-filter-title{
				font-style: normal;
				font-weight: ' . $checklist_title_weight .';
				font-size: ' . $checklist_title_fs .'px;
				line-height: 16px;
				color: ' . $checklist_title_color .';
			} 			
            
            .bf-label{
                margin: 5px 0;
                font-weight: ' . $label_weight .';
                font-size: ' . $label_fs .'px;
                line-height: 16px;
                color: ' . $label_color .';;
                vertical-align: middle;
                justify-content: center;
            }

			input[type="checkbox"]:checked {
				background: ' . $checkbox_active .';
			}
						
			.card-item{
				width: 32%;
				background: ' . $card_bg .';
				box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.2);
				border-radius: 5px;
				margin-bottom: 30px;
			}

			.bf-header h2{
				font-weight: ' . $card_title_weight .' !important;
				font-size:  ' . $card_title_fs .'px !important;
				line-height: 25px;
				color: ' . $card_title_color .';
				margin-bottom: 20px;
			}
			
			.entry-summary p{
				font-style: normal;
				font-weight: ' . $card_text_weight .';
				font-size: ' . $card_text_fs .'px;
				line-height: 16px;
				color: ' . $card_text_color .';
			}

            .active{
                background: ' . $active_bg_color .';
                border-radius: 2px;
                text-transform: capitalize;
                padding: 5px 10px;
                color: ' . $active_text_color .';
                margin-right: 10px;
                font-weight: '. $meta_weight .';
                font-size: ' .$meta_fs .'px !important;
                border: 0.5px solid ' . $active_border_color .';
            }

            .inactive{
                font-size: ' .$meta_fs .'px !important;
            }

            .page-numbers{
                margin: 0 10px;
                font-weight: ' . $pagination_text_weight.';
                font-size: ' . $pagination_text_fs.'px;
                line-height: 16px;
                color: ' . $pagination_text_color .';
            }
            
            .current{
                box-shadow: 0px 1px 4px rgba(26, 26, 67, 0.1);
                border-radius: 4px;
                border: 1px solid '. $current_border_color .';
                padding: 8px;
                background: '. $current_bg_color .';
                color: '. $current_text_color .';
            }
            
            .next{
                color: '. $next_color .';
                font-size: '. $next_fs .'px;
            }
            
            .prev{
                color: '. $back_color .';
                font-size: '. $back_fs .'px;
            }

		</style>';
}
add_action( 'wp_head', 'carbon_styles' ); 
?>