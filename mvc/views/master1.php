<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://localhost/admin/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="./public/css/main.css" rel="stylesheet" type="text/css" />
    <script src="./public/js/jquery.js"></script>
</head>
<body>
    
<div id="header">Header</div>
<div id="content">
    <?php 
    require_once "./mvc/views/pages/".$data["page"].".php"
    ?>
</div>
<div id="footer">
    Copyright @2019
</div>

</body>
</html>