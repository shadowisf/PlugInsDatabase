<!DOCTYPE html>
<html lang="en">

<head>
    <title>CUSTOMER DETAILS</title>
</head>

<body>
    <center>
        <h1>CUSTOMER DETAILS</h1>
        <p>Enter all necessary customer details below.</p>
        <p>‎</p>
        <h2>Personal Information</h2>

        <form action="insert_customer.php" method="post">

            <p>
                <label for="FullName">Full Name:</label>
                <input type="text" name="customer_name" id="c_name">
            </p>

            <p>
                <label for="Email">Email Address:</label>
                <input type="text" name="email_address" id="email_ad">
            </p>

            <p>
                <label for="ContactNumber">Contact Number (+971-XX-XXXXXXX):</label>
                <input type="text" name="contact_number" id="contact_num">
            </p>

            <p>‎</p>
            <h2>Address Information</h2>

            <p>
                <label for="Emirate">Emirate:</label>
                <select name="emirate_id">
                    <option value=1>Sharjah</option>
                    <option value=2>Dubai</option>
                    <option value=3>Ras Al Khaimah</option>
                    <option value=4>Abu Dhabi</option>
                    <option value=5>Ajman</option>
                    <option value=6>Umm Al Quwain</option>
                    <option value=7>Fujairah</option>
                </select>
            </p>

            <p>
                <label for="Area">Area:</label>
                <input type="text" name="area" id="ad_area">
            </p>

            <p>
                <label for="Street">Street:</label>
                <input type="text" name="street" id="ad_street">
            </p>

            <p>‎</p>
            
            <input type="submit" value="INSERT DETAILS">
        </form>
    </center>
</body>

</html>