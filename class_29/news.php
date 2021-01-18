<?php $page = 'News';?>
<?php include"inc/header.php";?>

	  <section class="page_banner_area">
	  	<div class="page_banner">
	  		<img src="assets/img/news_banner.jpg" class="image-fluid" alt="">
	  		<h1>News.</h1>
	  	</div>
	  </section>

	  
	  <section class="page_content_area">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-10 offset-md-1">
	  				<div class="section_title text-center">
	  					<h1>THE LATEST NEWS.</h1>
	  				</div>
	  				
	  				<div class="details_area text-justify">
	  					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia 
	  				</div>
	  				
	  				
	  				<div class="news_page_block_area mt-5">
	  					
	  					
						<div class="row">
						
						
							<?php 

								$all_news = array(
									array(
										'title' => 'Meat',
										'image' => 'assets/img/news/news_1.jpg',
									),
									array(
										'title' => 'SPECIALITY ANIMAL RAW MATERIAL',
										'image' => 'assets/img/news/news_2.jpg',
									),
									array(
										'title' => 'Bread',
										'image' => 'assets/img/news/news_3.jpg',
									),
									array(
										'title' => 'SPICES HERBS & SAUCES',
										'image' => 'assets/img/news/news_4.jpg',
									),
									array(
										'title' => 'Meat',
										'image' => 'assets/img/news/news_5.jpg',
									),
									array(
										'title' => 'Meat',
										'image' => 'assets/img/news/news_6.jpg',
									),
									array(
										'title' => 'Meat',
										'image' => 'assets/img/news/news_7.jpg',
									),
									array(
										'title' => 'Meat',
										'image' => 'assets/img/news/news_8.jpg',
									),
									array(
										'title' => 'Meat',
										'image' => 'assets/img/news/news_9.jpg',
									),
									array(
										'title' => 'Meat',
										'image' => 'assets/img/news/news_10.jpg',
									),
									array(
										'title' => 'Meat',
										'image' => 'assets/img/news/news_11.jpg',
									),
									array(
										'title' => 'Meat',
										'image' => 'assets/img/news/news_12.jpg',
									),
									
									
								);
							
							?>


							<?php foreach($all_news as $news){?>
							<div class="col-md-3">
								<div class="page_single_news">
									<div class="page_news_image ">
										<a href="news_details.php">
											<img class="image-fluid" src="<?php echo $news['image'];?>" alt="">
										</a>
									</div>
									<div class="page_news_text">
										<a href="news_details.php">
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
	  
	  <?php include"inc/footer.php";?>