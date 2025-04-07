    <!-- SIGN IN/REGISTER/FORGOTTEN PSWD POPUP -->
    <dialog id="auth-popup" class="popup-container">
        <div class="popup-form">
            <span class="close-btn-auth" onclick="toggleAuthPopup()">×</span>     
            <div id="signin-form" class="form-content">
                <h3>Prihlásenie</h3>
                <form action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required><br>
                    <input type="password" name="password" placeholder="Heslo" required><br>
                    @if ($errors->has('email'))
                        <div class="errors">
                            <p>{{ $errors->first('email') }}</p>
                        </div>
                    @endif
                    <a href="#" class="forgot-password" onclick="toggleForgotPasswordForm()">Zabudnuté heslo?</a>
                    <a href="{{ url('admin_profile') }}">Admin</a>
                    <button type="submit">Prihlásiť sa</button>
                </form>                
                <p>Nemáte účet? <a href="#" onclick="toggleRegisterForm()">Zaregistrujte sa!</a></p>
            </div>

            <div id="register-form" class="form-content" style="display:none;">
                <h3>Registrácia</h3>
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <input type="text" name="f_name" placeholder="Meno" value="{{ old('f_name') }}" required><br>
                    <input type="text" name="l_name" placeholder="Priezvisko" value="{{ old('l_name') }}" required><br>
                    <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required><br>
                    <input type="password" name="password" placeholder="Heslo" required><br>
                    <input type="password" name="password_confirmation" placeholder="Potvrďte heslo" required><br>
                    <button type="submit">Registrovať sa</button>
                </form>
                @if ($errors->any() && !$errors->has('email'))
                    <div class="errors">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <p>Máte už účet? <a href="#" onclick="toggleRegisterForm()">Prihláste sa!</a></p>
            </div>

            <div id="forgot-password-form" class="form-content" style="display:none;">
                <h3>Zabudnuté heslo</h3>
                <form action="#" method="POST">
                    <input type="email" placeholder="E-mail" required><br>
                    <button type="submit">Resetovať heslo</button>
                </form>
                <p>Návrat na <a href="#" onclick="showSignInForm()">prihlásenie</a></p>
            </div>
        </div>
    </dialog>
    <!-- Skript na automatické otvorenie pri chybách registrácie -->
    @if ($errors->any() && !$errors->has('email'))
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const popup = document.getElementById('auth-popup');
                const signinForm = document.getElementById('signin-form');
                const registerForm = document.getElementById('register-form');
                const forgotForm = document.getElementById('forgot-password-form');
                
                popup.showModal();
                signinForm.style.display = 'none';
                registerForm.style.display = 'block';
                forgotForm.style.display = 'none';
            });
        </script>
    @endif

    <!-- Skript na automatické otvorenie pri chybách prihlásenia -->
    @if ($errors->has('email'))
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const popup = document.getElementById('auth-popup');
                const signinForm = document.getElementById('signin-form');
                const registerForm = document.getElementById('register-form');
                const forgotForm = document.getElementById('forgot-password-form');
                
                popup.showModal();
                signinForm.style.display = 'block';
                registerForm.style.display = 'none';
                forgotForm.style.display = 'none';
            });
        </script>
    @endif