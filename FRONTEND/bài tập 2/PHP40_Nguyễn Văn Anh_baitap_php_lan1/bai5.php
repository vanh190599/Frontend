<meta charset="utf-8">
<?php 
	$a = "";
	$b = "";
	$canh_huyen ="";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$a = $_POST["a"];
		$b = $_POST["b"];
		$canh_huyen = sqrt($a*$a + $b*$b);
	}
 ?>
<div style="width: 350px; height: 230px; margin: auto;background-color: #ffebca">
	<div style="width: 350px;height: 50px; display: flex;justify-content: center; align-items: center; font-family: arial; font-size: 15px; background-color: #fdcc68; color: #8a4206; font-weight: bold;">
		CẠNH HUYỀN TAM GIÁC VUÔNG
	</div>
	 <form method="post" action="" style="margin-left: 30px; margin-top: 20px; ">
 		<table cellpadding="5">
			<tr>
				<td>Cạnh A:</td><td><input type="number" value="<?php echo "$a" ?>" required name="a"></td>
			</tr>				
			<tr>
				<td>Cạnh B:</td><td><input type="number" value="<?php echo "$b" ?>" required name="b"></td>
			</tr>			
			<tr>
				<td>Cạnh huyền:</td><td><input type="text" value="<?php echo "$canh_huyen"?>" disabled></td>
			</tr>			
 			<tr>
 				<td></td><td><button  type="submit">Tính</button></td>
 			</tr>
 		</table> 		
 	</form>
</div>
