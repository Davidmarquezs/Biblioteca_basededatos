<x-app-layout> 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Editar Libro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mt-10 sm:mt-0">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                      <form action="/Books/{{$libro -> id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="shadow overflow-hidden sm:rounded-md">
                          <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                              <div class="col-span-6 sm:col-span-3">
                                <label for="" class="block text-sm font-medium text-gray-700">Codigo
                                @error('codigo')
                                  <label class="text-red-700"> *{{$message}}</label>
                                @enderror  
                                </label>
                                <input type="text" name="codigo" id="codigo" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$libro -> codigo}}">
                              </div>

                              <div class="col-span-6 sm:col-span-3">
                                <label for="" class="block text-sm font-medium text-gray-700">Nombre
                                @error('nombre')
                                  <label class="text-red-700"> *{{$message}}</label>
                                @enderror  
                                </label>
                                <input type="text" name="nombre" id="nombre" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$libro -> nombre}}">
                              </div>

                              <div class="col-span-6">
                                <label for="" class="block text-sm font-medium text-gray-700">Reseña  
                                </label>
                                <input type="text" name="resenia" id="resenia" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$libro -> resenia}}">
                              </div>

                              

                              <div class="col-span-6">
                                <label for="" class="block text-sm font-medium text-gray-700">ISBN
                                @error('isbn')
                                  <label class="text-red-700"> *{{$message}}</label>
                                @enderror  
                                </label>
                                <input type="number" name="isbn" id="isbn" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$libro -> isbn}}">
                              </div> 

                              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label for="" class="block text-sm font-medium text-gray-700">Cantidad
                                @error('cantidad')
                                  <label class="text-red-700"> *{{$message}}</label>
                                @enderror  
                                </label>
                                <input type="number" name="cantidad" id="cantidad" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$libro -> cantidad}}">
                              </div>

                              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="" class="block text-sm font-medium text-gray-700">Precio
                                @error('precio')
                                  <label class="text-red-700"> *{{$message}}</label>
                                @enderror  
                                </label>
                                <input type="number" name="precio" id="precio" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$libro -> precio}}">
                              </div>

                            </div>
                          </div>
                          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <a href="/Books" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-gray-800 hover:bg-gray-100 hover:shadow-lg hover:text-gray-800 transition duration-100 ease-in-out mx-2">Atras</a>

                            <button type="submit" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-gray-800 hover:bg-gray-100 hover:shadow-lg hover:text-gray-800 transition duration-100 ease-in-out mx-2">Save</button>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 
