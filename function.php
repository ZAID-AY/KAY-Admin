<?php
    session_start();

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'kay';

    // Connexion au base de données

    $cnx = mysqli_connect($host,$user,$password,$database);
    if(mysqli_connect_error()){
        exit('failed to connect : '.mysqli_connect_error());
    }

    //Requete SQL

    if($stmt = $cnx -> prepare('SELECT id, password FROM login WHERE username = ?')){
        $stmt->bind_param('s',$_POST['username']);
        $stmt->execute();

        $stmt->store_result();

        if($stmt->num_rows > 0){
            $stmt->bind_result($id,$password);
            $stmt->fetch();
            if($_POST['password']===$password){
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['id'] = $id;
                header('Location: KAY-Dashboard/index.html');
            }else{
                echo('Password Incorrecte');
                header('refresh:2;url=login.php');
            }

        }else{
            echo('<h1 style="color:red;text-align:center">Username Incorrecte</h1>');
            header('refresh:2;url=login.php');
        }
        $stmt->close();

        
    }