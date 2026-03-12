<?php
/*
Plugin Name: Delete My Account (SnowFlat Compatible)
Description: Adds a modern delete account button with confirmation modal on the account page.
*/

qa_register_plugin_layer(
    'qa-delete-account-layer.php',
    'Delete Account SnowFlat Layer'
);

qa_register_plugin_module(
    'page',
    'qa-delete-account-page.php',
    'qa_delete_account_page',
    'Delete Account Page'
);
