<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy;


/**
 * Class AlgorithmTwo
 * @package DesignPatterns\Behavioral\Strategy
 */
class AlgorithmTwo implements AlgorithmInterface
{
    /**
     * @param $data
     * @return int
     */
    public function implement($data): int
    {
        return array_sum($data);
    }
}
