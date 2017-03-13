
  


<?php class Output{
      public static function outputTable($rows){

    $table = "
        <table class = 'table table-hover'>
            <thead>
                <tr>
                    <th>Class</th>
                    <th>Availability</th>
                    <th>Contact Info</th>
                    <th>Name</th>
                    <th>Comment</th>
                
                </tr>
            </thead>";
        foreach($rows as $row){
            $table .= "<tr><td>" . htmlentities($row['class']) . "</td><td>{$row['availability']}" . "</td><td>{$row['contactinfo']}" ."</td><td>{$row['name']}" . "</td><td>{$row['comment']}</td></tr>";
        }
                $table.="</table>";
                echo $table;
    }
  
}?>

