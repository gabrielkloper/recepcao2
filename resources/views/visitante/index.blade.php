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
                <form class="w-full" action="{{ route('visitante.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                        <div>
                            <label for="nome_visitante" class="block text-sm font-medium text-gray-700 dark:text-white">Nome Completo</label>
                            <input type="text" id="nome_visitante" name="nome_visitante"
                                class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label for="nome_social" class="block text-sm font-medium text-gray-700 dark:text-white">Nome Social</label>
                            <input type="text" id="nome_social" name="nome_social"
                                class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label for="cpf" class="block text-sm font-medium text-gray-700 dark:text-white">CPF</label>
                            <input type="text" id="cpf" name="cpf"
                                class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label for="rg" class="block text-sm font-medium text-gray-700 dark:text-white">RG</label>
                            <input type="text" id="rg" name="rg"
                                class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                    </div>
                
                    <div class="grid grid-cols-2 gap-4 md:grid-cols-3 mt-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-white">Email</label>
                            <input type="email" id="email" name="email"
                                class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label for="telefone" class="block text-sm font-medium text-gray-700 dark:text-white">Telefone</label>
                            <input type="text" id="telefone" name="telefone"
                                class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label for="nascimento" class="block text-sm font-medium text-gray-700 dark:text-white">Data Nasc.</label>
                            <input type="date" id="data_nascimento" name="data_nascimento"
                                class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                    </div>
                
                    <div class="grid grid-cols-2 gap-4 md:grid-cols-4 mt-4">
                        <div>
                            <label for="sexo" class="block text-sm font-medium text-gray-700 dark:text-white">Sexo</label>
                            <select id="sexo" name="sexo" class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white">
                                <option>Escolha uma opção</option>
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                            </select>
                        </div>
                        <div>
                            <label for="cep" class="block text-sm font-medium text-gray-700 dark:text-white">CEP</label>
                            <input type="text" id="cep" name="cep"
                                class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                    </div>
                
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                        <div>
                            <label for="rua" class="block text-sm font-medium text-gray-700 dark:text-white">Rua</label>
                            <input type="text" id="rua" name="rua"
                                class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">Número</label>
                            <input type="text" id="numero" name="numero"
                                class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">Bairro</label>
                            <input type="text" id="bairro" name="bairro"
                                class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">Cidade</label>
                            <input type="text" id="cidade" name="cidade"
                                class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">UF</label>
                            <input type="text" id="uf" name="uf"
                                class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                    </div>


                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4 responsavel">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">Nome do
                                Responsavel</label>
                            <input type="text" id="nome_responsavel" name="nome_responsavel"
                                class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-white">CPF do
                                Responsavel</label>
                            <input type="text" id="cpf_responsavel" name="cpf_responsavel"
                                class="mt-1 p-2 w-full border rounded-lg dark:bg-gray-700 dark:text-white" />
                        </div>
                    </div>


                    <div class="flex justify-between items-center mt-6">
                        <button onclick="toggleModal()" data-dialog-target="modal" type="button"
                            class="bg-teal-500 text-white px-4 py-2 rounded-lg flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.55 4.55M19.55 10L15 14.55M5 19h14M5 5h14M5 14h14"></path>
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

<div data-dialog-backdrop="modal" data-dialog-backdrop-close="true"
    class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
    <div data-dialog="modal" id="modal"
        class="relative m-4 p-4 w-2/5 min-w-[40%] max-w-[40%] rounded-lg bg-white shadow-sm hidden">
        <div class="flex shrink-0 items-center pb-4 text-xl font-medium text-slate-800">
            Câmera
        </div>

        <div class="modal-body">

            <div id="my_camera" style="border: solid 1px #000; min-height:150px"></div>


            <!-- A button for taking snaps -->

            <div id="pre_take_buttons">
                <input type=button value="Tirar Foto" onClick="preview_snapshot()" class="mt-3 rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
            </div>
            <div id="post_take_buttons" style="display:none">
                <input type=button value="&lt; Tirar Outra" onClick="cancel_preview()" class="mt-3 rounded-md bg-red-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-red-700 focus:shadow-none active:bg-red-700 hover:bg-red-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
                <input type=button value="Salvar Foto &gt;" onClick="save_photo()" style="font-weight:bold;"
                    class="mt-3 rounded-md bg-blue-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-blue-700 focus:shadow-none active:bg-blue-700 hover:bg-blue-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
            </div>

        </div>
        <div class="flex shrink-0 flex-wrap items-center pt-4 justify-end">
            <button data-dialog-close="true"
                class="rounded-md border border-transparent py-2 px-4 text-center text-sm transition-all text-slate-600 hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button">
                Cancel
            </button>
            <button data-dialog-close="true"
                class="rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                type="button">
                Confirm
            </button>
        </div>
    </div>
</div>

<script>
    document.querySelector('.responsavel').style.display = 'none';
    document.querySelector('#nascimento').addEventListener('change', function() {
        let nascimento = this.value;
        let data = new Date();
        let anoAtual = data.getFullYear();
        let anoNascimento = nascimento.split('-')[0];
        let idade = anoAtual - anoNascimento;
        if (idade < 18) {
            document.querySelector('.responsavel').style.display = 'block';
        } else {
            document.querySelector('.responsavel').style.display = 'none';
        }
    });
</script>


<script>
    /*
    function toggleModal() {
        const modalBackdrop = document.querySelector('[data-dialog-backdrop="modal"]');
        const modal = document.querySelector('[data-dialog="modal"]');
        modalBackdrop.classList.toggle('pointer-events-none');
        modalBackdrop.classList.toggle('opacity-0');
        modal.classList.toggle('hidden');
    }

    document.querySelectorAll('[data-dialog-close="true"]').forEach(function(button) {
        button.addEventListener('click', toggleModal);
    });

    document.querySelectorAll('[data-dialog-backdrop-close="true"]').forEach(function(backdrop) {
        backdrop.addEventListener('click', function(event) {
            if (event.target === backdrop) {
                toggleModal();
            }
        });
    });
</script>

<script src="{{asset('js/webcamjs-master/webcam.min.js')}}"></script>

<script language="JavaScript"> /*
    document.addEventListener('DOMContentLoaded', function(){
    Webcam.set({
        width: 320,
        height: 240,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
    Webcam.attach('#my_camera');
});


    function preview_snapshot() {
        // freeze camera so user can preview pic
        Webcam.freeze();

        // swap button sets
        document.getElementById('pre_take_buttons').style.display = 'none';
        document.getElementById('post_take_buttons').style.display = '';
    }

    function cancel_preview() {
        // cancel preview freeze and return to live camera feed
        Webcam.unfreeze();

        // swap buttons back
        document.getElementById('pre_take_buttons').style.display = '';
        document.getElementById('post_take_buttons').style.display = 'none';
    }



    function save_photo() {
        // actually snap photo (from preview freeze) and display it
        Webcam.snap(function(data_uri) {
            // display results in page
            document.getElementById('txtfoto').value = data_uri;

            document.querySelector('.mostrafoto').setAttribute('src', data_uri);



            // swap buttons back
            document.getElementById('pre_take_buttons').style.display = '';
            document.getElementById('post_take_buttons').style.display = 'none';
        });
    }
    */
</script>
