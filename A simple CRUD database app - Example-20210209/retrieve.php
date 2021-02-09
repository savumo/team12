<?php
include 'db.php'; 
$sql = "select * from studentsinfo";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
    while($row = $result ->fetch_assoc()){
        echo "id:" . $row["id"] . "First Name:". $row["fname"]."Last Name:". $row["lname"] 
        
        ."City:". $row["city"]. "Group ID:". $row["groupid"]
        ."<br>";
    }
}
// You can type different sql queries based on your needs
// The output as of now does not look good. Your task is to format it properly with HTML tables. 
else 
{
    echo "no results";
}
 
$conn->close();
?>

