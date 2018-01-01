<?php
session_start();
//destroi a sessao e volta para o index
unset($_SESSION['banco']);
header("Location: index.php");
exit;