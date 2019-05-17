<?php
//echo "view";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Users</title>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Company</th>
        </tr>
        <?php
        foreach ($userArray as $key => $value) {

            echo "<tr>
            <td>" . $value['id'] . "</td>
            <td>" . $value['username'] . "</td>
            <td>" . $value['company'] . "</td>
        </tr>";
        }
        ?>
    </table>
</body>

</html>
