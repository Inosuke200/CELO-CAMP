<nav class="navbar navbar-expand-lg  ftco-navbar-light" style="margin-top: 2em;">
    <div class="container-xl">
        <!-- <a class="navbar-brand align-items-center" href="index.html">
    Academia
    </a> -->
        <a href="#" class="btn-custom order-lg-last">Obtenez votre certificat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link @if (url()->current()==route('homepage')) active @endif" href="{{route('homepage')}}">Accueil</a></li>
                <li class="nav-item"><a class="nav-link @if (url()->current()==route('courses')) active @endif" href="{{route('courses')}}">Cours</a></li>
                <li class="nav-item"><a class="nav-link @if (url()->current()==route('about')) active @endif" href="{{route('about')}}">À propos</a></li>
                <li class="nav-item"><a class="nav-link @if (url()->current()==route('equipe')) active @endif" href="{{route("equipe")}}">L'équipe</a></li>
                <li class="nav-item"><a class="nav-link" href="pricing.html">Nos offres</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.html">African Defi Community</a></li>
                <li class="nav-item"><a class="nav-link @if (url()->current()==route('contact')) active @endif" href="{{route('contact')}}">Contactez-nous</a></li>
                <li class="nav-item"><a class="nav-link @if (url()->current()==route("partenaire")) active @endif" href="{{route('partenaire')}}">Devenir partenaire</a></li>
            </ul>
        </div>
    </div>
</nav>
