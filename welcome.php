<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("location:admin.php");
    exit();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Display Data from Database</title>
</head>

<body>


    <table border="1" cellspacing="0" cellpadding="2px">
        <tr>
            <th class="col1">ID</th>
            <th class="col2">Name</th>
            <th class="col3">Email</th>
            <th class="col4">phone</th>
            <th class="col5">Location</th>
            <th class="col6">Acomodation</th>
            <th class="col7">Transport</th>
            <th class="col8">Arrival</th>
            <th class="col9">Leaving</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "reservation_db";

        
        $conn = new mysqli($servername, $username, $password, $dbname);
 
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, name, email, phone, location, acomodation, transport, arrivals, leaving FROM reserve_form";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>"
                    . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["location"] . "</td><td>" . $row["acomodation"] . "</td><td>" . $row["transport"] . "</td><td>" . $row["arrivals"] . "</td><td>" . $row["leaving"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
    <a href="destroy_session.php">Logout</a>
</body>

</html>