<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }} desde LiveWire
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <div class="flex  bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                                    <input 
                                    wire:model="search"
                                    type="search" 
                                    name="search" 
                                    id="search" 
                                    class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" 
                                    aria-label="Buscar usuarios"
                                    placeholder="Buscar ...">
                                    <div class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 ml-6 sm:text-sm border-gray-300 rounded-md">
                                        <select wire:model="perPage" class="outline-none text-gray-500 text-sm">
                                            <option value="5">5 por página</option>
                                            <option value="10">10 por página</option>
                                            <option value="15">15 por página</option>
                                            <option value="25">25 por página</option>
                                            <option value="50">50 por página</option>
                                            <option value="100">100 por página</option>
                                        </select>
                                    </div>
                                </div>
                                @if ($users->count())
                                <table class="w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($users as $user)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 h-10 w-10">
                                                            <img class="h-10 w-10 rounded-full" src="{{$user->profile_photo_url}}" alt="{{$user->name}}">
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                {{$user->name}}
                                                            </div>
                                                            <div class="text-sm text-gray-500">
                                                                {{$user->email}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                        <!-- More people... -->
                                    </tbody>
                                </table>
                                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                                {{ $users->links() }} 
                                </div>
                                @else
                                <div class="bg-white px-4 py-3 border-t border-gray-200 text-gray-500 sm:px-6">
                                    No hay resultados para la búsqueda "{{ $search}}" en la página {{ $page }} al mostrar {{ $perPage }} por página  
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
