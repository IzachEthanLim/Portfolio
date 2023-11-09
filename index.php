<html>
    <head>
        <meta charset="UTF-8">
        <title>Izachs Portfolio</title>
        <link rel="stylesheet" type="text/css" href="Style.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>
    <body>
        <header>
            <a href="#" class="logo">
                <img src="Images/Logo.png" alt="Logo">
            </a>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#sec" data-scroll>About</a></li>
                <li><a href="#skills" data-scroll>Skills</a></li>
                <li><a href="#">Works</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
        </header>
        <section>
            <img src="Images/Stars.png" id="stars">
            <img src="Images/Moon.png" id="moon">
            <img src="Images/Mountain.png" id="mountain">
            <a href="#sec" id="btn" class="smooth-scroll">Explore</a>
            <img src="Images/Lake.png" id="lake">
        </section>
        <div class="sec" id="sec">
            <div class="about-text">
            <h2>A little about me</h2>
            <p>Hi, I'm Izach a web-designer/web developer 2nd Year Student at Republic Polytechnic.
                I like Reading, and Drawing.
                I aspire to create beautiful websites, that not only look amazing but are also 
                intuitive to use. I take a lot of inspiration from fantasy/sci-fi games and novels
                and book that I read.</p>
            </div>
            <div class="about-image">
            <img src="Images/DSCN0254-SG-FOTO-2.jpg" alt="portrait" class="about-image">
            </div>
        </div>
        
        <div class="heading">
            <h2>Skills</h2>
        </div>
        
        <div class="skills" id="skills">
               <ul>
        <li>
            <ion-icon name="logo-javascript"></ion-icon>
            <ion-icon name="logo-css3"></ion-icon>
        </li>
        <li>
            <ion-icon name="logo-python"></ion-icon>
        </li>
    </ul>
            <ul class="design">
        <li>
            <img src="Images/icons8-adobe-xd-500.png" >
            <img src="Images/icons8-illustrator-500.png" >
        </li>
        <li>
            <img src="Images/icons8-unity-500.png">
        </li>
    </ul>
        </div>
        
        <div class="work">
        <div class="wrapper">
            <div class="box">
                <div class="front-face">
                    <div class="icon"><i class="fas fa-code"></i></div>
                    <span>Programming</span>
                </div>
                <div class="back-face">
                    <span>Programming</span>
                    <p>Programming Lore</p>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="box">
                <div class="front-face">
                    <div class="icon"><i class="fas fa-pen"></i></div>
                    <span>Illustration</span>
                </div>
                <div class="back-face">
                    <span>illustration</span>
                    <p>Illustration Lore</p>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="box">
                <div class="front-face">
                    <div class="icon"><i class="fas fa-frame"></i></div>
                    <span>Web Design</span>
                </div>
                <div class="back-face">
                    <span>Web Design</span>
                    <p>Web Design Lore</p>
                </div>
            </div>
        </div>
        </div>
        <script>
            let stars = document.getElementById('stars');
            let moon = document.getElementById('moon');
            let mountain = document.getElementById('mountain');
            let btn = document.getElementById('btn');
            let lake = document.getElementById('lake');
            
            window.addEventListener('scroll', function(){
                let value = window.scrollY;
                stars.style.left = value * 0.25 + 'px';
                moon.style.top = value * 0.75 + 'px';
                btn.style.marginTop = value * 1.5 + 'px';
            });
            
            document.querySelector('.smooth-scroll').addEventListener('click', function (e) {
    e.preventDefault(); 

    const targetId = this.getAttribute('href').substring(1);
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
      window.scrollTo({
        behavior: 'smooth',
        top: targetElement.offsetTop,
      });
    }
  });
  document.addEventListener("DOMContentLoaded", function () {
    const scrollLinks = document.querySelectorAll("a[data-scroll]");

    scrollLinks.forEach(function (link) {
        link.addEventListener("click", function (e) {
            e.preventDefault();

            const targetId = link.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: "smooth",
                });
            }
        });
    });
});
        </script>  
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>