<!DOCTYPE html>
<html>

<head>
    <title>CUSTOMER PLUG-INS</title>
</head>

<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "plug-ins");

        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $customer_name = $_POST['customer_name'];
        $email_address = $_POST['email_address'];
        $contact_number = $_POST['contact_number'];
        $emirate_id = $_POST['emirate_id'];
        $area = $_POST['area'];
        $street = $_POST['street'];

        // Insert data into the customer table
        $c_sql = "INSERT INTO customer (customer_name) VALUES ('$customer_name')";
        if (mysqli_query($conn, $c_sql)) {
            $customer_id = mysqli_insert_id($conn);

            // Insert data into address, email, contact number
            $a_sql = "INSERT INTO address (customer_id, emirate_id, area, street) VALUES ($customer_id, $emirate_id, '$area', '$street')";
            $e_sql = "INSERT INTO email (customer_id, email_address) VALUES ($customer_id, '$email_address')";
            $n_sql = "INSERT INTO contact_number (customer_id, contact_number) VALUES ($customer_id, '$contact_number')";
            
            mysqli_query($conn, $a_sql) && mysqli_query($conn, $e_sql) && mysqli_query($conn, $n_sql);

            echo "<h3>CUSTOMER ADDED SUCCESSFULLY</h3>";
            echo nl2br("\n Full Name: $customer_name\n Email Address: $email_address\n Contact Number: $contact_number\n Emirate: $emirate_id\n Area: $area\n Street: $street");
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
