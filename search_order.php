<!DOCTYPE html>
<html lang="en">

<head>
    <title>ORDER PLUG-INS</title>
</head>

<body>
    <center>
        <h1>ORDER DAILY REPORT</h1>
        <p>Enter date to generate report of orders placed on that specific date.</p>
        <p>‎</p>

        <form action="display_order.php" method="post">
            <p>
                <label for="Date">Date (YYYY-MM-DD):</label>
                <input type="text" name="order_date" id="o_date">
            </p>
            <input type="submit" value="GENERATE">
        </form>
</body>

</html>