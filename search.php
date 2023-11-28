<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM myguests";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM myguests WHERE firstname ='$name'";
}
$result = $con->query($sql);
?>

<html>
<head>
<title>Basic Search form using mysqli</title>
<form action="" method="GET">
<input type="text" placeholder="Type the name here" name="search">&nbsp;
<input type="submit" value="Search" name="btn">
</form>
<h2>List of students</h2>
<table border=1>
<tr>
<th>ID</th>
<th>First name</th>
<th>Lastname</th>
<th>Email</th>
<th>Registration Date</th>
</tr>
<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['firstname']; ?></td>
    <td><?php echo $row['lastname']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['reg_date']; ?></td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>