<?php
require_once "db.php";
session_start();

if (!isset($_SESSION["doctor_id"])) {
    header("Location: doctor_login.php");
    exit;
}

$doctorName = $_SESSION["doctor_name"];

// Fetch appointments
$stmt = $conn->prepare("SELECT name, email, appointment_date, appointment_time FROM appointments WHERE doctor = ? ORDER BY appointment_date, appointment_time");
$stmt->bind_param("s", $doctorName);
$stmt->execute();
$result = $stmt->get_result();
$appointments = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Doctor Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
  <div class="container py-5">
    <h2 class="mb-4">Welcome, <?php echo htmlspecialchars($doctorName); ?></h2>

    <h4 class="mb-3">Your Weekly Timetable</h4>

    <?php if (empty($appointments)): ?>
      <div class="alert alert-info">No appointments scheduled yet.</div>
    <?php else: ?>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Patient Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Time</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($appointments as $appt): ?>
            <tr>
              <td><?php echo htmlspecialchars($appt["name"]); ?></td>
              <td><?php echo htmlspecialchars($appt["email"]); ?></td>
              <td><?php echo htmlspecialchars($appt["appointment_date"]); ?></td>
              <td><?php echo htmlspecialchars($appt["appointment_time"]); ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>

    <a href="index.php" class="btn btn-primary">Back to Home</a>
  </div>
</body>
</html>
