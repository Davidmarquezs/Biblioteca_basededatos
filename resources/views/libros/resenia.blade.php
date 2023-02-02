<x-app-layout>
    <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Reseña') }}
        </h2>
    </x-slot>  

    <div class="px-6 py-4">
      <img class="w-48 h-64 mx-auto rounded" src="/images/libros/{{$libro -> imagen}}">
      <div class="font-bold text-xl mb-2 text-center">{{$libro -> nombre}}</div>
      <p class="mx-24 my-4 text-gray-700 text-base" style="text-align: justify;">
        @if($libro -> resenia == "")
          <h1 class="text-center">No hay reseña aun</h1>        
        @endif
        {{$libro -> resenia}}
      </p>
      <div class="inline-block mr-2 mt-6 my-4 flex justify-center">
         <a href="/resenias" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-gray-800 hover:bg-gray-100 hover:shadow-lg hover:text-gray-800 transition duration-100 ease-in-out mx-2">Atras</a>
      </div>
    </div>

</x-app-layout>  