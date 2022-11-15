<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\Cucharon;


class CucharonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cucharons=Cucharon::all();
        return view( "index",compact("cucharons"));
        //

    }
    public function pdf()
    {
        $cucharons=Cucharon::all();
        $pdf =PDF::loadView('pdf.listado1',compact('cucharons'));
        return $pdf->download('listado1.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile("entrada_cucharon")) {
            $file=$request->file("entrada_cucharon");
            $name=time().$file->getClientOriginalName();
            $file->move(public_path( )."/images/",$name);

            $cucharons = new Cucharon();
            $cucharons->numero=$request->input("numero");
            $cucharons->compania=$request->input("compania");
            $cucharons->caracteristicas=$request->input("caracteristicas");
            $cucharons->fecha_ingreso=$request->input("fecha_ingreso");
            $cucharons->procedimiento=$request->input("procedimiento");
            $cucharons->fecha_entrega=$request->input("fecha_entrega");

            $cucharons->entrada_cucharon=$name;
            $cucharons->save();
            return "Guardado";

    }
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
        $cucharons=Cucharon::find($id);
        return view('show',compact('cucharons'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cucharon $cucharons)
    {
        //return view('edit',compact('cucharons'));
        //
        $cucharons = Discount::find($id);
        return view("editcucharon",compact("cucharons"));
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
        $cucharons=Cucharon::find($id);
        if ($cucharons->delete($id))
        {
            return redirect("cucharon/");
            $data = Cuharon::FindOrFail($id);

            if(file_exists("images/".$data->entrada_cucharon) AND !empty($data->entrada_cucharon))
            {
            unlink("images/".$data->entrada_cucharon);
            }
                try{
                    $data->delete();
                    $bug = 0;
            }
            catch(\Exception $e){
                $bug = $e->errorInfo[1];
            }
            if($bug==0){
                echo "success";
            }else{
                echo "error";
            }

        }
        else return "El ".$id. "No se pudo borrar";
    }
}


