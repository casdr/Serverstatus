<?php

include('servers.php');

$s = $servers[$_GET['id']];

$fp = fsockopen($s[1], $s[2], $errno, $errstr, 2);

if($fp) {

    echo '<span class="label label-success">Online</span>';

} else {

    echo '<span class="label label-danger">Offline</span>';

}
