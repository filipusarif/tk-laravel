<x-base>
    <x-slot:title>Register</x-slot:title>

    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nama" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <select name="role" required>
            <option value="admin">Admin</option>
            <option value="kepala_sekolah">Kepala Sekolah</option>
            <option value="owner">Owner</option>
            <option value="orang_tua">Orang Tua</option>
        </select>
        <button type="submit">Register</button>
    </form>
</x-base>
