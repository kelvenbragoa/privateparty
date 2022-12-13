<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        App::setLocale(auth()->user()->lang);
        $guests = Guest::orderBy('id','desc')->get();
        return view('organization.guest.index',compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('organization.guest.create');
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
        App::setLocale(auth()->user()->lang);
        $data = $request->all();
        $guest = Guest::all();
        $string = substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(3/strlen($x)) )),1,3);
        $ref = 'PV'.$guest->count().$string;

        Guest::create([
            'name'=> $data['name'],
            'mobile'=> $data['mobile'],
            'gender_id'=> $data['gender_id'],
            'code'=> $ref,
            'is_confirmed'=> 0,

        ]);

        return redirect()->route('guest.index')->with('messageSuccess', 'Convidado criado com sucesso');
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
        App::setLocale(auth()->user()->lang);

        $guest = Guest::find($id);
        return view('organization.guest.show',compact('guest'));
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
        App::setLocale(auth()->user()->lang);
        $guest = Guest::find($id);
        return view('organization.guest.edit',compact('guest'));
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
        App::setLocale(auth()->user()->lang);

        $data = $request->all();
        $guest = Guest::find($id);

        $guest->update($data);
        return redirect()->route('guest.index')->with('messageSuccess', 'Convidado editado com sucesso');
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
        App::setLocale(auth()->user()->lang);
        $guest = Guest::find($id);
        $guest->delete();
        return redirect()->route('guest.index')->with('messageSuccess', 'Convidado apagado com sucesso');
    }
}
