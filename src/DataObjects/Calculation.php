<?php

namespace Kdabrow\StrategyContract\DataObjects;

class Calculation
{
    public function __construct(
        public readonly array $indicators = [],
        public readonly array $otherData = [],
    ) {
    }
}