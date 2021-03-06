<?php

// Error and success messages
$messages = [
    'error' => [],
    'success' => [],
];

// Form sent
if(!empty($_POST))
{
    // Get variables
    $account = trim($_POST['account']);

    // Handle errors
    if(empty($account))
    {
        $messages['error'][] = 'Missing account';
    }

    // Success
    if(empty($messages['error']))
    {
        $app = new App($account);
        $_POST['account'] = '';
    }
}

// Form not sent
else
{
    $_POST['account'] = '';
}