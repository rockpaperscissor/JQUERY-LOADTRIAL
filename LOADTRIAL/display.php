<?php
include 'connection.php';
$sql = "SELECT * FROM thistable";
$data = mysqli_query($con, $sql);

if ($data === FALSE) {
    die("Error in SQL query: " . mysqli_error($con));
}
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Phone</th>
            <th>email</th>
            <th>username</th>
            <th>password</th>
        </tr>

    <?php
    while($row = mysqli_fetch_assoc($data)){
    ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['password'];?></td>
        </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>