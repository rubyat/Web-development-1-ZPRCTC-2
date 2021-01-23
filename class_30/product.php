<?php $page = 'Product';?>
<?php include"inc/header.php";?>

	  <section class="page_banner_area">
	  	<div class="page_banner">
	  		<img src="assets/img/news_banner.jpg" class="image-fluid" alt="">
	  		<h1>Product.</h1>
	  	</div>
	  </section>

	  
	  <section class="page_content_area">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-10 offset-md-1">
	  				<div class="section_title text-center">
	  					<h1>OUR PRODUCTS.</h1>
	  				</div>
	  				
	  				<div class="details_area text-justify">
	  					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia 
	  				</div>
	  				
	  				
	  				<div class="news_page_block_area mt-5">
	  					
	  					
						<div class="row">
						
							<?php 

								include"admin/inc/con.php";
								$sql = "SELECT * FROM product";
								$result = $conn->query($sql);
							
							?>
						
							<?php if ($result->num_rows > 0) { ?>
								<?php while($product = $result->fetch_assoc()) {?>
									<div class="col-md-3">
										<div class="page_single_news">
											<div class="page_news_image ">
												<a href="product_details.php?product_id=<?php echo $product['product_id'];?>">
													<img style="width:250px; height:270px;" class="image-fluid" src="uploads/<?php echo $product['image'];?>" alt="">
												</a>
											</div>
											<div class="page_news_text">
												<a href="product_details.php?product_id=<?php echo $product['product_id'];?>">
													<h2><?php echo $product['title'];?></h2>
												</a>
											</div>
										</div>
									</div>
								<?php }?>
							<?php }?>
							
							
							
							
							
							
						</div>
	  					
						
						
	  				</div>
	  				
	  			</div>
	  		</div>
	  	</div>
	  </section>
	  
	  <?php include"inc/footer.php";?>