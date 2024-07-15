<?php

$name = "Abolarinwa";

echo "Welcome to your Dashboard, $name";

echo "<br />";


$GLOBALS['moniker'] = "Abatoms";

echo "Welcome to your Dashboard, $moniker";

echo "<br />";


function welcomeUser()
{
    global $name;
    echo "Welcome to your Dashboard, $name";
}


welcomeUser();
