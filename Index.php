
<?php

$xml = simplexml_load_file("books.xml");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 30px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background-color: white;
        }
        th {
            background-color: #333;
            color: white;
            padding: 12px;
        }
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
<h1>Book Details</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Price</th>
        <th>Category</th>
    </tr>
<?php
foreach ($xml->book as $book) {
    echo "<tr>";
    echo "<td>" . $book->id . "</td>";
    echo "<td>" . $book->title . "</td>";
    echo "<td>" . $book->author . "</td>";
    echo "<td>₹" . $book->price . "</td>";
    echo "<td>" . $book->category . "</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>
