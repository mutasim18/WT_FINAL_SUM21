<?php
    session_start();
?>
<html>
    <head>
    <title>Dashboard</title>
    </head>
    <body>
        <table align="right" border="1" >
            <tr>
                <td colspan="5" style="width: 100%;"></td>
                <td align="right" style="width: 10px;"><a href="admin_dashboard.php">Home</a></td>
                <td align="right" style="width: 10px;"><a href="../index.php">LogOut</a></td>
            </tr>
        </table>
        <fieldset>
        <center> <h1>Welcome! <?php echo $_SESSION['fullname']; ?> Have a nice day.</h1></center>
        </fieldset>
        <fieldset>
            <b>DashBoeard:</b>
            <table border="1">
                <tr>
                    <td><a href="change_password.php">Change Password</a></td>
                    <td><a href="manage_customer.php">Manage Customer</a></td>
                    <td><a href="all_catagory.php">all catagory</a></td>
                    <td><a href="add_catagory.php">add catagory</a></td>
                    <td><a href="edit_catagory.php">Edit catagory</a></td>
                    
                </tr>
            </table>
        </fieldset>
    </body>
</html>