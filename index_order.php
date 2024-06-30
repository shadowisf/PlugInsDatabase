<!DOCTYPE html>
<html lang="en">

<head>
    <title>ORDER DETAILS</title>
</head>

<body>
    <center>
        <h1>ORDER DETAILS</h1>

        <p>Enter all necessary order details below.</p>

        <p>‎</p>

        <p>
        <form action="insert_order.php" method="post">

            <label for="customer">Customer:</label>
            <select name="customer_id">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "plug-ins");
                $stmt = mysqli_prepare($conn, "SELECT customer_id, customer_name FROM customer");
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $customer_id, $customer_name);

                while (mysqli_stmt_fetch($stmt)) {
                    echo "<option value=\"$customer_id\">$customer_name</option>";
                }

                mysqli_stmt_close($stmt);
                mysqli_close($conn);
                ?>
            </select>

            </p>

            <p>
                <label for="staff">Staff:</label>
                <select name="staff_id">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "plug-ins");
                    $stmt = mysqli_prepare($conn, "SELECT staff_id, staff_name FROM staff");
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $staff_id, $staff_name);

                    while (mysqli_stmt_fetch($stmt)) {
                        echo "<option value=\"$staff_id\">$staff_name</option>";
                    }

                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);
                    ?>
                </select>
            </p>

            <p>
                <label for="product">Product:</label>
                <select name="product_id">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "plug-ins");
                    $stmt = mysqli_prepare($conn, "SELECT product_id, product_name, product_price FROM product");
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $product_id, $product_name, $product_price);

                    while (mysqli_stmt_fetch($stmt)) {
                        echo "<option value=\"$product_id\">$product_name - $product_price</option>";
                    }

                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);
                    ?>
                </select>
            </p>

            <p>
                <label for="Quantity">Product Quantity:</label>
                <input type="text" name="order_product_quantity" id="o_quantity">
            </p>

            <p>
                <label for="TotalAmount">Order Total Price:</label>
                <input type="text" name="order_total_price" id="o_total">
            </p>

            <p>
                <label for="PaymentMethod">Payment Method:</label>
                <select name="order_payment_method">
                    <option value='Cash'>Cash</option>
                    <option value='Debit Card'>Debit Card</option>
                    <option value='Credit Card'>Credit Card</option>
                </select>
            </p>

            <p>
                <label for="Date">Date (YYYY-MM-DD):</label>
                <input type="text" name="order_date" id="o_date">
            </p>

            <p>‎</p>

            <input type="submit" value="PLACE ORDER">
        </form>
    </center>
</body>

</html>