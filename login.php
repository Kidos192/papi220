<?php

    require_once  "connect.php";

    $connect = @new mysqli($_host, $db_user, $db_passowrd, $db_name);

    if ($connect->connect_errno!=0){
        echo "Error: ".$connect->connect_errno;
    } else {
        
        $Username = $_POST['Username'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];

        $sql = "SELECT * FROM uzytkownicy WHERE Username='$Username' AND Email='$Email' AND Password='$Password'";

        if ($result = @$connect->query($sql)){
            $number_of_users = $result->num_rows;
            if($number_of_users>0){
                $line_of_table = $result->fetch_assoc();
                $user = $line_of_table['Username'];

                
                $result->close();
                header('Location: web.php');
            } else {

            }
        }

        $connect->close();
    }

?>