<div class="overflow-hidden rounded-md bg-white px-6 py-4 shadow flex items-start w-full">
    <div class="mr-10 flex h-7 items-center">
        <input wire:model="article.done" wire:change.prevent="save" id="item-{{$article->id}}" name="item-{{$article->id}}" type="checkbox" class="h-5 w-5 rounded-full border-gray-300 text-indigo-600 focus:ring-indigo-500">
    </div>
    <div class="min-w-0 flex-1 flex flex-row items-start justify-between">
        <label for="item-{{$article->id}}" class="select-none flex flex-col gap-3 cursor-pointer">
            <span class="text-md font-medium text-gray-900 flex flex-row items-center gap-2">{{$article->name}}</span>
        </label>
        <div class="flex flex-row gap-1 items-end">
            <button wire:click="remove" type="button" class="w-20 inline-flex items-center justify-center rounded border border-gray-300 bg-white px-2.5 py-1.5 text-xs font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">remove</button>
        </div>
    </div>
</div>
