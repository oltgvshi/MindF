<x-home class="illusion-single">

    <div class="wrapper">
        <div class="illusion-wrapper">
            <div class="illusion-menu">
                <h2>{{$illusion->name}}</h2>
            </div>

            <div class="illusion-image">
                @if (pathinfo($illusion->image_url, PATHINFO_EXTENSION) === 'mp4')
                    <video src="{{ asset('storage/' . $illusion->image_url) }}" alt="{{ $illusion->name }}" autoplay loop muted class="display-illusion">
                        Your browser does not support the video tag.
                    </video>
                @else
                    <img src="{{ asset('storage/' . $illusion->image_url) }}" alt="{{ $illusion->name }}" loading="lazy" class="display-illusion">
                @endif
            </div>

            <div class="instructions">
                <div class="description">
                    <h2>Description</h2>
                    <p>{{$illusion->description}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <p><strong>What: </strong>{{$illusion->what}}</p>
        <p><strong>How To: </strong>{{$illusion->how}}</p>
    </div>    

    <x-footer/>

</x-home>