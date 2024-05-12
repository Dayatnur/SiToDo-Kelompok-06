<div>
    <!-- Button to show popup -->
    <button wire:click="togglePopup" class="mt-5 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
        Add ToDo
    </button>

    <!-- Popup -->
    @if($showPopup)
        <div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
            <div class="bg-white p-6 rounded-lg shadow-xl">
                <h2 class="text-xl font-bold mb-4">ToDo List</h2>
                <p>This is the content of the popup.</p>
                <!-- Close button -->
                <button wire:click="togglePopup" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">Close</button>
            </div>
        </div>
    @endif
</div>
