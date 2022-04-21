<div >
    
    <div  class=" container m-auto pt-96">
        
        
<ul class="menu w-64 p-3 border bg-base-100 rounded-box" wire:sortable="updateGroupOrder" wire:sortable-group="updateTaskOrder" >
    @foreach ($menu as $item)
       {{-- {{ $submenu->where('parent',$item->id) }} --}}
    
            <li  wire:key="group-1" wire:sortable-group.item="1">
                <a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 mr-2 stroke-current">          
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>                
                </svg>
                {{ $item->title }}
                    
                </a>
                @foreach ($submenu as $menuitem)
                  @foreach ($menuitem->submenus as $submenuitem)
                  
                  <ul class="menu" >
                      <li  wire:key="menus-5" wire:sortable-group.item="5">
                          <a>
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 mr-2 stroke-current">          
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>                
                              </svg>
                              {{ $submenuitem->title }}
                              
                          </a>
                      </li>
                  </ul>
                  
                  @endforeach
                @endforeach
        </li> 
        
    @endforeach
    {{-- <li  wire:key="group-1" wire:sortable-group.item="1">
      <a>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 mr-2 stroke-current">          
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>                
        </svg>
            Level 1
          
      </a>
    </li> 
    <li  wire:key="group-2" wire:sortable-group.item-group="2">
      <a>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 mr-2 stroke-current">          
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>                
        </svg>
            Level 2
          
      </a> 
      <ul class="menu">
        <li  wire:key="menu-3" wire:sortable-group.item="3">
          <a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 mr-2 stroke-current">          
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>                
            </svg>
                Level 3
              
          </a>
        </li> 
        <li  wire:key="menu-4" wire:sortable-group.item-group="4">
          <a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 mr-2 stroke-current">          
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>                
            </svg>
                Level 4
              
          </a> 
          <ul class="menu" >
            <li  wire:key="menus-5" wire:sortable-group.item="5">
              <a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 mr-2 stroke-current">          
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>                
                </svg>
                    Level 5
                  
              </a>
            </li>
          </ul>
        </li> 
        <li  wire:key="menu-6" wire:sortable-group.item="6">
          <a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 mr-2 stroke-current">          
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>                
            </svg>
                Level 6
              
          </a>
        </li>
      </ul>
    </li> --}}
  </ul>

  
  













{{-- 

  <div class="row" wire:sortable-group="updateTaskOrder">
    @foreach($taskKanban as $status)
        <div class="col-md-4" wire:key="group-{{ $status->id }}" wire:sortable-group.item-group="{{ $status->id }}">
            <div class="card rounded-pill bg-gradient">
                <div class="card-body">
                    <span class="fs-5 fw-bold p-2">{{ $status->name }} {{ $status->id }}</span><span
                        class="badge position-absolute top-50 end-0 translate-middle bg-pink rounded-pill p-2">{{ count($status->tasks) }}</span>
                </div>
            </div>
            @foreach($status->tasks as $task)
                <div class="card br-10 m-2" wire:key="task-{{ $task->id }}" wire:sortable-group.item="{{ $task->id }}">
                    <div class="card-body">
                        <img class="profile-xl float-sm-end border" src="{{ $task->assignTo->userProfile() }}">
                        <h5 class="text-black m-0 fs-6 fw-bold">
                            <a wire:click.prevent="viewTask({{ $task->id }})" href="#" data-bs-toggle="modal"
                                data-bs-target="#viewTask">{{ $task->assignTo->name }}</a>
                        </h5>
                        <p class="text-dark-gray m-0 fst-italic">Department: {{ $task->department->name }}
                        </p>
                        <p class="text-gray m-0 w-90">
                            Task Title: {{ $task->name }}
                            <a href="#" class="gray"><i class="bi bi-paperclip p-1 gray"></i></a>
                        </p>
                        <span class="text-pink mt-1 float-start">{{ $task->created_at->calendar().' '.$task->created_at->isoFormat('Do Y') }}</span>
                        <div class="float-end">
                           
                            <a href="#" data-bs-toggle="modal" data-bs-target="#comment" class="gray">
                                <i class="bi bi-chat-right-text"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div> --}}


        
    </div>
</div>
