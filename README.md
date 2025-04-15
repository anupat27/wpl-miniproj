───────────────────────────────────────────────
PEDIATRIC HOSPITAL WEBSITE - PHP + MySQL + Bootstrap
───────────────────────────────────────────────

▶ FEATURES
- Home page (based on Figma UI)
- User Registration & Login
- File Upload for Prescriptions
- Appointment Booking
- Static Helpline Page
- Doctor Login & Weekly Timetable (real-time from DB)

───────────────────────────────────────────────
▶ SETUP INSTRUCTIONS (XAMPP)
───────────────────────────────────────────────

1. START XAMPP
   - Open XAMPP Control Panel.
   - Start Apache and MySQL.

2. CREATE DATABASE
   - Go to http://localhost/phpmyadmin
   - Click on the “SQL” tab.
   - Paste and run the SQL from database.sql file (or use the SQL I gave you earlier).

3. PLACE FILES IN htdocs
   - Copy the full project folder into XAMPP's htdocs directory.
   - Example: C:\xampp\htdocs\pediatric-hospital

4. OPEN WEBSITE
   - Visit in browser:
     http://localhost/pediatric-hospital/index.php

5. DATABASE NAME
   - pediatric_hospital

6. FOLDER STRUCTURE:
   pediatric-hospital/
   ├── css/
   │   └── style.css
   ├── uploads/
   │   └── (prescription files will be stored here)
   ├── db.php
   ├── index.php
   ├── login.php
   ├── register.php
   ├── prescription.php
   ├── waiting.php
   ├── appointment.php
   ├── helpline.php
   ├── doctor_login.php
   ├── doctor_dashboard.php
   └── README.txt

7. FILE PERMISSIONS
   - Make sure uploads/ folder is writable by PHP.
   - On Linux/Mac: Right click → Properties → Permissions.
   - On Windows: XAMPP handles this by default.

8. DEFAULT DOCTOR LOGINS
   - Dr. Asha Patel → asha@hospital.com → asha123
   - Dr. Vikram Shah → vikram@hospital.com → vikram123
   - Dr. Neha Joshi → neha@hospital.com → neha123

9. PRESCRIPTION UPLOADS
   - Users upload a file and enter email.
   - File is stored in uploads/ folder and linked in DB.
   - After upload, redirected to waiting page.

10. APPOINTMENT BOOKING
   - Patient enters name, email, date, time, and doctor.
   - Appointment is stored in DB.
   - Doctor’s dashboard shows appointments in real time.

─
