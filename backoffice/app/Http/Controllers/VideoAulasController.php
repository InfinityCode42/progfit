<?php

namespace App\Http\Controllers;

use App\Models\VideoAulas;
use Illuminate\Http\Request;

class VideoAulasController extends Controller
{
    public readonly VideoAulas $videoaulas;


    public function __construct()
    {
        $this->videoaulas = new VideoAulas();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videoaulas = $this->videoaulas->all();

        return view('video_aulas/listar', ['videoaulas' => $videoaulas]);
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
    public function edit(VideoAulas $video)
    {
        $videoAula = $this->videoaulas->find($video);

        return view("video_aulas/editar", ['videoaulas' => $videoAula]);
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
