// Obtiene el elemento del toggle
const themeToggle = document.getElementById('theme-toggle');

// Verifica si hay un tema guardado
const savedTheme = localStorage.getItem('theme');

// Si existe un tema guardado, lo aplica
if (savedTheme) {
    document.documentElement.setAttribute('data-theme', savedTheme);
    themeToggle.checked = savedTheme === 'dark';
}

// Maneja el cambio de tema
themeToggle.addEventListener('change', function() {
    if (this.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light');
    }
});