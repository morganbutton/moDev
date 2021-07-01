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

/* blog.html.twig */
class __TwigTemplate_c694d4d84ca35b269b6e9d4822e600648ca8749897dfeb4fc90f7731171a233c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content_wrapper' => [$this, 'block_content_wrapper'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["blog"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "root_of_blog", null, null, true));
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 4
        $context["show_sidebar"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "show_sidebar", true));
        // line 5
        $context["show_pagination"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "show_pagination", true));
        // line 6
        $context["show_breadcrumbs"] = twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "show_breadcrumbs", true));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "  <section class=\"flex-1 bg-gray-100 dark:bg-gray-800\">
    <div class=\"blog-layout\">
      ";
        // line 11
        $this->displayBlock("content_surround", $context, $blocks);
        echo "
    </div>
  </section>
";
    }

    // line 16
    public function block_content_wrapper($context, array $blocks = [])
    {
        // line 17
        echo "  ";
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 18
            echo "    ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 18)->display($context);
            // line 19
            echo "  ";
        }
        // line 20
        echo "
  ";
        // line 21
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 21, "1820257304")->display($context);
        // line 44
        echo "
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 44,  81 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  58 => 11,  54 => 9,  51 => 8,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog = theme_var('root_of_blog', null, null, true)|e %}
{% set collection = page.collection() %}
{% set show_sidebar = theme_var('show_sidebar', true)|e %}
{% set show_pagination = theme_var('show_pagination', true)|e %}
{% set show_breadcrumbs = theme_var('show_breadcrumbs', true)|e %}

{% block body %}
  <section class=\"flex-1 bg-gray-100 dark:bg-gray-800\">
    <div class=\"blog-layout\">
      {{ block('content_surround') }}
    </div>
  </section>
{% endblock %}

{% block content_wrapper %}
  {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
    {% include 'partials/breadcrumbs.html.twig' %}
  {% endif %}

  {% embed 'partials/layout.html.twig' %}

    {% block items %}

      <div class=\"flex flex-wrap -mx-4\">
        {% for post in collection %}
          {% include \"partials/post-item.html.twig\" with {page: post} %}
        {% endfor %}
      </div>

      {% if config.plugins.pagination.enabled %}
        <div class=\"flex justify-center w-full p-6 mx-auto\">
          {% include 'partials/pagination.html.twig' with {base_url: blog.url, pagination: collection.params.pagination} %}
        </div>
      {% endif %}

    {% endblock %}

    {% block sidebar %}
      {% include 'partials/sidebar.html.twig' %}
    {% endblock %}

  {% endembed %}

{% endblock %}
", "blog.html.twig", "C:\\wamp64\\www\\morganButton.dev\\user\\themes\\typhoon\\templates\\blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_c694d4d84ca35b269b6e9d4822e600648ca8749897dfeb4fc90f7731171a233c___1820257304 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'items' => [$this, 'block_items'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "blog.html.twig", 21);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_items($context, array $blocks = [])
    {
        // line 24
        echo "
      <div class=\"flex flex-wrap -mx-4\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 27
            echo "          ";
            $this->loadTemplate("partials/post-item.html.twig", "blog.html.twig", 27)->display(twig_array_merge($context, ["page" => $context["post"]]));
            // line 28
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      </div>

      ";
        // line 31
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", [])) {
            // line 32
            echo "        <div class=\"flex justify-center w-full p-6 mx-auto\">
          ";
            // line 33
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 33)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["blog"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 34
            echo "        </div>
      ";
        }
        // line 36
        echo "
    ";
    }

    // line 39
    public function block_sidebar($context, array $blocks = [])
    {
        // line 40
        echo "      ";
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 40)->display($context);
        // line 41
        echo "    ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 41,  252 => 40,  249 => 39,  244 => 36,  240 => 34,  238 => 33,  235 => 32,  233 => 31,  229 => 29,  215 => 28,  212 => 27,  195 => 26,  191 => 24,  188 => 23,  178 => 21,  83 => 44,  81 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  58 => 11,  54 => 9,  51 => 8,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set blog = theme_var('root_of_blog', null, null, true)|e %}
{% set collection = page.collection() %}
{% set show_sidebar = theme_var('show_sidebar', true)|e %}
{% set show_pagination = theme_var('show_pagination', true)|e %}
{% set show_breadcrumbs = theme_var('show_breadcrumbs', true)|e %}

{% block body %}
  <section class=\"flex-1 bg-gray-100 dark:bg-gray-800\">
    <div class=\"blog-layout\">
      {{ block('content_surround') }}
    </div>
  </section>
{% endblock %}

{% block content_wrapper %}
  {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
    {% include 'partials/breadcrumbs.html.twig' %}
  {% endif %}

  {% embed 'partials/layout.html.twig' %}

    {% block items %}

      <div class=\"flex flex-wrap -mx-4\">
        {% for post in collection %}
          {% include \"partials/post-item.html.twig\" with {page: post} %}
        {% endfor %}
      </div>

      {% if config.plugins.pagination.enabled %}
        <div class=\"flex justify-center w-full p-6 mx-auto\">
          {% include 'partials/pagination.html.twig' with {base_url: blog.url, pagination: collection.params.pagination} %}
        </div>
      {% endif %}

    {% endblock %}

    {% block sidebar %}
      {% include 'partials/sidebar.html.twig' %}
    {% endblock %}

  {% endembed %}

{% endblock %}
", "blog.html.twig", "C:\\wamp64\\www\\morganButton.dev\\user\\themes\\typhoon\\templates\\blog.html.twig");
    }
}
