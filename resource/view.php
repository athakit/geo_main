<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/geo/configLocal.php';
    $data = array();
    $sql = 'select Detail from content ;';
    $results = query($sql);
    while($result = mysqli_fetch_assoc($results)) {
        $data[] = $result;
    }
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    mysqli_free_result($results);
?>