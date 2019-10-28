<?php

namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;

/**
 * StockManager behavior
 */
class StockManagerBehavior extends Behavior
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function stockIn()
    {
        debug('Vou inserir dados na tabela stock por aqui');
        exit;
    }
}
