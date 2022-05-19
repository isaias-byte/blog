<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //! Los nombres pueden ser cualquiera, ojo, no necesariamente index, create y show
    //*La página principal o ráiz
    public function index() {
        $cursos = Curso::paginate();

        // return $curso;

        return view('cursos.index', compact('cursos'));
    }
    //* La página donde se crea cualquier cosa, en este caso, cursos
    public function create() {
        return view('cursos.create');
    }

    public function store() {

    }

    //* La página donde se muestra cualquier cosa, en este caso, cursos
    public function show($id) {
        //* compact('curso') = ['curso' => $curso];
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }
}
