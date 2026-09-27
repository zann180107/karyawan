function loadWidget(){

fetch("../api/widget.php")

.then(res=>res.json())

.then(data=>{

let html="";

data.forEach(item=>{

html+=`

<div class="col-lg-3 col-md-6 mb-4">

<div class="sensor-widget">

<div class="sensor-icon">

<i class="fa-solid ${item.icon}"></i>

</div>

<div class="sensor-title">

${item.sensor}

</div>

<div class="sensor-value">

${item.nilai} ${item.satuan}

</div>

<div class="sensor-status">

<span class="badge bg-${item.warna}">

${item.status}

</span>

</div>

</div>

</div>

`;

});

document.getElementById("widgetContainer").innerHTML=html;

});

}

loadWidget();

setInterval(loadWidget,5000);