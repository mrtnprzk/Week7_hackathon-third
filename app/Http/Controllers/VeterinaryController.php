<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Animal;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VeterinaryController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function search()
    {


        return view('search');
    }

    public function list(Request $request)
    {
        $results = DB::table('owners')
        ->where('surname', 'like', $request->input('search') .'%')
        ->orderBy('surname', 'ASC')
        ->get();

        return view('list', compact('results'));
    }

    public function details($id)
    {

        // $details = DB::table('animals')
        // ->find($id);

        //  $details = Animals::where('owner_id', $id)
        //  ->get();

        $details = Owner::findOrFail($id);

//  dd($details->animal);

// $details = Owners::where('id', $id)->get();

        return view('detail', compact('details'));

    }
    public function store(Request $request)
    {
        $customer = new Owner();
        $customer->first_name = $request->input('first_name');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->surname = $request->input('surname');
        $customer->save();



        return redirect()->action('App\Http\Controllers\VeterinaryController@details', ['id' => $customer->id]);

    }

    public function edit($id)
    {
        $details = Owner::find($id);
        return view('editForm', compact('details'));


    }



    public function update( Request $request, $id)
    {
        $customer = Owner::find($id);
        $customer->first_name = $request->input('first_name');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->surname = $request->input('surname');
        $customer->update();

        return redirect()->action('App\Http\Controllers\VeterinaryController@details', ['id' => $customer->id]);
    }

    public function delete($id)
    {

        $details = Owner::findOrFail($id);
        $details->delete();

        return redirect()->action('App\Http\Controllers\VeterinaryController@search');
    }
} 
