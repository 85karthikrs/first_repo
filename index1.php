<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data retrival</title>
</head>
<body>
    <table ><tr><th>slno</th><th>Name</th><th>age</th></tr>
    <?php 
    include_once 'conn.php';
    
    $sql='select * from sample2';
    $res=mysqli_query($conn,$sql);
       
    while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
        echo "<tr>";
        echo "<td>".$row['SlNO']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['age']."</td>";
        echo "</tr>";
    }

  

     /*  
        $age=28;
        $name="Jimmy Carter";
        //$sql="UPDATE sample2 SET  name = '$name' , age = $age  WHERE SlNO = 1;";
        //mysqli_query($conn,$sql);
        $sql="INSERT INTO sample2 (SlNO, name, age) VALUES (4, '$name', $age);";
        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . mysqli_error($conn);
          }
        //header("Location:https://www.w3schools.com/php/php_mysql_update.asp");
          */
    ?>
    </table>

    <?php
         $sql1='select * from sample2';
         $res1=mysqli_query($conn,$sql1);
         $row1=mysqli_fetch_array($res1,MYSQLI_NUM);
         echo $row1[0];
    
    ?>
</body>
</html>