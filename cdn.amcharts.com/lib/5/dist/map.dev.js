"use strict";

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _templateObject4() {
  var data = _taggedTemplateLiteral(["m0,", "a", ",", " 0 1,1 0,", "a", ",", " 0 1,1 0,", "z"]);

  _templateObject4 = function _templateObject4() {
    return data;
  };

  return data;
}

function _templateObject3() {
  var data = _taggedTemplateLiteral(["M", ",", ""]);

  _templateObject3 = function _templateObject3() {
    return data;
  };

  return data;
}

function _templateObject2() {
  var data = _taggedTemplateLiteral(["L", ",", ""]);

  _templateObject2 = function _templateObject2() {
    return data;
  };

  return data;
}

function _templateObject() {
  var data = _taggedTemplateLiteral(["M", ",", ""]);

  _templateObject = function _templateObject() {
    return data;
  };

  return data;
}

function _taggedTemplateLiteral(strings, raw) { if (!raw) { raw = strings.slice(0); } return Object.freeze(Object.defineProperties(strings, { raw: { value: Object.freeze(raw) } })); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _get(target, property, receiver) { if (typeof Reflect !== "undefined" && Reflect.get) { _get = Reflect.get; } else { _get = function _get(target, property, receiver) { var base = _superPropBase(target, property); if (!base) return; var desc = Object.getOwnPropertyDescriptor(base, property); if (desc.get) { return desc.get.call(receiver); } return desc.value; }; } return _get(target, property, receiver || target); }

function _superPropBase(object, property) { while (!Object.prototype.hasOwnProperty.call(object, property)) { object = _getPrototypeOf(object); if (object === null) break; } return object; }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

(self.webpackChunk_am5 = self.webpackChunk_am5 || []).push([[6842], {
  7533: function _(t, e, n) {
    n.r(e), n.d(e, {
      ClusteredPointSeries: function ClusteredPointSeries() {
        return Yi;
      },
      DefaultTheme: function DefaultTheme() {
        return se;
      },
      GraticuleSeries: function GraticuleSeries() {
        return rt;
      },
      MapChart: function MapChart() {
        return ji;
      },
      MapLine: function MapLine() {
        return Q;
      },
      MapLineSeries: function MapLineSeries() {
        return et;
      },
      MapPointSeries: function MapPointSeries() {
        return Ci;
      },
      MapPolygon: function MapPolygon() {
        return Li;
      },
      MapPolygonSeries: function MapPolygonSeries() {
        return Ti;
      },
      MapSeries: function MapSeries() {
        return a;
      },
      ZoomControl: function ZoomControl() {
        return Bi;
      },
      geoAlbersUsa: function geoAlbersUsa() {
        return Ji;
      },
      geoEqualEarth: function geoEqualEarth() {
        return eo;
      },
      geoEquirectangular: function geoEquirectangular() {
        return Fi;
      },
      geoMercator: function geoMercator() {
        return re;
      },
      geoNaturalEarth1: function geoNaturalEarth1() {
        return io;
      },
      geoOrthographic: function geoOrthographic() {
        return Ai;
      },
      getGeoArea: function getGeoArea() {
        return xi;
      },
      getGeoBounds: function getGeoBounds() {
        return Di;
      },
      getGeoCentroid: function getGeoCentroid() {
        return Pi;
      },
      getGeoCircle: function getGeoCircle() {
        return wi;
      },
      getGeoRectangle: function getGeoRectangle() {
        return Si;
      },
      normalizeGeoPoint: function normalizeGeoPoint() {
        return Ii;
      }
    });
    var i = n(3399),
        o = n(5071),
        r = n(256);

    var a =
    /*#__PURE__*/
    function (_i$F) {
      _inherits(a, _i$F);

      function a() {
        var _this;

        _classCallCheck(this, a);

        _this = _possibleConstructorReturn(this, _getPrototypeOf(a).apply(this, arguments)), Object.defineProperty(_assertThisInitialized(_this), "_types", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: []
        }), Object.defineProperty(_assertThisInitialized(_this), "_geometries", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: []
        }), Object.defineProperty(_assertThisInitialized(_this), "_geoJSONparsed", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: !1
        }), Object.defineProperty(_assertThisInitialized(_this), "_excluded", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: []
        }), Object.defineProperty(_assertThisInitialized(_this), "_notIncluded", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: []
        });
        return _this;
      }

      _createClass(a, [{
        key: "_afterNew",
        value: function _afterNew() {
          var _this2 = this;

          this.fields.push("geometry", "geometryType"), this._setRawDefault("geometryField", "geometry"), this._setRawDefault("geometryTypeField", "geometryType"), this._setRawDefault("idField", "id"), this.on("geoJSON", function (t) {
            var e = _this2._prevSettings.geoJSON;
            e && e != t && _this2.data.clear();
          }), _get(_getPrototypeOf(a.prototype), "_afterNew", this).call(this);
        }
      }, {
        key: "_handleDirties",
        value: function _handleDirties() {
          var t = this.get("geoJSON");
          var e = this._prevSettings.geoJSON;
          e && e != t && (this._prevSettings.geoJSON = void 0, this._geoJSONparsed = !1), this._geoJSONparsed || (this._parseGeoJSON(), this._geoJSONparsed = !0);
        }
      }, {
        key: "_prepareChildren",
        value: function _prepareChildren() {
          var _this3 = this;

          if (_get(_getPrototypeOf(a.prototype), "_prepareChildren", this).call(this), this._valuesDirty && this._handleDirties(), this.get("geoJSON") && (this.isDirty("geoJSON") || this.isDirty("include") || this.isDirty("exclude"))) {
            this._handleDirties();

            var _t2 = this.chart,
                _e2 = this.get("exclude");

            _e2 && (_t2 && (_t2._centerLocation = null), o.each(_e2, function (t) {
              var e = _this3.getDataItemById(t);

              e && _this3._excludeDataItem(e);
            })), _e2 && 0 != _e2.length || (o.each(this._excluded, function (t) {
              _this3._unexcludeDataItem(t);
            }), this._excluded = []);

            var _n2 = this.get("include");

            _n2 && (_t2 && (_t2._centerLocation = null), o.each(this.dataItems, function (t) {
              var e = t.get("id");
              e && -1 == _n2.indexOf(e) ? _this3._notIncludeDataItem(t) : _this3._unNotIncludeDataItem(t);
            })), _n2 || (o.each(this._notIncluded, function (t) {
              _this3._unNotIncludeDataItem(t);
            }), this._notIncluded = []);
          }
        }
      }, {
        key: "_excludeDataItem",
        value: function _excludeDataItem(t) {
          this._removeGeometry(t.get("geometry")), o.move(this._excluded, t);
        }
      }, {
        key: "_unexcludeDataItem",
        value: function _unexcludeDataItem(t) {
          this._addGeometry(t.get("geometry"), this);
        }
      }, {
        key: "_notIncludeDataItem",
        value: function _notIncludeDataItem(t) {
          this._removeGeometry(t.get("geometry")), o.move(this._notIncluded, t);
        }
      }, {
        key: "_unNotIncludeDataItem",
        value: function _unNotIncludeDataItem(t) {
          this._addGeometry(t.get("geometry"), this);
        }
      }, {
        key: "checkInclude",
        value: function checkInclude(t, e, n) {
          if (e) {
            if (0 == e.length) return !1;
            if (-1 == e.indexOf(t)) return !1;
          }

          return !(n && n.length > 0 && -1 != n.indexOf(t));
        }
      }, {
        key: "_parseGeoJSON",
        value: function _parseGeoJSON() {
          var _this4 = this;

          var t = this.get("geoJSON");

          if (t) {
            var _e3;

            "FeatureCollection" == t.type ? _e3 = t.features : "Feature" == t.type ? _e3 = [t] : -1 != ["Point", "LineString", "Polygon", "MultiPoint", "MultiLineString", "MultiPolygon"].indexOf(t.type) ? _e3 = [{
              geometry: t
            }] : console.log("nothing found in geoJSON");

            var _n3 = this.get("geodataNames");

            if (_e3) {
              var _t3 = this.get("idField", "id");

              for (var _i3 = 0, _a = _e3.length; _i3 < _a; _i3++) {
                var _a2 = _e3[_i3],
                    _s = _a2.geometry;

                if (_s) {
                  (function () {
                    var e = _s.type,
                        i = _a2[_t3];

                    if (_n3 && _n3[i] && (_a2.properties.name = _n3[i]), -1 != _this4._types.indexOf(e)) {
                      var _n4, _l;

                      null != i && (_n4 = o.find(_this4.dataItems, function (t) {
                        return t.get("id") == i;
                      })), _n4 && (_l = _n4.dataContext), _n4 ? _l.geometry || (_l.geometry = _s, _l.geometryType = e, _n4.set("geometry", _s), _n4.set("geometryType", e), _this4.processDataItem(_n4)) : (_l = {
                        geometry: _s,
                        geometryType: e,
                        madeFromGeoData: !0
                      }, _l[_t3] = i, _this4.data.push(_l)), r.softCopyProperties(_a2.properties, _l);
                    }
                  })();
                }
              }
            }

            var _i2 = "geodataprocessed";
            this.events.isEnabled(_i2) && this.events.dispatch(_i2, {
              type: _i2,
              target: this
            });
          }
        }
      }, {
        key: "_placeBulletsContainer",
        value: function _placeBulletsContainer(t) {
          this.children.moveValue(this.bulletsContainer);
        }
      }, {
        key: "_removeBulletsContainer",
        value: function _removeBulletsContainer() {}
      }, {
        key: "projection",
        value: function projection() {
          var t = this.chart;
          if (t) return t.get("projection");
        }
      }, {
        key: "geoPath",
        value: function geoPath() {
          var t = this.chart;
          if (t) return t.getPrivate("geoPath");
        }
      }, {
        key: "_addGeometry",
        value: function _addGeometry(t, e) {
          if (t && e.get("affectsBounds", !0)) {
            this._geometries.push(t);

            var _e4 = this.chart;
            _e4 && _e4.markDirtyGeometries();
          }
        }
      }, {
        key: "_removeGeometry",
        value: function _removeGeometry(t) {
          if (t) {
            o.remove(this._geometries, t);
            var _e5 = this.chart;
            _e5 && _e5.markDirtyGeometries();
          }
        }
      }, {
        key: "_dispose",
        value: function _dispose() {
          _get(_getPrototypeOf(a.prototype), "_dispose", this).call(this);

          var t = this.chart;
          t && t.series.removeValue(this);
        }
      }, {
        key: "_onDataClear",
        value: function _onDataClear() {
          _get(_getPrototypeOf(a.prototype), "_onDataClear", this).call(this), this._geoJSONparsed = !1, this._markDirtyKey("exclude");
        }
      }]);

      return a;
    }(i.F);

    Object.defineProperty(a, "className", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: "MapSeries"
    }), Object.defineProperty(a, "classNames", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: i.F.classNames.concat([a.className])
    });
    var s = n(5040),
        l = n(6245),
        u = n(1479);

    var c =
    /*#__PURE__*/
    function () {
      function c() {
        _classCallCheck(this, c);

        this._partials = new Float64Array(32), this._n = 0;
      }

      _createClass(c, [{
        key: "add",
        value: function add(t) {
          var e = this._partials;
          var n = 0;

          for (var _i4 = 0; _i4 < this._n && _i4 < 32; _i4++) {
            var _o = e[_i4],
                _r = t + _o,
                _a3 = Math.abs(t) < Math.abs(_o) ? t - (_r - _o) : _o - (_r - t);

            _a3 && (e[n++] = _a3), t = _r;
          }

          return e[n] = t, this._n = n + 1, this;
        }
      }, {
        key: "valueOf",
        value: function valueOf() {
          var t = this._partials;
          var e,
              n,
              i,
              o = this._n,
              r = 0;

          if (o > 0) {
            for (r = t[--o]; o > 0 && (e = r, n = t[--o], r = e + n, i = n - (r - e), !i);) {
              ;
            }

            o > 0 && (i < 0 && t[o - 1] < 0 || i > 0 && t[o - 1] > 0) && (n = 2 * i, e = r + n, n == e - r && (r = e));
          }

          return r;
        }
      }]);

      return c;
    }();

    var h = 1e-6,
        p = 1e-12,
        f = Math.PI,
        d = f / 2,
        g = f / 4,
        m = 2 * f,
        y = 180 / f,
        v = f / 180,
        _ = Math.abs,
        b = Math.atan,
        w = Math.atan2,
        P = Math.cos,
        x = Math.ceil,
        D = Math.exp,
        S = (Math.floor, Math.hypot),
        I = Math.log,
        M = (Math.pow, Math.sin),
        N = Math.sign || function (t) {
      return t > 0 ? 1 : t < 0 ? -1 : 0;
    },
        j = Math.sqrt,
        C = Math.tan;

    function E(t) {
      return t > 1 ? d : t < -1 ? -d : Math.asin(t);
    }

    function O(t) {
      return (t = M(t / 2)) * t;
    }

    function L() {}

    function T(t, e) {
      t && X.hasOwnProperty(t.type) && X[t.type](t, e);
    }

    var k,
        R,
        z,
        G,
        Y = {
      Feature: function Feature(t, e) {
        T(t.geometry, e);
      },
      FeatureCollection: function FeatureCollection(t, e) {
        for (var n = t.features, i = -1, o = n.length; ++i < o;) {
          T(n[i].geometry, e);
        }
      }
    },
        X = {
      Sphere: function Sphere(t, e) {
        e.sphere();
      },
      Point: function Point(t, e) {
        t = t.coordinates, e.point(t[0], t[1], t[2]);
      },
      MultiPoint: function MultiPoint(t, e) {
        for (var n = t.coordinates, i = -1, o = n.length; ++i < o;) {
          t = n[i], e.point(t[0], t[1], t[2]);
        }
      },
      LineString: function LineString(t, e) {
        B(t.coordinates, e, 0);
      },
      MultiLineString: function MultiLineString(t, e) {
        for (var n = t.coordinates, i = -1, o = n.length; ++i < o;) {
          B(n[i], e, 0);
        }
      },
      Polygon: function Polygon(t, e) {
        Z(t.coordinates, e);
      },
      MultiPolygon: function MultiPolygon(t, e) {
        for (var n = t.coordinates, i = -1, o = n.length; ++i < o;) {
          Z(n[i], e);
        }
      },
      GeometryCollection: function GeometryCollection(t, e) {
        for (var n = t.geometries, i = -1, o = n.length; ++i < o;) {
          T(n[i], e);
        }
      }
    };

    function B(t, e, n) {
      var i,
          o = -1,
          r = t.length - n;

      for (e.lineStart(); ++o < r;) {
        i = t[o], e.point(i[0], i[1], i[2]);
      }

      e.lineEnd();
    }

    function Z(t, e) {
      var n = -1,
          i = t.length;

      for (e.polygonStart(); ++n < i;) {
        B(t[n], e, 1);
      }

      e.polygonEnd();
    }

    function A(t, e) {
      t && Y.hasOwnProperty(t.type) ? Y[t.type](t, e) : T(t, e);
    }

    var W = {
      sphere: L,
      point: L,
      lineStart: function lineStart() {
        W.point = V, W.lineEnd = F;
      },
      lineEnd: L,
      polygonStart: L,
      polygonEnd: L
    };

    function F() {
      W.point = W.lineEnd = L;
    }

    function V(t, e) {
      R = t *= v, z = M(e *= v), G = P(e), W.point = H;
    }

    function H(t, e) {
      t *= v;

      var n = M(e *= v),
          i = P(e),
          o = _(t - R),
          r = P(o),
          a = i * M(o),
          s = G * n - z * i * r,
          l = z * n + G * i * r;

      k.add(w(j(a * a + s * s), l)), R = t, z = n, G = i;
    }

    function J(t) {
      return k = new c(), A(t, W), +k;
    }

    var $ = [null, null],
        U = {
      type: "LineString",
      coordinates: $
    };

    function q(t, e) {
      return $[0] = t, $[1] = e, J(U);
    }

    var Q =
    /*#__PURE__*/
    function (_u$T) {
      _inherits(Q, _u$T);

      function Q() {
        var _this5;

        _classCallCheck(this, Q);

        _this5 = _possibleConstructorReturn(this, _getPrototypeOf(Q).apply(this, arguments)), Object.defineProperty(_assertThisInitialized(_this5), "_projectionDirty", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: !1
        });
        return _this5;
      }

      _createClass(Q, [{
        key: "_beforeChanged",
        value: function _beforeChanged() {
          var _this6 = this;

          if (_get(_getPrototypeOf(Q.prototype), "_beforeChanged", this).call(this), this._projectionDirty || this.isDirty("geometry") || this.isDirty("precision")) {
            var _t4 = this.get("geometry");

            if (_t4) {
              var _e7 = this.getPrivate("series");

              if (_e7) {
                var _n5 = _e7.chart;

                if (_n5) {
                  var _i5 = _n5.get("projection");

                  var _o2 = null;
                  _i5 && _i5.clipAngle && (_o2 = _i5.clipAngle(), _i5.precision(this.get("precision", .5)));

                  var _r2 = this.dataItem,
                      _a4 = _n5.getPrivate("geoPath");

                  if (_a4 && _r2) if (this._clear = !0, "straight" == _r2.get("lineType", _e7.get("lineType"))) {
                    var _t5 = this.get("geometry");

                    if (_t5) {
                      var _e8 = _t5.coordinates;

                      if (_e8) {
                        var _i6;

                        "LineString" == _t5.type ? _i6 = [_e8] : "MultiLineString" == _t5.type && (_i6 = _e8), this.set("draw", function (t) {
                          for (var _e9 = 0; _e9 < _i6.length; _e9++) {
                            var _o3 = _i6[_e9];

                            if (_o3.length > 0) {
                              var _e10 = _o3[0],
                                  _i7 = _n5.convert({
                                longitude: _e10[0],
                                latitude: _e10[1]
                              });

                              t.lineTo(_i7.x, _i7.y);

                              for (var _e11 = 0; _e11 < _o3.length; _e11++) {
                                var _i8 = _o3[_e11],
                                    _r3 = _n5.convert({
                                  longitude: _i8[0],
                                  latitude: _i8[1]
                                });

                                t.lineTo(_r3.x, _r3.y);
                              }
                            }
                          }
                        });
                      }
                    }
                  } else this.set("draw", function (n) {
                    _i5 && !1 === _e7.get("clipBack") && _i5.clipAngle(180), _a4.context(_this6._display), _a4(_t4), _a4.context(null), _i5 && _i5.clipAngle && _i5.clipAngle(_o2);
                  });
                }
              }
            }

            var _e6 = "linechanged";
            this.events.isEnabled(_e6) && this.events.dispatch(_e6, {
              type: _e6,
              target: this
            });
          }
        }
      }, {
        key: "markDirtyProjection",
        value: function markDirtyProjection() {
          this.markDirty(), this._projectionDirty = !0;
        }
      }, {
        key: "_clearDirty",
        value: function _clearDirty() {
          _get(_getPrototypeOf(Q.prototype), "_clearDirty", this).call(this), this._projectionDirty = !1;
        }
      }, {
        key: "_getTooltipPoint",
        value: function _getTooltipPoint() {
          var t = this.get("tooltipX"),
              e = this.get("tooltipY"),
              n = 0,
              i = 0;

          if (s.isNumber(t) && (n = t), s.isNumber(e) && (i = e), t instanceof l.gG) {
            var _e12 = this.positionToGeoPoint(t.value),
                _o4 = this.getPrivate("series");

            if (_o4) {
              var _t6 = _o4.chart;

              if (_t6) {
                var _o5 = _t6.convert(_e12);

                n = _o5.x, i = _o5.y;
              }
            }
          }

          return {
            x: n,
            y: i
          };
        }
      }, {
        key: "positionToGeoPoint",
        value: function positionToGeoPoint(t) {
          var e = this.get("geometry"),
              n = this.getPrivate("series"),
              i = n.chart,
              o = this.dataItem;

          if (e && n && i && o) {
            var _r4 = o.get("lineType", n.get("lineType"));

            var _a5,
                _s2,
                _l2,
                _u = J(e),
                _c = 0,
                _h = 0,
                _p = 0,
                _f = e.coordinates;

            if (_f) {
              var _n6;

              "LineString" == e.type ? _n6 = [_f] : "MultiLineString" == e.type && (_n6 = _f);

              for (var _e13 = 0; _e13 < _n6.length; _e13++) {
                var _i9 = _n6[_e13];

                if (_i9.length > 1) {
                  for (var _o6 = 1; _o6 < _i9.length; _o6++) {
                    if (_s2 = _i9[_o6 - 1], _l2 = _i9[_o6], _h = _c / _u, _a5 = q(_s2, _l2), _c += _a5, _p = _c / _u, _h <= t && _p > t) {
                      _e13 = _n6.length;
                      break;
                    }
                  }
                } else 1 == _i9.length && (_s2 = _i9[0], _l2 = _i9[0], _h = 0, _p = 1);
              }

              if (_s2 && _l2) {
                var _e14,
                    _n7 = (t - _h) / (_p - _h);

                if ("straight" == _r4) {
                  var _t7 = i.convert({
                    longitude: _s2[0],
                    latitude: _s2[1]
                  }),
                      _e15 = i.convert({
                    longitude: _l2[0],
                    latitude: _l2[1]
                  }),
                      _o7 = _t7.x + (_e15.x - _t7.x) * _n7,
                      _r5 = _t7.y + (_e15.y - _t7.y) * _n7;

                  return i.invert({
                    x: _o7,
                    y: _r5
                  });
                }

                return _e14 = function (t, e) {
                  var n = t[0] * v,
                      i = t[1] * v,
                      o = e[0] * v,
                      r = e[1] * v,
                      a = P(i),
                      s = M(i),
                      l = P(r),
                      u = M(r),
                      c = a * P(n),
                      h = a * M(n),
                      p = l * P(o),
                      f = l * M(o),
                      d = 2 * E(j(O(r - i) + a * l * O(o - n))),
                      g = M(d),
                      m = d ? function (t) {
                    var e = M(t *= d) / g,
                        n = M(d - t) / g,
                        i = n * c + e * p,
                        o = n * h + e * f,
                        r = n * s + e * u;
                    return [w(o, i) * y, w(r, j(i * i + o * o)) * y];
                  } : function () {
                    return [n * y, i * y];
                  };
                  return m.distance = d, m;
                }(_s2, _l2)(_n7), {
                  longitude: _e14[0],
                  latitude: _e14[1]
                };
              }
            }
          }

          return {
            longitude: 0,
            latitude: 0
          };
        }
      }]);

      return Q;
    }(u.T);

    Object.defineProperty(Q, "className", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: "MapLine"
    }), Object.defineProperty(Q, "classNames", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: u.T.classNames.concat([Q.className])
    });
    var K = n(7144),
        tt = n(5769);

    var et =
    /*#__PURE__*/
    function (_a6) {
      _inherits(et, _a6);

      function et() {
        var _this7;

        _classCallCheck(this, et);

        _this7 = _possibleConstructorReturn(this, _getPrototypeOf(et).apply(this, arguments)), Object.defineProperty(_assertThisInitialized(_this7), "mapLines", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: new K.o(tt.YS["new"]({}), function () {
            return Q._new(_this7._root, {}, [_this7.mapLines.template]);
          })
        }), Object.defineProperty(_assertThisInitialized(_this7), "_types", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: ["LineString", "MultiLineString"]
        });
        return _this7;
      }

      _createClass(et, [{
        key: "_afterNew",
        value: function _afterNew() {
          this.fields.push("lineType"), this._setRawDefault("lineTypeField", "lineType"), _get(_getPrototypeOf(et.prototype), "_afterNew", this).call(this);
        }
      }, {
        key: "makeMapLine",
        value: function makeMapLine(t) {
          var e = this.children.push(this.mapLines.make());
          return e._setDataItem(t), this.mapLines.push(e), e;
        }
      }, {
        key: "markDirtyProjection",
        value: function markDirtyProjection() {
          o.each(this.dataItems, function (t) {
            var e = t.get("mapLine");
            e && e.markDirtyProjection();
          });
        }
      }, {
        key: "_prepareChildren",
        value: function _prepareChildren() {
          _get(_getPrototypeOf(et.prototype), "_prepareChildren", this).call(this), this.isDirty("stroke") && this.mapLines.template.set("stroke", this.get("stroke"));
        }
      }, {
        key: "processDataItem",
        value: function processDataItem(t) {
          var _this8 = this;

          _get(_getPrototypeOf(et.prototype), "processDataItem", this).call(this, t);

          var e = t.get("mapLine");
          e || (e = this.makeMapLine(t)), this._handlePointsToConnect(t), t.on("pointsToConnect", function () {
            _this8._handlePointsToConnect(t);
          }), t.set("mapLine", e), this._addGeometry(t.get("geometry"), this), e.setPrivate("series", this);
        }
      }, {
        key: "_handlePointsToConnect",
        value: function _handlePointsToConnect(t) {
          var _this9 = this;

          var e = t.get("pointsToConnect");
          e && (o.each(e, function (e) {
            e.on("geometry", function () {
              _this9.markDirtyValues(t);
            }), e.on("longitude", function () {
              _this9.markDirtyValues(t);
            }), e.on("latitude", function () {
              _this9.markDirtyValues(t);
            });
          }), this.markDirtyValues(t));
        }
      }, {
        key: "markDirtyValues",
        value: function markDirtyValues(t) {
          if (_get(_getPrototypeOf(et.prototype), "markDirtyValues", this).call(this), t) {
            var _e16 = t.get("mapLine");

            if (_e16) {
              var _n8 = t.get("pointsToConnect");

              if (_n8) {
                var _i10 = [];
                o.each(_n8, function (t) {
                  var e = t.get("longitude"),
                      n = t.get("latitude");
                  if (null != e && null != n) _i10.push([e, n]);else {
                    var _e17 = t.get("geometry");

                    if (_e17) {
                      var _t8 = _e17.coordinates;
                      _t8 && _i10.push([_t8[0], _t8[1]]);
                    }
                  }
                });
                var _r6 = {
                  type: "LineString",
                  coordinates: _i10
                };
                t.setRaw("geometry", _r6), _e16.set("geometry", _r6);
              } else _e16.set("geometry", t.get("geometry"));
            }
          }
        }
      }, {
        key: "disposeDataItem",
        value: function disposeDataItem(t) {
          _get(_getPrototypeOf(et.prototype), "disposeDataItem", this).call(this, t);

          var e = t.get("mapLine");
          e && (this.mapLines.removeValue(e), e.dispose());
        }
      }, {
        key: "_excludeDataItem",
        value: function _excludeDataItem(t) {
          _get(_getPrototypeOf(et.prototype), "_excludeDataItem", this).call(this, t);

          var e = t.get("mapLine");
          e && e.setPrivate("visible", !1);
        }
      }, {
        key: "_unexcludeDataItem",
        value: function _unexcludeDataItem(t) {
          _get(_getPrototypeOf(et.prototype), "_unexcludeDataItem", this).call(this, t);

          var e = t.get("mapLine");
          e && e.setPrivate("visible", !0);
        }
      }, {
        key: "_notIncludeDataItem",
        value: function _notIncludeDataItem(t) {
          _get(_getPrototypeOf(et.prototype), "_notIncludeDataItem", this).call(this, t);

          var e = t.get("mapLine");
          e && e.setPrivate("visible", !1);
        }
      }, {
        key: "_unNotIncludeDataItem",
        value: function _unNotIncludeDataItem(t) {
          _get(_getPrototypeOf(et.prototype), "_unNotIncludeDataItem", this).call(this, t);

          var e = t.get("mapLine");
          e && e.setPrivate("visible", !0);
        }
      }]);

      return et;
    }(a);

    function nt(t, e, n) {
      t = +t, e = +e, n = (o = arguments.length) < 2 ? (e = t, t = 0, 1) : o < 3 ? 1 : +n;

      for (var i = -1, o = 0 | Math.max(0, Math.ceil((e - t) / n)), r = new Array(o); ++i < o;) {
        r[i] = t + i * n;
      }

      return r;
    }

    function it(t, e, n) {
      var i = nt(t, e - h, n).concat(e);
      return function (t) {
        return i.map(function (e) {
          return [t, e];
        });
      };
    }

    function ot(t, e, n) {
      var i = nt(t, e - h, n).concat(e);
      return function (t) {
        return i.map(function (e) {
          return [e, t];
        });
      };
    }

    Object.defineProperty(et, "className", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: "MapLineSeries"
    }), Object.defineProperty(et, "classNames", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: a.classNames.concat([et.className])
    });

    var rt =
    /*#__PURE__*/
    function (_et) {
      _inherits(rt, _et);

      function rt() {
        var _this10;

        _classCallCheck(this, rt);

        _this10 = _possibleConstructorReturn(this, _getPrototypeOf(rt).apply(this, arguments)), Object.defineProperty(_assertThisInitialized(_this10), "_dataItem", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: _this10.makeDataItem({})
        });
        return _this10;
      }

      _createClass(rt, [{
        key: "_afterNew",
        value: function _afterNew() {
          _get(_getPrototypeOf(rt.prototype), "_afterNew", this).call(this), this.dataItems.push(this._dataItem), this._generate();
        }
      }, {
        key: "_updateChildren",
        value: function _updateChildren() {
          var _this11 = this;

          if (_get(_getPrototypeOf(rt.prototype), "_updateChildren", this).call(this), this.isDirty("step") && this._generate(), this.isDirty("clipExtent") && this.get("clipExtent")) {
            var _t9 = this.chart;
            _t9 && _t9.events.on("geoboundschanged", function () {
              _this11._generate();
            }), this._generate();
          }
        }
      }, {
        key: "_generate",
        value: function _generate() {
          var t = function () {
            var t,
                e,
                n,
                i,
                o,
                r,
                a,
                s,
                l,
                u,
                c,
                p,
                f = 10,
                d = f,
                g = 90,
                m = 360,
                y = 2.5;

            function v() {
              return {
                type: "MultiLineString",
                coordinates: b()
              };
            }

            function b() {
              return nt(x(i / g) * g, n, g).map(c).concat(nt(x(s / m) * m, a, m).map(p)).concat(nt(x(e / f) * f, t, f).filter(function (t) {
                return _(t % g) > h;
              }).map(l)).concat(nt(x(r / d) * d, o, d).filter(function (t) {
                return _(t % m) > h;
              }).map(u));
            }

            return v.lines = function () {
              return b().map(function (t) {
                return {
                  type: "LineString",
                  coordinates: t
                };
              });
            }, v.outline = function () {
              return {
                type: "Polygon",
                coordinates: [c(i).concat(p(a).slice(1), c(n).reverse().slice(1), p(s).reverse().slice(1))]
              };
            }, v.extent = function (t) {
              return arguments.length ? v.extentMajor(t).extentMinor(t) : v.extentMinor();
            }, v.extentMajor = function (t) {
              return arguments.length ? (i = +t[0][0], n = +t[1][0], s = +t[0][1], a = +t[1][1], i > n && (t = i, i = n, n = t), s > a && (t = s, s = a, a = t), v.precision(y)) : [[i, s], [n, a]];
            }, v.extentMinor = function (n) {
              return arguments.length ? (e = +n[0][0], t = +n[1][0], r = +n[0][1], o = +n[1][1], e > t && (n = e, e = t, t = n), r > o && (n = r, r = o, o = n), v.precision(y)) : [[e, r], [t, o]];
            }, v.step = function (t) {
              return arguments.length ? v.stepMajor(t).stepMinor(t) : v.stepMinor();
            }, v.stepMajor = function (t) {
              return arguments.length ? (g = +t[0], m = +t[1], v) : [g, m];
            }, v.stepMinor = function (t) {
              return arguments.length ? (f = +t[0], d = +t[1], v) : [f, d];
            }, v.precision = function (h) {
              return arguments.length ? (y = +h, l = it(r, o, 90), u = ot(e, t, y), c = it(s, a, 90), p = ot(i, n, y), v) : y;
            }, v.extentMajor([[-180, -90 + h], [180, 90 - h]]).extentMinor([[-180, -80 - h], [180, 80 + h]]);
          }();

          if (t) {
            if (this.get("clipExtent")) {
              var _e19 = this.chart;

              if (_e19) {
                var _n9 = _e19.geoBounds();

                _n9 && t.extent([[_n9.left, _n9.bottom], [_n9.right, _n9.top]]);
              }
            }

            var _e18 = this.get("step", 10);

            t.stepMinor([360, 360]), t.stepMajor([_e18, _e18]), this._dataItem.set("geometry", t());
          }
        }
      }]);

      return rt;
    }(et);

    Object.defineProperty(rt, "className", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: "GraticuleSeries"
    }), Object.defineProperty(rt, "classNames", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: et.classNames.concat([rt.className])
    });
    var at = n(3409),
        st = n(3783);

    function lt(t, e) {
      function n(n, i) {
        return n = t(n, i), e(n[0], n[1]);
      }

      return t.invert && e.invert && (n.invert = function (n, i) {
        return (n = e.invert(n, i)) && t.invert(n[0], n[1]);
      }), n;
    }

    function ut(t, e) {
      return _(t) > f && (t -= Math.round(t / m) * m), [t, e];
    }

    function ct(t, e, n) {
      return (t %= m) ? e || n ? lt(pt(t), ft(e, n)) : pt(t) : e || n ? ft(e, n) : ut;
    }

    function ht(t) {
      return function (e, n) {
        return _(e += t) > f && (e -= Math.round(e / m) * m), [e, n];
      };
    }

    function pt(t) {
      var e = ht(t);
      return e.invert = ht(-t), e;
    }

    function ft(t, e) {
      var n = P(t),
          i = M(t),
          o = P(e),
          r = M(e);

      function a(t, e) {
        var a = P(e),
            s = P(t) * a,
            l = M(t) * a,
            u = M(e),
            c = u * n + s * i;
        return [w(l * o - c * r, s * n - u * i), E(c * o + l * r)];
      }

      return a.invert = function (t, e) {
        var a = P(e),
            s = P(t) * a,
            l = M(t) * a,
            u = M(e),
            c = u * o - l * r;
        return [w(l * o + u * r, s * n + c * i), E(c * n - s * i)];
      }, a;
    }

    function dt() {
      var t,
          e = [];
      return {
        point: function point(e, n, i) {
          t.push([e, n, i]);
        },
        lineStart: function lineStart() {
          e.push(t = []);
        },
        lineEnd: L,
        rejoin: function rejoin() {
          e.length > 1 && e.push(e.pop().concat(e.shift()));
        },
        result: function result() {
          var n = e;
          return e = [], t = null, n;
        }
      };
    }

    function gt(t, e) {
      return _(t[0] - e[0]) < h && _(t[1] - e[1]) < h;
    }

    function mt(t, e, n, i) {
      this.x = t, this.z = e, this.o = n, this.e = i, this.v = !1, this.n = this.p = null;
    }

    function yt(t, e, n, i, o) {
      var r,
          a,
          s = [],
          l = [];

      if (t.forEach(function (t) {
        if (!((e = t.length - 1) <= 0)) {
          var e,
              n,
              i = t[0],
              a = t[e];

          if (gt(i, a)) {
            if (!i[2] && !a[2]) {
              for (o.lineStart(), r = 0; r < e; ++r) {
                o.point((i = t[r])[0], i[1]);
              }

              return void o.lineEnd();
            }

            a[0] += 2 * h;
          }

          s.push(n = new mt(i, t, null, !0)), l.push(n.o = new mt(i, null, n, !1)), s.push(n = new mt(a, t, null, !1)), l.push(n.o = new mt(a, null, n, !0));
        }
      }), s.length) {
        for (l.sort(e), vt(s), vt(l), r = 0, a = l.length; r < a; ++r) {
          l[r].e = n = !n;
        }

        for (var u, c, p = s[0];;) {
          for (var f = p, d = !0; f.v;) {
            if ((f = f.n) === p) return;
          }

          u = f.z, o.lineStart();

          do {
            if (f.v = f.o.v = !0, f.e) {
              if (d) for (r = 0, a = u.length; r < a; ++r) {
                o.point((c = u[r])[0], c[1]);
              } else i(f.x, f.n.x, 1, o);
              f = f.n;
            } else {
              if (d) for (u = f.p.z, r = u.length - 1; r >= 0; --r) {
                o.point((c = u[r])[0], c[1]);
              } else i(f.x, f.p.x, -1, o);
              f = f.p;
            }

            u = (f = f.o).z, d = !d;
          } while (!f.v);

          o.lineEnd();
        }
      }
    }

    function vt(t) {
      if (e = t.length) {
        for (var e, n, i = 0, o = t[0]; ++i < e;) {
          o.n = n = t[i], n.p = o, o = n;
        }

        o.n = n = t[0], n.p = o;
      }
    }

    function _t(t) {
      return [w(t[1], t[0]), E(t[2])];
    }

    function bt(t) {
      var e = t[0],
          n = t[1],
          i = P(n);
      return [i * P(e), i * M(e), M(n)];
    }

    function wt(t, e) {
      return t[0] * e[0] + t[1] * e[1] + t[2] * e[2];
    }

    function Pt(t, e) {
      return [t[1] * e[2] - t[2] * e[1], t[2] * e[0] - t[0] * e[2], t[0] * e[1] - t[1] * e[0]];
    }

    function xt(t, e) {
      t[0] += e[0], t[1] += e[1], t[2] += e[2];
    }

    function Dt(t, e) {
      return [t[0] * e, t[1] * e, t[2] * e];
    }

    function St(t) {
      var e = j(t[0] * t[0] + t[1] * t[1] + t[2] * t[2]);
      t[0] /= e, t[1] /= e, t[2] /= e;
    }

    function It(t) {
      return _(t[0]) <= f ? t[0] : N(t[0]) * ((_(t[0]) + f) % m - f);
    }

    function Mt(t) {
      return Array.from(
      /*#__PURE__*/
      regeneratorRuntime.mark(function _callee(t) {
        var _iteratorNormalCompletion, _didIteratorError, _iteratorError, _iterator, _step, _e20;

        return regeneratorRuntime.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _iteratorNormalCompletion = true;
                _didIteratorError = false;
                _iteratorError = undefined;
                _context.prev = 3;
                _iterator = t[Symbol.iterator]();

              case 5:
                if (_iteratorNormalCompletion = (_step = _iterator.next()).done) {
                  _context.next = 11;
                  break;
                }

                _e20 = _step.value;
                return _context.delegateYield(_e20, "t0", 8);

              case 8:
                _iteratorNormalCompletion = true;
                _context.next = 5;
                break;

              case 11:
                _context.next = 17;
                break;

              case 13:
                _context.prev = 13;
                _context.t1 = _context["catch"](3);
                _didIteratorError = true;
                _iteratorError = _context.t1;

              case 17:
                _context.prev = 17;
                _context.prev = 18;

                if (!_iteratorNormalCompletion && _iterator["return"] != null) {
                  _iterator["return"]();
                }

              case 20:
                _context.prev = 20;

                if (!_didIteratorError) {
                  _context.next = 23;
                  break;
                }

                throw _iteratorError;

              case 23:
                return _context.finish(20);

              case 24:
                return _context.finish(17);

              case 25:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, null, [[3, 13, 17, 25], [18,, 20, 24]]);
      })(t));
    }

    function Nt(t, e, n, i) {
      return function (o) {
        var r,
            a,
            s,
            l = e(o),
            u = dt(),
            y = e(u),
            v = !1,
            _ = {
          point: b,
          lineStart: D,
          lineEnd: S,
          polygonStart: function polygonStart() {
            _.point = I, _.lineStart = N, _.lineEnd = j, a = [], r = [];
          },
          polygonEnd: function polygonEnd() {
            _.point = b, _.lineStart = D, _.lineEnd = S, a = Mt(a);

            var t = function (t, e) {
              var n = It(e),
                  i = e[1],
                  o = M(i),
                  r = [M(n), -P(n), 0],
                  a = 0,
                  s = 0,
                  l = new c();
              1 === o ? i = d + h : -1 === o && (i = -d - h);

              for (var u = 0, y = t.length; u < y; ++u) {
                if (_ = (v = t[u]).length) for (var v, _, b = v[_ - 1], x = It(b), D = b[1] / 2 + g, S = M(D), I = P(D), N = 0; N < _; ++N, x = C, S = L, I = T, b = j) {
                  var j = v[N],
                      C = It(j),
                      O = j[1] / 2 + g,
                      L = M(O),
                      T = P(O),
                      k = C - x,
                      R = k >= 0 ? 1 : -1,
                      z = R * k,
                      G = z > f,
                      Y = S * L;

                  if (l.add(w(Y * R * M(z), I * T + Y * P(z))), a += G ? k + R * m : k, G ^ x >= n ^ C >= n) {
                    var X = Pt(bt(b), bt(j));
                    St(X);
                    var B = Pt(r, X);
                    St(B);
                    var Z = (G ^ k >= 0 ? -1 : 1) * E(B[2]);
                    (i > Z || i === Z && (X[0] || X[1])) && (s += G ^ k >= 0 ? 1 : -1);
                  }
                }
              }

              return (a < -h || a < h && l < -p) ^ 1 & s;
            }(r, i);

            a.length ? (v || (o.polygonStart(), v = !0), yt(a, Ct, t, n, o)) : t && (v || (o.polygonStart(), v = !0), o.lineStart(), n(null, null, 1, o), o.lineEnd()), v && (o.polygonEnd(), v = !1), a = r = null;
          },
          sphere: function sphere() {
            o.polygonStart(), o.lineStart(), n(null, null, 1, o), o.lineEnd(), o.polygonEnd();
          }
        };

        function b(e, n) {
          t(e, n) && o.point(e, n);
        }

        function x(t, e) {
          l.point(t, e);
        }

        function D() {
          _.point = x, l.lineStart();
        }

        function S() {
          _.point = b, l.lineEnd();
        }

        function I(t, e) {
          s.push([t, e]), y.point(t, e);
        }

        function N() {
          y.lineStart(), s = [];
        }

        function j() {
          I(s[0][0], s[0][1]), y.lineEnd();
          var t,
              e,
              n,
              i,
              l = y.clean(),
              c = u.result(),
              h = c.length;
          if (s.pop(), r.push(s), s = null, h) if (1 & l) {
            if ((e = (n = c[0]).length - 1) > 0) {
              for (v || (o.polygonStart(), v = !0), o.lineStart(), t = 0; t < e; ++t) {
                o.point((i = n[t])[0], i[1]);
              }

              o.lineEnd();
            }
          } else h > 1 && 2 & l && c.push(c.pop().concat(c.shift())), a.push(c.filter(jt));
        }

        return _;
      };
    }

    function jt(t) {
      return t.length > 1;
    }

    function Ct(t, e) {
      return ((t = t.x)[0] < 0 ? t[1] - d - h : d - t[1]) - ((e = e.x)[0] < 0 ? e[1] - d - h : d - e[1]);
    }

    ut.invert = ut;
    var Et = Nt(function () {
      return !0;
    }, function (t) {
      var e,
          n = NaN,
          i = NaN,
          o = NaN;
      return {
        lineStart: function lineStart() {
          t.lineStart(), e = 1;
        },
        point: function point(r, a) {
          var s = r > 0 ? f : -f,
              l = _(r - n);

          _(l - f) < h ? (t.point(n, i = (i + a) / 2 > 0 ? d : -d), t.point(o, i), t.lineEnd(), t.lineStart(), t.point(s, i), t.point(r, i), e = 0) : o !== s && l >= f && (_(n - o) < h && (n -= o * h), _(r - s) < h && (r -= s * h), i = function (t, e, n, i) {
            var o,
                r,
                a = M(t - n);
            return _(a) > h ? b((M(e) * (r = P(i)) * M(n) - M(i) * (o = P(e)) * M(t)) / (o * r * a)) : (e + i) / 2;
          }(n, i, r, a), t.point(o, i), t.lineEnd(), t.lineStart(), t.point(s, i), e = 0), t.point(n = r, i = a), o = s;
        },
        lineEnd: function lineEnd() {
          t.lineEnd(), n = i = NaN;
        },
        clean: function clean() {
          return 2 - e;
        }
      };
    }, function (t, e, n, i) {
      var o;
      if (null == t) o = n * d, i.point(-f, o), i.point(0, o), i.point(f, o), i.point(f, 0), i.point(f, -o), i.point(0, -o), i.point(-f, -o), i.point(-f, 0), i.point(-f, o);else if (_(t[0] - e[0]) > h) {
        var r = t[0] < e[0] ? f : -f;
        o = n * r / 2, i.point(-r, o), i.point(0, o), i.point(r, o);
      } else i.point(e[0], e[1]);
    }, [-f, -d]);

    function Ot(t) {
      return function () {
        return t;
      };
    }

    function Lt(t, e, n, i, o, r) {
      if (n) {
        var a = P(e),
            s = M(e),
            l = i * n;
        null == o ? (o = e + i * m, r = e - l / 2) : (o = Tt(a, o), r = Tt(a, r), (i > 0 ? o < r : o > r) && (o += i * m));

        for (var u, c = o; i > 0 ? c > r : c < r; c -= l) {
          u = _t([a, -s * P(c), -s * M(c)]), t.point(u[0], u[1]);
        }
      }
    }

    function Tt(t, e) {
      (e = bt(e))[0] -= t, St(e);
      var n,
          i = (n = -e[1]) > 1 ? 0 : n < -1 ? f : Math.acos(n);
      return ((-e[2] < 0 ? -i : i) + m - h) % m;
    }

    var kt = 1e9,
        Rt = -kt;

    var zt = function zt(t) {
      return t;
    };

    function Gt(t) {
      return function (e) {
        var n = new Yt();

        for (var i in t) {
          n[i] = t[i];
        }

        return n.stream = e, n;
      };
    }

    function Yt() {}

    Yt.prototype = {
      constructor: Yt,
      point: function point(t, e) {
        this.stream.point(t, e);
      },
      sphere: function sphere() {
        this.stream.sphere();
      },
      lineStart: function lineStart() {
        this.stream.lineStart();
      },
      lineEnd: function lineEnd() {
        this.stream.lineEnd();
      },
      polygonStart: function polygonStart() {
        this.stream.polygonStart();
      },
      polygonEnd: function polygonEnd() {
        this.stream.polygonEnd();
      }
    };
    var Xt = 1 / 0,
        Bt = Xt,
        Zt = -Xt,
        At = Zt,
        Wt = {
      point: function point(t, e) {
        t < Xt && (Xt = t), t > Zt && (Zt = t), e < Bt && (Bt = e), e > At && (At = e);
      },
      lineStart: L,
      lineEnd: L,
      polygonStart: L,
      polygonEnd: L,
      result: function result() {
        var t = [[Xt, Bt], [Zt, At]];
        return Zt = At = -(Bt = Xt = 1 / 0), t;
      }
    },
        Ft = Wt;

    function Vt(t, e, n) {
      var i = t.clipExtent && t.clipExtent();
      return t.scale(150).translate([0, 0]), null != i && t.clipExtent(null), A(n, t.stream(Ft)), e(Ft.result()), null != i && t.clipExtent(i), t;
    }

    function Ht(t, e, n) {
      return Vt(t, function (n) {
        var i = e[1][0] - e[0][0],
            o = e[1][1] - e[0][1],
            r = Math.min(i / (n[1][0] - n[0][0]), o / (n[1][1] - n[0][1])),
            a = +e[0][0] + (i - r * (n[1][0] + n[0][0])) / 2,
            s = +e[0][1] + (o - r * (n[1][1] + n[0][1])) / 2;
        t.scale(150 * r).translate([a, s]);
      }, n);
    }

    function Jt(t, e, n) {
      return Ht(t, [[0, 0], e], n);
    }

    function $t(t, e, n) {
      return Vt(t, function (n) {
        var i = +e,
            o = i / (n[1][0] - n[0][0]),
            r = (i - o * (n[1][0] + n[0][0])) / 2,
            a = -o * n[0][1];
        t.scale(150 * o).translate([r, a]);
      }, n);
    }

    function Ut(t, e, n) {
      return Vt(t, function (n) {
        var i = +e,
            o = i / (n[1][1] - n[0][1]),
            r = -o * n[0][0],
            a = (i - o * (n[1][1] + n[0][1])) / 2;
        t.scale(150 * o).translate([r, a]);
      }, n);
    }

    var qt = 16,
        Qt = P(30 * v);

    function Kt(t, e) {
      return +e ? function (t, e) {
        function n(i, o, r, a, s, l, u, c, p, f, d, g, m, y) {
          var v = u - i,
              b = c - o,
              P = v * v + b * b;

          if (P > 4 * e && m--) {
            var x = a + f,
                D = s + d,
                S = l + g,
                I = j(x * x + D * D + S * S),
                M = E(S /= I),
                N = _(_(S) - 1) < h || _(r - p) < h ? (r + p) / 2 : w(D, x),
                C = t(N, M),
                O = C[0],
                L = C[1],
                T = O - i,
                k = L - o,
                R = b * T - v * k;
            (R * R / P > e || _((v * T + b * k) / P - .5) > .3 || a * f + s * d + l * g < Qt) && (n(i, o, r, a, s, l, O, L, N, x /= I, D /= I, S, m, y), y.point(O, L), n(O, L, N, x, D, S, u, c, p, f, d, g, m, y));
          }
        }

        return function (e) {
          var i,
              o,
              r,
              a,
              s,
              l,
              u,
              c,
              h,
              p,
              f,
              d,
              g = {
            point: m,
            lineStart: y,
            lineEnd: _,
            polygonStart: function polygonStart() {
              e.polygonStart(), g.lineStart = b;
            },
            polygonEnd: function polygonEnd() {
              e.polygonEnd(), g.lineStart = y;
            }
          };

          function m(n, i) {
            n = t(n, i), e.point(n[0], n[1]);
          }

          function y() {
            c = NaN, g.point = v, e.lineStart();
          }

          function v(i, o) {
            var r = bt([i, o]),
                a = t(i, o);
            n(c, h, u, p, f, d, c = a[0], h = a[1], u = i, p = r[0], f = r[1], d = r[2], qt, e), e.point(c, h);
          }

          function _() {
            g.point = m, e.lineEnd();
          }

          function b() {
            y(), g.point = w, g.lineEnd = P;
          }

          function w(t, e) {
            v(i = t, e), o = c, r = h, a = p, s = f, l = d, g.point = v;
          }

          function P() {
            n(c, h, u, p, f, d, o, r, i, a, s, l, qt, e), g.lineEnd = _, _();
          }

          return g;
        };
      }(t, e) : function (t) {
        return Gt({
          point: function point(e, n) {
            e = t(e, n), this.stream.point(e[0], e[1]);
          }
        });
      }(t);
    }

    var te = Gt({
      point: function point(t, e) {
        this.stream.point(t * v, e * v);
      }
    });

    function ee(t, e, n, i, o, r) {
      if (!r) return function (t, e, n, i, o) {
        function r(r, a) {
          return [e + t * (r *= i), n - t * (a *= o)];
        }

        return r.invert = function (r, a) {
          return [(r - e) / t * i, (n - a) / t * o];
        }, r;
      }(t, e, n, i, o);
      var a = P(r),
          s = M(r),
          l = a * t,
          u = s * t,
          c = a / t,
          h = s / t,
          p = (s * n - a * e) / t,
          f = (s * e + a * n) / t;

      function d(t, r) {
        return [l * (t *= i) - u * (r *= o) + e, n - u * t - l * r];
      }

      return d.invert = function (t, e) {
        return [i * (c * t - h * e + p), o * (f - h * t - c * e)];
      }, d;
    }

    function ne(t) {
      return ie(function () {
        return t;
      })();
    }

    function ie(t) {
      var e,
          n,
          i,
          o,
          r,
          a,
          s,
          l,
          u,
          c,
          p = 150,
          d = 480,
          g = 250,
          m = 0,
          b = 0,
          w = 0,
          x = 0,
          D = 0,
          S = 0,
          I = 1,
          M = 1,
          N = null,
          C = Et,
          E = null,
          O = zt,
          L = .5;

      function T(t) {
        return l(t[0] * v, t[1] * v);
      }

      function k(t) {
        return (t = l.invert(t[0], t[1])) && [t[0] * y, t[1] * y];
      }

      function R() {
        var t = ee(p, 0, 0, I, M, S).apply(null, e(m, b)),
            i = ee(p, d - t[0], g - t[1], I, M, S);
        return n = ct(w, x, D), s = lt(e, i), l = lt(n, s), a = Kt(s, L), z();
      }

      function z() {
        return u = c = null, T;
      }

      return T.stream = function (t) {
        return u && c === t ? u : u = te(function (t) {
          return Gt({
            point: function point(e, n) {
              var i = t(e, n);
              return this.stream.point(i[0], i[1]);
            }
          });
        }(n)(C(a(O(c = t)))));
      }, T.preclip = function (t) {
        return arguments.length ? (C = t, N = void 0, z()) : C;
      }, T.postclip = function (t) {
        return arguments.length ? (O = t, E = i = o = r = null, z()) : O;
      }, T.clipAngle = function (t) {
        return arguments.length ? (C = +t ? function (t) {
          var e = P(t),
              n = 6 * v,
              i = e > 0,
              o = _(e) > h;

          function r(t, n) {
            return P(t) * P(n) > e;
          }

          function a(t, n, i) {
            var o = [1, 0, 0],
                r = Pt(bt(t), bt(n)),
                a = wt(r, r),
                s = r[0],
                l = a - s * s;
            if (!l) return !i && t;
            var u = e * a / l,
                c = -e * s / l,
                p = Pt(o, r),
                d = Dt(o, u);
            xt(d, Dt(r, c));
            var g = p,
                m = wt(d, g),
                y = wt(g, g),
                v = m * m - y * (wt(d, d) - 1);

            if (!(v < 0)) {
              var b = j(v),
                  w = Dt(g, (-m - b) / y);
              if (xt(w, d), w = _t(w), !i) return w;
              var P,
                  x = t[0],
                  D = n[0],
                  S = t[1],
                  I = n[1];
              D < x && (P = x, x = D, D = P);
              var M = D - x,
                  N = _(M - f) < h;

              if (!N && I < S && (P = S, S = I, I = P), N || M < h ? N ? S + I > 0 ^ w[1] < (_(w[0] - x) < h ? S : I) : S <= w[1] && w[1] <= I : M > f ^ (x <= w[0] && w[0] <= D)) {
                var C = Dt(g, (-m + b) / y);
                return xt(C, d), [w, _t(C)];
              }
            }
          }

          function s(e, n) {
            var o = i ? t : f - t,
                r = 0;
            return e < -o ? r |= 1 : e > o && (r |= 2), n < -o ? r |= 4 : n > o && (r |= 8), r;
          }

          return Nt(r, function (t) {
            var e, n, l, u, c;
            return {
              lineStart: function lineStart() {
                u = l = !1, c = 1;
              },
              point: function point(h, p) {
                var d,
                    g = [h, p],
                    m = r(h, p),
                    y = i ? m ? 0 : s(h, p) : m ? s(h + (h < 0 ? f : -f), p) : 0;
                if (!e && (u = l = m) && t.lineStart(), m !== l && (!(d = a(e, g)) || gt(e, d) || gt(g, d)) && (g[2] = 1), m !== l) c = 0, m ? (t.lineStart(), d = a(g, e), t.point(d[0], d[1])) : (d = a(e, g), t.point(d[0], d[1], 2), t.lineEnd()), e = d;else if (o && e && i ^ m) {
                  var v;
                  y & n || !(v = a(g, e, !0)) || (c = 0, i ? (t.lineStart(), t.point(v[0][0], v[0][1]), t.point(v[1][0], v[1][1]), t.lineEnd()) : (t.point(v[1][0], v[1][1]), t.lineEnd(), t.lineStart(), t.point(v[0][0], v[0][1], 3)));
                }
                !m || e && gt(e, g) || t.point(g[0], g[1]), e = g, l = m, n = y;
              },
              lineEnd: function lineEnd() {
                l && t.lineEnd(), e = null;
              },
              clean: function clean() {
                return c | (u && l) << 1;
              }
            };
          }, function (e, i, o, r) {
            Lt(r, t, n, o, e, i);
          }, i ? [0, -t] : [-f, t - f]);
        }(N = t * v) : (N = null, Et), z()) : N * y;
      }, T.clipExtent = function (t) {
        return arguments.length ? (O = null == t ? (E = i = o = r = null, zt) : function (t, e, n, i) {
          function o(o, r) {
            return t <= o && o <= n && e <= r && r <= i;
          }

          function r(o, r, s, u) {
            var c = 0,
                h = 0;
            if (null == o || (c = a(o, s)) !== (h = a(r, s)) || l(o, r) < 0 ^ s > 0) do {
              u.point(0 === c || 3 === c ? t : n, c > 1 ? i : e);
            } while ((c = (c + s + 4) % 4) !== h);else u.point(r[0], r[1]);
          }

          function a(i, o) {
            return _(i[0] - t) < h ? o > 0 ? 0 : 3 : _(i[0] - n) < h ? o > 0 ? 2 : 1 : _(i[1] - e) < h ? o > 0 ? 1 : 0 : o > 0 ? 3 : 2;
          }

          function s(t, e) {
            return l(t.x, e.x);
          }

          function l(t, e) {
            var n = a(t, 1),
                i = a(e, 1);
            return n !== i ? n - i : 0 === n ? e[1] - t[1] : 1 === n ? t[0] - e[0] : 2 === n ? t[1] - e[1] : e[0] - t[0];
          }

          return function (a) {
            var l,
                u,
                c,
                h,
                p,
                f,
                d,
                g,
                m,
                y,
                v,
                _ = a,
                b = dt(),
                w = {
              point: P,
              lineStart: function lineStart() {
                w.point = x, u && u.push(c = []), y = !0, m = !1, d = g = NaN;
              },
              lineEnd: function lineEnd() {
                l && (x(h, p), f && m && b.rejoin(), l.push(b.result())), w.point = P, m && _.lineEnd();
              },
              polygonStart: function polygonStart() {
                _ = b, l = [], u = [], v = !0;
              },
              polygonEnd: function polygonEnd() {
                var e = function () {
                  for (var e = 0, n = 0, o = u.length; n < o; ++n) {
                    for (var r, a, s = u[n], l = 1, c = s.length, h = s[0], p = h[0], f = h[1]; l < c; ++l) {
                      r = p, a = f, p = (h = s[l])[0], f = h[1], a <= i ? f > i && (p - r) * (i - a) > (f - a) * (t - r) && ++e : f <= i && (p - r) * (i - a) < (f - a) * (t - r) && --e;
                    }
                  }

                  return e;
                }(),
                    n = v && e,
                    o = (l = Mt(l)).length;

                (n || o) && (a.polygonStart(), n && (a.lineStart(), r(null, null, 1, a), a.lineEnd()), o && yt(l, s, e, r, a), a.polygonEnd()), _ = a, l = u = c = null;
              }
            };

            function P(t, e) {
              o(t, e) && _.point(t, e);
            }

            function x(r, a) {
              var s = o(r, a);
              if (u && c.push([r, a]), y) h = r, p = a, f = s, y = !1, s && (_.lineStart(), _.point(r, a));else if (s && m) _.point(r, a);else {
                var l = [d = Math.max(Rt, Math.min(kt, d)), g = Math.max(Rt, Math.min(kt, g))],
                    b = [r = Math.max(Rt, Math.min(kt, r)), a = Math.max(Rt, Math.min(kt, a))];
                !function (t, e, n, i, o, r) {
                  var a,
                      s = t[0],
                      l = t[1],
                      u = 0,
                      c = 1,
                      h = e[0] - s,
                      p = e[1] - l;

                  if (a = n - s, h || !(a > 0)) {
                    if (a /= h, h < 0) {
                      if (a < u) return;
                      a < c && (c = a);
                    } else if (h > 0) {
                      if (a > c) return;
                      a > u && (u = a);
                    }

                    if (a = o - s, h || !(a < 0)) {
                      if (a /= h, h < 0) {
                        if (a > c) return;
                        a > u && (u = a);
                      } else if (h > 0) {
                        if (a < u) return;
                        a < c && (c = a);
                      }

                      if (a = i - l, p || !(a > 0)) {
                        if (a /= p, p < 0) {
                          if (a < u) return;
                          a < c && (c = a);
                        } else if (p > 0) {
                          if (a > c) return;
                          a > u && (u = a);
                        }

                        if (a = r - l, p || !(a < 0)) {
                          if (a /= p, p < 0) {
                            if (a > c) return;
                            a > u && (u = a);
                          } else if (p > 0) {
                            if (a < u) return;
                            a < c && (c = a);
                          }

                          return u > 0 && (t[0] = s + u * h, t[1] = l + u * p), c < 1 && (e[0] = s + c * h, e[1] = l + c * p), !0;
                        }
                      }
                    }
                  }
                }(l, b, t, e, n, i) ? s && (_.lineStart(), _.point(r, a), v = !1) : (m || (_.lineStart(), _.point(l[0], l[1])), _.point(b[0], b[1]), s || _.lineEnd(), v = !1);
              }
              d = r, g = a, m = s;
            }

            return w;
          };
        }(E = +t[0][0], i = +t[0][1], o = +t[1][0], r = +t[1][1]), z()) : null == E ? null : [[E, i], [o, r]];
      }, T.scale = function (t) {
        return arguments.length ? (p = +t, R()) : p;
      }, T.translate = function (t) {
        return arguments.length ? (d = +t[0], g = +t[1], R()) : [d, g];
      }, T.center = function (t) {
        return arguments.length ? (m = t[0] % 360 * v, b = t[1] % 360 * v, R()) : [m * y, b * y];
      }, T.rotate = function (t) {
        return arguments.length ? (w = t[0] % 360 * v, x = t[1] % 360 * v, D = t.length > 2 ? t[2] % 360 * v : 0, R()) : [w * y, x * y, D * y];
      }, T.angle = function (t) {
        return arguments.length ? (S = t % 360 * v, R()) : S * y;
      }, T.reflectX = function (t) {
        return arguments.length ? (I = t ? -1 : 1, R()) : I < 0;
      }, T.reflectY = function (t) {
        return arguments.length ? (M = t ? -1 : 1, R()) : M < 0;
      }, T.precision = function (t) {
        return arguments.length ? (a = Kt(s, L = t * t), z()) : j(L);
      }, T.fitExtent = function (t, e) {
        return Ht(T, t, e);
      }, T.fitSize = function (t, e) {
        return Jt(T, t, e);
      }, T.fitWidth = function (t, e) {
        return $t(T, t, e);
      }, T.fitHeight = function (t, e) {
        return Ut(T, t, e);
      }, function () {
        return e = t.apply(this, arguments), T.invert = e.invert && k, R();
      };
    }

    function oe(t, e) {
      return [t, I(C((d + e) / 2))];
    }

    function re() {
      return function (t) {
        var e,
            n,
            i,
            o = ne(t),
            r = o.center,
            a = o.scale,
            s = o.translate,
            l = o.clipExtent,
            u = null;

        function c() {
          var r = f * a(),
              s = o(function (t) {
            function e(e) {
              return (e = t(e[0] * v, e[1] * v))[0] *= y, e[1] *= y, e;
            }

            return t = ct(t[0] * v, t[1] * v, t.length > 2 ? t[2] * v : 0), e.invert = function (e) {
              return (e = t.invert(e[0] * v, e[1] * v))[0] *= y, e[1] *= y, e;
            }, e;
          }(o.rotate()).invert([0, 0]));
          return l(null == u ? [[s[0] - r, s[1] - r], [s[0] + r, s[1] + r]] : t === oe ? [[Math.max(s[0] - r, u), e], [Math.min(s[0] + r, n), i]] : [[u, Math.max(s[1] - r, e)], [n, Math.min(s[1] + r, i)]]);
        }

        return o.scale = function (t) {
          return arguments.length ? (a(t), c()) : a();
        }, o.translate = function (t) {
          return arguments.length ? (s(t), c()) : s();
        }, o.center = function (t) {
          return arguments.length ? (r(t), c()) : r();
        }, o.clipExtent = function (t) {
          return arguments.length ? (null == t ? u = e = n = i = null : (u = +t[0][0], e = +t[0][1], n = +t[1][0], i = +t[1][1]), c()) : null == u ? null : [[u, e], [n, i]];
        }, c();
      }(oe).scale(961 / m);
    }

    oe.invert = function (t, e) {
      return [t, 2 * b(D(e)) - d];
    };

    var ae = n(9395);

    var se =
    /*#__PURE__*/
    function (_at$Q) {
      _inherits(se, _at$Q);

      function se() {
        _classCallCheck(this, se);

        return _possibleConstructorReturn(this, _getPrototypeOf(se).apply(this, arguments));
      }

      _createClass(se, [{
        key: "setupDefaultRules",
        value: function setupDefaultRules() {
          _get(_getPrototypeOf(se.prototype), "setupDefaultRules", this).call(this);

          var t = this._root.interfaceColors,
              e = this.rule.bind(this);
          e("MapChart").setAll({
            projection: re(),
            panX: "translateX",
            panY: "translateY",
            pinchZoom: !0,
            zoomStep: 2,
            zoomLevel: 1,
            rotationX: 0,
            rotationY: 0,
            rotationZ: 0,
            maxZoomLevel: 32,
            minZoomLevel: 1,
            wheelY: "zoom",
            wheelX: "none",
            animationEasing: ae.out(ae.cubic),
            wheelEasing: ae.out(ae.cubic),
            wheelDuration: 0,
            wheelSensitivity: 1,
            maxPanOut: .4,
            centerMapOnZoomOut: !0
          });
          {
            var _n10 = e("MapLine");

            _n10.setAll({
              precision: .5,
              role: "figure"
            }), (0, st.v)(_n10, "stroke", t, "grid");
          }
          e("MapPolygonSeries").setAll({
            affectsBounds: !0
          }), e("MapPointSeries").setAll({
            affectsBounds: !1,
            clipFront: !1,
            clipBack: !0,
            autoScale: !1
          }), e("ClusteredPointSeries").setAll({
            minDistance: 20,
            scatterDistance: 3,
            scatterRadius: 8,
            stopClusterZoom: .95
          }), e("MapLineSeries").setAll({
            affectsBounds: !1
          });
          {
            var _n11 = e("MapPolygon");

            _n11.setAll({
              precision: .5,
              isMeasured: !1,
              role: "figure",
              fillOpacity: 1,
              position: "absolute",
              strokeWidth: .2,
              strokeOpacity: 1
            }), (0, st.v)(_n11, "fill", t, "primaryButton"), (0, st.v)(_n11, "stroke", t, "background");
          }
          e("Button", ["zoomtools", "home"]).setAll({
            visible: !1
          }), e("GraticuleSeries").setAll({
            step: 10
          });
        }
      }]);

      return se;
    }(at.Q);

    var le,
        ue,
        ce,
        he,
        pe = n(5829),
        fe = n(7142),
        de = new c(),
        ge = new c(),
        me = {
      point: L,
      lineStart: L,
      lineEnd: L,
      polygonStart: function polygonStart() {
        me.lineStart = ye, me.lineEnd = be;
      },
      polygonEnd: function polygonEnd() {
        me.lineStart = me.lineEnd = me.point = L, de.add(_(ge)), ge = new c();
      },
      result: function result() {
        var t = de / 2;
        return de = new c(), t;
      }
    };

    function ye() {
      me.point = ve;
    }

    function ve(t, e) {
      me.point = _e, le = ce = t, ue = he = e;
    }

    function _e(t, e) {
      ge.add(he * t - ce * e), ce = t, he = e;
    }

    function be() {
      _e(le, ue);
    }

    var we,
        Pe,
        xe,
        De,
        Se = me,
        Ie = 0,
        Me = 0,
        Ne = 0,
        je = 0,
        Ce = 0,
        Ee = 0,
        Oe = 0,
        Le = 0,
        Te = 0,
        ke = {
      point: Re,
      lineStart: ze,
      lineEnd: Xe,
      polygonStart: function polygonStart() {
        ke.lineStart = Be, ke.lineEnd = Ze;
      },
      polygonEnd: function polygonEnd() {
        ke.point = Re, ke.lineStart = ze, ke.lineEnd = Xe;
      },
      result: function result() {
        var t = Te ? [Oe / Te, Le / Te] : Ee ? [je / Ee, Ce / Ee] : Ne ? [Ie / Ne, Me / Ne] : [NaN, NaN];
        return Ie = Me = Ne = je = Ce = Ee = Oe = Le = Te = 0, t;
      }
    };

    function Re(t, e) {
      Ie += t, Me += e, ++Ne;
    }

    function ze() {
      ke.point = Ge;
    }

    function Ge(t, e) {
      ke.point = Ye, Re(xe = t, De = e);
    }

    function Ye(t, e) {
      var n = t - xe,
          i = e - De,
          o = j(n * n + i * i);
      je += o * (xe + t) / 2, Ce += o * (De + e) / 2, Ee += o, Re(xe = t, De = e);
    }

    function Xe() {
      ke.point = Re;
    }

    function Be() {
      ke.point = Ae;
    }

    function Ze() {
      We(we, Pe);
    }

    function Ae(t, e) {
      ke.point = We, Re(we = xe = t, Pe = De = e);
    }

    function We(t, e) {
      var n = t - xe,
          i = e - De,
          o = j(n * n + i * i);
      je += o * (xe + t) / 2, Ce += o * (De + e) / 2, Ee += o, Oe += (o = De * t - xe * e) * (xe + t), Le += o * (De + e), Te += 3 * o, Re(xe = t, De = e);
    }

    var Fe = ke;

    function Ve(t) {
      this._context = t;
    }

    Ve.prototype = {
      _radius: 4.5,
      pointRadius: function pointRadius(t) {
        return this._radius = t, this;
      },
      polygonStart: function polygonStart() {
        this._line = 0;
      },
      polygonEnd: function polygonEnd() {
        this._line = NaN;
      },
      lineStart: function lineStart() {
        this._point = 0;
      },
      lineEnd: function lineEnd() {
        0 === this._line && this._context.closePath(), this._point = NaN;
      },
      point: function point(t, e) {
        switch (this._point) {
          case 0:
            this._context.moveTo(t, e), this._point = 1;
            break;

          case 1:
            this._context.lineTo(t, e);

            break;

          default:
            this._context.moveTo(t + this._radius, e), this._context.arc(t, e, this._radius, 0, m);
        }
      },
      result: L
    };
    var He,
        Je,
        $e,
        Ue,
        qe,
        Qe = new c(),
        Ke = {
      point: L,
      lineStart: function lineStart() {
        Ke.point = tn;
      },
      lineEnd: function lineEnd() {
        He && en(Je, $e), Ke.point = L;
      },
      polygonStart: function polygonStart() {
        He = !0;
      },
      polygonEnd: function polygonEnd() {
        He = null;
      },
      result: function result() {
        var t = +Qe;
        return Qe = new c(), t;
      }
    };

    function tn(t, e) {
      Ke.point = en, Je = Ue = t, $e = qe = e;
    }

    function en(t, e) {
      Ue -= t, qe -= e, Qe.add(j(Ue * Ue + qe * qe)), Ue = t, qe = e;
    }

    var nn = Ke;
    var on, rn, an, sn;

    var ln =
    /*#__PURE__*/
    function () {
      function ln(t) {
        _classCallCheck(this, ln);

        this._append = null == t ? un : function (t) {
          var e = Math.floor(t);
          if (!(e >= 0)) throw new RangeError("invalid digits: ".concat(t));
          if (e > 15) return un;

          if (e !== on) {
            var _t10 = Math.pow(10, e);

            on = e, rn = function rn(e) {
              var n = 1;
              this._ += e[0];

              for (var _i11 = e.length; n < _i11; ++n) {
                this._ += Math.round(arguments[n] * _t10) / _t10 + e[n];
              }
            };
          }

          return rn;
        }(t), this._radius = 4.5, this._ = "";
      }

      _createClass(ln, [{
        key: "pointRadius",
        value: function pointRadius(t) {
          return this._radius = +t, this;
        }
      }, {
        key: "polygonStart",
        value: function polygonStart() {
          this._line = 0;
        }
      }, {
        key: "polygonEnd",
        value: function polygonEnd() {
          this._line = NaN;
        }
      }, {
        key: "lineStart",
        value: function lineStart() {
          this._point = 0;
        }
      }, {
        key: "lineEnd",
        value: function lineEnd() {
          0 === this._line && (this._ += "Z"), this._point = NaN;
        }
      }, {
        key: "point",
        value: function point(t, e) {
          switch (this._point) {
            case 0:
              this._append(_templateObject(), t, e), this._point = 1;
              break;

            case 1:
              this._append(_templateObject2(), t, e);

              break;

            default:
              if (this._append(_templateObject3(), t, e), this._radius !== an || this._append !== rn) {
                var _t11 = this._radius,
                    _e21 = this._;
                this._ = "", this._append(_templateObject4(), _t11, _t11, _t11, -2 * _t11, _t11, _t11, 2 * _t11), an = _t11, rn = this._append, sn = this._, this._ = _e21;
              }

              this._ += sn;
          }
        }
      }, {
        key: "result",
        value: function result() {
          var t = this._;
          return this._ = "", t.length ? t : null;
        }
      }]);

      return ln;
    }();

    function un(t) {
      var e = 1;
      this._ += t[0];

      for (var _n12 = t.length; e < _n12; ++e) {
        this._ += arguments[e] + t[e];
      }
    }

    var cn,
        hn,
        pn,
        fn,
        dn,
        gn,
        mn,
        yn,
        vn,
        _n,
        bn,
        wn,
        Pn,
        xn,
        Dn,
        Sn,
        In = n(1112),
        Mn = n(3145),
        Nn = n(751),
        jn = {
      sphere: L,
      point: Cn,
      lineStart: On,
      lineEnd: kn,
      polygonStart: function polygonStart() {
        jn.lineStart = Rn, jn.lineEnd = zn;
      },
      polygonEnd: function polygonEnd() {
        jn.lineStart = On, jn.lineEnd = kn;
      }
    };

    function Cn(t, e) {
      t *= v;
      var n = P(e *= v);
      En(n * P(t), n * M(t), M(e));
    }

    function En(t, e, n) {
      ++cn, pn += (t - pn) / cn, fn += (e - fn) / cn, dn += (n - dn) / cn;
    }

    function On() {
      jn.point = Ln;
    }

    function Ln(t, e) {
      t *= v;
      var n = P(e *= v);
      xn = n * P(t), Dn = n * M(t), Sn = M(e), jn.point = Tn, En(xn, Dn, Sn);
    }

    function Tn(t, e) {
      t *= v;
      var n = P(e *= v),
          i = n * P(t),
          o = n * M(t),
          r = M(e),
          a = w(j((a = Dn * r - Sn * o) * a + (a = Sn * i - xn * r) * a + (a = xn * o - Dn * i) * a), xn * i + Dn * o + Sn * r);
      hn += a, gn += a * (xn + (xn = i)), mn += a * (Dn + (Dn = o)), yn += a * (Sn + (Sn = r)), En(xn, Dn, Sn);
    }

    function kn() {
      jn.point = Cn;
    }

    function Rn() {
      jn.point = Gn;
    }

    function zn() {
      Yn(wn, Pn), jn.point = Cn;
    }

    function Gn(t, e) {
      wn = t, Pn = e, t *= v, e *= v, jn.point = Yn;
      var n = P(e);
      xn = n * P(t), Dn = n * M(t), Sn = M(e), En(xn, Dn, Sn);
    }

    function Yn(t, e) {
      t *= v;
      var n = P(e *= v),
          i = n * P(t),
          o = n * M(t),
          r = M(e),
          a = Dn * r - Sn * o,
          s = Sn * i - xn * r,
          l = xn * o - Dn * i,
          u = S(a, s, l),
          c = E(u),
          h = u && -c / u;
      vn.add(h * a), _n.add(h * s), bn.add(h * l), hn += c, gn += c * (xn + (xn = i)), mn += c * (Dn + (Dn = o)), yn += c * (Sn + (Sn = r)), En(xn, Dn, Sn);
    }

    var Xn,
        Bn,
        Zn,
        An,
        Wn,
        Fn,
        Vn,
        Hn,
        Jn,
        $n,
        Un,
        qn,
        Qn,
        Kn,
        ti,
        ei,
        ni = new c(),
        ii = new c(),
        oi = {
      point: L,
      lineStart: L,
      lineEnd: L,
      polygonStart: function polygonStart() {
        ni = new c(), oi.lineStart = ri, oi.lineEnd = ai;
      },
      polygonEnd: function polygonEnd() {
        var t = +ni;
        ii.add(t < 0 ? m + t : t), this.lineStart = this.lineEnd = this.point = L;
      },
      sphere: function sphere() {
        ii.add(m);
      }
    };

    function ri() {
      oi.point = si;
    }

    function ai() {
      li(Xn, Bn);
    }

    function si(t, e) {
      oi.point = li, Xn = t, Bn = e, Zn = t *= v, An = P(e = (e *= v) / 2 + g), Wn = M(e);
    }

    function li(t, e) {
      var n = (t *= v) - Zn,
          i = n >= 0 ? 1 : -1,
          o = i * n,
          r = P(e = (e *= v) / 2 + g),
          a = M(e),
          s = Wn * a,
          l = An * r + s * P(o),
          u = s * i * M(o);
      ni.add(w(u, l)), Zn = t, An = r, Wn = a;
    }

    function ui(t) {
      return ii = new c(), A(t, oi), 2 * ii;
    }

    var ci = {
      point: hi,
      lineStart: fi,
      lineEnd: di,
      polygonStart: function polygonStart() {
        ci.point = gi, ci.lineStart = mi, ci.lineEnd = yi, Kn = new c(), oi.polygonStart();
      },
      polygonEnd: function polygonEnd() {
        oi.polygonEnd(), ci.point = hi, ci.lineStart = fi, ci.lineEnd = di, ni < 0 ? (Fn = -(Hn = 180), Vn = -(Jn = 90)) : Kn > h ? Jn = 90 : Kn < -h && (Vn = -90), ei[0] = Fn, ei[1] = Hn;
      },
      sphere: function sphere() {
        Fn = -(Hn = 180), Vn = -(Jn = 90);
      }
    };

    function hi(t, e) {
      ti.push(ei = [Fn = t, Hn = t]), e < Vn && (Vn = e), e > Jn && (Jn = e);
    }

    function pi(t, e) {
      var n = bt([t * v, e * v]);

      if (Qn) {
        var i = Pt(Qn, n),
            o = Pt([i[1], -i[0], 0], i);
        St(o), o = _t(o);
        var r,
            a = t - $n,
            s = a > 0 ? 1 : -1,
            l = o[0] * y * s,
            u = _(a) > 180;
        u ^ (s * $n < l && l < s * t) ? (r = o[1] * y) > Jn && (Jn = r) : u ^ (s * $n < (l = (l + 360) % 360 - 180) && l < s * t) ? (r = -o[1] * y) < Vn && (Vn = r) : (e < Vn && (Vn = e), e > Jn && (Jn = e)), u ? t < $n ? vi(Fn, t) > vi(Fn, Hn) && (Hn = t) : vi(t, Hn) > vi(Fn, Hn) && (Fn = t) : Hn >= Fn ? (t < Fn && (Fn = t), t > Hn && (Hn = t)) : t > $n ? vi(Fn, t) > vi(Fn, Hn) && (Hn = t) : vi(t, Hn) > vi(Fn, Hn) && (Fn = t);
      } else ti.push(ei = [Fn = t, Hn = t]);

      e < Vn && (Vn = e), e > Jn && (Jn = e), Qn = n, $n = t;
    }

    function fi() {
      ci.point = pi;
    }

    function di() {
      ei[0] = Fn, ei[1] = Hn, ci.point = hi, Qn = null;
    }

    function gi(t, e) {
      if (Qn) {
        var n = t - $n;
        Kn.add(_(n) > 180 ? n + (n > 0 ? 360 : -360) : n);
      } else Un = t, qn = e;

      oi.point(t, e), pi(t, e);
    }

    function mi() {
      oi.lineStart();
    }

    function yi() {
      gi(Un, qn), oi.lineEnd(), _(Kn) > h && (Fn = -(Hn = 180)), ei[0] = Fn, ei[1] = Hn, Qn = null;
    }

    function vi(t, e) {
      return (e -= t) < 0 ? e + 360 : e;
    }

    function _i(t, e) {
      return t[0] - e[0];
    }

    function bi(t, e) {
      return t[0] <= t[1] ? t[0] <= e && e <= t[1] : e < t[0] || t[1] < e;
    }

    function wi(t, e) {
      return function () {
        var t,
            e,
            n = Ot([0, 0]),
            i = Ot(90),
            o = Ot(6),
            r = {
          point: function point(n, i) {
            t.push(n = e(n, i)), n[0] *= y, n[1] *= y;
          }
        };

        function a() {
          var a = n.apply(this, arguments),
              s = i.apply(this, arguments) * v,
              l = o.apply(this, arguments) * v;
          return t = [], e = ct(-a[0] * v, -a[1] * v, 0).invert, Lt(r, s, l, 1), a = {
            type: "Polygon",
            coordinates: [t]
          }, t = e = null, a;
        }

        return a.center = function (t) {
          return arguments.length ? (n = "function" == typeof t ? t : Ot([+t[0], +t[1]]), a) : n;
        }, a.radius = function (t) {
          return arguments.length ? (i = "function" == typeof t ? t : Ot(+t), a) : i;
        }, a.precision = function (t) {
          return arguments.length ? (o = "function" == typeof t ? t : Ot(+t), a) : o;
        }, a;
      }().center([t.longitude, t.latitude]).radius(e)();
    }

    function Pi(t) {
      var e = function (t) {
        cn = hn = pn = fn = dn = gn = mn = yn = 0, vn = new c(), _n = new c(), bn = new c(), A(t, jn);
        var e = +vn,
            n = +_n,
            i = +bn,
            o = S(e, n, i);
        return o < p && (e = gn, n = mn, i = yn, hn < h && (e = pn, n = fn, i = dn), (o = S(e, n, i)) < p) ? [NaN, NaN] : [w(n, e) * y, E(i / o) * y];
      }(t);

      return {
        longitude: e[0],
        latitude: e[1]
      };
    }

    function xi(t) {
      return ui(t);
    }

    function Di(t) {
      var e = function (t) {
        var e, n, i, o, r, a, s;

        if (Jn = Hn = -(Fn = Vn = 1 / 0), ti = [], A(t, ci), n = ti.length) {
          for (ti.sort(_i), e = 1, r = [i = ti[0]]; e < n; ++e) {
            bi(i, (o = ti[e])[0]) || bi(i, o[1]) ? (vi(i[0], o[1]) > vi(i[0], i[1]) && (i[1] = o[1]), vi(o[0], i[1]) > vi(i[0], i[1]) && (i[0] = o[0])) : r.push(i = o);
          }

          for (a = -1 / 0, e = 0, i = r[n = r.length - 1]; e <= n; i = o, ++e) {
            o = r[e], (s = vi(i[1], o[0])) > a && (a = s, Fn = o[0], Hn = i[1]);
          }
        }

        return ti = ei = null, Fn === 1 / 0 || Vn === 1 / 0 ? [[NaN, NaN], [NaN, NaN]] : [[Fn, Vn], [Hn, Jn]];
      }(t);

      if (e) {
        var _t12 = {
          left: e[0][0],
          right: e[1][0],
          top: e[1][1],
          bottom: e[0][1]
        };
        return _t12.right < _t12.left && (_t12.right = 180, _t12.left = -180), _t12;
      }

      return {
        left: 0,
        right: 0,
        top: 0,
        bottom: 0
      };
    }

    function Si(t, e, n, i) {
      var o = [];
      i <= -180 && (i = -179.9999), n <= -90 && (n = -89.9999), t >= 90 && (t = 89.9999), e >= 180 && (e = 179.9999);
      var r = Math.min(90, (e - i) / Math.ceil((e - i) / 90)),
          a = (t - n) / Math.ceil((t - n) / 90);

      for (var _s3 = i; _s3 < e; _s3 += r) {
        var _i12 = [];
        o.push([_i12]), _s3 + r > e && (r = e - _s3);

        for (var _e22 = _s3; _e22 <= _s3 + r; _e22 += 5) {
          _i12.push([_e22, t]);
        }

        for (var _e23 = t; _e23 >= n; _e23 -= a) {
          _i12.push([_s3 + r, _e23]);
        }

        for (var _t13 = _s3 + r; _t13 >= _s3; _t13 -= 5) {
          _i12.push([_t13, n]);
        }

        for (var _e24 = n; _e24 <= t; _e24 += a) {
          _i12.push([_s3, _e24]);
        }
      }

      return {
        type: "MultiPolygon",
        coordinates: o
      };
    }

    function Ii(t) {
      var e = Mi(t.longitude),
          n = Math.asin(Math.sin(t.latitude * Nn.RADIANS)) * Nn.DEGREES,
          i = Mi(t.latitude);
      return Math.abs(i) > 90 && (e = Mi(e + 180)), t.longitude = e, t.latitude = n, t;
    }

    function Mi(t) {
      return (t %= 360) > 180 && (t -= 360), t < -180 && (t += 360), t;
    }

    var Ni = n(7652);

    var ji =
    /*#__PURE__*/
    function (_pe$j) {
      _inherits(ji, _pe$j);

      function ji() {
        var _this12;

        _classCallCheck(this, ji);

        _this12 = _possibleConstructorReturn(this, _getPrototypeOf(ji).apply(this, arguments)), Object.defineProperty(_assertThisInitialized(_this12), "_downTranslateX", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: void 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_downTranslateY", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: void 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_downRotationX", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: void 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_downRotationY", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: void 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_downRotationZ", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: void 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_pLat", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_pLon", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_movePoints", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: {}
        }), Object.defineProperty(_assertThisInitialized(_this12), "_downZoomLevel", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: 1
        }), Object.defineProperty(_assertThisInitialized(_this12), "_doubleDownDistance", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_dirtyGeometries", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: !1
        }), Object.defineProperty(_assertThisInitialized(_this12), "_geometryColection", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: {
            type: "GeometryCollection",
            geometries: []
          }
        }), Object.defineProperty(_assertThisInitialized(_this12), "_centerLocation", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: null
        }), Object.defineProperty(_assertThisInitialized(_this12), "_za", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: void 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_rxa", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: void 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_rya", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: void 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_txa", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: void 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_tya", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: void 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_mapBounds", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: [[0, 0], [0, 0]]
        }), Object.defineProperty(_assertThisInitialized(_this12), "_geoCentroid", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: {
            longitude: 0,
            latitude: 0
          }
        }), Object.defineProperty(_assertThisInitialized(_this12), "_geoBounds", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: {
            left: 0,
            right: 0,
            top: 0,
            bottom: 0
          }
        }), Object.defineProperty(_assertThisInitialized(_this12), "_prevGeoBounds", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: {
            left: 0,
            right: 0,
            top: 0,
            bottom: 0
          }
        }), Object.defineProperty(_assertThisInitialized(_this12), "_dispatchBounds", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: !1
        }), Object.defineProperty(_assertThisInitialized(_this12), "_wheelDp", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: void 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_pw", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: void 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_ph", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: void 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_mapFitted", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: !1
        }), Object.defineProperty(_assertThisInitialized(_this12), "_centerX", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: 0
        }), Object.defineProperty(_assertThisInitialized(_this12), "_centerY", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: 0
        });
        return _this12;
      }

      _createClass(ji, [{
        key: "_makeGeoPath",
        value: function _makeGeoPath() {
          var t = this.get("projection"),
              e = function (t, e) {
            var n,
                i,
                o = 3,
                r = 4.5;

            function a(t) {
              return t && ("function" == typeof r && i.pointRadius(+r.apply(this, arguments)), A(t, n(i))), i.result();
            }

            return a.area = function (t) {
              return A(t, n(Se)), Se.result();
            }, a.measure = function (t) {
              return A(t, n(nn)), nn.result();
            }, a.bounds = function (t) {
              return A(t, n(Ft)), Ft.result();
            }, a.centroid = function (t) {
              return A(t, n(Fe)), Fe.result();
            }, a.projection = function (e) {
              return arguments.length ? (n = null == e ? (t = null, zt) : (t = e).stream, a) : t;
            }, a.context = function (t) {
              return arguments.length ? (i = null == t ? (e = null, new ln(o)) : new Ve(e = t), "function" != typeof r && i.pointRadius(r), a) : e;
            }, a.pointRadius = function (t) {
              return arguments.length ? (r = "function" == typeof t ? t : (i.pointRadius(+t), +t), a) : r;
            }, a.digits = function (t) {
              if (!arguments.length) return o;
              if (null == t) o = null;else {
                var _e25 = Math.floor(t);

                if (!(_e25 >= 0)) throw new RangeError("invalid digits: ".concat(t));
                o = _e25;
              }
              return null === e && (i = new ln(o)), a;
            }, a.projection(t).digits(o).context(e);
          }();

          e.projection(t), this.setPrivateRaw("geoPath", e);
        }
      }, {
        key: "geoPoint",
        value: function geoPoint() {
          return this.invert(this.seriesContainer.toGlobal({
            x: this.width() / 2,
            y: this.height() / 2
          }));
        }
      }, {
        key: "geoCentroid",
        value: function geoCentroid() {
          return this._geoCentroid;
        }
      }, {
        key: "geoBounds",
        value: function geoBounds() {
          return this._geoBounds;
        }
      }, {
        key: "_handleSetWheel",
        value: function _handleSetWheel() {
          var _this13 = this;

          var t = this.get("wheelX"),
              e = this.get("wheelY"),
              n = this.chartContainer;
          "none" != t || "none" != e ? (this._wheelDp && this._wheelDp.dispose(), this._wheelDp = n.events.on("wheel", function (i) {
            var o = _this13.get("wheelEasing"),
                r = _this13.get("wheelSensitivity", 1),
                a = _this13.get("wheelDuration", 0),
                s = i.originalEvent;

            if (!Ni.isLocalEvent(s, _this13)) return;
            s.preventDefault();

            var l = n._display.toLocal(i.point);

            "zoom" == e ? _this13._handleWheelZoom(s.deltaY, l) : "rotateY" == e ? _this13._handleWheelRotateY(s.deltaY / 5 * r, a, o) : "rotateX" == e && _this13._handleWheelRotateX(s.deltaY / 5 * r, a, o), "zoom" == t ? _this13._handleWheelZoom(s.deltaX, l) : "rotateY" == t ? _this13._handleWheelRotateY(s.deltaX / 5 * r, a, o) : "rotateX" == t && _this13._handleWheelRotateX(s.deltaX / 5 * r, a, o);
          }), this._disposers.push(this._wheelDp)) : this._wheelDp && this._wheelDp.dispose();
        }
      }, {
        key: "_prepareChildren",
        value: function _prepareChildren() {
          var _this14 = this;

          _get(_getPrototypeOf(ji.prototype), "_prepareChildren", this).call(this);

          var t = this.get("projection"),
              e = this.innerWidth(),
              n = this.innerHeight(),
              i = this._geometryColection.geometries;

          if (this.isDirty("projection")) {
            this._makeGeoPath(), this.markDirtyProjection(), this._fitMap(), t.scale(this.getPrivate("mapScale") * this.get("zoomLevel", 1)), t.rotate && t.rotate([this.get("rotationX", 0), this.get("rotationY", 0), this.get("rotationZ", 0)]);
            var _i13 = this._prevSettings.projection;

            if (_i13 && _i13 != t) {
              var _o8 = e / 2,
                  _r7 = n / 2;

              if (_i13.invert) {
                var _e26 = _i13.invert([_o8, _r7]);

                if (_e26) {
                  var _n13 = t(_e26);

                  if (_n13) {
                    var _e27 = t.translate(),
                        _i14 = _o8 - (_n13[0] - _e27[0]),
                        _a7 = _r7 - (_n13[1] - _e27[1]);

                    t.translate([_i14, _a7]), this.setRaw("translateX", _i14), this.setRaw("translateY", _a7);
                  }
                }
              }
            }
          }

          if ((this.isDirty("wheelX") || this.isDirty("wheelY")) && this._handleSetWheel(), this._dirtyGeometries && (this._geometryColection.geometries = [], this.series.each(function (t) {
            o.pushAll(_this14._geometryColection.geometries, t._geometries);
          }), this._fitMap()), 0 != i.length && (e != this._pw || n != this._ph || this._dirtyGeometries) && e > 0 && n > 0) {
            var _i15 = e / 2,
                _o9 = n / 2;

            t.fitSize([e, n], this._geometryColection);

            var _r8 = t.scale();

            if (this.setPrivateRaw("mapScale", _r8), t.scale(_r8 * this.get("zoomLevel", 1)), this._centerLocation) {
              var _e28 = t(this._centerLocation);

              if (_e28) {
                var _n14 = t.translate(),
                    _r9 = _i15 - (_e28[0] - _n14[0]),
                    _a9 = _o9 - (_e28[1] - _n14[1]);

                t.translate([_r9, _a9]), this.setRaw("translateX", _r9), this.setRaw("translateY", _a9), this._centerX = _n14[0], this._centerY = _n14[1];
              }
            }

            this.markDirtyProjection();

            var _a8 = this.getPrivate("geoPath");

            this._mapBounds = _a8.bounds(this._geometryColection);
          }

          if (this._pw = e, this._ph = n, this.isDirty("zoomControl")) {
            var _t14 = this._prevSettings.zoomControl,
                _e29 = this.get("zoomControl");

            _e29 !== _t14 && (this._disposeProperty("zoomControl"), _t14 && _t14.dispose(), _e29 && (_e29.setPrivate("chart", this), this.children.push(_e29)), this.setRaw("zoomControl", _e29));
          }

          this.isDirty("zoomLevel") && (t.scale(this.getPrivate("mapScale") * this.get("zoomLevel", 1)), this.markDirtyProjection(), this.series.each(function (t) {
            t.isType("MapPointSeries") && t.get("autoScale") && o.each(t.dataItems, function (t) {
              var e = t.bullets;
              e && o.each(e, function (t) {
                var e = t.get("sprite");
                e && e.set("scale", _this14.get("zoomLevel"));
              });
            });
          })), (this.isDirty("translateX") || this.isDirty("translateY")) && (t.translate([this.get("translateX", this.width() / 2), this.get("translateY", this.height() / 2)]), this.markDirtyProjection()), t.rotate && (this.isDirty("rotationX") || this.isDirty("rotationY") || this.isDirty("rotationZ")) && (t.rotate([this.get("rotationX", 0), this.get("rotationY", 0), this.get("rotationZ", 0)]), this.markDirtyProjection()), (this.isDirty("pinchZoom") || this.get("panX") || this.get("panY")) && this._setUpTouch();
        }
      }, {
        key: "_fitMap",
        value: function _fitMap() {
          var t = this.get("projection");
          var e = this.innerWidth(),
              n = this.innerHeight();

          if (e > 0 && n > 0) {
            t.fitSize([e, n], this._geometryColection), this.setPrivateRaw("mapScale", t.scale());

            var _i16 = t.translate();

            this.setRaw("translateX", _i16[0]), this.setRaw("translateY", _i16[1]), this._centerX = _i16[0], this._centerY = _i16[1];

            var _o10 = this.getPrivate("geoPath");

            this._mapBounds = _o10.bounds(this._geometryColection), this._geoCentroid = Pi(this._geometryColection);

            var _r10 = Di(this._geometryColection);

            if (this._geoBounds = _r10, this._geometryColection.geometries.length > 0) {
              _r10.left = Nn.round(this._geoBounds.left, 3), _r10.right = Nn.round(this._geoBounds.right, 3), _r10.top = Nn.round(this._geoBounds.top, 3), _r10.bottom = Nn.round(this._geoBounds.bottom, 3);
              var _t15 = this._prevGeoBounds;
              _t15 && !Ni.sameBounds(_r10, _t15) && (this._dispatchBounds = !0, this._prevGeoBounds = _r10);
            }

            this._mapFitted = !0;
          }
        }
      }, {
        key: "homeGeoPoint",
        value: function homeGeoPoint() {
          var t = this.get("homeGeoPoint");

          if (!t) {
            var _e30 = this.getPrivate("geoPath").bounds(this._geometryColection),
                _n15 = _e30[0][0],
                _i17 = _e30[0][1],
                _o11 = _e30[1][0],
                _r11 = _e30[1][1];

            t = this.invert({
              x: _n15 + (_o11 - _n15) / 2,
              y: _i17 + (_r11 - _i17) / 2
            });
          }

          return t;
        }
      }, {
        key: "goHome",
        value: function goHome(t) {
          this.zoomToGeoPoint(this.homeGeoPoint(), this.get("homeZoomLevel", 1), !0, t, this.get("homeRotationX"), this.get("homeRotationY"));
        }
      }, {
        key: "_updateChildren",
        value: function _updateChildren() {
          var t = this.get("projection");

          if (t.invert) {
            var _e31 = this.innerWidth(),
                _n16 = this.innerHeight();

            _e31 > 0 && _n16 > 0 && (this._centerLocation = t.invert([this.innerWidth() / 2, this.innerHeight() / 2]));
          }

          _get(_getPrototypeOf(ji.prototype), "_updateChildren", this).call(this);
        }
      }, {
        key: "_afterChanged",
        value: function _afterChanged() {
          if (_get(_getPrototypeOf(ji.prototype), "_afterChanged", this).call(this), this._dispatchBounds) {
            this._dispatchBounds = !1;
            var _t16 = "geoboundschanged";
            this.events.isEnabled(_t16) && this.events.dispatch(_t16, {
              type: _t16,
              target: this
            });
          }
        }
      }, {
        key: "_setUpTouch",
        value: function _setUpTouch() {
          this.chartContainer._display.cancelTouch || (this.chartContainer._display.cancelTouch = !!(this.get("pinchZoom") || this.get("panX") || this.get("panY")));
        }
      }, {
        key: "markDirtyGeometries",
        value: function markDirtyGeometries() {
          this._dirtyGeometries = !0, this.markDirty();
        }
      }, {
        key: "markDirtyProjection",
        value: function markDirtyProjection() {
          this.series.each(function (t) {
            t.markDirtyProjection();
          });
        }
      }, {
        key: "_afterNew",
        value: function _afterNew() {
          var _this15 = this;

          this._defaultThemes.push(se["new"](this._root)), this._settings.themeTags = Ni.mergeTags(this._settings.themeTags, ["map"]), this.children.push(this.bulletsContainer), _get(_getPrototypeOf(ji.prototype), "_afterNew", this).call(this), this._makeGeoPath(), this.chartContainer.children.push(this.seriesContainer), null == this.get("translateX") && this.set("translateX", this.width() / 2), null == this.get("translateY") && this.set("translateY", this.height() / 2), this.chartContainer.set("interactive", !0), this.chartContainer.set("interactiveChildren", !1), this.chartContainer.set("background", fe.A["new"](this._root, {
            themeTags: ["map", "background"],
            fill: In.Il.fromHex(0),
            fillOpacity: 0
          })), this._disposers.push(this.chartContainer.events.on("pointerdown", function (t) {
            _this15._handleChartDown(t);
          })), this._disposers.push(this.chartContainer.events.on("globalpointerup", function (t) {
            _this15._handleChartUp(t);
          })), this._disposers.push(this.chartContainer.events.on("globalpointermove", function (t) {
            _this15._handleChartMove(t);
          }));
          var t = !1;

          for (var _e32 = 0; _e32 < Mn.i_.licenses.length; _e32++) {
            Mn.i_.licenses[_e32].match(/^AM5M.{5,}/i) && (t = !0);
          }

          t ? this._root._licenseApplied() : this._root._showBranding(), this._setUpTouch();
        }
      }, {
        key: "_handleChartDown",
        value: function _handleChartDown(t) {
          this._downZoomLevel = this.get("zoomLevel", 1);
          var e = this.chartContainer._downPoints;
          var n = r.keys(e).length;

          if (1 == n) {
            var _i18 = e[1];
            _i18 || (_i18 = e[0]), _i18 && _i18.x == t.point.x && _i18.y == t.point.y && (n = 0);
          }

          if (n > 0) {
            this._downTranslateX = this.get("translateX"), this._downTranslateY = this.get("translateY"), this._downRotationX = this.get("rotationX"), this._downRotationY = this.get("rotationY"), this._downRotationZ = this.get("rotationZ");

            var _t17 = this.chartContainer._getDownPointId();

            if (_t17) {
              var _e33 = this._movePoints[_t17];
              _e33 && (this.chartContainer._downPoints[_t17] = _e33);
            }
          } else if (0 == n) {
            var _e34 = this.chartContainer.get("background");

            if (_e34 && _e34.events.enableType("click"), this.get("panX") || this.get("panY")) {
              this._za && this._za.stop(), this._txa && this._txa.stop(), this._tya && this._tya.stop(), this._rxa && this._rxa.stop(), this._rya && this._rya.stop();

              var _e35 = this.chartContainer._display.toLocal(t.point);

              this._downTranslateX = this.get("translateX"), this._downTranslateY = this.get("translateY"), this._downRotationX = this.get("rotationX"), this._downRotationY = this.get("rotationY"), this._downRotationZ = this.get("rotationZ");

              var _n17 = this.get("projection");

              if (_n17.invert) {
                var _t18 = _n17.invert([_e35.x, _e35.y]),
                    _i19 = _n17.invert([_e35.x + 1, _e35.y + 1]);

                _t18 && _i19 && (this._pLon = Math.abs(_i19[0] - _t18[0]), this._pLat = Math.abs(_i19[1] - _t18[1]));
              }
            }
          }
        }
      }, {
        key: "invert",
        value: function invert(t) {
          var e = this.get("projection");

          if (e.invert) {
            var _n18 = e.invert([t.x, t.y]);

            if (_n18) return {
              longitude: _n18[0],
              latitude: _n18[1]
            };
          }

          return {
            longitude: 0,
            latitude: 0
          };
        }
      }, {
        key: "convert",
        value: function convert(t, e, n) {
          var i,
              o = this.get("projection");

          if (o.rotate || (e = void 0, n = void 0), null != e || null != n) {
            null == e && (e = 0), null == n && (n = 0);

            var _r12 = o.rotate();

            o.rotate([e, n, 0]), i = o([t.longitude, t.latitude]), o.rotate(_r12);
          } else i = o([t.longitude, t.latitude]);

          return i ? {
            x: i[0],
            y: i[1]
          } : {
            x: 0,
            y: 0
          };
        }
      }, {
        key: "_handleChartUp",
        value: function _handleChartUp(t) {
          this.chartContainer._downPoints = {};
        }
      }, {
        key: "_handlePinch",
        value: function _handlePinch() {
          var _this16 = this;

          var t = this.chartContainer;
          var e = 0,
              n = [],
              i = [];

          if (r.each(t._downPoints, function (t, o) {
            n[e] = o;
            var r = _this16._movePoints[t];
            r && (i[e] = r), e++;
          }), n.length > 1 && i.length > 1) {
            var _e36 = t._display;
            var _o12 = n[0],
                _r13 = n[1],
                _a10 = i[0],
                _s4 = i[1];

            if (_o12 && _r13 && _a10 && _s4) {
              _o12 = _e36.toLocal(_o12), _r13 = _e36.toLocal(_r13), _a10 = _e36.toLocal(_a10), _s4 = _e36.toLocal(_s4);

              var _t19 = Math.hypot(_r13.x - _o12.x, _r13.y - _o12.y),
                  _n19 = Math.hypot(_s4.x - _a10.x, _s4.y - _a10.y) / _t19 * this._downZoomLevel;

              _n19 = Nn.fitToRange(_n19, this.get("minZoomLevel", 1), this.get("maxZoomLevel", 32));

              var _i20 = {
                x: _a10.x + (_s4.x - _a10.x) / 2,
                y: _a10.y + (_s4.y - _a10.y) / 2
              },
                  _l3 = {
                x: _o12.x + (_r13.x - _o12.x) / 2,
                y: _o12.y + (_r13.y - _o12.y) / 2
              },
                  _u2 = this._downTranslateX || 0,
                  _c2 = this._downTranslateY || 0,
                  _h2 = this._downZoomLevel,
                  _p2 = _i20.x - (-_u2 + _l3.x) / _h2 * _n19,
                  _f2 = _i20.y - (-_c2 + _l3.y) / _h2 * _n19;

              this.set("zoomLevel", _n19), this.set("translateX", _p2), this.set("translateY", _f2);
            }
          }
        }
      }, {
        key: "_handleChartMove",
        value: function _handleChartMove(t) {
          var e = this.chartContainer;

          var n = e._getDownPoint();

          var i = e._getDownPointId(),
              o = t.originalEvent.pointerId;

          if (this.get("pinchZoom") && o && (this._movePoints[o] = t.point, r.keys(e._downPoints).length > 1)) this._handlePinch();else if ((!i || !o || o == i) && n) {
            var _i21 = this.get("panX"),
                _o13 = this.get("panY");

            if ("none" != _i21 || "none" != _o13) {
              var _r14 = e._display;

              var _a11 = _r14.toLocal(t.point);

              n = _r14.toLocal(n);
              var _l4 = this._downTranslateX,
                  _u3 = this._downTranslateY;

              if (Math.hypot(n.x - _a11.x, n.y - _a11.y) > 5) {
                var _t20 = e.get("background");

                if (_t20 && _t20.events.disableType("click"), s.isNumber(_l4) && s.isNumber(_u3)) {
                  var _t21 = this.get("projection");

                  var _e37 = this.get("zoomLevel", 1),
                      _r15 = this.get("maxPanOut", .4),
                      _s5 = this._mapBounds,
                      _c3 = this.width(),
                      _h3 = this.height(),
                      _p3 = _s5[1][0] - _s5[0][0],
                      _f3 = _s5[1][1] - _s5[0][1];

                  if ("translateX" == _i21) {
                    _l4 += _a11.x - n.x;

                    var _t22 = _c3 / 2 - (_c3 / 2 - this._centerX) * _e37;

                    _l4 = Math.min(_l4, _t22 + _p3 * _r15 * _e37), _l4 = Math.max(_l4, _t22 - _p3 * _r15 * _e37);
                  }

                  if ("translateY" == _o13) {
                    _u3 += _a11.y - n.y;

                    var _t23 = _h3 / 2 - (_h3 / 2 - this._centerY) * _e37;

                    _u3 = Math.min(_u3, _t23 + _f3 * _r15 * _e37), _u3 = Math.max(_u3, _t23 - _f3 * _r15 * _e37);
                  }

                  if (this.set("translateX", _l4), this.set("translateY", _u3), _t21.invert) {
                    var _e38 = _t21.invert([n.x, n.y]);

                    location && _e38 && ("rotateX" == _i21 && this.set("rotationX", this._downRotationX - (n.x - _a11.x) * this._pLon), "rotateY" == _o13 && this.set("rotationY", this._downRotationY + (n.y - _a11.y) * this._pLat));
                  }
                }
              }
            }
          }
        }
      }, {
        key: "_handleWheelRotateY",
        value: function _handleWheelRotateY(t, e, n) {
          this._rya = this.animate({
            key: "rotationY",
            to: this.get("rotationY", 0) - t,
            duration: e,
            easing: n
          });
        }
      }, {
        key: "_handleWheelRotateX",
        value: function _handleWheelRotateX(t, e, n) {
          this._rxa = this.animate({
            key: "rotationX",
            to: this.get("rotationX", 0) - t,
            duration: e,
            easing: n
          });
        }
      }, {
        key: "_handleWheelZoom",
        value: function _handleWheelZoom(t, e) {
          var n = this.get("zoomStep", 2),
              i = this.get("zoomLevel", 1),
              o = i;
          t > 0 ? o = i / n : t < 0 && (o = i * n), o != i && this.zoomToPoint(e, o);
        }
      }, {
        key: "zoomToGeoBounds",
        value: function zoomToGeoBounds(t, e, n, i) {
          t.right < t.left && (t.right = 180, t.left = -180);
          var o = this.getPrivate("geoPath").bounds(this._geometryColection);
          var r = this.convert({
            longitude: t.left,
            latitude: t.top
          }, n, i),
              a = this.convert({
            longitude: t.right,
            latitude: t.bottom
          }, n, i);
          r.y < o[0][1] && (r.y = o[0][1]), a.y > o[1][1] && (a.y = o[1][1]);
          var s = this.get("zoomLevel", 1),
              l = r.x,
              u = a.x,
              c = r.y,
              h = a.y,
              p = this.seriesContainer,
              f = .9 * Math.min(p.innerWidth() / (u - l) * s, p.innerHeight() / (h - c) * s),
              d = l + (u - l) / 2,
              g = c + (h - c) / 2,
              m = this.invert({
            x: d,
            y: g
          });
          return null == n && null == i || this.rotate(n, i), this.zoomToGeoPoint(m, f, !0, e);
        }
      }, {
        key: "zoomToPoint",
        value: function zoomToPoint(t, e, n, i) {
          e && (e = Nn.fitToRange(e, this.get("minZoomLevel", 1), this.get("maxZoomLevel", 32))), s.isNumber(i) || (i = this.get("animationDuration", 0));
          var o = this.get("animationEasing"),
              r = this.get("zoomLevel", 1);
          this.get("centerMapOnZoomOut") && e == this.get("homeZoomLevel", 1) && (t = this.convert(this.homeGeoPoint(), this.get("homeRotationX"), this.get("homeRotationY")), n = !0);
          var a = t.x,
              l = t.y,
              u = this.get("translateX", 0),
              c = this.get("translateY", 0),
              h = a,
              p = l;
          n && (h = this.width() / 2, p = this.height() / 2);
          var f = h - (a - u) / r * e,
              d = p - (l - c) / r * e;
          return this._txa = this.animate({
            key: "translateX",
            to: f,
            duration: i,
            easing: o
          }), this._tya = this.animate({
            key: "translateY",
            to: d,
            duration: i,
            easing: o
          }), this._za = this.animate({
            key: "zoomLevel",
            to: e,
            duration: i,
            easing: o
          }), r != e && this._root.readerAlert(this._t("Zoom level changed to %1", this._root.locale, s.numberToString(e))), this._za;
        }
      }, {
        key: "zoomToGeoPoint",
        value: function zoomToGeoPoint(t, e, n, i, o, r) {
          var a = this.convert(t, o, r);
          if (null == o && null == r || this.rotate(o, r, i), a) return this.zoomToPoint(a, e, n, i);
        }
      }, {
        key: "rotate",
        value: function rotate(t, e, n) {
          if (this.get("projection").rotate) {
            s.isNumber(n) || (n = this.get("animationDuration", 0));

            var _i22 = this.get("animationEasing");

            null != t && this.animate({
              key: "rotationX",
              to: t,
              duration: n,
              easing: _i22
            }), null != e && this.animate({
              key: "rotationY",
              to: e,
              duration: n,
              easing: _i22
            });
          }
        }
      }, {
        key: "zoomIn",
        value: function zoomIn() {
          return this.zoomToPoint({
            x: this.width() / 2,
            y: this.height() / 2
          }, this.get("zoomLevel", 1) * this.get("zoomStep", 2));
        }
      }, {
        key: "zoomOut",
        value: function zoomOut() {
          return this.zoomToPoint({
            x: this.width() / 2,
            y: this.height() / 2
          }, this.get("zoomLevel", 1) / this.get("zoomStep", 2));
        }
      }, {
        key: "_clearDirty",
        value: function _clearDirty() {
          _get(_getPrototypeOf(ji.prototype), "_clearDirty", this).call(this), this._dirtyGeometries = !1, this._mapFitted = !1;
        }
      }, {
        key: "getArea",
        value: function getArea(t) {
          var e = this.getPrivate("geoPath"),
              n = t.get("geometry");
          return n ? e.area(n) : 0;
        }
      }]);

      return ji;
    }(pe.j);

    Object.defineProperty(ji, "className", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: "MapChart"
    }), Object.defineProperty(ji, "classNames", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: pe.j.classNames.concat([ji.className])
    });

    var Ci =
    /*#__PURE__*/
    function (_a12) {
      _inherits(Ci, _a12);

      function Ci() {
        var _this17;

        _classCallCheck(this, Ci);

        _this17 = _possibleConstructorReturn(this, _getPrototypeOf(Ci).apply(this, arguments)), Object.defineProperty(_assertThisInitialized(_this17), "_types", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: ["Point", "MultiPoint"]
        }), Object.defineProperty(_assertThisInitialized(_this17), "_lineChangedDp", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: void 0
        });
        return _this17;
      }

      _createClass(Ci, [{
        key: "_afterNew",
        value: function _afterNew() {
          this.fields.push("polygonId", "lineId", "longitude", "latitude", "fixed"), _get(_getPrototypeOf(Ci.prototype), "_afterNew", this).call(this);
        }
      }, {
        key: "markDirtyProjection",
        value: function markDirtyProjection() {
          this.markDirty();
        }
      }, {
        key: "markDirtyValues",
        value: function markDirtyValues(t) {
          _get(_getPrototypeOf(Ci.prototype), "markDirtyValues", this).call(this), t && this._positionBullets(t);
        }
      }, {
        key: "processDataItem",
        value: function processDataItem(t) {
          _get(_getPrototypeOf(Ci.prototype), "processDataItem", this).call(this, t);

          var e = t.get("geometry");

          if (e) {
            if ("Point" == e.type) {
              var _n20 = e.coordinates;
              _n20 && (t.set("longitude", _n20[0]), t.set("latitude", _n20[1]));
            } else if ("MultiPoint" == e.type) {
              var _n21 = e.coordinates;
              _n21 && _n21[0] && (t.set("longitude", _n21[0][0]), t.set("latitude", _n21[0][1]));
            }
          } else e = {
            type: "Point",
            coordinates: [t.get("longitude", 0), t.get("latitude", 0)]
          }, t.set("geometry", e);

          this._addGeometry(e, this);
        }
      }, {
        key: "_makeBullets",
        value: function _makeBullets(t) {
          var _this18 = this;

          t.bullets = [], this.bullets.each(function (e) {
            var n = t.get("geometry");
            if (n) if ("Point" == n.type) _this18._setBulletParent(_this18._makeBullet(t, e));else if (n.type = "MultiPoint") {
              var _i23 = 0;
              o.each(n.coordinates, function () {
                _this18._setBulletParent(_this18._makeBullet(t, e, _i23)), _i23++;
              });
            }
          });
        }
      }, {
        key: "_setBulletParent",
        value: function _setBulletParent(t) {
          if (t) {
            var _e39 = t.get("sprite"),
                _n22 = this.chart;

            if (_e39 && _n22) {
              var _t24 = _e39.dataItem;
              _t24 && (_t24.get("fixed") ? _e39.parent != _n22.bulletsContainer && _n22.bulletsContainer.children.moveValue(_e39) : _e39.parent != this.bulletsContainer && this.bulletsContainer.children.moveValue(_e39));
            }
          }
        }
      }, {
        key: "_positionBullet",
        value: function _positionBullet(t) {
          var _this19 = this;

          var e = t.get("sprite");

          if (e) {
            var _n23 = e.dataItem;
            if (_n23 && _n23.get("fixed")) return;

            var _i24 = _n23.get("latitude"),
                _o14 = _n23.get("longitude"),
                _r16 = _n23.get("lineDataItem"),
                _a13 = _n23.get("fixed"),
                _l5 = this.chart;

            var _u4;

            if (_r16) _u4 = _r16.get("mapLine");else {
              var _t25 = _n23.get("lineId");

              _t25 && _l5 && _l5.series.each(function (e) {
                if (e.isType("MapLineSeries")) {
                  var _i25 = e.getDataItemById(_t25);

                  _i25 && (_n23.set("lineDataItem", _i25), _u4 = _i25.get("mapLine"));
                }
              });
            }
            this._lineChangedDp && this._lineChangedDp.dispose(), _u4 && (this._lineChangedDp = _u4.events.on("linechanged", function () {
              _this19._positionBullets(_n23);
            }));

            var _c4 = _n23.get("polygonDataItem");

            var _h4;

            if (_c4) _h4 = _c4.get("mapPolygon");else {
              var _t26 = _n23.get("polygonId");

              _t26 && _l5 && _l5.series.each(function (e) {
                if (e.isType("MapPolygonSeries")) {
                  var _i26 = e.getDataItemById(_t26);

                  _i26 && (_n23.set("polygonDataItem", _i26), _h4 = _i26.get("mapPolygon"));
                }
              });
            }

            var _p4 = _n23.get("positionOnLine");

            var _f4, _d;

            if (_h4) {
              var _t27 = _h4.visualCentroid();

              _f4 = [_t27.longitude, _t27.latitude], _n23.setRaw("longitude", _t27.longitude), _n23.setRaw("latitude", _t27.latitude);
            } else if (_u4 && s.isNumber(_p4)) {
              var _e40 = _u4.positionToGeoPoint(_p4);

              if (_f4 = [_e40.longitude, _e40.latitude], _n23.get("autoRotate", t.get("autoRotate")) && _l5) {
                var _t28 = _u4.positionToGeoPoint(_p4 - .002),
                    _e41 = _u4.positionToGeoPoint(_p4 + .002),
                    _n24 = _l5.convert(_t28),
                    _i27 = _l5.convert(_e41);

                _d = Nn.getAngle(_n24, _i27);
              }

              _n23.setRaw("longitude", _e40.longitude), _n23.setRaw("latitude", _e40.latitude);
            } else if (s.isNumber(_o14) && s.isNumber(_i24)) _f4 = [_o14, _i24];else {
              var _e42 = _n23.get("geometry");

              if (_e42) if ("Point" == _e42.type) this._positionBulletReal(t, _e42, _e42.coordinates, _d);else if ("MultiPoint" == _e42.type) {
                var _n25 = t._index || 0;

                _f4 = _e42.coordinates[_n25];
              }
            }

            !_a13 && _f4 && this._positionBulletReal(t, {
              type: "Point",
              coordinates: _f4
            }, _f4, _d);
          }
        }
      }, {
        key: "_positionBulletReal",
        value: function _positionBulletReal(t, e, n, i) {
          var o = t.get("sprite"),
              r = this.chart;

          if (r) {
            var _a14 = r.get("projection"),
                _s6 = r.getPrivate("geoPath"),
                _l6 = o.dataItem,
                _u5 = _a14(n);

            if (_u5) {
              var _t29 = {
                x: _u5[0],
                y: _u5[1]
              };
              o.setAll(_t29), _l6.setRaw("point", _t29);
            }

            var _c5 = !0;

            _s6(e) ? this.get("clipFront") && (_c5 = !1) : this.get("clipBack") && (_c5 = !1), o.setPrivate("visible", _c5), _l6.set("clipped", !_c5), _l6 && null != i && _l6.get("autoRotate", t.get("autoRotate")) && o.set("rotation", i + _l6.get("autoRotateAngle", t.get("autoRotateAngle", 0)));
          }
        }
      }, {
        key: "zoomToDataItem",
        value: function zoomToDataItem(t, e, n) {
          var i = this.chart;

          if (i) {
            var _o15 = t.get("longitude", 0),
                _r17 = t.get("latitude", 0);

            return n ? i.zoomToGeoPoint({
              longitude: _o15,
              latitude: _r17
            }, e, !0, void 0, -_o15, -_r17) : i.zoomToGeoPoint({
              longitude: _o15,
              latitude: _r17
            }, e, !0);
          }
        }
      }, {
        key: "zoomToDataItems",
        value: function zoomToDataItems(t, e) {
          var n = null,
              i = null,
              r = null,
              a = null;

          if (o.each(t, function (t) {
            var e = t.get("longitude", 0),
                o = t.get("latitude", 0);
            (null == n || n > e) && (n = e), (null == i || i < e) && (i = e), (null == r || r < o) && (r = o), (null == a || a > o) && (a = o);
          }), null != n && null != i && null != r && null != a) {
            var _t30 = this.chart;
            if (_t30) return e ? _t30.zoomToGeoBounds({
              left: n,
              right: i,
              top: r,
              bottom: a
            }, void 0, -(n + (i - n) / 2), -(r + (r - a) / 2)) : _t30.zoomToGeoBounds({
              left: n,
              right: i,
              top: r,
              bottom: a
            });
          }
        }
      }, {
        key: "disposeDataItem",
        value: function disposeDataItem(t) {
          var e = this.chart;
          e && e.series.each(function (e) {
            e.isType("MapLineSeries") && o.each(e.dataItems, function (n) {
              var i = n.get("pointsToConnect");
              i && o.each(i, function (r) {
                r == t && (o.remove(i, r), e.markDirtyValues(n));
              });
            });
          }), _get(_getPrototypeOf(Ci.prototype), "disposeDataItem", this).call(this, t);
        }
      }, {
        key: "_excludeDataItem",
        value: function _excludeDataItem(t) {
          _get(_getPrototypeOf(Ci.prototype), "_excludeDataItem", this).call(this, t);

          var e = t.bullets;
          e && o.each(e, function (t) {
            var e = t.get("sprite");
            e && e.setPrivate("visible", !1);
          });
        }
      }, {
        key: "_unexcludeDataItem",
        value: function _unexcludeDataItem(t) {
          _get(_getPrototypeOf(Ci.prototype), "_unexcludeDataItem", this).call(this, t);

          var e = t.bullets;
          e && o.each(e, function (t) {
            var e = t.get("sprite");
            e && e.setPrivate("visible", !0);
          });
        }
      }, {
        key: "_notIncludeDataItem",
        value: function _notIncludeDataItem(t) {
          _get(_getPrototypeOf(Ci.prototype), "_notIncludeDataItem", this).call(this, t);

          var e = t.bullets;
          e && o.each(e, function (t) {
            var e = t.get("sprite");
            e && e.setPrivate("visible", !1);
          });
        }
      }, {
        key: "_unNotIncludeDataItem",
        value: function _unNotIncludeDataItem(t) {
          _get(_getPrototypeOf(Ci.prototype), "_unNotIncludeDataItem", this).call(this, t);

          var e = t.bullets;
          e && o.each(e, function (t) {
            var e = t.get("sprite");
            e && e.setPrivate("visible", !0);
          });
        }
      }]);

      return Ci;
    }(a);

    Object.defineProperty(Ci, "className", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: "MapPointSeries"
    }), Object.defineProperty(Ci, "classNames", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: a.classNames.concat([Ci.className])
    });
    var Ei = n(5417),
        Oi = n.n(Ei);

    var Li =
    /*#__PURE__*/
    function (_u$T2) {
      _inherits(Li, _u$T2);

      function Li() {
        var _this20;

        _classCallCheck(this, Li);

        _this20 = _possibleConstructorReturn(this, _getPrototypeOf(Li).apply(this, arguments)), Object.defineProperty(_assertThisInitialized(_this20), "_projectionDirty", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: !1
        }), Object.defineProperty(_assertThisInitialized(_this20), "series", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: void 0
        });
        return _this20;
      }

      _createClass(Li, [{
        key: "_beforeChanged",
        value: function _beforeChanged() {
          var _this21 = this;

          if (_get(_getPrototypeOf(Li.prototype), "_beforeChanged", this).call(this), this._projectionDirty || this.isDirty("geometry") || this.isDirty("precision")) {
            var _t31 = this.get("geometry");

            if (_t31) {
              var _e43 = this.series;

              if (_e43) {
                var _n26 = _e43.projection();

                _n26 && _n26.precision(this.get("precision", .5));

                var _i28 = _e43.geoPath();

                _i28 && (this._clear = !0, this.set("draw", function (e) {
                  _i28.context(_this21._display), _i28(_t31), _i28.context(null);
                }), this.isHover() && this.showTooltip());
              }
            }
          }
        }
      }, {
        key: "markDirtyProjection",
        value: function markDirtyProjection() {
          this.markDirty(), this._projectionDirty = !0;
        }
      }, {
        key: "_clearDirty",
        value: function _clearDirty() {
          _get(_getPrototypeOf(Li.prototype), "_clearDirty", this).call(this), this._projectionDirty = !1;
        }
      }, {
        key: "geoCentroid",
        value: function geoCentroid() {
          var t = this.get("geometry");
          return t ? Pi(t) : {
            latitude: 0,
            longitude: 0
          };
        }
      }, {
        key: "visualCentroid",
        value: function visualCentroid() {
          var t = 0,
              e = [];
          var n = this.get("geometry");

          if (n) {
            if ("Polygon" == n.type) e = n.coordinates;else if ("MultiPolygon" == n.type) for (var _i29 = 0; _i29 < n.coordinates.length; _i29++) {
              var _o16 = n.coordinates[_i29],
                  _r18 = ui({
                type: "Polygon",
                coordinates: _o16
              });

              _r18 > t && (e = _o16, t = _r18);
            }

            if (e) {
              var _t32 = Oi()(e);

              return {
                longitude: _t32[0],
                latitude: _t32[1]
              };
            }
          }

          return {
            longitude: 0,
            latitude: 0
          };
        }
      }, {
        key: "_getTooltipPoint",
        value: function _getTooltipPoint() {
          var t = this.series;

          if (t) {
            var _e44 = t.projection();

            if (_e44) {
              var _t33 = this.visualCentroid(),
                  _n27 = _e44([_t33.longitude, _t33.latitude]);

              if (_n27) return {
                x: _n27[0],
                y: _n27[1]
              };
            }
          }

          return {
            x: 0,
            y: 0
          };
        }
      }]);

      return Li;
    }(u.T);

    Object.defineProperty(Li, "className", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: "MapPolygon"
    }), Object.defineProperty(Li, "classNames", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: u.T.classNames.concat([Li.className])
    });

    var Ti =
    /*#__PURE__*/
    function (_a15) {
      _inherits(Ti, _a15);

      function Ti() {
        var _this22;

        _classCallCheck(this, Ti);

        _this22 = _possibleConstructorReturn(this, _getPrototypeOf(Ti).apply(this, arguments)), Object.defineProperty(_assertThisInitialized(_this22), "mapPolygons", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: new K.o(tt.YS["new"]({}), function () {
            return Li._new(_this22._root, {}, [_this22.mapPolygons.template]);
          })
        }), Object.defineProperty(_assertThisInitialized(_this22), "_types", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: ["Polygon", "MultiPolygon"]
        });
        return _this22;
      }

      _createClass(Ti, [{
        key: "makeMapPolygon",
        value: function makeMapPolygon(t) {
          var e = this.children.push(this.mapPolygons.make());
          return e._setDataItem(t), this.mapPolygons.push(e), e;
        }
      }, {
        key: "markDirtyProjection",
        value: function markDirtyProjection() {
          o.each(this.dataItems, function (t) {
            var e = t.get("mapPolygon");
            e && e.markDirtyProjection();
          });
        }
      }, {
        key: "_prepareChildren",
        value: function _prepareChildren() {
          _get(_getPrototypeOf(Ti.prototype), "_prepareChildren", this).call(this), this.isDirty("fill") && this.mapPolygons.template.set("fill", this.get("fill")), this.isDirty("stroke") && this.mapPolygons.template.set("stroke", this.get("stroke"));
        }
      }, {
        key: "processDataItem",
        value: function processDataItem(t) {
          _get(_getPrototypeOf(Ti.prototype), "processDataItem", this).call(this, t);

          var e = t.get("mapPolygon");
          e || (e = this.makeMapPolygon(t)), t.set("mapPolygon", e);
          var n = t.get("geometry");

          if (n) {
            if (this.get("reverseGeodata") && n.coordinates) for (var _t34 = 0; _t34 < n.coordinates.length; _t34++) {
              if ("MultiPolygon" == n.type) for (var _e45 = 0; _e45 < n.coordinates[_t34].length; _e45++) {
                n.coordinates[_t34][_e45].reverse();
              } else n.coordinates[_t34].reverse();
            }
            e.set("geometry", n);
          }

          e.series = this, this._addGeometry(t.get("geometry"), this);
        }
      }, {
        key: "disposeDataItem",
        value: function disposeDataItem(t) {
          _get(_getPrototypeOf(Ti.prototype), "disposeDataItem", this).call(this, t);

          var e = t.get("mapPolygon");
          e && (this.mapPolygons.removeValue(e), e.dispose()), this._removeGeometry(t.get("geometry"));
        }
      }, {
        key: "_excludeDataItem",
        value: function _excludeDataItem(t) {
          _get(_getPrototypeOf(Ti.prototype), "_excludeDataItem", this).call(this, t);

          var e = t.get("mapPolygon");
          e && e.setPrivate("visible", !1);
        }
      }, {
        key: "_unexcludeDataItem",
        value: function _unexcludeDataItem(t) {
          _get(_getPrototypeOf(Ti.prototype), "_unexcludeDataItem", this).call(this, t);

          var e = t.get("mapPolygon");
          e && e.setPrivate("visible", !0);
        }
      }, {
        key: "_notIncludeDataItem",
        value: function _notIncludeDataItem(t) {
          _get(_getPrototypeOf(Ti.prototype), "_notIncludeDataItem", this).call(this, t);

          var e = t.get("mapPolygon");
          e && e.setPrivate("visible", !1);
        }
      }, {
        key: "_unNotIncludeDataItem",
        value: function _unNotIncludeDataItem(t) {
          _get(_getPrototypeOf(Ti.prototype), "_unNotIncludeDataItem", this).call(this, t);

          var e = t.get("mapPolygon");
          e && e.setPrivate("visible", !0);
        }
      }, {
        key: "markDirtyValues",
        value: function markDirtyValues(t) {
          if (_get(_getPrototypeOf(Ti.prototype), "markDirtyValues", this).call(this), t) {
            var _e46 = t.get("mapPolygon");

            _e46 && _e46.set("geometry", t.get("geometry"));
          }
        }
      }, {
        key: "zoomToDataItem",
        value: function zoomToDataItem(t, e) {
          var n = t.get("mapPolygon");

          if (n) {
            var _t35 = n.get("geometry"),
                _i30 = this.chart;

            if (_t35 && _i30) {
              if (e) {
                var _e47 = Pi(_t35);

                return _i30.rotate(-_e47.longitude, -_e47.latitude), _i30.zoomToGeoBounds(Di(_t35), void 0, -_e47.longitude, -_e47.latitude);
              }

              return _i30.zoomToGeoBounds(Di(_t35));
            }
          }
        }
      }, {
        key: "zoomToDataItems",
        value: function zoomToDataItems(t, e) {
          var n, i, r, a;

          if (o.each(t, function (t) {
            var e = t.get("mapPolygon");

            if (e) {
              var _t36 = e.get("geometry");

              if (_t36) {
                var _e48 = Di(_t36);

                null == n && (n = _e48.left), null == i && (i = _e48.right), null == r && (r = _e48.top), null == a && (a = _e48.bottom), n = Math.min(_e48.left, n), i = Math.max(_e48.right, i), r = Math.max(_e48.top, r), a = Math.min(_e48.bottom, a);
              }
            }
          }), null != n && null != i && null != r && null != a) {
            var _t37 = this.chart;

            if (_t37) {
              if (e) {
                var _e49 = n + (i - n) / 2,
                    _o17 = a + (r - a) / 2;

                return _t37.rotate(-_e49, -_o17), _t37.zoomToGeoBounds({
                  left: n,
                  right: i,
                  top: r,
                  bottom: a
                }, void 0, -_e49, -_o17);
              }

              return _t37.zoomToGeoBounds({
                left: n,
                right: i,
                top: r,
                bottom: a
              });
            }
          }
        }
      }]);

      return Ti;
    }(a);

    Object.defineProperty(Ti, "className", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: "MapPolygonSeries"
    }), Object.defineProperty(Ti, "classNames", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: a.classNames.concat([Ti.className])
    });
    var ki = n(9361),
        Ri = n(8777),
        zi = n(962),
        Gi = n(2156);

    var Yi =
    /*#__PURE__*/
    function (_Ci) {
      _inherits(Yi, _Ci);

      function Yi() {
        var _this23;

        _classCallCheck(this, Yi);

        _this23 = _possibleConstructorReturn(this, _getPrototypeOf(Yi).apply(this, arguments)), Object.defineProperty(_assertThisInitialized(_this23), "_dataItem", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: _this23.makeDataItem({})
        }), Object.defineProperty(_assertThisInitialized(_this23), "_clusterIndex", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: 0
        }), Object.defineProperty(_assertThisInitialized(_this23), "_clusters", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: []
        }), Object.defineProperty(_assertThisInitialized(_this23), "clusteredDataItems", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: []
        }), Object.defineProperty(_assertThisInitialized(_this23), "_scatterIndex", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: 0
        }), Object.defineProperty(_assertThisInitialized(_this23), "_scatters", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: []
        }), Object.defineProperty(_assertThisInitialized(_this23), "_packLayout", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: Gi.Z()
        }), Object.defineProperty(_assertThisInitialized(_this23), "_spiral", {
          enumerable: !0,
          configurable: !0,
          writable: !0,
          value: []
        });
        return _this23;
      }

      _createClass(Yi, [{
        key: "_afterNew",
        value: function _afterNew() {
          this.fields.push("groupId"), this._setRawDefault("groupIdField", "groupId"), _get(_getPrototypeOf(Yi.prototype), "_afterNew", this).call(this);
        }
      }, {
        key: "_updateChildren",
        value: function _updateChildren() {
          var _this24 = this;

          _get(_getPrototypeOf(Yi.prototype), "_updateChildren", this).call(this), this.isDirty("scatterRadius") && (this._spiral = Nn.spiralPoints(0, 0, 300, 300, 0, 3, 3, 0, 0));
          var t = {};
          o.each(this.dataItems, function (e) {
            var n = e.get("groupId", "_default");
            t[n] || (t[n] = []), t[n].push(e);
          }), this._scatterIndex = -1, this._scatters = [], this._clusterIndex = -1, this._clusters = [], o.each(this.clusteredDataItems, function (t) {
            t.setRaw("children", void 0);
          }), o.each(this.dataItems, function (t) {
            t.setRaw("cluster", void 0);
          }), r.each(t, function (t, e) {
            _this24._scatterGroup(e);
          }), r.each(t, function (t, e) {
            _this24._clusterGroup(e);
          }), o.each(this.dataItems, function (t) {
            if (!t.get("cluster")) {
              var _e50 = t.bullets;
              _e50 && o.each(_e50, function (t) {
                var e = t.get("sprite");
                e && e.set("forceHidden", !1);
              });
            }
          });
        }
      }, {
        key: "zoomToCluster",
        value: function zoomToCluster(t, e) {
          this.zoomToDataItems(t.get("children", []), e);
        }
      }, {
        key: "_clusterGroup",
        value: function _clusterGroup(t) {
          var _this25 = this;

          var e = this.chart;
          if (e && e.get("zoomLevel", 1) >= e.get("maxZoomLevel", 100) * this.get("stopClusterZoom", .95)) ;else for (; t.length > 0;) {
            this._clusterIndex++, this._clusters[this._clusterIndex] = [];
            var _e51 = this._clusters[this._clusterIndex],
                _n28 = t[0];
            _e51.push(_n28), o.remove(t, _n28), this._clusterDataItem(_n28, t);
          }
          var n = 0;
          o.each(this._clusters, function (t) {
            var e = 0,
                i = 0,
                r = t.length;

            if (r > 1) {
              var _a16,
                  _s7 = _this25.clusteredDataItems[n];

              if (!_s7) {
                _s7 = new ki.z(_this25, void 0, {});

                var _t38 = _this25.get("clusteredBullet");

                if (_t38) {
                  var _e52 = _s7.set("bullet", _t38(_this25._root, _this25, _s7));

                  if (_e52) {
                    var _t39 = _e52.get("sprite");

                    _t39 && (_this25.bulletsContainer.children.push(_t39), _t39._setDataItem(_s7));
                  }
                }

                _this25.clusteredDataItems.push(_s7);
              }

              o.each(t, function (t) {
                t.setRaw("cluster", _s7);
                var n = t.get("point");
                n && (e += n.x, i += n.y);
                var r = t.bullets;
                r && o.each(r, function (t) {
                  var e = t.get("sprite");
                  e && e.set("forceHidden", !0);
                }), _a16 = t.get("groupId");
              });

              var _l7 = e / r,
                  _u6 = i / r;

              _s7.setRaw("children", t), _s7.setRaw("groupId", _a16);

              var _c6 = _s7.get("value");

              _s7.setRaw("value", r);

              var _h5 = _s7.get("bullet");

              if (_h5) {
                var _t40 = _h5.get("sprite");

                _t40 && (_t40.set("forceHidden", !1), _t40.setAll({
                  x: _l7,
                  y: _u6
                }), _c6 != r && _t40 instanceof Ri.W && _t40.walkChildren(function (t) {
                  t instanceof zi._ && t.text.markDirtyText();
                }));
              }

              n++;
            }
          }), o.each(this.clusteredDataItems, function (t) {
            var e = t.get("children");

            if (!e || 0 == e.length) {
              var _e53 = t.get("bullet");

              if (_e53) {
                var _t41 = _e53.get("sprite");

                _t41 && _t41.set("forceHidden", !0);
              }
            }
          });
        }
      }, {
        key: "_onDataClear",
        value: function _onDataClear() {
          _get(_getPrototypeOf(Yi.prototype), "_onDataClear", this).call(this), o.each(this.clusteredDataItems, function (t) {
            var e = t.get("bullet");

            if (e) {
              var _t42 = e.get("sprite");

              _t42 && _t42.dispose();
            }
          }), this.clusteredDataItems = [];
        }
      }, {
        key: "_clusterDataItem",
        value: function _clusterDataItem(t, e) {
          var _this26 = this;

          var n = t.get("point");
          n && o.each(e, function (t) {
            if (t && !t.get("clipped")) {
              var _i31 = t.get("point");

              _i31 && Math.hypot(_i31.x - n.x, _i31.y - n.y) < _this26.get("minDistance", 20) && (_this26._clusters[_this26._clusterIndex].push(t), o.remove(e, t), _this26._clusterDataItem(t, e));
            }
          });
        }
      }, {
        key: "_scatterGroup",
        value: function _scatterGroup(t) {
          var _this27 = this;

          var e = this.chart;

          if (e && e.get("zoomLevel", 1) >= e.get("maxZoomLevel", 100) * this.get("stopClusterZoom", .95)) {
            for (; t.length > 0;) {
              this._scatterIndex++, this._scatters[this._scatterIndex] = [];
              var _e54 = this._scatters[this._scatterIndex],
                  _n29 = t[0];
              _e54.push(_n29), o.remove(t, _n29), this._scatterDataItem(_n29, t);
            }

            o.each(this._scatters, function (t) {
              if (t.length > 1) {
                var _e55 = [],
                    _n30 = 0,
                    _i32 = _this27.get("scatterRadius", 8);

                o.each(t, function (t) {
                  var r = _this27._spiral[_n30],
                      a = !0;
                  if (_e55.length > 0) for (; a;) {
                    o.each(_e55, function (t) {
                      for (a = !1; Nn.circlesOverlap({
                        x: r.x,
                        y: r.y,
                        radius: _i32
                      }, t);) {
                        _n30++, null == _this27._spiral[_n30] ? a = !1 : (a = !0, r = _this27._spiral[_n30]);
                      }
                    });
                  }
                  var s = r.x,
                      l = r.y;
                  _e55.push({
                    x: s,
                    y: l,
                    radius: _i32
                  }), t.set("dx", s), t.set("dy", l);
                  var u = t.bullets;
                  u && o.each(u, function (t) {
                    var e = t.get("sprite");
                    e && e.setAll({
                      dx: s,
                      dy: l
                    });
                  });
                });
              }
            });
          }
        }
      }, {
        key: "_scatterDataItem",
        value: function _scatterDataItem(t, e) {
          var _this28 = this;

          var n = t.get("point");
          n && o.each(e, function (t) {
            if (t && !t.get("clipped")) {
              var _i33 = t.get("point");

              _i33 && Math.hypot(_i33.x - n.x, _i33.y - n.y) < _this28.get("scatterDistance", 5) && (_this28._scatters[_this28._scatterIndex].push(t), o.remove(e, t), _this28._scatterDataItem(t, e));
            }
          });
        }
      }]);

      return Yi;
    }(Ci);

    Object.defineProperty(Yi, "className", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: "ClusteredPointSeries"
    }), Object.defineProperty(Yi, "classNames", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: Ci.classNames.concat([Yi.className])
    });
    var Xi = n(6044);

    var Bi =
    /*#__PURE__*/
    function (_Xi$H) {
      _inherits(Bi, _Xi$H);

      function Bi() {
        _classCallCheck(this, Bi);

        return _possibleConstructorReturn(this, _getPrototypeOf(Bi).apply(this, arguments));
      }

      _createClass(Bi, [{
        key: "_afterNew",
        value: function _afterNew() {
          _get(_getPrototypeOf(Bi.prototype), "_afterNew", this).call(this), this.addTag("zoomtools");
        }
      }, {
        key: "_prepareChildren",
        value: function _prepareChildren() {
          _get(_getPrototypeOf(Bi.prototype), "_prepareChildren", this).call(this), this.isPrivateDirty("chart") && this.set("target", this.getPrivate("chart"));
        }
      }]);

      return Bi;
    }(Xi.H);

    function Zi(t, e) {
      return [P(e) * M(t), M(e)];
    }

    function Ai() {
      return ne(Zi).scale(249.5).clipAngle(90 + h);
    }

    function Wi(t, e) {
      return [t, e];
    }

    function Fi() {
      return ne(Wi).scale(152.63);
    }

    function Vi(t, e) {
      var n = M(t),
          i = (n + M(e)) / 2;
      if (_(i) < h) return function (t) {
        var e = P(t);

        function n(t, n) {
          return [t * e, M(n) / e];
        }

        return n.invert = function (t, n) {
          return [t / e, E(n * e)];
        }, n;
      }(t);
      var o = 1 + n * (2 * i - n),
          r = j(o) / i;

      function a(t, e) {
        var n = j(o - 2 * i * M(e)) / i;
        return [n * M(t *= i), r - n * P(t)];
      }

      return a.invert = function (t, e) {
        var n = r - e,
            a = w(t, _(n)) * N(n);
        return n * i < 0 && (a -= f * N(t) * N(n)), [a / i, E((o - (t * t + n * n) * i * i) / (2 * i))];
      }, a;
    }

    function Hi() {
      return function (t) {
        var e = 0,
            n = f / 3,
            i = ie(t),
            o = i(e, n);
        return o.parallels = function (t) {
          return arguments.length ? i(e = t[0] * v, n = t[1] * v) : [e * y, n * y];
        }, o;
      }(Vi).scale(155.424).center([0, 33.6442]);
    }

    function Ji() {
      var t,
          e,
          n,
          i,
          o,
          r,
          a = Hi().parallels([29.5, 45.5]).scale(1070).translate([480, 250]).rotate([96, 0]).center([-.6, 38.7]),
          s = Hi().rotate([154, 0]).center([-2, 58.5]).parallels([55, 65]),
          l = Hi().rotate([157, 0]).center([-3, 19.9]).parallels([8, 18]),
          u = {
        point: function point(t, e) {
          r = [t, e];
        }
      };

      function c(t) {
        var e = t[0],
            a = t[1];
        return r = null, n.point(e, a), r || (i.point(e, a), r) || (o.point(e, a), r);
      }

      function p() {
        return t = e = null, c;
      }

      return c.invert = function (t) {
        var e = a.scale(),
            n = a.translate(),
            i = (t[0] - n[0]) / e,
            o = (t[1] - n[1]) / e;
        return (o >= .12 && o < .234 && i >= -.425 && i < -.214 ? s : o >= .166 && o < .234 && i >= -.214 && i < -.115 ? l : a).invert(t);
      }, c.stream = function (n) {
        return t && e === n ? t : (i = [a.stream(e = n), s.stream(n), l.stream(n)], o = i.length, t = {
          point: function point(t, e) {
            for (var n = -1; ++n < o;) {
              i[n].point(t, e);
            }
          },
          sphere: function sphere() {
            for (var t = -1; ++t < o;) {
              i[t].sphere();
            }
          },
          lineStart: function lineStart() {
            for (var t = -1; ++t < o;) {
              i[t].lineStart();
            }
          },
          lineEnd: function lineEnd() {
            for (var t = -1; ++t < o;) {
              i[t].lineEnd();
            }
          },
          polygonStart: function polygonStart() {
            for (var t = -1; ++t < o;) {
              i[t].polygonStart();
            }
          },
          polygonEnd: function polygonEnd() {
            for (var t = -1; ++t < o;) {
              i[t].polygonEnd();
            }
          }
        });
        var i, o;
      }, c.precision = function (t) {
        return arguments.length ? (a.precision(t), s.precision(t), l.precision(t), p()) : a.precision();
      }, c.scale = function (t) {
        return arguments.length ? (a.scale(t), s.scale(.35 * t), l.scale(t), c.translate(a.translate())) : a.scale();
      }, c.translate = function (t) {
        if (!arguments.length) return a.translate();
        var e = a.scale(),
            r = +t[0],
            c = +t[1];
        return n = a.translate(t).clipExtent([[r - .455 * e, c - .238 * e], [r + .455 * e, c + .238 * e]]).stream(u), i = s.translate([r - .307 * e, c + .201 * e]).clipExtent([[r - .425 * e + h, c + .12 * e + h], [r - .214 * e - h, c + .234 * e - h]]).stream(u), o = l.translate([r - .205 * e, c + .212 * e]).clipExtent([[r - .214 * e + h, c + .166 * e + h], [r - .115 * e - h, c + .234 * e - h]]).stream(u), p();
      }, c.fitExtent = function (t, e) {
        return Ht(c, t, e);
      }, c.fitSize = function (t, e) {
        return Jt(c, t, e);
      }, c.fitWidth = function (t, e) {
        return $t(c, t, e);
      }, c.fitHeight = function (t, e) {
        return Ut(c, t, e);
      }, c.scale(1070);
    }

    Object.defineProperty(Bi, "className", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: "ZoomControl"
    }), Object.defineProperty(Bi, "classNames", {
      enumerable: !0,
      configurable: !0,
      writable: !0,
      value: Xi.H.classNames.concat([Bi.className])
    }), Zi.invert = function (t) {
      return function (e, n) {
        var i = j(e * e + n * n),
            o = t(i),
            r = M(o),
            a = P(o);
        return [w(e * r, i * a), E(i && n * r / i)];
      };
    }(E), Wi.invert = Wi;
    var $i = 1.340264,
        Ui = -.081106,
        qi = 893e-6,
        Qi = .003796,
        Ki = j(3) / 2;

    function to(t, e) {
      var n = E(Ki * M(e)),
          i = n * n,
          o = i * i * i;
      return [t * P(n) / (Ki * ($i + 3 * Ui * i + o * (7 * qi + 9 * Qi * i))), n * ($i + Ui * i + o * (qi + Qi * i))];
    }

    function eo() {
      return ne(to).scale(177.158);
    }

    function no(t, e) {
      var n = e * e,
          i = n * n;
      return [t * (.8707 - .131979 * n + i * (i * (.003971 * n - .001529 * i) - .013791)), e * (1.007226 + n * (.015085 + i * (.028874 * n - .044475 - .005916 * i)))];
    }

    function io() {
      return ne(no).scale(175.295);
    }

    to.invert = function (t, e) {
      for (var n, i = e, o = i * i, r = o * o * o, a = 0; a < 12 && (r = (o = (i -= n = (i * ($i + Ui * o + r * (qi + Qi * o)) - e) / ($i + 3 * Ui * o + r * (7 * qi + 9 * Qi * o))) * i) * o * o, !(_(n) < p)); ++a) {
        ;
      }

      return [Ki * t * ($i + 3 * Ui * o + r * (7 * qi + 9 * Qi * o)) / P(i), E(M(i) / Ki)];
    }, no.invert = function (t, e) {
      var n,
          i = e,
          o = 25;

      do {
        var r = i * i,
            a = r * r;
        i -= n = (i * (1.007226 + r * (.015085 + a * (.028874 * r - .044475 - .005916 * a))) - e) / (1.007226 + r * (.045255 + a * (.259866 * r - .311325 - .005916 * 11 * a)));
      } while (_(n) > h && --o > 0);

      return [t / (.8707 + (r = i * i) * (r * (r * r * r * (.003971 - .001529 * r) - .013791) - .131979)), i];
    };
  },
  5417: function _(t, e, n) {
    var i = n(2640);

    function o(t, e, n) {
      var o, s, l, u;
      e = e || 1;

      for (var c = 0; c < t[0].length; c++) {
        var h = t[0][c];
        (!c || h[0] < o) && (o = h[0]), (!c || h[1] < s) && (s = h[1]), (!c || h[0] > l) && (l = h[0]), (!c || h[1] > u) && (u = h[1]);
      }

      var p = l - o,
          f = u - s,
          d = Math.min(p, f),
          g = d / 2;

      if (0 === d) {
        var m = [o, s];
        return m.distance = 0, m;
      }

      for (var y = new i(void 0, r), v = o; v < l; v += d) {
        for (var _ = s; _ < u; _ += d) {
          y.push(new a(v + g, _ + g, g, t));
        }
      }

      var b = function (t) {
        for (var e = 0, n = 0, i = 0, o = t[0], r = 0, s = o.length, l = s - 1; r < s; l = r++) {
          var u = o[r],
              c = o[l],
              h = u[0] * c[1] - c[0] * u[1];
          n += (u[0] + c[0]) * h, i += (u[1] + c[1]) * h, e += 3 * h;
        }

        return 0 === e ? new a(o[0][0], o[0][1], 0, t) : new a(n / e, i / e, 0, t);
      }(t),
          w = new a(o + p / 2, s + f / 2, 0, t);

      w.d > b.d && (b = w);

      for (var P = y.length; y.length;) {
        var x = y.pop();
        x.d > b.d && (b = x, n && console.log("found best %d after %d probes", Math.round(1e4 * x.d) / 1e4, P)), x.max - b.d <= e || (g = x.h / 2, y.push(new a(x.x - g, x.y - g, g, t)), y.push(new a(x.x + g, x.y - g, g, t)), y.push(new a(x.x - g, x.y + g, g, t)), y.push(new a(x.x + g, x.y + g, g, t)), P += 4);
      }

      n && (console.log("num probes: " + P), console.log("best distance: " + b.d));
      var D = [b.x, b.y];
      return D.distance = b.d, D;
    }

    function r(t, e) {
      return e.max - t.max;
    }

    function a(t, e, n, i) {
      this.x = t, this.y = e, this.h = n, this.d = function (t, e, n) {
        for (var i = !1, o = 1 / 0, r = 0; r < n.length; r++) {
          for (var a = n[r], l = 0, u = a.length, c = u - 1; l < u; c = l++) {
            var h = a[l],
                p = a[c];
            h[1] > e != p[1] > e && t < (p[0] - h[0]) * (e - h[1]) / (p[1] - h[1]) + h[0] && (i = !i), o = Math.min(o, s(t, e, h, p));
          }
        }

        return 0 === o ? 0 : (i ? 1 : -1) * Math.sqrt(o);
      }(t, e, i), this.max = this.d + this.h * Math.SQRT2;
    }

    function s(t, e, n, i) {
      var o = n[0],
          r = n[1],
          a = i[0] - o,
          s = i[1] - r;

      if (0 !== a || 0 !== s) {
        var l = ((t - o) * a + (e - r) * s) / (a * a + s * s);
        l > 1 ? (o = i[0], r = i[1]) : l > 0 && (o += a * l, r += s * l);
      }

      return (a = t - o) * a + (s = e - r) * s;
    }

    i["default"] && (i = i["default"]), t.exports = o, t.exports["default"] = o;
  },
  2640: function _(t, e, n) {
    n.r(e), n.d(e, {
      "default": function _default() {
        return i;
      }
    });

    var i =
    /*#__PURE__*/
    function () {
      function i() {
        var t = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : [];
        var e = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : o;

        _classCallCheck(this, i);

        if (this.data = t, this.length = this.data.length, this.compare = e, this.length > 0) for (var _t43 = (this.length >> 1) - 1; _t43 >= 0; _t43--) {
          this._down(_t43);
        }
      }

      _createClass(i, [{
        key: "push",
        value: function push(t) {
          this.data.push(t), this.length++, this._up(this.length - 1);
        }
      }, {
        key: "pop",
        value: function pop() {
          if (0 === this.length) return;
          var t = this.data[0],
              e = this.data.pop();
          return this.length--, this.length > 0 && (this.data[0] = e, this._down(0)), t;
        }
      }, {
        key: "peek",
        value: function peek() {
          return this.data[0];
        }
      }, {
        key: "_up",
        value: function _up(t) {
          var e = this.data,
              n = this.compare,
              i = e[t];

          for (; t > 0;) {
            var _o18 = t - 1 >> 1,
                r = e[_o18];

            if (n(i, r) >= 0) break;
            e[t] = r, t = _o18;
          }

          e[t] = i;
        }
      }, {
        key: "_down",
        value: function _down(t) {
          var e = this.data,
              n = this.compare,
              i = this.length >> 1,
              o = e[t];

          for (; t < i;) {
            var _i34 = 1 + (t << 1),
                r = e[_i34];

            var a = _i34 + 1;
            if (a < this.length && n(e[a], r) < 0 && (_i34 = a, r = e[a]), n(r, o) >= 0) break;
            e[t] = r, t = _i34;
          }

          e[t] = o;
        }
      }]);

      return i;
    }();

    function o(t, e) {
      return t < e ? -1 : t > e ? 1 : 0;
    }
  },
  2872: function _(t, e, n) {
    n.r(e), n.d(e, {
      am5map: function am5map() {
        return i;
      }
    });
    var i = n(7533);
  }
}, function (t) {
  var e = (2872, t(t.s = 2872)),
      n = window;

  for (var i in e) {
    n[i] = e[i];
  }

  e.__esModule && Object.defineProperty(n, "__esModule", {
    value: !0
  });
}]);