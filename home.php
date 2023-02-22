<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h2>Teachers Table</h2>
    <table border="1">
        <thead>
            <tr>
                <th>sno</th>
                <th>name</th>
                <th>department</th>
                <th>location</th>
                
            </tr>
        </thead></center>
        <tbody>
            <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="college";

            $connection=new mysqli($servername,$username,$password,$database);

            if($connection->connect_error){
                die("connection failed".$connection->connect_error);
            }
            $sql="select * from student";
            $result=$connection->query($sql);

            if(!$result){
                die("invalid query" . $connection->error);

            }
            while($row=$result->fetch_assoc()){
                echo"
                <tr>
                <td>$row[sno]</td>
                <td>$row[name]</td>
                <td>$row[department]</td>
                <td>$row[location]</td>
                <td><a href='/htdocs/edit.php?sno=$row[sno]'>edit</a>
                <a href='/htdocs/delete.php?sno=$row[sno]'>delete</a></td>
                </tr>";
            }

            ?>
            
        </tbody>
</table>
</body>
</html>