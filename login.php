<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$username = $data['username'];
$password = $data['password'];

// Dummy users array for example (replace with database logic)
$users = [
    ['username' => 'admin', 'password' => 'root'],
    ['username' => 'user2', 'password' => 'pass2']
];

$success = false;
foreach ($users as $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
        $success = true;
        break;
    }
}

echo json_encode(['success' => $success]);
?>
