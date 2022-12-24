<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Elementor_Test_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'swiper';
	}

	public function get_title() {
		return esc_html__( 'Swiper', 'textdomain' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'slider', 'swiper' ];
	}

    public function get_script_depends() {
        return [ 'script-handle' ];
    }

    public function get_style_depends() {
        return [ 'style-handle' ];
    }

    protected function register_controls() {

		$this->start_controls_section();

		$this->add_control();

		$this->end_controls_section();

	}

    protected function render() {

        ?>
            
        <div class="main">
                <div class="cards">
                
                <div class="card">
                    
                </div>
                
                <div class="card">
                
                </div>
                
                <div class="card">
                
                </div>
            
            </div>
        </div>
            
        <?php

    }

}