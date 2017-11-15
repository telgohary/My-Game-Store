<!doctype html>
<html lang="en">
  <head>
    <title>My Angular Project</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:300,400,500,600,700,800" rel="stylesheet">
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
	<link rel="stylesheet" href="assests/styles/css/swiper.min.css">
	<link rel="stylesheet" href="assests/styles/css/style.css">


    

  </head>
  <body id="body" ng-app="MySite">
	<div class="content-container" ng-controller="MainCtrl">
	
		<nav class="navbar navbar-expand-lg" id="main-header">
		  <a class="navbar-brand" id="nav-logo" href="#">Game Store</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon" style="height:auto;"><i style="color:#fff;" class="fa fa-bars" aria-hidden="true"></i></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav fadeInRight animated" id="nav-list">
			  <li class="nav-item active">
				<a class="nav-link" href="#">Home</a>
			  </li>
			  <li class="nav-item fadeInRight animated">
				<a class="nav-link" href="#">Categories</a>
			  </li>
			  
			   <li class="nav-item fadeInRight animated">
				<a class="nav-link active" href="#">Highlights</a>
			  </li>
			  
			   <li class="nav-item fadeInRight animated">
				<a class="nav-link" href="#">Top</a>
			  </li>
			  
			   <li class="nav-item fadeInRight animated">
				<a class="nav-link" href="#">New</a>
			  </li>
			  
			  <li class="nav-item fadeInRight animated">
				<a class="nav-link" href="#">Recommended</a>
			  </li>
			 
			  
			</ul>
			
		  </div>
		</nav>
	
	
		<div class="main-slider">
		  <input checked type=radio name="slider" id="slide1" />
		  <input type=radio name="slider" id="slide2" />
		  <input type=radio name="slider" id="slide3" />


		  <div class="slider-wrapper">
			<div class="inner">
			  <article>
	
				<img src="assests/images/2.jpg" />
			  </article>

			  <article>
				

				<img src="assests/images/1.jpg" />
			  </article>

			  <article>
				<img src="assests/images/3.jpg" />
			  </article>

			</div>
			<!-- .inner -->
		  </div>
		  <!-- .slider-wrapper -->

		  <div class="slider-dot-control">
			<label for="slide1"></label>
			<label for="slide2"></label>
			<label for="slide3"></label>

		  </div>
		  <!-- .slider-dot-control -->
		</div>
	<section>
		<div class="container" id="data-container">
			
			<div class="category-title">
			<h3>​casual​ ​games</h3>
			<hr>
			</div>
				<div class="swiper-container" id="first-game">
					<div class="swiper-wrapper">
					  <div class="swiper-slide wow fadeInRight ng-scope" ng-repeat="test in tests | limitTo:quantity">
					  <div  class="card" id="{{test.id}}" style="width:100%;" >
									  <div class="image-container"><img class="card-img-top" src="{{test.imageURL}}" alt="Card image cap"></div>
									  <div class="card-body" id="card-body">
										<h4 class="card-title">{{test.name}}</h4>
										<p class="card-text">{{test.publisher}}</p>
										<div class="rating" data-rating="{{test.rating}}">
											<div class="star"></div>
											<div class="star"></div>
											<div class="star"></div>
											<div class="star"></div>
											<div class="star"></div>
										</div>
									  </div>
									</div>
					  
					  </div>
					  
					</div>
					<!-- Add Arrows -->
					<div class="swiper-button-next" id="first-game-next"></div>
					<div class="swiper-button-prev" id="first-game-prev"></div>
					
				</div>


			  
			
			</div>
	</section>
	
	<section id="back-color">
		<div class="container" id="data-container">
			
			<div class="category-title-right" id="">
			<h3>action​ ​game</h3>
			<hr>
			</div>
				<div class="swiper-container" id="second-game">
					<div class="swiper-wrapper">
					  <div class="swiper-slide wow fadeInLeft ng-scope" ng-repeat="test in tests | limitTo:quantity">
					  <div  class="card" id="{{test.id}}" style="width:100%;" >
									  <div class="image-container"><img class="card-img-top" src="{{test.imageURL}}" alt="Card image cap"></div>
									  <div class="card-body" id="card-body">
										<h4 class="card-title">{{test.name}}</h4>
										<p class="card-text">{{test.publisher}}</p>
										<div class="rating" data-rating="{{test.rating}}">
											<div class="star"></div>
											<div class="star"></div>
											<div class="star"></div>
											<div class="star"></div>
											<div class="star"></div>
										</div>
									  </div>
									</div>
					  
					  </div>
					  
					</div>
					
					  <!-- Add Arrows -->
					<div class="swiper-button-next" id="second-game-next"></div>
					<div class="swiper-button-prev" id="second-game-prev"></div>
		
				</div>


		
		</div>
			
	</section>		
	
		
	</div>
	
	

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script  src="assests/js/slider.js"></script>
	<script  src="assests/js/swiper.min.js"></script>
	<script src="assests/js/wow.min.js"></script>
	<script src="node_modules/angular/angular.min.js"></script>
    <script src="assests/js/controllers.js"></script>s
	<script>
	
	setTimeout(function(){ 
	var swiper = new Swiper('#first-game', {
      slidesPerView: 5,
      spaceBetween: 30,
	   navigation: {
        nextEl: '#first-game-next',
        prevEl: '#first-game-prev',
      },
     breakpoints: {
    // when window width is <= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    // when window width is <= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is <= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 30
    },
	990: {
      slidesPerView: 3,
      spaceBetween: 30
    }
  },
    });
	
	
	var swiper = new Swiper('#second-game', {
      slidesPerView: 5,
      spaceBetween: 30,
	   navigation: {
        nextEl: '#second-game-next',
        prevEl: '#second-game-prev',
      },
     breakpoints: {
    // when window width is <= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    // when window width is <= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is <= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 30
    },
	990: {
      slidesPerView: 3,
      spaceBetween: 30
    }
  },
    });
	
	}, 2000);
	 
	
	</script>
	
		
    
	<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
  </body>
</html>