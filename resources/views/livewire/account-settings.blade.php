<form wire:submit.prevent="save">
    <div class="space-y-6">
        <div>
            <h1 class="text-lg font-medium leading-6 text-gray-900">Account Settings</h1>
            <p class="mt-1 text-sm text-gray-500">Fill in the information below to change your account settings.</p>
        </div>

        <div>
            @if (session()->has('message'))
                <livewire:account-settings-message :visible="true" :message="session('message')"/>
            @endif
        </div>

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <div class="mt-1">
                <input type="text" name="name" id="name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm" wire:model="user.name">
            </div>
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">E-Mail</label>
            <div class="mt-1">
                <input type="email" name="email" id="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm" wire:model="user.email">
            </div>
        </div>

        <div class="flex justify-end">
            <a href="{{ route('dashboard') }}" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2">Cancel</a>
            <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-sky-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2">Save</button>
        </div>
    </div>
</form>
