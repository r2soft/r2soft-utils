<?php
if (!function_exists('debug')) {
    function debug($variavel, $stop = true)
    {
        echo "\r\n\r\n";
        $debug = debug_backtrace();
        $trace = array_shift($debug);
        $file = $trace['file'];
        $line = $trace['line'];
        echo $lineInfo = sprintf('%s (line %s) -> %s', $file, $line, tempo_execucao());

        echo "\r\n";
        print_r($variavel);
        if ($stop) {
            die();
        }
    }
}
function tempo_execucao()
{
    $inicio = $_SERVER['REQUEST_TIME'];
    $fim = microtime(true);
    $total = $fim - $inicio;
    return 'Tempo de Execução: ' . number_format($total, 5) . ' ms';
}
