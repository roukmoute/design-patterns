<?php
declare(strict_types=1);

namespace Roukmoute\DesignPatterns\Creational\FactoryMethod\Gof;

class EditorApplication extends Application
{
    protected function createDocument(): Document
    {
        return new EditorDocument();
    }
}
