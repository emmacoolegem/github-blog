<header class="container site-header">
    <div class="site-header-content">
            <h1>Emma Coolegem</h1>
            <hr>
        
            <span class="burger" v-on:click="toggleNav()">
                <i class="fas fa-bars"></i>
            </span>
        
            <div class="socials">
                <a href="https://www.instagram.com/{{ $page->instagram }}" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
        
                <a href="https://nl.linkedin.com/in/{{ $page->linkedin }}" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
        
                <a href="mailto:{{ $page->email }}">
                    <i class="fas fa-at"></i>
                </a>
            </div>
    </div>
</header>