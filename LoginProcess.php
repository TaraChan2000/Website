<?php
    session_start();
    if(isset($_POST['btnLogin']))
    {
        $_SESSION["admin"]="";
       $us = $_POST['txtUsername'];
       $pa = $_POST['txtPass'];

       $err = "";
       if($us==""){
           $err .="Enter Username, please<br/>";
       }
       if($pa==""){
           $err .="Enter Password, please<br/>";
       }
       if($err !=""){
           echo $err;
       }
       else{
           include_once("connection.php");
           $pass = md5($pa);
           $res = pg_query($conn, "SELECT username, password FROM public.customer WHERE username='$us' AND password='$pass'")
           or die(pg_error($conn));
           if(pg_num_rows($res)==1){
                 $_SESSION["admin"]="$admin";
               echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
            }
           else{
              echo "You loged in fail";
            }
        }
    }
?>
