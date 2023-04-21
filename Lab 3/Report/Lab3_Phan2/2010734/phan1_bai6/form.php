<!-- Function to process input data use php in here -->
<!-- If press submit button -> reset value var in Php -->

<!-- end function action.php -->
<?php
$firstname = $lastname = $email = $password = $day = $month = $year = $gender = $country = $about = "";
$firstname_alert = $lastname_alert = $email_alert = $password_alert = $day_alert = $month_alert = $year_alert = $gender_alert = $country_alert = $about_alert = "";
$ok_status = "";
$check_invalid = 0;
function test_user_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check input firsname.
  if (empty($_POST["firstname"])) {
    $firstname_alert = "Firstname is required!";
    $check_invalid = $check_invalid + 1;
  } else {
    $firstname = test_user_input($_POST["firstname"]);
    $length = strlen($firstname);
    if ($length < 2 || $length > 30) {
      $firstname_alert = "First name: You must enter from 2 to 30 characters!";
      $check_invalid = $check_invalid + 1;
    }
  }
  // Check input lastname.
  if (empty($_POST["lastname"])) {
    $lastname_alert = "Lastname is required!";
    $check_invalid = $check_invalid + 1;
  } else {
    $lastname = test_user_input($_POST["lastname"]);
    $length = strlen($lastname);
    if ($length < 2 || $length > 30) {
      $lastname_alert = "Last name: You must enter from 2 to 30 characters!";
      $check_invalid = $check_invalid + 1;
    }
  }

  // Check input email.
  if (empty($_POST["email"])) {
    $email_alert = "Email is required";
    $check_invalid = $check_invalid + 1;
  } else {
    $email = test_user_input($_POST["email"]);
    $length = strlen($email);
    $flag_1 = 0;
    $flag_2 = 0;
    $count = 0;
    if ($length <= 1) {
      $email_alert = "Email: Please enter your email has lenght greater 5 characters and follow format email of form!";
      $check_invalid = $check_invalid + 1;
    }
    for ($i = 0; $i < $length; $i++) {
      if ($email[$i] == '@' && $i > 0) {
        $count = $count + 1;
        $flag_1 = 1;
      }
      if ($flag_1 == 1 && $count == 1 && $email[$i] == '.' && $i < $length) {
        $flag_2 = 1;
      }
    }
    if ($flag_1 == 0 || $flag_2 == 0) {
      $email_alert = "Email: Invalid, Please re-enter your email.";
      $check_invalid = $check_invalid + 1;
      // return false;
    }
  }
  // check input password.
  if (empty($_POST["password"])) {
    $password_alert = "Password is required!";
    $check_invalid = $check_invalid + 1;
  } else {
    $password = test_user_input($_POST["password"]);
    $length = strlen($password);
    if ($length < 2 || $length > 30) {
      $password_alert = "Password: You must enter from 2 to 30 characters!";
      $check_invalid = $check_invalid + 1;
    }
  }
  // Check input birthday.
  // Check day
  if (empty($_POST["day"])) {
    $day_alert = "Day is required!";
    $check_invalid = $check_invalid + 1;
  } else {
    $day = test_user_input($_POST["day"]);
  }

  // Check month
  if (empty($_POST["month"])) {
    $month_alert = "Month is required!";
    $check_invalid = $check_invalid + 1;
  } else {
    $month = test_user_input($_POST["month"]);
  }

  // Check year
  if (empty($_POST["year"])) {
    $year_alert = "Year is required!";
    $check_invalid = $check_invalid + 1;
  } else {
    $month = test_user_input($_POST["year"]);
  }

  // Check input Gender.
  if (empty($_POST["dot-1"])) {
    $country_alert = "Gender is required";
    $check_invalid = $check_invalid + 1;
  } else {
    $country = test_user_input($_POST["dot-1"]);
  }

  // Check input Country.
  if (empty($_POST["country"])) {
    $country_alert = "Country is required";
    $check_invalid = $check_invalid + 1;
  } else {
    $country = test_user_input($_POST["country"]);
  }

  // Check input About.
  $about = test_user_input($_POST["about"]);
  $length = strlen($about);
  if ($length > 10000) {
    $about_alert = "Can't exceed 10000 characters";
    $check_invalid = $check_invalid + 1;
  }

  // State: No problem in form
  if ($check_invalid == 0) {
    $ok_status = "Complete!";
  }
}
?>
<!-- ===================================================================== -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTER FORM TEST</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <!-- <script src="p2_bai3.js" ></script> -->
</head>

<body>
  <div class="container">
    <div class="title">REGISTER FORM FOR FOUNDATION TEST</div>
    <div class="content">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name:</span>
            <input type="text" placeholder="Has length from 2-30 characters" name="firstname" id="firstname" required>
            <p class="error" style="color:red;">* <?php echo $firstname_alert ?></p>
          </div>
          <div class="input-box">
            <span class="details">Last Name:</span>
            <input type="text" placeholder="Has length from 2-30 characters" name="lastname" id="lastname" required>
            <p class="error" style="color:red;">* <?php echo $lastname_alert ?></p>
          </div>
          <div class="input-box">
            <span class="details">Email:</span>
            <input type="text" placeholder="Email format: sth@sth.sth" name="email" id="email" required>
            <p class="error" style="color:red;">* <?php echo $email_alert ?></p>
          </div>
          <div class="input-box">
            <span class="details">Password:</span>
            <input type="password" placeholder="Has length from 2-30 characters" name="password" id="password" required>
            <p class="error" style="color:red;">* <?php echo $password_alert ?></p>
          </div>
          <div class="input-box-1">
            <div class="details">Birthday:</div>

            <div class="input-group mb-3">
              <select class="custom-select" name="day" id="day">
                <option selected value="">dd</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
              <!-- <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect02"></label>
              </div> -->
            </div>
            <!-- <div class="input-group mb-3">
              <select class="custom-select" id="inputGroupSelect02">
                <option selected>mm</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select>
              <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect02">Mon</label>
              </div>
            </div>
            -->




            <div class="input-group mb-3">
              <select class="custom-select" name="month" id="month">
                <option selected value="">mm</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select>
              <!-- <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect02"></label>
              </div> -->
            </div>



            <div class="input-group mb-3">
              <select class="custom-select" name="year" id="year">
                <option selected value="">yy</option>
                <option value="1">2000</option>
                <option value="2">2001</option>
                <option value="3">2002</option>
                <option value="4">2003</option>
                <option value="5">2004</option>
                <option value="6">2005</option>
                <option value="7">2006</option>
                <option value="8">2007</option>
                <option value="9">2008</option>
                <option value="10">2009</option>
                <option value="11">2010</option>
                <option value="12">2011</option>
                <option value="12">Other</option>
              </select>
              <!-- <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect02"></label>
              </div> -->
            </div>

          </div>
          <br>
          <p class="error" style="color:red;"><?php echo $day_alert ?></p>
          <p class="error" style="color:red;"><?php echo $month_alert ?></p>
          <p class="error" style="color:red;"><?php echo $year_alert ?></p>
        </div>
        <div class="gender-details">
          <input type="radio" name="dot-1" id="dot-1" value="male">
          <input type="radio" name="dot-1" id="dot-2" value="female">
          <input type="radio" name="dot-1" id="dot-3" value="nodetermine" checked>
          <span class="gender-title">Gender:</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Not Determine</span>
            </label>
          </div>

          <!-- <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Default radio
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Default checked radio
            </label>
          </div> -->




          <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><b>Country:</b></label>
          <br>
          <select class="custom-select my-1 mr-sm-2" name="country" id="country">
            <option selected value="">Select your country</option>
            <option value="1">Vietnam</option>
            <option value="2">Australia</option>
            <option value="3">United States</option>
            <option value="4">India</option>
            <option value="5">Other</option>
          </select>
        </div>
        <p class="error" style="color:red;"> *<?php echo $country_alert; ?> </p>
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><b>About:</b></label>
        <br>
        <div class="form-outline form-white">
          <textarea name="about" class="form-control" id="textAreaExample" rows="1" maxlength="10000" placeholder="Enter information with maxlength 10000 characters"></textarea>
        </div>
        <p class="error" style="color:red;"> *<?php echo $about_alert; ?> </p>

        <div class="button">
          <input type="submit" value="Submit">
        </div>

        <div class="button">
          <input type="reset" name="reset" value="Reset">

        </div>
        <p class="final_state" style="color:red;">*<?php echo $ok_status ?></p>
      </form>
    </div>
  </div>





</body>

</html>