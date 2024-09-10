<div style="background-color: #2d2d2d; color: #00ff00; padding: 20px; font-family: 'Courier New', monospace; border-radius: 10px;">
    <button
        wire:click="runScript"
        style="background-color: #444; color: white; padding: 10px; border: none; cursor: pointer; border-radius: 5px;">
        Run Script
    </button>
    <pre style="background-color: #1e1e1e; color: #00ff00; padding: 15px; border-radius: 5px; overflow-y: auto; max-height: 300px; white-space: pre-wrap; word-wrap: break-word;">{{ $output }}</pre>
</div>

<script>
    Livewire.on('outputUpdated', output => {
        document.querySelector('pre').innerText = output;
    });
</script>
