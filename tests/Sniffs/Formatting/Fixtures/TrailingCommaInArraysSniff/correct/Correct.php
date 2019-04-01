<?php

declare(strict_types=1);

namespace BestIt\Sniffs\Formatting\Fixtures\TrailingCommaInArraysSniff;

class Correct
{
    public function __construct()
    {
        $testInline = ['foo', 'bar',];
        $testMultiline = [
            'foo',
            'bar',
        ];
    }

    public function call()
    {
        $testMultiline = [
            ['foo', 'bar',],
            'baz',
        ];

        $testInline = ['foo', 'bar', $testMultiline[1],$testMultiline[3] = 'knopf',];

        return $testMultiline[0];
    }
}