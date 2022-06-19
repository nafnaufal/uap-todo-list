<?php
    $con = mysqli_connect("localhost", "root", "", "w_list");
    
    if (isset($_POST["submit"])) {
        $date = $_POST["date"];
        $time = $_POST["time"];
        $title = $_POST["title"];
        $detail = $_POST["note"];

        if(is_null($detail)){
            $detail = "-";
        }

        $listIn = "INSERT INTO `list`(`title`, `date`, `time`, `detail`) VALUES ('$title','$date','$time','$detail')";
        mysqli_query($con, $listIn);
        
        header("Location: ./index.php");
    }

    if (isset($_GET["id_del"])) {
        $id = $_GET["id_del"];
        
        $listDel = "DELETE FROM `list` WHERE id = '$id'";
        mysqli_query($con, $listDel);
        
        header("Location: ../index.php");
    }
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $title = $_POST["title"];
        $detail = $_POST["note"];

        if (is_null($detail)) {
            $detail = "-";
        }
        $listU = "UPDATE `list` SET `title`= '$title',`date`= '$date',`time`= '$time',`detail`= '$detail' WHERE id=$id";
        mysqli_query($con, $listU);
        
        header("Location: ../detail.php/?id=$id");
    }
?>