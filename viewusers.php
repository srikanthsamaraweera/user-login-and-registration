<?php
include 'db/dbconnect.php';
$conn = new Dbconnect();
$sql = "select * from users";
$numrows = $conn->select($sql);
$i = 1;

echo '<table style="width: 100%; border-collapse: collapse;" border="1">
<tbody>
  <tr>
  <th></th>
     <th>Firstname</th>
     <th>Lastname</th>
     <th>id</th>
  </tr>';



while ($rows = mysqli_fetch_assoc($numrows)) {
    echo '<tr>
<td style="width: 20%;">' . $i . '</td>
<td style="width: 20%;">' . $rows['firstname'] . '</td>
<td style="width: 20%;">' . $rows['lastname'] . '</td>
<td style="width: 20%;">' . $rows['id'] . '</td>';


    $i++;
}
echo '</tr>
</tbody>
</table>';
