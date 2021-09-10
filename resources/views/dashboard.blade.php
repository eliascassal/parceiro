<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <p class="container"> <a href="/user"> Usuarios </a></p>
               <p class="container"> <a href="/user/create"> Nuevo Usuario</a></p>
               <p class="container"> <a href="/deudor/"> Deudores </a></p>
               <p class="container"> <a href="/prestamos"> prestamos vigentes </a></p>


                
            </div>
        </div>
    </div>
</x-app-layout>
