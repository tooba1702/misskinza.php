<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container p-5">
        <form action="" method="post">
            <div class="form-group">
              <label for="">name</label>
              <input type="text" name="userName" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
              <label for="">email</label>
              <input type="text" name="userEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <button name="userData" type="submit" class="btn btn-success">submit</button>

        </form>
      </div>

<?php
if(isset($_POST['userData'])){
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    echo $userName . " " . $userEmail ;
}
?>

      </body>
</html>