<?php get_header();?>



<?php 
		if(!is_page(10)){
			 get_template_part('template-parts/content','home');
		}else{
			 get_template_part('template-parts/content','contact-us-by-email');
		}
	
	?>


<?php get_footer(); ?>