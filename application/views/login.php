<html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
                
        <body>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/siimple@3.3.1/dist/siimple.min.css">

            <form action = "<?= site_url('Go/controllaUser');?>"  method = "post";>
                <div class="siimple-content siimple-content--extra-small">
                    <div class="siimple--px-5 siimple--py-5">
                        <div class="siimple-h2 siimple--text-normal siimple--mb-1" align="center">Login</div>
                <div class="siimple-paragraph siimple-paragraph--lead" align="center">Log with our account</div>
                <div class="siimple-field">
                    <div class="siimple-field-label">Your username</div>
                    <input name="user" type="username" class="siimple-input siimple-input--fluid" placeholder="username">
                </div>
                <div class="siimple-field">
                    <div class="siimple-field-label">Your password</div>
                    <input name="password" type="password" class="siimple-input siimple-input--fluid" placeholder="password">
                    <div class="siimple-field-helper">You password must contain at least 12 characters</div>
                </div>
                <div class="siimple-field">
                <button type="submit" class="siimple-btn siimple-btn--primary siimple-btn--fluid siimple--text-bold">Log in</button>
                </div>
                <div class="siimple-card siimple--mt-5" align="center">
                    <div class="siimple-card-body">
                        Don't have an account? 
                        <a href="<?= site_url('Go/registrati'); ?>" class="siimple-link">Create an account</a>
                    </div>
                </div>
            </form>  
  