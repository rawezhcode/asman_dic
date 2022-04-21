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
          left: 36px;
          top: 1.3rem;
          /* z-index: 1; */
        }
        /* style for modal */
        .animated {
          -webkit-animation-duration: 1s;
          animation-duration: 1s;
          -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
        }

        .animated.faster {
          -webkit-animation-duration: 500ms;
          animation-duration: 500ms;
        }

        .fadeIn {
          -webkit-animation-name: fadeIn;
          animation-name: fadeIn;
        }

        .fadeOut {
          -webkit-animation-name: fadeOut;
          animation-name: fadeOut;
        }

        @keyframes fadeIn {
          from {
            opacity: 0;
          }

          to {
            opacity: 1;
          }
        }

        @keyframes fadeOut {
          from {
            opacity: 1;
          }

          to {
            opacity: 0;
          }
        }
      </style>
    <div class=" container m-auto">

        <div class=" text-center py-3">
          
          
          <div class="w-[95%] sm:w-[55%] mx-auto pt-5"  x-data="{ open : false , count: 0, input : '' }" x-init="count = $refs.countme.value.length;">
          <div class="fixed right-0 left-0 bg-slate-50 z-50">
            <div class="fixeda mx-2 mb-3 sm:mx-56">
              <p class="text-xl text-gray-900 mt-14 mb-4">ئینگلیزی بۆ کوردی</p>
                <form>
                  <label class="relative block">
                    <span :class="{'fill-indigo-500': open, 'fill-indigo-300' : ! open}" class="absolute inset-y-0 left-0 flex items-center pl-2 " >
                      <svg  class="h-5 w-5   " viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                      </svg>
                    </span>
                    <span class="sr-only">Search</span>
                    <input wire:model.debounce.300ms='search' type="search" name="search" x-model="input" @click="open = true" @click.outside="open = false" 
                    x-ref="countme" x-on:keyup="count = $refs.countme.value.length"
                    class="block bg-transparent relative z-20 w-full border border-indigo-400 rounded-2xl py-4 pl-9 pr-3 shadow-sm placeholder:italic
                     placeholder:text-gray-400 text-gray-900 focus:outline-none  focus:border-2  sm:text-sm" placeholder=" " autocomplete="off">
                     <label for="name" class="absolute duration-300 top-4 left-9 z-0 origin-0 text-gray-400 bg-slate-50">Enter a word or multi words book</label>

                     <template x-if="count > 0">
                         <span  @click="input= '';count = 0;$wire.clearInput()" class="absolute inset-y-0 right-3 flex items-center z-50" >
                            <span class="rounded-full bg-gray-300 drop-shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-600" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg>
                            </span>
                        </span>
                    </template>
                    </label>
                      
                </form>
               </div>
               {{-- <button onclick="Livewire.emit('openModal', 'dictionary.modal.check-user')">Edit User</button> --}}
               
          </div>
               
               <div class="mt-44">
                @foreach ($entoku as $item)
                <div class="collapse w-full mt-3 border rounded-box  text-gray-900 shadow-lg animes">
                  <input type="checkbox"> 
                  <div class="collapse-title text-xl font-medium text-gray-900 text-left ml-4">
                    <div class="flex absolute text-right right-2 z-50" x-data="{ open : false }">
                     
                     
                        @if ($item->favorites->count() == 1)
                        <span  @click='open = !open;$wire.favorite({{ $item->id }})' :class="{'transition ease-in-out   hover:scale-110 duration-500 ': open, '' : ! open}" class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0H24V24H0z"/><path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z" fill="rgba(255,119,119,1)"/></svg>
                        </span>
                        @else
                        <span @click='open = !open;$wire.favorite({{ $item->id }})' :class="{'transition ease-in-out   hover:scale-110 duration-500 ': open, '' : ! open}" class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0H24V24H0z"/><path d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" fill="rgba(255,128,128,1)"/></svg>
                        </span>
                        @endif
                     
                      
                      
                    </div>

                    <div class="absolute bg-indigo-200 h-9 w-1 left-4 top-3"></div>
                    <h3 class="text-gray-900  text-lg font-normal">
                      {{ $item->word }}
                    </h3>
                  </div> 
                  <div class="collapse-content"> 
                    <p class="text-gray-500  text-sm text-right">
                      @foreach(explode('*',\Str::replace('[','*[', $item->kurdish_meaning)) as $row)

                      <p class="animes">
                        @if ( Str::of($row)->contains(['[',']']))

                        <p class="text-[#f58879] font-bold text-right"> 
                          {{ \Str::between($row,'[',']') }} :  
                          <span class="text-gray-700 font-semibold">{{ \Str::after(Str::of($row)->remove(['[',']']),':') }}</span>
                        </p>

                        @else
                        @if ($row != null)
                        
                        <p class="text-[#f58879] font-bold text-right"> 
                          گشتی :  
                          <span class="text-gray-700 font-semibold">{{ $row }}</span>
                        </p>
                        @endif
                            
                        @endif

                        
                       
                      </p>
                       
                      @endforeach
                    </p>
                  </div>
                </div> 



                {{-- <a  class="group block  mx-auto rounded-lg p-6 bg-whitering-1 ring-gray-900/5 shadow-lg space-y-3 mt-6 mb-7" dir="rtl">
                    <div class="flex justify-start items-center space-x-3  text-left" dir="ltr">
                      <svg class="h-6 w-6 stroke-sky-500 " fill="none" viewBox="0 0 24 24"><!-- ... --></svg>
                      <h3 class="text-gray-900  text-sm font-normal">
                       

                        {{ Str::of(Str::of(Str::of($item->word)->remove(Str::before($item->word, '-TRIAL-')))->remove('-TRIAL-'))->remove(Str::afterLast($item->word, '')) }}
                       
                      </h3>
                    </div>
                    <p class="text-gray-500  text-sm text-right">

                        @foreach(explode('*',\Str::replace('[','*[', $item->kurdish_meaning)) as $row)

                        <p>
                          @if ( Str::of($row)->contains(['[',']']))

                          <p class="text-[#f58879] font-bold text-right"> 
                            {{ \Str::between($row,'[',']') }} :  
                            <span class="text-gray-700 font-semibold">{{ \Str::after(Str::of($row)->remove(['[',']']),':') }}</span>
                          </p>

                          @else
                          @if ($row != null)
                          
                          <p class="text-[#f58879] font-bold text-right"> 
                            گشتی :  
                            <span class="text-gray-700 font-semibold">{{ $row }}</span>
                          </p>
                          @endif
                              
                          @endif

                          
                         
                        </p>
                         
                        @endforeach
                       
                    </p>
                </a> --}}
                @endforeach
               </div>
                {{-- <div class="flex justify-center" wire:loading>
                    <span>
                        <svg class="animate-spin -ml-1 mr-3 h-12 w-12 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                          </svg>
                    </span>
                </div> --}}

                
              </div>
             
        </div>
        


    </div>

    <script>
        var limit = parseInt({{ $limit }});
        var total = parseInt({{ $entoku->total() }});
        const container = document.querySelector('.container');

        window.addEventListener('scroll', () => {
            const {scrollHeight, scrollTop ,clientHeight} = document.documentElement;
            console.log(scrollTop +'+'+ clientHeight + '>'+ scrollHeight);
            if ((scrollTop + clientHeight > scrollHeight - 2) && limit < total){
                limit += 10;
                Livewire.emit('loadMore', limit);
                // console.log(limit);
            }
        })

        const modal = document.querySelector('.main-modal');
		const closeButton = document.querySelectorAll('.modal-close');

		const modalClose = () => {
			modal.classList.remove('fadeIn');
			modal.classList.add('fadeOut');
			setTimeout(() => {
				modal.style.display = 'none';
			}, 500);
		}

		const openModal = () => {
			modal.classList.remove('fadeOut');
			modal.classList.add('fadeIn');
			modal.style.display = 'flex';
		}

		for (let i = 0; i < closeButton.length; i++) {

			const elements = closeButton[i];

			elements.onclick = (e) => modalClose();

			modal.style.display = 'none';

			window.onclick = function (event) {
				if (event.target == modal) modalClose();
			}
		}
    </script>
</div>
