<?php
require 'db.php';

$name = $_POST['name'] ?? '';
$password = $_POST['password'] ?? '';

if ($name === '' || $password === ''){
    echo json_encode([
        'status' => 'error',
        'message' => 'Пустые данные'
    ]);
    exit;
}

$sql = "INSERT INTO testing (name, password) VALUES (:name, :password)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'name' => $name,
    'password' => password_hash($password, PASSWORD_DEFAULT)
]);

echo json_encode([
    'status' => 'ok',
    'message' => 'Пользователь сохранён'
]);