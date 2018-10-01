<?php
    $protocol = wp_get_server_protocol();
    header("$protocol 503 Service Unavailable", true, 503);
    header('Content-Type: text/html; charset=utf-8');
    header('Retry-After: 600');
?>
<!DOCTYPE html>
<html>
<head>
    <title>ASAW</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 300;
            font-family: 'Lato';
            font-size: 20px;
            color: #000;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
            margin-bottom: 30px;
            font-weight: 100;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Back in a minute or two...</div>
        <p>
            Our website is briefly offline while we perform maintenance.
        </p>
    </div>
</div>
</body>
</html>
