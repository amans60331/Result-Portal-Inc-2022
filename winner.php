
<?php
 include 'connection.php';
 include 'navbar.php';
 
 $sql="SELECT * FROM `result1`  ORDER BY `result1`.`Aveper` DESC , `result1`.`frequency` DESC";
 $result = $conn->query($sql) or die($conn->error);
$a=array();
 if ($result->num_rows > 0) {
     
    while($row = $result->fetch_assoc()) {
        
            array_push($a,$row['Team ID']) ;
        }
      
    
}
if(sizeof($a)<3){
    for($i=0;$i<sizeof($a);$i++){ 
        ?>
        <td><?php  echo $a[$i]; ?></td><?php
    }

}
else{
    for($i=0;$i<3;$i++){ 
        ?>
         <td><?php  echo $a[$i]; ?></td><?php
    }

}

?>