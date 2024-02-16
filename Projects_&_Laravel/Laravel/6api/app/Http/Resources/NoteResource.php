<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

// WARNING: Si queremos agregar o añadir los datos antes de regresar de la API, por ejemplo
// añadir un campo donde hay información adición, ya que para ocultar se ocupa protected $hidden en la ruta
// Pero para añadir se ocupan los API Rsource, estos nos permiten establecer una capa intermedia entre
// cada uno de los modelos, para indicar CÓMO DEBE DE CONSTRUIR LOS DATOS QUE SE REGRESAN 

class NoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "title" => 'Title: ' . $this->title,
            "content" => $this->content,
            "example" => "This is an example"
        ];
    }
}
