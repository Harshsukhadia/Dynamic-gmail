

// Document is ready
$(document).ready(function () {
  // Validate Username
  $("#usercheck").hide();
  $("#usercheckc").hide();
  let usernameError = true;
  $("#usernames").keyup(function () {
    validateUsername();
  });
  $("#cname").keyup(function () {
    validatecname();
  });
  
  function validateUsername() {
    let usernameValue = $("#usernames").val();
    if (usernameValue.length == "") {
    $("#usercheckc").show();
    usernameError = false;
    return false;
    }  else {
    $("#usercheckc").hide();
    }
  }


  function validatecname() {
    let usernameValue = $("#cname").val();
    if (usernameValue.length == "") {
    $("#usercheck").show();
    usernameError = false;
    return false;
    }  else {
    $("#usercheck").hide();
    }
  }






  
  // Validate Email
  const email = document.getElementById("email");
  email.addEventListener("blur", () => {
    let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    let s = email.value;
    if (regex.test(s)) {
    email.classList.remove("is-invalid");
    emailError = true;
    } else {
    email.classList.add("is-invalid");
    emailError = false;
    }
  });
  
  
  // Submit button
  $("#submitbtn").click(function () {
    validateUsername();
    validateEmail();
    if (
    usernameError == true &&
    passwordError == true &&
    confirmPasswordError == true &&
    emailError == true
    ) {
    return true;
    } else {
    return false;
    }
  });
  });
  