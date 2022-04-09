<?php
   $conn = mysqli_connect('sql108.epizy.com', 'epiz_31480724', 'Iw45aDiaKYu1YsV', 'epiz_31480724_database');

   if (mysqli_connect_error()){
       echo "<script> alert('Connection error');  </script>";
       exit();
   }

?>

<?php
   if ($_SERVER["REQUEST_METHOD"]== "POST"){

    if (isset($_POST['subscribe'])){
        $email='';
        $email = $_POST['email'];

        $sql = "INSERT INTO user (email) VALUES ('$email')";

        mysqli_query($conn, $sql);
    }
   }
   echo "<script> alert('Success!');  </script>";
   exit();

?>
