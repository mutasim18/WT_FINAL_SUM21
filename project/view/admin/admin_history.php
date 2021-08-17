<?php
 include('admin_dashboard.php');
include($_SERVER['DOCUMENT_ROOT']."/WT_FINAL_SUM21/project/model/db_config.php");

    //$query="insert into user values(NULL,'farooq12','3456','test@gmail.com','01711533706','dhaka')";
    $query = "select * from users";
    $result =get($query);
    echo "<table border='1'>";
    echo "<tr>
            <td>Id</td><td>Uname</td><td>Pass</td><td>email</td><td>phone</td><td>address</td>
        </tr>";
    foreach($result as $row)
    {
        echo"<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["uname"]."</td>";
            echo "<td>".$row["pass"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["phone"]."</td>";
            echo "<td>".$row["address"]."</td>";
        echo"</tr>";
    }
    echo"</table>";
?>    

