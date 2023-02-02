<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Compra') }}
        </h2>
    </x-slot> 

    <div class="mt-24 mb-24 flex justify-center items-center">
    	<div class="flex flex-row">
    		<div class="w-80 p-6 bg-gray-800 text-center rounded-3xl text-white border-2 shadow-xl border-white transform scale-125 items-center">
		        <h1 class="text-white font-semibold text-2xl">
		        	{{$libro -> nombre}}
		        	<img class="w-16 h-16 mx-auto rounded-full" src="/images/libros/{{$libro -> imagen}}">
		        </h1>
		        <p class="pt-2 tracking-wide">
		            <span class="text-3xl font-semibold">${{$libro -> precio}} </span>
		            <span class="font-semibold text-gray-400">c/u</span>    
		        </p>
		        <hr class="mt-4 border-1 border-gray-600">
		        <div class="pt-8">
		            <p class="font-semibold text-gray-400 text-left">		      
		                <span class="pl-2">
		                    Pagó a acordar con el vendedor
		                </span>
		            </p>
		            <form action="{{route('compra.datos')}}" method="POST">
		            	@csrf

		            	<p class="font-semibold text-gray-400 text-left">		      
			                <input type="text" name="nombre" value="{{$libro -> nombre}}" class="hidden">
			                <input type="number" name="precio" value="{{$libro -> precio}}" class="hidden">   
			            </p>

			            <p class="font-semibold text-gray-400 pt-6">
			                <span class="">
			                    <select class="w-full shadow-sm sm:text-sm border-gray-300 rounded-md" name="select1">
			                    	<option value="" selected>Entrega</option>
									<option value="tienda">Tienda</option>
									<option value="mrw">MRW</option>
								</select>
			                </span>
			            </p>
			            <p class="font-semibold text-gray-400 pt-6">
			                <span class="">		                   
			                     <select class="w-full shadow-sm sm:text-sm border-gray-300 rounded-md" name="select2">
			                     	<option value="" selected>Cantidad</option>
			                     	  @for($i=$libro -> cantidad; $i>=1; $i--)
										  <option value="{{$i}}">{{$i}}</option>
									  @endfor
								 </select>
			                 </span>	                
			            </p>
			            <button type="submit" class="w-full py-4 bg-green-500 mt-6 rounded-xl text-white">
		                    <span class="font-medium">
		                        Comprar
		                    </span>
			            </button>
		            </form>
		        </div>
		    </div>
    	</div>
    </div>
    
</x-app-layout>