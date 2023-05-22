<x-dialog-modal wire:model="openedit">
    <x-slot name="title">
        Editar Producto
    </x-slot>   

    <x-slot name="content">
        <form wire:submit.prevent="editconfirm">
            <label for="nombre">Nombre</label><br>
            <input type="text" wire:model="nomedit" placeholder="" class="rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <br><br>
            <label for="precio">Precio</label><br>
            <input type="number" wire:model="precedit" placeholder="$"  class="rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <br><br>
            <label for="stock">Stock</label><br>
            <input type="number" wire:model="stockedit" placeholder=""  class="rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <br>
        {{$confirmationedit}}
    </x-slot>
    
    <x-slot name="footer">
        <x-button wire:click="$set('openedit', false)">
            Cancelar    
        </x-button>
        <x-danger-button wire:click="editconfirm({{$confirmationedit}})">
            Editar
        </x-danger-button>
    </form>
    </x-slot>
</x-dialog-modal>