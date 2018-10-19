<ol>
    @foreach($categories as $category)
        <li><a href="{{ route('vehicles.list.by.category', $category->id) }}">{{ $category->name }}</a></li>
    @endforeach
</ol>