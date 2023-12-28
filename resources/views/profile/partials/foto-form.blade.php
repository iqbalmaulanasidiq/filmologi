<section>
    <div>
        <x-input-label for="photo" :value="__('Foto Profil')" />
        
        @if (Auth::user()->photo)
            <img src="{{ asset('storage/' . Auth::user()->photo) }}" alt="User Photo" class="mb-2" style="max-width: 200px">
        @endif
        
        <x-input id="photo" class="block mt-1 w-full" type="file" name="photo" :value="old('photo')" />
        
        <x-input-error class="mt-2" :messages="$errors->get('photo')" />
    </div>
    
</section>