    <header class="bg-elancer-blue-500 relative">
        <!-- Mobile Menu -->
        <div class="  transition duration-500 ease-in-out  -translate-x-full absolute  z-10 bg-gray-50 h-screen w-screen xl:hidden"
            id="hamburger-menu">
            <div class="flex">
                <div class="basis-8/12 mx-auto relative h-screen flex flex-col justify-between">
                    <div class="top-mobile-menu">
                        <div class="float-right pt-7 lg:pt-8 ">
                            <button id="hamburger-close-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8 lg:h-10 lg:w-10"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>

                            </button>



                        </div>
                        <div class="clear-right"></div>
                        <nav class="flex flex-col items-left space-y-4 pt-4 ">
                            <?php get_template_part( 'templates/menus/main-menu', 'main-menu'  ); ?>
                        </nav>

                    </div>



                    <div class="bottom-mobile-menu">
                        <div class="flex flex-row justify-between">

                            <?php get_template_part( 'templates/icons/logged-icon', 'logged-icon', ['isMobile'=>true]); ?>


                        </div>
                        <div class="pt-8  pb-16"></div>
                       
                    </div>

                </div>
            </div>

        </div>

        <div class="pb-0 lg:md-0 flex flex-col md:flex-cols xl:flex-row xl:pb-0">
            <div class="bg-gray-100 xl:w-full  flex xl:basis-2/12 xl:flex xl:items-center  xl:h-25">
                <img src="<?php bloginfo('template_directory')?>/assets/images/logo.svg"
                    alt="<?php bloginfo('name');?> logo" class="hidden xl:block mx-auto  h-24 p-3 md:p-2">

                <div class="mobile-btn xl:hidden basis-8/12 mx-auto flex flex-row justify-between py-6">

                    <img src="<?php bloginfo('template_directory')?>/assets/images/logo.svg"
                        alt="<?php bloginfo('name');?> logo" class="h-12 md:h-24 xs:h-8">
                    <div>
                        <a href="<?php get_home_url(); ?>/#filter-event-form" class="px-4"><button id=""><svg
                                    xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg></button></a>
                        <button id="hamburger-btn" class="px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>


                    </div>



                </div>
            </div>
            <div
                class="hidden xl:flex md:basis-4/12 xl:basis-8/12 text-white  flex-col xl:flex-row items-center  xl:justify-between xl:container ">
                <nav
                    class="flex flex-col items-left space-y-4 pt-4 md:pt-8 md:pb-6   md:flex-row md:space-x-8  md:pl-4  md:space-y-0 lg:flex-row lg:space-y-0 lg:pt-5 lg:space-x-8 lg:pl-8 ">
                    <?php get_template_part( 'templates/menus/main-menu', 'main-menu' ); ?>
                </nav>

                <div class="flex pt-4  flex-row  md:items-center md:pb-4 space-x-6 md:space-x-10 lg:space-x-4">



                    <?php get_template_part( 'templates/icons/logged-icon', 'logged-icon', ['isMobile'=>false] ); ?>



                    <a href="<?php get_home_url(); ?>/#filter-event-form"><button id="search-btn"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-10 md:w-10 lg:h-6 lg:w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg></button></a>
                </div>

            </div>


            <div class="hidden  md:flex md:basis-2/12 lg:basis-2/12">

            </div>

        </div>

        <?php get_template_part( 'templates/hero-intro', 'hero-intro' ); ?>


    </header>