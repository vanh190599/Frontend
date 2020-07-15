<meta charset="utf-8">
<?php 
	$content = "";
	$color = "";
	$bg ="";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$content = $_POST["content"];
		$color   = $_POST["color"];
		$bg   = $_POST["bg"];
	}
 ?>

 <div style="width: 350px; height: 230px; margin: auto;background-color: #ffebca">
	<div style="width: 350px;height: 50px; display: flex;justify-content: center; align-items: center; font-family: arial; font-size: 15px; background-color: #dc4c05; color: white; font-weight: bold;">
		DỊNH MÀU CHỮ MÀU NỀN
	</div>
	 <form method="post" action="" style="margin-left: 30px; margin-top: 20px; ">
 		<table cellpadding="5">
			<tr>
				<td>Nội dung:</td><td><input type="text" value="<?php echo $content ?>" required name="content"></td>
			</tr>
			<tr>
				<td>Màu nền:</td><td><input type="text" value="<?php echo $bg ?>" required name="bg"></td>
			</tr>
			<tr>
				<td>Màu chữ:</td><td><input type="text" value="<?php echo $color ?>" required name="color"></td>
			</tr>
			<tr>
				<td></td><td><button style="background-color: #fa9a6c" type="submit">Xem kết quả</button></td>
			</tr>
			<tr>
				<td></td>
			</tr>
 		</table> 		
 	</form>
 	<!-- Kêt quả -->
	<fieldset style="border: 1px solid #dddddd; width: 320px; height: 100px;">
		<legend>Kết quả</legend>
		<div style="color: <?php echo "$color"?> ; background-color: <?php echo "$bg"?>; margin-top: 15px; ; text-align: center;"> <?php echo $content ?> </div>
	</fieldset>
</div>
