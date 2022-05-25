<?php
    include '../init.php';

    /*
        STR Split: str_split(String, Length)
        Chunk Split: chunk_split(String, Lenght, End)
    */


    $str = "Hello I love PHP";
    echo $str . "</br>";

    // $arr = str_split($str, 1);
    $arr = chunk_split($str, 5);

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