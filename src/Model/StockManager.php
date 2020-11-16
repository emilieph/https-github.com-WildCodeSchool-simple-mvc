<?php


namespace App\Model;


class StockManager extends AbstractManager
{
    public const TABLE = 'stock';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}