<?php 
include('includes/db.php');
if(isset($_GET['mymodel'])){
	$project_id = $_GET['mymodel'];
	
	$get_edit = "select * from project where projects_id='$project_id'";
	
	$run_edit = mysqli_query($con, $get_edit);
	$row_edit = mysqli_fetch_array($run_edit);
	
	$project_id = $row_edit['projects_id'];
	
	$project_title = $row_edit['projects_title'];
	$project_image = $row_edit['projects_image'];
	$project_price = $row_edit['projects_price'];
	$p_desc  = $row_edit['projects_desc'];
}
 ?>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $project_title; ?></h4>
        </div>
        <div class="modal-body">
	      <h4>Projet Description</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. orem Ipsum has been the industry's standard dummy text ever.Lorem Ipsum is simply dummy text of the printing and typesetting industry. orem Ipsum has been the industry's standard dummy text ever.Lorem Ipsum is simply dummy text of the printing and typesetting industry. orem Ipsum has been the industry's standard dummy text ever.</p>
          <h4>Projet Component</h4>
          	<ul>
            	<li>Diode</li>
                <li>Capacitor</li>
                <li>Inductor</li>
            </ul>
            <h4 class="text-danger">Price:- Rs.3450/-</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
