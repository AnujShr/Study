<?php
/**
 * Created by PhpStorm.
 * User: anuj
 * Date: 5/21/18
 * Time: 3:19 PM
 */

namespace App\Acm\Transformer;


abstract class Transformers
{
    public function transformCollection(array $items)
    {
        return array_map([$this, 'transform'], $items);
    }

    public abstract function transform($item);
}