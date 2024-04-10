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
        <a href="package.php" class="logo">travel</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>
    </section>

    <div class="heading" style="background:url(header-bg-2.png)no-repeat">
        <h1>Book Now</h1>
    </div>

    <section class="items">
        <div class="heading" style="background:url(header-bg-2.png) no-repeat;">
            <h1>Book Now</h1>
        </div>

        <?php

        include("config.php");
        
        $search = $_POST["search"];
        $sql = "SELECT * FROM book WHERE Name LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_row($result)) {
            // Display each result inside the loop
            echo"<h3>{$row [1]}</h3>";
            echo("<img src= '$row[4]'>");

            // Add other elements you want to display
        }
        ?>


    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var items = document.querySelectorAll('.item');

            items.forEach(function (item) {
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
        <!-- Your footer content here -->
    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

 

