<?php
    include 'header.php';
    include 'db_config.php';

    $query = "insert into users values(NULL,'farooq hauqe','farooq12','3456')";
    execute($query);

    $query = "Select * from users";
    $result = mysqli_query($conn,$query);
    echo "<table bprder='1'>";
        echo "<tr>
            <th>Td</th><th>Name</th><th>USername</th>
            </tr>";
    foreach($result as $row)
    {
        echo "</tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["username"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
?>