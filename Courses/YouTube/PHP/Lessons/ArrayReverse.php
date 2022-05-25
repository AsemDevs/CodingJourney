<?php
    include '../init.php';

    /*
        Array Reverse: array_reverse(Array, Preserve)
        Shuffle: shuffle(array)
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
    $reversed = array_reverse($langs, true);
    echo "<hr>";
    echo "<h3>Reversed Array</h3>";
    print_r($reversed);

?>
</pre>
    </div>
    <div class="center">
<pre>
<?php

    print_r($langs);
    shuffle($langs);
    echo "<hr>";
    echo "<h3>Shufflee Array</h3>";
    print_r($langs);

?>
</pre>
    </div>
</div>


<?php
    include "../" .$tpl . 'footer.php';
?>