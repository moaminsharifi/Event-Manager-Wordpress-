<?php 
$title = 'Veranstaltungen';
$content = 'Hier steht eine Subline';
if(is_front_page()){
    if ( have_posts() ) {
        while ( have_posts() ) {
            
            the_post();
            $title = get_the_title();
            $content = get_the_content();
        
        
                        
        }
    }
}
if(is_home() || is_front_page()): ?>
<div class="flex flex-cols md:flex-row">
    <div class="w-full h-72 flex ">
        <div
            class="flex flex-row w-full h-full bg-auto bg-no-repeat bg-center bg-hero-image p-5 md:p-0 basis-12/12 md:basis-11/12 lg:basis-10/12 ">

            <div class="py-20 md:py-24  md:basis-7/12 lg:basis-7/12 mx-auto items-left">

                <h1 class="text-white text-3xl md:text-6xl  lg:text-5xl font-semibold  mb-8">
                   <?php echo $title ?>
                </h1>
                <p class=" text-white  text-xl md:text-3xl">
                    <?php echo $content ?>
                    
                </p>

            </div>
        </div>


    </div>
</div>
<?php endif; ?>