<table border="2">
  <tr>
    <td>order_id</td>
    <td>customer_id</td>
    <td>staff_id</td>
    <td>product_id</td>
    <td>order_product_quantity</td>
    <td>order_total_price</td>
    <td>order_payment_method</td>
    <td>order_date</td>
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

  $order_date = $_POST['order_date'];

  $sql = "select order_.order_id, customer_id, staff_id, product_id, order_product_quantity, order_total_price, order_payment_method, order_date from order_ JOIN order_items ON order_items.order_id = order_.order_id WHERE order_date = '$order_date'";
  $data = mysqli_query($conn, $sql);
  while ($info = mysqli_fetch_array($data)) {
  ?>
    <tr>
      <td> <?php echo  $info['order_id']; ?> </td>
      <td> <?php echo  $info['customer_id'];   ?> </td>
      <td> <?php echo  $info['staff_id'];    ?> </td>
      <td> <?php echo  $info['product_id'];   ?> </td>
      <td> <?php echo $info['order_product_quantity'];    ?> </td>
      <td> <?php echo $info['order_total_price'];    ?> </td>
      <td> <?php echo $info['order_payment_method'];    ?> </td>
      <td> <?php echo $info['order_date'];    ?> </td>
    </tr>
  <?php
  }

  ?>
</table>