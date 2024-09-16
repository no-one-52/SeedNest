<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <!-- go to and copy the link bellow (https://cdnjs.com/libraries/font-awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Detailsc.css">
    <link rel="stylesheet" href="navbarc.css">
    <link rel="stylesheet" href="footerc.css">
</head>

<body>












    <?php include 'navbar.php'; ?>
    <div id="content">


        <div class="product-container">
            <div class="product-image">
                <img src="mangoes.jpg" alt="Product Image">
            </div>

            <div class="product-details">
                <h1>Mango Plant</h1>
                <p class="brand-name">Brand: <span>Amropali</span></p>
                <div class="ratings">
                    <span class="stars">★★★★☆</span>
                    <span class="rating-count">(120 reviews)</span>
                </div>
                <p class="product-description">The Amropali Mango Plant is a high-yielding variety known for its sweet and juicy fruit. Ideal for both home gardens and farms.</p>

                <div class="price">
                    <span class="discounted-price">BDT 59.99</span>
                    <span class="original-price">BDT 79.99</span>
                    <span class="discount">25% off</span>
                </div>

                <div class="availability">
                    <p><i class="fa-solid fa-truck"></i> Cash on Delivery: Available</p>
                </div>

                <div class="quantity">
                    <label for="quantity">Quantity:</label>
                    <select id="quantity" name="quantity">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="purchase-options">
                    <a href="orderp.php" class="order_button">
                        <button class="buy-now">Order Now</button>
                    </a>

                    <a href="addcartp.php" class="link_box">
                        <button class="add-to-cart"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
                    </a>
                </div>

                <div class="other-options">
                    <p>Other Options:</p>
                    <ul>
                        <!-- <li><i class="fa-solid fa-sync-alt"></i> Easy Returns</li>
                    <li><i class="fa-solid fa-shield-alt"></i> 1 Year Warranty</li> -->
                        <li><i class="fa-solid fa-question-circle"></i> 24/7 Customer Support</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>




























    <!-- </div> -->
    <div id="footer">
        <?php include 'footer.php'; ?>
    </div>



</body>

</html>

<!-- 06:00:41 done -->