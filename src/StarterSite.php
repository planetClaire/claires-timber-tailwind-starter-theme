<?php

namespace App;

use Timber\Site;
use Timber\Timber;

/**
 * Class StarterSite
 */
class StarterSite extends Site
{
	public function __construct()
	{
		add_action('after_setup_theme', array($this, 'theme_supports'));
		add_action('init', array($this, 'register_post_types'));
		add_action('init', array($this, 'register_taxonomies'));

		add_filter('timber/context', array($this, 'add_to_context'));
		add_filter('timber/twig', array($this, 'add_to_twig'));
		add_filter('timber/twig/environment/options', [$this, 'update_twig_environment_options']);

		add_action('init', array($this, 'enqueue_scripts'));

		parent::__construct();
	}

	/**
	 * This is where you can register custom post types.
	 */
	public function register_post_types()
	{
	}

	/**
	 * This is where you can register custom taxonomies.
	 */
	public function register_taxonomies()
	{
	}

	/**
	 * This is where you add some context
	 *
	 * @param string $context context['this'] Being the Twig's {{ this }}.
	 */
	public function add_to_context($context)
	{
		$context['foo']   = 'bar';
		$context['stuff'] = 'I am a value set in your functions.php file';
		$context['notes'] = 'These values are available everytime you call Timber::context();';
		$context['menu']  = Timber::get_menu('primary');
		$context['site']  = $this;

		return $context;
	}

	public function theme_supports()
	{
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'audio',
			)
		);

		add_theme_support('menus');

		// customise this, see https://tailwindcss.com/docs/customizing-colors
		add_theme_support('editor-color-palette', array(
			array(
				'name' => esc_attr__('white', 'themeLangDomain'),
				'slug' => 'white',
				'color' => '#ffffff',
			),
			array(
				'name' => esc_attr__('gray', 'themeLangDomain'),
				'slug' => 'gray',
				'color' => '#4B5563',
			),
			array(
				'name' => esc_attr__('red', 'themeLangDomain'),
				'slug' => 'red',
				'color' => '#DC2626',
			),
			array(
				'name' => esc_attr__('amber', 'themeLangDomain'),
				'slug' => 'amber',
				'color' => '#D97706',
			),
			array(
				'name' => esc_attr__('emerald', 'themeLangDomain'),
				'slug' => 'emerald',
				'color' => '#059669',
			),
			array(
				'name' => esc_attr__('blue', 'themeLangDomain'),
				'slug' => 'blue',
				'color' => '#2563EB',
			),
			array(
				'name' => esc_attr__('indigo', 'themeLangDomain'),
				'slug' => 'indigo',
				'color' => '#4F46E5',
			),
			array(
				'name' => esc_attr__('violet', 'themeLangDomain'),
				'slug' => 'violet',
				'color' => '#7C3AED',
			),
			array(
				'name' => esc_attr__('pink', 'themeLangDomain'),
				'slug' => 'pink',
				'color' => '#DB2777',
			),
		));
	}

	/**
	 * This would return 'foo bar!'.
	 *
	 * @param string $text being 'foo', then returned 'foo bar!'.
	 */
	public function myfoo($text)
	{
		$text .= ' bar!';
		return $text;
	}

	/**
	 * This is where you can add your own functions to twig.
	 *
	 * @param Twig\Environment $twig get extension.
	 */
	public function add_to_twig($twig)
	{
		/**
		 * Required when you want to use Twig’s template_from_string.
		 * @link https://twig.symfony.com/doc/3.x/functions/template_from_string.html
		 */
		// $twig->addExtension( new Twig\Extension\StringLoaderExtension() );

		$twig->addFilter(new \Twig\TwigFilter('myfoo', [$this, 'myfoo']));

		return $twig;
	}

	/**
	 * Updates Twig environment options.
	 *
	 * @link https://twig.symfony.com/doc/2.x/api.html#environment-options
	 *
	 * @param array $options An array of environment options.
	 *
	 * @return array
	 */
	function update_twig_environment_options($options)
	{
		// $options['autoescape'] = true;

		return $options;
	}

	function enqueue_scripts()
	{
		$ext = 'development';
		// WP_ENV constant will be defined if you make use of https://github.com/studio24/wordpress-multi-env-config
		if (defined('WP_ENV')) {
			$ext = WP_ENV == 'development' ? 'development' : 'production.min';
		}
		wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.' . $ext . '.js', '', '1.0', true);
	}
}
