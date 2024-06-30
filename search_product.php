<!DOCTYPE html>
<html lang="en">

<head>
    <title>PRODUCT PLUG-INS</title>
</head>

<body>
    <center>
        <h1>SEARCH PRODUCT</h1>
        <p>Select a search method, and enter keyword to search for products.</p>
        <p>‎</p>

        <form action="display_product.php" method="post">

            <p>
                <label for="SearchVia">Search via:</label>
                <select name="search_id">
                    <option value=1>Product Name</option>
                    <option value=2>Product Category</option>
                </select>
            </p>

            <p>
                <label for="name">Keyword:</label>
                <input type="text" name="name" id="p_name">
            </p>

            <input type="submit" value="SEARCH">
        </form>
</body>

</html>