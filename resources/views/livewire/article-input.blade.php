<form action="#" class="relative" wire:submit.prevent="save">
    <div class="overflow-hidden rounded-lg border border-gray-300 shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
        <label for="title" class="sr-only">Title</label>
        <input type="text" name="title" id="title" class="block w-full border-0 pt-2.5 text-lg font-medium placeholder-gray-500 focus:ring-0" placeholder="Title" wire:model="article.name">
        <label for="description" class="sr-only">Description</label>
        <textarea rows="2" name="description" id="description" class="block w-full resize-none border-0 py-0 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Write a description..." style="
    min-height: 300px;
" wire:model="article.description"></textarea>

        <!-- Spacer element to match the height of the toolbar -->
        <div aria-hidden="true">



        </div>
    </div>

    <div class="absolute inset-x-px bottom-0" style="/* bottom: 6px; */">
        <div class="flex items-center justify-end space-x-3 border-t border-gray-200 px-2 py-2 sm:px-3">

            <div class="flex-shrink-0">
                <button type="submit" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Create</button>
            </div>
        </div>
    </div>
</form>
