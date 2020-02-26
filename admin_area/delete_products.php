<?php

include("includes/db.php");

if(isset($_GET['delete_products'])){

$delete_id = $_GET['delete_products'];

$delete_products = "delete from product where product_id='$delete_id'";

$run_delete = mysqli_query($con, $delete_products);

if($run_delete){

echo "<script>alert('One Product has been deleted!')</script>";

echo "<script>window.open('index.php?view_products','_self')</script>";

}
}

?>