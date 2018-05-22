<?php

namespace App\Http\Controllers;

use App\Acm\Transformer\LessonTransformers;
use App\Lesson;
use Dotenv\Validator;
use Illuminate\Http\Request;

class LessonController extends ApiController
{

    protected $lessonTransformer;

    /**
     * LessonController constructor.
     * @param $lessonTransformer
     */
    public function __construct(LessonTransformers $lessonTransformer)
    {
        $this->lessonTransformer = $lessonTransformer;
        $this->middleware('auth.basic')->only('store');
    }


    public function index()
    {
        $lessons = Lesson::all();
        return $this->respond([
            'data' => $this->lessonTransformer->transformCollection($lessons->all())
        ]);
    }


    public function show($id)
    {
        $lesson = Lesson::find($id);
        if (!$lesson) {
            return $this->respondNotFound('Lesson does not exists');
        }
        return $this->respond([
            'data' => $this->lessonTransformer->transform($lesson)
        ]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function store()
    {
        if (!request()->input('title') or !request()->input('body'))
            return $this->respondValidationFail();

        Lesson::create(request()->all());

        return $this->respondCreated('Lesson Updated Successfully');
    }


}
