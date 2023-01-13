let form22 = document.querySelector('#form2');
let error2 = document.querySelector('#errorMessage2');


form22.addEventListener('submit', function (e) {
    let userName2 = document.querySelector('#user2').value;
    let passWord2 = document.querySelector('#pass2').value;

    if (userName2 == "" && passWord2 == "") {
        error2.innerHTML = "Username and Passwoed Is Required"
        e.preventDefault();

    } else if (userName2 == "") {
        error2.innerHTML = 'Username is required'
        e.preventDefault();
    } else if (passWord2 == "") {
        error2.innerHTML = 'Password is required'
        e.preventDefault();
    }
    else {
        error2.innerHTML = "Username Genrated";
    }
});

