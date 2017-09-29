<?php
require __DIR__.'/vendor/autoload.php';

use \PHPBenchmark\testing\FunctionComparison;

function xrange($start, $limit, $step = 1) {
    if ($start < $limit) {
        if ($step <= 0) {
            throw new LogicException('Step must be +ve');
        }

        for ($i = $start; $i <= $limit; $i += $step) {
            yield $i;
        }
    } else {
        if ($step >= 0) {
            throw new LogicException('Step must be -ve');
        }

        for ($i = $start; $i >= $limit; $i += $step) {
            yield $i;
        }
    }
}

FunctionComparison::load()
    ->addFunction('using array', function () {
        foreach (range(1, 9, 2) as $number) {}
    })
    ->addFunction('using generator', function () {
        foreach (xrange(1, 9, 2) as $number) {}
    })
    ->exec();