<?php
    include "../include/connection.php";
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        echo $id;
        $select = "SELECT * FROM `videos` WHERE `id`='$id'";
        $run = mysqli_query($con, $select);
        if(mysqli_num_rows($run) > 0){
            while($row = mysqli_fetch_assoc($run)){
                echo $row['video_link'];
            }
        }
    }
?>