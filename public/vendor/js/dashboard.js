$(document).ready(function () {
    // alert("Js Updated")
    function chartjs() {
        var xValues = ["Sun", "Mon", "Tues", "Wed", "Thurs", "Fri", "Sat"];

        new Chart("myChart", {
            maintainAspectRatio: false,
            type: "line",
            data: {
                labels: xValues,
                datasets: [
                    {
                        data: [
                           2, 10, 15, 2100, 52, 3000, 500
                        ],
                        borderColor: "#A56D3F",
                        fill: false,
                    },
                    {
                        data: [
                            15060, 1270, 170, 190, 200, 7000, 400,
                        ],
                        borderColor: "#6C370B",
                        fill: false,
                    },
                ],
            },
            options: {
                legend: { display: false },
                responsive:true,
            },
        });
    }
    chartjs()
});
