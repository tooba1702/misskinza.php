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
              <label>file</label>
              <input type="file" name="ext" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <button name="userData" type="submit" class="btn btn-success">submit</button>

        </form>
      </div>

<?php
if(isset($_POST['userData'])){
    $fileName = $_POST['ext'];
   $array = explode(".", $fileName);
   $extension  =  $array[count($array)-1];
   ?>

   <h1><?php echo $extension?></h1>
   <?php
   if($extension == "jpg" ){
    echo "allow";
   }
   else{
    echo "not allowed";
   }
}
?>

      </body>
</html>