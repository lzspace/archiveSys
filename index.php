$db = new PDO("mysql:host=127.0.0.1;dbname=test;charset=utf8mb4", 'root', '');

$select = $db->query(file_get_contents('sql/fetch_all_colors.sql'));
while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
    echo $row['color'].'<br>';
}