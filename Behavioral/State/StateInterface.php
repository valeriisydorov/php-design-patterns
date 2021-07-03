<?php
declare(strict_types=1);

namespace DesignPatterns\Behavioral\State;


/**
 * Interface StateInterface
 * @package DesignPatterns\Behavioral\State
 */
interface StateInterface
{
    /**
     * @param Context $context
     */
    public function actionOne(Context $context): void;

    /**
     * @param Context $context
     */
    public function actionTwo(Context $context): void;
}
