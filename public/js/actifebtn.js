const actifPage = window.location.pathname
const aktifBtn = document.querySelectorAll('.nav a')

console.log(actifPage)

aktifBtn.forEach(link => {
    if (link.href.includes(`${actifPage}`)) {
        link.classList.add('aktif')
    }
});
