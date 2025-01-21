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
    {{-- MORE START HERE --}}
    <div class="text-center p-4">
        <h6 class="text-2xl font-bold text-gray-800 dark:text-white tracking-wide">More Gallery</h6>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Card 1 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/moregallery/moregallery1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/moregallery/moregallery1.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 1</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery1.jpg">
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
                <a href="{{ asset('storage/moregallery/moregallery2.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/moregallery/moregallery2.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 2</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery2.jpg">
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
                <a href="{{ asset('storage/moregallery/moregallery3.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/moregallery/moregallery3.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 3</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery3.jpg">
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
                <a href="{{ asset('storage/moregallery/moregallery4.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/moregallery/moregallery4.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 4</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery4.jpg">
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
                <a href="{{ asset('storage/moregallery/moregallery5.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/moregallery/moregallery5.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 5</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery5.jpg">
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
                <a href="{{ asset('storage/moregallery/moregallery6.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/moregallery/moregallery6.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 6</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery6.jpg">
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
                <a href="{{ asset('storage/moregallery/moregallery7.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/moregallery/moregallery7.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 7</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery7.jpg">
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
                <a href="{{ asset('storage/moregallery/moregallery8.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/moregallery/moregallery8.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 8</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery8.jpg">
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

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Card 1 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/moregallery/moregallery9.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/moregallery/moregallery9.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 9</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery9.jpg">
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
                <a href="{{ asset('storage/moregallery/moregallery10.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/moregallery/moregallery10.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 10</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery10.jpg">
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
                <a href="{{ asset('storage/moregallery/moregallery11.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/moregallery/moregallery11.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 11</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery11.jpg">
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
                <a href="{{ asset('storage/moregallery/moregallery12.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/moregallery/moregallery12.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 12</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery12.jpg">
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

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Card 1 -->
        <div class="flex items-center p-4 border-2 border-dashed border-blue-500 rounded-lg">
            <div class="w-24 h-24 flex-shrink-0">
                <a href="{{ asset('storage/moregallery/moregallery13.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/moregallery/moregallery13.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 13</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery13.jpg">
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
                <a href="{{ asset('storage/moregallery/moregallery14.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/moregallery/moregallery14.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 14</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery14.jpg">
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
                <a href="{{ asset('storage/moregallery/moregallery15.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/moregallery/moregallery15.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 15</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery15.jpg">
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
                <a href="{{ asset('storage/moregallery/moregallery16.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/moregallery/moregallery16.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 16</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery16.jpg">
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
                <a href="{{ asset('storage/moregallery/moregallery17.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/moregallery/moregallery17.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-1">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 17</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery17.jpg">
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
                <a href="{{ asset('storage/moregallery/moregallery18.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" data-lightbox="image-2">
                    <img src="{{ asset('storage/moregallery/moregallery18.jpg') }}?{{ \Illuminate\Support\Str::random(6) }}" 
                         alt="Image Preview" 
                         class="w-full h-full object-cover rounded-lg" 
                         id="image-2">
                </a>
            </div>
            <div class="flex-1 pl-4">
                <p class="text-lg font-medium text-gray-900 dark:text-white">Img 18</p>
            </div>
            <div class="text-right">
                <form action="{{ route('moregalleryuploadImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="image_name" value="moregallery/moregallery18.jpg">
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
</div>
{{-- MORE END HERE --}}
@endsection