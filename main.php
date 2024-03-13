<?php

require '/vendor/autoload.php';

use PhpParser\Error;
use PhpParser\NodeDumper;
use PhpParser\ParserFactory;

$code = file_get_contents('example.php');

$parser = (new ParserFactory())->createForNewestSupportedVersion();


try {
    $ast = $parser->parse($code);
} catch (Error $error) {
    echo "Parse error: {$error->getMessage()}\n";
    return;
}

$dumper = new NodeDumper(['dumpPositions' => true]);
echo $dumper->dump($ast, $code) . "\n";

?>