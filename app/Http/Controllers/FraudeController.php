<?php

namespace App\Http\Controllers;

use App\Models\Fraude;
use App\Models\Student;
use Illuminate\Http\Request;

class FraudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fraudes = Fraude::all();
        $students = Student::all();
        return view('fraudes.index')->with([
            'fraudes' => $fraudes,
            'students' => $students

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = array(); 
        return view('fraudes.create',['result'=> $result]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'reference' => 'required',
            'type' => 'required',
            'matiere' => 'required',
            'date' => 'required',
            'lieu' => 'required',
            'heure' => 'required',
            'surveillant' => 'required',

            
            
        ]);
        $data = $request->except(['_token']);
        $directory=Fraude::makeDirectory();
        $data['image']=$request->image->store($directory);
        Fraude::create($data);
        return redirect()->route("fraudes.index")->with([
            "success" => "pv added successfully"
        ]);
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
        $fraude = Fraude::where('id', $id)->first();
        return view("fraudes.show")->with([
            "fraude" => $fraude
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $fraude = Fraude::where('id', $id)->first();
        return view("fraudes.edit")->with([
            "fraude" => $fraude
        ]);
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
        //
        $fraude = Fraude::where('id', $id)->first();
        $this->validate($request, [
            'reference' => 'required',
            'type' => 'required',
            'matiere' => 'required',
            'date' => 'required',
            'lieu' => 'required',
            'heure' => 'required',
            'surveillant' => 'required',
            
        ]);
        $data = $request->except(['_token', '_method']);
        $fraude->update($data);
        return redirect()->route("fraudes.index")->with([
            "success" => "pv updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $fraude = Fraude::where('id', $id)->first();
        $fraude->delete();
        return redirect()->route("fraudes.index")->with([
            "success" => "pv deleted successfully"
        ]);
        
    }

    public function getWorkCertificate($id)
    {
        $fraude = Fraude::where('id', $id)->first();
        return view("employes.certificate")->with([
            "employe" => $fraude
        ]);
    }

    public function vacationRequest($id)
    {
        $fraude = Fraude::where('id', $id)->first();
        return view("employes.vacation")->with([
            "employe" => $fraude
        ]);
    }

    public function etudiantSearchView() {
        return view("fraudes.studentsearch"); 
    }

    public function etudiantSearchPost(Request $request) {
       if(isset($request->apogee)) {
          $result = Student::where('apogee', $request->apogee)->get(); 
          return view('fraudes.create',['result'=> $result]); 
       }
       if(isset($request->cin)) {
        $result = Student::where('cin', $request->cin)->get(); 
        return view('fraudes.create',['result'=> $result]); 
     }
     if(isset($request->cne)) {
        $result = Student::where('cne', $request->cne)->get(); 
        return view('fraudes.create',['result'=> $result]); 
     }

    }
    public function download($id)
    {
       
        $fraude = Fraude::where('id', $id)->first(); 

        return view('fraudes.download',['fraude'=> $fraude]); 
    }
    
}
