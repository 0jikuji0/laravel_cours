<x-layouts.home>
    <h2>Bienvenue sur le site de l'esgi en laravel</h2>

    <div 
    class="w-full shadow rounded flex flex-col bg-white mt-8"  
    x-data="{
        open: false,
        openDropdown(){
            this.open = !this.open;
        }
    }">
        <button 
            class="btn btn-primary"
            x-on:click="openDropdown"
        >
        Toggle content
        </button>
        <div x-show="open" x-collapse>
            <div class="px-8 py-2">My content</div> <!-- open animation with alpinejs use collapse-->
        </div>
    </div>
</x-layouts.home>
