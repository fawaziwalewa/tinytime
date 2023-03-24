<form method="POST" wire:submit.prevent="login" id="login" class="canSubmit">
    @csrf
    @if (session()->has('success'))
        <p class="text-green-500 font-medium">
            {{ session('success') }}
        </p>
    @endif
    @if (session()->has('error'))
        <p class="text-pink-500 font-medium">
            {{ session('error') }}
        </p>
    @endif
    <div class="mt-3">
        <label class="block">
            <span class="block text-sm font-medium text-slate-700">Email: </span>
            <input type="text" placeholder="example@yourprovider.com" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
              focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
              @error('email')  focus:border-pink-500 focus:ring-pink-500 @enderror"
              wire:model="email" value="{{ old('email') }}" required autocomplete="email"/>
              @error('email') <span class="text-pink-500 font-semibold">{{ $message }}</span> @enderror
        </label>
    </div>
    <div class="mt-3">
        <label class="block">
            <span class="block text-sm font-medium text-slate-700">Password: </span>
            <input type="password" placeholder="********" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
              focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
              @error('password')  focus:border-pink-500 focus:ring-pink-500 @enderror"
              wire:model="password" value="{{ old('password') }}" required/>
              @error('password') <span class="text-pink-500 font-semibold">{{ $message }}</span> @enderror
        </label>
    </div>
    <p class="font-medium text-pink-500 mt-3 text-end cursor-pointer" wire:click="activate">
        {{ $forgot }}
    </p>
    @if ($reset)
        <div class="mt-3">
            <label class="block">
                <span class="block text-sm font-medium text-slate-700">Email: </span>
                <input type="text" placeholder="example@yourprovider.com" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                @error('resetEmail')  focus:border-pink-500 focus:ring-pink-500 @enderror"
                wire:model="resetEmail" value="{{ old('resetEmail') }}" required autocomplete="email"/>
                @error('resetEmail') <span class="text-pink-500 font-semibold">{{ $message }}</span> @enderror
            </label>
        </div>
        <div class="flex justify-between">
            <p class="font-medium text-green-500 mt-3 text-end cursor-pointer" wire:click="resetRequest">
                Request Link
            </p>
            <p class="font-medium text-pink-500 mt-3" wire:loading wire:target="resetRequest">
                Processing...
            </p>
        </div>
    @endif
    <p class="font-medium text-pink-500 mt-3" wire:loading wire:target="login">
        Processing...
    </p>
    <button type="submit" class="submitBtn hidden">Hidden Submit</button>
</form>