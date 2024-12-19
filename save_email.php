<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if ($email) {
        $file = 'emails.txt';
        $content = $email . PHP_EOL;
        file_put_contents($file, $content, FILE_APPEND | LOCK_EX);
        echo 'success';
    } else {
        echo 'invalid';
    }
} else {
    echo 'error';
}
?>
