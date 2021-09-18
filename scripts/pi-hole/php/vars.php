<?php
/*   Pi-hole: A black hole for Internet advertisements
*    (c) 2017 Pi-hole, LLC (https://pi-hole.net)
*    Network-wide ad blocking via your own hardware.
*
*    This file is copyright under the latest version of the EUPL.
*    Please see LICENSE file for your rights under this license */

$os = php_uname('s');
if ($os === 'FreeBSD') {
    $piholeDir = '/usr/local/etc/pihole';
} else {
    $piholeDir = '/etc/pihole';    
}
