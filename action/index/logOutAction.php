<?php
$sql = "DELETE FROM users WHERE name = '{$_SESSION['name']}'";
if($db->query($sql)){
    header("Location: ?page=index&action=index");
    $_SESSION['name'] = '';
    $_SESSION['id_pokoj'] = 0;
    exit();
}else{
    echo $db->error;
}