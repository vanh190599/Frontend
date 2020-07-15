<meta charset="utf-8">
<?php 
	$r ="";
	$S ="";
	$C ="";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$r = $_POST["r"];
		$S = 3.14* $r*$r;
		$C = 3.14* $r*2;
	}
 ?>
<div style="width: 350px; height: 250px; margin: auto;background-color: #ffebca">
	<div style="width: 350px;height: 50px; display: flex;justify-content: center; align-items: center; font-family: arial; font-size: 15px; background-color: #fdcc68; color: #8a4206; font-weight: bold;">
		DIỆN TÍCH VÀ CHU VI HÌNH TRÒN
	</div>
	 <form method="post" action="" style="margin-left: 30px; margin-top: 20px; ">
 		<table cellpadding="5">
 			<tr>
 				<td>Bán kính</td><td><input type="number" value="<?php echo "$r" ?>" required name="r"></td>
 			</tr> 			
 			<tr>
 				<td>Diện tích</td><td><input type="text" disabled value="<?php echo "$S" ?>" ></td>
 			</tr> 			
 			<tr>
 				<td>Bán kính </td><td><input type="text" disabled value="<?php echo "$C" ?>" ></td>
 			</tr>
<!--  		<tr>
 				<td></td><td><input type="submit" value="Thực hiện" name=""></td>
 			</tr>  -->			
 			<tr>
 				<td></td><td><button  type="submit">Tính</button></td>
 			</tr>
 		</table> 		
 	</form>
</div>
