<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pediatric Hospital | Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
  <style>
    :root {
      --primary-blue: #1a73e8;
      --light-blue: #e8f0fe;
      --soft-gray: #f8f9fa;
      --highlight: #fbbc04;
    }

    body {
      background-color: var(--soft-gray);
    }

    .navbar-brand {
      font-weight: 700;
      color: var(--primary-blue) !important;
    }

    .nav-link {
      color: #333 !important;
    }

    .nav-link:hover {
      color: var(--primary-blue) !important;
    }

    .hero-section {
      background: linear-gradient(rgba(26, 115, 232, 0.85), rgba(26, 115, 232, 0.85)), url('images/hero-children.jpg');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 80px 0;
    }

    .card-title {
      color: var(--primary-blue);
    }

    .btn-primary {
      background-color: var(--primary-blue);
      border: none;

    }

    .btn-outline-primary {
      border-color: var(--primary-blue);
      color: var(--primary-blue);
    }

    .btn-outline-primary:hover {
      background-color: var(--primary-blue);
      color: white;
    }

    footer {
      background-color: var(--primary-blue);
    }
    
    .health-info-section, .doctors-section, .about-section, .facilities-section {
      padding: 60px 0;
    }
    
    .info-card {
      border-left: 4px solid var(--primary-blue);
      transition: transform 0.3s;
      

    }
    
    .info-card:hover {
      transform: translateY(-5px);
      
  
    
    }
    
    .doctor-card {
      transition: all 0.3s ease;
      border: none;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .doctor-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }
    
    .doctor-img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid var(--primary-blue);
      margin: 0 auto;
    }
    
    .specialty-badge {
      background-color: var(--highlight);
      color: white;
    }
    
    .about-img {
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .facility-icon {
      font-size: 2.5rem;
      color: var(--primary-blue);
      margin-bottom: 1rem;
    }
    
    .facility-item {
      text-align: center;
      padding: 20px;
      transition: all 0.3s;
    }
    
    .facility-item:hover {
      background-color: white;
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      border-radius: 10px;
    }

    /* Add to your existing style section */
.about-section {
    padding: 80px 0;
}

.facilities-section {
    padding: 80px 0;
    background-color: #f8f9fa;
}

.register-section {
    padding: 80px 0;
}

.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}

.text-primary {
    color: var(--primary-blue) !important;
}

.footer-section {
    background-color: var(--primary-blue);
}

.footer-section a:hover {
    color: var(--highlight) !important;
    text-decoration: underline !important;
}
</style>
</head>
<body>

  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="https://images.drlogy.com/assets/uploads/img/practice-profile/hospitals/gallery/059006a5d557d39bd3efee29ca432bab.png" alt="PediaCare Logo" width="40" height="40" class="me-2">
      PediaCare
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">User Login</a></li>
        <li class="nav-item"><a class="nav-link" href="prescription.php">Prescription</a></li>
        <li class="nav-item"><a class="nav-link" href="appointment.php">Book Appointment</a></li>
        <li class="nav-item"><a class="nav-link" href="helpline.php">Helpline</a></li>
        <li class="nav-item"><a class="nav-link" href="doctor_login.php">Doctor Login</a></li>
      </ul>
    </div>
  </div>
</nav>


  <!-- Display Success Message if Logged In -->
  <?php if (isset($_SESSION["login_success"])): ?>
    <div class="alert alert-success text-center mt-4 container">
      <?php echo $_SESSION["login_success"]; ?>
    </div>
    <?php unset($_SESSION["login_success"]); ?>
  <?php endif; ?>

  <!-- Hero Section -->
  <section class="hero-section text-center">
    <div class="container">
      <h1 class="display-4 fw-bold">Welcome to PediaCare</h1>
      <img src="https://images.drlogy.com/assets/uploads/img/practice-profile/hospitals/gallery/059006a5d557d39bd3efee29ca432bab.png" alt="PediaCare img" width="100" height="100" class="me-2">
      <p class="lead">Caring for your little ones with love and compassion</p>
      <a href="register.php" class="btn btn-light btn-lg mt-3">Get Started</a>
     

    </div>
  </section>

  <!-- About Us Section -->
<section class="about-section py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="fw-bold">About PediaCare</h2>
            </div>
            <div class="col-lg-6">
                <p class="lead">PediaCare has been providing exceptional pediatric care since 2005.</p>
                <p>We are a dedicated team of pediatric specialists committed to delivering the highest quality healthcare for children from birth through adolescence. Our child-centered approach ensures that every visit is as comfortable and stress-free as possible.</p>
                <p>Our mission is to promote the health and well-being of all children through comprehensive, compassionate care delivered in a child-friendly environment. We combine cutting-edge medical technology with a warm, caring approach to meet each child's unique needs.</p>
            </div>
            <div class="col-lg-6">
                <img src="data:image/jpeg;base64,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" alt="PediaCare Hospital" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Facilities Section -->
<section class="facilities-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Our Facilities</h2>
                <p class="lead text-muted">State-of-the-art care designed specifically for children</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Pediatric Emergency Care</h5>
                        <p class="card-text">24/7 emergency services staffed by pediatric specialists, with child-friendly treatment rooms designed to reduce stress.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Neonatal Intensive Care</h5>
                        <p class="card-text">Level III NICU with the latest technology for premature and critically ill newborns, with family-centered care approach.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Child Life Program</h5>
                        <p class="card-text">Specialized play areas and child life specialists to help children cope with hospitalization through play and education.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Pediatric Imaging Center</h5>
                        <p class="card-text">Low-radiation, child-friendly imaging equipment with distraction techniques to make procedures less intimidating.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Specialty Clinics</h5>
                        <p class="card-text">Comprehensive specialty care including cardiology, neurology, endocrinology, and more - all in one convenient location.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Family Resource Center</h5>
                        <p class="card-text">Comfortable spaces for families with educational resources, support groups, and amenities to make longer stays easier.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Register Section -->
<section class="register-section py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-4">Create Your Account</h2>
                <p class="lead mb-5">Register with PediaCare to access all our services including appointment booking, prescription uploads, and health records.</p>
                
                <div class="row g-3 justify-content-center">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h4 class="card-title mb-4">Parent/Guardian Account</h4>
                                <ul class="text-start mb-4">
                                    <li class="mb-2">Book and manage appointments</li>
                                    <li class="mb-2">Upload and track prescriptions</li>
                                    <li class="mb-2">Get access to top doctors</li>
                                    
                                </ul>
                                <a href="register.php?type=parent" class="btn btn-primary">Register as Parent</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
  

  <!-- Features Section -->
  <section class="py-5 bg-white">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 shadow-sm border-0">
            <div class="card-body text-center">
              <h5 class="card-title"><i class="fas fa-file-medical me-2"></i>Upload Prescriptions</h5>
              <p class="card-text">Upload your child's prescriptions and receive updates via email.</p>
              <a href="prescription.php" class="btn btn-outline-primary">Upload Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm border-0">
            <div class="card-body text-center">
              <h5 class="card-title"><i class="fas fa-calendar-check me-2"></i>Book an Appointment</h5>
              <p class="card-text">Choose your preferred doctor, date and time online.</p>
              <a href="appointment.php" class="btn btn-outline-primary">Book Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm border-0">
            <div class="card-body text-center">
              <h5 class="card-title"><i class="fas fa-phone-alt me-2"></i>Need Help?</h5>
              <p class="card-text">Call our pediatric helpline for instant support and emergency help.</p>
              <a href="helpline.php" class="btn btn-outline-primary">View Helpline</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Doctors Section -->
  <section class="doctors-section bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2 class="fw-bold">Meet Our Pediatric Specialists</h2>
          <p class="lead text-muted">Experienced doctors dedicated to your child's health</p>
        </div>
      </div>
      
      <div class="row g-4 justify-content-center">
        <!-- Dr. Asha Patel -->
        <div class="col-md-4">
          <div class="card doctor-card h-100 text-center p-3">
            <img src="data:image/jpeg;base64,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" class="doctor-img mb-3" alt="Dr. Asha Patel">
            <div class="card-body">
              <h4 class="card-title">Dr. Asha Patel</h4>
              <span class="badge specialty-badge mb-2">Pediatric Cardiologist</span>
              <p class="card-text">Specializing in childhood heart conditions with over 15 years of experience. Expert in congenital heart defects and pediatric echocardiography.</p>
              <div class="d-flex justify-content-center gap-2">
                <a href="appointment.php?doctor=1" class="btn btn-primary">Book Appointment</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Dr. Vikram Shah -->
        <div class="col-md-4">
          <div class="card doctor-card h-100 text-center p-3">
            <img src="data:image/jpeg;base64,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" class="doctor-img mb-3" alt="Dr. Vikram Shah">
            <div class="card-body">
              <h4 class="card-title">Dr. Vikram Shah</h4>
              <span class="badge specialty-badge mb-2">Neonatologist</span>
              <p class="card-text">Specializing in newborn care, particularly premature infants. Head of our Neonatal Intensive Care Unit with 12 years of experience.</p>
              <div class="d-flex justify-content-center gap-2">
                <a href="appointment.php?doctor=2" class="btn btn-primary">Book Appointment</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Dr. Neha Joshi -->
        <div class="col-md-4">
          <div class="card doctor-card h-100 text-center p-3">
            <img src="data:image/jpeg;base64,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" class="doctor-img mb-3" alt="Dr. Neha Joshi">
            <div class="card-body">
              <h4 class="card-title">Dr. Neha Joshi</h4>
              <span class="badge specialty-badge mb-2">Pediatric Neurologist</span>
              <p class="card-text">Specializing in childhood neurological disorders including epilepsy, developmental delays, and migraines. 10 years of clinical experience.</p>
              <div class="d-flex justify-content-center gap-2">
                <a href="appointment.php?doctor=3" class="btn btn-primary">Book Appointment</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Health Information Section -->
  <section class="health-info-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2 class="fw-bold">Child Health Information</h2>
          <p class="lead text-muted">Important health topics every parent should know</p>
        </div>
      </div>
      
      <div class="row g-4">
        <!-- Cancer in Children -->
        <div class="col-lg-6">
          <div class="card h-100 shadow-sm info-card">
            <div class="card-body">
              <h3 class="card-title">Cancer in Children: Signs To Watch For</h3>
              <p class="card-text">Childhood cancer, while rare, requires early detection for the best outcomes. Be aware of these warning signs:</p>
              <ul class="mb-3">
                <li>Unexplained weight loss and persistent fatigue</li>
                <li>Frequent fevers or infections</li>
                <li>Unusual lumps or swelling (especially painless ones)</li>
                <li>Easy bruising or bleeding</li>
                <li>Persistent headaches with vomiting</li>
                <li>Sudden eye or vision changes</li>
              </ul>
              <p>While these symptoms can have many causes, persistent or unusual symptoms should be evaluated by a pediatrician. Early diagnosis significantly improves treatment success.</p>
              <a href="appointment.php" class="btn btn-primary">Schedule a Checkup</a>
            </div>
          </div>
        </div>
        
        <!-- Vaccination Importance -->
        <div class="col-lg-6">
          <div class="card h-100 shadow-sm info-card">
            <div class="card-body">
              <h3 class="card-title">The Importance Of Vaccinating Your Child</h3>
              <p class="card-text">Vaccinations are one of the most effective ways to protect children from serious diseases. Key benefits include:</p>
              <ul class="mb-3">
                <li>Prevention of life-threatening diseases like measles, polio, and whooping cough</li>
                <li>Protection for children who can't be vaccinated due to medical conditions (herd immunity)</li>
                <li>Reduced risk of disease outbreaks in schools and communities</li>
                <li>Prevention of complications that can lead to hospitalization or long-term disability</li>
              </ul>
              <p>Our hospital follows the CDC-recommended vaccination schedule. Keep your child's immunizations up to date for optimal protection.</p>
              <a href="appointment.php" class="btn btn-primary">Book Appointment</a>
            </div>
          </div>
        </div>
        
        <!-- Nutrition -->
        <div class="col-lg-6">
          <div class="card h-100 shadow-sm info-card">
            <div class="card-body">
              <h3 class="card-title">Childhood Nutrition Essentials</h3>
              <p class="card-text">Proper nutrition is crucial for your child's growth and development. Key recommendations:</p>
              <ul class="mb-3">
                <li>Balanced meals with fruits, vegetables, whole grains, and lean proteins</li>
                <li>Adequate calcium and vitamin D for bone development</li>
                <li>Healthy snacking options instead of processed foods</li>
                <li>Proper hydration with water instead of sugary drinks</li>
                <li>Age-appropriate portion sizes</li>
              </ul>
              <p>Our pediatric nutritionists can help create personalized meal plans for children with special dietary needs or picky eaters.</p>
              <a href="appointment.php" class="btn btn-primary">Consult Our Nutritionist</a>
            </div>
          </div>
        </div>
        
        <!-- Common Illnesses -->
        <div class="col-lg-6">
          <div class="card h-100 shadow-sm info-card">
            <div class="card-body">
              <h3 class="card-title">Managing Common Childhood Illnesses</h3>
              <p class="card-text">Learn when to treat at home and when to seek medical care for these common conditions:</p>
              <ul class="mb-3">
                <li><strong>Colds & Flu:</strong> Rest and fluids usually sufficient unless high fever persists</li>
                <li><strong>Ear Infections:</strong> Often need medical evaluation</li>
                <li><strong>Stomach Bugs:</strong> Watch for dehydration signs</li>
                <li><strong>Rashes:</strong> Some require immediate attention</li>
                <li><strong>Allergies:</strong> May need testing and management plan</li>
              </ul>
              <p>Our 24/7 pediatric helpline can help you determine if your child needs to be seen.</p>
              <a href="helpline.php" class="btn btn-primary">Call Our Helpline</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
<footer class="footer-section text-white py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="mb-4">
                    <h3 class="fw-bold mb-3">Pediacare</h3>
                    <p>Providing exceptional healthcare for children of all ages. Our team of specialists is dedicated to ensuring your child's health and well-being.</p>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="mb-4">
                    <h4 class="fw-bold mb-3">Quick Links</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="appointment.php" class="text-white text-decoration-none">Book an Appointment</a></li>
                        <li class="mb-2"><a href="prescription.php" class="text-white text-decoration-none">Upload Prescription</a></li>
                        <li class="mb-2"><a href="helpline.php" class="text-white text-decoration-none">Helpline</a></li>
                        <li class="mb-2"><a href="login.php" class="text-white text-decoration-none">Patient Login</a></li>
                        <li><a href="doctor_login.php" class="text-white text-decoration-none">Doctor Login</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="mb-4">
                    <h4 class="fw-bold mb-3">Contact Us</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-phone-alt me-2"></i> 22 2353 3234</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> info@pediacare.com</li>
                        <li><i class="fas fa-map-marker-alt me-2"></i> 123 Pediatric Lane, Medical District, City, State 12345</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-4 bg-light">
        <div class="row">
            <div class="col-12 text-center">
                <p class="mb-0">&copy; 2025 PediaCare Hospital. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

