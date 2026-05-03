<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" value="{{ old('name') }}" required autofocus>
            @error('name')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
            @error('password')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" required>
            @error('password_confirmation')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>
        <div class="btn-group">
            <button type="submit" class="btn-secondary">Register</button>
        </div>
    </form>
    <a href="{{ route('login') }}" class="back-link">Sudah punya akun? Login</a>
</x-guest-layout>