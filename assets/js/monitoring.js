function loadMonitoring(){

fetch("../api/monitoring.php")

.then(res=>res.json())

.then(data=>{

let html="";

data.forEach(item=>{

html+=`

<tr>

<td>${item.sensor}</td>

<td>${item.nilai}</td>

<td>

<span class="badge bg-${item.badge}">

${item.status}

</span>

</td>

<td>${item.waktu}</td>

</tr>

`;

});

document.getElementById("monitoringBody").innerHTML=html;

});

}

loadMonitoring();

setInterval(loadMonitoring,5000);