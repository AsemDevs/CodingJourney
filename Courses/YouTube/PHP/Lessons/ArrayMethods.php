<?php
    include '../init.php';


    $array= array(
        "HTML",
        "Css",
        "PHP",
        "JS",
        "MySQL",
        "Python"
    );

    /*
        - in_array(Needle, Haystack, type)
        - array_search(Needle, Haystack, type)
        - array_key_exists(Needle, Haystack)
        - array_key_exists(Needle, Haystack)
     */


?>


<div class="container">
    <div class="center">
<pre><?php if(in_array("PHP",$array,true)){
    echo "There is PHP";
}?></pre>
    </div>


    <div class="center">
<pre><?php $lang = array_search("PHP",$array,true);
        echo "There is " . $array[$lang]. " in Index " . $lang;
?></pre>
    </div>

    <div class="center">
<pre><?php if(array_key_exists(1, $array)){
        echo "There is " . $array[1];
    }
?></pre>
    </div>

</div>






<?php
    include "../" .$tpl . 'footer.php';
?>