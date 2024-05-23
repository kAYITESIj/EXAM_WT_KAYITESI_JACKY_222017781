<?php  
$db=new mysqli('localhost','root','','landscape_design_service');
$select=mysqli_query($db,"SELECT * FROM ordering");




?> <li><a href="index.php">home</a></li>
<table border="1" cellspacing="0">
	<tr>
		<td colspan="8">table that shows buying design</td>
	</tr>
	<tr>
		<td>order_id</td>
		<td>person name</td>
		<td>email</td>
		<td>service/product</td>
		<td>price</td>
		<td>buy</td>
		<td>delete</td>
	</tr>
	<tr>
		<?php while ($rows=mysqli_fetch_assoc($select)) {
		
		  ?>
		  <td><?php echo $rows['orderID']  ?></td>
		  <td><?php echo $rows['name']  ?></td>
		  <td><?php echo $rows['email']  ?></td>
		  <td><?php echo $rows['service']  ?></td>
		  <td><?php echo $rows['buy']  ?></td>
		  <td><a href="update.php?edit=<?php echo $rows['orderID']  ?>">buy</a> </td>
		  <td><a href="delete.php?delete=<?php echo $rows['orderID']  ?>">delete product</a> </td>
	</tr><?php } ?> 
</table>