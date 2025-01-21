@extends('layouts.app')

@section('title', 'Home Page')

@section('css')
    <!-- Include Lightbox CSS and JS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">  
@endsection

@section('scripts')
    {{-- <script>
    document.getElementById('image-input').addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const img = document.getElementById('image-preview');
                img.src = e.target.result; // Update image preview with the new file
            };
            reader.readAsDataURL(file);
        }

        // Add a random query string to force the browser to refresh
        const img = document.getElementById('image-preview');
        const randomStr = Math.random().toString(36).substring(7); // Generate random string
        img.src = img.src.split('?')[0] + '?' + randomStr;
    });
    </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script> 
@endsection

@section('content')
<div class="space-y-4">
    {{-- DESKTOP END HERE --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Card 1 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/homepage/home_bg_1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/homepage/home_bg_1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Desktop Landing bg 1</p>
            </div>
            <div class="text-right">
                <form action="{{ route('homeuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="homepage/home_bg_1.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-1" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-1').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    
        <!-- Card 2 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/homepage/home_bg_2.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/homepage/home_bg_2.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Desktop Landing bg 2</p>
            </div>
            <div class="text-right">
                <form action="{{ route('homeuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="homepage/home_bg_2.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-2" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-2').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Card 1 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/homepage/home_bg_3.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/homepage/home_bg_3.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Desktop Landing bg 3</p>
            </div>
            <div class="text-right">
                <form action="{{ route('homeuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="homepage/home_bg_3.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-3" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-3').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    
        <!-- Card 2 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/homepage/home_bg_4.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/homepage/home_bg_4.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Desktop Landing bg 4</p>
            </div>
            <div class="text-right">
                <form action="{{ route('homeuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="homepage/home_bg_4.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-4" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-4').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    </div> 
    {{-- DESKTOP END HERE --}}
    {{-- MOBILE START HERE --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Card 1 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/homepage/home_bg_1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/homepage/home_bg_1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Mobile Landing bg 1</p>
            </div>
            <div class="text-right">
                <form action="{{ route('homeuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="homepage/home_bg_1.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-5" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-5').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    
        <!-- Card 2 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/homepage/home_bg_1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/homepage/home_bg_1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Mobile Landing bg 2</p>
            </div>
            <div class="text-right">
                <form action="{{ route('homeuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="homepage/home_bg_1.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-6" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-6').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Card 1 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/homepage/home_bg_1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/homepage/home_bg_1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Mobile Landing bg 3</p>
            </div>
            <div class="text-right">
                <form action="{{ route('homeuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="homepage/home_bg_1.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-7" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-7').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    
        <!-- Card 2 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/homepage/home_bg_1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/homepage/home_bg_1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Mobile Landing bg</p>
            </div>
            <div class="text-right">
                <form action="{{ route('homeuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="homepage/home_bg_1.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-8" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-8').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    </div>
    {{-- MOBILE END HERE --}}          
</div>
@endsection