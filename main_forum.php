<html>

<head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">


</head>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="forum";
$tbl_name="fquestions";


mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name ORDER BY id DESC";


$result=mysql_query($sql);
?>

<table class="table" >
<thead  >
<tr class="bg-info">
  <th> #</th>
  <th> Topic</th>
  <th>        Views</th>
  <th> Replies</th>
  <th> Time</th>

</tr>

</thead>
<?php


while($rows = mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>

<?php

}
mysql_close();
?>

<tr class="bg-info" >
<td colspan="5" align="right"  ><a href="new_topic.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table>
</html>
