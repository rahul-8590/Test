	<?php 
	
	// notifications 
	if (isset($_GET['msg'])) {
		
	$msg = $_GET['msg'];

	if($msg == 1) { 
		echo '<div class="alert alert-success" role="alert"><strong>User added successfully</strong></div>';
	} 
	
	if($msg == 2) { 
		echo '<div class="alert alert-success" role="alert"><strong>User details updated successfully</strong></div>';
	} 

	if($msg == 3) {
		echo '<div class="alert alert-danger" role="alert"><strong>Error updating users details</strong></div>';
	} } 

	// display users

		$fetchusers = "SELECT * FROM `tekdi`.`users`;";
		$result = mysqli_query($con, $fetchusers);
	?>

<div class="panel panel-default">
	<div class="panel-heading">                                
		<h3 class="panel-title">Registered Users</h3>
	</div>
	<div class="panel-body">
		<table id="example" class="display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Name</th>
					<th>Country</th>
					<th>email</th>
					<th>Mobile No.</th>
					<th>About You</th>
					<th>birthday</th>
					<th>Registered on</th>
					<th>Action</th>
				</tr>
			</thead>

			<tfoot>
				<tr>
					<th>Name</th>
					<th>Country</th>
					<th>email</th>
					<th>Mobile No.</th>
					<th>About You</th>
					<th>birthday</th>
					<th>Registered on</th>
					<th>Action</th>
				</tr>
			</tfoot>

			<tbody>
			
			<?php 
				while($row = mysqli_fetch_array($result))
					 {
	        ?>
		            <tr>
		              <td><?=$row['name']?></td>
		              <td><?=$row['country']?></td>
		              <td><?=$row['email']?></td>
		              <td><?=$row['number']?></td>
		              <td><?=$row['aboutyou']?></td>
		              <td><?=$row['birthday']?></td>
		              <td><?=$row['createdon']?></td>
		              <td style="width: 12%">
		                  <a class="btn btn-success btn btn-setting btn-default" href="?link=updateuser&id=<?=$row['uid']?>">Edit</a> 
		              </td>
		            </tr>
            <?php } ?>

			</tbody>
		</table>
	</div>
</div>
<!-- END DEFAULT DATATABLE -->

</div>

<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>