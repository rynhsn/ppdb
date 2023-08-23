"use strict";

// Class definition
var KTChartsWidget1 = function () {
    var chart = {
        self: null,
        rendered: false
    };

    // Private methods


    var initChartsWidget1 = function () {

        var element = document.getElementById("kt_charts_widget_1_chart");

        if (!element) {
            return;
        }

        var chart = {
            self: null,
            rendered: false
        };

        var fetchData = function () {
            return new Promise(function (resolve, reject) {
                $.ajax({
                    url: '/getChartData',
                    method: 'GET',
                    dataType: 'json',
                    success: function (response) {
                        chart.data = response;
                        resolve();
                    },
                    error: function (error) {
                        reject(error);
                    }
                });
            });
        };

        var initChart = function () {
            var height = parseInt(KTUtil.css(element, 'height'));
            var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
            var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');
            var baseColor = KTUtil.getCssVariableValue('--bs-primary');
            var secondaryColor = KTUtil.getCssVariableValue('--bs-warning');
            var thirdColor = KTUtil.getCssVariableValue('--bs-success');

            fetchData().then(function () {
                var options = {
                    series: [{
                        name: 'SMP',
                        data: chart.data[0]
                    }, {
                        name: 'SMK',
                        data: chart.data[1]
                    }, {
                        name: 'Madrasah Aliyah',
                        data: chart.data[2]
                    }],
                    chart: {
                        fontFamily: 'inherit',
                        type: 'bar',
                        height: height,
                        toolbar: {
                            show: false
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: ['30%'],
                            endingShape: 'rounded'
                        },
                    },
                    legend: {
                        show: false
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: chart.data[3],
                        axisBorder: {
                            show: false,
                        },
                        axisTicks: {
                            show: false
                        },
                        labels: {
                            style: {
                                colors: labelColor,
                                fontSize: '12px'
                            }
                        }
                    },
                    yaxis: {
                        labels: {
                            style: {
                                colors: labelColor,
                                fontSize: '12px'
                            }
                        }
                    },
                    fill: {
                        opacity: 1
                    },
                    states: {
                        normal: {
                            filter: {
                                type: 'none',
                                value: 0
                            }
                        },
                        hover: {
                            filter: {
                                type: 'none',
                                value: 0
                            }
                        },
                        active: {
                            allowMultipleDataPointsSelection: false,
                            filter: {
                                type: 'none',
                                value: 0
                            }
                        }
                    },
                    tooltip: {
                        style: {
                            fontSize: '12px'
                        },
                        y: {
                            formatter: function (val) {
                                return val
                            }
                        }
                    },
                    colors: [baseColor, secondaryColor, thirdColor],
                    grid: {
                        borderColor: borderColor,
                        strokeDashArray: 4,
                        yaxis: {
                            lines: {
                                show: true
                            }
                        }
                    }
                };

                chart.self = new ApexCharts(element, options);
                chart.self.render();
                chart.rendered = true;
            }).catch(function (error) {
                console.error(error);
            });
        }

        // Init chart
        initChart();

        // Update chart on theme mode change
        KTThemeMode.on("kt.thememode.change", function () {
            if (chart.rendered) {
                chart.self.destroy();
            }

            initChart();
        });
    }

// Public methods
    return {
        init: function () {
            // initChart();
            initChartsWidget1();

            // Update chart on theme mode change
            KTThemeMode.on("kt.thememode.change", function () {
                if (chart.rendered) {
                    chart.self.destroy();
                }

                initChart(chart);
            });
        }
    }
}
();

// Webpack support
if (typeof module !== 'undefined') {
    module.exports = KTChartsWidget1;
}

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTChartsWidget1.init();
});
