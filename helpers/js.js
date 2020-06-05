



function validateLogin() {
    clearRequiredFields();
    var required = document.getElementsByClassName("required");
    var useremail = document.getElementById("useremail").value;
    var userpass = document.getElementById("userpassword").value;
    var result = true;
    if (useremail==null || useremail == "") {
        required[0].innerHTML = "This field cannot be empty.";
        result = false;
    } else if (!validateEmail(useremail)) {
        required[0].innerHTML = "Invalid Email Format.";
        result = false;
    }
    if (userpass==null || userpass == "") {
        required[1].innerHTML = "This field cannot be empty.";
        result = false;
    }
    return result;
}

function validateChangePass() {
    clearRequiredFields();
    var required = document.getElementsByClassName("required");
    var old_password = document.getElementById("resetpasswordold").value;
    var new_password = document.getElementById("resetpasswordnew").value;
    var confirm_new_password = document.getElementById("resetpasswordconfirm").value;
    var result = true;
    if (old_password==null || old_password == "") {
        required[4].innerHTML = "This field cannot be empty.";
        result = false;
    }
    if (new_password==null || new_password == "") {
        required[5].innerHTML = "This field cannot be empty.";
        result = false;
    }
    if (confirm_new_password==null || confirm_new_password == "") {
        required[6].innerHTML = "This field cannot be empty.";
        result = false;
    }
    if (new_password != "" && confirm_new_password != "" && new_password != confirm_new_password) {
        required[5].innerHTML = "Passwords doesn't match.";
        required[6].innerHTML = "Passwords doesn't match.";
        result = false;
    }
    return result;
}

function validateRegister() {
    clearRequiredFields();
    var required = document.getElementsByClassName("required");
    var userfirstname = document.getElementById("regfname").value;
    var userlastname = document.getElementById("reglname").value;
    var username = document.getElementById("regusername").value;
    var userpass = document.getElementById("regpassword").value;
    var userpassconfirm = document.getElementById("regpasswordconfirm").value;
    var useremail = document.getElementById("regemail").value;
    var result = true;
    
    if (userfirstname==null || userfirstname == "") {
        required[0].innerHTML = "This field cannot be empty.";
        result = false;
    }
    if (userlastname==null || userlastname == "") {
        required[1].innerHTML = "This field cannot be empty.";
        result = false;
    }
    if (username==null || username == "" ) {
        required[2].innerHTML = "This field cannot be empty.";
        result = false;
    }
    if (userpass==null || userpass == "") {
        required[4].innerHTML = "This field cannot be empty.";
        result = false;
    }
    if (userpassconfirm==null || userpassconfirm == "") {
        required[5].innerHTML = "This field cannot be empty.";
        result = false;
    }
    if (userpass != "" && userpassconfirm != "" && userpass != userpassconfirm) {
        required[4].innerHTML = "Passwords doesn't match.";
        required[5].innerHTML = "Passwords doesn't match.";
        result = false;
    }
    if (useremail==null || useremail == "") {
        required[3].innerHTML = "This field cannot be empty.";
        result = false;
    } else if (!validateEmail(useremail)) {
        required[3].innerHTML = "Invalid Email Format.";
        result = false;
    }
    return result;
}

function clearRequiredFields() {
    var required = document.getElementsByClassName("required");
    for (i = 0; i < required.length; i++) {
        required[i].innerHTML = "";
    }
}

function validateEmail(email) {
    var emailformat = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\"[^\s@]+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!email.match(emailformat))
        return false;
    return true;
}

/* Email Format
 -----------------> Start <-------------------------------
Matching the beginning of a regular expression --->      /^
 -------------------> Local Part <---------------------------
Doesn't Start with a Special Character --->      [^<>()[\]\\.,;:\s@\"]+
Start with any Character Else --->   (\.[^<>()[\]\\.,;:\s@\"]+)*
Or Anything between Quotes ---->     |(\"\S+\")
 -------------------> Domain <---------------------------
IP Address May be surrounded by squared brackets ---->   (\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])
Or Words and Hyphen included(provided it's not the first or last character) Followed by at least 1 dot then a word (Can be Repeated) Followed by the last word, it must contain 3 characters at most ([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,})
 -------------------> End <---------------------------
Matching the end of a regular expression ---> $/
*/

/* ---------------------------> RegExp Reference <-------------------------------
// All regular expressions start and end with forward slashes.
^ Matches the beginning of the string or line
$ Matches the end of the string or line
* Matches the previous character 0 or more times.
? Matches the previous character 0 or 1 time.
+ Matches the previous character 1 or more times.
\ Indicates that the next character is special and not to be interpreted literally.
[] Indicates range of characters
[^] Any character Not in between brackets.
\s whitespace character
n{x,y} Matches a string that contains a sequence of x to y n's
n{x,} Matches a string that contains a sequence of at least x n's
. Any single character
*/