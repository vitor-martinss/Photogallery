<!DOCTYPE html>
<html>
	<head>
		<title>Photo Gallery</title>
		<?php 
			include('header.php');
		?>
	</head>
	<body>
		<div class="wrapper">	
			<div class="slider">
				<div class="mySlides fade"><img src="images/slider/slider_nature.jpg"></div>	
				<div class="mySlides fade"><img src="images/slider/slider_bw.jpg"></div>	
				<div class="mySlides fade"><img src="images/slider/slider_dog.jpg"></div>	
				<div class="mySlides fade"><img src="images/slider/slider_space.jpg"></div>

				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>

			<div class="sections">
				<ul>
					<li>
						<div class="nature-section">
							<img src="images/sections320x768/nature.jpg">
						</div>	
						<article>NATURE</article>
						<a href="nature.php">View</a>
						
					</li>
					<li>
						<div class="dogs-section">
							<img src="images/sections320x768/dogs.jpg">
						</div>	
						<article>DOGS</article>
						<a href="dogs.php">View</a>
					</li>
					<li>
						<div class="food-section">
							<img src="images/sections320x768/food1.jpg">
						</div>	
						<article>FOOD</article>
						<a href="food.php">View</a>
					</li>
					<li>
						<div class="flowers-section">
							<img src="images/sections320x768/flower2.jpg">
						</div>	
						<article>FLOWERS</article>
						<a href="flowers.php">View</a>
					</li>
				</ul>
			</div>
			
			<div class="container-gallery">
				<div class="banner">
					<ul>
						<li>
							<img src="images/random_320x320/banner_random.jpg">
						</li>
						<li>
							<article>RANDOM</article>
						</li>
					</ul>
				</div>

				<div class="photos-gallery">
					<ul>
						<a href="images/random_big/01.jpg" data-lightbox="image01"><li><img src="images/random_320x320/01.jpg" alt="" title=""></li></a>
						<a href="images/random_big/02.jpg" data-lightbox="image01""><li><img src="images/random_320x320/02.jpg" alt="" title=""></li></a>
						<a href="images/random_big/03.jpg" data-lightbox="image01""><li><img src="images/random_320x320/03.jpg" alt="" title=""></li></a>
						<a href="images/random_big/04.jpg" data-lightbox="image01""><li><img src="images/random_320x320/04.jpg" alt="" title=""></li></a>
					</ul>
					<ul>
						<a href="images/random_big/05.jpg" data-lightbox="image01""><li><img src="images/random_320x320/05.jpg" alt="" title=""></li></a>
						<a href="images/random_big/06.jpg" data-lightbox="image01""><li><img src="images/random_320x320/06.jpg" alt="" title=""></li></a>
						<a href="images/random_big/07.jpg" data-lightbox="image01""><li><img src="images/random_320x320/07.jpg" alt="" title=""></li></a>
						<a href="images/random_big/08.jpg" data-lightbox="image01""><li><img src="images/random_320x320/08.jpg" alt="" title=""></li></a>
					</ul>
					<ul>
						<a href="images/random_big/09.jpg" data-lightbox="image01""><li><img src="images/random_320x320/09.jpg" alt="" title=""></li></a>
						<a href="images/random_big/10.jpg" data-lightbox="image01""><li><img src="images/random_320x320/10.jpg" alt="" title=""></li></a>
						<a href="images/random_big/11.jpg" data-lightbox="image01""><li><img src="images/random_320x320/11.jpg" alt="" title=""></li></a>
						<a href="images/random_big/12.jpg" data-lightbox="image01""><li><img src="images/random_320x320/12.jpg" alt="" title=""></li></a>
					</ul>
				</div>
			</div>
			<?php 
				include('footer.php');
			?>
		</div>
	</body>
</html>