<?php $page = 'News Details';?>
<?php include"inc/header.php";?>

<?php 

	include"admin/inc/con.php";
	$news_id = $_GET['news_id'];
	$sql = "SELECT * FROM news WHERE news_id = $news_id";
	$result = $conn->query($sql);

	$conn->close();

	$news = $result->fetch_assoc();

?>

	  <section class="page_banner_area">
	  	<div class="page_banner">
	  		<img style="max-height:400px;" src="uploads/<?php echo $news['image'];?>" class="image-fluid" alt="">
	  		<h1>News.</h1>
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
	  					<h1><?php echo $news['title'];?></h1>
	  				</div>
	  				
	  				<div class="row product_details_page">
	  					<div class="col-md-4">
	  						<img class="img-fluid" src="uploads/<?php echo $news['side_image'];?>" alt="">
	  					</div>
	  					<div class="col-md-8">
	  						<div class="details_area text-justify">
								<?php echo $news['details'];?>
							</div>
							
							<hr>
							
	  					</div>
	  				</div>
	  				
	  				
	  				
	  			</div>
	  		</div>
	  	</div>
	  </section>
	  
<?php include"inc/footer.php";?>