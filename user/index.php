<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";
$dbtable = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
		
		$sql = "INSERT INTO products (name, price, description) VALUES ('".$_POST['Name']."','".$_POST['Price']."','".$_POST['About']."')";

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
        $dbtable .= "<tr class='table-info'><td>" . $row["id"]. "</td><td class='text-center'>" . $row["name"]."</td><td class='text-center'>" . $row["price"]." EUR"."</td><td class='text-center'>".$row["description"]. "</td><td class='text-center'><a class='btn btn-sm btn-danger' href='?delete=".$row['id']."'>delete</a></td></tr>";
    $sum[] = $row["price"]; 
    }
} else {
    echo "0 results";
}
	


mysqli_close($conn);

include"view.php";
?>
<script>var kaina = <?php echo json_encode($sum);?>;</script>
<script src="js/msqli.js"></script>