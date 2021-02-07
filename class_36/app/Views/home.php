

	  <section id="home_container" class="slider_area">
	  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
			<div class="carousel-inner">

				<?php foreach($sliders as $key => $slider){?>
				<div class="carousel-item <?= ($key == 0)?'active':''; ?> ">
					<div class="single_slider" style="background-image: url('<?php echo base_url($slider["image"]);?>')">
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
	  

	  <?php $about = $pages[0]?>
	  <section id="about_container" class="about_area">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-10 offset-md-1 text-center">
	  				<div class="section_title">
	  					<h1><?php echo $about['title'];?></h1>
	  				</div>
	  				<div class="details_area"><?php echo $about['details'];?></div>
	  			</div>
	  		</div>
	  	</div>
	  </section>
	  
	  <?php $pro_text = $pages[1]?>
	  <section id="product_container" class="product_area">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-6 ml-auto mr-auto">
	  				<div class="section_title  text-center">
	  					<h2><?php echo $pro_text['title'];?></h2>
	  				</div>
	  				<div class="row">

						<?php foreach($products as $product){?>
	  						<div class="col-md-4 col-6">
								<div class="single_product">
									<a href="<?php echo base_url('product/details/'.$product['product_id']);?>">
										<img src="<?php echo base_url($product['icon']);?>" alt="">
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
	  

	  <?php $paralux = $pages[2]?>
	  <section class="paralux_area">
	  	<div class="paralux" style="background-image:url('<?php echo base_url($paralux['image']);?>')">
	  		<div class="container">
	  			<div class="row">
	  				<div class="col-md-5">
	  					<h1><?php echo $paralux['title'];?></h1>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  </section>
	  
	  <?php $news_text = $pages[3]?>
	  <section id="news_container" class="news_area">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-10 offset-md-1">
	  				<div class="section_title text-center">
	  					<h1><?php echo $news_text['title'];?></h1>
	  				</div>
	  				
	  				<div class="details_area text-center"><?php echo $news_text['details'];?></div>
					  

					
	  				
	  				
	  				<div class="news_block_area">
						  
						
						<?php $i = 1;?>
  
						<?php foreach($newss as $news) {?>

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
									<a href="<?php echo base_url('news/details/'.$news['news_id']);?>">
										<img src="<?php echo base_url($news['image']);?>" alt="">
									</a>
								</div>
								<div class="news_text">
									<h2><?php echo $news['title'];?></h2>
									<p>
										<?php echo substr(strip_tags($news['details']),0,200);?>
									</p>
									<a href="<?php echo base_url('news/details/'.$news['news_id']);?>">Read more</a>
								</div>
							</div>
						<?php $i++;}?>



						
	  				</div>
	  				
	  				<div class="site_button_area text-center">
	  					<a href="<?php echo base_url('news');?>" class="btn btn-omni shadow">All news</a>
	  				</div>
	  				
	  			</div>
	  		</div>
	  	</div>
	  </section>
	  
	  <?php $contact = $pages[4]?>
	  <section class="banner_area">
	  	<div class="banner">
	  		<img src="<?php echo base_url($contact['image']);?>" alt="">
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
	  
	 