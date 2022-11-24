<?php
namespace Hydraboost_Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor Hydraboost_Audio
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Hydraboost_Audio extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve oEmbed widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'hydraboost-audio';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve oEmbed widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Audio', 'hydraboost-core' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve oEmbed widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-code';
	}

	

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the oEmbed widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'basic', 'hydraboost-category' ];
	}

	// Load CSS
	// public function get_style_depends() {

	// 	wp_register_style( 'owl-carousel-css', plugins_url( '../assets/css/owl.carousel.min.css', __FILE__ ));

	// 	return [
	// 		'owl-carousel-css',
	// 	];

	// }

	// Load JS
	// public function get_script_depends() {

	// 	wp_register_script( 'owl-carousel-js', plugins_url( '../assets/js/owl.carousel.min.js', __FILE__ ), [ 'jquery' ] );

	// 	return [
	// 		'owl-carousel-js',
	// 	];

	// }


	/**
	 * Register oEmbed widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'hydraboost-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				]
			);

			$this->add_control(
				'image',
				[
					'label' => esc_html__( 'Choose Image', 'admissionsight-addon' ),
					'type' => \Elementor\Controls_Manager::MEDIA,
					'default' => [
						'url' => \Elementor\Utils::get_placeholder_image_src(),
					],
				]
			);
			


		$this->end_controls_section();
			// $repeater = new \Elementor\Repeater();

		// $repeater->add_control(
		// 	'service_image',
		// 	[
		// 		'label' => esc_html__( 'Choose Image', 'hydraboost-core' ),
		// 		'type' => \Elementor\Controls_Manager::MEDIA,
		// 		'default' => [
		// 			'url' => \Elementor\Utils::get_placeholder_image_src(),
		// 		],
		// 	]
		// );
		// $this->add_control(
		// 	'image',
		// 	[
		// 		'label' => esc_html__( 'Choose Image', 'admissionsight-addon' ),
		// 		'type' => \Elementor\Controls_Manager::MEDIA,
		// 		'default' => [
		// 			'url' => \Elementor\Utils::get_placeholder_image_src(),
		// 		],
		// 	]
		// );

		// $repeater->add_control(
		// 	'list_title', [
		// 		'label' => esc_html__( 'Title', 'hydraboost-core' ),
		// 		'type' => \Elementor\Controls_Manager::TEXT,
		// 		'default' => esc_html__( 'List Title' , 'hydraboost-core' ),
		// 		'label_block' => true,
		// 	]
		// );

		

		// COLOR CSS
        // $this->start_controls_section(
		// 	'content_section_style',
		// 	[
		// 		'label' => __( 'Content', 'hydraboost-core' ),
		// 		'tab' => \Elementor\Controls_Manager::TAB_STYLE,
		// 	]
		// );

		// Title CSS
		// $this->add_control(
		// 	'list_title_color',
		// 	[
		// 		'label' => __( 'Title Color', 'hydraboost-core' ),
		// 		'type' => \Elementor\Controls_Manager::COLOR,
		// 		// 'scheme' => [
		// 		// 	'type' => \Elementor\Scheme_Color::get_type(),
		// 		// 	'value' => \Elementor\Scheme_Color::COLOR_1,
		// 		// ],
		// 		'selectors' => [
		// 			'{{WRAPPER}} .single-item h2' => 'color: {{VALUE}}',
		// 		],
		// 	]
		// );

		
		$this->end_controls_section();

	}

	/**
	 * Render oEmbed widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings_for_display();

	?>
	<div class="audio">
		<h2>Audiuo</h2>
		
		<img src="<?php echo esc_html( $settings['image']['url'] );  ?>" alt="">
	</div>
	<?php
	}
}