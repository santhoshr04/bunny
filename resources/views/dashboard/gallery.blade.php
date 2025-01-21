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
    {{-- Baby START HERE --}}
    <div class="text-center p-4">
        <h6 class="text-2xl font-bold text-gray-800 dark:text-white tracking-wide">Baby Gallery</h6>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Card 1 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/gallery/gallery1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/gallery/gallery1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Baby Img 1</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery1.jpg">
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
                <a href="{{ asset('storage/gallery/gallery2.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/gallery/gallery2.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Baby Img 2</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery2.jpg">
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
                <a href="{{ asset('storage/gallery/gallery3.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/gallery/gallery3.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Baby Img 3</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery3.jpg">
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
                <a href="{{ asset('storage/gallery/gallery4.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/gallery/gallery4.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Baby Img 4</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery4.jpg">
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
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Card 1 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/gallery/gallery5.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/gallery/gallery5.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Baby Img 5</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery5.jpg">
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
                <a href="{{ asset('storage/gallery/gallery6.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/gallery/gallery6.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Baby Img 6</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery6.jpg">
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
    {{-- Baby END HERE --}}

    {{-- Maternity START HERE --}}
    <div class="text-center p-4">
        <h6 class="text-2xl font-bold text-gray-800 dark:text-white tracking-wide">Maternity Gallery</h6>
    </div>    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Card 1 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/gallery/gallery7.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/gallery/gallery7.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Maternity Img 1</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery7.jpg">
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
                <a href="{{ asset('storage/gallery/gallery8.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/gallery/gallery8.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Maternity Img 2</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery8.jpg">
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
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Card 1 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/gallery/gallery9.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/gallery/gallery9.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Maternity Img 3</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery9.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-9" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-9').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    
        <!-- Card 2 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/gallery/gallery10.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/gallery/gallery10.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Maternity Img 4</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery10.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-10" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-10').click();">
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
                <a href="{{ asset('storage/gallery/gallery11.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/gallery/gallery11.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Maternity Img 5</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery11.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-11" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-11').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    
        <!-- Card 2 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/gallery/gallery12.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/gallery/gallery12.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Maternity Img 6</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery12.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-12" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-12').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    </div>
    {{-- Maternity END HERE --}}

    {{-- Family START HERE --}}
    <div class="text-center p-4">
        <h6 class="text-2xl font-bold text-gray-800 dark:text-white tracking-wide">Family Gallery</h6>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Card 1 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/gallery/gallery13.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/gallery/gallery13.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Family Img 1</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery13.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-13" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-13').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    
        <!-- Card 2 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/gallery/gallery14.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/gallery/gallery14.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Family Img 2</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery14.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-14" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-14').click();">
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
                <a href="{{ asset('storage/gallery/gallery15.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/gallery/gallery15.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Family Img 3</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery15.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-15" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-15').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    
        <!-- Card 2 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/gallery/gallery16.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/gallery/gallery16.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Family Img 4</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery16.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-16" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-16').click();">
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
                <a href="{{ asset('storage/gallery/gallery17.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/gallery/gallery17.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Family Img 5</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery17.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-17" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-17').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    
        <!-- Card 2 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/gallery/gallery18.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/gallery/gallery18.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Family Img 6</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery18.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-18" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-18').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    </div>
    {{-- Family END HERE --}}

    {{-- Kids START HERE --}}
    <div class="text-center p-4">
        <h6 class="text-2xl font-bold text-gray-800 dark:text-white tracking-wide">Kids Gallery</h6>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Card 1 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/gallery/gallery19.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/gallery/gallery19.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Kids Img 1</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery19.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-19" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-19').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    
        <!-- Card 2 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/gallery/gallery20.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/gallery/gallery20.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Kids Img 2</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery20.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-20" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-20').click();">
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
                <a href="{{ asset('storage/gallery/gallery21.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/gallery/gallery21.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Kids Img 3</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery21.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-21" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-21').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    
        <!-- Card 2 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/gallery/gallery22.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/gallery/gallery22.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Kids Img 4</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery22.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-22" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-22').click();">
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
                <a href="{{ asset('storage/gallery/gallery23.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/gallery/gallery23.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Kids Img 5</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery23.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-23" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-23').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    
        <!-- Card 2 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/gallery/gallery24.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/gallery/gallery24.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Kids Img 6</p>
            </div>
            <div class="text-right">
                <form action="{{ route('galleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="gallery/gallery24.jpg">
                    <input type="file" name="image" accept="image/*" class="hidden" id="input-image-24" onchange="this.form.submit()">
                    <button type="button" 
                            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500" 
                            onclick="document.getElementById('input-image-24').click();">
                        Upload
                    </button>
                    <p class="text-sm text-gray-500 mt-2">Supports: JPG, JPEG, PNG | Max: 1 MB</p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection