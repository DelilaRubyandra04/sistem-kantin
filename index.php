<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_menu ORDER BY id DESC");
?>

 
<html>
<head>    
    <link rel="stylesheet" href="style.css">
    <title>Homepage</title>
    
    
</head>
 
<body>
<a href="add.php">Tambah Pesanan</a><br/><br/>
 
    <table align='center' width='80%' border=1>
 
    <tr>
        <th>nama</th> <th>jenis</th> <th>harga</th> <th>update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jenis']."</td>";    
        echo "<td>".$user_data['harga']."</td>";      
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>