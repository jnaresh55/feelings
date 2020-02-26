<?php

include("includes/db.php");

if(isset($_GET['delete_synopsis'])){

$delete_id = $_GET['delete_synopsis'];

$delete_synopsis = "delete from synopsis where synopsis_id='$delete_id'";

$run_delete = mysqli_query($con, $delete_synopsis);

if($run_delete){

echo "<script>alert('One synopsis has been deleted!')</script>";

echo "<script>window.open('index.php?view_synopsis','_self')</script>";

}
}

?>