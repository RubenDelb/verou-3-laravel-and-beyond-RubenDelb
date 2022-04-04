@if ($errors->any())
    <div class="bg-red-100 mb-4 rounded">
        <div class="font-medium text-red-600 px-2 pt-2">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600 p-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
