
<x-guest-layout>
    <div class="relative z-50">
        <img class="absolute -top-32 -right-20 opacity-[55%] scale-x-[-1] hor w-72 h-64" src="{{ asset('assets/img/1.svg') }}" alt="">
        <a  href="/dic/home">
            <img class="absolute top-4 right-4 rotate-180 w-5 h-5" src="{{ asset('assets/img/btn_back.svg') }}" alt="">
        </a>
        <img class="absolute top-10 left-0 opacity-[100%] w-20 h-20 " src="{{ asset('assets/img/2.svg') }}" alt="">
    </div>
    <x-auth-card>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <x-slot name="logo">
            <div class="text-center">
                <img class=" opacity-[100%] " src="{{ asset('assets/img/asman2.png') }}" alt="">
                {{-- <label class="font-medium text-[50px] Sahel"> 
                    <sup class="text-[#d7c9f5]">{{ \Str::after(__('auth.login'), ' ') }}</sup>
                    <sub class="text-[#f58879]">{{ \Str::before(__('auth.login'), ' ') }}</sub>
                </label> --}}
            </div>
                <img src="{{ asset('assets/img/login.jpg') }}" alt="">
            </x-slot>
          
            <div class="row mx-gutters-2 mb-4 z-50 relative">
                <div class="col-sm-4">
                    <a href="{{ route('google.login') }}">
                        <button type="button" class="flex justify-center items-center py-3 px-6 w-full font-bold text-white rounded-[50px] bg-rose-500 drop-shadow-md hover:-translate-y-[1px] ease-out duration-300">
                            <i class=" mr-2">
                                <svg class="h-8 w-8 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M17.788 5.108A9 9 0 1021 12h-8" /></svg>
                            </i>
                            {{ __('Login With Google') }}
                        </button>
                    </a>
                </div>
            </div>
           
            <img class="absolute bottom-36 -right-24 opacity-[100%] w-40 h-40 " src="{{ asset('assets/img/3.svg') }}" alt="">
        </form>
        <div class="">
            
        </div>
    </x-auth-card>
    <div class="flex justify-between flex-col sm:flex-row-reverse text-center fixed bottom-3 z-50 w-[97%] mx-4">
        {{-- <label class="font-medium text-[14px] text-center Sahel">Copyright © {{ date('Y') }} .  Rawezh::Code دارشتن و دیزانکردنی پرۆگرام </label> --}}
        <label class="font-medium text-[13px] text-center Sahel">Copyright © {{ date('Y') }} . Developed by Rawezh::Code</label>
        <div>
            <a href="https://www.facebook.com/rawezh.fakhraden.7" target="blank">فەیسبوک</a>.
            <a href="https://t.me/rawezhcst" target="blank">تیلیگرام</a>.
            <a href="https://www.instagram.com/rawezh_cs/" target="blank">ئینستگرام</a>
        </div>
    </div>
    <div class="relative">
        <img class="absolute -bottom-10 -left-16 opacity-[100%] w-40 h-40 " src="{{ asset('assets/img/3.svg') }}" alt="">
    </div>
</x-guest-layout>
