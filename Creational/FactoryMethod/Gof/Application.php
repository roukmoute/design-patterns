<?php
declare(strict_types=1);

namespace Roukmoute\DesignPatterns\Creational\FactoryMethod\Gof;

abstract class Application
{
    /**
     * @var Document
     */
    private $document;

    public function __construct()
    {
        $this->setDocument($this->createDocument());
    }

    protected abstract function createDocument(): Document;

    public function setDocument(Document $document)
    {
        $this->document = $document;
    }

    public function document()
    {
        return $this->document;
    }
}
