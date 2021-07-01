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

/* partials/login-form.html.twig */
class __TwigTemplate_8759a1a465d2329ceba687429418ce87bd5b368868ecc475033820fcf69b883b extends \Twig\Template
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
        $context["client_side_validation"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "client_side_validation", []))) ? ($this->getAttribute(($context["form"] ?? null), "client_side_validation", [])) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "client_side_validation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "client_side_validation", []), true)) : (true))));
        // line 2
        $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", []))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "inline_errors", [0 => false], "method")));
        // line 3
        echo "
<section id=\"grav-login\">

    ";
        // line 6
        if ((($this->getAttribute(($context["page"] ?? null), "template", []) == "login") || ($context["show_login_form"] ?? null))) {
            // line 7
            echo "        ";
            $context["user"] = $this->getAttribute(($context["grav"] ?? null), "user", []);
            // line 8
            echo "        ";
            if (($this->getAttribute(($context["user"] ?? null), "authenticated", []) && $this->getAttribute(($context["user"] ?? null), "authorized", []))) {
                // line 9
                echo "            <h4>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_LOGIN.WELCOME"), "html", null, true);
                echo " <strong>";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["user"] ?? null), "fullname", [])) ? ($this->getAttribute(($context["user"] ?? null), "fullname", [])) : ($this->getAttribute(($context["user"] ?? null), "username", []))), "html", null, true);
                echo "</strong></h4>
            <hr>
            <a class=\"button logout\" href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => ((((($context["base_url_relative"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "path", [])) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "login.logout"), 1 => "logout-form", 2 => "logout-nonce"], "method"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_LOGIN.BTN_LOGOUT"), "html", null, true);
                echo "</a>

        ";
            } elseif (($this->getAttribute(            // line 13
($context["user"] ?? null), "authenticated", []) && $this->getAttribute(($context["user"] ?? null), "twofa_enabled", []))) {
                // line 14
                echo "            ";
                $this->loadTemplate("partials/login-twofa.html.twig", "partials/login-form.html.twig", 14)->display($context);
                // line 15
                echo "
        ";
            } else {
                // line 17
                echo "            ";
                echo ($context["content"] ?? null);
                echo "

            ";
                // line 20
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "login", []), "getProviderLoginTemplates", []));
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
                foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
                    // line 21
                    echo "                ";
                    $this->loadTemplate($context["template"], "partials/login-form.html.twig", 21)->display($context);
                    // line 22
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "
            <form method=\"post\" action=\"";
                // line 24
                echo twig_escape_filter($this->env, (($context["base_url_relative"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "path", [])));
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["form_outer_classes"] ?? null), "html", null, true);
                echo " login-form\">

                ";
                // line 27
                echo "                ";
                if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_loginPage", [])) {
                    // line 28
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_loginPage", []));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                        // line 29
                        echo "                        ";
                        $this->loadTemplate($context["label"], "partials/login-form.html.twig", 29)->display($context);
                        // line 30
                        echo "                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "                ";
                }
                // line 32
                echo "
                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
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
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 34
                    echo "                    ";
                    $context["value"] = ((($this->getAttribute($context["field"], "name", []) == "username")) ? (($context["username"] ?? null)) : (""));
                    // line 35
                    echo "                    ";
                    if ($this->getAttribute($context["field"], "type", [])) {
                        // line 36
                        echo "                        ";
                        $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "partials/login-form.html.twig", 36)->display($context);
                        // line 37
                        echo "                    ";
                    }
                    // line 38
                    echo "                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "
                <div class=\"";
                // line 40
                ((($context["form_button_outer_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_button_outer_classes"] ?? null), "html", null, true))) : (print ("form-actions secondary-accent")));
                echo "\">
                    ";
                // line 41
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "rememberme", []), "enabled", []) && ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "form", [], "any", false, true), "login", [], "any", false, true), "rememberme", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "form", [], "any", false, true), "login", [], "any", false, true), "rememberme", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "form", [], "any", false, true), "login", [], "any", false, true), "rememberme", [])) : (true)))) {
                    // line 42
                    echo "                        <div class=\"form-data rememberme\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"checkbox\">
                            <div class=\"form-input-wrapper\">
                                <input type=\"checkbox\" value=\"1\" name=\"rememberme\" id=\"#rememberme\">
                                <label class=\"inline\" for=\"#rememberme\" title=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_LOGIN.REMEMBER_ME_HELP"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_LOGIN.REMEMBER_ME"), "html", null, true);
                    echo "</label>
                            </div>
                        </div>
                    ";
                }
                // line 49
                echo "
                    ";
                // line 50
                if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "form", [], "any", false, true), "login", [], "any", false, true), "forgot_button", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "form", [], "any", false, true), "login", [], "any", false, true), "forgot_button", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "form", [], "any", false, true), "login", [], "any", false, true), "forgot_button", [])) : (true))) {
                    // line 51
                    echo "                    <a class=\"";
                    ((($context["form_button_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_button_classes"] ?? null), "html", null, true))) : (print ("button secondary")));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "route_forgot", []), "html", null, true);
                    echo "\"><i class=\"fa fa-exclamation-circle\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_LOGIN.BTN_FORGOT"), "html", null, true);
                    echo "</a>
                    ";
                }
                // line 53
                echo "
                    <button class=\"";
                // line 54
                ((($context["form_button_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_button_classes"] ?? null), "html", null, true))) : (print ("button primary")));
                echo "\" type=\"submit\"  name=\"task\" value=\"login.login\"><i class=\"fa fa-sign-in\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_LOGIN.BTN_LOGIN"), "html", null, true);
                echo "</button>
                </div>

                ";
                // line 57
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nonceFieldFunc("login-form", "login-form-nonce");
                echo "
            </form>

        ";
            }
            // line 61
            echo "
    ";
        }
        // line 63
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/login-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 63,  266 => 61,  259 => 57,  251 => 54,  248 => 53,  237 => 51,  235 => 50,  232 => 49,  223 => 45,  218 => 42,  216 => 41,  212 => 40,  209 => 39,  195 => 38,  192 => 37,  189 => 36,  186 => 35,  183 => 34,  166 => 33,  163 => 32,  160 => 31,  146 => 30,  143 => 29,  125 => 28,  122 => 27,  115 => 24,  112 => 23,  98 => 22,  95 => 21,  77 => 20,  71 => 17,  67 => 15,  64 => 14,  62 => 13,  55 => 11,  47 => 9,  44 => 8,  41 => 7,  39 => 6,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|default(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

<section id=\"grav-login\">

    {% if page.template == 'login' or show_login_form %}
        {% set user = grav.user %}
        {% if user.authenticated and user.authorized %}
            <h4>{{ 'PLUGIN_LOGIN.WELCOME'|t }} <strong>{{ user.fullname ?: user.username }}</strong></h4>
            <hr>
            <a class=\"button logout\" href=\"{{ uri.addNonce(base_url_relative ~ uri.path ~ '/task' ~ config.system.param_sep ~ 'login.logout', 'logout-form', 'logout-nonce')|e }}\">{{ 'PLUGIN_LOGIN.BTN_LOGOUT'|t }}</a>

        {% elseif user.authenticated and user.twofa_enabled %}
            {% include 'partials/login-twofa.html.twig' %}

        {% else %}
            {{ content|raw }}

            {# NEW WAY OF INCLUDING 3RD PARTY LOGIN OPTIONS #}
            {% for template in grav.login.getProviderLoginTemplates %}
                {% include template %}
            {% endfor %}

            <form method=\"post\" action=\"{{ (base_url_relative ~ uri.path)|e }}\" class=\"{{ form_outer_classes }} login-form\">

                {# OLD WAY OF INCLUDING 3RD PARTY LOGIN OPTIONS #}
                {% if grav.twig.plugins_hooked_loginPage %}
                    {% for label in grav.twig.plugins_hooked_loginPage %}
                        {% include label %}
                    {% endfor %}
                {% endif %}

                {% for field in form.fields %}
                    {% set value = field.name == 'username' ? username : '' %}
                    {% if field.type %}
                        {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                    {% endif %}
                {% endfor %}

                <div class=\"{{ form_button_outer_classes ?: 'form-actions secondary-accent' }}\">
                    {% if config.plugins.login.rememberme.enabled and page.header.form.login.rememberme ?? true %}
                        <div class=\"form-data rememberme\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"checkbox\">
                            <div class=\"form-input-wrapper\">
                                <input type=\"checkbox\" value=\"1\" name=\"rememberme\" id=\"#rememberme\">
                                <label class=\"inline\" for=\"#rememberme\" title=\"{{ 'PLUGIN_LOGIN.REMEMBER_ME_HELP'|t }}\">{{ 'PLUGIN_LOGIN.REMEMBER_ME'|t }}</label>
                            </div>
                        </div>
                    {% endif %}

                    {% if page.header.form.login.forgot_button ?? true %}
                    <a class=\"{{ form_button_classes ?: 'button secondary' }}\" href=\"{{ base_url_relative }}{{ config.plugins.login.route_forgot }}\"><i class=\"fa fa-exclamation-circle\"></i> {{ 'PLUGIN_LOGIN.BTN_FORGOT'|t }}</a>
                    {% endif %}

                    <button class=\"{{ form_button_classes ?: 'button primary' }}\" type=\"submit\"  name=\"task\" value=\"login.login\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_LOGIN.BTN_LOGIN'|t }}</button>
                </div>

                {{ nonce_field('login-form', 'login-form-nonce')|raw }}
            </form>

        {% endif %}

    {% endif %}

</section>
", "partials/login-form.html.twig", "C:\\wamp64\\www\\morganButton.dev\\user\\plugins\\login\\templates\\partials\\login-form.html.twig");
    }
}
