/*
* Licensed to the Apache Software Foundation (ASF) under one
* or more contributor license agreements.  See the NOTICE file
* distributed with this work for additional information
* regarding copyright ownership.  The ASF licenses this file
* to you under the Apache License, Version 2.0 (the
* "License"); you may not use this file except in compliance
* with the License.  You may obtain a copy of the License at
*
*   http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing,
* software distributed under the License is distributed on an
* "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
* KIND, either express or implied.  See the License for the
* specific language governing permissions and limitations
* under the License.
*/

(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['exports', 'echarts'], factory);
    } else if (typeof exports === 'object' && typeof exports.nodeName !== 'string') {
        // CommonJS
        factory(exports, require('echarts'));
    } else {
        // Browser globals
        factory({}, root.echarts);
    }
}(this, function (exports, echarts) {
    var log = function (msg) {
        if (typeof console !== 'undefined') {
            console && console.error && console.error(msg);
        }
    };
    if (!echarts) {
        log('ECharts is not Loaded');
        return;
    }

    var colorPalette = [
        '#2ec7c9','#b6a2de','#5ab1ef','#ffb980','#d87a80',
        '#8d98b3','#e5cf0d','#97b552','#95706d','#dc69aa',
        '#07a2a4','#9a7fd1','#588dd5','#f5994e','#c05050',
        '#59678c','#c9ab00','#7eb00a','#6f5553','#c14089'
    ];


    var theme = {
        color: colorPalette,

        title: {
            textStyle: {
                fontWeight: 'normal',
                color: '#008acd'
            }
        },

        legend: {
            textStyle: {
                color: '#aaa'
            }
        },

        dataRange: {
            itemWidth: 15,
            color: ['#2ec7c9','#b6a2de'],
            textStyle: {
                color: '#ccc'
            }
        },

        visualMap: {
            itemWidth: 15,
            color: ['#5ab1ef','#e0ffff']
        },

        toolbox: {
            iconStyle: {
                normal: {
                    borderColor: colorPalette[0]
                }
            }
        },

        tooltip: {
            trigger: 'axis',
            backgroundColor: 'rgba(0,0,0,1)',
            padding: [10, 15, 10, 15],
            axisPointer : {
                type : 'line',
                lineStyle : {
                    color: '#008acd'
                },
                crossStyle: {
                    color: '#008acd'
                },
                shadowStyle : {
                    color: 'rgba(120,120,120,0.1)'
                }
            }
        },

        dataZoom: {
            dataBackgroundColor: '#efefff',
            fillerColor: 'rgba(182,162,222,0.2)',
            handleColor: '#008acd'
        },

        grid: {
            borderColor: 'rgba(120,120,120,0.1)',
            x : 60,
            y : 60,
            x2: 40,
            y2: 60
        },

        categoryAxis: {
            axisLine: {
                lineStyle: {
                    color: '#aaa'
                }
            },
            axisLabel: {
                textStyle: {
                    color: '#aaa'
                }
            },
            splitLine: {
                lineStyle: {
                    color: ['rgba(120,120,120,0.1)']
                }
            }
        },

        valueAxis: {
            axisLine: {
                lineStyle: {
                    color: '#aaa'
                }
            },
            axisLabel: {
                textStyle: {
                    color: '#aaa'
                }
            },
            splitArea : {
                show : true,
                areaStyle : {
                    color: ['rgba(250,250,250,0)','rgba(200,200,200,0.05)']
                }
            },
            splitLine: {
                lineStyle: {
                    color: ['rgba(120,120,120,0.1)']
                }
            }
        },

        polar : {
            name : {
                textStyle: {
                    color: '#aa'
                }
            },
            axisLine: {
                lineStyle: {
                    color: 'rgba(120,120,120,0.1)'
                }
            },
            splitArea : {
                show : true,
                areaStyle : {
                    color: ['rgba(250,250,250,0.2)','rgba(120,120,120,0.1)']
                }
            },
            splitLine : {
                lineStyle : {
                    color : 'rgba(120,120,120,0.1)'
                }
            }
        },

        timeline : {
            lineStyle : {
                color : '#008acd'
            },
            controlStyle : {
                normal : { color : '#008acd'},
                emphasis : { color : '#008acd'}
            },
            symbol : 'emptyCircle',
            symbolSize : 3
        },

        line: {
            smooth : true,
            symbol: 'emptyCircle',
            symbolSize: 3
        },

        k: {
            itemStyle: {
                normal: {
                    color: '#d87a80',
                    color0: '#2ec7c9',
                    lineStyle: {
                        color: '#d87a80',
                        color0: '#2ec7c9'
                    }
                }
            }
        },

        candlestick: {
            itemStyle: {
                normal: {
                    color: '#d87a80',
                    color0: '#2ec7c9',
                    lineStyle: {
                        color: '#d87a80',
                        color0: '#2ec7c9'
                    }
                }
            }
        },

        scatter: {
            symbol: 'circle',
            symbolSize: 4
        },

        radar : {
            symbol: 'emptyCircle',
            symbolSize:3
        },

        force : {
            itemStyle: {
                normal: {
                    linkStyle : {
                        color : '#1e90ff'
                    }
                }
            }
        },

        chord : {
            itemStyle : {
                normal : {
                    borderWidth: 1,
                    borderColor: 'rgba(128, 128, 128, 0.5)',
                    chordStyle : {
                        lineStyle : {
                            color : 'rgba(128, 128, 128, 0.5)'
                        }
                    }
                },
                emphasis : {
                    borderWidth: 1,
                    borderColor: 'rgba(128, 128, 128, 0.5)',
                    chordStyle : {
                        lineStyle : {
                            color : 'rgba(128, 128, 128, 0.5)'
                        }
                    }
                }
            }
        },

        map: {
            label: {
                normal: {
                    textStyle: {
                        color: '#d87a80'
                    }
                }
            },
            itemStyle: {
                normal: {
                    borderColor: '#eee',
                    areaColor: '#ddd'
                },
                emphasis: {
                    areaColor: '#fe994e'
                }
            }
        },

        graph: {
            color: colorPalette
        },

        gauge : {
            axisLine: {
                lineStyle: {
                    color: [[0.2, '#2ec7c9'],[0.8, '#5ab1ef'],[1, '#d87a80']],
                    width: 10
                }
            },
            axisTick: {
                splitNumber: 10,
                length :15,
                lineStyle: {
                    color: 'auto'
                }
            },
            splitLine: {
                length :22,
                lineStyle: {
                    color: 'auto'
                }
            },
            pointer : {
                width : 5
            }
        }
    };

    echarts.registerTheme('macarons', theme);
}));