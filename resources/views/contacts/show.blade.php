<x-layout>
    <x-slot:title>
        Detalle del Contacto
    </x-slot>
    
    <x-slot:cardTitle>
        Detalle del Contacto
        
    </x-slot>
    <p>
        <h2>DNI</h2>
        <b>{{ $contact->dni }}</b>
    </p>
    <p>
        <h2>Nombre</h2>
        <b>{{ $contact->name }}</b>
    </p>
    <p>
        <h2>Apellido</h2>
        <b>{{ $contact->surname }}</b>
    </p>
    <p>
        <h2>Teléfono</h2>
        <b>{{ $contact->phone }}</b>
    </p>

    <div class="mt-4 text-center row">
        <div class="col">
            <a
        class="btn btn-secondary"
         href="{{ route('contacts.index') }}">
            Volver
        </a>
        </div>
        <div class="col">
            <a
            class="btn btn-secondary"
             href="{{ route('contacts.edit',$contact->id) }}">
                Editar
            </a>
        </div>
    </div>
</x-layout>