<?php
if (isset($_POST['submit'])) {
    echo 'Changes saved successfully!!!';
} else {
?>
<html>
    <head>
        <title>Sign Up</title>
        <style>
            body{
                background-color: black;
                color: white;
            }
            .container {
                width: 1080px;
                padding: 20px;
                margin: auto;
            }
            table {
                width: 50%;
                border: solid 1px #ccc;
                margin: 0;
            }
            table tr th {
                text-align: right;
                width: 50%;
                border: solid 1px #ccc;
                padding: 5px;
                margin: 0;
            }
            table tr td {
                border: solid 1px #ccc;
                margin: 0;
                padding: 5px;
            }
            .align-center {
                text-align: center;
            }
            .required {
                color: red;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <form action="index.php" method="post" name="signUp" id="signUp">
            <table cellspacing="0">
                <tr>
                    <th>First Name <span class="required">*</span></th>
                    <td><input type="text" name="firstName" id="firstName" value=""> </td>
                </tr>
                <tr>
                    <th>Last Name <span class="required">*</span></th>
                    <td><input type="text" name="lastName" id="lastName" value=""> </td>
                </tr>
                <tr>
                    <th>Email <span class="required">*</span></th>
                    <td><input type="text" name="email" id="email" value=""> </td>
                </tr>
                <tr>
                    <th>Username <span class="required">*</span></th>
                    <td><input type="text" name="username" id="username" value=""> </td>
                </tr>
                <tr>
                    <th>Password <span class="required">*</span></th>
                    <td><input type="password" name="password" id="password" value=""> </td>
                </tr>
                <tr>
                    <td colspan="2" class="align-center">
                        <input type="submit" name="submit" id="submit" value="Submit">&nbsp;
                        <input type="reset" name="reset" id="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </body>
</html>
<?php
}
?>