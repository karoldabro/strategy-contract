<?php

namespace Kdabrow\StrategyContract;

use Illuminate\Support\Collection;
use Kdabrow\StrategyContract\DataObjects\Calculation;
use Kdabrow\ExchangeContract\DataObjects\Kline;

interface StrategyInterface
{
    /**
     * Performs all needed calculations: indicators, checks etc.
     *
     * @param Collection<int, Kline> $klines
     * @return Calculation Calculations for last kline
     */
    public function calculate(Collection $klines): Calculation;

    public function isBuyEntry(): bool;

    public function isBuyClose(): bool;

    public function isSellEntry(): bool;

    public function isSellClose(): bool;
}