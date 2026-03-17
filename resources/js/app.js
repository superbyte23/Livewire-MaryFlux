document.addEventListener('flux-theme-changed', (e) => {
    document.documentElement.setAttribute(
        'data-theme',
        e.detail === 'dark' ? 'dark' : 'light'
    )
})