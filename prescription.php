<?php
require_once "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $file = $_FILES["prescription"];

    if ($file["error"] === 0) {
        $filename = basename($file["name"]);
        $target_dir = "uploads/";
        $target_file = $target_dir . time() . "_" . $filename;

        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            $stmt = $conn->prepare("INSERT INTO prescriptions (email, filename) VALUES (?, ?)");
            $stmt->bind_param("ss", $email, $target_file);
            $stmt->execute();
            $stmt->close();

            header("Location: waiting.php");
            exit;
        } else {
            $message = "File upload failed.";
        }
    } else {
        $message = "Error uploading file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upload Prescription | Pediatric Hospital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f5f7fa;
      font-family: 'Segoe UI', sans-serif;
    }

    .container {
      max-width: 750px;
      background-color: #ffffff;
      padding: 30px 40px;
      border-radius: 10px;
      margin-top: 50px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    }

    h2 {
      font-weight: bold;
      color: #173a79;
    }

    form label {
      font-weight: 600;
      margin-bottom: 5px;
      color: #2c3e50;
    }

    .form-control {
      border-radius: 8px;
      padding: 12px;
      font-size: 15px;
      border: 1px solid #ddd;
    }

    .form-control:focus {
      border-color: #1d4ed8;
      box-shadow: none;
    }

    input[type="file"] {
      padding: 14px;
      border: 2px dashed #ccc;
      background-color: #f9f9f9;
      cursor: pointer;
    }

    input[type="file"]::file-selector-button {
      background-color: #1d4ed8;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
      margin-right: 15px;
    }

    input[type="file"]::file-selector-button:hover {
      background-color: #163db4;
    }

    .btn-primary {
      background-color: #1d4ed8;
      border: none;
      padding: 10px 24px;
      font-weight: 600;
      border-radius: 8px;
      margin-top: 10px;
    }

    .btn-primary:hover {
      background-color: #163db4;
    }

    .btn-link {
      color: #1d4ed8;
      text-decoration: none;
      margin-left: 15px;
      font-weight: 500;
    }

    .btn-link:hover {
      text-decoration: underline;
    }

    .alert {
      border-radius: 8px;
    }
  </style>
</head>
<body>
  <div class="container py-4">
    <h2 class="text-center mb-4">Upload Your Prescription</h2>

    <?php if ($message): ?>
      <div class="alert alert-danger"><?php echo $message; ?></div>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label>Email Address*</label>
        <input type="email" name="email" required class="form-control">
      </div>
      <div class="mb-3">
        <label>Upload Prescription (PDF/Image)*</label>
        <input type="file" name="prescription" required class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Submit Prescription</button>
      <a href="index.php" class="btn btn-link">Back to Home</a>
    </form>
  </div>
</body>
</html>
