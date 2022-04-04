@if (session('message'))
    <div class="bg-green-100 mb-3">
        <div class="font-medium text-green-600 p-2">
            {{ session('message') }}
        </div>
    </div>
@endif
