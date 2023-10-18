<!-- Registration Form -->
<form action="register.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <label for="role">Role:</label>
    <select name="role">
        <option value="patient">Patient</option>
        <option value="doctor">Doctor</option>
    </select>
    <button type="submit">Register</button>
</form>

<!-- Login Form -->
<form action="login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>

