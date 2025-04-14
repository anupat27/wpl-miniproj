<?php
require_once "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $doctor = $_POST["doctor"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    $stmt = $conn->prepare("INSERT INTO appointments (name, email, doctor, appointment_date, appointment_time) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $doctor, $date, $time);

    if ($stmt->execute()) {
        $message = "Appointment booked successfully!";
    } else {
        $message = "Failed to book appointment.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Appointment | Pediatric Hospital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #f5f7fa;
      font-family: 'Segoe UI', sans-serif;
    }

    .container {
      max-width: 800px;
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      margin: 40px auto;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    }

    h2 {
      font-weight: bold;
      color: #173a79;
      margin-bottom: 30px;
    }

    form label {
      font-weight: 600;
      margin-bottom: 5px;
      color: #2c3e50;
    }

    .form-control, select, textarea {
      border-radius: 8px;
      padding: 12px;
      font-size: 15px;
      border: 1px solid #ddd;
    }

    .form-control:focus, select:focus, textarea:focus {
      border-color: #1d4ed8;
      box-shadow: none;
    }

    textarea {
      resize: vertical;
    }

    .btn-primary {
      background-color: #1d4ed8;
      border: none;
      padding: 12px 24px;
      font-weight: 600;
      border-radius: 8px;
      margin-top: 20px;
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

    .form-title {
      background-color: #173a79;
      color: white;
      padding: 20px 30px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      margin: -40px -40px 40px -40px;
    }

    .form-title h2 {
      margin: 0;
      font-size: 24px;
    }

    .form-title p {
      font-size: 14px;
      color: #d0d9f2;
      margin: 5px 0 0;
    }

    .alert {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-title">
      <h1>Book Your Appointment</h1>
      <p>Fill out the form below to schedule your appointment</p>
    </div>

    <?php if ($message): ?>
      <div class="alert alert-info text-center"><?php echo $message; ?></div>
    <?php endif; ?>

    <form method="POST" id="appointmentForm">
      <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" required class="form-control">
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" required class="form-control">
      </div>
      <div class="mb-3">
        <label>Select Doctor</label>
        <select name="doctor" class="form-select" required>
          <option value="">Choose...</option>
          <option value="Dr. Asha Patel">Dr. Asha Patel</option>
          <option value="Dr. Vikram Shah">Dr. Vikram Shah</option>
          <option value="Dr. Neha Joshi">Dr. Neha Joshi</option>
        </select>
      </div>
      <div class="mb-3">
        <label>Date</label>
        <input type="date" name="date" required class="form-control" min="<?php echo date('Y-m-d'); ?>">
      </div>
      <div class="mb-3">
        <label>Preferred Time</label>
        <input type="time" name="time" required class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Book Appointment</button>
      <a href="index.php" class="btn btn-link">Back to Home</a>
    </form>
  </div>

  <script>
    // Basic validation
    document.getElementById('appointmentForm').addEventListener('submit', function(e) {
      const doctor = document.querySelector('[name="doctor"]').value;
      if (!doctor) {
        e.preventDefault();
        alert("Please select a doctor.");
      }
    });
  </script>
</body>
</html>
