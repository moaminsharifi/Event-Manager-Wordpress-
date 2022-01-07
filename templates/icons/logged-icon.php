<?php if (is_user_logged_in()): ?>
    <!-- Current User Name -->
    <?php
        global $current_user; wp_get_current_user();
        print_r(array_keys($args['isMobile']));
        if ($args['isMobile'] == true): ?>
    <div class="font-bold text-md md:text-2xl"><?php echo $current_user->display_name ?></div>
    <?php
        else: ?>
    <div class="font-bold basis-12/12 md:text-2xl lg:text-md lg:text-base md:pr-4 "><?php echo $current_user->display_name ?>
    </div>
    <?php
        endif; ?>
    <!-- user icon -->
    <a href="<?php echo site_url('/wp-admin/profile.php') ?>"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-10 md:w-10 lg:h-6 lg:w-6" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
    </svg></a>
<?php
endif; ?>
