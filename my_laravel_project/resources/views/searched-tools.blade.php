<x-app-layout>
    <div class="sm:py-12">
        <div class="mx-auto sm:px-6 lg:px-8 sm:max-w-lg">
            <div class="mt-4 text-center">
                <div class="text-xl sm:text-3xl font-extrabold">
                    Borrow your neighbor's tools!
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 justify-items-center text-center">
            @foreach ($tools as $tool)
                <div class="w-full sm:max-w-xs rounded overflow-hidden shadow-lg bg-slate-50 sm:m-4">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl text-center mb-2">{{ $tool->name }}</div>
                        @if ($tool->available === 1)
                            <p class="text-gray-700 max-w-sm m-auto">This tool is available at the moment! Please contact
                                the owner If you would like to borrow this tool</p>
                            <div class="flex justify-center mt-3">
                                <a href="{{ route('reserve-tool', ['toolId' => $tool->id]) }}">
                                    <x-button>
                                        {{ __('reserve') }}
                                    </x-button>
                                </a>
                            </div>
                        @else
                            <p>Sorry, this tool is not available at this moment.</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
