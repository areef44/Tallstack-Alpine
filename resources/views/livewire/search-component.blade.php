    <div class="search-container flex">
        <input wire:model="searchKey"
      type="text"
      class="
        form-control
        block
        w-1/2
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
      "
      id="exampleFormControlInput1"
      placeholder="Example label"
    />

        <button
        wire:click='searchTrigger()'
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Button
        </button> 

        @if ($searchAction)
        <h1>Search</h1>
        @else
        <h1>Redirect</h1>
        @endif

        <div x-init="$wire.on('search-trigger', params => { getMovies(params) })"></div>

    </div>
