<x-layout>
    <x-slot:title>
        Listado de Contactos
    </x-slot>
    <x-slot:cardTitle>
        Listado de Contactos
    </x-slot>

    @if (session('MensajeDeExito'))
        <div class="m-2 text-center border border-success">
            {{ session('MensajeDeExito') }}
        </div>
    @endif
    <table class="table table-dark table-striped">
        <thead>
            <th>Id</th>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>
                        <a class="link-secondary"
                        href="{{ route('contacts.show', $contact->id) }}"
                        >{{ $contact->dni }}</a>
                        </td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->surname }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <a class="btn btn-secondary" href="{{ route('contacts.show', $contact) }}">
                            Ver
                        </a>

                        <a class="btn btn-secondary" href="{{ route('contacts.edit', $contact) }}">
                            Editar
                        </a>

                        <form action="{{ route('contacts.destroy',$contact) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                            class="btn btn-danger"
                            type="submit"
                            onclick="return confirm('Esta Segur@?')"
                            >Eliminar</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{ $contacts->links() }}
    </div>
</x-layout>
