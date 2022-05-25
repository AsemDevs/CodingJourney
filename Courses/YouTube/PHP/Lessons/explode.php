<?php
    include '../init.php';

    /*
        Explode: explode(Seprator, String, Limit)
    */


    $str = "Hello I love PHP";
    $arr = explode(" ", $str, -2);
?>


<div class="container">
    <div class="center">
<pre>
<?php
print_r($arr);

?>
</pre>
    </div>
</div>


<?php
    include "../" .$tpl . 'footer.php';
?>