<?php 
$con=new mysqli('localhost','root','','chec');
$query="select * from log;";
$result=$con->query($query);
?>
<html>
    <body>
        <table align="center" border="1px solid">
            <tr><th>S.NO</th>
            <th>Name</th>
            <th>Education</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Password</th></tr>
            <?php 
            while($row=$result->fetch_assoc())
            {
            ?>
                <tr><td><?php echo $row['id']; ?></td>
                <td><?php echo $row['t1']; ?></td>
                <td><?php echo $row['t2']; ?></td>
                <td><?php echo $row['t3']; ?></td>
                <td><?php echo $row['t4']; ?></td>
                <td><?php echo $row['t5']; ?></td>
            </tr>
            <?php
            }
            $con->close();
            ?>
        </table>
    </body>
</html>
