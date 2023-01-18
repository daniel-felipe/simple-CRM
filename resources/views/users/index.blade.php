<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <x-link-button :to="route('users.create')" class="mb-3">
                            {{ __('Create User') }}
                        </x-link-button>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 py-3">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        {{ __('Nome') }}
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        {{ __('Email') }}
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-right"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $user->name }}
                                        </th>
                                        
                                        <td class="px-6 py-4">
                                            {{ $user->email }}
                                        </td>

                                        <td class="px-6 py-4 text-right">
                                            <div class="space-x-3">
                                                <a href="#" class="px-3 py-1 rounded-md bg-blue-500 text-white hover focus:ring-1 ring-blue-400" >
                                                    {{ __('Editar') }}
                                                </a>

                                                <a href="#" class="px-3 py-1 rounded-md bg-red-500 text-white hover focus:ring-1 ring-red-400">
                                                    {{ __('Excluir') }}
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th colspan="3" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                            {{ __('No data to be showed') }}
                                        </th>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div class="p-3">
                            {{ $users->links() }}
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>