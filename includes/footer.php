<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script>

function updateTime(){

    const sekarang = new Date();

    document.getElementById("jam").innerHTML =
        sekarang.toLocaleTimeString("id-ID");

    document.getElementById("tanggal").innerHTML =
        sekarang.toLocaleDateString("id-ID",{
            weekday:"long",
            day:"numeric",
            month:"long",
            year:"numeric"
        });

}

setInterval(updateTime,1000);

updateTime();

</script>
<script src="../assets/js/dashboard.js"></script>
<script src="../assets/js/monitoring.js"></script>
<script src="../assets/js/widget.js"></script>
<script src="../assets/js/quick_control.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="../assets/js/chart.js"></script>
<script src="../assets/js/gauge.js"></script>
</body>

</html>