<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Strategy;


/**
 * Class AlgorithmOne
 * @package DesignPatterns\Behavioral\Strategy
 */
class AlgorithmOne implements AlgorithmInterface
{
    /**
     * @param $data
     * @return int
     */
    public function implement($data): int
    {
        return array_product($data);
    }
}
