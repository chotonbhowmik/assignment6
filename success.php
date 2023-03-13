<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Registration Successful</title>
</head>

<body>

    <h2 class="text-center pt-5">Registration Successful</h2>
    
    <p class="text-center">Thank you for registering!</p>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Profile Picture</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // read users data from CSV file
            $file = fopen('users.csv', 'r');

            while (($data = fgetcsv($file)) !== false) {
                echo '<tr>';
                echo '<td>' . $data[0] . '</td>';
                echo '<td>' . $data[1] . '</td>';
                echo '<td><img src="uploads/' . $data[2] . '"></td>';
                echo '</tr>';
            }

            fclose($file);
            ?>
        </tbody>
    </table>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>