<?php
$arquivo = file("arquivo.txt");
sort($arquivo, SORT_NUMERIC);

?>
<ul>

    <?php
        foreach($arquivo as $arq){
            ?> 
                <li><?php echo $arq ?> </li>
            <?php
        }
    ?>
</ul>


