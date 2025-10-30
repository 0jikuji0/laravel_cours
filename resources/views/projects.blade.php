<x-layouts.home>
    <h2>Bienvenue sur le site de l'esgi en laravel</h2>
    <a>Projects</a>
    <div 
    class="w-full shadow rounded flex flex-col gap-4 bg-white mt-8"  
    x-data="{
        open: false,
    }">
        <button 
        class="btn btn-primary"
        x-on:click="open = !open"
        >
        Toggle content</button>
        <div x-show="open">
            My content
        </div>
    </div>
</x-layouts.home>
