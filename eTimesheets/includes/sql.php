<?php

// Create connection to the MySQL server
$dbc = new mysqli($config['sql']['addr'], $config['sql']['uname'], $config['sql']['passwd'], $config['sql']['db']);

// Check connection
if ($dbc->connect_error) {
    die('<span style="color: red;">Connection to SQL server failed: ' . $dbc->connect_error . '</span>');
}

function getEmployeeList() // get a list of employee's uids and unames
{
    global $dbc; // get access to the dbc

    $stmt = $dbc->prepare('SELECT * FROM `employees`'); // prepare a request
    $stmt->execute();

    $result = $stmt->get_result();
    if($result->num_rows === 0) return false; // if no matchs were found, something's gome wrong so ret0

    $stmt->close();

    foreach ($result->fetch_all() as $user) { // loop through each user
        $ret[] = [$user[0], $user[1]]; // extract the uid and uname to a return array
    }

    return $ret; // return the list of uids and unames
}
