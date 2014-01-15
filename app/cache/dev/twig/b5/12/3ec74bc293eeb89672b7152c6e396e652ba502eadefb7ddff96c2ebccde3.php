<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_b5123ec74bc293eeb89672b7152c6e396e652ba502eadefb7ddff96c2ebccde3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  75 => 28,  62 => 24,  32 => 6,  26 => 3,  24 => 2,  211 => 152,  171 => 115,  160 => 107,  156 => 106,  152 => 105,  148 => 104,  140 => 102,  88 => 53,  79 => 29,  64 => 35,  55 => 29,  36 => 16,  119 => 75,  50 => 15,  46 => 14,  42 => 12,  38 => 9,  34 => 8,  30 => 5,  22 => 2,  19 => 1,  278 => 120,  275 => 119,  270 => 65,  267 => 64,  262 => 56,  259 => 55,  254 => 53,  251 => 52,  246 => 122,  244 => 119,  229 => 107,  225 => 106,  221 => 105,  213 => 100,  209 => 99,  203 => 96,  197 => 93,  193 => 92,  189 => 91,  184 => 89,  180 => 88,  176 => 87,  172 => 86,  166 => 83,  162 => 82,  158 => 81,  146 => 71,  144 => 103,  139 => 67,  137 => 64,  132 => 61,  130 => 60,  126 => 58,  123 => 55,  121 => 52,  106 => 40,  100 => 37,  96 => 55,  90 => 33,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  70 => 26,  66 => 25,  59 => 23,  52 => 19,  48 => 18,  44 => 17,  40 => 16,  23 => 1,  31 => 5,  28 => 4,);
    }
}
