const judul = document.getElementById("judul");
const slug = document.getElementById("slug");

judul.addEventListener("change", function () {
    fetch("buat-berita/cekslug?judul=" + judul.value)
        // .then((response) => response.json())

        .then((response) => console.log(response));
    // .then((data) => (slug.value = data.slug));
});
