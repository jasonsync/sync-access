<?php

$host_wan_ip = $_SERVER['REMOTE_ADDR'];
$json = file_get_contents('php://input');
$req_data = json_decode($json, true);

// manage request
$host = $req_data['host'];
$host['wan_ip'] = $host_wan_ip;

$res_data = array('status'=> 'ok','host'=>$host);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($res_data);
