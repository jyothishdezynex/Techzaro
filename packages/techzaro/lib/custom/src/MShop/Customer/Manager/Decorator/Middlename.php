<?php

namespace Aimeos\MShop\Customer\Manager\Decorator;

use Aimeos\MShop\Common\Manager\Decorator\Base;

class Middlename extends Base
{
    public function save( \Aimeos\MShop\Common\Item\Standard $item, array $ref = [] ) : \Aimeos\MShop\Common\Item\Standard
    {
        // Save the 'middlename' field
        if( $item->has( 'middlename' ) ) {
            $item = $item->set( 'middlename', $item->get( 'middlename' ) );
        }

        return parent::save( $item, $ref );
    }

    public function find( $id, array $ref = [], bool $default = true ) : \Aimeos\MShop\Common\Item\Standard
    {
        $item = parent::find( $id, $ref, $default );
        // Field will be loaded automatically if it's in the item data
        return $item;
    }

    public function search( \Aimeos\MW\Criteria\Iface $filter, array $ref = [], array $params = [] ) : \Aimeos\MW\Criteria\Iface
    {
        return parent::search( $filter, $ref, $params );
    }

    public function create( array $values = [] ) : \Aimeos\MShop\Common\Item\Standard
    {
        $item = parent::create( $values );
        $item = $item->set( 'middlename', $values['middlename'] ?? '' );
        return $item;
    }
}
