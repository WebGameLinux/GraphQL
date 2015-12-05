<?php
/*
* This file is a part of GraphQL project.
*
* @author Alexandr Viniychuk <a@viniychuk.com>
* created: 12/5/15 12:18 AM
*/

namespace Youshido\GraphQL\Type\Config\Object;


use Youshido\GraphQL\Type\Config\Config;
use Youshido\GraphQL\Type\Config\Traits\FieldsAwareTrait;
use Youshido\GraphQL\Type\TypeMap;

class InterfaceTypeConfig extends Config
{
    use FieldsAwareTrait;

    public function getRules()
    {
        return [
            'name'        => ['type' => TypeMap::TYPE_STRING, 'required' => true],
            'fields'      => ['type' => TypeMap::TYPE_ARRAY_OF_FIELDS, 'required' => true],
            'description' => ['type' => TypeMap::TYPE_STRING],
            'resolveType' => ['type' => TypeMap::TYPE_FUNCTION]
        ];
    }

    protected function build()
    {
        $this->buildFields();
    }
}