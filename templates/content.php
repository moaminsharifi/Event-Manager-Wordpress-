<div id="post-<?php the_ID(); ?>" class="flex flex-row single-event  even:bg-white odd:bg-gray-100 py-12 ">
    <div class="basis-8/12 md:space-x-0 xl:space-x-16 2xl:space-x-32 mx-auto flex-col md:flex-row xl:flex xl:flex-row ">
        <div class="basis-12/12  md:basis-10/12 xl:basis-10/12 left-side space-y-5 ">
            <nav class="text-xs space-x-2 md:text-xl lg:text-xl xl:text-base text-gray-600 ">
                <span> <?php the_date();?> </span> |
                <span> <?php the_author();?> </span>
            </nav>
            
                <?php the_title( '<h2 class="text-2xl md:text-5xl lg:text-5xl xl:text-3xl xl:font-semibold text-elancer-blue-700">', '</h2>' ); ?>
            
                <?php the_content('<p class="sm:leading-relaxed md:text-xl lg:text-2xl xl:text-md   md:leading-relaxed lg:leading-relaxed">', '</p>'); ?>
            

            

        </div>

        <div
            class="basis-12/12 xl:basis-2/12  pt-14 md:flex md:flex-row  md:justify-center xl:flex-col  lg:basis-2/12 right-side space-y-5 md:space-y-0 md:space-x-16 xl:space-x-0 xl:space-y-10 md:pt-5 lg:pt-0">
            <div class="filed-Kategorie">
                <h3 class="text-md md:text-xl lg:text-md text-gray-500 mb-3">Kategorie</h3>
                <?php 
                $args = array(
                    'orderby' => 'name',
                    
                );
                $categories = get_categories( $args );
                foreach ( $categories as $category ) {
                    echo '<p class="font-light text-xl md:text-2xl lg:text-xl">' . $category->name . $category->description . '</p>';
                    }
                ?>
               
               
            </div>
        </div>
    </div>
</div>