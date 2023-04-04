<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS SYSTEMS</title>
    <link rel="stylesheet" href="styleLO.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <div class="prop">
            <div class="rectangle1">
                <img src="img/Rectangle 1.png" class="rec1">
            </div>
            <div class="rectangle2">
                <img src="img/Rectangle 2.png" class="rec2">
            </div>
            <div class="2">
                <img src="img/Rectangle.png" class="person">
                <img src="img/chandelier with green round lampshade.png" class="chandelier">
            </div>
        </div>
        <div class="login-container">
            <div class="logo">
                <img src="img/image 1.svg" class="logo">
            </div>
            <div class="login-text">
                Log in
            </div>
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="username">
                    <br>Email<br>
                    <div class="input-container-email">
                        <i class="fa-solid fa-envelope icon"></i>
                        <input id="email" type="email" class="input-field-email"@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>
                <div class="password">
                    Password<br>
                    <div class="input-container-pass">
                        <i class="fa-solid fa-lock icon"></i>
                        <input id="password" type="password" class="input-field-password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="forget">
                    <!-- <a href="#">Forget password?</a> -->
                </div>
                <div class="button-login">
                    <button class="bg-red-600 hover:bg-red-700 text-stone-300 font-bold py-2 border border-red-600 rounded-md w-full">
                        Log in
                    </button>
                </div>
            </form>
        </div>

    </div>
</body>
</html>
