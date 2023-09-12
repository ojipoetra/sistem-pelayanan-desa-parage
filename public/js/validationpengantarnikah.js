const statusGender = document.getElementById("kelamin_pemohon");
const selectStatus = document.getElementById("statuspernikahan_pemohon");
const hasil = document.getElementById("hasil_status");

// Tambahkan event listener ke elemen select dan input
function selectOption() {
    if (statusGender.value === "laki-laki" && selectStatus.value === "kawin") {
        hasil.value = "Duda";
    } else if (
        statusGender.value === "perempuan" &&
        selectStatus.value === "kawin"
    ) {
        hasil.value = "Janda";
    } else if (
        statusGender.value === "laki-laki" &&
        selectStatus.value === "belum kawin"
    ) {
        hasil.value = "Jejaka";
    } else if (
        statusGender.value === "perempuan" &&
        selectStatus.value === "belum kawin"
    ) {
        hasil.value = "Perawan";
    } else {
        hasil.value = "";
    }
    return hasil;
}

const formValidate = document.getElementById("form-validate");
const inputText = document.querySelectorAll(".input-text");
const textInput = document.querySelectorAll(".text-input");
const nikValidate = document.querySelectorAll(".nik-validation");
const message = document.querySelectorAll(".pesan");

formValidate.addEventListener("submit", (e) => {
    const inputValid = /^[a-zA-Z0-9\s.\-\/]+$/;
    const inputvalid = /^[1-9][0-9]*$/;
    inputText.forEach((el) => {
        if (!el.value.match(inputValid) || el.value == "") {
            el.classList.add("is-invalid");
            e.preventDefault();
        } else el.classList.remove("is-invalid");
        el.classList.add("is-valid");
    });

    nikValidate.forEach((elm) => {
        if (!elm.value.match(inputvalid) || elm.value == "") {
            e.preventDefault();
            elm.classList.add("is-invalid");
        } else if (elm.value.length < 16 || elm.value.length > 17) {
            e.preventDefault();
            elm.classList.add("is-invalid");
            message.forEach((psn) => {
                psn.innerHTML = "Data setidaknya 16 digit";
            });
        } else {
            elm.classList.remove("is-invalid");
            elm.classList.add("is-valid");
        }
    });
});

const nik_ayah = document.getElementById("nik_ayah");
const check1 = document.getElementById("check1");
const check2 = document.getElementById("check2");
const masihAda = document.querySelectorAll(".data-ayah");
check1.addEventListener("change", (e) => {
    masihAda.forEach((elm) => {
        if (e.target.checked || elm.value == "") {
            elm.removeAttribute("disabled");
            e.preventDefault();
            elm.classList.add("is-invalid");
            console.log("target");
        } else {
            elm.classList.remove("is-invalid");
            elm.classList.add("is-valid");
            console.log("ok");
        }
    });
});
check2.addEventListener("change", (el) => {
    if (el.target.checked) {
        nik_ayah.setAttribute("disabled", "disabled");
    }
});
