
<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

include_once WP_CONTENT_DIR . '/QL_Du_An/enviroment_variables.php';
include_once getenv('DIR_MODELS') . '/ProjectCategory.php';


if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'twentytwentyfour' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfour' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_pattern_categories' );

// https://wholesomecode.net/using-php-to-render-a-block-in-the-wordpress-editor-gutenberg/
// https://developer.wordpress.org/reference/functions/register_block_type/

// $block_pattern_content = '<h1>123</h1> <script>alert("123")</script>';

// register_block_pattern(
//     'wholesomecode/example-block-pattern',
//     [
//         'categories'    => [
//             'team',
//         ],
//         'content'       => $block_pattern_content,
//         'description'   => 'An example block pattern',
//         'keywords'      => 'example',
//         'title'         => 'Example Block Pattern',
//         'viewportWidth' => 800,
//     ],
// );

// add_shortcode('ten', function(){
// 	return '123';
// });

// echo do_shortcode('[ten]');

// if (!current_user_can('administrator')) {
//     add_filter('show_admin_bar', '__return_false');
// }

add_filter('show_admin_bar', '__return_false');

function enqueue_my_script() {
    wp_enqueue_script('theme_script', get_theme_file_uri().'/index.js', array(), time(), true);
}

add_action('wp_enqueue_scripts', 'enqueue_my_script', 999);


class AdminMenu {
    public function pageSelect($page) {
        if($page === 'admin'){
			ob_start();

			$view = $_GET['view'] ?? null;

			if($view === 'image'){
				include_once getenv('DIR_VIEWS') . '/image/index.php';
			}
			else if($view === 'project-category'){
				include_once getenv('DIR_VIEWS') . '/projectCategory/index.php';
			}
			else if($view === 'permission'){
				include_once getenv('DIR_VIEWS') . '/permission/index.php';
			}
			else if($view === 'department'){
				include_once getenv('DIR_VIEWS') . '/department/index.php';
			}
			else if($view === 'team'){
				include_once getenv('DIR_VIEWS') . '/team/index.php';
			}
			else if($view === 'account'){
				include_once getenv('DIR_VIEWS') . '/account/index.php';
			}
			else if($view === 'qualification'){
				include_once getenv('DIR_VIEWS') . '/qualification/index.php';
			}
			else if($view === 'job'){
				include_once getenv('DIR_VIEWS') . '/job/index.php'; //
			}
			else if($view === 'staff'){
				include_once getenv('DIR_VIEWS') . '/staff/index.php'; //
			}
			else if($view === 'partner'){
				include_once getenv('DIR_VIEWS') . '/partner/index.php';
			}
			else if($view === 'contract'){
				include_once getenv('DIR_VIEWS') . '/contract/index.php'; //
			}
			else if($view === 'project'){
				include_once getenv('DIR_VIEWS') . '/project/index.php';
			}
			else if($view === 'event'){
				include_once getenv('DIR_VIEWS') . '/event/index.php';
			}

			$output = ob_get_contents();
	
			ob_end_clean();

			echo $output;
		}
    }

	public function SubmenuCategories($pageName){
		$base_url = 'http://localhost/wordpress/wp-admin/admin.php?page=Dashboard';
		$output = '';
		$output .= '<div class="dashboard-' . $pageName . '" style="padding: 0px 0px 10px 0px;">';
			$output .= '<a href=' . $base_url . '&view=' . $pageName .'>' . $pageName . '</a>';
		$output .= '</div>';
		return $output;
	}

	public function MenuCategories(){
		$output = '<div style="font-size: 14px;">' ;
		$output .= $this->SubmenuCategories('image');	
		$output .= $this->SubmenuCategories('project-category');	
		$output .= $this->SubmenuCategories('permission');	
		$output .= $this->SubmenuCategories('department');	
		$output .= $this->SubmenuCategories('team');	
		$output .= $this->SubmenuCategories('account');	
		$output .= $this->SubmenuCategories('qualification');	
		$output .= $this->SubmenuCategories('job');	
		$output .= $this->SubmenuCategories('staff');	
		$output .= $this->SubmenuCategories('partner');	
		$output .= $this->SubmenuCategories('contract');	
		$output .= $this->SubmenuCategories('project');	
		$output .= $this->SubmenuCategories('event');	
		$output .= '</div>';
		return $output;
	}


    public function mainMenuSetup() {
        add_menu_page(
            'Dashboard',
            $this->MenuCategories(),
            'manage_options',
            'Dashboard',
            array($this, 'adminPage'),
            '',
            99999
        );
    }
	

    public function adminPage() {
        $this->pageSelect('admin');
    }
}

$adminMenu = new AdminMenu();
add_action('admin_menu', array($adminMenu, 'mainMenuSetup'));


add_shortcode('GetAllProjectCategory', function($arr){
	$output = '<div class="w-[200px]">' ;
		foreach(ProjectCategory::GetAllProjectCategory() as $key => $projectCategory){
			$output .= '<a href="' . 'http://localhost/wordpress?projectCategoryID=' . $projectCategory->ID . '">' .
			'<div class="text-[1.5rem] p-[8px_0_8px_0] hover:border-solid ' . 
			'hover:border-[2px] hover:border-orange-600">'
			. $projectCategory->Name .
			'</div>' .
			'</a>' ;
		}
	$output .= '</div>';
	return $output;
});

function custom_styles() {
    echo '<style>
        /* Ẩn biểu tượng bánh răng cho tất cả submenu */
		.wp-menu-image.dashicons-before.dashicons-admin-generic{
            display: none;
        }
    </style>';
}

// Animation Loading Page
add_action('admin_enqueue_scripts', 'custom_styles');
add_action('wp_enqueue_scripts', function(){
	echo '
	<div class="loading">
    	<div class="pie loading-pie-start" style="font-size: 40px;"></div>
	</div>
	';
	wp_enqueue_style( 'theme_style', get_stylesheet_uri(), array(), time());
});


// Hàm để thực hiện một số tác vụ khi một người dùng mới được tạo
// function my_new_user_action( $user_id ) {
//     // // Bạn có thể truy cập thông tin của người dùng mới bằng user ID
//     // $user_info = get_userdata( $user_id );
//     $user_info = get_userdata( $user_id );

//     // // Ví dụ: Gửi một email thông báo đến admin
//     // $admin_email = get_option( 'admin_email' );
//     // $subject = 'Một người dùng mới đã đăng ký';
//     // $message = "Một người dùng mới với email {$user_info->user_email} vừa đăng ký.";

//     // wp_mail( $admin_email, $subject, $message );

//     // // Thêm bất kỳ tác vụ tùy chỉnh nào bạn muốn thực hiện ở đây
// 	$thongBao = $user_info->user_nicename . ' ' . $user_info->password;
// 	echo "<script type='text/javascript'>alert('$thongBao');</script>";
// 	exit;
// }

// // Thêm hành động vào hook 'user_register'
// add_action( 'user_register', 'my_new_user_action' );


// $mat_khau_goc = 'matkhau123'; // Mật khẩu mà bạn muốn băm
// $mat_khau_bam = wp_hash_password($mat_khau_goc);


// $mat_khau_nguoi_dung = 'matkhauNhapVao'; // Mật khẩu người dùng nhập vào để đăng nhập
// $mat_khau_bam_trong_csd = 'matKhauBamLuuTru'; // Mật khẩu đã băm lưu trữ trong cơ sở dữ liệu

// if (wp_check_password($mat_khau_nguoi_dung, $mat_khau_bam_trong_csd)) {
//     // Mật khẩu đúng
// } else {
//     // Mật khẩu không đúng
// }

// add_shortcode('ten', function($arr){
// 	return '123';
// });

// echo do_shortcode('[ten]');

// // var_dump(ProjectCategory::GetAllProjectCategory());
// exit;

?>