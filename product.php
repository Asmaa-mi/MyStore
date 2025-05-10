<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "mystore");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$query = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($conn, $query);
$product = mysqli_fetch_assoc($result);

?><!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="path_to_your_existing_css_file.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div id="productImagesCarousel" class="carousel slide" data-bs-ride="carousel" >
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/5832721332528334948_121.jpg" class="d-block w-100" alt="Product Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/5836954606914095634_120.jpg" class="d-block w-100" alt="Product Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/5836954606914095633_120.jpg" class="d-block w-100" alt="Product Image 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productImagesCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productImagesCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="product-name"> <?= isset($product['product_name']) ? htmlspecialchars($product['product_name']) : 'Strawberry cake'; ?> </h1>
                <p class="product-price">Price:25$<?= isset($product['price']) ? $product['price'] : 'N/A'; ?></p>
                <p class="product-description">Description:How to get creamy and stuffed with strawberries and decorated with natural strawberries <?= isset($product['description']) ? htmlspecialchars($product['description']) : 'N/A'; ?></p>
                <p class="product-ingredients">Ingredients:Strawberries and cream, eggs, milk, flour, sugar, vanilla, strawberry jam <?= isset($product['ingredients']) ? htmlspecialchars($product['ingredients']) : 'N/A'; ?></p>
                <p class="product-rating">Customer Rating:100% <?= isset($product['rating']) ? $product['rating'] : 'N/A'; ?></p>
            </div>
            $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
             $query = "SELECT * FROM products WHERE id = $id";
        </div>

        
                <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div id="productImagesCarousel2" class="carousel slide" data-bs-ride="carousel" id="imgproduct1">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/5836954606914095663_120.jpg" class="d-block w-100" alt="Product Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/5836954606914095662_120.jpg" class="d-block w-100" alt="Product Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/5836954606914095661_120.jpg" class="d-block w-100" alt="Product Image 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productImagesCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productImagesCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="product-name"> <?= isset($product['product_name']) ? htmlspecialchars($product['product_name']) : 'Strawberry candy'; ?> </h1>
                <p class="product-price">Price:45$<?= isset($product['price']) ? $product['price'] : 'N/A'; ?></p>
                <p class="product-description">Description:How to get creamy and stuffed with strawberries and decorated with natural strawberries <?= isset($product['description']) ? htmlspecialchars($product['description']) : 'N/A'; ?></p>
                <p class="product-ingredients">Ingredients:Strawberries and cream, eggs, milk, flour, sugar, vanilla, strawberry jam <?= isset($product['ingredients']) ? htmlspecialchars($product['ingredients']) : 'N/A'; ?></p>
                <p class="product-rating">Customer Rating:76% <?= isset($product['rating']) ? $product['rating'] : 'N/A'; ?></p>
            </div>
        </div>

           <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div id="productImagesCarousel3" class="carousel slide" data-bs-ride="carousel" id="imgproduct2">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/5836954606914095673_120.jpg" class="d-block w-100" alt="Product Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/5836954606914095674_120.jpg" class="d-block w-100" alt="Product Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/5836954606914095675_120.jpg" class="d-block w-100" alt="Product Image 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productImagesCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productImagesCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="product-name"> <?= isset($product['product_name']) ? htmlspecialchars($product['product_name']) : 'Strawberry '; ?> </h1>
                <p class="product-price">Price:56$<?= isset($product['price']) ? $product['price'] : 'N/A'; ?></p>
                <p class="product-description">Description:How to get creamy and stuffed with strawberries and decorated with natural strawberries <?= isset($product['description']) ? htmlspecialchars($product['description']) : 'N/A'; ?></p>
                <p class="product-ingredients">Ingredients:Strawberries and cream, eggs, milk, flour, sugar, vanilla, strawberry jam <?= isset($product['ingredients']) ? htmlspecialchars($product['ingredients']) : 'N/A'; ?></p>
                <p class="product-rating">Customer Rating:76% <?= isset($product['rating']) ? $product['rating'] : 'N/A'; ?></p>
            </div>
        </div>

          <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div id="productImagesCarousel4" class="carousel slide" data-bs-ride="carousel" id="imgproduct3">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/5832721332528334975_120.jpg" class="d-block w-100" alt="Product Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/5834702807100409837_120.jpg" class="d-block w-100" alt="Product Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/5834702807100409838_121.jpg" class="d-block w-100" alt="Product Image 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productImagesCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productImagesCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="product-name"> <?= isset($product['product_name']) ? htmlspecialchars($product['product_name']) : 'Strawberry Soba'; ?> </h1>
                <p class="product-price">Price:15$<?= isset($product['price']) ? $product['price'] : 'N/A'; ?></p>
                <p class="product-description">Description:How to get creamy and stuffed with strawberries and decorated with natural strawberries <?= isset($product['description']) ? htmlspecialchars($product['description']) : 'N/A'; ?></p>
                <p class="product-ingredients">Ingredients:Strawberries and cream, eggs, milk, flour, sugar, vanilla, strawberry jam <?= isset($product['ingredients']) ? htmlspecialchars($product['ingredients']) : 'N/A'; ?></p>
                <p class="product-rating">Customer Rating:76% <?= isset($product['rating']) ? $product['rating'] : 'N/A'; ?></p>
            </div>
        </div>



        

         <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div id="productImagesCarousel" class="carousel slide" data-bs-ride="carousel" id="imgproduct4">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/5836954606914095668_120.jpg" class="d-block w-100" alt="Product Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/5836954606914095669_121.jpg" class="d-block w-100" alt="Product Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/5836954606914095670_121.jpg" class="d-block w-100" alt="Product Image 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productImagesCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productImagesCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="product-name"> <?= isset($product['product_name']) ? htmlspecialchars($product['product_name']) : 'Strawberry with chocolate'; ?> </h1>
                <p class="product-price">Price:56$<?= isset($product['price']) ? $product['price'] : 'N/A'; ?></p>
                <p class="product-description">Description:How to get creamy and stuffed with strawberries and decorated with natural strawberries <?= isset($product['description']) ? htmlspecialchars($product['description']) : 'N/A'; ?></p>
                <p class="product-ingredients">Ingredients:Strawberries and cream, eggs, milk, flour, sugar, vanilla, strawberry jam <?= isset($product['ingredients']) ? htmlspecialchars($product['ingredients']) : 'N/A'; ?></p>
                <p class="product-rating">Customer Rating:76% <?= isset($product['rating']) ? $product['rating'] : 'N/A'; ?></p>
            </div>
        </div>



        <a href="index.php" class="btn btn-primary mt-3">Back to Store</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>