<?php

$users = [
    ["id"=> 1, "name"=>"Biberovich", "password" => md5('123'), "full_name"=>"Kostas Biberovich"],
    ["id"=> 2, "name"=>"Slukas", "password" => md5('123'), "full_name"=>"Kosts Slukas"],
    ["id"=> 3, "name"=>"Vagelis", "password" => md5('123'), "full_name"=>"Kepure Dega"],
];

file_put_contents(__DIR__.'/users.json', json_encode($users));