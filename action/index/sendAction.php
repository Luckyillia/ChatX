<?php
if (isset($_SESSION['name'], $_POST['message'])) {
    $user = $_SESSION['name'];
    $id_pokoj = $_SESSION['id_pokoj'];
    $message = trim($_POST['message']);

    if ($message !== '') {
        $sql = "INSERT INTO messages (user, id_pokoj, message) VALUES ('$user', $id_pokoj, '$message')";
        $db->query($sql);
    }
}

header("Location: ?page=index&action=chat");
exit;