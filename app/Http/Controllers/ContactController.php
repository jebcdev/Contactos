<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ContactController extends Controller
{
    public function index()
    {
        try {

            $contacts = Contact::query()
                ->orderBy('id', 'DESC')
                ->paginate(10);



            return view('contacts.index', [
                'contacts' => $contacts
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            return view('contacts.create');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show(Contact $contact)
    {
        try {

            return view('contacts.show', [
                'contact' => $contact
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(StoreContactRequest $request)
    {
        try {

            /* $data = $request->validate([
                'dni' => ['required', 'unique:contacts,dni', 'string', 'min:5', 'max:100'],
                'name' => ['required', 'string', 'min:5', 'max:100'],
                'surname' => ['required', 'string', 'min:5', 'max:100'],
                'phone' => ['required', 'string', 'min:5', 'max:100'],
            ]); */

            /* Para redirigir a la ruta show */
            /* $newContact=Contact::create($data);
            return to_route('contacts.show',$newContact); */

            $data = $request->validated();

            Contact::create($data);

            $message = 'Contacto Creado Exitosamente: ' . $data['name'] . ' ' . $data['surname'];

            return to_route('contacts.index')->with('MensajeDeExito', $message);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit(Contact $contact)
    {
        try {


            return view('contacts.edit', [
                'contact' => $contact
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(UpdateContactRequest $request, Contact $contact)
    {
        try {


            $data = $request->validated();

            $contact->update($data);

            $message = 'Contacto Actualizado Exitosamente: ' . $data['name'] . ' ' . $data['surname'];

            return to_route('contacts.index')->with('MensajeDeExito', $message);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy(Contact $contact)
    {
        try {

            $data = $contact;

            $contact->delete();

            $message = 'Contacto Eliminado Exitosamente: ' . $data['name'] . ' ' . $data['surname'];

            return to_route('contacts.index')->with('MensajeDeExito', $message);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* 
    * create=>Mostrar formulario de creacion
    *store=> guardar
    *show=>detalles del registro
    *edit=>formulario de edicion
    *update=>guardar info actualizada
    delete=>eliminar recursos 
    
    */
}
