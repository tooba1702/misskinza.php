<?php
$student = ["name"=>"ali","age"=>21,"gender"=>"male","address"=>"karachi"]

?>
<ul>
    <?php
foreach($student as  $key => $value){
    ?>
    <li><?php echo $key." : ".$value ?></li>
    <?php
}
    ?>
</ul>


<?php
$students = [
    ["name"=>"ali","age"=>21,"gender"=>"male","address"=>"karachi"],
    ["name"=>"aisha","age"=>20,"gender"=>"female","address"=>"islamabad"],
    ["name"=>"rooh","age"=>25,"gender"=>"female","address"=>"lahore"],
    ["name"=>"salar","age"=>30,"gender"=>"male","address"=>"karachi"]
];
?>


<table border= "1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($students as $std){
            ?>
            <tr>
                <?php
                foreach($std as $st){
                    ?>
                    <td><?php  echo $st?></td>
                    <?php
                }
                ?>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>