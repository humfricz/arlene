<?php
/*
================================================================================================
Customizer custom control - Color Palette
It display a 6-color palette in the theme customization panel
================================================================================================
@package        Arlene
@link           https://codex.wordpress.org/Theme_Customization_API
@copyright      Copyright (C) 2017. Samuel Guebo
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.co/)
================================================================================================
*/
if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;

/**
 * Class to create a custom layout control
 */
class Palette_Custom_Control extends WP_Customize_Control
{
      /**
       * Render the content on the theme customizer page
       */
      public function render_content()
       {
            ?>  <style>
                    #palette{
                        margin-top:10px;
                    }
                    #palette a{
                        float:left;
                        margin:4px;
                        width:75px;
                        height:75px;
                        display: block;
                    }
                    #palette a.selected{
                        filter: contrast(90%);
                            -webkit-filter: contrast(90%);
                            -moz-filter: contrast(90%);
                            -o-filter: contrast(90%);
                            -ms-filter: contrast(200%);
                        
                    }
                    #palette a input[type=radio]{
                        display: none;
                    }
                
                    #palette .chocolate {
                        background: #5f3633;
                    }
                    #palette .blue {
                        background: #0e94c9;
                    }
                    #palette .green {
                        background: #309864;
                    }
                    #palette .orange {
                        background: #e34a00;
                    }
                    #palette .yellow {
                        background: #f68700;
                    }
                    #palette .red {
                        background: #d8052e;
                    }
                    
                </style>

                <label>
                      <?php echo 'currently color is: '.get_theme_mod('arlene_theme_color'); ?>
                  <h1 class="customize-layout-control">
                      <?php echo esc_html( $this->label ); ?>
                    </h1>
                  <div id="palette">
                      <a class="green" href="#">
                        <input type="radio" name="<?php echo $this->id; ?>" <?php $this->link(); ?> id="<?php echo $this->id; ?>" value="" />
                    </a>
                    <a class="blue" href="#">
                        <input type="radio" name="<?php echo $this->id; ?>" <?php $this->link(); ?> id="<?php echo $this->id; ?>" value="blue" />
                    </a>
                    <a class="chocolate" href="#">
                      <input type="radio" name="<?php echo $this->id; ?>" <?php $this->link(); ?> id="<?php echo $this->id; ?>" value="chocolate" />
                    </a>
                    <a class="orange" href="#">
                        <input type="radio" name="<?php echo $this->id; ?>" <?php $this->link(); ?> id="<?php echo $this->id; ?>" value="orange" />
                    </a>
                    <a class="red" href="#">
                        <input type="radio" name="<?php echo $this->id; ?>" <?php $this->link(); ?> id="<?php echo $this->id; ?>" value="red" />
                    </a>
                    <a class="yellow" href="#">
                        <input type="radio" name="<?php echo $this->id; ?>" <?php $this->link(); ?> value="yellow" />
                    </a>
                  </div>
                </label>
                <script>
                    // Non conflict mode
                jQuery(document).ready(function ($) {
                    $('div#palette a').click(function (e) {
                        $(this).siblings().removeClass('selected');
                        $(this).addClass('selected');
                        var checkbox = $(this).children('input[type=radio]');
                        //checkbox.prop('checked', true);
                        checkbox.attr('checked', true);
            
                        var setting = checkbox.attr( 'data-customize-setting-link' );
                        // Get the value of the currently-checked radio input.
                        var color = checkbox.val();
                        // Set the new value.
                        wp.customize( setting, function( obj ) {

                            obj.set( color );
                        } );
                                
                        e.preventDefault();

                    });
                });
                </script>
            <?php
       }
}
?>