<?php

namespace PortlandLabs\Concrete5\MigrationTool\Entity\Import;

use Doctrine\Common\Collections\ArrayCollection;
use PortlandLabs\Concrete5\MigrationTool\Importer\ContentType\Formatter\ContentEditorSnippetFormatter;

/**
 * @Entity
 */
class ContentEditorSnippetObjectCollection extends ObjectCollection
{

    /**
     * @OneToMany(targetEntity="ContentEditorSnippet", mappedBy="collection", cascade={"persist", "remove"})
     **/
    public $snippets;

    public function __construct()
    {
        $this->snippets = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getSnippets()
    {
        return $this->snippets;
    }

    public function getFormatter()
    {
        return new ContentEditorSnippetFormatter($this);
    }

    public function getType()
    {
        return 'content_editor_snippet';
    }

    public function hasRecords()
    {
        return count($this->getSnippets());
    }

    public function getRecords()
    {
        return $this->getSnippets();
    }

    public function getTreeFormatter()
    {
        return false;
    }

    public function getRecordValidator()
    {
        return false;
    }





}
