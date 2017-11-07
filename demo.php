<?php

require 'vendor/autoload.php';

use Alidayu\TopClient;
use Alidayu\AlibabaAliqinFcSmsNumSendRequest;

$c = new TopClient;

$c->appkey = '';
$c->secretKey = '';
$req = new AlibabaAliqinFcSmsNumSendRequest;
$req->setExtend();
$req->setSmsType("normal");
$req->setSmsFreeSignName("短信签名");
$req->setSmsParam("{\"name\":\"1234\"}");
$req->setRecNum("12345678901");
$req->setSmsTemplateCode("短信模板id");
$resp = $c->execute($req);
var_dump($resp);

?>