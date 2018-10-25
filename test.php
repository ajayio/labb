<!DOCTYPE html>
<html>
  <head>
    <title>Connectivity</title>   
      <style>
          table{
               border-collapse: collapse;
              width: 100%;
              color: #d96459;
              font-family: monospace;
              font-size: 25px;
              text-align: left;
          }
          th{
              background-color: #d96459;
              color: #fff;
          }
          tr:nth-child(even){
               background-color: #f2f2f2;
          }
      
      </style>
  </head>
<body>
       <center><table>
           <tr>
               <th>ID</th>
               <th>Username</th>
                <th>Password</th>
           </tr>
           <?php
           $conn = mysqli_connect("localhost", "root", "", "company");
           if($conn-> connect_error) {
               die("Connection failed: ". $conn-> connect_error);
           }
           
           $sql = "SELECT id, username, password from login";
           $result = $conn-> query($sql);
           
           if($result-> num_rows > 0){
               while ($row = $result-> fetch_assoc()) {
                   echo "<tr><td>". $row["id"] ."</td><td>". $row["username"] ."</td><td>". $row["password"] ."</td></tr>";
               }
               echo "</table>";
           }
           else{
               echo "0 result";
           }
           
           $conn-> close();
           ?>
           
       
       </table>
    
    </center>
    
    </body>
</html>
    