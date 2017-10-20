<?php
session_start();
    if (isset($_GET['logout'])) {
        session_destroy();
        $_SESSION['user'] = null;
    }
if (isset($_SESSION['user'])) {
	//$vardas = $_SESSION['user']['username'];




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";
$dbtable = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

 /* check input submit */

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
		
     if ($_FILES["image"]) {
                move_uploaded_file($_FILES['image']['tmp_name'], "uploads/". $_FILES['image']['name']);
                 } 
             

		$sql = "INSERT INTO products (name, price, description, color, weight, madeIn, url) VALUES ('".$_POST['Name']."','".$_POST['Price']."','".$_POST['About']."','".$_POST['Color']."','".$_POST['Weight']."','".$_POST['MadeIn']."','".$_FILES['image']['name']."')";

		mysqli_query($conn, $sql);
	}
	if (isset($_GET['delete'])) {
		$sql = "DELETE FROM products WHERE id= ".$_GET['delete'];
		mysqli_query($conn, $sql);
	}

   

$sql = "SELECT * FROM products order by id asc";
$result = mysqli_query($conn, $sql);
	
	
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $dbtable .= "<tr class='table-dark'><td>" . $row["id"]. "</td>
        <td class='text-center'>" . $row["name"]."</td>
        <td class='text-center'>" . $row["price"]." EUR"."</td>
        <td class='text-center'>".$row["description"]. "</td>
        <td class='text-center'>".$row["color"]. "</td>
        <td class='text-center'>".$row["weight"]. "</td>
        <td class='text-center'>".$row["madeIn"]. "</td>
        <td class='text-center' ><img height='40px' src='uploads/".$row["url"]. "'></td>
        <td class='text-center'><a class='btn btn-sm btn-danger' href='?delete=".$row['id']."'>delete</a></td></tr>";
    $sum[] = $row["price"]; 
    }

    
} else {
    echo "0 results";
}
	


mysqli_close($conn);

include"view.php";

} else {
	header('Location: login.php');
}

?>
<script>var kaina = <?php echo json_encode($sum);?>;</script>
<script src="../js/msqli.js"></script>