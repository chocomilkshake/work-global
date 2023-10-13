<?php
session_start();

if (isset($_SESSION['authApp']) && $_SESSION['authApp'] === session_id()) {
    $style = '<style>.pricing { display: none; } #login-btn { display: none; } #logout-btn { display: block; }</style>';
} else {
    $style = '<style>.pricing { display: block; } #login-btn { display: block; } #logout-btn { display: none; }</style>';
}

echo $style;

?>
