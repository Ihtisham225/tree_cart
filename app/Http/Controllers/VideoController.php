<?php

namespace App\Http\Controllers;

use App\Models\MCQ;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //this controller contains crud operations for videos model

    //list of all videos
    public function list()
    {
        return view('video.list', ['videos' => Video::all()]);
    }

    //form for creating new video
    public function add_video()
    {
        return view('video.add');
    }


    //Saving new video
    public function save_video(Request $request)
    {
        $video = new Video();
        $video->title = $request->title;

        //video
        if ($request->hasfile('video'))
        {
            $file = $request->video;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . 'video.' . $extension;
            $file->move('media/', $filename);
            
            $video->video = $filename;
        } 
        else 
        {
            $video->video = '';
        }

        if($video->save()){
            return redirect('/list_videos')->with('success', 'Video Saved Successfully!');
        }
        else{
            return redirect('/list_videos')->with('error', 'Video Not Saved!');
        }
    }


    //form for editing existing video
    public function edit_video($id)
    {
        return view('video.edit', ['video' => Video::find($id)]);
    }

    //updating video
    public function update_video(Request $request)
    {
        $video = Video::find($request->id);
        $video->title = $request->title;
        
        //video
        if ($request->hasfile('video'))
        {
            $file = $request->video;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . 'video.' . $extension;
            $file->move('media/', $filename);
            
            $video->video = $filename;
        }

        if($video->save()){
            return redirect('/list_videos')->with('success', 'Video Updated Successfully!');
        }
        else{
            return redirect('/list_videos')->with('error', 'Video Not Updated!');
        }
    }


    //showing video
    public function show_video($id)
    {
        $video = Video::find($id);
        return view('video.show', ['video' => $video]);
    }


    //deleting video
    public function delete_video($id)
    {
        $video = Video::find($id);

        if($video->delete()){
            return redirect('/list_videos')->with('success', 'Video Deleted Successfully!');
        }
        else{
            return redirect('/list_videos')->with('error', 'Video Not Deleted!');
        }
    }
}
