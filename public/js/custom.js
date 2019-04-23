/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

/*
generateChart(config) 
  url : hostname +"/dnslogrcodes/2019-04-11/2019-04-11/",
  id : "pie-chart",
  type : "pie",
  xAxisName : "name", //X-Axis Label Names from List
  yAxisName : "value", //Y-Axis Values from List
  label: "simple chart pie",
  text: "hello apa kabar",
*/
function generateChart(config) {
    var chartX = []; // labels chart                 
    var chartY = []; // data chart     
    $.ajax({
        url: config.url,
        method: 'GET',
        beforeSend: function (XMLHttpRequest) {
            XMLHttpRequest.setRequestHeader("Accept", "application/json; odata=verbose");
        },
        cache: true,
        error: function (res) {
            console.log(res)
        },
        success: function (res) {
            // console.log(res);
            $.each(res.data, function (i, item) {
                chartX.push(item[config.xAxisName]);
                chartY.push(item[config.yAxisName]);
            });
            // proses generate chart
            new Chart(document.getElementById(config.id), {
                type: config.type,
                data: {
                    labels: chartX,
                    datasets: [{
                        label: config.label,
                        data: chartY,
                        fill: false
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: config.text
                    }
                }
            });
        }
    });
}