<?php
    function save_image_to_mongodb($title, $author, $file_name) {

        $db = get_db();

        $MongoImage = [
            'title' => $title,
            'author' => $author,
            'name' => $file_name,
            '_id' => new MongoDB\BSON\ObjectId()
        ];

        $db->images->insertOne($MongoImage);
        
    };

?>