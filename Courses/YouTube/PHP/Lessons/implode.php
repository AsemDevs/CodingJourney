<?php
    include '../init.php';

    /*
        Explode: explode(Seprator, Array)
    */


    $arr = array("Ahmed", "Mahmoud", "Ahmed");
    $str = implode(" ", $arr);
?>


<div class="container">
    <div class="center">
<pre>
<?php
    echo "Hello Our Moderators names are " . $str;

?>
</pre>
    </div>
</div>


<?php
    include "../" .$tpl . 'footer.php';
?>