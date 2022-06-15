<?php

$ip = "127.0.0.1:161";
if (isset($_GET['contact']))
    snmp2_set(
        $ip,
        "public",
        ".1.3.6.1.2.1.1.4.0",
        "s",
        $_GET['contact']

    );
echo ("name is :");
echo (snmp2_get($ip, "public", ".1.3.6.1.2.1.1.5.0") . "\n");
echo ("description is:");
echo (snmp2_get($ip, "public", ".1.3.6.1.2.1.1.1.0") . "\n");
echo ("time_on is:");
echo (snmp2_get($ip, "public", ".1.3.6.1.2.1.1.3.0") . "\n");
echo ("OID is:");
echo (snmp2_get($ip, "public", ".1.3.6.1.2.1.1.2.0") . "\n");
echo ("contact is:");
echo (snmp2_get($ip, "public", ".1.3.6.1.2.1.1.4.0") . "\n");
