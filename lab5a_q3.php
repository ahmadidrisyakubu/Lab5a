<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($width, $length) {
            return $width * $length;
        }

        // Example values for width and length
        $width = 4;
        $length = 2;

        // Calculate the area
        $area = calculateArea($width, $length);

        // Display the result
        echo "<p>The area of a rectangle with a width of $width and $length is $area.</p>";
    ?>
</body>
</html>
