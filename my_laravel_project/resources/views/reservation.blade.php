<x-app-layout>
    <div class="py-12 h-screen">
        <div class="mx-auto sm:px-6 lg:px-8 max-w-lg sm:w-full ">
            <div class="mt-4 text-center">
                <div class="text-xl sm:text-3xl font-extrabold">
                    Confirm your reservation.
                </div>
            </div>
            <div class="text-center bg-red-50 underline p-6">
                You want to reserve {{ $wishedTool->name }}'s {{ $wishedTool->tool }}?
            </div>
        </div>
    </div>
</x-app-layout>
