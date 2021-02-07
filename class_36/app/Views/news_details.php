
	  <section class="page_banner_area">
	  	<div class="page_banner">
	  		<img src="<?php echo base_url($news['image']);?>" class="image-fluid" alt="">
	  		<h1>News.</h1>
	  	</div>
	  </section>

	  
	  <section class="page_content_area">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-10 offset-md-1">
	  			
	  				<div class="page_back_button">
	  					<a href="<?php echo base_url('news');?>"> < BACK TO ALL NEWS </a>
	  				</div>
	  			
	  				<div class="section_title text-center">
	  					<h1><?php echo $news['title'];?></h1>
	  				</div>
	  				
	  				<div class="row product_details_page">
	  					<div class="col-md-4">
	  						<img class="img-fluid" src="<?php echo base_url($news['side_image']);?>" alt="">
	  					</div>
	  					<div class="col-md-8">
	  						<div class="details_area text-justify">
								<?php echo $news['details'];?>
							</div>
							
							<hr>
							
	  					</div>
	  				</div>
	  				
	  				
	  				
	  			</div>
	  		</div>
	  	</div>
	  </section>
	  