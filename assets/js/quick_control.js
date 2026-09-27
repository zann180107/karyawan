document.querySelectorAll(".switchAktuator").forEach(sw => {

    sw.addEventListener("change", function(){

        const id = this.dataset.id;
        const status = this.checked ? "ON" : "OFF";

        fetch("../api/update_aktuator.php",{
            method:"POST",
            headers:{
                "Content-Type":"application/x-www-form-urlencoded"
            },
            body:`id=${id}&status=${status}`
        })
        .then(res => res.json())
        .then(data => {
            if(!data.success){
                alert("Gagal memperbarui status aktuator.");
            }
        })
        .catch(() => {
            alert("Terjadi kesalahan koneksi.");
        });

    });

});