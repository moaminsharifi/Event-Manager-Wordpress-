<div id="post-<?php the_ID(); ?>" class="flex flex-row single-event  even:bg-white odd:bg-gray-100 py-12 ">
    <div class="basis-8/12 md:space-x-0 xl:space-x-16 2xl:space-x-32 mx-auto flex-col md:flex-row xl:flex xl:flex-row ">
        <div class="basis-12/12  md:basis-10/12 xl:basis-10/12 left-side space-y-5 ">
            <nav class="text-xs space-x-2 md:text-xl lg:text-xl xl:text-base text-gray-600 ">
                <span> <?php echo get_the_date(); ?> </span> |
                <span> Beginn: <?php the_field('start_hour'); ?> </span> |
                <span> <?php the_field('type'); ?> </span>  
            </nav>
            
                <?php the_title('<h2 class="text-2xl md:text-5xl lg:text-5xl xl:text-3xl xl:font-semibold text-elancer-blue-700">', '</h2>'); ?>
            
                <?php the_excerpt('<p class="sm:leading-relaxed md:text-xl lg:text-2xl xl:text-md   md:leading-relaxed lg:leading-relaxed">', '</p>'); ?>
            

            <a href="<?php the_permalink(); ?>" class="block float-right md:text-xl lg:text-2xl  mt-6	text-elancer-blue-500">weiterlesen
                <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline md:h-8 md:w-8 lg:h-6 lg:w-6"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg></span></a>
            <div class="clear-right"></div>

        </div>

        <div
            class="basis-12/12 xl:basis-2/12  pt-14 md:flex md:flex-row  md:justify-center xl:flex-col  lg:basis-2/12 right-side space-y-5 md:space-y-0 md:space-x-16 xl:space-x-0 xl:space-y-10 md:pt-5 lg:pt-0">
            <?php
            $postThemes = get_the_terms($post->ID, 'theme', '<p class="font-light text-xl md:text-2xl lg:text-xl">', ', ', '</p>');
            $postTargetGroups = get_the_terms($post->ID, 'target_group', '<p class="font-light text-xl md:text-2xl lg:text-xl">', ', ', '</p>');
            $postExecutions = get_the_terms($post->ID, 'execution', '<p class="font-light text-xl md:text-2xl lg:text-xl">', ', ', '</p>');
            ?>

            <?php if ($postThemes): ?>
            <div class="filed-Thema">
                <h3 class="text-md md:text-xl lg:text-md text-gray-500 mb-3">Thema</h3>
                <?php
                foreach ($postThemes as $postTheme)
                {
                    echo '<p class="font-light text-xl md:text-2xl lg:text-xl">' . $postTheme->name . '</p>';
                }
                    ?>
            </div>
            <?php endif; ?>

            <?php if ($postTargetGroups): ?>
            <div class="filed-Zielgrouppe">
                <h3 class="text-md md:text-xl lg:text-md text-gray-500 mb-3">Zielgrouppe</h3>
                <?php
                foreach ($postTargetGroups as $postTargetGroup)
                {
                    echo '<p class="font-light text-xl md:text-2xl lg:text-xl">' . $postTargetGroup->name . '</p>';
                }
            ?>
            </div>
            <?php endif; ?>

            <?php if ($postExecutions): ?>
            <div class="filed-Durchfunhrung">
                <h3 class="text-md md:text-xl lg:text-md text-gray-500 mb-3">Durchfunhrung</h3>
                <?php
                foreach ($postExecutions as $postExecution)
                {
                    echo '<p class="font-light text-xl md:text-2xl lg:text-xl">' . $postExecution->name . '</p>';
                }
                ?>
            </div>
            <?php endif; ?>

        </div>
    </div>
</div>
