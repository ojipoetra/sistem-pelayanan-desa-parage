let Textleft = document.querySelector('.left');
let Textright = document.querySelector('.right');
let Headingtext = document.querySelector('.heading-text');
let Aparaturdesa = document.querySelectorAll('.boxs');
// let layanan = document.querySelectorAll('.layanan-box');
let Pictures = document.querySelector('.pictures-aparat');
// let Btnscrollup = document.querySelector('.scroll-top')

// window.addEventListener('load', () => {
//     layanan.forEach(function (el, i) {
//         setTimeout(function () {
//             layanan[i].classList.add('load')
//         }, 200 * (i + 1));
//     });
// });

window.addEventListener('scroll', function () {
    Textleft.classList.add('muncul');
    Textright.classList.add('muncul');
    Headingtext.classList.add('muncul');

    Aparaturdesa.forEach(function (el, index) {
        if (window.scrollY > Pictures.offsetTop - 500) {
            setTimeout(function () {
                Aparaturdesa[index].classList.add('muncul')
            }, 300 * (index + 1))
        }
    })
});



// api maps
