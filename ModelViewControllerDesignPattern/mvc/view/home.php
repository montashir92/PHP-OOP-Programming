<?php include 'inc/header.php'; ?>

<table class="tblone">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Department</th>
            <th>Age</th>
        </tr>
        
		<?php
		    $i=0;
			foreach($user as $key => $value){
			$i++;
		?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['dep']; ?></td>
            <td><?php echo $value['age']; ?></td>
            
        </tr>
	<?php } ?>
        
    </table>

<?php include 'inc/footer.php'; ?>