<?php
/**
 * Created by PhpStorm.
 * User: anuj
 * Date: 5/21/18
 * Time: 3:19 PM
 */

namespace App\Acm\Transformer;


class LessonTransformers extends Transformers
{
    public function transform($lesson)
    {
        return [
            'title' => $lesson['title'],
            'body' => $lesson['body'],
            'active' => (boolean)$lesson['some_bool']
        ];
    }
}