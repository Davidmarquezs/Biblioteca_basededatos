<x-app-layout>
    <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Reseñas') }}
        </h2>
    </x-slot>  

    <div class="py-12">
      <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <!-- This example requires Tailwind CSS v2.0+ -->
          <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>                       
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Nombre
                        </th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Imagen
                        </th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Accion
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @foreach($libros as $libro)
                      <tr>                        
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                          {{$libro -> nombre}}
                        </td>                     
                        <td class="px-6 py-4 whitespace-nowrap object-center text-sm text-gray-500">
                          <img class="h-10 w-10 rounded-full mx-auto" src="images/libros/{{$libro -> imagen}}" alt="">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                          <a href="/Books/{{$libro -> id}}" class="px-2 text-indigo-600 hover:text-indigo-900">Reseña</a>                                        
                        </td>
                      </tr>
                      @endforeach
                      <!-- More items... -->          
                    </tbody>        
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{ $libros -> links() }}
      </div>
    </div>

</x-app-layout>  