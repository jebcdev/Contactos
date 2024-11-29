<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        try {
            
            $contacts = Contact::all();

            return $contacts;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
