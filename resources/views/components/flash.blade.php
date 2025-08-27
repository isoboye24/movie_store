@if (session('success'))
    <div class="mb-4 p-3 bg-green-500 text-white rounded">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="mb-4 p-3 bg-red-500 text-white rounded">
        {{ session('error') }}
    </div>
@endif
