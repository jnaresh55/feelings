<?php

include("includes/db.php");

if(isset($_GET['delete_homeimage'])){

$delete_id = $_GET['delete_homeimage'];

$delete_homeimage = "delete from homeimage where homeimage_id='$delete_id'";

$run_delete = mysqli_query($con, $delete_homeimage);

if($run_delete){

echo "<script>alert('One homeimage has been deleted!')</script>";

echo "<script>window.open('index.php?insert_homeimage','_self')</script>";

}
}

?>