<div x-data="movies" class="py-3">

        {{-- First Fetch Data --}}
         <div x-init="getMovies($wire.searchKey)"></div>

        {{-- <button
        x-on:click="getMovies($wire.searchKey)"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Button
        </button> --}}
        {{-- search component --}}
        <livewire:search-component :paramsKey="$searchKey">


    {{-- Loading States --}}
    <div x-show="isLoading" class="w-full bg-red-500 rounded shadow-lg p-5">
        <strong class="text-white animate-pulse">loading..</strong>
    </div>

    {{-- grid wrapper --}}
    <div x-show="!isLoading" class="container grid grid-cols-4 gap-3 place-items-center">
        
        <template x-for="(item, index) in listMovies">
            
            {{-- grid item --}}
            <livewire:movies-item>

        </template>

        <livewire:pagination :currentPage='1' :totalPage='5'/>

        
    </div>
</div>
