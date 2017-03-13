<?php include("header.php");
?>
 <style>
    .hey{
    padding-top: 10px;
        margin-left: auto;
        margin-right:auto; 
}
  

</style>  
<?php 
 require_once 'Dao.php';

    require_once 'Output.php';
    $dao = new Dao();
    $dao->getConnection();

    
?>
<body>
<div class="hey"> 
      <?php Output::outputTable($dao->getRequest());?>

</div>
         <div class="container text-center">
 <img src="meeting_fox.png" class = "img-fluid" class="img-responsive" alt="meeting_fox" style="width:500px; height:400px;"></div>
    </body>
<?php include("footer.php");
?>

