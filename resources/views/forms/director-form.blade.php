<form action="{{ isset($director) ? route('admin.directors.update', $director) : route('admin.directors.store') }}" method="POST" class="w-96 mx-auto flex flex-col space-y-3 mb-12">
    @csrf
    @if(isset($director))
        @method('PUT')
    @endif

    <h2 class="text-xl font-semibold text-slate-700">
        {{ isset($director) ? 'Regisseur bearbeiten' : 'Neuer Regisseur' }}
    </h2>

    <x-flash />
    @if($errors->any())
        <ul class="list-disc list-inside text-rose-600">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div>
        <input type="text" 
               name="name" 
               value="{{ old('name', isset($director) ? $director->name : '') }}" 
               class="w-full px-3 py-2 border border-slate-400 rounded bg-white" 
               placeholder="Name">
    </div>
    <div>
        <input type="email" 
               name="email" 
               value="{{ old('email', isset($director) ? $director->email : '') }}" 
               class="w-full px-3 py-2 border border-slate-400 rounded bg-white" 
               placeholder="Email">
    </div>
    <div>
        <input type="text" 
               name="image_url" 
               value="{{ old('image_url', isset($director) ? $director->image_url : '') }}" 
               class="w-full px-3 py-2 border border-slate-400 rounded bg-white" 
               placeholder="Image URL">
    </div>
    
    <div>
        <button type="submit" class="w-full px-3 py-2 bg-sky-700 text-slate-100 rounded hover:bg-sky-800 hover:cursor-pointer">
            {{ isset($director) ? 'Speichern' : 'Anlegen' }}
        </button>
    </div>
    @if(isset($director))
    <a href="{{ route('admin.directors.index') }}" class="text-slate-700 hover:text-slate-500 hover:underline">Zurück</a>
    @endif
</form>