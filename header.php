<?php 
$version_number = '1.3';
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    <link href="https://fonts.cdnfonts.com/css/satoshi" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'page-block nvsca' ); ?>>
  <!-- POPUP -->
  <?php if((!isset($_COOKIE["popup"]) || $_COOKIE["popup"] !== "yes") && get_field('actief', 'option') === 'active') { ?>
      <div class="pop_up fixed top-0 left-0 w-screen h-screen flex bg-[#000000]/20 z-[1000] justify-center items-center ">
          <div class="w-full max-w-[358px] md:max-w-[415px] bg-white m-auto rounded-[11px] overflow-hidden relative pop_up_inner">
              <button class="closePopUp top-2 right-2 absolute z-[100]">
                <?php if (get_field('kleur_close_button', 'option') !== "button_zwart"): ?>   
                <svg id="Group_440" data-name="Group 440" xmlns="http://www.w3.org/2000/svg" width="20.441" height="20.441" viewBox="0 0 20.441 20.441">
                  <rect id="Rectangle_7" data-name="Rectangle 7" width="25.521" height="3.385" rx="1.693" transform="translate(2.395 0) rotate(45)" fill="#fff"/>
                  <rect id="Rectangle_7-2" data-name="Rectangle 7" width="25.521" height="3.385" rx="1.693" transform="translate(0 18.047) rotate(-45)" fill="#fff"/>
                </svg>
                <?php endif; ?>
                <?php if (get_field('kleur_close_button', 'option') !== "button_wit"): ?>   
                <svg id="Group_440" data-name="Group 440" xmlns="http://www.w3.org/2000/svg" width="20.441" height="20.441" viewBox="0 0 20.441 20.441">
                  <rect id="Rectangle_7" data-name="Rectangle 7" width="25.521" height="3.385" rx="1.693" transform="translate(2.395 0) rotate(45)" fill="#000"/>
                  <rect id="Rectangle_7-2" data-name="Rectangle 7" width="25.521" height="3.385" rx="1.693" transform="translate(0 18.047) rotate(-45)" fill="#000"/>
                </svg>
                <?php endif; ?>
              </button>
              <div class="pt-[40px] md:pt-[35px] lg:pt-[30px] pb-[35px] lg:pb-[30px] w-[269.54px] md:w-[334.8px] mx-auto">
                <?php if (get_field('popup_titel', 'option')): ?>   
                  <h2 class="text-25 leading-30 md:text-21 md:leading-28 lg:text-22 lg:leading-25 xl:text-25 xl:leading-30 font-satoshi text-<?php echo get_field('titel_kleur', 'option');?> font-bold pb-[15px] md:pb-[25px] xl:pb-2 mr-0 md:mr-[45px] xl:mr-[0px]"><?php echo get_field('popup_titel', 'option');?></h2>
                <?php endif; ?>
                <div class="grid grid-cols-2 gap-[20px]">
                  <a href="" class="w-full bg-[#27A5E2] block">
                    <p class="text-white text-center text-16 leading-22 font-nunito font-bold pt-[20px]">Patient</p>
                    <div class="flex items-center justify-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="200" height="173" viewBox="0 0 200 173">
                          <g id="Group_773" data-name="Group 773" transform="translate(-691 -676)">
                            <rect id="Rectangle_605" data-name="Rectangle 605" width="200" height="173" transform="translate(691 676)" fill="rgba(149,113,113,0)"/>
                            <g id="Group_764" data-name="Group 764" transform="translate(614.17 503.725)">
                              <path id="Path_838" data-name="Path 838" d="M139.242,265.583c5.582-2.34,11.278-4.4,16.926-6.584.357-.138.731-.23,1.029-.322,4.629,7.343,11.683,9.947,19.693,9.923s15.039-2.681,19.551-9.993c5.646,2.184,11.244,4.348,16.842,6.515a18.676,18.676,0,0,1,1.945.79c4.707,2.464,7.859,6.148,8.717,11.5.252,1.571.151,3.195.281,4.789a2.236,2.236,0,0,0,4.47.072,20.315,20.315,0,0,0-12.71-20.941c-7.127-2.793-14.28-5.522-21.413-8.3-1.572-.612-3.714-.914-4.494-2.088a4.469,4.469,0,0,1-.415-2.727,18.236,18.236,0,0,0,8.93-15.671v-1.56a10.334,10.334,0,0,0,0-20.169v-7.851a18.251,18.251,0,0,0-18.23-18.23h-7.108a18.251,18.251,0,0,0-18.23,18.23v7.851a10.334,10.334,0,0,0,0,20.169v1.56a18.236,18.236,0,0,0,8.842,15.62,11.555,11.555,0,0,1-.046,1.7,1.766,1.766,0,0,1-1.293,1.821c-7.943,3.037-15.859,6.143-23.789,9.211-9.2,3.557-13.842,10.313-13.844,20.18,0,14.783.061,29.566-.045,44.348-.026,3.581,1.111,6.109,4.558,7.381h43.025c.011-.049,0-.123.034-.144a2.339,2.339,0,0,0,1.12-2.949c-.5-1.27-1.648-1.432-2.876-1.429-7.368.018-14.737.009-22.106.009h-1.7v-1.834q0-8.046,0-16.09c0-4.558-2.176-6.746-6.692-6.752q-4.662-.006-9.324,0h-1.438c0-8.41-.241-16.588.077-24.744C129.774,272.5,133.4,268.03,139.242,265.583Zm59.75-49.866a5.829,5.829,0,0,1,0,10.371Zm-44.364,10.371a5.828,5.828,0,0,1,0-10.371Zm4.911,6.459v-29.58a13.732,13.732,0,0,1,13.717-13.717h7.108a13.732,13.732,0,0,1,13.717,13.717v29.58a13.732,13.732,0,0,1-13.717,13.717h-7.108A13.732,13.732,0,0,1,159.539,232.547Zm13.717,18.23h7.108a18.172,18.172,0,0,0,4.973-.7c.13,2.119-.255,2.5-3.263,4.132-4.1,2.22-8.2,1.723-12.063-.845a3.286,3.286,0,0,1-1.763-3.3A18.159,18.159,0,0,0,173.256,250.777Zm-8.4,4.873a1.6,1.6,0,0,1,1.292.378c5.515,5.275,15.312,5.548,21.408-.028a1.762,1.762,0,0,1,1.422-.246c1,.271,1.952.719,3.229,1.215-4.078,5.535-9.644,7.25-15.825,7.132-5.874-.112-11.152-1.909-14.965-7.121C162.733,256.454,163.768,255.964,164.854,255.65Zm-35.437,52.49c3.945,0,7.693-.049,11.437.057.517.015,1.446.793,1.453,1.23.1,6.24.065,12.481.065,18.862-3.975,0-7.816.044-11.652-.06a1.849,1.849,0,0,1-1.247-1.306C129.389,320.727,129.417,314.529,129.417,308.14Z" fill="#fff"/>
                              <path id="Path_839" data-name="Path 839" d="M356.555,539.893a11.453,11.453,0,0,0-.037-1.5,2.213,2.213,0,0,0-4.368-.246,7.9,7.9,0,0,0-.11,1.791c-.009,3.138,0,6.277,0,9.535-3.776,0-7.373-.007-10.969,0-4.223.011-6.506,2.276-6.515,6.482-.011,5.511,0,11.023,0,16.534v1.658h-1.868q-10.972,0-21.945-.008c-1.288,0-2.465.188-2.907,1.584s.326,2.283,1.468,2.937h42.724c3.375-1.228,4.619-3.651,4.578-7.2C356.478,560.937,356.556,550.414,356.555,539.893Zm-5.828,34.231c-3.839.036-7.678.014-11.664.014,0-2.476,0-4.814,0-7.152,0-3.754.012-7.507-.006-11.261-.005-1.078.373-1.738,1.544-1.737,3.746,0,7.492,0,11.314,0a5.569,5.569,0,0,1,.12.78c.007,5.855,0,11.711.013,17.566C352.049,573.284,351.852,574.113,350.727,574.124Z" transform="translate(-127.837 -245.848)" fill="#fff"/>
                              <path id="Path_840" data-name="Path 840" d="M323.358,503.4a7.552,7.552,0,0,0-6.175-2.1c-5.316.788-8.023,5.3-6.5,10.7,1.487,5.277,5.21,8.594,9.651,11.381a5.186,5.186,0,0,0,6.115-.013c4.491-2.814,8.251-6.173,9.656-11.544,1.126-4.307-.211-7.826-3.887-9.7C329.078,500.518,326.111,501.031,323.358,503.4Zm4.525,13.289c-4.993,4.035-4.059,3.972-9.018.041a10.321,10.321,0,0,1-4.039-7.143,3.241,3.241,0,0,1,1.884-3.565,3.119,3.119,0,0,1,3.754,1.026c2.052,2.386,3.71,2.4,5.8.042a3.1,3.1,0,0,1,3.732-1.1,3.167,3.167,0,0,1,1.91,3.412A10.091,10.091,0,0,1,327.883,516.684Z" transform="translate(-129.625 -221.243)" fill="#fff"/>
                            </g>
                          </g>
                      </svg>
                    </div>
                  </a>
                  <a href="https://dashboard.schisis-cranio.nl/auth/login" class="w-full bg-[#27A5E2] block">
                    <p class="text-white text-center text-16 leading-22 font-nunito font-bold pt-[20px]">Specialist</p>
                    <div class="flex items-center justify-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="200" height="173" viewBox="0 0 200 173">
                        <g id="Group_774" data-name="Group 774" transform="translate(-716 -744)">
                          <rect id="Rectangle_605" data-name="Rectangle 605" width="200" height="173" transform="translate(716 744)" fill="rgba(149,113,113,0)"/>
                          <g id="Group_772" data-name="Group 772" transform="translate(517.542 401.624)">
                            <path id="Path_836" data-name="Path 836" d="M348.495,434.96c-5.826-.947-12.881,3.5-14.928,9.079-2.828,7.7,1.082,15.052,6.486,17.416,3.241,1.418,3.07,3.286,2.379,5.782a51.575,51.575,0,0,1-12.915,22.325c-9.975,10.353-21.214,9.717-29.679,2.746-11.109-9.15-15.9-21.722-17.2-35.758-.068-.727.7-1.563,1.151-2.3,1.152-1.872,2.308-3.744,3.547-5.558.565-.827,1.2-1.95,2.024-2.2,10.208-3.149,17.038-9.984,21.511-19.427,1.214-2.562,2.248-5.171.5-8.018a3.094,3.094,0,0,1,.167-2.326,101.153,101.153,0,0,0,7.425-38.149c0-3.082.121-6.171-.025-9.247-.3-6.268-4.553-10.354-10.758-10.768-1.652-.11-3.242-.934-4.9-1.249a87.324,87.324,0,0,0-10.333-1.669c-2.025-.137-3.243,1.454-3.179,3.626.066,2.247-.245,5.248,2.8,5.328,3.533.095,7.411-.142,10.574-1.524,6.216-2.72,11.859.152,12.273,6.9a103.593,103.593,0,0,1-6.849,44.771c-.32.813-.846,1.966-1.507,2.154-3.591,1.025-4.418,4.215-5.957,6.932a40.626,40.626,0,0,1-4.123,6.044c-6.251,7.469-15.559,9.846-24.57,6.153-6.561-2.688-10.539-7.976-13.6-14.162a8.02,8.02,0,0,0-1.035-1.543,4.894,4.894,0,0,0-3.235-3.455,7.613,7.613,0,0,1-2.1-2.5,108.626,108.626,0,0,1-6.674-44.6c.332-6.392,6.391-9.6,12.141-6.662a15.845,15.845,0,0,0,10.808,1.557c2.768-.613,2.745-2.826,2.76-4.91.016-2.068-.69-4.1-3.093-3.972a88.844,88.844,0,0,0-10.349,1.451c-1.652.289-3.224,1.165-4.872,1.309-6.653.581-10.589,4.466-10.957,11.162a119.379,119.379,0,0,0,4.605,39.244c.881,3.12,2.833,6.142,2.831,9.456a5.193,5.193,0,0,0-1.174,3.291,5.309,5.309,0,0,0,.389,2c.057.179.119.352.177.508,3.945,10.459,10.731,18.145,21.485,21.959.735.261,1.9.675,1.989,1.17.586,3.386,2.568,5.831,4.86,8.176.425.433.309,1.378.483,2.077,1.589,6.394,2.565,13.028,4.933,19.121,3.272,8.418,8.235,15.943,16.134,20.977,9.57,6.1,20.491,6.1,29.266-.6a51.222,51.222,0,0,0,19.27-30.629c.566-2.59,1.962-3.282,3.97-4.031,6.141-2.293,9.446-7.066,9.476-13.469C360.921,441.969,355.759,436.142,348.495,434.96ZM346.721,458.4a9.309,9.309,0,1,1,.413-18.609,9.176,9.176,0,0,1,8.884,9.386A9.074,9.074,0,0,1,346.721,458.4Z" fill="#fff"/>
                            <path id="Path_837" data-name="Path 837" d="M338.177,436.866a5.416,5.416,0,0,0-4.77,4.94,5.278,5.278,0,0,0,5.291,4.93,5.031,5.031,0,0,0,4.565-4.8A5.1,5.1,0,0,0,338.177,436.866Z" transform="translate(9.691 7.782)" fill="#fff"/>
                          </g>
                        </g>
                      </svg>
                    </div>
                  </a>
                </div>
              
              </div>
          </div>
      </div>
  <?php } ?>
  
<header class="w-full fixed z-[999] top-0">
  <div class="h-[35px] bg-[#f3f3f3] w-full">
    <div class="px-2 md:px-2 flex justify-end items-center h-full">
      <div class="flex space-x-3">
        <a href="/veelgestelde-vragen" class="text-13 leading-13 font-nunito font-bold block text-[#726A63]">Veelgestelde vragen</a>
        <a href="/contact" class="text-13 leading-13 font-nunito font-bold block text-[#726A63]">Contact</a>
      </div>
    </div>
  </div>
  <div class="bg-white h-[82px] md:h-[71px] lg:h-[68px] border-b-[1px] border-[#EBEBEB]">
    <div class="flex items-center justify-between h-full mr-2 md:mr-[25px] lg:mr-[15px] xl:mr-2">
      <a href="/" class="ml-2 md:ml-4 w-[231px]"><img src="/wp-content/themes/nvsca-new/img/local/logo_v3.png" alt=""></a>
      <div class="overflow-hidden flex h-[82px] md:h-[71px] lg:h-[68px] items-center relative">
        <!-- DESKTOP MENU -->
        <div class="hidden lg:flex">
          <div data-target="schisis" class="lg:text-13 lg:leading-18 xl:text-16 xl:leading-22 font-nunito font-bold text-[#726A63] ml-4 flex items-center hover:text-orange duration-300 button-navbar"><a href="/schisis">Schisis</a> <span class="lg:h-[4.689px] xl:h-[5px] ml-2"><?php include get_template_directory() . '/img/icons/arrow-down.php'; ?></span></div>
          <div data-target="craniofaciaal" class="lg:text-13 lg:leading-18 xl:text-16 xl:leading-22 font-nunito font-bold text-[#726A63] ml-4 flex items-center hover:text-orange duration-300 button-navbar"><a href="/craniofaciaal">Craniofaciaal</a> <span class="lg:h-[4.689px] xl:h-[5px] ml-2"><?php include get_template_directory() . '/img/icons/arrow-down.php'; ?></span></div>
          <!-- HOOFDMENU DESKTOP -->
          <?php
            if( have_rows('primaire_navbar_repeater', 'option') ):
              while( have_rows('primaire_navbar_repeater', 'option') ) : the_row(); ?>
                <a href="<?php the_sub_field('link', 'option');?>" class="lg:text-13 lg:leading-18 xl:text-16 xl:leading-22 font-nunito font-bold text-[#726A63] ml-4 hover:text-orange duration-300"><?php the_sub_field('titel', 'option');?></a>
          <?php
            endwhile;
            else :
            endif;
            ?>
        </div>
        
      
        <div class="hidden lg:flex ml-4">
          <a href="<?php echo get_field('button_link', 'option');?>" target="_blank"><div id="inloggen" class=" bg-orange rounded-[2px] lg:text-13 lg:leading-18 xl:text-16 xl:leading-22 font-nunito font-bold text-white hover:opacity-[0.7] duration-300 px-[20px] lg:h-[34px] xl:h-[39px] flex items-center justify-center"><?php echo get_field('button_titel', 'option');?></div></a>
          <button id="search" class="search-in uppercase bg-[#F4F4F5] rounded-[2px] lg:text-14 lg:leading-17 xl:text-18 xl:leading-22 font-nunito font-bold text-white hover:opacity-[0.7] duration-300 lg:w-[36px] lg:h-[34px] xl:h-[39px] xl:w-[40px] flex items-center justify-center lg:ml-[10px] xl:ml-[15px]"><span class="lg:h-[12.9px] xl:h-[14.5px]"><?php include get_template_directory() . '/img/icons/glass.php'; ?></span></button>
        </div>
        <!-- ZOEKBALK DESKTOP -->
        <div class="search-out absolute bg-[#F4F4F5] rounded-[2px] lg:w-[315px] lg:h-[34px] xl:h-[39px] xl:w-[360px] hidden lg:block">
          <div class="flex items-center justify-end">
            <form role="search" method="get" id="searchform"
              class="searchform w-full" action="<?php echo esc_url( home_url( '/' ) ); ?>">
              <div class="w-full flex">
                <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
                <input type="submit" id="searchsubmit"
                  value="">
                <button id="search-form" class="uppercase bg-[#F4F4F5] rounded-[2px] lg:text-14 lg:leading-17 xl:text-18 xl:leading-22 font-nunito font-bold text-white hover:opacity-[0.7] duration-300 lg:w-[36px] lg:h-[34px] xl:h-[39px] xl:w-[40px] flex items-center justify-center"><span class="lg:h-[12.9px] xl:h-[14.5px]"><?php include get_template_directory() . '/img/icons/glass.php'; ?></span></button>
                <input class="w-[calc(100%-50px)] pl-[0px] bg-transparent text-[#726A63] font-nunito lg:text-14 xl:text-16" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Zoeken..." />
              </div>
            </form>
            <button id="close" class="close uppercase bg-[#F4F4F5] rounded-[2px] lg:text-14 lg:leading-17 xl:text-18 xl:leading-22 font-nunito font-bold text-white hover:opacity-[0.7] duration-300 lg:w-[36px] lg:h-[34px] xl:h-[39px] xl:w-[40px] flex items-center justify-center"><span class="lg:h-[12.9px] xl:h-[14.5px] flex items-center"><?php include get_template_directory() . '/img/icons/close.php'; ?></span></button>
          </div>
        </div>
        <!-- MOBIEL HAMBURGER MENU -->
        <div class="block lg:hidden ml-4">
          <button id="hamburger menuToggle" class="button-hamburger uppercase bg-orange rounded-[2px] w-[49px] h-[47px] md:h-[40px] md:w-[42px] flex items-center justify-center">
              <span></span>
              <span></span>
              <span></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- OVERLAY DESKTOP MENU -->
<div class="left-0 right-0 top-0 bg-white fixed z-40 hidden lg:block menuitemoverlay">
  <div id="schisis" class="pt-[105px] inner_div">
    <div class="lg:mx-5 xl:mx-6 lg:pt-3 xl:pt-4">
      <div class="grid grid-cols-2 ">
        <div class="col-span-1">
          <h3 class="lg:text-15 lg:leading-19 xl:text-16 xl:leading-22 font-satoshi font-bold text-black"><a href="<?php echo get_field('link', 'option');?>">Schisis</a></h3>
        </div>
        <div class="col-span-1 flex justify-end">
      
        </div>
      </div>
      <hr class="border-[#707070] mt-[15px]">
      <div class="grid grid-cols-4 lg:gap-x-[15px] lg:gap-y-[9px] xl:gap-x-2 xl:gap-y-1 py-3">
              
        </div>
    </div>
  </div>
  <div id="craniofaciaal" class="pt-[105px] inner_div">
    <div class="lg:mx-5 xl:mx-6 lg:pt-3 xl:pt-4">
      <div class="grid grid-cols-2 ">
        <div class="col-span-1">
          <h3 class="lg:text-15 lg:leading-19 xl:text-16 xl:leading-22 font-satoshi font-bold text-black"><a href="<?php echo get_field('link', 'option');?>">Craniofaciaal</a></h3>
        </div>
        <div class="col-span-1 flex justify-end">
          
        </div>
      </div>
      <hr class="border-[#707070] mt-[15px]">
      <div class="grid grid-cols-4 lg:gap-x-[15px] lg:gap-y-[9px] xl:gap-x-2 xl:gap-y-1 py-3">
              
        </div>
    </div>
  </div>
</div>
<div class="overlay-header bg-[#000] opacity-20 fixed top-0 left-0 right-0 h-screen w-screen z-30 hidden duration-300"></div>
<!-- OVERLAY MOBILE MENU -->
<div class="top-[117px] md:top-[106px] h-[calc(100dvh-117px)] md:h-[calc(100dvh-106px)] bg-white fixed lg:hidden z-40 menumobileoverlay">
  <div class="relative h-full">
    <div class="mx-2 md:mx-4 mt-2 mb-3 md:mt-3 md:mb-[35px]">
      <!-- ZOEKBALK MOBIEL -->
      <div class="rounded-[2px] h-[53px] w-full bg-[#F4F4F5] flex justify-center items-center">
        <div class="flex items-center justify-end w-full">
          <form role="search" method="get" id="searchform"
            class="searchform w-full" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="w-full flex">
              <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
              <input type="submit" id="searchsubmit"
                value="">
              <button id="search-form" class="uppercase bg-[#F4F4F5] pl-2 rounded-[2px] lg:text-14 lg:leading-17 xl:text-18 xl:leading-22 font-nunito font-bold text-white hover:opacity-[0.7] duration-300 w-[40px] h-[53px] flex items-center justify-center"><span class="h-[14.5px]"><?php include get_template_directory() . '/img/icons/glass.php'; ?></span></button>
              <input class="w-[calc(100%-50px)] pl-[10px] bg-transparent text-[#726A63] font-nunito lg:text-14 xl:text-16" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Zoeken naar..." />
               
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="h-full">
      <div class="mobilemenu">
        <div class="mobilemenuitem">
          <hr class="border-[#F4F4F5]">
          <a href="/schisis" class="mx-2 md:mx-4 my-[21px] md:my-[22px] text-[#726A63] text-18 leading-22 font-nunito font-bold  flex items-center">Schisis</a>
        </div>
        <div class="mobilemenuitem">
          <hr class="border-[#F4F4F5]">
          <a href="/craniofaciaal" class="mx-2 md:mx-4 my-[21px] md:my-[22px] text-[#726A63] text-18 leading-22 font-nunito font-bold flex items-center">Craniofaciaal</a>
        </div>
         <!-- HOOFDMENU MOBIEL -->
        <?php
          if( have_rows('primaire_navbar_repeater', 'option') ):
            while( have_rows('primaire_navbar_repeater', 'option') ) : the_row(); ?>
            <div class="mobilemenuitem">
              <hr class="border-[#F4F4F5]">
              <a href="<?php the_sub_field('link', 'option');?>" class="mx-2 md:mx-4 my-[21px] md:my-[22px] block text-[#726A63] text-18 leading-22 font-nunito font-bold"><?php the_sub_field('titel', 'option');?></a>
            </div>
         <?php
          endwhile;
          else :
          endif;
          ?>
        <hr class="border-[#F4F4F5]">
      </div>
    </div>
    <div class="absolute bottom-2 md:bottom-3 left-0 right-0">
      <a href="<?php echo get_field('button_link', 'option');?>" target="_blank">
      <div class="h-[49px] bg-orange flex justify-center items-center mx-2 md:mx-4 mb-3 md:mb-7"><p class="text-20 leading-22 font-nunito font-bold text-white"><?php echo get_field('button_titel', 'option');?></p></div>
          </a>
    </div>
  </div>
</div>  

