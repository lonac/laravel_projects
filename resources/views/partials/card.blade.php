<div class="well">
    <h2><a href="{{ url('churches/' . $church->slug) }}">{{ $church->name }}</a></h2>
    <p>Category: <a href="{{ url('categories/' . $church->category->slug) }}">{{ $church->category->name }}</a></p>
    <p>Region: {{ $church->region->name }}</p>
    <p>District: {{ $church->district->name }}</p>
</div>