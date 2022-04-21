<div>
    <style>
        .-z-1 {
          z-index: -1;
        }
      
        .origin-0 {
          transform-origin: 0%;
        }
      
        input:focus ~ label,
        input:not(:placeholder-shown) ~ label,
        textarea:focus ~ label,
        textarea:not(:placeholder-shown) ~ label,
        select:focus ~ label,
        select:not([value='']):valid ~ label {
          /* @apply transform; scale-75; -translate-y-6; */
          --tw-translate-x: 0;
          --tw-translate-y: 0;
          --tw-rotate: 0;
          --tw-skew-x: 0;
          --tw-skew-y: 0;
          transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate))
            skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
          --tw-scale-x: 0.75;
          --tw-scale-y: 0.75;
          --tw-translate-y: -1.5rem;
          top: 1.3rem;
        }
      
        input:focus ~ label,
        select:focus ~ label {
          /* @apply text-black; left-0; */
          --tw-text-opacity: 1;
          color: rgba(129,140,248, var(--tw-text-opacity));
          right: 10px;
          top: 1.3rem;
          /* z-index: 1; */
        }
      </style>
    <div class=" container m-auto">

        <div class=" text-center py-3">
          
          
          <div class="w-[95%] sm:w-[55%] mx-auto pt-5"  x-data="{ open : false , count: 0, input : '' }" x-init="count = $refs.countme.value.length;">
          <div class="fixed right-0 left-0 bg-slate-50 z-50">
            <div class="fixeda mx-2 mb-3 sm:mx-56">
              <p class="text-xl text-gray-900 mt-14 mb-4"> کوردی بۆ ئینگلیزی</p>
                <form dir="rtl">
                  <label class="relative block">
                    <span :class="{'fill-indigo-500': open, 'fill-indigo-300' : ! open}" class="absolute inset-y-0 right-3 flex items-center pl-2 " >
                      <svg  class="h-5 w-5   " viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                      </svg>
                    </span>
                    <span class="sr-only">Search</span>
                    <input wire:model.debounce.300ms='search' type="search" name="search" x-model="input" @click="open = true" @click.outside="open = false" x-ref="countme" x-on:keyup="count = $refs.countme.value.length"
                    class="block bg-transparent relative z-20 w-full border border-indigo-400 rounded-2xl py-4 pl-3 pr-9 shadow-sm placeholder:italic
                     placeholder:text-gray-400 text-gray-900 focus:outline-none  focus:border-2  sm:text-sm" placeholder=" " autocomplete="off">
                     <label for="name" class="absolute duration-300 top-4 right-9 z-0 origin-0 text-gray-400 bg-slate-50">وشەیەک بنوسە...</label>

                     <template x-if="count > 0">
                         <span  @click="input= '';count = 0;$wire.clearInput()" class="absolute inset-y-0 left-3 flex items-center z-50" >
                            <span class="rounded-full bg-indigo-400 drop-shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-100" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg>
                            </span>
                        </span>
                    </template>
                    </label>
                      
                </form>
               </div>
             
              
          </div>
               
               <div class="mt-44">
                @foreach ($entoku as $item)
                <div class="collapse w-full mt-3 border rounded-box  text-gray-900 shadow-lg animes" dir="rtl">
                  <input type="checkbox"> 
                 
                  <div class="collapse-title text-xl font-medium text-gray-900 text-right ml-4">
                   
                    <div class="flex absolute text-left left-2 z-50" >
                     
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0H24V24H0z"/><path d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" fill="rgba(255,128,128,1)"/></svg>
                      </span>
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0H24V24H0z"/><path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z" fill="rgba(255,119,119,1)"/></svg>
                      </span>
                    </div>

                    <div class="absolute bg-indigo-200 h-9 w-1 right-4 top-3"></div>
                    <h3 class="text-gray-900  text-xl font-normal">
                        {{ $item->word }}
                    </h3>
                  </div> 
                  <div class="collapse-content" dir="ltr"> 
                    <p class="text-gray-500  text-sm text-left" dir="ltr">
                      
                       <div class="text-left" dir="ltr">

                        @foreach(explode("\n", $item->kurdish_meaning) as $row)
                        <p class="text-[#f17d6e] text-xl font-bold text-left"> 
                          {{ Str::title(Str::before($row, '='))  }} :  
                          <div class="text-right" dir="rtl">
                            @foreach (explode("،", Str::after($row, '>')) as $item)
                            <p class="bg-indigo-400 text-white font-bold rounded-xl mx-1 my-1 px-3 py-1 inline-block">{{ $item }}</p>
                            @endforeach
                          </div>
                        </p>
                        @endforeach
                        </div>
                    </p>
                  </div>
                </div> 

                @endforeach
               </div>
              

                
              </div>
             
        </div>
        


    </div>

    <script>
        var limit = parseInt({{ $limit }});
        var total = parseInt({{ $entoku->total() }});
        const container = document.querySelector('.container');

        window.addEventListener('scroll', () => {
            const {scrollHeight, scrollTop ,clientHeight} = document.documentElement;
            // console.log(scrollHeight);
            if ((scrollTop + clientHeight > scrollHeight - 2) && limit < total){
                limit += 10;
                Livewire.emit('loadMore', limit);
                // console.log(limit);
            }
        })
    </script>
</div>
