<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Cabecera de myapp</title>
</head>
<body>

<h1>Cabecera realizada por Francisco Jesus Lara López </h1>
<?php
$query = $this->db->query("SELECT * FROM user");
if ($query->num_rows() > 0)
{
foreach ($query->result() as $row)
{
echo $row->id . " ";
echo $row->name . " ";
echo $row->password . " ";
echo "<br/>";

}
}
?>
</body>
</html>
