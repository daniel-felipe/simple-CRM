<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <x-link-button :to="route('users.index')" class="mb-3 px-2 py-1">
                            {{ __('Back') }}
                        </x-link-button>
                    </div>

                    <div class="relative overflow-x-auto sm:rounded-lg">
                        <form method="post" action="{{ route('users.store') }}">
                            @csrf
                        
                            <div class="md:grid md:grid-cols-3 gap-3">
                                <div class="mb-3">
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <div class="mb-3">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input class="block mt-1 w-full" type="text" name="email" required />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="mb-3">
                                    <x-input-label for="password" :value="__('Password')" />
                                    <x-text-input class="block mt-1 w-full" type="password" name="password" required />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <x-primary-button class="">Salvar</x-primary-button>
                            </div>
                        </form>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>