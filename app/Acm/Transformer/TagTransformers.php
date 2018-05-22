<?php
/**
 * Created by PhpStorm.
 * User: anuj
 * Date: 5/21/18
 * Time: 3:19 PM
 */

namespace App\Acm\Transformer;


class TagTransformers extends Transformers
{
    public function transform($tag)
    {
        return [
            'name' => $tag['name'],
        ];
    }
}