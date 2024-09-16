<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <!-- go to and copy the link bellow (https://cdnjs.com/libraries/font-awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="addcartc.css">
    <link rel="stylesheet" href="navbarc.css">
    <link rel="stylesheet" href="footerc.css">
</head>
<body>
    




<?php include 'navbar.php'; ?>
    <div id="content">
    <div class="shopping-cart-container">
        <div class="shopping-cart-header">
            <h1>Shopping Cart</h1>
        </div>

        <div class="table-responsive">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th colspan="2">Item Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cart-item-image">
                            <img src="https://www.theseedcollection.com.au/assets/thumb/Z-10162_P.jpg?20240405094538" alt="Alpine Goldenrod">
                        </td>
                        <td class="cart-item-title">Alpine Goldenrod</td>
                        <td class="cart-item-quantity"><input type="number" value="1"></td>
                        <td class="cart-item-price">BDT 300</td>
                        <td><button class="btn-remove"><i class="far fa-trash-alt"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between">
            <a href="index.php" class="btn-continue-shopping"><i class="fa fa-arrow-left"></i> Continue Shopping</a>
            <a href="addcartp.php" class="btn-checkout">Checkout Now</a>
        </div>

        <div class="shipping-calculator">
            <h2>Shipping Calculator</h2>
            <form id="shipping-form">
                <label for="country">Country</label>
                <select id="country">
                    <option value="AU">banglaseh</option>
                </select>
                <label for="postcode">Post Code</label>
                <input type="text" id="postcode" placeholder="Enter your postal code">
                <button type="submit" class="btn-calculate">Calculate Shipping</button>
            </form>
        </div>

        <div class="totals">
            <div class="totals-row">
                <span>Sub Total</span>
                <span>BDT 300</span>
            </div>
            <div class="totals-row">
                <span>GST Inc.</span>
                <span>BDT 20</span>
            </div>
            <div class="totals-row">
                <span>Shopping Cart Total</span>
                <span>BDT 320</span>
            </div>
        </div>
    </div>
    </div>

    <script src="addcartj.js"></script>




    <div id="footer">
  <?php include 'footer.php'; ?>
  </div>






    
    



</body>

</html>