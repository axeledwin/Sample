<?php

class AuthController
{
    public function authenticate()
    {
        global $conn;
        
        $email = $_POST['email'] ?? '';
        $password = $_POST['pass'] ?? '';

        $stmt = $conn->prepare("SELECT id, email, pass FROM users WHERE email = ?");

        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($user = $result->fetch_assoc()) {
            if (password_verify($password, $user['pass'])) {
                $_SESSION['user'] = ['id' => $user['id'], 'email' => $user['email']];

                $_SESSION['success'] = 'Welcome!';
                header('Location: ' . BASE_URL . '/dashboard.php');
                exit;
            }
            echo "<script>";
            echo "console.log(" . json_encode($user) . ");";
            echo "</script>";
            exit;
        }

        $_SESSION['error'] = 'Invalid email or password.';
        header('Location: ' . BASE_URL . '/home');
        exit;
    }

    public function logout()
    {
        session_destroy();
        header('Location: ' . BASE_URL . '/home');
        exit;
    }
}
