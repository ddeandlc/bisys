<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bisys_index.css">
    <link rel="stylesheet" href="bisys_navbar.css">
    <title>LOGIN | BI-Sys</title>
    <link rel="shortcut icon" type="image/png" href="bisys_assets/bisys_icon.png"/>
</head>
<body>
    <div align="center">
        <img src="bisys_assets/bisys_logo.png">
        <div class="container">
            <form action="server_bisyslogin_response.php" method="post">
                <br>
                <div align="center">
                    <table>
                        <tr>
                            <td class="fontsize">
                                <label>E-mail</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="text" type="email" name="acc_email">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td class="fontsize">
                                <label>Password</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="text" type="password" name="acc_pass">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input class="loginbttn" type="submit" value="LOGIN" name="log_submit">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <a class="text" href="">Forgot Password?</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
            <br>
        </div>
    </div>
</body>
</html>