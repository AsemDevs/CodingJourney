<?php
    include '../init.php';

    /*
        To Remove Element: array_pop(Array) // Also To get the last Element
        To Remove the First Element: array_shift(Array)
        
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
<h3>array_pop(Array)</h3>

<?php

    print_r($langs);
    $lastLang = array_pop($langs);
    echo "<hr>";
    print_r($langs);
    echo "<hr>";
    echo $lastLang;

?>
</pre>
    </div>
    <div class="center">
<pre>
<h3>array_shift(Array)</h3>

<?php

    print_r($langs);
    $lastLang = array_shift($langs);
    echo "<hr>";
    print_r($langs);
    echo "<hr>";
    echo $lastLang;

?>
</pre>
    </div>
</div>


<?php
    include "../" .$tpl . 'footer.php';
?>