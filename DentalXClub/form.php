<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Form</title>
  <link rel="stylesheet" href="form.css">
  <script src="https://kit.fontawesome.com/e46ff3aebe.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- NNNNNNNNNNNNNNNAAAAAAAAAAAAVVVVVVVVVVVVV -->
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">DentalXClub</label>
    <ul>
      <li><a class="active" href="index.php">Home</a></li>
      <li><a href="form.php">Contact</a></li>
    </ul>
  </nav>
  <!-- FFFFFFFFFOOOOOOOOOORRRRRRRRRRMMMMMMMMMMMMM -->
  <div class="container">
    <div class="left-div">
      <h1>DentalXClub</h1>
    </div>
    <div class="right-div">
      <div class="form-container">
        <h2>Contact</h2>
        <form id="myForm">
          <label for="fullname">Full Name</label>
          <input type="text" id="fullname" name="fullname" required>

          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>

          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" required>

          <label for="dob">Date of Birth</label>
          <input type="date" id="dob" name="dob" required>

          <label for="gender">Gender</label>
          <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>

          <label for="doctor">Doctor Chosen</label>
          <input type="text" id="doctor" name="doctor" required>

          <input type="submit" value="Submit" onclick="alerName();"> 
        </form>
      </div>
    </div>
  </div>
  <script>
    function alertName(){
      let firstname = document.getElementById("fullname").value;
    window.alert("Hey "+firstname+", we will contact you soon as possible!")
  }
  </script>
</body>
</html>
