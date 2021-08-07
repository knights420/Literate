<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Support\Facades\Storage;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subject.list',[
            'subjects' => Subject::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = $this->validator();
        request('image')->store('public/admin/subject/');
        $data['image'] = request('image')->hashname();
        Subject::create($data);
        return redirect('subjects')->with('success','Record created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        return view('subject.show',compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        return view('subject.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Subject $subject)
    {
        $data = $this->validator();
        if (request('image')) {
            Storage::delete('public/admin/subject/'.$subject->image);
            request('image')->store('public/admin/subject/');
            $data['image'] = request('image')->hashName();
            
        }else{
           $data['image'] = $subject->image;
        }        
        $subject->update($data);
        return redirect('subjects')->with('success','Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect('subjects')->with('success','Record deleted successfully');
    }
    public function validator()
    {
        return request()->validate([
            'name' => 'required|string',
            'description' => 'required|max:250',
            'image' => request()->route()->getName() == 'subjects.update' ? 'nullable|image'  : 'required|image'
        ]);
    }
}