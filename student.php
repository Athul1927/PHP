<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>hello world</title>
</head>
<body>
<?php
$studentname=array("anandhu","joel","arjun","athul");
$studentmark=array("98","98","98","98");
echo"<br>Displaying names in table format<br/>";
echo"<br>=================================<br/>";
echo"<br>Names of students are stored in an array:<br/>";
print_r($student);
echo"<br>Names of students are stored in a table:<br/>";
echo"<br><table border=2>";
echo"<tr><th>student names</th>";
echo"<td>$studentname[0]</td>";
echo"<td>$studentname[1]</td>";
echo"<td>$studentname[2]</td>";
echo"<td>$studentname[3]</td>";
echo"<tr><th>student mark</th>";
echo"<td>$studentmark[0]</td>";
echo"<td>$studentmark[1]</td>";
echo"<td>$studentmark[2]</td>";
echo"<td>$studentmark[3]</td>";
echo"</tr></table>";
?>
</body>
</html>