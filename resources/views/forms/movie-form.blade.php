<form action="{{ isset($movie) ? route('admin.movies.update', $movie) : route('admin.movies.store') }}" method="POST" class="w-96 mx-auto flex flex-col space-y-3 mb-12">
    @csrf
    @if(isset($movie))
        @method('PUT')
    @endif

    <h2 class="text-xl font-semibold text-slate-700">
        {{ isset($movie) ? 'Film bearbeiten' : 'Neuer Film' }}
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
               name="title" 
               value="{{ old('title', isset($movie) ? $movie->title : '') }}" 
               class="w-full px-3 py-2 border border-slate-400 rounded bg-white" 
               placeholder="Titel">
    </div>
    <div>
        <input type="text" 
               name="image_url" 
               value="{{ old('image_url', isset($movie) ? $movie->image_url : '') }}" 
               class="w-full px-3 py-2 border border-slate-400 rounded bg-white" 
               placeholder="Image URL">
    </div>

    <div>
        <input type="number" 
               name="released" 
               value="{{ old('released', isset($movie) ? $movie->released : '') }}" 
               min="1940" max="2050"
               class="w-full px-3 py-2 border border-slate-400 rounded bg-white" 
               placeholder="Erscheinungsjahr z.B. 1989">
    </div>

    <div>
        <textarea name="description" 
                  class="w-full px-3 py-2 border border-slate-400 rounded bg-white" 
                  placeholder="Beschreibung...">{{ old('description', $movie->description ?? '') }}</textarea>
    </div>
    <div class="">                
        <select name="language_id" class="w-full px-3 py-2 border border-slate-400 rounded bg-white">
            <option value="" class="w-full p-1" selected disabled>Director</option>            
        </select>
    </div>

    <div>
        <button type="submit" class="w-full px-3 py-2 bg-sky-700 text-slate-100 rounded hover:bg-sky-800 hover:cursor-pointer">
            {{ isset($movie) ? 'Speichern' : 'Anlegen' }}
        </button>
    </div>
    
    @if(isset($movie))
    <a href="{{ route('admin.movies.index') }}" class="text-slate-700 hover:text-slate-500 hover:underline">Zurück</a>
    @endif
</form>