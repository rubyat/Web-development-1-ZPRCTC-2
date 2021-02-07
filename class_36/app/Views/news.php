
	
	  <section class="page_banner_area">
	  	<div class="page_banner">
	  		<img src="<?php echo base_url($news_text['image']);?>" class="image-fluid" alt="">
	  		<h1>News.</h1>
	  	</div>
	  </section>

	  
	  <section class="page_content_area">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-10 offset-md-1">
	  				<div class="section_title text-center">
	  					<h1><?php echo $news_text['title'];?></h1>
	  				</div>
	  				
	  				<div class="details_area text-justify"><?php echo $news_text['details'];?></div>
	  				
	  				
	  				<div class="news_page_block_area mt-5">
	  					
	  					
						<div class="row">
						
						
							<?php foreach($newss as $news){?>
							<div class="col-md-3">
								<div class="page_single_news">
									<div class="page_news_image ">
										<a href="<?php echo base_url('news/details/'.$news['news_id']);?>">
											<img class="image-fluid" src="<?php echo base_url($news['image']);?>" alt="">
										</a>
									</div>
									<div class="page_news_text">
										<a href="<?php echo base_url('news/details/'.$news['news_id']);?>">
										<h2><?php echo $news['title'];?></h2>
										</a>
									</div>
								</div>
							</div>
							<?php }?>


							
							
							
						</div>
	  					
						
						
	  				</div>
	  				
	  			</div>
	  		</div>
	  	</div>
	  </section>
	  