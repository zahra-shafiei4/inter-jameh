<?php
/**
 * The site's entry point.
 *
 * Loads the relevant template part,
 * the loop is executed (when needed) by the relevant template part.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}



get_header();

$is_elementor_theme_exist = function_exists( 'elementor_theme_do_location' );

if ( is_singular() ) {
	if ( ! $is_elementor_theme_exist || ! elementor_theme_do_location( 'single' ) ) {
		get_template_part( 'template-parts/single' );
	}
} elseif ( is_archive() || is_home() ) {
	if ( ! $is_elementor_theme_exist || ! elementor_theme_do_location( 'archive' ) ) {
		//get_template_part( 'template-parts/archive' );
	}
} elseif ( is_search() ) {
	if ( ! $is_elementor_theme_exist || ! elementor_theme_do_location( 'archive' ) ) {
		get_template_part( 'template-parts/search' );
	}
} else {
	if ( ! $is_elementor_theme_exist || ! elementor_theme_do_location( 'single' ) ) {
		get_template_part( 'template-parts/404' );
	}
}

//if ( is_front_page() && is_home() ) {

if ( is_home() ):

/*

	$scientific_event = array(
		'category_name' => 'scientific_event',
		'posts_per_page' => 10,
		'order'          => 'DESC',    
	);
	
	$posts = get_posts( $scientific_event );
	
	if ( $posts ) {
		foreach ( $posts as $post ) {
			setup_postdata( $post ); ?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div><?php the_excerpt(); ?></div>
<hr />

<?php }
		wp_reset_postdata();
	} else {
		echo 'هیچ پستی در این دسته‌بندی وجود ندارد. رویداد<br>';
	}

    */












?>
<!-- Sidebar in mobile screen -->
<div id=" mobile__sidebar" class="mobile__sidebar hidden md:hidden relative z-30">
  <!-- Mobile sidebar overlay -->
  <div id="mobile__sidebar-Bg" class="fixed z-0 inset-0 bg-slate-400 bg-opacity-75 transition-opacity"></div>
  <!-- End mobile sidebar overlay -->
  <div id="mobile__sidebar-nav" class="pointer-events-none fixed inset-y-0 -right-full flex w-full xs:w-3/4 sm:w-2/4">
    <!-- Slide-over panel, show/hide based on slide-over state. -->
    <div class="pointer-events-auto relative w-screen">
      <!-- Close button, show/hide based on slide-over state. -->
      <div class="flex h-full flex-col overflow-y-scroll bg-white py-4 dark:bg-dark-800 dark:text-slate-400">
        <div class="flex justify-between items-center px-4 ">
          <img class="bg-white h-12" src="files/logo-dark.png" alt="">
          <div class="flex gap-x-3">
            <!-- Theme switcher in mobile mode -->
            <div
              class="mobile__theme-switcher bg-gray-100 text-slate-500 p-3 rounded-full dark:bg-white/5 dark:text-white">
              <!-- sun icon -->
              <svg fill="currentColor" class="w-6 h-6 hidden dark:inline-block" viewBox="0 0 16 16">
                <path
                  d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708">
                </path>
              </svg>
              <!-- moon icon -->
              <svg fill="currentColor" class="w-6 h-6 dark:hidden" viewBox="0 0 16 16">
                <path
                  d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278M4.858 1.311A7.27 7.27 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.32 7.32 0 0 0 5.205-2.162q-.506.063-1.029.063c-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286">
                </path>
              </svg>
            </div>
            <!-- End theme switcher in mobile mode -->
            <div id="mobile__sidebar__close-btn"
              class="bg-gray-100 text-slate-500 p-3 rounded-full dark:bg-white/5 dark:text-white">
              <svg fill="currentColor" class="x-6 h-6" viewBox="0 0 16 16">
                <path
                  d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z">
                </path>
              </svg>
            </div>
          </div>
        </div>

        <div class="px-4 mt-6">
          <div class="flex items-baseline justify-between text-sm">
            <h1 class="px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg dark:text-black">
              دانشگاه شهید امینی
            </h1>
            <div class="md:block relative" x-data="{lang: false}">
              <div x-on:click="lang = !lang"
                class="bg-red-200 py-1 space-x-4 px-3 pl-7 text-sm rounded-xl dark:text-black"> فارسی -
                fa </div>
              <ul class="absolute -top-20 left-0 rounded-xl bg-red-200 min-w-28 text-sm dark:text-black" x-show="lang"
                x-transition.origin.bottom="" @click.outside="lang=false" style="display: none;">
                <li
                  class="p-2 hover:text-blue-600 dark:hover:text-blue-600 transition-all duration-200 ease-linear hover:mr-2">
                  <a href="/fa">
                    فارسی - fa
                  </a>
                </li>
                <li
                  class="p-2 hover:text-blue-600 dark:hover:text-blue-600 transition-all duration-200 ease-linear hover:mr-2">
                  <a href="/en">
                    انگلیسی - en
                  </a>
                </li>
              </ul>
              <svg class="absolute top-1 left-1 text-black pointer-events-none h-4 w-4" viewBox="0 0 16 16"
                fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                  clip-rule="evenodd"></path>
              </svg>
            </div>
          </div>
          <!-- <span class="text-xs text-center">
                        نسخه : ۱.۰۰
                    </span> -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End sidebar in mobile screen -->

<header class="fixed top-0 z-20 w-full">
  <div class="flex gap-2 items-center justify-between p-3 shadow-lg bg-white/80 relative backdrop-blur-lg border-b border-slate-200 dark:border-slate-800 dark:bg-dark-800">
   
    <div class="md:hidden bg-gray-100 text-slate-500 rounded-full dark:bg-white/5 dark:text-white">
      <button id="sidebar-btn" class="p-3 rounded-full">
        <svg fill="currentColor" class="w-6 h-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1792 1792" xml:space="preserve">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier"> <title>fiction</title> 
            <path d="M1673.9,1363.2L1673.9,1363.2c0,52.3-42.4,94.3-94.3,94.3H212.7c-52.3,0-94.3-42.4-94.3-94.3l0,0 c0-52.3,42.4-94.3,94.3-94.3h1366.8C1631.5,1268.5,1673.9,1310.9,1673.9,1363.2z"></path>
            <path d="M1673.9,895.6L1673.9,895.6c0,52.3-42.4,94.3-94.3,94.3H659c-52.3,0-94.3-42.4-94.3-94.3l0,0c0-52.3,42.4-94.3,94.3-94.3 h920.6C1631.5,800.8,1673.9,843.2,1673.9,895.6z"></path> 
            <path d="M1673.9,427.9L1673.9,427.9c0,52.3-42.4,94.3-94.3,94.3H212.7c-52.3,0-94.3-42.4-94.3-94.3l0,0c0-52.3,42.4-94.3,94.3-94.3 h1366.8C1631.5,333.2,1673.9,375.6,1673.9,427.9z"></path> 
          </g>
        </svg>
      </button>
    </div>

    <div>
      <img src="files/logo-dark.png" alt="logo" class="w-12 bg-white">
    </div>

    <div class="hidden md:block">
      <input type="text" placeholder="... جست و جو "
        class="w-24 md:w-80 bg-slate-200 placeholder:text-slate-800 text-xs text-right py-3 px- border-0 rounded-xl ">
        <!--border-none outline-none  -->
    </div>

    <div class="flex gap-4 items-center">
      <!-- Theme switcher -->
      <div
        class="mobile__theme-switcher hidden md:block bg-gray-100 text-slate-500 p-3 rounded-full dark:bg-white/5 dark:text-white">
        <!-- sun icon -->
        <svg fill="currentColor" class="w-6 h-6 hidden dark:inline-block" viewBox="0 0 16 16">
          <path
            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708">
          </path>
        </svg>
        <!-- moon icon -->
        <svg fill="currentColor" class="w-6 h-6 dark:hidden" viewBox="0 0 16 16">
          <path
            d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278M4.858 1.311A7.27 7.27 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.32 7.32 0 0 0 5.205-2.162q-.506.063-1.029.063c-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286">
          </path>
        </svg>
      </div>
      <!-- End theme switcher -->

      <!-- sign up / login in mobile mode -->
      <div class="md:hidden bg-gray-100 text-slate-500 rounded-full dark:bg-white/5 dark:text-white">
        <!-- sign up / login icon -->
        <a class="block p-3 rounded-full" href="#">
          <svg fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
            <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1"></path>
            <path
              d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z">
            </path>
          </svg>
        </a>
      </div>
      <!-- End sign up / login in mobile mode -->

      <div class="hidden md:block relative" x-data="{lang: false}">
        <span x-on:click="lang = !lang" class="bg-slate-200 p-3 space-x-4 pl-7 text-xs rounded-xl"> fa - فارسی  
        </span>
        <ul class="absolute top-10 bg-slate-200 min-w-24 text-xs rounded-xl" x-show="lang" x-transition.origin.top=""
          @click.outside="lang=false" style="display: none;">
          <li
            class="p-2 hover:text-blue-600 dark:hover:text-blue-600 transition-all duration-400 ease-linear">
            <a href="#">
              fa - فارسی 
            </a>
          </li>
          <li
            class="p-2 hover:text-blue-600 dark:hover:text-blue-600 transition-all duration-400 ease-linear">
            <a href="#">
              en - انگلیسی
            </a>
          </li>
        </ul>
        <svg class="absolute top-1 left-2 pointer-events-none h-4 w-4" viewBox="0 0 16 16" fill="currentColor"
          aria-hidden="true">
          <path fill-rule="evenodd"
            d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
            clip-rule="evenodd"></path>
        </svg>
      </div>

      <div class="hidden md:flex">
        <a href="#" class="flex items-center gap-2 bg-slate-200 text-slate-800 p-3 pl-6 text-xs rounded-xl">
          <span>ورود</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z">
            </path>
            <path fill-rule="evenodd"
              d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z">
            </path>
          </svg>
        </a>
        <a href="#" class="flex items-center gap-2 bg-blue-500 hover:bg-blue-400 transition-all text-white mx-5 p-3 text-xs rounded-xl">
          <span>ثبت نام</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add"
            viewBox="0 0 16 16">
            <path
              d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4">
            </path>
            <path
              d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z">
            </path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</header>

<main class="container mx-auto dark:bg-dark-850 z-10 pt-24">
  <!-- slider section -->
  <section class="relative">
    <!-- slider -->
    <div id="my-slider" class=""> 
      <div class="">
        <img class="max-h-96 md:max-h-[480px] sm:h-full w-full rounded-2xl" src="./assets/images/001.jpg" alt="">
      </div>
      <div class="">
        <img class="max-h-96 md:max-h-[480px] sm:h-full w-full rounded-2xl" src="./assets/images/002.jpg" alt="">
      </div>
      <div class="">
        <img class="max-h-96 md:max-h-[480px] sm:h-full w-full rounded-2xl" src="./assets/images/003.jpg" alt="">
      </div>
    </div> 
    <!-- control buttons -->
    <div class="controls" style="color:#3b82f6;" id="slider-controls" tabindex="0">
      <div class="absolute top-1/2 left-0 h-12 w-12 p-2 m-2 bg-gray-100 rounded-full" style="transform: translateY(-100%);" data-controls="prev" tabindex="-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
        </svg>
      </div>
      <div class="absolute top-1/2 right-0 h-12 w-12 p-2 m-2 bg-gray-100 rounded-full" style="transform: translateY(-100%);" data-controls="next" tabindex="-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"  viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
        </svg>       
      </div>
    </div>
  </section>
  <script>
    const slider = tns({

          "container": '#my-slider',
          "loop": true,
          "items": 1,
          "slideBy": 'page',
          "center": true,
          "nav": false,  
          "mouseDrag": true,
          "arrowKeys": true,  
          "autoplay": true,
          "speed": 400,
          "autoplayButtonOutput": false,
          "lazyload": true,
          "controlsContainer": "#slider-controls",

          });
  </script>
  <!-- End slider section -->

  <!-- Introduce section -->
  <section class="-mt-12 relative z-10 hidden lg:block">
    <div class="flex flex-row justify-around">
      <div class="w-80 flex flex-row items-stretch rounded-xl bg-gradient-to-tl from-blue-500 from-50% to-slate-100">
        <a href="#" class="flex items-center h-full text-3xl text-white p-4">
          <svg fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
            <path
              d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z">
            </path>
            <path
              d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z">
            </path>
          </svg>
        </a>
        <h3 class="flex flex-col gap-y-2 text-sm text-white p-4 float-right">
          <a href="#" class="w-fit px-2 py-1.5 rounded-xl text-slate-800 bg-white text-sm"> مراکز وابسته
          </a>
          <a href="#">مراکز وابسته</a>
        </h3>
      </div>
      <div class="w-80 flex flex-row items-stretch rounded-xl bg-gradient-to-tl from-blue-500 from-50% to-slate-100">
        <a href="#" class="flex items-center h-full text-3xl text-white p-4">
          <svg fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
            <path
              d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022M6 8.694 1 10.36V15h5zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5z">
            </path>
            <path
              d="M2 11h1v1H2zm2 0h1v1H4zm-2 2h1v1H2zm2 0h1v1H4zm4-4h1v1H8zm2 0h1v1h-1zm-2 2h1v1H8zm2 0h1v1h-1zm2-2h1v1h-1zm0 2h1v1h-1zM8 7h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zM8 5h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zm0-2h1v1h-1z">
            </path>
          </svg>
        </a>
        <h3 class="flex flex-col gap-y-2 text-sm text-white p-4 relative right-0">
          <a href="#" class="w-fit px-2 py-1.5 rounded-xl text-slate-800 bg-white text-sm"> بخش های
            مختلف </a>
          <a href="#"> آشنایی با بخش های مختلف دانشگاه </a>
        </h3>
      </div>
      <div class="w-80 flex flex-row items-stretch rounded-xl bg-gradient-to-tl from-blue-500 from-50% to-slate-100">
        <a href="#" class="flex items-center h-full text-3xl text-white p-4">
          <svg fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0">
            </path>
            <path
              d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2">
            </path>
            <path
              d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z">
            </path>
          </svg>
        </a>
        <h3 class="flex flex-col gap-y-2 text-sm text-white p-4 text-right">
          <a href="#" class="w-fit px-2 py-1.5 rounded-xl text-slate-800 bg-white text-sm"> جذب و پذیرش
          </a>
          <a href="#"> نحوه پذیرش و زمان ثبت نام </a>
        </h3>
      </div>
    </div>
  </section>
  <!-- End Introduce section -->

  <!-- News section -->
  <section class="mt-10">
    <!-- News section header -->
    <div class="flex items-center justify-between bg-gradient-to-l from-red-200 to-transparent p-4 sm:pr-5 rounded-xl">
      <div class="flex items-baseline sm:gap-x-3">
        <div class="flex items-center gap-1">
          <span class="hidden sm:inline-block w-2 h-2 bg-red-500 rounded-full"></span>
          <span class="hidden sm:inline-block w-3 h-3 bg-red-500 rounded-full"></span>
        </div>
        <h2 class="text-2xl font-bold">
          <?=get_term(pll_get_term( get_term_by( 'slug', 'scientific_event', 'category' )->term_id))->name;?></h2>
      </div>
      <a href="#" class="flex items-center group bg-white rounded-xl">
          <span
            class="h-10 leading-9 pl-3 transition-all z-10 text-sm"><?=get_term(pll_get_term( get_term_by( 'slug', 'international_news', 'category' )->term_id))->name;?></span>
            <svg class=" h-10 leading-9  p-2 transition-all" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.00 512.00" xml:space="preserve" fill="#000000" stroke="#000000" stroke-width="0.0051199900000000005">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier"> 
                <path style="fill:#ef4444;" d="M330.917,503.264c4.502,5.629,11.241,8.735,18.177,8.735c2.572,0,5.176-0.428,7.699-1.314 c9.328-3.271,15.569-12.077,15.569-21.96V23.273c0-9.883-6.242-18.689-15.569-21.96c-9.323-3.272-19.701-0.295-25.876,7.422 L144.737,241.468c-6.8,8.501-6.8,20.578,0,29.077L330.917,503.264z"></path>
              </g>
            </svg>        
          </a>
    </div>
    <!-- News section body -->
    <div class="mt-6 rounded-xl bg-gradient-to-br from-transparent from-60% to-red-200 dark:to-dark-900">
      <!-- Start news slider -->
      <div class="swiper news-slider p-5 swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper" id="swiper-wrapper-6e077e1052bb863d1" aria-live="polite">
          <!-- Slides -->

          <?php
                          // گرفتن زبان فعلی با استفاده از Polylang
                          $current_lang = pll_current_language();

                          // تنظیمات WP_Query برای گرفتن پست‌های یک دسته‌بندی خاص
                          $args = array(
                              'post_type' => 'post', // نوع پست (پست‌های استاندارد)
                              'posts_per_page' => 5, // تعداد پست‌ها
                              'category_name' => 'scientific_event', // نام دسته‌بندی (slug)
                              'lang' => $current_lang, // زبان فعلی
                          );
                          $query = new WP_Query( $args );

                          if ( $query->have_posts() ) : 
                              while ( $query->have_posts() ) : $query->the_post(); 
                                  ?>

          <div class="swiper-slide swiper-slide-active" style="width: 356px; margin-left: 16px;" role="group"
            aria-label="1 / 5">
            <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
              <div class="relative">
                <a href="<?=the_permalink()?>">
                  <img src="<?=the_post_thumbnail_url()?>" alt="" class="w-full h-[180px] rounded-xl">
                </a>
                <div
                  class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                  <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                    <path
                      d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z">
                    </path>
                    <path
                      d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5">
                    </path>
                  </svg>
                  <span>۷</span>
                </div>
              </div>
              <div
                class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"></path>
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"></path>
                </svg>
                <span>۲۵ تیر ۱۴۰۳</span>
              </div>
              <div class="mt-3">
                <h3 class="line-clamp-2 dark:text-slate-200">
                  <a href="<?=the_permalink()?>"><?=the_title()?></a>
                </h3>
                <span class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                  <p class="line-clamp-3"><?=the_excerpt()?></p>
                </div>
              </div>
            </div>
          </div>

          <?php
                              endwhile;
                              wp_reset_postdata();
                          else :
                              echo 'No posts found';
                          endif;
                          ?>

        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev swiper-button-disabled swiper-button-lock" tabindex="-1" role="button"
          aria-label="Previous slide" aria-controls="swiper-wrapper-0c104f6ef995b9531" aria-disabled="true"></div>
        <div class="swiper-button-next swiper-button-disabled swiper-button-lock" tabindex="-1" role="button"
          aria-label="Next slide" aria-controls="swiper-wrapper-0c104f6ef995b9531" aria-disabled="true"></div>

        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
      <!-- End news slider -->
    </div>
  </section>
  <!-- End news section -->

  <!-- News section -->
  <section class="mt-10">
    <!-- News section header -->
    <div class="flex items-center justify-between bg-gradient-to-l from-blue-200 to-transparent p-4 sm:pr-5 rounded-xl">
      <div class="flex items-baseline sm:gap-x-3">
        <div class="flex items-center gap-1">
          <span class="hidden sm:inline-block w-2 h-2 bg-blue-500 rounded-full"></span>
          <span class="hidden sm:inline-block w-3 h-3 bg-blue-500 rounded-full"></span>
        </div>
        <h2 class="text-2xl font-bold">
          <?=get_term(pll_get_term( get_term_by( 'slug', 'al-zahra-university-news', 'category' )->term_id))->name;?>
        </h2>
      </div>
      <a href="#" class="flex items-center group bg-white rounded-xl">
        <span
          class="h-10 leading-9 pl-3 transition-all z-10 text-sm"><?=get_term(pll_get_term( get_term_by( 'slug', 'international_news', 'category' )->term_id))->name;?></span>
          <svg class=" h-10 leading-9  p-2 transition-all" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.00 512.00" xml:space="preserve" fill="#000000" stroke="#000000" stroke-width="0.0051199900000000005">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier"> 
              <path style="fill:#3b82f6;" d="M330.917,503.264c4.502,5.629,11.241,8.735,18.177,8.735c2.572,0,5.176-0.428,7.699-1.314 c9.328-3.271,15.569-12.077,15.569-21.96V23.273c0-9.883-6.242-18.689-15.569-21.96c-9.323-3.272-19.701-0.295-25.876,7.422 L144.737,241.468c-6.8,8.501-6.8,20.578,0,29.077L330.917,503.264z"></path>
            </g>
          </svg> 
      </a>
    </div>
    <!-- News section body -->
    <div class="mt-6 rounded-xl bg-gradient-to-br from-transparent from-60% to-blue-200 dark:to-dark-900">
      <!-- Start news slider -->
      <div class="swiper news-slider p-5 swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper" id="swiper-wrapper-6e077e1052bb863d1" aria-live="polite">
          <!-- Slides -->

          <?php
                          // گرفتن زبان فعلی با استفاده از Polylang
                          $current_lang = pll_current_language();

                          // تنظیمات WP_Query برای گرفتن پست‌های یک دسته‌بندی خاص
                          $args = array(
                              'post_type' => 'post', // نوع پست (پست‌های استاندارد)
                              'posts_per_page' => 5, // تعداد پست‌ها
                              'category_name' => 'al-zahra-university-news', // نام دسته‌بندی (slug)
                              'lang' => $current_lang, // زبان فعلی
                          );
                          $query = new WP_Query( $args );

                          if ( $query->have_posts() ) : 
                              while ( $query->have_posts() ) : $query->the_post(); 
                                  ?>

          <div class="swiper-slide swiper-slide-active" style="width: 356px; margin-left: 16px;" role="group"
            aria-label="1 / 5">
            <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
              <div class="relative">
                <a href="<?=the_permalink()?>">
                  <img src="<?=the_post_thumbnail_url()?>" alt="" class="w-full h-[180px] rounded-xl">
                </a>
                <div
                  class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                  <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                    <path
                      d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z">
                    </path>
                    <path
                      d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5">
                    </path>
                  </svg>
                  <span>۷</span>
                </div>
              </div>
              <div
                class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"></path>
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"></path>
                </svg>
                <span>۲۵ تیر ۱۴۰۳</span>
              </div>
              <div class="mt-3">
                <h3 class="line-clamp-2 dark:text-slate-200">
                  <a href="<?=the_permalink()?>"><?=the_title()?></a>
                </h3>
                <span class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                  <p class="line-clamp-3"><?=the_excerpt()?></p>
                </div>
              </div>
            </div>
          </div>

          <?php
                              endwhile;
                              wp_reset_postdata();
                          else :
                              echo 'No posts found';
                          endif;
                          ?>

        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev swiper-button-disabled swiper-button-lock" tabindex="-1" role="button"
          aria-label="Previous slide" aria-controls="swiper-wrapper-0c104f6ef995b9531" aria-disabled="true"></div>
        <div class="swiper-button-next swiper-button-disabled swiper-button-lock" tabindex="-1" role="button"
          aria-label="Next slide" aria-controls="swiper-wrapper-0c104f6ef995b9531" aria-disabled="true"></div>

        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
      <!-- End news slider -->
    </div>
  </section>
  <!-- End news section -->


  <!-- Educatoin groups section -->
  <section class="mt-10">
    <div>
      <div class="flex flex-col items-center pt-10">
        <h3 class="flex items-center justify-center text-slate-900 dark:text-slate-200 font-bold text-2xl gap-x-4">
          <span class="bg-red-500 align-middle inline-block h-1 w-8 md:w-10 rounded-xl"> &nbsp; &nbsp;
            &nbsp;</span>
          مراکز وابسته
          <span class="bg-red-500 align-middle inline-block h-1 w-8 md:w-10 rounded-xl"> &nbsp; &nbsp;
            &nbsp;</span>
        </h3>
        <p class="text-slate-700 dark:text-slate-400">
          Educational groups
        </p>
      </div>
      <div class="mt-10">
        <div class="container">
          <div
            class="swiper education-group-slider rounded-xl relative swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper" id="swiper-wrapper-07c7e65bcd717108f" aria-live="polite">
              <!-- Slides -->
              <div class="swiper-slide swiper-slide-active" style="width: 378px;" role="group" aria-label="1 / 5">
                <div class="flex justify-center">
                  <div class="bg-gradient-to-br from-transparent to-red-200 rounded-xl dark:bg-dark-800 dark:bg-none">
                    <div class="w-full p-4">
                      <a href="#" class="inline-block h-48 overflow-hidden rounded-xl shadow-lg"><img
                          class="w-full h-full transform transition duration-300 hover:scale-110"
                          src="files/architect-400x300.jpg.webp" alt=""></a>
                    </div>
                    <div class="px-4 pb-4">
                      <h3>
                        <a href="#" class="flex items-center p-1 bg-white rounded-xl shadow-lg">
                          <span class="px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg">
                            نام گروه :
                          </span>
                          مهندسی معماری
                        </a>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide swiper-slide-next" style="width: 378px;" role="group" aria-label="2 / 5">
                <div class="flex justify-center">
                  <div class="bg-gradient-to-br from-transparent to-red-200 rounded-xl dark:bg-dark-800 dark:bg-none">
                    <div class="w-full p-4">
                      <a href="#" class="inline-block h-48 overflow-hidden rounded-xl shadow-lg"><img
                          class="w-full h-full transform transition duration-300 hover:scale-110"
                          src="files/islamic-history-400x300.jpg" alt=""></a>
                    </div>
                    <div class="px-4 pb-4">
                      <h3>
                        <a href="#" class="flex items-center p-1 bg-white rounded-xl shadow-lg">
                          <span class="px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg">
                            نام گروه :
                          </span>
                          تاریخ اسلام
                        </a>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" style="width: 378px;" role="group" aria-label="3 / 5">
                <div class="flex justify-center">
                  <div class="bg-gradient-to-br from-transparent to-red-200 rounded-xl dark:bg-dark-800 dark:bg-none">
                    <div class="w-full p-4">
                      <a href="#" class="inline-block h-48 overflow-hidden rounded-xl shadow-lg"><img
                          class="w-full h-full transform transition duration-300 hover:scale-110"
                          src="files/civilengineer-400x300.webp" alt=""></a>
                    </div>
                    <div class="px-4 pb-4">
                      <h3>
                        <a href="#" class="flex items-center p-1 bg-white rounded-xl shadow-lg">
                          <span class="px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg">
                            نام گروه :
                          </span>
                          مهندسی عمران
                        </a>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" style="width: 378px;" role="group" aria-label="4 / 5">
                <div class="flex justify-center">
                  <div class="bg-gradient-to-br from-transparent to-red-200 rounded-xl dark:bg-dark-800 dark:bg-none">
                    <div class="w-full p-4">
                      <a href="#" class="inline-block h-48 overflow-hidden rounded-xl shadow-lg"><img
                          class="w-full h-full transform transition duration-300 hover:scale-110"
                          src="files/gavel-with-books-old-wooden-desk-400x300.jpg" alt=""></a>
                    </div>
                    <div class="px-4 pb-4">
                      <h3>
                        <a href="#" class="flex items-center p-1 bg-white rounded-xl shadow-lg">
                          <span class="px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg">
                            نام گروه :
                          </span>
                          حقوق جزا و جرم شناسی
                        </a>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" style="width: 378px;" role="group" aria-label="5 / 5">
                <div class="flex justify-center">
                  <div class="bg-gradient-to-br from-transparent to-red-200 rounded-xl dark:bg-dark-800 dark:bg-none">
                    <div class="w-full p-4">
                      <a href="#" class="inline-block h-48 overflow-hidden rounded-xl shadow-lg"><img
                          class="w-full h-full transform transition duration-300 hover:scale-110"
                          src="files/front-view-plant-growing-from-golden-coins-400x300.jpg" alt=""></a>
                    </div>
                    <div class="px-4 pb-4">
                      <h3>
                        <a href="#" class="flex items-center p-1 bg-white rounded-xl shadow-lg">
                          <span class="px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg">
                            نام گروه :
                          </span>
                          علوم اقتصادی
                        </a>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev swiper-button-disabled swiper-button-lock" tabindex="-1" role="button"
              aria-label="Previous slide" aria-controls="swiper-wrapper-0c104f6ef995b9531" aria-disabled="true"></div>
            <div class="swiper-button-next swiper-button-disabled swiper-button-lock" tabindex="-1" role="button"
              aria-label="Next slide" aria-controls="swiper-wrapper-0c104f6ef995b9531" aria-disabled="true"></div>
            <!-- <div class="flex justify-between items-center w-full h-full z-10 absolute top-0">
                                <div class="educ-button-prev"><i class="fa-regular fa-chevron-right"></i></div>
                                <div class="educ-button-next"><i class="fa-regular fa-chevron-left"></i></div>
                            </div> -->
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
          </div>


        </div>
      </div>
    </div>
  </section>
  <!-- End education groups section -->

  <!-- Educational calendar section -->
  <section class="mt-10">
    <div class="container">

      <div class="flex flex-col items-center pt-10">
        <h3
          class="flex items-center justify-center text-slate-900 dark:text-slate-200 font-bold text-2xl gap-x-2 sm:gap-x-4">
          <span class="bg-blue-600 align-middle inline-block h-1 w-6 sm:w-10 rounded-xl"> &nbsp; &nbsp;
            &nbsp;</span>
          تقویم آموزشی
          <span class="bg-blue-600 align-middle inline-block h-1 w-6 sm:w-10 rounded-xl"> &nbsp; &nbsp;
            &nbsp;</span>
        </h3>
        <p class="text-slate-700 dark:text-slate-400">
          Educational calendar
        </p>
      </div>

      <div
        class="swiper educational-calendar-slider mt-10 rounded-xl bg-gradient-to-r from-transparent to-blue-200 dark:to-dark-900 swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper pt-10" id="swiper-wrapper-0c104f6ef995b9531" aria-live="polite">
          <!-- Slides -->
          <div class="swiper-slide pb-10 swiper-slide-active" style="width: 302.4px;" role="group" aria-label="1 / 5">
            <div class="flex flex-col items-center gap-y-4">
              <div class="flex flex-col items-center gap-y-2 dark:text-slate-400">
                <span>
                  ۱۰ - ۲۰
                </span>
                <span>
                  شهریور ماه ۱۴۰۳
                </span>
              </div>
              <div class="relative">
                <div class="w-5 h-5 border-4 bg-white border-blue-500 rounded-full">
                </div>
                <span class="block absolute top-2 right-4 -z-10 0 h-1 w-28 xs:w-40 md:w-28 lg:w-40 bg-blue-500"></span>
              </div>
              <div>
                <a class="font-medium px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg" href="#">انتخاب واحد</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide pb-10 swiper-slide-next" style="width: 302.4px;" role="group" aria-label="2 / 5">
            <div class="flex flex-col items-center gap-y-4">
              <div class="flex flex-col items-center gap-y-2 dark:text-slate-400">
                <span>
                  ۱۳
                </span>
                <span>
                  شهریور ماه ۱۴۰۳
                </span>
              </div>
              <div class="relative">
                <div class="w-5 h-5 border-4 bg-white border-blue-500 rounded-full relative">
                </div>
                <span class="block -z-10 absolute top-2 right-4 h-1 w-28 xs:w-40 md:w-28 lg:w-40 bg-blue-500"></span>
                <span class="block -z-10 absolute top-2 left-4 h-1 w-28 xs:w-40 md:w-28 lg:w-40 bg-blue-500"></span>
              </div>
              <div>
                <a class="font-medium px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg" href="#">
                  شروع کلاس ها
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide pb-10" style="width: 302.4px;" role="group" aria-label="3 / 5">
            <div class="flex flex-col items-center gap-y-4">
              <div class="flex flex-col items-center gap-y-2 dark:text-slate-400">
                <span>
                  ۱ - ۷
                </span>
                <span>
                  مهر ماه ۱۴۰۳
                </span>
              </div>
              <div class="relative">
                <div class="w-5 h-5 border-4 bg-white border-blue-500 rounded-full relative">
                </div>
                <span class="block -z-10 absolute top-2 right-4 h-1 w-28 xs:w-40 md:w-28 lg:w-40 bg-blue-500"></span>
                <span class="block -z-10 absolute top-2 left-4 h-1 w-28 xs:w-40 md:w-28 lg:w-40 bg-blue-500"></span>
              </div>
              <div>
                <a class="font-medium px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg" href="#">
                  حذف و اضافه
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide pb-10" style="width: 302.4px;" role="group" aria-label="4 / 5">
            <div class="flex flex-col items-center gap-y-4">
              <div class="flex flex-col items-center gap-y-2 dark:text-slate-400">
                <span>
                  ۳۰
                </span>
                <span>
                  آذر ماه ۱۴۰۳
                </span>
              </div>
              <div class="relative">
                <div class="w-5 h-5 border-4 bg-white border-blue-500 rounded-full relative">
                </div>
                <span class="block -z-10 absolute top-2 right-4 h-1 w-28 xs:w-40 md:w-28 lg:w-40 bg-blue-500"></span>
                <span class="block -z-10 absolute top-2 left-4 h-1 w-28 xs:w-40 md:w-28 lg:w-40 bg-blue-500"></span>
              </div>
              <div>
                <a class="font-medium px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg" href="#">
                  پایان کلاس ها
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide pb-10" style="width: 302.4px;" role="group" aria-label="5 / 5">
            <div class="flex flex-col items-center gap-y-4">
              <div class="flex flex-col items-center gap-y-2 dark:text-slate-400">
                <span>
                  ۲۵ - ۳۰
                </span>
                <span>
                  دی و بهمن ماه ۱۴۰۳
                </span>
              </div>
              <div class="relative">
                <div class="w-5 h-5 border-4 bg-white border-blue-500 rounded-full relative">
                </div>
                <span class="block -z-10 absolute top-2 left-4 h-1 w-28 xs:w-40 md:w-28 lg:w-40 bg-blue-500"></span>
              </div>
              <div>
                <a class="font-medium px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg" href="#">
                  شروع امتحانات
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- If we need navigation buttons -->
        <!-- <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div> -->

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar swiper-scrollbar-horizontal swiper-scrollbar-lock" style="display: none;">
          <div class="swiper-scrollbar-drag" style="width: 100px; transform: translate3d(0px, 0px, 0px);"></div>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>


    </div>
  </section>
  <!-- End Educational calendar section -->

  <!-- Study section -->
  <section class="mt-20">
    <div class="container">
      <div class="flex flex-col items-center pt-10">
        <h3
          class="flex items-center justify-center text-slate-900 dark:text-slate-200 font-bold text-2xl gap-x-2 sm:gap-x-4">
          <span class="bg-blue-600 align-middle inline-block h-1 w-6 sm:w-10 rounded-xl"> &nbsp; &nbsp;
            &nbsp;</span>
          <?=pll_e('why-us');?>
          <span class="bg-blue-600 align-middle inline-block h-1 w-6 sm:w-10 rounded-xl"> &nbsp; &nbsp;
            &nbsp;</span>
        </h3>
      </div>
      <div
        class="grid grid-cols-1 md:grid-cols-2 mt-10 gap-y-16 sm:gap-10 px-8 py-16 rounded-xl bg-gradient-to-r from-transparent to-red-200 dark:to-dark-900">
        <div>
          <h4 class="text-lg font-bold mb-4 dark:text-slate-200">
            از گوشه و کنار جهان برای آموختن
          </h4>
          <p class="text-slate-600 dark:text-slate-400">
            جامعه الزهرا (س) با رویکردی بین‌المللی، یکی از مهم‌ترین مراکز آموزشی و تربیتی ویژه بانوان در جهان اسلام است
            که به تربیت و آموزش بانوان طلبه از سراسر جهان می‌پردازد. این مرکز در قم با برگزاری دوره‌های متنوع علوم
            اسلامی و انسانی و ارائه برنامه‌های تخصصی در حوزه تبلیغ و پژوهش، به بانوان از ملیت‌های مختلف امکان می‌دهد تا
            درک عمیق‌تری از آموزه‌های دینی پیدا کرده و در ترویج معارف اسلامی در جوامع خود نقش مؤثری ایفا کنند. جامعه
            الزهرا (س) در راستای گسترش دیپلماسی فرهنگی و توسعه ارتباطات بین‌المللی در حوزه علوم اسلامی، بستری مناسب برای
            تعامل علمی و فرهنگی میان بانوان از کشورهای مختلف فراهم می‌کند. </p>
        </div>
        <div class="grid grid-cols-2 gap-6 text-slate-600 dark:text-slate-400">
          <div class="flex flex-row items-center">
            <a href="#" class="flex items-center text-2xl bg-blue-600 px-2 py-2 rounded-b-md rounded-t-[100%]">
              <svg class="h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M4 19V6.2C4 5.0799 4 4.51984 4.21799 4.09202C4.40973 3.71569 4.71569 3.40973 5.09202 3.21799C5.51984 3 6.0799 3 7.2 3H16.8C17.9201 3 18.4802 3 18.908 3.21799C19.2843 3.40973 19.5903 3.71569 19.782 4.09202C20 4.51984 20 5.0799 20 6.2V17H6C4.89543 17 4 17.8954 4 19ZM4 19C4 20.1046 4.89543 21 6 21H20M9 7H15M9 11H15M19 17V21"
                    stroke="#ffffff" stroke-width="1.224" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
              </svg> </a>
            </a>
            <p class="flex flex-col justify-end px-2">
              <span>۴۶۲</span>
              <span>رشته تحصیلی</span>
            </p>
          </div>
          <div class="flex flex-row items-center">
            <a href="#" class="flex items-center text-2xl bg-blue-600 px-2 py-2 rounded-b-md rounded-t-[100%]">
              <svg class="h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M13 20V18C13 15.2386 10.7614 13 8 13C5.23858 13 3 15.2386 3 18V20H13ZM13 20H21V19C21 16.0545 18.7614 14 16 14C14.5867 14 13.3103 14.6255 12.4009 15.6311M11 7C11 8.65685 9.65685 10 8 10C6.34315 10 5 8.65685 5 7C5 5.34315 6.34315 4 8 4C9.65685 4 11 5.34315 11 7ZM18 9C18 10.1046 17.1046 11 16 11C14.8954 11 14 10.1046 14 9C14 7.89543 14.8954 7 16 7C17.1046 7 18 7.89543 18 9Z"
                    stroke="#ffffff" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
              </svg>
            </a>
            <p class="flex flex-col justify-end px-2">
              <span>۱۰۳۴۶</span>
              <span>دانشجو</span>
            </p>
          </div>
          <div class="flex flex-row items-center">
            <a href="#"
              class="flex items-center text-2xl bg-blue-600 text-white px-2 py-2 rounded-b-md rounded-t-[100%]">
              <svg class="h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M15 8H17M15 12H17M12 16H7M21 12V6C21 4.89543 20.1046 4 19 4H5C3.89543 4 3 4.89543 3 6V18C3 19.1046 3.89543 20 5 20H12M7 8V12H11V8H7Z"
                    stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.224"></path>
                  <path
                    d="M19.2678 19.2678C19.7202 18.8154 20 18.1904 20 17.5C20 16.1193 18.8807 15 17.5 15C16.1193 15 15 16.1193 15 17.5C15 18.8807 16.1193 20 17.5 20C18.1904 20 18.8154 19.7202 19.2678 19.2678ZM19.2678 19.2678L21 21"
                    stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.224"></path>
                </g>
              </svg>
            </a>
            <p class="flex flex-col justify-end px-3">
              <span>۱۷۴۹۰</span>
              <span>مقالات ISI</span>
            </p>
          </div>
          <div class="flex flex-row items-center">
            <a href="#"
              class="flex items-center text-2xl bg-blue-600 text-white px-2 py-2 rounded-b-md rounded-t-[100%]">
              <svg class="h-8" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 37 32" enable-background="new 0 0 37 32"
                xml:space="preserve" fill="#ffffff" stroke="#ffffff" stroke-width="0.37">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <g>
                    <path fill="#ffffff"
                      d="M36.078,7.173L19.876,0.346c-0.865-0.365-1.858-0.365-2.728,0L0.922,7.183C0.362,7.42,0.009,7.944,0,8.554 c-0.009,0.607,0.329,1.143,0.881,1.394L2.59,10.73C2.538,10.809,2.5,10.898,2.5,11v9c0,0.005,0.003,0.01,0.003,0.016 c-1.172,0.207-2.066,1.226-2.066,2.456c0,1.111,0.733,2.043,1.736,2.368l-1.798,4.164c-0.271,0.629-0.206,1.326,0.18,1.912 C1.002,31.595,1.787,32,2.656,32l0.289-0.014c0.813-0.066,1.539-0.481,1.941-1.111c0.344-0.537,0.418-1.182,0.203-1.767 L3.541,24.89c1.086-0.272,1.896-1.248,1.896-2.418c0-1.188-0.833-2.18-1.945-2.433C3.493,20.025,3.5,20.014,3.5,20v-8.853l4,1.833 V20h0.01c0.103,2.257,5.827,3.439,11.49,3.439S30.387,22.257,30.49,20h0.01v-7.551l5.607-2.507C36.664,9.694,37.006,9.16,37,8.549 C36.993,7.938,36.641,7.41,36.078,7.173z M4.045,30.336c-0.235,0.368-0.677,0.613-1.186,0.654L2.656,31 c-0.531,0-1.005-0.236-1.266-0.634c-0.2-0.304-0.234-0.647-0.097-0.966l1.533-3.552l1.323,3.604 C4.259,29.746,4.221,30.061,4.045,30.336z M4.438,22.472c0,0.827-0.673,1.5-1.5,1.5s-1.5-0.673-1.5-1.5s0.673-1.5,1.5-1.5 S4.438,21.645,4.438,22.472z M29.5,18.419c-1.898-1.305-6.219-1.98-10.5-1.98s-8.602,0.675-10.5,1.98v-7.278 c0-1.097,3.185-2.641,10.266-2.641c7.004,0,10.734,1.57,10.734,2.703V18.419z M19,22.439c-6.409,0-10.5-1.48-10.5-2.5 s4.091-2.5,10.5-2.5s10.5,1.48,10.5,2.5S25.409,22.439,19,22.439z M35.699,9.03L30.5,11.354v-0.151 c0-2.181-4.825-3.703-11.734-3.703C11.922,7.5,7.5,8.929,7.5,11.141v0.741L1.297,9.038C1.017,8.911,0.999,8.646,1,8.567 s0.027-0.343,0.311-0.463l16.227-6.837c0.619-0.263,1.331-0.261,1.95,0l16.202,6.827c0.285,0.12,0.31,0.386,0.311,0.464 C36.001,8.638,35.981,8.903,35.699,9.03z">
                    </path>
                  </g>
                </g>
              </svg>
            </a>
            <p class="flex flex-col justify-end px-2">
              <span>65066</span>
              <span>دانش آموخته</span>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End study section -->
</main>


<?php
endif;
    ?>

<footer class="dark:bg-dark-850 pt-24 pb-10">
  <div class="container mx-auto">
    <div class="relative">
      <span
        class="absolute border-t border-1 sm:top-2/4 top-5 trasform sm:translate-y-2/4 dark:border-slate-600 w-full z-0 right-0"></span>
      <div class="flex items-center justify-between sm:flex-row flex-col relative z-10">
        <div class="w-fit bg-white dark:bg-dark-850 sm:mb-0 mb-6 pl-8 pr-8 sm:pr-0">
          <img class="h-16 dark:bg-white" src="files/logo-dark.png" alt="">
        </div>
        <ul class="flex dark:bg-dark-850 sm:pr-8 self-center">
          <li class="mr-2">
            <a href="#" rel="nofollow"
              class="group flex items-center rounded justify-center w-10 h-10 dark:hover:bg-blue-970 dark:bg-blue-800 dark:bg-opacity-25 bg-blue-50 group hover:bg-blue-700 transition duration-300 ease-linear">
              <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  class="fill-current transition duration-300 ease-linear dark:text-blue-300 text-blue-700 group-hover:text-white"
                  d="M18.6728 2.84651C18.6728 2.84651 18.4918 1.56883 17.9344 1.00782C17.2286 0.269445 16.4396 0.265826 16.0776 0.222392C13.4861 0.0341796 9.59518 0.0341797 9.59518 0.0341797H9.58794C9.58794 0.0341797 5.69701 0.0341796 3.10547 0.222392C2.74352 0.265826 1.95448 0.269445 1.24868 1.00782C0.691281 1.56883 0.513926 2.84651 0.513926 2.84651C0.513926 2.84651 0.325714 4.34859 0.325714 5.84705V7.2514C0.325714 8.74986 0.510307 10.2519 0.510307 10.2519C0.510307 10.2519 0.69128 11.5296 1.24506 12.0906C1.95086 12.829 2.87744 12.8037 3.29006 12.8833C4.77404 13.0245 9.59155 13.0679 9.59155 13.0679C9.59155 13.0679 13.4861 13.0607 16.0776 12.8761C16.4396 12.8326 17.2286 12.829 17.9344 12.0906C18.4918 11.5296 18.6728 10.2519 18.6728 10.2519C18.6728 10.2519 18.8574 8.75348 18.8574 7.2514V5.84705C18.8574 4.34859 18.6728 2.84651 18.6728 2.84651ZM7.67686 8.95617V3.74776L12.6826 6.36101L7.67686 8.95617Z">
                </path>
              </svg>
            </a>
          </li>
          <li class="mr-2">
            <a href="#"
              class="group flex items-center rounded justify-center w-10 h-10 dark:hover:bg-blue-970 dark:bg-blue-800 dark:bg-opacity-25 bg-blue-50 group hover:bg-blue-700 transition duration-300 ease-linear"
              rel="nofollow">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  class="fill-current transition duration-300 ease-linear dark:text-blue-300 text-blue-700 group-hover:text-white"
                  d="M8.77638 2.139C10.8663 2.139 11.1137 2.14816 11.9356 2.18483C12.6995 2.21844 13.1119 2.34676 13.3869 2.4537C13.7505 2.59425 14.0133 2.76535 14.2852 3.03728C14.5602 3.31226 14.7282 3.57197 14.8688 3.93555C14.9757 4.21054 15.1041 4.62607 15.1377 5.38686C15.1743 6.21181 15.1835 6.45929 15.1835 8.54611C15.1835 10.636 15.1743 10.8835 15.1377 11.7054C15.1041 12.4692 14.9757 12.8817 14.8688 13.1567C14.7282 13.5203 14.5571 13.783 14.2852 14.0549C14.0102 14.3299 13.7505 14.498 13.3869 14.6385C13.1119 14.7455 12.6964 14.8738 11.9356 14.9074C11.1107 14.9441 10.8632 14.9532 8.77638 14.9532C6.6865 14.9532 6.43902 14.9441 5.61712 14.9074C4.85328 14.8738 4.4408 14.7455 4.16582 14.6385C3.80223 14.498 3.53947 14.3269 3.26754 14.0549C2.99255 13.78 2.82451 13.5203 2.68396 13.1567C2.57702 12.8817 2.4487 12.4662 2.41509 11.7054C2.37842 10.8804 2.36926 10.6329 2.36926 8.54611C2.36926 6.45624 2.37842 6.20875 2.41509 5.38686C2.4487 4.62301 2.57702 4.21054 2.68396 3.93555C2.82451 3.57197 2.99561 3.3092 3.26754 3.03728C3.54252 2.76229 3.80223 2.59425 4.16582 2.4537C4.4408 2.34676 4.85633 2.21844 5.61712 2.18483C6.43902 2.14816 6.6865 2.139 8.77638 2.139ZM8.77638 0.730469C6.65289 0.730469 6.38707 0.739635 5.55296 0.776299C4.7219 0.812964 4.15054 0.9474 3.65557 1.13989C3.13921 1.34154 2.70229 1.60736 2.26843 2.04428C1.83151 2.47814 1.56569 2.91506 1.36404 3.42836C1.17155 3.92639 1.03712 4.49469 1.00045 5.32575C0.963786 6.16292 0.95462 6.42874 0.95462 8.55222C0.95462 10.6757 0.963786 10.9415 1.00045 11.7756C1.03712 12.6067 1.17155 13.1781 1.36404 13.673C1.56569 14.1894 1.83151 14.6263 2.26843 15.0602C2.70229 15.494 3.13921 15.7629 3.65252 15.9615C4.15054 16.154 4.71884 16.2884 5.5499 16.3251C6.38402 16.3618 6.64984 16.3709 8.77332 16.3709C10.8968 16.3709 11.1626 16.3618 11.9967 16.3251C12.8278 16.2884 13.3992 16.154 13.8941 15.9615C14.4074 15.7629 14.8443 15.494 15.2782 15.0602C15.7121 14.6263 15.9809 14.1894 16.1795 13.6761C16.372 13.1781 16.5065 12.6098 16.5431 11.7787C16.5798 10.9446 16.589 10.6788 16.589 8.55528C16.589 6.43179 16.5798 6.16598 16.5431 5.33186C16.5065 4.5008 16.372 3.92944 16.1795 3.43447C15.9871 2.91506 15.7212 2.47814 15.2843 2.04428C14.8505 1.61042 14.4135 1.34154 13.9002 1.14294C13.4022 0.950456 12.8339 0.816019 12.0028 0.779355C11.1657 0.739635 10.8999 0.730469 8.77638 0.730469Z">
                </path>
                <path
                  class="fill-current transition duration-300 ease-linear dark:text-blue-300 text-blue-700 group-hover:text-white"
                  d="M8.77637 4.53441C6.55817 4.53441 4.75856 6.33402 4.75856 8.55222C4.75856 10.7704 6.55817 12.57 8.77637 12.57C10.9946 12.57 12.7942 10.7704 12.7942 8.55222C12.7942 6.33402 10.9946 4.53441 8.77637 4.53441ZM8.77637 11.1585C7.33729 11.1585 6.17014 9.9913 6.17014 8.55222C6.17014 7.11314 7.33729 5.94599 8.77637 5.94599C10.2155 5.94599 11.3826 7.11314 11.3826 8.55222C11.3826 9.9913 10.2155 11.1585 8.77637 11.1585Z">
                </path>
                <path
                  class="fill-current transition duration-300 ease-linear dark:text-blue-300 text-blue-700 group-hover:text-white"
                  d="M13.8911 4.37544C13.8911 4.89486 13.4694 5.31345 12.9531 5.31345C12.4337 5.31345 12.0151 4.8918 12.0151 4.37544C12.0151 3.85603 12.4367 3.43744 12.9531 3.43744C13.4694 3.43744 13.8911 3.85909 13.8911 4.37544Z">
                </path>
              </svg>
            </a>
          </li>
          <li class="mr-2">
            <a href="#"
              class="group flex items-center rounded justify-center w-10 h-10 dark:hover:bg-blue-970 dark:bg-blue-800 dark:bg-opacity-25 bg-blue-50 group hover:bg-blue-700 transition duration-300 ease-linear"
              rel="nofollow">
              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  class="stroke-current transition duration-300 ease-linear dark:text-blue-300 text-blue-700 group-hover:text-white"
                  d="M7.13998 9.96507L8.8695 8.23767M7.13998 9.96507C5.87212 11.2337 0.538685 9.00354 1.49647 6.18315C2.45426 3.36275 12.943 -0.0813092 15.0632 2.04019C17.1834 4.16169 13.7258 14.6899 10.9196 15.6121C8.11337 16.5342 5.87212 11.2337 7.13998 9.96507Z"
                  stroke="currentColor" stroke-width="1.56405" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div
      class="grid md:grid-cols-9 grid-cols-1 xl:gap-20 gap-7 mt-10 p-4 rounded-xl bg-gradient-to-br from-transparent from-60% to-blue-200 dark:to-dark-900">
      <div class="md:col-span-4">
        <div class="relative flex flex-col md:items-start md:mx-0  mx-auto w-fit items-center">
          <h3 class="text-xl relative font-bold dark:text-white text-biscay-700 mb-4 z-10">
            <?=pll_e('about-us');?>
          </h3>
          <span class="z-0 w-4 h-4 flex absolute bg-blue-700 opacity-20 top-0 rounded-full -right-2"></span>
        </div>

        <div class="flex relative ">
          <span class="md:flex hidden absolute top-1 right-0 w-1 h-1 mt-2 bg-blue-700 opacity-30 rounded-full"></span>
          <div class="md:mr-2 md:text-right text-center">
            <p
              class="text-base mb-2 md:w-10/12 w-full md:text-right text-center leading-7 dark:text-slate-400 text-slate-600">
              <?=pll_e('about-us-description');?>
            </p>
          </div>
        </div>

      </div>

      <div class="md:col-span-2">
        <div class="relative flex md:items-start md:mx-0  mx-auto w-fit items-center">
          <h3 class="text-xl relative font-bold dark:text-white text-biscay-700 mb-4 z-10">
            بخش های سایت
          </h3>
          <span class="z-0 w-4 h-4 flex absolute bg-blue-700 opacity-20 top-0 rounded-full -right-2"></span>
        </div>
        <ul class="flex flex-col md:items-start items-center dark:text-slate-400">
          <li class="mb-3 last:mb-0 flex items-center">
            <span
              class="md:flex hidden w-1 h-1 ml-2 mb-1 dark:text-gray-940 bg-blue-700 opacity-30 rounded-full"></span>
            <a class="text-base text-slate-600 dark:text-slate-400 transform dark:hover:text-blue-450  duration-200 ease-linear hover:text-blue-600 dark:hover:text-blue-400 transition-all hover:mr-2"
              href="terms">قوانین و مقررات </a>
          </li>
          <li class="mb-3 last:mb-0 flex items-center">
            <span class="md:flex hidden  w-1 h-1 ml-2 mb-1 bg-blue-700 opacity-30 rounded-full"></span>
            <a class="text-base text-slate-600 dark:text-slate-400 transform dark:hover:text-blue-450  duration-200 ease-linear hover:text-blue-600 dark:hover:text-blue-400 transition-all hover:mr-2"
              href="masters">مدرسان دانشگاه </a>
          </li>
          <li class="mb-3 last:mb-0 flex items-center">
            <span
              class="md:flex hidden w-1 h-1 ml-2 mb-1 dark:text-gray-940 bg-blue-700 opacity-30 rounded-full"></span>
            <a class="text-base text-slate-600 dark:text-slate-400 transform dark:hover:text-blue-450  duration-200 ease-linear hover:text-blue-600 dark:hover:text-blue-400 transition-all hover:mr-2"
              href="about-us">درباره دانشگاه </a>
          </li>
          <li class="mb-3 last:mb-0 flex items-center">
            <span
              class="md:flex hidden w-1 h-1 ml-2 mb-1 dark:text-gray-940 bg-blue-700 opacity-30 rounded-full"></span>
            <a class="text-base text-slate-600 dark:text-slate-400 transform dark:hover:text-blue-450  duration-200 ease-linear hover:text-blue-600 dark:hover:text-blue-400 transition-all hover:mr-2"
              href="contact-us">ارتباط با ما</a>
          </li>
        </ul>
      </div>

      <div class="md:col-span-3">
        <div class="relative flex md:items-start md:mx-0  mx-auto w-fit items-center">
          <h3 class="text-xl relative font-bold dark:tew dark:text-white text-biscay-700 mb-4 z-10">
            ارتباط
            با ما</h3>
          <span class="z-0 w-4 h-4 flex absolute bg-blue-700 opacity-20 top-0 rounded-full -right-2"></span>
        </div>

        <ul>
          <li class="flex items-center justify-between mb-7 last:mb-0 dark:text-slate-400">
            <span class="flex items-center">
              <span class="relative ml-3">
                <i class="flex w-5 h-5 bg-blue-700 opacity-20 rounded-full"></i>

                <svg class="dark:text-blue-300 text-blue-980 absolute -top-1 -left-2" width="17" height="15"
                  viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M15.5632 4.17184C15.4183 3.54105 15.2294 3.0782 15.0064 2.72729C14.2794 3.41662 13.3594 4.25301 12.3603 4.98727C10.9828 5.99965 9.61574 6.69415 8.50008 6.69415C7.38443 6.69415 6.01733 5.99965 4.63986 4.98727C3.64079 4.25301 2.72075 3.41662 1.99377 2.72729C1.77081 3.0782 1.58187 3.54105 1.437 4.17184C1.43013 4.20176 1.42338 4.23196 1.41675 4.26247C2.07618 4.86961 2.86033 5.55149 3.70121 6.1695C5.10702 7.2027 6.83246 8.18184 8.50008 8.18184C10.1677 8.18184 11.8931 7.2027 13.299 6.1695C14.1398 5.55149 14.924 4.86961 15.5834 4.26246C15.5768 4.23196 15.57 4.20176 15.5632 4.17184Z"
                    fill="currentColor"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 7.5C0 13.6762 1.50025 15 8.5 15C15.4997 15 17 13.6762 17 7.5C17 1.32375 15.4997 0 8.5 0C1.50025 0 0 1.32375 0 7.5ZM8.5 13.75C6.7824 13.75 5.49884 13.6672 4.5262 13.4764C3.56964 13.2889 3.0028 13.0139 2.62683 12.6822C2.25086 12.3505 1.9393 11.8503 1.72671 11.0063C1.51055 10.1481 1.41667 9.01553 1.41667 7.5C1.41667 5.98447 1.51055 4.85192 1.72671 3.99371C1.9393 3.14968 2.25086 2.64953 2.62683 2.31779C3.0028 1.98605 3.56964 1.71115 4.5262 1.52357C5.49884 1.33284 6.7824 1.25 8.5 1.25C10.2176 1.25 11.5012 1.33284 12.4738 1.52357C13.4304 1.71115 13.9972 1.98605 14.3732 2.31779C14.7491 2.64953 15.0607 3.14968 15.2733 3.99371C15.4895 4.85192 15.5833 5.98447 15.5833 7.5C15.5833 9.01553 15.4895 10.1481 15.2733 11.0063C15.0607 11.8503 14.7491 12.3505 14.3732 12.6822C13.9972 13.0139 13.4304 13.2889 12.4738 13.4764C11.5012 13.6672 10.2176 13.75 8.5 13.75Z"
                    fill="currentColor"></path>
                </svg>
              </span>

              <span class="text-sm font-medium text-dark-550 dark:text-slate-200"> ایمیل: </span>
            </span>
            <a class="dark:text-white text-slate-600 dark:hover:text-blue-450 font-medium text-sm transition transform duration-200 ease-linear hover:text-blue-600 dark:hover:text-blue-400 transition-all hover:ml-2"
              href="mailto:int@jz.ac.ir">int@jz.ac.ir</a>
          </li>
          <li class="flex items-center justify-between mb-7 last:mb-0">
            <span class="flex items-center">
              <span class="relative ml-3">
                <i class="flex w-5 h-5 bg-blue-700 opacity-20 rounded-full"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                  class="dark:text-blue-300 text-blue-980 absolute -top-1 -left-2" viewBox="0 0 17 17">
                  <path
                    d="M15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0m-12.2 1.182a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z">
                  </path>
                </svg>
              </span>

              <span class="text-sm font-medium text-dark-550 dark:text-slate-200">
                شماره تماس:
              </span>
            </span>
            <a class="dark:text-white  text-slate-600 dark:hover:text-blue-450 font-medium text-sm transition ltr transform duration-200 ease-linear hover:text-blue-600 dark:hover:text-blue-400 transition-all hover:ml-2"
              href="tel:09374959089">
              02532112010
            </a>
          </li>

        </ul>
      </div>
    </div>
    <div>
      <div
        class="flex items-center justify-center text-sm text-center sm:text-right md:justify-between flex-wrap gap-y-2 gap-x-4 mt-8 sm:mt-10 dark:text-neutral-300">
        <span>
          کلیه حقوق مادی و معنوی برای جامعه الزهرا محفوظ است.
        </span>
        <span>
          ساخته شده توسط fadak.ir
        </span>
      </div>
    </div>
  </div>
</footer>

<?php
get_footer();