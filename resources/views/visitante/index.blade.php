<x-app-layout>
    <div>
        @include('components.side-menu')
    </div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form class="w-full">
                    <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">Nome Completo</label>
                            <input type="text" class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">Nome Social</label>
                            <input type="text" class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">CPF</label>
                            <input type="text" class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">RG</label>
                            <input type="text" class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 md:grid-cols-3 mt-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">Email</label>
                            <input type="email" class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">Telefone</label>
                            <input type="text" class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">Data Nasc.</label>
                            <input type="date" name="nascimento" id="nascimento" class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 md:grid-cols-4 mt-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">Sexo</label>
                            <select class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white">
                                <option>Escolha uma opção</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">CEP</label>
                            <input type="text" class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">Rua</label>
                            <input type="text" class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">Número</label>
                            <input type="text" class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">Bairro</label>
                            <input type="text" class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">Cidade</label>
                            <input type="text" class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">UF</label>
                            <input type="text" class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                    </div>


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4 responsavel">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">Nome do Responsavel</label>
                            <input type="text" class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">CPF do Responsavel</label>
                            <input type="text" class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                    </div>
                    
                    
                    <div class="flex justify-between items-center mt-6">
                        <button type="button" class="bg-teal-500 text-white px-4 py-2 rounded-lg flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.55 4.55M19.55 10L15 14.55M5 19h14M5 5h14M5 14h14"></path>
                            </svg>
                            Tirar Foto
                        </button>
                        <button type="submit" class="bg-teal-500 text-white px-6 py-2 rounded-lg">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</x-app-layout>

<script>
    document.querySelector('.responsavel').style.display = 'none';
    document.querySelector('#nascimento').addEventListener('change', function() {
        let nascimento = this.value;
        let data = new Date();
        let anoAtual = data.getFullYear();
        let anoNascimento = nascimento.split('-')[0];
        let idade = anoAtual - anoNascimento;
        if(idade < 18) {
            document.querySelector('.responsavel').style.display = 'block';
        } else {
            document.querySelector('.responsavel').style.display = 'none';
        }
    });
</script>