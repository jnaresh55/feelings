<html>
<head><link rel="stylesheet" type="text/css" href="table.css"></head>

<body>
<?php 
if(isset($_GET['view_projects'])){ ?>
<div class="page">
 <h1>Projects</h1>
<table class="layout display responsive-table">
    <thead>
        <tr>
		     
            <th>Projects ID</th>
			<th>Image</th>
            <th>Projects Name</th>
			<th>Price</th>
			<th>Description</th>
			<th colspan="2">Action</th>
        </tr>
    </thead>
	<?php
include("includes/db.php");

$i=0;

$get_pro = "select * from project";
$run_pro = mysqli_query($con, $get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
	
	$p_id = $row_pro['projects_id'];
	$p_title = $row_pro['projects_title'];
	$p_img = $row_pro['projects_image'];
	$p_price = $row_pro['projects_price'];
	$p_desc = $row_pro['projects_desc'];
	
	$i++;

 ?>

    <tbody>

        <tr>
            <td class="organisationnumber"><?php echo $i; ?></td>
			<td class="organisationnumber"><img src="slider_images/<?php echo $p_img; ?>" width="200" height="50"></td>
            <td class="organisationname"><?php echo $p_title; ?></td>
			<td class="organisationname"><?php echo $p_price; ?></td>
			<td class="organisationname"><?php echo $p_desc; ?></td>
			
            <td class="actions">
                <a href="index.php?edit_projects=<?php echo $p_id; ?>" class="edit-item" title="Edit">Edit</a>
                </td><td><a href="delete_projects.php?delete_projects=<?php echo $p_id; ?>" class="remove-item" title="Remove">Remove</a>
            </td>
        </tr>
		<?php } ?>

        
    </tbody>
</table>
</div>
<?php 
}
 ?>
</body>
</html>