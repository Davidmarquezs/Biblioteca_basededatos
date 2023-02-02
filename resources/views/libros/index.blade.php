<x-app-layout> 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Lista de Libros') }} 
        </h2>
    </x-slot> 

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                          Id
                        </th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Codigo
                        </th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Nombre
                        </th>
                        
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                          ISBN
                        </th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Cantidad
                        </th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Precio
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
                          {{$libro -> id}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                          {{$libro -> codigo}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                          {{$libro -> nombre}}
                        </td>
                        
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                          {{$libro -> isbn}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                          {{$libro -> cantidad}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                          {{$libro -> precio}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap object-center text-sm text-gray-500">
                          <img class="h-10 w-10 rounded-full mx-auto" src="images/libros/{{$libro -> imagen}}" alt="">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                          @if (Route::has('login'))
                          @if(auth()->user())
                          @if(auth()->user()->email == 'Admin.vintage@gmail.com')
                          <form action="{{route('Books.destroy', $libro -> id)}}" method="POST">
                            <a href="/Books/{{$libro -> id}}/edit" class="px-2 text-indigo-600 hover:text-indigo-900">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-2 text-indigo-600 hover:text-indigo-900">Eliminar</button>                 
                          </form>
                          @endif
                          @endif
                          @endif
                          
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