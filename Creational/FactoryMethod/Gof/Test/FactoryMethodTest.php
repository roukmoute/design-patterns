<?php
declare(strict_types=1);

namespace Roukmoute\DesignPatterns\Creational\FactoryMethod\Gof\Test;

use PHPUnit\Framework\TestCase;
use Roukmoute\DesignPatterns\Creational\FactoryMethod\Gof\Document;
use Roukmoute\DesignPatterns\Creational\FactoryMethod\Gof\EditorApplication;
use Roukmoute\DesignPatterns\Creational\FactoryMethod\Gof\SpreadsheetApplication;

class FactoryMethodTest extends TestCase
{
    public function testSpreadsheetApplicationFactoryMethod()
    {
        $application = new SpreadsheetApplication();
        $document = $application->document();

        $this->assertInstanceOf(Document::class, $document);
    }

    public function testEditorApplicationFactoryMethod()
    {
        $application = new EditorApplication();
        $document = $application->document();

        $this->assertInstanceOf(Document::class, $document);
    }
}
