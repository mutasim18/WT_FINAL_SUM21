<html>
    <body>
    <?php include('dashboard.php')?>
    <fieldset>
        <p>All Catagory</p><hr>
<center>
            <table class="content-table" border="2" width=65%;>
                <thead>
                    <tr>
                        <td align="center"> ID </td>
                        <td align="center"> product Name </td>
                        <td align="center"> Price </td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include '../dbcon.php';

                        $selectquery = "select * from catagory";
                        $query = mysqli_query($con,$selectquery);
                        $nums = mysqli_num_rows($query);

                        while($res = mysqli_fetch_array($query))
                        {
                            ?>
                            <tr>
                                <td><?php echo $res['id'] ?></td>
                                <td><?php echo $res['productname'] ?></td>
                                <td><?php echo $res['price'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>


            </center>



    </fieldset>
    </body>
</html>