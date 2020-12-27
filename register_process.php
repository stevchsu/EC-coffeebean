<?php include("mysqlCon.php"); ?>
<?php
	$useraccount = "123";
	$name="123";  //先宣告random值
	$email ="123";
	$password = "123";
	$phone = 123;
	$identity = 0;
	$shop_phone = 123;
	$shop_name = "123";
	$shop_address = "123";
	$shop_about ="123";
	if(isset($_POST["username"])){ #確認值有進在賦值
		$name = $_POST["username"]; 
	};
	// if(isset($_POST["useraccount"])){ #確認值有進在賦值
	// 	$account = $_POST["useraccount"]; 
	// };
	if(isset($_POST["useremail"])){
		$email = $_POST["useremail"]; 
	};
	if(isset($_POST["userpassword"])){
		$password = $_POST["userpassword"]; 
	};
	if(isset($_POST["userphone"])){
		$phone = $_POST["userphone"]; 
	};
	if(isset($_POST["identity"])){
		$identity = $_POST["identity"]; 
	};
	echo $name;
	echo $email;
	echo $password;
	echo $phone;
	echo $identity;
	echo '<br>';
	
	$selectSql = "SELECT * FROM user WHERE UID = '$email'";
	$memberData = $conn->query($selectSql);
	//有資料筆數大於0時才執行
	if ($memberData->num_rows > 0) {
		echo "<script>
				alert('Email已經被使用過瞜');
				window.location.href = 'register.html';
			  </script>";
		// header("Location: register.html");
	}else{
		if($identity ==1){  //確認是店家 接受店家傳值資訊 將店家資訊輸入資料庫
			if(isset($_POST["shopname"])){
				$shop_name = $_POST["shopname"]; 
			};
			if(isset($_POST["shopaddress"])){
				$shop_address = $_POST["shopaddress"]; 
			};
			if(isset($_POST["shopphone"])){
				$shop_phone = $_POST["shopphone"]; 
			};
			if(isset($_POST["about"])){
				$shop_about = $_POST["about"]; 
			};
			$shopSql = "SELECT * FROM market WHERE M_NAME = '$shop_name'"; //
			$shopData = $conn->query($shopSql); 
			if ($shopData->num_rows > 0) { //店家名稱被使用過跳轉回去
				echo "<script>
						alert('此店家名稱已經被使用過了喔');
						window.location.href = 'register_shop.php';
					  </script>";
			}
			//若確認沒使用過 則進行插入步驟
			//先進行 會員的插入
			$sql = "INSERT INTO user (UID, PASSWORD, U_NAME,U_EMAIL,U_PHONE,U_IDENTITY,SUB_FLAG) VALUES ('$email','$password','$name','$email','$phone',$identity,1)";
			$mid = $email . "_mk"; //先進行$mid的宣告 利用uid加上_mk的方式做宣告
			$insertShop_sql = "INSERT INTO market (MID,M_NAME,M_PHONE,M_ADDRESS,M_INFO,UID) VALUES ('$mid','$shop_name','$shop_phone','$shop_address','shop_about','$email')";
			if ($conn->query($sql) === TRUE) {     
				if($conn->query($insertShop_sql) === TRUE){
	    			echo "新紀錄插入成功";
	    			session_start();
				    $_SESSION['id'] = $email;
				    $_SESSION['username'] = $name;
				    $_SESSION['password'] = $password;
				    $_SESSION['shopid'] = $mid;
				    $_SESSION['identity'] = $identity;
			    	header("Location: index.php");  //跳轉回主頁面
		    	}
    		}
    	}
    	else{
    		$sql = "INSERT INTO user (UID, PASSWORD, U_NAME,U_EMAIL,U_PHONE,U_IDENTITY,SUB_FLAG) VALUES ('$email','$password','$name','$email','$phone',$identity,1)";
    		if ($conn->query($sql) === TRUE) {  
    			echo "新紀錄插入成功";
    			session_start();
			    $_SESSION['id'] = $email;
			    $_SESSION['username'] = $name;
			    $_SESSION['password'] = $password;
			    $_SESSION['identity'] = $identity;
			    header("Location: index.php");  //跳轉回主頁面
			}
    	}
	}
	// $sql = "INSERT INTO user (UID, PASSWORD, U_NAME,U_EMAIL,U_PHONE,U_IDENTITY,SUB_FLAG) VALUES ('$email','$password','$name','$email','$phone',$identity,1)";
	// echo $sql;  
	// if ($conn->query($sql) === TRUE) {
 //    	echo "新紀錄插入成功";
 //    	//成功插入之後進行第二步
 //    	if($identity ==1){  //確認是店家 接受店家傳值資訊 將店家資訊輸入資料庫
	// 		if(isset($_POST["shopname"])){
	// 			$shop_name = $_POST["shopname"]; 
	// 		};
	// 		if(isset($_POST["shopaddress"])){
	// 			$shop_address = $_POST["shopaddress"]; 
	// 		};
	// 		if(isset($_POST["shopphone"])){
	// 			$shop_phone = $_POST["shopphone"]; 
	// 		};
	// 		if(isset($_POST["about"])){
	// 			$shop_about = $_POST["about"]; 
	// 		};
	// 		$shopSql = "SELECT * FROM market WHERE M_NAME = '$shop_name'"; //
	// 		$shopData = $conn->query($shopSql); 
	// 		if ($shopData->num_rows > 0) { //店家名稱被使用過跳轉回去
	// 			echo "<script>
	// 					alert('此店家名稱已經被使用過了喔');
	// 					window.location.href = 'register_shop.php';
	// 				  </script>";
	// 		}
	// 		//若確認沒使用過 則進行插入步驟
	// 		$mid = $email . "_mk"; //先進行$mid的宣告 利用uid加上_mk的方式做宣告

	// 		$insertShop_sql = "INSERT INTO market (MID,M_NAME,M_PHONE,M_ADDRESS,M_INFO,UID) VALUES ('$mid','$shop_name','$shop_phone','$shop_address','shop_about','$email')";
	// 		if ($conn->query($sql) === TRUE) {
 //    			echo "新紀錄插入成功";
 //    			session_start();
	// 		    $_SESSION['id'] = $email;
	// 		    $_SESSION['username'] = $name;
	// 		    $_SESSION['password'] = $password;
	// 		    $_SESSION['shopid'] = $mid;
	// 		    $_SESSION['identity'] = $identity;
	// 	    	header("Location: index.php");  //跳轉回主頁面
 //    		}
	// 	}else{  //非店家則結束步驟直接跳轉回去
	//     	session_start();
	// 	    $_SESSION['id'] = $email;
	// 	    $_SESSION['username'] = $name;
	// 	    $_SESSION['password'] = $password;
	// 	    $_SESSION['identity'] = $identity;
	//     	header("Location: index.php");  //跳轉回主頁面
	//     }
	// } else {
 //   		echo "Error: " . $sql . "<br>" . $conn->error;
	// }




?>