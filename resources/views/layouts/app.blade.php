<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patroclo Store</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>

    <header>
        @include('partials.menubar')
    </header>

    <main>
        <div class="max-w-[1080px] pt-5 m-auto">
            @yield('content')
        </div>
    </main>

</body>
<script>

    const KEY_CACHE_SESSION = 'KEY_CACHE_SESSION';

    function generateRandomString(){
        const chars = 'ABCDEFGHIJQLMNOPQRSTVUWXYZ0123456789abcdefghijklmnsrtuvwxyz';
        let random = '';
        for (let i = 0; i < 20; i++) {
            const ch = chars[Math.floor(Math.random() * (chars.length - 1 ))];
            random+=ch;
        }
        return random;
    }

    function loadCacheSession(){
        const prevSession = localStorage.getItem(KEY_CACHE_SESSION);
        console.log('prevSession',prevSession);
        if(!prevSession){
            const random = generateRandomString();
            console.log('random',random);
            localStorage.setItem(KEY_CACHE_SESSION, random);
        }
    }

    loadCacheSession();

    //console.log('generateRandomString',generateRandomString());


</script>
</html>