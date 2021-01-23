<?php $page = 'Home';?>
<?php include"inc/header.php";?>

<?php

	include"admin/inc/con.php";
	$sql = "SELECT * FROM slider";
	$result = $conn->query($sql);
	

?>

	  <section id="home_container" class="slider_area">
	  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
			<div class="carousel-inner">

				

				<?php $i = 0;?>
                    <?php if ($result->num_rows > 0) { ?>
                        <?php while($row = $result->fetch_assoc()) {?>
							<div class="carousel-item <?= ($i == 0)?'active':''; ?> ">
								<div class="single_slider" style="background-image: url('uploads/<?php echo $row["image"];?>')">
									<div class="container">
										<div class="row">
											<div class="col-md-5">
												<h1><?php echo $row['title'];?></h1>
											</div>
										</div>
									</div>
								</div>
							</div>
					<?php $i++;}?>
				<?php }?>
				
				
			</div>
		</div>
	  </section>
	  
	  <section id="about_container" class="about_area">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-10 offset-md-1 text-center">
	  				<div class="section_title">
	  					<h1>About Omnimeat.</h1>
	  				</div>
	  				<div class="details_area">
	  					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  </section>
	  
	  <section id="product_container" class="product_area">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-6 ml-auto mr-auto">
	  				<div class="section_title  text-center">
	  					<h2>OUR PRODUCTS</h2>
	  				</div>
	  				<div class="row">

						<?php

							$sql = "SELECT * FROM product";
							$result = $conn->query($sql);
							
						?>
						
						<?php if ($result->num_rows > 0) { ?>
							<?php while($product = $result->fetch_assoc()) {?>
								<div class="col-md-4 col-6">
									<div class="single_product">
										<a href="product_details.php?product_id=<?php echo $product['product_id'];?>">
											<img src="uploads/<?php echo $product['icon'];?>" alt="">
											<p><?php echo $product['title'];?></p>
										</a>
									</div>
								</div>
							<?php }?>
						<?php }?>
	  					
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  </section>
	  
	  <section class="paralux_area">
	  	<div class="paralux">
	  		<div class="container">
	  			<div class="row">
	  				<div class="col-md-5">
	  					<h1>Meat for your taste buds.</h1>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  </section>
	  
	  <section id="news_container" class="news_area">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-10 offset-md-1">
	  				<div class="section_title text-center">
	  					<h1>News.</h1>
	  				</div>
	  				
	  				<div class="details_area text-center">
	  					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat volupt
					  </div>
					  

					<?php

						$sql = "SELECT * FROM news LIMIT 9";
						$result = $conn->query($sql);
						
						$conn->close();
					?>
	  				
	  				
	  				<div class="news_block_area">
						  
						
						<?php $i = 1;?>
                    	<?php if ($result->num_rows > 0) { ?>
							<?php while($news = $result->fetch_assoc()) {?>

								<?php 
									$class = '';

									if($i == 1 || $i == 2){
										$class = 'img_big';
									}elseif($i == 3 || $i == 4 || $i == 5){
										$class = 'img_big_2';
									}
									
								?>

								<div class="single_news <?php echo $class;?>">
									<div class="news_image ">
										<a href="news_details.php?news_id=<?php echo $news['news_id'];?>">
											<img src="uploads/<?php echo $news['image'];?>" alt="">
										</a>
									</div>
									<div class="news_text">
										<h2><?php echo $news['title'];?></h2>
										<p>
											<?php echo substr(strip_tags($news['details']),0,200);?>
										</p>
										<a href="news_details.php?news_id=<?php echo $news['news_id'];?>">Read more</a>
									</div>
								</div>
							<?php $i++;}?>
						<?php }?>



						
	  				</div>
	  				
	  				<div class="site_button_area text-center">
	  					<a href="news.php" class="btn btn-omni shadow">All news</a>
	  				</div>
	  				
	  			</div>
	  		</div>
	  	</div>
	  </section>
	  
	  <section class="banner_area">
	  	<div class="banner">
	  		<img src="assets/img/banner_2.jpg" alt="">
	  		<div class="banner_glob">
	  			<img src="assets/img/glob.png" alt="">
	  		</div>
	  	</div>
	  </section>
	  
	  <section id="contact_container" class="address_area">
	  	 <div class="container-fluid">
	  	 	<div class="address_part">
	  	 		<div class="add_logo text-center">
	  	 			<img src="assets/img/logo_middle.png" alt="">
	  	 		</div>
	  	 		<div class="address">
	  	 			<div class="location">
	  	 				<p>Grote Haag 59 <br> 3811 HH Amersfoort</p>
	  	 			</div>
	  	 			<div class="tel_email">
	  	 				<p><b>T:</b> +31 33 4650316</p>
	  	 				<p><b>E:</b> info@omnimeat.com</p>
	  	 			</div>
	  	 		</div>
	  	 	</div>
	  	 	<div class="map_form_area">
	  	 		<div class="row">
	  	 			<div class="col-md-6 map_part">
	  	 				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.531279770473!2d89.24851214233864!3d25.753009692575596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e32dfe5bc323ad%3A0x8e2e13a06a9810c!2sZilla%20Parishad%20Bhaban!5e0!3m2!1sen!2sbd!4v1607775137409!5m2!1sen!2sbd" width="100%" height="320" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	  	 			</div>
	  	 			<div class="col-md-6">
	  	 				<div class="form_area">
	  	 					<form action="">
	  	 						<div class="row">
	  	 							<div class="col-md-6">
	  	 								<input placeholder="Name" class="form-control" type="text" name="" id="">
	  	 							</div>
	  	 							<div class="col-md-6">
	  	 								<input placeholder="Company" class="form-control" type="text" name="" id="">
	  	 							</div>
	  	 							<div class="col-md-6">
	  	 								<input placeholder="Telephone" class="form-control" type="text" name="" id="">
	  	 							</div>
	  	 							<div class="col-md-6">
	  	 								<input placeholder="Email" class="form-control" type="email" name="" id="">
	  	 							</div>
	  	 							<div class="col-md-12">
	  	 								<div class="mgs_txt_btn">
	  	 									<textarea class="form-control" placeholder="Message" name="" id="" cols="30" rows="5"></textarea>
	  	 									<button class="send_btn" type="submit">Send</button>
	  	 								</div>
	  	 							</div>
	  	 							
	  	 							
	  	 						</div>
	  	 						
	  	 						
	  	 					</form>
	  	 				</div>
	  	 			</div>
	  	 		</div>
	  	 	</div>
	  	 </div>
	  </section>
	  
<?php include"inc/footer.php";?>
	 