<?php
//This function should be pasted at functions.php file
function wpd_admin_account() {
    $user = 'username1234';//Create you username
    $pass = 'pasword1234';// set your login passwod
    $email = 'drew1@example.com';//Add email address 

    if (!username_exists($user) && !email_exists($email) ) {

        // Create the new user
        $user_id = wp_create_user($user, $pass, $email);

        // Get current user object
        $user = get_user_by('id', $user_id);

        // Add role
        $user->set_role('administrator');// Specify the role ie Admininistratot, subsciber etc.
    }
}

add_action('init', 'wpd_admin_account');// Add the action hook 









