<?php
function parseEnv($path)
{
    $contents = file_get_contents($path);
    $lines = explode("\n", $contents);

    $env = [];

    foreach ($lines as $line) {
        $line = trim($line);
        if ($line && strpos($line, '=') !== false && strpos($line, '#') !== 0) {
            list($key, $value) = explode('=', $line, 2);
            $env[$key] = $value;
        }
    }

    return $env;
}
?>