 <footer class="flex md:flex-row  bg-elancer-blue-700 text-white pt-7 pb-5 ">
     <section
         class="flex flex-col xl:flex-row xl:justify-between  space-y-3 md:space-y-0  md:flex-col items-center lg:basis-8/12  mx-auto">
         <nav class="flex flex-col space-y-3 md:space-y-0 md:space-x-10 md:pl-8 lg:pl-0 md:flex-row ">
             <?php get_template_part( 'templates/menus/footer-menu', 'footer-menu' ); ?>
         </nav>
         <p class="font-light pb-2 md:pb-0 md:pt-2 lg:pt-2 xl:pt-0">&copy; <?php echo date("Y");?> <?php bloginfo('name');?></p>
     </section>
 </footer>
 </body>
</html>