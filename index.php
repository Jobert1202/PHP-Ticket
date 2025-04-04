<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php include "components/header.php" ?>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "ticket_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // collect value of input field
            $data = $_REQUEST['val1'];
        
            if (empty($data)) {
                echo "data is empty";
            } else {
                echo $data;
            }
        }

        $sql = "SELECT * FROM tickets";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <tbody>
                         <tr>
                            <th>ID</th>
                            <th>E-mail</th>
                            <th>Platforms</th>
                            <th>Region</th>
                            <th>Subject</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>";

        while($row = $result->fetch_assoc()) {
            echo        "<tr>".
                            "<td>" . $row["ID"]. "</td>".
                            "<td>" . $row["E-mail"]. "</td>".
                            "<td>" . $row["Platforms"]. "</td>".
                            "<td>" . $row["Region"]. "</td>".
                            "<td>" . $row["Subject"]. "</td>".
                            "<td>" . $row["Description"]. "</td>".
                            "<td>" . $row["Status"]. "</td>".
                            "<td>" . $row["Date"]. "</td>".
                        "</tr>";
        }
        echo "      </tbody>
                </table>";

        } else {
            echo "0 results";
        }

        $conn->close();
    ?>
    <style>
        table{
            border: 1px solid black;

            th, td, tr{
                border: 1px solid black;
                text-align: center;
                background-color: white;
            }
        }

    </style>

</body>
</html>