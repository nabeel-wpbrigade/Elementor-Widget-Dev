<?php
/**
 * AZ Tile Elementor Widgets.
 *
 * @since 1.0.0
 */
class Dev_Widget_Base extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve AZ Tile widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'branches';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve BRANCHES widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Widget 1', 'aztiles' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve BRANCHES widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'fa fa-map';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the BRANCHES widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'dev-widgets' ];
	}

	/**
	 * Register BRANCHES widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {


		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Title', 'textdomain' ),
				'placeholder' => esc_html__( 'Enter your title', 'textdomain' ),
			]
		);

        $this->add_control(
			'hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $this->add_control(
            'unique-control-name',
            [
                'type' => \Elementor\Controls_Manager::TEXT,
                'label' => esc_html__( 'Control Label', 'textdomain' ),
                'label_block' => true,
            ]
        );
        
        $this->add_control(
			'more_options',
			[
				'label' => esc_html__( 'Additional Options', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'important_note',
			[
				'label' => esc_html__( 'Important Note', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::RAW_HTML,
				'raw' => esc_html__( 'A very important message to show in the panel.', 'textdomain' ),
				'content_classes' => 'your-class',
			]
		);

		$this->end_controls_section();

		
		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Style Section', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'space_between',
			[
				'type' => \Elementor\Controls_Manager::SLIDER,
				'label' => esc_html__( 'Spacing', 'textdomain' ),
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'desktop_default' => [
					'size' => 30,
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => 20,
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => 10,
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .widget-image' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
			'title_padding',
			[
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'label' => esc_html__( 'Padding', 'textdomain' ),
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .widget-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
			'content_align',
			[
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label' => esc_html__( 'Alignment', 'textdomain' ),
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
				'devices' => [ 'desktop', 'tablet' ],
				'prefix_class' => 'content-align-%s',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .title',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'title_background',
				'selector' => '{{WRAPPER}} .title',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'selector' => '{{WRAPPER}} .wrapper',
			]
		);
		$this->end_controls_section();

        $this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Style Section', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'popover-toggle',
			[
				'label' => esc_html__( 'Box', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'textdomain' ),
				'label_on' => esc_html__( 'Custom', 'textdomain' ),
				'return_value' => 'yes',
			]
		);

		$this->start_popover();
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'selector' => '{{WRAPPER}} .wrapper',
			]
		);
		$this->end_popover();

		$this->end_controls_section();




	}

	/**
	 * Render Manager widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings_for_display();
        echo $settings['title'];
	}
	
}