<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
        $name = "Ahmad Idris Yakubu";
        $matric_number = "Bi220038";
        $course = "Information Security";
        $year_of_study = "2nd Year";
        $address = "Taman University, Parit Raja, Batu Pahat, Johor, Malaysia";
    ?>

    <table>
        <tr>
            <th colspan="2">Personal Details</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td> 
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td> 
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td> 
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td> 
        </tr>
    </table>
    
</body>
</html>
