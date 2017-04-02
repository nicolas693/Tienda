<?php

namespace App\Http\Controllers\Prenda;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Prenda\Prenda;
use App\Prenda\Imagen;

class PrendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Prenda.index');
    }

    public function mostrar()
    {
        $prendas=Prenda::all();
        $imagen=Imagen::all();

        foreach ($imagen as $key => $ima) {
          $imagenes[$ima->imagen]=$ima->Prenda_id;

        }
        return view('Prenda.mostrar')->with('prendas',$prendas)->with('imagenes',$imagenes);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Prenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input=$request->all();
        $input['estado']=0;
        $file=$request->file('image');
        $filename='123';
        $date = date('Y-m-d-H-i-s').".png";

        if($file){

          Storage::disk('uploads')->put($date,File::get($file));
        }

        Prenda::create($input);
        $imagen['Prenda_id']=Prenda::max('prenda_id', 'desc');
        $imagen['imagen']=$date;
        Imagen::create($imagen);

        return view('Prenda.index');
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
        $file=Storage::disk('local')->get('nombre');
        dd($file);
        return view('Prenda.edit');
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
}
