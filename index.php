<?php
$arquivo = file("arquivo.txt");
$arquivo = sort($arquivo);
$m_arquivo = (max($arquivo));
?>
    <ul>        
       <?php foreach ($m_arquivo as $arq){
           ?>
        <li><?php echo $arq ?></li>
        <?php
    }
    ?>
    </ul>
    <?php

