<?php
namespace Aimeos\MShop\Customer\Item;

class Standard extends \Aimeos\MShop\Common\Item\Standard
{
    public function getMiddleName()
    {
        return $this->get( 'middlename' );
    }

    public function setMiddleName( string $value )
    {
        return $this->set( 'middlename', $value );
    }
}
