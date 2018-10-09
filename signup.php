<form action=" " method="POST">
	<center>
		<table>
			<tr>
				<td>Username</td>
				<td> : </td>
				<td><input type="text" name="usid" style="width: 70%; height: 3%; color: black; background-color: lightgrey; border-radius: 5px"></td>
			</tr>
			<tr>
		 		<td>Password</td>
		 		<td> : </td>
		 		<td><input type="Password" name="pass" style="width: 70%; height: 3%; color: black; background-color: lightgrey; border-radius: 5px"></td>
		 	</tr>
		 	<tr>
		 		<td>Re-type Password</td>
		 		<td> : </td>
		 		<td><input type="Password" name="pass" style="width: 70%; height: 3%; color: black; background-color: lightgrey; border-radius: 5px"></td>
		 	</tr>

		<?php
				if(isset($data)){ ?>
					<input type="hidden" name="data" value="<?php echo $data; ?>">
					<?php
			}
					?>
			<tr>
				<td style="padding-bottom: 10px"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>	
		</table>
	</center>
</form>
