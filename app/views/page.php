<?php
return "

<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <title>$pageData->title</title>
  $pageData->css
  $pageData->embeddedCss
</head>
<body>
  $pageData->content
  $pageData->js
</body>
</html>

";
