<?php 
    if(isset($_POST['send'])){
       $upload = $_FILES['upload']['name'];
       $uploads = $_FILES['upload']['size'];
       $location = $_FILES['upload']['tmp_name'];
       move_uploaded_file($location,"./image/".$upload );
        echo"<img src='./image/$upload'>";
        echo  $uploads;
    }
?>