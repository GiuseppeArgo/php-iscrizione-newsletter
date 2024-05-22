<?php 

function check_email($email) {
    if (isset($email)) {
        $user_email = $email;
        if (str_contains($user_email, ".") && str_contains($user_email, "@") ) {
            return true;
        } else {
            return false;
        }
    }
}

?>