<?php
  if (isset($_SESSION['success'])){
    echo $_SESSION['success'];
  }
?>
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
<div class="card">
  <div class="card-body">
    <form action="controllers/signin/check_signin.controller.php" method="post">
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
      </div>
    
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr>
    <a href="/signup">Create Account</a>
  </div>
</div>