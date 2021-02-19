
// CRUD With PDO Read Data From Database in php.

<?php

spl_autoload_register(function($class){
	include "classes/".$class.".php";
});

?>

<?php

$user = new Student();

?>


<section class="mainleft">
    
    <form action="" method="post">
        
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" placeholder="Your Name.." required="1"/></td>
            </tr>
            
            <tr>
                <td>Department: </td>
                <td><input type="text" name="name" placeholder="Your Department.." required="1"/></td>
            </tr>
            
            <tr>
                <td>Age:</td>
                <td><input type="text" name="name" placeholder="Your Age.." required="1"/></td>
            </tr>
            
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="create" value="Submit"/>
                </td>
            </tr>
        </table>
    </form>
</section>

<section class="mainright">
    
    <table class="tblone">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Department</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
        
		<?php
		$i=0;
			foreach($user->readAll() as $key => $value){
			$i++;
		?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['dep']; ?></td>
            <td><?php echo $value['age']; ?></td>
            <td>
                <a href="#">Edit</a> ||
                <a href="#">Delete</a>
            </td>
        </tr>
			<?php } ?>
        
    </table>
</section>