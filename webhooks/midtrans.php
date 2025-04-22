<?php

/**
 * webhooks -> midtrans 
 * 
 * @author RasyaJusticio
 */

// fetch bootloader
require '../bootloader.php';

// user access (simple)
if (!$user->_logged_in) {
    user_login();
}

try {
    if ($_GET['status'] == 'success') {
        switch ($_GET['handle']) {
        case 'wallet':
            // valid inputs
            if (!isset($_GET['order_id'])) {
                _error(404);
            }

            $payment_status = midtrans_payment_check($_GET['order_id']);
            if ($payment_status->transaction_status == 'settlement') {
                /* update user wallet balance */
                $db->query(sprintf("UPDATE users SET user_wallet_balance = user_wallet_balance + %s WHERE user_id = %s", secure($_SESSION['wallet_replenish_amount']), secure($user->_data['user_id'], 'int')));
                /* wallet transaction */
                $user->wallet_set_transaction($user->_data['user_id'], 'recharge', 0, $_SESSION['wallet_replenish_amount'], 'in');
                /* log payment */
                $user->log_payment($user->_data['user_id'], $_SESSION['wallet_replenish_amount'], 'midtrans', 'wallet');
                /* redirect */
                redirect("/wallet?wallet_replenish_succeed");
            }
            break;

        case 'movies':
            // valid inputs
            if (!isset($_GET['order_id'])) {
                _error(404);
            }
            if (!isset($_GET['movie_id']) || !is_numeric($_GET['movie_id'])) {
                _error(404);
            }

            // get movie
            $movie = $user->get_movie($_GET['movie_id']);

            /* check if user already paid to this movie */
            if ($movie['can_watch']) {
                _error(404);
            }

            $payment_status = midtrans_payment_check($_GET['order_id']);
            if ($payment_status->transaction_status == 'settlement') {
                /* movie payment */
                $movie_link = $user->movie_payment($_GET['movie_id']);
                /* log payment */
                $user->log_payment($user->_data['user_id'], $movie['price'], 'midtrans', 'movies');
                /* redirect */
                redirect($movie_link);
            }
            break;

        case 'marketplace':
            // valid inputs
            if (!isset($_GET['order_id'])) {
                _error(404);
            }
            if (!isset($_GET['orders_collection_id'])) {
                _error(404);
            }

            // get orders collection
            $orders_collection = $user->get_orders_collection($_GET['orders_collection_id']);
            /* check if order collection exists */
            if (!$orders_collection) {
                _error(404);
            }

            $payment_status = midtrans_payment_check($_GET['order_id']);
            if ($payment_status->transaction_status == 'settlement') {
                /* mark orders collection as paid */
                $user->mark_orders_collection_as_paid($_GET['orders_collection_id']);
                /* log payment */
                $user->log_payment($user->_data['user_id'], $orders_collection['total'], 'midtrans', 'marketplace');
                /* redirect */
                redirect("/market/orders");
            }
            break;

        default:
            _error(404);
            break;
        }
    }

    redirect();
} catch (Exception $e) {
    _error('System Message', $e->getMessage());
}
