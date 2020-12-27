<?php
	session_start();

	// if($_SESSION['username'] == null){
	// 	echo ("<script type='text/javascript'>alert('您尚未登入，請先登入。');location.href = 'login.html';</script>");
	// }

	//$id = $_SESSION['username'];

	$mid = "123";

	header('Content-Type: text/html; charset=utf-8');
	include("mysqlCon.php");
	
	
	$bean_sql = "SELECT *
			FROM `product_beans` 
			WHERE MID = '$mid'
			ORDER BY P_NAME_BN";
	$bean_result = mysqli_query($conn, $bean_sql);
	$bean_resultCheck = mysqli_query($conn, $bean_sql);
	if(is_null(mysqli_fetch_row($bean_resultCheck))){
		$bean = 0;
	}else{
		while ($row = mysqli_fetch_row($bean_result)) {
			$bean[] = $row;
		}
	}

	$bag_sql = "SELECT *
			FROM `product_dripbag` 
			WHERE MID = '$mid'
			ORDER BY P_NAME_DB";
	$bag_result = mysqli_query($conn, $bag_sql);
	$bag_resultCheck = mysqli_query($conn, $bag_sql);
	if(is_null(mysqli_fetch_row($bag_resultCheck))){
		$dripbag = 0;
	}else{
		while ($row = mysqli_fetch_row($bag_result)) {
			$dripbag[] = $row;
		}
	}
	
?>


<!DOCTYPE html>
<html lang="zh-Hant-TW ">
<head>
	<title>商家管理</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">
</head>
<body style="font-family: 'Noto Sans TC', sans-serif;">

	<table border="1" id="bean_table">
		<tr>
			<td colspan="5"><h3>賣場商品--咖啡豆</h3></td>
		</tr>
		<tr>
			<td>商品編號</td>
			<td>商品名稱</td>
			<td>產地</td>
			<td>價錢</td>
			<td>存量</td>
		</tr>

<?php
	if($bean == 0){
		echo "<tr class='grey'><td colspan='5'>賣場內尚無咖啡豆。</td></tr>";
	}else{
		for($i=0;$i<count($bean);$i++){
?>		
		<tr>
			<td><?php echo "{$bean[$i][0]}"; ?></td>
			<td><?php echo "{$bean[$i][1]}"; ?></td>
			<td><?php echo "{$bean[$i][2]}"; ?></td>
			<td><?php echo "{$bean[$i][11]}"; ?>/包</td>
			<td><?php echo "{$bean[$i][12]}"; ?></td>
		</tr>
<?php
		}
	}	
?>
	</table>

	<table border="1" id="bag_table">
		<tr>
			<td colspan="4"><h3>賣場商品--咖啡濾掛包</h3></td>
		</tr>
		<tr>
			<td>商品編號</td>
			<td>商品名稱</td>
			<td>價錢</td>
			<td>存量</td>
		</tr>

<?php
	if($dripbag == 0){
		echo "<tr class='grey'><td colspan='4'>賣場內尚無咖啡濾掛包。</td></tr>";
	}else{
		for($i=0;$i<count($dripbag);$i++){
?>		
		<tr>
			<td><?php echo "{$dripbag[$i][0]}"; ?></td>
			<td><?php echo "{$dripbag[$i][1]}"; ?></td>
			<td><?php echo "{$dripbag[$i][5]}"; ?>/盒</td>
			<td><?php echo "{$dripbag[$i][6]}"; ?></td>
		</tr>
<?php
		}
	}	
?>
	</table>

	<table border="1" id="order_table">
		<tr>
			<td colspan="4"><h3>訂單管理</h3></td>
		</tr>
		<tr>
			<td>訂單編號</td>
			<td>購買人姓名</td>
			<td>訂購日期時間</td>
			<td>付款與否</td>
			<td>運送方式</td>
		</tr>

<?php
	if($order == 0){
		echo "<tr class='grey'><td colspan='5'>賣場內尚無訂單。</td></tr>";
	}else{
		for($i=0;$i<count($order);$i++){
?>		
		<tr>
			<td><?php echo "{$order[$i][0]}"; ?></td>
			<td><?php echo "{$order[$i][5]}"; ?></td>
			<td><?php echo "{$order[$i][8] $order[$i][9]}"; ?></td>
			<td><?php echo "{$order[$i][10]}"; ?></td>
			<td><?php echo "{$order[$i][12]}"; ?></td>
		</tr>
<?php
		}
	}	
?>
	</table>


</body>
</html>