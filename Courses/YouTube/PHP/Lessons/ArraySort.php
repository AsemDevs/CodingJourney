<?php
    include '../init.php';



    /*
        Sorting Array: sort() //it sorts alphabetically and asc for numbers
        sort($langs, SORT_REGULAR) // doesn't Change the data type
        sort($langs, SORT_STRING)  // change number to string and sort based on strings

        Reverse Sorting: rsort() // It Sorts desc

        //Associative Array Sorting: Sorts The Value


        asort()
        ksort()
        arsort()
        krsort()

    */

    $langs= array(
        "HTML"  => 80,
        "Css"   => 70,
        "PHP"   => 45,
        "JS"    => 30,
        "MySQL" => 29,
        "Python"=> 20
    );

?>


<div class="container">
    <div class="center">
<pre>
    <h3>Array Without Sort</h3>
<?php

    print_r($langs);
    echo "<hr>";
    echo "<h3>Array Associative Sort</h3>";
    asort($langs);
    print_r($langs);



?>
</pre>
    </div>

    <div class="center">
<pre>
    <h3>Array Associative Reverse Sort</h3>
<?php

    print_r($langs);
    arsort($langs);
    print_r($langs);



?>
</pre>
    </div>
    <div class="center">
<pre>
    <h3>Array Associative Key Sort</h3>
<?php

    print_r($langs);
    ksort($langs);
    print_r($langs);



?>
</pre>
    </div>
</div>


<?php
    include "../" .$tpl . 'footer.php';
?>