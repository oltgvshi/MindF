<x-home class="home">
    <div class="mindf-wrapper">
        <h1 id="mindf" onclick="toggleAudio()">Mindf@#$. <small>OPTICAL ILLUSIONS & MIND BENDING</small></h1>
        
        <x-slider-buttons/>

        

        <div class="illusions">
            @foreach ($pixies as $pixi)
                <x-illusion-pixi :pixi="$pixi" />
            @endforeach
            
            @foreach ($illusions as $illusion)
                <x-illusion-card :illusion="$illusion"/>
            @endforeach
        </div>
        
        
        <audio id="audio" loop>
            <source src="{{ asset('storage/psychedelic.mp3') }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>    
            
        <x-footer/>
    </div>
        

    <script src="{{ asset('js/scrolltransform.js') }}"></script>
    <script src="{{ asset('js/fade.js') }}"></script>
    <script src="{{ asset('js/audio.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>

</x-home>