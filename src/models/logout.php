<?php
    function logout() {
        unset($_SESSION['login_attempt_succes']);
        unset($_SESSION['user_id']);
    };

?>