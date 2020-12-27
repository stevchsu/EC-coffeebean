<?php include("mysqlCon.php"); ?>
<?php
	session_start();
	$id = $_SESSION['id'];
	$selectSql = "SELECT * FROM user WHERE UID = '$id'";
	$memberData = $conn->query($selectSql);
	//有資料筆數大於0時才執行
	if ($memberData->num_rows > 0) {
		while ($row = $memberData->fetch_assoc()) {
			print_r($row); //print出資料
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Coffee Mood</title>
	<link rel="icon" href="img/Logo4.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<button>修改密碼</button>