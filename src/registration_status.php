<html>
    <head>
        <title>Registration Status</title>
    </head>
    <body>
        <div id="registration_status_output"></div>
        <button onclick="return_to_homepage()">OK</button>
    </body>
    <script>
        const status = "<?php include "php_functions/register.php"; echo register(); ?>";
        const output = document.getElementById("registration_status_output");
        if (status == "ERR_DUPLICATE_CURRENT_NETID") {
            output.innerHTML = "Error: This NetID is currently in use by an active student. Please check your input and try again.";
        }
        else if (status == "SUCCESS") {
            output.innerHTML = "Successfully registered!";
        }

        function return_to_homepage() {
            window.location.href = "index.php";
        }
    </script>
</html>