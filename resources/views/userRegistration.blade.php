<form id="registration-form" method="POST" action="/register">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Register</button>
</form>