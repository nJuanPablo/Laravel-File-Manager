<li>
    <strong>📂 <a href="{{ url('/folder/' . $folder->id) }}">{{ $folder->name }}</a></strong>
    @if ($folder->files->count() > 0)
        <ul>
            @foreach ($folder->files as $file)
                <li>📄 {{ $file->name }}</li>
            @endforeach
        </ul>
    @endif
    
    @if ($folder->children->count() > 0)
        <ul>
            @foreach ($folder->children as $subfolder)
                @include('home-options', ['folder' => $subfolder])
            @endforeach
        </ul>
    @endif
</li>