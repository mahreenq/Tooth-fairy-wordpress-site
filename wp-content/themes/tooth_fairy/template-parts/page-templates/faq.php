<h1 class="text-center">
	<?php the_title();  ?>
</h1>
	<div class="lg-blue-bkg ">
		<div class="row padding-med">
			<?php $faqs = get_post_meta(get_the_ID(), 'wiki_test_repeat_group'); ?>
			<?php foreach($faqs[0] as $faq => $question) { ?>
		    <div class="padding-lg" >
							<h4 class="padding-sm show"  data-toggle="answer<?php echo $faq ?>" >
					 			<?php echo $question['question']; ?>
				 				<i class="fa fa-angle-down d-hide" aria-hidden="true"></i>
		  				</h4>
		     			<p class="hideservices padding-left-lg hideservices " id="answer<?php echo $faq ?>">
					 			<?php  echo $question['answer'];?>
				 			</p>
		 		</div>
	    <?php }?>
	  </div>
	</div>
