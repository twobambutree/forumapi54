<?php

namespace App\Http\Controllers\Forum;

use App\Models\Topic;
use App\Models\Section;
use App\Transformers\TopicTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Forum\CreateTopicFormRequest;

class TopicController extends Controller
{
	public function index(Section $section)
	{
		dd('index');
	}
	
	public function show(Topic $topic)
	{
		dd('Show');
	}
	
	public function store(CreateTopicFormRequest $request)
	{
		$topic = $request->user()->topics()->create([
			'title' => $request->json('title'),
			'slug'  => str_slug($request->json('title')),
			'body'  => $request->json('body'),
			'section_id' => $request->json('section_id'),
		]);
		
		return fractal()
			->item($topic)
			->includeUser()
			->transformWith(new TopicTransformer)
			->toArray();
	}
}
