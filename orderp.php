<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Now</title>
        <!-- go to and copy the link bellow (https://cdnjs.com/libraries/font-awesome) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="orderc.css">
        <link rel="stylesheet" href="navbarc.css">
        <link rel="stylesheet" href="footerc.css">
    </head>
    <body>
        












        
    <?php include 'navbar.php'; ?>
        <div id="content">

        <div class="checkout-container">
            <div class="billing-details">
                <h2>Billing details</h2>
                <form id="billing-form">
                    <label for="first-name">First name <span class="required">*</span></label>
                    <input type="text" id="first-name" name="first-name" required>

                    <label for="last-name">Last name <span class="required">*</span></label>
                    <input type="text" id="last-name" name="last-name" required>

                    <label for="company-name">Company name (optional)</label>
                    <input type="text" id="company-name" name="company-name">

                    <label for="country">Country / Region <span class="required">*</span></label>
                    <select id="country" name="country" required>
                        <option value="Bangladesh">Bangladesh</option>
                        <!-- Add more countries as needed -->
                    </select>

                    <label for="street-address">Street address <span class="required">*</span></label>
                    <input type="text" id="street-address" name="street-address" placeholder="House number and street name" required>
                    <input type="text" id="apartment" name="apartment" placeholder="Apartment, suite, unit, etc. (optional)">

                    <label for="city">Town / City <span class="required">*</span></label>
                    <input type="text" id="city" name="city" required>

                    <label for="district">District <span class="required">*</span></label>
                    <select id="district" name="district" required>
                        <option value="">Select an option...</option>
                        <!-- Add district options as needed -->
                    </select>

                    <label for="postcode">Postcode / ZIP (optional)</label>
                    <input type="text" id="postcode" name="postcode">

                    <label for="payment-method">Payment method</label>
                    <div class="payment-methods">
                        <label>
                            <input type="radio" name="payment" value="cod" checked>
                            Cash on delivery
                        </label>
                        <label>
                            <input type="radio" name="payment" value="bkash">
                            bKash Payment
                        </label>
                    </div>

                    <div class="terms">
                        <label>
                            <input type="checkbox" required>
                            I have read and agree to the website <a href="#">terms and conditions</a> <span class="required">*</span>
                        </label>
                    </div>

                    <button type="submit" class="place-order-btn">Place order</button>
                </form>
            </div>

            <div class="order-summary">
                <h2>Your order</h2>
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Subtotal</th>
                    </tr>
                    <tr>
                        <td>9 item SeedsMate mini packet × 1</td>
                        <td>300.00৳</td>
                    </tr>
                    <tr>
                        <td>Subtotal</td>
                        <td>300.00৳</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>300.00৳</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>
    <script src="orderj.js"></script>



    <div id="footer">
  <?php include 'footer.php'; ?>
  </div>

















      
    
    
    
        
        
    
    
    </body>
    </html>

     
