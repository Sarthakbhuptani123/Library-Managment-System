<?php
// Database connection details
$host = 'localhost';
$dbname = 'library';
$username = 'root';
$password = '';
// Create PDO connection
$dsn = "mysql:host=$host;dbname=$dbname";
$options = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
$pdo = new PDO($dsn, $username, $password, $options);
?>

<?php
function getBooks($pdo) {
	// Prepare and execute SQL query
	$stmt = $pdo->prepare('SELECT * FROM books');
	$stmt->execute();
	// Return all books as an array of associative arrays
	return $stmt->fetchAll();
	}
?>

<?php
function addBook($pdo, $title, $author, $publisher, $isbn) {
// Prepare SQL query
$stmt = $pdo->prepare('INSERT INTO books (title, author, publisher, isbn) VALUES (?, ?, ?, ?)');
// Bind parameters and execute query
$stmt->bindParam(1, $title);
$stmt->bindParam(2, $author);
$stmt->bindParam(3, $publisher);
$stmt->bindParam(4, $isbn);
$stmt->execute();
}
?>

<?php
//code4:-
function editBook($pdo, $id, $title, $author, $publisher, $isbn) {
// Prepare SQL query
$stmt = $pdo->prepare('UPDATE books SET title = ?, author = ?, publisher = ?, isbn = ? WHERE id = ?');
// Bind parameters and execute query
$stmt->bindParam(1, $title);
$stmt->bindParam(2, $author);
$stmt->bindParam(3, $publisher);
$stmt->bindParam(4, $isbn);
$stmt->bindParam(5, $id);
$stmt->execute();
}
function deleteBook($pdo, $id) {
// Prepare SQL query
$stmt = $pdo->prepare('DELETE FROM books WHERE id = ?');
// Bind parameter and execute query
$stmt->bindParam(1, $id);
$stmt->execute();
}
?>

<html>
	<body>
	   <form method="POST" action="add_book.php">
          <label for="title">Title:</label>
          <input type="text" name="title" id="title">
          <label for="author">Author:</label>
          Untitled 2
          <input type="text" name="author" id="author">
          <label for="publisher">Publisher:</label>
          <input type="text" name="publisher" id="publisher">
          <label for="isbn">ISBN:</label>
          <input type="text" name="isbn" id="isbn">
          <button type="submit">Add Book</button>
        </form>
	</body>
</html>
