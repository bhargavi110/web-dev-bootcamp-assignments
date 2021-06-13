<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <title>Db to table</title>
        </head>
             <body>
                    <table border="1">
                    <tr>
                        <th>ID</th> 
                        <th>Email Id</th>
                    </tr>
                           <?php             //sever details
                                                  $server="localhost:3306";
                                                  $dbname="email";
                                                  $username="root";
                                                  $password=""; 
                                // connecting to db
                                  $conn=mysqli_connect($server,$username,$password,$dbname); 
                                  if(!$conn) {
                                    echo 'Sever connection Failure';
                               }
                        //Prepare sql injection
                           $sql="SELECT * FROM email";
                       //query
                          $data=mysqli_query($conn,$sql);
                         if (mysqli_num_rows($data)>0) {
                               while ($row=mysqli_fetch_assoc($data)){
                                  
                        ?>         <tr>
                                       <th><?php echo $row['id']; ?></th>
                                       <th><?php echo $row['emailid']; ?></th>
                                   </tr>
                      <?php
                                }
                            }
                        ?>
                        </table>
                </body>
</html>



