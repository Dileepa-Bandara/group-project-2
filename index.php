<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Employee Registration form</h2>
    <form action="#" id="register-employee" method="post">
        <label for="">Username</label>
        <input type="text" name="username" placeholder="Username" id="username">
        <label for="">Password</label>
        <input type="password" name="password" placeholder="password" id="password">
        <select name="position" id="position">

            <option value="hr-manager">HR Manager</option>
            <option value="employee">Employee</option>
            <option value="leave-manager">Leave Manager</option>
            <option value="recruitment-manager">Recruitment Manager</option>
            <option value="payroll-manager">Payroll-Manager</option>
            <option value="admin">Admin</option>

        </select>


        <input type="submit" value="RegisterEmployee" id="registerEmployee">


    </form>

    <h2>Manager Registration form</h2>
    <form action="#" id="register-manager" method="post">
        <label for="">Username</label>
        <input type="text" name="username" placeholder="Username" id="username">
        <label for="">Password</label>
        <input type="password" name="password" placeholder="password" id="password">
        <select name="position" id="position">

            <option value="hr-manager">HR Manager</option>
            <option value="employee">Employee</option>
            <option value="leave-manager">Leave Manager</option>
            <option value="recruitment-manager">Recruitment Manager</option>
            <option value="payroll-manager">Payroll-Manager</option>
            <option value="admin">Admin</option>

        </select>


        <input type="submit" value="RegisterManager" id="registerManager">


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
            $("#registerEmployee").click(function(e) {
                if ($("#register-employee")[0].checkValidity()) {
                    e.preventDefault();
                    $("#registerEmployee").val("Please Wait.....");
                    //Ajax request
                    $.ajax({
                        url: "assets/action.php",
                        method: "post",
                        //grab data from form
                        data: $("#register-employee").serialize() + "&action=registerEmployee",
                        success: function(response) {
                            // console.log(response);
                            $("#registerEmployee").val("Register");
                        }

                    })
                }


            })
            $("#registerManager").click(function(e) {
                if ($("#register-manager")[0].checkValidity()) {
                    e.preventDefault();
                    $("#registerManager").val("Please Wait.....");
                    //Ajax request
                    $.ajax({
                        url: "assets/action.php",
                        method: "post",
                        //grab data from form
                        data: $("#register-manager").serialize() + "&action=registerManager",
                        success: function(response) {
                            // console.log(response);
                            $("#registerManager").val("Register");
                        }

                    })
                }


            })



        });
    </script>

</body>

</html>