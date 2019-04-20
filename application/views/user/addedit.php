<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.js"></script>
</head>
<body>

<div class="container">
  <h2>Add user</h2>
   <div class="text-danger" style="background: red;color:white">
    <?php echo validation_errors(); ?>
    </div>
  <?php if(isset($id) && $id !="") { ?> 

    <?php 

      $name = $data->name;
      $email = $data->email;
      $id= $data->id

    ?>

    <form action="<?php echo base_url('user/update/'.$data->id); ?>" method="post">

  <?php } else { ?>
    <?php 

      $name = "";
      $email = "";
      $id ="";

    ?>
    <form action="<?php echo base_url('user/store'); ?>" method="post">

  <?php }  ?>
  
    <input type="hidden" name="id" value="<?php echo $id; ?>" >

    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" value="<?php echo $name; ?>" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" value="<?php echo $email; ?>" id="email" placeholder="Enter email" name="email">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <a href="<?php echo base_url(); ?>user" class="btn btn-danger">Cancle</a>
  </form>
</div>

</body>
</html>
