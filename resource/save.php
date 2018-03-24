<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/geo/configLocal.php';
   $data = array();
    //echo ($_POST['detail']);
    //$sql = 'update content set Detail="'.check_input($_POST['detail']).'";';
    $sql = "INSERT INTO content (Detail) VALUES ('".$_POST['detail']."');";
    //echo $sql ;
    $results = query($sql);
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>