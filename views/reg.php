<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Signup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="../views/style.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>Create an Account</h2>
            </div>
            <p id='h1'></p>

            <form class="form" id="form" method="POST" action="../views/login.php" onsubmit="validateAndSubmit()">
                <div class="form-control">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your full name"/>
                    <!-- <i class="fa-solid fa-circle-check"></i>
                    <i class="fa-solid fa-exclamation"></i>
                    <small id ="error1">Message Error</small> -->
                </div><br>

                <div class="form-control">
                    <label for="">Username</label>
                    <input type="text" name="user_name" id="username" placeholder="Enter your username"/>
                    <!-- <i class="fa-solid fa-circle-check"></i>
                    <i class="fa-solid fa-exclamation"></i>
                    <small id ="error2">Message Error</small> -->
                </div><br>
                
                <div class="form-control">
                    <label for="">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email"/>
                    <!-- <i class="fa-solid fa-circle-check"></i>
                    <i class="fa-solid fa-exclamation"></i>
                    <small id ="error3" >Message Error</small> -->
                </div><br>
                <div class="form-control">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password"/>
                    <!-- <i class="fa-solid fa-circle-check"></i>
                    <i class="fa-solid fa-exclamation"></i>
                    <small id ="error4">Message Error</small> -->
                </div><br>

                <div class="form-control">
                    <label for="">Confirm Password</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Enter your confirm password"/>
                    <!-- <i class="fa-solid fa-circle-check"></i>
                    <i class="fa-solid fa-exclamation"></i>
                    <small id ="error5">Message Error</small> -->
                </div><br>
                
                <div class="form-control">
                    <label for="">Phone Number</label>
                    <input type="number" name="phoneNumber" id="phoneNumber" placeholder="Enter your phone number"/>
                    <!-- <i class="fa-solid fa-circle-check"></i>
                    <i class="fa-solid fa-exclamation"></i>
                    <small id ="error6">Message Error</small> -->
                </div><br>

                <input type="submit" id="submit" name="submit"  class="btn"/>
            </form>
            
        </div>

        <script>

            function validateAndSubmit()
            {
                const name = document.getElementById("name").value;
                const username = document.getElementById("username").value;
                const email = document.getElementById("email").value;
                const password = document.getElementById("password").value;
                const confirmPassword = document.getElementById("confirmPassword").value;
                const phoneNumber = document.getElementById("phoneNumber").value;  

                    
                    let http = new XMLHttpRequest();
                    let userData = { 'name': name, 'username': username, 'email': email, 'password': password,
                        'confirmPassword':confirmPassword, 'phoneNumber':phoneNumber };
                    let json = JSON.stringify(userData);
                    
                    http.open('POST', '../controllers/regCheckUser.php', true);
                    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    http.send('data=' + json);
                    http.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            alert(this.responseText);
                            window.location = '../views/login.php';
                            
                        }
                    }
            }
           


            

           

            
        </script>
    </body>
</html>