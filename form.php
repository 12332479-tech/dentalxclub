<?php 
$servername = "sql206.infinityfree.com";
$username = "if0_39071217";
$password = "mdxQkFxtu01s";
$dbname = "if0_39071217_dentalXmhmd";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $dob = mysqli_real_escape_string($conn, $_POST['date']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $doctor = mysqli_real_escape_string($conn, $_POST['doctor']);

    $sql = "INSERT INTO contactdb (fullname, email, phone, dateop, gender, doctor)
            VALUES ('$fullname', '$email', '$phone', '$dob', '$gender', '$doctor')";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - DentalXClub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Inter', sans-serif;
      background: url('images/Screenshot 2023-05-29 230813.png') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .contact-form {
      background: rgba(255, 255, 255, 0.95);
      padding: 20px 40px;
      border-radius: 12px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
      max-width: 650px;
      width: 95%;
      box-sizing: border-box;
    }

    .contact-form h2 {
      text-align: center;
      font-size: 24px;
      color: #1b9bff;
      margin-bottom: 20px;
    }

    .contact-form label {
      font-weight: 600;
      display: block;
      margin-bottom: 6px;
      color: #333;
    }

    .contact-form input,
    .contact-form select {
      width: 100%;
      padding: 10px 14px;
      margin-bottom: 14px;
      font-size: 16px;
      border-radius: 6px;
      border: 1.5px solid #ddd;
      box-sizing: border-box;
      transition: border-color 0.3s ease;
    }

    .contact-form input:focus,
    .contact-form select:focus {
      outline: none;
      border-color: #1b9bff;
      box-shadow: 0 0 8px rgba(27, 155, 255, 0.3);
    }

    .contact-form button {
      width: 100%;
      padding: 12px;
      background-color: #1b9bff;
      color: white;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .contact-form button:hover {
      background-color: #0073e6;
    }

    .error-message {
      color: red;
      font-size: 0.9em;
      font-weight: 600;
      margin-top: -10px;
      margin-bottom: 10px;
    }

    @media (max-width: 480px) {
      .contact-form {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <form class="contact-form" id="contactForm" action="form.php" method="POST" novalidate>
    <h2>Contact Us</h2>

    <label for="fullname">Full Name *</label>
    <input type="text" id="fullname" name="fullname" placeholder="Your full name" required>

    <label for="phone">Phone *</label>
    <input type="text" id="phone" name="phone" placeholder="Your phone number" required>

    <label for="email">Email *</label>
    <input type="email" id="email" name="email" placeholder="you@example.com" required>

    <label for="date">Preferred Date *</label>
    <input type="date" id="date" name="date" required>

    <label for="gender">Gender *</label>
    <select id="gender" name="gender" required>
      <option value="" disabled selected>Select your gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>

    <label for="doctor">Choose a Doctor *</label>
    <select id="doctor" name="doctor" required>
      <option value="" disabled selected>Select a doctor</option>
      <option value="doctor_samer">Doctor Samer</option>
      <option value="doctor_dalia">Doctor Dalia</option>
      <option value="doctor_sarah">Doctor Sarah</option>
      <option value="doctor_omar">Doctor Omar</option>
    </select>

    <button type="submit">Submit</button>
  </form>

  <script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      const errorElements = this.querySelectorAll('.error-message');
      errorElements.forEach(el => el.remove());

      let hasError = false;

      function showError(field, message) {
        const error = document.createElement('div');
        error.className = 'error-message';
        error.textContent = message;
        field.parentNode.insertBefore(error, field.nextSibling);
      }

      const fields = ['fullname', 'phone', 'email', 'date', 'gender', 'doctor'];
      fields.forEach(id => {
        const field = this[id];
        if (!field.value.trim()) {
          showError(field, `${field.previousElementSibling.textContent} is required`);
          hasError = true;
        }
      });

      const email = this.email.value.trim();
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (email && !emailPattern.test(email)) {
        showError(this.email, 'Please enter a valid email');
        hasError = true;
      }

      if (hasError) {
        e.preventDefault();
      }
    });
  </script>

</body>
</html>
