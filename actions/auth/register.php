<?php
require_once _DIR_ . "/../../config/database.php";
require_once _DIR_ . "/../../validations/auth-validation.php";

if (isset($_POST['register']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $request = getRegisterRequest($_POST);
    } catch (PDOException $e) {
        $pdo->rollBack();
        throw $e;
    }
}
