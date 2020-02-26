<?php

include("includes/db.php");

if(isset($_GET['delete_slider'])){

$delete_id = $_GET['delete_slider'];

$delete_slider = "delete from slider where slider_id='$delete_id'";

$run_delete = mysqli_query($con, $delete_slider);

if($run_delete){

echo "<script>alert('One Slider has been deleted!')</script>";

echo "<script>window.open('index.php?view_slider','_self')</script>";

}
}

?>