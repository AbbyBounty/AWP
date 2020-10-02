<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <style>

    .signup {
      width: 500px;
      height: 180px;
      border: solid lightgray 2px;
      padding: 20px;

      margin: auto;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: lightyellow;
      box-shadow: 0 0 10px 2px lightgray;
      border-radius: 10px;
    }

  </style>
</head>
<body>
<form action="success.php" method="GET">
    <div class="signup">
      <div class="form-group">
        <label for="id">Emp ID</label>
        <input required name="id" type="text" class="form-control" placeholder="Emp id here">
      </div>

      <div class="form-group">
       
        <input type="submit" class="btn btn-success" value="Submit">
      </div>
    </div>
  </form>


</body>
</html>