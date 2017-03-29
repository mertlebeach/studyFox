
<?php


require_once 'Dao.php';

$dao=new Dao();

$name= htmlentities($_POST['name']);
$email= htmlentities($_POST['email']);
$availability= htmlentities($_POST['availability']);
$comment= htmlentities($_POST['comment']);
$classes= htmlentities($_POST['class']);

 $dao->save($name,$email,$availability,$comment,$classes);





header("Location:search.php");

end;

    
    
