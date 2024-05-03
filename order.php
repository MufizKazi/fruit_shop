
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Order Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffb3b3;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        label {
            width: 100%;
            margin-bottom: 10px;
            color: #333;
            display: flex;
            align-items: center;
        }
        input[type="text"] {
            width: calc(50% - 10px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #f58585;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        .fruit-img {
            width: 50px;
            height: auto;
            margin-right: 10px;
            vertical-align: middle;
        }
        .price {
            margin-left: auto;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Order Your Fruits</h1>
        <form id="orderForm" action="process_order.php" method="post" >
            
             <input
              type="email"
              name="email"
              id="email"
              placeholder="Enter Email Address"
              required
            />
            <input
              type="text"
              name="address"
              id="address"
              placeholder="Enter Delivery Address"
              required
            /> 
            <label for="mango">
                <img src="mango.png" alt="Mango" class="fruit-img">
                Mango
                <span class="price">Rs.150/kg</span>
            </label>
            <input type="text" id="mango" name="mango" placeholder="Enter quantity">

            <label for="orange">
                <img src="orange.png" alt="Orange" class="fruit-img">
                Orange
                <span class="price">Rs.90/kg</span>
            </label>
            <input type="text" id="orange" name="orange" placeholder="Enter quantity">

            <label for="watermelon">
                <img src="watermelon.png" alt="Watermelon" class="fruit-img">
                Watermelon
                <span class="price">Rs.50/Unit</span>
            </label>
            <input type="text" id="watermelon" name="watermelon" placeholder="Enter quantity">

            <label for="pineapple">
                <img src="pineapple.png" alt="Pineapple" class="fruit-img">
                Pineapple
                <span class="price">Rs.80/unit</span>
            </label>
            <input type="text" id="pineapple" name="pineapple" placeholder="Enter quantity">

            <label for="strawberry">
                <img src="strawberry.png" alt="Strawberry" class="fruit-img">
                Strawberry
                <span class="price">Rs.90/kg</span>
            </label>
            <input type="text" id="strawberry" name="strawberry" placeholder="Enter quantity">

            <label for="submit"></label>
            <input type="submit" id="submit" value="Place Order">
        </form>
        <p id="totalPrice"></p>
    </div>

    <script>
       
        document.addEventListener('DOMContentLoaded', function() {
            var calculateTotalPrice = function() {
                var mangoQty = parseInt(document.getElementById('mango').value) || 0;
                var orangeQty = parseInt(document.getElementById('orange').value) || 0;
                var watermelonQty = parseInt(document.getElementById('watermelon').value) || 0;
                var pineappleQty = parseInt(document.getElementById('pineapple').value) || 0;
                var strawberryQty = parseInt(document.getElementById('strawberry').value) || 0;

                var mangoPrice = 150; // Price per mango
                var orangePrice = 90; // Price per orange
                var watermelonPrice = 50; // Price per watermelon
                var pineapplePrice = 80; // Price per pineapple
                var strawberryPrice = 90; // Price per strawberry

                var totalPrice = (mangoQty * mangoPrice) + (orangeQty * orangePrice) + 
                                 (watermelonQty * watermelonPrice) + (pineappleQty * pineapplePrice) + 
                                 (strawberryQty * strawberryPrice);

                document.getElementById('totalPrice').textContent = 'Total Price: $' + totalPrice.toFixed(2);
            };

            // Attach input event listeners to each fruit input field
            var fruitInputs = document.querySelectorAll('input[type="text"]');
            fruitInputs.forEach(function(input) {
                input.addEventListener('input', calculateTotalPrice);
            });
        });

    </script>
    

</body>
</html>
