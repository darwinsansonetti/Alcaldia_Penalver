<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use App\Models\Video;
use App\Models\Evento;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Galeria con Take solo para obtener 6 registros
        $galeria = Galeria::where('activo', 1)
                  ->orderBy('id', 'desc')
                  ->take(6)
                  ->get();

        //Obtiene los eventos para el index
        $eventos = Evento::where('activo', 1)
                    ->orderBy('id', 'desc')
                    ->take(10)
                    ->get();

        //Obtiene el video activo para el index
        $video = Video::where('activo', 1)->first();

        //Noticia con Take solo para obtener 6 registros
        $noticia = Noticia::where('activo', 1)
                  ->orderBy('id', 'desc')
                  ->take(6)
                  ->get();

        return view('index', ['galeria' => $galeria, 'eventos' => $eventos, 'video' => $video, 'noticia' => $noticia]);
    }

    public function show_new($id)
    {
        //Noticia a mostrar
        $noticia = Noticia::findOrFail($id);

        //Otras noticias
        $noticias = Noticia::where('activo', 1)
                ->where('id', '!=', $id) // Excluir el ID recibido
                ->orderBy('id', 'desc')
                ->take(8)
                ->get();

        return view('noticia_detalle', ['noticia' => $noticia, 'noticias' => $noticias]);
    }

    public function show_alcalde()
    {
        // $_user = Auth::user();

        // $hipodromos = Hipodromo::where('activo', '=', 1)->get();

        return view('alcalde');
    }

    public function show_organigrama()
    {
        // $_user = Auth::user();

        // $hipodromos = Hipodromo::where('activo', '=', 1)->get();

        return view('organigrama');
    }

    public function show_mision()
    {
        // $_user = Auth::user();

        // $hipodromos = Hipodromo::where('activo', '=', 1)->get();

        return view('mision');
    }

    public function show_galeria()
    {
        $galeria = Galeria::where('activo', '=', 1)->orderBy('id', 'desc')->paginate(12);

        return view('galeria', ['galeria' => $galeria]);
    }

    public function show_contacto()
    {
        // $_user = Auth::user();

        // $hipodromos = Hipodromo::where('activo', '=', 1)->get();

        return view('contacto');
    }

    public function show_postulaciones()
    {
        // $_user = Auth::user();

        // $hipodromos = Hipodromo::where('activo', '=', 1)->get();

        return view('postulaciones');
    }

    public function show_login()
    {
        // $_user = Auth::user();

        // $hipodromos = Hipodromo::where('activo', '=', 1)->get();

        return view('login');
    }

    public function show_noticia()
    {
        // $_user = Auth::user();

        // $hipodromos = Hipodromo::where('activo', '=', 1)->get();

        return view('noticia');
    }

    public function galeria()
    {
        $galeria = Galeria::orderBy('id', 'desc')->paginate(10);
        return view('dashboard', ['galeria' => $galeria]);
    }

    public function eventos()
    {
        $eventos = Evento::orderBy('id', 'desc')->paginate(10);

        return view('eventos', ['eventos' => $eventos]);
    }

    public function noticias()
    {
        $noticias = Noticia::orderBy('id', 'desc')->paginate(10);

        return view('noticias', ['noticias' => $noticias]);
    }

    public function store_noticia(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('imagen')) {
            $nombreArchivo = time() . '.' . $request->imagen->extension();
            $request->imagen->storeAs('public/noticias', $nombreArchivo);

            //Guardar una nueva Noticia
            $new_noticia = new Noticia;
            $new_noticia->title = $request->titulo;
            $new_noticia->descripcion = $request->descripcion;
            $new_noticia->fecha = $request->fecha;
            $new_noticia->path_image = 'storage/noticias/' . $nombreArchivo;
            $new_noticia->activo = 1;
            $new_noticia->save();

            return response()->json(['success' => true, 'path' => 'storage/noticias/' . $nombreArchivo]);
        }

        return response()->json(['success' => false]);
    }

    public function store_evento(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('imagen')) {
            $nombreArchivo = time() . '.' . $request->imagen->extension();
            $request->imagen->storeAs('public/eventos', $nombreArchivo);

            //Guardar una nueva imagen en la Galeria
            $new_evento = new Evento;
            $new_evento->title = $request->titulo;
            $new_evento->path_image = 'storage/eventos/' . $nombreArchivo;
            $new_evento->activo = 1;
            $new_evento->save();

            return response()->json(['success' => true, 'path' => 'storage/eventos/' . $nombreArchivo]);
        }

        return response()->json(['success' => false]);
    }

    public function store_video(Request $request)
    {
        $request->validate([
            'titulo1' => 'required|string|max:255',
            'url1' => 'required|string|max:255',
            // 'descripcion1' => 'required|string|max:255',
        ]);

        //Actualizo todos los videos a Activo = 0
        DB::table('video')->update(['activo' => 0]);
        // return response()->json(['success' => true, 'path' => 'Imagen']);

        //Guardar un Video
        $new_video = new Video;
        $new_video->title = $request->titulo1;
        $new_video->path_video = $request->url1;
        $new_video->descripcion = $request->descripcion1;        
        $new_video->activo = 1;
        $new_video->save();

        return response()->json(['success' => true, 'path' => 'Imagen']);
    }

    //Acticar o Desactivar Noticia
    public function active_noticia(int $noticia_id, int $opcion){

        $noticia_consultado = Noticia::Where('id', '=', $noticia_id)->first();
        $noticia_consultado->activo = $opcion;
        $noticia_consultado->save();

        return back();
    }

    //Acticar o Desactivar Eventos
    public function active_evento(int $evento_id, int $opcion){

        $evento_consultado = Evento::Where('id', '=', $evento_id)->first();
        $evento_consultado->activo = $opcion;
        $evento_consultado->save();

        return back();
    }

    //Acticar o Desactivar Galeria
    public function active_galeria(int $galeria_id, int $opcion){

        $galeria_consultado = Galeria::Where('id', '=', $galeria_id)->first();
        $galeria_consultado->activo = $opcion;
        $galeria_consultado->save();

        return back();
    }

    public function store_galeria(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('imagen')) {
            $nombreArchivo = time() . '.' . $request->imagen->extension();
            $request->imagen->storeAs('public/galeria', $nombreArchivo);

            //Guardar una nueva imagen en la Galeria
            $new_galeria = new Galeria;
            $new_galeria->title = $request->titulo;
            $new_galeria->path_image = 'storage/galeria/' . $nombreArchivo;
            $new_galeria->activo = 1;
            $new_galeria->save();

            return response()->json(['success' => true, 'path' => 'storage/galeria/' . $nombreArchivo]);
        }

        return response()->json(['success' => false]);
    }

    public function galeria_toggle($id)
    {
        dd($id);
        // $galeria = Galeria::findOrFail($id);
        // $galeria->activo = !$galeria->activo; // Cambia el estado (1 a 0 y viceversa)
        // $galeria->save();

        // return redirect()->back()->with('success', 'Estado actualizado correctamente.');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
