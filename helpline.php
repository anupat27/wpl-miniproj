<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Helpline | Pediatric Hospital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #f4f6fb;
      font-family: 'Segoe UI', sans-serif;
    }
    h2 {
      font-weight: bold;
      color: #0d0d0d;
    }
    .card-container {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
      margin-top: 40px;
    }
    .info-card {
      width: 300px;
      border: none;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
      overflow: hidden;
    }
    .info-card .card-header {
      color: #fff;
      font-weight: bold;
      padding: 16px 20px;
      font-size: 18px;
    }
    .hospital-header {
      background-color: #e63946;
    }
    .ambulance-header {
      background-color: #2979ff;
    }
    .pediatric-header {
      background-color: #a020f0;
    }
    .info-card .card-body {
      padding: 20px;
    }
    .info-card .card-body p {
      margin-bottom: 12px;
    }
    .info-card .card-body strong {
      font-size: 18px;
    }
    .call-button {
      background-color: #1d3557;
      color: white;
      border: none;
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      font-weight: bold;
      margin-top: 10px;
    }
    .call-button:hover {
      background-color: #16324f;
    }
    .icon {
      margin-right: 6px;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <h2 class="text-center mb-3">Emergency Helplines</h2>
    <p class="text-center text-muted mb-4">
      Our helpline services are available 24/7. In case of emergency, please call the appropriate number for immediate assistance.
    </p>

    <div class="card-container">
      <div class="info-card">
        <div class="card-header hospital-header">
          🏥 Hospital Helpline
        </div>
        <div class="card-body">
          <p>For medical emergencies and immediate hospital assistance.</p>
          <p>📞 <strong>+91 98765 43210</strong></p>
          
        </div>
      </div>

      <div class="info-card">
        <div class="card-header ambulance-header">
          🚑 Ambulance
        </div>
        <div class="card-body">
          <p>For emergency transportation to the hospital.</p>
          <p>📞 <strong>108</strong></p>
          
        </div>
      </div>

      <div class="info-card">
        <div class="card-header pediatric-header">
          👶 Pediatric Helpline
        </div>
        <div class="card-body">
          <p>Dedicated line for pediatric emergencies and critical care.</p>
          <p>📞 <strong>+91 99887 77665</strong></p>
         
        </div>
      </div>
    </div>

    <div class="text-center mt-4">
      <a href="index.php" class="btn btn-primary">Back to Home</a>
    </div>
  </div>
</body>
</html>
