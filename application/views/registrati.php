<html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
                
        <body>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/siimple@3.3.1/dist/siimple.min.css">

            <div class="siimple-content siimple-content--extra-small">
                <div class="siimple--px-5 siimple--py-5">
                    <div class="siimple-h2 siimple--text-normal siimple--mb-1" align="center">Create an account</div>
            <div class="siimple-paragraph siimple-paragraph--lead" align="center">Start to bet with milions of others player</div>
            
            <form action = "<?= site_url('Go/registraUtente');?>"  method = "post";>
                <div class="siimple-field">
                    <div class="siimple-field-label">Username</div>
                    <input name="user" type="user" class="siimple-input siimple-input--fluid" placeholder="username">
                </div>
                <div class="siimple-field">
                    <div class="siimple-field-label">Password</div>
                    <input name="password1" type="password" class="siimple-input siimple-input--fluid" placeholder="password">
                    <div class="siimple-field-helper">You password should contain at least 12 characters</div>
                </div>
                <div class="siimple-field"> 
                    <div class="siimple-field-label">Confirm password</div>
                    <input name="password2" type="password" class="siimple-input siimple-input--fluid" placeholder="password">
                </div>
                <div class="siimple-field">
                    <button type="submit" class="siimple-btn siimple-btn--primary siimple-btn--fluid siimple--text-bold">Sign up</button>
                </div>

            </form>



