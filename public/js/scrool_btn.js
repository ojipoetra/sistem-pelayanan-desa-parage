let Btnscrollup = document.querySelector('.scroll-top');
window.addEventListener('scroll', () => {

    if (window.scrollY > 100) {
        Btnscrollup.classList.add('up')
    } else {
        Btnscrollup.classList.remove('up')
    }
})

Btnscrollup.addEventListener('click', function () {
    document.body.scrollTop = 0
    document.documentElement.scrollTop = 0
})


const btn = document.querySelectorAll(".btn");
const inp = document.querySelectorAll(".inp");

function unlock() {
    inp.forEach(function (el, i) {
        btn.forEach(function (el, index) {
            if (inp[i].type === "password") {
                btn[index].classList.replace("bi-lock-fill", "bi-unlock-fill")
                inp[i].type = "text"
            } else {
                inp[i].type = "password"
                btn[index].classList.replace("bi-unlock-fill", "bi-lock-fill")
            }
        })
    })
}
