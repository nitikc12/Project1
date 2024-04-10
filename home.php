<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <title>Your Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style1.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">


</head>
<body>
    <section class="header">
        <a href = "home.php"class="logo">travel</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
</nav>


<!-- Add this search input wherever you want it in your home.php file -->
<form action= "search.php"method="POST" >


<input name="search" type="text" id="searchInput" oninput="filterItemsBySearch()" placeholder="Search for item names...">
 
<button type= "submit "></button>
</form>
<!-- Add these buttons wherever you want them in your home.php file -->
<button onclick="location.href='register.php'">Register</button>



</section>
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background:url(images/home-slide-4.jpg) no-repeat">
                <div class="content">
                    <span>explore,discover,travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                <div class="content">
                    <span>explore,discover,travel</span>
                    <h3>discover the new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                <div class="content">
                    <span>explore,discover,travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
        </div>
    </div>
</section>






<style>
.home {
  padding: 0;
}

.home .swiper-slide {
  text-align: center;
  padding: 2rem;
  display: flex;
  align-items: center;
  justify-content: center;
  background-size: cover;
  background-position: center;
  min-height: 60rem;
}

.home .swiper-slide .content {
  width: 85rem;
  display: none;
}

.home .swiper-slide-active .content {
  display: inline-block;
}

.home .swiper-slide .content span {
  display: grid;
  font-size: 2.2rem;
  color: var(--light-white);
  padding-bottom: 1rem;
  animation: fadeIn 0.4s linear backwards 0.2s;
}

.home .swiper-slide .content h3 {
  font-size: 6vw;
  color: var(--white);
  text-transform: uppercase;
  line-height: 1;
  text-shadow: var(-text-shadow);
  padding: 1rem 0;
  animation: fadeIn 0.4s linear backwards 0.4s;
}

.home .swiper-slide .content .btn {
  animation: fadeIn 0.4s linear backwards 0.6s;
}
</style>














<!-- Add this dropdown box wherever you want it in your home.php file -->

    <!-- Add more items as needed -->
</section>

<script>
function filterItems() {
    var category = document.getElementById("categoryDropdown").value;
    var items = document.querySelectorAll(".item");

    items.forEach(function(item) {
        if (category === "all" || item.getAttribute("data-category") === category) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
}
</script>



</section>


<!--servives section starts-->
<section class="services">
    <h1 class="heading-title"> our services</h1>
    <div class ="box">
        <img src = "images/icon-1.png"alt="">
        <h3>adventure<h3>
</div>

<div class="box">
    <img src="images/icon-2.png" alt="">
    <h3>tour guide</h3>
</div>

<div class="box">
    <img src="images/icon-3.png" alt="">
    <h3>trekking</h3>
</div>

<div class="box">
    <img src="images/icon-4.png" alt="">
    <h3>skydiving</h3>
</div>

<div class="box">
    <img src="images/icon-5.png" alt="">
    <h3>off road</h3>
</div>

<div class="box">
    <img src="images/icon-6.png" alt="">
    <h3>camping</h3>
</div>
<!--about section-->
<section class="home-about">
    <div class="image">
        <img src="images/about-img.jpg"alt="">
</div>

<style>
    .services {
    text-align: center; /* Align boxes to the center */
}

.box {
    display: inline-block;
    width: 150px; /* Set the width as needed */
    margin: 10px; /* Adjust the margin as needed for spacing */
}

.box img {
    width: 100%;
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 10px; /* Add margin at the bottom of the image */
}

.box h3 {
    margin: 0;
}
</style>

<div class="content">
    <h3>about us</h3>
    <p>We have best experiences in travel,food,blog.</p>
    <a href="about.php" class="btn">read more</a>
</section>



<!--home package section starts-->
<section class="home-packages">
    <h1 class ="heading">Our Packages</h1>
    <div class = "box-container">
        <div class="box">
<section class="home-about">
    <div class="image">
        <img src="images/package-img1.jpg"alt="">
</div>
    
    <div class="content">
        <h3>adventure & tour</h3>
        <p>We provide most adventurous tours</p>
        <a href="book.php"class="btn">book now</a>
</div>

<section class="home-about">
    <div class="image">
        <img src="images/package-img2.jpg"alt="">
</div>
    
    <div class="content">
        <h3>adventure & tour</h3>
        <p>We provide most adventurous tours</p>
        <a href="book.php"class="btn">book now</a>
</div>
<section class="home-about">
    <div class="image">
        <img src="images/package-img7.jpg"alt="">
</div>
    
    <div class="content">
        <h3>adventure & tour</h3>
        <p>We provide most adventurous tours</p>
        <a href="book.php"class="btn">book now</a>
</div>



</div>
</section>

<script>
function filterItemsBySearch() {
    var searchInput = document.getElementById("searchInput").value.toLowerCase();
    var items = document.querySelectorAll(".item");

    items.forEach(function(item) {
        var itemName = item.querySelector("h3").textContent.toLowerCase();

        if (itemName.includes(searchInput)) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
}
</script>









</div>
<div class="load-more"><a href="package.php" class="btn">load more</a></div>

</section>










</section>

<!--footer section starts-->
<section class="footer">
    <div class="box-container">

    <div class="box">
           <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"> About</a>
            <a href="package.php"><i class="fas fa-angle-right"> Package</a>
            <a href="book.php"><i class="fas fa-angle-right"> Book</a>
</div>
     
    <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
</div>

<div class="box">
    <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +123-456-7891 </a>
        <a href="#"> <i class="fas fa-phone"></i> +121-233-7898 </a>
        <a href="#"> <i class="fas fa-phone"></i> +123-489-9800 </a>
        <a href="#"> <i class="fas fa-map"></i> Kathmandu,Nepal - 678954 </a>

</div>
<div class="box">
    <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#"> <i class="fab fa-tiktok"></i> tiktok </a>
</div>

</div>
</div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>

<div class="credit"> created by <span>mr . web designer</span>| all rights reserved!</div>
</div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var mySwiper = new Swiper('.home-slider', {
            // Optional parameters
            loop: true, // Enable looping

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>




<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>


</body>
</html>

  

 

