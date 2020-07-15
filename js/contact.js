function validateContact() {
    var name = document.forms["contactForm"]["name"].value;
    var nameValidate = /^[a-zA-Z]{2,}$/;
    if (!name.match(nameValidate)){
          alert("Please write a valid name.");
          return false;
    }

    var email = document.forms["contactForm"]["email"].value;
    var emailValidate = /^.+@.+..+$/;
    if (!email.match(emailValidate)) {
      alert("E-mail must be filled out.");
      return false;
    }

    var option=document.getElementsByName('gender');
    if (!(option[0].checked || option[1].checked || option[2].checked)) {
    alert("Please select your gender");
    return false;
    }

    var puna = document.forms["contactForm"]["placeofwork"];
    if (puna[0].checked == false && puna[1].checked == false && puna[2].checked == false) {
    alert("Please select your place of work.");
    return false;
    }

    if (document.getElementById("entertext").value == ""){
      alert("Please write some text.");
      return false;
    }

    return true;
  }