<header class="site-header">

    <nav class="navbar container">

        <a href="{{ url('/') }}" class="logo">
            DELLA<span>KEYZ.</span>
        </a>

        <ul class="nav-links">
            <li><a href="{{ url('/#hero') }}">Home</a></li>
            <li><a href="{{ url('/#about') }}">About</a></li>
            <li><a href="{{ url('/#skills') }}">Skills</a></li>
            <li><a href="{{ url('/#projects') }}">Projects</a></li>
            <li>
                <a href="{{ route('cybersecurity.index') }}">Cybersecurity</a>
            </li>
        </ul>

        <button
            type="button"
            class="theme-toggle"
            id="themeToggle"
            aria-label="Switch to light mode"
            title="Switch theme">
            ☀
        </button>

        <a href="{{ url('/#contact') }}" class="nav-button">
            Let's Talk <span>↗</span>
        </a>

    </nav>

</header>