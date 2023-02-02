<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Biblioteca de Libros') }} 
        </h2>
    </x-slot>

    <div class="content">
      <div class="carousel">
        <ul class="slides">
          <input type="radio" name="radio-buttons" id="img-1" checked />
          <li class="slide-container">
            <div class="slide-image">
              <img src="images/carousel/Fitch & Co..png">
            </div>
            <div class="carousel-controls">
              <label for="img-4" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-2" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
          <input type="radio" name="radio-buttons" id="img-2" />
          <li class="slide-container">
            <div class="slide-image">
              <img src="images/carousel/Jack Wilson(1).png">
            </div>
            <div class="carousel-controls">
              <label for="img-1" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-3" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
          <input type="radio" name="radio-buttons" id="img-3" />
          <li class="slide-container">
            <div class="slide-image">
              <img src="images/carousel/Fitch & Co.(1).png">
            </div>
            <div class="carousel-controls">
              <label for="img-2" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-4" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
          <input type="radio" name="radio-buttons" id="img-4" />
          <li class="slide-container">
            <div class="slide-image">
              <img src="images/carousel/Jack Wilson.png">
            </div>
            <div class="carousel-controls">
              <label for="img-3" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-1" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
          <div class="carousel-dots">
            <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
            <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
            <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
            <label for="img-4" class="carousel-dot" id="img-dot-4"></label>
          </div>
        </ul>
      </div>
    </div>
    
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-5">
        @foreach($libros as $libro)
        <div class="rounded-lg overflow-hidden shadow-2xl bg-white my-5 border-2 border-gray-800 border-opacity-25">
            
          <img class="w-48 h-64 mx-auto rounded" src="/images/libros/{{$libro -> imagen}}">

          <div class="px-6 py-4">
            <div class="flex font-bold text-xl mb-2 justify-center">
              {{Str::limit($libro -> nombre, 20)}}
            </div>
            <div class="flex text-gray-700 justify-center">${{$libro -> precio}}</div>
          </div>
          <div class="mb-2 mt-4 flex justify-center">
            <a href="compra/{{$libro -> id}}" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-gray-800 hover:bg-gray-100 hover:shadow-lg hover:text-gray-800 transition duration-100 ease-in-out mx-2">Comprar</a>
          </div>
        </div>
        @endforeach
    </div>
    <div class="ml-12 mr-12">
      {{ $libros -> links() }}
    </div>

    {{-- <div class="p-20 w-5/6 h-72 mx-auto"> --}}
      <a href="{{route('Books.index')}}"><img class="p-10 w-5/6 h-72 mx-auto" src="images/carousel/5.png" alt=""></a>
    {{-- </div> --}}
    
    @if(session('info'))
      <script>
        alert("{{session('info')}}");
      </script>
    @endif
    
</x-app-layout> 
 