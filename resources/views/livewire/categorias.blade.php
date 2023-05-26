<div>
    
    <div class="bg-white overflow-hhidden shadaow-xl sm:rounded-lg mb4 mb-2">
        <x-inputmio wire:model="nombre" name="input1" placeholder="Buscar..."></x-inputmio>
        {{$nombre}}
    </div>

    <div class="bg-white overflow-hidden shadaow-xl sm:rounded-lg mb-4 mt-2">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        @if ($categorias)
                        <table class="w-full text-left text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500">
                                <tr class="border-b dark:border-neutral-800">
                                    <th scope="col" class="px-6 py-4">Id</th>
                                    <th scope="col" class="px-6 py-4">Nombre</th>
                                    <th scope="col" class="px-6 py-4">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                    <tr class="border-b dark:border-neutral-300">
                                        <td class="whitespace-nowrap px-6 py-4">{{$categoria->id}}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{$categoria->descripcion}}</td>
                                        <td class="whitespace-nowrap px-6 py-4"><x-button>E</x-button><x-danger-button>X</x-danger-button></td>
                                    </tr>
                                    @endforeach
                                </tbody>                
                            </table>
                        </div>
                    @endif
                    <div class="pt-4">
                        {{$categorias->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
