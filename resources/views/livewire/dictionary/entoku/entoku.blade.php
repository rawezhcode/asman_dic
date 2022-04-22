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
               
          </div>
               
               <div class="mt-44">
                @foreach ($entoku as $item)
                <div class="collapse w-full mt-3 border rounded-box  text-gray-900 shadow-lg animes">
                  <input type="checkbox"> 
                  <div class="collapse-title text-xl font-medium text-gray-900 text-left ml-4">
                    <div class="flex absolute text-right right-2 z-50" x-data="{ open : false }">

                        <span onclick="textToSpeech('{{ $item->word  }}');" class="flex justify-evenly text-[#FF8181] items-center mr-2 bg-[#6b7280] w-14 rounded-full">
                          <i class="ri-volume-up-fill text-[23px]"></i>
                          <p class="text-white text-[14px]">us</p>
                        </span>

                     @if (auth()->check())
                      @if ($item->favorites->count() == 1)
                      <span @click='open = !open;$wire.favorite({{ $item->id }})' :class="{'transition ease-in-out   hover:scale-110 duration-500 ': open, '' : ! open}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0H24V24H0z"/><path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z" fill="rgba(255,119,119,1)"/></svg>
                      </span>
                      @else
                      <span @click='open = !open;$wire.favorite({{ $item->id }})' :class="{'transition ease-in-out   hover:scale-110 duration-500 ': open, '' : ! open}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0H24V24H0z"/><path d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" fill="rgba(255,128,128,1)"/></svg>
                      </span>
                      @endif
                     @else
                      <label for="my-modal-3" class="flex items-center">
                        <span :class="{'transition ease-in-out   hover:scale-110 duration-500 ': open, '' : ! open}" class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0H24V24H0z"/><path d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z" fill="rgba(255,128,128,1)"/></svg>
                        </span>
                      </label>
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

                @endforeach
               </div>


      
              </div>
             
        </div>
        
        
      </div>
      <!-- Put this part before </body> tag -->
      <input type="checkbox" id="my-modal-3" class="modal-toggle">
      <div class="modal">
        <div class="modal-box relative bg-white " x-data="{ open : false }">
          <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
          <p class="py-4 text-center text-slate-900">پێویستە سەرەتا خۆتۆمارکردن بکەی </p>
          <a @click='open = true' href="{{ route('google.login') }}">
            <button type="button" class="flex justify-center items-center py-3 px-6 w-full font-bold text-white rounded-[50px] bg-rose-500 drop-shadow-md hover:-translate-y-[1px] ease-out duration-300">
                <i class=" mr-2">
                    <svg class="h-8 w-8 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M17.788 5.108A9 9 0 1021 12h-8" /></svg>
                </i>
                {{ __('Login With Google') }}

                <span class="pl-5" x-show="open">

                  <svg role="status" class="mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-white" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"></path>
                      <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"></path>
                  </svg>

                </span>
            </button>
          </a>
        </div>
      </div>


      
    <script>
        var limit = parseInt({{ $limit }});
        var total = parseInt({{ $entoku->total() }});
        const container = document.querySelector('.container');

        window.addEventListener('scroll', () => {
            const {scrollHeight, scrollTop ,clientHeight} = document.documentElement;
            console.log(scrollTop + clientHeight + '>'+ (scrollHeight - 200));
            if ((scrollTop + clientHeight > scrollHeight - 200) && limit < total){
                limit += 10;
                Livewire.emit('loadMore', limit);
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




function textToSpeech(text) {
  // responsiveVoice.setDefaultVoice("US English Male");
  responsiveVoice.speak(text,"US English Male");
// var synth = window.speechSynthesis;
// var voices = [];

//   var toSpeak = new SpeechSynthesisUtterance(text);
//     var selectedVoiceName = 'Microsoft David - English (United States)';
//     voices.forEach((voice)=>{
//         if(voice.name === selectedVoiceName){
//             toSpeak.voice = voice;
//         }
//     });
//     synth.speak(toSpeak);
}

    </script>
</div>
