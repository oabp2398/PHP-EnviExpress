<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Personas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Contenido Personas</h1>
                <table id="employees" class="display" style="width:100%">
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

    {{-- jQuery + DataTables (CDN) --}} 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">  
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">  
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> 
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>  
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>  
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>  

    <script> 
        $(function() { 
            $('#employees').DataTable({ 
                pageLength: 20, 
                dom: 'Bfrtip',
                language: { 
                    url: 'https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json'  
                }, 
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print'] 
            }); 
        }); 
    </script> 
</x-app-layout>
