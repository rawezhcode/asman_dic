<div>

  @if (session()->get('lang') == 'En')
  @livewire('dictionary.entoku.entoku')
  @else
  @livewire('dictionary.kutoen.kutoen')
  @endif
  {{-- @livewire('dictionary.artoku.artoku') --}}
  {{-- @livewire('dictionary.kutoar.kutoar') --}}

</div>
