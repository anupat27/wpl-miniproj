<?php
require_once "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);

    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            session_start();
            $_SESSION["user_id"] = $id;
            $_SESSION["login_success"] = "Successfully logged in!"; // Store success message in session
            header("Location: index.php"); // Redirect to home page after successful login
            exit;
        } else {
            $message = "Incorrect password.";
        }
    } else {
        // Email not found, redirect to register
        header("Location: register.php");
        exit;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | Pediatric Hospital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f4f6f8;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    .container {
      width: 100%;
      max-width: 550px;
      background-color: #2166f3;
      color: white;
      padding: 40px 35px;
      border-radius: 12px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    h2 {
      font-weight: bold;
      text-transform: uppercase;
      text-align: left;
    }

    label {
      display: none;
    }

    .form-control {
      border-radius: 8px;
      border: none;
      padding: 14px;
      font-size: 16px;
      margin-bottom: 15px;
    }

    .form-control::placeholder {
      color: #aaa;
    }

    .btn-primary {
      background-color: #133c91;
      border: none;
      padding: 10px 30px;
      float: right;
      font-weight: bold;
      border-radius: 8px;
      transition: background 0.3s;
    }

    .btn-primary:hover {
      background-color: #0e2d70;
    }

    .btn-link {
      color: #fff;
      text-decoration: underline;
      padding-left: 0;
      margin-top: 20px;
      display: inline-block;
    }

    .alert {
      background-color: #ff5252;
      color: white;
      border: none;
      border-radius: 8px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="mb-4">User Login</h2>
    

    <?php if ($message): ?>
      <div class="alert alert-danger"><?php echo $message; ?></div>
    <?php endif; ?>

    <form method="POST" action="">
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" required class="form-control" placeholder="Email*">
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" required class="form-control" placeholder="Password*">
      </div>
      <button type="submit" class="btn btn-primary">LOGIN</button>
      <a href="index.php" class="btn btn-link">Back to Home</a>
    </form>
  </div>
</body>
</html>



