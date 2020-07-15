<meta charset="utf-8">
<?php 
	$cd ="";
	$cr ="";
	$S  = "";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$cd = $_POST["cd"];
		$cr = $_POST["cr"];
		$S  = $cd*$cr;
	}
 ?>
<div style="width: 350px; height: 250px; margin: auto;background-color: #ffebca">
	<div style="width: 350px;height: 50px; display: flex;justify-content: center; align-items: center; font-family: arial; font-size: 15px; background-color: #fdcc68; color: #8a4206; font-weight: bold;">
		DIỆN TÍCH VÀ CHU VI HÌNH TRÒN
	</div>
 	<form method="post" action="" style="margin-left: 30px; margin-top: 20px; ">
	  	<table cellpadding="5">
	 		<tr>
	 			<td>chiều dài</td><td><input type="number" required value="<?php echo $cd ?>" required name="cd"></td>
	 		</tr>
	 		<tr>
	 			<td>chiều rộng</td><td><input type="number" required value="<?php echo $cr ?>" required name="cr"></td> 			
	 		</tr>
	 		<tr>
	 			<td>Diện tích</td> <td><input type="text" value="<?php echo $S ?>" disabled></td>
	 		</tr>
	 		<tr>
	 			<!-- <td></td><td><input type="submit" value="Tính" name=""></td> -->
	 			<td></td><td><button type="submit">Tính</button></td>
	 		</tr>
	 	</table>		
 	</form>
</div>


