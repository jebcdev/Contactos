<x-layout>
    <x-slot:title>
        Listado de Contactos
    </x-slot>
    <x-slot:cardTitle>
        Listado de Contactos
    </x-slot>

    <table class="table table-dark table-striped">
        <thead>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->dni }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->surname }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <a 
                        class="btn btn-secondary"
                        href="{{ route('contacts.show',$contact->id) }}">
                            Ver
                        </a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{ $contacts->links() }}
    </div>
</x-layout>