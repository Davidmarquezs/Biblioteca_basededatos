<x-app-layout>
    <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Contacto') }}
        </h2>
    </x-slot>  

    <div class="flex justify-center mt-3">
        <form class="w-full max-w-lg" {{--action="{{route('contacto.store')}}" method="POST"--}}>
          @csrf
          <h2 class="text-gray-700 font-bold mb-6">Dejanos un mensaje y nos pondremos en contacto!</h2>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Correo
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email" type="email">
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Mensaje
              </label>
              <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" name="mensaje"></textarea>
            </div>
          </div>
          <div class="md:flex md:items-center">
            <div class="md:w-1/3">
              <button class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-gray-800 hover:bg-gray-100 hover:shadow-lg hover:text-gray-800 transition duration-100 ease-in-out mx-2" type="{{--submit--}}button">
                Enviar
              </button>
            </div>
          </div>
        </form>
        {{-- @if(session('info'))
          <script>
            alert("{{session('info')}}");
          </script>
        @endif --}}
    </div>


</x-app-layout> 