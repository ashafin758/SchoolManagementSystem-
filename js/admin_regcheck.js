//"use strict";

function validating() {

    //console.log("validating");
    let name = document.getElementById("Aname").value;
    if (name == "") {
        document.getElementById('msg1').innerHTML = "**name can not be empty";
        return false;
    } else {
        if (name.split(" ").length < 2) {
            document.getElementById('msg1').innerHTML = "*name must contain at least 2 words";
            return false;
        }
    }
    let designation = document.getElementById('designation').value;
    if (designation == "") {
        document.getElementById('msg2').innerHTML = "*designation field cannot be empty";
        return false;
    }
    let email = document.getElementById('email').value;
    if (email == "") {
        document.getElementById('msg3').innerHTML = "*email field cannot be empty";
        return false;
    }
    let bloodGroup = document.getElementById('bd').value;
    if (bloodGroup == "") {
        document.getElementById('msg4').innerHTML = "*bloodGroup field cannot be empty";
        return false;
    }
    let phone = document.getElementById('phone').value;
    if (phone == "") {
        document.getElementById('msg5').innerHTML = "*phone field cannot be empty";
        return false;
    } else {
        if (phone.length != 11) {
            document.getElementById('msg5').innerHTML = "*length must be 11 characters";
            return false;
        }
    }
    let address = document.getElementById('address').value;
    if (address == "") {
        document.getElementById('msg6').innerHTML = "**address cannot be empty";
        return false;
    }
    let password = document.getElementById('pass').value;
    if (password == "") {
        document.getElementById('msg7').innerHTML = "**password cannot be empty";
        return false;
    }

    if (password.length < 6) {
        document.getElementById('msg7').innerHTML = "**password must be at least 6 letters";
        return false;
    }
    let Cpassword = document.getElementById('cPass').value;
    if (Cpassword == "") {
        document.getElementById('msg8').innerHTML = "**confirm password cannot be empty";
        return false;
    } else {
        if (password != Cpassword) {
            document.getElementById('msg7').innerHTML = "*please check your password and confirm password";
            document.getElementById('msg8').innerHTML = "*please check your password and confirm password";
            return false;
        }
    }
    let gender = document.getElementById('gender');
    if (gender.checked == false) {
        document.getElementById('msg9').innerHTML = "*gender field cannot be empty";
        return false;
    }
    let dob = document.getElementById('dob').value;
    let year = dob.split("-")
    if (dob == "") {
        document.getElementById('msg10').innerHTML = "**Date of Birth cannot be empty";
        return false;
    } else {
        if (year[0] > 2000) {
            document.getElementById('msg10').innerHTML = "**year must be more than 2000";
        }
    }
    let profilePic = document.getElementById('profilePic').value;
    if (profilePic == "") {
        document.getElementById('msg11').innerHTML = "**Profile Picture cannot be empty";
        return false;
    }
    let qualification = document.getElementById('qualification').value;
    if (qualification == "") {
        document.getElementById('msg12').innerHTML = "**qualification cannot be empty";
        return false;
    }
}