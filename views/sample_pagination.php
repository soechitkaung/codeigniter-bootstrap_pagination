<!DOCTYPE html>
<html lang="en">
  	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Codeigniter Bootstrap Pagination</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
   	</head>
<body>

	<div class="container">

		<br><br><br><br>

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th style="width:40%">Customer Name</th>
					<th style="width:12%">Mobile No</th>
					<th style="width:5%">State</th>
					<th style="width:8%">City</th>
					<th style="width:15%">Country</th>
				</tr>
			</thead>
			<tbody>
	
		<?php 	foreach ($customer_list->result() as $cust) { 	?>
				<tr>
					<td> <?php echo $cust->customerName; ?></td>
					<td> <?php echo $cust->phone; ?></td>
					<td> <?php echo $cust->city; ?></td>
					<td> <?php echo $cust->state; ?></td>
					<td> <?php echo $cust->country; ?></td>
				</tr>
		<?php 	} ?>
			</tbody>
		</table>
		
		<div class="row">
	        <div class="col-md-12 text-center">
	            <?php echo $pagination; ?>
	        </div>
    	</div>
	    
	</div>

</body>
</html>