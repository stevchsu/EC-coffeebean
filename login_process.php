<?php include("mysqlCon.php"); ?>
<?php
	$email ="123";
	$password = "123";
	if(isset($_POST["useremail"])){
		$email = $_POST["useremail"]; 
	};
	if(isset($_POST["userpassword"])){
		$password = $_POST["userpassword"]; 
	};
	echo $email;
	echo $password;

	$selectSql = "SELECT * FROM user WHERE UID = '$email' AND PASSWORD = '$password'";
	//呼叫query方法(SQL語法)
	$memberData = $conn->query($selectSql);
	//有資料筆數大於0時才執行

	if ($memberData->num_rows > 0) {
	//讀取剛才取回的資料
	    while ($row = $memberData->fetch_assoc()) {
	        print_r($row);
	        session_start();
		    $_SESSION['id'] = $row['UID'];
		    $_SESSION['username'] = $row['U_NAME'];
		    $_SESSION['password'] = $user['PASSWORD'];
		    header("Location: index.php"); 

	    }
	} else {
	    echo "<script>
				alert('帳號或密碼錯誤');
				window.location.href = 'login.html';
			  </script>";
	}

	//做Session的處理 已保持登入狀態
?>