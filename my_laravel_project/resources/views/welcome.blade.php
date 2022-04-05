<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}Dashboard
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8 max-w-lg">
            <div class="mt-4 text-center">
                <div class="text-xl sm:text-3xl font-extrabold">
                    Borrow your neighbor's tools!
                </div>
            </div>
            <form action="" method="GET">
                @csrf
                <div class="py-5 mt-6">
                    <x-input id="tool" class="block mt-1 w-full" type="text" name="tool"
                        placeholder="What are you looking for?" autofocus />
                </div>
                <div>
                    <x-input id="city" class="block mt-1 w-full" type="text" name="city"
                        placeholder="Where are you looking?" autofocus />
                </div>
                <div class="flex items-center justify-between mt-4">
                    <a class="ml-1 underline" href="{{ route('register') }}">
                        Not a member yet?
                    </a>
                    <x-button class="ml-3">
                        {{ __('search') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
