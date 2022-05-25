<?php
    include '../init.php';

        /*
            array_fill(Index, Number, Value)
         */

    $langs= array(
        "HTML",
        "Css",
        "PHP",
        "JS",
        "MySQL",
        "Python"
    );

    $users = array(
        "Asem",
        "Basel",
        "Mohamed"
    );

?>


<div class="container">
    <div class="center">
<pre>
<?php

    for($i = 0; $i<count($users);$i++){
        $arrayfill = array_fill($i,1, array_fill($i,1,$users[$i]));
        print_r($arrayfill);
    }


?>
</pre>
    </div>
</div>


<?php
    include "../" .$tpl . 'footer.php';
?>