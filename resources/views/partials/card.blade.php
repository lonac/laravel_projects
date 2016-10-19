<div class="well">
    <h2><a href="{{ url('churches/' . $church->slug) }}">{{ $church->name }}</a></h2>
    <p>{{ $church->region->name }}</p>
    <p>{{ $church->district->name }}</p>
</div>