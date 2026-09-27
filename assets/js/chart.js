let chart;

function loadChart(){

fetch("../api/chart.php")

.then(res=>res.json())

.then(data=>{

const label=data.map(e=>e.jam);

const nilai=data.map(e=>e.nilai);

if(chart){

chart.data.labels=label;

chart.data.datasets[0].data=nilai;

chart.update();

return;

}

const ctx=document.getElementById("sensorChart");

chart=new Chart(ctx,{

type:'line',

data:{

labels:label,

datasets:[{

label:'Suhu',

data:nilai,

borderWidth:3,

fill:true,

tension:.4

}]

},

options:{

responsive:true,

maintainAspectRatio:false,

plugins:{

legend:{

display:true

}

}

}

});

});

}

loadChart();

setInterval(loadChart,5000);