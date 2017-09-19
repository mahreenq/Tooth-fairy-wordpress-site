<?php
/* Template Name: Corporate*/
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
        
        <?php get_template_part( 'template-parts/page-templates', 'corporate' ); ?>

  			<?php endwhile; // End of the loop. ?>

  		</main><!-- #main -->
  	</div><!-- #primary -->

<?php
  $i = 2;
    while($i < 4) {
      if ($i===2) {
      $servicesTitle = get_post_meta( get_the_ID(), 'services-corp_'.$i);
        		print_r($servicesTitle[0]);
      $serviceRes = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_'.$i);

      foreach($serviceRes[0] as $services) { ?>
    		<div class="padding-sm">
    			<img src= "<?php echo $services['image-corp']; ?>">
    			<p><span class="lg-blue-font"><?php echo $services['description-1'];?> </span>
    			<?php echo $services['description-2']; ?>
          <p><span class="lg-blue-font"><?php echo $services['description-3']; ?></span>
          <?php echo $services['description-4']; ?></p>
    		</div>
    		<?php }} else if ($i===3) { ?>

            <div class ="lg-blue-bkg">

      <?php $servicesTitle = get_post_meta( get_the_ID(), 'services-corp_'.$i); ?>
          <h3 class="padding-lg text-center"> <?php	print_r($servicesTitle[0]); ?> </h3>
       <?php $serviceRes = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_'.$i);

      foreach($serviceRes[0] as $services) { ?>

        <div class = "flex align-items-center padding-lg">
          <img src= "<?php echo $services['image-corp']; ?>">
          <div data-collapse>
              <div class = "text-center">
               <h4 class="showdesc black-font"><?php echo $services['description-1'];?> <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
             </div>

             <div class="hidedesc ">
                  <p ><?php echo $services['description-2']; ?></p>
                  <p ><?php echo $services['description-3']; ?></p>
                  <p ><?php echo $services['description-4']; ?></p>
            </div>

          </div>
        </div>


      <?php  } ?>



  <?php    }
      $i++;
    }?>

<?php
    $bookCorp = get_post_meta( get_the_ID(), 'scheduleAppCorp');?>
          <div class="flex justify-center padding-lg">
          <button class="med-blue-bkg white-font"> <?php echo $bookCorp[0]?> </button>
        </div>
        </div>
<?php get_footer(); ?>


<script type="text/javascript">

      jQuery(document).ready(function() {
     if (jQuery(window).width() < 480){
       var jqc = document.createElement('script');
          jqc.src = "https://rawgit.com/danielstocks/jQuery-Collapse/master/src/jquery.collapse.js";
           document.getElementsByTagName('head')[0].appendChild(jqc);
     }
   });
 </script>
