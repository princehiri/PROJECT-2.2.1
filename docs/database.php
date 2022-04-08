<?php
   $conn = mysqli_connect('localhost', 'root', '', 'database');

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