<!DOCTYPE html>
<html>

<head>
    <title>ORDER PLUG-INS</title>
</head>

<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "plug-ins");

        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $customer_id = $_POST['customer_id'];
        $staff_id = $_POST['staff_id'];
        $product_id = $_POST['product_id'];
        $order_product_quantity = $_POST['order_product_quantity'];
        $order_total_price = $_POST['order_total_price'];
        $order_payment_method = $_POST['order_payment_method'];
        $order_date = $_POST['order_date'];

        // Insert data into the order table
        $o_sql = "INSERT INTO order_ (customer_id, staff_id, order_total_price, order_payment_method, order_date) VALUES ('$customer_id', '$staff_id', '$order_total_price', '$order_payment_method', '$order_date')";
        if (mysqli_query($conn, $o_sql)) {
            $order_id = mysqli_insert_id($conn);

            // Insert data into order_items table
            $oi_sql = "INSERT INTO order_items (order_id, product_id, order_product_quantity) VALUES ('$order_id', '$product_id', '$order_product_quantity')";

            mysqli_query($conn, $oi_sql);

            echo "<h3>ORDER PLACED SUCCESSFULLY</h3>";
            echo nl2br("\n Customer ID: $customer_id\n Staff ID: $staff_id\n Product ID: $product_id\n Product Quantity: $order_product_quantity\n Order Total: $order_total_price\n Payment Method: $order_payment_method\n Order Date: $order_date");
        } else {
            echo "ERROR. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>