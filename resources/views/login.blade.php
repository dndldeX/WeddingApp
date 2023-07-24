<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Organize By KunTum - Wedding</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
`
<body>
    <div class="container">


        {{-- Left Start --}}
        <div class="c1">
            <div class="c11">
                <h1 class="mainhead">Welcome To</h1>
                <p class="mainp">Organize By KUNTUM</p>
            </div>
            <div id="left">
                <h1 class="s1class"><span>SIGN</span><span class="su">IN</span>
                </h1>
            </div>
            <div id="right">
                <h1 class="s2class"><span>SIGN</span><span class="su">UP</span></h1>
            </div>
        </div>
        {{-- Left End --}}


        {{-- Right Start --}}
        <div class="c2">

            <form class="signup">
                <h1 class="signup1">SIGN UP</h1>
                <br><br><br><br>
                <input name="username" type="text" placeholder="Username*" class="username" />

                <input name="email" type="text" placeholder="Email*" class="username" />

                <input name="password" type="password" placeholder="Password*" class="username" />

                <button class="btn">Sign Up</button>
            </form>

            <form class="signin">
                <h1 class="signup1">SIGN IN</h1>
                <br><br><br><br>
                <input name="username" type="text" placeholder="Username*" class="username" />

                <input name="password" type="password" placeholder="Password*" class="username" />

                <button class="btn">Get Started</button>

                <br><br><br><br>
                <a href="">
                    <p class="signup2">Forget Password?</p>
                </a>
            </form>
        </div>
        {{-- Right End --}}


    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
