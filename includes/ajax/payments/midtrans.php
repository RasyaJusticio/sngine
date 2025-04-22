<?php

// fetch bootstrap
require '../../../bootstrap.php';

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

    case 'donate':
        // valid inputs
        if (!isset($_POST['post_id']) || !is_numeric($_POST['post_id'])) {
            _error(400);
        }

        // get post
        $post = $user->get_post($_POST['post_id']);
        if (!$post) {
            _error(400);
        }

        // get midtrans snap token
        $payment_info = midtrans_payment_token("donate", $_POST['price'], $_POST['post_id']);
        break;

    case 'movies':
        // valid inputs
        if (!isset($_POST['movie_id']) || !is_numeric($_POST['movie_id'])) {
            _error(400);
        }

        // get movie
        $movie = $user->get_movie($_POST['movie_id']);
        /* check if user already paid to this movie */
        if ($movie['can_watch']) {
            modal("SUCCESS", __("Paid"), __("You already paid to this movie"));
        }

        // get midtrans snap token
        $payment_info = midtrans_payment_token("movies", $movie['price'], $_POST['movie_id']);
        break;

    case 'marketplace':
        // valid inputs
        if (!isset($_POST['orders_collection_id'])) {
            _error(400);
        }

        // get orders collection
        $orders_collection = $user->get_orders_collection($_POST['orders_collection_id']);
        /* check if order collection exists */
        if (!$orders_collection) {
            _error(400);
        }
        /* check if user already paid to this order collection */
        if ($orders_collection['paid']) {
            modal("SUCCESS", __("Paid"), __("You already paid to this order"));
        }

        // get midtrans snap token
        $payment_info = midtrans_payment_token("marketplace", $orders_collection['total'], $_POST['orders_collection_id']);
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

