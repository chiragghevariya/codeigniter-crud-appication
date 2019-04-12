<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2><a href="<?php echo base_url()?>user/create" class="btn btn-success pull-right">Add</a></h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    	<?php if (!empty($data)) { ?>
				
	    	<?php foreach ($data as $key => $value) { ?>
			  <tr>
		        <td><?php echo $value->name; ?></td>
		        <td><?php echo $value->email; ?></td>
		        <td><a href="<?php echo base_url('user/edit/'.$value->id); ?>"><b>Edit</b></a> | <a href="<?php echo base_url('user/delete/'.$value->id); ?>"><b>Delete</b></a>
		        </td>
		      </tr>
			<?php } ?>

    	<?php 	}else{ ?>
    			
    			<tr><td style="text-align: center;"><strong>No data found</strong></td><tr>

    	<?php 	} ?>
    	 

    </tbody>
  </table>
</div>

</body>
</html>
