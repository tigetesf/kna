<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <h1> KENA <span>REGISTRATION</span>  FORM</h1>
  <marquee behavior="scroll" direction="left" loop="infinite"><h2>WELCOME TO KENNA GARGAARSA ORGANIZATION</h2></marquee>


  <img src="tg.jpg" alt="KENNA Logo">
  <p>
  Reasonable Faith is intended primarily to serve as a textbook for seminary level 
courses on Christian apologetics. Indeed, the book began as a set of lectures for 
  </p>
  <br>
  <div class="container">
    <form id="registrationForm" action="connect.php" method="POST">
      <br>
      <label for="first_name">First Name:</label>
      <input type="text" name="firstName" placeholder="First Name" required>
      <label for="first_name">Middle Name:</label>
      <input type="text" name="middleName" placeholder="Middle Name" required>
      <label for="first_name">Last Name:</label>
      <input type="text" name="lastName" placeholder="Last Name" required>
      <label for="first_name">Phone Number:</label>
      <input type="tel" name="phone" placeholder="Phone Number" required>
      <label for="first_name">Birth Date:</label>
      <input type="date" name="birthdate" placeholder="Birth Date" required>
      <label for="first_name">Address:</label>
      <input type="text" name="address" placeholder="Address" required>
      <label for="first_name">Country:</label>
      <input type="text" name="country" placeholder="Country" required>
      <label for="Amount in Birr">Amount Birr:</label>
      <input type="number" name="amountInBirr" placeholder="Amount in Birr" required>
      <label for="first_name">Gender:</label>
      <select name="gender" required>
        <option value="" disabled selected>Select Gender</option> 
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
      <label for="first_name">Status:</label>
      <select name="status" required>
        <option value="" disabled selected>Select Status</option> 
        <option value="worker">Worker</option>
        <option value="student">Student</option>
      </select>
      <label for="first_name">Comment:</label>
      <input type="text" name="comment" placeholder="Comment">
      <button type="submit">Submit</button>
    </form>
    
  </div>

  <h3>~waaqayyo kadhata kee dhaga'eera,dadhaboota gargaaruu kees yaadateera. *H erg 10:4-5</h3>
  <h1>EEBBIFAMAA🙏🙏🙏</h1>
</div>



</body>
</html>
