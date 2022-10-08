<?php 
if ( isset($_POST["submit"]) ) {
     if ( $_POST["username"]=="admin" && $_POST["password"]=="admin" ) {
        header("Location: ../pertemuan11/index.php");
     }
     else{
      $error = true;
     }
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/login.css">

    <title>Kegajahan</title>
  </head>
  <body>
    


<div class="container-news">
   <div class="header cf">
          <h1>LOGIN KEGAJAHAN</h1>
          <ul>
           <li></li>
           <li></li>
           <li></li>
           <li></li>
           <li></li>
         </ul>
       </div>
</div>



<div class="container cf">
       
      <ul>
        <form action="" method="post">
          <li><label for="username" >Username :</label></li> 
          <input type="text" name="username" id="username">
          <br>
          <li><label for="password">Password :</label></li>
          <input type="password" name="password" id="password">
          <br>
          <br>
          
          <button type="submit" name="submit">Login</button>
          <?php if ( isset($error) ): ?>
            <p>Username atau Password yang anda masukan salah !</p>
          <?php endif ?>

        </form>
      </ul>

       
       
</div>



    






























































    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>