<?php
    include '../init.php';


    
    /*
        Array_Push: array_push(Array, Value1, Value2, Value3) // Add elements to the end of the array
        Array_Unshift: array_unshift(Array, Value1, Value2, Value3)) // Add elements to the begining of the array
        
     */

    $langs= array(
        "HTML",
        "Css",
        "PHP",
        "JS",
        "MySQL",
        "Python"
    );



?>


<div class="container">
    <div class="center">
<pre>
<?php
    print_r($langs);
    array_push($langs, "Ruby", "C#", "C++");
    echo "<hr>";
    print_r($langs);

?>
</pre>
    </div>

    <div class="center">
<pre>
<?php
    array_unshift($langs, "Ruby", "C#", "C++");
    print_r($langs);

?>
</pre>
    </div>
</div>




<?php
    include "../" .$tpl . 'footer.php';
?>