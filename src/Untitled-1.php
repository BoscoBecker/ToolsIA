<?php
$file = file_get_contents('default.php');
$pattern = '/<div class="card">\s*' .
           '<h3>(.*?)<\/h3>\s*' .
           '<p>Descrição: (.*?)<\/p>\s*' .
           '<p><a href="(.*?)" class="card-button" target="_blank">Acessar Site<\/a><\/p>\s*' .
           '<\/div>/s';

$replacement = '<div class="card">' . "\n" .
               '    <h3>$1</h3>' . "\n" .
               '    <p><?php echo $translations[$lang][\'description\']; ?> <?php echo $lang === \'pt\' ? \'$2\' : \'[English translation needed]\'; ?></p>' . "\n" .
               '    <p><a href="$3" class="card-button" target="_blank"><?php echo $translations[$lang][\'access_site\']; ?></a></p>' . "\n" .
               '</div>';

$newContent = preg_replace($pattern, $replacement, $file);

file_put_contents('default.php', $newContent);
?>