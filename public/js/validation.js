const form = document.getElementById('form');
const nik = document.getElementById('nik');
const tmplahir = document.getElementById('tmplahir')
const pesan = document.getElementById('pesan')

const datainput = document.querySelectorAll('.dataInput')

form.addEventListener('submit', e => {


    // const inputValid = /^[a-zA-Z\s]+$/
    // input boleh menggunakan huruf besar atau juga kecil dan boleh mengandung titik
    const inputValid = /^[a-zA-Z0-9\/.\s-]+$/
    // nik wajib di awali dari 1 e/d 9 tidak boleh di awali dengan 0 dan hanya di perbolehkan hanya
    // angka saja
    const nikvalid = /^[1-9][0-9]*$/

    // validasi input yang boleh string
    datainput.forEach(el => {
        // jika 
        if (!el.value.match(inputValid) || el.value == "") {
            el.classList.add('is-invalid')
            e.preventDefault();
        } else
            el.classList.remove('is-invalid')
        el.classList.add('is-valid')
    });
    // akhir validasi input yang boleh string


    // validasi nik ktp
    if (!nik.value.match(nikvalid) || nik.value == "") {
        nik.classList.add('is-invalid')
        pesan.innerHTML = "Data harus angka dan harus di isi"
        e.preventDefault()
    } else if (nik.value.length < 16 || nik.value.length > 17) {
        nik.classList.add('is-invalid')
        pesan.innerHTML = "Data setidaknya 16 digit"
        e.preventDefault()
    } else {
        nik.classList.remove('is-invalid')
        nik.classList.add('is-valid')
    }
    // akhir validasi ktp

    // validasi tanggal lahir dengan format DD-MM-YYYY
    if (tmplahir.value == "") {
        tmplahir.classList.add('is-invalid')
        e.preventDefault()
    } else {
        tmplahir.classList.remove('is-invalid')
        tmplahir.classList.add('is-valid')
    }
    // Akhir validasi tanggal lahir dengan format DD-MM-YYYY

});
