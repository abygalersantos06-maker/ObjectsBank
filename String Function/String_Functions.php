<?php

// a. Changing Case
$school = "HOLY ANGEL UNIVERSITY";

// b. Counting Characters & Words
$name = "Abygale Santos";

// c. Removing & Replacing
$text = "   Welcome to PHP Programming!   ";

// d. Other Strings
$sample = "Learning PHP is fun!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP String Built-in Functions</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<h2>PHP Built-in String Functions</h2>

<table>
    <tr>
        <th>Category</th>
        <th>Function</th>
        <th>Code Used</th>
        <th>Output</th>
    </tr>

    <!-- Changing the Case -->
    <tr>
        <td rowspan="3">Changing Case</td>
        <td>Lowercase</td>
        <td>strtolower()</td>
        <td><?= strtolower($school); ?></td>
    </tr>
    <tr>
        <td>Uppercase</td>
        <td>strtoupper()</td>
        <td><?= strtoupper($school); ?></td>
    </tr>
    <tr>
        <td>Capitalize</td>
        <td>ucwords()</td>
        <td><?= ucwords(strtolower($school)); ?></td>
    </tr>

    <!-- Counting Characters and Words -->
    <tr>
        <td rowspan="2">Counting</td>
        <td>Number of Characters</td>
        <td>strlen()</td>
        <td><?= strlen($name); ?></td>
    </tr>
    <tr>
        <td>Number of Words</td>
        <td>str_word_count()</td>
        <td><?= str_word_count($name); ?></td>
    </tr>

    <!-- Removing and Replacing -->
    <tr>
        <td rowspan="5">Removing & Replacing</td>
        <td>Remove whitespace (left)</td>
        <td>ltrim()</td>
        <td><?= ltrim($text); ?></td>
    </tr>
    <tr>
        <td>Remove whitespace (right)</td>
        <td>rtrim()</td>
        <td><?= rtrim($text); ?></td>
    </tr>
    <tr>
        <td>Remove whitespace (both)</td>
        <td>trim()</td>
        <td><?= trim($text); ?></td>
    </tr>
    <tr>
        <td>String replace</td>
        <td>str_replace()</td>
        <td><?= str_replace("PHP", "Web", $sample); ?></td>
    </tr>
    <tr>
        <td>String ireplace</td>
        <td>str_ireplace()</td>
        <td><?= str_ireplace("php", "Programming", $sample); ?></td>
    </tr>

    <!-- Other Built-in Functions -->
    <tr>
        <td rowspan="10">Other Functions</td>
        <td>String Repeat</td>
        <td>str_repeat()</td>
        <td><?= str_repeat("★", 5); ?></td>
    </tr>
    <tr>
        <td>Substring</td>
        <td>substr()</td>
        <td><?= substr($sample, 0, 12); ?></td>
    </tr>
    <tr>
        <td>String Position</td>
        <td>strpos()</td>
        <td><?= strpos($sample, "PHP"); ?></td>
    </tr>
    <tr>
        <td>String Length</td>
        <td>strlen()</td>
        <td><?= strlen($sample); ?></td>
    </tr>
    <tr>
        <td>Word Wrap</td>
        <td>wordwrap()</td>
        <td><?= wordwrap($sample, 5, "<br>"); ?></td>
    </tr>
    <tr>
        <td>HTML Entities</td>
        <td>htmlspecialchars()</td>
        <td><?= htmlspecialchars("<b>PHP</b>"); ?></td>
    </tr>
    <tr>
        <td>Shuffle String</td>
        <td>str_shuffle()</td>
        <td><?= str_shuffle("ABCDEFG"); ?></td>
    </tr>
    <tr>
        <td>Compare Strings</td>
        <td>strcmp()</td>
        <td><?= strcmp("PHP", "php"); ?></td>
    </tr>
    <tr>
        <td>Convert to Array</td>
        <td>explode()</td>
        <td><?= implode(", ", explode(" ", $sample)); ?></td>
    </tr>
    <tr>
        <td>Join Array</td>
        <td>implode()</td>
        <td><?= implode("-", ["PHP", "is", "Awesome"]); ?></td>
    </tr>

</table>

<?php include 'includes/footer.php'; ?>

</body>
</html>
