<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $page;?> || Omnimeat Practice Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Library CSS -->
    <link rel="stylesheet" href="assets/plugin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugin/fontawesome/css/all.min.css">
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
  </head>
  <body>
    
	  <header id="my_header">
	  	<div class="header_area">
	  		<div class="container">
	  			<div class="row">
					<div class="logo_area">
						<a href="index.php">
							<img src="assets/img/logo.png" alt="">
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
								<a href="product.php">Products</a>
								<span class="mobile_sub_menu_toggle"><i class="fas fa-caret-down"></i></span>
								<ul>
									<li><a href="product_details.php">Bread</a></li>
									<li><a href="product_details.php">Sauce</a></li>
									<li><a href="product_details.php">Meat</a></li>
								</ul>
							</li>
							<li><a class="scroll_link" href="#news_container">News</a></li>
							<li><a class="scroll_link" href="#contact_container">Contact</a></li>
                        </ul>

                        <?php }else{ ?>

                        <ul id="top-menu">
							<li class="active"><a class="" href="index.php#home_container">Home</a></li>
							<li><a class="" href="index.php#about_container">About Us</a></li>
							<li>
								<a href="product.php">Products</a>
								<span class="mobile_sub_menu_toggle"><i class="fas fa-caret-down"></i></span>
								<ul>
									<li><a href="product_details.php">Bread</a></li>
									<li><a href="product_details.php">Sauce</a></li>
									<li><a href="product_details.php">Meat</a></li>
								</ul>
							</li>
							<li><a class="" href="index.php#news_container">News</a></li>
							<li><a class="" href="index.php#contact_container">Contact</a></li>
                        </ul>


                        <?php }?>
                        
					</div>
	  			</div>
	  		</div>
	  	</div>
	  </header>