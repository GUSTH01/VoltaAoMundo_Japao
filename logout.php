<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert (Usuario deslogado);</script>";
header('Location: index.html');
