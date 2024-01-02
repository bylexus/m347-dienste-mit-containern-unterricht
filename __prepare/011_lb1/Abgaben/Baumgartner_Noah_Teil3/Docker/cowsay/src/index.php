<?php
// simple script to fetch a chuck norris joke from a text api,
// and output it via cowsay.
// give the API URL as API_URL environment variable
// (e.g. API_URL=http://chuck-api:8080/)

$api_url = getenv("API_URL");
$msg = file_get_contents($api_url);

$output = [];
$res = exec("/usr/games/cowsay {$msg}", $output);

header('Content-Type: text/html');
if ($res) {
	$cow = join('<br>', array_map(fn($line) => htmlentities($line), $output));
	echo <<<EOT
<!DOCTYPE html>
<html>
<head>
	<title>Chuck Wisdom</title>
	<style>.output{font-family: monospace;white-space:pre;}</style>
</head>
<body>
<div class="output">
{$cow}
</div>
</body>
</html>
EOT;
} else {
	echo "Error\n";
}