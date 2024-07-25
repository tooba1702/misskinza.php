<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
<style>
    form{
        width: 500px;
        margin-left: 35%;
        margin-top: 5%;
        padding-left: 3%;
        padding-right: 3%;
        border: 1px solid black;
        border-radius:50px;
    }
</style>


</head>
  <body>
    <div  class="contaainer  p-5">
        <form method="post">
            <h2>Loaan Scheme</h2>
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="userName" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <br><br>

              <label>Age</label>
              <input type="number" name="userAge" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <br><br>

              <label>Basic Salary</label>
              <input type="number" name="userSalary" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <br><br>

              <label>Loan Amount</label>
              <input type="number" name="userLoan" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <br><br>

              
                <label for="">select duration</label>
                <select class="form-control" name="userDuration" id="">
                  <option>select</option>
                  <option value="1">1 year</option>
                  <option value="5">5 years</option>
                  <option value="10">10 years</option>

                </select>
              <br><br>
              <button name="userData" type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
      <?php
      if(isset($_POST['userData'])){
        $userName = $_POST['userName'];
        $userAge = $_POST['userAge'];
        $userSalary = $_POST['userSalary'];
        $userLoan = $_POST['userLoan'];
        $time = $_POST['userDuration'];
        $installment = $userLoan/($time*12);

        if ($userAge>=21 && $userSalary>=40000 &&
        ($userLoan>=200000 &&  $userLoan<=1000000)){
            echo $userName . "your monthly installment is" . $installment;
        }

      }
      
      ?>
      </body>
</html>