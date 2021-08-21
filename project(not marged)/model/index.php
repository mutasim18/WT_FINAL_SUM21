<?php
include 'db_config.php';

    // $query="insert into user values(NULL,'farooq12','3456','test@gmail.com','01711533706','dhaka')";
    $query = "select * from users";
    $result =get($query);
    echo "<table border='1'>";
    echo "<tr>
            <th>Id</th><th>Username</th>Password<th>email</th><th>phone</th><th>address</th>
        </tr>";
    foreach($result as $row)
    {
        echo"<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["username"]."</td>";
            echo "<td>".$row["pass"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["phone"]."</td>";
            echo "<td>".$row["address"]."</td>";
        echo"</tr>";
    }
    echo"</table>";

?>