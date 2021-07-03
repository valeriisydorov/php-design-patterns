<?php
declare(strict_types=1);


namespace DesignPatterns\Behavioral\State;


/**
 * Class StateOne
 * @package DesignPatterns\Behavioral\State
 */
class StateOne implements StateInterface
{
    /**
     * @param Context $context
     */
    public function actionOne(Context $context): void
    {
        echo "StateOne handles actionOne and \n";
        $context->switchTo(new StateTwo());
    }

    /**
     * @param Context $context
     */
    public function actionTwo(Context $context): void
    {
        echo "StateOne handles actionTwo.\n";
    }
}
