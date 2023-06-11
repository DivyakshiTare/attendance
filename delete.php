<?php
    require_once 'db/conn.php'; 
    if(!$_GET['id']){
        //echo'Error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
      
    }else{
        $id = $_GET['id'];

        $result = $crud->deleteAttendee($id);
        if($result){
            header('location: viewrecords.php');
        }else{
            echo'Error';
        }

    }

  
?>



