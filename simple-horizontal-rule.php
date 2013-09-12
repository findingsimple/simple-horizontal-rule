<?php
/*
Plugin Name: Simple Horizontal Rule
Plugin URI: http://plugins.findingsimple.com
Description: Simple plugin for adding the horizontal rule button to the WordPress editor 
Version: 1.0
Author: Finding Simple
Author URI: http://findingsimple.com
License: GPL2
*/
/*
Copyright 2013  Finding Simple  (email : plugins@findingsimple.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! class_exists( 'Simple_Horizontal_Rule' ) ) :

/**
 * Plugin Main Class.
 *
 */
class Simple_Horizontal_Rule {
    
    /**
     * Initialise
     */
    function Simple_Horizontal_Rule() {
        
        add_action( 'init', array( &$this , 'simple_hr_filter' ) );

    }

    /**
     * Apply appropriate hooks and filters to add the button
     */
    function simple_hr_filter() {

    	add_filter( 'mce_buttons', array( &$this , 'add_hr_button' ) );
 
    }  

    /**
     * Force add the hr button to the first row
     */ 
    function add_hr_button( $buttons ) {

        if ( !in_array( 'hr', $buttons ) )
            array_push( $buttons, 'hr' );

        return $buttons;

    }

}

$Simple_Horizontal_Rule = new Simple_Horizontal_Rule();

endif;