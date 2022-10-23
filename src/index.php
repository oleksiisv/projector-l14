<?php
$mysqli = new mysqli('mysql', 'admin', 'admin123', 'projector_l14');
$query = 'SELECT * FROM employees LIMIT 1000';
$result = $mysqli->query($query);
?>

    <html>
    <head>
        <title>Projector L14</title>
    </head>
    <body>
    <h1>Projector L14</h1>

    <table>
        <thead>
        <tr>
            <th>emp_no</th>
            <th>birth_date</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>gender</th>
            <th>hire_date</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result->fetch_all(MYSQLI_ASSOC) as $row): ?>
            <tr>
                <td><?= $row['emp_no'] ?></td>
                <td><?= $row['birth_date'] ?></td>
                <td><?= $row['first_name'] ?></td>
                <td><?= $row['last_name'] ?></td>
                <td><?= $row['gender'] ?></td>
                <td><?= $row['hire_date'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


    </body>
    </html>

<?php
$result->free_result();
?>