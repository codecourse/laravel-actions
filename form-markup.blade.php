<form action="/posts" method="post">
    @csrf
    <div>
        <x-label for="body" :value="__('Your post')" />

        <x-input id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')" />

        @error('body')
            <p class="text-red-500 mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mt-4">
        <x-button>Create</x-button>
    </div>
</form>
