function popUp() {
    var click = addEventListener("click",function() {
        this.document.querySelector(".popUp").style.display = "flex";
    })
}

function exitPopUp() {
    var exit = addEventListener("click",function() {
        this.document.querySelector(".popUp").style.display = "none";
    })
}

document.addEventListener('DOMContentLoaded', function() {
    localStorage.setItem("useremail",null);//setting the user email to null to make sure the login page appears and the previous useremail is removed
    document.getElementById('myform').addEventListener('submit', function(event) {
        var email = document.getElementById('em').value;
        var password = document.getElementById('pass').value;

        var emailFormat = /^[a-zA-Z0-9]+@[a-z]+\.[a-zA-z]{2,}$/;
        var passwordCheck=/^(?=.*[a-z])(?=.*[A-z])[a-zA-Z\d@$!%*?&]{8,20}$/;
        var emailError = document.getElementById('emailError');
        var passwordError = document.getElementById('passwordError');

            
        var hasError = false;
    
        if(email !== '') {
            if (!emailFormat.test(email)) {
                emailError.innerText='Please Enter a valid email.';
                // alert('invalid email input');
                hasError = true;
            }
            else{
                emailError.innerText=''
            }
        }else{
            emailError.innerText='Email cannot be empty.';
            hasError = true;
        }
        if(password!==''){
            if (!passwordCheck.test(password)){
                passwordError.innerText='Please Enter a valid password'
                // alert('invalid password input');
                hasError = true;
            }
            else{
                passwordError.innerText='';
            }
        }else{
            passwordError.innerText='Password cannot be empty';
            hasError = true;
        }
            
        // Prevent form submission if there are validation errors
        if (hasError) {
            event.preventDefault();
        }
    });
});