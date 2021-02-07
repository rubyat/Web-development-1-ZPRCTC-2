

	  <section class="page_banner_area">
	  	<div class="page_banner">
	  		<img src="<?php echo base_url($product['image']);?>" class="image-fluid" alt="">
	  		<h1>Product</h1>
	  	</div>
	  </section>

	  
	  <section class="page_content_area">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-10 offset-md-1">
	  			
	  				<div class="page_back_button">
	  					<a href="<?php echo base_url('product');?>"> < BACK TO ALL PRODUCT </a>
	  				</div>
	  			
	  				<div class="section_title text-center">
	  					<h1><?php echo $product['title'];?></h1>
	  				</div>
	  				
	  				<div class="row">
	  					<div class="col-md-12">
	  						<div class="details_area text-justify">
								<?php echo $product['details'];?>
							</div>
							
	  					</div>
	  				</div>
	  				
	  				
	  				
	  			</div>
	  		</div>
	  	</div>
	  </section>
	  