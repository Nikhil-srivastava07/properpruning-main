<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pruning_request;
use App\Models\Tool;
use App\Models\Zipcode;

class ToolController extends Controller
{
    public function form()
    {
        return view('index');

    }

    public function store(Request $request) 
    {
    
        $request->validate([
            'Full_name' => 'required',
            'Contact_phone' => 'required',
            'email' => 'required|email',
            'address_line_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' =>'required',
            'country' => 'required',
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
            'image' => 'required',
            'video_file_name' => 'required',
            'audio_file_name' => 'required',
          ]);

    $pruning_request = new Pruning_Request();
    $pruning_request->Full_name = $request->Full_name;
    $pruning_request->Contact_phone = $request->Contact_phone;
    $pruning_request->email = $request->email;
    $pruning_request->address_line_1 = $request->address_line_1;
    $pruning_request->address_line_2 = $request->address_line_2;
    $pruning_request->city = $request->city;
    $pruning_request->state = $request->state;
    $pruning_request->zip_code = $request->zip_code;
    $pruning_request->country = $request->country;
    $pruning_request->date = $request->date;
    $pruning_request->time = $request->time;
    $pruning_request->description = $request->description;
    $pruning_request->image = $request->image;
    $pruning_request->video_file_name = $request->video_file_name;
    $pruning_request->audio_file_name = $request->audio_file_name;
    

    if ($request->hasFile('image')) 
    {
        $pruning_request->image = $request->file('image')->store('pruning_requests');
    }

    if ($request->hasFile('video_file_name')) 
    {
        $pruning_request->video_file_name = $request->file('video_file_name')->store('pruning_requests');
    }

    if ($request->hasFile('audio_file_name')) 
    {
        $pruning_request->audio_file_name = $request->file('audio_file_name')->store('pruning_requests');
    }

    $pruning_request->save();

    return redirect('/pruning-request')->with('success', 'Pruning request has been created successfully.');
    }

    public function show() {
        $data = pruning_request::all();
        return view('list', ['pruningrequests' => $data]);
    }

    public function detail() {
        return view('tools.index');
    }

    public function add() {
        return view('tools.create');
    }

    public function save(Request $request) {
        $request->validate([
            'name' =>'required',
            'image' =>'required',
            'quantity' =>'required',
            'status' =>'required',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('tools'), $imageName);
        $tool = new Tool();
        $tool->image = $imageName;
        $tool->name = $request->name;
        $tool->quantity = $request->quantity;
        $tool->status = $request->status;
        $tool->save();
        return back()->withSuccess('Tool Added Successfully');      
    }

    public function code(){
        $zipcode = Zipcode::get();
        return view('zipcodes.index',['zipcode'=>$zipcode]);
    }

    public function addcode(){
        return view('zipcodes.create');
    }

    public function storecode(Request $request) {
        $request->validate([
            'zipcode' =>'required',
            'state' =>'required',
            'status' =>'required',
        ]);
        $zipcode = new Zipcode();
        $zipcode->zipcode = $request->zipcode;
        $zipcode->state = $request->state;
        $zipcode->status = $request->status;
        $zipcode->save();
        return back()->withSuccess('Zipcode Added Successfully');      
    }

    public function edit($id){
        $zipcode = Zipcode::where('id', $id)->first();
        return view('zipcodes.edit',['zipcode'=>$zipcode]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'zipcode' =>'required',
            'state' =>'required',
            'status' =>'required',
        ]);
        $zipcode = new Zipcode();
        $zipcode->zipcode = $request->zipcode;
        $zipcode->state = $request->state;
        $zipcode->status = $request->status;
        $zipcode->save();
        return back()->withSuccess('Zipcode Updated Successfully');
    }

        public function destroy($id){
        $zipcode = Zipcode::where('id', $id)->first();
        $zipcode->delete();
        return back ()->withSuccess('Zipcode deleted successfully');
    }
}
