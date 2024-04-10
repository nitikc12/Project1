<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <!-- Your existing stylesheets and scripts -->
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

<!-- Your existing HTML code -->

<section class="items">
    <label for="category">Select Category:</label>
    <select id="category" onchange="filterItems()">
        <option value="all">All</option>
        <option value="Nepal">Nepal</option>
        <option value="India">India</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Kedarnath">Indonesia</option>
        <option value="Bhutan">Bhutan</option>
        <option value="Maldives">Maldives</option>
        <option value="Sri Lanka">Sri Lanka</option>
        <option value="Malasia">Malasia</option>
        <option value="Dubai">Dubai</option>


        <!-- Add more categories as needed -->
    </select>

    <div class="item" data-category="Nepal">
        <img src="images/item-thumbnail.jpg" alt="Item 1">
        <h3>Holiday Package: Nepal</h3>
        <p>Price: $19.99</p>
    </div>

    <div class="item" data-category="India">
        <img src="images/india.jpg" alt="Item 2">
        <h3>Holiday Package: India</h3>
        <p>Price: $19.99</p>

    </div>
    <div class="item" data-category="Indonesia">
        <img src="images/indonesia.jpg" alt="Item 3">
        <h3>Holiday Package: Indonesia</h3>
        <p>Price: $19.99</p>
    </div>

    <div class="item" data-category="Kedarnath">
        <img src="images/item-Kedarnath.jpg" alt="Item 1">
        <h3>Holiday Package: Nepal</h3>
        <p>Price: $19.99</p>
    </div>

    <div class="item" data-category="Bhutan">
        <img src="images/item-Bhutan.jpg" alt="Item 1">
        <h3>Holiday Package: Nepal</h3>
        <p>Price: $19.99</p>
    </div>
    
    <!-- Add more items with their respective categories -->

</section>
<style>
    .items {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: flex-start;
}

.item {
    width: 200px;
    margin: 10px;
    text-align: center;
}

.item img {
    width: 100%; /* Make the images take up 100% of the width of their parent container */
    max-width: 100%; /* Ensure the images don't exceed their natural size */
    height: auto; /* Maintain the aspect ratio of the images */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out;
}

.item:hover img {
    transform: scale(1.1);
}


    </style>

<!-- Your existing scripts -->

<script>
    function filterItems() {
        var category = document.getElementById('category').value;
        var items = document.querySelectorAll('.item');

        items.forEach(function(item) {
            var itemCategory = item.getAttribute('data-category');

            if (category === 'all' || itemCategory === category) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
</script>

</body>
</html>


  

 

