<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Categorias') }}
        </h2>
    </x-slot>


    @foreach($categorias as $categoria)
     
         <div class="flex font-bold text-xl mb-2 justify-center">{{$categoria -> categoria}}</div>

     @endforeach 

</x-app-layout>