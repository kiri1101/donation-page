<div x-data="{ button1: false }" class="card">
    <div class="card-body flex flex-col bg-white">
        <ul class="steps flex justify-center">
            <a wire:click="goToPreviousPage" href="#" type="button" class="step {{ $currentPage != 1 ? 'step-default' : 'step-warning' }} {{ $currentPage != 2 ? 'step-default' : 'step-warning' }}"></a>
            <a href="#" type="button" class="step {{ $currentPage != 2 ? 'step-default' : 'step-warning' }}"></a>
        </ul>

        <h3 class="text-black my-2 font-bold flex justify-center">{{ $pages[$currentPage]['heading'] }}</h3>
        @if ($currentPage === 2)
            <h2 class="text-black text-sm text-center font-semibold">{{ $pages[$currentPage]['subheading'] }}</h2>
        @endif

        <div x-data="{ alertForm: true }">
            <div x-cloak x-show="alertForm" x-init="setTimeout(() => alertForm = false, 5000)" role="alert">    
                @if ($errors->isNotEmpty())
                    <div class="alert alert-error shadow-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span class="block sm:inline">Oops! Something's wrong</span>
                        </div> 
                    </div>                   
                @endif
                @if ($success)
                    <div class="alert alert-success shadow-lg">
                        <div>
                            <span wire:click="resetSuccess">
                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            </span>                   
                            <span>{{ $success }}</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="flex flex-row gap-2 justify-center">
            <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                <path fill="#3C58BF" d="M23.6 41l3.2-18h5l-3.1 18z"/><path fill="#293688" d="M23.6 41l4.1-18h4.1l-3.1 18z"/><path fill="#3C58BF" d="M46.8 23.2c-1-.4-2.6-.8-4.6-.8-5 0-8.6 2.5-8.6 6.1 0 2.7 2.5 4.1 4.5 5 2 .9 2.6 1.5 2.6 2.3 0 1.2-1.6 1.8-3 1.8-2 0-3.1-.3-4.8-1l-.7-.3-.7 4.1c1.2.5 3.4 1 5.7 1 5.3 0 8.8-2.5 8.8-6.3 0-2.1-1.3-3.7-4.3-5-1.8-.9-2.9-1.4-2.9-2.3 0-.8.9-1.6 2.9-1.6 1.7 0 2.9.3 3.8.7l.5.2.8-3.9z"/><path fill="#293688" d="M46.8 23.2c-1-.4-2.6-.8-4.6-.8-5 0-7.7 2.5-7.7 6.1 0 2.7 1.6 4.1 3.6 5 2 .9 2.6 1.5 2.6 2.3 0 1.2-1.6 1.8-3 1.8-2 0-3.1-.3-4.8-1l-.7-.3-.7 4.1c1.2.5 3.4 1 5.7 1 5.3 0 8.8-2.5 8.8-6.3 0-2.1-1.3-3.7-4.3-5-1.8-.9-2.9-1.4-2.9-2.3 0-.8.9-1.6 2.9-1.6 1.7 0 2.9.3 3.8.7l.5.2.8-3.9z"/><path fill="#3C58BF" d="M55.4 23c-1.2 0-2.1.1-2.6 1.3L45.3 41h5.4l1-3h6.4l.6 3h4.8l-4.2-18h-3.9zm-2.3 12c.3-.9 2-5.3 2-5.3s.4-1.1.7-1.8l.3 1.7s1 4.5 1.2 5.5h-4.2V35z"/><path fill="#293688" d="M56.6 23c-1.2 0-2.1.1-2.6 1.3L45.3 41h5.4l1-3h6.4l.6 3h4.8l-4.2-18h-2.7zm-3.5 12c.4-1 2-5.3 2-5.3s.4-1.1.7-1.8l.3 1.7s1 4.5 1.2 5.5h-4.2V35z"/><path fill="#3C58BF" d="M14.4 35.6l-.5-2.6c-.9-3-3.8-6.3-7-7.9l4.5 16h5.4l8.1-18h-5.4l-5.1 12.5z"/><path fill="#293688" d="M14.4 35.6l-.5-2.6c-.9-3-3.8-6.3-7-7.9l4.5 16h5.4l8.1-18h-4.4l-6.1 12.5z"/><path fill="#FFBC00" d="M.5 23l.9.2c6.4 1.5 10.8 5.3 12.5 9.8l-1.8-8.5c-.3-1.2-1.2-1.5-2.3-1.5H.5z"/><path fill="#F7981D" d="M.5 23c6.4 1.5 11.7 5.4 13.4 9.9l-1.7-7.1c-.3-1.2-1.3-1.9-2.4-1.9L.5 23z"/><path fill="#ED7C00" d="M.5 23c6.4 1.5 11.7 5.4 13.4 9.9L12.7 29c-.3-1.2-.7-2.4-2.1-2.9L.5 23z"/><path fill="#051244" d="M19.4 35L16 31.6l-1.6 3.8-.4-2.5c-.9-3-3.8-6.3-7-7.9l4.5 16h5.4l2.5-6zM28.7 41l-4.3-4.4-.8 4.4h5.1zM40.2 34.8c.4.4.6.7.5 1.1 0 1.2-1.6 1.8-3 1.8-2 0-3.1-.3-4.8-1l-.7-.3-.7 4.1c1.2.5 3.4 1 5.7 1 3.2 0 5.8-.9 7.3-2.5l-4.3-4.2zM46 41h4.7l1-3h6.4l.6 3h4.8l-1.7-7.3-6-5.8.3 1.6s1 4.5 1.2 5.5h-4.2c.4-1 2-5.3 2-5.3s.4-1.1.7-1.8"/>
            </svg>
            <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 48 48" viewBox="0 0 48 48">
                <path fill="#f44336" d="M18,24c0-4.903,2.363-9.243,6-11.98C21.491,10.132,18.382,9,15,9C6.716,9,0,15.716,0,24 c0,8.284,6.716,15,15,15c3.382,0,6.491-1.133,9-3.02C20.363,33.242,18,28.903,18,24z"/>
                <path fill="#ff9800" d="M33,9c-3.382,0-6.491,1.132-9,3.02c3.637,2.737,6,7.077,6,11.98s-2.363,9.242-6,11.98 c2.509,1.888,5.618,3.02,9,3.02c8.284,0,15-6.716,15-15C48,15.716,41.284,9,33,9z"/>
                <ellipse cx="24" cy="24" fill="#ff7300" rx="6" ry="11.98"/>
            </svg>           
            <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                <path fill="#2FABF7" d="M5.9 26.5h2.2L7 23.7z"/><path fill="#228FE0" d="M33.2 24.1c-.2-.1-.5-.1-.8-.1h-2v1.6h2c.3 0 .6 0 .8-.1.2-.1.3-.4.3-.7.1-.4-.1-.6-.3-.7z"/><path fill="#0571C1" d="M54.6 21.1v1.2l-.6-1.2h-4.7v1.2l-.6-1.2h-6.4c-1.1 0-2 .2-2.8.6v-.6H35v.6c-.5-.4-1.1-.6-1.9-.6H17l-1.1 2.5-1.1-2.5H9.7v1.2l-.6-1.2H4.8l-2 4.7L.5 31h5.1l.6-1.6h1.4l.6 1.6H14v-1.2l.5 1.2h2.9l.5-1.2V31h13.9v-2.6h.2c.2 0 .2 0 .2.3v2.2h7.2v-.6c.6.3 1.5.6 2.7.6h3l.6-1.6h1.4l.6 1.6h5.8v-1.5l.9 1.5h4.7v-9.8h-4.5zm-33.8 8.4h-1.7V24l-2.4 5.5h-1.5L12.8 24v5.5H9.4L8.7 28H5.3l-.6 1.6H2.8l3-7.1h2.5l2.8 6.7v-6.7h2.7l2.2 4.8 2-4.8h2.8v7zm6.8-5.5h-3.9v1.3h3.8v1.4h-3.8v1.4h3.9v1.5H22v-7.1h5.6V24zm7.5 2.9c.2.4.3.7.3 1.3v1.4h-1.7v-.9c0-.4 0-1-.3-1.4-.3-.3-.6-.3-1.2-.3h-1.8v2.6h-1.7v-7.1h3.8c.9 0 1.5 0 2 .3s.8.8.8 1.6c0 1.1-.7 1.7-1.2 1.9.5.1.8.4 1 .6zm3 2.6h-1.7v-7.1h1.7v7.1zm19.7 0h-2.4l-3.2-5.3v5.3h-3.4l-.6-1.5h-3.5l-.6 1.6h-1.9c-.8 0-1.8-.2-2.4-.8-.6-.6-.9-1.4-.9-2.7 0-1 .2-2 .9-2.8.5-.6 1.4-.8 2.5-.8h1.6V24h-1.6c-.6 0-.9.1-1.3.4-.3.3-.5.9-.5 1.6 0 .8.1 1.3.5 1.7.3.3.7.4 1.2.4h.7l2.3-5.5h2.5l2.8 6.7v-6.7H53l2.9 4.9v-4.9h1.7v6.9z"/><path fill="#228FE0" d="M45.3 26.5h2.3l-1.1-2.8zM28.3 40.9v-5.7L25.7 38z"/><path fill="#2FABF7" d="M17.6 35.9v1.3h3.7v1.4h-3.7v1.5h4.1l1.9-2.1-1.8-2.1z"/><path fill="#228FE0" d="M32.1 35.9H30v1.8h2.2c.6 0 1-.3 1-.9-.1-.6-.5-.9-1.1-.9z"/><path fill="#0571C1" d="M63 37.6v-4.5h-4.2c-.9 0-1.6.2-2.1.6v-.6h-4.6c-.7 0-1.6.2-2 .6v-.6H42v.6c-.6-.5-1.7-.6-2.2-.6h-5.4v.6c-.5-.5-1.7-.6-2.3-.6h-6l-1.4 1.5-1.3-1.5h-9v9.8h8.8l1.4-1.5 1.3 1.5h5.4v-2.3h.7c.7 0 1.6 0 2.3-.3V43h4.5v-2.6h.2c.3 0 .3 0 .3.3V43h13.6c.9 0 1.8-.2 2.3-.6v.6h4.3c.9 0 1.8-.1 2.4-.5 1-.6 1.6-1.7 1.6-3 0-.7-.2-1.4-.5-1.9zm-31 1.6h-2v2.4h-3.2l-2-2.3-2.1 2.3h-6.6v-7.1h6.7l2 2.3 2.1-2.3h5.3c1.3 0 2.8.4 2.8 2.3-.1 2-1.5 2.4-3 2.4zm10-.4c.2.3.3.7.3 1.3v1.4h-1.7v-.9c0-.4 0-1.1-.3-1.4-.2-.3-.6-.3-1.2-.3h-1.8v2.6h-1.7v-7.1h3.8c.8 0 1.5 0 2 .3s.9.8.9 1.6c0 1.1-.7 1.7-1.2 1.9.5.2.8.4.9.6zm6.9-2.9H45v1.3h3.8v1.4H45V40h3.9v1.5h-5.6v-7.1h5.6v1.5zm4.2 5.6h-3.2V40h3.2c.3 0 .5 0 .7-.2.1-.1.2-.3.2-.5s-.1-.4-.2-.5c-.1-.1-.3-.2-.6-.2-1.6-.1-3.5 0-3.5-2.2 0-1 .6-2.1 2.4-2.1h3.3V36h-3.1c-.3 0-.5 0-.7.1-.2.1-.2.3-.2.5 0 .3.2.4.4.5.2.1.4.1.6.1h.9c.9 0 1.5.2 1.9.6.3.3.5.8.5 1.5 0 1.5-.9 2.2-2.6 2.2zm8.6-.7c-.4.4-1.1.7-2.1.7h-3.2V40h3.2c.3 0 .5 0 .7-.2.1-.1.2-.3.2-.5s-.1-.4-.2-.5c-.1-.1-.3-.2-.6-.2-1.6-.1-3.5 0-3.5-2.2 0-1 .6-2.1 2.4-2.1h3.3V36h-3c-.3 0-.5 0-.7.1-.2.1-.2.3-.2.5 0 .3.1.4.4.5.2.1.4.1.6.1h.9c.9 0 1.5.2 1.9.6.1 0 .1.1.1.1.3.4.4.9.4 1.4 0 .6-.2 1.1-.6 1.5z"/><path fill="#228FE0" d="M40.2 36.1c-.2-.1-.5-.1-.8-.1h-2v1.6h2c.3 0 .6 0 .8-.1.2-.1.3-.4.3-.7.1-.4-.1-.6-.3-.7zM33.2 24.1c-.2-.1-.5-.1-.8-.1h-2v1.6h2c.3 0 .6 0 .8-.1.2-.1.3-.4.3-.7.1-.4-.1-.6-.3-.7zM45.3 26.5h2.3l-1.1-2.8zM28.3 40.9v-5.7L25.7 38zM32.1 35.9H30v1.8h2.2c.6 0 1-.3 1-.9-.1-.6-.5-.9-1.1-.9z"/><path fill="#228FE0" d="M40.2 36.1c-.2-.1-.5-.1-.8-.1h-2v1.6h2c.3 0 .6 0 .8-.1.2-.1.3-.4.3-.7.1-.4-.1-.6-.3-.7z"/><g><path fill="#2FABF7" d="M31.4 41.3L30 39.8v1.7h-3.3l-2-2.3-2.2 2.3h-6.6v-7h6.7l2.1 2.3 1-1.2-2.5-2.5h-8.8v9.8h8.8l1.5-1.5 1.3 1.5h5.4z"/></g><g><path fill="#2FABF7" d="M21 30.9l-1.3-1.4h-.6v-.6l-1.5-1.5-1 2.1h-1.4L12.8 24v5.5H9.4L8.7 28H5.3l-.7 1.5H2.8l3-7h2.5l2.8 6.7v-6.7h1.5l-1.4-1.4H9.7v1.2l-.5-1.2H4.8l-2 4.7-2.3 5.1H5.7l.6-1.5h1.4l.7 1.5H14v-1.2l.5 1.2h2.9l.5-1.2v1.2z"/><path fill="#2FABF7" d="M16.4 26.3l-1.6-1.6 1.2 2.6z"/></g><g><path fill="#228FE0" d="M61.9 42.4c.9-.6 1.5-1.6 1.6-2.7l-1.4-1.4c.1.3.2.6.2 1 0 .6-.2 1.1-.6 1.5-.4.4-1.1.7-2.1.7h-3.2V40h3.2c.3 0 .5 0 .7-.2.1-.1.2-.3.2-.5s-.1-.4-.2-.5c-.1-.1-.3-.2-.6-.2-1.6-.1-3.5 0-3.5-2.2 0-1 .6-1.9 2.1-2.1l-1.1-1.1c-.2.1-.3.2-.4.2v-.6h-4.6c-.7 0-1.6.2-2 .6v-.6H42v.6c-.6-.5-1.7-.6-2.2-.6h-5.4v.6c-.5-.5-1.7-.6-2.3-.6h-6l-1.4 1.5-1.3-1.5h-1.1l3 3 1.5-1.6h5.3c1.3 0 2.8.4 2.8 2.3 0 2-1.4 2.4-2.9 2.4h-2v1.5l1.5 1.5v-1.5h.5c.7 0 1.6 0 2.3-.3v2.7h4.5v-2.6h.2c.3 0 .3 0 .3.3v2.3h13.6c.9 0 1.8-.2 2.3-.6v.6h4.3c.8.1 1.7 0 2.4-.4zM42 38.8c.2.3.3.7.3 1.3v1.4h-1.7v-.9c0-.4 0-1.1-.3-1.4-.2-.3-.6-.3-1.2-.3h-1.8v2.6h-1.7v-7.1h3.8c.8 0 1.5 0 2 .3s.9.8.9 1.6c0 1.1-.7 1.7-1.2 1.9.5.2.8.4.9.6zm6.9-2.9H45v1.3h3.8v1.4H45V40h3.9v1.5h-5.6v-7.1h5.6v1.5zm4.2 5.6h-3.2V40h3.2c.3 0 .5 0 .7-.2.1-.1.2-.3.2-.5s-.1-.4-.2-.5c-.1-.1-.3-.2-.6-.2-1.6-.1-3.5 0-3.5-2.2 0-1 .6-2.1 2.4-2.1h3.3V36h-3.1c-.3 0-.5 0-.7.1-.2.1-.2.3-.2.5 0 .3.2.4.4.5.2.1.4.1.6.1h.9c.9 0 1.5.2 1.9.6.3.3.5.8.5 1.5 0 1.5-.9 2.2-2.6 2.2z"/><path fill="#228FE0" d="M57.9 36.6c0 .3.1.4.4.5.2.1.4.1.6.1h.9c.6 0 1 .1 1.4.3L59.7 36h-.9c-.3 0-.5 0-.7.1-.1.1-.2.3-.2.5z"/></g><g><path fill="#228FE0" d="M54.4 30.6l.2.3h.1zM48.9 25.1l1.7 4.1v-2.4z"/><path fill="#228FE0" d="M31.8 28.4h.2c.2 0 .2 0 .2.3v2.2h7.2v-.6c.6.3 1.5.6 2.7.6h3l.6-1.6h1.4l.6 1.6h5.8v-1l-1.4-1.4v1.1h-3.4l-.5-1.6h-3.5l-.6 1.6h-1.9c-.8 0-1.8-.2-2.4-.8-.6-.6-.9-1.4-.9-2.7 0-1 .2-2 .9-2.8.5-.6 1.4-.8 2.5-.8h1.6V24h-1.6c-.6 0-.9.1-1.3.4-.3.3-.5.9-.5 1.6 0 .8.1 1.3.5 1.7.3.3.7.4 1.2.4h.7l2.3-5.5h1l-1.4-1.4h-2.6c-1.1 0-2 .2-2.8.6v-.6H35v.6c-.5-.4-1.1-.6-1.9-.6H17l-1.1 2.5-1.1-2.5h-4.4l1.4 1.4h2l1.7 3.7.6.6 1.8-4.4h2.8v7.1H19v-5.5l-1.7 4 2.9 2.9h11.5l.1-2.6zm4.6-5.9h1.7v7.1h-1.7v-7.1zM27.6 24h-3.9v1.3h3.8v1.4h-3.8v1.4h3.9v1.5H22v-7.1h5.6V24zm2.8 5.5h-1.7v-7.1h3.8c.9 0 1.5 0 2 .3s.8.8.8 1.6c0 1.1-.7 1.7-1.2 1.9.4.1.7.4.8.6.2.4.3.7.3 1.3v1.4h-1.7v-.9c0-.4 0-1-.3-1.4-.1-.2-.4-.2-1-.2h-1.8v2.5z"/></g>
            </svg>            
            <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><circle cx="33.9" cy="27.4" r="5.2" fill="#EF9122"/>
                <path fill="#F26E21" d="M28.7 27.4c0-2.9 2.3-5.2 5.2-5.2 2.9 0 5.2 2.3 5.2 5.2 0 2.9-2.3 5.2-5.2 5.2"/><path fill="#F44500" d="M30.3 23.7c2-2 5.3-2 7.3 0s2 5.3 0 7.3"/><path fill="#595A5B" d="M3.8 22.5H1v9.8h2.8c1.5 0 2.6-.4 3.5-1.1 1.1-.9 1.8-2.3 1.8-3.8 0-2.9-2.1-4.9-5.3-4.9zm2.3 7.4c-.6.5-1.4.8-2.6.8h-.6v-6.5h.5c1.2 0 2 .2 2.6.8.7.6 1.1 1.5 1.1 2.4.1.9-.3 1.9-1 2.5zM10 22.5h1.9v9.8H10zM16.7 26.3c-1.2-.4-1.5-.7-1.5-1.2 0-.6.6-1.1 1.4-1.1.6 0 1.1.2 1.6.8l1-1.3c-.8-.7-1.8-1.1-2.9-1.1-1.7 0-3.1 1.2-3.1 2.8 0 1.4.6 2 2.4 2.7.8.3 1.1.4 1.3.6.4.2.6.6.6 1 0 .8-.6 1.4-1.5 1.4s-1.7-.5-2.1-1.3l-1.2 1.2c.9 1.3 2 1.9 3.4 1.9 2 0 3.4-1.3 3.4-3.2 0-1.7-.6-2.4-2.8-3.2z"/><path fill="#3B3D3F" d="M20.1 27.4c0 2.9 2.3 5.1 5.2 5.1.8 0 1.5-.2 2.4-.6v-2.3c-.8.8-1.5 1.1-2.3 1.1-1.9 0-3.3-1.4-3.3-3.4 0-1.9 1.4-3.4 3.2-3.4.9 0 1.6.3 2.4 1.1v-2.3c-.8-.4-1.5-.6-2.4-.6-2.8.2-5.2 2.5-5.2 5.3z"/><path d="M43.4 29.1l-2.6-6.6h-2.1l4.1 10.1h1.1l4.3-10.1h-2.1zM49 32.3h5.5v-1.6H51V28h3.4v-1.7H51v-2.1h3.5v-1.7H49z"/><path fill="#595A5B" d="M59.9 28.2c1.5-.3 2.3-1.3 2.3-2.8 0-1.8-1.3-2.9-3.5-2.9h-2.9v9.8h1.9v-3.9h.3l2.7 3.9H63l-3.1-4.1zM58.3 27h-.6v-3h.6c1.2 0 1.9.5 1.9 1.5s-.7 1.5-1.9 1.5zM3.8 22.5H1v9.8h2.8c1.5 0 2.6-.4 3.5-1.1 1.1-.9 1.8-2.3 1.8-3.8 0-2.9-2.1-4.9-5.3-4.9zm2.3 7.4c-.6.5-1.4.8-2.6.8h-.6v-6.5h.5c1.2 0 2 .2 2.6.8.7.6 1.1 1.5 1.1 2.4.1.9-.3 1.9-1 2.5zM10 22.5h1.9v9.8H10zM16.7 26.3c-1.2-.4-1.5-.7-1.5-1.2 0-.6.6-1.1 1.4-1.1.6 0 1.1.2 1.6.8l1-1.3c-.8-.7-1.8-1.1-2.9-1.1-1.7 0-3.1 1.2-3.1 2.8 0 1.4.6 2 2.4 2.7.8.3 1.1.4 1.3.6.4.2.6.6.6 1 0 .8-.6 1.4-1.5 1.4s-1.7-.5-2.1-1.3l-1.2 1.2c.9 1.3 2 1.9 3.4 1.9 2 0 3.4-1.3 3.4-3.2 0-1.7-.6-2.4-2.8-3.2zM25.4 32.5c.8 0 1.5-.2 2.4-.6v-2.3c-.8.8-1.5 1.1-2.3 1.1-1.9 0-3.3-1.4-3.3-3.4 0-1 .4-1.8 1-2.5l-1.3-1.3c-1 .9-1.7 2.3-1.7 3.8-.1 3 2.2 5.2 5.2 5.2z"/><path d="M59.9 28.2c1.5-.3 2.3-1.3 2.3-2.8 0-1.8-1.3-2.9-3.5-2.9h-2.9v9.8h1.9v-3.9h.3l2.7 3.9H63l-3.1-4.1zM58.3 27h-.6v-3h.6c1.2 0 1.9.5 1.9 1.5s-.7 1.5-1.9 1.5z"/><g><path fill="#F26E21" d="M15.1 41.4v-5.5l3.8 3.9v-3.6h.8v5.5l-3.8-3.9v3.6h-.8zM23.7 37h-2.1v1.2h2v.8h-2v1.7h2.1v.7h-2.9v-5.2h2.9v.8zM26.2 37v4.4h-.8V37h-1.2v-.7h3.2v.7h-1.2zM28.6 36.3l1.3 3.5 1.4-3.7 1.3 3.7 1.4-3.5h1l-2.3 5.5-1.3-3.7-1.4 3.7-2.2-5.5h.8zM35.1 38.8a2.732 2.732 0 012.7-2.7 2.732 2.732 0 012.7 2.7 2.732 2.732 0 01-2.7 2.7c-.7 0-1.3-.2-1.8-.7-.6-.5-.9-1.1-.9-2zm.8 0c0 .6.2 1 .6 1.4.4.4.8.6 1.3.6s1-.2 1.4-.6c.4-.4.6-.8.6-1.4 0-.6-.2-1-.6-1.4-.4-.4-.8-.6-1.4-.6-.5 0-1 .2-1.4.6-.3.4-.5.9-.5 1.4zM43.3 39.2l1.6 2.2h-1l-1.5-2.1h-.1v2.1h-.8v-5.2h.9c.7 0 1.2.1 1.5.4.3.3.5.7.5 1.1 0 .4-.1.7-.3.9-.2.4-.5.6-.8.6zm-1-.6h.2c.7 0 1.1-.3 1.1-.8s-.4-.8-1.1-.8h-.3v1.6zM46.4 38.3l2-2.1h1l-2.3 2.3 2.3 2.8h-1L46.5 39l-.2.2v2.1h-.8v-5.2h.8v2.2z"/></g><g><path fill="#3B3D3F" d="M52.8 30.7H51v-1.8l-2-2v5.4h5.4z"/></g><g><path fill="#3B3D3F" d="M45.6 23.5l-2.2 5.6-2.6-6.6h-2.1l4.1 10.1h1.1l3.2-7.6z"/></g>
            </svg>            
        </div>
        <form wire:submit.prevent="submit">
            <div>
                @if ($currentPage === 1)
                    <div class="form-control w-full max-w-xs flex justify-center"> 
                        <label class="label">
                        <span class="label-text">Amount / $ *</span>
                        <span class="label-text-alt"></span>
                        </label>
                        <input wire:model.lazy="amount" x-mask="9999999" type="text" name="amount" placeholder="500" class="input input-bordered w-full max-w-xs">
                        @error('amount') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                        <span class="label-text">Card Name *</span>
                        <span class="label-text-alt"></span>
                        </label>
                        <input wire:model.lazy="cardName" type="text" name="card_name" placeholder="John Doe" class="input input-bordered w-full max-w-xs">
                        @error('cardName') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                        <span class="label-text">Card Number *</span>
                        <span class="label-text-alt"></span>
                        </label>
                        <input wire:model.lazy="cardNumber" x-mask:dynamic="creditCardNumber" type="text" name="card_number" placeholder="0000 0000 0000 0000" class="input input-bordered w-full max-w-xs">
                        @error('cardNumber') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>
                    <div class="flex flex-row gap-2 w-full">
                        <div class="form-control w-1/2 max-w-xs">
                            <label class="label">
                            <span class="label-text">Expiration Date *</span>
                            </label>
                            <select wire:model.lazy="expirationMonth" name="expiration_month" class="select select-bordered">
                            <option value="" selected>Select Month</option>
                            <option value="01">01 - January</option>
                            <option value="02">02 - February</option>
                            <option value="03">03 - March</option>
                            <option value="04">04 - April</option>
                            <option value="05">05 - May</option>
                            <option value="06">06 - June</option>
                            <option value="07">07 - July</option>
                            <option value="08">08 - August</option>
                            <option value="09">09 - September</option>
                            <option value="10">10 - October</option>
                            <option value="11">11 - November</option>
                            <option value="12">12 - December</option>
                            </select>
                            @error('expirationMonth') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-control w-1/2 max-w-xs mr-4 mt-9">
                            <select wire:model.lazy="expirationYear" name="expiration_year" class="select select-bordered">
                            <option value="" selected>Select Year</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                            <option value="2031">2031</option>
                            </select>
                            @error('expirationYear') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                        <span class="label-text">CVC *</span>
                        <span class="label-text-alt"></span>
                        </label>
                        <input wire:model.lazy="cvc" x-mask="999" type="text" name="cvc" placeholder="000" class="input input-bordered w-full max-w-xs">
                        @error('cvc') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>
                @elseif ($currentPage === 2)
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                        <span class="label-text">First Name *</span>
                        <span class="label-text-alt"></span>
                        </label>
                        <input wire:model.lazy="firstName" type="text" name="firstname" placeholder="John Doe" class="input input-bordered w-full max-w-xs">
                        @error('firstName') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                        <span class="label-text">Last Name *</span>
                        <span class="label-text-alt"></span>
                        </label>
                        <input wire:model.lazy="lastName" type="text" name="lastname" placeholder="John Doe" class="input input-bordered w-full max-w-xs">
                        @error('lastName') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                        <span class="label-text">Email Address *</span>
                        <span class="label-text-alt"></span>
                        </label>
                        <input wire:model.lazy="email" type="text" name="email" placeholder="example@example.com" class="input input-bordered w-full max-w-xs">
                        @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                        <span class="label-text">Phone Number (optional) *</span>
                        <span class="label-text-alt"></span>
                        </label>
                        <input wire:model.lazy="phone" type="text" name="phone" placeholder="Phone Number" class="input input-bordered w-full max-w-xs">
                        @error('phone') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                        <span class="label-text">Address 1 *</span>
                        <span class="label-text-alt"></span>
                        </label>
                        <input wire:model.lazy="address1" type="text" name="address1" placeholder="Address 1" class="input input-bordered w-full max-w-xs">
                        @error('address1') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                        <span class="label-text">Address 2 *</span>
                        <span class="label-text-alt"></span>
                        </label>
                        <input wire:model.lazy="address2" type="text" name="address2" placeholder="Address 2" class="input input-bordered w-full max-w-xs">
                        @error('address2') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                        <span class="label-text">City *</span>
                        <span class="label-text-alt"></span>
                        </label>
                        <input wire:model.lazy="city" type="text" name="city" placeholder="City" class="input input-bordered w-full max-w-xs">
                        @error('city') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                        <span class="label-text">State / Province *</span>
                        <span class="label-text-alt"></span>
                        </label>
                        <input wire:model.lazy="state" type="text" name="state" placeholder="State or Province" class="input input-bordered w-full max-w-xs">
                        @error('state') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>
                    <div class="flex-initial form-control w-full max-w-xs">
                        <label class="label">
                        <span class="label-text">Country *</span>
                        </label>
                        <select wire:model.lazy="country" name="country" class="select select-bordered">
                        <option disabled selected>Pick one</option>
                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bonaire">Bonaire</option>
                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Canary Islands">Canary Islands</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Channel Islands">Channel Islands</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Island">Cocos Island</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote DIvoire">Cote DIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curaco">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Ter">French Southern Ter</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Midway Islands">Midway Islands</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nambia">Nambia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherland Antilles">Netherland Antilles</option>
                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                        <option value="Nevis">Nevis</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau Island">Palau Island</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Pitcairn Island">Pitcairn Island</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                        <option value="Republic of Serbia">Republic of Serbia</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="St Barthelemy">St Barthelemy</option>
                        <option value="St Eustatius">St Eustatius</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                        <option value="St Lucia">St Lucia</option>
                        <option value="St Maarten">St Maarten</option>
                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                        <option value="Saipan">Saipan</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa American">Samoa American</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tahiti">Tahiti</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Emirates</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uraguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State">Vatican City State</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                        <option value="Wake Island">Wake Island</option>
                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zaire">Zaire</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                        @error('country') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                        <span class="label-text">Zip / Postal Code *</span>
                        <span class="label-text-alt"></span>
                        </label>
                        <input wire:model.lazy="zip" x-mask="999999" type="text" name="zip" placeholder="00000" class="input input-bordered w-full max-w-xs">
                        @error('zip') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>
                @endif               
            </div>
            <div class="flex flex-col items-center justify-between px-4 py-3">
                @if ($currentPage === 1)
                    <div></div>
                {{-- @else
                    <button wire:click="goToPreviousPage" type="button" class="btn btn-warning inline-flex justify-center px-3 py-2">
                        <span class="uppercase text-lg">Back</span>
                    </button>                     --}}
                @endif
                @if ($currentPage === count($pages))
                    <button type="submit" class="btn btn-wide btn-warning inline-flex felx justify-center px-3 py-2">
                        <span class="uppercase text-lg">Make a Donation</span>
                    </button>
                @else
                <h2 class="text-xs my-4">I want to help the Utarana's mission even more by covering the processing fees and other costs associated with my donation.</h2>
                    <button wire:click="goToNextPage" type="button" class="btn btn-wide btn-warning inline-flex justify-center px-3 py-2 mt-2">
                        <span class="uppercase text-lg">Your information</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                        </svg>
                    </button>                    
                @endif    
            </div>
        </form>
    </div>
</div>

