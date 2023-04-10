let layanan = document.querySelectorAll('.layanan-box');

window.addEventListener('load', () => {
    layanan.forEach(function (el, i) {
        setTimeout(function () {
            layanan[i].classList.add('load')
        }, 200 * (i + 1));
    });
});
