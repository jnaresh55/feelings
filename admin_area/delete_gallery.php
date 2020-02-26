<?php

include("includes/db.php");

if(isset($_GET['delete_gallery'])){

$delete_id = $_GET['delete_gallery'];

$delete_gallery = "delete from gallery where gallery_id='$delete_id'";

$run_delete = mysqli_query($con, $delete_gallery);

if($run_delete){

echo "<script>alert('One image has been deleted!')</script>";

echo "<script>window.open('index.php?insert_gallery','_self')</script>";

}
}

?>