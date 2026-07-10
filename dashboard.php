<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard - Event Registration Portal</title>

<link rel="stylesheet" href="style.css">

<style>
table{
    width:90%;
    margin:30px auto;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid black;
}

th{
    background:#007BFF;
    color:white;
    padding:10px;
}

td{
    padding:10px;
    text-align:center;
}

h2{
    text-align:center;
}
</style>

</head>

<body>

<header>
<h1>Event Registration Portal</h1>

<nav>
<a href="index.html">Home</a>
<a href="about.html">About</a>
<a href="events.html">Events</a>
<a href="gallery.html">Gallery</a>
<a href="register.html">Register</a>
<a href="contact.html">Contact</a>
<a href="dashboard.php">Dashboard</a>
<a href="login.html">Logout</a>
</nav>

</header>

<h2>Registered Students</h2>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Department</th>
<th>Event</th>
<th>Date</th>
</tr>

<?php

$sql="SELECT * FROM registrations";
$result=$conn->query($sql);

if($result->num_rows>0){

while($row=$result->fetch_assoc()){

echo "<tr>";

echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['phone']."</td>";
echo "<td>".$row['department']."</td>";
echo "<td>".$row['event_name']."</td>";
echo "<td>".$row['created_at']."</td>";

echo "</tr>";

}

}else{

echo "<tr><td colspan='7'>No Registrations Found</td></tr>";

}

$conn->close();

?>

</table>

</body>
</html>