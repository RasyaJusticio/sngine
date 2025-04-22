<?php

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access
user_access(true, true);

// check if Midtrans enabled
if (!$system['midtrans_enabled']) {
    modal("MESSAGE", __("Error"), __("This feature has been disabled by the admin"));
}

try {
    switch ($_POST['handle']) {
        case 'wallet':
            // valid inputs
            if (!isset($_POST['price']) || !is_numeric($_POST['price'])) {
                _error(400);
            }

            // get midtrans snap token
            $payment_info = midtrans_payment_token("wallet", $_POST['price']);
            break;

        default:
            _error(400);
            break;
    }

    // return & exit
    return_json($payment_info);
} catch (Exception $e) {
    modal("ERROR", __("Error"), $e->getMessage());
}

