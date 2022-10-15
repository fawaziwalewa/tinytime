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
            d = Math.floor(d);
            l();
            if (d < 1) {
                clearInterval(interval);
                b.onEndCallback()
            }
            0 >= d && (n || (n = !0, b.onEndCallback()), h = g = f = e = 0);
            a.find(".ClassyCountdown-days input").val(365 - e).trigger("change");
            a.find(".ClassyCountdown-hours input").val(24 - f).trigger("change");
            a.find(".ClassyCountdown-minutes input").val(60 - g).trigger("change");
            a.find(".ClassyCountdown-seconds input").val(60 - h).trigger("change");
            a.find(".ClassyCountdown-days .ClassyCountdown-value > div").html(e);
            a.find(".ClassyCountdown-hours .ClassyCountdown-value > div").html(f);
            a.find(".ClassyCountdown-minutes .ClassyCountdown-value > div").html(g);
            a.find(".ClassyCountdown-seconds .ClassyCountdown-value > div").html(h)
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
            d = Math.floor(d);
            dmcs = Math.floor(dmcs);
            // stopNow = 
            stopNow = d - dmcs;
    // let d = new Date(new Date().toLocaleString("en-US", {timeZone: "UTC"}));
            // let d = new Date(created_at.toLocaleString("en-US", {timeZone: "UTC"}));

            let reDate = new Date(created_at);
            reDate = Math.floor(($.now() - reDate.getTime()) / 1000);
            // d = reDate; 
            // stopNow = reDate - stopNow;
            console.log(reDate)
            if (stopNow == dmcs) {
                clearInterval(interval);
                b.onEndCallback()
            }
            lmcs(reDate);
            0 >= d && (n || (n = !0, b.onEndCallback()), h = g = f = e = 0);
            a.find(".ClassyCountdown-days input").val(365 - e).trigger("change");
            a.find(".ClassyCountdown-hours input").val(24 - f).trigger("change");
            a.find(".ClassyCountdown-minutes input").val(60 - g).trigger("change");
            a.find(".ClassyCountdown-seconds input").val(60 - h).trigger("change");
            a.find(".ClassyCountdown-days .ClassyCountdown-value > div").html(e);
            a.find(".ClassyCountdown-hours .ClassyCountdown-value > div").html(f);
            a.find(".ClassyCountdown-minutes .ClassyCountdown-value > div").html(g);
            a.find(".ClassyCountdown-seconds .ClassyCountdown-value > div").html(h);
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
            a.find(".ClassyCountdown-wrapper > div").each(function() {
                c(this).css("height", c(this).width() + "px")
            });
            b.style.textResponsive && a.find(".ClassyCountdown-value").css("font-size", Math.floor(a.find("> div").eq(0).width() * b.style.textResponsive / 10) + "px");
            a.find(".ClassyCountdown-value").each(function() {
                c(this).css("margin-top", Math.floor(0 - parseInt(c(this).height(), 10) / 2) + "px")
            });
            a.find(".ClassyCountdown-days input").trigger("change");
            a.find(".ClassyCountdown-hours input").trigger("change");
            a.find(".ClassyCountdown-minutes input").trigger("change");
            a.find(".ClassyCountdown-seconds input").trigger("change")
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
            a.append('<div class="ClassyCountdown-wrapper"><div class="ClassyCountdown-days"><input type="text" /><span class="ClassyCountdown-value"><div></div><span></span></span></div><div class="ClassyCountdown-hours"><input type="text" /><span class="ClassyCountdown-value"><div></div><span></span></span></div><div class="ClassyCountdown-minutes"><input type="text" /><span class="ClassyCountdown-value"><div></div><span></span></span></div><div class="ClassyCountdown-seconds"><input type="text" /><span class="ClassyCountdown-value"><div></div><span></span></span></div></div>');
            a.find(".ClassyCountdown-days input").knob(c.extend({
                width: "100%",
                displayInput: !1,
                readOnly: !0,
                max: 365,
            }, b.style.days.gauge));
            a.find(".ClassyCountdown-hours input").knob(c.extend({
                width: "100%",
                displayInput: !1,
                readOnly: !0,
                max: 24
            }, b.style.hours.gauge));
            a.find(".ClassyCountdown-minutes input").knob(c.extend({
                width: "100%",
                displayInput: !1,
                readOnly: !0,
                max: 60
            }, b.style.minutes.gauge));
            a.find(".ClassyCountdown-seconds input").knob(c.extend({
                width: "100%",
                displayInput: !1,
                readOnly: !0,
                max: 60
            }, b.style.seconds.gauge));
            a.find(".ClassyCountdown-wrapper > div").attr("style", b.style.element);
            a.find(".ClassyCountdown-days .ClassyCountdown-value").attr("style", b.style.days.textCSS);
            a.find(".ClassyCountdown-hours .ClassyCountdown-value").attr("style", b.style.hours.textCSS);
            a.find(".ClassyCountdown-minutes .ClassyCountdown-value").attr("style", b.style.minutes.textCSS);
            a.find(".ClassyCountdown-seconds .ClassyCountdown-value").attr("style", b.style.seconds.textCSS);
            a.find(".ClassyCountdown-value").each(function() {
                c(this).css("margin-top", Math.floor(0 - parseInt(c(this).height(), 10) / 2) + "px")
            });
            b.labels && (a.find(".ClassyCountdown-days .ClassyCountdown-value > span").html(b.labelsOptions.lang.days), a.find(".ClassyCountdown-hours .ClassyCountdown-value > span").html(b.labelsOptions.lang.hours), a.find(".ClassyCountdown-minutes .ClassyCountdown-value > span").html(b.labelsOptions.lang.minutes), a.find(".ClassyCountdown-seconds .ClassyCountdown-value > span").html(b.labelsOptions.lang.seconds), a.find(".ClassyCountdown-value > span").attr("style", b.labelsOptions.style));
            // d = 2; /* b.end - b.now */
            d = b.end - b.now;
            l()
        })();
        m();
        (function() {
            a.find(".ClassyCountdown-wrapper > div").each(function() {
                c(this).css("height", c(this).width() + "px")
            });
            b.style.textResponsive && (a.find(".ClassyCountdown-value").css("font-size", Math.floor(a.find("> div").eq(0).width() * b.style.textResponsive / 10) + "px"), a.find(".ClassyCountdown-value").each(function() {
                c(this).css("margin-top", Math.floor(0 - parseInt(c(this).height(), 10) / 2) + "px")
            }));
            c(window).trigger("resize");
            c(window).resize(c.throttle(50, p))
        })()

        Date.prototype.addDays = function(days) {
            let ddd = new Date(this.valueOf());
            ddd.setDate(ddd.getDate() + days);
            return ddd;
        }

        let interval;

        function start() {
            clearInterval(interval);
            var daysVal = a.find(".ClassyCountdown-days .ClassyCountdown-value > div").html();
            var hoursVal = a.find(".ClassyCountdown-hours .ClassyCountdown-value > div").html();
            var minutesVal = a.find(".ClassyCountdown-minutes .ClassyCountdown-value > div").html();
            var secondsVal = a.find(".ClassyCountdown-seconds .ClassyCountdown-value > div").html();
            let timerDate = new Date();
            timerDate = timerDate.addDays(parseInt(daysVal))
            timerDate.setHours(parseInt(timerDate.getHours()) + parseInt(hoursVal));
            timerDate.setMinutes(timerDate.getMinutes() + parseInt(minutesVal));
            timerDate.setSeconds(parseInt(timerDate.getSeconds()) + parseInt(secondsVal));
            d = (timerDate.getTime() - $.now()) / 1000;
            interval = setInterval(m, 1E3);
            title = true;
        }

        function counterStart(created_at) {
            clearInterval(interval);
            var daysVal = a.find(".ClassyCountdown-days .ClassyCountdown-value > div").html();
            var hoursVal = a.find(".ClassyCountdown-hours .ClassyCountdown-value > div").html();
            var minutesVal = a.find(".ClassyCountdown-minutes .ClassyCountdown-value > div").html();
            var secondsVal = a.find(".ClassyCountdown-seconds .ClassyCountdown-value > div").html();
            let timerDate = new Date();
            timerDate = timerDate.addDays(parseInt(daysVal))
            timerDate.setHours(parseInt(timerDate.getHours()) + parseInt(hoursVal));
            timerDate.setMinutes(timerDate.getMinutes() + parseInt(minutesVal));
            timerDate.setSeconds(parseInt(timerDate.getSeconds()) + parseInt(secondsVal));
            d = (timerDate.getTime() - $.now()) / 1000;
            dmcs = (timerDate.getTime() - $.now()) / 1000;
            interval = setInterval(mcs, 1E3);
            title = true;
        }

        const date_element = $('#date');
        const hour_element = $('#hour');
        const min_element = $('#minute');
        const sec_element = $('#second');

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
        let created_at = 0;
        var timer = {
            startTimer: function() {
                start();
            },
            startCounter: function(ca) {
                created_at = ca;
                counterStart();
            }
         };
         return timer;
    }
})(jQuery);
