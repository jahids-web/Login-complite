<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>view page</title>
  </head>
  <body class="bg-info text-white" >

    <div class="container">
    <div class="row">
    <div class="col-lg-10 offset-lg-1 mt-3">

    <table class="table table-striped table-bordered bg-light">

    <thead>
        <tr class="bg-dark text-light text-center">
            <th>id</th>
            <th>Email</th>
            <th>password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
        <tbody>
            <?php

             include 'config.php';
              if(isset($_POST['update'])){
                $email = $_POST['email']; $password = $_POST['password']; $id = $_POST['id'];
                $sql="UPDATE postinfo SET email='$email', password='$password' WHERE id='$id'";

                if($result = mysqli_query($conn,$sql)){
                 echo "Update successfully";
               }
     
              }


             $sql="SELECT * FROM postinfo";
                $result=mysqli_query ($conn,$sql);
                if(mysqli_num_rows($result)>0){
                  while($row=mysqli_fetch_assoc($result)){


            ?>
                <tr class="text-center">
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['password']; ?></td>
                        <td><a class="btn btn-primary" href="edit.php?id=<?= $row['id']; ?>">Edit</a></td>
                        <td><a class="btn btn-danger" href="delete.php?id=<?= $row['id']; ?>">Delete</a></td>
                </tr>
                    <?php } } ?>
        </tbody>

    </table>
    


    </div>


    </div>





    </div>









    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
