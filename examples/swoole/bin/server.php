#!/usr/bin/env php
<?php declare(strict_types=1);

$http = new Swoole\Http\Server('0.0.0.0', 9501);
$http->on(
    Swoole\Constant::EVENT_REQUEST,
    function (Swoole\Http\Request $req, Swoole\Http\Response $res) {
        $res->end(<<<HTTP
        <h1>Swoole</h1>
        HTTP);
    }
);
$http->start();