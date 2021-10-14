<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Registration form</h2>
    <form action="#" id="register-form" method="post">
        <label for="">Username</label>
        <input type="text" name="username" placeholder="Username" id="username">
        <label for="">Password</label>
        <input type="password" name="password" placeholder="password" id="password">
        <select name="position" id="position">

            <option value="HR Manager">HR Manager</option>
            <option value="Employee">Employee</option>
            <option value="Leave Manager">Leave Manager</option>
            <option value="Recruitment Manager">Recruitment Manager</option>
        </select>


        <input type="submit" value="Register" id="register">


    </form>


    <h2>Login form</h2>
    <form action="./assets/login.php" id="login-form" method="post">
        <label for="">Username</label>
        <input type="text" name="l-username" placeholder="Username" id="l-username">
        <label for="">Password</label>
        <input type="password" name="l-password" placeholder="password" id="l-password">



        <input type="submit" value="Login" id="login" name="login">


    </form>



    <button>Click me</button>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer">

    </script>
    <script>
        $(document).ready(function() {
            //Ajax request
            //register form validation
            $("#register").click(function(e) {
                if ($("#register-form")[0].checkValidity()) {
                    e.preventDefault();
                    $("#register").val("Please Wait.....");
                    //Ajax request
                    $.ajax({
                        url: "assets/action.php",
                        method: "post",
                        //grab data from form
                        data: $("#register-form").serialize() + "&action=register",
                        success: function(response) {
                            // console.log(response);
                            $("#register").val("Register");
                        }

                    })
                }
            })
            // login ajax request
            // $("#login").click(function(e) {
            //     if ($("#login-form")[0].checkValidity()) {
            //         e.preventDefault();
            //         $("#login").val("Please Wait.....");
            //Ajax request
            // $.ajax({
            //     url: "assets/action.php",
            //     method: "post",
            //     //grab data from form
            //     data: $("#login-form").serialize() + "&action=login",
            //     success: function(response) {
            //         // console.log(response);
            //         // window.location = response;
            //         $("#login").val("login");
            //     }

            // })
            //     }

            // })


        });
    </script>

</body>

</html>