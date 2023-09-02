<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Affiliate Project</title>
  <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon" />
  <!-- Bootstrap CDN Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom CSS Link -->
  <link rel="stylesheet" href="./style.css" />

  <!-- script -->

  <!-- script -->
  <script type="text/javascript">
    function doSomething() {
      var x = new XMLHttpRequest();
      x.open("GET", "contact.php", true);
      x.send();
      //return false; 
      // document.getElementById("contact").scrollIntoView({behavior:'smooth'});

    }
    // function Something(){
    //     var x = new XMLHttpRequest();
    //     x.open("GET","signUP.php",true);
    //     x.send();
    // }
  </script>
</head>

<body>
  <!-- MODAL SECTION -->
  <section class="modal-section">
    <div class="container">
      <div class="modal fade modal-xl" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="content p-5">
              <span>
                <i class="fa-solid fa-xmark modal-close" data-bs-dismiss="modal"></i>
              </span>
              <!-- <div class="container"> -->
              <div class="row row-cols-1 row-cols-lg-2">
                <div class="col d-none d-lg-block col-lg-5">
                  <img src="./images/login-img.jpg" alt="Image" class="img-fluid" />
                </div>
                <div class="col col-lg-7">
                  <div class="row justify-content-center">
                    <div class="col-md-8">
                      <div class="mb-3">
                        <h3 class="text-primary">Login</h3>
                      </div>

                      



                      <form action="login.php" method="post">
                        <div class="form-group first">
                          <label class="mb-1" for="username">Username</label>
                          <input type="text" class="form-control mb-2" id="username" name="usernameS" />
                        </div>
                        <div class="form-group last mb-4">
                          <label class="mb-1" for="password">Password</label>
                          <input type="password" class="form-control" id="password"  name="passwordS"/>
                        </div>
                        <div class="row row-cols-1 row-cols-xl-2 mb-2 align-items-center">
                          <div class="col">
                            <input class="form-check-input" type="checkbox" value="" id="remember-me" checked />
                            <label class="form-check-label me-5 pointer" for="remember-me">
                              Remember Me
                            </label>
                          </div>

                          <span class="ml-auto col"></span>
                          <a href="#" class="forgot-pass text-decoration-none">
                            Forgot Password ?
                          </a>
                          </span>
                        </div>
                        <div class="col-15">Don't have an account?<span> <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#signupModal" data-bs-whatever="@getbootstrap">Register</a></span></div>
                        <input type="submit" value="Login" class="btn btn-block btn-primary ps-5 pe-5 mt-3" name="login" />
                        <span class="d-block text-center my-4 text-muted">
                          &mdash;&mdash; or login with &mdash;&mdash;
                        </span>
                        <div class="social-login row justify-content-center gap-2">
                          <a href="#" class="facebook">
                            <span class="fa-brands fa-facebook-f mr-3"></span>
                          </a>
                          <a href="#" class="twitter">
                            <span class="fa-brands fa-twitter mr-3"></span>
                          </a>
                          <a href="#" class="google">
                            <span class="fa-brands fa-google mr-3"></span>
                          </a>
                        </div>
                      </form>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="signup-modal-section">
    <div class="container">
      <div class="modal fade modal-xl" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content modal-dialog-scrollable rounded-4 p-3 p-md-4 p-lg-5">
            <span>
              <i class="fa-solid fa-xmark modal-close" data-bs-dismiss="modal"></i>
            </span>
            <div class="row">
              <h2 class="text-primary mb-3">Sign up Form</h2>

              <p class="fw-bold">
                This star field mean this field is required (
                <span class="req">*</span>
                )
              </p>
            </div>





            <div class="row ps-0">
              <h4 class="text-primary mt-3 mb-3">Personal Information:</h4>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="row g-3">
              <div class="col-md-4">
                <label for="firstName" class="form-label">
                  First Name
                  <span class="req">*</span>
                </label>
                <input type="text" class="form-control" id="firstName" required name="fName" />
              </div>
              <div class="col-md-4">
                <label for="lastName" class="form-label">
                  Last Name
                  <span class="req">*</span>
                </label>
                <input type="text" class="form-control" id="lastName" required name="lName" />
              </div>

              <div class="col-md-6">
                <label for="emailAdd" class="form-label">
                  Email Adress
                  <span class="req">*</span>
                </label>
                <input type="email" class="form-control" id="emailAdd" required name="emailS" />
              </div>
              <div class="col-md-6">
                <label for="confEmal" class="form-label">
                  Username
                  <span class="req">*</span>
                </label>
                <input type="text" class="form-control" id="confEmal" name="usernameS" required />
              </div>
              <!-- <div><b>Please confirm your Password.</b></div> -->
              <div class="col-md-6">
                <label for="reg-password" class="form-label">
                  Password
                  <span class="req">*</span>
                </label>
                <input type="password" class="form-control" id="reg-password" required name="passwordS" />
              </div>
              <div class="col-md-6">
                <label for="confPass" class="form-label">
                  Confirm Password
                  <span class="req">*</span>
                </label>
                <input type="password" class="form-control" id="confPass" required name="cpasswordS" />
                <span class="error"> <?php
                                      error_reporting(E_ALL ^ E_WARNING);

                                      include 'conn.php';

                                      $fName = $_POST['fName'];
                                      $lName = $_POST['lName'];
                                      $email = $_POST['emailS'];
                                      $username = $_POST['usernameS'];
                                      $password = $_POST['passwordS'];
                                      $cpasswordS = $_POST['cpasswordS'];
                                      $addressS = $_POST['addressS'];
                                      $city = $_POST['city'];
                                      $state = $_POST['state'];
                                      $zip = $_POST['zip'];
                                      // $password = $_POST['passwordS'];
                                      // $cpasswordS = $_POST['cpasswordS'];
                                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        if ($password != $cpasswordS) {
                                          echo "<script> alert('Please enter same  passsword !');</script>";
                                        } else {
                                          // echo "<script> alert('Success!');</script>";
                                          $sql = "INSERT INTO signUp(F_Name, L_Name, Email,Username, Password, Address, City, State, Pin_code) VALUES ('$fName','$lName','$email','$username','$password','$addressS','$city','$state','$zip');";
                                        }
                                        if ($conn->query($sql) === true) {
                                          // $showalert = true;
                                          echo "<script> alert('Form Submitted Successfully!');</script>";
                                        } else {
                                          echo 'Error: ' . $sql . '<br>' . $conn->error;
                                        }
                                      }
                                      ?></span>
              </div>
              <div class="row">
                <h4 class="text-primary mt-5">Address:</h4>
              </div>
              <div class="col-md-6">
                <label for="inputAddress" class="form-label">
                  Address
                  <span class="req">*</span>
                </label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required name="addressS" />
              </div>
              <!-- <div class="col-md-6">
                  <label for="inputAddress2" class="form-label">
                    Address 2
                  </label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputAddress2"
                    placeholder="Apartment, studio, or floor"
                  />
                </div> -->
              <div class="col-md-6">
                <label for="inputCity" class="form-label">
                  City
                  <span class="req">*</span>
                </label>
                <input type="text" class="form-control" id="inputCity" required name="city" />
              </div>
              <div class="col-md-4">
                <label for="state" class="form-label">
                  State / Province
                  <span class="req">*</span>
                </label>
                <input type="text" class="form-control" id="state" required name="state" />
              </div>
              <div class="col-md-4">
                <label for="zip" class="form-label">
                  ZIP / Postal Code
                  <span class="req">*</span>
                </label>
                <input type="text" class="form-control" id="zip" required name="zip" />
              </div>
              <div class="col-md-4">
                <label for="inputCountry" class="form-label">
                  Country
                  <span class="req">*</span>
                </label>
                <select id="inputCountry" class="form-select" required>
                  <option selected>Select Country</option>
                  <option value="AF">Afghanistan</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AG">Antigua and Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia</option>
                  <option value="BA">Bosnia-Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BR">Brazil</option>
                  <option value="BN">Brunei Darussalam</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="CV">Cape Verde</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comoros</option>
                  <option value="CG">Congo</option>
                  <option value="CK">Cook Islands</option>
                  <option value="CR">Costa Rica</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CY">Cyprus</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="TP">East Timor</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FK">Falkland Islands</option>
                  <option value="FO">Faroe Islands</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="GF">French Guiana</option>
                  <option value="FP">French Polynesia</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GR">Greece</option>
                  <option value="GL">Greenland</option>
                  <option value="GP">Guadeloupe (French)</option>
                  <option value="GT">Guatemala</option>
                  <option value="GN">Guinea</option>
                  <option value="GW">Guinea Bissau</option>
                  <option value="GY">Guyana</option>
                  <option value="HT">Haiti</option>
                  <option value="HN">Honduras</option>
                  <option value="HK">Hong Kong</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IR">Iran</option>
                  <option value="IQ">Iraq</option>
                  <option value="IE">Ireland</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Laos</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MO">Macau</option>
                  <option value="MK">Macedonia</option>
                  <option value="MG">Madagascar</option>
                  <option value="MW">Malawi</option>
                  <option value="MY">Malaysia</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MQ">Martinique (French)</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="YT">Mayotte</option>
                  <option value="MX">Mexico</option>
                  <option value="MD">Moldavia</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NL">Netherlands</option>
                  <option value="AN">Netherlands Antilles</option>
                  <option value="NC">New Caledonia (French)</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="KP">North Korea</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="QA">Qatar</option>
                  <option value="RE">Reunion (French)</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russia</option>
                  <option value="RW">Rwanda</option>
                  <option value="WS">Samoa</option>
                  <option value="SM">San Marino</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SK">Slovak Republic</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="SO">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="KR">South Korea</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SZ">Swaziland</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syria</option>
                  <option value="TW">Taiwan</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania</option>
                  <option value="TH">Thailand</option>
                  <option value="TG">Togo</option>
                  <option value="TK">Tokelau</option>
                  <option value="TO">Tonga</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TM">Turkmenistan</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="UK">United Kingdom</option>
                  <option value="US">United States</option>
                  <option value="UY">Uruguay</option>
                  <option value="VI">US Virgin Islands</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VA">Vatican City State</option>
                  <option value="VE">Venezuela</option>
                  <option value="VN">Vietnam</option>
                  <option value="WF">Wallis and Futuna Islands</option>
                  <option value="YE">Yemen</option>
                  <option value="YU">Yugoslavia</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
                </select>
              </div>


              <!-- <div class="row">
                  <h4 class="text-primary mt-5">User Information:</h4>
                </div>
                
                <div class="col-md-6">
                  <label for="phoneVerify" class="form-label">
                    User Type ?
                  </label>
                  <select
                    name="phoneVerify"
                    id="phoneVerify"
                    class="form-select"
                    required
                  >
                    <option value="selected" selected>Choose Option...</option>
                    <option value="yes">Admin</option>
                    <option value="no">User</option>
                  </select>
                </div> -->

              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="privacyCheck" required />
                  <label class="form-check-label" for="privacyCheck">
                    I have read and agree to the privacy policy
                  </label>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary pt-2 pb-2 ps-5 pe-5">
                  Sign in
                </button>
              </div>
            </form>
            <?php
            if (isset($_POST['submit'])) {
              echo "success";
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MODAL SECTION ENDED -->

  <!-- HEADER SECTION STARTS -->
  <header>
    <!-- Navbar Starts -->
    <section id="navar-section">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="images/Logins.png" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#advertisers">Advertisers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#publishers">Publishers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item me-lg-1 ms-lg-1 mb-md-1 mb-sm-1 mb-cs">
                <a href="#" class="nav-link fw-bold shadow btn btn-info text-white btn-sm pd-btn" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-whatever="@getbootstrap">
                  Login
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link fw-bold shadow s-d text-white btn-sm pd-btn btn" data-bs-toggle="modal" data-bs-target="#signupModal" data-bs-whatever="@getbootstrap">
                  Sign Up
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!-- Navar Ended -->

    <!-- Hero Section Starts -->
    <section class="hero-section">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active bg-1">
            <div class="carousel-caption d-md-block">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12 banner-text-area text-center">
                    <h4 class="fw-light">
                      #Growing your business today with
                    </h4>
                    <h1 class="fw-bolder main-heading">CRM Website</h1>
                    <p class="fs-4">
                      We connect the highest paying advertisers to our
                      community-driven publisher resources.
                    </p>
                    <a href="#about" class="btn hero-btn btn-outline-light">
                      Learn more
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item bg-2">
            <div class="carousel-caption d-md-block">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12 banner-text-area text-center">
                    <h4 class="fw-light">
                      #Clear Cut, Straight Forward & Honest
                    </h4>
                    <h2 class="fw-bolder main-heading">
                      Affiliate Marketing
                    </h2>
                    <p class="fs-4">
                      Where advertisers, affiliaters, and site owners meet
                    </p>
                    <a href="#contact" class="btn btn-outline-light hero-btn">
                      Contact Us
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item bg-3">
            <div class="carousel-caption d-md-block">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12 banner-text-area text-center">
                    <h4 class="fw-light">
                      #Starts growing your business with
                    </h4>
                    <h2 class="fw-bolder main-heading">Advertiser</h2>
                    <p class="fs-4">
                      We are open to new affiliate programs and campaigns, if
                      you are interested please get in touch with us and we
                      will find the best solution for your needs.
                    </p>
                    <a href="#advertisers" class="btn btn-outline-light hero-btn">
                      Become an Advertiser
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item bg-4">
            <div class="carousel-caption d-md-block">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12 banner-text-area text-center">
                    <h4 class="fw-light">#promoting brand names you love</h4>
                    <h2 class="fw-bolder main-heading">Publisher</h2>
                    <p class="fs-4">
                      By becoming a publisher for advertisers you can make
                      money online.Here are the best affiliate networks for
                      publishers in 2022.
                    </p>
                    <a href="#publishers" class="btn btn-outline-light hero-btn">
                      Become an Publisher
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
  </header>
  <!-- HEADER SECTION ENDED -->

  <!-- SCROLL ARROW SEC STARS -->
  <span id="up-arrow">
    <a href="#"><i class="fa-regular fa-circle-up rounded-circle"></i></a>
  </span>
  <!-- SCROLL ARROW SEC ENDED -->
  <main>
    <!-- ABOUT SECTION STARTS -->
    <section id="about" class="pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center">
              <h2 class="fw-bold fs-1">
                About
                <span class="text-danger">Us</span>
              </h2>
              <p class="sec-icon"><i class="fa fa-user"></i></p>
            </div>
          </div>
        </div>
        <div class="row mt-5 mt-md-2">
          <div class="p-sm-3 col-md-5 col-sm-12 col-xs-12">
            <div class="about-img w-100 h-100">
              <img class="w-100" src="./images/aboutss.png" alt="About" />
            </div>
          </div>
          <div class="p-sm-3 col-md-7 col-sm-12 col-xs-12 mt-5 mt-md-2">
            <h2 class="section-heading">
              Where Nerds come together to provide clarity !
            </h2>
            <p class="mt-3 mt-md-2 mt-lg-4">
              We’re Affiliates. And we’re not your typical finance company. We
              believe that everyone should be able to make financial decisions
              with confidence. We’re building a team of Nerds with the
              knowledge, passion, and skills to make that happen. Values such
              as hard work, integrity, and honesty fill our team with a sense
              of pride. Everyone here is dedicated to serving our partners'
              needs. We are uncompromising in our commitments. We say what we
              mean and we mean what we say.
            </p>
            <p class="d-inline-block pe-1 ps-1">
              Thank you for visiting us today. We hope you like it here.
            </p>
            <div>
              <a class="pt-2 pb-2 pe-5 ps-5 mt-3 d-inline-block rounded-5 text-decoration-none text-bg-danger btn mb-3" href="#contact">
                Contact Us
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ABOUT SECTION ENDED -->
    <!-- COUNTER SECTION STARTS -->
    <section id="counter" class="counter-sec">
      <div class="container">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                  <div class="card-icon card-icon-large">
                    <i class="fas fa-users"></i>
                  </div>
                  <div class="mb-4">
                    <h5 class="card-title mb-0">Publishers</h5>
                  </div>
                  <div class="row align-items-center mb-2 d-flex">
                    <div class="col-8">
                      <h2 class="d-flex align-items-center mb-0">3,243</h2>
                    </div>
                    <div class="col-4 text-right">
                      <span>
                        12.5%
                        <i class="fa fa-arrow-up"></i>
                      </span>
                    </div>
                  </div>
                  <div class="progress mt-1" data-height="8" style="height: 8px;">
                    <div class="progress-bar l-bg-cyan" role="progressbar" data-width="60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                  <div class="card-icon card-icon-large">
                    <i class="fa-solid fa-star"></i>
                  </div>
                  <div class="mb-4">
                    <h5 class="card-title mb-0">Exclusive Campaigns</h5>
                  </div>
                  <div class="row align-items-center mb-2 d-flex">
                    <div class="col-8">
                      <h2 class="d-flex align-items-center mb-0">15.07k</h2>
                    </div>
                    <div class="col-4 text-right">
                      <span>
                        9.23%
                        <i class="fa fa-arrow-up"></i>
                      </span>
                    </div>
                  </div>
                  <div class="progress mt-1" data-height="8" style="height: 8px;">
                    <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                  <div class="card-icon card-icon-large">
                    <!-- <i class="fas fa-ticket-alt"></i> -->
                    <i class="fa-solid fa-calendar-days"></i>
                  </div>
                  <div class="mb-4">
                    <h5 class="card-title mb-0">Days Worked</h5>
                  </div>
                  <div class="row align-items-center mb-2 d-flex">
                    <div class="col-8">
                      <h2 class="d-flex align-items-center mb-0">578</h2>
                    </div>
                    <div class="col-4 text-right">
                      <span>
                        10%
                        <i class="fa fa-arrow-up"></i>
                      </span>
                    </div>
                  </div>
                  <div class="progress mt-1" data-height="8" style="height: 8px;">
                    <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                  <div class="card-icon card-icon-large">
                    <i class="fas fa-dollar-sign"></i>
                  </div>
                  <div class="mb-4">
                    <h5 class="card-title mb-0">Paid out to publishers</h5>
                  </div>
                  <div class="row align-items-center mb-2 d-flex">
                    <div class="col-8">
                      <h2 class="d-flex align-items-center mb-0">$11.61k</h2>
                    </div>
                    <div class="col-4 text-right">
                      <span>
                        2.5%
                        <i class="fa fa-arrow-up"></i>
                      </span>
                    </div>
                  </div>
                  <div class="progress mt-1" data-height="8" style="height: 8px;">
                    <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- COUNTER SECTION ENDED -->
    <!-- ADVERTISERS SERVICE SECTION STARTS -->
    <section id="advertisers" class="advertisers-service-sec pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="section-header text-center">
            <h2 class="fw-bold fs-1">
              Our
              <span class="b-class-secondary">Advertiser</span>
              Services
            </h2>
            <p class="sec-icon"><i class="fa-solid fa-gear"></i></p>
          </div>
        </div>
        <div class="row mt-5 mt-md-4 row-cols-1 row-cols-sm-1 row-cols-md-3 justify-content-center">
          <div class="col">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fa-solid fa-chart-line"></i>
              </div>
              <h3>Tracking Lead</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quisquam consequatur necessitatibus eaque.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fa-solid fa-arrows-down-to-people"></i>
              </div>
              <h3>Advanced Targeting solution</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quisquam consequatur necessitatibus eaque.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fa-solid fa-globe"></i>
              </div>
              <h3>Global Reach & Quality Traffic</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quisquam consequatur necessitatibus eaque.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fa-solid fa-money-check-dollar"></i>
              </div>
              <h3>Flexible pricing models</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quisquam consequatur necessitatibus eaque.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fa-regular fa-circle-check"></i>
              </div>
              <h3>Advanced optimization technologies & methodologies</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quisquam consequatur necessitatibus eaque.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fa-solid fa-people-group"></i>
              </div>
              <h3>Dedicated account management team</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quisquam consequatur necessitatibus eaque.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ADVERTISERS SERVICE SECTION ENDED -->
    <!-- BRANDS SECTION STARTS -->
    <section id="work" class="work-with pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="section-header text-center">
            <h2 class="fw-bold mb-3">
              Sample of
              <span class="work-title text-danger">Brand's</span>
              we work with
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="client">
            <div class="row">
              <div class="carousel-client row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-6 row-cols-xl-6 justify-content-center">
                <div class="slide">
                  <img src="./images/slider-logo1.png" />
                </div>
                <div class="slide">
                  <img src="./images/slider-logo2.png" />
                </div>
                <div class="slide">
                  <img src="./images/slider-logo3.png" />
                </div>
                <div class="slide">
                  <img src="./images/slider-logo1.png" />
                </div>
                <div class="slide">
                  <img src="./images/slider-logo2.png" />
                </div>
                <div class="slide">
                  <img src="./images/slider-logo3.png" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- BRANDS SECTION ENDED -->
    <!-- PUBLISHER SERVICE SECTION STARTS -->
    <section id="publishers" class="publishers-service-sec pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="section-header text-center">
            <h2 class="fw-bold fs-1">
              Our
              <span class="text-danger">Publishers</span>
              Services
            </h2>
            <p class="sec-icon"><i class="fa-solid fa-gear"></i></p>
          </div>
        </div>
        <div class="row mt-5 mt-md-4 row-cols-1 row-cols-sm-1 row-cols-md-3 justify-content-center">
          <div class="col">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fa-solid fa-hand-holding-dollar"></i>
              </div>
              <h3>Solid Payment System</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quisquam consequatur necessitatibus eaque.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fa-solid fa-user-secret"></i>
              </div>
              <h3>Private Program System</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quisquam consequatur necessitatibus eaque.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fa-solid fa-screwdriver-wrench"></i>
              </div>
              <h3>Awesome Deveoper Tools</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quisquam consequatur necessitatibus eaque.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fa-brands fa-nfc-directional"></i>
              </div>
              <h3>Supper Speed Redirect</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quisquam consequatur necessitatibus eaque.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fa-solid fa-chart-pie"></i>
              </div>
              <h3>Accurate Reports Analyzing</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quisquam consequatur necessitatibus eaque.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="service-card">
              <div class="icon-wrapper">
                <i class="fa-solid fa-headset"></i>
              </div>
              <h3>First Class Support</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quisquam consequatur necessitatibus eaque.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- PUBLISHER SERVICE SECTION ENDED -->
    <!-- TEAM CARD SECTION STARTS -->
    <section id="team" class="team-section pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="section-header text-center">
            <h2 class="fw-bold fs-1">
              Our
              <span class="text-danger">Expert</span>
              Team Members
            </h2>
            <p class="sec-icon"><i class="fa-solid fa-users"></i></p>
          </div>
        </div>
        <div class="row mt-5 mt-md-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 justify-content-center">
          <div class="col">
            <div class="card team-card">
              <div class="background-block">
                <img src="images/bgsss.jpeg" alt="profile-sample1" class="background" />
              </div>
              <div class="profile-thumb-block">
                <img src="images/userss.png" alt="profile-image" class="profile" />
              </div>
              <div class="card-content">
                <h3>
                  Chotu
                  <small>Founder & CEO</small>
                </h3>
                <div class="icon-block">
                  <a href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card team-card">
              <div class="background-block">
                <img src="images/bgsss.jpeg" alt="profile-sample1" class="background" />
              </div>
              <div class="profile-thumb-block">
                <img src="images/userss.png" alt="profile-image" class="profile" />
              </div>
              <div class="card-content">
                <h3>
                  Tawde
                  <small>Back-end Developer</small>
                </h3>
                <div class="icon-block">
                  <a href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card team-card">
              <div class="background-block">
                <img src="images/bgsss.jpeg" alt="profile-sample1" class="background" />
              </div>
              <div class="profile-thumb-block">
                <img src="images/userss.png" alt="profile-image" class="profile" />
              </div>
              <div class="card-content">
                <h3>
                  Anukesh Gupta
                  <small>Digital Marketer</small>
                </h3>
                <div class="icon-block">
                  <a href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card team-card">
              <div class="background-block">
                <img src="images/bgsss.jpeg" alt="profile-sample1" class="background" />
              </div>
              <div class="profile-thumb-block">
                <img src="images/userss.png" alt="profile-image" class="profile" />
              </div>
              <div class="card-content">
                <h3>
                  Kuch bhi
                  <small>CPA Expert</small>
                </h3>
                <div class="icon-block">
                  <a href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- TEAM CARD SECTION ENDED -->
    <!-- CONTACT SECTION STARTS -->
    <section id="contact" class="contact-section pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="section-header text-center">
            <h2 class="fw-bold fs-1">
              Contact
              <span class="b-class-secondary">Us</span>
            </h2>
            <p class="sec-icon"><i class="fa-solid fa-phone"></i></p>
          </div>
        </div>
        <div class="row mt-5 mt-md-2">
          <div class="p-sm-3 col-md-7 col-sm-12 col-xs-12">
            <h2 class="b-class-secondary mb-3">
              Send Message
              <i class="fa-regular fa-comment-dots"></i>
            </h2>
            <form action="contact.php" method="post">
              <div class="form-floating mb-3 rounded-5">
                <input type="text" class="form-control fw-bold rounded-5" id="name" placeholder="Username" name="username" required />
                <label for="name">Enter Your Name</label>
              </div>
              <div class="form-floating mb-3 rounded-5">
                <input type="email" class="form-control fw-bold rounded-5" id="email" placeholder="name@example.com" name="email" required />
                <label for="email">Email address</label>
              </div>
              <div class="form-floating message mb-3 rounded-5">
                <textarea class="form-control message fw-bold rounded-5" id="message" rows="3" placeholder="Password" name="message" required></textarea>
                <label for="message">Your message gose here...</label>
                <!-- <a
                  class="pt-2 pb-2 pe-5 ps-5 mt-3 d-inline-block rounded-2 text-decoration-none text-bg-danger btn mb-3"
                  href="conn.php" onclick="doSomething();"
                >
                  Submit
                </a> -->
                <button class="btn mt-3" type="submit" onclick="doSomething();">Submit</button>
              </div>
            </form>
          </div>
          <div class="p-sm-3 col-md-5 col-sm-12 col-xs-12 mt-5 mt-md-2">
            <div class="single-cta">
              <div class="cta-text">
                <h4 class="mb-lg-3 fw-bold mb-3 pt-2 pb-2">
                  <i class="fas fa-map-marker-alt"></i>
                  Location
                </h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.165668628713!2d80.93601417556766!3d26.92996195934883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399956ff42559d0d%3A0xfcc6d32a916da8dd!2sFaculty%20Of%20Engineering%20%26%20Technology%2C%20University%20of%20Lucknow!5e0!3m2!1sen!2sin!4v1692393540862!5m2!1sen!2sin" width="450" height="200" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
            <div class="single-cta">
              <div class="cta-text">
                <h4 class="mb-lg-3 fw-bold mb-3 pt-2 pb-2">
                  <i class="fas fa-phone"></i>
                  Call us
                </h4>
                <span class="d-block">
                  <a href="tel:+91 8303944992" class="text-decoration-none">
                    +91 8303944992
                  </a>
                </span>
                <span class="d-block">
                  <a href="tel:+91 7985014068" class="text-decoration-none">
                    +91 7985014068
                  </a>
                </span>
              </div>
            </div>
            <div class="single-cta">
              <div class="cta-text">
                <h4 class="mb-lg-3 fw-bold mb-3 pt-2 pb-2">
                  <i class="far fa-envelope-open"></i>
                  Mail us
                </h4>
                <span>
                  <a href="mailto:kanaujiyaaditi@gmail.com">
                    kanaujiyaaditi@gmail.com
                  </a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CONTACT SECTION ENDED -->
  </main>
  <!-- FOOTER SECTION STARTS -->
  <footer class="footer-section">
    <div class="container">
      <div class="footer-content pt-5 pb-5">
        <div class="row">
          <div class="col-xl-4 col-lg-4 mb-50">
            <div class="footer-widget">
              <div class="footer-logo">
                <a class="logo-link" href="index.html">
                  <img src="images/Logins.png" class="img-fluid" alt="logo" />
                </a>
              </div>
              <div class="footer-text">
                <p>
                  Lorem ipsum dolor sit amet, consec tetur adipisicing elit,
                  sed do eiusmod tempor incididuntut consec tetur adipisicing
                  elit,Lorem ipsum dolor sit amet.
                </p>
              </div>
              <div class="footer-social-icon mb-3 mb-lg-0">
                <span>Follow us on</span>
                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                <a href="#"><i class="fa-brands fa-instagram insta-bg"></i></a>
                <a href="#"> <i class="fa-brands fa-linkedin linkdin-bg"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
            <div class="footer-widget">
              <div class="footer-widget-heading">
                <h3>Some Useful Links</h3>
              </div>
              <ul class="row ps-0">
                <div class="col-5">
                  <li><a href="#">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#advertisers">Advertisers</a></li>
                  <li><a href="#publishers">Publishers</a></li>
                  <li><a href="#contact">Contact</a></li>
                </div>
                <div class="col-7">
                  <li><a href="#">Our Services</a></li>
                  <li><a href="#team">Expert Team</a></li>
                  <li><a href="#work">Brand's</a></li>
                  <li><a href="#counter">Our Progress</a></li>
                </div>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
            <div class="footer-widget">
              <div class="footer-widget-heading">
                <h3>Subscribe</h3>
              </div>
              <div class="footer-text mb-25">
                <p>
                  Don’t miss to subscribe to our new feeds, kindly fill the
                  form below.
                </p>
              </div>
              <div class="subscribe-form">
                <form action="#">
                  <input type="text" placeholder="Email Address" />
                  <!-- <button><i class="fab fa-telegram-plane"></i></button> -->
                  <button><i class="fa-solid fa-paper-plane"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-area">
      <div class="container">
        <div class="row">
          <div class="text-center text-lg-center">
            <div class="copyright-text">
              <p>
                Copyright &copy; 2023 | All Right Reserved
                <a href="#">ClickBank.com</a>
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>