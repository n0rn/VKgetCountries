<?php
require_once dirname(__FILE__) . '/db.php';
require_once dirname(__FILE__) . '/request.php';
require_once dirname(__FILE__) . '/vkcountry.php';


    $counties = Vk::getCountry();
    if (isset($counties->response->items)) {
        foreach ($counties->responce->items as $country) {
            echo "{$country->id} - {$country->title}";
            $id = $country->id;
            $name = $country->title;
            $db = Db::getConnection();
            $sql = 'INSERT INTO user (id, name) VALUES (:id, :name)';
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->bindParam(':name', $name, PDO::PARAM_STR);
            $result->execute();
        }
    }

/*$db = Db::getConnection();
$result = $db->query('SELECT id, name FROM country');

while($row = $result->fetch()) {
     echo $row['id'] . '<br>';
     echo $row['name'] . '<br>';
}
*/
