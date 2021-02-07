<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $page;?> || Omnimeat Practice Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Library CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugin/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugin/fontawesome/css/all.min.css');?>">
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css');?>">
  </head>
  <body>
    
	  <header id="my_header">
	  	<div class="header_area">
	  		<div class="container">
	  			<div class="row">
					<div class="logo_area">
						<a href="index.php">
							<img src="<?php echo base_url('assets/img/logo.png');?>" alt="">
						</a>
						
						<div id="mobile_menu_toggle" class="mobile_menu_bar_area">
							<div class="mobile_menu_bar"></div>
							<div class="mobile_menu_bar"></div>
							<div class="mobile_menu_bar"></div>
						</div>
						
					</div>
					<div class="menu_area ml-auto">
                        
                        <?php if($page == 'Home'){?>
                            
                        <ul id="top-menu">
							<li class="active"><a class="scroll_link" href="#home_container">Home</a></li>
							<li><a class="scroll_link" href="#about_container">About Us</a></li>
							<li>
								<a href="<?php echo base_url('product');?>">Products</a>
								<span class="mobile_sub_menu_toggle"><i class="fas fa-caret-down"></i></span>
								<ul>
									<li><a href="<?php echo base_url('product/details');?>">Bread</a></li>
									<li><a href="<?php echo base_url('product/details');?>">Sauce</a></li>
									<li><a href="<?php echo base_url('product/details');?>">Meat</a></li>
								</ul>
							</li>
							<li><a class="scroll_link" href="#news_container">News</a></li>
							<li><a class="scroll_link" href="#contact_container">Contact</a></li>
                        </ul>

                        <?php }else{ ?>

                        <ul id="top-menu">
							<li class="active"><a class="" href="<?php echo base_url();?>#home_container">Home</a></li>
							<li><a class="" href="<?php echo base_url();?>#about_container">About Us</a></li>
							<li>
								<a href="<?php echo base_url('product');?>">Products</a>
								<span class="mobile_sub_menu_toggle"><i class="fas fa-caret-down"></i></span>
								<ul>
									<li><a href="<?php echo base_url('product/details');?>">Bread</a></li>
									<li><a href="<?php echo base_url('product/details');?>">Sauce</a></li>
									<li><a href="<?php echo base_url('product/details');?>">Meat</a></li>
								</ul>
							</li>
							<li><a class="" href="<?php echo base_url();?>#news_container">News</a></li>
							<li><a class="" href="<?php echo base_url();?>#contact_container">Contact</a></li>
                        </ul>


                        <?php }?>
                        
					</div>
	  			</div>
	  		</div>
	  	</div>
	  </header>


    <?php echo $main_content;?>



    <footer>
	  	<div class="footer_area">
	  		<div class="container">

				<div class="footer_logo">
					<a href="#">
						<img src="<?php echo base_url();?>assets/img/logo_footer.png" alt="">
					</a>
				</div>
				<div class="footer_info_area">
					<div class="footer_title"><strong>Contact</strong></div>
					<div class="row">
						<div class="col">
							<p>Grote Haag 59 <br> 3811 HH Amersfoort</p>
						</div>
						<div class="col">
							<p>
								T: +31 33 4650316 <br>
								E: info@omnimeat.com
							</p>
						</div>
					</div>
				</div>
				<div class="footer_info_area quick_link">
					<div class="footer_title"><strong>Contact</strong></div>

                    <?php 
                            
                           if($page == 'Home'){
                               $my_base_url = '';
                           }else{
                               $my_base_url = base_url();
                           }
                    ?>

					<ul>
						<li><a class="scroll_link" href="<?php echo $my_base_url;?>#home_container">Home</a></li>
						<li><a class="scroll_link" href="<?php echo $my_base_url;?>#about_container">About Us</a></li>
						<li><a href="<?php echo base_url('product');?>">Product</a></li>
						<li><a class="scroll_link" href="<?php echo $my_base_url;?>#news_container">News</a></li>
						<li><a class="scroll_link" href="<?php echo $my_base_url;?>#contact_container">Contact</a></li>
					</ul>
				</div>


			</div>
	  	</div>
	  	<div class="copy_right text-center">
	  		<p>© 2016 OMNIMEAT  |  All Rights Reservered  |  SITE BY PIXOYO</p>
	  	</div>
	  </footer>
	 
   
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugin/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>
    
    
  </body>
</html>