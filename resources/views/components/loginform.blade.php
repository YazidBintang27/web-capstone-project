<form {{ $attributes }} action="{{url('/login')}}">
    @csrf
    <fieldset>
        <label for="username" class="font-medium text-sm">Username</label><br/>
        <input type="text" name="username" id="username" placeholder="Masukan Username..." class="border-[.1em] rounded-lg py-[.4rem] pl-[.5rem] w-lg mt-2" required>
    </fieldset>
    <fieldset class="mt-5">
        <label for="password" class="font-medium text-sm">Password</label><br/>
        <input type="password" name="password" id="password" placeholder="Masukan Password..." class="border-[.1em] rounded-lg py-[.4rem] pl-[.5rem] w-lg mt-2" required>
    </fieldset>
    <fieldset class="mt-3">
        <input type="checkbox" name="showPassword" id="showPassword">
        <label for="showPassword">Tampilkan password</label>
    </fieldset>
    <button type="submit" class="text-base bg-[#33ccff] w-lg mt-8 py-[.5em] rounded-md text-medium hover:bg-[#00aee8] ">Login</button>
</form>

<script>
    const showPassword = document.getElementById('showPassword');
    const passwordInput = document.getElementById('password');

    showPassword.addEventListener('change', function() {
        passwordInput.type = this.checked ? 'text' : 'password';
    });
</script>