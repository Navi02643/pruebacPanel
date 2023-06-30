<?php

$_SESSION["password"] = '$2y$10$AIX56Q/QscWmsPgoR9xBXulFdwbSGithcLKpjWMG6ii5SAnKy6AMq';

$passwordDesc = "adin1234";
$passwordEnc = $_SESSION["password"];
$ISTRUE = password_verify($passwordDesc, $passwordEnc) ? true : false;

if (!$ISTRUE) {
    echo "incorrecto";
} else {
    echo "correcto";
}
