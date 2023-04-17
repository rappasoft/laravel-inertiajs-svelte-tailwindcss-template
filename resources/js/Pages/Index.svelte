<script>
    import Counter from './Components/Counter.svelte';

    export let title;
</script>

<div class="flex flex-col items-center text-center space-y-4">
    <h1 class="block mt-4 font-bold text-4xl">{title}</h1>

    <Counter />

    <a href="https://rappasoft.com" target="_blank" class="text-blue-500 underline hover:no-underline">Rappasoft.com</a>
</div>
