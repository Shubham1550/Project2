<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
  <center><h2>Contact Form</h2></center>
  <form action="/action_page.php">
    <div class="form-group">
        <label for="name">First Name</label>
        <input type="text" class="form-control" placeholder="Enter First Name" >
        <label for="name">Last Name</label>
        <input type="text" class="form-control" placeholder="Enter Last Name" >
        <label for="number">Mobile Number</label>
        <input type="number" class="form-control" placeholder="Enter Mobile No.">

      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">

    </div>


    <center><button type="submit" class="btn btn-default">Submit</button></center>
  </form>
</div>

</body>
</html>
