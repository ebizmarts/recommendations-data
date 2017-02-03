<?php

namespace Ebizmarts\Recommendations\Data\V4_0;

interface CatalogItemInterface
{
    const ID            = 'ItemId';
    const NAME          = 'ItemName';
    const CATEGORY      = 'ItemCategory';
    const DESCRIPTION   = 'Description';
    const FEATURES_LIST = 'FeaturesList';

    /**
     * Unique identifier of an item.
     * [A-z], [a-z], [0-9], [_] (Underscore), [-] (Dash) Max length: 50
     * @param $id
     * @return void
     */
    public function setId($id);

    /**
     * Unique identifier of an item.
     * @return string
     */
    public function getId();

    /**
     * Item name.
     * Any alphanumeric characters Max length: 255
     * @param $name
     * @return void
     */
    public function setName($name);

    /**
     * Item name.
     * @return string
     */
    public function getName();

    /**
     * Category to which this item belongs (e.g. Cooking Books, Drama...); can be empty.
     * Any alphanumeric characters Max length: 255
     * @param $category
     * @return void
     */
    public function setCategory($category);

    /**
     * Category to which this item belongs (e.g. Cooking Books, Drama...); can be empty.
     * @return string
     */
    public function getCategory();

    /**
     * Description of this item.
     * Any alphanumeric characters Max length: 4000
     * @param $description
     * @return void
     */
    public function setDescription($description);

    /**
     * Description of this item.
     * @return string
     */
    public function getDescription();

    /**
     * Comma-separated list of feature-name=feature-value that can be used to enhance model recommendation.
     * Feature names max length: 255
     * Feature-value max length: 255
     * Feature values should be categorical.
     * Any alphanumeric characters Max length: 4000
     * @param $features
     * @return void
     */
    public function setFeaturesList($features);

    /**
     * Comma-separated list of feature-name=feature-value that can be used to enhance model recommendation.
     * Feature names max length: 255
     * Feature-value max length: 255
     * Feature values should be categorical.
     * @return string
     */
    public function getFeaturesList();
}
