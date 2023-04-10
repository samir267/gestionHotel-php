<?php
require 'connection.php';
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->rowCount() > 0){
    echo '<table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>';
            while($row=$result->fetch()){
                echo '<tr>
                <td>' . $row["id"] . '</td>
                <td>' . $row["username"] . '</td>
                <td>' . $row["password"] . '</td>
            </tr>';
    }
    echo '</tbody></table>';
} else {
    echo "0 results";
}


?>