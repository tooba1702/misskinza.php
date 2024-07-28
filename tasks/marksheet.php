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
   <div class="container">
   <?php
        if(isset($_POST['stdData'])){
          $name = $_POST['stdName'];
          $faname = $_POST['fName'];
          $group = $_POST['stdGroup'];
          $rollno = $_POST['rollno'];
          $class = $_POST['class'];
          $bio = $_POST['bio'];
          $urdu = $_POST['urdu'];
          $eng = $_POST['eng'];
          $chem = $_POST['chem'];
          $phy = $_POST['phy']
          $total_marks = $bio + $urdu + $eng + $chem + $phy;
          $percentage =  $total_marks/500*100;
          ?>

            <div class="container">
              <h1>Board Of Education Karachi</h1><br>
              <h3>For Successfull Candidates</h3>
              <label for="">Name</label>
              <?php echo $name; ?>
              <br>
              <label for="">FatherName</label>
              <?php echo $faname; ?>
              <label for="">Group</label>
              <?php echo $group; ?>
              <label for="">Roll No</label>
              <?php echo $rollno; ?>
              <label for="">Class</label>
              <?php echo $class; ?>
              <br><br>
              <h3 class="markstext-center">your marks</h3>
<table class="table">
  <tr>
    <td>Bio</td>
    <td> <?php echo $bio; ?>
    </td>
  </tr>

  <tr>
    <td>Urdu</td>
    <td> <?php echo $urdu; ?>
    </td>
  </tr>

  <tr>
    <td>Eng</td>
    <td> <?php echo $eng; ?>
    </td>
  </tr>

  <tr>
    <td>Chem</td>
    <td> <?php echo $chem; ?>
    </td>
  </tr>

  <tr>
    <td>Phy</td>
    <td> <?php echo $phy; ?>
    </td>
  </tr>

</table>
              
            </div>

          <?php
        }

        ?>
   </div>
     </body>
</html>