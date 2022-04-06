<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome {{ Auth::user()->name }}!
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8 max-w-lg sm:w-full">
            <div class="mt-4 text-center">
                <div class="text-xl sm:text-3xl font-extrabold">
                    Borrow your neighbor's tools!
                </div>
            </div>
            <form action="{{ route('search-tools') }}" method="POST">
                @csrf
                <div class="py-5 mt-6">
                    <select class='w-full block mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                            id="tool" name="tool" autofocus>
                        <option value="hammer">Hammer</option>
                        <option value="saw">Saw</option>
                        <option value="screwdriver">Screwdriver</option>
                    </select>
                </div>
                <div>
                    <select class='w-full block mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                            id="province" name="province" autofocus>
                        <option value="West-Vlaanderen">West-Vlaanderen</option>
                        <option value="Oost-Vlaanderen">Oost-Vlaanderen</option>
                        <option value="Antwerpen">Antwerpen</option>
                        <option value="Limburg">Limburg</option>
                        <option value="Vlaams-Brabant">Vlaams-Brabant</option>
                        <option value="Waals-Brabant">Waals-Brabant</option>
                        <option value="Henegouwen">Henegouwen</option>
                        <option value="Namen">Namen</option>
                        <option value="Luik">Luik</option>
                        <option value="Luxemburg">Luxemburg</option>
                    </select>
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
