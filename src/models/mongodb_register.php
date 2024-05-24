<?php
use MongoDB\BSON\ObjectID;

function check_if_the_email_or_login_are_occupied($email,$login) {

    $db = get_db();

    $OccupiedEmail = $db->users->find(['email' => $email]);
    $OccupiedLogin = $db->users->find(['login' => $login]);

    foreach($OccupiedEmail as $query) {

        $occupied_email = 1;
        break;

    };

    foreach($OccupiedLogin as $query) {

        $occupied_login = 1;
        break;
    };

    if(isset($occupied_email)) {
        return '<span style="color:red; font-size: 17px;">Podany adres e-mail jest zajęty!</span>';
    }
    else if(isset($occupied_login)) {
        return '<span style="color:red; font-size: 17px;">Podany login jest zajęty!</span>';
    }
    else {
        return false;
    }

};
function mongodb_register($email,$login, $password) {
   
    if(check_if_the_email_or_login_are_occupied($email,$login) == false) {
        $db = get_db();

        $MongoUser = [
            'email' => $email,
            'login' => $login,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            '_id' => new MongoDB\BSON\ObjectId()
        ];

        $db->users->insertOne($MongoUser);

        return true;
    }
    else {
        return check_if_the_email_or_login_are_occupied($_POST['email'], $_POST['login']);
    }
};

?>