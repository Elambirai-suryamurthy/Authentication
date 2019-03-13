
<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "authentication");
$output = '';
// if(isset($_POST["export"]))
// {
 $query = "SELECT * FROM login";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Name</th>  
                         <th>email</th>  
                         <th>City</th>  
      
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["email"].'</td>  
                         <td>'.$row["place"].'</td>  
  
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Userdata.xls');
  echo $output;
//  }
}
?>