<x-home class="illusion-single">

    <div class="wrapper">
        <div class="illusion-wrapper">
            <div class="illusion-menu">
                <h2>{{$pixi->name}}</h2>
            </div>

            <div class="illusion-image pixi-1">

            </div>

            <div class="instructions">
                <div class="description">
                    <h2>Description</h2>
                    <p>{{$pixi->description}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <p><strong>What: </strong>{{$pixi->what}}</p>
        <p><strong>How To: </strong>{{$pixi->how}}</p>
    </div>    

    <x-footer/>

    <script src="{{ asset('js/pixi-1.js') }}"></script>
</x-home>