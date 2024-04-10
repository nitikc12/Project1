


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <title>Your Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style1.css" />
    <link rel="stylesheet" href= "https://unpkg.com/swiper@7/swiper-bundle.min.css">
   
   <style>
    .items {
    display: flex;
    flex-wrap: wrap; /* Allow items to wrap to the next line */
    justify-content: space-around;
    align-items: flex-start; /* Align items to the start of the container */
    margin: 20px 0;
}

.item {
    text-align: center;
    width: 200px; /* Set a fixed width for each item */
    margin: 0 10px 20px; /* Add margin between items and on the bottom */
}

.item img {
    width: 100%;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out;
}

.item:hover img {
    transform: scale(1.1);
}

.item h3 {
    margin: 10px 0;
}

.item p {
    color: #888;
}
</style>

</head>
<body>
    <section class="header">
        <a href = "package.php"class="logo">travel</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
</nav>

</section>

<div class = "heading" style = "background:url(header-bg-2.png)no-repeat">
<h1>Book Now</h1>
</div>




<script>
        document.addEventListener('DOMContentLoaded', function () {
            // Restore search criteria from local storage
            document.getElementById('category').value = localStorage.getItem('selectedCategory') || 'all';
            document.getElementById('sort').value = localStorage.getItem('sortBy') || 'name';
            document.getElementById('search').value = localStorage.getItem('searchTerm') || '';

            // Apply filters based on restored criteria
            sortItemsByCategory();
            sortItems();
            searchItems();
        });

        function saveSearchCriteria() {
            // Save search criteria to local storage
            localStorage.setItem('selectedCategory', document.getElementById('category').value);
            localStorage.setItem('sortBy', document.getElementById('sort').value);
            localStorage.setItem('searchTerm', document.getElementById('search').value);
        }

        function sortItemsByCategory() {
            saveSearchCriteria();
            var selectedCategory = document.getElementById('category').value;
            var items = document.querySelectorAll('.item');

            items.forEach(function (item) {
                var itemCategory = item.dataset.category;

                if (selectedCategory === 'all' || selectedCategory === itemCategory) {
                    item.style.display = 'block';  // Display items matching the selected category
                } else {
                    item.style.display = 'none';   // Hide items not matching the selected category
                }
            });
        }

        function sortItems() {
            saveSearchCriteria();
            var sortBy = document.getElementById('sort').value;
            var items = document.querySelectorAll('.item');

            var sortedItems = Array.from(items).sort(function (a, b) {
                var aValue = a.getAttribute('data-' + sortBy);
                var bValue = b.getAttribute('data-' + sortBy);

                return aValue.localeCompare(bValue);
            });

            var container = document.querySelector('.items');
            container.innerHTML = '';

            sortedItems.forEach(function (item) {
                container.appendChild(item);
            });
        }

        function searchItems() {
            saveSearchCriteria();
            var searchTerm = document.getElementById('search').value.toLowerCase();
            var items = document.querySelectorAll('.item');

            items.forEach(function (item) {
                var itemName = item.dataset.name.toLowerCase();

                if (itemName.includes(searchTerm)) {
                    item.style.display = 'block';  // Display items matching the search term
                } else {
                    item.style.display = 'none';   // Hide items not matching the search term
                }
            });
        }
    </script>



<!-- Add this inside your <div class="sort-dropdown"> ... </div> -->
<div class="sort-dropdown">
    <label for="category">Sort by Category:</label>
    <select id="category" name="category" onchange="sortItemsByCategory()">
        <option value="all">All Categories</option>
        <option value="Adventure">Adventure</option>
        <option value="City Tour">City Tour</option>
        <option value="Beach Vacation">Beach Vacation</option>
        <!-- Add more options for other categories as needed -->
    </select>
</div>

<!-- Add this script after your existing script -->
<script>
    function sortItemsByCategory() {
        var selectedCategory = document.getElementById('category').value;
        var items = document.querySelectorAll('.item');

        items.forEach(function (item) {
            var itemCategory = item.dataset.category;

            if (selectedCategory === 'all' || selectedCategory === itemCategory) {
                item.style.display = 'block';  // Display items matching the selected category
            } else {
                item.style.display = 'none';   // Hide items not matching the selected category
            }
        });
    }
</script>




    <label for="sort">Sort by:</label>
    <select id="sort" name="sort" onchange="sortItems()">
        <option value="name">Name</option>
        <option value="price">Price</option>
    </select>

    <label for="search">Search:</label>
    <input type="text" id="search" oninput="searchItems()" placeholder="Search by name">

    <!-- Add more input fields or dropdowns for additional search criteria -->
</div>







<script>
    function sortItemsByCategory() {
        var selectedCategory = document.getElementById('category').value;
        var items = document.querySelectorAll('.item');

        items.forEach(function (item) {
            var itemCategory = item.dataset.category;

            if (selectedCategory === 'all' || selectedCategory === itemCategory) {
                item.style.display = 'block';  // Display items matching the selected category
            } else {
                item.style.display = 'none';   // Hide items not matching the selected category
            }
        });
    }

    function sortItems() {
        var sortBy = document.getElementById('sort').value;
        var items = document.querySelectorAll('.item');

        var sortedItems = Array.from(items).sort(function (a, b) {
            var aValue = a.getAttribute('data-' + sortBy);
            var bValue = b.getAttribute('data-' + sortBy);

            return aValue.localeCompare(bValue);
        });

        var container = document.querySelector('.items');
        container.innerHTML = '';

        sortedItems.forEach(function (item) {
            container.appendChild(item);
        });
    }

    function searchItems() {
        var searchTerm = document.getElementById('search').value.toLowerCase();
        var items = document.querySelectorAll('.item');

        items.forEach(function (item) {
            var itemName = item.dataset.name.toLowerCase();

            if (itemName.includes(searchTerm)) {
                item.style.display = 'block';  // Display items matching the search term
            } else {
                item.style.display = 'none';   // Hide items not matching the search term
            }
        });
    }
</script>













<section class="items">
<div class="heading" style="background:url(header-bg-2.png) no-repeat;">
    <h1>Book Now</h1>
</div>

<section class="items">
    <div class="item" data-id="item1" id="1" name="Nepal" price="29.99" data-category="Adventure">
        <img src="images/item-thumbnail.jpg" alt="Item 1" >
        <h3>Nepal</h3>
        <p>Price: $29.99</p>
        <a href="book.php" class="btn">book now</a>
    </div>

    <div class="item" data-id="item2" id="2" name="London" price="29.99" data-category="City Tour">
        <img src="images/item-thumbnail1.jpg" alt="Item 2">
        <h3>London</h3>
        <p>Price: $29.99</p>
        <a href="book.php" class="btn">book now</a>
    </div>

    <!-- Add id, data-id, data-name, data-price, and data-category attributes to other items similarly -->

    <div class="item" data-id="item3" id="3" name="Dubai" price="29.99" category="Adventure">
        <img src="images/item-thumbnail3.jpg" alt="Item 3">
        <h3>Dubai</h3>
        <p>Price: $29.99</p>
        <a href="book.php" class="btn">book now</a>
    </div>

    <div class="item" data-id="item4" id="4" name="Manchester" price="120" category="City Tour">
        <img src="images/item-thumbnail4.jpg" alt="Item 4">
        <h3>Manchester</h3>
        <p>Price: $120</p>
        <a href="book.php" class="btn">book now</a>
    </div>

    <div class="item" data-id="item5" id="5" name="India" price="30" category="Adventure">
        <img src="images/item-thumbnail5.jpg" alt="Item 5">
        <h3>India</h3>
        <p>Price: $30</p>
        <a href="book.php" class="btn">book now</a>
    </div>

    <div class="item" data-id="item6" id="6" name="Maldives" price="29.99" category="Beach Vacation">
        <img src="images/item-thumbnail6.jpg" alt="Item 6">
        <h3>Maldives</h3>
        <p>Price: $29.99</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>


        

        


    </section>


   


    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var items = document.querySelectorAll('.item');

        items.forEach(function(item) {
            var id = item.dataset.id;
            var name = item.dataset.name;
            var price = item.dataset.price;
            var category = item.dataset.category;

            // Use the retrieved data as needed
            console.log('ID:', id, 'Name:', name, 'Price:', price, 'Category:', category);
        });
    });
</script>


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

<div class="credit"> created by <span>mr . web designer</span>| all rights reserved!</div>

</section>





<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>


</body>
</html>

  

 

