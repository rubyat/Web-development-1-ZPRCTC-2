<?php $page = 'Home';?>
<?php include"inc/header.php";?>

	  <section id="home_container" class="slider_area">
	  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
			<div class="carousel-inner">

				<?php 

					$sliders = array(

						array('title' => 'Bringing you the latest trends in food products.',),
						array('title' => 'Bringing you the latest trends in food products. 1',),
						array('title' => 'Bringing you the latest trends in food products. 2',),
						array('title' => 'Bringing you the latest trends in food products. 3',),
						array('title' => 'Bringing you the latest trends in food products. 4',),

					);
				
				?>

				<?php foreach($sliders as $key => $slider){?>
				<div class="carousel-item <?= ($key == 0)?'active':''; ?> ">
					<div class="single_slider">
						<div class="container">
							<div class="row">
								<div class="col-md-5">
									<h1><?php echo $slider['title'];?></h1>
								</div>
							</div>
						</div>
					</div>
				</div>
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
						
							$products = array(

								array(
									'title' => 'BREAD.',
									'icon' => 'assets/img/icon_1.png',
								),
								array(
									'title' => 'SPICE&SAUCE.',
									'icon' => 'assets/img/icon_2.png',
								),
								array(
									'title' => 'MEAT.',
									'icon' => 'assets/img/icon_3.png',
								),
								array(
									'title' => 'PASTRY.',
									'icon' => 'assets/img/icon_4.png',
								),
								array(
									'title' => 'CANNED.',
									'icon' => 'assets/img/icon_5.png',
								),
								array(
									'title' => 'FISH.',
									'icon' => 'assets/img/icon_6.png',
								),

							);
						
						?>

						<?php foreach($products as $product){?>
	  						<div class="col-md-4 col-6">
								<div class="single_product">
									<a href="product_details.php">
										<img src="<?php echo $product['icon'];?>" alt="">
										<p><?php echo $product['title'];?></p>
									</a>
								</div>
						  	</div>
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

						$all_news = array(
							array(
								'title' => 'NEWS 1',
								'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore ',
								'image' => 'assets/img/news_1.jpg',
								'class' => 'img_big',
							),
							array(
								'title' => 'NEWS 2',
								'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore ',
								'image' => 'assets/img/news_2.jpg',
								'class' => 'img_big',
							),
							array(
								'title' => 'NEWS 3',
								'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,',
								'image' => 'assets/img/news_3.jpg',
								'class' => 'img_big_2',
							),
							array(
								'title' => 'NEWS 4',
								'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,',
								'image' => 'assets/img/news_4.jpg',
								'class' => 'img_big_2',
							),
							array(
								'title' => 'NEWS 5',
								'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,',
								'image' => 'assets/img/news_1.jpg',
								'class' => 'img_big_2',
							),
							array(
								'title' => 'NEWS 6',
								'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
								'image' => 'assets/img/news_2.jpg',
								'class' => '',
							),
							array(
								'title' => 'NEWS 7',
								'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
								'image' => 'assets/img/news_3.jpg',
								'class' => '',
							),
							array(
								'title' => 'NEWS 8',
								'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
								'image' => 'assets/img/news_4.jpg',
								'class' => '',
							),
							array(
								'title' => 'NEWS 9',
								'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore',
								'image' => 'assets/img/news_1.jpg',
								'class' => '',
							),
							
						);
					
					?>
	  				
	  				
	  				<div class="news_block_area">
						  
						
						<?php foreach($all_news as $news){?>
						<div class="single_news <?php echo $news['class'];?>">
							<div class="news_image ">
								<a href="news_details.php">
									<img src="<?php echo $news['image'];?>" alt="">
								</a>
							</div>
							<div class="news_text">
								<h2><?php echo $news['title'];?></h2>
								<p><?php echo $news['details'];?></p>
								<a href="news_details.php">Read more</a>
							</div>
						</div>
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
	 