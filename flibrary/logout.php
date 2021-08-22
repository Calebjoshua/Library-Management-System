<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        session_start();
        unset($_SESSION["username"]);
        echo '<script>
        alert("You have sucessfully loged out");
        location.replace="index.php";
        </script>';
        //header("Location:index.php");
        ?>
    </body>
</html>
