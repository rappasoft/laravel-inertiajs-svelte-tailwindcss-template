<script>
    let count = 0;
    $: doubled = count * 2;

    function incrementCount() {
        count += 1;
    }
</script>

<button on:click={incrementCount} class="border border-gray-400 rounded px-2 py-1 hover:bg-gray-100">
    Clicked {count} {count === 1 ? 'time' : 'times'}
</button>

<p>{count} doubled is {doubled}</p>
