<x-dialog-modal wire:model="openedit">
    <x-slot name="title">
        Editar Producto
    </x-slot>   

    <x-slot name="content">
        <form>
            <label for="nombre">Nombre</label><br>
            <input type="text" id="product.nombre" wire:model.defer="nombre" placeholder="" class="rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <br><br>
            <label for="precio">Precio</label><br>
            <input type="number" wire:model.defer="precio" placeholder="$"  class="rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <br><br>
            <label for="stock">Stock</label><br>
            <input type="number" wire:model.defer="stock" placeholder=""  class="rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <br><br>
            <select wire:model="idcat"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-1 mb-4  w-min-1">
            @foreach ($categorias as $categoria)
                <option value="{{$categoria->id }}">{{ $categoria->descripcion }}</option>
            @endforeach
        </form>
    </x-slot>
    
    <x-slot name="footer">
        
    </x-slot>
</x-dialog-modal>