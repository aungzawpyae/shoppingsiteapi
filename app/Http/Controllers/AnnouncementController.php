<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Announcement;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::latest()->paginate(5);
    
        return view('announcement.index',compact('announcements'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcement.create')->with('users',User::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            // 'creater_id'=>'required',
            
        ]);
        // dd($request);
        $data = [
            'name'=>$request->name,
            'desc'=>$request->desc,
            'is_new'=>true,
            'creater_id'=>$request->creater_id,
        ];

        // dd($data);
        Announcement::create($data);
        return redirect()->route('announcement.index')->with('success', 'Annoucement Created!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $announcement = Announcement::find($id);
        return view('announcement.edit')->with('announcement', $announcement)
                                        ->with('users',User::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $announcement = Announcement::find($id);

        $request->validate([
            'name' => 'nullable|required',
            'desc' => 'nullable|required',
            'creater_id' => 'nullable|required',
            
        ]);
        // dd($request);
        $data = [
            'name'=>$request->name,
            'desc'=>$request->desc,
            'is_new'=>true,
            'creater_id'=>$request->creater_id,
        ];

        // dd($data);
        $announcement->update($data);
        return redirect()->route('announcement.index')
                      ->with('success', 'Announcement Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $announcement = Announcement::find($id);
        $announcement->delete();

        return redirect()->route('announcement.index')
                      ->with('success', 'Announcement Deleted Successfully!');

    }
}
