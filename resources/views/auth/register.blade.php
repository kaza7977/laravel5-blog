<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}" class="form_control">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}" class="form_control">
    </div>

    <div>
        Password
        <input type="password" name="password" class="form_control">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation" class="form_control">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>