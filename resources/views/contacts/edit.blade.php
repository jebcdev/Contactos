<x-layout>
    <x-slot:title>
        Modificar Contacto
    </x-slot>
    <x-slot:cardTitle>
        Modificar Contacto: {{ $contact->name }} - {{ $contact->surname }}
    </x-slot>

    {{-- Main Content --}}

    <form action="{{ route('contacts.update',$contact->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-3 text-start">
            <label for="dni" class="form-label">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni"
                placeholder="Ingrese el Documento Nacional de Identificación." value="{{ old('dni',$contact->dni) }}" required>
            <x-input-error :messages="$errors->get('dni')" class="mt-2" />
        </div>

        <div class="mb-3 text-start">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el Nombre." value="{{ old('name',$contact->name) }}" required>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mb-3 text-start">
            <label for="surname" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="surname" name="surname" placeholder="Ingrese el Apellido." value="{{ old('surname',$contact->surname) }}" required>
            <x-input-error :messages="$errors->get('surname')" class="mt-2" />
        </div>

        <div class="mb-3 text-start">
            <label for="phone" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Ingrese el Teléfono." value="{{ old('phone',$contact->phone) }}" required>
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="row">
            <div class="col">
                <button class="btn btn-primary" type="submit">
                    Guardar
                </button>
            </div>
            <div class="col">
                <a class="btn btn-danger" href="{{ route('contacts.index') }}">
                    Cancelar
                </a>
            </div>
        </div>

    </form>

    {{-- Main Content --}}

</x-layout>
