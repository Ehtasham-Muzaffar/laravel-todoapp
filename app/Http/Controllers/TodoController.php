<?php

namespace App\Http\Controllers;
use App\Models\Todolist;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function edit($id){
        $edits= TodoList::find($id);
        return view("edit",['data'=>$edits]);
        
    }
    public function update(Request $request,$id){
        $update= TodoList::find($id);
        $update->Message=$request->name;
        $update->save();
        return redirect('/');
        
    }
    public function index(){
        $todos = Todolist::all();

        // dd($todos);
        return View("index",['data'=>$todos]);
    }
    public function del($id){
        $delete = Todolist::find($id);
        $delete->delete();
         
        return redirect()->back();
    }
    public function submit(Request $request){
        $todolist = new Todolist;
        $todolist->Message = $request->name;
        // dd($request->name);
        $todolist->save();
        return redirect()->back();
    }
    //
}
