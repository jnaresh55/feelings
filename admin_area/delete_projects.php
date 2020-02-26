<?php

include("includes/db.php");

if(isset($_GET['delete_projects'])){

$delete_id = $_GET['delete_projects'];

$delete_projects = "delete from project where projects_id='$delete_id'";

$run_delete = mysqli_query($con, $delete_projects);

if($run_delete){

echo "<script>alert('One Project has been deleted!')</script>";

echo "<script>window.open('index.php?view_projects','_self')</script>";

}
}

?>