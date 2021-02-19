<?php include 'inc/header.php'; ?>

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
                <td>Name:</td>
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
        
        <tr>
            <td>01</td>
            <td>Ariful islam</td>
            <td>CSE</td>
            <td>19</td>
            <td>
                <a href="#">Edit</a> ||
                <a href="#">Delete</a>
            </td>
        </tr>
        
        <tr>
            <td>02</td>
            <td>Montashir Billah</td>
            <td>PHP</td>
            <td>25</td>
            <td>
                <a href="#">Edit</a> ||
                <a href="#">Delete</a>
            </td>
        </tr>
        
        <tr>
            <td>03</td>
            <td>Jamal Hossain</td>
            <td>Physics</td>
            <td>30</td>
            <td>
                <a href="#">Edit</a> ||
                <a href="#">Delete</a>
            </td>
        </tr>
    </table>
</section>












<?php include 'inc/footer.php'; ?>