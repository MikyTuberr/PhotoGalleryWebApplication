<?php

    function login_attempt() {

        $db = get_db();

        $LoginAttempt = $db->users->find(['login' => $_POST['nickattempt']]);

        foreach($LoginAttempt as $user) {

            $login_attempt = 0;
            if (password_verify($_POST['passwordattempt'], $user['password']) == true) {
                $login_attempt = 1;
                $_SESSION['user_id'] = $user['_id'];
            }

        }

        if(isset($login_attempt)) return $login_attempt;
    };

?>

