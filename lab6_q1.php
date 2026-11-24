<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6 Q1</title>
</head>
<body>
    
  <?php
    $name = "Muhammad Harraz";
    $matricNo = "AI250110";
    $course = "Sains Komputer (Teknologi Web)";
    $year = 2024;
    $address = "Kuala Lumpur, Malaysia";
    ?>

    <table border="1">

        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric No</td>
            <td><?php echo $matricNo; ?></td>
        </tr>
       
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
        </table>
</body>
</html>