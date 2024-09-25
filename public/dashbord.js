

    /* globals Chart:false */

    (() => {
    'use strict'

    // Graphs

        let ctx2 = document.getElementById('myChart')
    // eslint-disable-next-line no-unused-vars


    const myChart = new Chart(ctx2, {
    type: 'line',
    data: {
    labels: [
    'شنبه',
    'یکشنبه',
    'دوشنبه',
    'سه شنبه',
    'چهار شنبه',
    'پنجشنبه',
    'جمعه'
    ],
    datasets: [{
    data: [
    15339,
    21345,
    18483,
    24003,
    23489,
    24092,
    12034
    ],
    lineTension: 0,
    backgroundColor: 'transparent',
    borderColor: '#007bff',
    borderWidth: 4,
    pointBackgroundColor: '#007bff'
}]
},
    options: {
    plugins: {
    legend: {
    display: false
},
    tooltip: {
    boxPadding: 3
}
}
}
})
})()



