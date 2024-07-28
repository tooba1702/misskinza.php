<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <div   class="container">
            <form action="" method="post">
                <div class="form-group">
                  <label for="">Enter Your Email</label>
                  <input type="text" name="userEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <button name="sub" class="btn btn-info">Submit</button>
                </div>
            </form>
        </div>
        <?php
        if(isset($_POST['sub'])){
            $userEmail  = $_POST['userEmail'];
            $array = explode("@", $userEmail);
            $final = $array[count($array)-1];
            $restricteddomain = "yahoo.com";
            $finaldomain = strcmp($final,$restricteddomain);
            if($finaldomain ==   0){
                echo "this is restricted domain";
            }
            else{
                echo "allowed";
            }
        }
        ?>
     </body>
</html>