<?


//database variables
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "archivsys";

//connection
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = mysqli_connect($host, $user, $pass, $db_name);
//get the form data
$name = $_POST['name'];
$description = $_POST['description'];
$keywords = $_POST['keywords'];

//insert the new entry into the database
$sql = "INSERT INTO binders (name, description, keywords) VALUES ('$name', '$description', '$keywords')";
$query = $db->query($sql);

//check if the query was successful
if ($query) {
    //the query was successful
    echo "The new entry was successfully inserted into the database.";
} else {
    //the query failed
    echo "The new entry could not be inserted into the database.";
}

?>