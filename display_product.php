<table border="2">
  <tr>
    <td>product_id</td>
    <td>product_name</td>
    <td>product_category</td>
    <td>product_price</td>
    <td>product_stock_quantity</td>
    <td>product_availability</td>
  </tr>

  <?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "plug-ins";

  $conn = mysqli_connect($host, $user, $pass, $db);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $search_id = $_POST['search_id'];
  $name = $_POST['name'];

  if ($search_id == 1) {
    $n_sql = "select * from product where product_name LIKE '%$name%'";
    $n_data = mysqli_query($conn, $n_sql);
    while ($n_info = mysqli_fetch_array($n_data)) {
  ?>
      <tr>
        <td> <?php echo  $n_info['product_id']; ?> </td>
        <td> <?php echo  $n_info['product_name'];   ?> </td>
        <td> <?php echo  $n_info['product_category'];    ?> </td>
        <td> <?php echo  $n_info['product_price'];   ?> </td>
        <td> <?php echo $n_info['product_stock_quantity'];    ?> </td>
        <td> <?php echo $n_info['product_availability'];    ?> </td>
      </tr>
    <?php
    }
  } 
  
  else {
    $c_sql = "select * from product where product_category LIKE '%$name%'";
    $c_data = mysqli_query($conn, $c_sql);
    while ($c_info = mysqli_fetch_array($c_data)) {
    ?>
      <tr>
        <td> <?php echo  $c_info['product_id']; ?> </td>
        <td> <?php echo  $c_info['product_name'];   ?> </td>
        <td> <?php echo  $c_info['product_category'];    ?> </td>
        <td> <?php echo  $c_info['product_price'];   ?> </td>
        <td> <?php echo $c_info['product_stock_quantity'];    ?> </td>
        <td> <?php echo $c_info['product_availability'];    ?> </td>
      </tr>
  <?php
    }
  }

  ?>
</table>