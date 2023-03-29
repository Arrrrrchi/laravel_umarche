<div>
    @if(empty($filename))
        <img src="{{ asset('images/no_image.jpeg') }}" alt="">
    @else
        <img src="{{ asset('storage/shops/' . $filename) }}" alt="">
    @endif
</div>
