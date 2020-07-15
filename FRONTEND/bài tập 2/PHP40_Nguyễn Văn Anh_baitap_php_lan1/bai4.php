<meta charset="utf-8">
<?php 
	$name ="";
	$so_cu ="";
	$so_moi ="";
	$don_gia ="";
	$thanh_toan ="";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{	
		$name = $_POST["ten"];
		$so_cu = $_POST["so_cu"];
		$so_moi = $_POST["so_moi"];
		$don_gia = $_POST["don_gia"];
		$thanh_toan = ($so_moi - $so_cu)*$don_gia;
	}
 ?>
<div style="width: 450px; height: 300px; margin: auto;background-color: #ffebca;font-family: arial; ">
	<div style="width: 450px;height: 50px; display: flex;justify-content: center; align-items: center; font-size: 15px; background-color: #fdcc68; color: #8a4206; font-weight: bold;">
		THANH TOÁN TIỀN ĐIỆN
	</div>
	 <form method="post" action="" style="margin-left: 28px; margin-top: 20px; ">
 		<table cellpadding="5">
			<tr>
				<td>Tên chủ hộ</td><td><input type="text" value="<?php echo "$name" ?>" requiet name="ten"></td>
			</tr>
			<tr>
				<td>Chi số cũ</td><td><input type="number" value="<?php echo "$so_cu" ?>" name="so_cu"></td><td>(KW)</td>
			</tr>
			<tr>
				<td>Chi số mới</td><td><input type="number" value="<?php echo "$so_moi" ?>" name="so_moi"></td><td>(KW)</td>
			</tr>
			<tr>
				<td>Đơn giá</td><td><input type="number" value="<?php   echo "$don_gia" ?>" name="don_gia"></td><td>(vnd)</td>
			</tr>
			<tr>
				<td>Số tiền thanh toán</td><td><input type="text" value="<?php echo "$thanh_toan" ?>" disabled name=""></td><td>(vnd)</td>
			</tr>
			<tr>
				<td></td><td><button value="submit">Tính</button></td>
			</tr>
 		</table> 		
 	</form>
</div>
