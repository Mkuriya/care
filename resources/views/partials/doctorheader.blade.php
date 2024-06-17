<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>

    .container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    .messages {
        padding: 20px;
        overflow-y: scroll;
        height: 300px;
    }
    .message {
        margin-bottom: 15px;
        padding: 10px;
        border-radius: 5px;
        background-color: #f2f2f2;
    }
    .user-message {
        text-align: right;
        background-color: #dcf8c6;
    }
    .bot-message {
        text-align: left;
        background-color: #c2f2f2;
    }
    .message img {
        max-width: 100%;
        height: auto;
        margin-top: 5px;
        border-radius: 5px;
    }
    input[type="text"] {
        width: calc(100% - 75px);
        padding: 10px;
        margin: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    input[type="file"] {
        margin: 10px;
    }
    .button {
        padding: 10px 20px;
        margin: 10px;
        border-radius: 5px;
        border: none;
        background-color: #4caf50;
        color: #fff;
        cursor: pointer;
    }
</style>
</head>
<body class="bg-myColor-100 h-screen w-full">