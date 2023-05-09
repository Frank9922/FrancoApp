<div>
    <div>
        <div class="relative">
        <x-button wire:click="crear" class="top-0 right-0 bg-blue-700 hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300 object-right">Crear Producto</x-button>
        <div class="relative mt-2 rounded-md shadow-sm">
            <input wire:model.render='search' type="text" name="price" id="price"
                class="rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 f    ocus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                placeholder="Searching...">
            <x-button wire:click="search">Buscar</x-button>
        </div>
        <select wire:model="cat" id="countries"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4 mt-4 w-min-100">
            <option selected value="">Categorias ...</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->descripcion }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4 mt-4">
        @if ($query)
            <span
                class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20 mr-4">Nombre:
                {{ $search }}
                <button wire:click='resetext' class="ml-1">
                    <i class="fa-solid fa-x fa-2xs"></i>
                </button>
            </span>
        @endif
        @if ($cat != '')
            <span
                class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20 mr-4">Categoria:
                {{ $cat }}
                <button wire:click='resetcat' class="ml-1">
                    <i class="fa-solid fa-x fa-2xs"></i>
                </button>
            </span>
        @endif
    </div>
    <!--Tabla  -->
    <div class="bg-white overflow-hidden shadaow-xl sm:rounded-lg mb-4">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        @if (empty($producto))
                            <table class="w-full text-left text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-4"><button wire:click="ascdesc">Id</button>
                                        </th>
                                        <th scope="col" class="px-6 py-4">Nombre</th>
                                        <th scope="col" class="px-6 py-4">Categoria</th>
                                        <th scope="col" class="px-6 py-4">Precio</th>
                                        <th scope="col" class="px-6 py-4">Stock</th>
                                        <th scope="col" class="px-6 py-4">Accion</th>

                                    </tr>
                                </thead>
                                @foreach ($productos as $producto)
                                    <tbody>
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $producto->id }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $producto->nombre }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $producto->descripcion }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">${{ $producto->precio }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $producto->stock }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <x-button wire:click='delete({{ $producto->id }})'
                                                    class="bg-red-800 hover:bg-red-500">B</x-button>
                                                <x-button wire:click="edit({{$producto->id}})" class="bg-green-800 hover:bg-green-500">E</x-button>
                                            </td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <span class="font-medium">No hay datos !</span> Por favor llene la base de datos
                                    para ver los resultados!
                                </div>
                            </div>
                        @endif
                        {{ $productos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-dialog-modal wire:model="openborrar">
        <x-slot name="title">
            Borrar Registro
        </x-slot>

        <x-slot name="content">
            <h5>Si elimina este registro, no podra recuperarlo</h5>
            <p>¿Seguro?</p>

        </x-slot>

        <x-slot name="footer">
            <x-danger-button wire:click="deleteconfirm({{ $confirmationdelete }})" class="mr-4">Eliminar
            </x-danger-button>
            <x-button wire:click="$set('openborrar', false)">Cancelar</x-button>
        </x-slot>
    </x-dialog-modal>
    <!--Fin de Tabla -->

    <x-dialog-modal wire:model="opencrear">
        <x-slot name="title">
            Crear Producto
        </x-slot>
        <x-slot name="content">
            <label>Nombre</label><br>
            <input wire:model="nombre" type="text" id="product.nombre" class="rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{$nombre}}
            <br><br>
            <label for="">Precio</label><br>
            <input wire:model="precio"type="number" id="product.precio" class="rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="$">{{$precio}}
            <br><br>
            <label for="">Categoria</label>
            <select wire:model="idcat"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-1 mb-4  w-min-1">{{$idcat}}
            @foreach ($categorias as $categoria)
                <option value="{{$categoria->id }}">{{ $categoria->descripcion }}</option>
            @endforeach
            <input wire:model="stock" type="number" class="rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Stock..">{{$stock}} {{$idcat}}
        </x-slot>
        <x-slot name="footer">
            <x-danger-button  wire:click="save" class="mr-4">Crear</x-danger-button>
            <x-button wire:click="$set('opencrear', false)">Cancelar</x-button>
        </x-slot>
    </x-dialog-modal>
    <script src="sweetalert2.all.min.js"></script>
</div>
