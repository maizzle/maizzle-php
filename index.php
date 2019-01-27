<html>
<head>
<title>Maizzle</title>
<style>
* {
    font-family: sans-serif;
}
body {
    margin: 100px;
}
</style>
</head>
<body>
<img src="maizzle.png" width="80">
<h1>Welcome to Maizzle!</h1>

<p>Preview your emails:</p>

<ul>
<?php
$list = scandir('source/emails');

foreach ($list as $item) {
    if (strpos($item, '.md') === false) {
        continue;
    }

    $name = str_replace('.blade', '', pathinfo($item, PATHINFO_FILENAME));

    $files = [
        'local' => "build_local/emails/{$name}.html",
        'staging' => "build_staging/emails/{$name}.html",
        'production' => "build_production/emails/{$name}.html",
    ];

    echo "<li>{$name}: ";

    foreach ($files as $env => $path) {
        if (! file_exists($path)) {
            echo "{$env}* ";
        } else {
            echo "<a href='{$env}/emails/{$name}.html'>{$env}</a> ";
        }
    }

    echo "</li>";
}
?>
</ul>
<small>* isn't compiled yet!</small>
</body>
</html>