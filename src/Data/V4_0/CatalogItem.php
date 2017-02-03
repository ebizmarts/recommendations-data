<?php

namespace Ebizmarts\Recommendations\Data\V4_0;

use Ebizmarts\Recommendations\Data\AbstractSimpleObject;

class CatalogItem extends AbstractSimpleObject implements CatalogItemInterface
{
    public function setId($id)
    {
        $this->setData(self::ID, $id);
    }

    public function getId()
    {
        return $this->get(self::ID);
    }

    public function setName($name)
    {
        $this->setData(self::NAME, $name);
    }

    public function getName()
    {
        return $this->get(self::NAME);
    }

    public function setCategory($category)
    {
        $this->setData(self::CATEGORY, $category);
    }

    public function getCategory()
    {
        return $this->get(self::CATEGORY);
    }

    public function setDescription($description)
    {
        $this->setData(self::DESCRIPTION, $description);
    }

    public function getDescription()
    {
        return $this->get(self::DESCRIPTION);
    }

    public function setFeaturesList($features)
    {
        $this->setData(self::FEATURES_LIST, $features);
    }

    public function getFeaturesList()
    {
        return $this->get(self::FEATURES_LIST);
    }
}
