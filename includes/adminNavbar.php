<nav>
    <h4 class="navHeading">
        <a href="index.php"> MOVIEFLIX</a>
    </h4>

    <div class="logo">
        <ul class="nav-links">
            <li>
                <a href="cine.php"><i class="fas fa-video"></i></i>Movies </a>

            </li>
            <li>
                <a href="administrar_peliculas.php"><i class="fas fa-cogs"></i>Administrar</a>
            </li>
            <li>
                <a href="login.php"><i class="fas fa-sign-out-alt"></i>Log out </a>
            </li>

        </ul>
        <div class="burger">
            <div class="lin1">

            </div>
            <div class="lin2">

            </div>
            <div class="lin3">

            </div>
        </div>
    </div>
</nav>
<script>
    const navSlide = () => {
        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.nav-links');
        const navLinks = document.querySelectorAll('.nav-links li');
        //Toggle

        burger.addEventListener('click', () => {
            nav.classList.toggle('nav-active');

            //animate links
            navLinks.forEach((link, index) => {
                if (link.style.animation) {
                    link.style.animation = ''
                } else {
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.35}s`;
                }

            });
            //burger animation
            burger.classList.toggle('toggle');
        });
    }

    navSlide();

</script>