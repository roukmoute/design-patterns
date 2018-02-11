<?php
declare(strict_types=1);

namespace Roukmoute\DesignPatterns\Creational\FactoryMethod\Gof;

class SpreadsheetApplication extends Application
{
    protected function createDocument(): Document
    {
        return new SpreadsheetDocument();
    }
}
