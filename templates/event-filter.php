<?php $themes = get_terms( array(
            'taxonomy' => 'theme',
            'hide_empty' => true,
            ) );


            $targetGroups = get_terms( array(
            'taxonomy' => 'target_group',
            'hide_empty' => true,
            ) );
 

            $executions = get_terms( array(
            'taxonomy' => 'execution',
            'hide_empty' => true,
            ) );

?>
<div class="flex flex-col md:flex-row">
    
        <form action="javascript:void(0);" id="filter-event-form" class="grid grid-rows-4 md:grid-rows-2 md:grid-cols-2   xl:grid-rows-1 xl:grid-cols-4 gap-4  md:gap-6  basis-8/12 mx-auto  pb-10 pt-8 md:pt-12 px-4 xs:px-0 ">


            <select id="filter-event-theme"
                class="h-12 md:l-12  lg:h-12 intero-select-arrow  appearance-none  border-2 font-medium text-md md:text-xl  xl:text-base border-elancer-blue-500 focus:outline-none px-6   text-elancer-blue-500   bg-white">
                <option disabled selected value="">Thema</option>
                <?php foreach ($themes as $theme) { ?>
                <option value="<?php echo $theme->slug; ?>"><?php echo $theme->name; ?></option>
                <?php } ?>

            </select>



            <select id="filter-event-target-group"
                class="h-12 md:l-12  lg:h-12 intero-select-arrow  appearance-none  border-2 font-medium text-md md:text-xl  xl:text-base border-elancer-blue-500 focus:outline-none px-6   text-elancer-blue-500   bg-white">
                <option disabled selected value="">Zielgrouppe</option>
                <?php foreach ($targetGroups as $targetGroup) { ?>
                <option value="<?php echo $targetGroup->slug ?>"><?php echo $targetGroup->name; ?></option>
                <?php } ?>


            </select>





            <select id="filter-event-execution"
                class="h-12 md:l-12  lg:h-12 intero-select-arrow  appearance-none  border-2 font-medium text-md md:text-xl  xl:text-base border-elancer-blue-500 focus:outline-none px-6   text-elancer-blue-500   bg-white">
                <option disabled selected value="">Durchfunhrung</option>
                <?php foreach ($executions as $execution) { ?>
                <option value="<?php echo $execution->slug ?>"><?php echo $execution->name; ?></option>
                <?php } ?>

            </select>


            <input  id="filter-event-keyword" 
            type="text" name="search" id="word" placeholder="Stichwort"
                class="h-12 md:l-12 lg:h-12  font-medium text-md  md:text-xl xl:text-base placeholder:text-elancer-blue-500 border-2 text-elancer-blue-500 border-elancer-blue-500  focus:outline-none focus:border-elancer-blue-500 focus:ring-elancer-blue-600 px-6">

        </form>

</div>