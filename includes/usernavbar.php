<!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../userviews/userindex.php"><i class="fas fa-video"></i> MOVIEFLIX</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item me-auto">
          <a class="btn btn-success" href="../userviews/user_cine.php"><i class="fas fa-film"></i> WATCH</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item me-auto">
          <a class="btn btn-warning" aria-current="page" href="../login.php"><i class="fas fa-sign-out-alt"></i>Log out</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->

<nav>
    <h4 class="navHeading">
        <a href="../userviews/userindex.php"> MOVIEFLIX</a>
    </h4>

    <div class="logo">
        <ul class="nav-links">
            <li>
              <a href="../userviews/cine.php"><i class="fas fa-video"></i></i>Movies </a>

            </li>
            <li>
                <a href="../login.php"><i class="fas fa-sign-out-alt"></i>Log out </a>
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