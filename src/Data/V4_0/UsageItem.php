<?php

namespace Ebizmarts\Recommendations\Data\V4_0;

use Ebizmarts\Recommendations\Data\AbstractSimpleObject;

class UsageItem extends AbstractSimpleObject implements UsageItemInterface
{

    public function setUserId($userId)
    {
        $this->setData(self::USER_ID, $userId);
    }

    public function getUserId()
    {
        return $this->get(self::USER_ID);
    }

    public function setItemId($itemId)
    {
        $this->setData(self::ITEM_ID, $itemId);
    }

    public function getItemId()
    {
        return $this->get(self::ITEM_ID);
    }

    public function setTime($time)
    {
        $this->setData(self::ITEM_ID, $time);
    }

    public function getTime()
    {
        return $this->get(self::ITEM_ID);
    }

    public function setEvent($event)
    {
        $this->setData(self::EVENT, $event);
    }

    public function getEvent()
    {
        return $this->get(self::EVENT);
    }
}
