<?php
$connection = mysqli_connect("localhost", "root", "", "ajax");
$select = "SELECT * FROM add_data";
$result = mysqli_query($connection, $select);
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td><?php echo $row['Name'] ?></td>
    <td><?php echo $row['Rollno'] ?></td>
    <td><?php echo $row['Email'] ?></td>
    <td><?php echo $row['Gender'] ?></td>
</tr>
<?php
        }
    }
}