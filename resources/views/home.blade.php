<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/style.css', 'resources/js/script.js'])
</head>
<body>
    <header class="hero">
        <img class="reveal" id="hero-image" src="{{ asset('images/me.2.png') }}" alt="Hero Image">
        <div class="container">
            <div class="name">Dylan Broñola</div>
            <div class="description">I am a BSIS student at the La Verdad Christian College, <br>aspiring to be a Software Engineer and a Full Stack Developer.</div>
            <div class="scroll-container">
                <div class="scroll">
                    <span>PHP</span>
                    <span>Python</span>
                    <span>Java</span>
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                    <span>PHP</span>
                    <span>Python</span>
                    <span>Java</span>
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                    <span>PHP</span>
                    <span>Python</span>
                    <span>Java</span>
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                    <span>PHP</span>
                    <span>Python</span>
                    <span>Java</span>
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                </div>
            </div>
            <button class="more">+</button>
        </div>
        <div class="container-hidden">
            <div class="desc">Find out more about me.</div>
            <div class="menu">
                <a href="/" class="atag on"><span class="tag">Home</span></a>
                <a href="about" class="atag"><span class="tag">About</span></a>
                <a href="first" class="atag"><span class="tag">First Project</span></a>
            </div>
        </div>
    </header>
</body>
</html>
