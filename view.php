<thead class="thead-dark">
    <tr>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
    
<?php
//Add sql statements
    $sql = "SELECT first_name, last_name, YEAR(CURDATE()) - YEAR(dob) AS age 
    FROM customers";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);

//num_rows takes only the nuber of results
    if ($result->num_rows > 0) {
//Execute datas in each rows
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>". $row["age"]."</td></tr><br>";
        }
    } else {
        echo "No results";
    }
?>
    
  </tbody>
</table>

