<?php
require_once "db.php";
session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $stmt = $conn->prepare("SELECT id, name FROM doctors WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $name);
        $stmt->fetch();

        $_SESSION["doctor_id"] = $id;
        $_SESSION["doctor_name"] = $name;

        header("Location: doctor_dashboard.php");
        exit;
    } else {
        $message = "Invalid login.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Doctor Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #f4f4f4;
    }
    .login-container {
      max-width: 400px;
      margin: 80px auto;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      overflow: hidden;
    }
    .login-header {
      background-color: #0d3c91;
      padding: 20px;
      color: #fff;
      text-align: center;
      font-weight: bold;
    }
    .login-body {
      padding: 30px;
    }
    .form-control {
      border-radius: 6px;
    }
    .btn-primary {
      width: 100%;
      background-color: #0d3c91;
      border: none;
      margin-top: 10px;
    }
    .btn-primary:hover {
      background-color: #0b327a;
    }
    .text-link {
      display: block;
      margin-top: 15px;
      text-align: center;
      color: #0d3c91;
      text-decoration: none;
    }
    .text-link:hover {
      text-decoration: underline;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-container">
      <div class="login-header">
        Staff Access Only<br/>
        <small>Please login with your physician credentials</small>
      </div>
      <div class="login-body">
        <h2>Doctor Login</h2>
        <?php if ($message): ?>
          <div class="alert alert-danger text-center"><?php echo $message; ?></div>
        <?php endif; ?>

        <form method="POST">
          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" required class="form-control" placeholder="doctor@hospital.com">
          </div>
          <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" required class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
          <a href="index.php" class="text-link">Return to homepage</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
