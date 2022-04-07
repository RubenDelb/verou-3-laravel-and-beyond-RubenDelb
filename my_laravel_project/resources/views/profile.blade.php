<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="p-6 bg-white border-b border-gray-200 border-b-2 md:border-b-0 md:border-r-2">
                        <div>
                            <div class="text-xl font-bold text-center">
                                You currently have <u>{{ count($lentTools) }} tools</u> that are being lent by other
                                users.
                            </div>
                            <ul class="list-disc ">
                                @foreach ($lentTools as $lentTool)
                                    <li class="pr-4">
                                        {{ $lentTool->name }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                        <x-validation-errors class="mb-4" :errors="$errors" />
                        <x-success-message />
                        <form method="POST" action="{{ route('profile.update') }}">
                            @method('PUT')
                            @csrf
                            <div class="grid sm:grid-cols-2 gap-6">
                                <div class="grid sm:grid-rows-2 gap-6">
                                    <div>
                                        <x-label for="name" :value="__('Name')" />
                                        <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                            value="{{ auth()->user()->name }}" autofocus />
                                    </div>
                                    <div>
                                        <x-label for="email" :value="__('Email')" />
                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                            value="{{ auth()->user()->email }}" autofocus />
                                    </div>
                                </div>
                                <div class="grid sm:grid-rows-2 gap-6">
                                    <div>
                                        <x-label for="password" :value="__('New password')" />
                                        <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                            autocomplete="new-password" />
                                    </div>
                                    <div>
                                        <x-label for="password_confirmation" :value="__('New password')" />
                                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                            name="password_confirmation" autocomplete="password-confirmation" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-3">
                                    {{ __('Update') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
