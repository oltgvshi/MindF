<a class="illusion" href="/illusions/{{$illusion->id}}">
    <div class="image">
        @if (pathinfo($illusion->image_url, PATHINFO_EXTENSION) === 'mp4')
            <video src="{{ asset('storage/' . $illusion->image_url) }}" alt="{{ $illusion->name }}" autoplay loop muted>
                Your browser does not support the video tag.
            </video>
        @else
            <img src="{{ asset('storage/' . $illusion->image_url) }}" alt="{{ $illusion->name }}" loading="lazy">
        @endif


        <div class="hover">
            <svg class="" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 6H16V8H8V6ZM4 10V8H8V10H4ZM2 12V10H4V12H2ZM2 14V12H0V14H2ZM4 16H2V14H4V16ZM8 18H4V16H8V18ZM16 18V20H8V18H16ZM20 16V18H16V16H20ZM22 14V16H20V14H22ZM22 12H24V14H22V12ZM20 10H22V12H20V10ZM20 10V8H16V10H20ZM10 11H14V15H10V11Z" fill="currentColor"></path></svg>
        </div>
    </div>

    <h2>{{$illusion->name}}</h2>
    <p>{{$illusion->description}}</p>
</a>