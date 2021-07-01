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

/* partials/layout.html.twig */
class __TwigTemplate_9c07c86d7165d7f29d810424816491fb0097e56f2bdf35ad30af859a9ef4d450 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'items' => [$this, 'block_items'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["item_col"] = ((($context["show_sidebar"] ?? null)) ? ("w-full md:w-9/12") : ("w-full"));
        // line 2
        $context["sidebar_col"] = ((($context["show_sidebar"] ?? null)) ? ("w-full md:w-3/12") : ("hidden"));
        // line 3
        echo "
<div>
  <div class=\"flex flex-wrap text-left\">

    <div class=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["item_col"] ?? null), "html", null, true);
        echo " md:pr-8 text-left\">
      ";
        // line 8
        $this->displayBlock('items', $context, $blocks);
        // line 9
        echo "    </div>

    ";
        // line 11
        if (($context["show_sidebar"] ?? null)) {
            // line 12
            echo "      <div id=\"sidebar\" class=\"";
            echo twig_escape_filter($this->env, ($context["sidebar_col"] ?? null), "html", null, true);
            echo " flex flex-wrap text-left flex-col lg:px-4 my-6\">
        ";
            // line 13
            $this->displayBlock('sidebar', $context, $blocks);
            // line 14
            echo "      </div>
    ";
        }
        // line 16
        echo "
  </div>
</div>
";
    }

    // line 8
    public function block_items($context, array $blocks = [])
    {
    }

    // line 13
    public function block_sidebar($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  72 => 8,  65 => 16,  61 => 14,  59 => 13,  54 => 12,  52 => 11,  48 => 9,  46 => 8,  42 => 7,  36 => 3,  34 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set item_col = show_sidebar ? 'w-full md:w-9/12' : 'w-full' %}
{% set sidebar_col = show_sidebar ? 'w-full md:w-3/12' : 'hidden' %}

<div>
  <div class=\"flex flex-wrap text-left\">

    <div class=\"{{ item_col }} md:pr-8 text-left\">
      {% block items %}{% endblock %}
    </div>

    {% if show_sidebar %}
      <div id=\"sidebar\" class=\"{{ sidebar_col }} flex flex-wrap text-left flex-col lg:px-4 my-6\">
        {% block sidebar %}{% endblock %}
      </div>
    {% endif %}

  </div>
</div>
", "partials/layout.html.twig", "C:\\wamp64\\www\\morganButton.dev\\user\\themes\\typhoon\\templates\\partials\\layout.html.twig");
    }
}
