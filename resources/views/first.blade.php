<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Project</title>
    @vite(['resources/css/style.css', 'resources/js/script.js'])
</head>
<body>
    <main class="first-main">
        <div class="name reveal2">My Very First Project</div>
        <div class="project">     
            <div class="name reveal2">
                My First Step into Web Development: Project Cookeys                
            </div>       
            <article>    
                <div class="desc reveal2">Every developer remembers their first "real" site. For me, that was Cookeys. Working alongside a talented team, I took on the challenge of being both a CSS and JavaScript developer.

                    The goal was simple: make Filipino cooking accessible. The execution, however, taught me the complexities of DOM manipulation, the precision of CSS Grid, and the importance of version control and teamwork. From the automatic hero slider to the logic that powers the recipe filtering, Cookeys represents the moment I transitioned from "learning to code" to "building solutions."
                </div>
                <iframe class="cookeys reveal2" src="https://cookeys-test-2.vercel.app/Project_Home.html" frameborder="0"></iframe>       
            </article> 
        </div>
    </main>
    <button class="more">+</button>
    <div class="container-hidden">
        <div class="desc">Find out more about me.</div>
        <div class="menu">
            <a href="/" class="atag"><span class="tag">Home</span></a>
            <a href="about" class="atag"><span class="tag">About</span></a>
            <a href="first" class="atag on"><span class="tag">First Project</span></a>
        </div>
    </div>
</body>
</html>