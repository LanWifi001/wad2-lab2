<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    @vite(['resources/css/style.css', 'resources/js/script.js'])
</head>
<body>
    <main class="about-main">
        <div class="name reveal2">About Me</div>
        <button class="more">+</button>
        <article class="about-intro">
            <span class="about-desc reveal2">
                I am a BS Information Systems student at La Verdad Christian College and a consistent Dean’s Lister with a passion for building digital solutions that matter. My profile is a unique blend of technical discipline and creative expression. Whether I am writing clean code in Java and Laravel, leading municipal-wide organizations, or competing in regional DanceSports championships, I thrive on excellence and adaptability.
            </span>
            <img class="about-img reveal2" src="{{ asset('images/Overall.jpg') }}" alt="About Me">
        </article>

        <div class="pillars">
            <div class="name reveal2">
                The Three Pillars of My Journey
            </div>
            <div class="category reveal2">
                The Technical Explorer
            </div>
            <span class="category-desc">
                <div class="about-desc reveal2">
                    With a toolkit ranging from Python and React.js to Database Management (MySQL), I enjoy bridging the gap between back-end logic and front-end aesthetics. My recent certifications in AI for Supply Chains and IoT reflect my commitment to staying at the forefront of digital transformation.
                </div>
                <img class="about-img reveal2" src="{{ asset('images/Champ.jpg') }}" alt="About Me">
            </span>            
            <div class="category reveal2">
                The Proven Leader
            </div>
            <span class="category-desc">
                <div class="about-desc reveal2">
                    Leadership is a core part of my identity. Having served as President of the Municipal Children’s Association and Vice President of the SSLG, I have mastered the arts of project management, public speaking, and conflict resolution. I don't just build systems; I lead the people who use them.
                </div>
                <img class="about-img reveal2" id="img2 reveal2" src="{{ asset('images/lead.jpg') }}" alt="About Me">
            </span>
            <div class="category reveal2">
                The Creative Performer
            </div>
            <span class="category-desc">
                <div class="about-desc reveal2">
                    My discipline was forged on the stage. As a multi-gold medalist in Likhawitan and DanceSports, and a recipient of numerous Outstanding Performance in Arts awards, I bring a high level of "performance confidence" and stage presence to everything I do—from technical pitches to team collaborations.
                </div>
                <img class="about-img reveal2" src="{{ asset('images/lvdt.jpg') }}" alt="About Me">
            </span>
        </div>
    </main>
    <div class="container-hidden">
        <div class="desc">Find out more about me.</div>
        <div class="menu">
            <a href="/" class="atag"><span class="tag">Home</span></a>
            <a href="about" class="atag on"><span class="tag">About</span></a>
            <a href="first" class="atag"><span class="tag">First Project</span></a>
        </div>
    </div>
</body>
</html>