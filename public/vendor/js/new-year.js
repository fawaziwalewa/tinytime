"use strict";
(function(c) {
    c.fn.ClassyCountdown = function(k, r) {
        function l() {
            e = Math.floor(d / 86400);
            f = Math.floor(d % 86400 / 3600);
            g = Math.floor(d % 86400 % 3600 / 60);
            h = Math.floor(d % 86400 % 3600 % 60 % 60)
        }

        function lmcs(stopNow) {
            e = Math.floor(stopNow / 86400);
            f = Math.floor(stopNow % 86400 / 3600);
            g = Math.floor(stopNow % 86400 % 3600 / 60);
            h = Math.floor(stopNow % 86400 % 3600 % 60 % 60)
        }
        let title = false;
        function m() {
            d--;
            d = Math.round(d);
            l();
            if (d < 1) {
                clearInterval(interval);
                b.onEndCallback()
            }
            0 >= d && (n || (n = !0, b.onEndCallback()), h = g = f = e = 0);
            $(".ClassyCountdown-days input").val(365 - e).trigger("change");
            $(".ClassyCountdown-hours input").val(24 - f).trigger("change");
            $(".Countdown-minutes input").val(60 - g).trigger("change");
            $(".ClassyCountdown-seconds input").val(60 - g).trigger("change");
            $(".Countdown-days").html(e);
            $(".Countdown-hours").html(f);
            $(".Countdown-minutes").html(g);
            $(".Countdown-seconds").html(h);
            // title && (document.title = `${e} : ${f} : ${g} : ${h} - Tiny Time`);
            if (e > 0) {
                title && (document.title = `${e} : ${f} : ${g} : ${h} - Tiny Time`);
            }else if(f > 0){
                title && (document.title = `${f} : ${g} : ${h} - Tiny Time`);
            }else{
                title && (document.title = `${g} : ${h} - Tiny Time`);
            }
        }

        let dmcs = 0;
        let stopNow = 0;

        function mcs() {
            d++;
            d = Math.round(d);
            dmcs = Math.round(dmcs);
            stopNow = d - dmcs;
            if (stopNow == dmcs) {
                clearInterval(interval);
                b.onEndCallback()
            }
            lmcs(stopNow);
            0 >= d && (n || (n = !0, b.onEndCallback()), h = g = f = e = 0);
            $(".ClassyCountdown-days input").val(365 - e).trigger("change");
            $(".ClassyCountdown-hours input").val(24 - f).trigger("change");
            $(".Countdown-minutes input").val(60 - g).trigger("change");
            $(".ClassyCountdown-seconds input").val(60 - h).trigger("change");
            $(".Countdown-days").html(e);
            $(".Countdown-hours").html(f);
            $(".Countdown-minutes").html(g);
            $(".Countdown-seconds").html(h);
            const w = Math.floor(dmcs / 86400);
            const x = Math.floor(dmcs % 86400 / 3600);
            if (w > 0) {
                title && (document.title = `${e} : ${f} : ${g} : ${h} - Tiny Time`);
            }else if(x > 0){
                title && (document.title = `${f} : ${g} : ${h} - Tiny Time`);
            }else{
                title && (document.title = `${g} : ${h} - Tiny Time`);
            }
        }

        function p() {
            $(".ClassyCountdown-wrapper > div").each(function() {
                c(this).css("height", c(this).width() + "px")
            });
            b.style.textResponsive && $(".ClassyCountdown-value").css("font-size", Math.floor($("> div").eq(0).width() * b.style.textResponsive / 10) + "px");
            $(".ClassyCountdown-value").each(function() {
                c(this).css("margin-top", Math.floor(0 - parseInt(c(this).height(), 10) / 2) + "px")
            });
            $(".ClassyCountdown-days input").trigger("change");
            $(".ClassyCountdown-hours input").trigger("change");
            $(".Countdown-minutes input").trigger("change");
            $(".ClassyCountdown-seconds input").trigger("change")
        }

        function q(a) {
            switch (a) {
                case "flat-colors":
                    return {
                        labels: !0,
                        style: {
                            element: "",
                            textResponsive: .5,
                            days: {
                                gauge: {
                                    thickness: .01,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#1abc9c"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            hours: {
                                gauge: {
                                    thickness: .01,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#2980b9"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            minutes: {
                                gauge: {
                                    thickness: .01,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#8e44ad"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            seconds: {
                                gauge: {
                                    thickness: .01,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#f39c12"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            }
                        }
                    };
                case "flat-colors-wide":
                    return {
                        labels: !0,
                        style: {
                            element: "",
                            textResponsive: .5,
                            days: {
                                gauge: {
                                    thickness: .03,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#1abc9c"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            hours: {
                                gauge: {
                                    thickness: .03,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#2980b9"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            minutes: {
                                gauge: {
                                    thickness: .03,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#8e44ad"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            seconds: {
                                gauge: {
                                    thickness: .03,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#f39c12"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            }
                        }
                    };
                case "flat-colors-very-wide":
                    return {
                        labels: !0,
                        style: {
                            element: "",
                            textResponsive: .5,
                            days: {
                                gauge: {
                                    thickness: .12,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#1abc9c"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            hours: {
                                gauge: {
                                    thickness: .12,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#2980b9"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            minutes: {
                                gauge: {
                                    thickness: .12,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#8e44ad"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            seconds: {
                                gauge: {
                                    thickness: .12,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#f39c12"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            }
                        }
                    };
                case "flat-colors-black":
                    return {
                        labels: !0,
                        style: {
                            element: "",
                            textResponsive: .5,
                            days: {
                                gauge: {
                                    thickness: .25,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#1abc9c",
                                    lineCap: "round"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            hours: {
                                gauge: {
                                    thickness: .25,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#2980b9",
                                    lineCap: "round"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            minutes: {
                                gauge: {
                                    thickness: .25,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#8e44ad",
                                    lineCap: "round"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            seconds: {
                                gauge: {
                                    thickness: .25,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#f39c12",
                                    lineCap: "round"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            }
                        }
                    };
                case "black":
                    return {
                        labels: !0,
                        style: {
                            element: "",
                            textResponsive: .5,
                            days: {
                                gauge: {
                                    thickness: .01,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#222"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            hours: {
                                gauge: {
                                    thickness: .01,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#222"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            minutes: {
                                gauge: {
                                    thickness: .01,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#222"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            seconds: {
                                gauge: {
                                    thickness: .01,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#222"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            }
                        }
                    };
                case "black-wide":
                    return {
                        labels: !0,
                        style: {
                            element: "",
                            textResponsive: .5,
                            days: {
                                gauge: {
                                    thickness: .03,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#222"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            hours: {
                                gauge: {
                                    thickness: .03,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#222"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            minutes: {
                                gauge: {
                                    thickness: .03,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#222"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            seconds: {
                                gauge: {
                                    thickness: .03,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#222"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            }
                        }
                    };
                case "black-very-wide":
                    return {
                        labels: !0,
                        style: {
                            element: "",
                            textResponsive: .5,
                            days: {
                                gauge: {
                                    thickness: .17,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#222"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            hours: {
                                gauge: {
                                    thickness: .17,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#222"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            minutes: {
                                gauge: {
                                    thickness: .17,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#222"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            seconds: {
                                gauge: {
                                    thickness: .17,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#222"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            }
                        }
                    };
                case "black-black":
                    return {
                        labels: !0,
                        style: {
                            element: "",
                            textResponsive: .5,
                            days: {
                                gauge: {
                                    thickness: .25,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#222",
                                    lineCap: "round"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            hours: {
                                gauge: {
                                    thickness: .25,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#222",
                                    lineCap: "round"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            minutes: {
                                gauge: {
                                    thickness: .25,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#222",
                                    lineCap: "round"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            },
                            seconds: {
                                gauge: {
                                    thickness: .25,
                                    bgColor: "rgba(0,0,0,0.05)",
                                    fgColor: "#222",
                                    lineCap: "round"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#34495e;"
                            }
                        }
                    };
                case "white":
                    return {
                        labels: !0,
                        style: {
                            element: "",
                            textResponsive: .5,
                            days: {
                                gauge: {
                                    thickness: .03,
                                    bgColor: "rgba(255,255,255,0.05)",
                                    fgColor: "#fff"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#fff;"
                            },
                            hours: {
                                gauge: {
                                    thickness: .03,
                                    bgColor: "rgba(255,255,255,0.05)",
                                    fgColor: "#fff"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#fff;"
                            },
                            minutes: {
                                gauge: {
                                    thickness: .03,
                                    bgColor: "rgba(255,255,255,0.05)",
                                    fgColor: "#fff"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#fff;"
                            },
                            seconds: {
                                gauge: {
                                    thickness: .03,
                                    bgColor: "rgba(255,255,255,0.05)",
                                    fgColor: "#fff"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#fff;"
                            }
                        }
                    };
                case "white-wide":
                    return {
                        labels: !0,
                        style: {
                            element: "",
                            textResponsive: .5,
                            days: {
                                gauge: {
                                    thickness: .06,
                                    bgColor: "rgba(255,255,255,0.05)",
                                    fgColor: "#fff"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#fff;"
                            },
                            hours: {
                                gauge: {
                                    thickness: .06,
                                    bgColor: "rgba(255,255,255,0.05)",
                                    fgColor: "#fff"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#fff;"
                            },
                            minutes: {
                                gauge: {
                                    thickness: .06,
                                    bgColor: "rgba(255,255,255,0.05)",
                                    fgColor: "#fff"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#fff;"
                            },
                            seconds: {
                                gauge: {
                                    thickness: .06,
                                    bgColor: "rgba(255,255,255,0.05)",
                                    fgColor: "#fff"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#fff;"
                            }
                        }
                    };
                case "white-very-wide":
                    return {
                        labels: !0,
                        style: {
                            element: "",
                            textResponsive: .5,
                            days: {
                                gauge: {
                                    thickness: .16,
                                    bgColor: "rgba(255,255,255,0.05)",
                                    fgColor: "#fff"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#fff;"
                            },
                            hours: {
                                gauge: {
                                    thickness: .16,
                                    bgColor: "rgba(255,255,255,0.05)",
                                    fgColor: "#fff"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#fff;"
                            },
                            minutes: {
                                gauge: {
                                    thickness: .16,
                                    bgColor: "rgba(255,255,255,0.05)",
                                    fgColor: "#fff"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#fff;"
                            },
                            seconds: {
                                gauge: {
                                    thickness: .16,
                                    bgColor: "rgba(255,255,255,0.05)",
                                    fgColor: "#fff"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#fff;"
                            }
                        }
                    };
                case "white-black":
                    return {
                        labels: !0,
                        style: {
                            element: "",
                            textResponsive: .5,
                            days: {
                                gauge: {
                                    thickness: .25,
                                    bgColor: "rgba(255,255,255,0.05)",
                                    fgColor: "#fff",
                                    lineCap: "round"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#fff;"
                            },
                            hours: {
                                gauge: {
                                    thickness: .25,
                                    bgColor: "rgba(255,255,255,0.05)",
                                    fgColor: "#fff",
                                    lineCap: "round"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#fff;"
                            },
                            minutes: {
                                gauge: {
                                    thickness: .25,
                                    bgColor: "rgba(255,255,255,0.05)",
                                    fgColor: "#fff",
                                    lineCap: "round"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#fff;"
                            },
                            seconds: {
                                gauge: {
                                    thickness: .25,
                                    bgColor: "rgba(255,255,255,0.05)",
                                    fgColor: "#fff",
                                    lineCap: "round"
                                },
                                textCSS: "font-family:'Open Sans';font-weight:300;color:#fff;"
                            }
                        }
                    }
            }
        }
        var a = c(this),
            e, f, g, h, d, n = !1,
            b = {
                end: void 0,
                now: c.now(),
                labels: !0,
                labelsOptions: {
                    lang: {
                        days: "Days",
                        hours: "Hours",
                        minutes: "Minutes",
                        seconds: "Seconds"
                    },
                    style: "font-size: 0.5em;"
                },
                style: {
                    element: "",
                    labels: !1,
                    textResponsive: .5,
                    days: {
                        gauge: {
                            thickness: .02,
                            bgColor: "rgba(0, 0, 0, 0)",
                            fgColor: "rgba(0, 0, 0, 1)",
                            lineCap: "butt"
                        },
                        textCSS: ""
                    },
                    hours: {
                        gauge: {
                            thickness: .02,
                            bgColor: "rgba(0, 0, 0, 0)",
                            fgColor: "rgba(0, 0, 0, 1)",
                            lineCap: "butt"
                        },
                        textCSS: ""
                    },
                    minutes: {
                        gauge: {
                            thickness: .02,
                            bgColor: "rgba(0, 0, 0, 0)",
                            fgColor: "rgba(0, 0, 0, 1)",
                            lineCap: "butt"
                        },
                        textCSS: ""
                    },
                    seconds: {
                        gauge: {
                            thickness: .02,
                            bgColor: "rgba(0, 0, 0, 0)",
                            fgColor: "rgba(0, 0, 0, 1)",
                            lineCap: "butt"
                        },
                        textCSS: ""
                    }
                },
                onEndCallback: function() {
                    var audio = new Audio('/audio/alarm.mp3');
                    audio.play();
                    $("#start").removeAttr("disabled");
                    $("#counterStart").removeAttr("disabled");
                }
            };
        k.theme && (b = c.extend(!0, b, q(k.theme)));
        b = c.extend(!0, b, k);
        (function() {
            a.append('<div class="ClassyCountdown-wrapper"><div class="ClassyCountdown-days"><input type="text" /><span class="ClassyCountdown-value"><div contentEditable="true"></div><span></span></span></div><div class="ClassyCountdown-hours"><input type="text" /><span class="ClassyCountdown-value"><div contentEditable="true"></div><span></span></span></div><div class="ClassyCountdown-minutes"><input type="text" /><span class="ClassyCountdown-value"><div contentEditable="true"></div><span></span></span></div><div class="ClassyCountdown-seconds"><input type="text" /><span class="ClassyCountdown-value"><div contentEditable="true"></div><span></span></span></div></div>');
            $(".ClassyCountdown-days input").knob(c.extend({
                width: "100%",
                displayInput: !1,
                readOnly: !0,
                max: 365,
            }, b.style.days.gauge));
            $(".ClassyCountdown-hours input").knob(c.extend({
                width: "100%",
                displayInput: !1,
                readOnly: !0,
                max: 24
            }, b.style.hours.gauge));
            $(".Countdown-minutes input").knob(c.extend({
                width: "100%",
                displayInput: !1,
                readOnly: !0,
                max: 60
            }, b.style.minutes.gauge));
            $(".ClassyCountdown-seconds input").knob(c.extend({
                width: "100%",
                displayInput: !1,
                readOnly: !0,
                max: 60
            }, b.style.seconds.gauge));
            $(".ClassyCountdown-wrapper > div").attr("style", b.style.element);
            $(".ClassyCountdown-days .ClassyCountdown-value").attr("style", b.style.days.textCSS);
            $(".ClassyCountdown-hours .ClassyCountdown-value").attr("style", b.style.hours.textCSS);
            $(".Countdown-minutes .ClassyCountdown-value").attr("style", b.style.minutes.textCSS);
            $(".ClassyCountdown-seconds .ClassyCountdown-value").attr("style", b.style.seconds.textCSS);
            $(".ClassyCountdown-value").each(function() {
                c(this).css("margin-top", Math.floor(0 - parseInt(c(this).height(), 10) / 2) + "px")
            });
            b.labels && ($(".ClassyCountdown-days .ClassyCountdown-value > span").html(b.labelsOptions.lang.days), $(".ClassyCountdown-hours .ClassyCountdown-value > span").html(b.labelsOptions.lang.hours), $(".Countdown-minutes .ClassyCountdown-value > span").html(b.labelsOptions.lang.minutes), $(".ClassyCountdown-seconds .ClassyCountdown-value > span").html(b.labelsOptions.lang.seconds), $(".ClassyCountdown-value > span").attr("style", b.labelsOptions.style));
            const date1 = new Date();
            const date2 = new Date('January 1, 2024'); // new year
            const diffTime = Math.abs(date2 - date1);
            const milliseconds = Math.ceil(diffTime / 1000);
            d = milliseconds; // 301 default time in milliseconds
            l()
        })();
        m();
        (function() {
            $(".ClassyCountdown-wrapper > div").each(function() {
                c(this).css("height", c(this).width() + "px")
            });
            b.style.textResponsive && ($(".ClassyCountdown-value").css("font-size", Math.floor($("> div").eq(0).width() * b.style.textResponsive / 10) + "px"), $(".ClassyCountdown-value").each(function() {
                c(this).css("margin-top", Math.floor(0 - parseInt(c(this).height(), 10) / 2) + "px")
            }));
            c(window).trigger("resize");
            c(window).resize(c.throttle(50, p))
        })()

        $('body').on('click', '#start', function() {
            start()
            $(this).attr("disabled", "disabled");
        });

        $('body').on('click', '#counterStart', function() {
            counterStart()
            $(this).attr("disabled", "disabled");
        });

        $('body').on('click', '#pause', function() {
            stop()
            $("#start").removeAttr("disabled");
        });

        $('body').on('click', '#pauseCounter', function() {
            pauseCounter()
            $("#counterStart").removeAttr("disabled");
        });

        $("#stop").on('click', function() {
            stop()
            $("#start").removeAttr("disabled");
            $("#counterStart").removeAttr("disabled");
        });

        $("#reset").on('click', function() {
            stop()
            d = 301;
            dmcs = 601;
            stopNow = 301;
            $("#counterStart").removeAttr("disabled");
            $("#start").removeAttr("disabled");
            $(".Countdown-days").html(0);
            $(".Countdown-hours").html(0);
            $(".Countdown-minutes").html(5);
            $(".Countdown-seconds").html(0);
            $('input[readonly=readonly]').attr('class', 'reset');
            $("input[readonly=readonly]").removeAttr("readonly");
            $("input.reset").val(60);
            $(".ClassyCountdown-days input").val(365);
            $(".Countdown-minutes input").val(55);

            $(".ClassyCountdown-days input").trigger("change");
            $(".ClassyCountdown-hours input").trigger("change");
            $(".Countdown-minutes input").trigger("change");
            $(".ClassyCountdown-seconds input").trigger("change")
        });

        Date.prototype.addDays = function(days) {
            let ddd = new Date(this.valueOf());
            ddd.setDate(ddd.getDate() + days);
            return ddd;
        }

        let interval;

        function start() {
            clearInterval(interval);
            var daysVal = $(".Countdown-days").html();
            var hoursVal = $(".Countdown-hours").html();
            var minutesVal = $(".Countdown-minutes").html();
            var secondsVal = $(".Countdown-seconds").html();
            let timerDate = new Date();
            timerDate = timerDate.addDays(parseInt(daysVal))
            timerDate.setHours(parseInt(timerDate.getHours()) + parseInt(hoursVal));
            timerDate.setMinutes(timerDate.getMinutes() + parseInt(minutesVal));
            timerDate.setSeconds(parseInt(timerDate.getSeconds()) + parseInt(secondsVal));
            d = (timerDate.getTime() - $.now()) / 1000;
            title = true;
            interval = setInterval(m, 1E3);
            return false;
        }
        start()
        function counterStart() {
            clearInterval(interval);
            var daysVal = $(".Countdown-days").html();
            var hoursVal = $(".Countdown-hours").html();
            var minutesVal = $(".Countdown-minutes").html();
            var secondsVal = $(".Countdown-seconds").html();
            let timerDate = new Date();
            timerDate = timerDate.addDays(parseInt(daysVal))
            timerDate.setHours(parseInt(timerDate.getHours()) + parseInt(hoursVal));
            timerDate.setMinutes(timerDate.getMinutes() + parseInt(minutesVal));
            timerDate.setSeconds(parseInt(timerDate.getSeconds()) + parseInt(secondsVal));
            d = (timerDate.getTime() - $.now()) / 1000;
            dmcs = (timerDate.getTime() - $.now()) / 1000;
            interval = setInterval(mcs, 1E3);
            title = true;
            return false;
        }

        let pauseNow = 0;
        // let remaining = 0;

        function pauseCounter() {
            clearInterval(interval);
            pauseNow = dmcs - stopNow;
            // remaining = stopNow;
            lmcs(pauseNow)
            0 >= d && (n || (n = !0, b.onEndCallback()), h = g = f = e = 0);
            $(".ClassyCountdown-days input").val(365 - e).trigger("change");
            $(".ClassyCountdown-hours input").val(24 - f).trigger("change");
            $(".Countdown-minutes input").val(60 - g).trigger("change");
            $(".ClassyCountdown-seconds input").val(60 - h).trigger("change");
            $(".Countdown-days").html(e);
            $(".Countdown-hours").html(f);
            $(".Countdown-minutes").html(g);
            $(".Countdown-seconds").html(h);
            return false;
        }

        function stop() {
            clearInterval(interval);
            return false;
        }

        const date_element = $('#date');
        const hour_element = $('#hour');
        const min_element = $('#minute');
        const sec_element = $('#second');

        $('.submit-timer').on('click', function() {
            $("form#timer-form").submit();
            $("#counterStart").removeAttr("disabled");
            $("#start").removeAttr("disabled");
        });

        function getTimeRemaining(endtime) {
            const total = Date.parse(endtime) - Date.parse(new Date());
            const seconds = Math.floor((total / 1000) % 60);
            const minutes = Math.floor((total / 1000 / 60) % 60);
            const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
            const days = Math.floor(total / (1000 * 60 * 60 * 24));

            return {
                total,
                days,
                hours,
                minutes,
                seconds
            };
        }

        $('form#timer-form').on('submit', function(e) {
            e.preventDefault();
            let hasErrors = false;
            if (date_element.val() == "" || date_element.val() == null) {
                alert("The Date field is required.");
                hasErrors = true;
            }
            if (hour_element.val() == "" || hour_element.val() == null) {
                alert("The Hour field is required.");
                hasErrors = true;
            }
            if (min_element.val() == "" || min_element.val() == null) {
                alert("The Minute field is required.");
                hasErrors = true;
            }
            if (sec_element.val() == "" || sec_element.val() == null) {
                alert("The Second field is required.");
                hasErrors = true;
            }
            if (hour_element.val() != "") {
                if (hour_element.val() < 0) {
                    alert("The Hour field must be greater than 0.");
                    hasErrors = true;
                }
            }
            if (min_element.val() != "") {
                if (min_element.val() < 0 || min_element.val() > 60) {
                    alert("The Minute field must be greater than -1 or equal to 60.");
                    hasErrors = true;
                }
            }
            if (sec_element.val() != "") {
                if (sec_element.val() < 0 || sec_element.val() > 60) {
                    alert("The Second field must be greater than -1 or equal to 60.");
                    hasErrors = true;
                }
            }
            if (hasErrors) {
                return true;
            }
            clearInterval(interval);
            const w = new Date();
            var endDate = date_element.val() + " " + w.getHours() + ":" + w.getMinutes() + ":" + w.getSeconds();

            let result = getTimeRemaining(endDate)
                // console.log(result.days)
            if (result.days < 0) {
                alert("The date value must not be less than current date.");
                return true;
            }
            $(".Countdown-days").html(result.days);
            $(".Countdown-hours").html(hour_element.val());
            $(".Countdown-minutes").html(min_element.val());
            $(".Countdown-seconds").html(sec_element.val());
            $('.close-modal').trigger('click');
        });


        /*  */
        $('div[contenteditable=true]').on('keydown', function(e) {
            const pattern = /^[0-9]$/;
            if (!pattern.test(e.key) && (e.key !== "Backspace") && (e.key !== "ArrowRight") && (e.key !== "ArrowLeft")) e.preventDefault();
        });
        /* Change Timer value to zero if it is null or empty. */
        $('body').on('click', function(e) {
            var elems = document.querySelectorAll("div[contenteditable=true]");
            for (let i = 0; i < elems.length; i++) {
                const val = elems[i].innerHTML;
                if (val == null || val == "") {
                    elems[i].innerHTML = "0";
                }
            }
        });
        /* Min and max values for time */
        $('body').on('keyup', function(e) {
            var elems = document.querySelectorAll("div[contenteditable=true]");
            for (let i = 0; i < elems.length; i++) {
                const val = elems[i].innerHTML;
                if (elems[0].innerHTML > 366) {
                    alert("Days cannot be greater than 366.")
                    elems[0].innerHTML = 366;
                }
                if (elems[1].innerHTML > 24) {
                    alert("Hours cannot be greater than 24.")
                    elems[1].innerHTML = 24;
                }
                if (elems[2].innerHTML > 60) {
                    alert("Minutes cannot be greater than 60.")
                    elems[2].innerHTML = 60;
                }
                if (elems[3].innerHTML > 60) {
                    alert("Seconds cannot be greater than 60.")
                    elems[3].innerHTML = 60;
                }
            }
        });

        $("#fiveMin").on('click', function() {
            clearInterval(interval);
            $(".Countdown-minutes").html("5");
            // console.log("Js is updated. T"+$(".Countdown-minutes").text());
            resetMin();
        });
        $("#tenMin").on('click', function() {
            clearInterval(interval);
            $(".Countdown-minutes").html("10");
            resetMin();
        });
        $("#fifMin").on('click', function() {
            clearInterval(interval);
            $(".Countdown-minutes").html("15");
            resetMin();
        });
        $("#tweMin").on('click', function() {
            clearInterval(interval);
            $(".Countdown-minutes").html("20");
            resetMin();
        });
        $("#thiMin").on('click', function() {
            clearInterval(interval);
            $(".Countdown-minutes").html("30");
            resetMin();
        });
        $("#oneHour").on('click', function() {
            clearInterval(interval);
            $(".Countdown-hours").html("1");
            resetHour();
            $("#counterStart").removeAttr("disabled");
            $("#start").removeAttr("disabled");
        });
        $('.btnc.copy').on('click', function() {
            var text = document.getElementById("embedCode");
            text.focus();
            text.select();
            document.execCommand("copy");
            alert("Code has been copied to clipboard.");
        });

        function resetMin() {
            $(".Countdown-days").html("0");
            $(".Countdown-hours").html("0");
            $(".Countdown-seconds").html("0");
            $("#counterStart").removeAttr("disabled");
            $("#start").removeAttr("disabled");
        }

        function resetHour() {
            $(".Countdown-days").html("0");
            $(".Countdown-minutes").html("0");
            $(".Countdown-seconds").html("0");
        }
        /* Counter && Timer */
        $('body').on('click', '#counter', function() {
            $(this).addClass('rotate-180');
            $(".tooltiptext.countup").removeClass("countup").addClass("countdown");
            $(".tooltiptext.countdown").text("CountDown");
            clearInterval(interval);
            $("#start").removeAttr("disabled");
            $("#reset").trigger('click');
            $(this).attr('id', 'timer');
            $('#start').attr('id', 'counterStart');
            $('#pause').attr('id', 'pauseCounter');
        });

        $('body').on('click', '#timer', function() {
            $(this).removeClass('rotate-180');
            $(".tooltiptext.countdown").removeClass("countdown").addClass("countup");
            $(".tooltiptext.countup").text("CountUp");
            clearInterval(interval);
            $("#counterStart").removeAttr("disabled");
            $("#reset").trigger('click');
            $(this).attr('id', 'counter');
            $('#counterStart').attr('id', 'start');
            $('#pauseCounter').attr('id', 'pause');
        });

        $('body').on('click', '#get_link', function() {
            $("#generateLinkForm").submit();
        });

        function convertDateToUTC(){
            let d = getTimeRemaining($('#date1').val());
            const days = d.days+1;
            const hours = $('#hour1').val();
            const minutes = $('#minute1').val();
            const seconds = $('#second1').val();

            let timerDate = new Date();
            timerDate = timerDate.addDays(parseInt(days))
            timerDate.setHours(parseInt(timerDate.getUTCHours()) + parseInt(hours));
            timerDate.setMinutes(parseInt(timerDate.getUTCMinutes()) + parseInt(minutes));
            timerDate.setSeconds(parseInt(timerDate.getUTCSeconds()) + parseInt(seconds));

            var dd = timerDate.getDate();
            var mm = timerDate.getMonth()+1;
            var yyyy = timerDate.getFullYear();

            if(dd<10){dd='0'+dd}
            if(mm<10){mm='0'+mm}

            const date1 = yyyy+'-'+mm+'-'+dd;
            const hour1 = timerDate.getHours();
            const minute1 = timerDate.getMinutes();
            const second1 = timerDate.getSeconds();

            return {
                date1,
                hour1,
                minute1,
                second1
            };
        }

        $("#generateLinkForm").submit(function (e) {
            e.preventDefault();
            let result = convertDateToUTC();
            $.ajax({
                type: "post",
                url: "/custom-timer",
                data: {
                    _token: $('#generateLinkForm > input[name=_token]').val(),
                    name: $('#s_name').val(),
                    description: $('#s_description').val(),
                    date: result.date1,
                    hour: result.hour1,
                    minute: result.minute1,
                    second: result.second1,
                    timertype: $('input:radio[name=timertype]:checked').val(),
                },
                success: function (response) {
                    // $('#emBedLink').val('<iframe src="https://tinyti.me/custom-timer/'+response.link+'" width="100%" height="300"></iframe>');
                    $('#generated_url').val('https://tinyti.me/custom-timer/'+response.link);
                    $('#generatedLink').removeClass('hidden');
                    // $('#emBedLinkDiv').removeClass('hidden');
                    $('#generateLinkForm > .message').html("<p class='text-green-700 cursor-pointer removeElem'><strong>Success!</strong> The Generated Link is only available before the timer runs out. Once the timer runs out, they will expire.</p>");
                    $('#copy_link').text("COPY");
                },
                error: function(xhr, err) {
                    var err = eval("(" + xhr.responseText + ")");
                    $('#generateLinkForm > .message').html("<p class='text-red-700 cursor-pointer removeElem'><strong>Opps!</strong> " + err.message + "</p>");
                }
            });
        });

        $('body').on('click', '#copy_link', function() {
            const text = document.getElementById("generated_url");
            text.focus();
            text.select();
            document.execCommand("copy");
            $(this).text("COPIED");
        });
    }
})(jQuery);
