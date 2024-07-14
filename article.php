<?php 
declare(strict_types=1);
require "Includes/dbh_inc.php";

if($conn){
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = 'SELECT * from articles WHERE id ='.$id.';';

        $result = mysqli_query($conn, $sql);

        $resultNo = mysqli_num_rows($result);
        if($resultNo==1){
                $row = mysqli_fetch_assoc($result);
                echo '<h2 style="color:rgb(13, 133, 13)">'.$row['title'].'</h2>';
                echo '<p style="font-size:1.2em; line-height:40px; color:rgb(35, 73, 73);">'.$row['body'].'</p>';
                echo '<p style="color:red">'.$row['src'].'</p>';
                echo  '<i>'.$row['author'].'</i><br><b style="color:blue;">'.$row['rd'].'</b>';
        }else{
            header("location: lesson.php");
        exit();
        }
    }
    else{
        header("location: lesson.php");
        exit();
    }
}else{
    header("location: lesson.php");
    exit();  
}


?>