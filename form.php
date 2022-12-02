

<?php ob_start(); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <script defer src="./index.js"></script>
</head>
<style>
    body {
    background: linear-gradient(to right, whitesmoke,rgba(72, 189, 197, 0.74), #48bdc5 );
    font-family: 'Poppins', sans-serif;
}

#form {
    width: 300px;
    margin: 20vh auto 0 auto;
    padding: 20px;
    background-color: whitesmoke;
    border-radius: 4px;
    font-size: 12px;
}

#form h1 {
    color: #0f2027;
    text-align: center;
}

#form button {
    padding: 10px;
    margin-top: 10px;
    width: 100%;
    color: white;
    background-color: #48bdc5;
    border: none;
    border-radius: 4px;
}

.input-control {
    display: flex;
    flex-direction: column;
}

.input-control input {
    border: 2px solid #f0f0f0;
	border-radius: 4px;
	display: block;
	font-size: 12px;
	padding: 10px;
	width: 100%;
}

.input-control input:focus {
    outline: 0;
}

.input-control.success input {
    border-color: #09c372;
}

.input-control.error input {
    border-color: #ff3860;
}

.input-control .error {
    color: #ff3860;
    font-size: 9px;
    height: 13px;
}
</style>
<body>
    <div class="container">
        <form action="" method="POST">
            <h1>REGISTRED YOU FOR MORE OPTIONS</h1>gfdgdfghfhhjjklkl
            <div class="input-control">
                <label for="username">Firstname</label>
                <input id="username" name="name" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password"name="password" type="password">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password2">Phone Nnumber</label>
                <input id="phonenumber" name="phone" type="phonenumber">
                <div class="error"></div>
            </div>
            <button type="submit" value="signup " name="signup">Sign Up</button>
        </form>
    </div>
    

<?php
// if(isset($_POST["signup"])){
    
echo "Hello";

echo "<pre>";
print_r($_POST);

  
        // $name = $_POST["name"];
        // $email = $_POST["email"];
        // $password = $_POST["password"];
        // $phone = $_POST["phone"];


        // echo $name;
    
 
    
        // include "config.php";
    
        // $query1 = "SELECT * FROM `patient` where 'NAME' = '{$name}'  ";
        // $result = mysqli_query($conn, $query1);
        
        //     if (mysqli_num_rows($result) > 0) 
        //     {
        //         echo "doctor alredy exist";
        //     }
        //     else
        //     {
              
        //      $query = "INSERT INTO `patient`( `P-NAME`, `EMAIL`, `PASSWORD`, `PHONE`) VALUES
        //       ('{$name}','{$email}','{$password}','{$phone}')";
        //         mysqli_query($conn, $query);

        //         header("location:patient.php");
        //     }
            




    ?>
    
    <script>
        const form = document.getElementById('form');
        const username = document.getElementById('username');
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const phonenumber  = document.getElementById('phonenumber');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const phoneValue = phonenumber.value.trim();

    if(usernameValue === '') {
        setError(username, 'Username is required');
    } else {
        setSuccess(username);
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }

    if(phonenumber === '') {
        setError(phonenumber, 'Please enter your phone number');
    } else if (phonenumber !== phonenumber) {
        setError(phonenumber, "phone number must be from pakistan");
    } else {
        setSuccess(phonenumber);
    }

};
</script>
</body>
</html>