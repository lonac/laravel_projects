<div class="well">
    <h2><a href="{{ url('churches/' . $church->slug) }}">{{ $church->name }}</a></h2>
    <p>Category: {{ $church->category->name }}</p>
    <p>Region: {{ $church->region->name }}</p>
    <p>District: {{ $church->district->name }}</p>
</div>