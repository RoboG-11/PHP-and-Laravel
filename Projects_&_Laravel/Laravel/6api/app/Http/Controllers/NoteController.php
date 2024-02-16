<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Requests\NoteRequest;
use Illuminate\Http\JsonResponse;
use Mockery\Matcher\Not;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $notes = Note::all();
        // NOTE: En el monolito se regresaba una vista, pero ahora se egresará la información,
        // de esta manera el sistema que esta consuminedo el backen se verá benefiiado...
        // NOTE: Se ocupará un formato de API Restfull -> formato de API mediante el cual 
        // nosotros hacemos la construcción de las peticiones al CRUD con Laravel (get, post...)
        // y SE REGRESARÁ LA DATA EN UN FORMATO JSON, para que el sistema la pueda consumir

        return response()->json($notes, 200);
        // NOTE: El 200 quiere decir que la petición se ha realizado con éxito.
        // Se podría pasar un tercer parámetro que indique cosas para la cabecera...
    }

    /**
     * Show the form for creating a new resource.
     * 
     * La petición ya va a llegar validada debido al NoteRequest
     */
    public function store(NoteRequest $request): JsonResponse
    {
        $note = Note::create($request->all());

        return response()->json([
            'success' => true,
            'data' => $note //WARNING: Cuando se crea un recurso, ese normalmente se regresa
        ], 201);
        // WARNING: El 201 indica que se creó un nuevo activo dentro del sistema de pertinencia
    }

    /**
     * Display the specified resource.
     */
    public function show($id): JsonResponse
    {
        $note = Note::find($id);
        return response()->json($note, 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(NoteRequest $request, $id): JsonResponse
    {
        $note = Note::find($id);
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();

        return response()->json([
            'success' => true,
            'data' => $note
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): JsonResponse
    {
        Note::find($id)->delete();

        return response()->json([
            'success' => true,
        ], 200);
    }
}


// -------------------------------------------- WARNING: MODIFICADO, AGUAS PA!
// class NoteController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index(): JsonResource // TEST: se modificó por lo que se regresa pa!!
//     {
//         // $notes = Note::all(); // TEST: SIRVE PA
//         // NOTE: En el monolito se regresaba una vista, pero ahora se egresará la información,
//         // de esta manera el sistema que esta consuminedo el backen se verá benefiiado...
//         // NOTE: Se ocupará un formato de API Restfull -> formato de API mediante el cual 
//         // nosotros hacemos la construcción de las peticiones al CRUD con Laravel (get, post...)
//         // y SE REGRESARÁ LA DATA EN UN FORMATO JSON, para que el sistema la pueda consumir

//         // return response()->json($notes, 200); // TEST: SIRVE PA
//         // NOTE: El 200 quiere decir que la petición se ha realizado con éxito.
//         // Se podría pasar un tercer parámetro que indique cosas para la cabecera...

//         // TEST: MODIFICANDO EL FORMATO DEL .JSON QUE SE REGRESA
//         return NoteResource::collection(Note::all());
//         // el collection es porque se está regresando una coleccsión!!!!
//     }

//     /**
//      * Show the form for creating a new resource.
//      * 
//      * La petición ya va a llegar validada debido al NoteRequest
//      */
//     public function store(NoteRequest $request): JsonResponse
//     {
//         $note = Note::create($request->all());

//         return response()->json([
//             'success' => true,
//             // 'data' => $note //WARNING: Cuando se crea un recurso, ese normalmente se regresa
//             'data' => new NoteResource($note)
//         ], 201);
//         // WARNING: El 201 indica que se creó un nuevo activo dentro del sistema de pertinencia
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show($id): JsonResource
//     {
//         $note = Note::find($id);
//         // return response()->json($note, 200);
//         return new NoteResource($note);
//     }


//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(NoteRequest $request, $id): JsonResponse
//     {
//         $note = Note::find($id);
//         $note->title = $request->title;
//         $note->content = $request->content;
//         $note->save();

//         return response()->json([
//             'success' => true,
//             // 'data' => $note
//             'data' => new NoteResource($note)
//         ], 200);
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy($id): JsonResponse
//     {
//         Note::find($id)->delete();

//         return response()->json([
//             'success' => true,
//         ], 200);
//     }
// }
