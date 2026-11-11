@extends('layouts.app')

@section('title', 'Della Keyz | Developer Portfolio')

@section('content')

<section id="hero" class="hero-section">

    <div class="container hero-content">

        <p class="hero-label">
            <span class="status-dot"></span>
            AVAILABLE FOR OPPORTUNITIES
        </p>

        <h1>
            Building practical
            <span class="gradient-text">
                solutions through technology.
            </span>
        </h1>

        <p class="hero-description">
            I'm an ICT professional with hands-on experience in technical support, troubleshooting and systems administration, alongside a growing focus on web application development. I enjoy solving problems, exploring emerging technologies and building digital solutions that make a difference.
        </p>

        <div class="hero-actions">

            <a href="#projects" class="primary-button">
                Explore My Work ↗
            </a>

            <a href="#about" class="secondary-button">
                More About Me
            </a>

        </div>

        <div class="hero-bottom">
            <span>WEB DEVELOPMENT</span>
            <span>IT SUPPORT & SYSTEMS</span>
            <span>CLOUD & CYBERSECURITY</span>
        </div>

    </div>

</section>

<section id="about" class="about-section">

    <div class="container about-grid">

        <div class="about-heading">
            <p class="section-label">01 / ABOUT ME</p>

        
            <h2>
                Technology is more than code.
                <span>It's about solving problems.</span>
            </h2>
        </div>

        <div class="about-description">

            <p>
                I'm an ICT graduate with a passion for technology,
                digital innovation and building practical solutions
                that make a difference.
            </p>

            <p>
                My experience includes technical support, troubleshooting,
                system administration concepts and web application
                development.
            </p>

            <p>
                I enjoy learning, experimenting with new technologies
                and turning ideas into functional digital experiences.
                I'm also developing my knowledge of cybersecurity
                and cloud computing.
            </p>

            <a href="#contact" class="about-link">
                Let's work together ↗
            </a>

        </div>

    </div>

    <div class="container about-highlights">

        <div class="highlight-card">
            <span>01</span>
            <h3>Web Development</h3>
            <p>Building functional and user-focused digital experiences.</p>
        </div>

        <div class="highlight-card">
            <span>02</span>
            <h3>ICT Support</h3>
            <p>Technical troubleshooting and helping users solve problems.</p>
        </div>

        <div class="highlight-card">
            <span>03</span>
            <h3>Cybersecurity</h3>
            <p>Exploring security practices and building technical awareness.</p>
        </div>

    </div>

</section>

<section class="skills-section" id="skills">

    <div class="container">

        <div class="skills-heading">
            <p class="section-label">02 / TECHNICAL EXPERTISE</p>

            <h2>Technical Skills & Expertise</h2>

            <p>
                Technologies, tools and technical areas I work with
                and continue to explore.
            </p>
        </div>

        <div class="skills-grid">

            <!-- Frontend Development -->
            <div class="skill-card">

                <div class="skill-icon">01</div>

                <h3>Frontend Development</h3>

                <p>
                    Creating responsive interfaces and user-friendly
                    web experiences.
                </p>

                <div class="skill-tags">
                    <span>HTML5</span>
                    <span>CSS3</span>
                    <span>JavaScript</span>
                    <span>Responsive Design</span>
                </div>

            </div>

            <!-- Backend Development -->
            <div class="skill-card">

                <div class="skill-icon">02</div>

                <h3>Backend Development</h3>

                <p>
                    Building web application functionality and
                    server-side solutions.
                </p>

                <div class="skill-tags">
                    <span>PHP</span>
                    <span>Laravel</span>
                    <span>MySQL</span>
                </div>

            </div>

            <!-- IT Support -->
            <div class="skill-card">

                <div class="skill-icon">03</div>

                <h3>IT Support & Systems</h3>

                <p>
                    Supporting users, troubleshooting technical
                    problems and maintaining computer systems.
                </p>

                <div class="skill-tags">
                    <span>Troubleshooting</span>
                    <span>Windows</span>
                    <span>Hardware</span>
                    <span>Software Installation</span>
                </div>

            </div>

            <!-- Networking -->
            <div class="skill-card">

                <div class="skill-icon">04</div>

                <h3>Networking & Administration</h3>

                <p>
                    Exploring network configuration, user management
                    and system administration.
                </p>

                <div class="skill-tags">
                    <span>Networking</span>
                    <span>Active Directory</span>
                    <span>Group Policy</span>
                </div>

            </div>

            <!-- Cloud -->
            <div class="skill-card">

                <div class="skill-icon">05</div>

                <h3>Cloud Computing</h3>

                <p>
                    Developing practical knowledge of cloud
                    infrastructure and services.
                </p>

                <div class="skill-tags">
                    <span>AWS</span>
                    <span>Cloud Fundamentals</span>
                    <span>Linux</span>
                </div>

            </div>

            <!-- Cybersecurity -->
            <div class="skill-card">

                <div class="skill-icon">06</div>

                <h3>Cybersecurity</h3>

                <p>
                    Developing knowledge of cybersecurity,
                    security awareness and defensive practices.
                </p>

                <div class="skill-tags">
                    <span>Security Awareness</span>
                    <span>Networking Fundamentals</span>
                    <span>System Security</span>
                </div>

            </div>

        </div>

    </div>

</section>

<section class="projects-section" id="projects">

    <div class="container">

        <div class="projects-heading">

            <div>
                <p class="section-label">03 / SELECTED WORK</p>
                <h2>Things I've Built.</h2>
                <p>
                    A selection of web applications and digital
                    experiences I've worked on.
                </p>
            </div>

            <span class="project-count">01 — 03</span>

        </div>

        <div class="projects-grid">

            <!-- Project 1: Student Email Generator -->
            <article class="project-card">

                <div class="project-visual email-visual">
                    <span>01</span>

                    <div class="visual-text">
                        <span>WEB APPLICATION</span>
                        <h3>Student<br>Email Generator</h3>
                    </div>

                    <span class="visual-symbol">@</span>
                </div>

                <div class="project-info">

                    <div class="project-meta">
                        <span>DATA AUTOMATION</span>
                        <span class="project-status">Live</span>
                    </div>

                    <h3>Student Email Generator</h3>

                    <p>
                        A Python and Streamlit application that parses
                        student records and generates institutional
                        email addresses in Excel format.
                    </p>

                    <div class="project-tags">
                        <span>Python</span>
                        <span>Streamlit</span>
                        <span>Excel</span>
                    </div>

                    <a href="https://email-generate.streamlit.app/"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="project-link">
                        View Live Project ↗
                    </a>

                </div>

            </article>


            <!-- Project 2: Del Media Consult -->
            <article class="project-card">

                <div class="project-visual media-visual">
                    <span>02</span>

                    <div class="visual-text">
                        <span>BUSINESS WEBSITE</span>
                        <h3>Del Media<br>Consult</h3>
                    </div>

                    <span class="visual-symbol">✳</span>
                </div>

                <div class="project-info">

                    <div class="project-meta">
                        <span>MEDIA & CONSULTANCY</span>
                        <span class="project-status">Live</span>
                    </div>

                    <h3>Del Media Consult</h3>

                    <p>
                        A business website showcasing media consultancy,
                        advertising, event organisation, public relations
                        and voice-over production services.
                    </p>

                    <div class="project-tags">
                        <span>Web Design</span>
                        <span>Business Website</span>
                        <span>Media</span>
                    </div>

                    <a href="https://delmediaconsult.vercel.app/"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="project-link">
                        View Live Project ↗
                    </a>

                </div>

            </article>


            <!-- Project 3: Team Makkel -->
            <article class="project-card">

                <div class="project-visual album-visual">
                    <span>03</span>

                    <div class="visual-text">
                        <span>CAMPAIGN WEBSITE</span>
                        <h3>Team<br>Makkel</h3>
                    </div>

                    <span class="visual-symbol">✦</span>
                </div>

                <div class="project-info">

                    <div class="project-meta">
                        <span>STUDENT LEADERSHIP</span>
                        <span class="project-status">Live</span>
                    </div>

                    <h3>Team Makkel</h3>

                    <p>
                        A student election campaign website presenting
                        the team's declaration of intent, mission,
                        vision and leadership message.
                    </p>

                    <div class="project-tags">
                        <span>Web Design</span>
                        <span>Campaign Website</span>
                        <span>Digital Presentation</span>
                    </div>

                    <a href="https://teammakkel.vercel.app/"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="project-link">
                        View Live Project ↗
                    </a>

                </div>

            </article>

        </div>

    </div>

</section>
<section id="cybersecurity" class="cyber-home-section">

    <div class="container cyber-home-content">

        <div>
            <p class="section-label">04 / CYBERSECURITY</p>

            <h2>
                Security is everyone's responsibility.
            </h2>

            <p>
                Explore cybersecurity awareness, defensive security
                practices, technical commands and structured learning
                resources in the Della Keyz Cybersecurity Hub.
            </p>

            <a href="{{ route('cybersecurity.index') }}"
                class="primary-button">
                Explore Cybersecurity Hub ↗
            </a>
        </div>

        <div class="cyber-home-badge">
            <span>CYBER</span>
            <strong>SECURITY</strong>
            <small>LEARN • PRACTISE • PROTECT</small>
        </div>

    </div>

</section>


<section id="contact" class="contact-section">

    <div class="container">

        <p class="section-label">05 / GET IN TOUCH</p>

        <h2>Let's connect.</h2>

        <p class="contact-description">
            Interested in working together, discussing technology
            or exploring an opportunity? Feel free to reach out.
        </p>

        <div class="contact-links">

            <a href="mailto:dherlali888@gmail.com" class="contact-link">
                Email ↗
            </a>

            <a href="https://github.com/iamdelah"
               target="_blank"
               rel="noopener noreferrer"
               class="contact-link">
                GitHub ↗
            </a>

            <a href="https://www.linkedin.com/in/delali-semabia-52029b281/"
               target="_blank"
               rel="noopener noreferrer"
               class="contact-link">
                LinkedIn ↗
            </a>

        </div>

    </div>

</section>


@endsection