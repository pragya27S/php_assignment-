<?php
// ================================
// PHP Topics
// ================================

// 1. Introduction
// PHP (Hypertext Preprocessor) is a server-side scripting language designed for web development. 
// It is embedded in HTML and is widely used for creating dynamic web pages.

# Example:
echo "Hello, PHP!"; // Simple PHP script to print text.

// 2. Syntax
// PHP scripts are enclosed within <?php ... ? > tags. 
// Statements end with a semicolon (;).

# Example:
$a = 5; // Assigns 5 to variable $a

// 3. Variables
// Variables in PHP start with a $ symbol and are case-sensitive. 
// They can store different data types without declaring the type.

# Example:
$name = "Pragya"; // String variable
$age = 19; // Integer variable

// 4. Statements
// Statements perform actions or operations and end with a semicolon (;). 
// Blocks of code are grouped using curly braces {}.

# Example:
if ($age > 18) {
    echo "Adult";
}

// 5. Operators
// Operators are symbols used to perform operations on variables or values.
// Examples: Arithmetic (+, -, *, /), Comparison (==, !=), Logical (&&, ||).

# Example:
$result = $a + $age;

// 6. Decision Making
// PHP provides control structures like if-else, switch-case to make decisions based on conditions.

# Example:
if ($age > 18) {
    echo "Eligible to vote.";
} else {
    echo "Not eligible.";
}

// 7. Loops
// Loops execute a block of code repeatedly. Examples: for, while, do-while, foreach.

# Example:
for ($i = 0; $i < 5; $i++) {
    echo $i;
}

// 8. Arrays
// Arrays are used to store multiple values in a single variable. Types: Indexed, Associative, Multidimensional.

# Example:
$fruits = array("Apple", "Banana", "Mango");

// 9. Strings
// Strings are sequences of characters. PHP provides built-in string functions like strlen(), str_replace().

# Example:
echo strlen("Hello"); // Outputs: 5

// 10. Forms
// Forms collect user inputs. PHP handles form data using $_GET and $_POST superglobals.

# Example:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    echo "Welcome, $name!";
}

// 11. GET and POST Methods
// GET appends data to the URL, while POST hides data in the request body.

# Example:
$name = $_GET["name"]; // Get data from URL

// 12. Functions
// Functions are reusable blocks of code defined using the `function` keyword.

# Example:
function greet($name) {
    return "Hello, $name!";
}

// 13. Cookies
// Cookies store small pieces of data on the user's browser.

# Example:
setcookie("username", "Pragya", time() + (86400 * 30), "/");

// 14. Sessions
// Sessions store user data on the server.

# Example:
session_start();
$_SESSION["user"] = "Pragya";

// ================================
// PHP and MySQL Topics
// ================================

// 1. Introduction to MySQL
// MySQL is a relational database management system used with PHP to store and retrieve data dynamically.

// 2. Connecting to MySQL Database
// PHP connects to MySQL using mysqli_connect() or PDO.

# Example:
$conn = mysqli_connect("localhost", "root", "", "test_db");

// 3. Creation
// PHP can create a new table in MySQL.

# Example:
$sql = "CREATE TABLE Users (id INT, name VARCHAR(50))";
mysqli_query($conn, $sql);

// 4. Insertion
// PHP inserts data into MySQL tables.

# Example:
$sql = "INSERT INTO Users (id, name) VALUES (1, 'Pragya')";
mysqli_query($conn, $sql);

// 5. Deletion
// PHP deletes data from MySQL tables.

# Example:
$sql = "DELETE FROM Users WHERE id=1";
mysqli_query($conn, $sql);

// 6. Retrieval
// PHP retrieves data using SELECT queries.

# Example:
$sql = "SELECT * FROM Users";
$result = mysqli_query($conn, $sql);

// 7. PHP and XML
// PHP can parse XML data using parsers like SimpleXML or XML DOM.

// 8. XML Parsers
// XML parsers read XML documents. PHP provides built-in parsers like SimpleXML.

# Example:
$xml = simplexml_load_string("<users><user>Pragya</user></users>");

// 9. XML DOM
// DOM provides methods to traverse and manipulate XML documents.

# Example:
$dom = new DOMDocument();
$dom->loadXML("<users><user>Pragya</user></users>");
echo $dom->getElementsByTagName("user")->item(0)->nodeValue;
?>
