function checkPassword(){
    let name=document.getElementById("name").value;
    let email=document.getElementById("email").value;
    let number=document.getElementById("number").value;
    let password=document.getElementById("password").value;
    let repassword=document.getElementById("repassword").value;
    let message=document.getElementById("message");


    if (name.length !=0){
        if (email.length !=0) {
            if (number.length !=0) {
                    if (password.length !=0) {
                        if (password.length>=6) {
                            if (password==repassword) {
                                message.textContent="well";
                                message.style.backgroundColor="green"
                            }
                            else{
                                message.textContent="password dismatch";
                                message.style.backgroundColor="red";}
                            
                        }
                        else{
                            message.textContent="password char should be more than 5";
                            message.style.backgroundColor="red";}

                    }
                    else{
                        message.textContent="password should not be empty";
                        message.style.backgroundColor="red";}

            }
            else{
                message.textContent="enter your number";
                message.style.backgroundColor="red";}
        }
        else{message.textContent="enter your email";
            message.style.backgroundColor="red";}
    }
    else{
        message.textContent="enter your name";
        message.style.backgroundColor="red";
    }
}

