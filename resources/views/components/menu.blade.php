{{-- <style>
    [x-cloak] {
    display: none !important;
}
</style>
<div x-cloak>
    <ul class="mt-6">
        <li class="relative px-6 py-3" @click="activeLink = 'dashboard_page'">
            <span x-show="activeLink === 'dashboard_page' || '{{ request()->routeIs('dashboard') }}'" class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
            <a :class="{'text-gray-800 dark:text-white': activeLink === 'dashboard_page' || '{{ request()->routeIs('dashboard') }}'}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-white" href="{{ route('dashboard') }}">
                <i class="fas fa-home w-5 h-5" aria-hidden="true"></i>
                <span class="ml-4">dashboard</span>
            </a>
        </li>
    </ul>
    <ul>
        <li class="relative px-6 py-3" @click="activeLink = 'services'">
            <span x-show="activeLink === 'services' || '{{ request()->routeIs('services') }}'" class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
            <a :class="{'text-gray-800 dark:text-white': activeLink === 'services' || '{{ request()->routeIs('services') }}'}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-white" href="{{ route('services') }}">
                <i class="fas fa-cogs w-5 h-5" aria-hidden="true"></i>
                <span class="ml-4">Services</span>
            </a>
        </li>
    </ul>
</div> --}}
<style>
    [x-cloak] {
        display: none !important;
    }
</style>
<div x-data="{
        activeLink: localStorage.getItem('activeLink') || 'dashboard_page',
        setActiveLink(link) {
            this.activeLink = link;
            localStorage.setItem('activeLink', link);
        }
    }" 
    x-init="setActiveLink(activeLink)"
    x-cloak>
    <ul class="mt-6">
        <li class="relative px-6 py-3" @click="setActiveLink('dashboard_page')">
            <span x-show="activeLink === 'dashboard_page'" 
                  class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" 
                  aria-hidden="true"></span>
            <a wire:navigate
               :class="{'text-gray-800 dark:text-white': activeLink === 'dashboard_page'}" 
               class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-white" 
               href="{{ route('dashboard') }}">
                <i class="fas fa-home w-5 h-5" aria-hidden="true"></i>
                <span class="ml-4">Home page</span>
            </a>
        </li>
        <li class="relative px-6 py-3" @click="setActiveLink('services')">
            <span x-show="activeLink === 'services'" 
                  class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" 
                  aria-hidden="true"></span>
            <a wire:navigate
               :class="{'text-gray-800 dark:text-white': activeLink === 'services'}" 
               class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-white" 
               href="{{ route('dashboard.services') }}">
                <i class="fas fa-cogs w-5 h-5" aria-hidden="true"></i>
                <span class="ml-4">Services</span>
            </a>
        </li>
        <li class="relative px-6 py-3" @click="setActiveLink('gallery')">
            <span x-show="activeLink === 'gallery'" 
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" 
                aria-hidden="true"></span>
            <a wire:navigate
            :class="{'text-gray-800 dark:text-white': activeLink === 'gallery'}" 
            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-white" 
            href="{{ route('dashboard.gallery') }}">
                <i class="fas fa-photo-video w-5 h-5" aria-hidden="true"></i>
                <span class="ml-4">Gallery</span>
            </a>
        </li>
        <li class="relative px-6 py-3" @click="setActiveLink('aboutus')">
            <span x-show="activeLink === 'aboutus'" 
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" 
                aria-hidden="true"></span>
            <a wire:navigate
            :class="{'text-gray-800 dark:text-white': activeLink === 'aboutus'}" 
            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-white" 
            href="{{ route('dashboard.aboutus') }}">
                <i class="fas fa-users w-5 h-5" aria-hidden="true"></i>
                <span class="ml-4">About Us</span>
            </a>
        </li>
        <li class="relative px-6 py-3" @click="setActiveLink('moregallery')">
            <span x-show="activeLink === 'moregallery'" 
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" 
                aria-hidden="true"></span>
            <a wire:navigate
            :class="{'text-gray-800 dark:text-white': activeLink === 'moregallery'}" 
            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-white" 
            href="{{ route('dashboard.moregallery') }}">
                <i class="fas fa-users w-5 h-5" aria-hidden="true"></i>
                <span class="ml-4">More Gallery</span>
            </a>
        </li>
    </ul>
</div>