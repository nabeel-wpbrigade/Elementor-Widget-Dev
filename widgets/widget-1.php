<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Elementor_List_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'cta';
    }

    public function get_title() {
        return esc_html__( 'cta', 'textdomain' );
    }

    public function get_icon() {
        return 'eicon-menu-card';
    }

    public function get_categories() {
        return [ 'general' ];
    }

    public function get_keywords() {
        return [ 'cta', 'call' ];
    }

    public function get_script_depends() {
        return [ 'script-handle' ];
    }

    public function get_style_depends() {
        return [ 'style-handle' ];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__( 'Content', 'textdomain' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => esc_html__( 'Choose Image', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__( 'SUB Title', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__( 'Description', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'placeholder' => esc_html__( 'description', 'textdomain' ),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        $this->add_control(
            'button',
            [
                'label' => esc_html__( 'Button', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'button', 'textdomain' ),
            ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} button',
			]
		);

        /*********** Repeater **********/

        $this->add_control(
			'list',
			[
				'label' => esc_html__( 'List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'text',
						'label' => esc_html__( 'Text', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'placeholder' => esc_html__( 'List Item', 'textdomain' ),
					],
                    [
						'name' => 'img',
						'label' => esc_html__( 'Choose Image', 'textdomain' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                         ],
					],
                    [
						'name' => 'description2',
						'label' => esc_html__( 'Description', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'rows' => 10,
						'placeholder' => esc_html__( 'description', 'textdomain' ),
					],
                    [
						'name' => 'btn',
						'label' => esc_html__( 'Button', 'textdomain' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'placeholder' => esc_html__( 'button', 'textdomain' ),
					],
				],
				'default' => [
					[
						'text' => esc_html__( 'List Item #1', 'textdomain' ),
					],
				],
				'title_field' => '{{{ text }}}',
			]
		);
        

        $this->end_controls_section();


        /************ section ************/

        $this->start_controls_section(
			'info_section',
			[
				'label' => esc_html__( 'Info', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'website_link',
			[
				'label' => esc_html__( 'Link', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'textdomain' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

        $this->end_controls_section();

       /***************** Style Tab **************/

        $this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Style', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name' => 'thumbnail', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
				'exclude' => [ 'custom' ],
				'include' => [],
				'default' => 'large',
			]
		);

        $this->add_control(
			'padding',
			[
				'label' => esc_html__( 'Image Padding', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
			'text_align',
			[
				'label' => esc_html__( 'Text Align', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'textdomain' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'textdomain' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'textdomain' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'left',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .head' => 'text-align: {{VALUE}};',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .head',
			]
		);

        $this->add_control(
            'color',
            [
                'label' => esc_html__( 'Text Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#000000',
                'selectors' => [
                    '{{WRAPPER}} h3' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'des_color',
            [
                'label' => esc_html__( 'Description Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#000000',
                'selectors' => [
                    '{{WRAPPER}} .para' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();

    }


    protected function render() {

        $settings = $this->get_settings_for_display();
        
        // echo '<img src="' . esc_url( $settings['image']['url'] ) . '" alt="">';

        echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'thumbnail', 'image' );

        echo '<h3 class="head">' . $settings['title'] . '</h3>';

        echo '<p class="para">' . $settings['description'] . '</p>';

        echo '<button>' . $settings['button'] . '</button>';

        // info
        if ( ! empty( $settings['website_link']['url'] ) ) {
			$this->add_link_attributes( 'website_link', $settings['website_link'] );
		}

        ?>
            
        <div class="main">
                <div class="cards">
            
                <div class="card">
                    <?php   echo '<h4>' . $settings['subtitle'] . '</h4>';  ?>
                </div>
            
                <div class="card">
                <?php   echo '<h4>' . $settings['subtitle'] . '</h4>';  ?>
                </div>
            
                <div class="card">
                <?php   echo '<h4>' . $settings['subtitle'] . '</h4>';  ?>
                </div>
            
            </div>
        </div>
            
        <?php





// ************************ repeater

      ?>
 
        <div class="cards">
                    
		    <?php foreach ( $settings['list'] as $index => $item ) : ?>
			    <div class="card">
                    
                    <?php   echo '<h4>' . $item['text'] . '</h4>';  ?>
                    <?php   echo '<img src="' . esc_url( $item['img']['url'] ) . '" alt="">';  ?>
                    <?php   echo '<p>' . $item['description2'] . '</p>';  ?>
                    <?php   echo '<button>' . $item['btn'] . '</button>';  ?>
        
	            </div>
		    <?php endforeach; ?>
		
        </div>
 
      <?php

    }

}