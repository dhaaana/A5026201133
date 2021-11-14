<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Praktikum 2 - Registration Form</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- My Style -->
    <style>
      body {
        background-color: #80ed99;
        margin: 20px;
      }
      .user-input {
        margin-bottom: 10px;
      }
      .validation {
        color: red;
        display: none;
        font-size: small;
      }
    </style>
  </head>
  <body>
    <div class="container d-flex justify-content-center align-self-center">
      <div class="card shadow mb-3" style="width: 600px">
        <div class="row g-0">
          <div class="col-md-4 d-flex justify-content-center" style="background-color: #f7f7f7"><h4 class="p-4">Registration Form</h4></div>
          <div class="col-md-8">
            <div class="card-body">
              <form class="me-3" name="myform" action="" onsubmit="return cobaValidation();" novalidate>
                <div class="user-input">
                  <label for="user-name" class="col-form-label">Name:</label>
                  <input type="text" class="form-control" name="user-name" id="user-name" pattern="[a-zA-Z]+[a-zA-Z ]+" required />
                  <p class="validation" id="name-error"></p>
                </div>
                <div class="user-input">
                  <label for="user-address" class="col-form-label">Address:</label>
                  <input type="text" class="form-control" name="user-address" id="user-address" required />
                  <p class="validation" id="address-error"></p>
                </div>
                <div class="user-input">
                  <label for="user-email" class="col-form-label">Email Address:</label>
                  <input type="email" class="form-control" name="user-email" id="user-email" required />
                  <p class="validation" id="email-error"></p>
                </div>
                <div class="user-input">
                  <label for="user-pass" class="col-form-label">Password:</label>
                  <input type="password" class="form-control" name="user-pass" id="user-pass" pattern="[ A-Za-z0-9_@./#&+-]{8,16}" required />
                  <p class="validation" id="pass-error"></p>
                </div>
                <div class="user-input">
                  <label for="user-telephone" class="col-form-label">Telephone:</label>
                  <input type="text" class="form-control" name="user-telephone" id="user-telephone" pattern="[0-9]{7,}" required />
                  <p class="validation" id="telephone-error"></p>
                </div>
                <div class="user-input">
                  <label for="user-course" class="col-form-label">Select Your Course:</label>
                  <select class="form-select" aria-label="Default select example" name="user-course" id="user-course">
                    <option value="0" selected></option>
                    <option value="1">BTech</option>
                    <option value="2">BBA</option>
                    <option value="3">BCA</option>
                    <option value="3">B.COM</option>
                    <option value="3">GEEKFORGEEKS</option>
                  </select>
                  <p class="validation" id="course-error"></p>
                </div>
                <div class="user-input">
                  <label for="user-zip" class="col-form-label">Zip Code:</label>
                  <input type="text" class="form-control" name="user-zip" id="user-zip" pattern="[0-9]{6}" required />
                  <p class="validation" id="zipcode-error"></p>
                </div>
                <div class="row d-flex justify-content-center mt-2">
                  <button type="button" class="col btn btn-danger m-3" onclick="resetForms()">Reset</button>
                  <button type="submit" class="col btn btn-primary m-3">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      const myForm = document.forms["myform"];
      const userName = document.getElementById("user-name");
      const userAddress = document.getElementById("user-address");
      const userEmail = document.getElementById("user-email");
      const userPassword = document.getElementById("user-pass");
      const userTelephone = document.getElementById("user-telephone");
      const userCourse = document.getElementById("user-course");
      const userZipCode = document.getElementById("user-zip");
      function cobaValidation() {
        if (!myForm.checkValidity()) {
          // Name Validation
          if (userName.validity.valid == false) {
            if (userName.validity.valueMissing) {
              $("#name-error").text("*Required");
              $("#name-error").show(300);
              $("#user-name").css({ "border-color": "red" });
            } else if (userName.validity.patternMismatch) {
              $("#name-error").text("Number are not allowed");
              $("#name-error").show(300);
              $("#user-name").css({ "border-color": "red" });
            }
          }
          if (userName.validity.valid == true) {
            $("#name-error").hide(300);
            $("#user-name").css({ "border-color": "#CED4DA" });
          }
          // Address Validation
          if (userAddress.validity.valid == false) {
            if (userAddress.validity.valueMissing) {
              $("#address-error").text("*Required");
              $("#address-error ").show(300);
              $("#user-address").css({ "border-color": "red" });
            }
          }
          if (userAddress.validity.valid == true) {
            $("#address-error ").hide(300);
            $("#user-address").css({ "border-color": "#CED4DA" });
          }
          // Email Validation
          if (userEmail.validity.valid == false) {
            if (userEmail.validity.valueMissing) {
              $("#email-error").text("*Required");
              $("#email-error ").show(300);
              $("#user-email").css({ "border-color": "red" });
            } else if (userEmail.validity.typeMismatch) {
              $("#email-error").text("Email must contain character '@'");
              $("#email-error ").show(300);
              $("#user-email").css({ "border-color": "red" });
            }
          }
          if (userEmail.validity.valid == true) {
            $("#email-error ").hide(300);
            $("#user-email").css({ "border-color": "#CED4DA" });
          }
          // Password Validation
          if (userPassword.validity.valid == false) {
            if (userPassword.validity.valueMissing) {
              $("#pass-error").text("*Required");
              $("#pass-error ").show(300);
              $("#user-pass").css({ "border-color": "red" });
            } else if (userPassword.validity.patternMismatch) {
              $("#pass-error").text("Password must contain 8-16 characters");
              $("#pass-error ").show(300);
              $("#user-pass").css({ "border-color": "red" });
            }
          }
          if (userPassword.validity.valid == true) {
            $("#pass-error ").hide(300);
            $("#user-pass").css({ "border-color": "#CED4DA" });
          }
          // Telephone Validation
          if (userTelephone.validity.valid == false) {
            if (userTelephone.validity.valueMissing) {
              $("#telephone-error").text("*Required");
              $("#telephone-error ").show(300);
              $("#user-telephone").css({ "border-color": "red" });
            } else if (userTelephone.validity.patternMismatch) {
              $("#telephone-error").text("Telephone number must contain atleast 7 numbers");
              $("#telephone-error ").show(300);
              $("#user-telephone").css({ "border-color": "red" });
            }
          }
          if (userTelephone.validity.valid == true) {
            $("#telephone-error ").hide(300);
            $("#user-telephone").css({ "border-color": "#CED4DA" });
          }
          // Course Validation
          if (userCourse.value == 0) {
            $("#course-error").text("*Required");
            $("#course-error ").show(300);
            $("#user-course").css({ "border-color": "red" });
          } else {
            $("#course-error ").hide(300);
            $("#user-course").css({ "border-color": "#CED4DA" });
          }
          // Zip Code Validation
          if (userZipCode.validity.valid == false) {
            if (userZipCode.validity.valueMissing) {
              $("#zipcode-error").text("*Required");
              $("#zipcode-error").show(300);
              $("#user-zip").css({ "border-color": "red" });
            } else if (userZipCode.validity.patternMismatch) {
              $("#zipcode-error").text("Zip code must contain only 6 numbers");
              $("#zipcode-error").show(300);
              $("#user-zip").css({ "border-color": "red" });
            }
          }
          if (userZipCode.validity.valid == true) {
            $("#zipcode-error").hide(300);
            $("#user-zip").css({ "border-color": "#CED4DA" });
          }

          return false;
        } else {
          return true;
        }
      }
      function resetForms() {
        userName.value = "";
        userAddress.value = "";
        userEmail.value = "";
        userPassword.value = "";
        userTelephone.value = "";
        userCourse.value = "";
        userZipCode.value = "";
        $(".validation").hide(300);
        $(".form-control").css({ "border-color": "#CED4DA" });
        $(".form-select").css({ "border-color": "#CED4DA" });
      }
    </script>
  </body>
</html>
