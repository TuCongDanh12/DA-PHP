

<?php

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

$response = array(
    'message' => 'Received data:',
    'data' => $data
);

echo json_encode($response);
?>




<?php
/* $servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB_farm";

// Tạo kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối thất bại: " . $conn->connect_error);
}

echo "Kết nối thành công";

// Thực hiện truy vấn và in kết quả
$sql = "SELECT * FROM history";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Duyệt qua các bản ghi và in ra màn hình
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 kết quả";
}

$conn->close(); 

*/
?>