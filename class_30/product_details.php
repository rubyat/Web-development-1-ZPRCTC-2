<?php $page = 'Product Details';?>
<?php include"inc/header.php";?>

<?php 

	include"admin/inc/con.php";
	$product_id = $_GET['product_id'];
	$sql = "SELECT * FROM product WHERE product_id = $product_id";
	$result = $conn->query($sql);

	$conn->close();

	$product = $result->fetch_assoc();

?>

	  <section class="page_banner_area">
	  	<div class="page_banner">
	  		<img style="max-height:400px;" src="uploads/<?php echo $product['image'];?>" class="image-fluid" alt="">
	  		<h1><?php echo $product['title'];?>.</h1>
	  	</div>
	  </section>

	  
	  <section class="page_content_area">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-10 offset-md-1">
	  			
	  				<div class="page_back_button">
	  					<a href="news.html"> < BACK TO ALL NEWS </a>
	  				</div>
	  			
	  				<div class="section_title text-center">
	  					<h1><?php echo $product['title'];?>.</h1>
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
	  
	  <?php include"inc/footer.php";?>