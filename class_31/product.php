<?php $page = 'Product';?>
<?php include"inc/header.php"; include"admin/inc/con.php";?>

<?php
			
		$sql = "SELECT * FROM page WHERE page_id = 2";
		$result = $conn->query($sql);
		$product_page = $result->fetch_assoc();
	
?>

	  <section class="page_banner_area">
	  	<div class="page_banner">
	  		<img src="uploads/<?php echo $product_page['image'];?>" class="image-fluid" alt="">
	  		<h1>Product.</h1>
	  	</div>
	  </section>

	  
	  <section class="page_content_area">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-10 offset-md-1">
	  				<div class="section_title text-center">
	  					<h1><?php echo $product_page['title'];?></h1>
	  				</div>
	  				
	  				<div class="details_area text-justify"><?php echo $product_page['details'];?></div>
	  				
	  				
	  				<div class="news_page_block_area mt-5">
	  					
	  					
						<div class="row">
						
							<?php 

								
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