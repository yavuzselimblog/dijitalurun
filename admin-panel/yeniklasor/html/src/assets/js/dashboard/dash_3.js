window.addEventListener("load", function(){

    try {
  
      getequationThemeObject = localStorage.getItem("theme");
      getParseObject = JSON.parse(getequationThemeObject)
      ParsedObject = getParseObject;
  
      if (ParsedObject.settings.layout.darkMode) {
        
        var Theme = 'dark';
    
        Apex.tooltip = {
            theme: Theme
        }
    
        /**
            ==============================
            |    @Options Charts Script   |
            ==============================
        */
        
        /*
            =============================
                Daily Sales | Options
            =============================
        */
        var p_sales = {
            dataLabels: {
                enabled: false
            },
            series: [75, 25],
            chart: {
                type: 'donut',
                width: 135,
                height: 135
            },
            colors: ['#4361ee', '#152143'],
            legend: {
                show: false,
            },
            plotOptions: {
                pie: {
                    offsetX: 26,
                    offsetY: 0,
                    donut : {
                        size: "60%",
                    },
                },
            },
            stroke: {
                show: true,
                width: 11,
                colors: 'transparent'
            },
            responsive: [{
                breakpoint: 1440,
                options: {

                    plotOptions: {
                        pie: {
                            offsetX: -5,
                            offsetY: 0,
                            donut : {
                                size: "60%",
                            },
                        },
                    },

                },
            }]
        };


        var p_sales2 = {
            dataLabels: {
                enabled: false
            },
            series: [55, 45],
            chart: {
                type: 'donut',
                width: 135,
                height: 135
            },
            colors: ['#00ab55', '#0c272b'],
            legend: {
                show: false,
            },
            plotOptions: {
                pie: {
                    offsetX: 26,
                    offsetY: 0,
                    donut : {
                        size: "60%",
                    },
                },
            },
            stroke: {
                show: true,
                width: 11,
                colors: 'transparent'
            },
            responsive: [{
                breakpoint: 1440,
                options: {

                    plotOptions: {
                        pie: {
                            offsetX: -5,
                            offsetY: 0,
                            donut : {
                                size: "60%",
                            },
                        },
                    },

                },
            }]
        };

        var p_sales3 = {
            dataLabels: {
                enabled: false
            },
            series: [60, 40],
            chart: {
                type: 'donut',
                width: 135,
                height: 135
            },
            colors: ['#805dca', '#1d1a3b'],
            legend: {
                show: false,
            },
            plotOptions: {
                pie: {
                    offsetX: 26,
                    offsetY: 0,
                    donut : {
                        size: "60%",
                    },
                },
            },
            stroke: {
                show: true,
                width: 11,
                colors: 'transparent'
            },
            responsive: [{
                breakpoint: 1440,
                options: {

                    plotOptions: {
                        pie: {
                            offsetX: -5,
                            offsetY: 0,
                            donut : {
                                size: "60%",
                            },
                        },
                    },

                },
            }]
        };

        var p_sales4 = {
            dataLabels: {
                enabled: false
            },
            series: [85, 15],
            chart: {
                type: 'donut',
                width: 135,
                height: 135
            },
            colors: ['#e7515a', '#2c1c2b'],
            legend: {
                show: false,
            },
            plotOptions: {
                pie: {
                    offsetX: 26,
                    offsetY: 0,
                    donut : {
                        size: "60%",
                    },
                },
            },
            stroke: {
                show: true,
                width: 11,
                colors: 'transparent'
            },
            responsive: [{
                breakpoint: 1440,
                options: {

                    plotOptions: {
                        pie: {
                            offsetX: -5,
                            offsetY: 0,
                            donut : {
                                size: "60%",
                            },
                        },
                    },

                },
            }]
        };




        var t_Review = {
        chart: {
            // height: 255,
            // height: 353,
            height: 268,
            type: 'bar',
            toolbar: {
                show: false,
            }
        },
        colors: ['#4361ee', '#22c7d5'],
        // colors: ['#22c7d5', '#4361ee'],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '70%',
                endingShape: 'rounded',
                borderRadius: 10,
                barHeight: '10%',
        
            },
        },
        dataLabels: {
            enabled: false
        },
        legend: {
            position: 'top',
            horizontalAlign: 'right',
            offsetY: -80,
            fontSize: '16px',
            fontFamily: 'Nunito, sans-serif',
            markers: {
                width: 13,
                height: 13,
                strokeWidth: 0,
                strokeColor: '#fff',
                fillColors: undefined,
                radius: 12,
                onClick: undefined,
                offsetX: -5,
                offsetY: 0
            },    
            itemMargin: {
                horizontal: 15,
                vertical: 20
            }
        },
        grid: {
            show: false,
            padding: {
                top: -68
            }
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        series: [{
            name: 'Last Month',
            // data: [58, 44, 55, 57, 56, 61, 58, 63, 60, 66, 56, 63]
            data: [800, 600, 550, 480, 750, 750]
        }, {
            name: 'Running Month',
            // data: [91, 76, 85, 101, 98, 87, 105, 91, 114, 94, 66, 70]
            data: [420, 320, 350, 200, 570, 650]
        }],
        xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'July'],
            // min: 6,
            // max: 20,
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            crosshairs: {
                show: false
            }
        },
        yaxis: {
            labels: {
                offsetX: -15,
                offsetY: 0,
            }
        },
        title: {
            text: '$32,52,656',
            align: 'left',
            margin: 0,
            offsetX: -10,
            offsetY: 0,
            floating: false,
            style: {
            fontFamily: 'Nunito, sans-serif',
            fontSize: '25px',
            color:  '#888ea8'
            },
        },
        // fill: {
        //     type: 'gradient',
        //     gradient: {
        //         shade: 'light',
        //         type: 'vertical',
        //         shadeIntensity: 0.2,
        //         inverseColors: false,
        //         opacityFrom: 1,
        //         opacityTo: 0.9,
        //         stops: [0, 200]
        //     }
        // },
        tooltip: {
            marker : {
                show: false,
            },
            theme: 'dark',
            y: {
                formatter: function (val) {
                    return val
                }
            }
        },
        responsive: [
            { 
                breakpoint: 767,
                options: {
                    plotOptions: {
                        bar: {
                            borderRadius: 0,
                            columnWidth: "50%"
                        }
                    }
                }
            },
        ]

        }
        
        
        var _customer_total = {
        chart: {
            height: 120,
            type: 'bar',
            toolbar: {
                show: false,
            }
        },
        colors: ['#622bd7', '#ffbb44'],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '65%',
                // endingShape: 'rounded',
                // borderRadius: 10,
        
            },
        },
        dataLabels: {
            enabled: false
        },
        // legend: {
        //     position: 'top',
        //     horizontalAlign: 'right',
        //     offsetY: -80,
        //     fontSize: '16px',
        //     fontFamily: 'Nunito, sans-serif',
        //     markers: {
        //         width: 10,
        //         height: 10,
        //         strokeWidth: 0,
        //         strokeColor: '#fff',
        //         fillColors: undefined,
        //         radius: 12,
        //         onClick: undefined,
        //         offsetX: -5,
        //         offsetY: 0
        //     },    
        //     itemMargin: {
        //         horizontal: 10,
        //         vertical: 20
        //     }
        // },
        grid: {
            show: false,
            borderColor: '#e0e6ed',
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        series: [{
            name: 'Total Customers',
            // data: [58, 44, 55, 57, 56, 61, 58, 63, 60, 66, 56, 63]
            data: [44, 80, 48, 70, 50]
        }],
        xaxis: {
            // show: false,
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun'],
            labels: {
                show: false
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            crosshairs: {
                show: false
            }
        },
        yaxis: {
            show: false,

        },
        // title: {
        //   text: '$32,52,656',
        //   align: 'left',
        //   margin: 0,
        //   offsetX: -10,
        //   offsetY: 0,
        //   floating: false,
        //   style: {
        //     fontFamily: 'Nunito, sans-serif',
        //     fontSize: '25px',
        //     color:  '#000'
        //   },
        // },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                type: 'vertical',
                shadeIntensity: 0.3,
                inverseColors: false,
                opacityFrom: 1,
                opacityTo: 0.8,
                stops: [0, 100]
            }
        },
        tooltip: {
            marker : {
                show: false,
            },
            theme: 'dark',
            y: {
                formatter: function (val) {
                    return val
                }
            }
        },
        responsive: [
            { 
                breakpoint: 767,
                options: {
                    plotOptions: {
                        bar: {
                            borderRadius: 0,
                            columnWidth: "50%"
                        }
                    }
                }
            },
        ]

        }
        

        var _customer_new = {
        chart: {
            height: 120,
            type: 'bar',
            toolbar: {
                show: false,
            }
        },
        colors: ['#622bd7', '#ffbb44'],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '65%',
                // endingShape: 'rounded',
                // borderRadius: 10,
        
            },
        },
        dataLabels: {
            enabled: false
        },
        // legend: {
        //     position: 'top',
        //     horizontalAlign: 'right',
        //     offsetY: -80,
        //     fontSize: '16px',
        //     fontFamily: 'Nunito, sans-serif',
        //     markers: {
        //         width: 10,
        //         height: 10,
        //         strokeWidth: 0,
        //         strokeColor: '#fff',
        //         fillColors: undefined,
        //         radius: 12,
        //         onClick: undefined,
        //         offsetX: -5,
        //         offsetY: 0
        //     },    
        //     itemMargin: {
        //         horizontal: 10,
        //         vertical: 20
        //     }
        // },
        grid: {
            show: false,
            borderColor: '#e0e6ed',
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        series: [{
            name: 'New Customers ',
            // data: [58, 44, 55, 57, 56, 61, 58, 63, 60, 66, 56, 63]
            data: [44, 53, 82, 70, 63]
        }],
        xaxis: {
            // show: false,
            categories: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'],
            labels: {
                show: false
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            crosshairs: {
                show: false
            }
        },
        yaxis: {
            show: false,

        },
        // title: {
        //   text: '$32,52,656',
        //   align: 'left',
        //   margin: 0,
        //   offsetX: -10,
        //   offsetY: 0,
        //   floating: false,
        //   style: {
        //     fontFamily: 'Nunito, sans-serif',
        //     fontSize: '25px',
        //     color:  '#000'
        //   },
        // },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                type: 'vertical',
                shadeIntensity: 0.3,
                inverseColors: false,
                opacityFrom: 1,
                opacityTo: 0.8,
                stops: [0, 100]
            }
        },
        tooltip: {
            marker : {
                show: false,
            },
            theme: 'dark',
            y: {
                formatter: function (val) {
                    return val
                }
            }
        },
        responsive: [
            { 
                breakpoint: 767,
                options: {
                    plotOptions: {
                        bar: {
                            borderRadius: 0,
                            columnWidth: "50%"
                        }
                    }
                }
            },
        ]

        }
  
      } else {
  
        var Theme = 'dark';
    
        Apex.tooltip = {
            theme: Theme
        }
    
        /**
            ==============================
            |    @Options Charts Script   |
            ==============================
        */
        
        /*
            =============================
                Daily Sales | Options
            =============================
        */
        var p_sales = {
            dataLabels: {
                enabled: false
            },
            series: [75, 25],
            chart: {
                type: 'donut',
                width: 135,
                height: 135
            },
            colors: ['#4361ee', '#eceffe'],
            legend: {
                show: false,
            },
            plotOptions: {
                pie: {
                    offsetX: 26,
                    offsetY: 0,
                    donut : {
                        size: "60%",
                    },
                },
            },
            stroke: {
                show: true,
                width: 11,
                colors: 'transparent'
            },
            responsive: [{
                breakpoint: 1440,
                options: {

                    plotOptions: {
                        pie: {
                            offsetX: -5,
                            offsetY: 0,
                            donut : {
                                size: "60%",
                            },
                        },
                    },

                },
            }]
        };


        var p_sales2 = {
            dataLabels: {
                enabled: false
            },
            series: [55, 45],
            chart: {
                type: 'donut',
                width: 135,
                height: 135
            },
            colors: ['#00ab55', '#ddf5f0'],
            legend: {
                show: false,
            },
            plotOptions: {
                pie: {
                    offsetX: 26,
                    offsetY: 0,
                    donut : {
                        size: "60%",
                    },
                },
            },
            stroke: {
                show: true,
                width: 11,
                colors: 'transparent'
            },
            responsive: [{
                breakpoint: 1440,
                options: {

                    plotOptions: {
                        pie: {
                            offsetX: -5,
                            offsetY: 0,
                            donut : {
                                size: "60%",
                            },
                        },
                    },

                },
            }]
        };

        var p_sales3 = {
            dataLabels: {
                enabled: false
            },
            series: [60, 40],
            chart: {
                type: 'donut',
                width: 135,
                height: 135
            },
            colors: ['#805dca', '#f2eafa'],
            legend: {
                show: false,
            },
            plotOptions: {
                pie: {
                    offsetX: 26,
                    offsetY: 0,
                    donut : {
                        size: "60%",
                    },
                },
            },
            stroke: {
                show: true,
                width: 11,
                colors: 'transparent'
            },
            responsive: [{
                breakpoint: 1440,
                options: {

                    plotOptions: {
                        pie: {
                            offsetX: -5,
                            offsetY: 0,
                            donut : {
                                size: "60%",
                            },
                        },
                    },

                },
            }]
        };

        var p_sales4 = {
            dataLabels: {
                enabled: false
            },
            series: [85, 15],
            chart: {
                type: 'donut',
                width: 135,
                height: 135
            },
            colors: ['#e7515a', '#fbeced'],
            legend: {
                show: false,
            },
            plotOptions: {
                pie: {
                    offsetX: 26,
                    offsetY: 0,
                    donut : {
                        size: "60%",
                    },
                },
            },
            stroke: {
                show: true,
                width: 11,
                colors: 'transparent'
            },
            responsive: [{
                breakpoint: 1440,
                options: {

                    plotOptions: {
                        pie: {
                            offsetX: -5,
                            offsetY: 0,
                            donut : {
                                size: "60%",
                            },
                        },
                    },

                },
            }]
        };




        var t_Review = {
        chart: {
            // height: 255,
            // height: 353,
            height: 268,
            type: 'bar',
            toolbar: {
                show: false,
            }
        },
        colors: ['#4361ee', '#22c7d5'],
        // colors: ['#22c7d5', '#4361ee'],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '70%',
                endingShape: 'rounded',
                borderRadius: 10,
                barHeight: '10%',
        
            },
        },
        dataLabels: {
            enabled: false
        },
        legend: {
            position: 'top',
            horizontalAlign: 'right',
            offsetY: -80,
            fontSize: '16px',
            fontFamily: 'Nunito, sans-serif',
            markers: {
                width: 13,
                height: 13,
                strokeWidth: 0,
                strokeColor: '#fff',
                fillColors: undefined,
                radius: 12,
                onClick: undefined,
                offsetX: -5,
                offsetY: 0
            },    
            itemMargin: {
                horizontal: 15,
                vertical: 20
            }
        },
        grid: {
            show: false,
            borderColor: '#e0e6ed',
            padding: {
                top: -68
            }
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        series: [{
            name: 'Last Month',
            // data: [58, 44, 55, 57, 56, 61, 58, 63, 60, 66, 56, 63]
            data: [800, 600, 550, 480, 750, 750]
        }, {
            name: 'Running Month',
            // data: [91, 76, 85, 101, 98, 87, 105, 91, 114, 94, 66, 70]
            data: [420, 320, 350, 200, 570, 650]
        }],
        xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'July'],
            // min: 6,
            // max: 20,
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            crosshairs: {
                show: false
            }
        },
        yaxis: {
            labels: {
                offsetX: -15,
                offsetY: 0,
            }
        },
        title: {
            text: '$32,52,656',
            align: 'left',
            margin: 0,
            offsetX: -10,
            offsetY: 0,
            floating: false,
            style: {
            fontFamily: 'Nunito, sans-serif',
            fontSize: '25px',
            color:  '#000'
            },
        },
        // fill: {
        //     type: 'gradient',
        //     gradient: {
        //         shade: 'light',
        //         type: 'vertical',
        //         shadeIntensity: 0.2,
        //         inverseColors: false,
        //         opacityFrom: 1,
        //         opacityTo: 0.9,
        //         stops: [0, 200]
        //     }
        // },
        tooltip: {
            marker : {
                show: false,
            },
            theme: 'dark',
            y: {
                formatter: function (val) {
                    return val
                }
            }
        },
        responsive: [
            { 
                breakpoint: 767,
                options: {
                    plotOptions: {
                        bar: {
                            borderRadius: 0,
                            columnWidth: "50%"
                        }
                    }
                }
            },
        ]

        }
        
        
        var _customer_total = {
        chart: {
            height: 120,
            type: 'bar',
            toolbar: {
                show: false,
            }
        },
        colors: ['#622bd7', '#ffbb44'],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '65%',
                // endingShape: 'rounded',
                // borderRadius: 10,
        
            },
        },
        dataLabels: {
            enabled: false
        },
        // legend: {
        //     position: 'top',
        //     horizontalAlign: 'right',
        //     offsetY: -80,
        //     fontSize: '16px',
        //     fontFamily: 'Nunito, sans-serif',
        //     markers: {
        //         width: 10,
        //         height: 10,
        //         strokeWidth: 0,
        //         strokeColor: '#fff',
        //         fillColors: undefined,
        //         radius: 12,
        //         onClick: undefined,
        //         offsetX: -5,
        //         offsetY: 0
        //     },    
        //     itemMargin: {
        //         horizontal: 10,
        //         vertical: 20
        //     }
        // },
        grid: {
            show: false,
            borderColor: '#e0e6ed',
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        series: [{
            name: 'Total Customers',
            // data: [58, 44, 55, 57, 56, 61, 58, 63, 60, 66, 56, 63]
            data: [44, 80, 48, 70, 50]
        }],
        xaxis: {
            // show: false,
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun'],
            labels: {
                show: false
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            crosshairs: {
                show: false
            }
        },
        yaxis: {
            show: false,

        },
        // title: {
        //   text: '$32,52,656',
        //   align: 'left',
        //   margin: 0,
        //   offsetX: -10,
        //   offsetY: 0,
        //   floating: false,
        //   style: {
        //     fontFamily: 'Nunito, sans-serif',
        //     fontSize: '25px',
        //     color:  '#000'
        //   },
        // },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                type: 'vertical',
                shadeIntensity: 0.3,
                inverseColors: false,
                opacityFrom: 1,
                opacityTo: 0.8,
                stops: [0, 100]
            }
        },
        tooltip: {
            marker : {
                show: false,
            },
            theme: 'dark',
            y: {
                formatter: function (val) {
                    return val
                }
            }
        },
        responsive: [
            { 
                breakpoint: 767,
                options: {
                    plotOptions: {
                        bar: {
                            borderRadius: 0,
                            columnWidth: "50%"
                        }
                    }
                }
            },
        ]

        }
        

        var _customer_new = {
        chart: {
            height: 120,
            type: 'bar',
            toolbar: {
                show: false,
            }
        },
        colors: ['#622bd7', '#ffbb44'],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '65%',
                // endingShape: 'rounded',
                // borderRadius: 10,
        
            },
        },
        dataLabels: {
            enabled: false
        },
        // legend: {
        //     position: 'top',
        //     horizontalAlign: 'right',
        //     offsetY: -80,
        //     fontSize: '16px',
        //     fontFamily: 'Nunito, sans-serif',
        //     markers: {
        //         width: 10,
        //         height: 10,
        //         strokeWidth: 0,
        //         strokeColor: '#fff',
        //         fillColors: undefined,
        //         radius: 12,
        //         onClick: undefined,
        //         offsetX: -5,
        //         offsetY: 0
        //     },    
        //     itemMargin: {
        //         horizontal: 10,
        //         vertical: 20
        //     }
        // },
        grid: {
            show: false,
            borderColor: '#e0e6ed',
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        series: [{
            name: 'New Customers ',
            // data: [58, 44, 55, 57, 56, 61, 58, 63, 60, 66, 56, 63]
            data: [44, 53, 82, 70, 63]
        }],
        xaxis: {
            // show: false,
            categories: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'],
            labels: {
                show: false
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            crosshairs: {
                show: false
            }
        },
        yaxis: {
            show: false,

        },
        // title: {
        //   text: '$32,52,656',
        //   align: 'left',
        //   margin: 0,
        //   offsetX: -10,
        //   offsetY: 0,
        //   floating: false,
        //   style: {
        //     fontFamily: 'Nunito, sans-serif',
        //     fontSize: '25px',
        //     color:  '#000'
        //   },
        // },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                type: 'vertical',
                shadeIntensity: 0.3,
                inverseColors: false,
                opacityFrom: 1,
                opacityTo: 0.8,
                stops: [0, 100]
            }
        },
        tooltip: {
            marker : {
                show: false,
            },
            theme: 'dark',
            y: {
                formatter: function (val) {
                    return val
                }
            }
        },
        responsive: [
            { 
                breakpoint: 767,
                options: {
                    plotOptions: {
                        bar: {
                            borderRadius: 0,
                            columnWidth: "50%"
                        }
                    }
                }
            },
        ]

        }
      }
      
    
    /**
        ==============================
        |    @Render Charts Script    |
        ==============================
    */
    
    
    /*
        ============================
            Daily Sales | Render
        ============================
    */
    var chart1 = new ApexCharts(document.querySelector("#pSales"), p_sales);
    chart1.render();


    var chart2 = new ApexCharts(document.querySelector("#pRent"), p_sales2);
    chart2.render();


    var chart3 = new ApexCharts(document.querySelector("#pCustomer"), p_sales3);
    chart3.render();

    var chart4 = new ApexCharts(document.querySelector("#pCity"), p_sales4);
    chart4.render();


    var totalReview = new ApexCharts(
        document.querySelector("#totalRevenue"),
        t_Review
    );
    totalReview.render();
    
    
    var customer_total = new ApexCharts(
        document.querySelector("#customer_total"),
        _customer_total
    );
    customer_total.render();

    
    var customer_new = new ApexCharts(
        document.querySelector("#customer_new"),
        _customer_new
    );
    customer_new.render();
    

    /**
     * =================================================================================================
     * |     @Re_Render | Re render all the necessary JS when clicked to switch/toggle theme           |
     * =================================================================================================
     */
  
  document.querySelector('.theme-toggle').addEventListener('click', function() {

    
    // console.log(localStorage);

    getequationThemeObject = localStorage.getItem("theme");
    getParseObject = JSON.parse(getequationThemeObject)
    ParsedObject = getParseObject;

    if (ParsedObject.settings.layout.darkMode) {

      /*
      =================================
          Revenue Monthly | Options
      =================================
    */

      chart1.updateOptions({
        colors: ['#4361ee', '#152143']
      })

      chart2.updateOptions({
        colors: ['#00ab55', '#0c272b'],
      })

      chart3.updateOptions({
        colors: ['#805dca', '#1d1a3b'],
      })

      chart4.updateOptions({
        colors: ['#e7515a', '#2c1c2b'],
      })


      /*
      ==================================
          Sales By Category | Options
      ==================================
      */

      totalReview.updateOptions({
        colors: ['#4361ee', '#22c7d5'],
        title: {
            style: {
                color:  '#888ea8'
            },
        },
      })


    } else {

      /*
      =================================
          Revenue Monthly | Options
      =================================
    */

      chart1.updateOptions({
        colors: ['#4361ee', '#eceffe']
      })

      chart2.updateOptions({
        colors: ['#00ab55', '#ddf5f0'],
      })

      chart3.updateOptions({
        colors: ['#805dca', '#f2eafa'],
      })

      chart4.updateOptions({
        colors: ['#e7515a', '#fbeced'],
      })


      /*
      ==================================
          Sales By Category | Options
      ==================================
      */

      totalReview.updateOptions({
        colors: ['#4361ee', '#22c7d5'],
        title: {
            style: {
                color:  '#000'
            },
        },
      })
      
    }

  })
    
    
    } catch(e) {
        console.log(e);
    }
  
  })