function setGauge(id, valueId, value, max, color, suffix=""){

    const degree = (value/max)*360;

    const gauge = document.getElementById(id);

    gauge.style.background =
        `conic-gradient(
            ${color} 0deg,
            ${color} ${degree}deg,
            #e9ecef ${degree}deg
        )`;

    document.getElementById(valueId).innerHTML =
        value + suffix;
}

function loadGauge(){

fetch("../api/gauge.php")

.then(res=>res.json())

.then(data=>{

setGauge(
"gaugeSuhu",
"valueSuhu",
parseFloat(data.suhu)||0,
50,
"#dc3545",
"°C"
);

setGauge(
"gaugeHum",
"valueHum",
parseFloat(data.kelembaban)||0,
100,
"#0d6efd",
"%"
);

setGauge(
"gaugePh",
"valuePh",
parseFloat(data.ph)||0,
14,
"#198754",
""
);

});

}

loadGauge();

setInterval(loadGauge,5000);