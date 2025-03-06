<x-app-layout>

    <div>
        @include('components.side-menu')
    </div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
        <body>
            <div class="container mx-auto mt-10">
                <h1 class="text-2xl font-bold mb-4 text-gray-200">Lista de Visitantes</h1>
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b text-gray-200">Nome Completo</th>
                            <th class="py-2 px-4 border-b text-gray-200">Email</th>
                            <th class="py-2 px-4 border-b text-gray-200">Telefone</th>
                            <!-- Adicione mais colunas conforme necessário -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($visitantes as $visitante)
                            <tr>
                                <td class="py-2 px-4 border-b text-gray-200">{{ $visitante->nome_visitante }}</td>
                                <td class="py-2 px-4 border-b text-gray-200">{{ $visitante->email }}</td>
                                <td class="py-2 px-4 border-b text-gray-200">{{ $visitante->telefone }}</td>
                                <!-- Adicione mais colunas conforme necessário -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        
                <!-- Links de paginação -->
                <div class="mt-4">
                    {{ $visitantes->links() }}
                </div>
            </div>
        </body>

   
</x-app-layout>