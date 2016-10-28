<div class="thumbnail">
    @foreach($church->photos as $photo)
        @if($photo->featured)
            <img src="{{ url('images/churches/' . $church->id . '/' . $photo->url) }}"
                 class="img-responsive" alt="Photo" title="{{ $photo->description }}">
        @endif
    @endforeach
    <img src="#" class="img-responsive" alt="">
    <div class="caption">
        <h2><a href="{{ url('churches/' . $church->slug) }}">{{ $church->name }}</a></h2>
        <p>Category: <a href="{{ url('categories/' . $church->category->slug) }}">{{ $church->category->name }}</a></p>
        <p>Region: {{ $church->region->name }}</p>
        <p>District: {{ $church->district->name }}</p>
    </div>
</div>