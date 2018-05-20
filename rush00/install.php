<?php
$servername = "localhost";
$username = "root";
$password = "111111";


$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
}

$sql = "CREATE DATABASE us_db";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_select_db($conn, "us_db") or die("Cannot select DB");


$products = "CREATE TABLE products (
	  id BIGINT NOT NULL AUTO_INCREMENT,
  		name TEXT NOT NULL,
  		img_path TEXT NOT NULL,
  		price DECIMAL NOT NULL,
  		category TEXT NOT NULL,
  		PRIMARY KEY (id)
)";

if (mysqli_query($conn, $products)){  
 echo "<br />Table products created successfully";  
} else {  
	echo "<br />Could not create table: ".mysqli_error($conn);  
}  

if (mysqli_query($conn, "INSERT INTO products (id,name,img_path,price,category) 
	VALUES (NULL,'Bear','https://cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/r/a/ralph-lauren-plush-teddy-bear-toy-21cm-213906-772d73b209b5281a4cdc5f2653572aacd81adfb5.jpg',25,'FAsBoy toys'),
	(NULL,'Nebear','https://cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/r/a/ralph-lauren-plush-teddy-bear-toy-21cm-213906-772d73b209b5281a4cdc5f2653572aacd81adfb5.jpg',11,'Ne Boy toysFAs'),
	(NULL,'Nebear','https://cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/r/a/ralph-lauren-plush-teddy-bear-toy-21cm-213906-772d73b209b5281a4cdc5f2653572aacd81adfb5.jpg',11,'FAs') ,(NULL,'Nebear','https://cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/r/a/ralph-lauren-plush-teddy-bear-toy-21cm-213906-772d73b209b5281a4cdc5f2653572aacd81adfb5.jpg',11,'FAs'), (NULL,'Nebear','https://cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/r/a/ralph-lauren-plush-teddy-bear-toy-21cm-213906-772d73b209b5281a4cdc5f2653572aacd81adfb5.jpg',11,'FAs'), (NULL,'Nebear','https://cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/r/a/ralph-lauren-plush-teddy-bear-toy-21cm-213906-772d73b209b5281a4cdc5f2653572aacd81adfb5.jpg',11,'FAs'), (NULL,'Nebear','https://cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/r/a/ralph-lauren-plush-teddy-bear-toy-21cm-213906-772d73b209b5281a4cdc5f2653572aacd81adfb5.jpg',11,'FAs'), (NULL,'Nebear','https://cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/r/a/ralph-lauren-plush-teddy-bear-toy-21cm-213906-772d73b209b5281a4cdc5f2653572aacd81adfb5.jpg',11,'FAs'), (NULL,'Nebear','https://cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/r/a/ralph-lauren-plush-teddy-bear-toy-21cm-213906-772d73b209b5281a4cdc5f2653572aacd81adfb5.jpg',11,'FAs'), (NULL,'Nebear','https://cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/r/a/ralph-lauren-plush-teddy-bear-toy-21cm-213906-772d73b209b5281a4cdc5f2653572aacd81adfb5.jpg',11,'FAs'), (NULL,'Nebear','https://cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/r/a/ralph-lauren-plush-teddy-bear-toy-21cm-213906-772d73b209b5281a4cdc5f2653572aacd81adfb5.jpg',11,'FAs')")) {
	echo "<br />Table successfully inserted";  
} else {  
	echo "<br />Could not insert: ".mysqli_error($conn); 
}

mysqli_close($conn);
?>
