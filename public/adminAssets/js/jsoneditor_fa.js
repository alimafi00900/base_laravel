/*!
 * /**
 * * @name JSON Editor
 * * @description JSON Schema Based Editor
 * * This library is the continuation of jdorn's great work (see also https://github.com/jdorn/json-editor/issues/800)
 * * @version "2.8.0"
 * * @author Jeremy Dorn
 * * @see https://github.com/jdorn/json-editor/
 * * @see https://github.com/json-editor/json-editor
 * * @license MIT
 * * @example see README.md and docs/ for requirements, examples and usage info
 * * /
 */
!function (t, e) {
    if ("object" == typeof exports && "object" == typeof module) module.exports = e(); else if ("function" == typeof define && define.amd) define([], e); else {
        var n = e();
        for (var r in n) ("object" == typeof exports ? exports : t)[r] = n[r]
    }
}(window, (function () {
    return function (t) {
        var e = {};

        function n(r) {
            if (e[r]) return e[r].exports;
            var i = e[r] = {i: r, l: !1, exports: {}};
            return t[r].call(i.exports, i, i.exports, n), i.l = !0, i.exports
        }

        return n.m = t, n.c = e, n.d = function (t, e, r) {
            n.o(t, e) || Object.defineProperty(t, e, {enumerable: !0, get: r})
        }, n.r = function (t) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {value: "Module"}), Object.defineProperty(t, "__esModule", {value: !0})
        }, n.t = function (t, e) {
            if (1 & e && (t = n(t)), 8 & e) return t;
            if (4 & e && "object" == typeof t && t && t.__esModule) return t;
            var r = Object.create(null);
            if (n.r(r), Object.defineProperty(r, "default", {
                enumerable: !0,
                value: t
            }), 2 & e && "string" != typeof t) for (var i in t) n.d(r, i, function (e) {
                return t[e]
            }.bind(null, i));
            return r
        }, n.n = function (t) {
            var e = t && t.__esModule ? function () {
                return t.default
            } : function () {
                return t
            };
            return n.d(e, "a", e), e
        }, n.o = function (t, e) {
            return Object.prototype.hasOwnProperty.call(t, e)
        }, n.p = "/dist/", n(n.s = 183)
    }([function (t, e, n) {
        var r = n(35), i = n(103), o = n(71), a = n(55), s = n(138), l = a.set, c = a.getterFor("Array Iterator");
        t.exports = s(Array, "Array", (function (t, e) {
            l(this, {type: "Array Iterator", target: r(t), index: 0, kind: e})
        }), (function () {
            var t = c(this), e = t.target, n = t.kind, r = t.index++;
            return !e || r >= e.length ? (t.target = void 0, {value: void 0, done: !0}) : "keys" == n ? {
                value: r,
                done: !1
            } : "values" == n ? {value: e[r], done: !1} : {value: [r, e[r]], done: !1}
        }), "values"), o.Arguments = o.Array, i("keys"), i("values"), i("entries")
    }, function (t, e, n) {
        var r = n(95), i = n(34), o = n(155);
        r || i(Object.prototype, "toString", o, {unsafe: !0})
    }, function (t, e, n) {
        var r = n(12), i = n(15), o = n(50), a = n(56), s = n(21), l = n(96), c = n(115), u = n(16), h = n(28),
            p = n(68), d = n(23), f = n(22), y = n(30), m = n(35), v = n(62), b = n(63), g = n(58), _ = n(67),
            w = n(66), k = n(169), x = n(101), j = n(44), O = n(27), C = n(78), E = n(38), S = n(34), P = n(75),
            R = n(74), L = n(76), T = n(94), A = n(17), I = n(136), B = n(137), N = n(84), F = n(55), V = n(53).forEach,
            D = R("hidden"), H = A("toPrimitive"), M = F.set, z = F.getterFor("Symbol"), q = Object.prototype,
            U = i.Symbol, G = o("JSON", "stringify"), $ = j.f, J = O.f, W = k.f, Z = C.f, Y = P("symbols"),
            Q = P("op-symbols"), K = P("string-to-symbol-registry"), X = P("symbol-to-string-registry"), tt = P("wks"),
            et = i.QObject, nt = !et || !et.prototype || !et.prototype.findChild, rt = s && u((function () {
                return 7 != g(J({}, "a", {
                    get: function () {
                        return J(this, "a", {value: 7}).a
                    }
                })).a
            })) ? function (t, e, n) {
                var r = $(q, e);
                r && delete q[e], J(t, e, n), r && t !== q && J(q, e, r)
            } : J, it = function (t, e) {
                var n = Y[t] = g(U.prototype);
                return M(n, {type: "Symbol", tag: t, description: e}), s || (n.description = e), n
            }, ot = c ? function (t) {
                return "symbol" == typeof t
            } : function (t) {
                return Object(t) instanceof U
            }, at = function (t, e, n) {
                t === q && at(Q, e, n), f(t);
                var r = v(e, !0);
                return f(n), h(Y, r) ? (n.enumerable ? (h(t, D) && t[D][r] && (t[D][r] = !1), n = g(n, {enumerable: b(0, !1)})) : (h(t, D) || J(t, D, b(1, {})), t[D][r] = !0), rt(t, r, n)) : J(t, r, n)
            }, st = function (t, e) {
                f(t);
                var n = m(e), r = _(n).concat(ht(n));
                return V(r, (function (e) {
                    s && !lt.call(n, e) || at(t, e, n[e])
                })), t
            }, lt = function (t) {
                var e = v(t, !0), n = Z.call(this, e);
                return !(this === q && h(Y, e) && !h(Q, e)) && (!(n || !h(this, e) || !h(Y, e) || h(this, D) && this[D][e]) || n)
            }, ct = function (t, e) {
                var n = m(t), r = v(e, !0);
                if (n !== q || !h(Y, r) || h(Q, r)) {
                    var i = $(n, r);
                    return !i || !h(Y, r) || h(n, D) && n[D][r] || (i.enumerable = !0), i
                }
            }, ut = function (t) {
                var e = W(m(t)), n = [];
                return V(e, (function (t) {
                    h(Y, t) || h(L, t) || n.push(t)
                })), n
            }, ht = function (t) {
                var e = t === q, n = W(e ? Q : m(t)), r = [];
                return V(n, (function (t) {
                    !h(Y, t) || e && !h(q, t) || r.push(Y[t])
                })), r
            };
        (l || (S((U = function () {
            if (this instanceof U) throw TypeError("Symbol is not a constructor");
            var t = arguments.length && void 0 !== arguments[0] ? String(arguments[0]) : void 0, e = T(t),
                n = function (t) {
                    this === q && n.call(Q, t), h(this, D) && h(this[D], e) && (this[D][e] = !1), rt(this, e, b(1, t))
                };
            return s && nt && rt(q, e, {configurable: !0, set: n}), it(e, t)
        }).prototype, "toString", (function () {
            return z(this).tag
        })), S(U, "withoutSetter", (function (t) {
            return it(T(t), t)
        })), C.f = lt, O.f = at, j.f = ct, w.f = k.f = ut, x.f = ht, I.f = function (t) {
            return it(A(t), t)
        }, s && (J(U.prototype, "description", {
            configurable: !0, get: function () {
                return z(this).description
            }
        }), a || S(q, "propertyIsEnumerable", lt, {unsafe: !0}))), r({
            global: !0,
            wrap: !0,
            forced: !l,
            sham: !l
        }, {Symbol: U}), V(_(tt), (function (t) {
            B(t)
        })), r({target: "Symbol", stat: !0, forced: !l}, {
            for: function (t) {
                var e = String(t);
                if (h(K, e)) return K[e];
                var n = U(e);
                return K[e] = n, X[n] = e, n
            }, keyFor: function (t) {
                if (!ot(t)) throw TypeError(t + " is not a symbol");
                if (h(X, t)) return X[t]
            }, useSetter: function () {
                nt = !0
            }, useSimple: function () {
                nt = !1
            }
        }), r({target: "Object", stat: !0, forced: !l, sham: !s}, {
            create: function (t, e) {
                return void 0 === e ? g(t) : st(g(t), e)
            }, defineProperty: at, defineProperties: st, getOwnPropertyDescriptor: ct
        }), r({target: "Object", stat: !0, forced: !l}, {
            getOwnPropertyNames: ut,
            getOwnPropertySymbols: ht
        }), r({
            target: "Object", stat: !0, forced: u((function () {
                x.f(1)
            }))
        }, {
            getOwnPropertySymbols: function (t) {
                return x.f(y(t))
            }
        }), G) && r({
            target: "JSON", stat: !0, forced: !l || u((function () {
                var t = U();
                return "[null]" != G([t]) || "{}" != G({a: t}) || "{}" != G(Object(t))
            }))
        }, {
            stringify: function (t, e, n) {
                for (var r, i = [t], o = 1; arguments.length > o;) i.push(arguments[o++]);
                if (r = e, (d(e) || void 0 !== t) && !ot(t)) return p(e) || (e = function (t, e) {
                    if ("function" == typeof r && (e = r.call(this, t, e)), !ot(e)) return e
                }), i[1] = e, G.apply(null, i)
            }
        });
        U.prototype[H] || E(U.prototype, H, U.prototype.valueOf), N(U, "Symbol"), L[D] = !0
    }, function (t, e, n) {
        var r = n(12), i = n(21), o = n(15), a = n(28), s = n(23), l = n(27).f, c = n(117), u = o.Symbol;
        if (i && "function" == typeof u && (!("description" in u.prototype) || void 0 !== u().description)) {
            var h = {}, p = function () {
                var t = arguments.length < 1 || void 0 === arguments[0] ? void 0 : String(arguments[0]),
                    e = this instanceof p ? new u(t) : void 0 === t ? u() : u(t);
                return "" === t && (h[e] = !0), e
            };
            c(p, u);
            var d = p.prototype = u.prototype;
            d.constructor = p;
            var f = d.toString, y = "Symbol(test)" == String(u("test")), m = /^Symbol\((.*)\)[^)]+$/;
            l(d, "description", {
                configurable: !0, get: function () {
                    var t = s(this) ? this.valueOf() : this, e = f.call(t);
                    if (a(h, t)) return "";
                    var n = y ? e.slice(7, -1) : e.replace(m, "$1");
                    return "" === n ? void 0 : n
                }
            }), r({global: !0, forced: !0}, {Symbol: p})
        }
    }, function (t, e, n) {
        n(137)("iterator")
    }, function (t, e, n) {
        var r = n(141).charAt, i = n(55), o = n(138), a = i.set, s = i.getterFor("String Iterator");
        o(String, "String", (function (t) {
            a(this, {type: "String Iterator", string: String(t), index: 0})
        }), (function () {
            var t, e = s(this), n = e.string, i = e.index;
            return i >= n.length ? {value: void 0, done: !0} : (t = r(n, i), e.index += t.length, {value: t, done: !1})
        }))
    }, function (t, e, n) {
        var r = n(15), i = n(124), o = n(0), a = n(38), s = n(17), l = s("iterator"), c = s("toStringTag"),
            u = o.values;
        for (var h in i) {
            var p = r[h], d = p && p.prototype;
            if (d) {
                if (d[l] !== u) try {
                    a(d, l, u)
                } catch (t) {
                    d[l] = u
                }
                if (d[c] || a(d, c, h), i[h]) for (var f in o) if (d[f] !== o[f]) try {
                    a(d, f, o[f])
                } catch (t) {
                    d[f] = o[f]
                }
            }
        }
    }, function (t, e, n) {
        n(12)({target: "Object", stat: !0}, {setPrototypeOf: n(83)})
    }, function (t, e, n) {
        var r = n(12), i = n(16), o = n(30), a = n(85), s = n(140);
        r({
            target: "Object", stat: !0, forced: i((function () {
                a(1)
            })), sham: !s
        }, {
            getPrototypeOf: function (t) {
                return a(o(t))
            }
        })
    }, function (t, e, n) {
        var r = n(12), i = n(50), o = n(47), a = n(22), s = n(23), l = n(58), c = n(147), u = n(16),
            h = i("Reflect", "construct"), p = u((function () {
                function t() {
                }

                return !(h((function () {
                }), [], t) instanceof t)
            })), d = !u((function () {
                h((function () {
                }))
            })), f = p || d;
        r({target: "Reflect", stat: !0, forced: f, sham: f}, {
            construct: function (t, e) {
                o(t), a(e);
                var n = arguments.length < 3 ? t : o(arguments[2]);
                if (d && !p) return h(t, e, n);
                if (t == n) {
                    switch (e.length) {
                        case 0:
                            return new t;
                        case 1:
                            return new t(e[0]);
                        case 2:
                            return new t(e[0], e[1]);
                        case 3:
                            return new t(e[0], e[1], e[2]);
                        case 4:
                            return new t(e[0], e[1], e[2], e[3])
                    }
                    var r = [null];
                    return r.push.apply(r, e), new (c.apply(t, r))
                }
                var i = n.prototype, u = l(s(i) ? i : Object.prototype), f = Function.apply.call(t, u, e);
                return s(f) ? f : u
            }
        })
    }, function (t, e, n) {
        n(12)({target: "Object", stat: !0, sham: !n(21)}, {create: n(58)})
    }, function (t, e, n) {
        var r = n(12), i = n(21);
        r({target: "Object", stat: !0, forced: !i, sham: !i}, {defineProperty: n(27).f})
    }, function (t, e, n) {
        var r = n(15), i = n(44).f, o = n(38), a = n(34), s = n(91), l = n(117), c = n(79);
        t.exports = function (t, e) {
            var n, u, h, p, d, f = t.target, y = t.global, m = t.stat;
            if (n = y ? r : m ? r[f] || s(f, {}) : (r[f] || {}).prototype) for (u in e) {
                if (p = e[u], h = t.noTargetGet ? (d = i(n, u)) && d.value : n[u], !c(y ? u : f + (m ? "." : "#") + u, t.forced) && void 0 !== h) {
                    if (typeof p == typeof h) continue;
                    l(p, h)
                }
                (t.sham || h && h.sham) && o(p, "sham", !0), a(n, u, p, t)
            }
        }
    }, function (t, e, n) {
        var r = n(12), i = n(16), o = n(35), a = n(44).f, s = n(21), l = i((function () {
            a(1)
        }));
        r({target: "Object", stat: !0, forced: !s || l, sham: !s}, {
            getOwnPropertyDescriptor: function (t, e) {
                return a(o(t), e)
            }
        })
    }, function (t, e, n) {
        var r = n(12), i = n(23), o = n(22), a = n(28), s = n(44), l = n(85);
        r({target: "Reflect", stat: !0}, {
            get: function t(e, n) {
                var r, c, u = arguments.length < 3 ? e : arguments[2];
                return o(e) === u ? e[n] : (r = s.f(e, n)) ? a(r, "value") ? r.value : void 0 === r.get ? void 0 : r.get.call(u) : i(c = l(e)) ? t(c, n, u) : void 0
            }
        })
    }, function (t, e, n) {
        (function (e) {
            var n = function (t) {
                return t && t.Math == Math && t
            };
            t.exports = n("object" == typeof globalThis && globalThis) || n("object" == typeof window && window) || n("object" == typeof self && self) || n("object" == typeof e && e) || function () {
                return this
            }() || Function("return this")()
        }).call(this, n(153))
    }, function (t, e) {
        t.exports = function (t) {
            try {
                return !!t()
            } catch (t) {
                return !0
            }
        }
    }, function (t, e, n) {
        var r = n(15), i = n(75), o = n(28), a = n(94), s = n(96), l = n(115), c = i("wks"), u = r.Symbol,
            h = l ? u : u && u.withoutSetter || a;
        t.exports = function (t) {
            return o(c, t) && (s || "string" == typeof c[t]) || (s && o(u, t) ? c[t] = u[t] : c[t] = h("Symbol." + t)), c[t]
        }
    }, function (t, e, n) {
        var r = n(12), i = n(16), o = n(68), a = n(23), s = n(30), l = n(32), c = n(69), u = n(102), h = n(70),
            p = n(17), d = n(64), f = p("isConcatSpreadable"), y = d >= 51 || !i((function () {
                var t = [];
                return t[f] = !1, t.concat()[0] !== t
            })), m = h("concat"), v = function (t) {
                if (!a(t)) return !1;
                var e = t[f];
                return void 0 !== e ? !!e : o(t)
            };
        r({target: "Array", proto: !0, forced: !y || !m}, {
            concat: function (t) {
                var e, n, r, i, o, a = s(this), h = u(a, 0), p = 0;
                for (e = -1, r = arguments.length; e < r; e++) if (v(o = -1 === e ? a : arguments[e])) {
                    if (p + (i = l(o.length)) > 9007199254740991) throw TypeError("Maximum allowed index exceeded");
                    for (n = 0; n < i; n++, p++) n in o && c(h, p, o[n])
                } else {
                    if (p >= 9007199254740991) throw TypeError("Maximum allowed index exceeded");
                    c(h, p++, o)
                }
                return h.length = p, h
            }
        })
    }, function (t, e, n) {
        var r = n(12), i = n(123);
        r({target: "Array", proto: !0, forced: [].forEach != i}, {forEach: i})
    }, function (t, e, n) {
        var r = n(15), i = n(124), o = n(123), a = n(38);
        for (var s in i) {
            var l = r[s], c = l && l.prototype;
            if (c && c.forEach !== o) try {
                a(c, "forEach", o)
            } catch (t) {
                c.forEach = o
            }
        }
    }, function (t, e, n) {
        var r = n(16);
        t.exports = !r((function () {
            return 7 != Object.defineProperty({}, 1, {
                get: function () {
                    return 7
                }
            })[1]
        }))
    }, function (t, e, n) {
        var r = n(23);
        t.exports = function (t) {
            if (!r(t)) throw TypeError(String(t) + " is not an object");
            return t
        }
    }, function (t, e) {
        t.exports = function (t) {
            return "object" == typeof t ? null !== t : "function" == typeof t
        }
    }, function (t, e, n) {
        var r = n(12), i = n(86);
        r({target: "RegExp", proto: !0, forced: /./.exec !== i}, {exec: i})
    }, function (t, e, n) {
        n(12)({target: "Array", stat: !0}, {isArray: n(68)})
    }, function (t, e, n) {
        var r = n(12), i = n(98).includes, o = n(103);
        r({target: "Array", proto: !0}, {
            includes: function (t) {
                return i(this, t, arguments.length > 1 ? arguments[1] : void 0)
            }
        }), o("includes")
    }, function (t, e, n) {
        var r = n(21), i = n(113), o = n(22), a = n(62), s = Object.defineProperty;
        e.f = r ? s : function (t, e, n) {
            if (o(t), e = a(e, !0), o(n), i) try {
                return s(t, e, n)
            } catch (t) {
            }
            if ("get" in n || "set" in n) throw TypeError("Accessors not supported");
            return "value" in n && (t[e] = n.value), t
        }
    }, function (t, e, n) {
        var r = n(30), i = {}.hasOwnProperty;
        t.exports = function (t, e) {
            return i.call(r(t), e)
        }
    }, function (t, e, n) {
        var r = n(12), i = n(23), o = n(68), a = n(99), s = n(32), l = n(35), c = n(69), u = n(17), h = n(70)("slice"),
            p = u("species"), d = [].slice, f = Math.max;
        r({target: "Array", proto: !0, forced: !h}, {
            slice: function (t, e) {
                var n, r, u, h = l(this), y = s(h.length), m = a(t, y), v = a(void 0 === e ? y : e, y);
                if (o(h) && ("function" != typeof (n = h.constructor) || n !== Array && !o(n.prototype) ? i(n) && null === (n = n[p]) && (n = void 0) : n = void 0, n === Array || void 0 === n)) return d.call(h, m, v);
                for (r = new (void 0 === n ? Array : n)(f(v - m, 0)), u = 0; m < v; m++, u++) m in h && c(r, u, h[m]);
                return r.length = u, r
            }
        })
    }, function (t, e, n) {
        var r = n(39);
        t.exports = function (t) {
            return Object(r(t))
        }
    }, function (t, e, n) {
        var r = n(21), i = n(27).f, o = Function.prototype, a = o.toString, s = /^\s*function ([^ (]*)/;
        r && !("name" in o) && i(o, "name", {
            configurable: !0, get: function () {
                try {
                    return a.call(this).match(s)[1]
                } catch (t) {
                    return ""
                }
            }
        })
    }, function (t, e, n) {
        var r = n(51), i = Math.min;
        t.exports = function (t) {
            return t > 0 ? i(r(t), 9007199254740991) : 0
        }
    }, function (t, e, n) {
        var r = n(12), i = n(145), o = n(39);
        r({target: "String", proto: !0, forced: !n(146)("includes")}, {
            includes: function (t) {
                return !!~String(o(this)).indexOf(i(t), arguments.length > 1 ? arguments[1] : void 0)
            }
        })
    }, function (t, e, n) {
        var r = n(15), i = n(38), o = n(28), a = n(91), s = n(92), l = n(55), c = l.get, u = l.enforce,
            h = String(String).split("String");
        (t.exports = function (t, e, n, s) {
            var l, c = !!s && !!s.unsafe, p = !!s && !!s.enumerable, d = !!s && !!s.noTargetGet;
            "function" == typeof n && ("string" != typeof e || o(n, "name") || i(n, "name", e), (l = u(n)).source || (l.source = h.join("string" == typeof e ? e : ""))), t !== r ? (c ? !d && t[e] && (p = !0) : delete t[e], p ? t[e] = n : i(t, e, n)) : p ? t[e] = n : a(e, n)
        })(Function.prototype, "toString", (function () {
            return "function" == typeof this && c(this).source || s(this)
        }))
    }, function (t, e, n) {
        var r = n(65), i = n(39);
        t.exports = function (t) {
            return r(i(t))
        }
    }, function (t, e, n) {
        var r = n(12), i = n(30), o = n(67);
        r({
            target: "Object", stat: !0, forced: n(16)((function () {
                o(1)
            }))
        }, {
            keys: function (t) {
                return o(i(t))
            }
        })
    }, function (t, e, n) {
        var r = n(12), i = n(171);
        r({
            target: "Array", stat: !0, forced: !n(131)((function (t) {
                Array.from(t)
            }))
        }, {from: i})
    }, function (t, e, n) {
        var r = n(21), i = n(27), o = n(63);
        t.exports = r ? function (t, e, n) {
            return i.f(t, e, o(1, n))
        } : function (t, e, n) {
            return t[e] = n, t
        }
    }, function (t, e) {
        t.exports = function (t) {
            if (null == t) throw TypeError("Can't call method on " + t);
            return t
        }
    }, function (t, e, n) {
        var r = n(12), i = n(156).left, o = n(52), a = n(64), s = n(80);
        r({target: "Array", proto: !0, forced: !o("reduce") || !s && a > 79 && a < 83}, {
            reduce: function (t) {
                return i(this, t, arguments.length, arguments.length > 1 ? arguments[1] : void 0)
            }
        })
    }, function (t, e, n) {
        var r = n(105), i = n(22), o = n(32), a = n(51), s = n(39), l = n(106), c = n(173), u = n(107), h = Math.max,
            p = Math.min;
        r("replace", 2, (function (t, e, n, r) {
            var d = r.REGEXP_REPLACE_SUBSTITUTES_UNDEFINED_CAPTURE, f = r.REPLACE_KEEPS_$0, y = d ? "$" : "$0";
            return [function (n, r) {
                var i = s(this), o = null == n ? void 0 : n[t];
                return void 0 !== o ? o.call(n, i, r) : e.call(String(i), n, r)
            }, function (t, r) {
                if (!d && f || "string" == typeof r && -1 === r.indexOf(y)) {
                    var s = n(e, t, this, r);
                    if (s.done) return s.value
                }
                var m = i(t), v = String(this), b = "function" == typeof r;
                b || (r = String(r));
                var g = m.global;
                if (g) {
                    var _ = m.unicode;
                    m.lastIndex = 0
                }
                for (var w = []; ;) {
                    var k = u(m, v);
                    if (null === k) break;
                    if (w.push(k), !g) break;
                    "" === String(k[0]) && (m.lastIndex = l(v, o(m.lastIndex), _))
                }
                for (var x, j = "", O = 0, C = 0; C < w.length; C++) {
                    k = w[C];
                    for (var E = String(k[0]), S = h(p(a(k.index), v.length), 0), P = [], R = 1; R < k.length; R++) P.push(void 0 === (x = k[R]) ? x : String(x));
                    var L = k.groups;
                    if (b) {
                        var T = [E].concat(P, S, v);
                        void 0 !== L && T.push(L);
                        var A = String(r.apply(void 0, T))
                    } else A = c(E, v, S, P, L, r);
                    S >= O && (j += v.slice(O, S) + A, O = S + E.length)
                }
                return j + v.slice(O)
            }]
        }))
    }, function (t, e, n) {
        var r = n(12), i = n(53).map;
        r({target: "Array", proto: !0, forced: !n(70)("map")}, {
            map: function (t) {
                return i(this, t, arguments.length > 1 ? arguments[1] : void 0)
            }
        })
    }, function (t, e, n) {
        var r = n(34), i = n(22), o = n(16), a = n(97), s = RegExp.prototype, l = s.toString, c = o((function () {
            return "/a/b" != l.call({source: "a", flags: "b"})
        })), u = "toString" != l.name;
        (c || u) && r(RegExp.prototype, "toString", (function () {
            var t = i(this), e = String(t.source), n = t.flags;
            return "/" + e + "/" + String(void 0 === n && t instanceof RegExp && !("flags" in s) ? a.call(t) : n)
        }), {unsafe: !0})
    }, function (t, e, n) {
        var r = n(21), i = n(78), o = n(63), a = n(35), s = n(62), l = n(28), c = n(113),
            u = Object.getOwnPropertyDescriptor;
        e.f = r ? u : function (t, e) {
            if (t = a(t), e = s(e, !0), c) try {
                return u(t, e)
            } catch (t) {
            }
            if (l(t, e)) return o(!i.f.call(t, e), t[e])
        }
    }, function (t, e, n) {
        var r = n(105), i = n(22), o = n(32), a = n(39), s = n(106), l = n(107);
        r("match", 1, (function (t, e, n) {
            return [function (e) {
                var n = a(this), r = null == e ? void 0 : e[t];
                return void 0 !== r ? r.call(e, n) : new RegExp(e)[t](String(n))
            }, function (t) {
                var r = n(e, t, this);
                if (r.done) return r.value;
                var a = i(t), c = String(this);
                if (!a.global) return l(a, c);
                var u = a.unicode;
                a.lastIndex = 0;
                for (var h, p = [], d = 0; null !== (h = l(a, c));) {
                    var f = String(h[0]);
                    p[d] = f, "" === f && (a.lastIndex = s(c, o(a.lastIndex), u)), d++
                }
                return 0 === d ? null : p
            }]
        }))
    }, function (t, e) {
        var n = {}.toString;
        t.exports = function (t) {
            return n.call(t).slice(8, -1)
        }
    }, function (t, e) {
        t.exports = function (t) {
            if ("function" != typeof t) throw TypeError(String(t) + " is not a function");
            return t
        }
    }, function (t, e, n) {
        var r = n(12), i = n(65), o = n(35), a = n(52), s = [].join, l = i != Object, c = a("join", ",");
        r({target: "Array", proto: !0, forced: l || !c}, {
            join: function (t) {
                return s.call(o(this), void 0 === t ? "," : t)
            }
        })
    }, function (t, e, n) {
        var r = n(34), i = Date.prototype, o = i.toString, a = i.getTime;
        new Date(NaN) + "" != "Invalid Date" && r(i, "toString", (function () {
            var t = a.call(this);
            return t == t ? o.call(this) : "Invalid Date"
        }))
    }, function (t, e, n) {
        var r = n(114), i = n(15), o = function (t) {
            return "function" == typeof t ? t : void 0
        };
        t.exports = function (t, e) {
            return arguments.length < 2 ? o(r[t]) || o(i[t]) : r[t] && r[t][e] || i[t] && i[t][e]
        }
    }, function (t, e) {
        var n = Math.ceil, r = Math.floor;
        t.exports = function (t) {
            return isNaN(t = +t) ? 0 : (t > 0 ? r : n)(t)
        }
    }, function (t, e, n) {
        var r = n(16);
        t.exports = function (t, e) {
            var n = [][t];
            return !!n && r((function () {
                n.call(null, e || function () {
                    throw 1
                }, 1)
            }))
        }
    }, function (t, e, n) {
        var r = n(82), i = n(65), o = n(30), a = n(32), s = n(102), l = [].push, c = function (t) {
            var e = 1 == t, n = 2 == t, c = 3 == t, u = 4 == t, h = 6 == t, p = 7 == t, d = 5 == t || h;
            return function (f, y, m, v) {
                for (var b, g, _ = o(f), w = i(_), k = r(y, m, 3), x = a(w.length), j = 0, O = v || s, C = e ? O(f, x) : n || p ? O(f, 0) : void 0; x > j; j++) if ((d || j in w) && (g = k(b = w[j], j, _), t)) if (e) C[j] = g; else if (g) switch (t) {
                    case 3:
                        return !0;
                    case 5:
                        return b;
                    case 6:
                        return j;
                    case 2:
                        l.call(C, b)
                } else switch (t) {
                    case 4:
                        return !1;
                    case 7:
                        l.call(C, b)
                }
                return h ? -1 : c || u ? u : C
            }
        };
        t.exports = {
            forEach: c(0),
            map: c(1),
            filter: c(2),
            some: c(3),
            every: c(4),
            find: c(5),
            findIndex: c(6),
            filterOut: c(7)
        }
    }, function (t, e, n) {
        var r = n(105), i = n(108), o = n(22), a = n(39), s = n(132), l = n(106), c = n(32), u = n(107), h = n(86),
            p = n(104).UNSUPPORTED_Y, d = [].push, f = Math.min;
        r("split", 2, (function (t, e, n) {
            var r;
            return r = "c" == "abbc".split(/(b)*/)[1] || 4 != "test".split(/(?:)/, -1).length || 2 != "ab".split(/(?:ab)*/).length || 4 != ".".split(/(.?)(.?)/).length || ".".split(/()()/).length > 1 || "".split(/.?/).length ? function (t, n) {
                var r = String(a(this)), o = void 0 === n ? 4294967295 : n >>> 0;
                if (0 === o) return [];
                if (void 0 === t) return [r];
                if (!i(t)) return e.call(r, t, o);
                for (var s, l, c, u = [], p = (t.ignoreCase ? "i" : "") + (t.multiline ? "m" : "") + (t.unicode ? "u" : "") + (t.sticky ? "y" : ""), f = 0, y = new RegExp(t.source, p + "g"); (s = h.call(y, r)) && !((l = y.lastIndex) > f && (u.push(r.slice(f, s.index)), s.length > 1 && s.index < r.length && d.apply(u, s.slice(1)), c = s[0].length, f = l, u.length >= o));) y.lastIndex === s.index && y.lastIndex++;
                return f === r.length ? !c && y.test("") || u.push("") : u.push(r.slice(f)), u.length > o ? u.slice(0, o) : u
            } : "0".split(void 0, 0).length ? function (t, n) {
                return void 0 === t && 0 === n ? [] : e.call(this, t, n)
            } : e, [function (e, n) {
                var i = a(this), o = null == e ? void 0 : e[t];
                return void 0 !== o ? o.call(e, i, n) : r.call(String(i), e, n)
            }, function (t, i) {
                var a = n(r, t, this, i, r !== e);
                if (a.done) return a.value;
                var h = o(t), d = String(this), y = s(h, RegExp), m = h.unicode,
                    v = (h.ignoreCase ? "i" : "") + (h.multiline ? "m" : "") + (h.unicode ? "u" : "") + (p ? "g" : "y"),
                    b = new y(p ? "^(?:" + h.source + ")" : h, v), g = void 0 === i ? 4294967295 : i >>> 0;
                if (0 === g) return [];
                if (0 === d.length) return null === u(b, d) ? [d] : [];
                for (var _ = 0, w = 0, k = []; w < d.length;) {
                    b.lastIndex = p ? 0 : w;
                    var x, j = u(b, p ? d.slice(w) : d);
                    if (null === j || (x = f(c(b.lastIndex + (p ? w : 0)), d.length)) === _) w = l(d, w, m); else {
                        if (k.push(d.slice(_, w)), k.length === g) return k;
                        for (var O = 1; O <= j.length - 1; O++) if (k.push(j[O]), k.length === g) return k;
                        w = _ = x
                    }
                }
                return k.push(d.slice(_)), k
            }]
        }), p)
    }, function (t, e, n) {
        var r, i, o, a = n(154), s = n(15), l = n(23), c = n(38), u = n(28), h = n(93), p = n(74), d = n(76),
            f = s.WeakMap;
        if (a || h.state) {
            var y = h.state || (h.state = new f), m = y.get, v = y.has, b = y.set;
            r = function (t, e) {
                if (v.call(y, t)) throw new TypeError("Object already initialized");
                return e.facade = t, b.call(y, t, e), e
            }, i = function (t) {
                return m.call(y, t) || {}
            }, o = function (t) {
                return v.call(y, t)
            }
        } else {
            var g = p("state");
            d[g] = !0, r = function (t, e) {
                if (u(t, g)) throw new TypeError("Object already initialized");
                return e.facade = t, c(t, g, e), e
            }, i = function (t) {
                return u(t, g) ? t[g] : {}
            }, o = function (t) {
                return u(t, g)
            }
        }
        t.exports = {
            set: r, get: i, has: o, enforce: function (t) {
                return o(t) ? i(t) : r(t, {})
            }, getterFor: function (t) {
                return function (e) {
                    var n;
                    if (!l(e) || (n = i(e)).type !== t) throw TypeError("Incompatible receiver, " + t + " required");
                    return n
                }
            }
        }
    }, function (t, e) {
        t.exports = !1
    }, function (t, e, n) {
        var r = n(12), i = n(120).values;
        r({target: "Object", stat: !0}, {
            values: function (t) {
                return i(t)
            }
        })
    }, function (t, e, n) {
        var r, i = n(22), o = n(121), a = n(100), s = n(76), l = n(122), c = n(90), u = n(74), h = u("IE_PROTO"),
            p = function () {
            }, d = function (t) {
                return "<script>" + t + "<\/script>"
            }, f = function () {
                try {
                    r = document.domain && new ActiveXObject("htmlfile")
                } catch (t) {
                }
                var t, e;
                f = r ? function (t) {
                    t.write(d("")), t.close();
                    var e = t.parentWindow.Object;
                    return t = null, e
                }(r) : ((e = c("iframe")).style.display = "none", l.appendChild(e), e.src = String("javascript:"), (t = e.contentWindow.document).open(), t.write(d("document.F=Object")), t.close(), t.F);
                for (var n = a.length; n--;) delete f.prototype[a[n]];
                return f()
            };
        s[h] = !0, t.exports = Object.create || function (t, e) {
            var n;
            return null !== t ? (p.prototype = i(t), n = new p, p.prototype = null, n[h] = t) : n = f(), void 0 === e ? n : o(n, e)
        }
    }, function (t, e, n) {
        var r = n(12), i = n(120).entries;
        r({target: "Object", stat: !0}, {
            entries: function (t) {
                return i(t)
            }
        })
    }, function (t, e, n) {
        var r = n(21), i = n(15), o = n(79), a = n(142), s = n(27).f, l = n(66).f, c = n(108), u = n(97), h = n(104),
            p = n(34), d = n(16), f = n(55).enforce, y = n(127), m = n(17)("match"), v = i.RegExp, b = v.prototype,
            g = /a/g, _ = /a/g, w = new v(g) !== g, k = h.UNSUPPORTED_Y;
        if (r && o("RegExp", !w || k || d((function () {
            return _[m] = !1, v(g) != g || v(_) == _ || "/a/i" != v(g, "i")
        })))) {
            for (var x = function (t, e) {
                var n, r = this instanceof x, i = c(t), o = void 0 === e;
                if (!r && i && t.constructor === x && o) return t;
                w ? i && !o && (t = t.source) : t instanceof x && (o && (e = u.call(t)), t = t.source), k && (n = !!e && e.indexOf("y") > -1) && (e = e.replace(/y/g, ""));
                var s = a(w ? new v(t, e) : v(t, e), r ? this : b, x);
                k && n && (f(s).sticky = !0);
                return s
            }, j = function (t) {
                t in x || s(x, t, {
                    configurable: !0, get: function () {
                        return v[t]
                    }, set: function (e) {
                        v[t] = e
                    }
                })
            }, O = l(v), C = 0; O.length > C;) j(O[C++]);
            b.constructor = x, x.prototype = b, p(i, "RegExp", x)
        }
        y("RegExp")
    }, function (t, e, n) {
        var r = n(12), i = n(53).filter;
        r({target: "Array", proto: !0, forced: !n(70)("filter")}, {
            filter: function (t) {
                return i(this, t, arguments.length > 1 ? arguments[1] : void 0)
            }
        })
    }, function (t, e, n) {
        var r = n(23);
        t.exports = function (t, e) {
            if (!r(t)) return t;
            var n, i;
            if (e && "function" == typeof (n = t.toString) && !r(i = n.call(t))) return i;
            if ("function" == typeof (n = t.valueOf) && !r(i = n.call(t))) return i;
            if (!e && "function" == typeof (n = t.toString) && !r(i = n.call(t))) return i;
            throw TypeError("Can't convert object to primitive value")
        }
    }, function (t, e) {
        t.exports = function (t, e) {
            return {enumerable: !(1 & t), configurable: !(2 & t), writable: !(4 & t), value: e}
        }
    }, function (t, e, n) {
        var r, i, o = n(15), a = n(77), s = o.process, l = s && s.versions, c = l && l.v8;
        c ? i = (r = c.split("."))[0] < 4 ? 1 : r[0] + r[1] : a && (!(r = a.match(/Edge\/(\d+)/)) || r[1] >= 74) && (r = a.match(/Chrome\/(\d+)/)) && (i = r[1]), t.exports = i && +i
    }, function (t, e, n) {
        var r = n(16), i = n(46), o = "".split;
        t.exports = r((function () {
            return !Object("z").propertyIsEnumerable(0)
        })) ? function (t) {
            return "String" == i(t) ? o.call(t, "") : Object(t)
        } : Object
    }, function (t, e, n) {
        var r = n(119), i = n(100).concat("length", "prototype");
        e.f = Object.getOwnPropertyNames || function (t) {
            return r(t, i)
        }
    }, function (t, e, n) {
        var r = n(119), i = n(100);
        t.exports = Object.keys || function (t) {
            return r(t, i)
        }
    }, function (t, e, n) {
        var r = n(46);
        t.exports = Array.isArray || function (t) {
            return "Array" == r(t)
        }
    }, function (t, e, n) {
        var r = n(62), i = n(27), o = n(63);
        t.exports = function (t, e, n) {
            var a = r(e);
            a in t ? i.f(t, a, o(0, n)) : t[a] = n
        }
    }, function (t, e, n) {
        var r = n(16), i = n(17), o = n(64), a = i("species");
        t.exports = function (t) {
            return o >= 51 || !r((function () {
                var e = [];
                return (e.constructor = {})[a] = function () {
                    return {foo: 1}
                }, 1 !== e[t](Boolean).foo
            }))
        }
    }, function (t, e) {
        t.exports = {}
    }, function (t, e, n) {
        var r = n(12), i = n(175);
        r({global: !0, forced: parseInt != i}, {parseInt: i})
    }, function (t, e, n) {
        var r = n(12), i = n(98).indexOf, o = n(52), a = [].indexOf, s = !!a && 1 / [1].indexOf(1, -0) < 0,
            l = o("indexOf");
        r({target: "Array", proto: !0, forced: s || !l}, {
            indexOf: function (t) {
                return s ? a.apply(this, arguments) || 0 : i(this, t, arguments.length > 1 ? arguments[1] : void 0)
            }
        })
    }, function (t, e, n) {
        var r = n(75), i = n(94), o = r("keys");
        t.exports = function (t) {
            return o[t] || (o[t] = i(t))
        }
    }, function (t, e, n) {
        var r = n(56), i = n(93);
        (t.exports = function (t, e) {
            return i[t] || (i[t] = void 0 !== e ? e : {})
        })("versions", []).push({
            version: "3.12.1",
            mode: r ? "pure" : "global",
            copyright: "© 2021 Denis Pushkarev (zloirock.ru)"
        })
    }, function (t, e) {
        t.exports = {}
    }, function (t, e, n) {
        var r = n(50);
        t.exports = r("navigator", "userAgent") || ""
    }, function (t, e, n) {
        var r = {}.propertyIsEnumerable, i = Object.getOwnPropertyDescriptor, o = i && !r.call({1: 2}, 1);
        e.f = o ? function (t) {
            var e = i(this, t);
            return !!e && e.enumerable
        } : r
    }, function (t, e, n) {
        var r = n(16), i = /#|\.prototype\./, o = function (t, e) {
            var n = s[a(t)];
            return n == c || n != l && ("function" == typeof e ? r(e) : !!e)
        }, a = o.normalize = function (t) {
            return String(t).replace(i, ".").toLowerCase()
        }, s = o.data = {}, l = o.NATIVE = "N", c = o.POLYFILL = "P";
        t.exports = o
    }, function (t, e, n) {
        var r = n(46), i = n(15);
        t.exports = "process" == r(i.process)
    }, function (t, e, n) {
        var r = n(12), i = n(53).find, o = n(103), a = !0;
        "find" in [] && Array(1).find((function () {
            a = !1
        })), r({target: "Array", proto: !0, forced: a}, {
            find: function (t) {
                return i(this, t, arguments.length > 1 ? arguments[1] : void 0)
            }
        }), o("find")
    }, function (t, e, n) {
        var r = n(47);
        t.exports = function (t, e, n) {
            if (r(t), void 0 === e) return t;
            switch (n) {
                case 0:
                    return function () {
                        return t.call(e)
                    };
                case 1:
                    return function (n) {
                        return t.call(e, n)
                    };
                case 2:
                    return function (n, r) {
                        return t.call(e, n, r)
                    };
                case 3:
                    return function (n, r, i) {
                        return t.call(e, n, r, i)
                    }
            }
            return function () {
                return t.apply(e, arguments)
            }
        }
    }, function (t, e, n) {
        var r = n(22), i = n(160);
        t.exports = Object.setPrototypeOf || ("__proto__" in {} ? function () {
            var t, e = !1, n = {};
            try {
                (t = Object.getOwnPropertyDescriptor(Object.prototype, "__proto__").set).call(n, []), e = n instanceof Array
            } catch (t) {
            }
            return function (n, o) {
                return r(n), i(o), e ? t.call(n, o) : n.__proto__ = o, n
            }
        }() : void 0)
    }, function (t, e, n) {
        var r = n(27).f, i = n(28), o = n(17)("toStringTag");
        t.exports = function (t, e, n) {
            t && !i(t = n ? t : t.prototype, o) && r(t, o, {configurable: !0, value: e})
        }
    }, function (t, e, n) {
        var r = n(28), i = n(30), o = n(74), a = n(140), s = o("IE_PROTO"), l = Object.prototype;
        t.exports = a ? Object.getPrototypeOf : function (t) {
            return t = i(t), r(t, s) ? t[s] : "function" == typeof t.constructor && t instanceof t.constructor ? t.constructor.prototype : t instanceof Object ? l : null
        }
    }, function (t, e, n) {
        var r, i, o = n(97), a = n(104), s = n(75), l = RegExp.prototype.exec,
            c = s("native-string-replace", String.prototype.replace), u = l,
            h = (r = /a/, i = /b*/g, l.call(r, "a"), l.call(i, "a"), 0 !== r.lastIndex || 0 !== i.lastIndex),
            p = a.UNSUPPORTED_Y || a.BROKEN_CARET, d = void 0 !== /()??/.exec("")[1];
        (h || d || p) && (u = function (t) {
            var e, n, r, i, a = this, s = p && a.sticky, u = o.call(a), f = a.source, y = 0, m = t;
            return s && (-1 === (u = u.replace("y", "")).indexOf("g") && (u += "g"), m = String(t).slice(a.lastIndex), a.lastIndex > 0 && (!a.multiline || a.multiline && "\n" !== t[a.lastIndex - 1]) && (f = "(?: " + f + ")", m = " " + m, y++), n = new RegExp("^(?:" + f + ")", u)), d && (n = new RegExp("^" + f + "$(?!\\s)", u)), h && (e = a.lastIndex), r = l.call(s ? n : a, m), s ? r ? (r.input = r.input.slice(y), r[0] = r[0].slice(y), r.index = a.lastIndex, a.lastIndex += r[0].length) : a.lastIndex = 0 : h && r && (a.lastIndex = a.global ? r.index + r[0].length : e), d && r && r.length > 1 && c.call(r[0], n, (function () {
                for (i = 1; i < arguments.length - 2; i++) void 0 === arguments[i] && (r[i] = void 0)
            })), r
        }), t.exports = u
    }, function (t, e, n) {
        var r = n(12), i = n(53).some;
        r({target: "Array", proto: !0, forced: !n(52)("some")}, {
            some: function (t) {
                return i(this, t, arguments.length > 1 ? arguments[1] : void 0)
            }
        })
    }, function (t, e, n) {
        var r = n(39), i = "[" + n(89) + "]", o = RegExp("^" + i + i + "*"), a = RegExp(i + i + "*$"),
            s = function (t) {
                return function (e) {
                    var n = String(r(e));
                    return 1 & t && (n = n.replace(o, "")), 2 & t && (n = n.replace(a, "")), n
                }
            };
        t.exports = {start: s(1), end: s(2), trim: s(3)}
    }, function (t, e) {
        t.exports = "\t\n\v\f\r                　\u2028\u2029\ufeff"
    }, function (t, e, n) {
        var r = n(15), i = n(23), o = r.document, a = i(o) && i(o.createElement);
        t.exports = function (t) {
            return a ? o.createElement(t) : {}
        }
    }, function (t, e, n) {
        var r = n(15), i = n(38);
        t.exports = function (t, e) {
            try {
                i(r, t, e)
            } catch (n) {
                r[t] = e
            }
            return e
        }
    }, function (t, e, n) {
        var r = n(93), i = Function.toString;
        "function" != typeof r.inspectSource && (r.inspectSource = function (t) {
            return i.call(t)
        }), t.exports = r.inspectSource
    }, function (t, e, n) {
        var r = n(15), i = n(91), o = r["__core-js_shared__"] || i("__core-js_shared__", {});
        t.exports = o
    }, function (t, e) {
        var n = 0, r = Math.random();
        t.exports = function (t) {
            return "Symbol(" + String(void 0 === t ? "" : t) + ")_" + (++n + r).toString(36)
        }
    }, function (t, e, n) {
        var r = {};
        r[n(17)("toStringTag")] = "z", t.exports = "[object z]" === String(r)
    }, function (t, e, n) {
        var r = n(64), i = n(16);
        t.exports = !!Object.getOwnPropertySymbols && !i((function () {
            return !String(Symbol()) || !Symbol.sham && r && r < 41
        }))
    }, function (t, e, n) {
        var r = n(22);
        t.exports = function () {
            var t = r(this), e = "";
            return t.global && (e += "g"), t.ignoreCase && (e += "i"), t.multiline && (e += "m"), t.dotAll && (e += "s"), t.unicode && (e += "u"), t.sticky && (e += "y"), e
        }
    }, function (t, e, n) {
        var r = n(35), i = n(32), o = n(99), a = function (t) {
            return function (e, n, a) {
                var s, l = r(e), c = i(l.length), u = o(a, c);
                if (t && n != n) {
                    for (; c > u;) if ((s = l[u++]) != s) return !0
                } else for (; c > u; u++) if ((t || u in l) && l[u] === n) return t || u || 0;
                return !t && -1
            }
        };
        t.exports = {includes: a(!0), indexOf: a(!1)}
    }, function (t, e, n) {
        var r = n(51), i = Math.max, o = Math.min;
        t.exports = function (t, e) {
            var n = r(t);
            return n < 0 ? i(n + e, 0) : o(n, e)
        }
    }, function (t, e) {
        t.exports = ["constructor", "hasOwnProperty", "isPrototypeOf", "propertyIsEnumerable", "toLocaleString", "toString", "valueOf"]
    }, function (t, e) {
        e.f = Object.getOwnPropertySymbols
    }, function (t, e, n) {
        var r = n(23), i = n(68), o = n(17)("species");
        t.exports = function (t, e) {
            var n;
            return i(t) && ("function" != typeof (n = t.constructor) || n !== Array && !i(n.prototype) ? r(n) && null === (n = n[o]) && (n = void 0) : n = void 0), new (void 0 === n ? Array : n)(0 === e ? 0 : e)
        }
    }, function (t, e, n) {
        var r = n(17), i = n(58), o = n(27), a = r("unscopables"), s = Array.prototype;
        null == s[a] && o.f(s, a, {configurable: !0, value: i(null)}), t.exports = function (t) {
            s[a][t] = !0
        }
    }, function (t, e, n) {
        var r = n(16);

        function i(t, e) {
            return RegExp(t, e)
        }

        e.UNSUPPORTED_Y = r((function () {
            var t = i("a", "y");
            return t.lastIndex = 2, null != t.exec("abcd")
        })), e.BROKEN_CARET = r((function () {
            var t = i("^r", "gy");
            return t.lastIndex = 2, null != t.exec("str")
        }))
    }, function (t, e, n) {
        n(24);
        var r = n(34), i = n(86), o = n(16), a = n(17), s = n(38), l = a("species"), c = RegExp.prototype,
            u = !o((function () {
                var t = /./;
                return t.exec = function () {
                    var t = [];
                    return t.groups = {a: "7"}, t
                }, "7" !== "".replace(t, "$<a>")
            })), h = "$0" === "a".replace(/./, "$0"), p = a("replace"), d = !!/./[p] && "" === /./[p]("a", "$0"),
            f = !o((function () {
                var t = /(?:)/, e = t.exec;
                t.exec = function () {
                    return e.apply(this, arguments)
                };
                var n = "ab".split(t);
                return 2 !== n.length || "a" !== n[0] || "b" !== n[1]
            }));
        t.exports = function (t, e, n, p) {
            var y = a(t), m = !o((function () {
                var e = {};
                return e[y] = function () {
                    return 7
                }, 7 != ""[t](e)
            })), v = m && !o((function () {
                var e = !1, n = /a/;
                return "split" === t && ((n = {}).constructor = {}, n.constructor[l] = function () {
                    return n
                }, n.flags = "", n[y] = /./[y]), n.exec = function () {
                    return e = !0, null
                }, n[y](""), !e
            }));
            if (!m || !v || "replace" === t && (!u || !h || d) || "split" === t && !f) {
                var b = /./[y], g = n(y, ""[t], (function (t, e, n, r, o) {
                    var a = e.exec;
                    return a === i || a === c.exec ? m && !o ? {done: !0, value: b.call(e, n, r)} : {
                        done: !0,
                        value: t.call(n, e, r)
                    } : {done: !1}
                }), {REPLACE_KEEPS_$0: h, REGEXP_REPLACE_SUBSTITUTES_UNDEFINED_CAPTURE: d}), _ = g[0], w = g[1];
                r(String.prototype, t, _), r(c, y, 2 == e ? function (t, e) {
                    return w.call(t, this, e)
                } : function (t) {
                    return w.call(t, this)
                })
            }
            p && s(c[y], "sham", !0)
        }
    }, function (t, e, n) {
        var r = n(141).charAt;
        t.exports = function (t, e, n) {
            return e + (n ? r(t, e).length : 1)
        }
    }, function (t, e, n) {
        var r = n(46), i = n(86);
        t.exports = function (t, e) {
            var n = t.exec;
            if ("function" == typeof n) {
                var o = n.call(t, e);
                if ("object" != typeof o) throw TypeError("RegExp exec method returned something other than an Object or null");
                return o
            }
            if ("RegExp" !== r(t)) throw TypeError("RegExp#exec called on incompatible receiver");
            return i.call(t, e)
        }
    }, function (t, e, n) {
        var r = n(23), i = n(46), o = n(17)("match");
        t.exports = function (t) {
            var e;
            return r(t) && (void 0 !== (e = t[o]) ? !!e : "RegExp" == i(t))
        }
    }, function (t, e, n) {
        var r = n(12), i = n(176);
        r({global: !0, forced: parseFloat != i}, {parseFloat: i})
    }, function (t, e, n) {
        var r, i = n(12), o = n(44).f, a = n(32), s = n(145), l = n(39), c = n(146), u = n(56), h = "".startsWith,
            p = Math.min, d = c("startsWith");
        i({
            target: "String",
            proto: !0,
            forced: !!(u || d || (r = o(String.prototype, "startsWith"), !r || r.writable)) && !d
        }, {
            startsWith: function (t) {
                var e = String(l(this));
                s(t);
                var n = a(p(arguments.length > 1 ? arguments[1] : void 0, e.length)), r = String(t);
                return h ? h.call(e, r, n) : e.slice(n, n + r.length) === r
            }
        })
    }, function (t, e, n) {
        n(12)({target: "Function", proto: !0}, {bind: n(147)})
    }, function (t, e, n) {
        var r = function (t) {
            "use strict";
            var e = Object.prototype, n = e.hasOwnProperty, r = "function" == typeof Symbol ? Symbol : {},
                i = r.iterator || "@@iterator", o = r.asyncIterator || "@@asyncIterator",
                a = r.toStringTag || "@@toStringTag";

            function s(t, e, n) {
                return Object.defineProperty(t, e, {value: n, enumerable: !0, configurable: !0, writable: !0}), t[e]
            }

            try {
                s({}, "")
            } catch (t) {
                s = function (t, e, n) {
                    return t[e] = n
                }
            }

            function l(t, e, n, r) {
                var i = e && e.prototype instanceof h ? e : h, o = Object.create(i.prototype), a = new x(r || []);
                return o._invoke = function (t, e, n) {
                    var r = "suspendedStart";
                    return function (i, o) {
                        if ("executing" === r) throw new Error("Generator is already running");
                        if ("completed" === r) {
                            if ("throw" === i) throw o;
                            return O()
                        }
                        for (n.method = i, n.arg = o; ;) {
                            var a = n.delegate;
                            if (a) {
                                var s = _(a, n);
                                if (s) {
                                    if (s === u) continue;
                                    return s
                                }
                            }
                            if ("next" === n.method) n.sent = n._sent = n.arg; else if ("throw" === n.method) {
                                if ("suspendedStart" === r) throw r = "completed", n.arg;
                                n.dispatchException(n.arg)
                            } else "return" === n.method && n.abrupt("return", n.arg);
                            r = "executing";
                            var l = c(t, e, n);
                            if ("normal" === l.type) {
                                if (r = n.done ? "completed" : "suspendedYield", l.arg === u) continue;
                                return {value: l.arg, done: n.done}
                            }
                            "throw" === l.type && (r = "completed", n.method = "throw", n.arg = l.arg)
                        }
                    }
                }(t, n, a), o
            }

            function c(t, e, n) {
                try {
                    return {type: "normal", arg: t.call(e, n)}
                } catch (t) {
                    return {type: "throw", arg: t}
                }
            }

            t.wrap = l;
            var u = {};

            function h() {
            }

            function p() {
            }

            function d() {
            }

            var f = {};
            f[i] = function () {
                return this
            };
            var y = Object.getPrototypeOf, m = y && y(y(j([])));
            m && m !== e && n.call(m, i) && (f = m);
            var v = d.prototype = h.prototype = Object.create(f);

            function b(t) {
                ["next", "throw", "return"].forEach((function (e) {
                    s(t, e, (function (t) {
                        return this._invoke(e, t)
                    }))
                }))
            }

            function g(t, e) {
                var r;
                this._invoke = function (i, o) {
                    function a() {
                        return new e((function (r, a) {
                            !function r(i, o, a, s) {
                                var l = c(t[i], t, o);
                                if ("throw" !== l.type) {
                                    var u = l.arg, h = u.value;
                                    return h && "object" == typeof h && n.call(h, "__await") ? e.resolve(h.__await).then((function (t) {
                                        r("next", t, a, s)
                                    }), (function (t) {
                                        r("throw", t, a, s)
                                    })) : e.resolve(h).then((function (t) {
                                        u.value = t, a(u)
                                    }), (function (t) {
                                        return r("throw", t, a, s)
                                    }))
                                }
                                s(l.arg)
                            }(i, o, r, a)
                        }))
                    }

                    return r = r ? r.then(a, a) : a()
                }
            }

            function _(t, e) {
                var n = t.iterator[e.method];
                if (void 0 === n) {
                    if (e.delegate = null, "throw" === e.method) {
                        if (t.iterator.return && (e.method = "return", e.arg = void 0, _(t, e), "throw" === e.method)) return u;
                        e.method = "throw", e.arg = new TypeError("The iterator does not provide a 'throw' method")
                    }
                    return u
                }
                var r = c(n, t.iterator, e.arg);
                if ("throw" === r.type) return e.method = "throw", e.arg = r.arg, e.delegate = null, u;
                var i = r.arg;
                return i ? i.done ? (e[t.resultName] = i.value, e.next = t.nextLoc, "return" !== e.method && (e.method = "next", e.arg = void 0), e.delegate = null, u) : i : (e.method = "throw", e.arg = new TypeError("iterator result is not an object"), e.delegate = null, u)
            }

            function w(t) {
                var e = {tryLoc: t[0]};
                1 in t && (e.catchLoc = t[1]), 2 in t && (e.finallyLoc = t[2], e.afterLoc = t[3]), this.tryEntries.push(e)
            }

            function k(t) {
                var e = t.completion || {};
                e.type = "normal", delete e.arg, t.completion = e
            }

            function x(t) {
                this.tryEntries = [{tryLoc: "root"}], t.forEach(w, this), this.reset(!0)
            }

            function j(t) {
                if (t) {
                    var e = t[i];
                    if (e) return e.call(t);
                    if ("function" == typeof t.next) return t;
                    if (!isNaN(t.length)) {
                        var r = -1, o = function e() {
                            for (; ++r < t.length;) if (n.call(t, r)) return e.value = t[r], e.done = !1, e;
                            return e.value = void 0, e.done = !0, e
                        };
                        return o.next = o
                    }
                }
                return {next: O}
            }

            function O() {
                return {value: void 0, done: !0}
            }

            return p.prototype = v.constructor = d, d.constructor = p, p.displayName = s(d, a, "GeneratorFunction"), t.isGeneratorFunction = function (t) {
                var e = "function" == typeof t && t.constructor;
                return !!e && (e === p || "GeneratorFunction" === (e.displayName || e.name))
            }, t.mark = function (t) {
                return Object.setPrototypeOf ? Object.setPrototypeOf(t, d) : (t.__proto__ = d, s(t, a, "GeneratorFunction")), t.prototype = Object.create(v), t
            }, t.awrap = function (t) {
                return {__await: t}
            }, b(g.prototype), g.prototype[o] = function () {
                return this
            }, t.AsyncIterator = g, t.async = function (e, n, r, i, o) {
                void 0 === o && (o = Promise);
                var a = new g(l(e, n, r, i), o);
                return t.isGeneratorFunction(n) ? a : a.next().then((function (t) {
                    return t.done ? t.value : a.next()
                }))
            }, b(v), s(v, a, "Generator"), v[i] = function () {
                return this
            }, v.toString = function () {
                return "[object Generator]"
            }, t.keys = function (t) {
                var e = [];
                for (var n in t) e.push(n);
                return e.reverse(), function n() {
                    for (; e.length;) {
                        var r = e.pop();
                        if (r in t) return n.value = r, n.done = !1, n
                    }
                    return n.done = !0, n
                }
            }, t.values = j, x.prototype = {
                constructor: x, reset: function (t) {
                    if (this.prev = 0, this.next = 0, this.sent = this._sent = void 0, this.done = !1, this.delegate = null, this.method = "next", this.arg = void 0, this.tryEntries.forEach(k), !t) for (var e in this) "t" === e.charAt(0) && n.call(this, e) && !isNaN(+e.slice(1)) && (this[e] = void 0)
                }, stop: function () {
                    this.done = !0;
                    var t = this.tryEntries[0].completion;
                    if ("throw" === t.type) throw t.arg;
                    return this.rval
                }, dispatchException: function (t) {
                    if (this.done) throw t;
                    var e = this;

                    function r(n, r) {
                        return a.type = "throw", a.arg = t, e.next = n, r && (e.method = "next", e.arg = void 0), !!r
                    }

                    for (var i = this.tryEntries.length - 1; i >= 0; --i) {
                        var o = this.tryEntries[i], a = o.completion;
                        if ("root" === o.tryLoc) return r("end");
                        if (o.tryLoc <= this.prev) {
                            var s = n.call(o, "catchLoc"), l = n.call(o, "finallyLoc");
                            if (s && l) {
                                if (this.prev < o.catchLoc) return r(o.catchLoc, !0);
                                if (this.prev < o.finallyLoc) return r(o.finallyLoc)
                            } else if (s) {
                                if (this.prev < o.catchLoc) return r(o.catchLoc, !0)
                            } else {
                                if (!l) throw new Error("try statement without catch or finally");
                                if (this.prev < o.finallyLoc) return r(o.finallyLoc)
                            }
                        }
                    }
                }, abrupt: function (t, e) {
                    for (var r = this.tryEntries.length - 1; r >= 0; --r) {
                        var i = this.tryEntries[r];
                        if (i.tryLoc <= this.prev && n.call(i, "finallyLoc") && this.prev < i.finallyLoc) {
                            var o = i;
                            break
                        }
                    }
                    o && ("break" === t || "continue" === t) && o.tryLoc <= e && e <= o.finallyLoc && (o = null);
                    var a = o ? o.completion : {};
                    return a.type = t, a.arg = e, o ? (this.method = "next", this.next = o.finallyLoc, u) : this.complete(a)
                }, complete: function (t, e) {
                    if ("throw" === t.type) throw t.arg;
                    return "break" === t.type || "continue" === t.type ? this.next = t.arg : "return" === t.type ? (this.rval = this.arg = t.arg, this.method = "return", this.next = "end") : "normal" === t.type && e && (this.next = e), u
                }, finish: function (t) {
                    for (var e = this.tryEntries.length - 1; e >= 0; --e) {
                        var n = this.tryEntries[e];
                        if (n.finallyLoc === t) return this.complete(n.completion, n.afterLoc), k(n), u
                    }
                }, catch: function (t) {
                    for (var e = this.tryEntries.length - 1; e >= 0; --e) {
                        var n = this.tryEntries[e];
                        if (n.tryLoc === t) {
                            var r = n.completion;
                            if ("throw" === r.type) {
                                var i = r.arg;
                                k(n)
                            }
                            return i
                        }
                    }
                    throw new Error("illegal catch attempt")
                }, delegateYield: function (t, e, n) {
                    return this.delegate = {
                        iterator: j(t),
                        resultName: e,
                        nextLoc: n
                    }, "next" === this.method && (this.arg = void 0), u
                }
            }, t
        }(t.exports);
        try {
            regeneratorRuntime = r
        } catch (t) {
            Function("r", "regeneratorRuntime = r")(r)
        }
    }, function (t, e, n) {
        var r = n(21), i = n(16), o = n(90);
        t.exports = !r && !i((function () {
            return 7 != Object.defineProperty(o("div"), "a", {
                get: function () {
                    return 7
                }
            }).a
        }))
    }, function (t, e, n) {
        var r = n(15);
        t.exports = r
    }, function (t, e, n) {
        var r = n(96);
        t.exports = r && !Symbol.sham && "symbol" == typeof Symbol.iterator
    }, function (t, e, n) {
        var r = n(95), i = n(46), o = n(17)("toStringTag"), a = "Arguments" == i(function () {
            return arguments
        }());
        t.exports = r ? i : function (t) {
            var e, n, r;
            return void 0 === t ? "Undefined" : null === t ? "Null" : "string" == typeof (n = function (t, e) {
                try {
                    return t[e]
                } catch (t) {
                }
            }(e = Object(t), o)) ? n : a ? i(e) : "Object" == (r = i(e)) && "function" == typeof e.callee ? "Arguments" : r
        }
    }, function (t, e, n) {
        var r = n(28), i = n(118), o = n(44), a = n(27);
        t.exports = function (t, e) {
            for (var n = i(e), s = a.f, l = o.f, c = 0; c < n.length; c++) {
                var u = n[c];
                r(t, u) || s(t, u, l(e, u))
            }
        }
    }, function (t, e, n) {
        var r = n(50), i = n(66), o = n(101), a = n(22);
        t.exports = r("Reflect", "ownKeys") || function (t) {
            var e = i.f(a(t)), n = o.f;
            return n ? e.concat(n(t)) : e
        }
    }, function (t, e, n) {
        var r = n(28), i = n(35), o = n(98).indexOf, a = n(76);
        t.exports = function (t, e) {
            var n, s = i(t), l = 0, c = [];
            for (n in s) !r(a, n) && r(s, n) && c.push(n);
            for (; e.length > l;) r(s, n = e[l++]) && (~o(c, n) || c.push(n));
            return c
        }
    }, function (t, e, n) {
        var r = n(21), i = n(67), o = n(35), a = n(78).f, s = function (t) {
            return function (e) {
                for (var n, s = o(e), l = i(s), c = l.length, u = 0, h = []; c > u;) n = l[u++], r && !a.call(s, n) || h.push(t ? [n, s[n]] : s[n]);
                return h
            }
        };
        t.exports = {entries: s(!0), values: s(!1)}
    }, function (t, e, n) {
        var r = n(21), i = n(27), o = n(22), a = n(67);
        t.exports = r ? Object.defineProperties : function (t, e) {
            o(t);
            for (var n, r = a(e), s = r.length, l = 0; s > l;) i.f(t, n = r[l++], e[n]);
            return t
        }
    }, function (t, e, n) {
        var r = n(50);
        t.exports = r("document", "documentElement")
    }, function (t, e, n) {
        var r = n(53).forEach, i = n(52)("forEach");
        t.exports = i ? [].forEach : function (t) {
            return r(this, t, arguments.length > 1 ? arguments[1] : void 0)
        }
    }, function (t, e) {
        t.exports = {
            CSSRuleList: 0,
            CSSStyleDeclaration: 0,
            CSSValueList: 0,
            ClientRectList: 0,
            DOMRectList: 0,
            DOMStringList: 0,
            DOMTokenList: 1,
            DataTransferItemList: 0,
            FileList: 0,
            HTMLAllCollection: 0,
            HTMLCollection: 0,
            HTMLFormElement: 0,
            HTMLSelectElement: 0,
            MediaList: 0,
            MimeTypeArray: 0,
            NamedNodeMap: 0,
            NodeList: 1,
            PaintRequestList: 0,
            Plugin: 0,
            PluginArray: 0,
            SVGLengthList: 0,
            SVGNumberList: 0,
            SVGPathSegList: 0,
            SVGPointList: 0,
            SVGStringList: 0,
            SVGTransformList: 0,
            SourceBufferList: 0,
            StyleSheetList: 0,
            TextTrackCueList: 0,
            TextTrackList: 0,
            TouchList: 0
        }
    }, function (t, e, n) {
        var r = n(12), i = n(157);
        r({target: "Object", stat: !0, forced: Object.assign !== i}, {assign: i})
    }, function (t, e, n) {
        var r, i, o, a, s = n(12), l = n(56), c = n(15), u = n(50), h = n(158), p = n(34), d = n(159), f = n(83),
            y = n(84), m = n(127), v = n(23), b = n(47), g = n(161), _ = n(92), w = n(162), k = n(131), x = n(132),
            j = n(133).set, O = n(163), C = n(165), E = n(166), S = n(135), P = n(167), R = n(55), L = n(79), T = n(17),
            A = n(168), I = n(80), B = n(64), N = T("species"), F = "Promise", V = R.get, D = R.set, H = R.getterFor(F),
            M = h && h.prototype, z = h, q = M, U = c.TypeError, G = c.document, $ = c.process, J = S.f, W = J,
            Z = !!(G && G.createEvent && c.dispatchEvent), Y = "function" == typeof PromiseRejectionEvent, Q = !1,
            K = L(F, (function () {
                var t = _(z) !== String(z);
                if (!t && 66 === B) return !0;
                if (l && !q.finally) return !0;
                if (B >= 51 && /native code/.test(z)) return !1;
                var e = new z((function (t) {
                    t(1)
                })), n = function (t) {
                    t((function () {
                    }), (function () {
                    }))
                };
                return (e.constructor = {})[N] = n, !(Q = e.then((function () {
                })) instanceof n) || !t && A && !Y
            })), X = K || !k((function (t) {
                z.all(t).catch((function () {
                }))
            })), tt = function (t) {
                var e;
                return !(!v(t) || "function" != typeof (e = t.then)) && e
            }, et = function (t, e) {
                if (!t.notified) {
                    t.notified = !0;
                    var n = t.reactions;
                    O((function () {
                        for (var r = t.value, i = 1 == t.state, o = 0; n.length > o;) {
                            var a, s, l, c = n[o++], u = i ? c.ok : c.fail, h = c.resolve, p = c.reject, d = c.domain;
                            try {
                                u ? (i || (2 === t.rejection && ot(t), t.rejection = 1), !0 === u ? a = r : (d && d.enter(), a = u(r), d && (d.exit(), l = !0)), a === c.promise ? p(U("Promise-chain cycle")) : (s = tt(a)) ? s.call(a, h, p) : h(a)) : p(r)
                            } catch (t) {
                                d && !l && d.exit(), p(t)
                            }
                        }
                        t.reactions = [], t.notified = !1, e && !t.rejection && rt(t)
                    }))
                }
            }, nt = function (t, e, n) {
                var r, i;
                Z ? ((r = G.createEvent("Event")).promise = e, r.reason = n, r.initEvent(t, !1, !0), c.dispatchEvent(r)) : r = {
                    promise: e,
                    reason: n
                }, !Y && (i = c["on" + t]) ? i(r) : "unhandledrejection" === t && E("Unhandled promise rejection", n)
            }, rt = function (t) {
                j.call(c, (function () {
                    var e, n = t.facade, r = t.value;
                    if (it(t) && (e = P((function () {
                        I ? $.emit("unhandledRejection", r, n) : nt("unhandledrejection", n, r)
                    })), t.rejection = I || it(t) ? 2 : 1, e.error)) throw e.value
                }))
            }, it = function (t) {
                return 1 !== t.rejection && !t.parent
            }, ot = function (t) {
                j.call(c, (function () {
                    var e = t.facade;
                    I ? $.emit("rejectionHandled", e) : nt("rejectionhandled", e, t.value)
                }))
            }, at = function (t, e, n) {
                return function (r) {
                    t(e, r, n)
                }
            }, st = function (t, e, n) {
                t.done || (t.done = !0, n && (t = n), t.value = e, t.state = 2, et(t, !0))
            }, lt = function (t, e, n) {
                if (!t.done) {
                    t.done = !0, n && (t = n);
                    try {
                        if (t.facade === e) throw U("Promise can't be resolved itself");
                        var r = tt(e);
                        r ? O((function () {
                            var n = {done: !1};
                            try {
                                r.call(e, at(lt, n, t), at(st, n, t))
                            } catch (e) {
                                st(n, e, t)
                            }
                        })) : (t.value = e, t.state = 1, et(t, !1))
                    } catch (e) {
                        st({done: !1}, e, t)
                    }
                }
            };
        if (K && (q = (z = function (t) {
            g(this, z, F), b(t), r.call(this);
            var e = V(this);
            try {
                t(at(lt, e), at(st, e))
            } catch (t) {
                st(e, t)
            }
        }).prototype, (r = function (t) {
            D(this, {
                type: F,
                done: !1,
                notified: !1,
                parent: !1,
                reactions: [],
                rejection: !1,
                state: 0,
                value: void 0
            })
        }).prototype = d(q, {
            then: function (t, e) {
                var n = H(this), r = J(x(this, z));
                return r.ok = "function" != typeof t || t, r.fail = "function" == typeof e && e, r.domain = I ? $.domain : void 0, n.parent = !0, n.reactions.push(r), 0 != n.state && et(n, !1), r.promise
            }, catch: function (t) {
                return this.then(void 0, t)
            }
        }), i = function () {
            var t = new r, e = V(t);
            this.promise = t, this.resolve = at(lt, e), this.reject = at(st, e)
        }, S.f = J = function (t) {
            return t === z || t === o ? new i(t) : W(t)
        }, !l && "function" == typeof h && M !== Object.prototype)) {
            a = M.then, Q || (p(M, "then", (function (t, e) {
                var n = this;
                return new z((function (t, e) {
                    a.call(n, t, e)
                })).then(t, e)
            }), {unsafe: !0}), p(M, "catch", q.catch, {unsafe: !0}));
            try {
                delete M.constructor
            } catch (t) {
            }
            f && f(M, q)
        }
        s({global: !0, wrap: !0, forced: K}, {Promise: z}), y(z, F, !1, !0), m(F), o = u(F), s({
            target: F,
            stat: !0,
            forced: K
        }, {
            reject: function (t) {
                var e = J(this);
                return e.reject.call(void 0, t), e.promise
            }
        }), s({target: F, stat: !0, forced: l || K}, {
            resolve: function (t) {
                return C(l && this === o ? z : this, t)
            }
        }), s({target: F, stat: !0, forced: X}, {
            all: function (t) {
                var e = this, n = J(e), r = n.resolve, i = n.reject, o = P((function () {
                    var n = b(e.resolve), o = [], a = 0, s = 1;
                    w(t, (function (t) {
                        var l = a++, c = !1;
                        o.push(void 0), s++, n.call(e, t).then((function (t) {
                            c || (c = !0, o[l] = t, --s || r(o))
                        }), i)
                    })), --s || r(o)
                }));
                return o.error && i(o.value), n.promise
            }, race: function (t) {
                var e = this, n = J(e), r = n.reject, i = P((function () {
                    var i = b(e.resolve);
                    w(t, (function (t) {
                        i.call(e, t).then(n.resolve, r)
                    }))
                }));
                return i.error && r(i.value), n.promise
            }
        })
    }, function (t, e, n) {
        var r = n(50), i = n(27), o = n(17), a = n(21), s = o("species");
        t.exports = function (t) {
            var e = r(t), n = i.f;
            a && e && !e[s] && n(e, s, {
                configurable: !0, get: function () {
                    return this
                }
            })
        }
    }, function (t, e, n) {
        var r = n(17), i = n(71), o = r("iterator"), a = Array.prototype;
        t.exports = function (t) {
            return void 0 !== t && (i.Array === t || a[o] === t)
        }
    }, function (t, e, n) {
        var r = n(116), i = n(71), o = n(17)("iterator");
        t.exports = function (t) {
            if (null != t) return t[o] || t["@@iterator"] || i[r(t)]
        }
    }, function (t, e, n) {
        var r = n(22);
        t.exports = function (t) {
            var e = t.return;
            if (void 0 !== e) return r(e.call(t)).value
        }
    }, function (t, e, n) {
        var r = n(17)("iterator"), i = !1;
        try {
            var o = 0, a = {
                next: function () {
                    return {done: !!o++}
                }, return: function () {
                    i = !0
                }
            };
            a[r] = function () {
                return this
            }, Array.from(a, (function () {
                throw 2
            }))
        } catch (t) {
        }
        t.exports = function (t, e) {
            if (!e && !i) return !1;
            var n = !1;
            try {
                var o = {};
                o[r] = function () {
                    return {
                        next: function () {
                            return {done: n = !0}
                        }
                    }
                }, t(o)
            } catch (t) {
            }
            return n
        }
    }, function (t, e, n) {
        var r = n(22), i = n(47), o = n(17)("species");
        t.exports = function (t, e) {
            var n, a = r(t).constructor;
            return void 0 === a || null == (n = r(a)[o]) ? e : i(n)
        }
    }, function (t, e, n) {
        var r, i, o, a = n(15), s = n(16), l = n(82), c = n(122), u = n(90), h = n(134), p = n(80), d = a.location,
            f = a.setImmediate, y = a.clearImmediate, m = a.process, v = a.MessageChannel, b = a.Dispatch, g = 0,
            _ = {}, w = function (t) {
                if (_.hasOwnProperty(t)) {
                    var e = _[t];
                    delete _[t], e()
                }
            }, k = function (t) {
                return function () {
                    w(t)
                }
            }, x = function (t) {
                w(t.data)
            }, j = function (t) {
                a.postMessage(t + "", d.protocol + "//" + d.host)
            };
        f && y || (f = function (t) {
            for (var e = [], n = 1; arguments.length > n;) e.push(arguments[n++]);
            return _[++g] = function () {
                ("function" == typeof t ? t : Function(t)).apply(void 0, e)
            }, r(g), g
        }, y = function (t) {
            delete _[t]
        }, p ? r = function (t) {
            m.nextTick(k(t))
        } : b && b.now ? r = function (t) {
            b.now(k(t))
        } : v && !h ? (o = (i = new v).port2, i.port1.onmessage = x, r = l(o.postMessage, o, 1)) : a.addEventListener && "function" == typeof postMessage && !a.importScripts && d && "file:" !== d.protocol && !s(j) ? (r = j, a.addEventListener("message", x, !1)) : r = "onreadystatechange" in u("script") ? function (t) {
            c.appendChild(u("script")).onreadystatechange = function () {
                c.removeChild(this), w(t)
            }
        } : function (t) {
            setTimeout(k(t), 0)
        }), t.exports = {set: f, clear: y}
    }, function (t, e, n) {
        var r = n(77);
        t.exports = /(?:iphone|ipod|ipad).*applewebkit/i.test(r)
    }, function (t, e, n) {
        var r = n(47), i = function (t) {
            var e, n;
            this.promise = new t((function (t, r) {
                if (void 0 !== e || void 0 !== n) throw TypeError("Bad Promise constructor");
                e = t, n = r
            })), this.resolve = r(e), this.reject = r(n)
        };
        t.exports.f = function (t) {
            return new i(t)
        }
    }, function (t, e, n) {
        var r = n(17);
        e.f = r
    }, function (t, e, n) {
        var r = n(114), i = n(28), o = n(136), a = n(27).f;
        t.exports = function (t) {
            var e = r.Symbol || (r.Symbol = {});
            i(e, t) || a(e, t, {value: o.f(t)})
        }
    }, function (t, e, n) {
        var r = n(12), i = n(170), o = n(85), a = n(83), s = n(84), l = n(38), c = n(34), u = n(17), h = n(56),
            p = n(71), d = n(139), f = d.IteratorPrototype, y = d.BUGGY_SAFARI_ITERATORS, m = u("iterator"),
            v = function () {
                return this
            };
        t.exports = function (t, e, n, u, d, b, g) {
            i(n, e, u);
            var _, w, k, x = function (t) {
                    if (t === d && S) return S;
                    if (!y && t in C) return C[t];
                    switch (t) {
                        case"keys":
                        case"values":
                        case"entries":
                            return function () {
                                return new n(this, t)
                            }
                    }
                    return function () {
                        return new n(this)
                    }
                }, j = e + " Iterator", O = !1, C = t.prototype, E = C[m] || C["@@iterator"] || d && C[d],
                S = !y && E || x(d), P = "Array" == e && C.entries || E;
            if (P && (_ = o(P.call(new t)), f !== Object.prototype && _.next && (h || o(_) === f || (a ? a(_, f) : "function" != typeof _[m] && l(_, m, v)), s(_, j, !0, !0), h && (p[j] = v))), "values" == d && E && "values" !== E.name && (O = !0, S = function () {
                return E.call(this)
            }), h && !g || C[m] === S || l(C, m, S), p[e] = S, d) if (w = {
                values: x("values"),
                keys: b ? S : x("keys"),
                entries: x("entries")
            }, g) for (k in w) (y || O || !(k in C)) && c(C, k, w[k]); else r({
                target: e,
                proto: !0,
                forced: y || O
            }, w);
            return w
        }
    }, function (t, e, n) {
        var r, i, o, a = n(16), s = n(85), l = n(38), c = n(28), u = n(17), h = n(56), p = u("iterator"), d = !1;
        [].keys && ("next" in (o = [].keys()) ? (i = s(s(o))) !== Object.prototype && (r = i) : d = !0);
        var f = null == r || a((function () {
            var t = {};
            return r[p].call(t) !== t
        }));
        f && (r = {}), h && !f || c(r, p) || l(r, p, (function () {
            return this
        })), t.exports = {IteratorPrototype: r, BUGGY_SAFARI_ITERATORS: d}
    }, function (t, e, n) {
        var r = n(16);
        t.exports = !r((function () {
            function t() {
            }

            return t.prototype.constructor = null, Object.getPrototypeOf(new t) !== t.prototype
        }))
    }, function (t, e, n) {
        var r = n(51), i = n(39), o = function (t) {
            return function (e, n) {
                var o, a, s = String(i(e)), l = r(n), c = s.length;
                return l < 0 || l >= c ? t ? "" : void 0 : (o = s.charCodeAt(l)) < 55296 || o > 56319 || l + 1 === c || (a = s.charCodeAt(l + 1)) < 56320 || a > 57343 ? t ? s.charAt(l) : o : t ? s.slice(l, l + 2) : a - 56320 + (o - 55296 << 10) + 65536
            }
        };
        t.exports = {codeAt: o(!1), charAt: o(!0)}
    }, function (t, e, n) {
        var r = n(23), i = n(83);
        t.exports = function (t, e, n) {
            var o, a;
            return i && "function" == typeof (o = e.constructor) && o !== n && r(a = o.prototype) && a !== n.prototype && i(t, a), t
        }
    }, function (t, e, n) {
        var r = n(12), i = n(21), o = n(118), a = n(35), s = n(44), l = n(69);
        r({target: "Object", stat: !0, sham: !i}, {
            getOwnPropertyDescriptors: function (t) {
                for (var e, n, r = a(t), i = s.f, c = o(r), u = {}, h = 0; c.length > h;) void 0 !== (n = i(r, e = c[h++])) && l(u, e, n);
                return u
            }
        })
    }, function (t, e, n) {
        var r = n(12), i = n(21);
        r({target: "Object", stat: !0, forced: !i, sham: !i}, {defineProperties: n(121)})
    }, function (t, e, n) {
        var r = n(108);
        t.exports = function (t) {
            if (r(t)) throw TypeError("The method doesn't accept regular expressions");
            return t
        }
    }, function (t, e, n) {
        var r = n(17)("match");
        t.exports = function (t) {
            var e = /./;
            try {
                "/./"[t](e)
            } catch (n) {
                try {
                    return e[r] = !1, "/./"[t](e)
                } catch (t) {
                }
            }
            return !1
        }
    }, function (t, e, n) {
        var r = n(47), i = n(23), o = [].slice, a = {}, s = function (t, e, n) {
            if (!(e in a)) {
                for (var r = [], i = 0; i < e; i++) r[i] = "a[" + i + "]";
                a[e] = Function("C,a", "return new C(" + r.join(",") + ")")
            }
            return a[e](t, n)
        };
        t.exports = Function.bind || function (t) {
            var e = r(this), n = o.call(arguments, 1), a = function () {
                var r = n.concat(o.call(arguments));
                return this instanceof a ? s(e, r.length, r) : e.apply(t, r)
            };
            return i(e.prototype) && (a.prototype = e.prototype), a
        }
    }, function (t, e, n) {
        var r = n(12), i = n(99), o = n(51), a = n(32), s = n(30), l = n(102), c = n(69), u = n(70)("splice"),
            h = Math.max, p = Math.min;
        r({target: "Array", proto: !0, forced: !u}, {
            splice: function (t, e) {
                var n, r, u, d, f, y, m = s(this), v = a(m.length), b = i(t, v), g = arguments.length;
                if (0 === g ? n = r = 0 : 1 === g ? (n = 0, r = v - b) : (n = g - 2, r = p(h(o(e), 0), v - b)), v + n - r > 9007199254740991) throw TypeError("Maximum allowed length exceeded");
                for (u = l(m, r), d = 0; d < r; d++) (f = b + d) in m && c(u, d, m[f]);
                if (u.length = r, n < r) {
                    for (d = b; d < v - r; d++) y = d + n, (f = d + r) in m ? m[y] = m[f] : delete m[y];
                    for (d = v; d > v - r + n; d--) delete m[d - 1]
                } else if (n > r) for (d = v - r; d > b; d--) y = d + n - 1, (f = d + r - 1) in m ? m[y] = m[f] : delete m[y];
                for (d = 0; d < n; d++) m[d + b] = arguments[d + 2];
                return m.length = v - r + n, u
            }
        })
    }, function (t, e, n) {
        var r = n(12), i = n(47), o = n(30), a = n(16), s = n(52), l = [], c = l.sort, u = a((function () {
            l.sort(void 0)
        })), h = a((function () {
            l.sort(null)
        })), p = s("sort");
        r({target: "Array", proto: !0, forced: u || !h || !p}, {
            sort: function (t) {
                return void 0 === t ? c.call(o(this)) : c.call(o(this), i(t))
            }
        })
    }, function (t, e, n) {
        var r = n(12), i = n(51), o = n(178), a = n(179), s = n(16), l = 1..toFixed, c = Math.floor,
            u = function (t, e, n) {
                return 0 === e ? n : e % 2 == 1 ? u(t, e - 1, n * t) : u(t * t, e / 2, n)
            }, h = function (t, e, n) {
                for (var r = -1, i = n; ++r < 6;) i += e * t[r], t[r] = i % 1e7, i = c(i / 1e7)
            }, p = function (t, e) {
                for (var n = 6, r = 0; --n >= 0;) r += t[n], t[n] = c(r / e), r = r % e * 1e7
            }, d = function (t) {
                for (var e = 6, n = ""; --e >= 0;) if ("" !== n || 0 === e || 0 !== t[e]) {
                    var r = String(t[e]);
                    n = "" === n ? r : n + a.call("0", 7 - r.length) + r
                }
                return n
            };
        r({
            target: "Number",
            proto: !0,
            forced: l && ("0.000" !== 8e-5.toFixed(3) || "1" !== .9.toFixed(0) || "1.25" !== 1.255.toFixed(2) || "1000000000000000128" !== (0xde0b6b3a7640080).toFixed(0)) || !s((function () {
                l.call({})
            }))
        }, {
            toFixed: function (t) {
                var e, n, r, s, l = o(this), c = i(t), f = [0, 0, 0, 0, 0, 0], y = "", m = "0";
                if (c < 0 || c > 20) throw RangeError("Incorrect fraction digits");
                if (l != l) return "NaN";
                if (l <= -1e21 || l >= 1e21) return String(l);
                if (l < 0 && (y = "-", l = -l), l > 1e-21) if (n = (e = function (t) {
                    for (var e = 0, n = t; n >= 4096;) e += 12, n /= 4096;
                    for (; n >= 2;) e += 1, n /= 2;
                    return e
                }(l * u(2, 69, 1)) - 69) < 0 ? l * u(2, -e, 1) : l / u(2, e, 1), n *= 4503599627370496, (e = 52 - e) > 0) {
                    for (h(f, 0, n), r = c; r >= 7;) h(f, 1e7, 0), r -= 7;
                    for (h(f, u(10, r, 1), 0), r = e - 1; r >= 23;) p(f, 1 << 23), r -= 23;
                    p(f, 1 << r), h(f, 1, 1), p(f, 2), m = d(f)
                } else h(f, 0, n), h(f, 1 << -e, 0), m = d(f) + a.call("0", c);
                return m = c > 0 ? y + ((s = m.length) <= c ? "0." + a.call("0", c - s) + m : m.slice(0, s - c) + "." + m.slice(s - c)) : y + m
            }
        })
    }, function (t, e, n) {
        var r = n(21), i = n(15), o = n(79), a = n(34), s = n(28), l = n(46), c = n(142), u = n(62), h = n(16),
            p = n(58), d = n(66).f, f = n(44).f, y = n(27).f, m = n(88).trim, v = i.Number, b = v.prototype,
            g = "Number" == l(p(b)), _ = function (t) {
                var e, n, r, i, o, a, s, l, c = u(t, !1);
                if ("string" == typeof c && c.length > 2) if (43 === (e = (c = m(c)).charCodeAt(0)) || 45 === e) {
                    if (88 === (n = c.charCodeAt(2)) || 120 === n) return NaN
                } else if (48 === e) {
                    switch (c.charCodeAt(1)) {
                        case 66:
                        case 98:
                            r = 2, i = 49;
                            break;
                        case 79:
                        case 111:
                            r = 8, i = 55;
                            break;
                        default:
                            return +c
                    }
                    for (a = (o = c.slice(2)).length, s = 0; s < a; s++) if ((l = o.charCodeAt(s)) < 48 || l > i) return NaN;
                    return parseInt(o, r)
                }
                return +c
            };
        if (o("Number", !v(" 0o1") || !v("0b1") || v("+0x1"))) {
            for (var w, k = function (t) {
                var e = arguments.length < 1 ? 0 : t, n = this;
                return n instanceof k && (g ? h((function () {
                    b.valueOf.call(n)
                })) : "Number" != l(n)) ? c(new v(_(e)), n, k) : _(e)
            }, x = r ? d(v) : "MAX_VALUE,MIN_VALUE,NaN,NEGATIVE_INFINITY,POSITIVE_INFINITY,EPSILON,isFinite,isInteger,isNaN,isSafeInteger,MAX_SAFE_INTEGER,MIN_SAFE_INTEGER,parseFloat,parseInt,isInteger,fromString,range".split(","), j = 0; x.length > j; j++) s(v, w = x[j]) && !s(k, w) && y(k, w, f(v, w));
            k.prototype = b, b.constructor = k, a(i, "Number", k)
        }
    }, function (t, e) {
    }, function (t, e) {
        var n;
        n = function () {
            return this
        }();
        try {
            n = n || new Function("return this")()
        } catch (t) {
            "object" == typeof window && (n = window)
        }
        t.exports = n
    }, function (t, e, n) {
        var r = n(15), i = n(92), o = r.WeakMap;
        t.exports = "function" == typeof o && /native code/.test(i(o))
    }, function (t, e, n) {
        var r = n(95), i = n(116);
        t.exports = r ? {}.toString : function () {
            return "[object " + i(this) + "]"
        }
    }, function (t, e, n) {
        var r = n(47), i = n(30), o = n(65), a = n(32), s = function (t) {
            return function (e, n, s, l) {
                r(n);
                var c = i(e), u = o(c), h = a(c.length), p = t ? h - 1 : 0, d = t ? -1 : 1;
                if (s < 2) for (; ;) {
                    if (p in u) {
                        l = u[p], p += d;
                        break
                    }
                    if (p += d, t ? p < 0 : h <= p) throw TypeError("Reduce of empty array with no initial value")
                }
                for (; t ? p >= 0 : h > p; p += d) p in u && (l = n(l, u[p], p, c));
                return l
            }
        };
        t.exports = {left: s(!1), right: s(!0)}
    }, function (t, e, n) {
        var r = n(21), i = n(16), o = n(67), a = n(101), s = n(78), l = n(30), c = n(65), u = Object.assign,
            h = Object.defineProperty;
        t.exports = !u || i((function () {
            if (r && 1 !== u({b: 1}, u(h({}, "a", {
                enumerable: !0, get: function () {
                    h(this, "b", {value: 3, enumerable: !1})
                }
            }), {b: 2})).b) return !0;
            var t = {}, e = {}, n = Symbol();
            return t[n] = 7, "abcdefghijklmnopqrst".split("").forEach((function (t) {
                e[t] = t
            })), 7 != u({}, t)[n] || "abcdefghijklmnopqrst" != o(u({}, e)).join("")
        })) ? function (t, e) {
            for (var n = l(t), i = arguments.length, u = 1, h = a.f, p = s.f; i > u;) for (var d, f = c(arguments[u++]), y = h ? o(f).concat(h(f)) : o(f), m = y.length, v = 0; m > v;) d = y[v++], r && !p.call(f, d) || (n[d] = f[d]);
            return n
        } : u
    }, function (t, e, n) {
        var r = n(15);
        t.exports = r.Promise
    }, function (t, e, n) {
        var r = n(34);
        t.exports = function (t, e, n) {
            for (var i in e) r(t, i, e[i], n);
            return t
        }
    }, function (t, e, n) {
        var r = n(23);
        t.exports = function (t) {
            if (!r(t) && null !== t) throw TypeError("Can't set " + String(t) + " as a prototype");
            return t
        }
    }, function (t, e) {
        t.exports = function (t, e, n) {
            if (!(t instanceof e)) throw TypeError("Incorrect " + (n ? n + " " : "") + "invocation");
            return t
        }
    }, function (t, e, n) {
        var r = n(22), i = n(128), o = n(32), a = n(82), s = n(129), l = n(130), c = function (t, e) {
            this.stopped = t, this.result = e
        };
        t.exports = function (t, e, n) {
            var u, h, p, d, f, y, m, v = n && n.that, b = !(!n || !n.AS_ENTRIES), g = !(!n || !n.IS_ITERATOR),
                _ = !(!n || !n.INTERRUPTED), w = a(e, v, 1 + b + _), k = function (t) {
                    return u && l(u), new c(!0, t)
                }, x = function (t) {
                    return b ? (r(t), _ ? w(t[0], t[1], k) : w(t[0], t[1])) : _ ? w(t, k) : w(t)
                };
            if (g) u = t; else {
                if ("function" != typeof (h = s(t))) throw TypeError("Target is not iterable");
                if (i(h)) {
                    for (p = 0, d = o(t.length); d > p; p++) if ((f = x(t[p])) && f instanceof c) return f;
                    return new c(!1)
                }
                u = h.call(t)
            }
            for (y = u.next; !(m = y.call(u)).done;) {
                try {
                    f = x(m.value)
                } catch (t) {
                    throw l(u), t
                }
                if ("object" == typeof f && f && f instanceof c) return f
            }
            return new c(!1)
        }
    }, function (t, e, n) {
        var r, i, o, a, s, l, c, u, h = n(15), p = n(44).f, d = n(133).set, f = n(134), y = n(164), m = n(80),
            v = h.MutationObserver || h.WebKitMutationObserver, b = h.document, g = h.process, _ = h.Promise,
            w = p(h, "queueMicrotask"), k = w && w.value;
        k || (r = function () {
            var t, e;
            for (m && (t = g.domain) && t.exit(); i;) {
                e = i.fn, i = i.next;
                try {
                    e()
                } catch (t) {
                    throw i ? a() : o = void 0, t
                }
            }
            o = void 0, t && t.enter()
        }, f || m || y || !v || !b ? _ && _.resolve ? ((c = _.resolve(void 0)).constructor = _, u = c.then, a = function () {
            u.call(c, r)
        }) : a = m ? function () {
            g.nextTick(r)
        } : function () {
            d.call(h, r)
        } : (s = !0, l = b.createTextNode(""), new v(r).observe(l, {characterData: !0}), a = function () {
            l.data = s = !s
        })), t.exports = k || function (t) {
            var e = {fn: t, next: void 0};
            o && (o.next = e), i || (i = e, a()), o = e
        }
    }, function (t, e, n) {
        var r = n(77);
        t.exports = /web0s(?!.*chrome)/i.test(r)
    }, function (t, e, n) {
        var r = n(22), i = n(23), o = n(135);
        t.exports = function (t, e) {
            if (r(t), i(e) && e.constructor === t) return e;
            var n = o.f(t);
            return (0, n.resolve)(e), n.promise
        }
    }, function (t, e, n) {
        var r = n(15);
        t.exports = function (t, e) {
            var n = r.console;
            n && n.error && (1 === arguments.length ? n.error(t) : n.error(t, e))
        }
    }, function (t, e) {
        t.exports = function (t) {
            try {
                return {error: !1, value: t()}
            } catch (t) {
                return {error: !0, value: t}
            }
        }
    }, function (t, e) {
        t.exports = "object" == typeof window
    }, function (t, e, n) {
        var r = n(35), i = n(66).f, o = {}.toString,
            a = "object" == typeof window && window && Object.getOwnPropertyNames ? Object.getOwnPropertyNames(window) : [];
        t.exports.f = function (t) {
            return a && "[object Window]" == o.call(t) ? function (t) {
                try {
                    return i(t)
                } catch (t) {
                    return a.slice()
                }
            }(t) : i(r(t))
        }
    }, function (t, e, n) {
        var r = n(139).IteratorPrototype, i = n(58), o = n(63), a = n(84), s = n(71), l = function () {
            return this
        };
        t.exports = function (t, e, n) {
            var c = e + " Iterator";
            return t.prototype = i(r, {next: o(1, n)}), a(t, c, !1, !0), s[c] = l, t
        }
    }, function (t, e, n) {
        var r = n(82), i = n(30), o = n(172), a = n(128), s = n(32), l = n(69), c = n(129);
        t.exports = function (t) {
            var e, n, u, h, p, d, f = i(t), y = "function" == typeof this ? this : Array, m = arguments.length,
                v = m > 1 ? arguments[1] : void 0, b = void 0 !== v, g = c(f), _ = 0;
            if (b && (v = r(v, m > 2 ? arguments[2] : void 0, 2)), null == g || y == Array && a(g)) for (n = new y(e = s(f.length)); e > _; _++) d = b ? v(f[_], _) : f[_], l(n, _, d); else for (p = (h = g.call(f)).next, n = new y; !(u = p.call(h)).done; _++) d = b ? o(h, v, [u.value, _], !0) : u.value, l(n, _, d);
            return n.length = _, n
        }
    }, function (t, e, n) {
        var r = n(22), i = n(130);
        t.exports = function (t, e, n, o) {
            try {
                return o ? e(r(n)[0], n[1]) : e(n)
            } catch (e) {
                throw i(t), e
            }
        }
    }, function (t, e, n) {
        var r = n(30), i = Math.floor, o = "".replace, a = /\$([$&'`]|\d{1,2}|<[^>]*>)/g, s = /\$([$&'`]|\d{1,2})/g;
        t.exports = function (t, e, n, l, c, u) {
            var h = n + t.length, p = l.length, d = s;
            return void 0 !== c && (c = r(c), d = a), o.call(u, d, (function (r, o) {
                var a;
                switch (o.charAt(0)) {
                    case"$":
                        return "$";
                    case"&":
                        return t;
                    case"`":
                        return e.slice(0, n);
                    case"'":
                        return e.slice(h);
                    case"<":
                        a = c[o.slice(1, -1)];
                        break;
                    default:
                        var s = +o;
                        if (0 === s) return r;
                        if (s > p) {
                            var u = i(s / 10);
                            return 0 === u ? r : u <= p ? void 0 === l[u - 1] ? o.charAt(1) : l[u - 1] + o.charAt(1) : r
                        }
                        a = l[s - 1]
                }
                return void 0 === a ? "" : a
            }))
        }
    }, function (t, e, n) {
        var r = n(12), i = n(53).every;
        r({target: "Array", proto: !0, forced: !n(52)("every")}, {
            every: function (t) {
                return i(this, t, arguments.length > 1 ? arguments[1] : void 0)
            }
        })
    }, function (t, e, n) {
        var r = n(15), i = n(88).trim, o = n(89), a = r.parseInt, s = /^[+-]?0[Xx]/,
            l = 8 !== a(o + "08") || 22 !== a(o + "0x16");
        t.exports = l ? function (t, e) {
            var n = i(String(t));
            return a(n, e >>> 0 || (s.test(n) ? 16 : 10))
        } : a
    }, function (t, e, n) {
        var r = n(15), i = n(88).trim, o = n(89), a = r.parseFloat, s = 1 / a(o + "-0") != -1 / 0;
        t.exports = s ? function (t) {
            var e = i(String(t)), n = a(e);
            return 0 === n && "-" == e.charAt(0) ? -0 : n
        } : a
    }, function (t, e, n) {
        var r = n(12), i = n(15), o = n(77), a = [].slice, s = function (t) {
            return function (e, n) {
                var r = arguments.length > 2, i = r ? a.call(arguments, 2) : void 0;
                return t(r ? function () {
                    ("function" == typeof e ? e : Function(e)).apply(this, i)
                } : e, n)
            }
        };
        r({global: !0, bind: !0, forced: /MSIE .\./.test(o)}, {
            setTimeout: s(i.setTimeout),
            setInterval: s(i.setInterval)
        })
    }, function (t, e, n) {
        var r = n(46);
        t.exports = function (t) {
            if ("number" != typeof t && "Number" != r(t)) throw TypeError("Incorrect invocation");
            return +t
        }
    }, function (t, e, n) {
        var r = n(51), i = n(39);
        t.exports = function (t) {
            var e = String(i(this)), n = "", o = r(t);
            if (o < 0 || o == 1 / 0) throw RangeError("Wrong number of repetitions");
            for (; o > 0; (o >>>= 1) && (e += e)) 1 & o && (n += e);
            return n
        }
    }, function (t, e, n) {
        var r = n(12), i = n(88).trim;
        r({target: "String", proto: !0, forced: n(181)("trim")}, {
            trim: function () {
                return i(this)
            }
        })
    }, function (t, e, n) {
        var r = n(16), i = n(89);
        t.exports = function (t) {
            return r((function () {
                return !!i[t]() || "​᠎" != "​᠎"[t]() || i[t].name !== t
            }))
        }
    }, function (t, e, n) {
        n(12)({target: "Date", stat: !0}, {
            now: function () {
                return (new Date).getTime()
            }
        })
    }, function (t, e, n) {
        n.r(e), n.d(e, "JSONEditor", (function () {
            return vl
        }));
        n(112), n(49), n(1), n(43), n(40), n(57), n(81), n(19), n(20), n(36), n(18), n(125), n(11), n(126), n(25), n(2), n(3), n(4), n(0), n(5), n(6), n(37), n(29), n(31), n(59), n(24), n(41), n(60), n(26);
        var r = ["actionscript", "batchfile", "c", "c++", "cpp", "coffee", "csharp", "css", "dart", "django", "ejs", "erlang", "golang", "groovy", "handlebars", "haskell", "haxe", "html", "ini", "jade", "java", "javascript", "json", "less", "lisp", "lua", "makefile", "matlab", "mysql", "objectivec", "pascal", "perl", "pgsql", "php", "python", "r", "ruby", "sass", "scala", "scss", "smarty", "sql", "sqlserver", "stylus", "svg", "twig", "vbscript", "xml", "yaml"],
            i = [function (t) {
                return "string" === t.type && "color" === t.format && "colorpicker"
            }, function (t) {
                return "string" === t.type && ["ip", "ipv4", "ipv6", "hostname"].includes(t.format) && "ip"
            }, function (t) {
                return "string" === t.type && r.includes(t.format) && "ace"
            }, function (t) {
                return "string" === t.type && ["xhtml", "bbcode"].includes(t.format) && "sceditor"
            }, function (t) {
                return "string" === t.type && "markdown" === t.format && "simplemde"
            }, function (t) {
                return "string" === t.type && "jodit" === t.format && "jodit"
            }, function (t) {
                return "string" === t.type && "autocomplete" === t.format && "autocomplete"
            }, function (t) {
                return "string" === t.type && "uuid" === t.format && "uuid"
            }, function (t) {
                return "info" === t.format && "info"
            }, function (t) {
                return "button" === t.format && "button"
            }, function (t) {
                if (("integer" === t.type || "number" === t.type) && "stepper" === t.format) return "stepper"
            }, function (t) {
                if (t.links) for (var e = 0; e < t.links.length; e++) if (t.links[e].rel && "describedby" === t.links[e].rel.toLowerCase()) return "describedBy"
            }, function (t) {
                return ["string", "integer"].includes(t.type) && ["starrating", "rating"].includes(t.format) && "starrating"
            }, function (t) {
                return ["string", "integer"].includes(t.type) && ["date", "time", "datetime-local"].includes(t.format) && "datetime"
            }, function (t) {
                return (t.oneOf || t.anyOf) && "multiple"
            }, function (t) {
                if ("array" === t.type && t.items && !Array.isArray(t.items) && ["string", "number", "integer"].includes(t.items.type)) {
                    if ("choices" === t.format) return "arrayChoices";
                    if (t.uniqueItems) {
                        if ("selectize" === t.format) return "arraySelectize";
                        if ("select2" === t.format) return "arraySelect2";
                        if (t.items.enum) return "multiselect"
                    }
                }
            }, function (t) {
                if (t.enum) {
                    if ("array" === t.type || "object" === t.type) return "enum";
                    if ("number" === t.type || "integer" === t.type || "string" === t.type) return "radio" === t.format ? "radio" : "select2" === t.format ? "select2" : "selectize" === t.format ? "selectize" : "choices" === t.format ? "choices" : "select"
                }
            }, function (t) {
                if (t.enumSource) return "radio" === t.format ? "radio" : "select2" === t.format ? "select2" : "selectize" === t.format ? "selectize" : "choices" === t.format ? "choices" : "select"
            }, function (t) {
                return "array" === t.type && "table" === t.format && "table"
            }, function (t) {
                return "string" === t.type && "url" === t.format && window.FileReader && t.options && t.options.upload === Object(t.options.upload) && "upload"
            }, function (t) {
                return "string" === t.type && t.media && "base64" === t.media.binaryEncoding && "base64"
            }, function (t) {
                return "any" === t.type && "multiple"
            }, function (t) {
                if ("boolean" === t.type) return "checkbox" === t.format || t.options && t.options.checkbox ? "checkbox" : "select2" === t.format ? "select2" : "selectize" === t.format ? "selectize" : "choices" === t.format ? "choices" : "select"
            }, function (t) {
                return "string" === t.type && "signature" === t.format && "signature"
            }, function (t) {
                return "string" == typeof t.type && t.type
            }, function (t) {
                return !t.type && t.properties && "object"
            }, function (t) {
                return "string" != typeof t.type && "multiple"
            }];

        function o(t, e) {
            return function (t) {
                if (Array.isArray(t)) return t
            }(t) || function (t, e) {
                var n = t && ("undefined" != typeof Symbol && t[Symbol.iterator] || t["@@iterator"]);
                if (null == n) return;
                var r, i, o = [], a = !0, s = !1;
                try {
                    for (n = n.call(t); !(a = (r = n.next()).done) && (o.push(r.value), !e || o.length !== e); a = !0) ;
                } catch (t) {
                    s = !0, i = t
                } finally {
                    try {
                        a || null == n.return || n.return()
                    } finally {
                        if (s) throw i
                    }
                }
                return o
            }(t, e) || function (t, e) {
                if (!t) return;
                if ("string" == typeof t) return a(t, e);
                var n = Object.prototype.toString.call(t).slice(8, -1);
                "Object" === n && t.constructor && (n = t.constructor.name);
                if ("Map" === n || "Set" === n) return Array.from(t);
                if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return a(t, e)
            }(t, e) || function () {
                throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }()
        }

        function a(t, e) {
            (null == e || e > t.length) && (e = t.length);
            for (var n = 0, r = new Array(e); n < e; n++) r[n] = t[n];
            return r
        }

        var s = {}, l = {};
        l.en = {
            error_notset: "ویژگی باید تنظیم شود",
            error_notempty: "مقدار مورد نیاز",
            error_enum: "مقدار باید یکی از مقادیر شمارش شده باشد",
            error_const: "مقدار باید مقدار ثابت باشد",
            error_anyOf: "مقدار باید در برابر حداقل یکی از طرحواره های ارائه شده تایید شود",
            error_oneOf: "مقدار باید دقیقاً با یکی از طرحواره های ارائه شده اعتبارسنجی شود. در حال حاضر در برابر {{0}} طرحواره اعتبارسنجی می شود.",
            error_not: "مقدار نباید در برابر طرح ارائه شده اعتبارسنجی شود",
            error_type_union: "مقدار باید یکی از انواع ارائه شده باشد",
            error_type: "مقدار باید از نوع {{0}} باشد",
            error_disallow_union: "مقدار نباید یکی از انواع غیر مجاز ارائه شده باشد",
            error_disallow: "مقدار نباید از نوع {{0}} باشد",
            error_multipleOf: "مقدار باید مضربی از {{0}} باشد",
            error_maximum_excl: "مقدار باید کمتر از {{0}} باشد",
            error_maximum_incl: "مقدار باید حداکثر {{0}} باشد",
            error_minimum_excl: "مقدار باید بیشتر از {{0}} باشد",
            error_minimum_incl: "مقدار باید حداقل {{0}} باشد",
            error_maxLength: "مقدار باید حداکثر {{0}} نویسه باشد",
            error_minLength: "مقدار باید حداقل {{0}} نویسه باشد",
            error_pattern: "مقدار باید با الگوی {{0}} مطابقت داشته باشد",
            error_additionalItems: "هیچ آیتم اضافی در این آرایه مجاز نیست",
            error_maxItems: "مقدار باید حداکثر {{0}} مورد داشته باشد",
            error_minItems: "مقدار باید حداقل {{0}} مورد داشته باشد",
            error_uniqueItems: "آرایه باید موارد منحصر به فرد داشته باشد",
            error_maxProperties: "شیء باید حداکثر {{0}} ویژگی داشته باشد",
            error_minProperties: "شیء باید حداقل {{0}} ویژگی داشته باشد",
            error_required: "شیء دارای ویژگی مورد نیاز {{0}}  نیست",
            error_additional_properties: "ویژگی های اضافی مجاز نیستند, اما ویژگی {{0}} تنظیم شده است",
            error_property_names_exceeds_maxlength: "نام ویژگی {{0}} بیش از maxLength است",
            error_property_names_enum_mismatch: "نام ویژگی {{0}} با هیچ مقدار enum مطابقت ندارد",
            error_property_names_const_mismatch: "نام ویژگی {{0}} با مقدار const مطابقت ندارد",
            error_property_names_pattern_mismatch: "نام ویژگی {{0}} با الگو مطابقت ندارد",
            error_property_names_false: "نام ویژگی {{0}} زمانی که nameName نادرست باشد, با شکست مواجه می شود",
            error_property_names_maxlength: "نام ویژگی {{0}} نمی تواند با حداکثر طول نامعتبر مطابقت داشته باشد",
            error_property_names_enum: "نام ویژگی {{0}} نمی تواند با شماره نامعتبر مطابقت داشته باشد",
            error_property_names_pattern: "نام ویژگی {{0}} نمی تواند با الگوی نامعتبر مطابقت داشته باشد",
            error_property_names_unsupported: "نام خصوصیت پشتیبانی نشده {{0}}",
            error_dependency: "باید دارای ویژگی {{0}}",
            error_date: "تاریخ باید در قالب {{0}} باشد",
            error_time: "زمان باید در قالب {{0}} باشد",
            error_datetime_local: "Datetime باید در قالب باشد {{0}}",
            error_invalid_epoch: "تاریخ باید بیشتر از 1 ژانویه 1970 باشد",
            error_ipv4: "مقدار باید یک آدرس IPv4 معتبر به شکل 4 عدد بین 0 تا 255 باشد که با نقطه از هم جدا شده اند.",
            error_ipv6: "مقدار باید یک آدرس IPv6 معتبر باشد",
            error_hostname: "نام میزبان قالب اشتباهی دارد",
            button_save: "ذخیره",
            button_copy: "کپی",
            button_cancel: "لغو",
            button_add: "اضافه کردن",
            button_delete_all: "همه",
            button_delete_all_title: "حذف همه",
            button_delete_last: "آخر {{0}}",
            button_delete_last_title: "حذف آخرین {{0}}",
            button_add_row_title: "اضافه کردن {{0}}",
            button_move_down_title: "حرکت به پایین",
            button_move_up_title: "حرکت به بالا",
            button_properties: "ویژگی ها",
            button_object_properties: "ویژگی های شی",
            button_copy_row_title: "کپی {{0}}",
            button_delete_row_title: "حذف {{0}}",
            button_delete_row_title_short: "حذف",
            button_copy_row_title_short: "کپی",
            button_collapse: "بستن",
            button_expand: "بسط دادن",
            button_edit_json: "JSON را ویرایش کنید",
            button_upload: "بارگذاری",
            flatpickr_toggle_button: "تغییر وضعیت",
            flatpickr_clear_button: "پاک کردن",
            choices_placeholder_text: "برای افزودن ارزش شروع به تایپ کنید",
            default_array_item_title: "ایتم",
            button_delete_node_warning: "آیا مطمئن هستید که می خواهید این گره را حذف کنید؟"
        }, Object.entries(s).forEach((function (t) {
            var e = o(t, 2), n = e[0], r = e[1];
            s[n].options = r.options || {}
        }));
        var c = {
            options: {
                upload: function (t, e, n) {
                    console.log("Upload handler required for upload editor")
                }, use_name_attributes: !0, prompt_before_delete: !0, use_default_values: !0, max_depth: 0
            },
            theme: "html",
            template: "default",
            themes: {},
            callbacks: {},
            templates: {},
            iconlibs: {},
            editors: s,
            languages: l,
            resolvers: i,
            custom_validators: [],
            default_language: "en",
            language: "en",
            translate: function (t, e, n) {
                var r = {};
                n && n.options && n.options.error_messages && n.options.error_messages[c.language] && (r = n.options.error_messages[c.language]);
                var i = c.languages[c.language];
                if (!i) throw new Error("Unknown language ".concat(c.language));
                var o = r[t] || i[t] || c.languages.en[t] || t;
                if (e) for (var a = 0; a < e.length; a++) o = o.replace(new RegExp("\\{\\{".concat(a, "}}"), "g"), e[a]);
                return o
            },
            translateProperty: function (t, e) {
                return t
            }
        };
        n(87), n(174), n(45), n(72), n(42), n(48), n(61), n(13), n(143), n(144), n(54);

        function u(t, e, n, r) {
            try {
                switch (t.format) {
                    case"ipv4":
                        !function (t) {
                            var e = t.split(".");
                            if (4 !== e.length) throw new Error("error_ipv4");
                            e.forEach((function (t) {
                                if (isNaN(+t) || +t < 0 || +t > 255) throw new Error("error_ipv4")
                            }))
                        }(e);
                        break;
                    case"ipv6":
                        !function (t) {
                            if (!t.match("^(?:(?:(?:[a-fA-F0-9]{1,4}:){6}|(?=(?:[a-fA-F0-9]{0,4}:){2,6}(?:[0-9]{1,3}.){3}[0-9]{1,3}$)(([0-9a-fA-F]{1,4}:){1,5}|:)((:[0-9a-fA-F]{1,4}){1,5}:|:)|::(?:[a-fA-F0-9]{1,4}:){5})(?:(?:25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9]?[0-9]).){3}(?:25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9]?[0-9])|(?:[a-fA-F0-9]{1,4}:){7}[a-fA-F0-9]{1,4}|(?=(?:[a-fA-F0-9]{0,4}:){0,7}[a-fA-F0-9]{0,4}$)(([0-9a-fA-F]{1,4}:){1,7}|:)((:[0-9a-fA-F]{1,4}){1,7}|:)|(?:[a-fA-F0-9]{1,4}:){7}:|:(:[a-fA-F0-9]{1,4}){7})$")) throw new Error("error_ipv6")
                        }(e);
                        break;
                    case"hostname":
                        !function (t) {
                            if (!t.match("(?=^.{4,253}$)(^((?!-)[a-zA-Z0-9-]{0,62}[a-zA-Z0-9].)+[a-zA-Z]{2,63}$)")) throw new Error("error_hostname")
                        }(e)
                }
                return []
            } catch (t) {
                return [{path: n, property: "format", message: r(t.message)}]
            }
        }

        n(109);

        function h(t) {
            return (h = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function p(t) {
            return null !== t && ("object" === h(t) && !t.nodeType && t !== t.window && !(t.constructor && !v(t.constructor.prototype, "isPrototypeOf")))
        }

        function d(t) {
            return p(t) ? f({}, t) : Array.isArray(t) ? t.map(d) : t
        }

        function f(t) {
            for (var e = arguments.length, n = new Array(e > 1 ? e - 1 : 0), r = 1; r < e; r++) n[r - 1] = arguments[r];
            return n.forEach((function (e) {
                e && Object.keys(e).forEach((function (n) {
                    e[n] && p(e[n]) ? (v(t, n) || (t[n] = {}), f(t[n], e[n])) : Array.isArray(e[n]) ? t[n] = d(e[n]) : t[n] = e[n]
                }))
            })), t
        }

        function y(t, e) {
            var n = document.createEvent("HTMLEvents");
            n.initEvent(e, !0, !0), t.dispatchEvent(n)
        }

        function m(t) {
            return t && ("[object ShadowRoot]" === t.toString() ? t : m(t.parentNode))
        }

        function v(t, e) {
            return t && Object.prototype.hasOwnProperty.call(t, e)
        }

        var b = /^\s*(-|\+)?(\d+|(\d*(\.\d*)))([eE][+-]?\d+)?\s*$/;
        var g = /^\s*(-|\+)?(\d+)\s*$/;

        function _() {
            var t = (new Date).getTime();
            return "undefined" != typeof performance && "function" == typeof performance.now && (t += performance.now()), "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, (function (e) {
                var n = (t + 16 * Math.random()) % 16 | 0;
                return t = Math.floor(t / 16), ("x" === e ? n : 3 & n | 8).toString(16)
            }))
        }

        function w(t, e) {
            var n = "undefined" != typeof Symbol && t[Symbol.iterator] || t["@@iterator"];
            if (!n) {
                if (Array.isArray(t) || (n = E(t)) || e && t && "number" == typeof t.length) {
                    n && (t = n);
                    var r = 0, i = function () {
                    };
                    return {
                        s: i, n: function () {
                            return r >= t.length ? {done: !0} : {done: !1, value: t[r++]}
                        }, e: function (t) {
                            throw t
                        }, f: i
                    }
                }
                throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }
            var o, a = !0, s = !1;
            return {
                s: function () {
                    n = n.call(t)
                }, n: function () {
                    var t = n.next();
                    return a = t.done, t
                }, e: function (t) {
                    s = !0, o = t
                }, f: function () {
                    try {
                        a || null == n.return || n.return()
                    } finally {
                        if (s) throw o
                    }
                }
            }
        }

        function k(t, e) {
            var n = Object.keys(t);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(t);
                e && (r = r.filter((function (e) {
                    return Object.getOwnPropertyDescriptor(t, e).enumerable
                }))), n.push.apply(n, r)
            }
            return n
        }

        function x(t) {
            for (var e = 1; e < arguments.length; e++) {
                var n = null != arguments[e] ? arguments[e] : {};
                e % 2 ? k(Object(n), !0).forEach((function (e) {
                    j(t, e, n[e])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(n)) : k(Object(n)).forEach((function (e) {
                    Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(n, e))
                }))
            }
            return t
        }

        function j(t, e, n) {
            return e in t ? Object.defineProperty(t, e, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : t[e] = n, t
        }

        function O(t, e) {
            return function (t) {
                if (Array.isArray(t)) return t
            }(t) || function (t, e) {
                var n = t && ("undefined" != typeof Symbol && t[Symbol.iterator] || t["@@iterator"]);
                if (null == n) return;
                var r, i, o = [], a = !0, s = !1;
                try {
                    for (n = n.call(t); !(a = (r = n.next()).done) && (o.push(r.value), !e || o.length !== e); a = !0) ;
                } catch (t) {
                    s = !0, i = t
                } finally {
                    try {
                        a || null == n.return || n.return()
                    } finally {
                        if (s) throw i
                    }
                }
                return o
            }(t, e) || E(t, e) || function () {
                throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }()
        }

        function C(t) {
            return function (t) {
                if (Array.isArray(t)) return S(t)
            }(t) || function (t) {
                if ("undefined" != typeof Symbol && null != t[Symbol.iterator] || null != t["@@iterator"]) return Array.from(t)
            }(t) || E(t) || function () {
                throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }()
        }

        function E(t, e) {
            if (t) {
                if ("string" == typeof t) return S(t, e);
                var n = Object.prototype.toString.call(t).slice(8, -1);
                return "Object" === n && t.constructor && (n = t.constructor.name), "Map" === n || "Set" === n ? Array.from(t) : "Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n) ? S(t, e) : void 0
            }
        }

        function S(t, e) {
            (null == e || e > t.length) && (e = t.length);
            for (var n = 0, r = new Array(e); n < e; n++) r[n] = t[n];
            return r
        }

        function P(t) {
            return (P = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function R(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        var L = function () {
            function t(e, n, r, i) {
                !function (t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                }(this, t), this.jsoneditor = e, this.schema = n || this.jsoneditor.schema, this.options = r || {}, this.translate = this.jsoneditor.translate || i.translate, this.translateProperty = this.jsoneditor.translateProperty || i.translateProperty, this.defaults = i, this._validateSubSchema = {
                    const: function (t, e, n) {
                        return JSON.stringify(t.const) === JSON.stringify(e) && !(Array.isArray(e) || "object" === P(e)) ? [] : [{
                            path: n,
                            property: "const",
                            message: this.translate("error_const", null, t)
                        }]
                    }, enum: function (t, e, n) {
                        var r = JSON.stringify(e);
                        return t.enum.some((function (t) {
                            return r === JSON.stringify(t)
                        })) ? [] : [{path: n, property: "enum", message: this.translate("error_enum", null, t)}]
                    }, extends: function (t, e, n) {
                        var r = this;
                        return t.extends.reduce((function (t, i) {
                            return t.push.apply(t, C(r._validateSchema(i, e, n))), t
                        }), [])
                    }, allOf: function (t, e, n) {
                        var r = this;
                        return t.allOf.reduce((function (t, i) {
                            return t.push.apply(t, C(r._validateSchema(i, e, n))), t
                        }), [])
                    }, anyOf: function (t, e, n) {
                        var r = this;
                        return t.anyOf.some((function (t) {
                            return !r._validateSchema(t, e, n).length
                        })) ? [] : [{path: n, property: "anyOf", message: this.translate("error_anyOf", null, t)}]
                    }, oneOf: function (t, e, n) {
                        var r = this, i = 0, o = [];
                        t.oneOf.forEach((function (t, a) {
                            var s = r._validateSchema(t, e, n);
                            s.length || i++, s.forEach((function (t) {
                                t.path = "".concat(n, ".oneOf[").concat(a, "]").concat(t.path.substr(n.length))
                            })), o.push.apply(o, C(s))
                        }));
                        var a = [];
                        return 1 !== i && (a.push({
                            path: n,
                            property: "oneOf",
                            message: this.translate("error_oneOf", [i], t)
                        }), a.push.apply(a, o)), a
                    }, not: function (t, e, n) {
                        return this._validateSchema(t.not, e, n).length ? [] : [{
                            path: n,
                            property: "not",
                            message: this.translate("error_not", null, t)
                        }]
                    }, type: function (t, e, n) {
                        var r = this;
                        if (Array.isArray(t.type)) {
                            if (!t.type.some((function (t) {
                                return r._checkType(t, e)
                            }))) return [{
                                path: n,
                                property: "type",
                                message: this.translate("error_type_union", null, t)
                            }]
                        } else if (["date", "time", "datetime-local"].includes(t.format) && "integer" === t.type) {
                            if (!this._checkType("string", "".concat(e))) return [{
                                path: n,
                                property: "type",
                                message: this.translate("error_type", [t.format], t)
                            }]
                        } else if (!this._checkType(t.type, e)) return [{
                            path: n,
                            property: "type",
                            message: this.translate("error_type", [t.type], t)
                        }];
                        return []
                    }, disallow: function (t, e, n) {
                        var r = this;
                        if (Array.isArray(t.disallow)) {
                            if (t.disallow.some((function (t) {
                                return r._checkType(t, e)
                            }))) return [{
                                path: n,
                                property: "disallow",
                                message: this.translate("error_disallow_union", null, t)
                            }]
                        } else if (this._checkType(t.disallow, e)) return [{
                            path: n,
                            property: "disallow",
                            message: this.translate("error_disallow", [t.disallow], t)
                        }];
                        return []
                    }
                }, this._validateNumberSubSchema = {
                    multipleOf: function (t, e, n) {
                        return this._validateNumberSubSchemaMultipleDivisible(t, e, n)
                    }, divisibleBy: function (t, e, n) {
                        return this._validateNumberSubSchemaMultipleDivisible(t, e, n)
                    }, maximum: function (t, e, n) {
                        var r = t.exclusiveMaximum ? e < t.maximum : e <= t.maximum;
                        return window.math ? r = window.math[t.exclusiveMaximum ? "smaller" : "smallerEq"](window.math.bignumber(e), window.math.bignumber(t.maximum)) : window.Decimal && (r = new window.Decimal(e)[t.exclusiveMaximum ? "lt" : "lte"](new window.Decimal(t.maximum))), r ? [] : [{
                            path: n,
                            property: "maximum",
                            message: this.translate(t.exclusiveMaximum ? "error_maximum_excl" : "error_maximum_incl", [t.maximum], t)
                        }]
                    }, minimum: function (t, e, n) {
                        var r = t.exclusiveMinimum ? e > t.minimum : e >= t.minimum;
                        return window.math ? r = window.math[t.exclusiveMinimum ? "larger" : "largerEq"](window.math.bignumber(e), window.math.bignumber(t.minimum)) : window.Decimal && (r = new window.Decimal(e)[t.exclusiveMinimum ? "gt" : "gte"](new window.Decimal(t.minimum))), r ? [] : [{
                            path: n,
                            property: "minimum",
                            message: this.translate(t.exclusiveMinimum ? "error_minimum_excl" : "error_minimum_incl", [t.minimum], t)
                        }]
                    }
                }, this._validateStringSubSchema = {
                    maxLength: function (t, e, n) {
                        var r = [];
                        return "".concat(e).length > t.maxLength && r.push({
                            path: n,
                            property: "maxLength",
                            message: this.translate("error_maxLength", [t.maxLength], t)
                        }), r
                    }, minLength: function (t, e, n) {
                        return "".concat(e).length < t.minLength ? [{
                            path: n,
                            property: "minLength",
                            message: this.translate(1 === t.minLength ? "error_notempty" : "error_minLength", [t.minLength], t)
                        }] : []
                    }, pattern: function (t, e, n) {
                        return new RegExp(t.pattern).test(e) ? [] : [{
                            path: n,
                            property: "pattern",
                            message: t.options && t.options.patternmessage ? t.options.patternmessage : this.translate("error_pattern", [t.pattern], t)
                        }]
                    }
                }, this._validateArraySubSchema = {
                    items: function (t, e, n) {
                        var r = this, i = [];
                        if (Array.isArray(t.items)) for (var o = 0; o < e.length; o++) if (t.items[o]) i.push.apply(i, C(this._validateSchema(t.items[o], e[o], "".concat(n, ".").concat(o)))); else {
                            if (!0 === t.additionalItems) break;
                            if (!t.additionalItems) {
                                if (!1 === t.additionalItems) {
                                    i.push({
                                        path: n,
                                        property: "additionalItems",
                                        message: this.translate("error_additionalItems", null, t)
                                    });
                                    break
                                }
                                break
                            }
                            i.push.apply(i, C(this._validateSchema(t.additionalItems, e[o], "".concat(n, ".").concat(o))))
                        } else e.forEach((function (e, o) {
                            i.push.apply(i, C(r._validateSchema(t.items, e, "".concat(n, ".").concat(o))))
                        }));
                        return i
                    }, maxItems: function (t, e, n) {
                        return e.length > t.maxItems ? [{
                            path: n,
                            property: "maxItems",
                            message: this.translate("error_maxItems", [t.maxItems], t)
                        }] : []
                    }, minItems: function (t, e, n) {
                        return e.length < t.minItems ? [{
                            path: n,
                            property: "minItems",
                            message: this.translate("error_minItems", [t.minItems], t)
                        }] : []
                    }, uniqueItems: function (t, e, n) {
                        for (var r = {}, i = 0; i < e.length; i++) {
                            var o = JSON.stringify(e[i]);
                            if (r[o]) return [{
                                path: n,
                                property: "uniqueItems",
                                message: this.translate("error_uniqueItems", null, t)
                            }];
                            r[o] = !0
                        }
                        return []
                    }
                }, this._validateObjectSubSchema = {
                    maxProperties: function (t, e, n) {
                        return Object.keys(e).length > t.maxProperties ? [{
                            path: n,
                            property: "maxProperties",
                            message: this.translate("error_maxProperties", [t.maxProperties], t)
                        }] : []
                    }, minProperties: function (t, e, n) {
                        return Object.keys(e).length < t.minProperties ? [{
                            path: n,
                            property: "minProperties",
                            message: this.translate("error_minProperties", [t.minProperties], t)
                        }] : []
                    }, required: function (t, e, n) {
                        var r = this, i = [];
                        return Array.isArray(t.required) && t.required.forEach((function (o) {
                            if (void 0 === e[o]) {
                                var a = r.jsoneditor.getEditor("".concat(n, ".").concat(o));
                                a && !1 === a.dependenciesFulfilled || a && ["button", "info"].includes(a.schema.format || a.schema.type) || i.push({
                                    path: n,
                                    property: "required",
                                    message: r.translate("error_required", [t && t.properties && t.properties[o] && t.properties[o].title ? t.properties[o].title : o], t)
                                })
                            }
                        })), i
                    }, properties: function (t, e, n, r) {
                        var i = this, o = [];
                        return Object.entries(t.properties).forEach((function (t) {
                            var a = O(t, 2), s = a[0], l = a[1];
                            r[s] = !0, o.push.apply(o, C(i._validateSchema(l, e[s], "".concat(n, ".").concat(s))))
                        })), o
                    }, patternProperties: function (t, e, n, r) {
                        var i = this, o = [];
                        return Object.entries(t.patternProperties).forEach((function (t) {
                            var a = O(t, 2), s = a[0], l = a[1], c = new RegExp(s);
                            Object.entries(e).forEach((function (t) {
                                var e = O(t, 2), a = e[0], s = e[1];
                                c.test(a) && (r[a] = !0, o.push.apply(o, C(i._validateSchema(l, s, "".concat(n, ".").concat(a)))))
                            }))
                        })), o
                    }
                }, this._validateObjectSubSchema2 = {
                    propertyNames: function (t, e, n, r) {
                        for (var i = this, o = [], a = Object.keys(e), s = null, l = function (e) {
                            var r = "";
                            return s = a[e], "boolean" == typeof t.propertyNames ? !0 === t.propertyNames ? "continue" : (o.push({
                                path: n,
                                property: "propertyNames",
                                message: i.translate("error_property_names_false", [s], t)
                            }), "break") : Object.entries(t.propertyNames).every((function (e) {
                                var a = O(e, 2), l = a[0], c = a[1], u = !1;
                                switch (l) {
                                    case"maxLength":
                                        if ("number" != typeof c) {
                                            r = "error_property_names_maxlength";
                                            break
                                        }
                                        if (s.length > c) {
                                            r = "error_property_names_exceeds_maxlength";
                                            break
                                        }
                                        return !0;
                                    case"const":
                                        if (c !== s) {
                                            r = "error_property_names_const_mismatch";
                                            break
                                        }
                                        return !0;
                                    case"enum":
                                        if (!Array.isArray(c)) {
                                            r = "error_property_names_enum";
                                            break
                                        }
                                        if (c.forEach((function (t) {
                                            t === s && (u = !0)
                                        })), !u) {
                                            r = "error_property_names_enum_mismatch";
                                            break
                                        }
                                        return !0;
                                    case"pattern":
                                        if ("string" != typeof c) {
                                            r = "error_property_names_pattern";
                                            break
                                        }
                                        if (!new RegExp(c).test(s)) {
                                            r = "error_property_names_pattern_mismatch";
                                            break
                                        }
                                        return !0;
                                    default:
                                        return o.push({
                                            path: n,
                                            property: "propertyNames",
                                            message: i.translate("error_property_names_unsupported", [l], t)
                                        }), !1
                                }
                                return o.push({path: n, property: "propertyNames", message: i.translate(r, [s], t)}), !1
                            })) ? void 0 : "break"
                        }, c = 0; c < a.length; c++) {
                            var u = l(c);
                            if ("continue" !== u && "break" === u) break
                        }
                        return o
                    }, additionalProperties: function (t, e, n, r) {
                        for (var i = [], o = Object.keys(e), a = 0; a < o.length; a++) {
                            var s = o[a];
                            if (!r[s]) {
                                if (!t.additionalProperties) {
                                    i.push({
                                        path: n,
                                        property: "additionalProperties",
                                        message: this.translate("error_additional_properties", [s], t)
                                    });
                                    break
                                }
                                if (!0 === t.additionalProperties) break;
                                i.push.apply(i, C(this._validateSchema(t.additionalProperties, e[s], "".concat(n, ".").concat(s))))
                            }
                        }
                        return i
                    }, dependencies: function (t, e, n) {
                        var r = this, i = [];
                        return Object.entries(t.dependencies).forEach((function (o) {
                            var a = O(o, 2), s = a[0], l = a[1];
                            void 0 !== e[s] && (Array.isArray(l) ? l.forEach((function (o) {
                                void 0 === e[o] && i.push({
                                    path: n,
                                    property: "dependencies",
                                    message: r.translate("error_dependency", [o], t)
                                })
                            })) : i.push.apply(i, C(r._validateSchema(l, e, n))))
                        })), i
                    }
                }
            }

            var e, n, r;
            return e = t, (n = [{
                key: "fitTest", value: function (t, e) {
                    var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 1e7,
                        r = {match: 0, extra: 0};
                    if ("object" === P(t) && null !== t) {
                        var i = this._getSchema(e);
                        if (i.anyOf) {
                            var o, a = x({}, r), s = w(i.anyOf);
                            try {
                                for (s.s(); !(o = s.n()).done;) {
                                    var l = o.value, c = this.fitTest(t, l, n);
                                    (c.match > a.match || c.match === a.match && c.extra < a.extra) && (a = c)
                                }
                            } catch (t) {
                                s.e(t)
                            } finally {
                                s.f()
                            }
                            return a
                        }
                        var u = this._getSchema(e).properties;
                        for (var h in u) if (v(u, h)) {
                            if ("object" === P(t[h]) && "object" === P(u[h]) && "object" === P(u[h].properties)) {
                                var p = this.fitTest(t[h], u[h], n / 100);
                                r.match += p.match, r.extra += p.extra
                            }
                            void 0 !== t[h] && (r.match += n)
                        } else r.extra += n
                    }
                    return r
                }
            }, {
                key: "_getSchema", value: function (t) {
                    return void 0 === t ? f({}, this.jsoneditor.expandRefs(this.schema)) : t
                }
            }, {
                key: "validate", value: function (t) {
                    return this._validateSchema(this.schema, t)
                }
            }, {
                key: "_validateSchema", value: function (t, e, n) {
                    var r = this, i = [];
                    return n = n || this.jsoneditor.root.formname, t = f({}, this.jsoneditor.expandRefs(t)), void 0 === e ? this._validateV3Required(t, e, n) : (Object.keys(t).forEach((function (o) {
                        r._validateSubSchema[o] && i.push.apply(i, C(r._validateSubSchema[o].call(r, t, e, n)))
                    })), i.push.apply(i, C(this._validateByValueType(t, e, n))), t.links && t.links.forEach((function (o, a) {
                        o.rel && "describedby" === o.rel.toLowerCase() && (t = r._expandSchemaLink(t, a), i.push.apply(i, C(r._validateSchema(t, e, n, r.translate))))
                    })), ["date", "time", "datetime-local"].includes(t.format) && i.push.apply(i, C(this._validateDateTimeSubSchema(t, e, n))), ["uuid"].includes(t.format) && i.push.apply(i, C(this._validateUUIDSchema(t, e, n))), i.push.apply(i, C(this._validateCustomValidator(t, e, n))), this._removeDuplicateErrors(i))
                }
            }, {
                key: "_expandSchemaLink", value: function (t, e) {
                    var n = t.links[e].href, r = this.jsoneditor.root.getValue(),
                        i = this.jsoneditor.compileTemplate(n, this.jsoneditor.template),
                        o = document.location.origin + document.location.pathname + i(r);
                    return t.links = t.links.slice(0, e).concat(t.links.slice(e + 1)), f({}, t, this.jsoneditor.refs[o])
                }
            }, {
                key: "_validateV3Required", value: function (t, e, n) {
                    return (void 0 !== t.required && !0 === t.required || void 0 === t.required && !0 === this.jsoneditor.options.required_by_default) && "info" !== t.type ? [{
                        path: n,
                        property: "required",
                        message: this.translate("error_notset", null, t)
                    }] : []
                }
            }, {
                key: "_validateByValueType", value: function (t, e, n) {
                    var r = this, i = [];
                    if (null === e) return i;
                    if ("number" == typeof e) Object.keys(t).forEach((function (o) {
                        r._validateNumberSubSchema[o] && i.push.apply(i, C(r._validateNumberSubSchema[o].call(r, t, e, n)))
                    })); else if ("string" == typeof e) Object.keys(t).forEach((function (o) {
                        r._validateStringSubSchema[o] && i.push.apply(i, C(r._validateStringSubSchema[o].call(r, t, e, n)))
                    })); else if (Array.isArray(e)) Object.keys(t).forEach((function (o) {
                        r._validateArraySubSchema[o] && i.push.apply(i, C(r._validateArraySubSchema[o].call(r, t, e, n)))
                    })); else if ("object" === P(e)) {
                        var o = {};
                        Object.keys(t).forEach((function (a) {
                            r._validateObjectSubSchema[a] && i.push.apply(i, C(r._validateObjectSubSchema[a].call(r, t, e, n, o)))
                        })), void 0 !== t.additionalProperties || !this.jsoneditor.options.no_additional_properties || t.oneOf || t.anyOf || t.allOf || (t.additionalProperties = !1), Object.keys(t).forEach((function (a) {
                            void 0 !== r._validateObjectSubSchema2[a] && i.push.apply(i, C(r._validateObjectSubSchema2[a].call(r, t, e, n, o)))
                        }))
                    }
                    return i
                }
            }, {
                key: "_validateUUIDSchema", value: function (t, e, n) {
                    return /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i.test(e) ? [] : [{
                        path: n,
                        property: "format",
                        message: this.translate("error_pattern", ["^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[1-5][0-9a-fA-F]{3}-[89abAB][0-9a-fA-F]{3}-[0-9a-fA-F]{12}$"], t)
                    }]
                }
            }, {
                key: "_validateNumberSubSchemaMultipleDivisible", value: function (t, e, n) {
                    var r = t.multipleOf || t.divisibleBy, i = e / r === Math.floor(e / r);
                    return window.math ? i = window.math.mod(window.math.bignumber(e), window.math.bignumber(r)).equals(0) : window.Decimal && (i = new window.Decimal(e).mod(new window.Decimal(r)).equals(0)), i ? [] : [{
                        path: n,
                        property: t.multipleOf ? "multipleOf" : "divisibleBy",
                        message: this.translate("error_multipleOf", [r], t)
                    }]
                }
            }, {
                key: "_validateDateTimeSubSchema", value: function (t, e, n) {
                    var r = this, i = this.jsoneditor.getEditor(n),
                        o = i && i.flatpickr ? i.flatpickr.config.dateFormat : {
                            date: '"YYYY-MM-DD"',
                            time: '"HH:MM"',
                            "datetime-local": '"YYYY-MM-DD HH:MM"'
                        }[t.format];
                    if ("integer" === t.type) return function (t, e, n) {
                        return 1 * e < 1 ? [{
                            path: n,
                            property: "format",
                            message: r.translate("error_invalid_epoch", null, t)
                        }] : e !== Math.abs(parseInt(e)) ? [{
                            path: n,
                            property: "format",
                            message: r.translate("error_".concat(t.format.replace(/-/g, "_")), [o], t)
                        }] : []
                    }(t, e, n);
                    if (i && i.flatpickr) {
                        if (i) return function (t, e, n, i) {
                            if ("" !== e) {
                                var o;
                                if ("single" !== i.flatpickr.config.mode) {
                                    var a = "range" === i.flatpickr.config.mode ? i.flatpickr.l10n.rangeSeparator : ", ";
                                    o = i.flatpickr.selectedDates.map((function (t) {
                                        return i.flatpickr.formatDate(t, i.flatpickr.config.dateFormat)
                                    })).join(a)
                                }
                                try {
                                    if (o) {
                                        if (o !== e) throw new Error("".concat(i.flatpickr.config.mode, " mismatch"))
                                    } else if (i.flatpickr.formatDate(i.flatpickr.parseDate(e, i.flatpickr.config.dateFormat), i.flatpickr.config.dateFormat) !== e) throw new Error("mismatch")
                                } catch (e) {
                                    var s = void 0 !== i.flatpickr.config.errorDateFormat ? i.flatpickr.config.errorDateFormat : i.flatpickr.config.dateFormat;
                                    return [{
                                        path: n,
                                        property: "format",
                                        message: r.translate("error_".concat(i.format.replace(/-/g, "_")), [s], t)
                                    }]
                                }
                            }
                            return []
                        }(t, e, n, i)
                    } else if (!{
                        date: /^(\d{4}\D\d{2}\D\d{2})?$/,
                        time: /^(\d{2}:\d{2}(?::\d{2})?)?$/,
                        "datetime-local": /^(\d{4}\D\d{2}\D\d{2}[ T]\d{2}:\d{2}(?::\d{2})?)?$/
                    }[t.format].test(e)) return [{
                        path: n,
                        property: "format",
                        message: this.translate("error_".concat(t.format.replace(/-/g, "_")), [o], t)
                    }];
                    return []
                }
            }, {
                key: "_validateCustomValidator", value: function (t, e, n) {
                    var r = this, i = [];
                    i.push.apply(i, C(u.call(this, t, e, n, this.translate)));
                    var o = function (o) {
                        i.push.apply(i, C(o.call(r, t, e, n)))
                    };
                    return this.defaults.custom_validators.forEach(o), this.options.custom_validators && this.options.custom_validators.forEach(o), i
                }
            }, {
                key: "_removeDuplicateErrors", value: function (t) {
                    return t.reduce((function (t, e) {
                        var n = !0;
                        return t || (t = []), t.forEach((function (t) {
                            t.message === e.message && t.path === e.path && t.property === e.property && (t.errorcount++, n = !1)
                        })), n && (e.errorcount = 1, t.push(e)), t
                    }), [])
                }
            }, {
                key: "_checkType", value: function (t, e) {
                    var n = {
                        string: function (t) {
                            return "string" == typeof t
                        }, number: function (t) {
                            return "number" == typeof t
                        }, integer: function (t) {
                            return "number" == typeof t && t === Math.floor(t)
                        }, boolean: function (t) {
                            return "boolean" == typeof t
                        }, array: function (t) {
                            return Array.isArray(t)
                        }, object: function (t) {
                            return null !== t && !Array.isArray(t) && "object" === P(t)
                        }, null: function (t) {
                            return null === t
                        }
                    };
                    return "string" == typeof t ? !n[t] || n[t](e) : !this._validateSchema(t, e).length
                }
            }]) && R(e.prototype, n), r && R(e, r), t
        }();
        n(110), n(73), n(33);

        function T(t, e, n, r, i, o, a) {
            try {
                var s = t[o](a), l = s.value
            } catch (t) {
                return void n(t)
            }
            s.done ? e(l) : Promise.resolve(l).then(r, i)
        }

        function A(t) {
            return function () {
                var e = this, n = arguments;
                return new Promise((function (r, i) {
                    var o = t.apply(e, n);

                    function a(t) {
                        T(o, r, i, a, s, "next", t)
                    }

                    function s(t) {
                        T(o, r, i, a, s, "throw", t)
                    }

                    a(void 0)
                }))
            }
        }

        function I(t, e) {
            return function (t) {
                if (Array.isArray(t)) return t
            }(t) || function (t, e) {
                var n = t && ("undefined" != typeof Symbol && t[Symbol.iterator] || t["@@iterator"]);
                if (null == n) return;
                var r, i, o = [], a = !0, s = !1;
                try {
                    for (n = n.call(t); !(a = (r = n.next()).done) && (o.push(r.value), !e || o.length !== e); a = !0) ;
                } catch (t) {
                    s = !0, i = t
                } finally {
                    try {
                        a || null == n.return || n.return()
                    } finally {
                        if (s) throw i
                    }
                }
                return o
            }(t, e) || function (t, e) {
                if (!t) return;
                if ("string" == typeof t) return B(t, e);
                var n = Object.prototype.toString.call(t).slice(8, -1);
                "Object" === n && t.constructor && (n = t.constructor.name);
                if ("Map" === n || "Set" === n) return Array.from(t);
                if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return B(t, e)
            }(t, e) || function () {
                throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }()
        }

        function B(t, e) {
            (null == e || e > t.length) && (e = t.length);
            for (var n = 0, r = new Array(e); n < e; n++) r[n] = t[n];
            return r
        }

        function N(t) {
            return (N = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function F(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        var V = function () {
            function t(e) {
                !function (t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                }(this, t), this.options = e || {}, this.schema = {}, this.refs = this.options.refs || {}, this.refs_with_info = {}, this.refs_prefix = "#/counter/", this.refs_counter = 1, this._subSchema1 = {
                    type: function (t) {
                        "object" === N(t.type) && (t.type = this._expandSubSchema(t.type))
                    }, disallow: function (t) {
                        "object" === N(t.disallow) && (t.disallow = this._expandSubSchema(t.disallow))
                    }, anyOf: function (t) {
                        var e = this;
                        Object.entries(t.anyOf).forEach((function (n) {
                            var r = I(n, 2), i = r[0], o = r[1];
                            t.anyOf[i] = e.expandSchema(o)
                        }))
                    }, dependencies: function (t) {
                        var e = this;
                        Object.entries(t.dependencies).forEach((function (n) {
                            var r = I(n, 2), i = r[0], o = r[1];
                            "object" !== N(o) || Array.isArray(o) || (t.dependencies[i] = e.expandSchema(o))
                        }))
                    }, not: function (t) {
                        t.not = this.expandSchema(t.not)
                    }
                }, this._subSchema2 = {
                    allOf: function (t, e) {
                        var n = this, r = f({}, e);
                        return Object.entries(t.allOf).forEach((function (e) {
                            var i = I(e, 2), o = i[0], a = i[1];
                            t.allOf[o] = n.expandRefs(a, !0), r = n.extendSchemas(r, n.expandSchema(a))
                        })), delete r.allOf, r
                    }, extends: function (t, e) {
                        var n, r = this;
                        return delete (n = Array.isArray(t.extends) ? t.extends.reduce((function (t, e, n) {
                            return r.extendSchemas(t, r.expandSchema(e))
                        }), e) : this.extendSchemas(e, this.expandSchema(t.extends))).extends, n
                    }, oneOf: function (t, e) {
                        var n = this, r = f({}, e);
                        return delete r.oneOf, t.oneOf.reduce((function (t, e, i) {
                            return t.oneOf[i] = n.extendSchemas(n.expandSchema(e), r), t
                        }), e), e
                    }
                }
            }

            var e, n, r, i, o;
            return e = t, (n = [{
                key: "load", value: (o = A(regeneratorRuntime.mark((function t(e, n, r) {
                    return regeneratorRuntime.wrap((function (t) {
                        for (; ;) switch (t.prev = t.next) {
                            case 0:
                                return this.schema = e, t.next = 3, this._asyncloadExternalRefs(e, n, this._getFileBase(r), !0);
                            case 3:
                                return t.abrupt("return", this.expandRefs(e));
                            case 4:
                            case"end":
                                return t.stop()
                        }
                    }), t, this)
                }))), function (t, e, n) {
                    return o.apply(this, arguments)
                })
            }, {
                key: "expandRefs", value: function (t, e) {
                    var n = this, r = f({}, t);
                    if (!r.$ref) return r;
                    var i = r.$ref.split("#");
                    if (2 === i.length && !this.refs_with_info[r.$ref]) {
                        var o = this.expandRecursivePointer(this.schema, i[1]);
                        return this.extendSchemas(r, this.expandSchema(o))
                    }
                    var a = i.length > 2 ? this.refs_with_info["#" + i[1]] : this.refs_with_info[r.$ref];
                    delete r.$ref;
                    var s = a.$ref.startsWith("#") ? a.fetchUrl : "", l = this._getRef(s, a);
                    if (this.refs[l]) {
                        if (e && v(this.refs[l], "allOf")) {
                            var c = this.refs[l].allOf;
                            Object.keys(c).forEach((function (t) {
                                c[t] = n.expandRefs(c[t], !0)
                            }))
                        }
                    } else console.warn("reference:'".concat(l, "' not found!"));
                    return i.length > 2 ? this.extendSchemas(r, this.expandSchema(this.expandRecursivePointer(this.refs[l], i[2]))) : this.extendSchemas(r, this.expandSchema(this.refs[l]))
                }
            }, {
                key: "expandRecursivePointer", value: function (t, e) {
                    var n = t;
                    return e.split("/").slice(1).forEach((function (t) {
                        n[t] && (n = n[t])
                    })), n.$refs && n.$refs.startsWith("#") ? this.expandRecursivePointer(t, n.$refs) : n
                }
            }, {
                key: "expandSchema", value: function (t) {
                    var e = this;
                    Object.entries(this._subSchema1).forEach((function (n) {
                        var r = I(n, 2), i = r[0], o = r[1];
                        t[i] && o.call(e, t)
                    }));
                    var n = f({}, t);
                    return Object.entries(this._subSchema2).forEach((function (r) {
                        var i = I(r, 2), o = i[0], a = i[1];
                        t[o] && (n = a.call(e, t, n))
                    })), this.expandRefs(n)
                }
            }, {
                key: "_getRef", value: function (t, e) {
                    var n = t + e;
                    return this.refs[n] ? n : t + decodeURIComponent(e.$ref)
                }
            }, {
                key: "_expandSubSchema", value: function (t) {
                    var e = this;
                    return Array.isArray(t) ? t.map((function (t) {
                        return "object" === N(t) ? e.expandSchema(t) : t
                    })) : this.expandSchema(t)
                }
            }, {
                key: "_manageRecursivePointer", value: function (t, e) {
                    Object.keys(t).forEach((function (n) {
                        t[n].$ref && 0 === t[n].$ref.indexOf("#") && (t[n].$ref = e + t[n].$ref)
                    }))
                }
            }, {
                key: "_getExternalRefs", value: function (t, e) {
                    var n = this, r = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
                    r || this._manageRecursivePointer(t, e);
                    var i = {}, o = function (t) {
                        return Object.keys(t).forEach((function (t) {
                            i[t] = !0
                        }))
                    };
                    if (t.$ref && "object" !== N(t.$ref) && (0 !== t.$ref.indexOf("#") || !r)) {
                        var a = t.$ref, s = "";
                        a.indexOf("#") > 0 && (a = a.substr(0, a.indexOf("#"))), a !== t.$ref && (s = t.$ref.substr(t.$ref.indexOf("#")));
                        var l = this.refs_prefix + this.refs_counter++, c = l + s;
                        "#" === t.$ref.substr(0, 1) || this.refs[t.$ref] || (i[a] = !0), this.refs_with_info[l] = {
                            fetchUrl: e,
                            $ref: a
                        }, t.$ref = c
                    }
                    return Object.values(t).forEach((function (t) {
                        t && "object" === N(t) && (Array.isArray(t) ? Object.values(t).forEach((function (t) {
                            t && "object" === N(t) && o(n._getExternalRefs(t, e, r))
                        })) : t.$ref && "string" == typeof t.$ref && t.$ref.startsWith("#") || o(n._getExternalRefs(t, e, r)))
                    })), t.id && "string" == typeof t.id && "urn:" === t.id.substr(0, 4) ? this.refs[t.id] = t : t.$id && "string" == typeof t.$id && "urn:" === t.$id.substr(0, 4) && (this.refs[t.$id] = t), i
                }
            }, {
                key: "_getFileBase", value: function (t) {
                    if (!t) return "/";
                    var e = this.options.ajaxBase;
                    return void 0 === e ? this._getFileBaseFromFileLocation(t) : e
                }
            }, {
                key: "_getFileBaseFromFileLocation", value: function (t) {
                    var e = t.split("/");
                    return e.pop(), "".concat(e.join("/"), "/")
                }
            }, {
                key: "_joinUrl", value: function (t, e) {
                    var n = t;
                    return "http://" !== t.substr(0, 7) && "https://" !== t.substr(0, 8) && "blob:" !== t.substr(0, 5) && "data:" !== t.substr(0, 5) && "#" !== t.substr(0, 1) && "/" !== t.substr(0, 1) && (n = e + t), n.indexOf("#") > 0 && (n = n.substr(0, n.indexOf("#"))), n
                }
            }, {
                key: "_isUniformResourceName", value: function (t) {
                    return "urn:" === t.substr(0, 4)
                }
            }, {
                key: "_asyncloadExternalRefs", value: (i = A(regeneratorRuntime.mark((function t(e, n, r) {
                    var i, o, a, s, l, c, u = this, h = arguments;
                    return regeneratorRuntime.wrap((function (t) {
                        for (; ;) switch (t.prev = t.next) {
                            case 0:
                                i = h.length > 3 && void 0 !== h[3] && h[3], o = this._getExternalRefs(e, n, i), a = 0, s = regeneratorRuntime.mark((function t() {
                                    var e, n, i, o, s, h, p, d, f, y;
                                    return regeneratorRuntime.wrap((function (t) {
                                        for (; ;) switch (t.prev = t.next) {
                                            case 0:
                                                if (void 0 !== (e = c[l])) {
                                                    t.next = 3;
                                                    break
                                                }
                                                return t.abrupt("return", "continue");
                                            case 3:
                                                if (!u.refs[e]) {
                                                    t.next = 5;
                                                    break
                                                }
                                                return t.abrupt("return", "continue");
                                            case 5:
                                                if (!u._isUniformResourceName(e)) {
                                                    t.next = 40;
                                                    break
                                                }
                                                if (u.refs[e] = "loading", a++, n = u.options.urn_resolver, i = e, "function" == typeof n) {
                                                    t.next = 13;
                                                    break
                                                }
                                                throw console.log('No "urn_resolver" callback defined to resolve "'.concat(i, '"')), new Error("Must set urn_resolver option to a callback to resolve ".concat(i));
                                            case 13:
                                                return i.indexOf("#") > 0 && (i = i.substr(0, i.indexOf("#"))), t.prev = 14, t.next = 17, n(i);
                                            case 17:
                                                o = t.sent, t.prev = 18, s = JSON.parse(o), t.next = 26;
                                                break;
                                            case 22:
                                                throw t.prev = 22, t.t0 = t.catch(18), console.log(t.t0), new Error("Failed to parse external ref ".concat(i));
                                            case 26:
                                                if (!("boolean" != typeof s && "object" !== N(s) || null === s || Array.isArray(s))) {
                                                    t.next = 28;
                                                    break
                                                }
                                                throw new Error("External ref does not contain a valid schema - ".concat(i));
                                            case 28:
                                                return u.refs[e] = s, t.next = 31, u._asyncloadExternalRefs(s, e, r);
                                            case 31:
                                                t.next = 37;
                                                break;
                                            case 33:
                                                throw t.prev = 33, t.t1 = t.catch(14), console.log(t.t1), new Error("Failed to parse external ref ".concat(i));
                                            case 37:
                                                if ("boolean" != typeof o) {
                                                    t.next = 39;
                                                    break
                                                }
                                                throw new Error("External ref does not contain a valid schema - ".concat(i));
                                            case 39:
                                                return t.abrupt("return", "continue");
                                            case 40:
                                                if (u.options.ajax) {
                                                    t.next = 42;
                                                    break
                                                }
                                                throw new Error("Must set ajax option to true to load external ref ".concat(e));
                                            case 42:
                                                return a++, h = u._joinUrl(e, r), t.next = 46, new Promise((function (t) {
                                                    var e = new XMLHttpRequest;
                                                    u.options.ajaxCredentials && (e.withCredentials = u.options.ajaxCredentials), e.overrideMimeType("application/json"), e.open("GET", h, !0), e.onload = function () {
                                                        t(e)
                                                    }, e.onerror = function (e) {
                                                        t(void 0)
                                                    }, e.send()
                                                }));
                                            case 46:
                                                if (void 0 !== (p = t.sent)) {
                                                    t.next = 49;
                                                    break
                                                }
                                                throw new Error("Failed to fetch ref via ajax - ".concat(e));
                                            case 49:
                                                d = void 0, t.prev = 50, d = JSON.parse(p.responseText), t.next = 58;
                                                break;
                                            case 54:
                                                throw t.prev = 54, t.t2 = t.catch(50), console.log(t.t2), new Error("Failed to parse external ref ".concat(h));
                                            case 58:
                                                if (!("boolean" != typeof d && "object" !== N(d) || null === d || Array.isArray(d))) {
                                                    t.next = 60;
                                                    break
                                                }
                                                throw new Error("External ref does not contain a valid schema - ".concat(h));
                                            case 60:
                                                return u.refs[e] = d, f = u._getFileBaseFromFileLocation(h), h !== e && (y = h.split("/"), h = ("/" === e.substr(0, 1) ? "/" : "") + y.pop()), t.next = 65, u._asyncloadExternalRefs(d, h, f);
                                            case 65:
                                            case"end":
                                                return t.stop()
                                        }
                                    }), t, null, [[14, 33], [18, 22], [50, 54]])
                                })), l = 0, c = Object.keys(o);
                            case 5:
                                if (!(l < c.length)) {
                                    t.next = 13;
                                    break
                                }
                                return t.delegateYield(s(), "t0", 7);
                            case 7:
                                if ("continue" !== t.t0) {
                                    t.next = 10;
                                    break
                                }
                                return t.abrupt("continue", 10);
                            case 10:
                                l++, t.next = 5;
                                break;
                            case 13:
                                if (a) {
                                    t.next = 15;
                                    break
                                }
                                return t.abrupt("return", !0);
                            case 15:
                            case"end":
                                return t.stop()
                        }
                    }), t, this)
                }))), function (t, e, n) {
                    return i.apply(this, arguments)
                })
            }, {
                key: "extendSchemas", value: function (t, e) {
                    var n = this;
                    t = f({}, t), e = f({}, e);
                    var r = {}, i = function (t, i) {
                        !function (t, e) {
                            return ("required" === t || "defaultProperties" === t) && "object" === N(e) && Array.isArray(e)
                        }(t, i) ? "type" !== t || "string" != typeof i && !Array.isArray(i) ? "object" !== N(i) || Array.isArray(i) || null === i ? r[t] = i : r[t] = n.extendSchemas(i, e[t]) : o(i) : r[t] = i.concat(e[t]).reduce((function (t, e) {
                            return t.includes(e) || t.push(e), t
                        }), [])
                    }, o = function (t) {
                        "string" == typeof t && (t = [t]), "string" == typeof e.type && (e.type = [e.type]), e.type && e.type.length ? r.type = t.filter((function (t) {
                            return e.type.includes(t)
                        })) : r.type = t, 1 === r.type.length && "string" == typeof r.type[0] ? r.type = r.type[0] : 0 === r.type.length && delete r.type
                    };
                    return Object.entries(t).forEach((function (t) {
                        var n = I(t, 2), o = n[0], a = n[1];
                        void 0 !== e[o] ? i(o, a) : r[o] = a
                    })), Object.entries(e).forEach((function (e) {
                        var n = I(e, 2), i = n[0], o = n[1];
                        void 0 === t[i] && (r[i] = o)
                    })), r
                }
            }]) && F(e.prototype, n), r && F(e, r), t
        }();
        n(7), n(8), n(9), n(10), n(14), n(111);

        function D(t, e) {
            return function (t) {
                if (Array.isArray(t)) return t
            }(t) || function (t, e) {
                var n = t && ("undefined" != typeof Symbol && t[Symbol.iterator] || t["@@iterator"]);
                if (null == n) return;
                var r, i, o = [], a = !0, s = !1;
                try {
                    for (n = n.call(t); !(a = (r = n.next()).done) && (o.push(r.value), !e || o.length !== e); a = !0) ;
                } catch (t) {
                    s = !0, i = t
                } finally {
                    try {
                        a || null == n.return || n.return()
                    } finally {
                        if (s) throw i
                    }
                }
                return o
            }(t, e) || function (t, e) {
                if (!t) return;
                if ("string" == typeof t) return H(t, e);
                var n = Object.prototype.toString.call(t).slice(8, -1);
                "Object" === n && t.constructor && (n = t.constructor.name);
                if ("Map" === n || "Set" === n) return Array.from(t);
                if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return H(t, e)
            }(t, e) || function () {
                throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }()
        }

        function H(t, e) {
            (null == e || e > t.length) && (e = t.length);
            for (var n = 0, r = new Array(e); n < e; n++) r[n] = t[n];
            return r
        }

        function M(t) {
            return (M = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function z(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        var q = function () {
            function t(e, n) {
                !function (t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                }(this, t), this.defaults = n, this.jsoneditor = e.jsoneditor, this.theme = this.jsoneditor.theme, this.template_engine = this.jsoneditor.template, this.iconlib = this.jsoneditor.iconlib, this.translate = this.jsoneditor.translate || this.defaults.translate, this.translateProperty = this.jsoneditor.translateProperty || this.defaults.translateProperty, this.original_schema = e.schema, this.schema = this.jsoneditor.expandSchema(this.original_schema), this.active = !0, this.options = f({}, this.options || {}, this.schema.options || {}, e.schema.options || {}, e), this.formname = this.jsoneditor.options.form_name_root || "root", e.path || this.schema.id || (this.schema.id = this.formname), this.path = e.path || this.formname, this.formname = e.formname || this.path.replace(/\.([^.]+)/g, "[$1]"), this.parent = e.parent, this.key = void 0 !== this.parent ? this.path.split(".").slice(this.parent.path.split(".").length).join(".") : this.path, this.link_watchers = [], this.watchLoop = !1, e.container && this.setContainer(e.container), this.registerDependencies()
            }

            var e, n, r;
            return e = t, (n = [{
                key: "onChildEditorChange", value: function (t) {
                    this.onChange(!0)
                }
            }, {
                key: "notify", value: function () {
                    this.path && this.jsoneditor.notifyWatchers(this.path)
                }
            }, {
                key: "change", value: function () {
                    this.parent ? this.parent.onChildEditorChange(this) : this.jsoneditor && this.jsoneditor.onChange()
                }
            }, {
                key: "onChange", value: function (t) {
                    this.notify(), this.watch_listener && this.watch_listener(), t && this.change()
                }
            }, {
                key: "register", value: function () {
                    this.jsoneditor.registerEditor(this), this.onChange()
                }
            }, {
                key: "unregister", value: function () {
                    this.jsoneditor && this.jsoneditor.unregisterEditor(this)
                }
            }, {
                key: "getNumColumns", value: function () {
                    return 12
                }
            }, {
                key: "isActive", value: function () {
                    return this.active
                }
            }, {
                key: "activate", value: function () {
                    this.active = !0, this.optInCheckbox.checked = !0, this.enable(), this.change()
                }
            }, {
                key: "deactivate", value: function () {
                    this.isRequired() || (this.active = !1, this.optInCheckbox.checked = !1, this.disable(), this.change())
                }
            }, {
                key: "registerDependencies", value: function () {
                    var t = this;
                    this.dependenciesFulfilled = !0;
                    var e = this.options.dependencies;
                    e && Object.keys(e).forEach((function (e) {
                        var n = t.path.split(".");
                        n[n.length - 1] = e, n = n.join("."), t.jsoneditor.watch(n, (function () {
                            t.evaluateDependencies()
                        }))
                    }))
                }
            }, {
                key: "evaluateDependencies", value: function () {
                    var t = this, e = this.container || this.control;
                    if (e && null !== this.jsoneditor) {
                        var n = this.options.dependencies;
                        if (n) {
                            var r = this.dependenciesFulfilled;
                            this.dependenciesFulfilled = !0, Object.keys(n).forEach((function (e) {
                                var r = t.path.split(".");
                                r[r.length - 1] = e, r = r.join(".");
                                var i = n[e];
                                t.checkDependency(r, i)
                            })), this.dependenciesFulfilled !== r && this.notify();
                            var i = this.dependenciesFulfilled ? "block" : "none";
                            this.options.hidden && (i = "none"), "TD" === e.tagName ? Object.keys(e.childNodes).forEach((function (t) {
                                return e.childNodes[t].style.display = i
                            })) : e.style.display = i
                        }
                    }
                }
            }, {
                key: "checkDependency", value: function (t, e) {
                    var n = this;
                    if (this.path !== t && null !== this.jsoneditor) {
                        var r = this.jsoneditor.getEditor(t), i = r ? r.getValue() : void 0;
                        r && r.dependenciesFulfilled ? Array.isArray(e) ? this.dependenciesFulfilled = e.some((function (t) {
                            if (JSON.stringify(i) === JSON.stringify(t)) return !0
                        })) : "object" === M(e) ? "object" !== M(i) ? this.dependenciesFulfilled = e === i : Object.keys(e).some((function (t) {
                            return !!v(e, t) && (v(i, t) && e[t] === i[t] ? void 0 : (n.dependenciesFulfilled = !1, !0))
                        })) : "string" == typeof e || "number" == typeof e ? this.dependenciesFulfilled = this.dependenciesFulfilled && i === e : "boolean" == typeof e && (this.dependenciesFulfilled = e ? this.dependenciesFulfilled && (i || i.length > 0) : this.dependenciesFulfilled && (!i || 0 === i.length)) : this.dependenciesFulfilled = !1
                    }
                }
            }, {
                key: "setContainer", value: function (t) {
                    this.container = t, this.schema.id && this.container.setAttribute("data-schemaid", this.schema.id), this.schema.type && "string" == typeof this.schema.type && this.container.setAttribute("data-schematype", this.schema.type), this.container.setAttribute("data-schemapath", this.path)
                }
            }, {
                key: "setOptInCheckbox", value: function (t) {
                    var e = this;
                    this.optInCheckbox = document.createElement("input"), this.optInCheckbox.setAttribute("type", "checkbox"), this.optInCheckbox.setAttribute("style", "margin: 0 10px 0 0;"), this.optInCheckbox.classList.add("json-editor-opt-in"), this.optInCheckbox.addEventListener("click", (function () {
                        e.isActive() ? e.deactivate() : e.activate()
                    }));
                    var n = this.jsoneditor.options.show_opt_in, r = void 0 !== this.parent.options.show_opt_in,
                        i = r && !0 === this.parent.options.show_opt_in,
                        o = r && !1 === this.parent.options.show_opt_in;
                    (i || !o && n || !r && n) && this.parent && "object" === this.parent.schema.type && !this.isRequired() && this.header && (this.header.appendChild(this.optInCheckbox), this.header.insertBefore(this.optInCheckbox, this.header.firstChild))
                }
            }, {
                key: "preBuild", value: function () {
                }
            }, {
                key: "build", value: function () {
                }
            }, {
                key: "postBuild", value: function () {
                    this.setupWatchListeners(), this.addLinks(), this.setValue(this.getDefault(), !0), this.updateHeaderText(), this.register(), this.onWatchedFieldChange()
                }
            }, {
                key: "setupWatchListeners", value: function () {
                    var t = this;
                    if (this.watched = {}, this.schema.vars && (this.schema.watch = this.schema.vars), this.watched_values = {}, this.watch_listener = function () {
                        t.refreshWatchedFieldValues() && t.onWatchedFieldChange()
                    }, v(this.schema, "watch")) {
                        var e, n, r, i, o, a = this.container.getAttribute("data-schemapath");
                        Object.keys(this.schema.watch).forEach((function (s) {
                            if (e = t.schema.watch[s], Array.isArray(e)) {
                                if (e.length < 2) return;
                                n = [e[0]].concat(e[1].split("."))
                            } else n = e.split("."), t.theme.closest(t.container, '[data-schemaid="'.concat(n[0], '"]')) || n.unshift("#");
                            if ("#" === (r = n.shift()) && (r = t.jsoneditor.schema.id || t.jsoneditor.root.formname), !(i = t.theme.closest(t.container, '[data-schemaid="'.concat(r, '"]')))) throw new Error("Could not find ancestor node with id ".concat(r));
                            o = "".concat(i.getAttribute("data-schemapath"), ".").concat(n.join(".")), a.startsWith(o) && (t.watchLoop = !0), t.jsoneditor.watch(o, t.watch_listener), t.watched[s] = o
                        }))
                    }
                    this.schema.headerTemplate && (this.header_template = this.jsoneditor.compileTemplate(this.schema.headerTemplate, this.template_engine))
                }
            }, {
                key: "addLinks", value: function () {
                    if (!this.no_link_holder && (this.link_holder = this.theme.getLinksHolder(), void 0 !== this.description ? this.description.parentNode.insertBefore(this.link_holder, this.description) : this.container.appendChild(this.link_holder), this.schema.links)) for (var t = 0; t < this.schema.links.length; t++) this.addLink(this.getLink(this.schema.links[t]))
                }
            }, {
                key: "onMove", value: function () {
                }
            }, {
                key: "getButton", value: function (t, e, n) {
                    var r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : [],
                        i = "json-editor-btn-".concat(e);
                    e = this.iconlib ? this.iconlib.getIcon(e) : null, t = this.translate(t, r), n = this.translate(n, r), !e && n && (t = n, n = null);
                    var o = this.theme.getButton(t, e, n);
                    return o.classList.add(i), o
                }
            }, {
                key: "setButtonText", value: function (t, e, n, r) {
                    var i = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : [];
                    return n = this.iconlib ? this.iconlib.getIcon(n) : null, e = this.translate(e, i), r = this.translate(r, i), !n && r && (e = r, r = null), this.theme.setButtonText(t, e, n, r)
                }
            }, {
                key: "addLink", value: function (t) {
                    this.link_holder && this.link_holder.appendChild(t)
                }
            }, {
                key: "getLink", value: function (t) {
                    var e, n, r = (t.mediaType || "application/javascript").split("/")[0],
                        i = this.jsoneditor.compileTemplate(t.href, this.template_engine),
                        o = this.jsoneditor.compileTemplate(t.rel ? t.rel : t.href, this.template_engine), a = null;
                    if (t.download && (a = t.download), a && !0 !== a && (a = this.jsoneditor.compileTemplate(a, this.template_engine)), "image" === r) {
                        e = this.theme.getBlockLinkHolder(), (n = document.createElement("a")).setAttribute("target", "_blank");
                        var s = document.createElement("img");
                        this.theme.createImageLink(e, n, s), this.link_watchers.push((function (t) {
                            var e = i(t), r = o(t);
                            n.setAttribute("href", e), n.setAttribute("title", r || e), s.setAttribute("src", e)
                        }))
                    } else if (["audio", "video"].includes(r)) {
                        e = this.theme.getBlockLinkHolder(), (n = this.theme.getBlockLink()).setAttribute("target", "_blank");
                        var l = document.createElement(r);
                        l.setAttribute("controls", "controls"), this.theme.createMediaLink(e, n, l), this.link_watchers.push((function (t) {
                            var e = i(t), r = o(t);
                            n.setAttribute("href", e), n.textContent = r || e, l.setAttribute("src", e)
                        }))
                    } else n = e = this.theme.getBlockLink(), e.setAttribute("target", "_blank"), e.textContent = t.rel, e.style.display = "none", this.link_watchers.push((function (t) {
                        var n = i(t), r = o(t);
                        n && (e.style.display = ""), e.setAttribute("href", n), e.textContent = r || n
                    }));
                    return a && n && (!0 === a ? n.setAttribute("download", "") : this.link_watchers.push((function (t) {
                        n.setAttribute("download", a(t))
                    }))), t.class && n.classList.add(t.class), e
                }
            }, {
                key: "refreshWatchedFieldValues", value: function () {
                    var t = this;
                    if (this.watched_values) {
                        var e = {}, n = !1;
                        return this.watched && Object.keys(this.watched).forEach((function (r) {
                            var i = t.jsoneditor.getEditor(t.watched[r]), o = i ? i.getValue() : null;
                            t.watched_values[r] !== o && (n = !0), e[r] = o
                        })), e.self = this.getValue(), this.watched_values.self !== e.self && (n = !0), this.watched_values = e, n
                    }
                }
            }, {
                key: "getWatchedFieldValues", value: function () {
                    return this.watched_values
                }
            }, {
                key: "updateHeaderText", value: function () {
                    if (this.header) {
                        var t = this.getHeaderText();
                        if (this.header.children.length) {
                            for (var e = 0; e < this.header.childNodes.length; e++) if (3 === this.header.childNodes[e].nodeType) {
                                this.header.childNodes[e].nodeValue = this.cleanText(t);
                                break
                            }
                        } else window.DOMPurify ? this.header.innerHTML = window.DOMPurify.sanitize(t) : this.header.textContent = this.cleanText(t)
                    }
                }
            }, {
                key: "getHeaderText", value: function (t) {
                    return this.header_text ? this.header_text : t ? this.translateProperty(this.schema.title) : this.getTitle()
                }
            }, {
                key: "getPathDepth", value: function () {
                    return this.path.split(".").length
                }
            }, {
                key: "cleanText", value: function (t) {
                    var e = document.createElement("div");
                    return e.innerHTML = t, e.textContent || e.innerText
                }
            }, {
                key: "onWatchedFieldChange", value: function () {
                    var t;
                    if (this.header_template) {
                        t = f(this.getWatchedFieldValues(), {
                            key: this.key,
                            i: this.key,
                            i0: 1 * this.key,
                            i1: 1 * this.key + 1,
                            title: this.getTitle()
                        });
                        var e = this.header_template(t);
                        e !== this.header_text && (this.header_text = e, this.updateHeaderText(), this.notify())
                    }
                    if (this.link_watchers.length) {
                        t = this.getWatchedFieldValues();
                        for (var n = 0; n < this.link_watchers.length; n++) this.link_watchers[n](t)
                    }
                }
            }, {
                key: "setValue", value: function (t) {
                    this.value = t
                }
            }, {
                key: "getValue", value: function () {
                    if (this.dependenciesFulfilled) return this.value
                }
            }, {
                key: "refreshValue", value: function () {
                }
            }, {
                key: "getChildEditors", value: function () {
                    return !1
                }
            }, {
                key: "destroy", value: function () {
                    var t = this;
                    this.unregister(this), this.watched && Object.values(this.watched).forEach((function (e) {
                        return t.jsoneditor.unwatch(e, t.watch_listener)
                    })), this.watched = null, this.watched_values = null, this.watch_listener = null, this.header_text = null, this.header_template = null, this.value = null, this.container && this.container.parentNode && this.container.parentNode.removeChild(this.container), this.container = null, this.jsoneditor = null, this.schema = null, this.path = null, this.key = null, this.parent = null
                }
            }, {
                key: "isDefaultRequired", value: function () {
                    return this.isRequired() || !!this.jsoneditor.options.use_default_values
                }
            }, {
                key: "getDefault", value: function () {
                    if (void 0 !== this.schema.default) return this.schema.default;
                    if (void 0 !== this.schema.enum) return this.schema.enum[0];
                    var t = this.schema.type || this.schema.oneOf;
                    if (t && Array.isArray(t) && (t = t[0]), t && "object" === M(t) && (t = t.type), t && Array.isArray(t) && (t = t[0]), "string" == typeof t) {
                        if ("number" === t) return this.isDefaultRequired() ? 0 : void 0;
                        if ("boolean" === t) return !this.isDefaultRequired() && void 0;
                        if ("integer" === t) return this.isDefaultRequired() ? 0 : void 0;
                        if ("string" === t) return "";
                        if ("object" === t) return {};
                        if ("array" === t) return []
                    }
                    return null
                }
            }, {
                key: "getTitle", value: function () {
                    return this.translateProperty(this.schema.title || this.key)
                }
            }, {
                key: "enable", value: function () {
                    this.disabled = !1
                }
            }, {
                key: "disable", value: function () {
                    this.disabled = !0
                }
            }, {
                key: "isEnabled", value: function () {
                    return !this.disabled
                }
            }, {
                key: "isRequired", value: function () {
                    return "boolean" == typeof this.schema.required ? this.schema.required : this.parent && this.parent.schema && Array.isArray(this.parent.schema.required) ? this.parent.schema.required.includes(this.key) : !!this.jsoneditor.options.required_by_default
                }
            }, {
                key: "getDisplayText", value: function (t) {
                    var e = [], n = {};
                    t.forEach((function (t) {
                        t.title && (n[t.title] = n[t.title] || 0, n[t.title]++), t.description && (n[t.description] = n[t.description] || 0, n[t.description]++), t.format && (n[t.format] = n[t.format] || 0, n[t.format]++), t.type && (n[t.type] = n[t.type] || 0, n[t.type]++)
                    })), t.forEach((function (t) {
                        var r;
                        r = "string" == typeof t ? t : t.title && n[t.title] <= 1 ? t.title : t.format && n[t.format] <= 1 ? t.format : t.type && n[t.type] <= 1 ? t.type : t.description && n[t.description] <= 1 ? t.descripton : t.title ? t.title : t.format ? t.format : t.type ? t.type : t.description ? t.description : JSON.stringify(t).length < 500 ? JSON.stringify(t) : "type", e.push(r)
                    }));
                    var r = {};
                    return e.forEach((function (t, i) {
                        r[t] = r[t] || 0, r[t]++, n[t] > 1 && (e[i] = "".concat(t, " ").concat(r[t]))
                    })), e
                }
            }, {
                key: "getValidId", value: function (t) {
                    return (t = void 0 === t ? "" : t.toString()).replace(/\s+/g, "-")
                }
            }, {
                key: "setInputAttributes", value: function (t) {
                    var e = this;
                    if (this.schema.options && this.schema.options.inputAttributes) {
                        var n = this.schema.options.inputAttributes, r = ["name", "type"].concat(t);
                        Object.keys(n).forEach((function (t) {
                            r.includes(t.toLowerCase()) || e.input.setAttribute(t, n[t])
                        }))
                    }
                }
            }, {
                key: "expandCallbacks", value: function (t, e) {
                    var n = this, r = this.defaults.callbacks[t];
                    return Object.entries(e).forEach((function (i) {
                        var o = D(i, 2), a = o[0], s = o[1];
                        s === Object(s) ? e[a] = n.expandCallbacks(t, s) : "string" == typeof s && "object" === M(r) && "function" == typeof r[s] && (e[a] = r[s].bind(null, n))
                    })), e
                }
            }, {
                key: "showValidationErrors", value: function (t) {
                }
            }]) && z(e.prototype, n), r && z(e, r), t
        }();

        function U(t) {
            return (U = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function G(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function $(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function J(t, e, n) {
            return (J = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Q(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function W(t, e) {
            return (W = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Z(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Q(t);
                if (e) {
                    var i = Q(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Y(this, n)
            }
        }

        function Y(t, e) {
            return !e || "object" !== U(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Q(t) {
            return (Q = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var K = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && W(t, e)
            }(o, t);
            var e, n, r, i = Z(o);

            function o() {
                return G(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "register", value: function () {
                    J(Q(o.prototype), "register", this).call(this), this.input && (this.jsoneditor.options.use_name_attributes && this.input.setAttribute("name", this.formname), this.input.setAttribute("aria-label", this.formname))
                }
            }, {
                key: "unregister", value: function () {
                    J(Q(o.prototype), "unregister", this).call(this), this.input && (this.input.removeAttribute("name"), this.input.removeAttribute("aria-label"))
                }
            }, {
                key: "setValue", value: function (t, e, n) {
                    if ((!this.template || n) && (this.shouldBeUnset() || null != t ? "object" === U(t) ? t = JSON.stringify(t) : this.shouldBeUnset() || "string" == typeof t || (t = "".concat(t)) : t = "", t !== this.serialized)) {
                        var r = this.sanitize(t);
                        if (this.input.value !== r) {
                            if (this.setValueToInputField(r), "range" === this.format) {
                                var i = this.control.querySelector("output");
                                i && (i.value = r)
                            }
                            var o = n || this.getValue() !== t;
                            return this.refreshValue(), e ? this.is_dirty = !1 : "change" === this.jsoneditor.options.show_errors && (this.is_dirty = !0), this.adjust_height && this.adjust_height(this.input), this.onChange(o), {
                                changed: o,
                                value: r
                            }
                        }
                    }
                }
            }, {
                key: "setValueToInputField", value: function (t) {
                    this.input.value = void 0 === t ? "" : t
                }
            }, {
                key: "getNumColumns", value: function () {
                    var t,
                        e = Math.ceil(Math.max(this.getTitle().length, this.schema.maxLength || 0, this.schema.minLength || 0) / 5);
                    return t = "textarea" === this.input_type ? 6 : ["text", "email"].includes(this.input_type) ? 4 : 2, Math.min(12, Math.max(e, t))
                }
            }, {
                key: "build", value: function () {
                    var t = this;
                    if (this.options.compact || (this.header = this.label = this.theme.getFormInputLabel(this.getTitle(), this.isRequired())), this.schema.description && (this.description = this.theme.getFormInputDescription(this.translateProperty(this.schema.description))), this.options.infoText && (this.infoButton = this.theme.getInfoButton(this.translateProperty(this.options.infoText))), this.format = this.schema.format, !this.format && this.schema.media && this.schema.media.type && (this.format = this.schema.media.type.replace(/(^(application|text)\/(x-)?(script\.)?)|(-source$)/g, "")), !this.format && this.options.default_format && (this.format = this.options.default_format), this.options.format && (this.format = this.options.format), this.format) if ("textarea" === this.format) this.input_type = "textarea", this.input = this.theme.getTextareaInput(); else if ("range" === this.format) {
                        this.input_type = "range";
                        var e = this.schema.minimum || 0, n = this.schema.maximum || Math.max(100, e + 1), r = 1;
                        this.schema.multipleOf && (e % this.schema.multipleOf && (e = Math.ceil(e / this.schema.multipleOf) * this.schema.multipleOf), n % this.schema.multipleOf && (n = Math.floor(n / this.schema.multipleOf) * this.schema.multipleOf), r = this.schema.multipleOf), this.input = this.theme.getRangeInput(e, n, r)
                    } else this.input_type = "text", ["button", "checkbox", "color", "date", "datetime-local", "email", "file", "hidden", "image", "month", "number", "password", "radio", "reset", "search", "submit", "tel", "text", "time", "url", "week"].includes(this.format) && (this.input_type = this.format), this.input = this.theme.getFormInputField(this.input_type); else this.input_type = "text", this.input = this.theme.getFormInputField(this.input_type);
                    void 0 !== this.schema.maxLength && this.input.setAttribute("maxlength", this.schema.maxLength), void 0 !== this.schema.pattern ? this.input.setAttribute("pattern", this.schema.pattern) : void 0 !== this.schema.minLength && this.input.setAttribute("pattern", ".{".concat(this.schema.minLength, ",}")), this.options.compact ? this.container.classList.add("compact") : this.options.input_width && (this.input.style.width = this.options.input_width), (this.schema.readOnly || this.schema.readonly || this.schema.template) && (this.disable(!0), this.input.setAttribute("readonly", "true")), this.setInputAttributes(["maxlength", "pattern", "readonly", "min", "max", "step"]), this.input.addEventListener("change", (function (e) {
                        if (e.preventDefault(), e.stopPropagation(), t.schema.template) e.currentTarget.value = t.value; else {
                            var n = e.currentTarget.value, r = t.sanitize(n);
                            n !== r && (e.currentTarget.value = r), t.is_dirty = !0, t.refreshValue(), t.onChange(!0)
                        }
                    })), this.options.input_height && (this.input.style.height = this.options.input_height), this.options.expand_height && (this.adjust_height = function (t) {
                        if (t) {
                            var e, n = t.offsetHeight;
                            if (t.offsetHeight < t.scrollHeight) for (e = 0; t.offsetHeight < t.scrollHeight + 3 && !(e > 100);) e++, n++, t.style.height = "".concat(n, "px"); else {
                                for (e = 0; t.offsetHeight >= t.scrollHeight + 3 && !(e > 100);) e++, n--, t.style.height = "".concat(n, "px");
                                t.style.height = "".concat(n + 1, "px")
                            }
                        }
                    }, this.input.addEventListener("keyup", (function (e) {
                        t.adjust_height(e.currentTarget)
                    })), this.input.addEventListener("change", (function (e) {
                        t.adjust_height(e.currentTarget)
                    })), this.adjust_height()), this.format && this.input.setAttribute("data-schemaformat", this.format);
                    var i = this.input;
                    if ("range" === this.format && (i = this.theme.getRangeControl(this.input, this.theme.getRangeOutput(this.input, this.schema.default || Math.max(this.schema.minimum || 0, 0)))), this.control = this.theme.getFormControl(this.label, i, this.description, this.infoButton, this.formname), this.container.appendChild(this.control), window.requestAnimationFrame((function () {
                        t.input.parentNode && t.afterInputReady(), t.adjust_height && t.adjust_height(t.input), "range" === t.format && (t.control.querySelector("output").value = t.input.value)
                    })), this.schema.template) {
                        var o = this.expandCallbacks("template", {template: this.schema.template});
                        "function" == typeof o.template ? this.template = o.template : this.template = this.jsoneditor.compileTemplate(this.schema.template, this.template_engine), this.refreshValue()
                    } else this.refreshValue()
                }
            }, {
                key: "setupCleave", value: function (t) {
                    var e = this.expandCallbacks("cleave", f({}, this.defaults.options.cleave || {}, this.options.cleave || {}));
                    "object" === U(e) && Object.keys(e).length > 0 && (this.cleave_instance = new window.Cleave(t, e))
                }
            }, {
                key: "setupImask", value: function (t) {
                    var e = this.expandCallbacks("imask", f({}, this.defaults.options.imask || {}, this.options.imask || {}));
                    "object" === U(e) && Object.keys(e).length > 0 && (this.imask_instance = window.IMask(t, this.ajustIMaskOptions(e)))
                }
            }, {
                key: "ajustIMaskOptions", value: function (t) {
                    var e = this;
                    return Object.keys(t).forEach((function (n) {
                        if (t[n] === Object(t[n])) t[n] = e.ajustIMaskOptions(t[n]); else if ("mask" === n) if ("regex:" === t[n].substr(0, 6)) {
                            var r = t[n].match(/^regex:\/(.*)\/([gimsuy]*)$/);
                            if (null !== r) try {
                                t[n] = new RegExp(r[1], r[2])
                            } catch (t) {
                            }
                        } else t[n] = e.getGlobalPropertyFromString(t[n])
                    })), t
                }
            }, {
                key: "getGlobalPropertyFromString", value: function (t) {
                    if (t.includes(".")) {
                        var e = t.split("."), n = e[0], r = e[1];
                        if (void 0 !== window[n] && void 0 !== window[n][r]) return window[n][r]
                    } else if (void 0 !== window[t]) return window[t];
                    return t
                }
            }, {
                key: "shouldBeUnset", value: function () {
                    return !this.jsoneditor.options.use_default_values && !this.is_dirty
                }
            }, {
                key: "getValue", value: function () {
                    var t = !(!this.input || !this.input.value);
                    if (!this.shouldBeUnset() || t) return this.imask_instance && this.dependenciesFulfilled && this.options.imask.returnUnmasked ? this.imask_instance.unmaskedValue : J(Q(o.prototype), "getValue", this).call(this)
                }
            }, {
                key: "enable", value: function () {
                    this.always_disabled || (this.input.disabled = !1, J(Q(o.prototype), "enable", this).call(this))
                }
            }, {
                key: "disable", value: function (t) {
                    t && (this.always_disabled = !0), this.input.disabled = !0, J(Q(o.prototype), "disable", this).call(this)
                }
            }, {
                key: "afterInputReady", value: function () {
                    this.theme.afterInputReady(this.input), window.Cleave && !this.cleave_instance ? this.setupCleave(this.input) : window.IMask && !this.imask_instance && this.setupImask(this.input)
                }
            }, {
                key: "refreshValue", value: function () {
                    this.value = this.input.value, "string" == typeof this.value || this.shouldBeUnset() || (this.value = ""), this.serialized = this.value
                }
            }, {
                key: "destroy", value: function () {
                    this.cleave_instance && this.cleave_instance.destroy(), this.imask_instance && this.imask_instance.destroy(), this.template = null, this.input && this.input.parentNode && this.input.parentNode.removeChild(this.input), this.label && this.label.parentNode && this.label.parentNode.removeChild(this.label), this.description && this.description.parentNode && this.description.parentNode.removeChild(this.description), J(Q(o.prototype), "destroy", this).call(this)
                }
            }, {
                key: "sanitize", value: function (t) {
                    return t
                }
            }, {
                key: "onWatchedFieldChange", value: function () {
                    var t;
                    this.template && (t = this.getWatchedFieldValues(), this.setValue(this.template(t), !1, !0)), J(Q(o.prototype), "onWatchedFieldChange", this).call(this)
                }
            }, {
                key: "showValidationErrors", value: function (t) {
                    var e = this;
                    if ("always" === this.jsoneditor.options.show_errors) ; else if (!this.is_dirty && this.previous_error_setting === this.jsoneditor.options.show_errors) return;
                    this.previous_error_setting = this.jsoneditor.options.show_errors;
                    var n = t.reduce((function (t, n) {
                        return n.path === e.path && t.push(n.message), t
                    }), []);
                    n.length ? this.theme.addInputError(this.input, "".concat(n.join(". "), ".")) : this.theme.removeInputError(this.input)
                }
            }]) && $(e.prototype, n), r && $(e, r), o
        }(q);

        function X(t) {
            return (X = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function tt(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function et(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function nt(t, e, n) {
            return (nt = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = at(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function rt(t, e) {
            return (rt = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function it(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = at(t);
                if (e) {
                    var i = at(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return ot(this, n)
            }
        }

        function ot(t, e) {
            return !e || "object" !== X(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function at(t) {
            return (at = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var st = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && rt(t, e)
            }(o, t);
            var e, n, r, i = it(o);

            function o() {
                return tt(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "setValue", value: function (t, e, n) {
                    var r = nt(at(o.prototype), "setValue", this).call(this, t, e, n);
                    void 0 !== r && r.changed && this.ace_editor_instance && (this.ace_editor_instance.setValue(r.value), this.ace_editor_instance.session.getSelection().clearSelection(), this.ace_editor_instance.resize())
                }
            }, {
                key: "build", value: function () {
                    this.options.format = "textarea", nt(at(o.prototype), "build", this).call(this), this.input_type = this.schema.format, this.input.setAttribute("data-schemaformat", this.input_type)
                }
            }, {
                key: "afterInputReady", value: function () {
                    var t, e = this;
                    if (window.ace) {
                        var n = this.input_type;
                        "cpp" !== n && "c++" !== n && "c" !== n || (n = "c_cpp"), t = this.expandCallbacks("ace", f({}, {
                            selectionStyle: "text",
                            minLines: 30,
                            maxLines: 30
                        }, this.defaults.options.ace || {}, this.options.ace || {}, {mode: "ace/mode/".concat(n)})), this.ace_container = document.createElement("div"), this.ace_container.style.width = "100%", this.ace_container.style.position = "relative", this.input.parentNode.insertBefore(this.ace_container, this.input), this.input.style.display = "none", this.ace_editor_instance = window.ace.edit(this.ace_container, t), this.ace_editor_instance.setValue(this.getValue()), this.ace_editor_instance.session.getSelection().clearSelection(), this.ace_editor_instance.resize(), (this.schema.readOnly || this.schema.readonly || this.schema.template) && this.ace_editor_instance.setReadOnly(!0), this.ace_editor_instance.on("change", (function () {
                            e.input.value = e.ace_editor_instance.getValue(), e.refreshValue(), e.is_dirty = !0, e.onChange(!0)
                        })), this.theme.afterInputReady(this.input)
                    } else nt(at(o.prototype), "afterInputReady", this).call(this)
                }
            }, {
                key: "getNumColumns", value: function () {
                    return 6
                }
            }, {
                key: "enable", value: function () {
                    !this.always_disabled && this.ace_editor_instance && this.ace_editor_instance.setReadOnly(!1), nt(at(o.prototype), "enable", this).call(this)
                }
            }, {
                key: "disable", value: function (t) {
                    this.ace_editor_instance && this.ace_editor_instance.setReadOnly(!0), nt(at(o.prototype), "disable", this).call(this, t)
                }
            }, {
                key: "destroy", value: function () {
                    this.ace_editor_instance && (this.ace_editor_instance.destroy(), this.ace_editor_instance = null), nt(at(o.prototype), "destroy", this).call(this)
                }
            }]) && et(e.prototype, n), r && et(e, r), o
        }(K);

        function lt(t) {
            return (lt = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function ct(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function ut(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function ht(t, e, n) {
            return (ht = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = yt(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function pt(t, e) {
            return (pt = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function dt(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = yt(t);
                if (e) {
                    var i = yt(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return ft(this, n)
            }
        }

        function ft(t, e) {
            return !e || "object" !== lt(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function yt(t) {
            return (yt = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var mt = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && pt(t, e)
            }(o, t);
            var e, n, r, i = dt(o);

            function o() {
                return ct(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "askConfirmation", value: function () {
                    return !0 !== this.jsoneditor.options.prompt_before_delete || !1 !== window.confirm(this.translate("button_delete_node_warning"))
                }
            }, {
                key: "getDefault", value: function () {
                    return this.schema.default || []
                }
            }, {
                key: "register", value: function () {
                    ht(yt(o.prototype), "register", this).call(this), this.rows && this.rows.forEach((function (t) {
                        return t.register()
                    }))
                }
            }, {
                key: "unregister", value: function () {
                    ht(yt(o.prototype), "unregister", this).call(this), this.rows && this.rows.forEach((function (t) {
                        return t.unregister()
                    }))
                }
            }, {
                key: "getNumColumns", value: function () {
                    var t = this.getItemInfo(0);
                    return this.tabs_holder && "tabs-top" !== this.schema.format ? Math.max(Math.min(12, t.width + 2), 4) : t.width
                }
            }, {
                key: "enable", value: function () {
                    var t = this;
                    this.always_disabled || (this.setAvailability(this, !1), this.rows && this.rows.forEach((function (e) {
                        e.enable(), t.setAvailability(e, !1)
                    })), ht(yt(o.prototype), "enable", this).call(this))
                }
            }, {
                key: "disable", value: function (t) {
                    var e = this;
                    t && (this.always_disabled = !0), this.setAvailability(this, !0), this.rows && this.rows.forEach((function (n) {
                        n.disable(t), e.setAvailability(n, !0)
                    })), ht(yt(o.prototype), "disable", this).call(this)
                }
            }, {
                key: "setAvailability", value: function (t, e) {
                    t.add_row_button && (t.add_row_button.disabled = e), t.remove_all_rows_button && (t.remove_all_rows_button.disabled = e), t.delete_last_row_button && (t.delete_last_row_button.disabled = e), t.copy_button && (t.copy_button.disabled = e), t.delete_button && (t.delete_button.disabled = e), t.moveup_button && (t.moveup_button.disabled = e), t.movedown_button && (t.movedown_button.disabled = e)
                }
            }, {
                key: "preBuild", value: function () {
                    ht(yt(o.prototype), "preBuild", this).call(this), this.rows = [], this.row_cache = [], this.hide_delete_buttons = this.options.disable_array_delete || this.jsoneditor.options.disable_array_delete, this.hide_delete_all_rows_buttons = this.hide_delete_buttons || this.options.disable_array_delete_all_rows || this.jsoneditor.options.disable_array_delete_all_rows, this.hide_delete_last_row_buttons = this.hide_delete_buttons || this.options.disable_array_delete_last_row || this.jsoneditor.options.disable_array_delete_last_row, this.hide_move_buttons = this.options.disable_array_reorder || this.jsoneditor.options.disable_array_reorder, this.hide_add_button = this.options.disable_array_add || this.jsoneditor.options.disable_array_add, this.show_copy_button = this.options.enable_array_copy || this.jsoneditor.options.enable_array_copy, this.array_controls_top = this.options.array_controls_top || this.jsoneditor.options.array_controls_top
                }
            }, {
                key: "build", value: function () {
                    this.options.compact ? (this.title = this.theme.getHeader("", this.getPathDepth()), this.container.appendChild(this.title), this.panel = this.theme.getIndentedPanel(), this.container.appendChild(this.panel), this.title_controls = this.theme.getHeaderButtonHolder(), this.title.appendChild(this.title_controls), this.controls = this.theme.getHeaderButtonHolder(), this.title.appendChild(this.controls), this.row_holder = document.createElement("div"), this.panel.appendChild(this.row_holder)) : (this.header = document.createElement("label"), this.header.textContent = this.getTitle(), this.title = this.theme.getHeader(this.header, this.getPathDepth()), this.container.appendChild(this.title), this.options.infoText && (this.infoButton = this.theme.getInfoButton(this.translateProperty(this.options.infoText)), this.container.appendChild(this.infoButton)), this.title_controls = this.theme.getHeaderButtonHolder(), this.title.appendChild(this.title_controls), this.schema.description && (this.description = this.theme.getDescription(this.translateProperty(this.schema.description)), this.container.appendChild(this.description)), this.error_holder = document.createElement("div"), this.container.appendChild(this.error_holder), "tabs-top" === this.schema.format ? (this.controls = this.theme.getHeaderButtonHolder(), this.title.appendChild(this.controls), this.tabs_holder = this.theme.getTopTabHolder(this.getValidId(this.getItemTitle())), this.container.appendChild(this.tabs_holder), this.row_holder = this.theme.getTopTabContentHolder(this.tabs_holder), this.active_tab = null) : "tabs" === this.schema.format ? (this.controls = this.theme.getHeaderButtonHolder(), this.title.appendChild(this.controls), this.tabs_holder = this.theme.getTabHolder(this.getValidId(this.getItemTitle())), this.container.appendChild(this.tabs_holder), this.row_holder = this.theme.getTabContentHolder(this.tabs_holder), this.active_tab = null) : (this.panel = this.theme.getIndentedPanel(), this.container.appendChild(this.panel), this.row_holder = document.createElement("div"), this.panel.appendChild(this.row_holder), this.controls = this.theme.getButtonHolder(), this.array_controls_top ? this.title.appendChild(this.controls) : this.panel.appendChild(this.controls))), this.addControls()
                }
            }, {
                key: "onChildEditorChange", value: function (t) {
                    this.refreshValue(), this.refreshTabs(!0), ht(yt(o.prototype), "onChildEditorChange", this).call(this, t)
                }
            }, {
                key: "getItemTitle", value: function () {
                    if (!this.item_title) if (this.schema.items && !Array.isArray(this.schema.items)) {
                        var t = this.jsoneditor.expandRefs(this.schema.items);
                        this.item_title = this.translateProperty(t.title) || this.translate("default_array_item_title")
                    } else this.item_title = this.translate("default_array_item_title");
                    return this.cleanText(this.item_title)
                }
            }, {
                key: "getItemSchema", value: function (t) {
                    return Array.isArray(this.schema.items) ? t >= this.schema.items.length ? !0 === this.schema.additionalItems ? {} : this.schema.additionalItems ? f({}, this.schema.additionalItems) : void 0 : f({}, this.schema.items[t]) : this.schema.items ? f({}, this.schema.items) : {}
                }
            }, {
                key: "getItemInfo", value: function (t) {
                    var e = this.getItemSchema(t);
                    this.item_info = this.item_info || {};
                    var n = JSON.stringify(e);
                    return void 0 !== this.item_info[n] || (e = this.jsoneditor.expandRefs(e), this.item_info[n] = {
                        title: this.translateProperty(e.title) || this.translate("default_array_item_title"),
                        default: e.default,
                        width: 12,
                        child_editors: e.properties || e.items
                    }), this.item_info[n]
                }
            }, {
                key: "getElementEditor", value: function (t) {
                    var e = this.getItemInfo(t), n = this.getItemSchema(t);
                    (n = this.jsoneditor.expandRefs(n)).title = "".concat(e.title, " ").concat(t + 1);
                    var r, i = this.jsoneditor.getEditorClass(n);
                    this.tabs_holder ? (r = "tabs-top" === this.schema.format ? this.theme.getTopTabContent() : this.theme.getTabContent()).id = "".concat(this.path, ".").concat(t) : r = e.child_editors ? this.theme.getChildEditorHolder() : this.theme.getIndentedPanel(), this.row_holder.appendChild(r);
                    var o = this.jsoneditor.createEditor(i, {
                        jsoneditor: this.jsoneditor,
                        schema: n,
                        container: r,
                        path: "".concat(this.path, ".").concat(t),
                        parent: this,
                        required: !0
                    });
                    return o.preBuild(), o.build(), o.postBuild(), o.title_controls || (o.array_controls = this.theme.getButtonHolder(), r.appendChild(o.array_controls)), o
                }
            }, {
                key: "checkParent", value: function (t) {
                    return t && t.parentNode
                }
            }, {
                key: "destroy", value: function () {
                    this.empty(!0), this.checkParent(this.title) && this.title.parentNode.removeChild(this.title), this.checkParent(this.description) && this.description.parentNode.removeChild(this.description), this.checkParent(this.row_holder) && this.row_holder.parentNode.removeChild(this.row_holder), this.checkParent(this.controls) && this.controls.parentNode.removeChild(this.controls), this.checkParent(this.panel) && this.panel.parentNode.removeChild(this.panel), this.rows = this.row_cache = this.title = this.description = this.row_holder = this.panel = this.controls = null, ht(yt(o.prototype), "destroy", this).call(this)
                }
            }, {
                key: "empty", value: function (t) {
                    var e = this;
                    this.rows && (this.rows.forEach((function (n, r) {
                        t && (e.checkParent(n.tab) && n.tab.parentNode.removeChild(n.tab), e.destroyRow(n, !0), e.row_cache[r] = null), e.rows[r] = null
                    })), this.rows = [], t && (this.row_cache = []))
                }
            }, {
                key: "destroyRow", value: function (t, e) {
                    var n = t.container;
                    e ? (t.destroy(), n.parentNode && n.parentNode.removeChild(n), this.checkParent(t.tab) && t.tab.parentNode.removeChild(t.tab)) : (t.tab && (t.tab.style.display = "none"), n.style.display = "none", t.unregister())
                }
            }, {
                key: "getMax", value: function () {
                    return Array.isArray(this.schema.items) && !1 === this.schema.additionalItems ? Math.min(this.schema.items.length, this.schema.maxItems || 1 / 0) : this.schema.maxItems || 1 / 0
                }
            }, {
                key: "refreshTabs", value: function (t) {
                    var e = this;
                    this.rows.forEach((function (n) {
                        n.tab && (t ? n.tab_text.textContent = n.getHeaderText() : n.tab === e.active_tab ? e.theme.markTabActive(n) : e.theme.markTabInactive(n))
                    }))
                }
            }, {
                key: "ensureArraySize", value: function (t) {
                    if (Array.isArray(t) || (t = [t]), this.schema.minItems) for (; t.length < this.schema.minItems;) t.push(this.getItemInfo(t.length).default);
                    return this.getMax() && t.length > this.getMax() && (t = t.slice(0, this.getMax())), t
                }
            }, {
                key: "setValue", value: function () {
                    var t = this, e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : [],
                        n = arguments.length > 1 ? arguments[1] : void 0;
                    e = this.ensureArraySize(e);
                    var r = JSON.stringify(e);
                    if (r !== this.serialized) {
                        e.forEach((function (e, r) {
                            if (t.rows[r]) t.rows[r].setValue(e, n); else if (t.row_cache[r]) t.rows[r] = t.row_cache[r], t.rows[r].setValue(e, n), t.rows[r].container.style.display = "", t.rows[r].tab && (t.rows[r].tab.style.display = ""), t.rows[r].register(), t.jsoneditor.trigger("addRow", t.rows[r]); else {
                                var i = t.addRow(e, n);
                                t.jsoneditor.trigger("addRow", i)
                            }
                        }));
                        for (var i = e.length; i < this.rows.length; i++) this.destroyRow(this.rows[i]), this.rows[i] = null;
                        this.rows = this.rows.slice(0, e.length);
                        var o = this.rows.find((function (e) {
                            return e.tab === t.active_tab
                        })), a = void 0 !== o ? o.tab : null;
                        !a && this.rows.length && (a = this.rows[0].tab), this.active_tab = a, this.refreshValue(n), this.refreshTabs(!0), this.refreshTabs(), this.onChange()
                    }
                }
            }, {
                key: "setVisibility", value: function (t, e) {
                    t.style.display = e ? "" : "none"
                }
            }, {
                key: "setupButtons", value: function (t) {
                    var e = [];
                    if (this.value.length) if (1 === this.value.length) {
                        this.remove_all_rows_button.style.display = "none";
                        var n = !(t || this.hide_delete_last_row_buttons);
                        this.setVisibility(this.delete_last_row_button, n), e.push(n)
                    } else {
                        var r = !(t || this.hide_delete_last_row_buttons);
                        this.setVisibility(this.delete_last_row_button, r), e.push(r);
                        var i = !(t || this.hide_delete_all_rows_buttons);
                        this.setVisibility(this.remove_all_rows_button, i), e.push(i)
                    } else this.delete_last_row_button.style.display = "none", this.remove_all_rows_button.style.display = "none";
                    var o = !(this.getMax() && this.getMax() <= this.rows.length || this.hide_add_button);
                    return this.setVisibility(this.add_row_button, o), e.push(o), e.some((function (t) {
                        return t
                    }))
                }
            }, {
                key: "refreshValue", value: function (t) {
                    var e = this, n = this.value ? this.value.length : 0;
                    if (this.value = this.rows.map((function (t) {
                        return t.getValue()
                    })), n !== this.value.length || t) {
                        var r = this.schema.minItems && this.schema.minItems >= this.rows.length;
                        this.rows.forEach((function (t, n) {
                            if (t.movedown_button) {
                                var i = n !== e.rows.length - 1;
                                e.setVisibility(t.movedown_button, i)
                            }
                            t.delete_button && e.setVisibility(t.delete_button, !r), e.value[n] = t.getValue()
                        })), !this.collapsed && this.setupButtons(r) ? this.controls.style.display = "inline-block" : this.controls.style.display = "none"
                    }
                    this.serialized = JSON.stringify(this.value)
                }
            }, {
                key: "addRow", value: function (t, e) {
                    var n = this, r = this.rows.length;
                    this.rows[r] = this.getElementEditor(r), this.row_cache[r] = this.rows[r], this.tabs_holder && (this.rows[r].tab_text = document.createElement("span"), this.rows[r].tab_text.textContent = this.rows[r].getHeaderText(), "tabs-top" === this.schema.format ? (this.rows[r].tab = this.theme.getTopTab(this.rows[r].tab_text, this.getValidId(this.rows[r].path)), this.theme.addTopTab(this.tabs_holder, this.rows[r].tab)) : (this.rows[r].tab = this.theme.getTab(this.rows[r].tab_text, this.getValidId(this.rows[r].path)), this.theme.addTab(this.tabs_holder, this.rows[r].tab)), this.rows[r].tab.addEventListener("click", (function (t) {
                        n.active_tab = n.rows[r].tab, n.refreshTabs(), t.preventDefault(), t.stopPropagation()
                    })));
                    var i = this.rows[r].title_controls || this.rows[r].array_controls;
                    return this.hide_delete_buttons || (this.rows[r].delete_button = this._createDeleteButton(r, i)), this.show_copy_button && (this.rows[r].copy_button = this._createCopyButton(r, i)), r && !this.hide_move_buttons && (this.rows[r].moveup_button = this._createMoveUpButton(r, i)), this.hide_move_buttons || (this.rows[r].movedown_button = this._createMoveDownButton(r, i)), void 0 !== t && this.rows[r].setValue(t, e), this.refreshTabs(), this.rows[r]
                }
            }, {
                key: "_createDeleteButton", value: function (t, e) {
                    var n = this,
                        r = this.getButton(this.getItemTitle(), "delete", "button_delete_row_title", [this.getItemTitle()]);
                    return r.classList.add("delete", "json-editor-btntype-delete"), r.setAttribute("data-i", t), r.addEventListener("click", (function (t) {
                        if (t.preventDefault(), t.stopPropagation(), !n.askConfirmation()) return !1;
                        var e = 1 * t.currentTarget.getAttribute("data-i"), r = n.getValue().filter((function (t, n) {
                            return n !== e
                        })), i = null, o = n.rows[e];
                        n.setValue(r), n.rows[e] ? i = n.rows[e].tab : n.rows[e - 1] && (i = n.rows[e - 1].tab), i && (n.active_tab = i, n.refreshTabs()), n.onChange(!0), n.jsoneditor.trigger("deleteRow", o)
                    })), e && e.appendChild(r), r
                }
            }, {
                key: "_createCopyButton", value: function (t, e) {
                    var n = this,
                        r = this.getButton(this.getItemTitle(), "copy", "button_copy_row_title", [this.getItemTitle()]),
                        i = this.schema;
                    return r.classList.add("copy", "json-editor-btntype-copy"), r.setAttribute("data-i", t), r.addEventListener("click", (function (t) {
                        var e = n.getValue();
                        t.preventDefault(), t.stopPropagation();
                        var r = 1 * t.currentTarget.getAttribute("data-i");
                        e.forEach((function (t, n) {
                            if (n === r) {
                                if ("string" === i.items.type && "uuid" === i.items.format) t = _(); else if ("object" === i.items.type && i.items.properties) for (var o = 0, a = Object.keys(t); o < a.length; o++) {
                                    var s = a[o];
                                    i.items.properties && i.items.properties[s] && "uuid" === i.items.properties[s].format && (t[s] = _())
                                }
                                e.push(t)
                            }
                        })), n.setValue(e), n.refreshValue(!0), n.onChange(!0)
                    })), e.appendChild(r), r
                }
            }, {
                key: "_createMoveUpButton", value: function (t, e) {
                    var n = this,
                        r = this.getButton("", "tabs-top" === this.schema.format ? "moveleft" : "moveup", "button_move_up_title");
                    return r.classList.add("moveup", "json-editor-btntype-move"), r.setAttribute("data-i", t), r.addEventListener("click", (function (t) {
                        t.preventDefault(), t.stopPropagation();
                        var e = 1 * t.currentTarget.getAttribute("data-i");
                        if (!(e <= 0)) {
                            var r = n.getValue(), i = r[e - 1];
                            r[e - 1] = r[e], r[e] = i, n.setValue(r), n.active_tab = n.rows[e - 1].tab, n.refreshTabs(), n.onChange(!0), n.jsoneditor.trigger("moveRow", n.rows[e - 1])
                        }
                    })), e && e.appendChild(r), r
                }
            }, {
                key: "_createMoveDownButton", value: function (t, e) {
                    var n = this,
                        r = this.getButton("", "tabs-top" === this.schema.format ? "moveright" : "movedown", "button_move_down_title");
                    return r.classList.add("movedown", "json-editor-btntype-move"), r.setAttribute("data-i", t), r.addEventListener("click", (function (t) {
                        t.preventDefault(), t.stopPropagation();
                        var e = 1 * t.currentTarget.getAttribute("data-i"), r = n.getValue();
                        if (!(e >= r.length - 1)) {
                            var i = r[e + 1];
                            r[e + 1] = r[e], r[e] = i, n.setValue(r), n.active_tab = n.rows[e + 1].tab, n.refreshTabs(), n.onChange(!0), n.jsoneditor.trigger("moveRow", n.rows[e + 1])
                        }
                    })), e && e.appendChild(r), r
                }
            }, {
                key: "addControls", value: function () {
                    this.collapsed = !1, this.toggle_button = this._createToggleButton(), this.options.collapsed && y(this.toggle_button, "click"), this.schema.options && void 0 !== this.schema.options.disable_collapse ? this.schema.options.disable_collapse && (this.toggle_button.style.display = "none") : this.jsoneditor.options.disable_collapse && (this.toggle_button.style.display = "none"), this.add_row_button = this._createAddRowButton(), this.delete_last_row_button = this._createDeleteLastRowButton(), this.remove_all_rows_button = this._createRemoveAllRowsButton(), this.tabs && (this.add_row_button.classList.add("je-array-control-btn"), this.delete_last_row_button.classList.add("je-array-control-btn"), this.remove_all_rows_button.classList.add("je-array-control-btn"))
                }
            }, {
                key: "_createToggleButton", value: function () {
                    var t = this, e = this.getButton("", "collapse", "button_collapse");
                    e.classList.add("json-editor-btntype-toggle"), this.title.insertBefore(e, this.title.childNodes[0]);
                    var n = this.row_holder.style.display, r = this.controls.style.display;
                    return e.addEventListener("click", (function (e) {
                        e.preventDefault(), e.stopPropagation(), t.panel && t.setVisibility(t.panel, t.collapsed), t.tabs_holder && t.setVisibility(t.tabs_holder, t.collapsed), t.collapsed ? (t.collapsed = !1, t.row_holder.style.display = n, t.controls.style.display = r, t.setButtonText(e.currentTarget, "", "collapse", "button_collapse")) : (t.collapsed = !0, t.row_holder.style.display = "none", t.controls.style.display = "none", t.setButtonText(e.currentTarget, "", "expand", "button_expand"))
                    })), e
                }
            }, {
                key: "_createAddRowButton", value: function () {
                    var t = this,
                        e = this.getButton(this.getItemTitle(), "add", "button_add_row_title", [this.getItemTitle()]);
                    return e.classList.add("json-editor-btntype-add"), e.addEventListener("click", (function (e) {
                        e.preventDefault(), e.stopPropagation();
                        var n, r = t.rows.length;
                        t.row_cache[r] ? (n = t.rows[r] = t.row_cache[r], t.rows[r].setValue(t.rows[r].getDefault(), !0), t.rows[r].container.style.display = "", t.rows[r].tab && (t.rows[r].tab.style.display = ""), t.rows[r].register()) : n = t.addRow(), t.active_tab = t.rows[r].tab, t.refreshTabs(), t.refreshValue(), t.onChange(!0), t.jsoneditor.trigger("addRow", n)
                    })), this.controls.appendChild(e), e
                }
            }, {
                key: "_createDeleteLastRowButton", value: function () {
                    var t = this,
                        e = this.getButton("button_delete_last", "subtract", "button_delete_last_title", [this.getItemTitle()]);
                    return e.classList.add("json-editor-btntype-deletelast"), e.addEventListener("click", (function (e) {
                        if (e.preventDefault(), e.stopPropagation(), !t.askConfirmation()) return !1;
                        var n = t.getValue(), r = null, i = n.pop();
                        t.setValue(n), t.rows[t.rows.length - 1] && (r = t.rows[t.rows.length - 1].tab), r && (t.active_tab = r, t.refreshTabs()), t.onChange(!0), t.jsoneditor.trigger("deleteRow", i)
                    })), this.controls.appendChild(e), e
                }
            }, {
                key: "_createRemoveAllRowsButton", value: function () {
                    var t = this, e = this.getButton("button_delete_all", "delete", "button_delete_all_title");
                    return e.classList.add("json-editor-btntype-deleteall"), e.addEventListener("click", (function (e) {
                        if (e.preventDefault(), e.stopPropagation(), !t.askConfirmation()) return !1;
                        t.empty(!0), t.setValue([]), t.onChange(!0), t.jsoneditor.trigger("deleteAllRows")
                    })), this.controls.appendChild(e), e
                }
            }, {
                key: "showValidationErrors", value: function (t) {
                    var e = this, n = [], r = [];
                    t.forEach((function (t) {
                        t.path === e.path ? n.push(t) : r.push(t)
                    })), this.error_holder && (n.length ? (this.error_holder.innerHTML = "", this.error_holder.style.display = "", n.forEach((function (t) {
                        e.error_holder.appendChild(e.theme.getErrorMessage(t.message))
                    }))) : this.error_holder.style.display = "none"), this.rows.forEach((function (t) {
                        return t.showValidationErrors(r)
                    }))
                }
            }]) && ut(e.prototype, n), r && ut(e, r), o
        }(q);

        function vt(t) {
            return (vt = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function bt(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function gt(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function _t(t, e, n) {
            return (_t = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = jt(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function wt(t, e) {
            return (wt = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function kt(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = jt(t);
                if (e) {
                    var i = jt(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return xt(this, n)
            }
        }

        function xt(t, e) {
            return !e || "object" !== vt(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function jt(t) {
            return (jt = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        mt.rules = {
            ".json-editor-btntype-toggle": "margin:0%2010px%200%200",
            ".je-array-control-btn": "width:100%25;text-align:left;margin-bottom:3px"
        };
        var Ot = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && wt(t, e)
            }(o, t);
            var e, n, r, i = kt(o);

            function o() {
                return bt(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "onInputChange", value: function () {
                    this.value = this.input.value, this.onChange(!0)
                }
            }, {
                key: "register", value: function () {
                    _t(jt(o.prototype), "register", this).call(this), this.input && this.jsoneditor.options.use_name_attributes && this.input.setAttribute("name", this.formname)
                }
            }, {
                key: "unregister", value: function () {
                    _t(jt(o.prototype), "unregister", this).call(this), this.input && this.input.removeAttribute("name")
                }
            }, {
                key: "getNumColumns", value: function () {
                    var t = this, e = this.getTitle().length;
                    return Object.keys(this.select_values).forEach((function (n) {
                        return e = Math.max(e, "".concat(t.select_values[n]).length + 4)
                    })), Math.min(12, Math.max(e / 7, 2))
                }
            }, {
                key: "preBuild", value: function () {
                    var t;
                    _t(jt(o.prototype), "preBuild", this).call(this), this.select_options = {}, this.select_values = {}, this.option_keys = [], this.option_enum = [];
                    var e = this.jsoneditor.expandRefs(this.schema.items || {}), n = e.enum || [],
                        r = e.options && e.options.enum || [], i = e.options && e.options.enum_titles || [];
                    for (t = 0; t < n.length; t++) if (this.sanitize(n[t]) === n[t]) {
                        var a = r[t] || {};
                        "title" in a || (a.title = "".concat(i[t] || n[t])), this.option_keys.push("".concat(n[t])), this.option_enum.push(a), this.select_values["".concat(n[t])] = n[t]
                    }
                }
            }, {
                key: "build", value: function () {
                    var t, e = this;
                    if (this.options.compact || (this.header = this.label = this.theme.getFormInputLabel(this.getTitle(), this.isRequired())), this.schema.description && (this.description = this.theme.getFormInputDescription(this.translateProperty(this.schema.description))), this.options.infoText && (this.infoButton = this.theme.getInfoButton(this.translateProperty(this.options.infoText))), this.options.compact && this.container.classList.add("compact"), !this.schema.format && this.option_keys.length < 8 || "checkbox" === this.schema.format) {
                        for (this.input_type = "checkboxes", this.inputs = {}, this.controls = {}, t = 0; t < this.option_keys.length; t++) {
                            var n = this.formname + t.toString();
                            this.inputs[this.option_keys[t]] = this.theme.getCheckbox(), this.inputs[this.option_keys[t]].id = n, this.select_options[this.option_keys[t]] = this.inputs[this.option_keys[t]];
                            var r = this.theme.getCheckboxLabel(this.option_enum[t].title);
                            if (r.htmlFor = n, this.option_enum[t].infoText) {
                                var i = this.theme.getInfoButton(this.translateProperty(this.option_enum[t].infoText));
                                r.appendChild(i)
                            }
                            this.controls["_" + this.option_keys[t]] = this.theme.getFormControl(r, this.inputs[this.option_keys[t]])
                        }
                        this.control = this.theme.getMultiCheckboxHolder(this.controls, this.label, this.description, this.infoButton), this.inputs.controlgroup = this.inputs.controls = this.control
                    } else {
                        for (this.input_type = "select", this.input = this.theme.getSelectInput(this.option_keys, !0), this.theme.setSelectOptions(this.input, this.option_keys, this.option_enum.map((function (t) {
                            return t.title
                        }))), this.input.setAttribute("multiple", "multiple"), this.input.size = Math.min(10, this.option_keys.length), t = 0; t < this.option_keys.length; t++) this.select_options[this.option_keys[t]] = this.input.children[t];
                        this.control = this.theme.getFormControl(this.label, this.input, this.description, this.infoButton)
                    }
                    (this.schema.readOnly || this.schema.readonly) && this.disable(!0), this.container.appendChild(this.control), this.multiselectChangeHandler = function (n) {
                        var r = [];
                        for (t = 0; t < e.option_keys.length; t++) e.select_options[e.option_keys[t]] && (e.select_options[e.option_keys[t]].selected || e.select_options[e.option_keys[t]].checked) && r.push(e.select_values[e.option_keys[t]]);
                        e.updateValue(r), e.onChange(!0)
                    }, this.control.addEventListener("change", this.multiselectChangeHandler, !1), window.requestAnimationFrame((function () {
                        e.afterInputReady()
                    }))
                }
            }, {
                key: "postBuild", value: function () {
                    _t(jt(o.prototype), "postBuild", this).call(this)
                }
            }, {
                key: "afterInputReady", value: function () {
                    this.theme.afterInputReady(this.input || this.inputs)
                }
            }, {
                key: "setValue", value: function (t, e) {
                    var n = this;
                    t = t || [], Array.isArray(t) || (t = [t]), t = t.map((function (t) {
                        return "".concat(t)
                    })), Object.keys(this.select_options).forEach((function (e) {
                        n.select_options[e]["select" === n.input_type ? "selected" : "checked"] = t.includes(e)
                    })), this.updateValue(t), this.onChange(!0)
                }
            }, {
                key: "removeValue", value: function (t) {
                    t = [].concat(t), this.setValue(this.getValue().filter((function (e) {
                        return !t.includes(e)
                    })))
                }
            }, {
                key: "addValue", value: function (t) {
                    this.setValue(this.getValue().concat(t))
                }
            }, {
                key: "updateValue", value: function (t) {
                    for (var e = !1, n = [], r = 0; r < t.length; r++) if (this.select_options["".concat(t[r])]) {
                        var i = this.sanitize(this.select_values[t[r]]);
                        n.push(i), i !== t[r] && (e = !0)
                    } else e = !0;
                    return this.value = n, e
                }
            }, {
                key: "sanitize", value: function (t) {
                    return "boolean" === this.schema.items.type ? !!t : "number" === this.schema.items.type ? 1 * t || 0 : "integer" === this.schema.items.type ? Math.floor(1 * t || 0) : "".concat(t)
                }
            }, {
                key: "enable", value: function () {
                    var t = this;
                    this.always_disabled || (this.input ? this.input.disabled = !1 : this.inputs && Object.keys(this.inputs).forEach((function (e) {
                        return t.inputs[e].disabled = !1
                    })), _t(jt(o.prototype), "enable", this).call(this))
                }
            }, {
                key: "disable", value: function (t) {
                    var e = this;
                    t && (this.always_disabled = !0), this.input ? this.input.disabled = !0 : this.inputs && Object.keys(this.inputs).forEach((function (t) {
                        return e.inputs[t].disabled = !0
                    })), _t(jt(o.prototype), "disable", this).call(this)
                }
            }, {
                key: "destroy", value: function () {
                    _t(jt(o.prototype), "destroy", this).call(this)
                }
            }, {
                key: "escapeRegExp", value: function (t) {
                    return t.replace(/[.*+?^${}()|[\]\\]/g, "\\$&")
                }
            }, {
                key: "showValidationErrors", value: function (t) {
                    var e = new RegExp("^".concat(this.escapeRegExp(this.path), "(\\.\\d+)?$")),
                        n = t.reduce((function (t, n) {
                            return n.path.match(e) && t.push(n.message), t
                        }), []);
                    n.length ? this.theme.addInputError(this.input || this.inputs, "".concat(n.join(". "), ".")) : this.theme.removeInputError(this.input || this.inputs)
                }
            }]) && gt(e.prototype, n), r && gt(e, r), o
        }(q);

        function Ct(t) {
            return (Ct = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Et(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function St(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Pt(t, e, n) {
            return (Pt = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = At(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function Rt(t, e) {
            return (Rt = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Lt(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = At(t);
                if (e) {
                    var i = At(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Tt(this, n)
            }
        }

        function Tt(t, e) {
            return !e || "object" !== Ct(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function At(t) {
            return (At = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var It = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Rt(t, e)
            }(o, t);
            var e, n, r, i = Lt(o);

            function o() {
                return Et(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "setValue", value: function (t, e) {
                    this.choices_instance ? (t = [].concat(t).map((function (t) {
                        return "".concat(t)
                    })), this.updateValue(t), this.choices_instance.removeActiveItems(), this.choices_instance.setChoiceByValue(this.value), this.onChange(!0)) : Pt(At(o.prototype), "setValue", this).call(this, t, e)
                }
            }, {
                key: "afterInputReady", value: function () {
                    var t = this;
                    if (window.Choices && !this.choices_instance) {
                        var e = this.expandCallbacks("choices", f({}, {
                            removeItems: !0,
                            removeItemButton: !0
                        }, this.defaults.options.choices || {}, this.options.choices || {}, {
                            addItems: !0,
                            editItems: !1,
                            duplicateItemsAllowed: !1
                        }));
                        this.newEnumAllowed = !1, this.choices_instance = new window.Choices(this.input, e), this.control.removeEventListener("change", this.multiselectChangeHandler), this.multiselectChangeHandler = function (e) {
                            var n = t.choices_instance.getValue(!0);
                            t.updateValue(n), t.onChange(!0)
                        }, this.control.addEventListener("change", this.multiselectChangeHandler, !1)
                    }
                    Pt(At(o.prototype), "afterInputReady", this).call(this)
                }
            }, {
                key: "updateValue", value: function (t) {
                    t = [].concat(t);
                    for (var e = !1, n = [], r = 0; r < t.length; r++) {
                        if (!this.select_values["".concat(t[r])]) {
                            if (e = !0, !this.newEnumAllowed) continue;
                            if (!this.addNewOption(t[r])) continue
                        }
                        var i = this.sanitize(this.select_values[t[r]]);
                        n.push(i), i !== t[r] && (e = !0)
                    }
                    return this.value = n, e
                }
            }, {
                key: "addNewOption", value: function (t) {
                    return this.option_keys.push("".concat(t)), this.option_titles.push("".concat(t)), this.select_values["".concat(t)] = t, this.schema.items.enum.push(t), this.choices_instance.setChoices([{
                        value: "".concat(t),
                        label: "".concat(t)
                    }], "value", "label", !1), !0
                }
            }, {
                key: "enable", value: function () {
                    !this.always_disabled && this.choices_instance && this.choices_instance.enable(), Pt(At(o.prototype), "enable", this).call(this)
                }
            }, {
                key: "disable", value: function (t) {
                    this.choices_instance && this.choices_instance.disable(), Pt(At(o.prototype), "disable", this).call(this, t)
                }
            }, {
                key: "destroy", value: function () {
                    this.choices_instance && (this.choices_instance.destroy(), this.choices_instance = null), Pt(At(o.prototype), "destroy", this).call(this)
                }
            }]) && St(e.prototype, n), r && St(e, r), o
        }(Ot);

        function Bt(t) {
            return (Bt = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Nt(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Ft(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Vt(t, e, n) {
            return (Vt = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = zt(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function Dt(t, e) {
            return (Dt = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Ht(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = zt(t);
                if (e) {
                    var i = zt(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Mt(this, n)
            }
        }

        function Mt(t, e) {
            return !e || "object" !== Bt(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function zt(t) {
            return (zt = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var qt = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Dt(t, e)
            }(o, t);
            var e, n, r, i = Ht(o);

            function o() {
                return Nt(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "setValue", value: function (t, e) {
                    this.select2_instance ? (t = [].concat(t).map((function (t) {
                        return "".concat(t)
                    })), this.updateValue(t), this.select2v4 ? this.select2_instance.val(this.value).change() : this.select2_instance.select2("val", this.value), this.onChange(!0)) : Vt(zt(o.prototype), "setValue", this).call(this, t, e)
                }
            }, {
                key: "afterInputReady", value: function () {
                    var t, e = this;
                    window.jQuery && window.jQuery.fn && window.jQuery.fn.select2 && !this.select2_instance && (t = this.expandCallbacks("select2", f({}, {
                        tags: !0,
                        width: "100%"
                    }, this.defaults.options.select2 || {}, this.options.select2 || {})), this.newEnumAllowed = t.tags = !!t.tags && this.schema.items && "string" === this.schema.items.type, this.select2_instance = window.jQuery(this.input).select2(t), this.select2v4 = v(this.select2_instance.select2, "amd"), this.selectChangeHandler = function () {
                        var t = e.select2v4 ? e.select2_instance.val() : e.select2_instance.select2("val");
                        e.updateValue(t), e.onChange(!0)
                    }, this.select2_instance.on("select2-blur", this.selectChangeHandler), this.select2_instance.on("change", this.selectChangeHandler)), Vt(zt(o.prototype), "afterInputReady", this).call(this)
                }
            }, {
                key: "updateValue", value: function (t) {
                    t = [].concat(t);
                    for (var e = !1, n = [], r = 0; r < t.length; r++) {
                        if (!this.select_values["".concat(t[r])]) {
                            if (e = !0, !this.newEnumAllowed) continue;
                            if (!this.addNewOption(t[r])) continue
                        }
                        var i = this.sanitize(this.select_values[t[r]]);
                        n.push(i), i !== t[r] && (e = !0)
                    }
                    return this.value = n, e
                }
            }, {
                key: "addNewOption", value: function (t) {
                    this.option_keys.push("".concat(t)), this.option_titles.push("".concat(t)), this.select_values["".concat(t)] = t, this.schema.items.enum.push(t);
                    var e = this.input.querySelector('option[value="'.concat(t, '"]'));
                    return e ? e.removeAttribute("data-select2-tag") : this.input.appendChild(new Option(t, t, !1, !1)).trigger("change"), !0
                }
            }, {
                key: "enable", value: function () {
                    !this.always_disabled && this.select2_instance && (this.select2v4 ? this.select2_instance.prop("disabled", !1) : this.select2_instance.select2("enable", !0)), Vt(zt(o.prototype), "enable", this).call(this)
                }
            }, {
                key: "disable", value: function (t) {
                    this.select2_instance && (this.select2v4 ? this.select2_instance.prop("disabled", !0) : this.select2_instance.select2("enable", !1)), Vt(zt(o.prototype), "disable", this).call(this)
                }
            }, {
                key: "destroy", value: function () {
                    this.select2_instance && (this.select2_instance.select2("destroy"), this.select2_instance = null), Vt(zt(o.prototype), "destroy", this).call(this)
                }
            }]) && Ft(e.prototype, n), r && Ft(e, r), o
        }(Ot);

        function Ut(t) {
            return (Ut = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Gt(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function $t(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Jt(t, e, n) {
            return (Jt = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Qt(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function Wt(t, e) {
            return (Wt = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Zt(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Qt(t);
                if (e) {
                    var i = Qt(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Yt(this, n)
            }
        }

        function Yt(t, e) {
            return !e || "object" !== Ut(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Qt(t) {
            return (Qt = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Kt = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Wt(t, e)
            }(o, t);
            var e, n, r, i = Zt(o);

            function o() {
                return Gt(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "setValue", value: function (t, e) {
                    this.selectize_instance ? (t = [].concat(t).map((function (t) {
                        return "".concat(t)
                    })), this.updateValue(t), this.selectize_instance.setValue(this.value), this.onChange(!0)) : Jt(Qt(o.prototype), "setValue", this).call(this, t, e)
                }
            }, {
                key: "afterInputReady", value: function () {
                    var t, e = this;
                    window.jQuery && window.jQuery.fn && window.jQuery.fn.selectize && !this.selectize_instance && (t = this.expandCallbacks("selectize", f({}, {
                        plugins: ["remove_button"],
                        delimiter: !1,
                        createOnBlur: !0,
                        create: !0
                    }, this.defaults.options.selectize || {}, this.options.selectize || {})), this.newEnumAllowed = t.create = !!t.create && this.schema.items && "string" === this.schema.items.type, this.selectize_instance = window.jQuery(this.input).selectize(t)[0].selectize, this.control.removeEventListener("change", this.multiselectChangeHandler), this.multiselectChangeHandler = function (t) {
                        var n = e.selectize_instance.getValue();
                        e.updateValue(n), e.onChange(!0)
                    }, this.selectize_instance.on("change", this.multiselectChangeHandler)), Jt(Qt(o.prototype), "afterInputReady", this).call(this)
                }
            }, {
                key: "updateValue", value: function (t) {
                    t = [].concat(t);
                    for (var e = !1, n = [], r = 0; r < t.length; r++) {
                        if (!this.select_values["".concat(t[r])]) {
                            if (e = !0, !this.newEnumAllowed) continue;
                            if (!this.addNewOption(t[r])) continue
                        }
                        var i = this.sanitize(this.select_values[t[r]]);
                        n.push(i), i !== t[r] && (e = !0)
                    }
                    return this.value = n, e
                }
            }, {
                key: "addNewOption", value: function (t) {
                    return this.option_keys.push("".concat(t)), this.option_titles.push("".concat(t)), this.select_values["".concat(t)] = t, this.schema.items.enum.push(t), this.selectize_instance.addOption({
                        text: t,
                        value: t
                    }), !0
                }
            }, {
                key: "enable", value: function () {
                    !this.always_disabled && this.selectize_instance && this.selectize_instance.unlock(), Jt(Qt(o.prototype), "enable", this).call(this)
                }
            }, {
                key: "disable", value: function (t) {
                    this.selectize_instance && this.selectize_instance.lock(), Jt(Qt(o.prototype), "disable", this).call(this, t)
                }
            }, {
                key: "destroy", value: function () {
                    this.selectize_instance && (this.selectize_instance.destroy(), this.selectize_instance = null), Jt(Qt(o.prototype), "destroy", this).call(this)
                }
            }]) && $t(e.prototype, n), r && $t(e, r), o
        }(Ot);

        function Xt(t) {
            return (Xt = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function te(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function ee(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function ne(t, e, n) {
            return (ne = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = ae(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function re(t, e) {
            return (re = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function ie(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = ae(t);
                if (e) {
                    var i = ae(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return oe(this, n)
            }
        }

        function oe(t, e) {
            return !e || "object" !== Xt(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function ae(t) {
            return (ae = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var se = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && re(t, e)
            }(o, t);
            var e, n, r, i = ie(o);

            function o() {
                return te(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "postBuild", value: function () {
                    window.Autocomplete && (this.autocomplete_wrapper = document.createElement("div"), this.input.parentNode.insertBefore(this.autocomplete_wrapper, this.input.nextSibling), this.autocomplete_wrapper.appendChild(this.input), this.autocomplete_dropdown = document.createElement("ul"), this.input.parentNode.insertBefore(this.autocomplete_dropdown, this.input.nextSibling)), ne(ae(o.prototype), "postBuild", this).call(this)
                }
            }, {
                key: "afterInputReady", value: function () {
                    var t, e = this;
                    window.Autocomplete && !this.autocomplete_instance && (t = this.expandCallbacks("autocomplete", f({}, {
                        search: function (t) {
                            return console.log('No "search" callback defined for autocomplete in property "'.concat(t.key, '"')), []
                        }, onSubmit: function () {
                            e.input.blur()
                        }, baseClass: "autocomplete"
                    }, this.defaults.options.autocomplete || {}, this.options.autocomplete || {})), this.autocomplete_wrapper.classList.add(t.baseClass), this.autocomplete_dropdown.classList.add("".concat(t.baseClass, "-result-list")), this.autocomplete_instance = new window.Autocomplete(this.autocomplete_wrapper, t)), ne(ae(o.prototype), "afterInputReady", this).call(this)
                }
            }, {
                key: "destroy", value: function () {
                    this.autocomplete_instance && (this.input && this.input.parentNode && this.input.parentNode.removeChild(this.input), this.autocomplete_dropdown && this.autocomplete_dropdown.parentNode && this.autocomplete_dropdown.parentNode.removeChild(this.autocomplete_dropdown), this.autocomplete_wrapper && this.autocomplete_wrapper.parentNode && this.autocomplete_wrapper.parentNode.removeChild(this.autocomplete_wrapper), this.autocomplete_instance = null), ne(ae(o.prototype), "destroy", this).call(this)
                }
            }]) && ee(e.prototype, n), r && ee(e, r), o
        }(K);
        n(148);

        function le(t) {
            return (le = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function ce(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function ue(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function he(t, e, n) {
            return (he = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = ye(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function pe(t, e) {
            return (pe = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function de(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = ye(t);
                if (e) {
                    var i = ye(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return fe(this, n)
            }
        }

        function fe(t, e) {
            return !e || "object" !== le(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function ye(t) {
            return (ye = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var me = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && pe(t, e)
            }(o, t);
            var e, n, r, i = de(o);

            function o() {
                return ce(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "getNumColumns", value: function () {
                    return 4
                }
            }, {
                key: "setFileReaderListener", value: function (t) {
                    var e = this;
                    t.addEventListener("load", (function (t) {
                        if (e.count === e.current_item_index) e.value[e.count][e.key] = t.target.result; else {
                            var n = {};
                            for (var r in e.parent.schema.properties) n[r] = "";
                            n[e.key] = t.target.result, e.value.splice(e.count, 0, n)
                        }
                        e.count += 1, e.count === e.total + e.current_item_index && e.arrayEditor.setValue(e.value)
                    }))
                }
            }, {
                key: "build", value: function () {
                    var t = this;
                    if (this.options.compact || (this.title = this.header = this.label = this.theme.getFormInputLabel(this.getTitle(), this.isRequired())), this.options.infoText && (this.infoButton = this.theme.getInfoButton(this.translateProperty(this.options.infoText))), this.input = this.theme.getFormInputField("hidden"), this.container.appendChild(this.input), !this.schema.readOnly && !this.schema.readonly) {
                        if (!window.FileReader) throw new Error("FileReader required for base64 editor");
                        this.uploader = this.theme.getFormInputField("file"), this.schema.options && this.schema.options.multiple && !0 === this.schema.options.multiple && this.parent && "object" === this.parent.schema.type && this.parent.parent && "array" === this.parent.parent.schema.type && this.uploader.setAttribute("multiple", ""), this.uploader.addEventListener("change", (function (e) {
                            if (e.preventDefault(), e.stopPropagation(), e.currentTarget.files && e.currentTarget.files.length) if (e.currentTarget.files.length > 1 && t.schema.options && t.schema.options.multiple && !0 === t.schema.options.multiple && t.parent && "object" === t.parent.schema.type && t.parent.parent && "array" === t.parent.parent.schema.type) {
                                t.arrayEditor = t.jsoneditor.getEditor(t.parent.parent.path), t.value = t.arrayEditor.getValue(), t.total = e.currentTarget.files.length, t.current_item_index = parseInt(t.parent.key), t.count = t.current_item_index;
                                for (var n = 0; n < t.total; n++) {
                                    var r = new FileReader;
                                    t.setFileReaderListener(r), r.readAsDataURL(e.currentTarget.files[n])
                                }
                            } else {
                                var i = new FileReader;
                                i.onload = function (e) {
                                    t.value = e.target.result, t.refreshPreview(), t.onChange(!0), i = null
                                }, i.readAsDataURL(e.currentTarget.files[0])
                            }
                        }))
                    }
                    this.preview = this.theme.getFormInputDescription(this.translateProperty(this.schema.description)), this.container.appendChild(this.preview), this.control = this.theme.getFormControl(this.label, this.uploader || this.input, this.preview, this.infoButton), this.container.appendChild(this.control)
                }
            }, {
                key: "refreshPreview", value: function () {
                    if (this.last_preview !== this.value && (this.last_preview = this.value, this.preview.innerHTML = "", this.value)) {
                        var t = this.value.match(/^data:([^;,]+)[;,]/);
                        if (t && (t = t[1]), t) {
                            if (this.preview.innerHTML = "<strong>Type:</strong> ".concat(t, ", <strong>Size:</strong> ").concat(Math.floor((this.value.length - this.value.split(",")[0].length - 1) / 1.33333), " bytes"), "image" === t.substr(0, 5)) {
                                this.preview.innerHTML += "<br>";
                                var e = document.createElement("img");
                                e.style.maxWidth = "100%", e.style.maxHeight = "100px", e.src = this.value, this.preview.appendChild(e)
                            }
                        } else this.preview.innerHTML = "<em>Invalid data URI</em>"
                    }
                }
            }, {
                key: "enable", value: function () {
                    this.always_disabled || (this.uploader && (this.uploader.disabled = !1), he(ye(o.prototype), "enable", this).call(this))
                }
            }, {
                key: "disable", value: function (t) {
                    t && (this.always_disabled = !0), this.uploader && (this.uploader.disabled = !0), he(ye(o.prototype), "disable", this).call(this)
                }
            }, {
                key: "setValue", value: function (t) {
                    this.value !== t && (this.schema.readOnly && this.schema.enum && !this.schema.enum.includes(t) ? this.value = this.schema.enum[0] : this.value = t, this.input.value = this.value, this.refreshPreview(), this.onChange())
                }
            }, {
                key: "destroy", value: function () {
                    this.preview && this.preview.parentNode && this.preview.parentNode.removeChild(this.preview), this.title && this.title.parentNode && this.title.parentNode.removeChild(this.title), this.input && this.input.parentNode && this.input.parentNode.removeChild(this.input), this.uploader && this.uploader.parentNode && this.uploader.parentNode.removeChild(this.uploader), he(ye(o.prototype), "destroy", this).call(this)
                }
            }]) && ue(e.prototype, n), r && ue(e, r), o
        }(q);

        function ve(t) {
            return (ve = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function be(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function ge(t, e, n) {
            return (ge = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = xe(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function _e(t, e) {
            return (_e = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function we(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = xe(t);
                if (e) {
                    var i = xe(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return ke(this, n)
            }
        }

        function ke(t, e) {
            return !e || "object" !== ve(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function xe(t) {
            return (xe = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var je = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && _e(t, e)
            }(o, t);
            var e, n, r, i = we(o);

            function o(t, e) {
                var n;
                return function (t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                }(this, o), (n = i.call(this, t, e)).active = !1, n.parent && n.parent.schema && (Array.isArray(n.parent.schema.required) ? n.parent.schema.required.includes(n.key) || n.parent.schema.required.push(n.key) : n.parent.schema.required = [n.key]), n
            }

            return e = o, (n = [{
                key: "build", value: function () {
                    var t = this;
                    this.options.compact = !0;
                    var e = this.translateProperty(this.schema.title) || this.key,
                        n = this.expandCallbacks("button", f({}, {
                            icon: "",
                            validated: !1,
                            align: "left",
                            action: function (t, e) {
                                window.alert('No button action defined for "'.concat(t.path, '"'))
                            }
                        }, this.defaults.options.button || {}, this.options.button || {}));
                    this.input = this.getButton(e, n.icon, e), this.input.addEventListener("click", n.action, !1), (this.schema.readOnly || this.schema.readonly || this.schema.template) && (this.disable(!0), this.input.setAttribute("readonly", "true")), this.setInputAttributes(["readonly"]), this.control = this.theme.getFormButtonHolder(n.align), this.control.appendChild(this.input), this.container.appendChild(this.control), this.changeHandler = function () {
                        t.jsoneditor.validate(t.jsoneditor.getValue()).length > 0 ? t.disable() : t.enable()
                    }, n.validated && this.jsoneditor.on("change", this.changeHandler)
                }
            }, {
                key: "enable", value: function () {
                    this.always_disabled || (this.input.disabled = !1, ge(xe(o.prototype), "enable", this).call(this))
                }
            }, {
                key: "disable", value: function (t) {
                    t && (this.always_disabled = !0), this.input.disabled = !0, ge(xe(o.prototype), "disable", this).call(this)
                }
            }, {
                key: "getNumColumns", value: function () {
                    return 2
                }
            }, {
                key: "activate", value: function () {
                    this.active = !1, this.enable()
                }
            }, {
                key: "deactivate", value: function () {
                    this.isRequired() || (this.active = !1, this.disable())
                }
            }, {
                key: "destroy", value: function () {
                    this.jsoneditor.off("change", this.changeHandler), this.changeHandler = null, ge(xe(o.prototype), "destroy", this).call(this)
                }
            }]) && be(e.prototype, n), r && be(e, r), o
        }(q);

        function Oe(t) {
            return (Oe = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Ce(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Ee(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Se(t, e, n) {
            return (Se = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Te(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function Pe(t, e) {
            return (Pe = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Re(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Te(t);
                if (e) {
                    var i = Te(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Le(this, n)
            }
        }

        function Le(t, e) {
            return !e || "object" !== Oe(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Te(t) {
            return (Te = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Ae = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Pe(t, e)
            }(o, t);
            var e, n, r, i = Re(o);

            function o() {
                return Ce(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "setValue", value: function (t, e) {
                    t = !!t;
                    var n = this.getValue() !== t;
                    this.value = t, this.input.checked = this.value, this.onChange(n)
                }
            }, {
                key: "register", value: function () {
                    Se(Te(o.prototype), "register", this).call(this), this.input && this.jsoneditor.options.use_name_attributes && this.input.setAttribute("name", this.formname)
                }
            }, {
                key: "unregister", value: function () {
                    Se(Te(o.prototype), "unregister", this).call(this), this.input && this.input.removeAttribute("name")
                }
            }, {
                key: "getNumColumns", value: function () {
                    return Math.min(12, Math.max(this.getTitle().length / 7, 2))
                }
            }, {
                key: "build", value: function () {
                    var t = this;
                    this.parent.options.table_row || (this.label = this.header = this.theme.getCheckboxLabel(this.getTitle(), this.isRequired()), this.label.htmlFor = this.formname), this.schema.description && (this.description = this.theme.getFormInputDescription(this.translateProperty(this.schema.description))), this.options.infoText && !this.options.compact && (this.infoButton = this.theme.getInfoButton(this.translateProperty(this.options.infoText))), this.options.compact && this.container.classList.add("compact"), this.input = this.theme.getCheckbox(), this.input.id = this.formname, this.control = this.theme.getFormControl(this.label, this.input, this.description, this.infoButton), (this.schema.readOnly || this.schema.readonly) && (this.disable(!0), this.input.disabled = !0), this.input.addEventListener("change", (function (e) {
                        e.preventDefault(), e.stopPropagation(), t.value = e.currentTarget.checked, t.onChange(!0)
                    })), this.container.appendChild(this.control)
                }
            }, {
                key: "enable", value: function () {
                    this.always_disabled || (this.input.disabled = !1, Se(Te(o.prototype), "enable", this).call(this))
                }
            }, {
                key: "disable", value: function (t) {
                    t && (this.always_disabled = !0), this.input.disabled = !0, Se(Te(o.prototype), "disable", this).call(this)
                }
            }, {
                key: "destroy", value: function () {
                    this.label && this.label.parentNode && this.label.parentNode.removeChild(this.label), this.description && this.description.parentNode && this.description.parentNode.removeChild(this.description), this.input && this.input.parentNode && this.input.parentNode.removeChild(this.input), Se(Te(o.prototype), "destroy", this).call(this)
                }
            }, {
                key: "showValidationErrors", value: function (t) {
                    var e = this;
                    this.previous_error_setting = this.jsoneditor.options.show_errors;
                    var n = t.reduce((function (t, n) {
                        return n.path === e.path && t.push(n.message), t
                    }), []);
                    this.input.controlgroup = this.control, n.length ? this.theme.addInputError(this.input, "".concat(n.join(". "), ".")) : this.theme.removeInputError(this.input)
                }
            }]) && Ee(e.prototype, n), r && Ee(e, r), o
        }(q);
        n(149);

        function Ie(t) {
            return (Ie = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Be(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Ne(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Fe(t, e, n) {
            return (Fe = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Me(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function Ve(t, e) {
            return (Ve = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function De(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Me(t);
                if (e) {
                    var i = Me(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return He(this, n)
            }
        }

        function He(t, e) {
            return !e || "object" !== Ie(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Me(t) {
            return (Me = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var ze = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Ve(t, e)
            }(o, t);
            var e, n, r, i = De(o);

            function o() {
                return Be(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "setValue", value: function (t, e) {
                    var n = this.typecast(t),
                        r = !!this.jsoneditor.options.use_default_values || void 0 !== this.schema.default;
                    (this.enum_options.length > 0 && !this.enum_values.includes(n) || e && !this.isRequired() && !r) && (n = this.enum_values[0]), this.value !== n && (e ? this.is_dirty = !1 : "change" === this.jsoneditor.options.show_errors && (this.is_dirty = !0), this.input.value = this.enum_options[this.enum_values.indexOf(n)], this.value = n, this.onChange(), this.change())
                }
            }, {
                key: "register", value: function () {
                    Fe(Me(o.prototype), "register", this).call(this), this.input && this.jsoneditor.options.use_name_attributes && this.input.setAttribute("name", this.formname)
                }
            }, {
                key: "unregister", value: function () {
                    Fe(Me(o.prototype), "unregister", this).call(this), this.input && this.input.removeAttribute("name")
                }
            }, {
                key: "getNumColumns", value: function () {
                    if (!this.enum_options) return 3;
                    for (var t = this.getTitle().length, e = 0; e < this.enum_options.length; e++) t = Math.max(t, this.enum_options[e].length + 4);
                    return Math.min(12, Math.max(t / 7, 2))
                }
            }, {
                key: "typecast", value: function (t) {
                    return "boolean" === this.schema.type ? "undefined" === t || void 0 === t ? void 0 : !!t : "number" === this.schema.type ? 1 * t || 0 : "integer" === this.schema.type ? Math.floor(1 * t || 0) : this.schema.enum && void 0 === t ? void 0 : "".concat(t)
                }
            }, {
                key: "getValue", value: function () {
                    if (this.dependenciesFulfilled) return this.typecast(this.value)
                }
            }, {
                key: "preBuild", value: function () {
                    var t, e, n = this;
                    if (this.input_type = "select", this.enum_options = [], this.enum_values = [], this.enum_display = [], this.schema.enum) {
                        var r = this.schema.options && this.schema.options.enum_titles || [];
                        this.schema.enum.forEach((function (t, e) {
                            n.enum_options[e] = "".concat(t), n.enum_display[e] = "".concat(n.translateProperty(r[e]) || t), n.enum_values[e] = n.typecast(t)
                        })), this.isRequired() || (this.enum_display.unshift(" "), this.enum_options.unshift("undefined"), this.enum_values.unshift(void 0))
                    } else if ("boolean" === this.schema.type) this.enum_display = this.schema.options && this.schema.options.enum_titles || ["true", "false"], this.enum_options = ["1", ""], this.enum_values = [!0, !1], this.isRequired() || (this.enum_display.unshift(" "), this.enum_options.unshift("undefined"), this.enum_values.unshift(void 0)); else {
                        if (!this.schema.enumSource) throw new Error("'select' editor requires the enum property to be set.");
                        if (this.enumSource = [], this.enum_display = [], this.enum_options = [], this.enum_values = [], Array.isArray(this.schema.enumSource)) for (t = 0; t < this.schema.enumSource.length; t++) "string" == typeof this.schema.enumSource[t] ? this.enumSource[t] = {source: this.schema.enumSource[t]} : Array.isArray(this.schema.enumSource[t]) ? this.enumSource[t] = this.schema.enumSource[t] : this.enumSource[t] = f({}, this.schema.enumSource[t]); else this.schema.enumValue ? this.enumSource = [{
                            source: this.schema.enumSource,
                            value: this.schema.enumValue
                        }] : this.enumSource = [{source: this.schema.enumSource}];
                        for (t = 0; t < this.enumSource.length; t++) this.enumSource[t].value && ("function" == typeof (e = this.expandCallbacks("template", {template: this.enumSource[t].value})).template ? this.enumSource[t].value = e.template : this.enumSource[t].value = this.jsoneditor.compileTemplate(this.enumSource[t].value, this.template_engine)), this.enumSource[t].title && ("function" == typeof (e = this.expandCallbacks("template", {template: this.enumSource[t].title})).template ? this.enumSource[t].title = e.template : this.enumSource[t].title = this.jsoneditor.compileTemplate(this.enumSource[t].title, this.template_engine)), this.enumSource[t].filter && this.enumSource[t].value && ("function" == typeof (e = this.expandCallbacks("template", {template: this.enumSource[t].filter})).template ? this.enumSource[t].filter = e.template : this.enumSource[t].filter = this.jsoneditor.compileTemplate(this.enumSource[t].filter, this.template_engine))
                    }
                }
            }, {
                key: "build", value: function () {
                    var t = this;
                    this.options.compact || (this.header = this.label = this.theme.getFormInputLabel(this.getTitle(), this.isRequired())), this.schema.description && (this.description = this.theme.getFormInputDescription(this.translateProperty(this.schema.description))), this.options.infoText && (this.infoButton = this.theme.getInfoButton(this.translateProperty(this.options.infoText))), this.options.compact && this.container.classList.add("compact"), this.input = this.theme.getSelectInput(this.enum_options, !1), this.theme.setSelectOptions(this.input, this.enum_options, this.enum_display), (this.schema.readOnly || this.schema.readonly) && (this.disable(!0), this.input.disabled = !0), this.setInputAttributes([]), this.input.addEventListener("change", (function (e) {
                        e.preventDefault(), e.stopPropagation(), t.onInputChange()
                    })), this.control = this.theme.getFormControl(this.label, this.input, this.description, this.infoButton), this.container.appendChild(this.control), this.value = this.enum_values[0], window.requestAnimationFrame((function () {
                        t.input.parentNode && t.afterInputReady()
                    }))
                }
            }, {
                key: "afterInputReady", value: function () {
                    this.theme.afterInputReady(this.input)
                }
            }, {
                key: "onInputChange", value: function () {
                    var t, e = this.typecast(this.input.value);
                    (t = this.enum_values.includes(e) ? this.enum_values[this.enum_values.indexOf(e)] : this.enum_values[0]) !== this.value && (this.is_dirty = !0, this.value = t, this.onChange(!0))
                }
            }, {
                key: "onWatchedFieldChange", value: function () {
                    var t, e, n = [], r = [];
                    if (this.enumSource) {
                        t = this.getWatchedFieldValues();
                        for (var i = 0; i < this.enumSource.length; i++) if (Array.isArray(this.enumSource[i])) n = n.concat(this.enumSource[i]), r = r.concat(this.enumSource[i]); else {
                            var a = [];
                            if (a = Array.isArray(this.enumSource[i].source) ? this.enumSource[i].source : t[this.enumSource[i].source]) {
                                if (this.enumSource[i].slice && (a = Array.prototype.slice.apply(a, this.enumSource[i].slice)), this.enumSource[i].filter) {
                                    var s = [];
                                    for (e = 0; e < a.length; e++) this.enumSource[i].filter({
                                        i: e,
                                        item: a[e],
                                        watched: t
                                    }) && s.push(a[e]);
                                    a = s
                                }
                                var l = [], c = [];
                                for (e = 0; e < a.length; e++) {
                                    var u = a[e];
                                    this.enumSource[i].value ? c[e] = this.typecast(this.enumSource[i].value({
                                        i: e,
                                        item: u
                                    })) : c[e] = a[e], this.enumSource[i].title ? l[e] = this.enumSource[i].title({
                                        i: e,
                                        item: u
                                    }) : l[e] = c[e]
                                }
                                this.enumSource[i].sort && function (t, e, n) {
                                    t.map((function (t, n) {
                                        return {v: t, t: e[n]}
                                    })).sort((function (t, e) {
                                        return t.v < e.v ? -n : t.v === e.v ? 0 : n
                                    })).forEach((function (n, r) {
                                        t[r] = n.v, e[r] = n.t
                                    }))
                                }.bind(null, c, l, "desc" === this.enumSource[i].sort ? 1 : -1)(), n = n.concat(c), r = r.concat(l)
                            }
                        }
                        var h = this.value;
                        this.theme.setSelectOptions(this.input, n, r), this.enum_options = n, this.enum_display = r, this.enum_values = n, n.includes(h) || !1 !== this.jsoneditor.options.enum_source_value_auto_select ? (this.input.value = h, this.value = h) : (this.input.value = n[0], this.value = this.typecast(n[0] || ""), this.parent && !this.watchLoop ? this.parent.onChildEditorChange(this) : this.jsoneditor.onChange(), this.jsoneditor.notifyWatchers(this.path))
                    }
                    Fe(Me(o.prototype), "onWatchedFieldChange", this).call(this)
                }
            }, {
                key: "enable", value: function () {
                    this.always_disabled || (this.input.disabled = !1, Fe(Me(o.prototype), "enable", this).call(this))
                }
            }, {
                key: "disable", value: function (t) {
                    t && (this.always_disabled = !0), this.input.disabled = !0, Fe(Me(o.prototype), "disable", this).call(this, t)
                }
            }, {
                key: "destroy", value: function () {
                    this.label && this.label.parentNode && this.label.parentNode.removeChild(this.label), this.description && this.description.parentNode && this.description.parentNode.removeChild(this.description), this.input && this.input.parentNode && this.input.parentNode.removeChild(this.input), Fe(Me(o.prototype), "destroy", this).call(this)
                }
            }, {
                key: "showValidationErrors", value: function (t) {
                    var e = this;
                    this.previous_error_setting = this.jsoneditor.options.show_errors;
                    var n = t.reduce((function (t, n) {
                        return n.path === e.path && t.push(n.message), t
                    }), []);
                    n.length ? this.theme.addInputError(this.input, "".concat(n.join(". "), ".")) : this.theme.removeInputError(this.input)
                }
            }]) && Ne(e.prototype, n), r && Ne(e, r), o
        }(q);

        function qe(t) {
            return (qe = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Ue(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Ge(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function $e(t, e, n) {
            return ($e = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Ye(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function Je(t, e) {
            return (Je = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function We(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Ye(t);
                if (e) {
                    var i = Ye(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Ze(this, n)
            }
        }

        function Ze(t, e) {
            return !e || "object" !== qe(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Ye(t) {
            return (Ye = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Qe = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Je(t, e)
            }(o, t);
            var e, n, r, i = We(o);

            function o() {
                return Ue(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "setValue", value: function (t, e) {
                    if (this.choices_instance) {
                        var n = this.typecast(t || "");
                        if (this.enum_values.includes(n) || (n = this.enum_values[0]), this.value === n) return;
                        e ? this.is_dirty = !1 : "change" === this.jsoneditor.options.show_errors && (this.is_dirty = !0), this.input.value = this.enum_options[this.enum_values.indexOf(n)], this.choices_instance.setChoiceByValue(this.input.value), this.value = n, this.onChange()
                    } else $e(Ye(o.prototype), "setValue", this).call(this, t, e)
                }
            }, {
                key: "afterInputReady", value: function () {
                    if (window.Choices && !this.choices_instance) {
                        var t = this.expandCallbacks("choices", f({}, this.defaults.options.choices || {}, this.options.choices || {}));
                        this.choices_instance = new window.Choices(this.input, t)
                    }
                    $e(Ye(o.prototype), "afterInputReady", this).call(this)
                }
            }, {
                key: "onWatchedFieldChange", value: function () {
                    var t = this;
                    if ($e(Ye(o.prototype), "onWatchedFieldChange", this).call(this), this.choices_instance) {
                        var e = this.enum_options.map((function (e, n) {
                            return {value: e, label: t.enum_display[n]}
                        }));
                        this.choices_instance.setChoices(e, "value", "label", !0), this.choices_instance.setChoiceByValue("".concat(this.value))
                    }
                }
            }, {
                key: "enable", value: function () {
                    !this.always_disabled && this.choices_instance && this.choices_instance.enable(), $e(Ye(o.prototype), "enable", this).call(this)
                }
            }, {
                key: "disable", value: function (t) {
                    this.choices_instance && this.choices_instance.disable(), $e(Ye(o.prototype), "disable", this).call(this, t)
                }
            }, {
                key: "destroy", value: function () {
                    this.choices_instance && (this.choices_instance.destroy(), this.choices_instance = null), $e(Ye(o.prototype), "destroy", this).call(this)
                }
            }]) && Ge(e.prototype, n), r && Ge(e, r), o
        }(ze);

        function Ke(t) {
            return (Ke = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Xe(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function tn(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function en(t, e, n) {
            return (en = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = an(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function nn(t, e) {
            return (nn = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function rn(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = an(t);
                if (e) {
                    var i = an(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return on(this, n)
            }
        }

        function on(t, e) {
            return !e || "object" !== Ke(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function an(t) {
            return (an = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        Qe.rules = {".choices > *": "box-sizing:border-box"};
        var sn = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && nn(t, e)
            }(o, t);
            var e, n, r, i = rn(o);

            function o() {
                return Xe(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "build", value: function () {
                    if (en(an(o.prototype), "build", this).call(this), this.input && (this.schema.max && "string" == typeof this.schema.max && this.input.setAttribute("max", this.schema.max), this.schema.min && "string" == typeof this.schema.max && this.input.setAttribute("min", this.schema.min), window.flatpickr && "object" === Ke(this.options.flatpickr))) {
                        this.options.flatpickr.enableTime = "date" !== this.schema.format, this.options.flatpickr.noCalendar = "time" === this.schema.format, "integer" === this.schema.type && (this.options.flatpickr.mode = "single"), this.input.setAttribute("data-input", "");
                        var t = this.input;
                        if (!0 === this.options.flatpickr.wrap) {
                            var e = [];
                            if (!1 !== this.options.flatpickr.showToggleButton) {
                                var n = this.getButton("", "time" === this.schema.format ? "time" : "calendar", "flatpickr_toggle_button");
                                n.setAttribute("data-toggle", ""), e.push(n)
                            }
                            if (!1 !== this.options.flatpickr.showClearButton) {
                                var r = this.getButton("", "clear", "flatpickr_clear_button");
                                r.setAttribute("data-clear", ""), e.push(r)
                            }
                            var i = this.input.parentNode, a = this.input.nextSibling,
                                s = this.theme.getInputGroup(this.input, e);
                            void 0 !== s ? (this.options.flatpickr.inline = !1, i.insertBefore(s, a), t = s) : this.options.flatpickr.wrap = !1
                        }
                        this.flatpickr = window.flatpickr(t, this.options.flatpickr), !0 === this.options.flatpickr.inline && !0 === this.options.flatpickr.inlineHideInput && this.input.setAttribute("type", "hidden")
                    }
                }
            }, {
                key: "getValue", value: function () {
                    if (this.dependenciesFulfilled) {
                        if ("string" === this.schema.type) return this.value;
                        if ("" !== this.value && void 0 !== this.value) {
                            var t = "time" === this.schema.format ? "1970-01-01 ".concat(this.value) : this.value;
                            return parseInt(new Date(t).getTime() / 1e3)
                        }
                    }
                }
            }, {
                key: "setValue", value: function (t, e, n) {
                    if ("string" === this.schema.type) en(an(o.prototype), "setValue", this).call(this, t, e, n), this.flatpickr && this.flatpickr.setDate(t); else if (t > 0) {
                        var r = new Date(1e3 * t), i = r.getFullYear(), a = this.zeroPad(r.getMonth() + 1),
                            s = this.zeroPad(r.getDate()), l = this.zeroPad(r.getHours()),
                            c = this.zeroPad(r.getMinutes()), u = this.zeroPad(r.getSeconds()), h = [i, a, s].join("-"),
                            p = [l, c, u].join(":"), d = "".concat(h, "T").concat(p);
                        "date" === this.schema.format ? d = h : "time" === this.schema.format && (d = p), this.input.value = d, this.refreshValue(), this.flatpickr && this.flatpickr.setDate(d)
                    }
                }
            }, {
                key: "destroy", value: function () {
                    this.flatpickr && this.flatpickr.destroy(), this.flatpickr = null, en(an(o.prototype), "destroy", this).call(this)
                }
            }, {
                key: "zeroPad", value: function (t) {
                    return "0".concat(t).slice(-2)
                }
            }]) && tn(e.prototype, n), r && tn(e, r), o
        }(K);

        function ln(t) {
            return (ln = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function cn(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function un(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function hn(t, e, n) {
            return (hn = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = yn(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function pn(t, e) {
            return (pn = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function dn(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = yn(t);
                if (e) {
                    var i = yn(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return fn(this, n)
            }
        }

        function fn(t, e) {
            return !e || "object" !== ln(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function yn(t) {
            return (yn = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var mn = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && pn(t, e)
            }(o, t);
            var e, n, r, i = dn(o);

            function o() {
                return cn(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "register", value: function () {
                    if (this.editors) {
                        for (var t = 0; t < this.editors.length; t++) this.editors[t] && this.editors[t].unregister();
                        this.editors[this.currentEditor] && this.editors[this.currentEditor].register()
                    }
                    hn(yn(o.prototype), "register", this).call(this)
                }
            }, {
                key: "unregister", value: function () {
                    if (hn(yn(o.prototype), "unregister", this).call(this), this.editors) for (var t = 0; t < this.editors.length; t++) this.editors[t] && this.editors[t].unregister()
                }
            }, {
                key: "getNumColumns", value: function () {
                    return this.editors[this.currentEditor] ? Math.max(this.editors[this.currentEditor].getNumColumns(), 4) : 4
                }
            }, {
                key: "enable", value: function () {
                    if (this.editors) for (var t = 0; t < this.editors.length; t++) this.editors[t] && this.editors[t].enable();
                    hn(yn(o.prototype), "enable", this).call(this)
                }
            }, {
                key: "disable", value: function () {
                    if (this.editors) for (var t = 0; t < this.editors.length; t++) this.editors[t] && this.editors[t].disable();
                    hn(yn(o.prototype), "disable", this).call(this)
                }
            }, {
                key: "switchEditor", value: function () {
                    var t = this, e = this.getWatchedFieldValues();
                    if (e) {
                        var n = document.location.origin + document.location.pathname + this.template(e);
                        this.editors[this.refs[n]] || this.buildChildEditor(n), this.currentEditor = this.refs[n], this.register(), this.editors.forEach((function (e, n) {
                            e && (t.currentEditor === n ? e.container.style.display = "" : e.container.style.display = "none")
                        })), this.refreshValue(), this.onChange(!0)
                    }
                }
            }, {
                key: "buildChildEditor", value: function (t) {
                    this.refs[t] = this.editors.length;
                    var e = this.theme.getChildEditorHolder();
                    this.editor_holder.appendChild(e);
                    var n = f({}, this.schema, this.jsoneditor.refs[t]),
                        r = this.jsoneditor.getEditorClass(n, this.jsoneditor), i = this.jsoneditor.createEditor(r, {
                            jsoneditor: this.jsoneditor,
                            schema: n,
                            container: e,
                            path: this.path,
                            parent: this,
                            required: !0
                        });
                    this.editors.push(i), i.preBuild(), i.build(), i.postBuild()
                }
            }, {
                key: "preBuild", value: function () {
                    var t;
                    for (this.refs = {}, this.editors = [], this.currentEditor = "", t = 0; t < this.schema.links.length; t++) if ("describedby" === this.schema.links[t].rel.toLowerCase()) {
                        this.template = this.jsoneditor.compileTemplate(this.schema.links[t].href, this.template_engine);
                        break
                    }
                    this.schema.links = this.schema.links.slice(0, t).concat(this.schema.links.slice(t + 1)), 0 === this.schema.links.length && delete this.schema.links, this.baseSchema = f({}, this.schema)
                }
            }, {
                key: "build", value: function () {
                    this.editor_holder = document.createElement("div"), this.container.appendChild(this.editor_holder), this.switchEditor()
                }
            }, {
                key: "onWatchedFieldChange", value: function () {
                    this.switchEditor()
                }
            }, {
                key: "onChildEditorChange", value: function (t) {
                    this.editors[this.currentEditor] && this.refreshValue(), hn(yn(o.prototype), "onChildEditorChange", this).call(this, t)
                }
            }, {
                key: "refreshValue", value: function () {
                    this.editors[this.currentEditor] && (this.value = this.editors[this.currentEditor].getValue())
                }
            }, {
                key: "setValue", value: function (t, e) {
                    this.editors[this.currentEditor] && (this.editors[this.currentEditor].setValue(t, e), this.refreshValue(), this.onChange())
                }
            }, {
                key: "destroy", value: function () {
                    this.editors.forEach((function (t) {
                        t && t.destroy()
                    })), this.editor_holder && this.editor_holder.parentNode && this.editor_holder.parentNode.removeChild(this.editor_holder), hn(yn(o.prototype), "destroy", this).call(this)
                }
            }, {
                key: "showValidationErrors", value: function (t) {
                    this.editors.forEach((function (e) {
                        e && e.showValidationErrors(t)
                    }))
                }
            }]) && un(e.prototype, n), r && un(e, r), o
        }(q);

        function vn(t) {
            return (vn = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function bn(t, e) {
            return function (t) {
                if (Array.isArray(t)) return t
            }(t) || function (t, e) {
                var n = t && ("undefined" != typeof Symbol && t[Symbol.iterator] || t["@@iterator"]);
                if (null == n) return;
                var r, i, o = [], a = !0, s = !1;
                try {
                    for (n = n.call(t); !(a = (r = n.next()).done) && (o.push(r.value), !e || o.length !== e); a = !0) ;
                } catch (t) {
                    s = !0, i = t
                } finally {
                    try {
                        a || null == n.return || n.return()
                    } finally {
                        if (s) throw i
                    }
                }
                return o
            }(t, e) || function (t, e) {
                if (!t) return;
                if ("string" == typeof t) return gn(t, e);
                var n = Object.prototype.toString.call(t).slice(8, -1);
                "Object" === n && t.constructor && (n = t.constructor.name);
                if ("Map" === n || "Set" === n) return Array.from(t);
                if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return gn(t, e)
            }(t, e) || function () {
                throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }()
        }

        function gn(t, e) {
            (null == e || e > t.length) && (e = t.length);
            for (var n = 0, r = new Array(e); n < e; n++) r[n] = t[n];
            return r
        }

        function _n(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function wn(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function kn(t, e, n) {
            return (kn = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Cn(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function xn(t, e) {
            return (xn = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function jn(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Cn(t);
                if (e) {
                    var i = Cn(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return On(this, n)
            }
        }

        function On(t, e) {
            return !e || "object" !== vn(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Cn(t) {
            return (Cn = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var En = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && xn(t, e)
            }(o, t);
            var e, n, r, i = jn(o);

            function o() {
                return _n(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "getNumColumns", value: function () {
                    return 4
                }
            }, {
                key: "build", value: function () {
                    var t = this;
                    this.title = this.header = this.label = this.theme.getFormInputLabel(this.getTitle(), this.isRequired()), this.container.appendChild(this.title), this.options.enum_titles = this.options.enum_titles || [], this.enum = this.schema.enum, this.selected = 0, this.select_options = [], this.html_values = [];
                    for (var e = 0; e < this.enum.length; e++) this.select_options[e] = this.options.enum_titles[e] || "Value ".concat(e + 1), this.html_values[e] = this.getHTML(this.enum[e]);
                    this.switcher = this.theme.getSwitcher(this.select_options), this.container.appendChild(this.switcher), this.display_area = this.theme.getIndentedPanel(), this.container.appendChild(this.display_area), this.options.hide_display && (this.display_area.style.display = "none"), this.switcher.addEventListener("change", (function (e) {
                        t.selected = t.select_options.indexOf(e.currentTarget.value), t.value = t.enum[t.selected], t.refreshValue(), t.onChange(!0)
                    })), this.value = this.enum[0], this.refreshValue(), 1 === this.enum.length && (this.switcher.style.display = "none")
                }
            }, {
                key: "refreshValue", value: function () {
                    var t = this;
                    this.selected = -1;
                    var e = JSON.stringify(this.value);
                    this.enum.forEach((function (n, r) {
                        if (e === JSON.stringify(n)) return t.selected = r, !1
                    })), this.selected < 0 ? this.setValue(this.enum[0]) : (this.switcher.value = this.select_options[this.selected], this.display_area.innerHTML = this.html_values[this.selected])
                }
            }, {
                key: "enable", value: function () {
                    this.always_disabled || (this.switcher.disabled = !1, kn(Cn(o.prototype), "enable", this).call(this))
                }
            }, {
                key: "disable", value: function (t) {
                    t && (this.always_disabled = !0), this.switcher.disabled = !0, kn(Cn(o.prototype), "disable", this).call(this)
                }
            }, {
                key: "getHTML", value: function (t) {
                    var e = this;
                    if (null === t) return "<em>null</em>";
                    if ("object" === vn(t)) {
                        var n = "";
                        return function (t, e) {
                            Array.isArray(t) || "number" == typeof t.length && t.length > 0 && t.length - 1 in t ? Array.from(t).forEach((function (t, n) {
                                return e(n, t)
                            })) : Object.entries(t).forEach((function (t) {
                                var n = bn(t, 2), r = n[0], i = n[1];
                                return e(r, i)
                            }))
                        }(t, (function (r, i) {
                            var o = e.getHTML(i);
                            Array.isArray(t) || (o = "<div><em>".concat(r, "</em>: ").concat(o, "</div>")), n += "<li>".concat(o, "</li>")
                        })), n = Array.isArray(t) ? "<ol>".concat(n, "</ol>") : "<ul style='margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;'>".concat(n, "</ul>")
                    }
                    return "boolean" == typeof t ? t ? "true" : "false" : "string" == typeof t ? t.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;") : t
                }
            }, {
                key: "setValue", value: function (t) {
                    this.value !== t && (this.value = t, this.refreshValue(), this.onChange())
                }
            }, {
                key: "destroy", value: function () {
                    this.display_area && this.display_area.parentNode && this.display_area.parentNode.removeChild(this.display_area), this.title && this.title.parentNode && this.title.parentNode.removeChild(this.title), this.switcher && this.switcher.parentNode && this.switcher.parentNode.removeChild(this.switcher), kn(Cn(o.prototype), "destroy", this).call(this)
                }
            }]) && wn(e.prototype, n), r && wn(e, r), o
        }(q);

        function Sn(t) {
            return (Sn = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Pn(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Rn(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Ln(t, e, n) {
            return (Ln = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Bn(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function Tn(t, e) {
            return (Tn = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function An(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Bn(t);
                if (e) {
                    var i = Bn(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return In(this, n)
            }
        }

        function In(t, e) {
            return !e || "object" !== Sn(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Bn(t) {
            return (Bn = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Nn = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Tn(t, e)
            }(o, t);
            var e, n, r, i = An(o);

            function o() {
                return Pn(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "register", value: function () {
                    Ln(Bn(o.prototype), "register", this).call(this), this.input && this.jsoneditor.options.use_name_attributes && this.input.setAttribute("name", this.formname)
                }
            }, {
                key: "unregister", value: function () {
                    Ln(Bn(o.prototype), "unregister", this).call(this), this.input && this.input.removeAttribute("name")
                }
            }, {
                key: "setValue", value: function (t, e, n) {
                    if ((!this.template || n) && (null == t ? t = "" : "object" === Sn(t) ? t = JSON.stringify(t) : "string" != typeof t && (t = "".concat(t)), t !== this.serialized)) {
                        var r = this.sanitize(t);
                        if (this.input.value !== r) {
                            this.input.value = r;
                            var i = n || this.getValue() !== t;
                            this.refreshValue(), e ? this.is_dirty = !1 : "change" === this.jsoneditor.options.show_errors && (this.is_dirty = !0), this.adjust_height && this.adjust_height(this.input), this.onChange(i)
                        }
                    }
                }
            }, {
                key: "getNumColumns", value: function () {
                    return 2
                }
            }, {
                key: "enable", value: function () {
                    Ln(Bn(o.prototype), "enable", this).call(this)
                }
            }, {
                key: "disable", value: function () {
                    Ln(Bn(o.prototype), "disable", this).call(this)
                }
            }, {
                key: "refreshValue", value: function () {
                    this.value = this.input.value, "string" != typeof this.value && (this.value = ""), this.serialized = this.value
                }
            }, {
                key: "destroy", value: function () {
                    this.template = null, this.input && this.input.parentNode && this.input.parentNode.removeChild(this.input), this.label && this.label.parentNode && this.label.parentNode.removeChild(this.label), this.description && this.description.parentNode && this.description.parentNode.removeChild(this.description), Ln(Bn(o.prototype), "destroy", this).call(this)
                }
            }, {
                key: "sanitize", value: function (t) {
                    return t
                }
            }, {
                key: "onWatchedFieldChange", value: function () {
                    var t;
                    this.template && (t = this.getWatchedFieldValues(), this.setValue(this.template(t), !1, !0)), Ln(Bn(o.prototype), "onWatchedFieldChange", this).call(this)
                }
            }, {
                key: "build", value: function () {
                    if (this.format = this.schema.format, !this.format && this.options.default_format && (this.format = this.options.default_format), this.options.format && (this.format = this.options.format), this.input_type = "hidden", this.input = this.theme.getFormInputField(this.input_type), this.format && this.input.setAttribute("data-schemaformat", this.format), this.container.appendChild(this.input), this.schema.template) {
                        var t = this.expandCallbacks("template", {template: this.schema.template});
                        "function" == typeof t.template ? this.template = t.template : this.template = this.jsoneditor.compileTemplate(this.schema.template, this.template_engine), this.refreshValue()
                    } else this.refreshValue()
                }
            }]) && Rn(e.prototype, n), r && Rn(e, r), o
        }(q);

        function Fn(t) {
            return (Fn = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Vn(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Dn(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Hn(t, e) {
            return (Hn = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Mn(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = qn(t);
                if (e) {
                    var i = qn(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return zn(this, n)
            }
        }

        function zn(t, e) {
            return !e || "object" !== Fn(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function qn(t) {
            return (qn = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Un = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Hn(t, e)
            }(o, t);
            var e, n, r, i = Mn(o);

            function o() {
                return Vn(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "build", value: function () {
                    this.options.compact = !1, this.header = this.label = this.theme.getFormInputLabel(this.getTitle()), this.description = this.theme.getDescription(this.schema.description || ""), this.control = this.theme.getFormControl(this.label, this.description, null), this.container.appendChild(this.control)
                }
            }, {
                key: "getTitle", value: function () {
                    return this.translateProperty(this.schema.title)
                }
            }, {
                key: "getNumColumns", value: function () {
                    return 12
                }
            }]) && Dn(e.prototype, n), r && Dn(e, r), o
        }(je);

        function Gn(t) {
            return (Gn = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function $n(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Jn(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Wn(t, e, n) {
            return (Wn = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Kn(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function Zn(t, e) {
            return (Zn = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Yn(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Kn(t);
                if (e) {
                    var i = Kn(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Qn(this, n)
            }
        }

        function Qn(t, e) {
            return !e || "object" !== Gn(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Kn(t) {
            return (Kn = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Xn = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Zn(t, e)
            }(o, t);
            var e, n, r, i = Yn(o);

            function o() {
                return $n(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "build", value: function () {
                    if (Wn(Kn(o.prototype), "build", this).call(this), void 0 !== this.schema.minimum) {
                        var t = this.schema.minimum;
                        void 0 !== this.schema.exclusiveMinimum && (t += 1), this.input.setAttribute("min", t)
                    }
                    if (void 0 !== this.schema.maximum) {
                        var e = this.schema.maximum;
                        void 0 !== this.schema.exclusiveMaximum && (e -= 1), this.input.setAttribute("max", e)
                    }
                    if (void 0 !== this.schema.step) {
                        var n = this.schema.step || 1;
                        this.input.setAttribute("step", n)
                    }
                    this.setInputAttributes(["maxlength", "pattern", "readonly", "min", "max", "step"])
                }
            }, {
                key: "getNumColumns", value: function () {
                    return 2
                }
            }, {
                key: "getValue", value: function () {
                    if (this.dependenciesFulfilled) {
                        var t = function (t) {
                            if (null == t) return !1;
                            var e = t.match(b), n = parseFloat(t);
                            return null !== e && !isNaN(n) && isFinite(n)
                        }(this.value) ? parseFloat(this.value) : this.value;
                        if (this.jsoneditor.options.use_default_values || "" !== t) return t
                    }
                }
            }]) && Jn(e.prototype, n), r && Jn(e, r), o
        }(K);

        function tr(t) {
            return (tr = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function er(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function nr(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function rr(t, e) {
            return (rr = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function ir(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = ar(t);
                if (e) {
                    var i = ar(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return or(this, n)
            }
        }

        function or(t, e) {
            return !e || "object" !== tr(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function ar(t) {
            return (ar = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var sr = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && rr(t, e)
            }(o, t);
            var e, n, r, i = ir(o);

            function o() {
                return er(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "getNumColumns", value: function () {
                    return 2
                }
            }, {
                key: "getValue", value: function () {
                    if (this.dependenciesFulfilled) {
                        var t = function (t) {
                            if (null == t) return !1;
                            var e = t.match(g), n = parseInt(t);
                            return null !== e && !isNaN(n) && isFinite(n)
                        }(this.value) ? parseInt(this.value) : this.value;
                        if (this.jsoneditor.options.use_default_values || "" !== t) return t
                    }
                }
            }]) && nr(e.prototype, n), r && nr(e, r), o
        }(Xn);

        function lr(t) {
            return (lr = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function cr(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function ur(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function hr(t, e, n) {
            return (hr = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = yr(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function pr(t, e) {
            return (pr = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function dr(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = yr(t);
                if (e) {
                    var i = yr(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return fr(this, n)
            }
        }

        function fr(t, e) {
            return !e || "object" !== lr(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function yr(t) {
            return (yr = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var mr = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && pr(t, e)
            }(o, t);
            var e, n, r, i = dr(o);

            function o() {
                return cr(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "preBuild", value: function () {
                    if (hr(yr(o.prototype), "preBuild", this).call(this), this.schema.options || (this.schema.options = {}), !this.schema.options.cleave) switch (this.format) {
                        case"ipv6":
                            this.schema.options.cleave = {
                                delimiters: [":"],
                                blocks: [4, 4, 4, 4, 4, 4, 4, 4],
                                uppercase: !0
                            };
                            break;
                        case"ipv4":
                            this.schema.options.cleave = {delimiters: ["."], blocks: [3, 3, 3, 3], numericOnly: !0}
                    }
                    this.options = f(this.options, this.schema.options || {})
                }
            }]) && ur(e.prototype, n), r && ur(e, r), o
        }(K);

        function vr(t) {
            return (vr = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function br(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function gr(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function _r(t, e, n) {
            return (_r = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = jr(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function wr(t, e) {
            return (wr = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function kr(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = jr(t);
                if (e) {
                    var i = jr(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return xr(this, n)
            }
        }

        function xr(t, e) {
            return !e || "object" !== vr(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function jr(t) {
            return (jr = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Or = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && wr(t, e)
            }(o, t);
            var e, n, r, i = kr(o);

            function o() {
                return br(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "setValue", value: function (t, e, n) {
                    var r = _r(jr(o.prototype), "setValue", this).call(this, t, e, n);
                    void 0 !== r && r.changed && this.jodit_instance && this.jodit_instance.setEditorValue(r.value)
                }
            }, {
                key: "build", value: function () {
                    this.options.format = "textarea", _r(jr(o.prototype), "build", this).call(this), this.input_type = this.schema.format, this.input.setAttribute("data-schemaformat", this.input_type)
                }
            }, {
                key: "afterInputReady", value: function () {
                    var t, e = this;
                    window.Jodit ? (t = this.expandCallbacks("jodit", f({}, {height: 300}, this.defaults.options.jodit || {}, this.options.jodit || {})), this.jodit_instance = new window.Jodit(this.input, t), (this.schema.readOnly || this.schema.readonly || this.schema.template) && this.jodit_instance.setReadOnly(!0), this.jodit_instance.events.on("change", (function () {
                        e.value = e.jodit_instance.getEditorValue(), e.is_dirty = !0, e.onChange(!0)
                    })), this.theme.afterInputReady(this.input)) : _r(jr(o.prototype), "afterInputReady", this).call(this)
                }
            }, {
                key: "getNumColumns", value: function () {
                    return 6
                }
            }, {
                key: "enable", value: function () {
                    !this.always_disabled && this.jodit_instance && this.jodit_instance.setReadOnly(!1), _r(jr(o.prototype), "enable", this).call(this)
                }
            }, {
                key: "disable", value: function (t) {
                    this.jodit_instance && this.jodit_instance.setReadOnly(!0), _r(jr(o.prototype), "disable", this).call(this, t)
                }
            }, {
                key: "destroy", value: function () {
                    this.jodit_instance && (this.jodit_instance.destruct(), this.jodit_instance = null), _r(jr(o.prototype), "destroy", this).call(this)
                }
            }]) && gr(e.prototype, n), r && gr(e, r), o
        }(K);

        function Cr(t) {
            return (Cr = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Er(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Sr(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Pr(t, e, n) {
            return (Pr = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Ar(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function Rr(t, e) {
            return (Rr = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Lr(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Ar(t);
                if (e) {
                    var i = Ar(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Tr(this, n)
            }
        }

        function Tr(t, e) {
            return !e || "object" !== Cr(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Ar(t) {
            return (Ar = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Ir = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Rr(t, e)
            }(o, t);
            var e, n, r, i = Lr(o);

            function o() {
                return Er(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "register", value: function () {
                    if (this.editors) {
                        for (var t = 0; t < this.editors.length; t++) this.editors[t] && this.editors[t].unregister();
                        this.editors[this.type] && this.editors[this.type].register()
                    }
                    Pr(Ar(o.prototype), "register", this).call(this)
                }
            }, {
                key: "unregister", value: function () {
                    if (Pr(Ar(o.prototype), "unregister", this).call(this), this.editors) for (var t = 0; t < this.editors.length; t++) this.editors[t] && this.editors[t].unregister()
                }
            }, {
                key: "getNumColumns", value: function () {
                    return this.editors[this.type] ? Math.max(this.editors[this.type].getNumColumns(), 4) : 4
                }
            }, {
                key: "enable", value: function () {
                    if (!this.always_disabled) {
                        if (this.editors) for (var t = 0; t < this.editors.length; t++) this.editors[t] && this.editors[t].enable();
                        this.switcher.disabled = !1, Pr(Ar(o.prototype), "enable", this).call(this)
                    }
                }
            }, {
                key: "disable", value: function (t) {
                    if (t && (this.always_disabled = !0), this.editors) for (var e = 0; e < this.editors.length; e++) this.editors[e] && this.editors[e].disable(t);
                    this.switcher.disabled = !0, Pr(Ar(o.prototype), "disable", this).call(this)
                }
            }, {
                key: "switchEditor", value: function (t) {
                    var e = this;
                    this.editors[t] || this.buildChildEditor(t);
                    var n = this.getValue();
                    this.type = t, this.register(), this.editors.forEach((function (t, r) {
                        t && (e.type === r ? (e.keep_values && t.setValue(n, !0), t.container.style.display = "") : t.container.style.display = "none")
                    })), this.refreshValue(), this.refreshHeaderText()
                }
            }, {
                key: "buildChildEditor", value: function (t) {
                    var e, n = this, r = this.types[t], i = this.theme.getChildEditorHolder();
                    this.editor_holder.appendChild(i), "string" == typeof r ? (e = f({}, this.schema)).type = r : (e = f({}, this.schema, r), e = this.jsoneditor.expandRefs(e), r && r.required && Array.isArray(r.required) && this.schema.required && Array.isArray(this.schema.required) && (e.required = this.schema.required.concat(r.required)));
                    var o = this.jsoneditor.getEditorClass(e);
                    this.editors[t] = this.jsoneditor.createEditor(o, {
                        jsoneditor: this.jsoneditor,
                        schema: e,
                        container: i,
                        path: this.path,
                        parent: this,
                        required: !0
                    }), this.editors[t].preBuild(), this.editors[t].build(), this.editors[t].postBuild(), this.editors[t].header && (this.editors[t].header.style.display = "none"), this.editors[t].option = this.switcher_options[t], i.addEventListener("change_header_text", (function () {
                        n.refreshHeaderText()
                    })), t !== this.type && (i.style.display = "none")
                }
            }, {
                key: "preBuild", value: function () {
                    if (this.types = [], this.type = 0, this.editors = [], this.validators = [], this.keep_values = !0, void 0 !== this.jsoneditor.options.keep_oneof_values && (this.keep_values = this.jsoneditor.options.keep_oneof_values), void 0 !== this.options.keep_oneof_values && (this.keep_values = this.options.keep_oneof_values), this.schema.oneOf) this.oneOf = !0, this.types = this.schema.oneOf, delete this.schema.oneOf; else if (this.schema.anyOf) this.anyOf = !0, this.types = this.schema.anyOf, delete this.schema.anyOf; else {
                        if (this.schema.type && "any" !== this.schema.type) Array.isArray(this.schema.type) ? this.types = this.schema.type : this.types = [this.schema.type]; else if (this.types = ["string", "number", "integer", "boolean", "object", "array", "null"], this.schema.disallow) {
                            var t = this.schema.disallow;
                            "object" === Cr(t) && Array.isArray(t) || (t = [t]);
                            var e = [];
                            this.types.forEach((function (n) {
                                t.includes(n) || e.push(n)
                            })), this.types = e
                        }
                        delete this.schema.type
                    }
                    this.display_text = this.getDisplayText(this.types)
                }
            }, {
                key: "build", value: function () {
                    var t = this, e = this.container;
                    this.header = this.label = this.theme.getFormInputLabel(this.getTitle(), this.isRequired()), this.container.appendChild(this.header), this.switcher = this.theme.getSwitcher(this.display_text), e.appendChild(this.switcher), this.switcher.addEventListener("change", (function (e) {
                        e.preventDefault(), e.stopPropagation(), t.switchEditor(t.display_text.indexOf(e.currentTarget.value)), t.onChange(!0)
                    })), this.editor_holder = document.createElement("div"), e.appendChild(this.editor_holder);
                    var n = {};
                    this.jsoneditor.options.custom_validators && (n.custom_validators = this.jsoneditor.options.custom_validators), this.switcher_options = this.theme.getSwitcherOptions(this.switcher), this.types.forEach((function (e, r) {
                        var i;
                        t.editors[r] = !1, "string" == typeof e ? (i = f({}, t.schema)).type = e : (i = f({}, t.schema, e), e.required && Array.isArray(e.required) && t.schema.required && Array.isArray(t.schema.required) && (i.required = t.schema.required.concat(e.required))), t.validators[r] = new L(t.jsoneditor, i, n, t.defaults)
                    })), this.switchEditor(0)
                }
            }, {
                key: "onChildEditorChange", value: function (t) {
                    this.editors[this.type] && (this.refreshValue(), this.refreshHeaderText()), Pr(Ar(o.prototype), "onChildEditorChange", this).call(this)
                }
            }, {
                key: "refreshHeaderText", value: function () {
                    var t = this.getDisplayText(this.types);
                    Array.from(this.switcher_options).forEach((function (e, n) {
                        e.textContent = t[n]
                    }))
                }
            }, {
                key: "refreshValue", value: function () {
                    this.value = this.editors[this.type].getValue()
                }
            }, {
                key: "setValue", value: function (t, e) {
                    var n = this, r = this.type, i = {match: 0, extra: 0, i: this.type}, o = {match: 0, i: null};
                    this.validators.forEach((function (e, r) {
                        var a = null;
                        void 0 !== n.anyOf && n.anyOf && (a = e.fitTest(t), (i.match < a.match || i.match === a.match && i.extra > a.extra) && ((i = a).i = r)), e.validate(t).length || null !== o.i ? i = o : (o.i = r, null !== a && (o.match = a.match))
                    }));
                    var a = o.i;
                    void 0 !== this.anyOf && this.anyOf && o.match < i.match && (a = i.i), null === a && (a = this.type), this.type = a, this.switcher.value = this.display_text[a];
                    var s = this.type !== r;
                    s && this.switchEditor(this.type), this.editors[this.type].setValue(t, e), this.refreshValue(), this.onChange(s)
                }
            }, {
                key: "destroy", value: function () {
                    this.editors.forEach((function (t) {
                        t && t.destroy()
                    })), this.editor_holder && this.editor_holder.parentNode && this.editor_holder.parentNode.removeChild(this.editor_holder), this.switcher && this.switcher.parentNode && this.switcher.parentNode.removeChild(this.switcher), Pr(Ar(o.prototype), "destroy", this).call(this)
                }
            }, {
                key: "showValidationErrors", value: function (t) {
                    var e = this;
                    if (this.oneOf || this.anyOf) {
                        var n = this.oneOf ? "oneOf" : "anyOf";
                        this.editors.forEach((function (r, i) {
                            if (r) {
                                var o = "".concat(e.path, ".").concat(n, "[").concat(i, "]");
                                r.showValidationErrors(t.reduce((function (t, n) {
                                    if (n.path.startsWith(o) || n.path === o.substr(0, n.path.length)) {
                                        var r = f({}, n);
                                        n.path.startsWith(o) && (r.path = e.path + r.path.substr(o.length)), t.push(r)
                                    }
                                    return t
                                }), []))
                            }
                        }))
                    } else this.editors.forEach((function (e) {
                        e && e.showValidationErrors(t)
                    }))
                }
            }, {
                key: "addLinks", value: function () {
                }
            }]) && Sr(e.prototype, n), r && Sr(e, r), o
        }(q);

        function Br(t) {
            return (Br = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Nr(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Fr(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Vr(t, e) {
            return (Vr = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Dr(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Mr(t);
                if (e) {
                    var i = Mr(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Hr(this, n)
            }
        }

        function Hr(t, e) {
            return !e || "object" !== Br(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Mr(t) {
            return (Mr = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var zr = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Vr(t, e)
            }(o, t);
            var e, n, r, i = Dr(o);

            function o() {
                return Nr(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "getValue", value: function () {
                    if (this.dependenciesFulfilled) return null
                }
            }, {
                key: "setValue", value: function () {
                    this.onChange()
                }
            }, {
                key: "getNumColumns", value: function () {
                    return 2
                }
            }]) && Fr(e.prototype, n), r && Fr(e, r), o
        }(q);

        function qr(t, e) {
            var n = Object.keys(t);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(t);
                e && (r = r.filter((function (e) {
                    return Object.getOwnPropertyDescriptor(t, e).enumerable
                }))), n.push.apply(n, r)
            }
            return n
        }

        function Ur(t) {
            for (var e = 1; e < arguments.length; e++) {
                var n = null != arguments[e] ? arguments[e] : {};
                e % 2 ? qr(Object(n), !0).forEach((function (e) {
                    Gr(t, e, n[e])
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(n)) : qr(Object(n)).forEach((function (e) {
                    Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(n, e))
                }))
            }
            return t
        }

        function Gr(t, e, n) {
            return e in t ? Object.defineProperty(t, e, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : t[e] = n, t
        }

        function $r(t, e) {
            return function (t) {
                if (Array.isArray(t)) return t
            }(t) || function (t, e) {
                var n = t && ("undefined" != typeof Symbol && t[Symbol.iterator] || t["@@iterator"]);
                if (null == n) return;
                var r, i, o = [], a = !0, s = !1;
                try {
                    for (n = n.call(t); !(a = (r = n.next()).done) && (o.push(r.value), !e || o.length !== e); a = !0) ;
                } catch (t) {
                    s = !0, i = t
                } finally {
                    try {
                        a || null == n.return || n.return()
                    } finally {
                        if (s) throw i
                    }
                }
                return o
            }(t, e) || function (t, e) {
                if (!t) return;
                if ("string" == typeof t) return Jr(t, e);
                var n = Object.prototype.toString.call(t).slice(8, -1);
                "Object" === n && t.constructor && (n = t.constructor.name);
                if ("Map" === n || "Set" === n) return Array.from(t);
                if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return Jr(t, e)
            }(t, e) || function () {
                throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }()
        }

        function Jr(t, e) {
            (null == e || e > t.length) && (e = t.length);
            for (var n = 0, r = new Array(e); n < e; n++) r[n] = t[n];
            return r
        }

        function Wr(t) {
            return (Wr = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Zr(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Yr(t, e, n) {
            return (Yr = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = ti(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function Qr(t, e) {
            return (Qr = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Kr(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = ti(t);
                if (e) {
                    var i = ti(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Xr(this, n)
            }
        }

        function Xr(t, e) {
            return !e || "object" !== Wr(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function ti(t) {
            return (ti = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var ei = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Qr(t, e)
            }(o, t);
            var e, n, r, i = Kr(o);

            function o(t, e, n) {
                var r;
                return function (t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                }(this, o), (r = i.call(this, t, e)).currentDepth = n, r
            }

            return e = o, (n = [{
                key: "getDefault", value: function () {
                    return f({}, this.schema.default || {})
                }
            }, {
                key: "getChildEditors", value: function () {
                    return this.editors
                }
            }, {
                key: "register", value: function () {
                    Yr(ti(o.prototype), "register", this).call(this), this.editors && Object.values(this.editors).forEach((function (t) {
                        return t.register()
                    }))
                }
            }, {
                key: "unregister", value: function () {
                    Yr(ti(o.prototype), "unregister", this).call(this), this.editors && Object.values(this.editors).forEach((function (t) {
                        return t.unregister()
                    }))
                }
            }, {
                key: "getNumColumns", value: function () {
                    return Math.max(Math.min(12, this.maxwidth), 3)
                }
            }, {
                key: "enable", value: function () {
                    this.always_disabled || (this.editjson_control && (this.editjson_control.disabled = !1), this.addproperty_button && (this.addproperty_button.disabled = !1), Yr(ti(o.prototype), "enable", this).call(this), this.editors && Object.values(this.editors).forEach((function (t) {
                        t.isActive() && t.enable(), t.optInCheckbox.disabled = !1
                    })))
                }
            }, {
                key: "disable", value: function (t) {
                    t && (this.always_disabled = !0), this.editjson_control && (this.editjson_control.disabled = !0), this.addproperty_button && (this.addproperty_button.disabled = !0), this.hideEditJSON(), Yr(ti(o.prototype), "disable", this).call(this), this.editors && Object.values(this.editors).forEach((function (e) {
                        e.isActive() && e.disable(t), e.optInCheckbox.disabled = !0
                    }))
                }
            }, {
                key: "layoutEditors", value: function () {
                    var t, e, n = this;
                    if (this.row_container) {
                        var r;
                        this.property_order = Object.keys(this.editors), this.property_order = this.property_order.sort((function (t, e) {
                            var r = n.editors[t].schema.propertyOrder, i = n.editors[e].schema.propertyOrder;
                            return "number" != typeof r && (r = 1e3), "number" != typeof i && (i = 1e3), r - i
                        }));
                        var i, o = "categories" === this.format, a = [], s = null, l = null;
                        if ("grid-strict" === this.format) {
                            var c = 0;
                            if (i = [], this.property_order.forEach((function (t) {
                                var e = n.editors[t];
                                if (!e.property_removed) {
                                    var r = e.options.hidden ? 0 : e.options.grid_columns || e.getNumColumns(),
                                        o = e.options.hidden ? 0 : e.options.grid_offset || 0,
                                        s = !e.options.hidden && (e.options.grid_break || !1), l = {
                                            key: t,
                                            width: r,
                                            offset: o,
                                            height: e.options.hidden ? 0 : e.container.offsetHeight
                                        };
                                    i.push(l), a[c] = i, s && (c++, i = [])
                                }
                            })), this.layout === JSON.stringify(a)) return !1;
                            for (this.layout = JSON.stringify(a), r = document.createElement("div"), t = 0; t < a.length; t++) for (i = this.theme.getGridRow(), r.appendChild(i), e = 0; e < a[t].length; e++) s = a[t][e].key, (l = this.editors[s]).options.hidden ? l.container.style.display = "none" : this.theme.setGridColumnSize(l.container, a[t][e].width, a[t][e].offset), i.appendChild(l.container)
                        } else if ("grid" === this.format) {
                            for (this.property_order.forEach((function (t) {
                                var e = n.editors[t];
                                if (!e.property_removed) {
                                    for (var r = !1, i = e.options.hidden ? 0 : e.options.grid_columns || e.getNumColumns(), o = e.options.hidden ? 0 : e.container.offsetHeight, s = 0; s < a.length; s++) a[s].width + i <= 12 && (!o || .5 * a[s].minh < o && 2 * a[s].maxh > o) && (r = s);
                                    !1 === r && (a.push({
                                        width: 0,
                                        minh: 999999,
                                        maxh: 0,
                                        editors: []
                                    }), r = a.length - 1), a[r].editors.push({
                                        key: t,
                                        width: i,
                                        height: o
                                    }), a[r].width += i, a[r].minh = Math.min(a[r].minh, o), a[r].maxh = Math.max(a[r].maxh, o)
                                }
                            })), t = 0; t < a.length; t++) if (a[t].width < 12) {
                                var u = !1, h = 0;
                                for (e = 0; e < a[t].editors.length; e++) (!1 === u || a[t].editors[e].width > a[t].editors[u].width) && (u = e), a[t].editors[e].width *= 12 / a[t].width, a[t].editors[e].width = Math.floor(a[t].editors[e].width), h += a[t].editors[e].width;
                                h < 12 && (a[t].editors[u].width += 12 - h), a[t].width = 12
                            }
                            if (this.layout === JSON.stringify(a)) return !1;
                            for (this.layout = JSON.stringify(a), r = document.createElement("div"), t = 0; t < a.length; t++) for (i = this.theme.getGridRow(), r.appendChild(i), e = 0; e < a[t].editors.length; e++) s = a[t].editors[e].key, (l = this.editors[s]).options.hidden ? l.container.style.display = "none" : this.theme.setGridColumnSize(l.container, a[t].editors[e].width), i.appendChild(l.container)
                        } else {
                            if (r = document.createElement("div"), o) {
                                var p = document.createElement("div"),
                                    d = this.theme.getTopTabHolder(this.translateProperty(this.schema.title)),
                                    f = this.theme.getTopTabContentHolder(d);
                                for (this.property_order.forEach((function (t) {
                                    var e = n.editors[t];
                                    if (!e.property_removed) {
                                        var r = n.theme.getTabContent(),
                                            i = e.schema && ("object" === e.schema.type || "array" === e.schema.type);
                                        r.isObjOrArray = i;
                                        var o = n.theme.getGridRow();
                                        e.tab || (void 0 === n.basicPane ? n.addRow(e, d, r) : n.addRow(e, d, n.basicPane)), r.id = n.getValidId(e.tab_text.textContent), i ? (r.appendChild(o), f.appendChild(r), n.theme.addTopTab(d, e.tab)) : (p.appendChild(o), f.childElementCount > 0 ? f.firstChild.isObjOrArray && (r.appendChild(p), f.insertBefore(r, f.firstChild), n.theme.insertBasicTopTab(e.tab, d), e.basicPane = r) : (r.appendChild(p), f.appendChild(r), n.theme.addTopTab(d, e.tab), e.basicPane = r)), e.options.hidden ? e.container.style.display = "none" : n.theme.setGridColumnSize(e.container, 12), o.appendChild(e.container), e.rowPane = r
                                    }
                                })); this.tabPanesContainer.firstChild;) this.tabPanesContainer.removeChild(this.tabPanesContainer.firstChild);
                                var m = this.tabs_holder.parentNode;
                                m.removeChild(m.firstChild), m.appendChild(d), this.tabPanesContainer = f, this.tabs_holder = d;
                                var v = this.theme.getFirstTab(this.tabs_holder);
                                return void (v && y(v, "click"))
                            }
                            this.property_order.forEach((function (t) {
                                var e = n.editors[t];
                                e.property_removed || (i = n.theme.getGridRow(), r.appendChild(i), e.options.hidden ? e.container.style.display = "none" : n.theme.setGridColumnSize(e.container, 12), i.appendChild(e.container))
                            }))
                        }
                        for (; this.row_container.firstChild;) this.row_container.removeChild(this.row_container.firstChild);
                        this.row_container.appendChild(r)
                    }
                }
            }, {
                key: "getPropertySchema", value: function (t) {
                    var e = this, n = this.schema.properties[t] || {};
                    n = f({}, n);
                    var r = !!this.schema.properties[t];
                    return this.schema.patternProperties && Object.keys(this.schema.patternProperties).forEach((function (i) {
                        new RegExp(i).test(t) && (n.allOf = n.allOf || [], n.allOf.push(e.schema.patternProperties[i]), r = !0)
                    })), !r && this.schema.additionalProperties && "object" === Wr(this.schema.additionalProperties) && (n = f({}, this.schema.additionalProperties)), n
                }
            }, {
                key: "preBuild", value: function () {
                    var t = this;
                    if (Yr(ti(o.prototype), "preBuild", this).call(this), this.editors = {}, this.cached_editors = {}, this.format = this.options.layout || this.options.object_layout || this.schema.format || this.jsoneditor.options.object_layout || "normal", this.schema.properties = this.schema.properties || {}, this.minwidth = 0, this.maxwidth = 0, this.options.table_row) Object.entries(this.schema.properties).forEach((function (e) {
                        var n = $r(e, 2), r = n[0], i = n[1], o = t.jsoneditor.getEditorClass(i);
                        t.editors[r] = t.jsoneditor.createEditor(o, {
                            jsoneditor: t.jsoneditor,
                            schema: i,
                            path: "".concat(t.path, ".").concat(r),
                            parent: t,
                            compact: !0,
                            required: !0
                        }, t.currentDepth + 1), t.editors[r].preBuild();
                        var a = t.editors[r].options.hidden ? 0 : t.editors[r].options.grid_columns || t.editors[r].getNumColumns();
                        t.minwidth += a, t.maxwidth += a
                    })), this.no_link_holder = !0; else {
                        if (this.options.table) throw new Error("Not supported yet");
                        this.schema.defaultProperties || (this.jsoneditor.options.display_required_only || this.options.display_required_only ? this.schema.defaultProperties = Object.keys(this.schema.properties).filter((function (e) {
                            return t.isRequiredObject({key: e, schema: t.schema.properties[e]})
                        })) : this.schema.defaultProperties = Object.keys(this.schema.properties)), this.maxwidth += 1, Array.isArray(this.schema.defaultProperties) && this.schema.defaultProperties.forEach((function (e) {
                            t.addObjectProperty(e, !0), t.editors[e] && (t.minwidth = Math.max(t.minwidth, t.editors[e].options.grid_columns || t.editors[e].getNumColumns()), t.maxwidth += t.editors[e].options.grid_columns || t.editors[e].getNumColumns())
                        }))
                    }
                    this.property_order = Object.keys(this.editors), this.property_order = this.property_order.sort((function (e, n) {
                        var r = t.editors[e].schema.propertyOrder, i = t.editors[n].schema.propertyOrder;
                        return "number" != typeof r && (r = 1e3), "number" != typeof i && (i = 1e3), r - i
                    }))
                }
            }, {
                key: "addTab", value: function (t) {
                    var e = this,
                        n = this.rows[t].schema && ("object" === this.rows[t].schema.type || "array" === this.rows[t].schema.type);
                    this.tabs_holder && (this.rows[t].tab_text = document.createElement("span"), this.rows[t].tab_text.textContent = n ? this.rows[t].getHeaderText() : void 0 === this.schema.basicCategoryTitle ? "Basic" : this.schema.basicCategoryTitle, this.rows[t].tab = this.theme.getTopTab(this.rows[t].tab_text, this.getValidId(this.rows[t].tab_text.textContent)), this.rows[t].tab.addEventListener("click", (function (n) {
                        e.active_tab = e.rows[t].tab, e.refreshTabs(), n.preventDefault(), n.stopPropagation()
                    })))
                }
            }, {
                key: "addRow", value: function (t, e, n) {
                    var r = this.rows.length, i = "object" === t.schema.type || "array" === t.schema.type;
                    this.rows[r] = t, this.rows[r].rowPane = n, i ? (this.addTab(r), this.theme.addTopTab(e, this.rows[r].tab)) : void 0 === this.basicTab ? (this.addTab(r), this.basicTab = r, this.basicPane = n, this.theme.addTopTab(e, this.rows[r].tab)) : (this.rows[r].tab = this.rows[this.basicTab].tab, this.rows[r].tab_text = this.rows[this.basicTab].tab_text, this.rows[r].rowPane = this.rows[this.basicTab].rowPane)
                }
            }, {
                key: "refreshTabs", value: function (t) {
                    var e = this, n = void 0 !== this.basicTab, r = !1;
                    this.rows.forEach((function (i) {
                        i.tab && i.rowPane && i.rowPane.parentNode && (n && i.tab === e.rows[e.basicTab].tab && r || (t ? i.tab_text.textContent = i.getHeaderText() : (n && i.tab === e.rows[e.basicTab].tab && (r = !0), i.tab === e.active_tab ? e.theme.markTabActive(i) : e.theme.markTabInactive(i))))
                    }))
                }
            }, {
                key: "build", value: function () {
                    var t = this, e = "categories" === this.format;
                    if (this.rows = [], this.active_tab = null, this.options.table_row) this.editor_holder = this.container, Object.entries(this.editors).forEach((function (e) {
                        var n = $r(e, 2), r = n[0], i = n[1], o = t.theme.getTableCell();
                        t.editor_holder.appendChild(o), i.setContainer(o), i.build(), i.postBuild(), i.setOptInCheckbox(i.header), t.editors[r].options.hidden && (o.style.display = "none"), t.editors[r].options.input_width && (o.style.width = t.editors[r].options.input_width)
                    })); else {
                        if (this.options.table) throw new Error("Not supported yet");
                        this.header = "", this.options.compact || (this.header = document.createElement("label"), this.header.textContent = this.getTitle()), this.title = this.theme.getHeader(this.header, this.getPathDepth()), this.title.classList.add("je-object__title"), this.controls = this.theme.getButtonHolder(), this.controls.classList.add("je-object__controls"), this.container.appendChild(this.title), this.container.appendChild(this.controls), this.container.classList.add("je-object__container"), this.editjson_holder = this.theme.getModal(), this.editjson_textarea = this.theme.getTextareaInput(), this.editjson_textarea.classList.add("je-edit-json--textarea"), this.editjson_save = this.getButton("button_save", "save", "button_save"), this.editjson_save.classList.add("json-editor-btntype-save"), this.editjson_save.addEventListener("click", (function (e) {
                            e.preventDefault(), e.stopPropagation(), t.saveJSON()
                        })), this.editjson_copy = this.getButton("button_copy", "copy", "button_copy"), this.editjson_copy.classList.add("json-editor-btntype-copy"), this.editjson_copy.addEventListener("click", (function (e) {
                            e.preventDefault(), e.stopPropagation(), t.copyJSON()
                        })), this.editjson_cancel = this.getButton("button_cancel", "cancel", "button_cancel"), this.editjson_cancel.classList.add("json-editor-btntype-cancel"), this.editjson_cancel.addEventListener("click", (function (e) {
                            e.preventDefault(), e.stopPropagation(), t.hideEditJSON()
                        })), this.editjson_holder.appendChild(this.editjson_textarea), this.editjson_holder.appendChild(this.editjson_save), this.editjson_holder.appendChild(this.editjson_copy), this.editjson_holder.appendChild(this.editjson_cancel), this.addproperty_holder = this.theme.getModal(), this.addproperty_list = document.createElement("div"), this.addproperty_list.classList.add("property-selector"), this.addproperty_add = this.getButton("button_add", "add", "button_add"), this.addproperty_add.classList.add("json-editor-btntype-add"), this.addproperty_input = this.theme.getFormInputField("text"), this.addproperty_input.setAttribute("placeholder", "Property name..."), this.addproperty_input.classList.add("property-selector-input"), this.addproperty_add.addEventListener("click", (function (e) {
                            if (e.preventDefault(), e.stopPropagation(), t.addproperty_input.value) {
                                if (t.editors[t.addproperty_input.value]) return void window.alert("there is already a property with that name");
                                t.addObjectProperty(t.addproperty_input.value), t.editors[t.addproperty_input.value] && t.editors[t.addproperty_input.value].disable(), t.onChange(!0)
                            }
                        })), this.addproperty_input.addEventListener("input", (function (t) {
                            t.target.previousSibling.childNodes.forEach((function (e) {
                                e.innerText.includes(t.target.value) ? e.style.display = "" : e.style.display = "none"
                            }))
                        })), this.addproperty_holder.appendChild(this.addproperty_list), this.addproperty_holder.appendChild(this.addproperty_input), this.addproperty_holder.appendChild(this.addproperty_add);
                        var n = document.createElement("div");
                        n.style.clear = "both", this.addproperty_holder.appendChild(n), document.addEventListener("click", this.onOutsideModalClick.bind(this)), this.schema.description && (this.description = this.theme.getDescription(this.translateProperty(this.schema.description)), this.container.appendChild(this.description)), this.error_holder = document.createElement("div"), this.container.appendChild(this.error_holder), this.editor_holder = this.theme.getIndentedPanel(), this.container.appendChild(this.editor_holder), this.row_container = this.theme.getGridContainer(), e ? (this.tabs_holder = this.theme.getTopTabHolder(this.getValidId(this.translateProperty(this.schema.title))), this.tabPanesContainer = this.theme.getTopTabContentHolder(this.tabs_holder), this.editor_holder.appendChild(this.tabs_holder)) : (this.tabs_holder = this.theme.getTabHolder(this.getValidId(this.translateProperty(this.schema.title))), this.tabPanesContainer = this.theme.getTabContentHolder(this.tabs_holder), this.editor_holder.appendChild(this.row_container)), Object.values(this.editors).forEach((function (n) {
                            var r = t.theme.getTabContent(), i = t.theme.getGridColumn(),
                                o = !(!n.schema || "object" !== n.schema.type && "array" !== n.schema.type);
                            if (r.isObjOrArray = o, e) {
                                if (o) {
                                    var a = t.theme.getGridContainer();
                                    a.appendChild(i), r.appendChild(a), t.tabPanesContainer.appendChild(r), t.row_container = a
                                } else void 0 === t.row_container_basic && (t.row_container_basic = t.theme.getGridContainer(), r.appendChild(t.row_container_basic), 0 === t.tabPanesContainer.childElementCount ? t.tabPanesContainer.appendChild(r) : t.tabPanesContainer.insertBefore(r, t.tabPanesContainer.childNodes[1])), t.row_container_basic.appendChild(i);
                                t.addRow(n, t.tabs_holder, r), r.id = t.getValidId(n.schema.title)
                            } else t.row_container.appendChild(i);
                            n.setContainer(i), n.build(), n.postBuild(), n.setOptInCheckbox(n.header)
                        })), this.rows[0] && y(this.rows[0].tab, "click"), this.collapsed = !1, this.collapse_control = this.getButton("", "collapse", "button_collapse"), this.collapse_control.classList.add("json-editor-btntype-toggle"), this.title.insertBefore(this.collapse_control, this.title.childNodes[0]), this.collapse_control.addEventListener("click", (function (e) {
                            e.preventDefault(), e.stopPropagation(), t.collapsed ? (t.editor_holder.style.display = "", t.collapsed = !1, t.setButtonText(t.collapse_control, "", "collapse", "button_collapse")) : (t.editor_holder.style.display = "none", t.collapsed = !0, t.setButtonText(t.collapse_control, "", "expand", "button_expand"))
                        })), this.options.collapsed && y(this.collapse_control, "click"), this.schema.options && void 0 !== this.schema.options.disable_collapse ? this.schema.options.disable_collapse && (this.collapse_control.style.display = "none") : this.jsoneditor.options.disable_collapse && (this.collapse_control.style.display = "none"), this.editjson_control = this.getButton("JSON", "edit", "button_edit_json"), this.editjson_control.classList.add("json-editor-btntype-editjson"), this.editjson_control.addEventListener("click", (function (e) {
                            e.preventDefault(), e.stopPropagation(), t.toggleEditJSON()
                        })), this.controls.appendChild(this.editjson_control), this.controls.insertBefore(this.editjson_holder, this.controls.childNodes[0]), this.schema.options && void 0 !== this.schema.options.disable_edit_json ? this.schema.options.disable_edit_json && (this.editjson_control.style.display = "none") : this.jsoneditor.options.disable_edit_json && (this.editjson_control.style.display = "none"), this.addproperty_button = this.getButton("properties", "edit_properties", "button_object_properties"), this.addproperty_button.classList.add("json-editor-btntype-properties"), this.addproperty_button.addEventListener("click", (function (e) {
                            e.preventDefault(), e.stopPropagation(), t.toggleAddProperty()
                        })), this.controls.appendChild(this.addproperty_button), this.controls.insertBefore(this.addproperty_holder, this.controls.childNodes[1]), this.refreshAddProperties(), this.deactivateNonRequiredProperties()
                    }
                    this.options.table_row ? (this.editor_holder = this.container, this.property_order.forEach((function (e) {
                        t.editor_holder.appendChild(t.editors[e].container)
                    }))) : (this.layoutEditors(), this.layoutEditors())
                }
            }, {
                key: "deactivateNonRequiredProperties", value: function () {
                    var t = this, e = this.jsoneditor.options.show_opt_in, n = void 0 !== this.options.show_opt_in,
                        r = n && !0 === this.options.show_opt_in, i = n && !1 === this.options.show_opt_in;
                    (r || !i && e || !n && e) && Object.entries(this.editors).forEach((function (e) {
                        var n = $r(e, 2), r = n[0], i = n[1];
                        t.isRequiredObject(i) || t.editors[r].deactivate()
                    }))
                }
            }, {
                key: "showEditJSON", value: function () {
                    this.editjson_holder && (this.hideAddProperty(), this.editjson_holder.style.left = "".concat(this.editjson_control.offsetLeft, "px"), this.editjson_holder.style.top = "".concat(this.editjson_control.offsetTop + this.editjson_control.offsetHeight, "px"), this.editjson_textarea.value = JSON.stringify(this.getValue(), null, 2), this.disable(), this.editjson_holder.style.display = "", this.editjson_control.disabled = !1, this.editing_json = !0)
                }
            }, {
                key: "hideEditJSON", value: function () {
                    this.editjson_holder && this.editing_json && (this.editjson_holder.style.display = "none", this.enable(), this.editing_json = !1)
                }
            }, {
                key: "copyJSON", value: function () {
                    if (this.editjson_holder) {
                        var t = document.createElement("textarea");
                        t.value = this.editjson_textarea.value, t.setAttribute("readonly", ""), t.style.position = "absolute", t.style.left = "-9999px", document.body.appendChild(t), t.select(), document.execCommand("copy"), document.body.removeChild(t)
                    }
                }
            }, {
                key: "saveJSON", value: function () {
                    if (this.editjson_holder) try {
                        var t = JSON.parse(this.editjson_textarea.value);
                        this.setValue(t), this.hideEditJSON(), this.onChange(!0)
                    } catch (t) {
                        throw window.alert("invalid JSON"), t
                    }
                }
            }, {
                key: "toggleEditJSON", value: function () {
                    this.editing_json ? this.hideEditJSON() : this.showEditJSON()
                }
            }, {
                key: "insertPropertyControlUsingPropertyOrder", value: function (t, e, n) {
                    var r;
                    this.schema.properties[t] && (r = this.schema.properties[t].propertyOrder), "number" != typeof r && (r = 1e3), e.propertyOrder = r;
                    for (var i = 0; i < n.childNodes.length; i++) {
                        var o = n.childNodes[i];
                        if (e.propertyOrder < o.propertyOrder) {
                            this.addproperty_list.insertBefore(e, o), e = null;
                            break
                        }
                    }
                    e && this.addproperty_list.appendChild(e)
                }
            }, {
                key: "addPropertyCheckbox", value: function (t) {
                    var e, n = this, r = this.theme.getCheckbox();
                    r.style.width = "auto", e = this.schema.properties[t] && this.schema.properties[t].title ? this.schema.properties[t].title : t;
                    var i = this.theme.getCheckboxLabel(e), o = this.theme.getFormControl(i, r);
                    return o.style.paddingBottom = o.style.marginBottom = o.style.paddingTop = o.style.marginTop = 0, o.style.height = "auto", this.insertPropertyControlUsingPropertyOrder(t, o, this.addproperty_list), r.checked = t in this.editors, r.addEventListener("change", (function () {
                        r.checked ? n.addObjectProperty(t) : n.removeObjectProperty(t), n.onChange(!0)
                    })), this.addproperty_checkboxes[t] = r, r
                }
            }, {
                key: "showAddProperty", value: function () {
                    this.addproperty_holder && (this.hideEditJSON(), this.addproperty_holder.style.left = "".concat(this.addproperty_button.offsetLeft, "px"), this.addproperty_holder.style.top = "".concat(this.addproperty_button.offsetTop + this.addproperty_button.offsetHeight, "px"), this.disable(), this.adding_property = !0, this.addproperty_button.disabled = !1, this.addproperty_holder.style.display = "", this.refreshAddProperties())
                }
            }, {
                key: "hideAddProperty", value: function () {
                    this.addproperty_holder && this.adding_property && (this.addproperty_holder.style.display = "none", this.enable(), this.adding_property = !1)
                }
            }, {
                key: "toggleAddProperty", value: function () {
                    this.adding_property ? this.hideAddProperty() : this.showAddProperty()
                }
            }, {
                key: "removeObjectProperty", value: function (t) {
                    this.editors[t] && (this.editors[t].unregister(), delete this.editors[t], this.refreshValue(), this.layoutEditors())
                }
            }, {
                key: "getSchemaOnMaxDepth", value: function (t) {
                    return Object.keys(t).reduce((function (e, n) {
                        switch (n) {
                            case"$ref":
                                return e;
                            case"properties":
                            case"items":
                                return Ur(Ur({}, e), {}, Gr({}, n, {}));
                            case"additionalProperties":
                            case"propertyNames":
                                return Ur(Ur({}, e), {}, Gr({}, n, !0));
                            default:
                                return Ur(Ur({}, e), {}, Gr({}, n, t[n]))
                        }
                    }), {})
                }
            }, {
                key: "addObjectProperty", value: function (t, e) {
                    if (!this.editors[t]) {
                        if (this.cached_editors[t]) {
                            if (this.editors[t] = this.cached_editors[t], e) return;
                            this.editors[t].register()
                        } else {
                            if (!(this.canHaveAdditionalProperties() || this.schema.properties && this.schema.properties[t] || this.schema.patternProperties && Object.keys(this.schema.patternProperties).find((function (e) {
                                return new RegExp(e).test(t)
                            })))) return;
                            var n = this.getPropertySchema(t);
                            "number" != typeof n.propertyOrder && (n.propertyOrder = Object.keys(this.editors).length + 1e3);
                            var r = this.jsoneditor.getEditorClass(n), i = this.jsoneditor.options.max_depth;
                            if (this.editors[t] = this.jsoneditor.createEditor(r, {
                                jsoneditor: this.jsoneditor,
                                schema: i && this.currentDepth >= i ? this.getSchemaOnMaxDepth(n) : n,
                                path: "".concat(this.path, ".").concat(t),
                                parent: this
                            }, this.currentDepth + 1), this.editors[t].preBuild(), !e) {
                                var o = this.theme.getChildEditorHolder();
                                this.editor_holder.appendChild(o), this.editors[t].setContainer(o), this.editors[t].build(), this.editors[t].postBuild(), this.editors[t].setOptInCheckbox(r.header), this.editors[t].activate()
                            }
                            this.cached_editors[t] = this.editors[t]
                        }
                        e || (this.refreshValue(), this.layoutEditors())
                    }
                }
            }, {
                key: "onOutsideModalClick", value: function (t) {
                    var e = t.path || t.composedPath && t.composedPath();
                    this.addproperty_holder && !this.addproperty_holder.contains(e[0]) && this.adding_property && (t.preventDefault(), t.stopPropagation(), this.toggleAddProperty())
                }
            }, {
                key: "onChildEditorChange", value: function (t) {
                    this.refreshValue(), Yr(ti(o.prototype), "onChildEditorChange", this).call(this, t)
                }
            }, {
                key: "canHaveAdditionalProperties", value: function () {
                    return "boolean" == typeof this.schema.additionalProperties ? this.schema.additionalProperties : !this.jsoneditor.options.no_additional_properties
                }
            }, {
                key: "destroy", value: function () {
                    Object.values(this.cached_editors).forEach((function (t) {
                        return t.destroy()
                    })), this.editor_holder && (this.editor_holder.innerHTML = ""), this.title && this.title.parentNode && this.title.parentNode.removeChild(this.title), this.error_holder && this.error_holder.parentNode && this.error_holder.parentNode.removeChild(this.error_holder), this.editors = null, this.cached_editors = null, this.editor_holder && this.editor_holder.parentNode && this.editor_holder.parentNode.removeChild(this.editor_holder), this.editor_holder = null, document.removeEventListener("click", this.onOutsideModalClick), Yr(ti(o.prototype), "destroy", this).call(this)
                }
            }, {
                key: "getValue", value: function () {
                    if (this.dependenciesFulfilled) {
                        var t = Yr(ti(o.prototype), "getValue", this).call(this);
                        return t && (this.jsoneditor.options.remove_empty_properties || this.options.remove_empty_properties) && Object.keys(t).forEach((function (e) {
                            var n;
                            (void 0 === (n = t[e]) || "" === n || n === Object(n) && 0 === Object.keys(n).length && n.constructor === Object) && delete t[e]
                        })), t
                    }
                }
            }, {
                key: "refreshValue", value: function () {
                    var t = this;
                    this.value = {}, this.editors && (Object.keys(this.editors).forEach((function (e) {
                        t.editors[e].isActive() && (t.value[e] = t.editors[e].getValue())
                    })), this.adding_property && this.refreshAddProperties())
                }
            }, {
                key: "refreshAddProperties", value: function () {
                    var t = this;
                    if (this.options.disable_properties || !1 !== this.options.disable_properties && this.jsoneditor.options.disable_properties) this.addproperty_button.style.display = "none"; else {
                        var e, n = 0, r = !1;
                        Object.keys(this.editors).forEach((function (t) {
                            return n++
                        })), e = this.canHaveAdditionalProperties() && !(void 0 !== this.schema.maxProperties && n >= this.schema.maxProperties), this.addproperty_checkboxes && (this.addproperty_list.innerHTML = ""), this.addproperty_checkboxes = {}, Object.keys(this.cached_editors).forEach((function (i) {
                            t.addPropertyCheckbox(i), t.isRequiredObject(t.cached_editors[i]) && i in t.editors && (t.addproperty_checkboxes[i].disabled = !0), void 0 !== t.schema.minProperties && n <= t.schema.minProperties ? (t.addproperty_checkboxes[i].disabled = t.addproperty_checkboxes[i].checked, t.addproperty_checkboxes[i].checked || (r = !0)) : i in t.editors ? r = !0 : e || v(t.schema.properties, i) ? (t.addproperty_checkboxes[i].disabled = !1, r = !0) : t.addproperty_checkboxes[i].disabled = !0
                        })), this.canHaveAdditionalProperties() && (r = !0), Object.keys(this.schema.properties).forEach((function (e) {
                            t.cached_editors[e] || (r = !0, t.addPropertyCheckbox(e))
                        })), r ? this.canHaveAdditionalProperties() ? this.addproperty_add.disabled = !e : (this.addproperty_add.style.display = "none", this.addproperty_input.style.display = "none") : (this.hideAddProperty(), this.addproperty_button.style.display = "none")
                    }
                }
            }, {
                key: "isRequiredObject", value: function (t) {
                    if (t) return "boolean" == typeof t.schema.required ? t.schema.required : Array.isArray(this.schema.required) ? this.schema.required.includes(t.key) : !!this.jsoneditor.options.required_by_default
                }
            }, {
                key: "setValue", value: function (t, e) {
                    var n = this;
                    ("object" !== Wr(t = t || {}) || Array.isArray(t)) && (t = {}), Object.entries(this.cached_editors).forEach((function (r) {
                        var i = $r(r, 2), o = i[0], a = i[1];
                        void 0 !== t[o] ? (n.addObjectProperty(o), a.setValue(t[o], e), a.activate()) : e || n.isRequiredObject(a) ? a.setValue(a.getDefault(), e) : n.jsoneditor.options.show_opt_in || n.options.show_opt_in ? a.deactivate() : n.removeObjectProperty(o)
                    })), Object.entries(t).forEach((function (t) {
                        var r = $r(t, 2), i = r[0], o = r[1];
                        n.cached_editors[i] || (n.addObjectProperty(i), n.editors[i] && n.editors[i].setValue(o, e, !!n.editors[i].template))
                    })), this.refreshValue(), this.layoutEditors(), this.onChange()
                }
            }, {
                key: "showValidationErrors", value: function (t) {
                    var e = this, n = [], r = [];
                    t.forEach((function (t) {
                        t.path === e.path ? n.push(t) : r.push(t)
                    })), this.error_holder && (n.length ? (this.error_holder.innerHTML = "", this.error_holder.style.display = "", n.forEach((function (t) {
                        t.errorcount && t.errorcount > 1 && (t.message += " (".concat(t.errorcount, " errors)")), e.error_holder.appendChild(e.theme.getErrorMessage(t.message))
                    }))) : this.error_holder.style.display = "none"), this.options.table_row && (n.length ? this.theme.addTableRowError(this.container) : this.theme.removeTableRowError(this.container)), Object.values(this.editors).forEach((function (t) {
                        t.showValidationErrors(r)
                    }))
                }
            }]) && Zr(e.prototype, n), r && Zr(e, r), o
        }(q);

        function ni(t) {
            return (ni = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function ri(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function ii(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function oi(t, e, n) {
            return (oi = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = ci(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function ai(t, e) {
            return (ai = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function si(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = ci(t);
                if (e) {
                    var i = ci(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return li(this, n)
            }
        }

        function li(t, e) {
            return !e || "object" !== ni(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function ci(t) {
            return (ci = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        ei.rules = {
            ".je-object__title": "display:inline-block",
            ".je-object__controls": "margin:0%200%200%2010px",
            ".je-object__container": "position:relative",
            ".je-object__property-checkbox": "margin:0;height:auto",
            ".property-selector": "width:295px;max-height:160px;padding:5px%200;overflow-y:auto;overflow-x:hidden;padding-left:5px",
            ".property-selector-input": "width:220px;margin-bottom:0;display:inline-block",
            ".json-editor-btntype-toggle": "margin:0%2010px%200%200",
            ".je-edit-json--textarea": "height:170px%20!important;width:300px%20!important;display:block"
        };
        var ui = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && ai(t, e)
            }(o, t);
            var e, n, r, i = si(o);

            function o() {
                return ri(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "preBuild", value: function () {
                    oi(ci(o.prototype), "preBuild", this).call(this)
                }
            }, {
                key: "build", value: function () {
                    var t = this;
                    this.label = "", this.options.compact || (this.header = this.label = this.theme.getFormInputLabel(this.getTitle(), this.isRequired())), this.schema.description && (this.description = this.theme.getFormInputDescription(this.translateProperty(this.schema.description))), this.options.infoText && (this.infoButton = this.theme.getInfoButton(this.translateProperty(this.options.infoText))), this.options.compact && this.container.classList.add("compact"), this.radioContainer = document.createElement("div"), this.radioGroup = [];
                    var e = function (e) {
                        t.setValue(e.currentTarget.value), t.onChange(!0)
                    };
                    this.isRequired() || (this.enum_display.shift(), this.enum_options.shift(), this.enum_values.shift());
                    for (var n = 0; n < this.enum_values.length; n++) {
                        var r = {id: "".concat(this.formname, "[").concat(n, "]"), value: this.enum_values[n]};
                        this.jsoneditor.options.use_name_attributes && (r.name = this.formname), this.input = this.theme.getFormRadio(r), this.setInputAttributes(["id", "value", "name"]), this.input.addEventListener("change", e, !1), this.radioGroup.push(this.input);
                        var i = this.theme.getFormRadioLabel(this.enum_display[n]);
                        i.htmlFor = this.input.id;
                        var o = this.theme.getFormRadioControl(i, this.input, !("horizontal" !== this.options.layout && !this.options.compact));
                        this.radioContainer.appendChild(o)
                    }
                    if (this.schema.readOnly || this.schema.readonly) {
                        this.disable(!0);
                        for (var a = 0; a < this.radioGroup.length; a++) this.radioGroup[a].disabled = !0;
                        this.radioContainer.classList.add("readonly")
                    }
                    var s = this.theme.getContainer();
                    s.appendChild(this.radioContainer), s.dataset.containerFor = "radio", this.input = s, this.control = this.theme.getFormControl(this.label, s, this.description, this.infoButton), this.container.appendChild(this.control), window.requestAnimationFrame((function () {
                        t.input.parentNode && t.afterInputReady()
                    }))
                }
            }, {
                key: "enable", value: function () {
                    if (!this.always_disabled) {
                        for (var t = 0; t < this.radioGroup.length; t++) this.radioGroup[t].disabled = !1;
                        this.radioContainer.classList.remove("readonly"), oi(ci(o.prototype), "enable", this).call(this)
                    }
                }
            }, {
                key: "disable", value: function (t) {
                    t && (this.always_disabled = !0);
                    for (var e = 0; e < this.radioGroup.length; e++) this.radioGroup[e].disabled = !0;
                    this.radioContainer.classList.add("readonly"), oi(ci(o.prototype), "disable", this).call(this)
                }
            }, {
                key: "destroy", value: function () {
                    this.radioContainer.parentNode && this.radioContainer.parentNode.parentNode && this.radioContainer.parentNode.parentNode.removeChild(this.radioContainer.parentNode), this.label && this.label.parentNode && this.label.parentNode.removeChild(this.label), this.description && this.description.parentNode && this.description.parentNode.removeChild(this.description), oi(ci(o.prototype), "destroy", this).call(this)
                }
            }, {
                key: "getNumColumns", value: function () {
                    return 2
                }
            }, {
                key: "setValue", value: function (t) {
                    for (var e = 0; e < this.radioGroup.length; e++) if (this.radioGroup[e].value === t) {
                        this.radioGroup[e].checked = !0, this.value = t, this.onChange();
                        break
                    }
                }
            }]) && ii(e.prototype, n), r && ii(e, r), o
        }(ze);

        function hi(t) {
            return (hi = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function pi(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function di(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function fi(t, e, n) {
            return (fi = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = bi(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function yi(t, e) {
            return (yi = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function mi(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = bi(t);
                if (e) {
                    var i = bi(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return vi(this, n)
            }
        }

        function vi(t, e) {
            return !e || "object" !== hi(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function bi(t) {
            return (bi = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var gi = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && yi(t, e)
            }(o, t);
            var e, n, r, i = mi(o);

            function o() {
                return pi(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "setValue", value: function (t, e, n) {
                    var r = fi(bi(o.prototype), "setValue", this).call(this, t, e, n);
                    void 0 !== r && r.changed && this.sceditor_instance && this.sceditor_instance.val(r.value)
                }
            }, {
                key: "build", value: function () {
                    this.options.format = "textarea", fi(bi(o.prototype), "build", this).call(this), this.input_type = this.schema.format, this.input.setAttribute("data-schemaformat", this.input_type)
                }
            }, {
                key: "afterInputReady", value: function () {
                    var t = this;
                    if (window.sceditor) {
                        var e = this.expandCallbacks("sceditor", f({}, {
                                format: this.input_type,
                                emoticonsEnabled: !1,
                                width: "100%",
                                height: 300,
                                readOnly: this.schema.readOnly || this.schema.readonly || this.schema.template
                            }, this.defaults.options.sceditor || {}, this.options.sceditor || {}, {element: this.input})),
                            n = window.sceditor.instance(this.input);
                        void 0 === n && window.sceditor.create(this.input, e), this.sceditor_instance = n || window.sceditor.instance(this.input), this.sceditor_instance.blur((function () {
                            t.value = t.sceditor_instance.val(), t.sceditor_instance.updateOriginal(), t.is_dirty = !0, t.onChange(!0)
                        })), this.theme.afterInputReady(this.input)
                    } else fi(bi(o.prototype), "afterInputReady", this).call(this)
                }
            }, {
                key: "getNumColumns", value: function () {
                    return 6
                }
            }, {
                key: "enable", value: function () {
                    !this.always_disabled && this.sceditor_instance && this.sceditor_instance.readOnly(!1), fi(bi(o.prototype), "enable", this).call(this)
                }
            }, {
                key: "disable", value: function (t) {
                    this.sceditor_instance && this.sceditor_instance.readOnly(!0), fi(bi(o.prototype), "disable", this).call(this, t)
                }
            }, {
                key: "destroy", value: function () {
                    this.sceditor_instance && (this.sceditor_instance.destroy(), this.sceditor_instance = null), fi(bi(o.prototype), "destroy", this).call(this)
                }
            }]) && di(e.prototype, n), r && di(e, r), o
        }(K);

        function _i(t) {
            return (_i = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function wi(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function ki(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function xi(t, e, n) {
            return (xi = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Ei(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function ji(t, e) {
            return (ji = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Oi(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Ei(t);
                if (e) {
                    var i = Ei(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Ci(this, n)
            }
        }

        function Ci(t, e) {
            return !e || "object" !== _i(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Ei(t) {
            return (Ei = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Si = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && ji(t, e)
            }(o, t);
            var e, n, r, i = Oi(o);

            function o() {
                return wi(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "setValue", value: function (t, e) {
                    if (this.select2_instance) {
                        e ? this.is_dirty = !1 : "change" === this.jsoneditor.options.show_errors && (this.is_dirty = !0);
                        var n = this.updateValue(t);
                        this.input.value = n, this.select2v4 ? this.select2_instance.val(n).trigger("change") : this.select2_instance.select2("val", n), this.onChange(!0)
                    } else xi(Ei(o.prototype), "setValue", this).call(this, t, e)
                }
            }, {
                key: "afterInputReady", value: function () {
                    var t = this;
                    if (window.jQuery && window.jQuery.fn && window.jQuery.fn.select2 && !this.select2_instance) {
                        var e = this.expandCallbacks("select2", f({}, this.defaults.options.select2 || {}, this.options.select2 || {}));
                        this.newEnumAllowed = e.tags = !!e.tags && "string" === this.schema.type, this.select2_instance = window.jQuery(this.input).select2(e), this.select2v4 = v(this.select2_instance.select2, "amd"), this.selectChangeHandler = function () {
                            var e = t.select2v4 ? t.select2_instance.val() : t.select2_instance.select2("val");
                            t.updateValue(e), t.onChange(!0)
                        }, this.select2_instance.on("change", this.selectChangeHandler), this.select2_instance.on("select2-blur", this.selectChangeHandler)
                    }
                    xi(Ei(o.prototype), "afterInputReady", this).call(this)
                }
            }, {
                key: "updateValue", value: function (t) {
                    var e = this.enum_values[0];
                    return t = this.typecast(t || ""), this.enum_values.includes(t) ? e = t : this.newEnumAllowed && (e = this.addNewOption(t) ? t : e), this.value = e, e
                }
            }, {
                key: "addNewOption", value: function (t) {
                    var e, n = this.typecast(t), r = !1;
                    return this.enum_values.includes(n) || "" === n || (this.enum_options.push("".concat(n)), this.enum_display.push("".concat(n)), this.enum_values.push(n), this.schema.enum.push(n), (e = this.input.querySelector('option[value="'.concat(n, '"]'))) ? e.removeAttribute("data-select2-tag") : this.input.appendChild(new Option(n, n, !1, !1)).trigger("change"), r = !0), r
                }
            }, {
                key: "enable", value: function () {
                    this.always_disabled || this.select2_instance && (this.select2v4 ? this.select2_instance.prop("disabled", !1) : this.select2_instance.select2("enable", !0)), xi(Ei(o.prototype), "enable", this).call(this)
                }
            }, {
                key: "disable", value: function (t) {
                    this.select2_instance && (this.select2v4 ? this.select2_instance.prop("disabled", !0) : this.select2_instance.select2("enable", !1)), xi(Ei(o.prototype), "disable", this).call(this, t)
                }
            }, {
                key: "destroy", value: function () {
                    this.select2_instance && (this.select2_instance.select2("destroy"), this.select2_instance = null), xi(Ei(o.prototype), "destroy", this).call(this)
                }
            }]) && ki(e.prototype, n), r && ki(e, r), o
        }(ze);

        function Pi(t) {
            return (Pi = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Ri(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Li(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Ti(t, e, n) {
            return (Ti = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Ni(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function Ai(t, e) {
            return (Ai = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Ii(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Ni(t);
                if (e) {
                    var i = Ni(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Bi(this, n)
            }
        }

        function Bi(t, e) {
            return !e || "object" !== Pi(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Ni(t) {
            return (Ni = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Fi = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Ai(t, e)
            }(o, t);
            var e, n, r, i = Ii(o);

            function o() {
                return Ri(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "setValue", value: function (t, e) {
                    if (this.selectize_instance) {
                        e ? this.is_dirty = !1 : "change" === this.jsoneditor.options.show_errors && (this.is_dirty = !0);
                        var n = this.updateValue(t);
                        this.input.value = n, this.selectize_instance.clear(!0), this.selectize_instance.setValue(n), this.onChange(!0)
                    } else Ti(Ni(o.prototype), "setValue", this).call(this, t, e)
                }
            }, {
                key: "afterInputReady", value: function () {
                    var t = this;
                    if (window.jQuery && window.jQuery.fn && window.jQuery.fn.selectize && !this.selectize_instance) {
                        var e = this.expandCallbacks("selectize", f({}, this.defaults.options.selectize || {}, this.options.selectize || {}));
                        this.newEnumAllowed = e.create = !!e.create && "string" === this.schema.type, this.selectize_instance = window.jQuery(this.input).selectize(e)[0].selectize, this.control.removeEventListener("change", this.multiselectChangeHandler), this.multiselectChangeHandler = function (e) {
                            t.updateValue(e), t.onChange(!0)
                        }, this.selectize_instance.on("change", this.multiselectChangeHandler)
                    }
                    Ti(Ni(o.prototype), "afterInputReady", this).call(this)
                }
            }, {
                key: "updateValue", value: function (t) {
                    var e = this.enum_values[0];
                    return t = this.typecast(t || ""), this.enum_values.includes(t) ? e = t : this.newEnumAllowed && (e = this.addNewOption(t) ? t : e), this.value = e, e
                }
            }, {
                key: "addNewOption", value: function (t) {
                    var e = this.typecast(t), n = !1;
                    return this.enum_values.includes(e) || "" === e || (this.enum_options.push("".concat(e)), this.enum_display.push("".concat(e)), this.enum_values.push(e), this.schema.enum.push(e), this.selectize_instance.addItem(e), this.selectize_instance.refreshOptions(!1), n = !0), n
                }
            }, {
                key: "onWatchedFieldChange", value: function () {
                    var t = this;
                    Ti(Ni(o.prototype), "onWatchedFieldChange", this).call(this), this.selectize_instance && (this.selectize_instance.clear(!0), this.selectize_instance.clearOptions(!0), this.enum_options.forEach((function (e, n) {
                        t.selectize_instance.addOption({value: e, text: t.enum_display[n]})
                    })), this.selectize_instance.addItem("".concat(this.value), !0))
                }
            }, {
                key: "enable", value: function () {
                    !this.always_disabled && this.selectize_instance && this.selectize_instance.unlock(), Ti(Ni(o.prototype), "enable", this).call(this)
                }
            }, {
                key: "disable", value: function (t) {
                    this.selectize_instance && this.selectize_instance.lock(), Ti(Ni(o.prototype), "disable", this).call(this, t)
                }
            }, {
                key: "destroy", value: function () {
                    this.selectize_instance && (this.selectize_instance.destroy(), this.selectize_instance = null), Ti(Ni(o.prototype), "destroy", this).call(this)
                }
            }]) && Li(e.prototype, n), r && Li(e, r), o
        }(ze);

        function Vi(t) {
            return (Vi = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Di(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Hi(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Mi(t, e) {
            return (Mi = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function zi(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Ui(t);
                if (e) {
                    var i = Ui(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return qi(this, n)
            }
        }

        function qi(t, e) {
            return !e || "object" !== Vi(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Ui(t) {
            return (Ui = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Gi = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Mi(t, e)
            }(o, t);
            var e, n, r, i = zi(o);

            function o() {
                return Di(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "build", value: function () {
                    var t = this;
                    this.options.compact || (this.header = this.label = this.theme.getFormInputLabel(this.getTitle(), this.isRequired())), this.schema.description && (this.description = this.theme.getFormInputDescription(this.translateProperty(this.schema.description)));
                    var e = this.formname.replace(/\W/g, "");
                    if ("function" == typeof SignaturePad) {
                        this.input = this.theme.getFormInputField("hidden"), this.container.appendChild(this.input);
                        var n = document.createElement("div");
                        n.classList.add("signature-container");
                        var r = document.createElement("canvas");
                        this.jsoneditor.options.use_name_attributes && r.setAttribute("name", e), r.classList.add("signature"), n.appendChild(r), this.signaturePad = new window.SignaturePad(r, {
                            onEnd: function () {
                                this.signaturePad.isEmpty() ? this.input.value = "" : this.input.value = this.signaturePad.toDataURL(), this.is_dirty = !0, this.refreshValue(), this.watch_listener(), this.jsoneditor.notifyWatchers(this.path), this.parent ? this.parent.onChildEditorChange(this) : this.jsoneditor.onChange()
                            }
                        });
                        var i = document.createElement("div"), o = document.createElement("button");
                        o.classList.add("tiny", "button"), o.innerHTML = "Clear signature", i.appendChild(o), n.appendChild(i), this.options.compact && this.container.setAttribute("class", "".concat(this.container.getAttribute("class"), " compact")), (this.schema.readOnly || this.schema.readonly) && (this.disable(!0), Array.from(this.inputs).forEach((function (t) {
                            r.setAttribute("readOnly", "readOnly"), t.disabled = !0
                        }))), o.addEventListener("click", (function (e) {
                            e.preventDefault(), e.stopPropagation(), t.signaturePad.clear(), t.signaturePad.strokeEnd()
                        })), this.control = this.theme.getFormControl(this.label, n, this.description), this.container.appendChild(this.control), this.refreshValue(), r.width = n.offsetWidth, this.options && this.options.canvas_height ? r.height = this.options.canvas_height : r.height = "300"
                    } else {
                        var a = document.createElement("p");
                        a.innerHTML = "Signature pad is not available, please include SignaturePad from https://github.com/szimek/signature_pad", this.container.appendChild(a)
                    }
                }
            }, {
                key: "setValue", value: function (t) {
                    if ("function" == typeof SignaturePad) {
                        var e = this.sanitize(t);
                        if (this.value === e) return;
                        return this.value = e, this.input.value = this.value, this.signaturePad.clear(), t && "" !== t && this.signaturePad.fromDataURL(t), this.watch_listener(), this.jsoneditor.notifyWatchers(this.path), !1
                    }
                }
            }, {
                key: "destroy", value: function () {
                    this.signaturePad.off(), delete this.signaturePad
                }
            }]) && Hi(e.prototype, n), r && Hi(e, r), o
        }(K);
        n(177);

        function $i(t) {
            return ($i = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Ji(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Wi(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Zi(t, e, n) {
            return (Zi = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Xi(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function Yi(t, e) {
            return (Yi = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Qi(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Xi(t);
                if (e) {
                    var i = Xi(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Ki(this, n)
            }
        }

        function Ki(t, e) {
            return !e || "object" !== $i(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Xi(t) {
            return (Xi = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var to = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Yi(t, e)
            }(o, t);
            var e, n, r, i = Qi(o);

            function o() {
                return Ji(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "setValue", value: function (t, e, n) {
                    var r = Zi(Xi(o.prototype), "setValue", this).call(this, t, e, n);
                    void 0 !== r && r.changed && this.simplemde_instance && this.simplemde_instance.value(r.value)
                }
            }, {
                key: "build", value: function () {
                    this.options.format = "textarea", Zi(Xi(o.prototype), "build", this).call(this), this.input_type = this.schema.format, this.input.setAttribute("data-schemaformat", this.input_type)
                }
            }, {
                key: "afterInputReady", value: function () {
                    var t, e = this;
                    window.SimpleMDE ? (t = this.expandCallbacks("simplemde", f({}, {height: 300}, this.defaults.options.simplemde || {}, this.options.simplemde || {}, {element: this.input})), this.simplemde_instance = new window.SimpleMDE(t), (this.schema.readOnly || this.schema.readonly || this.schema.template) && (this.simplemde_instance.codemirror.options.readOnly = !0), this.simplemde_instance.codemirror.on("change", (function () {
                        e.value = e.simplemde_instance.value(), e.is_dirty = !0, e.onChange(!0)
                    })), t.autorefresh && this.startListening(this.simplemde_instance.codemirror, this.simplemde_instance.codemirror.state.autoRefresh = {delay: 250}), this.theme.afterInputReady(this.input)) : Zi(Xi(o.prototype), "afterInputReady", this).call(this)
                }
            }, {
                key: "getNumColumns", value: function () {
                    return 6
                }
            }, {
                key: "enable", value: function () {
                    !this.always_disabled && this.simplemde_instance && (this.simplemde_instance.codemirror.options.readOnly = !1), Zi(Xi(o.prototype), "enable", this).call(this)
                }
            }, {
                key: "disable", value: function (t) {
                    this.simplemde_instance && (this.simplemde_instance.codemirror.options.readOnly = !0), Zi(Xi(o.prototype), "disable", this).call(this, t)
                }
            }, {
                key: "destroy", value: function () {
                    this.simplemde_instance && (this.simplemde_instance.toTextArea(), this.simplemde_instance = null), Zi(Xi(o.prototype), "destroy", this).call(this)
                }
            }, {
                key: "startListening", value: function (t, e) {
                    function n() {
                        t.display.wrapper.offsetHeight ? (this.stopListening(t, e), t.display.lastWrapHeight !== t.display.wrapper.clientHeight && t.refresh()) : e.timeout = window.setTimeout(n, e.delay)
                    }

                    e.timeout = window.setTimeout(n, e.delay), e.hurry = function () {
                        window.clearTimeout(e.timeout), e.timeout = window.setTimeout(n, 50)
                    }, t.on(window, "mouseup", e.hurry), t.on(window, "keyup", e.hurry)
                }
            }, {
                key: "stopListening", value: function (t, e) {
                    window.clearTimeout(e.timeout), t.off(window, "mouseup", e.hurry), t.off(window, "keyup", e.hurry)
                }
            }]) && Wi(e.prototype, n), r && Wi(e, r), o
        }(K);

        function eo(t) {
            return (eo = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function no(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function ro(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function io(t, e, n) {
            return (io = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = lo(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function oo(t, e) {
            return (oo = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function ao(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = lo(t);
                if (e) {
                    var i = lo(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return so(this, n)
            }
        }

        function so(t, e) {
            return !e || "object" !== eo(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function lo(t) {
            return (lo = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var co = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && oo(t, e)
            }(o, t);
            var e, n, r, i = ao(o);

            function o() {
                return no(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "build", value: function () {
                    var t = this;
                    if (this.options.compact || (this.header = this.label = this.theme.getFormInputLabel(this.getTitle(), this.isRequired())), this.schema.description && (this.description = this.theme.getFormInputDescription(this.translateProperty(this.schema.description))), this.options.infoText && (this.infoButton = this.theme.getInfoButton(this.translateProperty(this.options.infoText))), this.options.compact && this.container.classList.add("compact"), this.ratingContainer = document.createElement("div"), this.ratingContainer.classList.add("starrating"), void 0 === this.schema.enum) {
                        var e = this.schema.maximum ? this.schema.maximum : 5;
                        this.schema.exclusiveMaximum && e--, this.enum_values = [];
                        for (var n = 0; n < e; n++) this.enum_values.push(n + 1)
                    } else this.enum_values = this.schema.enum;
                    this.radioGroup = [];
                    for (var r = function (e) {
                        e.preventDefault(), e.stopPropagation(), t.setValue(e.currentTarget.value), t.onChange(!0)
                    }, i = this.enum_values.length - 1; i > -1; i--) {
                        var o = this.formname + (i + 1), a = this.theme.getFormInputField("radio");
                        a.name = "".concat(this.formname, "[starrating]"), a.value = this.enum_values[i], a.id = o, a.addEventListener("change", r, !1), this.radioGroup.push(a);
                        var s = document.createElement("label");
                        s.htmlFor = o, s.title = this.enum_values[i], this.options.displayValue && s.classList.add("starrating-display-enabled"), this.ratingContainer.appendChild(a), this.ratingContainer.appendChild(s)
                    }
                    if (this.options.displayValue && (this.displayRating = document.createElement("div"), this.displayRating.classList.add("starrating-display"), this.displayRating.innerText = this.enum_values[0], this.ratingContainer.appendChild(this.displayRating)), this.schema.readOnly || this.schema.readonly) {
                        this.disable(!0);
                        for (var l = 0; l < this.radioGroup.length; l++) this.radioGroup[l].disabled = !0;
                        this.ratingContainer.classList.add("readonly")
                    }
                    var c = this.theme.getContainer();
                    c.appendChild(this.ratingContainer), this.input = c, this.control = this.theme.getFormControl(this.label, c, this.description, this.infoButton), this.container.appendChild(this.control), this.refreshValue()
                }
            }, {
                key: "enable", value: function () {
                    if (!this.always_disabled) {
                        for (var t = 0; t < this.radioGroup.length; t++) this.radioGroup[t].disabled = !1;
                        this.ratingContainer.classList.remove("readonly"), this.disabled = !1
                    }
                }
            }, {
                key: "disable", value: function (t) {
                    t && (this.always_disabled = !0);
                    for (var e = 0; e < this.radioGroup.length; e++) this.radioGroup[e].disabled = !0;
                    this.ratingContainer.classList.add("readonly"), this.disabled = !0
                }
            }, {
                key: "destroy", value: function () {
                    this.ratingContainer.parentNode && this.ratingContainer.parentNode.parentNode && this.ratingContainer.parentNode.parentNode.removeChild(this.ratingContainer.parentNode), this.label && this.label.parentNode && this.label.parentNode.removeChild(this.label), this.description && this.description.parentNode && this.description.parentNode.removeChild(this.description), io(lo(o.prototype), "destroy", this).call(this)
                }
            }, {
                key: "getNumColumns", value: function () {
                    return 2
                }
            }, {
                key: "getValue", value: function () {
                    if (this.dependenciesFulfilled) return "integer" === this.schema.type ? "" === this.value ? void 0 : 1 * this.value : this.value
                }
            }, {
                key: "setValue", value: function (t) {
                    for (var e = 0; e < this.radioGroup.length; e++) if (this.radioGroup[e].value === "".concat(t)) {
                        this.radioGroup[e].checked = !0, this.value = t, this.options.displayValue && (this.displayRating.innerHTML = this.value), this.onChange(!0);
                        break
                    }
                }
            }]) && ro(e.prototype, n), r && ro(e, r), o
        }(K);

        function uo(t) {
            return (uo = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function ho(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function po(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function fo(t, e, n) {
            return (fo = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = bo(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function yo(t, e) {
            return (yo = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function mo(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = bo(t);
                if (e) {
                    var i = bo(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return vo(this, n)
            }
        }

        function vo(t, e) {
            return !e || "object" !== uo(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function bo(t) {
            return (bo = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        co.rules = {
            ".starrating": "direction:rtl;display:inline-block;white-space:nowrap",
            ".starrating > input": "display:none",
            ".starrating > label:before": "content:'%5C2606';margin:1px;font-size:18px;font-style:normal;font-weight:400;line-height:1;font-family:'Arial';display:inline-block",
            ".starrating > label": "color:%23888;cursor:pointer;margin:8px%200%202px%200",
            ".starrating > label.starrating-display-enabled": "margin:1px%200%200%200",
            ".starrating > input:checked ~ label": "color:%23ffca08",
            ".starrating:not(.readonly) > input:hover ~ label": "color:%23ffca08",
            ".starrating > input:checked ~ label:before": "content:'%5C2605';text-shadow:0%200%201px%20rgba(0%2C20%2C20%2C1)",
            ".starrating:not(.readonly) > input:hover ~ label:before": "content:'%5C2605';text-shadow:0%200%201px%20rgba(0%2C20%2C20%2C1)",
            ".starrating .starrating-display": "position:relative;direction:rtl;text-align:center;font-size:10px;line-height:0px"
        };
        var go = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && yo(t, e)
            }(o, t);
            var e, n, r, i = mo(o);

            function o() {
                return ho(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "build", value: function () {
                    fo(bo(o.prototype), "build", this).call(this), this.input.setAttribute("type", "number"), this.input.getAttribute("step") || this.input.setAttribute("step", "1");
                    var t = this.theme.getStepperButtons(this.input);
                    this.control.appendChild(t), this.stepperDown = this.control.querySelector(".stepper-down"), this.stepperUp = this.control.querySelector(".stepper-up")
                }
            }, {
                key: "enable", value: function () {
                    fo(bo(o.prototype), "enable", this).call(this), this.stepperDown.removeAttribute("disabled"), this.stepperUp.removeAttribute("disabled")
                }
            }, {
                key: "disable", value: function () {
                    fo(bo(o.prototype), "disable", this).call(this), this.stepperDown.setAttribute("disabled", !0), this.stepperUp.setAttribute("disabled", !0)
                }
            }]) && po(e.prototype, n), r && po(e, r), o
        }(sr);

        function _o(t) {
            return (_o = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function wo(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function ko(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function xo(t, e, n) {
            return (xo = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Eo(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function jo(t, e) {
            return (jo = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Oo(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Eo(t);
                if (e) {
                    var i = Eo(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Co(this, n)
            }
        }

        function Co(t, e) {
            return !e || "object" !== _o(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Eo(t) {
            return (Eo = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var So = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && jo(t, e)
            }(o, t);
            var e, n, r, i = Oo(o);

            function o() {
                return wo(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "register", value: function () {
                    if (xo(Eo(o.prototype), "register", this).call(this), this.rows) for (var t = 0; t < this.rows.length; t++) this.rows[t].register()
                }
            }, {
                key: "unregister", value: function () {
                    if (xo(Eo(o.prototype), "unregister", this).call(this), this.rows) for (var t = 0; t < this.rows.length; t++) this.rows[t].unregister()
                }
            }, {
                key: "getNumColumns", value: function () {
                    return Math.max(Math.min(12, this.width), 3)
                }
            }, {
                key: "preBuild", value: function () {
                    var t = this.jsoneditor.expandRefs(this.schema.items || {});
                    this.item_title = t.title || "row", this.item_default = t.default || null, this.item_has_child_editors = t.properties || t.items, this.width = 12, this.array_controls_top = this.options.array_controls_top || this.jsoneditor.options.array_controls_top, xo(Eo(o.prototype), "preBuild", this).call(this)
                }
            }, {
                key: "build", value: function () {
                    this.table = this.theme.getTable(), this.container.appendChild(this.table), this.thead = this.theme.getTableHead(), this.table.appendChild(this.thead), this.header_row = this.theme.getTableRow(), this.thead.appendChild(this.header_row), this.row_holder = this.theme.getTableBody(), this.table.appendChild(this.row_holder);
                    var t = this.getElementEditor(0, !0);
                    if (this.item_default = t.getDefault(), this.width = t.getNumColumns() + 2, this.options.compact ? (this.panel = document.createElement("div"), this.container.appendChild(this.panel)) : (this.header = document.createElement("label"), this.header.textContent = this.getTitle(), this.title = this.theme.getHeader(this.header, this.getPathDepth()), this.container.appendChild(this.title), this.options.infoText && (this.infoButton = this.theme.getInfoButton(this.translateProperty(this.options.infoText)), this.container.appendChild(this.infoButton)), this.title_controls = this.theme.getHeaderButtonHolder(), this.title.appendChild(this.title_controls), this.schema.description && (this.description = this.theme.getDescription(this.translateProperty(this.schema.description)), this.container.appendChild(this.description)), this.panel = this.theme.getIndentedPanel(), this.container.appendChild(this.panel), this.error_holder = document.createElement("div"), this.panel.appendChild(this.error_holder)), this.panel.appendChild(this.table), this.controls = this.theme.getButtonHolder(), this.array_controls_top ? this.title.appendChild(this.controls) : this.panel.appendChild(this.controls), this.item_has_child_editors) for (var e = t.getChildEditors(), n = t.property_order || Object.keys(e), r = 0; r < n.length; r++) {
                        var i = this.theme.getTableHeaderCell(e[n[r]].getTitle());
                        e[n[r]].options.hidden && (i.style.display = "none"), this.header_row.appendChild(i)
                    } else this.header_row.appendChild(this.theme.getTableHeaderCell(this.item_title));
                    t.destroy(), this.row_holder.innerHTML = "", this.controls_header_cell = this.theme.getTableHeaderCell(" "), this.controls_header_cell.setAttribute("aria-hidden", "true"), this.header_row.appendChild(this.controls_header_cell), this.addControls()
                }
            }, {
                key: "onChildEditorChange", value: function (t) {
                    this.refreshValue(), xo(Eo(o.prototype), "onChildEditorChange", this).call(this)
                }
            }, {
                key: "getItemDefault", value: function () {
                    return f({}, {default: this.item_default}).default
                }
            }, {
                key: "getItemTitle", value: function () {
                    return this.item_title
                }
            }, {
                key: "getElementEditor", value: function (t, e) {
                    var n = f({}, this.schema.items), r = this.jsoneditor.getEditorClass(n, this.jsoneditor),
                        i = this.row_holder.appendChild(this.theme.getTableRow()), o = i;
                    this.item_has_child_editors || (o = this.theme.getTableCell(), i.appendChild(o));
                    var a = this.jsoneditor.createEditor(r, {
                        jsoneditor: this.jsoneditor,
                        schema: n,
                        container: o,
                        path: "".concat(this.path, ".").concat(t),
                        parent: this,
                        compact: !0,
                        table_row: !0
                    });
                    return a.preBuild(), e || (a.build(), a.postBuild(), a.controls_cell = i.appendChild(this.theme.getTableCell()), a.row = i, a.table_controls = this.theme.getButtonHolder(), a.controls_cell.appendChild(a.table_controls), a.table_controls.style.margin = 0, a.table_controls.style.padding = 0), a
                }
            }, {
                key: "destroy", value: function () {
                    this.innerHTML = "", this.checkParent(this.title) && this.title.parentNode.removeChild(this.title), this.checkParent(this.description) && this.description.parentNode.removeChild(this.description), this.checkParent(this.row_holder) && this.row_holder.parentNode.removeChild(this.row_holder), this.checkParent(this.table) && this.table.parentNode.removeChild(this.table), this.checkParent(this.panel) && this.panel.parentNode.removeChild(this.panel), this.rows = this.title = this.description = this.row_holder = this.table = this.panel = null, xo(Eo(o.prototype), "destroy", this).call(this)
                }
            }, {
                key: "ensureArraySize", value: function (t) {
                    if (Array.isArray(t) || (t = [t]), this.schema.minItems) for (; t.length < this.schema.minItems;) t.push(this.getItemDefault());
                    return this.schema.maxItems && t.length > this.schema.maxItems && (t = t.slice(0, this.schema.maxItems)), t
                }
            }, {
                key: "setValue", value: function () {
                    var t = this, e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : [],
                        n = arguments.length > 1 ? arguments[1] : void 0;
                    e = this.ensureArraySize(e);
                    var r = JSON.stringify(e);
                    if (r !== this.serialized) {
                        var i = !1;
                        e.forEach((function (e, n) {
                            t.rows[n] ? t.rows[n].setValue(e) : (t.addRow(e), i = !0)
                        }));
                        for (var o = e.length; o < this.rows.length; o++) {
                            var a = this.rows[o].container;
                            this.item_has_child_editors || this.rows[o].row.parentNode.removeChild(this.rows[o].row), this.rows[o].destroy(), a.parentNode && a.parentNode.removeChild(a), this.rows[o] = null, i = !0
                        }
                        this.rows = this.rows.slice(0, e.length), this.refreshValue(), (i || n) && this.refreshRowButtons(), this.onChange()
                    }
                }
            }, {
                key: "refreshRowButtons", value: function () {
                    var t = this, e = this.schema.minItems && this.schema.minItems >= this.rows.length,
                        n = this.schema.maxItems && this.schema.maxItems <= this.rows.length, r = [];
                    this.rows.forEach((function (i, o) {
                        if (i.delete_button) {
                            var a = !e;
                            t.setVisibility(i.delete_button, a), r.push(a)
                        }
                        if (i.copy_button) {
                            var s = !n;
                            t.setVisibility(i.copy_button, s), r.push(s)
                        }
                        if (i.moveup_button) {
                            var l = 0 !== o;
                            t.setVisibility(i.moveup_button, l), r.push(l)
                        }
                        if (i.movedown_button) {
                            var c = o !== t.rows.length - 1;
                            t.setVisibility(i.movedown_button, c), r.push(c)
                        }
                    }));
                    var i = r.some((function (t) {
                        return t
                    }));
                    this.rows.forEach((function (e) {
                        return t.setVisibility(e.controls_cell, i)
                    })), this.setVisibility(this.controls_header_cell, i), this.setVisibility(this.table, this.value.length);
                    var o = !(n || this.hide_add_button);
                    this.setVisibility(this.add_row_button, o);
                    var a = !(!this.value.length || e || this.hide_delete_last_row_buttons);
                    this.setVisibility(this.delete_last_row_button, a);
                    var s = !(this.value.length <= 1 || e || this.hide_delete_all_rows_buttons);
                    this.setVisibility(this.remove_all_rows_button, s);
                    var l = o || a || s;
                    this.setVisibility(this.controls, l)
                }
            }, {
                key: "refreshValue", value: function () {
                    var t = this;
                    this.value = [], this.rows.forEach((function (e, n) {
                        t.value[n] = e.getValue()
                    })), this.serialized = JSON.stringify(this.value)
                }
            }, {
                key: "addRow", value: function (t) {
                    var e = this.rows.length;
                    this.rows[e] = this.getElementEditor(e);
                    var n = this.rows[e].table_controls;
                    this.hide_delete_buttons || (this.rows[e].delete_button = this._createDeleteButton(e, n)), this.show_copy_button && (this.rows[e].copy_button = this._createCopyButton(e, n)), this.hide_move_buttons || (this.rows[e].moveup_button = this._createMoveUpButton(e, n)), this.hide_move_buttons || (this.rows[e].movedown_button = this._createMoveDownButton(e, n)), void 0 !== t && this.rows[e].setValue(t)
                }
            }, {
                key: "_createDeleteButton", value: function (t, e) {
                    var n = this, r = this.getButton("", "delete", "button_delete_row_title_short");
                    return r.classList.add("delete", "json-editor-btntype-delete"), r.setAttribute("data-i", t), r.addEventListener("click", (function (t) {
                        if (t.preventDefault(), t.stopPropagation(), !n.askConfirmation()) return !1;
                        var e = 1 * t.currentTarget.getAttribute("data-i"), r = n.getValue();
                        r.splice(e, 1), n.setValue(r), n.onChange(!0), n.jsoneditor.trigger("deleteRow", n.rows[e])
                    })), e.appendChild(r), r
                }
            }, {
                key: "_createCopyButton", value: function (t, e) {
                    var n = this, r = this.getButton("", "copy", "button_copy_row_title_short"), i = this.schema;
                    return r.classList.add("copy", "json-editor-btntype-copy"), r.setAttribute("data-i", t), r.addEventListener("click", (function (t) {
                        t.preventDefault(), t.stopPropagation();
                        var e = 1 * t.currentTarget.getAttribute("data-i"), r = n.getValue(), o = r[e];
                        "string" === i.items.type && "uuid" === i.items.format ? o = _() : "object" === i.items.type && i.items.properties && r.forEach((function (t, n) {
                            if (e === n) for (var a = 0, s = Object.keys(t); a < s.length; a++) {
                                var l = s[a];
                                i.items.properties && i.items.properties[l] && "uuid" === i.items.properties[l].format && ((o = Object.assign({}, r[e]))[l] = _())
                            }
                        })), r.splice(e + 1, 0, o), n.setValue(r), n.onChange(!0), n.jsoneditor.trigger("copyRow", n.rows[e + 1])
                    })), e.appendChild(r), r
                }
            }, {
                key: "_createMoveUpButton", value: function (t, e) {
                    var n = this, r = this.getButton("", "moveup", "button_move_up_title");
                    return r.classList.add("moveup", "json-editor-btntype-move"), r.setAttribute("data-i", t), r.addEventListener("click", (function (t) {
                        t.preventDefault(), t.stopPropagation();
                        var e = 1 * t.currentTarget.getAttribute("data-i"), r = n.getValue();
                        r.splice(e - 1, 0, r.splice(e, 1)[0]), n.setValue(r), n.onChange(!0), n.jsoneditor.trigger("moveRow", n.rows[e - 1])
                    })), e.appendChild(r), r
                }
            }, {
                key: "_createMoveDownButton", value: function (t, e) {
                    var n = this, r = this.getButton("", "movedown", "button_move_down_title");
                    return r.classList.add("movedown", "json-editor-btntype-move"), r.setAttribute("data-i", t), r.addEventListener("click", (function (t) {
                        t.preventDefault(), t.stopPropagation();
                        var e = 1 * t.currentTarget.getAttribute("data-i"), r = n.getValue();
                        r.splice(e + 1, 0, r.splice(e, 1)[0]), n.setValue(r), n.onChange(!0), n.jsoneditor.trigger("moveRow", n.rows[e + 1])
                    })), e.appendChild(r), r
                }
            }, {
                key: "addControls", value: function () {
                    var t = this;
                    this.collapsed = !1, this.toggle_button = this._createToggleButton(), this.title_controls && (this.title.insertBefore(this.toggle_button, this.title.childNodes[0]), this.toggle_button.addEventListener("click", (function (e) {
                        e.preventDefault(), e.stopPropagation(), t.setVisibility(t.panel, t.collapsed), t.collapsed ? (t.collapsed = !1, t.setButtonText(e.currentTarget, "", "collapse", "button_collapse")) : (t.collapsed = !0, t.setButtonText(e.currentTarget, "", "expand", "button_expand"))
                    })), this.options.collapsed && y(this.toggle_button, "click"), this.schema.options && void 0 !== this.schema.options.disable_collapse ? this.schema.options.disable_collapse && (this.toggle_button.style.display = "none") : this.jsoneditor.options.disable_collapse && (this.toggle_button.style.display = "none")), this.add_row_button = this._createAddRowButton(), this.delete_last_row_button = this._createDeleteLastRowButton(), this.remove_all_rows_button = this._createRemoveAllRowsButton()
                }
            }, {
                key: "_createToggleButton", value: function () {
                    var t = this.getButton("", "collapse", "button_collapse");
                    return t.classList.add("json-editor-btntype-toggle"), t
                }
            }, {
                key: "_createAddRowButton", value: function () {
                    var t = this,
                        e = this.getButton(this.getItemTitle(), "add", "button_add_row_title", [this.getItemTitle()]);
                    return e.classList.add("json-editor-btntype-add"), e.addEventListener("click", (function (e) {
                        e.preventDefault(), e.stopPropagation();
                        var n = t.addRow();
                        t.refreshValue(), t.refreshRowButtons(), t.onChange(!0), t.jsoneditor.trigger("addRow", n)
                    })), this.controls.appendChild(e), e
                }
            }, {
                key: "_createDeleteLastRowButton", value: function () {
                    var t = this,
                        e = this.getButton("button_delete_last", "subtract", "button_delete_last_title", [this.getItemTitle()]);
                    return e.classList.add("json-editor-btntype-deletelast"), e.addEventListener("click", (function (e) {
                        if (e.preventDefault(), e.stopPropagation(), !t.askConfirmation()) return !1;
                        var n = t.getValue(), r = n.pop();
                        t.setValue(n), t.onChange(!0), t.jsoneditor.trigger("deleteRow", r)
                    })), this.controls.appendChild(e), e
                }
            }, {
                key: "_createRemoveAllRowsButton", value: function () {
                    var t = this, e = this.getButton("button_delete_all", "delete", "button_delete_all_title");
                    return e.classList.add("json-editor-btntype-deleteall"), e.addEventListener("click", (function (e) {
                        if (e.preventDefault(), e.stopPropagation(), !t.askConfirmation()) return !1;
                        t.setValue([]), t.onChange(!0), t.jsoneditor.trigger("deleteAllRows")
                    })), this.controls.appendChild(e), e
                }
            }]) && ko(e.prototype, n), r && ko(e, r), o
        }(mt);
        n(150);

        function Po(t) {
            return (Po = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Ro(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Lo(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function To(t, e, n) {
            return (To = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = No(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function Ao(t, e) {
            return (Ao = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Io(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = No(t);
                if (e) {
                    var i = No(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Bo(this, n)
            }
        }

        function Bo(t, e) {
            return !e || "object" !== Po(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function No(t) {
            return (No = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        function Fo(t) {
            return (Fo = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Vo(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Do(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Ho(t, e, n) {
            return (Ho = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Uo(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function Mo(t, e) {
            return (Mo = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function zo(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Uo(t);
                if (e) {
                    var i = Uo(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return qo(this, n)
            }
        }

        function qo(t, e) {
            return !e || "object" !== Fo(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Uo(t) {
            return (Uo = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        function Go(t) {
            return (Go = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function $o(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Jo(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Wo(t, e, n) {
            return (Wo = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Ko(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function Zo(t, e) {
            return (Zo = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Yo(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Ko(t);
                if (e) {
                    var i = Ko(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Qo(this, n)
            }
        }

        function Qo(t, e) {
            return !e || "object" !== Go(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Ko(t) {
            return (Ko = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Xo = {
            ace: st,
            array: mt,
            arrayChoices: It,
            arraySelect2: qt,
            arraySelectize: Kt,
            autocomplete: se,
            base64: me,
            button: je,
            checkbox: Ae,
            choices: Qe,
            datetime: sn,
            describedBy: mn,
            enum: En,
            hidden: Nn,
            info: Un,
            integer: sr,
            ip: mr,
            jodit: Or,
            multiple: Ir,
            multiselect: Ot,
            null: zr,
            number: Xn,
            object: ei,
            radio: ui,
            sceditor: gi,
            select: ze,
            select2: Si,
            selectize: Fi,
            signature: Gi,
            simplemde: to,
            starrating: co,
            stepper: go,
            string: K,
            table: So,
            upload: function (t) {
                !function (t, e) {
                    if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                    t.prototype = Object.create(e && e.prototype, {
                        constructor: {
                            value: t,
                            writable: !0,
                            configurable: !0
                        }
                    }), e && Ao(t, e)
                }(o, t);
                var e, n, r, i = Io(o);

                function o() {
                    return Ro(this, o), i.apply(this, arguments)
                }

                return e = o, (n = [{
                    key: "getNumColumns", value: function () {
                        return 4
                    }
                }, {
                    key: "build", value: function () {
                        var t = this;
                        if (this.options.compact || (this.header = this.label = this.theme.getFormInputLabel(this.getTitle(), this.isRequired())), this.schema.description && (this.description = this.theme.getFormInputDescription(this.translateProperty(this.schema.description))), this.options.infoText && (this.infoButton = this.theme.getInfoButton(this.translateProperty(this.options.infoText))), this.options = this.expandCallbacks("upload", f({}, {
                            title: "Browse",
                            icon: "",
                            auto_upload: !1,
                            hide_input: !1,
                            enable_drag_drop: !1,
                            drop_zone_text: "Drag & Drop file here",
                            drop_zone_top: !1,
                            alt_drop_zone: "",
                            mime_type: "",
                            max_upload_size: 0,
                            upload_handler: function (t, e, n, r) {
                                window.alert('No upload_handler defined for "'.concat(t.path, '". You must create your own handler to enable upload to server'))
                            }
                        }, this.defaults.options.upload || {}, this.options.upload || {})), this.options.mime_type = this.options.mime_type ? [].concat(this.options.mime_type) : [], this.input = this.theme.getFormInputField("hidden"), this.container.appendChild(this.input), !this.schema.readOnly && !this.schema.readonly) {
                            if ("function" != typeof this.options.upload_handler) throw new Error("Upload handler required for upload editor");
                            if (this.uploader = this.theme.getFormInputField("file"), this.uploader.style.display = "none", this.options.mime_type.length && this.uploader.setAttribute("accept", this.options.mime_type), !0 === this.options.enable_drag_drop && !0 === this.options.hide_input || (this.clickHandler = function (e) {
                                t.uploader.dispatchEvent(new window.MouseEvent("click", {
                                    view: window,
                                    bubbles: !0,
                                    cancelable: !1
                                }))
                            }, this.browseButton = this.getButton(this.options.title, this.options.icon, this.options.title), this.browseButton.addEventListener("click", this.clickHandler), this.fileDisplay = this.theme.getFormInputField("input"), this.fileDisplay.setAttribute("readonly", !0), this.fileDisplay.value = "No file selected.", this.fileDisplay.addEventListener("dblclick", this.clickHandler), this.fileUploadGroup = this.theme.getInputGroup(this.fileDisplay, [this.browseButton]), this.fileUploadGroup || (this.fileUploadGroup = document.createElement("div"), this.fileUploadGroup.appendChild(this.fileDisplay), this.fileUploadGroup.appendChild(this.browseButton))), !0 === this.options.enable_drag_drop) {
                                if ("" !== this.options.alt_drop_zone) {
                                    if (this.altDropZone = document.querySelector(this.options.alt_drop_zone), !this.altDropZone) throw new Error('Error: alt_drop_zone selector "'.concat(this.options.alt_drop_zone, '" not found!'));
                                    this.dropZone = this.altDropZone
                                } else this.dropZone = this.theme.getDropZone(this.options.drop_zone_text);
                                this.dropZone && (this.dropZone.classList.add("upload-dropzone"), this.dropZone.addEventListener("dblclick", this.clickHandler))
                            }
                            this.uploadHandler = function (e) {
                                e.preventDefault(), e.stopPropagation();
                                var n = e.target.files || e.dataTransfer.files;
                                if (n && n.length) if (0 !== t.options.max_upload_size && n[0].size > t.options.max_upload_size) t.theme.addInputError(t.uploader, "Filesize too large. Max size is ".concat(t.options.max_upload_size)); else if (0 === t.options.mime_type.length || t.isValidMimeType(n[0].type, t.options.mime_type)) {
                                    t.fileDisplay && (t.fileDisplay.value = n[0].name);
                                    var r = new window.FileReader;
                                    r.onload = function (e) {
                                        t.preview_value = e.target.result, t.refreshPreview(n), t.onChange(!0), r = null
                                    }, r.readAsDataURL(n[0])
                                } else t.theme.addInputError(t.uploader, "Wrong file format. Allowed format(s): ".concat(t.options.mime_type.toString()))
                            }, this.uploader.addEventListener("change", this.uploadHandler), this.dragHandler = function (e) {
                                var n = e.dataTransfer.items || e.dataTransfer.files,
                                    r = n && n.length && (0 === t.options.mime_type.length || t.isValidMimeType(n[0].type, t.options.mime_type)),
                                    i = e.currentTarget.classList && e.currentTarget.classList.contains("upload-dropzone") && r;
                                switch ((e.currentTarget === window ? "w_" : "e_") + e.type) {
                                    case"w_drop":
                                    case"w_dragover":
                                        i || (e.dataTransfer.dropEffect = "none");
                                        break;
                                    case"e_dragenter":
                                        i ? (t.dropZone.classList.add("valid-dropzone"), e.dataTransfer.dropEffect = "copy") : t.dropZone.classList.add("invalid-dropzone");
                                        break;
                                    case"e_dragover":
                                        i && (e.dataTransfer.dropEffect = "copy");
                                        break;
                                    case"e_dragleave":
                                        t.dropZone.classList.remove("valid-dropzone", "invalid-dropzone");
                                        break;
                                    case"e_drop":
                                        t.dropZone.classList.remove("valid-dropzone", "invalid-dropzone"), i && t.uploadHandler(e)
                                }
                                i || e.preventDefault()
                            }, !0 === this.options.enable_drag_drop && (["dragover", "drop"].forEach((function (e) {
                                window.addEventListener(e, t.dragHandler, !0)
                            })), ["dragenter", "dragover", "dragleave", "drop"].forEach((function (e) {
                                t.dropZone.addEventListener(e, t.dragHandler, !0)
                            })))
                        }
                        this.preview = document.createElement("div"), this.control = this.input.controlgroup = this.theme.getFormControl(this.label, this.uploader || this.input, this.description, this.infoButton), this.uploader && (this.uploader.controlgroup = this.control);
                        var e = this.uploader || this.input, n = document.createElement("div");
                        this.dropZone && !this.altDropZone && !0 === this.options.drop_zone_top && n.appendChild(this.dropZone), this.fileUploadGroup && n.appendChild(this.fileUploadGroup), this.dropZone && !this.altDropZone && !0 !== this.options.drop_zone_top && n.appendChild(this.dropZone), n.appendChild(this.preview), e.parentNode.insertBefore(n, e.nextSibling), this.container.appendChild(this.control), window.requestAnimationFrame((function () {
                            t.afterInputReady()
                        }))
                    }
                }, {
                    key: "afterInputReady", value: function () {
                        var t = this;
                        if (this.value) {
                            var e = document.createElement("img");
                            e.style.maxWidth = "100%", e.style.maxHeight = "100px", e.onload = function (n) {
                                t.preview.appendChild(e)
                            }, e.onerror = function (t) {
                                console.error("upload error", t, t.currentTarget)
                            }, e.src = this.container.querySelector("a").href
                        }
                        this.theme.afterInputReady(this.input)
                    }
                }, {
                    key: "refreshPreview", value: function (t) {
                        var e = this;
                        if (this.last_preview !== this.preview_value && (this.last_preview = this.preview_value, this.preview.innerHTML = "", this.preview_value)) {
                            var n = t[0], r = this.preview_value.match(/^data:([^;,]+)[;,]/);
                            if (n.mimeType = r ? r[1] : "unknown", n.size > 0) {
                                var i = Math.floor(Math.log(n.size) / Math.log(1024));
                                n.formattedSize = "".concat(parseFloat((n.size / Math.pow(1024, i)).toFixed(2)), " ").concat(["Bytes", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB"][i])
                            } else n.formattedSize = "0 Bytes";
                            var o = this.getButton("button_upload", "upload", "button_upload");
                            o.addEventListener("click", (function (t) {
                                t.preventDefault(), o.setAttribute("disabled", "disabled"), e.theme.removeInputError(e.uploader), e.theme.getProgressBar && (e.progressBar = e.theme.getProgressBar(), e.preview.appendChild(e.progressBar)), e.options.upload_handler(e.path, n, {
                                    success: function (t) {
                                        e.setValue(t), e.parent ? e.parent.onChildEditorChange(e) : e.jsoneditor.onChange(), e.progressBar && e.preview.removeChild(e.progressBar), o.removeAttribute("disabled")
                                    }, failure: function (t) {
                                        e.theme.addInputError(e.uploader, t), e.progressBar && e.preview.removeChild(e.progressBar), o.removeAttribute("disabled")
                                    }, updateProgress: function (t) {
                                        e.progressBar && (t ? e.theme.updateProgressBar(e.progressBar, t) : e.theme.updateProgressBarUnknown(e.progressBar))
                                    }
                                })
                            })), this.preview.appendChild(this.theme.getUploadPreview(n, o, this.preview_value)), this.options.auto_upload && (o.dispatchEvent(new window.MouseEvent("click")), o.parentNode.removeChild(o))
                        }
                    }
                }, {
                    key: "enable", value: function () {
                        this.always_disabled || (this.uploader && (this.uploader.disabled = !1), To(No(o.prototype), "enable", this).call(this))
                    }
                }, {
                    key: "disable", value: function (t) {
                        t && (this.always_disabled = !0), this.uploader && (this.uploader.disabled = !0), To(No(o.prototype), "disable", this).call(this)
                    }
                }, {
                    key: "setValue", value: function (t) {
                        this.value !== t && (this.value = t, this.input.value = this.value, this.onChange())
                    }
                }, {
                    key: "destroy", value: function () {
                        var t = this;
                        !0 === this.options.enable_drag_drop && (["dragover", "drop"].forEach((function (e) {
                            window.removeEventListener(e, t.dragHandler, !0)
                        })), ["dragenter", "dragover", "dragleave", "drop"].forEach((function (e) {
                            t.dropZone.removeEventListener(e, t.dragHandler, !0)
                        })), this.dropZone.removeEventListener("dblclick", this.clickHandler), this.dropZone && this.dropZone.parentNode && this.dropZone.parentNode.removeChild(this.dropZone)), this.uploader && this.uploader.parentNode && (this.uploader.removeEventListener("change", this.uploadHandler), this.uploader.parentNode.removeChild(this.uploader)), this.browseButton && this.browseButton.parentNode && (this.browseButton.removeEventListener("click", this.clickHandler), this.browseButton.parentNode.removeChild(this.browseButton)), this.fileDisplay && this.fileDisplay.parentNode && (this.fileDisplay.removeEventListener("dblclick", this.clickHandler), this.fileDisplay.parentNode.removeChild(this.fileDisplay)), this.fileUploadGroup && this.fileUploadGroup.parentNode && this.fileUploadGroup.parentNode.removeChild(this.fileUploadGroup), this.preview && this.preview.parentNode && this.preview.parentNode.removeChild(this.preview), this.header && this.header.parentNode && this.header.parentNode.removeChild(this.header), this.input && this.input.parentNode && this.input.parentNode.removeChild(this.input), To(No(o.prototype), "destroy", this).call(this)
                    }
                }, {
                    key: "isValidMimeType", value: function (t, e) {
                        return e.reduce((function (e, n) {
                            return e || new RegExp(n.replace(/\*/g, ".*"), "gi").test(t)
                        }), !1)
                    }
                }]) && Lo(e.prototype, n), r && Lo(e, r), o
            }(q),
            uuid: function (t) {
                !function (t, e) {
                    if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                    t.prototype = Object.create(e && e.prototype, {
                        constructor: {
                            value: t,
                            writable: !0,
                            configurable: !0
                        }
                    }), e && Mo(t, e)
                }(o, t);
                var e, n, r, i = zo(o);

                function o() {
                    return Vo(this, o), i.apply(this, arguments)
                }

                return e = o, (n = [{
                    key: "preBuild", value: function () {
                        Ho(Uo(o.prototype), "preBuild", this).call(this), this.schema.default = this.uuid = this.getUuid(), this.schema.options || (this.schema.options = {}), this.schema.options.cleave || (this.schema.options.cleave = {
                            delimiters: ["-"],
                            blocks: [8, 4, 4, 4, 12]
                        })
                    }
                }, {
                    key: "build", value: function () {
                        Ho(Uo(o.prototype), "build", this).call(this), this.disable(!0), this.input.setAttribute("readonly", "true")
                    }
                }, {
                    key: "sanitize", value: function (t) {
                        return this.testUuid(t) || (t = this.uuid), t
                    }
                }, {
                    key: "setValue", value: function (t, e, n) {
                        this.testUuid(t) || (t = this.uuid), this.uuid = t, Ho(Uo(o.prototype), "setValue", this).call(this, t, e, n)
                    }
                }, {
                    key: "getUuid", value: function () {
                        return _()
                    }
                }, {
                    key: "testUuid", value: function (t) {
                        return /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i.test(t)
                    }
                }]) && Do(e.prototype, n), r && Do(e, r), o
            }(K),
            colorpicker: function (t) {
                !function (t, e) {
                    if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                    t.prototype = Object.create(e && e.prototype, {
                        constructor: {
                            value: t,
                            writable: !0,
                            configurable: !0
                        }
                    }), e && Zo(t, e)
                }(o, t);
                var e, n, r, i = Yo(o);

                function o() {
                    return $o(this, o), i.apply(this, arguments)
                }

                return e = o, (n = [{
                    key: "postBuild", value: function () {
                        window.Picker && (this.input.type = "text"), this.input.style.padding = "3px"
                    }
                }, {
                    key: "setValue", value: function (t, e, n) {
                        var r = Wo(Ko(o.prototype), "setValue", this).call(this, t, e, n);
                        return this.picker_instance && this.picker_instance.domElement && r && r.changed && this.picker_instance.setColor(r.value, !0), r
                    }
                }, {
                    key: "getNumColumns", value: function () {
                        return 2
                    }
                }, {
                    key: "afterInputReady", value: function () {
                        Wo(Ko(o.prototype), "afterInputReady", this).call(this), this.createPicker(!0)
                    }
                }, {
                    key: "disable", value: function () {
                        if (Wo(Ko(o.prototype), "disable", this).call(this), this.picker_instance && this.picker_instance.domElement) {
                            this.picker_instance.domElement.style.pointerEvents = "none";
                            for (var t = this.picker_instance.domElement.querySelectorAll("button"), e = 0; e < t.length; e++) t[e].disabled = !0
                        }
                    }
                }, {
                    key: "enable", value: function () {
                        if (Wo(Ko(o.prototype), "enable", this).call(this), this.picker_instance && this.picker_instance.domElement) {
                            this.picker_instance.domElement.style.pointerEvents = "auto";
                            for (var t = this.picker_instance.domElement.querySelectorAll("button"), e = 0; e < t.length; e++) t[e].disabled = !1
                        }
                    }
                }, {
                    key: "destroy", value: function () {
                        this.createPicker(!1), Wo(Ko(o.prototype), "destroy", this).call(this)
                    }
                }, {
                    key: "createPicker", value: function (t) {
                        var e = this;
                        if (t) {
                            if (window.Picker && !this.picker_instance) {
                                var n = this.expandCallbacks("colorpicker", f({}, {
                                        editor: !1,
                                        alpha: !1,
                                        color: this.value,
                                        popup: "bottom"
                                    }, this.defaults.options.colorpicker || {}, this.options.colorpicker || {}, {parent: this.container})),
                                    r = function (t) {
                                        var n = e.picker_instance.settings.editorFormat,
                                            r = e.picker_instance.settings.alpha;
                                        e.setValue("hex" === n ? r ? t.hex : t.hex.slice(0, 7) : t["".concat(n + (r ? "a" : ""), "String")])
                                    };
                                n.popup || "function" == typeof n.onChange ? n.popup && "function" != typeof n.onDone && (n.onDone = r) : n.onChange = r, this.picker_instance = new window.Picker(n), n.popup || (this.input.style.display = "none", this.theme.afterInputReady(this.picker_instance.domElement))
                            }
                        } else this.picker_instance && (this.picker_instance.destroy(), this.picker_instance = null, this.input.style.display = "")
                    }
                }]) && Jo(e.prototype, n), r && Jo(e, r), o
            }(K)
        }, ta = (n(180), {
            default: function () {
                return {
                    compile: function (t) {
                        var e = t.match(/{{\s*([a-zA-Z0-9\-_ .]+)\s*}}/g), n = e && e.length;
                        if (!n) return function () {
                            return t
                        };
                        for (var r = [], i = function (t) {
                            var n, i, o = e[t].replace(/[{}]+/g, "").trim().split("."), a = o.length;
                            a > 1 ? n = function (e) {
                                for (i = e, t = 0; t < a && (i = i[o[t]]); t++) ;
                                return i
                            } : (o = o[0], n = function (t) {
                                return t[o]
                            });
                            r.push({s: e[t], r: n})
                        }, o = 0; o < n; o++) i(o);
                        return function (e) {
                            var i, a = "".concat(t);
                            for (o = 0; o < n; o++) i = r[o], a = a.replace(i.s, i.r(e));
                            return a
                        }
                    }
                }
            }, ejs: function () {
                return !!window.EJS && {
                    compile: function (t) {
                        var e = new window.EJS({text: t});
                        return function (t) {
                            return e.render(t)
                        }
                    }
                }
            }, handlebars: function () {
                return window.Handlebars
            }, hogan: function () {
                return !!window.Hogan && {
                    compile: function (t) {
                        var e = window.Hogan.compile(t);
                        return function (t) {
                            return e.render(t)
                        }
                    }
                }
            }, lodash: function () {
                return !!window._ && {
                    compile: function (t) {
                        return function (e) {
                            return window._.template(t)(e)
                        }
                    }
                }
            }, markup: function () {
                return !(!window.Mark || !window.Mark.up) && {
                    compile: function (t) {
                        return function (e) {
                            return window.Mark.up(t, e)
                        }
                    }
                }
            }, mustache: function () {
                return !!window.Mustache && {
                    compile: function (t) {
                        return function (e) {
                            return window.Mustache.render(t, e)
                        }
                    }
                }
            }, swig: function () {
                return window.swig
            }, underscore: function () {
                return !!window._ && {
                    compile: function (t) {
                        return function (e) {
                            return window._.template(t)(e)
                        }
                    }
                }
            }
        });

        function ea(t) {
            return function (t) {
                if (Array.isArray(t)) return na(t)
            }(t) || function (t) {
                if ("undefined" != typeof Symbol && null != t[Symbol.iterator] || null != t["@@iterator"]) return Array.from(t)
            }(t) || function (t, e) {
                if (!t) return;
                if ("string" == typeof t) return na(t, e);
                var n = Object.prototype.toString.call(t).slice(8, -1);
                "Object" === n && t.constructor && (n = t.constructor.name);
                if ("Map" === n || "Set" === n) return Array.from(t);
                if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return na(t, e)
            }(t) || function () {
                throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }()
        }

        function na(t, e) {
            (null == e || e > t.length) && (e = t.length);
            for (var n = 0, r = new Array(e); n < e; n++) r[n] = t[n];
            return r
        }

        function ra(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function ia(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        var oa = {
            collapse: "",
            expand: "",
            delete: "",
            edit: "",
            add: "",
            cancel: "",
            save: "",
            moveup: "",
            movedown: ""
        }, aa = function () {
            function t() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "",
                    n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : oa;
                ra(this, t), this.mapping = n, this.icon_prefix = e
            }

            var e, n, r;
            return e = t, (n = [{
                key: "getIconClass", value: function (t) {
                    return this.mapping[t] ? this.icon_prefix + this.mapping[t] : this.icon_prefix + t
                }
            }, {
                key: "getIcon", value: function (t) {
                    var e, n = this.getIconClass(t);
                    if (!n) return null;
                    var r = document.createElement("i");
                    return (e = r.classList).add.apply(e, ea(n.split(" "))), r
                }
            }]) && ia(e.prototype, n), r && ia(e, r), t
        }();

        function sa(t) {
            return (sa = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function la(t, e) {
            return (la = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function ca(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = ha(t);
                if (e) {
                    var i = ha(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return ua(this, n)
            }
        }

        function ua(t, e) {
            return !e || "object" !== sa(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function ha(t) {
            return (ha = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var pa = {
            collapse: "chevron-down",
            expand: "chevron-right",
            delete: "trash",
            edit: "pencil",
            add: "plus",
            subtract: "minus",
            cancel: "floppy-remove",
            save: "floppy-saved",
            moveup: "arrow-up",
            moveright: "arrow-right",
            movedown: "arrow-down",
            moveleft: "arrow-left",
            copy: "copy",
            clear: "remove-circle",
            time: "time",
            calendar: "calendar",
            edit_properties: "list"
        };

        function da(t) {
            return (da = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function fa(t, e) {
            return (fa = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function ya(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = va(t);
                if (e) {
                    var i = va(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return ma(this, n)
            }
        }

        function ma(t, e) {
            return !e || "object" !== da(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function va(t) {
            return (va = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var ba = {
            collapse: "chevron-down",
            expand: "chevron-right",
            delete: "trash",
            edit: "pencil",
            add: "plus",
            subtract: "minus",
            cancel: "ban-circle",
            save: "save",
            moveup: "arrow-up",
            moveright: "arrow-right",
            movedown: "arrow-down",
            moveleft: "arrow-left",
            copy: "copy",
            clear: "remove-circle",
            time: "time",
            calendar: "calendar",
            edit_properties: "list"
        };

        function ga(t) {
            return (ga = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function _a(t, e) {
            return (_a = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function wa(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = xa(t);
                if (e) {
                    var i = xa(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return ka(this, n)
            }
        }

        function ka(t, e) {
            return !e || "object" !== ga(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function xa(t) {
            return (xa = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var ja = {
            collapse: "caret-square-o-down",
            expand: "caret-square-o-right",
            delete: "times",
            edit: "pencil",
            add: "plus",
            subtract: "minus",
            cancel: "ban",
            save: "save",
            moveup: "arrow-up",
            moveright: "arrow-right",
            movedown: "arrow-down",
            moveleft: "arrow-left",
            copy: "files-o",
            clear: "times-circle-o",
            time: "clock-o",
            calendar: "calendar",
            edit_properties: "list"
        };

        function Oa(t) {
            return (Oa = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Ca(t, e) {
            return (Ca = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Ea(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Pa(t);
                if (e) {
                    var i = Pa(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Sa(this, n)
            }
        }

        function Sa(t, e) {
            return !e || "object" !== Oa(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Pa(t) {
            return (Pa = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Ra = {
            collapse: "caret-down",
            expand: "caret-right",
            delete: "trash",
            edit: "pen",
            add: "plus",
            subtract: "minus",
            cancel: "ban",
            save: "save",
            moveup: "arrow-up",
            moveright: "arrow-right",
            movedown: "arrow-down",
            moveleft: "arrow-left",
            copy: "copy",
            clear: "times-circle",
            time: "clock",
            calendar: "calendar",
            edit_properties: "list"
        };

        function La(t) {
            return (La = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Ta(t, e) {
            return (Ta = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Aa(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Ba(t);
                if (e) {
                    var i = Ba(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Ia(this, n)
            }
        }

        function Ia(t, e) {
            return !e || "object" !== La(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Ba(t) {
            return (Ba = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Na = {
            collapse: "triangle-1-s",
            expand: "triangle-1-e",
            delete: "trash",
            edit: "pencil",
            add: "plusthick",
            subtract: "minusthick",
            cancel: "closethick",
            save: "disk",
            moveup: "arrowthick-1-n",
            moveright: "arrowthick-1-e",
            movedown: "arrowthick-1-s",
            moveleft: "arrowthick-1-w",
            copy: "copy",
            clear: "circle-close",
            time: "time",
            calendar: "calendar",
            edit_properties: "note"
        };

        function Fa(t) {
            return (Fa = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Va(t, e) {
            return (Va = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Da(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Ma(t);
                if (e) {
                    var i = Ma(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Ha(this, n)
            }
        }

        function Ha(t, e) {
            return !e || "object" !== Fa(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Ma(t) {
            return (Ma = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var za = {
            collapse: "collapse-down",
            expand: "expand-right",
            delete: "trash",
            edit: "pencil",
            add: "plus",
            subtract: "minus",
            cancel: "ban",
            save: "file",
            moveup: "arrow-thick-top",
            moveright: "arrow-thick-right",
            movedown: "arrow-thick-bottom",
            moveleft: "arrow-thick-left",
            copy: "clipboard",
            clear: "circle-x",
            time: "clock",
            calendar: "calendar",
            edit_properties: "list"
        };

        function qa(t) {
            return (qa = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Ua(t, e) {
            return (Ua = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Ga(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Ja(t);
                if (e) {
                    var i = Ja(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return $a(this, n)
            }
        }

        function $a(t, e) {
            return !e || "object" !== qa(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Ja(t) {
            return (Ja = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Wa = {
            collapse: "arrow-down",
            expand: "arrow-right",
            delete: "delete",
            edit: "edit",
            add: "plus",
            subtract: "minus",
            cancel: "cross",
            save: "check",
            moveup: "upward",
            moveright: "forward",
            movedown: "downward",
            moveleft: "back",
            copy: "copy",
            clear: "close",
            time: "time",
            calendar: "bookmark",
            edit_properties: "menu"
        }, Za = {
            bootstrap3: function (t) {
                !function (t, e) {
                    if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                    t.prototype = Object.create(e && e.prototype, {
                        constructor: {
                            value: t,
                            writable: !0,
                            configurable: !0
                        }
                    }), e && la(t, e)
                }(n, t);
                var e = ca(n);

                function n() {
                    return function (t, e) {
                        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                    }(this, n), e.call(this, "glyphicon glyphicon-", pa)
                }

                return n
            }(aa), fontawesome3: function (t) {
                !function (t, e) {
                    if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                    t.prototype = Object.create(e && e.prototype, {
                        constructor: {
                            value: t,
                            writable: !0,
                            configurable: !0
                        }
                    }), e && fa(t, e)
                }(n, t);
                var e = ya(n);

                function n() {
                    return function (t, e) {
                        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                    }(this, n), e.call(this, "icon-", ba)
                }

                return n
            }(aa), fontawesome4: function (t) {
                !function (t, e) {
                    if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                    t.prototype = Object.create(e && e.prototype, {
                        constructor: {
                            value: t,
                            writable: !0,
                            configurable: !0
                        }
                    }), e && _a(t, e)
                }(n, t);
                var e = wa(n);

                function n() {
                    return function (t, e) {
                        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                    }(this, n), e.call(this, "fa fa-", ja)
                }

                return n
            }(aa), fontawesome5: function (t) {
                !function (t, e) {
                    if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                    t.prototype = Object.create(e && e.prototype, {
                        constructor: {
                            value: t,
                            writable: !0,
                            configurable: !0
                        }
                    }), e && Ca(t, e)
                }(n, t);
                var e = Ea(n);

                function n() {
                    return function (t, e) {
                        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                    }(this, n), e.call(this, "fas fa-", Ra)
                }

                return n
            }(aa), jqueryui: function (t) {
                !function (t, e) {
                    if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                    t.prototype = Object.create(e && e.prototype, {
                        constructor: {
                            value: t,
                            writable: !0,
                            configurable: !0
                        }
                    }), e && Ta(t, e)
                }(n, t);
                var e = Aa(n);

                function n() {
                    return function (t, e) {
                        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                    }(this, n), e.call(this, "ui-icon ui-icon-", Na)
                }

                return n
            }(aa), openiconic: function (t) {
                !function (t, e) {
                    if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                    t.prototype = Object.create(e && e.prototype, {
                        constructor: {
                            value: t,
                            writable: !0,
                            configurable: !0
                        }
                    }), e && Va(t, e)
                }(n, t);
                var e = Da(n);

                function n() {
                    return function (t, e) {
                        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                    }(this, n), e.call(this, "oi oi-", za)
                }

                return n
            }(aa), spectre: function (t) {
                !function (t, e) {
                    if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                    t.prototype = Object.create(e && e.prototype, {
                        constructor: {
                            value: t,
                            writable: !0,
                            configurable: !0
                        }
                    }), e && Ua(t, e)
                }(n, t);
                var e = Ga(n);

                function n() {
                    return function (t, e) {
                        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                    }(this, n), e.call(this, "icon icon-", Wa)
                }

                return n
            }(aa)
        };
        n(151);

        function Ya(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Qa(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        var Ka = ["matches", "webkitMatchesSelector", "mozMatchesSelector", "msMatchesSelector", "oMatchesSelector"].find((function (t) {
            return t in document.documentElement
        })), Xa = function () {
            function t(e) {
                var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {disable_theme_rules: !1};
                Ya(this, t), this.jsoneditor = e, Object.keys(n).forEach((function (t) {
                    void 0 !== e.options[t] && (n[t] = e.options[t])
                })), this.options = n
            }

            var e, n, r;
            return e = t, (n = [{
                key: "getContainer", value: function () {
                    return document.createElement("div")
                }
            }, {
                key: "getFloatRightLinkHolder", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("je-float-right-linkholder"), t
                }
            }, {
                key: "getModal", value: function () {
                    var t = document.createElement("div");
                    return t.style.display = "none", t.classList.add("je-modal"), t
                }
            }, {
                key: "getGridContainer", value: function () {
                    return document.createElement("div")
                }
            }, {
                key: "getGridRow", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("row"), t
                }
            }, {
                key: "getGridColumn", value: function () {
                    return document.createElement("div")
                }
            }, {
                key: "setGridColumnSize", value: function (t, e) {
                }
            }, {
                key: "getLink", value: function (t) {
                    var e = document.createElement("a");
                    return e.setAttribute("href", "#"), e.appendChild(document.createTextNode(t)), e
                }
            }, {
                key: "disableHeader", value: function (t) {
                    t.style.color = "#ccc"
                }
            }, {
                key: "disableLabel", value: function (t) {
                    t.style.color = "#ccc"
                }
            }, {
                key: "enableHeader", value: function (t) {
                    t.style.color = ""
                }
            }, {
                key: "enableLabel", value: function (t) {
                    t.style.color = ""
                }
            }, {
                key: "getInfoButton", value: function (t) {
                    var e = document.createElement("span");
                    e.innerText = "ⓘ", e.classList.add("je-infobutton-icon");
                    var n = document.createElement("span");
                    return n.classList.add("je-infobutton-tooltip"), n.innerText = t, e.onmouseover = function () {
                        n.style.visibility = "visible"
                    }, e.onmouseleave = function () {
                        n.style.visibility = "hidden"
                    }, e.appendChild(n), e
                }
            }, {
                key: "getFormInputLabel", value: function (t, e) {
                    var n = document.createElement("label");
                    return n.appendChild(document.createTextNode(t)), e && n.classList.add("required"), n
                }
            }, {
                key: "getHeader", value: function (t, e) {
                    var n = document.createElement("h3");
                    return "string" == typeof t ? n.textContent = t : n.appendChild(t), n.classList.add("je-header"), n
                }
            }, {
                key: "getCheckbox", value: function () {
                    var t = this.getFormInputField("checkbox");
                    return t.classList.add("je-checkbox"), t
                }
            }, {
                key: "getCheckboxLabel", value: function (t, e) {
                    var n = document.createElement("label");
                    return n.appendChild(document.createTextNode(" ".concat(t))), e && n.classList.add("required"), n
                }
            }, {
                key: "getMultiCheckboxHolder", value: function (t, e, n, r) {
                    var i = document.createElement("div");
                    return i.classList.add("control-group"), e && (e.style.display = "block", i.appendChild(e), r && e.appendChild(r)), Object.values(t).forEach((function (t) {
                        t.style.display = "inline-block", t.style.marginRight = "20px", i.appendChild(t)
                    })), n && i.appendChild(n), i
                }
            }, {
                key: "getFormCheckboxControl", value: function (t, e, n) {
                    var r = document.createElement("div");
                    return r.appendChild(t), e.style.width = "auto", t.insertBefore(e, t.firstChild), n && r.classList.add("je-checkbox-control--compact"), r
                }
            }, {
                key: "getFormRadio", value: function (t) {
                    var e = this.getFormInputField("radio");
                    return Object.keys(t).forEach((function (n) {
                        return e.setAttribute(n, t[n])
                    })), e.classList.add("je-radio"), e
                }
            }, {
                key: "getFormRadioLabel", value: function (t, e) {
                    var n = document.createElement("label");
                    return n.appendChild(document.createTextNode(" ".concat(t))), e && n.classList.add("required"), n
                }
            }, {
                key: "getFormRadioControl", value: function (t, e, n) {
                    var r = document.createElement("div");
                    return r.appendChild(t), e.style.width = "auto", t.insertBefore(e, t.firstChild), n && r.classList.add("je-radio-control--compact"), r
                }
            }, {
                key: "getSelectInput", value: function (t, e) {
                    var n = document.createElement("select");
                    return t && this.setSelectOptions(n, t), n
                }
            }, {
                key: "getSwitcher", value: function (t) {
                    var e = this.getSelectInput(t, !1);
                    return e.classList.add("je-switcher"), e
                }
            }, {
                key: "getSwitcherOptions", value: function (t) {
                    return t.getElementsByTagName("option")
                }
            }, {
                key: "setSwitcherOptions", value: function (t, e, n) {
                    this.setSelectOptions(t, e, n)
                }
            }, {
                key: "setSelectOptions", value: function (t, e) {
                    var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : [];
                    t.innerHTML = "";
                    for (var r = 0; r < e.length; r++) {
                        var i = document.createElement("option");
                        i.setAttribute("value", e[r]), i.textContent = n[r] || e[r], t.appendChild(i)
                    }
                }
            }, {
                key: "getTextareaInput", value: function () {
                    var t = document.createElement("textarea");
                    return t.classList.add("je-textarea"), t
                }
            }, {
                key: "getRangeInput", value: function (t, e, n) {
                    var r = this.getFormInputField("range");
                    return r.setAttribute("min", t), r.setAttribute("max", e), r.setAttribute("step", n), r
                }
            }, {
                key: "getStepperButtons", value: function (t) {
                    var e = document.createElement("div"), n = document.createElement("button");
                    n.setAttribute("type", "button"), n.classList.add("stepper-down");
                    var r = document.createElement("button");
                    r.setAttribute("type", "button"), r.classList.add("stepper-up"), t.getAttribute("readonly") && (n.setAttribute("disabled", !0), r.setAttribute("disabled", !0)), n.textContent = "-", r.textContent = "+";
                    var i = function (t, e) {
                        t.value = Number(e || t.value), t.setAttribute("initialized", "1")
                    }, o = t.getAttribute("min"), a = t.getAttribute("max");
                    return n.addEventListener("click", (function () {
                        t.getAttribute("initialized") ? o ? Number(t.value) > Number(o) && t.stepDown() : t.stepDown() : i(t, o), y(t, "change")
                    })), r.addEventListener("click", (function () {
                        t.getAttribute("initialized") ? a ? Number(t.value) < Number(a) && t.stepUp() : t.stepUp() : i(t, o), y(t, "change")
                    })), e.appendChild(n), e.appendChild(r), e
                }
            }, {
                key: "getRangeOutput", value: function (t, e) {
                    var n = document.createElement("output"), r = function (t) {
                        n.value = t.currentTarget.value
                    };
                    return t.addEventListener("change", r, !1), t.addEventListener("input", r, !1), n
                }
            }, {
                key: "getRangeControl", value: function (t, e) {
                    var n = document.createElement("div");
                    return n.classList.add("je-range-control"), e && n.appendChild(e), n.appendChild(t), n
                }
            }, {
                key: "getFormInputField", value: function (t) {
                    var e = document.createElement("input");
                    return e.setAttribute("type", t), e
                }
            }, {
                key: "afterInputReady", value: function (t) {
                }
            }, {
                key: "getFormControl", value: function (t, e, n, r, i) {
                    var o = document.createElement("div");
                    return o.classList.add("form-control"), t && (o.appendChild(t), i && t.setAttribute("for", i)), "checkbox" !== e.type && "radio" !== e.type || !t ? (r && t && t.appendChild(r), o.appendChild(e)) : (e.style.width = "auto", t.insertBefore(e, t.firstChild), r && t.appendChild(r)), n && o.appendChild(n), o
                }
            }, {
                key: "getIndentedPanel", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("je-indented-panel"), t
                }
            }, {
                key: "getTopIndentedPanel", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("je-indented-panel--top"), t
                }
            }, {
                key: "getChildEditorHolder", value: function () {
                    return document.createElement("div")
                }
            }, {
                key: "getDescription", value: function (t) {
                    var e = document.createElement("p");
                    return window.DOMPurify ? e.innerHTML = window.DOMPurify.sanitize(t) : e.textContent = this.cleanText(t), e
                }
            }, {
                key: "getCheckboxDescription", value: function (t) {
                    return this.getDescription(t)
                }
            }, {
                key: "getFormInputDescription", value: function (t) {
                    return this.getDescription(t)
                }
            }, {
                key: "getButtonHolder", value: function () {
                    return document.createElement("span")
                }
            }, {
                key: "getHeaderButtonHolder", value: function () {
                    return this.getButtonHolder()
                }
            }, {
                key: "getFormButtonHolder", value: function (t) {
                    return this.getButtonHolder()
                }
            }, {
                key: "getButton", value: function (t, e, n) {
                    var r = document.createElement("button");
                    return r.type = "button", this.setButtonText(r, t, e, n), r
                }
            }, {
                key: "getFormButton", value: function (t, e, n) {
                    return this.getButton(t, e, n)
                }
            }, {
                key: "setButtonText", value: function (t, e, n, r) {
                    for (; t.firstChild;) t.removeChild(t.firstChild);
                    if (n && (t.appendChild(n), e = " ".concat(e)), !this.jsoneditor.options.iconlib || !this.jsoneditor.options.remove_button_labels || !n) {
                        var i = document.createElement("span");
                        i.appendChild(document.createTextNode(e)), t.appendChild(i)
                    }
                    r && t.setAttribute("title", r)
                }
            }, {
                key: "getTable", value: function () {
                    return document.createElement("table")
                }
            }, {
                key: "getTableRow", value: function () {
                    return document.createElement("tr")
                }
            }, {
                key: "getTableHead", value: function () {
                    return document.createElement("thead")
                }
            }, {
                key: "getTableBody", value: function () {
                    return document.createElement("tbody")
                }
            }, {
                key: "getTableHeaderCell", value: function (t) {
                    var e = document.createElement("th");
                    return e.textContent = t, e
                }
            }, {
                key: "getTableCell", value: function () {
                    return document.createElement("td")
                }
            }, {
                key: "getErrorMessage", value: function (t) {
                    var e = document.createElement("p");
                    return e.style = e.style || {}, e.style.color = "red", e.appendChild(document.createTextNode(t)), e
                }
            }, {
                key: "addInputError", value: function (t, e) {
                }
            }, {
                key: "removeInputError", value: function (t) {
                }
            }, {
                key: "addTableRowError", value: function (t) {
                }
            }, {
                key: "removeTableRowError", value: function (t) {
                }
            }, {
                key: "getTabHolder", value: function (t) {
                    var e = void 0 === t ? "" : t, n = document.createElement("div");
                    return n.innerHTML = "<div class='je-tabholder tabs'></div><div class='content' id='".concat(e, "'></div><div class='je-tabholder--clear'></div>"), n
                }
            }, {
                key: "getTopTabHolder", value: function (t) {
                    var e = void 0 === t ? "" : t, n = document.createElement("div");
                    return n.innerHTML = "<div class='tabs je-tabholder--top'></div><div class='je-tabholder--clear'></div><div class='content' id='".concat(e, "'></div>"), n
                }
            }, {
                key: "applyStyles", value: function (t, e) {
                    Object.keys(e).forEach((function (n) {
                        return t.style[n] = e[n]
                    }))
                }
            }, {
                key: "closest", value: function (t, e) {
                    for (; t && t !== document;) {
                        if (!t[Ka]) return !1;
                        if (t[Ka](e)) return t;
                        t = t.parentNode
                    }
                    return !1
                }
            }, {
                key: "insertBasicTopTab", value: function (t, e) {
                    e.firstChild.insertBefore(t, e.firstChild.firstChild)
                }
            }, {
                key: "getTab", value: function (t, e) {
                    var n = document.createElement("div");
                    return n.appendChild(t), n.id = e, n.classList.add("je-tab"), n
                }
            }, {
                key: "getTopTab", value: function (t, e) {
                    var n = document.createElement("div");
                    return n.appendChild(t), n.id = e, n.classList.add("je-tab--top"), n
                }
            }, {
                key: "getTabContentHolder", value: function (t) {
                    return t.children[1]
                }
            }, {
                key: "getTopTabContentHolder", value: function (t) {
                    return t.children[1]
                }
            }, {
                key: "getTabContent", value: function () {
                    return this.getIndentedPanel()
                }
            }, {
                key: "getTopTabContent", value: function () {
                    return this.getTopIndentedPanel()
                }
            }, {
                key: "markTabActive", value: function (t) {
                    this.applyStyles(t.tab, {
                        opacity: 1,
                        background: "white"
                    }), void 0 !== t.rowPane ? t.rowPane.style.display = "" : t.container.style.display = ""
                }
            }, {
                key: "markTabInactive", value: function (t) {
                    this.applyStyles(t.tab, {
                        opacity: .5,
                        background: ""
                    }), void 0 !== t.rowPane ? t.rowPane.style.display = "none" : t.container.style.display = "none"
                }
            }, {
                key: "addTab", value: function (t, e) {
                    t.children[0].appendChild(e)
                }
            }, {
                key: "addTopTab", value: function (t, e) {
                    t.children[0].appendChild(e)
                }
            }, {
                key: "getBlockLink", value: function () {
                    var t = document.createElement("a");
                    return t.classList.add("je-block-link"), t
                }
            }, {
                key: "getBlockLinkHolder", value: function () {
                    return document.createElement("div")
                }
            }, {
                key: "getLinksHolder", value: function () {
                    return document.createElement("div")
                }
            }, {
                key: "createMediaLink", value: function (t, e, n) {
                    t.appendChild(e), n.classList.add("je-media"), t.appendChild(n)
                }
            }, {
                key: "createImageLink", value: function (t, e, n) {
                    t.appendChild(e), e.appendChild(n)
                }
            }, {
                key: "getFirstTab", value: function (t) {
                    return t.firstChild.firstChild
                }
            }, {
                key: "getInputGroup", value: function (t, e) {
                }
            }, {
                key: "cleanText", value: function (t) {
                    var e = document.createElement("div");
                    return e.innerHTML = t, e.textContent || e.innerText
                }
            }, {
                key: "getDropZone", value: function (t) {
                    var e = document.createElement("div");
                    return e.setAttribute("data-text", t), e.classList.add("je-dropzone"), e
                }
            }, {
                key: "getUploadPreview", value: function (t, e, n) {
                    var r = document.createElement("div");
                    if (r.classList.add("je-upload-preview"), "image" === t.mimeType.substr(0, 5)) {
                        var i = document.createElement("img");
                        i.src = n, r.appendChild(i)
                    }
                    var o = document.createElement("div");
                    o.innerHTML += "<strong>Name:</strong> ".concat(t.name, "<br><strong>Type:</strong> ").concat(t.type, "<br><strong>Size:</strong> ").concat(t.formattedSize), r.appendChild(o), r.appendChild(e);
                    var a = document.createElement("div");
                    return a.style.clear = "left", r.appendChild(a), r
                }
            }, {
                key: "getProgressBar", value: function () {
                    var t = document.createElement("progress");
                    return t.setAttribute("max", 100), t.setAttribute("value", 0), t
                }
            }, {
                key: "updateProgressBar", value: function (t, e) {
                    t && t.setAttribute("value", e)
                }
            }, {
                key: "updateProgressBarUnknown", value: function (t) {
                    t && t.removeAttribute("value")
                }
            }]) && Qa(e.prototype, n), r && Qa(e, r), t
        }();

        function ts(t) {
            return (ts = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function es(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function ns(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function rs(t, e, n) {
            return (rs = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = ss(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function is(t, e) {
            return (is = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function os(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = ss(t);
                if (e) {
                    var i = ss(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return as(this, n)
            }
        }

        function as(t, e) {
            return !e || "object" !== ts(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function ss(t) {
            return (ss = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var ls = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && is(t, e)
            }(o, t);
            var e, n, r, i = os(o);

            function o() {
                return es(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "getFormInputLabel", value: function (t, e) {
                    var n = rs(ss(o.prototype), "getFormInputLabel", this).call(this, t, e);
                    return n.classList.add("je-form-input-label"), n
                }
            }, {
                key: "getFormInputDescription", value: function (t) {
                    var e = rs(ss(o.prototype), "getFormInputDescription", this).call(this, t);
                    return e.classList.add("je-form-input-label"), e
                }
            }, {
                key: "getIndentedPanel", value: function () {
                    var t = rs(ss(o.prototype), "getIndentedPanel", this).call(this);
                    return t.classList.add("je-indented-panel"), t
                }
            }, {
                key: "getTopIndentedPanel", value: function () {
                    return this.getIndentedPanel()
                }
            }, {
                key: "getChildEditorHolder", value: function () {
                    var t = rs(ss(o.prototype), "getChildEditorHolder", this).call(this);
                    return t.classList.add("je-child-editor-holder"), t
                }
            }, {
                key: "getHeaderButtonHolder", value: function () {
                    var t = this.getButtonHolder();
                    return t.classList.add("je-header-button-holder"), t
                }
            }, {
                key: "getTable", value: function () {
                    var t = rs(ss(o.prototype), "getTable", this).call(this);
                    return t.classList.add("je-table"), t
                }
            }, {
                key: "addInputError", value: function (t, e) {
                    var n = this.closest(t, ".form-control") || t.controlgroup;
                    t.errmsg ? t.errmsg.style.display = "block" : (t.errmsg = document.createElement("div"), t.errmsg.setAttribute("class", "errmsg"), t.errmsg.style = t.errmsg.style || {}, t.errmsg.style.color = "red", n.appendChild(t.errmsg)), t.errmsg.innerHTML = "", t.errmsg.appendChild(document.createTextNode(e))
                }
            }, {
                key: "removeInputError", value: function (t) {
                    t.style && (t.style.borderColor = ""), t.errmsg && (t.errmsg.style.display = "none")
                }
            }]) && ns(e.prototype, n), r && ns(e, r), o
        }(Xa);
        ls.rules = {
            ".je-form-input-label": "display:block;margin-bottom:3px;font-weight:bold",
            ".je-form-input-description": "display:inline-block;margin:0;font-size:0.8em;font-style:italic",
            ".je-indented-panel": "padding:5px;margin:10px;border-radius:3px;border:1px%20solid%20%23ddd",
            ".je-child-editor-holder": "margin-bottom:8px",
            ".je-header-button-holder": "display:inline-block;margin-left:10px;font-size:0.8em;vertical-align:middle",
            ".je-table": "margin-bottom:5px;border-bottom:1px%20solid%20%23ccc",
            ".je-upload-preview img": "float:left;margin:0%200.5rem%200.5rem%200;max-width:100%25;max-height:5rem",
            ".je-dropzone": "position:relative;margin:0.5rem%200;border:2px%20dashed%20black;width:100%25;height:60px;background:teal;transition:all%200.5s",
            ".je-dropzone:before": "position:absolute;content:attr(data-text);color:rgba(0%2C%200%2C%200%2C%200.6);left:50%25;top:50%25;transform:translate(-50%25%2C%20-50%25)",
            ".je-dropzone.valid-dropzone": "background:green",
            ".je-dropzone.invalid-dropzone": "background:red"
        };
        var cs = n(152), us = n.n(cs);

        function hs(t) {
            return (hs = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function ps(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function ds(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function fs(t, e, n) {
            return (fs = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = bs(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function ys(t, e) {
            return (ys = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function ms(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = bs(t);
                if (e) {
                    var i = bs(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return vs(this, n)
            }
        }

        function vs(t, e) {
            return !e || "object" !== hs(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function bs(t) {
            return (bs = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var gs = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && ys(t, e)
            }(o, t);
            var e, n, r, i = ms(o);

            function o() {
                return ps(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "getSelectInput", value: function (t, e) {
                    var n = fs(bs(o.prototype), "getSelectInput", this).call(this, t);
                    return n.classList.add("form-control"), n
                }
            }, {
                key: "setGridColumnSize", value: function (t, e, n) {
                    t.classList.add("col-md-".concat(e)), n && t.classList.add("col-md-offset-".concat(n))
                }
            }, {
                key: "afterInputReady", value: function (t) {
                    if (!t.controlgroup && (t.controlgroup = this.closest(t, ".form-group"), this.closest(t, ".compact") && (t.controlgroup.style.marginBottom = 0), this.queuedInputErrorText)) {
                        var e = this.queuedInputErrorText;
                        delete this.queuedInputErrorText, this.addInputError(t, e)
                    }
                }
            }, {
                key: "getTextareaInput", value: function () {
                    var t = document.createElement("textarea");
                    return t.classList.add("form-control"), t
                }
            }, {
                key: "getRangeInput", value: function (t, e, n) {
                    return fs(bs(o.prototype), "getRangeInput", this).call(this, t, e, n)
                }
            }, {
                key: "getFormInputField", value: function (t) {
                    var e = fs(bs(o.prototype), "getFormInputField", this).call(this, t);
                    return "checkbox" !== t && "radio" !== t && e.classList.add("form-control"), e
                }
            }, {
                key: "getFormControl", value: function (t, e, n, r) {
                    var i = document.createElement("div");
                    return !t || "checkbox" !== e.type && "radio" !== e.type ? (i.classList.add("form-group"), t && (t.classList.add("control-label"), i.appendChild(t), r && t.appendChild(r)), i.appendChild(e)) : (i.classList.add(e.type), r && t.appendChild(r), t.insertBefore(e, t.firstChild), i.appendChild(t)), n && i.appendChild(n), i
                }
            }, {
                key: "getIndentedPanel", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("well", "well-sm"), t.style.paddingBottom = 0, t
                }
            }, {
                key: "getInfoButton", value: function (t) {
                    var e = document.createElement("span");
                    e.classList.add("glyphicon", "glyphicon-info-sign", "pull-right"), e.style.padding = ".25rem", e.style.position = "relative", e.style.display = "inline-block";
                    var n = document.createElement("span");
                    return n.style["font-family"] = "sans-serif", n.style.visibility = "hidden", n.style["background-color"] = "rgba(50, 50, 50, .75)", n.style.margin = "0 .25rem", n.style.color = "#FAFAFA", n.style.padding = ".5rem 1rem", n.style["border-radius"] = ".25rem", n.style.width = "25rem", n.style.position = "absolute", n.innerText = t, e.onmouseover = function () {
                        n.style.visibility = "visible"
                    }, e.onmouseleave = function () {
                        n.style.visibility = "hidden"
                    }, e.appendChild(n), e
                }
            }, {
                key: "getFormInputDescription", value: function (t) {
                    var e = document.createElement("p");
                    return e.classList.add("help-block"), window.DOMPurify ? e.innerHTML = window.DOMPurify.sanitize(t) : e.textContent = this.cleanText(t), e
                }
            }, {
                key: "getHeaderButtonHolder", value: function () {
                    var t = this.getButtonHolder();
                    return t.style.marginLeft = "10px", t
                }
            }, {
                key: "getButtonHolder", value: function () {
                    var t = document.createElement("span");
                    return t.classList.add("btn-group"), t
                }
            }, {
                key: "getButton", value: function (t, e, n) {
                    var r = fs(bs(o.prototype), "getButton", this).call(this, t, e, n);
                    return r.classList.add("btn", "btn-default"), r
                }
            }, {
                key: "getTable", value: function () {
                    var t = document.createElement("table");
                    return t.classList.add("table", "table-bordered"), t.style.width = "auto", t.style.maxWidth = "none", t
                }
            }, {
                key: "addInputError", value: function (t, e) {
                    t.controlgroup ? (t.controlgroup.classList.add("has-error"), t.errmsg ? t.errmsg.style.display = "" : (t.errmsg = document.createElement("p"), t.errmsg.classList.add("help-block", "errormsg"), t.controlgroup.appendChild(t.errmsg)), t.errmsg.textContent = e) : this.queuedInputErrorText = e
                }
            }, {
                key: "removeInputError", value: function (t) {
                    t.controlgroup || delete this.queuedInputErrorText, t.errmsg && (t.errmsg.style.display = "none", t.controlgroup.classList.remove("has-error"))
                }
            }, {
                key: "getTabHolder", value: function (t) {
                    var e = void 0 === t ? "" : t, n = document.createElement("div");
                    return n.innerHTML = "<ul class='col-md-2 nav nav-pills nav-stacked' id='".concat(e, "' role='tablist'></ul><div class='col-md-10 tab-content active well well-small'  id='").concat(e, "'></div>"), n
                }
            }, {
                key: "getTopTabHolder", value: function (t) {
                    var e = void 0 === t ? "" : t, n = document.createElement("div");
                    return n.innerHTML = "<ul class='nav nav-tabs' id='".concat(e, "' role='tablist'></ul><div class='tab-content active well well-small'  id='").concat(e, "'></div>"), n
                }
            }, {
                key: "getTab", value: function (t, e) {
                    var n = document.createElement("li");
                    n.setAttribute("role", "presentation");
                    var r = document.createElement("a");
                    return r.setAttribute("href", "#".concat(e)), r.appendChild(t), r.setAttribute("aria-controls", e), r.setAttribute("role", "tab"), r.setAttribute("data-toggle", "tab"), n.appendChild(r), n
                }
            }, {
                key: "getTopTab", value: function (t, e) {
                    var n = document.createElement("li");
                    n.setAttribute("role", "presentation");
                    var r = document.createElement("a");
                    return r.setAttribute("href", "#".concat(e)), r.appendChild(t), r.setAttribute("aria-controls", e), r.setAttribute("role", "tab"), r.setAttribute("data-toggle", "tab"), n.appendChild(r), n
                }
            }, {
                key: "getTabContent", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("tab-pane"), t.setAttribute("role", "tabpanel"), t
                }
            }, {
                key: "getTopTabContent", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("tab-pane"), t.setAttribute("role", "tabpanel"), t
                }
            }, {
                key: "markTabActive", value: function (t) {
                    t.tab.classList.add("active"), void 0 !== t.rowPane ? t.rowPane.classList.add("active") : t.container.classList.add("active")
                }
            }, {
                key: "markTabInactive", value: function (t) {
                    t.tab.classList.remove("active"), void 0 !== t.rowPane ? t.rowPane.classList.remove("active") : t.container.classList.remove("active")
                }
            }, {
                key: "getProgressBar", value: function () {
                    var t = document.createElement("div");
                    t.classList.add("progress");
                    var e = document.createElement("div");
                    return e.classList.add("progress-bar"), e.setAttribute("role", "progressbar"), e.setAttribute("aria-valuenow", 0), e.setAttribute("aria-valuemin", 0), e.setAttribute("aria-valuenax", 100), e.innerHTML = "".concat(0, "%"), t.appendChild(e), t
                }
            }, {
                key: "updateProgressBar", value: function (t, e) {
                    if (t) {
                        var n = t.firstChild, r = "".concat(e, "%");
                        n.setAttribute("aria-valuenow", e), n.style.width = r, n.innerHTML = r
                    }
                }
            }, {
                key: "updateProgressBarUnknown", value: function (t) {
                    if (t) {
                        var e = t.firstChild;
                        t.classList.add("progress", "progress-striped", "active"), e.removeAttribute("aria-valuenow"), e.style.width = "100%", e.innerHTML = ""
                    }
                }
            }, {
                key: "getInputGroup", value: function (t, e) {
                    if (t) {
                        var n = document.createElement("div");
                        n.classList.add("input-group"), n.appendChild(t);
                        var r = document.createElement("div");
                        r.classList.add("input-group-btn"), n.appendChild(r);
                        for (var i = 0; i < e.length; i++) r.appendChild(e[i]);
                        return n
                    }
                }
            }]) && ds(e.prototype, n), r && ds(e, r), o
        }(Xa);
        gs.rules = us.a;
        n(182);

        function _s(t) {
            return (_s = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function ws(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function ks(t, e, n) {
            return (ks = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Cs(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function xs(t, e) {
            return (xs = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function js(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Cs(t);
                if (e) {
                    var i = Cs(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Os(this, n)
            }
        }

        function Os(t, e) {
            return !e || "object" !== _s(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Cs(t) {
            return (Cs = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Es = {
            disable_theme_rules: !1,
            input_size: "normal",
            custom_forms: !1,
            object_indent: !0,
            object_background: "bg-light",
            object_text: "",
            table_border: !1,
            table_zebrastyle: !1,
            tooltip: "bootstrap"
        }, Ss = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && xs(t, e)
            }(o, t);
            var e, n, r, i = js(o);

            function o(t) {
                return function (t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                }(this, o), i.call(this, t, Es)
            }

            return e = o, (n = [{
                key: "getSelectInput", value: function (t, e) {
                    var n = ks(Cs(o.prototype), "getSelectInput", this).call(this, t);
                    return n.classList.add("form-control"), !1 === this.options.custom_forms ? ("small" === this.options.input_size && n.classList.add("form-control-sm"), "large" === this.options.input_size && n.classList.add("form-control-lg")) : (n.classList.remove("form-control"), n.classList.add("custom-select"), "small" === this.options.input_size && n.classList.add("custom-select-sm"), "large" === this.options.input_size && n.classList.add("custom-select-lg")), n
                }
            }, {
                key: "getContainer", value: function () {
                    var t = document.createElement("div");
                    return this.options.object_indent || t.classList.add("je-noindent"), t
                }
            }, {
                key: "setGridColumnSize", value: function (t, e, n) {
                    t.classList.add("col-md-".concat(e)), n && t.classList.add("offset-md-".concat(n))
                }
            }, {
                key: "afterInputReady", value: function (t) {
                    if (!t.controlgroup) {
                        var e = t.name;
                        t.id = e;
                        var n = t.parentNode.parentNode.getElementsByTagName("label")[0];
                        n && (n.htmlFor = e), t.controlgroup = this.closest(t, ".form-group")
                    }
                }
            }, {
                key: "getTextareaInput", value: function () {
                    var t = document.createElement("textarea");
                    return t.classList.add("form-control"), "small" === this.options.input_size && t.classList.add("form-control-sm"), "large" === this.options.input_size && t.classList.add("form-control-lg"), t
                }
            }, {
                key: "getRangeInput", value: function (t, e, n) {
                    var r = ks(Cs(o.prototype), "getRangeInput", this).call(this, t, e, n);
                    return !0 === this.options.custom_forms && (r.classList.remove("form-control"), r.classList.add("custom-range")), r
                }
            }, {
                key: "getStepperButtons", value: function (t) {
                    var e = document.createElement("div"), n = document.createElement("div"),
                        r = document.createElement("div"), i = document.createElement("button");
                    i.setAttribute("type", "button");
                    var o = document.createElement("button");
                    o.setAttribute("type", "button"), e.appendChild(n), e.appendChild(t), e.appendChild(r), n.appendChild(i), r.appendChild(o), e.classList.add("input-group"), n.classList.add("input-group-prepend"), r.classList.add("input-group-append"), i.classList.add("btn"), i.classList.add("btn-secondary"), i.classList.add("stepper-down"), o.classList.add("btn"), o.classList.add("btn-secondary"), o.classList.add("stepper-up"), t.getAttribute("readonly") && (i.setAttribute("disabled", !0), o.setAttribute("disabled", !0)), i.textContent = "-", o.textContent = "+";
                    var a = function (t, e) {
                        t.value = Number(e || t.value), t.setAttribute("initialized", "1")
                    }, s = t.getAttribute("min"), l = t.getAttribute("max");
                    return t.addEventListener("change", (function () {
                        t.getAttribute("initialized") || t.setAttribute("initialized", "1")
                    })), i.addEventListener("click", (function () {
                        t.getAttribute("initialized") ? s ? Number(t.value) > Number(s) && t.stepDown() : t.stepDown() : a(t, s), y(t, "change")
                    })), o.addEventListener("click", (function () {
                        t.getAttribute("initialized") ? l ? Number(t.value) < Number(l) && t.stepUp() : t.stepUp() : a(t, s), y(t, "change")
                    })), e
                }
            }, {
                key: "getFormInputField", value: function (t) {
                    var e = ks(Cs(o.prototype), "getFormInputField", this).call(this, t);
                    return "checkbox" !== t && "radio" !== t && "file" !== t && (e.classList.add("form-control"), "small" === this.options.input_size && e.classList.add("form-control-sm"), "large" === this.options.input_size && e.classList.add("form-control-lg")), "file" === t && e.classList.add("form-control-file"), e
                }
            }, {
                key: "getFormControl", value: function (t, e, n, r) {
                    var i = document.createElement("div");
                    if (i.classList.add("form-group"), !t || "checkbox" !== e.type && "radio" !== e.type) t && (i.appendChild(t), r && i.appendChild(r)), i.appendChild(e); else {
                        var o = document.createElement("div");
                        !1 === this.options.custom_forms ? (o.classList.add("form-check"), e.classList.add("form-check-input"), t.classList.add("form-check-label")) : (o.classList.add("custom-control"), e.classList.add("custom-control-input"), t.classList.add("custom-control-label"), "checkbox" === e.type ? o.classList.add("custom-checkbox") : o.classList.add("custom-radio"));
                        var a = (Date.now() * Math.random()).toFixed(0);
                        e.setAttribute("id", a), t.setAttribute("for", a), o.appendChild(e), o.appendChild(t), r && o.appendChild(r), i.appendChild(o)
                    }
                    return n && i.appendChild(n), i
                }
            }, {
                key: "getInfoButton", value: function (t) {
                    var e = document.createElement("button");
                    e.type = "button", e.classList.add("ml-3", "jsoneditor-twbs4-text-button"), e.setAttribute("data-toggle", "tooltip"), e.setAttribute("data-placement", "auto"), e.title = t;
                    var n = document.createTextNode("ⓘ");
                    return e.appendChild(n), "bootstrap" === this.options.tooltip ? window.jQuery && window.jQuery().tooltip ? window.jQuery(e).tooltip() : console.warn("Could not find popper jQuery plugin of Bootstrap.") : "css" === this.options.tooltip && e.classList.add("je-tooltip"), e
                }
            }, {
                key: "getCheckbox", value: function () {
                    return this.getFormInputField("checkbox")
                }
            }, {
                key: "getMultiCheckboxHolder", value: function (t, e, n, r) {
                    var i = document.createElement("div");
                    i.classList.add("form-group"), e && (i.appendChild(e), r && e.appendChild(r));
                    var o = document.createElement("div");
                    return Object.values(t).forEach((function (t) {
                        var e = t.firstChild;
                        o.appendChild(e)
                    })), i.appendChild(o), n && i.appendChild(n), i
                }
            }, {
                key: "getFormRadio", value: function (t) {
                    var e = this.getFormInputField("radio");
                    for (var n in t) e.setAttribute(n, t[n]);
                    return !1 === this.options.custom_forms ? e.classList.add("form-check-input") : e.classList.add("custom-control-input"), e
                }
            }, {
                key: "getFormRadioLabel", value: function (t, e) {
                    var n = document.createElement("label");
                    return !1 === this.options.custom_forms ? n.classList.add("form-check-label") : n.classList.add("custom-control-label"), n.appendChild(document.createTextNode(t)), n
                }
            }, {
                key: "getFormRadioControl", value: function (t, e, n) {
                    var r = document.createElement("div");
                    return !1 === this.options.custom_forms ? r.classList.add("form-check") : r.classList.add("custom-control", "custom-radio"), r.appendChild(e), r.appendChild(t), n && (!1 === this.options.custom_forms ? r.classList.add("form-check-inline") : r.classList.add("custom-control-inline")), r
                }
            }, {
                key: "getIndentedPanel", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("card", "card-body", "mb-3"), this.options.object_background && t.classList.add(this.options.object_background), this.options.object_text && t.classList.add(this.options.object_text), t
                }
            }, {
                key: "getFormInputDescription", value: function (t) {
                    var e = document.createElement("small");
                    return e.classList.add("form-text"), window.DOMPurify ? e.innerHTML = window.DOMPurify.sanitize(t) : e.textContent = this.cleanText(t), e
                }
            }, {
                key: "getHeader", value: function (t, e) {
                    var n = document.createElement("h3");
                    return n.classList.add("card-title"), n.classList.add("level-" + e), "string" == typeof t ? n.textContent = t : n.appendChild(t), n.style.display = "inline-block", n
                }
            }, {
                key: "getHeaderButtonHolder", value: function () {
                    return this.getButtonHolder()
                }
            }, {
                key: "getButtonHolder", value: function () {
                    var t = document.createElement("span");
                    return t.classList.add("btn-group"), t
                }
            }, {
                key: "getFormButtonHolder", value: function (t) {
                    var e = this.getButtonHolder();
                    return e.classList.add("d-block"), "center" === t ? e.classList.add("text-center") : "right" === t && e.classList.add("text-right"), e
                }
            }, {
                key: "getButton", value: function (t, e, n) {
                    var r = ks(Cs(o.prototype), "getButton", this).call(this, t, e, n);
                    return r.classList.add("btn", "btn-secondary", "btn-sm"), r
                }
            }, {
                key: "getTable", value: function () {
                    var t = document.createElement("table");
                    return t.classList.add("table", "table-sm"), this.options.table_border && t.classList.add("table-bordered"), this.options.table_zebrastyle && t.classList.add("table-striped"), t
                }
            }, {
                key: "getErrorMessage", value: function (t) {
                    var e = document.createElement("div");
                    return e.classList.add("alert", "alert-danger"), e.setAttribute("role", "alert"), e.appendChild(document.createTextNode(t)), e
                }
            }, {
                key: "addInputError", value: function (t, e) {
                    t.controlgroup && (t.controlgroup.classList.add("is-invalid"), t.errmsg || (t.errmsg = document.createElement("p"), t.errmsg.classList.add("invalid-feedback"), t.controlgroup.appendChild(t.errmsg), t.errmsg.style.display = "block"), t.errmsg.style.display = "block", t.errmsg.textContent = e)
                }
            }, {
                key: "removeInputError", value: function (t) {
                    t.errmsg && (t.errmsg.style.display = "none", t.controlgroup.classList.remove("is-invalid"))
                }
            }, {
                key: "getTabHolder", value: function (t) {
                    var e = document.createElement("div"), n = void 0 === t ? "" : t;
                    return e.innerHTML = "<div class='col-md-2' id='".concat(n, "'><ul class='nav flex-column nav-pills'></ul></div><div class='col-md-10'><div class='tab-content' id='").concat(n, "'></div></div>"), e.classList.add("row"), e
                }
            }, {
                key: "addTab", value: function (t, e) {
                    t.children[0].children[0].appendChild(e)
                }
            }, {
                key: "getTabContentHolder", value: function (t) {
                    return t.children[1].children[0]
                }
            }, {
                key: "getTopTabHolder", value: function (t) {
                    var e = void 0 === t ? "" : t, n = document.createElement("div");
                    return n.classList.add("card"), n.innerHTML = "<div class='card-header'><ul class='nav nav-tabs card-header-tabs' id='".concat(e, "'></ul></div><div class='card-body'><div class='tab-content' id='").concat(e, "'></div></div>"), n
                }
            }, {
                key: "getTab", value: function (t, e) {
                    var n = document.createElement("li");
                    n.classList.add("nav-item");
                    var r = document.createElement("a");
                    return r.classList.add("nav-link"), r.setAttribute("href", "#".concat(e)), r.setAttribute("data-toggle", "tab"), r.appendChild(t), n.appendChild(r), n
                }
            }, {
                key: "getTopTab", value: function (t, e) {
                    var n = document.createElement("li");
                    n.classList.add("nav-item");
                    var r = document.createElement("a");
                    return r.classList.add("nav-link"), r.setAttribute("href", "#".concat(e)), r.setAttribute("data-toggle", "tab"), r.appendChild(t), n.appendChild(r), n
                }
            }, {
                key: "getTabContent", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("tab-pane"), t.setAttribute("role", "tabpanel"), t
                }
            }, {
                key: "getTopTabContent", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("tab-pane"), t.setAttribute("role", "tabpanel"), t
                }
            }, {
                key: "markTabActive", value: function (t) {
                    t.tab.firstChild.classList.add("active"), void 0 !== t.rowPane ? t.rowPane.classList.add("active") : t.container.classList.add("active")
                }
            }, {
                key: "markTabInactive", value: function (t) {
                    t.tab.firstChild.classList.remove("active"), void 0 !== t.rowPane ? t.rowPane.classList.remove("active") : t.container.classList.remove("active")
                }
            }, {
                key: "insertBasicTopTab", value: function (t, e) {
                    e.children[0].children[0].insertBefore(t, e.children[0].children[0].firstChild)
                }
            }, {
                key: "addTopTab", value: function (t, e) {
                    t.children[0].children[0].appendChild(e)
                }
            }, {
                key: "getTopTabContentHolder", value: function (t) {
                    return t.children[1].children[0]
                }
            }, {
                key: "getFirstTab", value: function (t) {
                    return t.firstChild.firstChild.firstChild
                }
            }, {
                key: "getProgressBar", value: function () {
                    var t = document.createElement("div");
                    t.classList.add("progress");
                    var e = document.createElement("div");
                    return e.classList.add("progress-bar"), e.setAttribute("role", "progressbar"), e.setAttribute("aria-valuenow", 0), e.setAttribute("aria-valuemin", 0), e.setAttribute("aria-valuenax", 100), e.innerHTML = "".concat(0, "%"), t.appendChild(e), t
                }
            }, {
                key: "updateProgressBar", value: function (t, e) {
                    if (t) {
                        var n = t.firstChild, r = "".concat(e, "%");
                        n.setAttribute("aria-valuenow", e), n.style.width = r, n.innerHTML = r
                    }
                }
            }, {
                key: "updateProgressBarUnknown", value: function (t) {
                    if (t) {
                        var e = t.firstChild;
                        t.classList.add("progress", "progress-striped", "active"), e.removeAttribute("aria-valuenow"), e.style.width = "100%", e.innerHTML = ""
                    }
                }
            }, {
                key: "getBlockLink", value: function () {
                    var t = document.createElement("a");
                    return t.classList.add("mb-3", "d-inline-block"), t
                }
            }, {
                key: "getLinksHolder", value: function () {
                    return document.createElement("div")
                }
            }, {
                key: "getInputGroup", value: function (t, e) {
                    if (t) {
                        var n = document.createElement("div");
                        n.classList.add("input-group"), n.appendChild(t);
                        var r = document.createElement("div");
                        r.classList.add("input-group-append"), n.appendChild(r);
                        for (var i = 0; i < e.length; i++) e[i].classList.remove("mr-2", "btn-secondary"), e[i].classList.add("btn-outline-secondary"), r.appendChild(e[i]);
                        return n
                    }
                }
            }]) && ws(e.prototype, n), r && ws(e, r), o
        }(Xa);

        function Ps(t) {
            return (Ps = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Rs(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Ls(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Ts(t, e, n) {
            return (Ts = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Ns(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function As(t, e) {
            return (As = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Is(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Ns(t);
                if (e) {
                    var i = Ns(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Bs(this, n)
            }
        }

        function Bs(t, e) {
            return !e || "object" !== Ps(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Ns(t) {
            return (Ns = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        Ss.rules = {
            ".jsoneditor-twbs4-text-button": "background:none;padding:0;border:0;color:currentColor",
            "td > .form-group": "margin-bottom:0",
            ".json-editor-btn-upload": "margin-top:1rem",
            ".je-noindent .card": "padding:0;border:0",
            ".je-tooltip:hover::before": "display:block;position:absolute;font-size:0.8em;color:%23fff;border-radius:0.2em;content:attr(title);background-color:%23000;margin-top:-2.5em;padding:0.3em",
            ".je-tooltip:hover::after": "display:block;position:absolute;font-size:0.8em;color:%23fff",
            ".select2-container--default .select2-selection--single": "height:calc(1.5em%20%2B%200.75rem%20%2B%202px)",
            ".select2-container--default   .select2-selection--single   .select2-selection__arrow": "height:calc(1.5em%20%2B%200.75rem%20%2B%202px)",
            ".select2-container--default   .select2-selection--single   .select2-selection__rendered": "line-height:calc(1.5em%20%2B%200.75rem%20%2B%202px)",
            ".selectize-control.form-control": "padding:0",
            ".selectize-dropdown.form-control": "padding:0;height:auto",
            ".je-upload-preview img": "float:left;margin:0%200.5rem%200.5rem%200;max-width:100%25;max-height:5rem",
            ".je-dropzone": "position:relative;margin:0.5rem%200;border:2px%20dashed%20black;width:100%25;height:60px;background:teal;transition:all%200.5s",
            ".je-dropzone:before": "position:absolute;content:attr(data-text);color:rgba(0%2C%200%2C%200%2C%200.6);left:50%25;top:50%25;transform:translate(-50%25%2C%20-50%25)",
            ".je-dropzone.valid-dropzone": "background:green",
            ".je-dropzone.invalid-dropzone": "background:red"
        };
        var Fs = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && As(t, e)
            }(o, t);
            var e, n, r, i = Is(o);

            function o() {
                return Rs(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "getTable", value: function () {
                    var t = Ts(Ns(o.prototype), "getTable", this).call(this);
                    return t.setAttribute("cellpadding", 5), t.setAttribute("cellspacing", 0), t
                }
            }, {
                key: "getTableHeaderCell", value: function (t) {
                    var e = Ts(Ns(o.prototype), "getTableHeaderCell", this).call(this, t);
                    return e.classList.add("ui-state-active"), e.style.fontWeight = "bold", e
                }
            }, {
                key: "getTableCell", value: function () {
                    var t = Ts(Ns(o.prototype), "getTableCell", this).call(this);
                    return t.classList.add("ui-widget-content"), t
                }
            }, {
                key: "getHeaderButtonHolder", value: function () {
                    var t = this.getButtonHolder();
                    return t.style.marginLeft = "10px", t.style.fontSize = ".6em", t.style.display = "inline-block", t
                }
            }, {
                key: "getFormInputDescription", value: function (t) {
                    var e = this.getDescription(t);
                    return e.style.marginLeft = "10px", e.style.display = "inline-block", e
                }
            }, {
                key: "getFormControl", value: function (t, e, n, r) {
                    var i = Ts(Ns(o.prototype), "getFormControl", this).call(this, t, e, n, r);
                    return "checkbox" === e.type ? (i.style.lineHeight = "25px", i.style.padding = "3px 0") : i.style.padding = "4px 0 8px 0", i
                }
            }, {
                key: "getDescription", value: function (t) {
                    var e = document.createElement("span");
                    return e.style.fontSize = ".8em", e.style.fontStyle = "italic", window.DOMPurify ? e.innerHTML = window.DOMPurify.sanitize(t) : e.textContent = this.cleanText(t), e
                }
            }, {
                key: "getButtonHolder", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("ui-buttonset"), t.style.fontSize = ".7em", t
                }
            }, {
                key: "getFormInputLabel", value: function (t, e) {
                    var n = document.createElement("label");
                    return n.style.fontWeight = "bold", n.style.display = "block", n.textContent = t, e && n.classList.add("required"), n
                }
            }, {
                key: "getButton", value: function (t, e, n) {
                    var r = document.createElement("button");
                    r.classList.add("ui-button", "ui-widget", "ui-state-default", "ui-corner-all"), e && !t ? (r.classList.add("ui-button-icon-only"), e.classList.add("ui-button-icon-primary", "ui-icon-primary"), r.appendChild(e)) : e ? (r.classList.add("ui-button-text-icon-primary"), e.classList.add("ui-button-icon-primary", "ui-icon-primary"), r.appendChild(e)) : r.classList.add("ui-button-text-only");
                    var i = document.createElement("span");
                    return i.classList.add("ui-button-text"), i.textContent = t || n || ".", r.appendChild(i), r.setAttribute("title", n), r
                }
            }, {
                key: "setButtonText", value: function (t, e, n, r) {
                    t.innerHTML = "", t.classList.add("ui-button", "ui-widget", "ui-state-default", "ui-corner-all"), n && !e ? (t.classList.add("ui-button-icon-only"), n.classList.add("ui-button-icon-primary", "ui-icon-primary"), t.appendChild(n)) : n ? (t.classList.add("ui-button-text-icon-primary"), n.classList.add("ui-button-icon-primary", "ui-icon-primary"), t.appendChild(n)) : t.classList.add("ui-button-text-only");
                    var i = document.createElement("span");
                    i.classList.add("ui-button-text"), i.textContent = e || r || ".", t.appendChild(i), t.setAttribute("title", r)
                }
            }, {
                key: "getIndentedPanel", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("ui-widget-content", "ui-corner-all"), t.style.padding = "1em 1.4em", t.style.marginBottom = "20px", t
                }
            }, {
                key: "afterInputReady", value: function (t) {
                    if (!t.controls && (t.controls = this.closest(t, ".form-control"), this.queuedInputErrorText)) {
                        var e = this.queuedInputErrorText;
                        delete this.queuedInputErrorText, this.addInputError(t, e)
                    }
                }
            }, {
                key: "addInputError", value: function (t, e) {
                    t.controls ? (t.errmsg ? t.errmsg.style.display = "" : (t.errmsg = document.createElement("div"), t.errmsg.classList.add("ui-state-error"), t.controls.appendChild(t.errmsg)), t.errmsg.textContent = e) : this.queuedInputErrorText = e
                }
            }, {
                key: "removeInputError", value: function (t) {
                    t.controls || delete this.queuedInputErrorText, t.errmsg && (t.errmsg.style.display = "none")
                }
            }, {
                key: "markTabActive", value: function (t) {
                    t.tab.classList.remove("ui-widget-header"), t.tab.classList.add("ui-state-active"), void 0 !== t.rowPane ? t.rowPane.style.display = "" : t.container.style.display = ""
                }
            }, {
                key: "markTabInactive", value: function (t) {
                    t.tab.classList.add("ui-widget-header"), t.tab.classList.remove("ui-state-active"), void 0 !== t.rowPane ? t.rowPane.style.display = "none" : t.container.style.display = "none"
                }
            }]) && Ls(e.prototype, n), r && Ls(e, r), o
        }(Xa);
        Fs.rules = {'div[data-schemaid="root"]:after': 'position:relative;color:red;margin:10px 0;font-weight:600;display:block;width:100%;text-align:center;content:"This is an old JSON-Editor 1.x Theme and might not display elements correctly when used with the 2.x version"'};

        function Vs(t) {
            return (Vs = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Ds(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function Hs(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Ms(t, e) {
            return (Ms = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function zs(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Us(t);
                if (e) {
                    var i = Us(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return qs(this, n)
            }
        }

        function qs(t, e) {
            return !e || "object" !== Vs(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Us(t) {
            return (Us = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Gs = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Ms(t, e)
            }(o, t);
            var e, n, r, i = zs(o);

            function o() {
                return Ds(this, o), i.apply(this, arguments)
            }

            return e = o, (n = [{
                key: "addInputError", value: function (t, e) {
                    if (t.errmsg) t.errmsg.style.display = "block"; else {
                        var n = this.closest(t, ".form-control");
                        t.errmsg = document.createElement("div"), t.errmsg.setAttribute("class", "errmsg"), n.appendChild(t.errmsg)
                    }
                    t.errmsg.innerHTML = "", t.errmsg.appendChild(document.createTextNode(e))
                }
            }, {
                key: "removeInputError", value: function (t) {
                    t.style && (t.style.borderColor = ""), t.errmsg && (t.errmsg.style.display = "none")
                }
            }]) && Hs(e.prototype, n), r && Hs(e, r), o
        }(Xa);
        Gs.rules = {
            ".je-upload-preview img": "float:left;margin:0%200.5rem%200.5rem%200;max-width:100%25;max-height:5rem",
            ".je-dropzone": "position:relative;margin:0.5rem%200;border:2px%20dashed%20black;width:100%25;height:60px;background:teal;transition:all%200.5s",
            ".je-dropzone:before": "position:absolute;content:attr(data-text);color:rgba(0%2C%200%2C%200%2C%200.6);left:50%25;top:50%25;transform:translate(-50%25%2C%20-50%25)",
            ".je-dropzone.valid-dropzone": "background:green",
            ".je-dropzone.invalid-dropzone": "background:red"
        };

        function $s(t) {
            return ($s = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function Js(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function Ws(t, e, n) {
            return (Ws = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = Ks(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function Zs(t, e) {
            return (Zs = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function Ys(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = Ks(t);
                if (e) {
                    var i = Ks(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return Qs(this, n)
            }
        }

        function Qs(t, e) {
            return !e || "object" !== $s(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function Ks(t) {
            return (Ks = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var Xs = {
            disable_theme_rules: !1,
            label_bold: !0,
            align_bottom: !1,
            object_indent: !1,
            object_border: !1,
            table_border: !1,
            table_zebrastyle: !1,
            input_size: "normal"
        }, tl = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && Zs(t, e)
            }(o, t);
            var e, n, r, i = Ys(o);

            function o(t) {
                return function (t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                }(this, o), i.call(this, t, Xs)
            }

            return e = o, (n = [{
                key: "setGridColumnSize", value: function (t, e, n) {
                    t.classList.add("col-".concat(e)), n && t.classList.add("col-mx-auto")
                }
            }, {
                key: "getGridContainer", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("container"), this.options.object_indent || t.classList.add("je-noindent"), t
                }
            }, {
                key: "getGridRow", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("columns"), t
                }
            }, {
                key: "getGridColumn", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("column"), this.options.align_bottom && t.classList.add("je-align-bottom"), t
                }
            }, {
                key: "getIndentedPanel", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("je-panel"), this.options.object_border && t.classList.add("je-border"), t
                }
            }, {
                key: "getTopIndentedPanel", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("je-panel-top"), this.options.object_border && t.classList.add("je-border"), t
                }
            }, {
                key: "getHeaderButtonHolder", value: function () {
                    return this.getButtonHolder()
                }
            }, {
                key: "getButtonHolder", value: function () {
                    var t = Ws(Ks(o.prototype), "getButtonHolder", this).call(this);
                    return t.classList.add("btn-group"), t
                }
            }, {
                key: "getFormButtonHolder", value: function (t) {
                    var e = Ws(Ks(o.prototype), "getFormButtonHolder", this).call(this);
                    return e.classList.remove("btn-group"), e.classList.add("d-block"), "center" === t ? e.classList.add("text-center") : "right" === t ? e.classList.add("text-right") : e.classList.add("text-left"), e
                }
            }, {
                key: "getFormButton", value: function (t, e, n) {
                    var r = Ws(Ks(o.prototype), "getFormButton", this).call(this, t, e, n);
                    return r.classList.add("btn", "btn-primary", "mx-2", "my-1"), "small" !== this.options.input_size && r.classList.remove("btn-sm"), "large" === this.options.input_size && r.classList.add("btn-lg"), r
                }
            }, {
                key: "getButton", value: function (t, e, n) {
                    var r = Ws(Ks(o.prototype), "getButton", this).call(this, t, e, n);
                    return r.classList.add("btn", "btn-sm", "btn-primary", "mr-2", "my-1"), r
                }
            }, {
                key: "getHeader", value: function (t, e) {
                    var n = document.createElement("h4");
                    return "string" == typeof t ? n.textContent = t : n.appendChild(t), n.style.display = "inline-block", n
                }
            }, {
                key: "getFormInputDescription", value: function (t) {
                    var e = Ws(Ks(o.prototype), "getFormInputDescription", this).call(this, t);
                    return e.classList.add("je-desc", "hide-sm"), e
                }
            }, {
                key: "getFormInputLabel", value: function (t, e) {
                    var n = Ws(Ks(o.prototype), "getFormInputLabel", this).call(this, t, e);
                    return this.options.label_bold && n.classList.add("je-label"), n
                }
            }, {
                key: "getCheckbox", value: function () {
                    return this.getFormInputField("checkbox")
                }
            }, {
                key: "getCheckboxLabel", value: function (t, e) {
                    var n = Ws(Ks(o.prototype), "getCheckboxLabel", this).call(this, t, e),
                        r = document.createElement("i");
                    return r.classList.add("form-icon"), n.classList.add("form-checkbox", "pr-0"), n.insertBefore(r, n.firstChild), n
                }
            }, {
                key: "getFormCheckboxControl", value: function (t, e, n) {
                    return t.insertBefore(e, t.firstChild), n && t.classList.add("form-inline"), t
                }
            }, {
                key: "getMultiCheckboxHolder", value: function (t, e, n, r) {
                    return Ws(Ks(o.prototype), "getMultiCheckboxHolder", this).call(this, t, e, n, r)
                }
            }, {
                key: "getFormRadio", value: function (t) {
                    var e = this.getFormInputField("radio");
                    for (var n in t) e.setAttribute(n, t[n]);
                    return e
                }
            }, {
                key: "getFormRadioLabel", value: function (t, e) {
                    var n = Ws(Ks(o.prototype), "getFormRadioLabel", this).call(this, t, e),
                        r = document.createElement("i");
                    return r.classList.add("form-icon"), n.classList.add("form-radio"), n.insertBefore(r, n.firstChild), n
                }
            }, {
                key: "getFormRadioControl", value: function (t, e, n) {
                    return t.insertBefore(e, t.firstChild), n && t.classList.add("form-inline"), t
                }
            }, {
                key: "getFormInputField", value: function (t) {
                    var e = Ws(Ks(o.prototype), "getFormInputField", this).call(this, t);
                    return ["checkbox", "radio"].includes(t) || e.classList.add("form-input"), e
                }
            }, {
                key: "getRangeInput", value: function (t, e, n) {
                    var r = this.getFormInputField("range");
                    return r.classList.add("slider"), r.classList.remove("form-input"), r.setAttribute("oninput", 'this.setAttribute("value", this.value)'), r.setAttribute("min", t), r.setAttribute("max", e), r.setAttribute("step", n), r
                }
            }, {
                key: "getRangeControl", value: function (t, e) {
                    var n = Ws(Ks(o.prototype), "getRangeControl", this).call(this, t, e);
                    return n.classList.add("text-center"), n
                }
            }, {
                key: "getSelectInput", value: function (t, e) {
                    var n = Ws(Ks(o.prototype), "getSelectInput", this).call(this, t);
                    return n.classList.add("form-select"), n
                }
            }, {
                key: "getTextareaInput", value: function () {
                    var t = document.createElement("textarea");
                    return t.classList.add("form-input"), t
                }
            }, {
                key: "getFormControl", value: function (t, e, n, r) {
                    var i = document.createElement("div");
                    return i.classList.add("form-group"), !t || "checkbox" !== e.type && "radio" !== e.type ? (t && (t.classList.add("form-label"), i.appendChild(t), r && t.appendChild(r)), i.appendChild(e)) : (i.classList.add(e.type), r && t.appendChild(r), t.insertBefore(e, t.firstChild), i.appendChild(t)), "small" === this.options.input_size ? e.classList.add("input-sm", "select-sm") : "large" === this.options.input_size && e.classList.add("input-lg", "select-lg"), "checkbox" !== e.type && i.appendChild(e), n && i.appendChild(n), i
                }
            }, {
                key: "getInputGroup", value: function (t, e) {
                    if (t) {
                        var n = document.createElement("div");
                        n.classList.add("input-group"), n.appendChild(t);
                        for (var r = 0; r < e.length; r++) e[r].classList.add("input-group-btn"), e[r].classList.remove("btn-sm", "mr-2", "my-1"), n.appendChild(e[r]);
                        return n
                    }
                }
            }, {
                key: "getInfoButton", value: function (t) {
                    var e = document.createElement("div");
                    e.classList.add("popover", "popover-left", "float-right");
                    var n = document.createElement("button");
                    n.classList.add("btn", "btn-secondary", "btn-info", "btn-action", "s-circle"), n.setAttribute("tabindex", "-1"), e.appendChild(n);
                    var r = document.createTextNode("I");
                    n.appendChild(r);
                    var i = document.createElement("div");
                    i.classList.add("popover-container"), e.appendChild(i);
                    var o = document.createElement("div");
                    o.classList.add("card"), i.appendChild(o);
                    var a = document.createElement("div");
                    return a.classList.add("card-body"), a.innerHTML = t, o.appendChild(a), e
                }
            }, {
                key: "getTable", value: function () {
                    var t = Ws(Ks(o.prototype), "getTable", this).call(this);
                    return t.classList.add("table", "table-scroll"), this.options.table_border && t.classList.add("je-table-border"), this.options.table_zebrastyle && t.classList.add("table-striped"), t
                }
            }, {
                key: "getProgressBar", value: function () {
                    var t = Ws(Ks(o.prototype), "getProgressBar", this).call(this);
                    return t.classList.add("progress"), t
                }
            }, {
                key: "getTabHolder", value: function (t) {
                    var e = void 0 === t ? "" : t, n = document.createElement("div");
                    return n.classList.add("columns"), n.innerHTML = '<div class="column col-2"></div><div class="column col-10 content" id="'.concat(e, '"></div>'), n
                }
            }, {
                key: "getTopTabHolder", value: function (t) {
                    var e = void 0 === t ? "" : t, n = document.createElement("div");
                    return n.innerHTML = '<ul class="tab"></ul><div class="content" id="'.concat(e, '"></div>'), n
                }
            }, {
                key: "getTab", value: function (t, e) {
                    var n = document.createElement("a");
                    return n.classList.add("btn", "btn-secondary", "btn-block"), n.setAttribute("href", "#".concat(e)), n.appendChild(t), n
                }
            }, {
                key: "getTopTab", value: function (t, e) {
                    var n = document.createElement("li");
                    n.id = e, n.classList.add("tab-item");
                    var r = document.createElement("a");
                    return r.setAttribute("href", "#".concat(e)), r.appendChild(t), n.appendChild(r), n
                }
            }, {
                key: "markTabActive", value: function (t) {
                    t.tab.classList.add("active"), void 0 !== t.rowPane ? t.rowPane.style.display = "" : t.container.style.display = ""
                }
            }, {
                key: "markTabInactive", value: function (t) {
                    t.tab.classList.remove("active"), void 0 !== t.rowPane ? t.rowPane.style.display = "none" : t.container.style.display = "none"
                }
            }, {
                key: "afterInputReady", value: function (t) {
                    if ("select" === t.localName) if (t.classList.contains("selectized")) {
                        var e = t.nextSibling;
                        e && (e.classList.remove("form-select"), Array.from(e.querySelectorAll(".form-select")).forEach((function (t) {
                            t.classList.remove("form-select")
                        })))
                    } else if (t.classList.contains("select2-hidden-accessible")) {
                        var n = t.nextSibling;
                        n && n.querySelector(".select2-selection--single") && n.classList.add("form-select")
                    }
                    t.controlgroup || (t.controlgroup = this.closest(t, ".form-group"), this.closest(t, ".compact") && (t.controlgroup.style.marginBottom = 0))
                }
            }, {
                key: "addInputError", value: function (t, e) {
                    t.controlgroup && (t.controlgroup.classList.add("has-error"), t.errmsg || (t.errmsg = document.createElement("p"), t.errmsg.classList.add("form-input-hint"), t.controlgroup.appendChild(t.errmsg)), t.errmsg.classList.remove("d-hide"), t.errmsg.textContent = e)
                }
            }, {
                key: "removeInputError", value: function (t) {
                    t.errmsg && (t.errmsg.classList.add("d-hide"), t.controlgroup.classList.remove("has-error"))
                }
            }]) && Js(e.prototype, n), r && Js(e, r), o
        }(Xa);
        tl.rules = {
            "*": "--primary-color:%235755d9;--gray-color:%23bcc3ce;--light-color:%23fff",
            ".slider:focus": "box-shadow:none",
            "h4 > label + .btn-group": "margin-left:1rem",
            ".text-right > button": "margin-right:0%20!important",
            ".text-left > button": "margin-left:0%20!important",
            ".property-selector": "font-size:0.7rem;font-weight:normal;max-height:260px%20!important;width:395px%20!important",
            ".property-selector .form-checkbox": "margin:0",
            textarea: "width:100%25;min-height:2rem;resize:vertical",
            table: "border-collapse:collapse",
            ".table td": "padding:0.4rem%200.4rem",
            ".mr-5": "margin-right:1rem%20!important",
            "div[data-schematype]:not([data-schematype='object'])": "transition:0.5s",
            "div[data-schematype]:not([data-schematype='object']):hover": "background-color:%23eee",
            ".je-table-border td": "border:0.05rem%20solid%20%23dadee4%20!important",
            ".btn-info": "font-size:0.5rem;font-weight:bold;height:0.8rem;padding:0.15rem%200;line-height:0.8;margin:0.3rem%200%200.3rem%200.1rem",
            ".je-label + select": "min-width:5rem",
            ".je-label": "font-weight:600",
            ".btn-action.btn-info": "width:0.8rem",
            ".je-border": "border:0.05rem%20solid%20%23dadee4",
            ".je-panel": "padding:0.2rem;margin:0.2rem;background-color:rgba(218%2C%20222%2C%20228%2C%200.1)",
            ".je-panel-top": "padding:0.2rem;margin:0.2rem;background-color:rgba(218%2C%20222%2C%20228%2C%200.1)",
            ".required:after": "content:%22%20*%22;color:red;font:inherit",
            ".je-align-bottom": "margin-top:auto",
            ".je-desc": "font-size:smaller;margin:0.2rem%200",
            ".je-upload-preview img": "float:left;margin:0%200.5rem%200.5rem%200;max-width:100%25;max-height:5rem;border:3px%20solid%20white;box-shadow:0px%200px%208px%20rgba(0%2C%200%2C%200%2C%200.3);box-sizing:border-box",
            ".je-dropzone": "position:relative;margin:0.5rem%200;border:2px%20dashed%20black;width:100%25;height:60px;background:teal;transition:all%200.5s",
            ".je-dropzone:before": "position:absolute;content:attr(data-text);color:rgba(0%2C%200%2C%200%2C%200.6);left:50%25;top:50%25;transform:translate(-50%25%2C%20-50%25)",
            ".je-dropzone.valid-dropzone": "background:green",
            ".je-dropzone.invalid-dropzone": "background:red",
            ".columns .container.je-noindent": "padding-left:0;padding-right:0",
            ".selectize-control.multi .item": "background:var(--primary-color)%20!important",
            ".select2-container--default   .select2-selection--single   .select2-selection__arrow": "display:none",
            ".select2-container--default .select2-selection--single": "border:none",
            ".select2-container .select2-selection--single .select2-selection__rendered": "padding:0",
            ".select2-container .select2-search--inline .select2-search__field": "margin-top:0",
            ".select2-container--default.select2-container--focus   .select2-selection--multiple": "border:0.05rem%20solid%20var(--gray-color)",
            ".select2-container--default   .select2-selection--multiple   .select2-selection__choice": "margin:0.4rem%200.2rem%200.2rem%200;padding:2px%205px;background-color:var(--primary-color);color:var(--light-color)",
            ".select2-container--default .select2-search--inline .select2-search__field": "line-height:normal",
            ".choices": "margin-bottom:auto",
            ".choices__list--multiple .choices__item": "border:none;background-color:var(--primary-color);color:var(--light-color)",
            ".choices[data-type*='select-multiple'] .choices__button": "border-left:0.05rem%20solid%20%232826a6",
            ".choices__inner": "font-size:inherit;min-height:20px;padding:4px%207.5px%204px%203.75px",
            ".choices[data-type*='select-one'] .choices__inner": "padding-bottom:4px",
            ".choices__list--dropdown .choices__item": "font-size:inherit"
        };

        function el(t) {
            return (el = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t
            } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            })(t)
        }

        function nl(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        function rl(t, e, n) {
            return (rl = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function (t, e, n) {
                var r = function (t, e) {
                    for (; !Object.prototype.hasOwnProperty.call(t, e) && null !== (t = sl(t));) ;
                    return t
                }(t, e);
                if (r) {
                    var i = Object.getOwnPropertyDescriptor(r, e);
                    return i.get ? i.get.call(n) : i.value
                }
            })(t, e, n || t)
        }

        function il(t, e) {
            return (il = Object.setPrototypeOf || function (t, e) {
                return t.__proto__ = e, t
            })(t, e)
        }

        function ol(t) {
            var e = function () {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function () {
                    }))), !0
                } catch (t) {
                    return !1
                }
            }();
            return function () {
                var n, r = sl(t);
                if (e) {
                    var i = sl(this).constructor;
                    n = Reflect.construct(r, arguments, i)
                } else n = r.apply(this, arguments);
                return al(this, n)
            }
        }

        function al(t, e) {
            return !e || "object" !== el(e) && "function" != typeof e ? function (t) {
                if (void 0 === t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return t
            }(t) : e
        }

        function sl(t) {
            return (sl = Object.setPrototypeOf ? Object.getPrototypeOf : function (t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            })(t)
        }

        var ll = {
            disable_theme_rules: !1,
            label_bold: !1,
            object_panel_default: !0,
            object_indent: !0,
            object_border: !1,
            table_border: !1,
            table_hdiv: !1,
            table_zebrastyle: !1,
            input_size: "small",
            enable_compact: !1
        }, cl = function (t) {
            !function (t, e) {
                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function");
                t.prototype = Object.create(e && e.prototype, {
                    constructor: {
                        value: t,
                        writable: !0,
                        configurable: !0
                    }
                }), e && il(t, e)
            }(o, t);
            var e, n, r, i = ol(o);

            function o(t) {
                return function (t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                }(this, o), i.call(this, t, ll)
            }

            return e = o, (n = [{
                key: "getGridContainer", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("flex", "flex-col", "w-full"), this.options.object_indent || t.classList.add("je-noindent"), t
                }
            }, {
                key: "getGridRow", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("flex", "flex-wrap", "w-full"), t
                }
            }, {
                key: "getGridColumn", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("flex", "flex-col"), t
                }
            }, {
                key: "setGridColumnSize", value: function (t, e, n) {
                    e > 0 && e < 12 ? t.classList.add("w-".concat(e, "/12"), "px-1") : t.classList.add("w-full", "px-1"), n && (t.style.marginLeft = "".concat(100 / 12 * n, "%"))
                }
            }, {
                key: "getIndentedPanel", value: function () {
                    var t = document.createElement("div");
                    return this.options.object_panel_default ? t.classList.add("w-full", "p-1") : t.classList.add("relative", "flex", "flex-col", "rounded", "break-words", "border", "bg-white", "border-0", "border-blue-400", "p-1", "shadow-md"), this.options.object_border && t.classList.add("je-border"), t
                }
            }, {
                key: "getTopIndentedPanel", value: function () {
                    var t = document.createElement("div");
                    return this.options.object_panel_default ? t.classList.add("w-full", "m-2") : t.classList.add("relative", "flex", "flex-col", "rounded", "break-words", "border", "bg-white", "border-0", "border-blue-400", "p-1", "shadow-md"), this.options.object_border && t.classList.add("je-border"), t
                }
            }, {
                key: "getTitle", value: function () {
                    return this.translateProperty(this.schema.title)
                }
            }, {
                key: "getSelectInput", value: function (t, e) {
                    var n = rl(sl(o.prototype), "getSelectInput", this).call(this, t);
                    return e ? n.classList.add("form-multiselect", "block", "py-0", "h-auto", "w-full", "px-1", "text-sm", "text-black", "leading-normal", "bg-white", "border", "border-grey", "rounded") : n.classList.add("form-select", "block", "py-0", "h-6", "w-full", "px-1", "text-sm", "text-black", "leading-normal", "bg-white", "border", "border-grey", "rounded"), this.options.enable_compact && n.classList.add("compact"), n
                }
            }, {
                key: "afterInputReady", value: function (t) {
                    t.controlgroup || (t.controlgroup = this.closest(t, ".form-group"), this.closest(t, ".compact") && (t.controlgroup.style.marginBottom = 0))
                }
            }, {
                key: "getTextareaInput", value: function () {
                    var t = rl(sl(o.prototype), "getTextareaInput", this).call(this);
                    return t.classList.add("block", "w-full", "px-1", "text-sm", "leading-normal", "bg-white", "text-black", "border", "border-grey", "rounded"), this.options.enable_compact && t.classList.add("compact"), t.style.height = 0, t
                }
            }, {
                key: "getRangeInput", value: function (t, e, n) {
                    var r = this.getFormInputField("range");
                    return r.classList.add("slider"), this.options.enable_compact && r.classList.add("compact"), r.setAttribute("oninput", 'this.setAttribute("value", this.value)'), r.setAttribute("min", t), r.setAttribute("max", e), r.setAttribute("step", n), r
                }
            }, {
                key: "getRangeControl", value: function (t, e) {
                    var n = rl(sl(o.prototype), "getRangeControl", this).call(this, t, e);
                    return n.classList.add("text-center", "text-black"), n
                }
            }, {
                key: "getCheckbox", value: function () {
                    var t = this.getFormInputField("checkbox");
                    return t.classList.add("form-checkbox", "text-red-600"), t
                }
            }, {
                key: "getCheckboxLabel", value: function (t, e) {
                    var n = rl(sl(o.prototype), "getCheckboxLabel", this).call(this, t, e);
                    return n.classList.add("inline-flex", "items-center"), n
                }
            }, {
                key: "getFormCheckboxControl", value: function (t, e, n) {
                    return t.insertBefore(e, t.firstChild), n && t.classList.add("inline-flex flex-row"), t
                }
            }, {
                key: "getMultiCheckboxHolder", value: function (t, e, n, r) {
                    var i = rl(sl(o.prototype), "getMultiCheckboxHolder", this).call(this, t, e, n, r);
                    return i.classList.add("inline-flex", "flex-col"), i
                }
            }, {
                key: "getFormRadio", value: function (t) {
                    var e = this.getFormInputField("radio");
                    for (var n in e.classList.add("form-radio", "text-red-600"), t) e.setAttribute(n, t[n]);
                    return e
                }
            }, {
                key: "getFormRadioLabel", value: function (t, e) {
                    var n = rl(sl(o.prototype), "getFormRadioLabel", this).call(this, t, e);
                    return n.classList.add("inline-flex", "items-center", "mr-2"), n
                }
            }, {
                key: "getFormRadioControl", value: function (t, e, n) {
                    return t.insertBefore(e, t.firstChild), n && t.classList.add("form-radio"), t
                }
            }, {
                key: "getRadioHolder", value: function (t, e, n, r, i) {
                    var a = rl(sl(o.prototype), "getRadioHolder", this).call(this, e, n, r, i);
                    return "h" === t.options.layout ? a.classList.add("inline-flex", "flex-row") : a.classList.add("inline-flex", "flex-col"), a
                }
            }, {
                key: "getFormInputLabel", value: function (t, e) {
                    var n = rl(sl(o.prototype), "getFormInputLabel", this).call(this, t, e);
                    return this.options.label_bold ? n.classList.add("font-bold") : n.classList.add("required"), n
                }
            }, {
                key: "getFormInputField", value: function (t) {
                    var e = rl(sl(o.prototype), "getFormInputField", this).call(this, t);
                    return ["checkbox", "radio"].includes(t) || e.classList.add("block", "w-full", "px-1", "text-black", "text-sm", "leading-normal", "bg-white", "border", "border-grey", "rounded"), this.options.enable_compact && e.classList.add("compact"), e
                }
            }, {
                key: "getFormInputDescription", value: function (t) {
                    var e = document.createElement("p");
                    return e.classList.add("block", "mt-1", "text-xs"), window.DOMPurify ? e.innerHTML = window.DOMPurify.sanitize(t) : e.textContent = this.cleanText(t), e
                }
            }, {
                key: "getFormControl", value: function (t, e, n, r) {
                    var i = document.createElement("div");
                    return i.classList.add("form-group", "mb-1", "w-full"), t && (t.classList.add("text-xs"), "checkbox" === e.type && (e.classList.add("form-checkbox", "text-xs", "text-red-600", "mr-1"), t.classList.add("items-center", "flex"), t = this.getFormCheckboxControl(t, e, !1, r)), "radio" === e.type && (e.classList.add("form-radio", "text-red-600", "mr-1"), t.classList.add("items-center", "flex"), t = this.getFormRadioControl(t, e, !1, r)), i.appendChild(t), !["checkbox", "radio"].includes(e.type) && r && i.appendChild(r)), ["checkbox", "radio"].includes(e.type) || ("small" === this.options.input_size ? e.classList.add("text-xs") : "normal" === this.options.input_size ? e.classList.add("text-base") : "large" === this.options.input_size && e.classList.add("text-xl"), i.appendChild(e)), n && i.appendChild(n), i
                }
            }, {
                key: "getHeaderButtonHolder", value: function () {
                    var t = this.getButtonHolder();
                    return t.classList.add("text-sm"), t
                }
            }, {
                key: "getButtonHolder", value: function () {
                    var t = document.createElement("div");
                    return t.classList.add("flex", "relative", "inline-flex", "align-middle"), t
                }
            }, {
                key: "getButton", value: function (t, e, n) {
                    var r = rl(sl(o.prototype), "getButton", this).call(this, t, e, n);
                    return r.classList.add("inline-block", "align-middle", "text-center", "text-sm", "bg-blue-700", "text-white", "py-1", "pr-1", "m-2", "shadow", "select-none", "whitespace-no-wrap", "rounded"), r
                }
            }, {
                key: "getInfoButton", value: function (t) {
                    var e = document.createElement("a");
                    e.classList.add("tooltips", "float-right"), e.innerHTML = "ⓘ";
                    var n = document.createElement("span");
                    return n.innerHTML = t, e.appendChild(n), e
                }
            }, {
                key: "getTable", value: function () {
                    var t = rl(sl(o.prototype), "getTable", this).call(this);
                    return this.options.table_border ? t.classList.add("je-table-border") : t.classList.add("table", "border", "p-0"), t
                }
            }, {
                key: "getTableRow", value: function () {
                    var t = rl(sl(o.prototype), "getTableRow", this).call(this);
                    return this.options.table_border && t.classList.add("je-table-border"), this.options.table_zebrastyle && t.classList.add("je-table-zebra"), t
                }
            }, {
                key: "getTableHeaderCell", value: function (t) {
                    var e = rl(sl(o.prototype), "getTableHeaderCell", this).call(this, t);
                    return this.options.table_border ? e.classList.add("je-table-border") : this.options.table_hdiv ? e.classList.add("je-table-hdiv") : e.classList.add("text-xs", "border", "p-0", "m-0"), e
                }
            }, {
                key: "getTableCell", value: function () {
                    var t = rl(sl(o.prototype), "getTableCell", this).call(this);
                    return this.options.table_border ? t.classList.add("je-table-border") : this.options.table_hdiv ? t.classList.add("je-table-hdiv") : t.classList.add("border-0", "p-0", "m-0"), t
                }
            }, {
                key: "addInputError", value: function (t, e) {
                    t.controlgroup && (t.controlgroup.classList.add("has-error"), t.classList.add("bg-red-600"), t.errmsg ? t.errmsg.style.display = "" : (t.errmsg = document.createElement("p"), t.errmsg.classList.add("block", "mt-1", "text-xs", "text-red"), t.controlgroup.appendChild(t.errmsg)), t.errmsg.textContent = e)
                }
            }, {
                key: "removeInputError", value: function (t) {
                    t.errmsg && (t.errmsg.style.display = "none", t.classList.remove("bg-red-600"), t.controlgroup.classList.remove("has-error"))
                }
            }, {
                key: "getTabHolder", value: function (t) {
                    var e = document.createElement("div"), n = void 0 === t ? "" : t;
                    return e.innerHTML = "<div class='w-2/12' id='".concat(n, "'><ul class='list-reset pl-0 mb-0'></ul></div><div class='w-10/12' id='").concat(n, "'></div>"), e.classList.add("flex"), e
                }
            }, {
                key: "addTab", value: function (t, e) {
                    t.children[0].children[0].appendChild(e)
                }
            }, {
                key: "getTopTabHolder", value: function (t) {
                    var e = void 0 === t ? "" : t, n = document.createElement("div");
                    return n.innerHTML = "<ul class='nav-tabs flex list-reset pl-0 mb-0 border-b border-grey-light' id='".concat(e, "'></ul><div class='p-6 block' id='").concat(e, "'></div>"), n
                }
            }, {
                key: "getTab", value: function (t, e) {
                    var n = document.createElement("li");
                    n.classList.add("nav-item", "flex-col", "text-center", "text-white", "bg-blue-500", "shadow-md", "border", "p-2", "mb-2", "mr-2", "hover:bg-blue-400", "rounded");
                    var r = document.createElement("a");
                    return r.classList.add("nav-link", "text-center"), r.setAttribute("href", "#".concat(e)), r.setAttribute("data-toggle", "tab"), r.appendChild(t), n.appendChild(r), n
                }
            }, {
                key: "getTopTab", value: function (t, e) {
                    var n = document.createElement("li");
                    n.classList.add("nav-item", "flex", "border-l", "border-t", "border-r");
                    var r = document.createElement("a");
                    return r.classList.add("nav-link", "-mb-px", "flex-row", "text-center", "bg-white", "p-2", "hover:bg-blue-400", "rounded-t"), r.setAttribute("href", "#".concat(e)), r.setAttribute("data-toggle", "tab"), r.appendChild(t), n.appendChild(r), n
                }
            }, {
                key: "getTabContent", value: function () {
                    var t = document.createElement("div");
                    return t.setAttribute("role", "tabpanel"), t
                }
            }, {
                key: "getTopTabContent", value: function () {
                    var t = document.createElement("div");
                    return t.setAttribute("role", "tabpanel"), t
                }
            }, {
                key: "markTabActive", value: function (t) {
                    t.tab.firstChild.classList.add("block"), !0 === t.tab.firstChild.classList.contains("border-b") ? (t.tab.firstChild.classList.add("border-b-0"), t.tab.firstChild.classList.remove("border-b")) : t.tab.firstChild.classList.add("border-b-0"), !0 === t.container.classList.contains("hidden") ? (t.container.classList.remove("hidden"), t.container.classList.add("block")) : t.container.classList.add("block")
                }
            }, {
                key: "markTabInactive", value: function (t) {
                    !0 === t.tab.firstChild.classList.contains("border-b-0") ? (t.tab.firstChild.classList.add("border-b"), t.tab.firstChild.classList.remove("border-b-0")) : t.tab.firstChild.classList.add("border-b"), !0 === t.container.classList.contains("block") && (t.container.classList.remove("block"), t.container.classList.add("hidden"))
                }
            }, {
                key: "getProgressBar", value: function () {
                    var t = document.createElement("div");
                    t.classList.add("progress");
                    var e = document.createElement("div");
                    return e.classList.add("bg-blue", "leading-none", "py-1", "text-xs", "text-center", "text-white"), e.setAttribute("role", "progressbar"), e.setAttribute("aria-valuenow", 0), e.setAttribute("aria-valuemin", 0), e.setAttribute("aria-valuenax", 100), e.innerHTML = "".concat(0, "%"), t.appendChild(e), t
                }
            }, {
                key: "updateProgressBar", value: function (t, e) {
                    if (t) {
                        var n = t.firstChild, r = "".concat(e, "%");
                        n.setAttribute("aria-valuenow", e), n.style.width = r, n.innerHTML = r
                    }
                }
            }, {
                key: "updateProgressBarUnknown", value: function (t) {
                    if (t) {
                        var e = t.firstChild;
                        t.classList.add("progress", "bg-blue", "leading-none", "py-1", "text-xs", "text-center", "text-white", "block"), e.removeAttribute("aria-valuenow"), e.classList.add("w-full"), e.innerHTML = ""
                    }
                }
            }, {
                key: "getInputGroup", value: function (t, e) {
                    if (t) {
                        var n = document.createElement("div");
                        n.classList.add("relative", "items-stretch", "w-full"), n.appendChild(t);
                        var r = document.createElement("div");
                        r.classList.add("-mr-1"), n.appendChild(r);
                        for (var i = 0; i < e.length; i++) r.appendChild(e[i]);
                        return n
                    }
                }
            }]) && nl(e.prototype, n), r && nl(e, r), o
        }(Xa);
        cl.rules = {
            ".slider": "-webkit-appearance:none;-moz-appearance:none;appearance:none;background:transparent;display:block;border:none;height:1.2rem;width:100%25",
            ".slider:focus": "box-shadow:0%200%200%200%20rgba(87%2C%2085%2C%20217%2C%200.2);outline:none",
            ".slider.tooltip:not([data-tooltip])::after": "content:attr(value)",
            ".slider::-webkit-slider-thumb": "-webkit-appearance:none;background:%23f17405;border-radius:100%25;height:0.6rem;margin-top:-0.25rem;transition:transform%200.2s;width:0.6rem",
            ".slider:active::-webkit-slider-thumb": "transform:scale(1.25);outline:none",
            ".slider::-webkit-slider-runnable-track": "background:%23b2b4b6;border-radius:0.1rem;height:0.1rem;width:100%25",
            "a.tooltips": "position:relative;display:inline",
            "a.tooltips span": "position:absolute;white-space:nowrap;width:auto;padding-left:1rem;padding-right:1rem;color:%23ffffff;background:rgba(56%2C%2056%2C%2056%2C%200.85);height:1.5rem;line-height:1.5rem;text-align:center;visibility:hidden;border-radius:3px",
            "a.tooltips span:after": "content:%22%22;position:absolute;top:50%25;left:100%25;margin-top:-5px;width:0;height:0;border-left:5px%20solid%20rgba(56%2C%2056%2C%2056%2C%200.85);border-top:5px%20solid%20transparent;border-bottom:5px%20solid%20transparent",
            "a:hover.tooltips span": "visibility:visible;opacity:0.9;font-size:0.8rem;right:100%25;top:50%25;margin-top:-12px;margin-right:10px;z-index:999",
            ".json-editor-btntype-properties + div": "font-size:0.8rem;font-weight:normal",
            textarea: "width:100%25;min-height:2rem;resize:vertical",
            table: "width:100%25;border-collapse:collapse",
            ".table td": "padding:0rem%200rem",
            "div[data-schematype]:not([data-schematype='object'])": "transition:0.5s",
            "div[data-schematype]:not([data-schematype='object']):hover": "background-color:%23e6f4fe",
            "div[data-schemaid='root']": "position:relative;width:inherit;display:inherit;overflow-x:hidden;z-index:10",
            "select[multiple]": "height:auto",
            "select[multiple].from-select": "height:auto",
            ".je-table-zebra:nth-child(even)": "background-color:%23f2f2f2",
            ".je-table-border": "border:0.5px%20solid%20black",
            ".je-table-hdiv": "border-bottom:1px%20solid%20black",
            ".je-border": "border:0.05rem%20solid%20%233182ce",
            ".je-panel": "width:inherit;padding:0.2rem;margin:0.2rem;background-color:rgba(218%2C%20222%2C%20228%2C%200.1)",
            ".je-panel-top": "width:100%25;padding:0.2rem;margin:0.2rem;background-color:rgba(218%2C%20222%2C%20228%2C%200.1)",
            ".required:after": "content:%22%20*%22;color:red;font:inherit;font-weight:bold",
            ".je-desc": "font-size:smaller;margin:0.2rem%200",
            ".container-xl.je-noindent": "padding-left:0;padding-right:0",
            ".json-editor-btntype-add": "color:white;margin:0.3rem;padding:0.3rem%200.8rem;background-color:%234299e1;box-shadow:3px%203px%205px%201px%20rgba(4%2C%204%2C%204%2C%200.2);-webkit-box-shadow:3px%203px%205px%201px%20rgba(4%2C%204%2C%204%2C%200.2);-moz-box-shadow:3px%203px%205px%201px%20rgba(4%2C%204%2C%204%2C%200.2)",
            ".json-editor-btntype-deletelast": "color:white;margin:0.3rem;padding:0.3rem%200.8rem;background-color:%23e53e3e;box-shadow:3px%203px%205px%201px%20rgba(4%2C%204%2C%204%2C%200.2);-webkit-box-shadow:3px%203px%205px%201px%20rgba(4%2C%204%2C%204%2C%200.2);-moz-box-shadow:3px%203px%205px%201px%20rgba(4%2C%204%2C%204%2C%200.2)",
            ".json-editor-btntype-deleteall": "color:white;margin:0.3rem;padding:0.3rem%200.8rem;background-color:%23000000;box-shadow:3px%203px%205px%201px%20rgba(4%2C%204%2C%204%2C%200.2);-webkit-box-shadow:3px%203px%205px%201px%20rgba(4%2C%204%2C%204%2C%200.2);-moz-box-shadow:3px%203px%205px%201px%20rgba(4%2C%204%2C%204%2C%200.2)",
            ".json-editor-btn-save": "float:right;color:white;margin:0.3rem;padding:0.3rem%200.8rem;background-color:%232b6cb0;box-shadow:3px%203px%205px%201px%20rgba(4%2C%204%2C%204%2C%200.2);-webkit-box-shadow:3px%203px%205px%201px%20rgba(4%2C%204%2C%204%2C%200.2);-moz-box-shadow:3px%203px%205px%201px%20rgba(4%2C%204%2C%204%2C%200.2)",
            ".json-editor-btn-back": "color:white;margin:0.3rem;padding:0.3rem%200.8rem;background-color:%232b6cb0;box-shadow:3px%203px%205px%201px%20rgba(4%2C%204%2C%204%2C%200.2);-webkit-box-shadow:3px%203px%205px%201px%20rgba(4%2C%204%2C%204%2C%200.2);-moz-box-shadow:3px%203px%205px%201px%20rgba(4%2C%204%2C%204%2C%200.2)",
            ".json-editor-btntype-delete": "color:%23e53e3e;background-color:rgba(218%2C%20222%2C%20228%2C%200.1);margin:0.03rem;padding:0.1rem",
            ".json-editor-btntype-move": "color:%23000000;background-color:rgba(218%2C%20222%2C%20228%2C%200.1);margin:0.03rem;padding:0.1rem",
            ".json-editor-btn-collapse": "padding:0em%200.8rem;font-size:1.3rem;color:%23e53e3e;background-color:rgba(218%2C%20222%2C%20228%2C%200.1)",
            ".je-upload-preview img": "float:left;margin:0%200.5rem%200.5rem%200;max-width:100%25;max-height:5rem",
            ".je-dropzone": "position:relative;margin:0.5rem%200;border:2px%20dashed%20black;width:100%25;height:60px;background:teal;transition:all%200.5s",
            ".je-dropzone:before": "position:absolute;content:attr(data-text);color:rgba(0%2C%200%2C%200%2C%200.6);left:50%25;top:50%25;transform:translate(-50%25%2C%20-50%25)",
            ".je-dropzone.valid-dropzone": "background:green",
            ".je-dropzone.invalid-dropzone": "background:red"
        };
        var ul = {html: ls, bootstrap3: gs, bootstrap4: Ss, jqueryui: Fs, barebones: Gs, spectre: tl, tailwind: cl},
            hl = {
                ".je-float-right-linkholder": "float:right;margin-left:10px",
                ".je-modal": "background-color:white;border:1px%20solid%20black;box-shadow:3px%203px%20black;position:absolute;z-index:10",
                ".je-infobutton-icon": "font-size:16px;font-weight:bold;padding:0.25rem;position:relative;display:inline-block",
                ".je-infobutton-tooltip": "font-size:12px;font-weight:normal;font-family:sans-serif;visibility:hidden;background-color:rgba(50%2C%2050%2C%2050%2C%200.75);margin:0%200.25rem;color:%23fafafa;padding:0.5rem%201rem;border-radius:0.25rem;width:20rem;position:absolute",
                ".je-not-loaded": "pointer-events:none",
                ".je-header": "display:inline-block",
                ".je-upload-preview img": "float:left;margin:0%200.5rem%200.5rem%200;max-width:100%25;max-height:5rem",
                ".je-checkbox": "display:inline-block;width:auto",
                ".je-checkbox-control--compact": "display:inline-block;margin-right:1rem",
                ".je-radio": "display:inline-block;width:auto",
                ".je-radio-control--compact": "display:inline-block;margin-right:1rem",
                ".je-switcher": "background-color:transparent;display:inline-block;font-style:italic;font-weight:normal;height:auto;width:auto;margin-bottom:0;margin-left:5px;padding:0%200%200%203px",
                ".je-textarea": "width:100%25;height:300px;box-sizing:border-box",
                ".je-range-control": "text-align:center",
                ".je-indented-panel": "padding-left:10px;margin-left:10px;border-left:1px%20solid%20%23ccc",
                ".je-indented-panel--top": "padding-left:10px;margin-left:10px",
                ".je-tabholder": "float:left;width:130px",
                ".je-tabholder .content": "margin-left:120px",
                ".je-tabholder--top": "margin-left:10px",
                ".je-tabholder--clear": "clear:both",
                ".je-tab": "border:1px%20solid%20%23ccc;border-width:1px%200%201px%201px;text-align:center;line-height:30px;border-radius:5px;border-bottom-right-radius:0;border-top-right-radius:0;font-weight:bold;cursor:pointer",
                ".je-tab--top": "float:left;border:1px%20solid%20%23ccc;border-width:1px%201px%200px%201px;text-align:center;line-height:30px;border-radius:5px;padding-left:5px;padding-right:5px;border-bottom-right-radius:0;border-bottom-left-radius:0;font-weight:bold;cursor:pointer",
                ".je-block-link": "display:block",
                ".je-media": "width:100%25"
            };

        function pl(t) {
            return function (t) {
                if (Array.isArray(t)) return dl(t)
            }(t) || function (t) {
                if ("undefined" != typeof Symbol && null != t[Symbol.iterator] || null != t["@@iterator"]) return Array.from(t)
            }(t) || function (t, e) {
                if (!t) return;
                if ("string" == typeof t) return dl(t, e);
                var n = Object.prototype.toString.call(t).slice(8, -1);
                "Object" === n && t.constructor && (n = t.constructor.name);
                if ("Map" === n || "Set" === n) return Array.from(t);
                if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return dl(t, e)
            }(t) || function () {
                throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }()
        }

        function dl(t, e) {
            (null == e || e > t.length) && (e = t.length);
            for (var n = 0, r = new Array(e); n < e; n++) r[n] = t[n];
            return r
        }

        function fl(t, e, n, r, i, o, a) {
            try {
                var s = t[o](a), l = s.value
            } catch (t) {
                return void n(t)
            }
            s.done ? e(l) : Promise.resolve(l).then(r, i)
        }

        function yl(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function ml(t, e) {
            for (var n = 0; n < e.length; n++) {
                var r = e[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r)
            }
        }

        var vl = function () {
            function t(e) {
                var n = this, r = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                if (yl(this, t), !(e instanceof Element)) throw new Error("element should be an instance of Element");
                this.element = e, this.options = f({}, t.defaults.options, r), this.ready = !1, this.copyClipboard = null, this.schema = this.options.schema, this.template = this.options.template, this.translate = this.options.translate || t.defaults.translate, this.translateProperty = this.options.translateProperty || t.defaults.translateProperty, this.uuid = 0, this.__data = {};
                var i = this.options.theme || t.defaults.theme, o = t.defaults.themes[i];
                if (!o) throw new Error("Unknown theme ".concat(i));
                this.element.setAttribute("data-theme", i), this.element.classList.add("je-not-loaded"), this.element.classList.remove("je-ready"), this.theme = new o(this);
                var a = f(hl, this.getEditorsRules()), s = function (t, e, r) {
                    return r ? n.addNewStyleRulesToShadowRoot(t, e, r) : n.addNewStyleRules(t, e)
                };
                if (!this.theme.options.disable_theme_rules) {
                    var l = m(this.element);
                    s("default", a, l), void 0 !== o.rules && s(i, o.rules, l)
                }
                var c = t.defaults.iconlibs[this.options.iconlib || t.defaults.iconlib];
                c && (this.iconlib = new c), this.root_container = this.theme.getContainer(), this.element.appendChild(this.root_container), this.promise = this.load()
            }

            var e, n, r, i, o;
            return e = t, (n = [{
                key: "load", value: (i = regeneratorRuntime.mark((function e() {
                    var n, r, i, o, a, s, l = this;
                    return regeneratorRuntime.wrap((function (e) {
                        for (; ;) switch (e.prev = e.next) {
                            case 0:
                                return n = document.location.origin + document.location.pathname.toString(), r = new V(this.options), this.expandSchema = function (t) {
                                    return r.expandSchema(t)
                                }, this.expandRefs = function (t, e) {
                                    return r.expandRefs(t, e)
                                }, i = document.location.toString(), e.next = 7, r.load(this.schema, n, i);
                            case 7:
                                o = e.sent, a = this.options.custom_validators ? {custom_validators: this.options.custom_validators} : {}, this.validator = new L(this, null, a, t.defaults), s = this.getEditorClass(o), this.root = this.createEditor(s, {
                                    jsoneditor: this,
                                    schema: o,
                                    required: !0,
                                    container: this.root_container
                                }), this.root.preBuild(), this.root.build(), this.root.postBuild(), v(this.options, "startval") && this.root.setValue(this.options.startval), this.validation_results = this.validator.validate(this.root.getValue()), this.root.showValidationErrors(this.validation_results), this.ready = !0, this.element.classList.remove("je-not-loaded"), this.element.classList.add("je-ready"), window.requestAnimationFrame((function () {
                                    l.ready && (l.validation_results = l.validator.validate(l.root.getValue()), l.root.showValidationErrors(l.validation_results), l.trigger("ready"), l.trigger("change"))
                                }));
                            case 22:
                            case"end":
                                return e.stop()
                        }
                    }), e, this)
                })), o = function () {
                    var t = this, e = arguments;
                    return new Promise((function (n, r) {
                        var o = i.apply(t, e);

                        function a(t) {
                            fl(o, n, r, a, s, "next", t)
                        }

                        function s(t) {
                            fl(o, n, r, a, s, "throw", t)
                        }

                        a(void 0)
                    }))
                }, function () {
                    return o.apply(this, arguments)
                })
            }, {
                key: "getValue", value: function () {
                    if (!this.ready) throw new Error("JSON Editor not ready yet. Make sure the load method is complete");
                    return this.root.getValue()
                }
            }, {
                key: "setValue", value: function (t) {
                    if (!this.ready) throw new Error("JSON Editor not ready yet. Make sure the load method is complete");
                    return this.root.setValue(t), this
                }
            }, {
                key: "validate", value: function (t) {
                    if (!this.ready) throw new Error("JSON Editor not ready yet. Make sure the load method is complete");
                    return 1 === arguments.length ? this.validator.validate(t) : this.validation_results
                }
            }, {
                key: "destroy", value: function () {
                    this.destroyed || this.ready && (this.schema = null, this.options = null, this.root.destroy(), this.root = null, this.root_container = null, this.validator = null, this.validation_results = null, this.theme = null, this.iconlib = null, this.template = null, this.__data = null, this.ready = !1, this.element.innerHTML = "", this.element.removeAttribute("data-theme"), this.destroyed = !0)
                }
            }, {
                key: "on", value: function (t, e) {
                    return this.callbacks = this.callbacks || {}, this.callbacks[t] = this.callbacks[t] || [], this.callbacks[t].push(e), this
                }
            }, {
                key: "off", value: function (t, e) {
                    if (t && e) {
                        this.callbacks = this.callbacks || {}, this.callbacks[t] = this.callbacks[t] || [];
                        for (var n = [], r = 0; r < this.callbacks[t].length; r++) this.callbacks[t][r] !== e && n.push(this.callbacks[t][r]);
                        this.callbacks[t] = n
                    } else t ? (this.callbacks = this.callbacks || {}, this.callbacks[t] = []) : this.callbacks = {};
                    return this
                }
            }, {
                key: "trigger", value: function (t, e) {
                    if (this.callbacks && this.callbacks[t] && this.callbacks[t].length) for (var n = 0; n < this.callbacks[t].length; n++) this.callbacks[t][n].apply(this, [e]);
                    return this
                }
            }, {
                key: "setOption", value: function (t, e) {
                    if ("show_errors" !== t) throw new Error("Option ".concat(t, " must be set during instantiation and cannot be changed later"));
                    return this.options.show_errors = e, this.onChange(), this
                }
            }, {
                key: "getEditorsRules", value: function () {
                    return Object.values(t.defaults.editors).reduce((function (t, e) {
                        return e.rules ? f(t, e.rules) : t
                    }), {})
                }
            }, {
                key: "getEditorClass", value: function (e) {
                    var n;
                    if (e = this.expandSchema(e), t.defaults.resolvers.find((function (r) {
                        return (n = r(e)) && t.defaults.editors[n]
                    })), !n) throw new Error("Unknown editor for schema ".concat(JSON.stringify(e)));
                    if (!t.defaults.editors[n]) throw new Error("Unknown editor ".concat(n));
                    return t.defaults.editors[n]
                }
            }, {
                key: "createEditor", value: function (e, n) {
                    var r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 1;
                    return new e(n = f({}, e.options || {}, n), t.defaults, r)
                }
            }, {
                key: "onChange", value: function () {
                    var t = this;
                    if (this.ready && !this.firing_change) return this.firing_change = !0, window.requestAnimationFrame((function () {
                        t.firing_change = !1, t.ready && (t.validation_results = t.validator.validate(t.root.getValue()), "never" !== t.options.show_errors ? t.root.showValidationErrors(t.validation_results) : t.root.showValidationErrors([]), t.trigger("change"))
                    })), this
                }
            }, {
                key: "compileTemplate", value: function (e) {
                    var n, r = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : t.defaults.template;
                    if ("string" == typeof r) {
                        if (!t.defaults.templates[r]) throw new Error("Unknown template engine ".concat(r));
                        if (!(n = t.defaults.templates[r]())) throw new Error("Template engine ".concat(r, " missing required library."))
                    } else n = r;
                    if (!n) throw new Error("No template engine set");
                    if (!n.compile) throw new Error("Invalid template engine set");
                    return n.compile(e)
                }
            }, {
                key: "_data", value: function (t, e, n) {
                    if (3 !== arguments.length) return t.hasAttribute("data-jsoneditor-".concat(e)) ? this.__data[t.getAttribute("data-jsoneditor-".concat(e))] : null;
                    var r;
                    t.hasAttribute("data-jsoneditor-".concat(e)) ? r = t.getAttribute("data-jsoneditor-".concat(e)) : (r = this.uuid++, t.setAttribute("data-jsoneditor-".concat(e), r)), this.__data[r] = n
                }
            }, {
                key: "registerEditor", value: function (t) {
                    return this.editors = this.editors || {}, this.editors[t.path] = t, this
                }
            }, {
                key: "unregisterEditor", value: function (t) {
                    return this.editors = this.editors || {}, this.editors[t.path] = null, this
                }
            }, {
                key: "getEditor", value: function (t) {
                    if (this.editors) return this.editors[t]
                }
            }, {
                key: "watch", value: function (t, e) {
                    return this.watchlist = this.watchlist || {}, this.watchlist[t] = this.watchlist[t] || [], this.watchlist[t].push(e), this
                }
            }, {
                key: "unwatch", value: function (t, e) {
                    if (!this.watchlist || !this.watchlist[t]) return this;
                    if (!e) return this.watchlist[t] = null, this;
                    for (var n = [], r = 0; r < this.watchlist[t].length; r++) this.watchlist[t][r] !== e && n.push(this.watchlist[t][r]);
                    return this.watchlist[t] = n.length ? n : null, this
                }
            }, {
                key: "notifyWatchers", value: function (t) {
                    if (!this.watchlist || !this.watchlist[t]) return this;
                    for (var e = 0; e < this.watchlist[t].length; e++) this.watchlist[t][e]()
                }
            }, {
                key: "isEnabled", value: function () {
                    return !this.root || this.root.isEnabled()
                }
            }, {
                key: "enable", value: function () {
                    this.root.enable()
                }
            }, {
                key: "disable", value: function () {
                    this.root.disable()
                }
            }, {
                key: "setCopyClipboardContents", value: function (t) {
                    this.copyClipboard = t
                }
            }, {
                key: "getCopyClipboardContents", value: function () {
                    return this.copyClipboard
                }
            }, {
                key: "addNewStyleRules", value: function (t, e) {
                    var n = document.querySelector("#theme-".concat(t));
                    n || ((n = document.createElement("style")).setAttribute("id", "theme-".concat(t)), n.appendChild(document.createTextNode("")), document.head.appendChild(n));
                    for (var r = n.sheet ? n.sheet : n.styleSheet, i = this.element.nodeName.toLowerCase(); r.cssRules.length > 0;) r.deleteRule(0);
                    Object.keys(e).forEach((function (n) {
                        var o = "default" === t ? n : "".concat(i, '[data-theme="').concat(t, '"] ').concat(n);
                        r.insertRule ? r.insertRule(o + " {" + decodeURIComponent(e[n]) + "}", 0) : r.addRule && r.addRule(o, decodeURIComponent(e[n]), 0)
                    }))
                }
            }, {
                key: "addNewStyleRulesToShadowRoot", value: function (t, e, n) {
                    var r = this.element.nodeName.toLowerCase(), i = "";
                    Object.keys(e).forEach((function (n) {
                        var o = "default" === t ? n : "".concat(r, '[data-theme="').concat(t, '"] ').concat(n);
                        i += o + " {" + decodeURIComponent(e[n]) + "}\n"
                    }));
                    var o = new CSSStyleSheet;
                    o.replaceSync(i), n.adoptedStyleSheets = [].concat(pl(n.adoptedStyleSheets), [o])
                }
            }]) && ml(e.prototype, n), r && ml(e, r), t
        }();
        vl.defaults = c, vl.AbstractEditor = q, vl.AbstractTheme = Xa, vl.AbstractIconLib = aa, Object.assign(vl.defaults.themes, ul), Object.assign(vl.defaults.editors, Xo), Object.assign(vl.defaults.templates, ta), Object.assign(vl.defaults.iconlibs, Za)
    }])
}));
