@extends('layouts.main')

@section('content')
<section class="section" id="login">
    <div class="container">
        <div class="columns">
            <div class="column is-4 is-offset-4">
                <div class="box">
                    <h3 class="title is-3 has-text-centered">Login</h3>
                    @if(session('error') || session('errors'))
                        <div class="notification is-danger">
                            <button class="delete"></button>
                            {{ session('errors')?->first('email') ?? session('error') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input type="email" name="email" class="input" required autofocus>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control">
                                <input type="password" name="password" class="input" required>
                            </div>
                        </div>
                        <div class="field">
                            <button type="submit" class="button is-primary is-fullwidth">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection