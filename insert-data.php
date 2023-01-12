<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO login (username, password) VALUES ('" . $_POST['user'] . "', '" . $_POST['pass'] . "')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close(); ?>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <table>
        <tr>
            <th>User Name</th>

        </tr>
        <tr>
            <td class="sdfsdf"><?php echo $_POST['user']; ?> </td>
        </tr>
    </table>
<?php }
