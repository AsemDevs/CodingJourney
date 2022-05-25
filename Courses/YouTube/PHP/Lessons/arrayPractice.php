<?php
    include '../init.php';

$salaries = array(
    "Osama"     => "2000",
    "Asem"      => "1500",
    "Hamdi"     => "3000",
    "Basel"     => "2500",
    "Mohamed"   => "2000",
    "Body"      => "3000"
);

$diet = array(
    "Day1" =>array("Banana", "Apple", "Bread"),
    "Day2" =>array("Meat", "Rice", "Oats"),
    "Day3" =>array("Bread", "Orange", "Beans")
);


?>



<div class="container">
    <div class="center">
        <pre><?php print_r($salaries);?></pre>
    </div>


    <div class="center">
<pre>
<?php foreach($salaries as $person => $salary){
    echo $person . "Takes " ."<span>". $salary ."</span>" . " Per month" ."<br/>";
    }
?>
</pre>
    </div>

    <div class="center">
<pre>
<?php foreach($diet as $day => $food){
    echo "<h3>In " . $day . " I will Eat: </h3>";
    foreach($food as $item){
        echo "<ul>" . "<li>" . $item . "</li></ul>";
    }
    }
?>
</pre>
    </div>
</div>


<?php
    include "../" .$tpl . 'footer.php';
?>
