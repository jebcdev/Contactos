<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        try {

            $contacts = Contact::query()
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

    public function show($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            return view('contacts.show', [
                'contact' => $contact
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* 
    * create=>Mostrar formulario de creacion
    store=> guardar
    *show=>detalles del registro
    edit=>formulario de edicion
    update=>guardar info actualizada
    delete=>eliminar recursos 
    
    */
}
