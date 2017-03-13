<?php 
    require_once 'Dao.php';
    echo "test";

    require_once 'Output.php';
    echo "test";
    $dao = new Dao();
    $dao->getConnection();
    
?>
<div> 
        <?php Output::outputTable($hey->getRequest());?>

</div>

