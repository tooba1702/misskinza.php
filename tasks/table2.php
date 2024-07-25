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
          <label for="">enter number</label>
          <input type="text" name="userNumber" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <button type="submit" name="userData" class="btn btn-info">submit</button>
    </form>
      </div>
      <table class="table">
        <tbody>
            <?php
            if (isset($_POST['userData'])){
                $userNumber = $_POST['userNumber'];
                for($i=1; $i<=10; $i++){
                    ?>

                    <tr>
                        <td><?php echo $userNumber?></td>
                        <td>X</td>
                        <td><?php echo $i?></td>
                        <td>=</td>
                        <td><?php echo $i * $userNumber?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
      </table>
     </body>
</html>