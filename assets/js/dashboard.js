function loadDashboard(){

fetch("../api/dashboard.php")

.then(res=>res.json())

.then(data=>{

document.getElementById("totalLahan").innerHTML=data.lahan;

document.getElementById("totalDevice").innerHTML=data.device;

document.getElementById("totalSensor").innerHTML=data.sensor;

document.getElementById("totalAktuator").innerHTML=data.aktuator;

document.getElementById("online").innerHTML=data.online;

document.getElementById("offline").innerHTML=data.offline;

});

}

loadDashboard();

setInterval(loadDashboard,5000);