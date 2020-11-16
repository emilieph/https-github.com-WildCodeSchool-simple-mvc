<?php


namespace App\Controller;


use App\Model\StockManager;

class StockController extends AbstractAPIController
{

    public function all()
    {
        $StockManager = new StockManager();
        $stock = $StockManager->selectAll();

            return json_encode($stock);
    }
}