<div class="flex items-center justify-center">
    <div class="overflow-auto lg:overflow-visible w-full">
        <table class="table text-gray-400 border-separate space-y-6 text-sm w-full">
            <thead class="bg-gray-900 text-gray-500">
                <tr>
                    <th class="p-3 text-left">Image</th>
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Description</th>
                    <th class="p-3 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($illusions as $illusion)
                <tr class="bg-gray-900 ">
                    <td class="w-20 h-11">
                        {{-- <img src="{{ asset('storage/' . $illusion->image_url) }}" alt="{{$illusion->name}}" class="object-cover w-full h-full"> --}}

                        @if (pathinfo($illusion->image_url, PATHINFO_EXTENSION) === 'mp4')
                            <video src="{{ asset('storage/' . $illusion->image_url) }}" alt="{{ $illusion->name }}" class="object-cover w-full h-full" autoplay loop muted>
                                Your browser does not support the video tag.
                            </video>
                        @else
                            <img src="{{ asset('storage/' . $illusion->image_url) }}" alt="{{ $illusion->name }}" class="object-cover w-full h-full" loading="lazy">
                        @endif
                    </td>
                    <td class="p-3 font-bold">{{$illusion->name}}</td>
                    <td class="p-3 font-bold">{{$illusion->description}}</td>
                    <td>Delete</td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
</div>
<style>
.table {
    border-spacing: 0 15px;
}

i {
    font-size: 1rem !important;
}

.table tr {
    border-radius: 20px;
}

tr td:nth-child(n+4),
tr th:nth-child(n+4) {
    border-radius: 0 .625rem .625rem 0;
}

tr td:nth-child(1),
tr th:nth-child(1) {
    border-radius: .625rem 0 0 .625rem;
}
</style>