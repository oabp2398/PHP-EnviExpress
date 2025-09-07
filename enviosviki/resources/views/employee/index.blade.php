<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Contenido Personas</h1>
                <table class="min-w-full border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border px-4 py-2 text-left">#</th>
                            <th class="border px-4 py-2 text-left">Nombre</th>
                            <th class="border px-4 py-2 text-left">Apellido</th>
                            <th class="border px-4 py-2 text-left">Tipo de Documento</th>
                            <th class="border px-4 py-2 text-left">Numero de Documento</th>
                            <th class="border px-4 py-2 text-left">Numero de Tefefono</th>
                            <th class="border px-4 py-2 text-left">Correo Electronico</th>
                            <th class="border px-4 py-2 text-left">Ubicacion</th>
                            <th class="border px-4 py-2 text-left">Tipo de Persona</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach($employee as $index => $emp)
                        <tr>
                            <td class="border px-4 py-2">{{ $index + 1}}</td>
                            <td class="border px-4 py-2">{{ $emp->nombres }}</td>
                            <td class="border px-4 py-2">{{ $emp->apellidos }}</td>
                            <td class="border px-4 py-2">{{ $emp->documento_tipo }}</td>
                            <td class="border px-4 py-2">{{ $emp->documento_numero }}</td>
                            <td class="border px-4 py-2">{{ $emp->telefono_principal }}</td>
                            <td class="border px-4 py-2">{{ $emp->email }}</td>
                            <td class="border px-4 py-2">{{ $emp->id_ubicacion }}</td>
                            <td class="border px-4 py-2">{{ $emp->tipo_persona }}</td>
                            

                        </tr>  
                    @endforeach
                </tbody>    
            </table>
            
          </div>
        </div>
    </div>
</x-app-layout>
