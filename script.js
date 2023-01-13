let form11 = document.querySelector('#form1');
let error = document.querySelector('#errorMessage');


form11.addEventListener('submit', function (e) {
    let userName = document.querySelector('#user').value;
    let passWord = document.querySelector('#pass').value;

    if (userName == "" && passWord == "") {
        error.innerHTML = "Username and Passwoed Is Required"
        e.preventDefault();

    } else if (userName == "") {
        error.innerHTML = 'Username is required'
        e.preventDefault();
    } else if (passWord == "") {
        error.innerHTML = 'Password is required'
        e.preventDefault();
    }
    else {
        error.innerHTML = "Username Genrated";
    }
});

