"use strict";

function _typeof(t) {
    return (_typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
        return typeof t
    } : function (t) {
        return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
    })(t)
}! function (t, e) {
    "object" === ("undefined" == typeof exports ? "undefined" : _typeof(exports)) && "undefined" != typeof module ? e(exports, require("jquery")) : "function" == typeof define && define.amd ? define(["exports", "jquery"], e) : e((t = "undefined" != typeof globalThis ? globalThis : t || self).bootstrap = {}, t.jQuery)
}(void 0, function (t, e) {
    function n(t) {
        return t && "object" === _typeof(t) && "default" in t ? t : {
            default: t
        }
    }
    var h = n(e);

    function i(t, e) {
        for (var n = 0; n < e.length; n++) {
            var i = e[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
        }
    }

    function a(t, e, n) {
        return e && i(t.prototype, e), n && i(t, n), t
    }

    function l() {
        return (l = Object.assign || function (t) {
            for (var e = 1; e < arguments.length; e++) {
                var n = arguments[e];
                for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i])
            }
            return t
        }).apply(this, arguments)
    }
    var o = "transitionend";

    function r(t) {
        var e = this,
            n = !1;
        return h.default(this).one(p.TRANSITION_END, function () {
            n = !0
        }), setTimeout(function () {
            n || p.triggerTransitionEnd(e)
        }, t), this
    }
    var p = {
        TRANSITION_END: "bsTransitionEnd",
        getUID: function (t) {
            for (; t += ~~(1e6 * Math.random()), document.getElementById(t););
            return t
        },
        getSelectorFromElement: function (t) {
            var e, n = t.getAttribute("data-target");
            n && "#" !== n || (n = (e = t.getAttribute("href")) && "#" !== e ? e.trim() : "");
            try {
                return document.querySelector(n) ? n : null
            } catch (t) {
                return null
            }
        },
        getTransitionDurationFromElement: function (t) {
            if (!t) return 0;
            var e = h.default(t).css("transition-duration"),
                n = h.default(t).css("transition-delay"),
                i = parseFloat(e),
                o = parseFloat(n);
            return i || o ? (e = e.split(",")[0], n = n.split(",")[0], 1e3 * (parseFloat(e) + parseFloat(n))) : 0
        },
        reflow: function (t) {
            return t.offsetHeight
        },
        triggerTransitionEnd: function (t) {
            h.default(t).trigger(o)
        },
        supportsTransitionEnd: function () {
            return Boolean(o)
        },
        isElement: function (t) {
            return (t[0] || t).nodeType
        },
        typeCheckConfig: function (t, e, n) {
            for (var i in n)
                if (Object.prototype.hasOwnProperty.call(n, i)) {
                    var o = n[i],
                        r = e[i],
                        a = r && p.isElement(r) ? "element" : null == (s = r) ? "" + s : {}.toString.call(s).match(/\s([a-z]+)/i)[1].toLowerCase();
                    if (!new RegExp(o).test(a)) throw new Error(t.toUpperCase() + ': Option "' + i + '" provided type "' + a + '" but expected type "' + o + '".')
                } var s
        },
        findShadowRoot: function (t) {
            if (!document.documentElement.attachShadow) return null;
            if ("function" != typeof t.getRootNode) return t instanceof ShadowRoot ? t : t.parentNode ? p.findShadowRoot(t.parentNode) : null;
            var e = t.getRootNode();
            return e instanceof ShadowRoot ? e : null
        },
        jQueryDetection: function () {
            if (void 0 === h.default) throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");
            var t = h.default.fn.jquery.split(" ")[0].split(".");
            if (t[0] < 2 && t[1] < 9 || 1 === t[0] && 9 === t[1] && t[2] < 1 || 4 <= t[0]) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0")
        }
    };
    p.jQueryDetection(), h.default.fn.emulateTransitionEnd = r, h.default.event.special[p.TRANSITION_END] = {
        bindType: o,
        delegateType: o,
        handle: function (t) {
            if (h.default(t.target).is(this)) return t.handleObj.handler.apply(this, arguments)
        }
    };
    var s = "alert",
        u = "bs.alert",
        f = h.default.fn[s],
        d = function () {
            function i(t) {
                this._element = t
            }
            var t = i.prototype;
            return t.close = function (t) {
                var e = this._element;
                t && (e = this._getRootElement(t)), this._triggerCloseEvent(e).isDefaultPrevented() || this._removeElement(e)
            }, t.dispose = function () {
                h.default.removeData(this._element, u), this._element = null
            }, t._getRootElement = function (t) {
                var e = p.getSelectorFromElement(t),
                    n = !1;
                return e && (n = document.querySelector(e)), n = n || h.default(t).closest(".alert")[0]
            }, t._triggerCloseEvent = function (t) {
                var e = h.default.Event("close.bs.alert");
                return h.default(t).trigger(e), e
            }, t._removeElement = function (e) {
                var t, n = this;
                h.default(e).removeClass("show"), h.default(e).hasClass("fade") ? (t = p.getTransitionDurationFromElement(e), h.default(e).one(p.TRANSITION_END, function (t) {
                    return n._destroyElement(e, t)
                }).emulateTransitionEnd(t)) : this._destroyElement(e)
            }, t._destroyElement = function (t) {
                h.default(t).detach().trigger("closed.bs.alert").remove()
            }, i._jQueryInterface = function (n) {
                return this.each(function () {
                    var t = h.default(this),
                        e = t.data(u);
                    e || (e = new i(this), t.data(u, e)), "close" === n && e[n](this)
                })
            }, i._handleDismiss = function (e) {
                return function (t) {
                    t && t.preventDefault(), e.close(this)
                }
            }, a(i, null, [{
                key: "VERSION",
                get: function () {
                    return "4.6.0"
                }
            }]), i
        }();
    h.default(document).on("click.bs.alert.data-api", '[data-dismiss="alert"]', d._handleDismiss(new d)), h.default.fn[s] = d._jQueryInterface, h.default.fn[s].Constructor = d, h.default.fn[s].noConflict = function () {
        return h.default.fn[s] = f, d._jQueryInterface
    };
    var c = "button",
        m = "bs.button",
        g = h.default.fn[c],
        _ = "active",
        v = '[data-toggle^="button"]',
        y = 'input:not([type="hidden"])',
        b = ".btn",
        E = function () {
            function o(t) {
                this._element = t, this.shouldAvoidTriggerChange = !1
            }
            var t = o.prototype;
            return t.toggle = function () {
                var t, e, n = !0,
                    i = !0,
                    o = h.default(this._element).closest('[data-toggle="buttons"]')[0];
                !o || (t = this._element.querySelector(y)) && ("radio" === t.type && (t.checked && this._element.classList.contains(_) ? n = !1 : (e = o.querySelector(".active")) && h.default(e).removeClass(_)), n && ("checkbox" !== t.type && "radio" !== t.type || (t.checked = !this._element.classList.contains(_)), this.shouldAvoidTriggerChange || h.default(t).trigger("change")), t.focus(), i = !1), this._element.hasAttribute("disabled") || this._element.classList.contains("disabled") || (i && this._element.setAttribute("aria-pressed", !this._element.classList.contains(_)), n && h.default(this._element).toggleClass(_))
            }, t.dispose = function () {
                h.default.removeData(this._element, m), this._element = null
            }, o._jQueryInterface = function (n, i) {
                return this.each(function () {
                    var t = h.default(this),
                        e = t.data(m);
                    e || (e = new o(this), t.data(m, e)), e.shouldAvoidTriggerChange = i, "toggle" === n && e[n]()
                })
            }, a(o, null, [{
                key: "VERSION",
                get: function () {
                    return "4.6.0"
                }
            }]), o
        }();
    h.default(document).on("click.bs.button.data-api", v, function (t) {
        var e = t.target,
            n = e;
        if (h.default(e).hasClass("btn") || (e = h.default(e).closest(b)[0]), !e || e.hasAttribute("disabled") || e.classList.contains("disabled")) t.preventDefault();
        else {
            var i = e.querySelector(y);
            if (i && (i.hasAttribute("disabled") || i.classList.contains("disabled"))) return void t.preventDefault();
            "INPUT" !== n.tagName && "LABEL" === e.tagName || E._jQueryInterface.call(h.default(e), "toggle", "INPUT" === n.tagName)
        }
    }).on("focus.bs.button.data-api blur.bs.button.data-api", v, function (t) {
        var e = h.default(t.target).closest(b)[0];
        h.default(e).toggleClass("focus", /^focus(in)?$/.test(t.type))
    }), h.default(window).on("load.bs.button.data-api", function () {
        for (var t = [].slice.call(document.querySelectorAll('[data-toggle="buttons"] .btn')), e = 0, n = t.length; e < n; e++) {
            var i = t[e],
                o = i.querySelector(y);
            o.checked || o.hasAttribute("checked") ? i.classList.add(_) : i.classList.remove(_)
        }
        for (var r = 0, a = (t = [].slice.call(document.querySelectorAll('[data-toggle="button"]'))).length; r < a; r++) {
            var s = t[r];
            "true" === s.getAttribute("aria-pressed") ? s.classList.add(_) : s.classList.remove(_)
        }
    }), h.default.fn[c] = E._jQueryInterface, h.default.fn[c].Constructor = E, h.default.fn[c].noConflict = function () {
        return h.default.fn[c] = g, E._jQueryInterface
    };
    var w = "carousel",
        T = "bs.carousel",
        C = "." + T,
        S = h.default.fn[w],
        N = {
            interval: 5e3,
            keyboard: !0,
            slide: !1,
            pause: "hover",
            wrap: !0,
            touch: !0
        },
        D = {
            interval: "(number|boolean)",
            keyboard: "boolean",
            slide: "(boolean|string)",
            pause: "(string|boolean)",
            wrap: "boolean",
            touch: "boolean"
        },
        A = "next",
        k = "prev",
        I = "slid" + C,
        O = "active",
        x = ".active.carousel-item",
        L = {
            TOUCH: "touch",
            PEN: "pen"
        },
        j = function () {
            function r(t, e) {
                this._items = null, this._interval = null, this._activeElement = null, this._isPaused = !1, this._isSliding = !1, this.touchTimeout = null, this.touchStartX = 0, this.touchDeltaX = 0, this._config = this._getConfig(e), this._element = t, this._indicatorsElement = this._element.querySelector(".carousel-indicators"), this._touchSupported = "ontouchstart" in document.documentElement || 0 < navigator.maxTouchPoints, this._pointerEvent = Boolean(window.PointerEvent || window.MSPointerEvent), this._addEventListeners()
            }
            var t = r.prototype;
            return t.next = function () {
                this._isSliding || this._slide(A)
            }, t.nextWhenVisible = function () {
                var t = h.default(this._element);
                !document.hidden && t.is(":visible") && "hidden" !== t.css("visibility") && this.next()
            }, t.prev = function () {
                this._isSliding || this._slide(k)
            }, t.pause = function (t) {
                t || (this._isPaused = !0), this._element.querySelector(".carousel-item-next, .carousel-item-prev") && (p.triggerTransitionEnd(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null
            }, t.cycle = function (t) {
                t || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config.interval && !this._isPaused && (this._updateInterval(), this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval))
            }, t.to = function (t) {
                var e = this;
                this._activeElement = this._element.querySelector(x);
                var n = this._getItemIndex(this._activeElement);
                if (!(t > this._items.length - 1 || t < 0))
                    if (this._isSliding) h.default(this._element).one(I, function () {
                        return e.to(t)
                    });
                    else {
                        if (n === t) return this.pause(), void this.cycle();
                        var i = n < t ? A : k;
                        this._slide(i, this._items[t])
                    }
            }, t.dispose = function () {
                h.default(this._element).off(C), h.default.removeData(this._element, T), this._items = null, this._config = null, this._element = null, this._interval = null, this._isPaused = null, this._isSliding = null, this._activeElement = null, this._indicatorsElement = null
            }, t._getConfig = function (t) {
                return t = l({}, N, t), p.typeCheckConfig(w, t, D), t
            }, t._handleSwipe = function () {
                var t, e = Math.abs(this.touchDeltaX);
                e <= 40 || (t = e / this.touchDeltaX, (this.touchDeltaX = 0) < t && this.prev(), t < 0 && this.next())
            }, t._addEventListeners = function () {
                var e = this;
                this._config.keyboard && h.default(this._element).on("keydown.bs.carousel", function (t) {
                    return e._keydown(t)
                }), "hover" === this._config.pause && h.default(this._element).on("mouseenter.bs.carousel", function (t) {
                    return e.pause(t)
                }).on("mouseleave.bs.carousel", function (t) {
                    return e.cycle(t)
                }), this._config.touch && this._addTouchEventListeners()
            }, t._addTouchEventListeners = function () {
                var t, e, n = this;
                this._touchSupported && (t = function (t) {
                    n._pointerEvent && L[t.originalEvent.pointerType.toUpperCase()] ? n.touchStartX = t.originalEvent.clientX : n._pointerEvent || (n.touchStartX = t.originalEvent.touches[0].clientX)
                }, e = function (t) {
                    n._pointerEvent && L[t.originalEvent.pointerType.toUpperCase()] && (n.touchDeltaX = t.originalEvent.clientX - n.touchStartX), n._handleSwipe(), "hover" === n._config.pause && (n.pause(), n.touchTimeout && clearTimeout(n.touchTimeout), n.touchTimeout = setTimeout(function (t) {
                        return n.cycle(t)
                    }, 500 + n._config.interval))
                }, h.default(this._element.querySelectorAll(".carousel-item img")).on("dragstart.bs.carousel", function (t) {
                    return t.preventDefault()
                }), this._pointerEvent ? (h.default(this._element).on("pointerdown.bs.carousel", t), h.default(this._element).on("pointerup.bs.carousel", e), this._element.classList.add("pointer-event")) : (h.default(this._element).on("touchstart.bs.carousel", t), h.default(this._element).on("touchmove.bs.carousel", function (t) {
                    var e;
                    (e = t).originalEvent.touches && 1 < e.originalEvent.touches.length ? n.touchDeltaX = 0 : n.touchDeltaX = e.originalEvent.touches[0].clientX - n.touchStartX
                }), h.default(this._element).on("touchend.bs.carousel", e)))
            }, t._keydown = function (t) {
                if (!/input|textarea/i.test(t.target.tagName)) switch (t.which) {
                    case 37:
                        t.preventDefault(), this.prev();
                        break;
                    case 39:
                        t.preventDefault(), this.next()
                }
            }, t._getItemIndex = function (t) {
                return this._items = t && t.parentNode ? [].slice.call(t.parentNode.querySelectorAll(".carousel-item")) : [], this._items.indexOf(t)
            }, t._getItemByDirection = function (t, e) {
                var n = t === A,
                    i = t === k,
                    o = this._getItemIndex(e),
                    r = this._items.length - 1;
                if ((i && 0 === o || n && o === r) && !this._config.wrap) return e;
                var a = (o + (t === k ? -1 : 1)) % this._items.length;
                return -1 == a ? this._items[this._items.length - 1] : this._items[a]
            }, t._triggerSlideEvent = function (t, e) {
                var n = this._getItemIndex(t),
                    i = this._getItemIndex(this._element.querySelector(x)),
                    o = h.default.Event("slide.bs.carousel", {
                        relatedTarget: t,
                        direction: e,
                        from: i,
                        to: n
                    });
                return h.default(this._element).trigger(o), o
            }, t._setActiveIndicatorElement = function (t) {
                var e, n;
                this._indicatorsElement && (e = [].slice.call(this._indicatorsElement.querySelectorAll(".active")), h.default(e).removeClass(O), (n = this._indicatorsElement.children[this._getItemIndex(t)]) && h.default(n).addClass(O))
            }, t._updateInterval = function () {
                var t, e = this._activeElement || this._element.querySelector(x);
                e && ((t = parseInt(e.getAttribute("data-interval"), 10)) ? (this._config.defaultInterval = this._config.defaultInterval || this._config.interval, this._config.interval = t) : this._config.interval = this._config.defaultInterval || this._config.interval)
            }, t._slide = function (t, e) {
                var n, i, o, r, a = this,
                    s = this._element.querySelector(x),
                    l = this._getItemIndex(s),
                    u = e || s && this._getItemByDirection(t, s),
                    f = this._getItemIndex(u),
                    d = Boolean(this._interval),
                    c = t === A ? (n = "carousel-item-left", i = "carousel-item-next", "left") : (n = "carousel-item-right", i = "carousel-item-prev", "right");
                u && h.default(u).hasClass(O) ? this._isSliding = !1 : this._triggerSlideEvent(u, c).isDefaultPrevented() || s && u && (this._isSliding = !0, d && this.pause(), this._setActiveIndicatorElement(u), this._activeElement = u, o = h.default.Event(I, {
                    relatedTarget: u,
                    direction: c,
                    from: l,
                    to: f
                }), h.default(this._element).hasClass("slide") ? (h.default(u).addClass(i), p.reflow(u), h.default(s).addClass(n), h.default(u).addClass(n), r = p.getTransitionDurationFromElement(s), h.default(s).one(p.TRANSITION_END, function () {
                    h.default(u).removeClass(n + " " + i).addClass(O), h.default(s).removeClass(O + " " + i + " " + n), a._isSliding = !1, setTimeout(function () {
                        return h.default(a._element).trigger(o)
                    }, 0)
                }).emulateTransitionEnd(r)) : (h.default(s).removeClass(O), h.default(u).addClass(O), this._isSliding = !1, h.default(this._element).trigger(o)), d && this.cycle())
            }, r._jQueryInterface = function (i) {
                return this.each(function () {
                    var t = h.default(this).data(T),
                        e = l({}, N, h.default(this).data());
                    "object" === _typeof(i) && (e = l({}, e, i));
                    var n = "string" == typeof i ? i : e.slide;
                    if (t || (t = new r(this, e), h.default(this).data(T, t)), "number" == typeof i) t.to(i);
                    else if ("string" == typeof n) {
                        if (void 0 === t[n]) throw new TypeError('No method named "' + n + '"');
                        t[n]()
                    } else e.interval && e.ride && (t.pause(), t.cycle())
                })
            }, r._dataApiClickHandler = function (t) {
                var e, n, i, o = p.getSelectorFromElement(this);
                !o || (e = h.default(o)[0]) && h.default(e).hasClass("carousel") && (n = l({}, h.default(e).data(), h.default(this).data()), (i = this.getAttribute("data-slide-to")) && (n.interval = !1), r._jQueryInterface.call(h.default(e), n), i && h.default(e).data(T).to(i), t.preventDefault())
            }, a(r, null, [{
                key: "VERSION",
                get: function () {
                    return "4.6.0"
                }
            }, {
                key: "Default",
                get: function () {
                    return N
                }
            }]), r
        }();
    h.default(document).on("click.bs.carousel.data-api", "[data-slide], [data-slide-to]", j._dataApiClickHandler), h.default(window).on("load.bs.carousel.data-api", function () {
        for (var t = [].slice.call(document.querySelectorAll('[data-ride="carousel"]')), e = 0, n = t.length; e < n; e++) {
            var i = h.default(t[e]);
            j._jQueryInterface.call(i, i.data())
        }
    }), h.default.fn[w] = j._jQueryInterface, h.default.fn[w].Constructor = j, h.default.fn[w].noConflict = function () {
        return h.default.fn[w] = S, j._jQueryInterface
    };
    var P = "collapse",
        F = "bs.collapse",
        R = h.default.fn[P],
        B = {
            toggle: !0,
            parent: ""
        },
        H = {
            toggle: "boolean",
            parent: "(string|element)"
        },
        M = "show",
        q = "collapse",
        Q = "collapsing",
        W = "collapsed",
        U = '[data-toggle="collapse"]',
        V = function () {
            function s(e, t) {
                this._isTransitioning = !1, this._element = e, this._config = this._getConfig(t), this._triggerArray = [].slice.call(document.querySelectorAll('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]'));
                for (var n = [].slice.call(document.querySelectorAll(U)), i = 0, o = n.length; i < o; i++) {
                    var r = n[i],
                        a = p.getSelectorFromElement(r),
                        s = [].slice.call(document.querySelectorAll(a)).filter(function (t) {
                            return t === e
                        });
                    null !== a && 0 < s.length && (this._selector = a, this._triggerArray.push(r))
                }
                this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle()
            }
            var t = s.prototype;
            return t.toggle = function () {
                h.default(this._element).hasClass(M) ? this.hide() : this.show()
            }, t.show = function () {
                var t, e, n, i, o, r, a = this;
                this._isTransitioning || h.default(this._element).hasClass(M) || (this._parent && 0 === (t = [].slice.call(this._parent.querySelectorAll(".show, .collapsing")).filter(function (t) {
                    return "string" == typeof a._config.parent ? t.getAttribute("data-parent") === a._config.parent : t.classList.contains(q)
                })).length && (t = null), t && (e = h.default(t).not(this._selector).data(F)) && e._isTransitioning || (n = h.default.Event("show.bs.collapse"), h.default(this._element).trigger(n), n.isDefaultPrevented() || (t && (s._jQueryInterface.call(h.default(t).not(this._selector), "hide"), e || h.default(t).data(F, null)), i = this._getDimension(), h.default(this._element).removeClass(q).addClass(Q), this._element.style[i] = 0, this._triggerArray.length && h.default(this._triggerArray).removeClass(W).attr("aria-expanded", !0), this.setTransitioning(!0), o = "scroll" + (i[0].toUpperCase() + i.slice(1)), r = p.getTransitionDurationFromElement(this._element), h.default(this._element).one(p.TRANSITION_END, function () {
                    h.default(a._element).removeClass(Q).addClass(q + " " + M), a._element.style[i] = "", a.setTransitioning(!1), h.default(a._element).trigger("shown.bs.collapse")
                }).emulateTransitionEnd(r), this._element.style[i] = this._element[o] + "px")))
            }, t.hide = function () {
                var t = this;
                if (!this._isTransitioning && h.default(this._element).hasClass(M)) {
                    var e = h.default.Event("hide.bs.collapse");
                    if (h.default(this._element).trigger(e), !e.isDefaultPrevented()) {
                        var n = this._getDimension();
                        this._element.style[n] = this._element.getBoundingClientRect()[n] + "px", p.reflow(this._element), h.default(this._element).addClass(Q).removeClass(q + " " + M);
                        var i = this._triggerArray.length;
                        if (0 < i)
                            for (var o = 0; o < i; o++) {
                                var r = this._triggerArray[o],
                                    a = p.getSelectorFromElement(r);
                                null !== a && (h.default([].slice.call(document.querySelectorAll(a))).hasClass(M) || h.default(r).addClass(W).attr("aria-expanded", !1))
                            }
                        this.setTransitioning(!0);
                        this._element.style[n] = "";
                        var s = p.getTransitionDurationFromElement(this._element);
                        h.default(this._element).one(p.TRANSITION_END, function () {
                            t.setTransitioning(!1), h.default(t._element).removeClass(Q).addClass(q).trigger("hidden.bs.collapse")
                        }).emulateTransitionEnd(s)
                    }
                }
            }, t.setTransitioning = function (t) {
                this._isTransitioning = t
            }, t.dispose = function () {
                h.default.removeData(this._element, F), this._config = null, this._parent = null, this._element = null, this._triggerArray = null, this._isTransitioning = null
            }, t._getConfig = function (t) {
                return (t = l({}, B, t)).toggle = Boolean(t.toggle), p.typeCheckConfig(P, t, H), t
            }, t._getDimension = function () {
                return h.default(this._element).hasClass("width") ? "width" : "height"
            }, t._getParent = function () {
                var t, n = this;
                p.isElement(this._config.parent) ? (t = this._config.parent, void 0 !== this._config.parent.jquery && (t = this._config.parent[0])) : t = document.querySelector(this._config.parent);
                var e = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]',
                    i = [].slice.call(t.querySelectorAll(e));
                return h.default(i).each(function (t, e) {
                    n._addAriaAndCollapsedClass(s._getTargetFromElement(e), [e])
                }), t
            }, t._addAriaAndCollapsedClass = function (t, e) {
                var n = h.default(t).hasClass(M);
                e.length && h.default(e).toggleClass(W, !n).attr("aria-expanded", n)
            }, s._getTargetFromElement = function (t) {
                var e = p.getSelectorFromElement(t);
                return e ? document.querySelector(e) : null
            }, s._jQueryInterface = function (i) {
                return this.each(function () {
                    var t = h.default(this),
                        e = t.data(F),
                        n = l({}, B, t.data(), "object" === _typeof(i) && i ? i : {});
                    if (!e && n.toggle && "string" == typeof i && /show|hide/.test(i) && (n.toggle = !1), e || (e = new s(this, n), t.data(F, e)), "string" == typeof i) {
                        if (void 0 === e[i]) throw new TypeError('No method named "' + i + '"');
                        e[i]()
                    }
                })
            }, a(s, null, [{
                key: "VERSION",
                get: function () {
                    return "4.6.0"
                }
            }, {
                key: "Default",
                get: function () {
                    return B
                }
            }]), s
        }();
    h.default(document).on("click.bs.collapse.data-api", U, function (t) {
        "A" === t.currentTarget.tagName && t.preventDefault();
        var n = h.default(this),
            e = p.getSelectorFromElement(this),
            i = [].slice.call(document.querySelectorAll(e));
        h.default(i).each(function () {
            var t = h.default(this),
                e = t.data(F) ? "toggle" : n.data();
            V._jQueryInterface.call(t, e)
        })
    }), h.default.fn[P] = V._jQueryInterface, h.default.fn[P].Constructor = V, h.default.fn[P].noConflict = function () {
        return h.default.fn[P] = R, V._jQueryInterface
    };
    var Y = "undefined" != typeof window && "undefined" != typeof document && "undefined" != typeof navigator,
        z = function () {
            for (var t = ["Edge", "Trident", "Firefox"], e = 0; e < t.length; e += 1)
                if (Y && 0 <= navigator.userAgent.indexOf(t[e])) return 1;
            return 0
        }();
    var X = Y && window.Promise ? function (t) {
        var e = !1;
        return function () {
            e || (e = !0, window.Promise.resolve().then(function () {
                e = !1, t()
            }))
        }
    } : function (t) {
        var e = !1;
        return function () {
            e || (e = !0, setTimeout(function () {
                e = !1, t()
            }, z))
        }
    };

    function K(t) {
        return t && "[object Function]" === {}.toString.call(t)
    }

    function $(t, e) {
        if (1 !== t.nodeType) return [];
        var n = t.ownerDocument.defaultView.getComputedStyle(t, null);
        return e ? n[e] : n
    }

    function G(t) {
        return "HTML" === t.nodeName ? t : t.parentNode || t.host
    }

    function J(t) {
        if (!t) return document.body;
        switch (t.nodeName) {
            case "HTML":
            case "BODY":
                return t.ownerDocument.body;
            case "#document":
                return t.body
        }
        var e = $(t),
            n = e.overflow,
            i = e.overflowX,
            o = e.overflowY;
        return /(auto|scroll|overlay)/.test(n + o + i) ? t : J(G(t))
    }

    function Z(t) {
        return t && t.referenceNode ? t.referenceNode : t
    }
    var tt = Y && !(!window.MSInputMethodContext || !document.documentMode),
        et = Y && /MSIE 10/.test(navigator.userAgent);

    function nt(t) {
        return 11 === t ? tt : 10 !== t && tt || et
    }

    function it(t) {
        if (!t) return document.documentElement;
        for (var e = nt(10) ? document.body : null, n = t.offsetParent || null; n === e && t.nextElementSibling;) n = (t = t.nextElementSibling).offsetParent;
        var i = n && n.nodeName;
        return i && "BODY" !== i && "HTML" !== i ? -1 !== ["TH", "TD", "TABLE"].indexOf(n.nodeName) && "static" === $(n, "position") ? it(n) : n : t ? t.ownerDocument.documentElement : document.documentElement
    }

    function ot(t) {
        return null !== t.parentNode ? ot(t.parentNode) : t
    }

    function rt(t, e) {
        if (!(t && t.nodeType && e && e.nodeType)) return document.documentElement;
        var n = t.compareDocumentPosition(e) & Node.DOCUMENT_POSITION_FOLLOWING,
            i = n ? t : e,
            o = n ? e : t,
            r = document.createRange();
        r.setStart(i, 0), r.setEnd(o, 0);
        var a, s, l = r.commonAncestorContainer;
        if (t !== l && e !== l || i.contains(o)) return "BODY" === (s = (a = l).nodeName) || "HTML" !== s && it(a.firstElementChild) !== a ? it(l) : l;
        var u = ot(t);
        return u.host ? rt(u.host, e) : rt(t, ot(e).host)
    }

    function at(t, e) {
        var n = "top" === (1 < arguments.length && void 0 !== e ? e : "top") ? "scrollTop" : "scrollLeft",
            i = t.nodeName;
        if ("BODY" !== i && "HTML" !== i) return t[n];
        var o = t.ownerDocument.documentElement;
        return (t.ownerDocument.scrollingElement || o)[n]
    }

    function st(t, e) {
        var n = "x" === e ? "Left" : "Top",
            i = "Left" == n ? "Right" : "Bottom";
        return parseFloat(t["border" + n + "Width"]) + parseFloat(t["border" + i + "Width"])
    }

    function lt(t, e, n, i) {
        return Math.max(e["offset" + t], e["scroll" + t], n["client" + t], n["offset" + t], n["scroll" + t], nt(10) ? parseInt(n["offset" + t]) + parseInt(i["margin" + ("Height" === t ? "Top" : "Left")]) + parseInt(i["margin" + ("Height" === t ? "Bottom" : "Right")]) : 0)
    }

    function ut(t) {
        var e = t.body,
            n = t.documentElement,
            i = nt(10) && getComputedStyle(n);
        return {
            height: lt("Height", e, n, i),
            width: lt("Width", e, n, i)
        }
    }
    var ft = function (t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        },
        dt = function (t, e, n) {
            return e && ct(t.prototype, e), n && ct(t, n), t
        };

    function ct(t, e) {
        for (var n = 0; n < e.length; n++) {
            var i = e[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
        }
    }

    function ht(t, e, n) {
        return e in t ? Object.defineProperty(t, e, {
            value: n,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : t[e] = n, t
    }
    var pt = Object.assign || function (t) {
        for (var e = 1; e < arguments.length; e++) {
            var n = arguments[e];
            for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i])
        }
        return t
    };

    function mt(t) {
        return pt({}, t, {
            right: t.left + t.width,
            bottom: t.top + t.height
        })
    }

    function gt(t) {
        var e, n, i = {};
        try {
            nt(10) ? (i = t.getBoundingClientRect(), e = at(t, "top"), n = at(t, "left"), i.top += e, i.left += n, i.bottom += e, i.right += n) : i = t.getBoundingClientRect()
        } catch (t) {}
        var o, r = {
                left: i.left,
                top: i.top,
                width: i.right - i.left,
                height: i.bottom - i.top
            },
            a = "HTML" === t.nodeName ? ut(t.ownerDocument) : {},
            s = a.width || t.clientWidth || r.width,
            l = a.height || t.clientHeight || r.height,
            u = t.offsetWidth - s,
            f = t.offsetHeight - l;
        return (u || f) && (u -= st(o = $(t), "x"), f -= st(o, "y"), r.width -= u, r.height -= f), mt(r)
    }

    function _t(t, e, n) {
        var i = 2 < arguments.length && void 0 !== n && n,
            o = nt(10),
            r = "HTML" === e.nodeName,
            a = gt(t),
            s = gt(e),
            l = J(t),
            u = $(e),
            f = parseFloat(u.borderTopWidth),
            d = parseFloat(u.borderLeftWidth);
        i && r && (s.top = Math.max(s.top, 0), s.left = Math.max(s.left, 0));
        var c, h, p = mt({
            top: a.top - s.top - f,
            left: a.left - s.left - d,
            width: a.width,
            height: a.height
        });
        return p.marginTop = 0, p.marginLeft = 0, !o && r && (c = parseFloat(u.marginTop), h = parseFloat(u.marginLeft), p.top -= f - c, p.bottom -= f - c, p.left -= d - h, p.right -= d - h, p.marginTop = c, p.marginLeft = h), (o && !i ? e.contains(l) : e === l && "BODY" !== l.nodeName) && (p = function (t, e, n) {
            var i = 2 < arguments.length && void 0 !== n && n,
                o = at(e, "top"),
                r = at(e, "left"),
                a = i ? -1 : 1;
            return t.top += o * a, t.bottom += o * a, t.left += r * a, t.right += r * a, t
        }(p, e)), p
    }

    function vt(t) {
        if (!t || !t.parentElement || nt()) return document.documentElement;
        for (var e = t.parentElement; e && "none" === $(e, "transform");) e = e.parentElement;
        return e || document.documentElement
    }

    function yt(t, e, n, i, o) {
        var r, a, s, l, u, f = 4 < arguments.length && void 0 !== o && o,
            d = {
                top: 0,
                left: 0
            },
            c = f ? vt(t) : rt(t, Z(e));
        "viewport" === i ? d = function (t, e) {
            var n = 1 < arguments.length && void 0 !== e && e,
                i = t.ownerDocument.documentElement,
                o = _t(t, i),
                r = Math.max(i.clientWidth, window.innerWidth || 0),
                a = Math.max(i.clientHeight, window.innerHeight || 0),
                s = n ? 0 : at(i),
                l = n ? 0 : at(i, "left");
            return mt({
                top: s - o.top + o.marginTop,
                left: l - o.left + o.marginLeft,
                width: r,
                height: a
            })
        }(c, f) : (r = void 0, "scrollParent" === i ? "BODY" === (r = J(G(e))).nodeName && (r = t.ownerDocument.documentElement) : r = "window" === i ? t.ownerDocument.documentElement : i, a = _t(r, c, f), "HTML" !== r.nodeName || function t(e) {
            var n = e.nodeName;
            if ("BODY" === n || "HTML" === n) return !1;
            if ("fixed" === $(e, "position")) return !0;
            var i = G(e);
            return !!i && t(i)
        }(c) ? d = a : (l = (s = ut(t.ownerDocument)).height, u = s.width, d.top += a.top - a.marginTop, d.bottom = l + a.top, d.left += a.left - a.marginLeft, d.right = u + a.left));
        var h = "number" == typeof (n = n || 0);
        return d.left += h ? n : n.left || 0, d.top += h ? n : n.top || 0, d.right -= h ? n : n.right || 0, d.bottom -= h ? n : n.bottom || 0, d
    }

    function bt(t, e, i, n, o, r) {
        var a = 5 < arguments.length && void 0 !== r ? r : 0;
        if (-1 === t.indexOf("auto")) return t;
        var s = yt(i, n, a, o),
            l = {
                top: {
                    width: s.width,
                    height: e.top - s.top
                },
                right: {
                    width: s.right - e.right,
                    height: s.height
                },
                bottom: {
                    width: s.width,
                    height: s.bottom - e.bottom
                },
                left: {
                    width: e.left - s.left,
                    height: s.height
                }
            },
            u = Object.keys(l).map(function (t) {
                return pt({
                    key: t
                }, l[t], {
                    area: (e = l[t]).width * e.height
                });
                var e
            }).sort(function (t, e) {
                return e.area - t.area
            }),
            f = u.filter(function (t) {
                var e = t.width,
                    n = t.height;
                return e >= i.clientWidth && n >= i.clientHeight
            }),
            d = 0 < f.length ? f[0].key : u[0].key,
            c = t.split("-")[1];
        return d + (c ? "-" + c : "")
    }

    function Et(t, e, n, i) {
        var o = 3 < arguments.length && void 0 !== i ? i : null;
        return _t(n, o ? vt(e) : rt(e, Z(n)), o)
    }

    function wt(t) {
        var e = t.ownerDocument.defaultView.getComputedStyle(t),
            n = parseFloat(e.marginTop || 0) + parseFloat(e.marginBottom || 0),
            i = parseFloat(e.marginLeft || 0) + parseFloat(e.marginRight || 0);
        return {
            width: t.offsetWidth + i,
            height: t.offsetHeight + n
        }
    }

    function Tt(t) {
        var e = {
            left: "right",
            right: "left",
            bottom: "top",
            top: "bottom"
        };
        return t.replace(/left|right|bottom|top/g, function (t) {
            return e[t]
        })
    }

    function Ct(t, e, n) {
        n = n.split("-")[0];
        var i = wt(t),
            o = {
                width: i.width,
                height: i.height
            },
            r = -1 !== ["right", "left"].indexOf(n),
            a = r ? "top" : "left",
            s = r ? "left" : "top",
            l = r ? "height" : "width",
            u = r ? "width" : "height";
        return o[a] = e[a] + e[l] / 2 - i[l] / 2, o[s] = n === s ? e[s] - i[u] : e[Tt(s)], o
    }

    function St(t, e) {
        return Array.prototype.find ? t.find(e) : t.filter(e)[0]
    }

    function Nt(t, n, e) {
        return (void 0 === e ? t : t.slice(0, function (t, e, n) {
            if (Array.prototype.findIndex) return t.findIndex(function (t) {
                return t[e] === n
            });
            var i = St(t, function (t) {
                return t[e] === n
            });
            return t.indexOf(i)
        }(t, "name", e))).forEach(function (t) {
            t.function && console.warn("`modifier.function` is deprecated, use `modifier.fn`!");
            var e = t.function || t.fn;
            t.enabled && K(e) && (n.offsets.popper = mt(n.offsets.popper), n.offsets.reference = mt(n.offsets.reference), n = e(n, t))
        }), n
    }

    function Dt(t, n) {
        return t.some(function (t) {
            var e = t.name;
            return t.enabled && e === n
        })
    }

    function At(t) {
        for (var e = [!1, "ms", "Webkit", "Moz", "O"], n = t.charAt(0).toUpperCase() + t.slice(1), i = 0; i < e.length; i++) {
            var o = e[i],
                r = o ? "" + o + n : t;
            if (void 0 !== document.body.style[r]) return r
        }
        return null
    }

    function kt(t) {
        var e = t.ownerDocument;
        return e ? e.defaultView : window
    }

    function It(t, e, n, i) {
        n.updateBound = i, kt(t).addEventListener("resize", n.updateBound, {
            passive: !0
        });
        var o = J(t);
        return function t(e, n, i, o) {
            var r = "BODY" === e.nodeName,
                a = r ? e.ownerDocument.defaultView : e;
            a.addEventListener(n, i, {
                passive: !0
            }), r || t(J(a.parentNode), n, i, o), o.push(a)
        }(o, "scroll", n.updateBound, n.scrollParents), n.scrollElement = o, n.eventsEnabled = !0, n
    }

    function Ot() {
        var t, e;
        this.state.eventsEnabled && (cancelAnimationFrame(this.scheduleUpdate), this.state = (t = this.reference, e = this.state, kt(t).removeEventListener("resize", e.updateBound), e.scrollParents.forEach(function (t) {
            t.removeEventListener("scroll", e.updateBound)
        }), e.updateBound = null, e.scrollParents = [], e.scrollElement = null, e.eventsEnabled = !1, e))
    }

    function xt(t) {
        return "" !== t && !isNaN(parseFloat(t)) && isFinite(t)
    }

    function Lt(n, i) {
        Object.keys(i).forEach(function (t) {
            var e = ""; - 1 !== ["width", "height", "top", "right", "bottom", "left"].indexOf(t) && xt(i[t]) && (e = "px"), n.style[t] = i[t] + e
        })
    }

    function jt(t, e) {
        function n(t) {
            return t
        }
        var i = t.offsets,
            o = i.popper,
            r = i.reference,
            a = Math.round,
            s = Math.floor,
            l = a(r.width),
            u = a(o.width),
            f = -1 !== ["left", "right"].indexOf(t.placement),
            d = -1 !== t.placement.indexOf("-"),
            c = e ? f || d || l % 2 == u % 2 ? a : s : n,
            h = e ? a : n;
        return {
            left: c(l % 2 == 1 && u % 2 == 1 && !d && e ? o.left - 1 : o.left),
            top: h(o.top),
            bottom: h(o.bottom),
            right: c(o.right)
        }
    }
    var Pt = Y && /Firefox/i.test(navigator.userAgent);

    function Ft(t, e, n) {
        var i, o, r = St(t, function (t) {
                return t.name === e
            }),
            a = !!r && t.some(function (t) {
                return t.name === n && t.enabled && t.order < r.order
            });
        return a || (i = "`" + e + "`", o = "`" + n + "`", console.warn(o + " modifier is required by " + i + " modifier in order to work, be sure to include it before " + i + "!")), a
    }
    var Rt = ["auto-start", "auto", "auto-end", "top-start", "top", "top-end", "right-start", "right", "right-end", "bottom-end", "bottom", "bottom-start", "left-end", "left", "left-start"],
        Bt = Rt.slice(3);

    function Ht(t, e) {
        var n = 1 < arguments.length && void 0 !== e && e,
            i = Bt.indexOf(t),
            o = Bt.slice(i + 1).concat(Bt.slice(0, i));
        return n ? o.reverse() : o
    }
    var Mt = "flip",
        qt = "clockwise",
        Qt = "counterclockwise";

    function Wt(t, o, r, e) {
        var a = [0, 0],
            s = -1 !== ["right", "left"].indexOf(e),
            n = t.split(/(\+|\-)/).map(function (t) {
                return t.trim()
            }),
            i = n.indexOf(St(n, function (t) {
                return -1 !== t.search(/,|\s/)
            }));
        n[i] && -1 === n[i].indexOf(",") && console.warn("Offsets separated by white space(s) are deprecated, use a comma (,) instead.");
        var l = /\s*,\s*|\s+/;
        return (-1 !== i ? [n.slice(0, i).concat([n[i].split(l)[0]]), [n[i].split(l)[1]].concat(n.slice(i + 1))] : [n]).map(function (t, e) {
            var n = (1 === e ? !s : s) ? "height" : "width",
                i = !1;
            return t.reduce(function (t, e) {
                return "" === t[t.length - 1] && -1 !== ["+", "-"].indexOf(e) ? (t[t.length - 1] = e, i = !0, t) : i ? (t[t.length - 1] += e, i = !1, t) : t.concat(e)
            }, []).map(function (t) {
                return function (t, e, n, i) {
                    var o = t.match(/((?:\-|\+)?\d*\.?\d*)(.*)/),
                        r = +o[1],
                        a = o[2];
                    if (!r) return t;
                    if (0 !== a.indexOf("%")) return "vh" !== a && "vw" !== a ? r : ("vh" === a ? Math.max(document.documentElement.clientHeight, window.innerHeight || 0) : Math.max(document.documentElement.clientWidth, window.innerWidth || 0)) / 100 * r;
                    var s = void 0;
                    switch (a) {
                        case "%p":
                            s = n;
                            break;
                        case "%":
                        case "%r":
                        default:
                            s = i
                    }
                    return mt(s)[e] / 100 * r
                }(t, n, o, r)
            })
        }).forEach(function (n, i) {
            n.forEach(function (t, e) {
                xt(t) && (a[i] += t * ("-" === n[e - 1] ? -1 : 1))
            })
        }), a
    }
    var Ut = {
            placement: "bottom",
            positionFixed: !1,
            eventsEnabled: !0,
            removeOnDestroy: !1,
            onCreate: function () {},
            onUpdate: function () {},
            modifiers: {
                shift: {
                    order: 100,
                    enabled: !0,
                    fn: function (t) {
                        var e, n, i, o, r, a, s, l = t.placement,
                            u = l.split("-")[0],
                            f = l.split("-")[1];
                        return f && (n = (e = t.offsets).reference, i = e.popper, a = (o = -1 !== ["bottom", "top"].indexOf(u)) ? "width" : "height", s = {
                            start: ht({}, r = o ? "left" : "top", n[r]),
                            end: ht({}, r, n[r] + n[a] - i[a])
                        }, t.offsets.popper = pt({}, i, s[f])), t
                    }
                },
                offset: {
                    order: 200,
                    enabled: !0,
                    fn: function (t, e) {
                        var n = e.offset,
                            i = t.placement,
                            o = t.offsets,
                            r = o.popper,
                            a = o.reference,
                            s = i.split("-")[0],
                            l = void 0,
                            l = xt(+n) ? [+n, 0] : Wt(n, r, a, s);
                        return "left" === s ? (r.top += l[0], r.left -= l[1]) : "right" === s ? (r.top += l[0], r.left += l[1]) : "top" === s ? (r.left += l[0], r.top -= l[1]) : "bottom" === s && (r.left += l[0], r.top += l[1]), t.popper = r, t
                    },
                    offset: 0
                },
                preventOverflow: {
                    order: 300,
                    enabled: !0,
                    fn: function (t, i) {
                        var e = i.boundariesElement || it(t.instance.popper);
                        t.instance.reference === e && (e = it(e));
                        var n = At("transform"),
                            o = t.instance.popper.style,
                            r = o.top,
                            a = o.left,
                            s = o[n];
                        o.top = "", o.left = "", o[n] = "";
                        var l = yt(t.instance.popper, t.instance.reference, i.padding, e, t.positionFixed);
                        o.top = r, o.left = a, o[n] = s, i.boundaries = l;
                        var u = i.priority,
                            f = t.offsets.popper,
                            d = {
                                primary: function (t) {
                                    var e = f[t];
                                    return f[t] < l[t] && !i.escapeWithReference && (e = Math.max(f[t], l[t])), ht({}, t, e)
                                },
                                secondary: function (t) {
                                    var e = "right" === t ? "left" : "top",
                                        n = f[e];
                                    return f[t] > l[t] && !i.escapeWithReference && (n = Math.min(f[e], l[t] - ("right" === t ? f.width : f.height))), ht({}, e, n)
                                }
                            };
                        return u.forEach(function (t) {
                            var e = -1 !== ["left", "top"].indexOf(t) ? "primary" : "secondary";
                            f = pt({}, f, d[e](t))
                        }), t.offsets.popper = f, t
                    },
                    priority: ["left", "right", "top", "bottom"],
                    padding: 5,
                    boundariesElement: "scrollParent"
                },
                keepTogether: {
                    order: 400,
                    enabled: !0,
                    fn: function (t) {
                        var e = t.offsets,
                            n = e.popper,
                            i = e.reference,
                            o = t.placement.split("-")[0],
                            r = Math.floor,
                            a = -1 !== ["top", "bottom"].indexOf(o),
                            s = a ? "right" : "bottom",
                            l = a ? "left" : "top",
                            u = a ? "width" : "height";
                        return n[s] < r(i[l]) && (t.offsets.popper[l] = r(i[l]) - n[u]), n[l] > r(i[s]) && (t.offsets.popper[l] = r(i[s])), t
                    }
                },
                arrow: {
                    order: 500,
                    enabled: !0,
                    fn: function (t, e) {
                        var n;
                        if (!Ft(t.instance.modifiers, "arrow", "keepTogether")) return t;
                        var i = e.element;
                        if ("string" == typeof i) {
                            if (!(i = t.instance.popper.querySelector(i))) return t
                        } else if (!t.instance.popper.contains(i)) return console.warn("WARNING: `arrow.element` must be child of its popper element!"), t;
                        var o = t.placement.split("-")[0],
                            r = t.offsets,
                            a = r.popper,
                            s = r.reference,
                            l = -1 !== ["left", "right"].indexOf(o),
                            u = l ? "height" : "width",
                            f = l ? "Top" : "Left",
                            d = f.toLowerCase(),
                            c = l ? "left" : "top",
                            h = l ? "bottom" : "right",
                            p = wt(i)[u];
                        s[h] - p < a[d] && (t.offsets.popper[d] -= a[d] - (s[h] - p)), s[d] + p > a[h] && (t.offsets.popper[d] += s[d] + p - a[h]), t.offsets.popper = mt(t.offsets.popper);
                        var m = s[d] + s[u] / 2 - p / 2,
                            g = $(t.instance.popper),
                            _ = parseFloat(g["margin" + f]),
                            v = parseFloat(g["border" + f + "Width"]),
                            y = m - t.offsets.popper[d] - _ - v,
                            y = Math.max(Math.min(a[u] - p, y), 0);
                        return t.arrowElement = i, t.offsets.arrow = (ht(n = {}, d, Math.round(y)), ht(n, c, ""), n), t
                    },
                    element: "[x-arrow]"
                },
                flip: {
                    order: 600,
                    enabled: !0,
                    fn: function (g, _) {
                        if (Dt(g.instance.modifiers, "inner")) return g;
                        if (g.flipped && g.placement === g.originalPlacement) return g;
                        var v = yt(g.instance.popper, g.instance.reference, _.padding, _.boundariesElement, g.positionFixed),
                            y = g.placement.split("-")[0],
                            b = Tt(y),
                            E = g.placement.split("-")[1] || "",
                            w = [];
                        switch (_.behavior) {
                            case Mt:
                                w = [y, b];
                                break;
                            case qt:
                                w = Ht(y);
                                break;
                            case Qt:
                                w = Ht(y, !0);
                                break;
                            default:
                                w = _.behavior
                        }
                        return w.forEach(function (t, e) {
                            if (y !== t || w.length === e + 1) return g;
                            y = g.placement.split("-")[0], b = Tt(y);
                            var n, i = g.offsets.popper,
                                o = g.offsets.reference,
                                r = Math.floor,
                                a = "left" === y && r(i.right) > r(o.left) || "right" === y && r(i.left) < r(o.right) || "top" === y && r(i.bottom) > r(o.top) || "bottom" === y && r(i.top) < r(o.bottom),
                                s = r(i.left) < r(v.left),
                                l = r(i.right) > r(v.right),
                                u = r(i.top) < r(v.top),
                                f = r(i.bottom) > r(v.bottom),
                                d = "left" === y && s || "right" === y && l || "top" === y && u || "bottom" === y && f,
                                c = -1 !== ["top", "bottom"].indexOf(y),
                                h = !!_.flipVariations && (c && "start" === E && s || c && "end" === E && l || !c && "start" === E && u || !c && "end" === E && f),
                                p = !!_.flipVariationsByContent && (c && "start" === E && l || c && "end" === E && s || !c && "start" === E && f || !c && "end" === E && u),
                                m = h || p;
                            (a || d || m) && (g.flipped = !0, (a || d) && (y = w[e + 1]), m && (E = "end" === (n = E) ? "start" : "start" === n ? "end" : n), g.placement = y + (E ? "-" + E : ""), g.offsets.popper = pt({}, g.offsets.popper, Ct(g.instance.popper, g.offsets.reference, g.placement)), g = Nt(g.instance.modifiers, g, "flip"))
                        }), g
                    },
                    behavior: "flip",
                    padding: 5,
                    boundariesElement: "viewport",
                    flipVariations: !1,
                    flipVariationsByContent: !1
                },
                inner: {
                    order: 700,
                    enabled: !1,
                    fn: function (t) {
                        var e = t.placement,
                            n = e.split("-")[0],
                            i = t.offsets,
                            o = i.popper,
                            r = i.reference,
                            a = -1 !== ["left", "right"].indexOf(n),
                            s = -1 === ["top", "left"].indexOf(n);
                        return o[a ? "left" : "top"] = r[n] - (s ? o[a ? "width" : "height"] : 0), t.placement = Tt(e), t.offsets.popper = mt(o), t
                    }
                },
                hide: {
                    order: 800,
                    enabled: !0,
                    fn: function (t) {
                        if (!Ft(t.instance.modifiers, "hide", "preventOverflow")) return t;
                        var e = t.offsets.reference,
                            n = St(t.instance.modifiers, function (t) {
                                return "preventOverflow" === t.name
                            }).boundaries;
                        if (e.bottom < n.top || e.left > n.right || e.top > n.bottom || e.right < n.left) {
                            if (!0 === t.hide) return t;
                            t.hide = !0, t.attributes["x-out-of-boundaries"] = ""
                        } else {
                            if (!1 === t.hide) return t;
                            t.hide = !1, t.attributes["x-out-of-boundaries"] = !1
                        }
                        return t
                    }
                },
                computeStyle: {
                    order: 850,
                    enabled: !0,
                    fn: function (t, e) {
                        var n = e.x,
                            i = e.y,
                            o = t.offsets.popper,
                            r = St(t.instance.modifiers, function (t) {
                                return "applyStyle" === t.name
                            }).gpuAcceleration;
                        void 0 !== r && console.warn("WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!");
                        var a, s, l = void 0 !== r ? r : e.gpuAcceleration,
                            u = it(t.instance.popper),
                            f = gt(u),
                            d = {
                                position: o.position
                            },
                            c = jt(t, window.devicePixelRatio < 2 || !Pt),
                            h = "bottom" === n ? "top" : "bottom",
                            p = "right" === i ? "left" : "right",
                            m = At("transform"),
                            g = void 0,
                            _ = void 0,
                            _ = "bottom" == h ? "HTML" === u.nodeName ? -u.clientHeight + c.bottom : -f.height + c.bottom : c.top,
                            g = "right" == p ? "HTML" === u.nodeName ? -u.clientWidth + c.right : -f.width + c.right : c.left;
                        l && m ? (d[m] = "translate3d(" + g + "px, " + _ + "px, 0)", d[h] = 0, d[p] = 0, d.willChange = "transform") : (a = "bottom" == h ? -1 : 1, s = "right" == p ? -1 : 1, d[h] = _ * a, d[p] = g * s, d.willChange = h + ", " + p);
                        var v = {
                            "x-placement": t.placement
                        };
                        return t.attributes = pt({}, v, t.attributes), t.styles = pt({}, d, t.styles), t.arrowStyles = pt({}, t.offsets.arrow, t.arrowStyles), t
                    },
                    gpuAcceleration: !0,
                    x: "bottom",
                    y: "right"
                },
                applyStyle: {
                    order: 900,
                    enabled: !0,
                    fn: function (t) {
                        var e, n;
                        return Lt(t.instance.popper, t.styles), e = t.instance.popper, n = t.attributes, Object.keys(n).forEach(function (t) {
                            !1 !== n[t] ? e.setAttribute(t, n[t]) : e.removeAttribute(t)
                        }), t.arrowElement && Object.keys(t.arrowStyles).length && Lt(t.arrowElement, t.arrowStyles), t
                    },
                    onLoad: function (t, e, n, i, o) {
                        var r = Et(o, e, t, n.positionFixed),
                            a = bt(n.placement, r, e, t, n.modifiers.flip.boundariesElement, n.modifiers.flip.padding);
                        return e.setAttribute("x-placement", a), Lt(e, {
                            position: n.positionFixed ? "fixed" : "absolute"
                        }), n
                    },
                    gpuAcceleration: void 0
                }
            }
        },
        Vt = (dt(Yt, [{
            key: "update",
            value: function () {
                return function () {
                    var t;
                    this.state.isDestroyed || ((t = {
                        instance: this,
                        styles: {},
                        arrowStyles: {},
                        attributes: {},
                        flipped: !1,
                        offsets: {}
                    }).offsets.reference = Et(this.state, this.popper, this.reference, this.options.positionFixed), t.placement = bt(this.options.placement, t.offsets.reference, this.popper, this.reference, this.options.modifiers.flip.boundariesElement, this.options.modifiers.flip.padding), t.originalPlacement = t.placement, t.positionFixed = this.options.positionFixed, t.offsets.popper = Ct(this.popper, t.offsets.reference, t.placement), t.offsets.popper.position = this.options.positionFixed ? "fixed" : "absolute", t = Nt(this.modifiers, t), this.state.isCreated ? this.options.onUpdate(t) : (this.state.isCreated = !0, this.options.onCreate(t)))
                }.call(this)
            }
        }, {
            key: "destroy",
            value: function () {
                return function () {
                    return this.state.isDestroyed = !0, Dt(this.modifiers, "applyStyle") && (this.popper.removeAttribute("x-placement"), this.popper.style.position = "", this.popper.style.top = "", this.popper.style.left = "", this.popper.style.right = "", this.popper.style.bottom = "", this.popper.style.willChange = "", this.popper.style[At("transform")] = ""), this.disableEventListeners(), this.options.removeOnDestroy && this.popper.parentNode.removeChild(this.popper), this
                }.call(this)
            }
        }, {
            key: "enableEventListeners",
            value: function () {
                return function () {
                    this.state.eventsEnabled || (this.state = It(this.reference, this.options, this.state, this.scheduleUpdate))
                }.call(this)
            }
        }, {
            key: "disableEventListeners",
            value: function () {
                return Ot.call(this)
            }
        }]), Yt);

    function Yt(t, e) {
        var n = this,
            i = 2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : {};
        ft(this, Yt), this.scheduleUpdate = function () {
            return requestAnimationFrame(n.update)
        }, this.update = X(this.update.bind(this)), this.options = pt({}, Yt.Defaults, i), this.state = {
            isDestroyed: !1,
            isCreated: !1,
            scrollParents: []
        }, this.reference = t && t.jquery ? t[0] : t, this.popper = e && e.jquery ? e[0] : e, this.options.modifiers = {}, Object.keys(pt({}, Yt.Defaults.modifiers, i.modifiers)).forEach(function (t) {
            n.options.modifiers[t] = pt({}, Yt.Defaults.modifiers[t] || {}, i.modifiers ? i.modifiers[t] : {})
        }), this.modifiers = Object.keys(this.options.modifiers).map(function (t) {
            return pt({
                name: t
            }, n.options.modifiers[t])
        }).sort(function (t, e) {
            return t.order - e.order
        }), this.modifiers.forEach(function (t) {
            t.enabled && K(t.onLoad) && t.onLoad(n.reference, n.popper, n.options, t, n.state)
        }), this.update();
        var o = this.options.eventsEnabled;
        o && this.enableEventListeners(), this.state.eventsEnabled = o
    }
    Vt.Utils = ("undefined" != typeof window ? window : global).PopperUtils, Vt.placements = Rt, Vt.Defaults = Ut;
    var zt = "dropdown",
        Xt = "bs.dropdown",
        Kt = "." + Xt,
        $t = ".data-api",
        Gt = h.default.fn[zt],
        Jt = new RegExp("38|40|27"),
        Zt = "hide" + Kt,
        te = "hidden" + Kt,
        ee = "click" + Kt + $t,
        ne = "keydown" + Kt + $t,
        ie = "disabled",
        oe = "show",
        re = "dropdown-menu-right",
        ae = '[data-toggle="dropdown"]',
        se = ".dropdown-menu",
        le = {
            offset: 0,
            flip: !0,
            boundary: "scrollParent",
            reference: "toggle",
            display: "dynamic",
            popperConfig: null
        },
        ue = {
            offset: "(number|string|function)",
            flip: "boolean",
            boundary: "(string|element)",
            reference: "(string|element)",
            display: "string",
            popperConfig: "(null|object)"
        },
        fe = function () {
            function u(t, e) {
                this._element = t, this._popper = null, this._config = this._getConfig(e), this._menu = this._getMenuElement(), this._inNavbar = this._detectNavbar(), this._addEventListeners()
            }
            var t = u.prototype;
            return t.toggle = function () {
                var t;
                this._element.disabled || h.default(this._element).hasClass(ie) || (t = h.default(this._menu).hasClass(oe), u._clearMenus(), t || this.show(!0))
            }, t.show = function (t) {
                if (void 0 === t && (t = !1), !(this._element.disabled || h.default(this._element).hasClass(ie) || h.default(this._menu).hasClass(oe))) {
                    var e = {
                            relatedTarget: this._element
                        },
                        n = h.default.Event("show.bs.dropdown", e),
                        i = u._getParentFromElement(this._element);
                    if (h.default(i).trigger(n), !n.isDefaultPrevented()) {
                        if (!this._inNavbar && t) {
                            if (void 0 === Vt) throw new TypeError("Bootstrap's dropdowns require Popper (https://popper.js.org)");
                            var o = this._element;
                            "parent" === this._config.reference ? o = i : p.isElement(this._config.reference) && (o = this._config.reference, void 0 !== this._config.reference.jquery && (o = this._config.reference[0])), "scrollParent" !== this._config.boundary && h.default(i).addClass("position-static"), this._popper = new Vt(o, this._menu, this._getPopperConfig())
                        }
                        "ontouchstart" in document.documentElement && 0 === h.default(i).closest(".navbar-nav").length && h.default(document.body).children().on("mouseover", null, h.default.noop), this._element.focus(), this._element.setAttribute("aria-expanded", !0), h.default(this._menu).toggleClass(oe), h.default(i).toggleClass(oe).trigger(h.default.Event("shown.bs.dropdown", e))
                    }
                }
            }, t.hide = function () {
                var t, e, n;
                this._element.disabled || h.default(this._element).hasClass(ie) || !h.default(this._menu).hasClass(oe) || (t = {
                    relatedTarget: this._element
                }, e = h.default.Event(Zt, t), n = u._getParentFromElement(this._element), h.default(n).trigger(e), e.isDefaultPrevented() || (this._popper && this._popper.destroy(), h.default(this._menu).toggleClass(oe), h.default(n).toggleClass(oe).trigger(h.default.Event(te, t))))
            }, t.dispose = function () {
                h.default.removeData(this._element, Xt), h.default(this._element).off(Kt), this._element = null, (this._menu = null) !== this._popper && (this._popper.destroy(), this._popper = null)
            }, t.update = function () {
                this._inNavbar = this._detectNavbar(), null !== this._popper && this._popper.scheduleUpdate()
            }, t._addEventListeners = function () {
                var e = this;
                h.default(this._element).on("click.bs.dropdown", function (t) {
                    t.preventDefault(), t.stopPropagation(), e.toggle()
                })
            }, t._getConfig = function (t) {
                return t = l({}, this.constructor.Default, h.default(this._element).data(), t), p.typeCheckConfig(zt, t, this.constructor.DefaultType), t
            }, t._getMenuElement = function () {
                var t;
                return this._menu || (t = u._getParentFromElement(this._element)) && (this._menu = t.querySelector(se)), this._menu
            }, t._getPlacement = function () {
                var t = h.default(this._element.parentNode),
                    e = "bottom-start";
                return t.hasClass("dropup") ? e = h.default(this._menu).hasClass(re) ? "top-end" : "top-start" : t.hasClass("dropright") ? e = "right-start" : t.hasClass("dropleft") ? e = "left-start" : h.default(this._menu).hasClass(re) && (e = "bottom-end"), e
            }, t._detectNavbar = function () {
                return 0 < h.default(this._element).closest(".navbar").length
            }, t._getOffset = function () {
                var e = this,
                    t = {};
                return "function" == typeof this._config.offset ? t.fn = function (t) {
                    return t.offsets = l({}, t.offsets, e._config.offset(t.offsets, e._element) || {}), t
                } : t.offset = this._config.offset, t
            }, t._getPopperConfig = function () {
                var t = {
                    placement: this._getPlacement(),
                    modifiers: {
                        offset: this._getOffset(),
                        flip: {
                            enabled: this._config.flip
                        },
                        preventOverflow: {
                            boundariesElement: this._config.boundary
                        }
                    }
                };
                return "static" === this._config.display && (t.modifiers.applyStyle = {
                    enabled: !1
                }), l({}, t, this._config.popperConfig)
            }, u._jQueryInterface = function (n) {
                return this.each(function () {
                    var t = h.default(this).data(Xt),
                        e = "object" === _typeof(n) ? n : null;
                    if (t || (t = new u(this, e), h.default(this).data(Xt, t)), "string" == typeof n) {
                        if (void 0 === t[n]) throw new TypeError('No method named "' + n + '"');
                        t[n]()
                    }
                })
            }, u._clearMenus = function (t) {
                if (!t || 3 !== t.which && ("keyup" !== t.type || 9 === t.which))
                    for (var e = [].slice.call(document.querySelectorAll(ae)), n = 0, i = e.length; n < i; n++) {
                        var o, r, a = u._getParentFromElement(e[n]),
                            s = h.default(e[n]).data(Xt),
                            l = {
                                relatedTarget: e[n]
                            };
                        t && "click" === t.type && (l.clickEvent = t), s && (o = s._menu, h.default(a).hasClass(oe) && (t && ("click" === t.type && /input|textarea/i.test(t.target.tagName) || "keyup" === t.type && 9 === t.which) && h.default.contains(a, t.target) || (r = h.default.Event(Zt, l), h.default(a).trigger(r), r.isDefaultPrevented() || ("ontouchstart" in document.documentElement && h.default(document.body).children().off("mouseover", null, h.default.noop), e[n].setAttribute("aria-expanded", "false"), s._popper && s._popper.destroy(), h.default(o).removeClass(oe), h.default(a).removeClass(oe).trigger(h.default.Event(te, l))))))
                    }
            }, u._getParentFromElement = function (t) {
                var e, n = p.getSelectorFromElement(t);
                return n && (e = document.querySelector(n)), e || t.parentNode
            }, u._dataApiKeydownHandler = function (t) {
                if ((/input|textarea/i.test(t.target.tagName) ? !(32 === t.which || 27 !== t.which && (40 !== t.which && 38 !== t.which || h.default(t.target).closest(se).length)) : Jt.test(t.which)) && !this.disabled && !h.default(this).hasClass(ie)) {
                    var e = u._getParentFromElement(this),
                        n = h.default(e).hasClass(oe);
                    if (n || 27 !== t.which) {
                        if (t.preventDefault(), t.stopPropagation(), !n || 27 === t.which || 32 === t.which) return 27 === t.which && h.default(e.querySelector(ae)).trigger("focus"), void h.default(this).trigger("click");
                        var i, o = [].slice.call(e.querySelectorAll(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)")).filter(function (t) {
                            return h.default(t).is(":visible")
                        });
                        0 !== o.length && (i = o.indexOf(t.target), 38 === t.which && 0 < i && i--, 40 === t.which && i < o.length - 1 && i++, i < 0 && (i = 0), o[i].focus())
                    }
                }
            }, a(u, null, [{
                key: "VERSION",
                get: function () {
                    return "4.6.0"
                }
            }, {
                key: "Default",
                get: function () {
                    return le
                }
            }, {
                key: "DefaultType",
                get: function () {
                    return ue
                }
            }]), u
        }();
    h.default(document).on(ne, ae, fe._dataApiKeydownHandler).on(ne, se, fe._dataApiKeydownHandler).on(ee + " keyup.bs.dropdown.data-api", fe._clearMenus).on(ee, ae, function (t) {
        t.preventDefault(), t.stopPropagation(), fe._jQueryInterface.call(h.default(this), "toggle")
    }).on(ee, ".dropdown form", function (t) {
        t.stopPropagation()
    }), h.default.fn[zt] = fe._jQueryInterface, h.default.fn[zt].Constructor = fe, h.default.fn[zt].noConflict = function () {
        return h.default.fn[zt] = Gt, fe._jQueryInterface
    };
    var de = "modal",
        ce = "bs.modal",
        he = "." + ce,
        pe = h.default.fn[de],
        me = {
            backdrop: !0,
            keyboard: !0,
            focus: !0,
            show: !0
        },
        ge = {
            backdrop: "(boolean|string)",
            keyboard: "boolean",
            focus: "boolean",
            show: "boolean"
        },
        _e = "hidden" + he,
        ve = "show" + he,
        ye = "focusin" + he,
        be = "resize" + he,
        Ee = "click.dismiss" + he,
        we = "keydown.dismiss" + he,
        Te = "mousedown.dismiss" + he,
        Ce = "modal-open",
        Se = "fade",
        Ne = "show",
        De = "modal-static",
        Ae = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
        ke = ".sticky-top",
        Ie = function () {
            function o(t, e) {
                this._config = this._getConfig(e), this._element = t, this._dialog = t.querySelector(".modal-dialog"), this._backdrop = null, this._isShown = !1, this._isBodyOverflowing = !1, this._ignoreBackdropClick = !1, this._isTransitioning = !1, this._scrollbarWidth = 0
            }
            var t = o.prototype;
            return t.toggle = function (t) {
                return this._isShown ? this.hide() : this.show(t)
            }, t.show = function (t) {
                var e, n = this;
                this._isShown || this._isTransitioning || (h.default(this._element).hasClass(Se) && (this._isTransitioning = !0), e = h.default.Event(ve, {
                    relatedTarget: t
                }), h.default(this._element).trigger(e), this._isShown || e.isDefaultPrevented() || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), this._adjustDialog(), this._setEscapeEvent(), this._setResizeEvent(), h.default(this._element).on(Ee, '[data-dismiss="modal"]', function (t) {
                    return n.hide(t)
                }), h.default(this._dialog).on(Te, function () {
                    h.default(n._element).one("mouseup.dismiss.bs.modal", function (t) {
                        h.default(t.target).is(n._element) && (n._ignoreBackdropClick = !0)
                    })
                }), this._showBackdrop(function () {
                    return n._showElement(t)
                })))
            }, t.hide = function (t) {
                var e, n, i, o = this;
                t && t.preventDefault(), this._isShown && !this._isTransitioning && (e = h.default.Event("hide.bs.modal"), h.default(this._element).trigger(e), this._isShown && !e.isDefaultPrevented() && (this._isShown = !1, (n = h.default(this._element).hasClass(Se)) && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), h.default(document).off(ye), h.default(this._element).removeClass(Ne), h.default(this._element).off(Ee), h.default(this._dialog).off(Te), n ? (i = p.getTransitionDurationFromElement(this._element), h.default(this._element).one(p.TRANSITION_END, function (t) {
                    return o._hideModal(t)
                }).emulateTransitionEnd(i)) : this._hideModal()))
            }, t.dispose = function () {
                [window, this._element, this._dialog].forEach(function (t) {
                    return h.default(t).off(he)
                }), h.default(document).off(ye), h.default.removeData(this._element, ce), this._config = null, this._element = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._isTransitioning = null, this._scrollbarWidth = null
            }, t.handleUpdate = function () {
                this._adjustDialog()
            }, t._getConfig = function (t) {
                return t = l({}, me, t), p.typeCheckConfig(de, t, ge), t
            }, t._triggerBackdropTransition = function () {
                var t, e, n = this,
                    i = h.default.Event("hidePrevented.bs.modal");
                h.default(this._element).trigger(i), i.isDefaultPrevented() || ((t = this._element.scrollHeight > document.documentElement.clientHeight) || (this._element.style.overflowY = "hidden"), this._element.classList.add(De), e = p.getTransitionDurationFromElement(this._dialog), h.default(this._element).off(p.TRANSITION_END), h.default(this._element).one(p.TRANSITION_END, function () {
                    n._element.classList.remove(De), t || h.default(n._element).one(p.TRANSITION_END, function () {
                        n._element.style.overflowY = ""
                    }).emulateTransitionEnd(n._element, e)
                }).emulateTransitionEnd(e), this._element.focus())
            }, t._showElement = function (t) {
                var e = this,
                    n = h.default(this._element).hasClass(Se),
                    i = this._dialog ? this._dialog.querySelector(".modal-body") : null;
                this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0), this._element.setAttribute("role", "dialog"), h.default(this._dialog).hasClass("modal-dialog-scrollable") && i ? i.scrollTop = 0 : this._element.scrollTop = 0, n && p.reflow(this._element), h.default(this._element).addClass(Ne), this._config.focus && this._enforceFocus();

                function o() {
                    e._config.focus && e._element.focus(), e._isTransitioning = !1, h.default(e._element).trigger(a)
                }
                var r, a = h.default.Event("shown.bs.modal", {
                    relatedTarget: t
                });
                n ? (r = p.getTransitionDurationFromElement(this._dialog), h.default(this._dialog).one(p.TRANSITION_END, o).emulateTransitionEnd(r)) : o()
            }, t._enforceFocus = function () {
                var e = this;
                h.default(document).off(ye).on(ye, function (t) {
                    document !== t.target && e._element !== t.target && 0 === h.default(e._element).has(t.target).length && e._element.focus()
                })
            }, t._setEscapeEvent = function () {
                var e = this;
                this._isShown ? h.default(this._element).on(we, function (t) {
                    e._config.keyboard && 27 === t.which ? (t.preventDefault(), e.hide()) : e._config.keyboard || 27 !== t.which || e._triggerBackdropTransition()
                }) : this._isShown || h.default(this._element).off(we)
            }, t._setResizeEvent = function () {
                var e = this;
                this._isShown ? h.default(window).on(be, function (t) {
                    return e.handleUpdate(t)
                }) : h.default(window).off(be)
            }, t._hideModal = function () {
                var t = this;
                this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._element.removeAttribute("aria-modal"), this._element.removeAttribute("role"), this._isTransitioning = !1, this._showBackdrop(function () {
                    h.default(document.body).removeClass(Ce), t._resetAdjustments(), t._resetScrollbar(), h.default(t._element).trigger(_e)
                })
            }, t._removeBackdrop = function () {
                this._backdrop && (h.default(this._backdrop).remove(), this._backdrop = null)
            }, t._showBackdrop = function (t) {
                var e, n, i = this,
                    o = h.default(this._element).hasClass(Se) ? Se : "";
                if (this._isShown && this._config.backdrop) {
                    if (this._backdrop = document.createElement("div"), this._backdrop.className = "modal-backdrop", o && this._backdrop.classList.add(o), h.default(this._backdrop).appendTo(document.body), h.default(this._element).on(Ee, function (t) {
                            i._ignoreBackdropClick ? i._ignoreBackdropClick = !1 : t.target === t.currentTarget && ("static" === i._config.backdrop ? i._triggerBackdropTransition() : i.hide())
                        }), o && p.reflow(this._backdrop), h.default(this._backdrop).addClass(Ne), !t) return;
                    if (!o) return void t();
                    var r = p.getTransitionDurationFromElement(this._backdrop);
                    h.default(this._backdrop).one(p.TRANSITION_END, t).emulateTransitionEnd(r)
                } else {
                    !this._isShown && this._backdrop ? (h.default(this._backdrop).removeClass(Ne), e = function () {
                        i._removeBackdrop(), t && t()
                    }, h.default(this._element).hasClass(Se) ? (n = p.getTransitionDurationFromElement(this._backdrop), h.default(this._backdrop).one(p.TRANSITION_END, e).emulateTransitionEnd(n)) : e()) : t && t()
                }
            }, t._adjustDialog = function () {
                var t = this._element.scrollHeight > document.documentElement.clientHeight;
                !this._isBodyOverflowing && t && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !t && (this._element.style.paddingRight = this._scrollbarWidth + "px")
            }, t._resetAdjustments = function () {
                this._element.style.paddingLeft = "", this._element.style.paddingRight = ""
            }, t._checkScrollbar = function () {
                var t = document.body.getBoundingClientRect();
                this._isBodyOverflowing = Math.round(t.left + t.right) < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth()
            }, t._setScrollbar = function () {
                var t, e, n, i, o = this;
                this._isBodyOverflowing && (t = [].slice.call(document.querySelectorAll(Ae)), e = [].slice.call(document.querySelectorAll(ke)), h.default(t).each(function (t, e) {
                    var n = e.style.paddingRight,
                        i = h.default(e).css("padding-right");
                    h.default(e).data("padding-right", n).css("padding-right", parseFloat(i) + o._scrollbarWidth + "px")
                }), h.default(e).each(function (t, e) {
                    var n = e.style.marginRight,
                        i = h.default(e).css("margin-right");
                    h.default(e).data("margin-right", n).css("margin-right", parseFloat(i) - o._scrollbarWidth + "px")
                }), n = document.body.style.paddingRight, i = h.default(document.body).css("padding-right"), h.default(document.body).data("padding-right", n).css("padding-right", parseFloat(i) + this._scrollbarWidth + "px")), h.default(document.body).addClass(Ce)
            }, t._resetScrollbar = function () {
                var t = [].slice.call(document.querySelectorAll(Ae));
                h.default(t).each(function (t, e) {
                    var n = h.default(e).data("padding-right");
                    h.default(e).removeData("padding-right"), e.style.paddingRight = n || ""
                });
                var e = [].slice.call(document.querySelectorAll(ke));
                h.default(e).each(function (t, e) {
                    var n = h.default(e).data("margin-right");
                    void 0 !== n && h.default(e).css("margin-right", n).removeData("margin-right")
                });
                var n = h.default(document.body).data("padding-right");
                h.default(document.body).removeData("padding-right"), document.body.style.paddingRight = n || ""
            }, t._getScrollbarWidth = function () {
                var t = document.createElement("div");
                t.className = "modal-scrollbar-measure", document.body.appendChild(t);
                var e = t.getBoundingClientRect().width - t.clientWidth;
                return document.body.removeChild(t), e
            }, o._jQueryInterface = function (n, i) {
                return this.each(function () {
                    var t = h.default(this).data(ce),
                        e = l({}, me, h.default(this).data(), "object" === _typeof(n) && n ? n : {});
                    if (t || (t = new o(this, e), h.default(this).data(ce, t)), "string" == typeof n) {
                        if (void 0 === t[n]) throw new TypeError('No method named "' + n + '"');
                        t[n](i)
                    } else e.show && t.show(i)
                })
            }, a(o, null, [{
                key: "VERSION",
                get: function () {
                    return "4.6.0"
                }
            }, {
                key: "Default",
                get: function () {
                    return me
                }
            }]), o
        }();
    h.default(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function (t) {
        var e, n = this,
            i = p.getSelectorFromElement(this);
        i && (e = document.querySelector(i));
        var o = h.default(e).data(ce) ? "toggle" : l({}, h.default(e).data(), h.default(this).data());
        "A" !== this.tagName && "AREA" !== this.tagName || t.preventDefault();
        var r = h.default(e).one(ve, function (t) {
            t.isDefaultPrevented() || r.one(_e, function () {
                h.default(n).is(":visible") && n.focus()
            })
        });
        Ie._jQueryInterface.call(h.default(e), o, this)
    }), h.default.fn[de] = Ie._jQueryInterface, h.default.fn[de].Constructor = Ie, h.default.fn[de].noConflict = function () {
        return h.default.fn[de] = pe, Ie._jQueryInterface
    };
    var Oe = ["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"],
        xe = {
            "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i],
            a: ["target", "href", "title", "rel"],
            area: [],
            b: [],
            br: [],
            col: [],
            code: [],
            div: [],
            em: [],
            hr: [],
            h1: [],
            h2: [],
            h3: [],
            h4: [],
            h5: [],
            h6: [],
            i: [],
            img: ["src", "srcset", "alt", "title", "width", "height"],
            li: [],
            ol: [],
            p: [],
            pre: [],
            s: [],
            small: [],
            span: [],
            sub: [],
            sup: [],
            strong: [],
            u: [],
            ul: []
        },
        Le = /^(?:(?:https?|mailto|ftp|tel|file):|[^#&/:?]*(?:[#/?]|$))/gi,
        je = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i;

    function Pe(t, r, e) {
        if (0 === t.length) return t;
        if (e && "function" == typeof e) return e(t);
        for (var n = (new window.DOMParser).parseFromString(t, "text/html"), a = Object.keys(r), s = [].slice.call(n.body.querySelectorAll("*")), i = function (t) {
                var e = s[t],
                    n = e.nodeName.toLowerCase();
                if (-1 === a.indexOf(e.nodeName.toLowerCase())) return e.parentNode.removeChild(e), "continue";
                var i = [].slice.call(e.attributes),
                    o = [].concat(r["*"] || [], r[n] || []);
                i.forEach(function (t) {
                    ! function (t, e) {
                        var n = t.nodeName.toLowerCase();
                        if (-1 !== e.indexOf(n)) return -1 === Oe.indexOf(n) || Boolean(t.nodeValue.match(Le) || t.nodeValue.match(je));
                        for (var i = e.filter(function (t) {
                                return t instanceof RegExp
                            }), o = 0, r = i.length; o < r; o++)
                            if (n.match(i[o])) return 1
                    }(t, o) && e.removeAttribute(t.nodeName)
                })
            }, o = 0, l = s.length; o < l; o++) i(o);
        return n.body.innerHTML
    }
    var Fe = "tooltip",
        Re = "bs.tooltip",
        Be = "." + Re,
        He = h.default.fn[Fe],
        Me = "bs-tooltip",
        qe = new RegExp("(^|\\s)" + Me + "\\S+", "g"),
        Qe = ["sanitize", "whiteList", "sanitizeFn"],
        We = {
            animation: "boolean",
            template: "string",
            title: "(string|element|function)",
            trigger: "string",
            delay: "(number|object)",
            html: "boolean",
            selector: "(string|boolean)",
            placement: "(string|function)",
            offset: "(number|string|function)",
            container: "(string|element|boolean)",
            fallbackPlacement: "(string|array)",
            boundary: "(string|element)",
            customClass: "(string|function)",
            sanitize: "boolean",
            sanitizeFn: "(null|function)",
            whiteList: "object",
            popperConfig: "(null|object)"
        },
        Ue = {
            AUTO: "auto",
            TOP: "top",
            RIGHT: "right",
            BOTTOM: "bottom",
            LEFT: "left"
        },
        Ve = {
            animation: !0,
            template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
            trigger: "hover focus",
            title: "",
            delay: 0,
            html: !1,
            selector: !1,
            placement: "top",
            offset: 0,
            container: !1,
            fallbackPlacement: "flip",
            boundary: "scrollParent",
            customClass: "",
            sanitize: !0,
            sanitizeFn: null,
            whiteList: xe,
            popperConfig: null
        },
        Ye = "show",
        ze = {
            HIDE: "hide" + Be,
            HIDDEN: "hidden" + Be,
            SHOW: "show" + Be,
            SHOWN: "shown" + Be,
            INSERTED: "inserted" + Be,
            CLICK: "click" + Be,
            FOCUSIN: "focusin" + Be,
            FOCUSOUT: "focusout" + Be,
            MOUSEENTER: "mouseenter" + Be,
            MOUSELEAVE: "mouseleave" + Be
        },
        Xe = "fade",
        Ke = "show",
        $e = "hover",
        Ge = "focus",
        Je = function () {
            function o(t, e) {
                if (void 0 === Vt) throw new TypeError("Bootstrap's tooltips require Popper (https://popper.js.org)");
                this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._popper = null, this.element = t, this.config = this._getConfig(e), this.tip = null, this._setListeners()
            }
            var t = o.prototype;
            return t.enable = function () {
                this._isEnabled = !0
            }, t.disable = function () {
                this._isEnabled = !1
            }, t.toggleEnabled = function () {
                this._isEnabled = !this._isEnabled
            }, t.toggle = function (t) {
                if (this._isEnabled)
                    if (t) {
                        var e = this.constructor.DATA_KEY,
                            n = h.default(t.currentTarget).data(e);
                        n || (n = new this.constructor(t.currentTarget, this._getDelegateConfig()), h.default(t.currentTarget).data(e, n)), n._activeTrigger.click = !n._activeTrigger.click, n._isWithActiveTrigger() ? n._enter(null, n) : n._leave(null, n)
                    } else {
                        if (h.default(this.getTipElement()).hasClass(Ke)) return void this._leave(null, this);
                        this._enter(null, this)
                    }
            }, t.dispose = function () {
                clearTimeout(this._timeout), h.default.removeData(this.element, this.constructor.DATA_KEY), h.default(this.element).off(this.constructor.EVENT_KEY), h.default(this.element).closest(".modal").off("hide.bs.modal", this._hideModalHandler), this.tip && h.default(this.tip).remove(), this._isEnabled = null, this._timeout = null, this._hoverState = null, this._activeTrigger = null, this._popper && this._popper.destroy(), this._popper = null, this.element = null, this.config = null, this.tip = null
            }, t.show = function () {
                var e = this;
                if ("none" === h.default(this.element).css("display")) throw new Error("Please use show on visible elements");
                var t = h.default.Event(this.constructor.Event.SHOW);
                if (this.isWithContent() && this._isEnabled) {
                    h.default(this.element).trigger(t);
                    var n = p.findShadowRoot(this.element),
                        i = h.default.contains(null !== n ? n : this.element.ownerDocument.documentElement, this.element);
                    if (t.isDefaultPrevented() || !i) return;
                    var o = this.getTipElement(),
                        r = p.getUID(this.constructor.NAME);
                    o.setAttribute("id", r), this.element.setAttribute("aria-describedby", r), this.setContent(), this.config.animation && h.default(o).addClass(Xe);
                    var a = "function" == typeof this.config.placement ? this.config.placement.call(this, o, this.element) : this.config.placement,
                        s = this._getAttachment(a);
                    this.addAttachmentClass(s);
                    var l = this._getContainer();
                    h.default(o).data(this.constructor.DATA_KEY, this), h.default.contains(this.element.ownerDocument.documentElement, this.tip) || h.default(o).appendTo(l), h.default(this.element).trigger(this.constructor.Event.INSERTED), this._popper = new Vt(this.element, o, this._getPopperConfig(s)), h.default(o).addClass(Ke), h.default(o).addClass(this.config.customClass), "ontouchstart" in document.documentElement && h.default(document.body).children().on("mouseover", null, h.default.noop);
                    var u, f = function () {
                        e.config.animation && e._fixTransition();
                        var t = e._hoverState;
                        e._hoverState = null, h.default(e.element).trigger(e.constructor.Event.SHOWN), "out" === t && e._leave(null, e)
                    };
                    h.default(this.tip).hasClass(Xe) ? (u = p.getTransitionDurationFromElement(this.tip), h.default(this.tip).one(p.TRANSITION_END, f).emulateTransitionEnd(u)) : f()
                }
            }, t.hide = function (t) {
                function e() {
                    i._hoverState !== Ye && o.parentNode && o.parentNode.removeChild(o), i._cleanTipClass(), i.element.removeAttribute("aria-describedby"), h.default(i.element).trigger(i.constructor.Event.HIDDEN), null !== i._popper && i._popper.destroy(), t && t()
                }
                var n, i = this,
                    o = this.getTipElement(),
                    r = h.default.Event(this.constructor.Event.HIDE);
                h.default(this.element).trigger(r), r.isDefaultPrevented() || (h.default(o).removeClass(Ke), "ontouchstart" in document.documentElement && h.default(document.body).children().off("mouseover", null, h.default.noop), this._activeTrigger.click = !1, this._activeTrigger[Ge] = !1, this._activeTrigger[$e] = !1, h.default(this.tip).hasClass(Xe) ? (n = p.getTransitionDurationFromElement(o), h.default(o).one(p.TRANSITION_END, e).emulateTransitionEnd(n)) : e(), this._hoverState = "")
            }, t.update = function () {
                null !== this._popper && this._popper.scheduleUpdate()
            }, t.isWithContent = function () {
                return Boolean(this.getTitle())
            }, t.addAttachmentClass = function (t) {
                h.default(this.getTipElement()).addClass(Me + "-" + t)
            }, t.getTipElement = function () {
                return this.tip = this.tip || h.default(this.config.template)[0], this.tip
            }, t.setContent = function () {
                var t = this.getTipElement();
                this.setElementContent(h.default(t.querySelectorAll(".tooltip-inner")), this.getTitle()), h.default(t).removeClass(Xe + " " + Ke)
            }, t.setElementContent = function (t, e) {
                "object" !== _typeof(e) || !e.nodeType && !e.jquery ? this.config.html ? (this.config.sanitize && (e = Pe(e, this.config.whiteList, this.config.sanitizeFn)), t.html(e)) : t.text(e) : this.config.html ? h.default(e).parent().is(t) || t.empty().append(e) : t.text(h.default(e).text())
            }, t.getTitle = function () {
                return this.element.getAttribute("data-original-title") || ("function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title)
            }, t._getPopperConfig = function (t) {
                var e = this;
                return l({}, {
                    placement: t,
                    modifiers: {
                        offset: this._getOffset(),
                        flip: {
                            behavior: this.config.fallbackPlacement
                        },
                        arrow: {
                            element: ".arrow"
                        },
                        preventOverflow: {
                            boundariesElement: this.config.boundary
                        }
                    },
                    onCreate: function (t) {
                        t.originalPlacement !== t.placement && e._handlePopperPlacementChange(t)
                    },
                    onUpdate: function (t) {
                        return e._handlePopperPlacementChange(t)
                    }
                }, this.config.popperConfig)
            }, t._getOffset = function () {
                var e = this,
                    t = {};
                return "function" == typeof this.config.offset ? t.fn = function (t) {
                    return t.offsets = l({}, t.offsets, e.config.offset(t.offsets, e.element) || {}), t
                } : t.offset = this.config.offset, t
            }, t._getContainer = function () {
                return !1 === this.config.container ? document.body : p.isElement(this.config.container) ? h.default(this.config.container) : h.default(document).find(this.config.container)
            }, t._getAttachment = function (t) {
                return Ue[t.toUpperCase()]
            }, t._setListeners = function () {
                var i = this;
                this.config.trigger.split(" ").forEach(function (t) {
                    var e, n;
                    "click" === t ? h.default(i.element).on(i.constructor.Event.CLICK, i.config.selector, function (t) {
                        return i.toggle(t)
                    }) : "manual" !== t && (e = t === $e ? i.constructor.Event.MOUSEENTER : i.constructor.Event.FOCUSIN, n = t === $e ? i.constructor.Event.MOUSELEAVE : i.constructor.Event.FOCUSOUT, h.default(i.element).on(e, i.config.selector, function (t) {
                        return i._enter(t)
                    }).on(n, i.config.selector, function (t) {
                        return i._leave(t)
                    }))
                }), this._hideModalHandler = function () {
                    i.element && i.hide()
                }, h.default(this.element).closest(".modal").on("hide.bs.modal", this._hideModalHandler), this.config.selector ? this.config = l({}, this.config, {
                    trigger: "manual",
                    selector: ""
                }) : this._fixTitle()
            }, t._fixTitle = function () {
                var t = _typeof(this.element.getAttribute("data-original-title"));
                !this.element.getAttribute("title") && "string" === t || (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""))
            }, t._enter = function (t, e) {
                var n = this.constructor.DATA_KEY;
                (e = e || h.default(t.currentTarget).data(n)) || (e = new this.constructor(t.currentTarget, this._getDelegateConfig()), h.default(t.currentTarget).data(n, e)), t && (e._activeTrigger["focusin" === t.type ? Ge : $e] = !0), h.default(e.getTipElement()).hasClass(Ke) || e._hoverState === Ye ? e._hoverState = Ye : (clearTimeout(e._timeout), e._hoverState = Ye, e.config.delay && e.config.delay.show ? e._timeout = setTimeout(function () {
                    e._hoverState === Ye && e.show()
                }, e.config.delay.show) : e.show())
            }, t._leave = function (t, e) {
                var n = this.constructor.DATA_KEY;
                (e = e || h.default(t.currentTarget).data(n)) || (e = new this.constructor(t.currentTarget, this._getDelegateConfig()), h.default(t.currentTarget).data(n, e)), t && (e._activeTrigger["focusout" === t.type ? Ge : $e] = !1), e._isWithActiveTrigger() || (clearTimeout(e._timeout), e._hoverState = "out", e.config.delay && e.config.delay.hide ? e._timeout = setTimeout(function () {
                    "out" === e._hoverState && e.hide()
                }, e.config.delay.hide) : e.hide())
            }, t._isWithActiveTrigger = function () {
                for (var t in this._activeTrigger)
                    if (this._activeTrigger[t]) return !0;
                return !1
            }, t._getConfig = function (t) {
                var e = h.default(this.element).data();
                return Object.keys(e).forEach(function (t) {
                    -1 !== Qe.indexOf(t) && delete e[t]
                }), "number" == typeof (t = l({}, this.constructor.Default, e, "object" === _typeof(t) && t ? t : {})).delay && (t.delay = {
                    show: t.delay,
                    hide: t.delay
                }), "number" == typeof t.title && (t.title = t.title.toString()), "number" == typeof t.content && (t.content = t.content.toString()), p.typeCheckConfig(Fe, t, this.constructor.DefaultType), t.sanitize && (t.template = Pe(t.template, t.whiteList, t.sanitizeFn)), t
            }, t._getDelegateConfig = function () {
                var t = {};
                if (this.config)
                    for (var e in this.config) this.constructor.Default[e] !== this.config[e] && (t[e] = this.config[e]);
                return t
            }, t._cleanTipClass = function () {
                var t = h.default(this.getTipElement()),
                    e = t.attr("class").match(qe);
                null !== e && e.length && t.removeClass(e.join(""))
            }, t._handlePopperPlacementChange = function (t) {
                this.tip = t.instance.popper, this._cleanTipClass(), this.addAttachmentClass(this._getAttachment(t.placement))
            }, t._fixTransition = function () {
                var t = this.getTipElement(),
                    e = this.config.animation;
                null === t.getAttribute("x-placement") && (h.default(t).removeClass(Xe), this.config.animation = !1, this.hide(), this.show(), this.config.animation = e)
            }, o._jQueryInterface = function (i) {
                return this.each(function () {
                    var t = h.default(this),
                        e = t.data(Re),
                        n = "object" === _typeof(i) && i;
                    if ((e || !/dispose|hide/.test(i)) && (e || (e = new o(this, n), t.data(Re, e)), "string" == typeof i)) {
                        if (void 0 === e[i]) throw new TypeError('No method named "' + i + '"');
                        e[i]()
                    }
                })
            }, a(o, null, [{
                key: "VERSION",
                get: function () {
                    return "4.6.0"
                }
            }, {
                key: "Default",
                get: function () {
                    return Ve
                }
            }, {
                key: "NAME",
                get: function () {
                    return Fe
                }
            }, {
                key: "DATA_KEY",
                get: function () {
                    return Re
                }
            }, {
                key: "Event",
                get: function () {
                    return ze
                }
            }, {
                key: "EVENT_KEY",
                get: function () {
                    return Be
                }
            }, {
                key: "DefaultType",
                get: function () {
                    return We
                }
            }]), o
        }();
    h.default.fn[Fe] = Je._jQueryInterface, h.default.fn[Fe].Constructor = Je, h.default.fn[Fe].noConflict = function () {
        return h.default.fn[Fe] = He, Je._jQueryInterface
    };
    var Ze = "popover",
        tn = "bs.popover",
        en = "." + tn,
        nn = h.default.fn[Ze],
        on = "bs-popover",
        rn = new RegExp("(^|\\s)" + on + "\\S+", "g"),
        an = l({}, Je.Default, {
            placement: "right",
            trigger: "click",
            content: "",
            template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        }),
        sn = l({}, Je.DefaultType, {
            content: "(string|element|function)"
        }),
        ln = {
            HIDE: "hide" + en,
            HIDDEN: "hidden" + en,
            SHOW: "show" + en,
            SHOWN: "shown" + en,
            INSERTED: "inserted" + en,
            CLICK: "click" + en,
            FOCUSIN: "focusin" + en,
            FOCUSOUT: "focusout" + en,
            MOUSEENTER: "mouseenter" + en,
            MOUSELEAVE: "mouseleave" + en
        },
        un = function (t) {
            var e, n;

            function i() {
                return t.apply(this, arguments) || this
            }
            n = t, (e = i).prototype = Object.create(n.prototype), (e.prototype.constructor = e).__proto__ = n;
            var o = i.prototype;
            return o.isWithContent = function () {
                return this.getTitle() || this._getContent()
            }, o.addAttachmentClass = function (t) {
                h.default(this.getTipElement()).addClass(on + "-" + t)
            }, o.getTipElement = function () {
                return this.tip = this.tip || h.default(this.config.template)[0], this.tip
            }, o.setContent = function () {
                var t = h.default(this.getTipElement());
                this.setElementContent(t.find(".popover-header"), this.getTitle());
                var e = this._getContent();
                "function" == typeof e && (e = e.call(this.element)), this.setElementContent(t.find(".popover-body"), e), t.removeClass("fade show")
            }, o._getContent = function () {
                return this.element.getAttribute("data-content") || this.config.content
            }, o._cleanTipClass = function () {
                var t = h.default(this.getTipElement()),
                    e = t.attr("class").match(rn);
                null !== e && 0 < e.length && t.removeClass(e.join(""))
            }, i._jQueryInterface = function (n) {
                return this.each(function () {
                    var t = h.default(this).data(tn),
                        e = "object" === _typeof(n) ? n : null;
                    if ((t || !/dispose|hide/.test(n)) && (t || (t = new i(this, e), h.default(this).data(tn, t)), "string" == typeof n)) {
                        if (void 0 === t[n]) throw new TypeError('No method named "' + n + '"');
                        t[n]()
                    }
                })
            }, a(i, null, [{
                key: "VERSION",
                get: function () {
                    return "4.6.0"
                }
            }, {
                key: "Default",
                get: function () {
                    return an
                }
            }, {
                key: "NAME",
                get: function () {
                    return Ze
                }
            }, {
                key: "DATA_KEY",
                get: function () {
                    return tn
                }
            }, {
                key: "Event",
                get: function () {
                    return ln
                }
            }, {
                key: "EVENT_KEY",
                get: function () {
                    return en
                }
            }, {
                key: "DefaultType",
                get: function () {
                    return sn
                }
            }]), i
        }(Je);
    h.default.fn[Ze] = un._jQueryInterface, h.default.fn[Ze].Constructor = un, h.default.fn[Ze].noConflict = function () {
        return h.default.fn[Ze] = nn, un._jQueryInterface
    };
    var fn = "scrollspy",
        dn = "bs.scrollspy",
        cn = "." + dn,
        hn = h.default.fn[fn],
        pn = {
            offset: 10,
            method: "auto",
            target: ""
        },
        mn = {
            offset: "number",
            method: "string",
            target: "(string|element)"
        },
        gn = "active",
        _n = ".nav, .list-group",
        vn = ".nav-link",
        yn = ".list-group-item",
        bn = "position",
        En = function () {
            function i(t, e) {
                var n = this;
                this._element = t, this._scrollElement = "BODY" === t.tagName ? window : t, this._config = this._getConfig(e), this._selector = this._config.target + " " + vn + "," + this._config.target + " " + yn + "," + this._config.target + " .dropdown-item", this._offsets = [], this._targets = [], this._activeTarget = null, this._scrollHeight = 0, h.default(this._scrollElement).on("scroll.bs.scrollspy", function (t) {
                    return n._process(t)
                }), this.refresh(), this._process()
            }
            var t = i.prototype;
            return t.refresh = function () {
                var e = this,
                    t = this._scrollElement === this._scrollElement.window ? "offset" : bn,
                    o = "auto" === this._config.method ? t : this._config.method,
                    r = o === bn ? this._getScrollTop() : 0;
                this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), [].slice.call(document.querySelectorAll(this._selector)).map(function (t) {
                    var e, n = p.getSelectorFromElement(t);
                    if (n && (e = document.querySelector(n)), e) {
                        var i = e.getBoundingClientRect();
                        if (i.width || i.height) return [h.default(e)[o]().top + r, n]
                    }
                    return null
                }).filter(function (t) {
                    return t
                }).sort(function (t, e) {
                    return t[0] - e[0]
                }).forEach(function (t) {
                    e._offsets.push(t[0]), e._targets.push(t[1])
                })
            }, t.dispose = function () {
                h.default.removeData(this._element, dn), h.default(this._scrollElement).off(cn), this._element = null, this._scrollElement = null, this._config = null, this._selector = null, this._offsets = null, this._targets = null, this._activeTarget = null, this._scrollHeight = null
            }, t._getConfig = function (t) {
                var e;
                return "string" != typeof (t = l({}, pn, "object" === _typeof(t) && t ? t : {})).target && p.isElement(t.target) && ((e = h.default(t.target).attr("id")) || (e = p.getUID(fn), h.default(t.target).attr("id", e)), t.target = "#" + e), p.typeCheckConfig(fn, t, mn), t
            }, t._getScrollTop = function () {
                return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop
            }, t._getScrollHeight = function () {
                return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight)
            }, t._getOffsetHeight = function () {
                return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height
            }, t._process = function () {
                var t = this._getScrollTop() + this._config.offset,
                    e = this._getScrollHeight(),
                    n = this._config.offset + e - this._getOffsetHeight();
                if (this._scrollHeight !== e && this.refresh(), n <= t) {
                    var i = this._targets[this._targets.length - 1];
                    this._activeTarget !== i && this._activate(i)
                } else {
                    if (this._activeTarget && t < this._offsets[0] && 0 < this._offsets[0]) return this._activeTarget = null, void this._clear();
                    for (var o = this._offsets.length; o--;) {
                        this._activeTarget !== this._targets[o] && t >= this._offsets[o] && (void 0 === this._offsets[o + 1] || t < this._offsets[o + 1]) && this._activate(this._targets[o])
                    }
                }
            }, t._activate = function (e) {
                this._activeTarget = e, this._clear();
                var t = this._selector.split(",").map(function (t) {
                        return t + '[data-target="' + e + '"],' + t + '[href="' + e + '"]'
                    }),
                    n = h.default([].slice.call(document.querySelectorAll(t.join(","))));
                n.hasClass("dropdown-item") ? (n.closest(".dropdown").find(".dropdown-toggle").addClass(gn), n.addClass(gn)) : (n.addClass(gn), n.parents(_n).prev(vn + ", " + yn).addClass(gn), n.parents(_n).prev(".nav-item").children(vn).addClass(gn)), h.default(this._scrollElement).trigger("activate.bs.scrollspy", {
                    relatedTarget: e
                })
            }, t._clear = function () {
                [].slice.call(document.querySelectorAll(this._selector)).filter(function (t) {
                    return t.classList.contains(gn)
                }).forEach(function (t) {
                    return t.classList.remove(gn)
                })
            }, i._jQueryInterface = function (n) {
                return this.each(function () {
                    var t = h.default(this).data(dn),
                        e = "object" === _typeof(n) && n;
                    if (t || (t = new i(this, e), h.default(this).data(dn, t)), "string" == typeof n) {
                        if (void 0 === t[n]) throw new TypeError('No method named "' + n + '"');
                        t[n]()
                    }
                })
            }, a(i, null, [{
                key: "VERSION",
                get: function () {
                    return "4.6.0"
                }
            }, {
                key: "Default",
                get: function () {
                    return pn
                }
            }]), i
        }();
    h.default(window).on("load.bs.scrollspy.data-api", function () {
        for (var t = [].slice.call(document.querySelectorAll('[data-spy="scroll"]')), e = t.length; e--;) {
            var n = h.default(t[e]);
            En._jQueryInterface.call(n, n.data())
        }
    }), h.default.fn[fn] = En._jQueryInterface, h.default.fn[fn].Constructor = En, h.default.fn[fn].noConflict = function () {
        return h.default.fn[fn] = hn, En._jQueryInterface
    };
    var wn = "bs.tab",
        Tn = h.default.fn.tab,
        Cn = "active",
        Sn = ".active",
        Nn = "> li > .active",
        Dn = function () {
            function i(t) {
                this._element = t
            }
            var t = i.prototype;
            return t.show = function () {
                var t, e, n, i, o, r, a, s, l = this;
                this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && h.default(this._element).hasClass(Cn) || h.default(this._element).hasClass("disabled") || (e = h.default(this._element).closest(".nav, .list-group")[0], n = p.getSelectorFromElement(this._element), e && (i = "UL" === e.nodeName || "OL" === e.nodeName ? Nn : Sn, o = (o = h.default.makeArray(h.default(e).find(i)))[o.length - 1]), r = h.default.Event("hide.bs.tab", {
                    relatedTarget: this._element
                }), a = h.default.Event("show.bs.tab", {
                    relatedTarget: o
                }), o && h.default(o).trigger(r), h.default(this._element).trigger(a), a.isDefaultPrevented() || r.isDefaultPrevented() || (n && (t = document.querySelector(n)), this._activate(this._element, e), s = function () {
                    var t = h.default.Event("hidden.bs.tab", {
                            relatedTarget: l._element
                        }),
                        e = h.default.Event("shown.bs.tab", {
                            relatedTarget: o
                        });
                    h.default(o).trigger(t), h.default(l._element).trigger(e)
                }, t ? this._activate(t, t.parentNode, s) : s()))
            }, t.dispose = function () {
                h.default.removeData(this._element, wn), this._element = null
            }, t._activate = function (t, e, n) {
                function i() {
                    return r._transitionComplete(t, a, n)
                }
                var o, r = this,
                    a = (!e || "UL" !== e.nodeName && "OL" !== e.nodeName ? h.default(e).children(Sn) : h.default(e).find(Nn))[0],
                    s = n && a && h.default(a).hasClass("fade");
                a && s ? (o = p.getTransitionDurationFromElement(a), h.default(a).removeClass("show").one(p.TRANSITION_END, i).emulateTransitionEnd(o)) : i()
            }, t._transitionComplete = function (t, e, n) {
                var i, o, r;
                e && (h.default(e).removeClass(Cn), (i = h.default(e.parentNode).find("> .dropdown-menu .active")[0]) && h.default(i).removeClass(Cn), "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !1)), h.default(t).addClass(Cn), "tab" === t.getAttribute("role") && t.setAttribute("aria-selected", !0), p.reflow(t), t.classList.contains("fade") && t.classList.add("show"), t.parentNode && h.default(t.parentNode).hasClass("dropdown-menu") && ((o = h.default(t).closest(".dropdown")[0]) && (r = [].slice.call(o.querySelectorAll(".dropdown-toggle")), h.default(r).addClass(Cn)), t.setAttribute("aria-expanded", !0)), n && n()
            }, i._jQueryInterface = function (n) {
                return this.each(function () {
                    var t = h.default(this),
                        e = t.data(wn);
                    if (e || (e = new i(this), t.data(wn, e)), "string" == typeof n) {
                        if (void 0 === e[n]) throw new TypeError('No method named "' + n + '"');
                        e[n]()
                    }
                })
            }, a(i, null, [{
                key: "VERSION",
                get: function () {
                    return "4.6.0"
                }
            }]), i
        }();
    h.default(document).on("click.bs.tab.data-api", '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]', function (t) {
        t.preventDefault(), Dn._jQueryInterface.call(h.default(this), "show")
    }), h.default.fn.tab = Dn._jQueryInterface, h.default.fn.tab.Constructor = Dn, h.default.fn.tab.noConflict = function () {
        return h.default.fn.tab = Tn, Dn._jQueryInterface
    };
    var An = "toast",
        kn = "bs.toast",
        In = "." + kn,
        On = h.default.fn[An],
        xn = "click.dismiss" + In,
        Ln = "show",
        jn = "showing",
        Pn = {
            animation: "boolean",
            autohide: "boolean",
            delay: "number"
        },
        Fn = {
            animation: !0,
            autohide: !0,
            delay: 500
        },
        Rn = function () {
            function o(t, e) {
                this._element = t, this._config = this._getConfig(e), this._timeout = null, this._setListeners()
            }
            var t = o.prototype;
            return t.show = function () {
                var t, e, n = this,
                    i = h.default.Event("show.bs.toast");
                h.default(this._element).trigger(i), i.isDefaultPrevented() || (this._clearTimeout(), this._config.animation && this._element.classList.add("fade"), t = function () {
                    n._element.classList.remove(jn), n._element.classList.add(Ln), h.default(n._element).trigger("shown.bs.toast"), n._config.autohide && (n._timeout = setTimeout(function () {
                        n.hide()
                    }, n._config.delay))
                }, this._element.classList.remove("hide"), p.reflow(this._element), this._element.classList.add(jn), this._config.animation ? (e = p.getTransitionDurationFromElement(this._element), h.default(this._element).one(p.TRANSITION_END, t).emulateTransitionEnd(e)) : t())
            }, t.hide = function () {
                var t;
                this._element.classList.contains(Ln) && (t = h.default.Event("hide.bs.toast"), h.default(this._element).trigger(t), t.isDefaultPrevented() || this._close())
            }, t.dispose = function () {
                this._clearTimeout(), this._element.classList.contains(Ln) && this._element.classList.remove(Ln), h.default(this._element).off(xn), h.default.removeData(this._element, kn), this._element = null, this._config = null
            }, t._getConfig = function (t) {
                return t = l({}, Fn, h.default(this._element).data(), "object" === _typeof(t) && t ? t : {}), p.typeCheckConfig(An, t, this.constructor.DefaultType), t
            }, t._setListeners = function () {
                var t = this;
                h.default(this._element).on(xn, '[data-dismiss="toast"]', function () {
                    return t.hide()
                })
            }, t._close = function () {
                function t() {
                    n._element.classList.add("hide"), h.default(n._element).trigger("hidden.bs.toast")
                }
                var e, n = this;
                this._element.classList.remove(Ln), this._config.animation ? (e = p.getTransitionDurationFromElement(this._element), h.default(this._element).one(p.TRANSITION_END, t).emulateTransitionEnd(e)) : t()
            }, t._clearTimeout = function () {
                clearTimeout(this._timeout), this._timeout = null
            }, o._jQueryInterface = function (i) {
                return this.each(function () {
                    var t = h.default(this),
                        e = t.data(kn),
                        n = "object" === _typeof(i) && i;
                    if (e || (e = new o(this, n), t.data(kn, e)), "string" == typeof i) {
                        if (void 0 === e[i]) throw new TypeError('No method named "' + i + '"');
                        e[i](this)
                    }
                })
            }, a(o, null, [{
                key: "VERSION",
                get: function () {
                    return "4.6.0"
                }
            }, {
                key: "DefaultType",
                get: function () {
                    return Pn
                }
            }, {
                key: "Default",
                get: function () {
                    return Fn
                }
            }]), o
        }();
    h.default.fn[An] = Rn._jQueryInterface, h.default.fn[An].Constructor = Rn, h.default.fn[An].noConflict = function () {
        return h.default.fn[An] = On, Rn._jQueryInterface
    }, t.Alert = d, t.Button = E, t.Carousel = j, t.Collapse = V, t.Dropdown = fe, t.Modal = Ie, t.Popover = un, t.Scrollspy = En, t.Tab = Dn, t.Toast = Rn, t.Tooltip = Je, t.Util = p, Object.defineProperty(t, "__esModule", {
        value: !0
    })
}),
function () {
    var t = -1 < navigator.userAgent.toLowerCase().indexOf("webkit"),
        e = -1 < navigator.userAgent.toLowerCase().indexOf("opera"),
        n = -1 < navigator.userAgent.toLowerCase().indexOf("msie");
    (t || e || n) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function () {
        var t, e = location.hash.substring(1);
        /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
    }, !1)
}();