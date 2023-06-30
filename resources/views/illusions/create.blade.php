<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create an Illusion Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <div class="flex mb-6">
                        <a href="/dashboard" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 ounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600 cursor-pointer">← Back</a>
                    </div>

                    <form method="POST" action="/dashboard" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="text-gray-200" for="image_url">Illusion Image/Video</label><br>
                            <input type="file" id="image_url" name="image_url"><br>
                            @error('image_url')
                                <p class="text-red-500 font-medium">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="text-gray-200" for="name">Illusion Name</label>
                            <input id="name" name="name" type="text" value="{{old('name')}}" class="block w-full px-4 py-2 mt-2 border rounded-md bg-gray-800 text-gray-300 border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                            @error('name')
                                <p class="text-red-500 font-medium">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="text-gray-200" for="description">Illusion Description</label>
                            <input id="description" name="description" type="text" value="{{old('description')}}" class="block w-full px-4 py-2 mt-2 border rounded-md bg-gray-800 text-gray-300 border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                            @error('description')
                                <p class="text-red-500 font-medium">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="text-gray-200" for="what">What?</label>
                            <input id="what" name="what" type="text" value="{{old('what')}}" class="block w-full px-4 py-2 mt-2 border rounded-md bg-gray-800 text-gray-300 border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                            @error('what')
                                <p class="text-red-500 font-medium">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="text-gray-200" for="how">How?</label>
                            <input id="how" name="how" type="text" value="{{old('how')}}" class="block w-full px-4 py-2 mt-2 border rounded-md bg-gray-800 text-gray-300 border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                            @error('how')
                                <p class="text-red-500 font-medium">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex justify-end mt-6">
                            <input type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 ounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600 cursor-pointer" value="Create"> 
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>