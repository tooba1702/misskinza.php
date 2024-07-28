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
      
  <div  class="contaainer  p-5">
        <form method="post" action="marksheet.php">
            <h2>Enrollment Form</h2>
            <div class="form-group">
              <label>Name of Student</label>
              <input type="text" name="stdName" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <br><br>

              <label>Father Name</label>
              <input type="text" name="fName" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <br><br>
              <label>Group</label>
              <input type="text" name="stdGroup" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <br><br>

              <label>Roll Number</label>
              <input type="number" name="rollno" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <br><br>
              <label for="">select Class</label>
                <select class="form-control" name="class" id="">
                  <option>select</option>
                  <option>SSC I</option>
                  <option>SSC II</option>
                  <option>FSC I</option>
                  <option>FSC II</option>


                </select>
              <br><br>

              <h6>enter your marks</h6>
              <label for="">Bio</label>
              <input type="number" name="bio">
              <br><br>

              <label for="">urdu</label>
              <input type="number" name="urdu">
              <br><br>

              <label for="">eng</label>
              <input type="number" name="eng">
              <br><br>

              <label for="">chemistry</label>
              <input type="number" name="chem">
              <br><br>

              <label for="">physics</label>
              <input type="number" name="phy">
              <br><br>

              <button name="stdData" type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
       
     </body>
</html>