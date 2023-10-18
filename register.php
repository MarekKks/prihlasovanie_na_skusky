<?php include_once 'partials/header.php'; ?>   

<div class="login-form">
    <form>
            <label for="username">Username:</label>
            <input type="text" id="username" placeholder="Enter Username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" placeholder="Enter Password" name="password" required>
            <label>E-mail : </label>   
            <input type="email" placeholder="Enter E-mail" name="email" required>  
            <button type="submit">Login</button>
            <div class="remember-forgot">
                <input type="checkbox" checked="checked" id="remember-me">
                <label for="remember-me">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
    </form>
</div>

<?php include_once 'partials/footer.php'; ?>