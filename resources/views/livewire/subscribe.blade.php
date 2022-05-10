<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <form wire:submit.prevent="submit">   
        <div class="flex flex-row gap-4 mt-2 md:mt-6">
            <input wire:model.lazy="email" type="email" name="email" id="email" placeholder="Enter Your email Here" class="input w-full max-w-xs bg-white">
            <button type="submit" class="mt-2"><span class="text-black font-semibold border-b-2 border-transparent transition-colors duration-200 hover:text-yellow-200 transform border-yellow-300">{{ __('Subscribe') }}</span></button>
        </div>
        @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
    </form>
    @if ($success)
        <div class="flex flex-row gap-1">
            <span wire:click="resetSuccess">
                <svg class="w-5 h-5" id="SvgjsSvg1001" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><defs id="SvgjsDefs1002"></defs>
                    <g id="SvgjsG1008">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                            <path d="M50 12c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38zm0 72c-18.8 0-34-15.2-34-34s15.2-34 34-34 34 15.2 34 34-15.2 34-34 34zm22.9-46.9c-.8-.8-2-.8-2.8 0L44.6 62.7 33.9 52c-.8-.8-2.1-.8-2.8 0-.8.8-.8 2.1 0 2.8l12.1 12.1c.4.4.9.6 1.4.6.5 0 1-.2 1.4-.6l26.9-27c.8-.8.8-2 0-2.8z" fill="#36d399" class="color000 svgShape"></path>
                            <path fill="#a7ff83" d="M1644-1210V474H-140v-1684h1784m8-8H-148V482h1800v-1700z" class="color00F svgShape"></path>
                        </svg>
                    </g>
                </svg>
            </span>                   
            <h3 class="text-sm font-semibold" style="color: #36D399">{{ $success }}</h3>
        </div>
    @endif
</div>
