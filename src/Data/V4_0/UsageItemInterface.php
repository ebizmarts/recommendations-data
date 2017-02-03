<?php

namespace Ebizmarts\Recommendations\Data\V4_0;

interface UsageItemInterface
{
    const USER_ID = 'UserId';
    const ITEM_ID = 'ItemId';
    const TIME    = 'Time';
    const EVENT   = 'Event';

    /**
     * Unique identifier of a user.
     * [A-z], [a-z], [0-9], [_] (Underscore), [-] (Dash) Max length: 255
     * @param string $userId
     * @return void
     */
    public function setUserId($userId);

    /**
     * Unique identifier of a user.
     * @return string
     */
    public function getUserId();

    /**
     * Unique identifier of an item.
     * [A-z], [a-z], [0-9], [_] (Underscore), [-] (Dash) Max length: 50
     * @param string $itemId
     * @return void
     */
    public function setItemId($itemId);

    /**
     * Unique identifier of an item.
     * @return string
     */
    public function getItemId();

    /**
     * Transaction time.
     * Date in format: YYYY-MM-DDTHH:MM:SS (e.g. 2013-06-20T10:00:00)
     * @param string $time
     * @return void
     */
    public function setTime($time);

    /**
     * Transaction time.
     * Date in format: YYYY-MM-DDTHH:MM:SS (e.g. 2013-06-20T10:00:00)
     * @return string
     */
    public function getTime();

    /**
     * The type of transaction.
     * One of the following:
     * - Click
     * - RecommendationClick
     * - AddShopCart
     * - RemoveShopCart
     * - Purchase
     * @param string $event
     * @return void
     */
    public function setEvent($event);

    /**
     * The type of transaction.
     * One of the following:
     * - Click
     * - RecommendationClick
     * - AddShopCart
     * - RemoveShopCart
     * - Purchase
     * @return string
     */
    public function getEvent();
}
