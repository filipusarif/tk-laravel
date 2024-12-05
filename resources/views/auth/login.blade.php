<x-base>
    <x-slot:title>Login</x-slot:title>
<form action="/login" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

</x-base>