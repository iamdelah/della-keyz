import './bootstrap';

/* =========================================
   DELLA KEYZ - CYBERSECURITY HUB
========================================= */

document.addEventListener('DOMContentLoaded', function () {

    /* -------------------------------
       COMMAND FILTERING
    -------------------------------- */

    const commandItems = document.querySelectorAll('.command-item');
    const filterButtons = document.querySelectorAll('.command-filter');
    const searchInput = document.getElementById('commandSearch');

    let activeFilter = 'all';

    function filterCommands() {

        const searchTerm = searchInput
            ? searchInput.value.toLowerCase().trim()
            : '';

        commandItems.forEach(function (item) {

            const operatingSystem = item.dataset.os;

            const itemText = item.textContent.toLowerCase();

            const matchesFilter =
                activeFilter === 'all' ||
                operatingSystem === activeFilter;

            const matchesSearch =
                itemText.includes(searchTerm);

            item.style.display =
                matchesFilter && matchesSearch ? 'flex' : 'none';

        });

    }

    filterButtons.forEach(function (button) {

        button.addEventListener('click', function () {

            filterButtons.forEach(function (btn) {
                btn.classList.remove('active');
            });

            button.classList.add('active');

            activeFilter = button.dataset.filter;

            filterCommands();

        });

    });

    if (searchInput) {

        searchInput.addEventListener('input', filterCommands);

    }


    /* -------------------------------
       COPY COMMANDS
    -------------------------------- */

    const copyButtons = document.querySelectorAll('.copy-command');

    const commandFeedback = document.getElementById('commandFeedback');

    copyButtons.forEach(function (button) {

        button.addEventListener('click', async function () {

            const command = button.dataset.command;

            try {

                await navigator.clipboard.writeText(command);

                button.textContent = 'Copied!';

                if (commandFeedback) {
                    commandFeedback.textContent =
                        'Command copied: ' + command;
                }

                setTimeout(function () {

                    button.textContent = 'Copy';

                }, 1800);

            } catch (error) {

                if (commandFeedback) {
                    commandFeedback.textContent =
                        'Unable to copy automatically. Please copy the command manually.';
                }

            }

        });

    });


    /* -------------------------------
       KNOWLEDGE CHECK
    -------------------------------- */

    const quizOptions = document.querySelectorAll('.quiz-option');

    const quizFeedback = document.getElementById('quizFeedback');

    quizOptions.forEach(function (option) {

        option.addEventListener('click', function () {

            // Prevent multiple answers.
            if (option.disabled) {
                return;
            }

            const isCorrect =
                option.dataset.correct === 'true';

            quizOptions.forEach(function (answer) {

                answer.disabled = true;

                if (answer.dataset.correct === 'true') {
                    answer.classList.add('correct');
                }

            });

            if (isCorrect) {

                quizFeedback.textContent =
                    'Correct! MFA provides an additional layer of account protection.';

                quizFeedback.style.color = '#22C55E';

            } else {

                option.classList.add('incorrect');

                quizFeedback.textContent =
                    'Not quite. The correct answer is multi-factor authentication.';

                quizFeedback.style.color = '#F87171';

            }

        });

    });

});

// THEME SWITCHER

const themeToggle = document.getElementById('themeToggle');
const html = document.documentElement;

function updateThemeButton(theme) {
    if (!themeToggle) return;

    if (theme === 'dark') {
        themeToggle.textContent = '☀';
        themeToggle.setAttribute('aria-label', 'Switch to light mode');
    } else {
        themeToggle.textContent = '☾';
        themeToggle.setAttribute('aria-label', 'Switch to dark mode');
    }
}

// Load saved theme or use system preference
const savedTheme = localStorage.getItem('della-theme');

const preferredTheme = window.matchMedia('(prefers-color-scheme: dark)').matches
    ? 'dark'
    : 'light';

const initialTheme = savedTheme || preferredTheme;

html.setAttribute('data-theme', initialTheme);
updateThemeButton(initialTheme);

// Toggle theme
themeToggle?.addEventListener('click', () => {
    const currentTheme = html.getAttribute('data-theme');

    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

    html.setAttribute('data-theme', newTheme);

    localStorage.setItem('della-theme', newTheme);

    updateThemeButton(newTheme);
});