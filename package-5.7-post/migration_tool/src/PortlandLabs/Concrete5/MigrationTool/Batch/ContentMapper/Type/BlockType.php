<?php

namespace PortlandLabs\Concrete5\MigrationTool\Batch\ContentMapper\Type;

use PortlandLabs\Concrete5\MigrationTool\Batch\ContentMapper\Item\Item;
use PortlandLabs\Concrete5\MigrationTool\Batch\ContentMapper\Item\ItemInterface;
use PortlandLabs\Concrete5\MigrationTool\Batch\ContentMapper\MapperInterface;
use PortlandLabs\Concrete5\MigrationTool\Entity\ContentMapper\TargetItem;
use PortlandLabs\Concrete5\MigrationTool\Entity\Import\Batch;

defined('C5_EXECUTE') or die("Access Denied.");

class BlockType implements MapperInterface
{

    public function getMappedItemPluralName()
    {
        return t('Block Types');
    }

    public function getHandle()
    {
        return 'block_type';
    }

    public function getItems(Batch $batch)
    {
        $types = array();
        foreach($batch->getPages() as $page) {
            foreach($page->getAreas() as $area) {
                foreach($area->getBlocks() as $block) {
                    if (!in_array($block->getType(), $types)) {
                        $types[] = $block->getType();
                    }
                }
            }
        }
        $items = array();
        foreach($types as $type) {
            $item = new Item();
            $item->setIdentifier($type);
            $items[] = $item;
        }
        return $items;
    }

    public function getMatchedTargetItem(ItemInterface $item)
    {
        $bt = \Concrete\Core\Block\BlockType\BlockType::getByHandle($item->getIdentifier());
        if (is_object($bt)) {
            $targetItem = new TargetItem($this);
            $targetItem->setItemId($bt->getBlockTypeID());
            $targetItem->setItemName($bt->getBlockTypeName());
            return $targetItem;
        }
    }

    public function getTargetItems(Batch $batch)
    {
        $types = \Concrete\Core\Block\BlockType\BlockTypeList::getInstalledList();
        usort($types, function($a, $b) {
            return strcasecmp($a->getBlockTypeName(), $b->getBlockTypeName());
        });
        $items = array();
        foreach($types as $type) {
            $item = new TargetItem($this);
            $item->setItemId($type->getBlockTypeID());
            $item->setItemName($type->getBlockTypeName());
            $items[] = $item;
        }
        return $items;
    }
}