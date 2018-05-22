<?php

namespace App\Http\Controllers;

use App\Acm\Transformer\TagTransformers;
use App\lesson;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends ApiController
{
    protected $tagtransformer;

    /**
     * TagController constructor.
     * @param $tagtransformer
     */
    public function __construct(TagTransformers $tagtransformer)
    {
        $this->tagtransformer = $tagtransformer;
    }

    /**
     * @param null $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($id = null)
    {
        $tags = $this->getTags($id);
        return $this->respond([
            'data' => $this->tagtransformer->transformCollection($tags->toArray())
        ]);
    }

    public function show()
    {

    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    private function getTags($id)
    {
        $tags = $id ? Lesson::findOrFail($id)->tags : Tag::all();
        return $tags;
    }
}
