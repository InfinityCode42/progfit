<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoAulas;

class VideoAulasController extends Controller
{

    public readonly VideoAulas $videoAulas;

    public function __construct()
    {
        // $this->videoaulas = $videoaulas;
        $this->videoAulas = new VideoAulas();
    }


    public function index()
    {
        $videoaulas = $this->videoAulas->all();

        return view('videoAulas/listar', ['videoaulas' => $videoaulas]);
    }

    public function create()
    {
        return view('videoAulas/cadastrar');
    }

    public function store(Request $request)
    {


        $adicionar['nome_video']        = $request->input('nome_video');

        if($adicionar['nome_video'] == ''){
            $retorno = redirect()->back()->width('Erro', 'O nome do video não pode estar vazio!!!');
        }

        $adicionar['descricao_video']   = $request->input('descricao_video');
        $adicionar['link_video']        = $request->input('link_video');
        $adicionar['data_envio']        = date('Y-m-d');
        $adicionar['status']            = $request->input('status');

        $salvar = $this->videoAulas->create($adicionar);


        if ($salvar) {
            $retorno = redirect()->back()->with('Sucesso', 'Video aula cadastrada com sucesso');
        }else{
            $retorno = redirect()->back()->with('Erro', 'Erro ao cadastrar uma video aula');
            die();
        }
        $retorno = $this->index();

        return $retorno;
    }


    public function edit($videoAulas)
    {
        $videoAula = $this->videoAulas->find($videoAulas);
        // $this->pre($videoAula);

        return view("videoAulas/editar", ['videoAula' => $videoAula]);

    }

    public function update(Request $request, string $id)
    {
        $dadosAtualizados = $request->except("_token", "_method");

        $update = $this->videoAulas->where('id', $id)->update($dadosAtualizados);

        if ($update) {
            return redirect()->back()->with('Sucesso', 'Dados alterados com sucesso!');
        } else {
            return redirect()->back()->with('Erro', 'Erro ao realizar a alteração das informações!');
        }
    }

    public function destroy(VideoAulas $videoAula)
    {
        $deletar = $this->videoAulas->where('id', $videoAula->id)->delete();
        if ($deletar) {
            return $this->index();
        }
        return redirect()->back()->with('Erro', 'erro ao deletar a video aula!!!');
    }
    public function pre($dado){
        echo '<pre>';

        echo var_dump($dado, true);


        echo '</pre>';
        die();
    }
}
