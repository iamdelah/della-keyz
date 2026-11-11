@extends('layouts.app')

@section('title', 'Cybersecurity Hub | Della Keyz')

@section('content')

<!-- CYBERSECURITY HERO -->
<section class="cyber-hero">

    <div class="container">

        <p class="section-label">DELLA KEYZ / CYBERSECURITY HUB</p>

        <div class="cyber-hero-content">

            <div>

                <span class="cyber-status">
                    LEARNING • EXPLORING • SECURING
                </span>

                <h1>
                    Understand security.
                    <span>Think defensively.</span>
                </h1>

                <p>
                    A practical learning space dedicated to cybersecurity
                    awareness, defensive security practices, useful
                    technical commands and continuous learning.
                </p>

                <div class="cyber-hero-actions">

                    <a href="#awareness" class="primary-button">
                        Explore Security Topics ↗
                    </a>

                    <a href="#learning-paths" class="secondary-button">
                        Start Learning
                    </a>

                </div>

            </div>

            <div class="cyber-hero-visual">

                <div class="cyber-orbit orbit-one"></div>
                <div class="cyber-orbit orbit-two"></div>

                <div class="cyber-shield">
                    <span>⌑</span>
                </div>

                <p>SECURITY STARTS WITH AWARENESS</p>

            </div>

        </div>

    </div>

</section>


<!-- SECURITY AWARENESS -->
<section class="cyber-section" id="awareness">

    <div class="container">

        <div class="cyber-section-heading">

            <p class="section-label">01 / SECURITY AWARENESS</p>

            <h2>Small habits. Stronger security.</h2>

            <p>
                Everyday security practices that help protect
                personal information, devices and digital accounts.
            </p>

        </div>

        <div class="awareness-grid">

            <article class="awareness-card">
                <span class="cyber-card-number">01</span>
                <div class="awareness-icon">✉</div>
                <h3>Recognize Phishing</h3>
                <p>
                    Examine unexpected emails, suspicious links and
                    unusual requests before responding. Verify the
                    sender through a trusted channel.
                </p>
                <span class="awareness-tag">EMAIL SECURITY</span>
            </article>

            <article class="awareness-card">
                <span class="cyber-card-number">02</span>
                <div class="awareness-icon">⌑</div>
                <h3>Enable MFA</h3>
                <p>
                    Multi-factor authentication adds another layer
                    of protection beyond a password. Use an
                    authenticator app or security key where possible.
                </p>
                <span class="awareness-tag">ACCOUNT SECURITY</span>
            </article>

            <article class="awareness-card">
                <span class="cyber-card-number">03</span>
                <div class="awareness-icon">⚿</div>
                <h3>Password Hygiene</h3>
                <p>
                    Use long, unique passwords for different accounts.
                    Consider a reputable password manager and avoid
                    sharing credentials.
                </p>
                <span class="awareness-tag">IDENTITY PROTECTION</span>
            </article>

            <article class="awareness-card">
                <span class="cyber-card-number">04</span>
                <div class="awareness-icon">↻</div>
                <h3>Install Updates</h3>
                <p>
                    Keep operating systems, browsers and applications
                    updated to receive security fixes and reduce
                    exposure to known vulnerabilities.
                </p>
                <span class="awareness-tag">PATCH MANAGEMENT</span>
            </article>

            <article class="awareness-card">
                <span class="cyber-card-number">05</span>
                <div class="awareness-icon">▤</div>
                <h3>Back Up Your Data</h3>
                <p>
                    Maintain regular backups and test that you can
                    restore important files. Keep a backup separate
                    from your everyday device.
                </p>
                <span class="awareness-tag">DATA PROTECTION</span>
            </article>

            <article class="awareness-card">
                <span class="cyber-card-number">06</span>
                <div class="awareness-icon">◎</div>
                <h3>Understand Social Engineering</h3>
                <p>
                    Be cautious of urgent messages, impersonation,
                    unexpected requests for information and attempts
                    to manipulate your decisions.
                </p>
                <span class="awareness-tag">HUMAN SECURITY</span>
            </article>

        </div>

    </div>

</section>


<!-- LEARNING PATHS -->
<section class="cyber-section cyber-alt" id="learning-paths">

    <div class="container">

        <div class="cyber-section-heading">

            <p class="section-label">02 / LEARNING PATHS</p>

            <h2>Build your security knowledge.</h2>

            <p>
                A structured progression from foundational knowledge
                to more advanced defensive security concepts.
            </p>

        </div>

        <div class="learning-grid">

            <article class="learning-card">

                <span class="learning-level">LEVEL 01</span>

                <h3>Beginner</h3>

                <p>Understand the fundamentals of cybersecurity.</p>

                <ul>
                    <li>Introduction to cybersecurity</li>
                    <li>Networking fundamentals</li>
                    <li>Operating system basics</li>
                    <li>Common cyber threats</li>
                    <li>Account and device security</li>
                </ul>

                <span class="learning-duration">
                    FOUNDATION
                </span>

            </article>

            <article class="learning-card featured-learning">

                <span class="learning-level">LEVEL 02</span>

                <h3>Intermediate</h3>

                <p>Develop practical defensive security knowledge.</p>

                <ul>
                    <li>Linux and Windows security</li>
                    <li>Log analysis fundamentals</li>
                    <li>Firewalls and network security</li>
                    <li>Vulnerability management</li>
                    <li>Security monitoring concepts</li>
                </ul>

                <span class="learning-duration">
                    PRACTICAL DEVELOPMENT
                </span>

            </article>

            <article class="learning-card">

                <span class="learning-level">LEVEL 03</span>

                <h3>Advanced</h3>

                <p>Explore deeper security and incident response topics.</p>

                <ul>
                    <li>Incident response</li>
                    <li>Security operations concepts</li>
                    <li>Digital forensics fundamentals</li>
                    <li>Threat intelligence</li>
                    <li>Security architecture</li>
                </ul>

                <span class="learning-duration">
                    CONTINUOUS LEARNING
                </span>

            </article>

        </div>

    </div>

</section>


<!-- COMMAND REFERENCE -->
<section class="cyber-section" id="commands">

    <div class="container">

        <div class="cyber-section-heading">

            <p class="section-label">03 / COMMAND REFERENCE</p>

            <h2>Useful commands for everyday systems.</h2>

            <p>
                A growing reference for basic system administration
                and defensive troubleshooting.
            </p>

        </div>

        <div class="command-panel">

            <div class="command-toolbar">

                <div>
                    <span class="terminal-dot"></span>
                    <span class="terminal-dot"></span>
                    <span class="terminal-dot"></span>
                    <span class="terminal-title">COMMAND REFERENCE</span>
                </div>

                <input
                    type="search"
                    id="commandSearch"
                    placeholder="Search commands..."
                    aria-label="Search commands"
                >

            </div>

            <div class="command-filters">

                <button class="command-filter active" data-filter="all">
                    All
                </button>

                <button class="command-filter" data-filter="windows">
                    Windows
                </button>

                <button class="command-filter" data-filter="linux">
                    Linux
                </button>

                <button class="command-filter" data-filter="macos">
                    macOS
                </button>

            </div>

            <div class="command-list">

                <article class="command-item" data-os="windows">

                    <div>
                        <span class="command-os">WINDOWS</span>
                        <h3>Display IP configuration</h3>
                        <code>ipconfig /all</code>
                        <p>Displays detailed network configuration.</p>
                    </div>

                    <button class="copy-command"
                        data-command="ipconfig /all">
                        Copy
                    </button>

                </article>

                <article class="command-item" data-os="windows">

                    <div>
                        <span class="command-os">WINDOWS</span>
                        <h3>Test network connectivity</h3>
                        <code>ping 8.8.8.8</code>
                        <p>Tests connectivity to a remote IP address.</p>
                    </div>

                    <button class="copy-command"
                        data-command="ping 8.8.8.8">
                        Copy
                    </button>

                </article>

                <article class="command-item" data-os="windows">

                    <div>
                        <span class="command-os">WINDOWS</span>
                        <h3>Display active network connections</h3>
                        <code>netstat -ano</code>
                        <p>Displays network connections and associated process IDs.</p>
                    </div>

                    <button class="copy-command"
                        data-command="netstat -ano">
                        Copy
                    </button>

                </article>

                <article class="command-item" data-os="linux">

                    <div>
                        <span class="command-os">LINUX</span>
                        <h3>Display IP addresses</h3>
                        <code>ip addr</code>
                        <p>Displays network interfaces and IP addresses.</p>
                    </div>

                    <button class="copy-command"
                        data-command="ip addr">
                        Copy
                    </button>

                </article>

                <article class="command-item" data-os="linux">

                    <div>
                        <span class="command-os">LINUX</span>
                        <h3>Check listening ports</h3>
                        <code>ss -tuln</code>
                        <p>Displays listening TCP and UDP sockets.</p>
                    </div>

                    <button class="copy-command"
                        data-command="ss -tuln">
                        Copy
                    </button>

                </article>

                <article class="command-item" data-os="linux">

                    <div>
                        <span class="command-os">LINUX</span>
                        <h3>Display current user</h3>
                        <code>whoami</code>
                        <p>Identifies the currently logged-in user.</p>
                    </div>

                    <button class="copy-command"
                        data-command="whoami">
                        Copy
                    </button>

                </article>

                <article class="command-item" data-os="macos">

                    <div>
                        <span class="command-os">macOS</span>
                        <h3>Display network interfaces</h3>
                        <code>ifconfig</code>
                        <p>Displays network interface configuration.</p>
                    </div>

                    <button class="copy-command"
                        data-command="ifconfig">
                        Copy
                    </button>

                </article>

                <article class="command-item" data-os="macos">

                    <div>
                        <span class="command-os">macOS</span>
                        <h3>Display routing information</h3>
                        <code>netstat -rn</code>
                        <p>Displays the system routing table.</p>
                    </div>

                    <button class="copy-command"
                        data-command="netstat -rn">
                        Copy
                    </button>

                </article>

            </div>

            <p id="commandFeedback" class="command-feedback"
                aria-live="polite"></p>

        </div>

    </div>

</section>


<!-- LEARNING RESOURCES -->
<section class="cyber-section cyber-alt" id="resources">

    <div class="container">

        <div class="cyber-section-heading">

            <p class="section-label">04 / LEARNING RESOURCES</p>

            <h2>Learn from trusted resources.</h2>

            <p>
                Platforms and references for developing cybersecurity
                knowledge through structured learning and practice.
            </p>

        </div>

        <div class="resource-grid">

            <a href="https://owasp.org/www-project-top-ten/"
                target="_blank" rel="noopener noreferrer"
                class="resource-card">

                <span>WEB APPLICATION SECURITY</span>
                <h3>OWASP Top 10 ↗</h3>
                <p>
                    Learn about important web application security risks.
                </p>

            </a>

            <a href="https://www.cisa.gov/secure-our-world"
                target="_blank" rel="noopener noreferrer"
                class="resource-card">

                <span>SECURITY AWARENESS</span>
                <h3>CISA — Secure Our World ↗</h3>
                <p>
                    Explore practical advice for protecting digital accounts
                    and devices.
                </p>

            </a>

            <a href="https://tryhackme.com/"
                target="_blank" rel="noopener noreferrer"
                class="resource-card">

                <span>HANDS-ON LEARNING</span>
                <h3>TryHackMe ↗</h3>
                <p>
                    Develop practical cybersecurity knowledge through
                    guided learning environments.
                </p>

            </a>

            <a href="https://skillsforall.com/"
                target="_blank" rel="noopener noreferrer"
                class="resource-card">

                <span>NETWORKING & SECURITY</span>
                <h3>Cisco Skills for All ↗</h3>
                <p>
                    Explore networking and cybersecurity learning materials.
                </p>

            </a>

            <a href="https://linuxjourney.com/"
                target="_blank" rel="noopener noreferrer"
                class="resource-card">

                <span>OPERATING SYSTEMS</span>
                <h3>Linux Journey ↗</h3>
                <p>
                    Learn Linux fundamentals and essential system concepts.
                </p>

            </a>

            <a href="https://www.nist.gov/cyberframework"
                target="_blank" rel="noopener noreferrer"
                class="resource-card">

                <span>SECURITY FRAMEWORKS</span>
                <h3>NIST Cybersecurity Framework ↗</h3>
                <p>
                    Understand a structured approach to managing
                    cybersecurity risk.
                </p>

            </a>

        </div>

    </div>

</section>


<!-- KNOWLEDGE CHECK -->
<section class="cyber-section" id="knowledge-check">

    <div class="container">

        <div class="cyber-section-heading">

            <p class="section-label">05 / KNOWLEDGE CHECK</p>

            <h2>Test your security awareness.</h2>

            <p>
                A short exercise to reinforce some of the concepts
                covered in this hub.
            </p>

        </div>

        <div class="quiz-card">

            <span class="quiz-number">QUESTION 01 / 03</span>

            <h3>
                Which of the following provides an additional
                layer of account protection?
            </h3>

            <div class="quiz-options">

                <button class="quiz-option" data-correct="false">
                    Using the same password everywhere
                </button>

                <button class="quiz-option" data-correct="true">
                    Enabling multi-factor authentication
                </button>

                <button class="quiz-option" data-correct="false">
                    Sharing passwords with colleagues
                </button>

            </div>

            <p id="quizFeedback" aria-live="polite"></p>

        </div>

    </div>

</section>


<!-- ETHICAL PRACTICE -->
<section class="cyber-ethics">

    <div class="container">

        <div class="ethics-content">

            <span class="ethics-label">06 / RESPONSIBLE PRACTICE</span>

            <h2>Knowledge comes with responsibility.</h2>

            <p>
                Cybersecurity knowledge should be used ethically and
                responsibly. Only test, scan or investigate systems
                that you own or have explicit authorization to assess.
                Respect privacy, applicable laws and organizational policies.
            </p>

        </div>

    </div>

</section>

@endsection