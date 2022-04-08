<x-app-layout>
    <div class="py-12 bg-[url('/images/background.jpg')] bg-cover bg-no-repeat min-h-[85vh] grid place-content-center">
        <div class="mt-4 text-center">
                <div class="text-xl sm:text-3xl font-extrabold text-white">
                    Hey <u>{{ Auth::user()->name }}</u>!
                </div>
                <div class="text-l sm:text-xl font-bold italic mt-4 text-white">
                    Here you can add your tool that other users can borrow from you.
                </div>
            </div>
        <div class="mx-auto sm:px-6 lg:px-8 max-w-lg sm:w-full">

            <form action="" method="POST">
                @csrf
                <div class="py-5 mt-2">
                    <x-label class="text-md ml-2 text-white" for="tool" :value="__('Which tool?')" ></x-label>
                    <select
                        class='w-full block mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                        id="tool" name="tool" autofocus>
                        <option value="hammer">Hammer</option>
                        <option value="saw">Saw</option>
                        <option value="screwdriver">Screwdriver</option>
                    </select>
                </div>
                <div>
                    <x-label class="text-md ml-2 text-white" for="province" :value="__('Which province is the tool available in?')" ></x-label>
                    <select
                        class='w-full block mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
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
                <div class="flex text-center items-center justify-end mt-4">
                    <x-button class="w-full justify-center py-4">
                        {{ __('Add tool !') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
