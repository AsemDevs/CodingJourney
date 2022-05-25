<?php
/*
 - for

    for (Expression1; Expression2; Expression3) {

    }


    <select name="year">
    <?php
        for ($year=1900; $year<=2021;$year++){
            echo "<option value='$year'> $year </option>";
        }
    
    ?>

    </select>

    */



//For Loop and foreach

for ($i=1; $i <=20; $i++) {
    echo $i . "<br>";
}


for ($i=1; ; $i++){
    if($i>20){
        break;
    }
    echo $i . "<br>";
}



$siblings = array(
    "1st" => "Basel",
    "2nd" => "Asem",
    "3rd" => "Mohamed"
);
foreach($siblings as $key => $value){
    echo $key ." Sibling is " . $value . "<br>";
}


//End For Loop and foreach




?>




