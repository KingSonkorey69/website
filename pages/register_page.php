<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .show {
            display: block;
        }

        .hide {
            display: none;
        }
    </style>
</head>

<body>
    <div class="alert alert-danger hide" role="alert">

    </div>
    <h1>Register</h1>
    <form method="post" id="register">
        <input type="text" name="name" id="name">
        <input type="email" name="email" id="email">
        <input type="text" name="mobile" id="mobile">
        <input type="password" name="password" id="password">
        <input type="password" name="confirm_password" id="confirm_password">
        <input type="submit" value="submit">
    </form>

    <h1>Login</h1>
    <form method="post" id="login">
        <input type="email" name="email" id="email">
        <input type="password" name="password" id="password">
        <input type="submit" value="submit">
    </form>
</body>
<script>
    const register_form = document.querySelector('#register');
    const login_form = document.querySelector('#login');

    register_form.addEventListener('submit', async (e) => {
        e.preventDefault();
        console.log("submit called");
        const formData = new FormData(register_form);

        const response = await fetch("../src/auth/register.php", {
            method: "POST",
            body: formData
        });

        if (await response.status == 201) {
            console.log(await response.json());
            // window.location.href()
        } else {
            const data = await response.json();
            var alert = document.querySelector('.alert')
            for (const [key, value] of Object.entries(data)) {
                if (value !== "") {
                    alert.innerHTML = value;
                    alert.classList.remove('hide')
                    alert.classList.add('show')
                }
            }


        }
    })
    //
    //this is the login form side....
    login_form.addEventListener('submit', async (e) => {
        //
        //this will prevent it from submitting the form
        e.preventDefault();
        //
        //
        const formData = new FormData(login_form);

        const response = await fetch("../src/auth/login.php", {
            method: "POST",
            body: formData
        });
        // wait for the response
        if (await response.status == 201) {
            console.log(await response.json());
        } else {
            const data = await response.json();

        }
    })
    
</script>

</html>