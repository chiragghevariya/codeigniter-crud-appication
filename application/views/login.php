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
  <style type="text/css">
    .error{
      color: red;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Login</h2>
   <div class="text-danger" style="background: red;color:white">
    <?php echo validation_errors(); ?>
    </div>

    <form action="<?php echo base_url('user/doLogin'); ?>" method="post" name="userform">

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" value="" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" value="" id="password" placeholder="Enter password" name="password">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <a href="<?php echo base_url(); ?>user" class="btn btn-danger">Cancle</a>
  </form>
</div>
<script>
    
    // Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='userform']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
       password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      email: {"required":"Please enter a valid email address."},
      password: {
        required: "Please enter a password.",
        minlength: "Your password must be at least 5 characters long."
      },
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});

</script>
</body>
</html>
