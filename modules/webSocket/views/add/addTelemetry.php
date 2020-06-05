<?php

use app\modules\webSocket\assets\TelemetryAsset;

TelemetryAsset::register($this);
//$this->registerJsFile('../modules/webSocket/assets/list.js');
$this->title = 'Add new Telemetry';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Broadcast Example</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-size: 14px;
            font-family: sans-serif;
            display: flex;
            height: 100vh;
            flex-direction: column;
            box-sizing: border-box;
            padding: 50px;
        }

        input[type=text] {
            line-height: 34px;
            height: 34px;
            border: 2px solid #ccc;
            background: white;
            border-radius: 4px;
            padding: 0 10px;
        }

        input[type=text]:focus {
            border-color: #08e;
            outline: 0;
        }

        #messages {
            flex: 1 1 auto;
            list-style: none;
        }

        #messages > li {
            margin: 0 20px;
            padding: 20px;
            border-bottom: 1px solid #ccc;
        }

        #messages > li:last-child {
            border-bottom: 0;
        }

        #messages {
            list-style-type: none;
            display: block;
            padding-left: 0;
            width: 100%;
            margin: 30px auto;
        }

        #messages li {
            border-bottom: 1px solid #eee;
            margin-bottom: 5px;
            padding: 5px 0 5px 0;

        }

        .delayed {
            -webkit-animation: fadein 1000ms;
            -moz-animation: fadein 1000ms;
            -ms-animation: fadein 1000ms;
            -o-animation: fadein 1000ms;
            animation: fadein 1000ms;
        }

        /* http://stackoverflow.com/a/11681331/2373138 */
        @keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Firefox < 16 */
        @-moz-keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @-webkit-keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @-ms-keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @-o-keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<h1>Введите телеметрию</h1>
<input type="text" name="message">
<ul id="messages"></ul>
</body>
<script src=""></script>
</html>