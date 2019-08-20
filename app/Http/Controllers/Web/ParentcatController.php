<?php

namespace Vanguard\Http\Controllers\Web;
use DB;
use Illuminate\Http\Request;
use Vanguard\Http\Requests\Question\CreateParentcatRequest;
use Vanguard\Http\Requests\Question\CreateChoiceRequest;
use Vanguard\Http\Controllers\Controller;
use Vanguard\Models\Questions;
use Vanguard\Models\Categories;
use Vanguard\Models\ParentCategory;
use Vanguard\Models\Choices;
use Vanguard\Repositories\Questions\QuestionsRepository;

class ParentcatController extends Controller
{

    private $questions;
    public function index()
    {
        $parentCategory =  ParentCategory::all();
        return view('parentcat.index', compact('parentCategory'));
    }
    public function create()
    {
        return view('parentcat.add');
    }
    public function store(CreateParentcatRequest $request)
    {
        $data = $request->all();
        ParentCategory::create($data);
        return redirect()->route('parentcat')
        ->withSuccess(trans('app.parentcat_created'));
    }
    public function edit($id){
        $categories = ParentCategory::find($id);
        return view('parentcat.edit', compact('categories'));
    }
    public function storeedit(CreateParentcatRequest $request){
        $task = ParentCategory::find($request->parentcatid);
        $task->name = $request['name'];
        $task->save();
        return redirect()->route('parentcat')
        ->withSuccess(trans('app.parentcat_updated'));
    }
    public function delete($id){
       
        $user = ParentCategory::find($id);    
        $user->delete();
        return redirect()->route('parentcat')
            ->withSuccess(trans('app.parentcat_deleted'));
        
    }

}