<?php

namespace App\Http\Controllers;
use DB;
use App\Sanction;

use Illuminate\Http\Request;

class SanctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // $employees=Employee::orderBy('branch_id', 'asc')->get();
         $sanction=DB::table('sanctionlist')->orderBy('FIRST_NAME', 'asc')->get();
          return view('sanction',['sanction'=>$sanction]);
        // $sanctions = sanctions::all();
        // return view('unsanction.index', compact('sanctions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
    }
     

    public function search($query){
       
        if($query==='all'){
            // $employees=Employee::all();
            $sanction=DB::table('sanctionlist')->get();//Employee::where('full_name','like',"%{$query}%").orWhere()
        }else{
            $sanction=DB::table('sanctionlist')
            ->where('FIRST_NAME','like',"%{$query}%")
            ->get();
            
            //Employee::where('full_name','like',"%{$query}%").orWhere()
           // ->get();
        }
       
        
        $response=array();
        $counter=1;
        foreach($sanction as $sanction){
            $response[$counter]['count']=$counter;
            $response[$counter]['FIRST_NAME']=$sanction->FIRST_NAME;
            // $response[$counter]['name']=$employee->full_name;
            // $response[$counter]['branch']=$employee->branch->branch_name;
            $response[$counter]['SECOND_NAME']=$sanction->SECOND_NAME;
            $response[$counter]['THIRD_NAME']=$sanction->THIRD_NAME;
            $counter++;
        }
        return json_encode(array_values($response));
    }

   


 
}
