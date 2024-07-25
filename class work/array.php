<?php
$student = ["ali","aqsa","hamza"];
?>
<ul>
    <?php
    for($i=0; $i<count($student); $i++){
        ?>
        <li><?php echo $student[$i]?></li>
        <?php
    }
    ?>
</ul>


<?php
$students =[
    ["ali", "male", 23, "karachi"],
    ["aqsa", "female", 22, "lahore"],
    ["aryan", "male", 25, "islamabad"]
];
?>
<h1>by for loop</h1>
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
        for($i=0; $i<count($students); $i++){
            ?>
            <tr>
                <?php
                for($j=0; $j<count($students[$i]); $j++){
                    ?>
                    <td><?php  echo $students[$i][$j]?></td>
                    <?php
                }
                ?>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>


<h1>by foreach loop
</h1>
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