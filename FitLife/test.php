<?php
if (function_exists('mysqli_connect')) {
    echo "mysqli extension is installed and enabled.";
} else {
    echo "mysqli extension is not installed or enabled.";
}
?>
