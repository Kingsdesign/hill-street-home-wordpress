<?php

$content = file_get_contents('/sites/dev-hsh.kingsdesign.info/.spinupwp-pool.conf');
$lines = explode("\n", $content);

foreach ($lines as $line) {
    preg_match('/env\[(.*)\][\s]*=[\s]*(.*);/', $line, $matches);
    if (count($matches) > 2) {
        putenv(trim($matches[1]) . '=' . trim(trim($matches[2]), "'"));
    }
}
