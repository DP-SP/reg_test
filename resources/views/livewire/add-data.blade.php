<x-slot name="header">
    Add
</x-slot>
<div>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <form name="myForm" action="#" onsave="return validateForm()">

        <div class="form-group">
            <label>Username:</label>
            <input type="text" class="form-control" id="user" name="user" placeholder="Enter username"
                autocomplete="off">
            <div id="userError"></div>
        </div>


        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass"
                autocomplete="off">
            <div id="passError"></div>
        </div>

        <div class="form-group">
            <label>confirm password:</label>
            <input type="password" class="form-control" id="conpass" placeholder="Confirm your password"
                name="conpass" autocomplete="off">
            <div id="conpassError"></div>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                autocomplete="off">
            <div id="emailError"></div>
        </div>

        <div class="form-group">
            <label>Phone:</label>
            <input type="number" class="form-control" id="phone" placeholder="Enter phone number" name="phone"
                autocomplete="off">
            <div id="phError"></div>
        </div>


        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember">
                Remember me

                <input type="save" name="save" value="SAVE" class="btn btn-success">

        </div>
    </form>
</div>

<script type="text/javascript">
    function validateForm() {



        var user = document.forms["myForm"]["user"].value;
        var pass = document.forms["myForm"]["pass"].value;
        var conpass = document.forms["myForm"]["conpass"].value;
        var email = document.forms["myForm"]["email"].value;
        var phone = document.forms["myForm"]["phone"].value;

        if (user =="") {
            document.getElementById("userError").innerHTML = "user name must be filled out";
            document.getElementById("userError").style.color = "Red";
            // alert("user name must be filled out");

        }
        if (pass =="") {
            document.getElementById("passError").innerHTML = "password must be filled out";
            document.getElementById("passError").style.color = "Red";
            //alert("pass must be filled out");

        }
        if (conpass == "") {
            document.getElementById("conpassError").innerHTML = "conpassword must be filled out";
            document.getElementById("conpassError").style.color = "Red";
            // alert("confirm your email ");

        }
        if (email == "") {
            document.getElementById("emailError").innerHTML = "email field must be filled out";
            document.getElementById("emailError").style.color = "Red";

            // alert("email must be filled out");

        }

        if (phone == "") {
            document.getElementById("phError").innerHTML = "phone number must be filled out";
            document.getElementById("phError").style.color = "Red";
            //alert("phone must be filled out");

        }
        return false;
    };
</script>
</form>
</div>
