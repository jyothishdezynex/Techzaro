<?php

namespace Aimeos\MShop\Customer\Item;

class Address extends \Aimeos\MShop\Common\Item\Address\Base
{
    public function getMiddleName()
    {
        return $this->get('middlename');
    }

    public function setMiddleName($value)
    {
        return $this->set('middlename', $value);
    }
}
