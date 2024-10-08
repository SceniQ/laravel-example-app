<x-layout>
    <h1 class="title">Registration</h1>
    <div class="mx-auto max-w.screen-sm card">

        <form action="{{ route('register')}}" method="POST" x-data="formSubmit" @submit.prevent="submit">
            @csrf
            {{-- Username --}}
            <div class="mb-4">
                <label for="username">Username</label> 
                <input type="text" name="username" value="{{ old('username')}}" class="input @error('username') ring-red-500" @enderror>
                @error('username')
                   <p class="error">{{ $message }}</p> 
                @enderror
            </div>
            {{-- Email --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{ old('email')}}" class="input @error('email') ring-red-500" @enderror">
                @error('email')
                   <p class="error">{{ $message }}</p> 
                @enderror
            </div>
            {{-- Password --}}
            <div class="mb-8">
                <label for="password">Password</label>
                <input type="password" name="password" class="input @error('password') ring-red-500" @enderror">
                @error('password')
                   <p class="error">{{ $message }}</p> 
                @enderror
            </div>
            {{-- Password confirmation --}}
            <div class="mb-8">
                <label for="password_confirmation">Confirm password</label>
                <input type="password" name="password_confirmation" class="input @error('password') ring-red-500" @enderror">
            </div>

            {{-- Subscribe checkbox --}}
            <div class="mb-4">
                <input type="checkbox" name="subscribe" id="subsrcibe">
                <label for="subscribe">Subscribe to our newsletter?</label>
            </div>

            {{-- Submit btn --}}
            <button class="primary-btn" x-ref="btn">Register</button>

        </form>

    </div>
</x-layout>
