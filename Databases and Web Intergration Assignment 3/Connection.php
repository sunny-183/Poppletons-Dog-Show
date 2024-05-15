<html>
<head>
    <title>Connection Test</title>
    <link rel="stylesheet" type="text/css" href="style/styles.css" />
</head>
<body>
<?php
// Login details
$servername = "localhost"; // MySQL服务器地址
$username = "root"; // MySQL用户名
$password = "123456"; // MySQL密码
$dbname = "cis2360_dog_show"; // 数据库名称

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "<u><strong><h2>Connection successful!</h2></strong></u>";
} 
?>
</body>
</html>
