<?php

include("includes/db.php");

if(isset($_GET['delete_components'])){

$delete_id = $_GET['delete_components'];

$delete_components = "delete from component where component_id='$delete_id'";

$run_delete = mysqli_query($con, $delete_components);

if($run_delete){

echo "<script>alert('One Component has been deleted!')</script>";

echo "<script>window.open('index.php?view_components','_self')</script>";

}
}

?>