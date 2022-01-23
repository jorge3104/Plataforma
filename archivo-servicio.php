<?php
require 'includes/database.php';
$path="archivos";

if(file_exists($path)){
    $directorio=opendir($path);
    while ($archivo=readdir($directorio)){
        if(!is_dir($archivo)){
            $url='archivos/'.'RFC_ID';
        ?>
        <td><?php echo "<a href='$archivo/'><label> Descargar</label></a>";?></td>
        <?php 
        }
    
    }
}
?>
