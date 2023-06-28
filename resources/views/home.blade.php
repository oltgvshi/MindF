<x-home>
    <div class="mindf-wrapper">
        <h1>Mindf@#$. <small>OPTICAL ILLUSIONS & MIND BENDING</small></h1>

        <div class="illusions">
            @foreach ($illusions as $illusion)
                <x-illusion-card :illusion="$illusion"/>
            @endforeach
        </div>

        <audio autoplay loop>
            <source src="{{ asset('storage/psychedelic.mp3') }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>    
        
        <x-footer/>
    </div>


    <script src="{{ asset('js/scrolltransform.js') }}"></script>
    <script src="{{ asset('js/fade.js') }}"></script>

    

</x-home>