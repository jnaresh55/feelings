<html>
<head><link rel="stylesheet" type="text/css" href="table.css"></head>

<body>
<?php 
if(isset($_GET['view_components'])){ ?>
<div class="page">
 <h1>component</h1>
<table class="layout display responsive-table">
    <thead>
        <tr>
		     
            <th>component ID</th>
			<th>Image</th>
            <th>component Name</th>
			<th>Price</th>
			<th>Description</th>
			<th colspan="2">Action</th>
        </tr>
    </thead>
	<?php
include("includes/db.php");

$i=0;

$get_pro = "select * from component";
$run_pro = mysqli_query($con, $get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
	
	$p_id = $row_pro['component_id'];
	$p_title = $row_pro['component_title'];
	$p_img = $row_pro['component_image'];
	$p_price = $row_pro['component_price'];
	$p_desc = $row_pro['component_desc'];
	
	$i++;

 ?>

    <tbody>

        <tr>
            <td class="organisationnumber"><?php echo $i; ?></td>
			<td class="organisationnumber"><img src="component_images/<?php echo $p_img; ?>" width="200" height="50"></td>
            <td class="organisationname"><?php echo $p_title; ?></td>
			<td class="organisationname"><?php echo $p_price; ?></td>
			<td class="organisationname"><?php echo $p_desc; ?></td>
			
            <td class="actions">
                <a href="index.php?edit_components=<?php echo $p_id; ?>" class="edit-item" title="Edit">Edit</a>
                </td><td><a href="delete_components.php?delete_components=<?php echo $p_id; ?>" class="remove-item" title="Remove">Remove</a>
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
