<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Mockery\Matcher\Not;
use Phan\Output\ColorScheme\Vim;
use PhpParser\Node\Stmt\Nop;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    // public function index($id=10) // Si la variable puede no existie, debe de darse un valor prederminado
    // {
    //     return view('note.index', compact('id'));
    // }

    /*
    NOTE:
    C -> Create
    R -> Read
    U -> Update
    D -> Delete
    */

    // NOTE: Desde Laravel 10 se pueden poner los tipos de datos que regresan ESTO ES BUENO!!!
    public function index(): View
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create(): View
    {
        return view('note.create');
    }

    // WARNING: Se pone una request personalizada!!
    public function store(NoteRequest $request): RedirectResponse
    {
        // $note = new Note;
        // $note->title = $request->title;
        // $note->description = $request->description;
        // $note->save(); // TEST: Guarda la nota en el sistema

        // NOTE: Lo mismo de arriba pero compacto
        // Note::create([
        //     'title' => $request->title,
        //     'description' => $request->description
        // ]);

        // NOTE: Antes de guardar los datos se deben de validar. Hay otra forma más 'correcta'
        // EL método validate permite valir que se cumplen las reglas que especificamos. Si no se
        // cumplen, la función se detiene y regresa un error.
        // $request->validate([
        //     'title' => 'required|max:255|min:3',
        //     'description' => 'rquired|max:255|min:3'
        // ]);
        // WARNING: Pra acerlo de mejor manera se crea un request, ejemplo: php artisan make:request NoteRequest.
        // ya que de esta manra es lo mejor, ya que se está modularizando.
        // Para ello se PONE COMO PARÁMETRO

        // NOTE: Lo mismo, pero si se RESPETARON todos los nombre iguales
        Note::create($request->all());

        return redirect()->route('note.index')->with('success', 'Note created'); // Manda al index y mensaje de exito(clave, mensje)
    }

    // Si es un objeto, id y se pone, ya n hay necesidad de poner más
    public function edit(Note $note): View
    {
        return view('note.edit', compact('note'));
    }

    /* Se pode Request porque es la petidión POST que se pasa a PUT, además se recibe el id */
    // WARNING: Se pone una request personalizada!!
    public function update(NoteRequest $request, Note $note): RedirectResponse
    {
        // NOTE: Antes de guardar los datos se deben de validar. Hay otra forma más 'correcta'
        // EL método validate permite valir que se cumplen las reglas que especificamos. Si no se
        // cumplen, la función se detiene y regresa un error.
        // $request->validate([
        //     'title' => 'required|max:255|min:3',
        //     'description' => 'rquired|max:255|min:3'
        // ]);

        // Los valores de la nota se actualizan con los de la peticion
        $note->update($request->all());
        return redirect()->route('note.index')->with('success', 'Note updated');
    }

    public function show(Note $note): View
    {
        return view('note.show', compact('note'));
    }

    // Por lo general de omite la petición en las eliminaciones...
    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route('note.index')->with('danger', 'Note deleted');
    }
}
