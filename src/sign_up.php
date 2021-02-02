<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
        <link rel="stylesheet" href="../assets/css/sign_up.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <form id="register" name="register_form" method="POST" >
            <div class="box">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p><hr>

                <label for="username"><b>User Name:</b></label>
                <input type="text" placeholder="Enter User Name" name="name" id="name" required>

                <label for="email"><b>Email:</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required>

                <label for="mobile"><b>Mobile:</b></label>
                <input type="text" placeholder="Enter Mobile No.." name="mobile" id="mobile" required>

                <label for="psw"><b>Password:</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="password" required>

                <label for="psw-repeat"><b>Repeat Password:</b></label>
                <input type="password" placeholder="Repeat Password" name="confirm_password" id="confirm_password" required>
               

                
                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" name="submit" id="submit">Sign Up</button>
                </div>
            </div>
        </form>
        <script>
    const register_form = document.querySelector("#register");
    
    register_form.addEventListener("submit", async (e) => {
        e.preventDefault();
        console.log("submit called");
        const email =document.querySelector('#email').value;
        const name =document.querySelector('#name').value;
        const confirm_password =document.querySelector('#confirm_password').value;
        const mobile =document.querySelector('#mobile').value;
        const password = document.querySelector('#password').value;
            

            const formData = new FormData();
            formData.append('email', email)
            formData.append('password', password)
            formData.append('confirm_password', confirm_password)
            formData.append('mobile', mobile)
            formData.append('name', name)
        

        const response = await fetch("./auth/register.php", {
            method: "POST",
            body: formData
        });

        if (await response.status == 201) {
            console.log(await response.json());
             window.location.href = "http://localhost/website/src/login.php";
        } else {
            const data = await response.json();
            var alert = document.querySelector('.alert');
            for (const [key, value] of Object.entries(data)) {
                if (value !== "") {
                    alert.innerHTML = value;
                    alert.classList.remove('hide')
                    alert.classList.add('show')
                }
            }


        }
    });
        </script>
    </body>
</html>