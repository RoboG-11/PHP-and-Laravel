<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AllergyPacientController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\DiseasePacientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorEstablishmentController;
use App\Http\Controllers\DoctorSpecialtyController;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\MedicalPrescriptionController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\UserController;
use App\Http\Requests\AllergyPacientRequest;
use App\Http\Resources\DoctorResource;
use App\Http\Resources\UserResource;
use App\Models\Doctor;
use App\Models\MedicalPrescription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// WARNING: Investigar para qué sirve lo de autenticación....
// ! Sirve para autenticar y devolver la información del usuario
Route::middleware('auth:sanctum')->group(function () {
  Route::get('/user', function (Request $request) {
    return $request->user();
  });
  Route::post('/logout', [AuthController::class, 'logout']);
});


// Route::get('/doctor', function (Request $request) {
//     return new DoctorResource(Doctor::find(1));
// });

// Route::get('/user', [UserController::class, 'index'])->name('user.index');
// ! Tuve que comentar la siguiente para hacer la autenticación correctamente
Route::resource('/users', UserController::class);
Route::resource('/doctor', DoctorController::class);
Route::resource('/patient', PatientController::class);
Route::resource('/date', DateController::class);
Route::resource('/address', AddressController::class);
Route::resource('/establishment', EstablishmentController::class);
Route::resource('/medicine', MedicineController::class);
Route::resource('/medical_prescription', MedicalPrescriptionController::class);
Route::resource('/summary', SummaryController::class);
Route::resource('/specialty', SpecialtyController::class);
Route::resource('/doctor_specialty', DoctorSpecialtyController::class);
Route::resource('/doctor_establishment', DoctorEstablishmentController::class);
Route::resource('/allergy_pacient', AllergyPacientController::class);
Route::resource('/disease_pacient', DiseasePacientController::class);

//Route::post('/signup',['middleware' => 'cors' , 'uses'=> 'AuthController@signup']);
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);

// TEST: Rutas especificas
// Ruta para acceder a los doctores de una especialidad específica
// Route::get('/specialty/{idSpecialty}/doctor', 'SpecialtyController@doctorsOfSpecialty');
// Route::get('/note', [NoteController::class, 'index'])->name('note.index');
// Route::get('/specialty/{idSpecialty}/doctor', [SpecialtyController::class, 'doctorsOfSpecialty']);
Route::get('/specialties/{idspecialty}/doctors', [specialtycontroller::class, 'doctorsofspecialty']);
Route::put('/users/{id}', [UserController::class, 'update']);
// Route::put('/users/update/{user}', [UserController::class, 'update']);
Route::put('/date/update_status/{id}', [DateController::class, 'updateDate']);
