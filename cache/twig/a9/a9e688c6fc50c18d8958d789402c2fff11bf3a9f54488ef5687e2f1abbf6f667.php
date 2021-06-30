<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/footer.html.twig */
class __TwigTemplate_c34be34f5fb9b5315284356c010b54106601f623036e01c8f949a5cdd3175724 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["footer"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute(($context["theme_config"] ?? null), "footer_page_route", [])], "method"), "header", []), "footer", [])) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute(($context["theme_config"] ?? null), "footer_page_route", [])], "method"), "header", []), "footer", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "footer", [])));
        // line 2
        echo "
";
        // line 3
        $context["menu_enabled"] = $this->getAttribute(($context["footer"] ?? null), "menu_enabled", []);
        // line 4
        $context["menu"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "menu", []), $this->getAttribute(($context["footer"] ?? null), "menu", []));
        // line 5
        $context["social_enabled"] = $this->getAttribute(($context["footer"] ?? null), "social_enabled", []);
        // line 6
        $context["social"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "social", []), $this->getAttribute(($context["footer"] ?? null), "social", []));
        // line 7
        echo "
<footer class=\"bg-gray-100 dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 text-sm\">
  <div class=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "wrapper_spacing"));
        echo " py-8\">

    <div class=\"relative flex flex-col md:flex-row justify-between min-h-16 text-gray-600 dark:text-gray-500\">
      ";
        // line 12
        if ((($context["menu_enabled"] ?? null) && ($context["menu"] ?? null))) {
            // line 13
            echo "        <div class=\"flex font-medium space-x-6 md:space-x-8 items-center justify-center mb-6 md:mb-0 md:justify-start \">
          ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc($this->getAttribute($context["item"], "link", [])), "html", null, true);
                echo "\" class=\"hover:text-primary transition duration-300\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", []), "html", null, true);
                echo "</a>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </div>
      ";
        }
        // line 19
        echo "
      ";
        // line 20
        if ((($context["social_enabled"] ?? null) && ($context["social"] ?? null))) {
            // line 21
            echo "        <div class=\"flex social mb-2 space-x-2 items-center justify-center mb-6 md:mb-0 md:justify-start\">
          ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["social"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 23
                echo "            ";
                if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->containsFilter($this->getAttribute($context["item"], "network", []), "__")) {
                    // line 24
                    echo "              ";
                    $context["item_parts"] = twig_split_filter($this->env, $this->getAttribute($context["item"], "network", []), "__");
                    // line 25
                    echo "              ";
                    $context["icon"] = (((twig_last($this->env, ($context["item_parts"] ?? null)) . "/") . twig_first($this->env, ($context["item_parts"] ?? null))) . ".svg");
                    // line 26
                    echo "              ";
                    $context["link_class"] = (("bg-" . twig_first($this->env, ($context["item_parts"] ?? null))) . " text-white px-2 flex items-center rounded-full w-8 h-8");
                    // line 27
                    echo "              ";
                    $context["icon_class"] = "brands w-full";
                    // line 28
                    echo "            ";
                } else {
                    // line 29
                    echo "              ";
                    $context["icon"] = (("social/" . $this->getAttribute($context["item"], "network", [])) . ".svg");
                    // line 30
                    echo "              ";
                    $context["link_class"] = ("text-" . $this->getAttribute($context["item"], "network", []));
                    // line 31
                    echo "              ";
                    $context["icon_class"] = "w-8 h-8 fill-current stroke-current";
                    // line 32
                    echo "            ";
                }
                // line 33
                echo "            ";
                $context["extra"] = ((($this->getAttribute($context["item"], "network", []) == "github")) ? ("dark:text-gray-500") : (""));
                // line 34
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc($this->getAttribute($context["item"], "link", [])), "html", null, true);
                echo "\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "network", []), "html", null, true);
                echo "\"
               class=\"";
                // line 35
                echo twig_escape_filter($this->env, ($context["link_class"] ?? null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["extra"] ?? null), "html", null, true);
                echo " hover:filter hover:brightness-110 transition duration-300\">
              ";
                // line 36
                echo call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), [($context["icon"] ?? null), ($context["icon_class"] ?? null)]);
                echo "
            </a>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </div>
      ";
        }
        // line 41
        echo "    </div>
    <div class=\"relative flex flex-col md:flex-row justify-between mt-0 md:mt-6 text-gray-600 dark:text-gray-500 md:items-center\">
      <div class=\"text-center md:text-left mb-6 md:mb-0\">
        ";
        // line 44
        echo call_user_func_array($this->env->getFilter('shortcodes')->getCallable(), [$this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute(($context["footer"] ?? null), "copyright", []))]);
        echo "
      </div>

      ";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "appearance", []), "selector", [])) {
            // line 48
            echo "        <div class=\"max-w-64 mx-auto md:mx-0\">
          <div class=\"theme-chooser flex items-center rounded-md border border-gray-300 dark:border-gray-600 pl-2 pr-0\">
                <span>
                  <span x-cloak :class=\"{'inline-block' : appearance === 'system', 'hidden': appearance !== 'system'}\">
                  ";
            // line 52
            echo call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/device-desktop.svg", "w-6 h-6 stroke-current"]);
            echo "
                  </span>
                  <span x-cloak :class=\"{'inline-block' : appearance === 'light', 'hidden': appearance !== 'light'}\">
                  ";
            // line 55
            echo call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/sun.svg", "w-6 h-6 stroke-current"]);
            echo "
                  </span>
                  <span x-cloak :class=\"{'inline-block' : appearance === 'dark', 'hidden': appearance !== 'dark'}\">
                  ";
            // line 58
            echo call_user_func_array($this->env->getFunction('svg_icon')->getCallable(), ["tabler/moon.svg", "w-6 h-6 stroke-current"]);
            echo "
                  </span>
                </span>
            <select x-model=\"appearance\" @change=\"typhoonStore({ appearance: \$event.target.value });\"
                    class=\"form-select focus:ring-transparent focus:outline-none focus:shadow-none\"
                    aria-label=\"Change color theme\">
              <option value=\"system\" :selected=\"appearance === 'system'\">System</option>
              <option value=\"light\" :selected=\"appearance === 'light'\">Light</option>
              <option value=\"dark\" :selected=\"appearance === 'dark'\">Dark</option>
            </select>
          </div>
        </div>
      ";
        }
        // line 71
        echo "    </div>
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 71,  179 => 58,  173 => 55,  167 => 52,  161 => 48,  159 => 47,  153 => 44,  148 => 41,  144 => 39,  135 => 36,  129 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  110 => 30,  107 => 29,  104 => 28,  101 => 27,  98 => 26,  95 => 25,  92 => 24,  89 => 23,  85 => 22,  82 => 21,  80 => 20,  77 => 19,  73 => 17,  62 => 15,  58 => 14,  55 => 13,  53 => 12,  47 => 9,  43 => 7,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set footer = page.find(theme_config.footer_page_route).header.footer ?: theme_config.footer %}

{% set menu_enabled = footer.menu_enabled %}
{% set menu = site.footer.menu|defined(footer.menu) %}
{% set social_enabled = footer.social_enabled %}
{% set social = site.footer.social|defined(footer.social) %}

<footer class=\"bg-gray-100 dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 text-sm\">
  <div class=\"{{ theme_var('wrapper_spacing')|e }} py-8\">

    <div class=\"relative flex flex-col md:flex-row justify-between min-h-16 text-gray-600 dark:text-gray-500\">
      {% if menu_enabled and menu %}
        <div class=\"flex font-medium space-x-6 md:space-x-8 items-center justify-center mb-6 md:mb-0 md:justify-start \">
          {% for item in menu %}
            <a href=\"{{ url(item.link) }}\" class=\"hover:text-primary transition duration-300\">{{ item.label }}</a>
          {% endfor %}
        </div>
      {% endif %}

      {% if social_enabled and social %}
        <div class=\"flex social mb-2 space-x-2 items-center justify-center mb-6 md:mb-0 md:justify-start\">
          {% for item in social %}
            {% if item.network|contains('__') %}
              {% set item_parts = item.network|split('__') %}
              {% set icon = item_parts|last ~ '/' ~ item_parts|first ~ '.svg' %}
              {% set link_class = 'bg-' ~ item_parts|first ~ ' text-white px-2 flex items-center rounded-full w-8 h-8' %}
              {% set icon_class = 'brands w-full' %}
            {% else %}
              {% set icon = 'social/' ~ item.network ~ '.svg' %}
              {% set link_class = 'text-' ~ item.network %}
              {% set icon_class = 'w-8 h-8 fill-current stroke-current' %}
            {% endif %}
            {% set extra = item.network == 'github' ? 'dark:text-gray-500' %}
            <a href=\"{{ url(item.link) }}\" aria-label=\"{{ item.network }}\"
               class=\"{{ link_class }} {{ extra }} hover:filter hover:brightness-110 transition duration-300\">
              {{ svg_icon(icon, icon_class)|raw }}
            </a>
          {% endfor %}
        </div>
      {% endif %}
    </div>
    <div class=\"relative flex flex-col md:flex-row justify-between mt-0 md:mt-6 text-gray-600 dark:text-gray-500 md:items-center\">
      <div class=\"text-center md:text-left mb-6 md:mb-0\">
        {{ footer.copyright|markdown|shortcodes|raw }}
      </div>

      {% if theme_config.appearance.selector %}
        <div class=\"max-w-64 mx-auto md:mx-0\">
          <div class=\"theme-chooser flex items-center rounded-md border border-gray-300 dark:border-gray-600 pl-2 pr-0\">
                <span>
                  <span x-cloak :class=\"{'inline-block' : appearance === 'system', 'hidden': appearance !== 'system'}\">
                  {{ svg_icon('tabler/device-desktop.svg', 'w-6 h-6 stroke-current')|raw }}
                  </span>
                  <span x-cloak :class=\"{'inline-block' : appearance === 'light', 'hidden': appearance !== 'light'}\">
                  {{ svg_icon('tabler/sun.svg', 'w-6 h-6 stroke-current')|raw }}
                  </span>
                  <span x-cloak :class=\"{'inline-block' : appearance === 'dark', 'hidden': appearance !== 'dark'}\">
                  {{ svg_icon('tabler/moon.svg', 'w-6 h-6 stroke-current')|raw }}
                  </span>
                </span>
            <select x-model=\"appearance\" @change=\"typhoonStore({ appearance: \$event.target.value });\"
                    class=\"form-select focus:ring-transparent focus:outline-none focus:shadow-none\"
                    aria-label=\"Change color theme\">
              <option value=\"system\" :selected=\"appearance === 'system'\">System</option>
              <option value=\"light\" :selected=\"appearance === 'light'\">Light</option>
              <option value=\"dark\" :selected=\"appearance === 'dark'\">Dark</option>
            </select>
          </div>
        </div>
      {% endif %}
    </div>
  </div>
</footer>
", "partials/footer.html.twig", "C:\\wamp64\\www\\morganButton.dev\\user\\themes\\typhoon\\templates\\partials\\footer.html.twig");
    }
}
