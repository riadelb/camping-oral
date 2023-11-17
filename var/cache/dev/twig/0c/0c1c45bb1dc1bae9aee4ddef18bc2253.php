<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* filter/index.html.twig */
class __TwigTemplate_6377462ae24b245e2119f6f1c1bf40cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "filter/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "filter/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "filter/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "NBNAIR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h1>
    ";
        // line 7
        if (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRO"))) {
            // line 8
            echo "        <a href=\"/register\" class=\"btn\">S'inscrire</a>
        <a href=\"/login\" class=\"btn\">Connexion</a>
    ";
        }
        // line 11
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "        <a href=\"/admin/dashboard\" class=\"btn\">Espace admin</a>
    ";
        }
        // line 14
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "        <div class=\"row\">
            <div><h2>Bonjour ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
            echo "</h2></div><div><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn\">Déconnexion</a></div>
            <div>
                <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_filter", ["type" => "mobilhome"]);
            echo "\" class=\"btn\">Filtrer par Mobilhome</a>
                <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_filter", ["type" => "caravane"]);
            echo "\" class=\"btn\">Filtrer par Caravane</a>
                <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_filter", ["type" => "place"]);
            echo "\" class=\"btn\">Filtrer par Place</a>
            </div>
        </div>
    ";
        }
        // line 24
        echo "    <div class=\"card-container\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new RuntimeError('Variable "biens" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 26
            echo "            <div class=\"card\">
                <div class=\"card-image bg-danger\">
                    <img src=\"/img/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "imagePath", [], "any", false, false, false, 28), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "nom", [], "any", false, false, false, 28), "html", null, true);
            echo "\" style=\"width: 1000px\">
                </div>
                <div class=\"card-content\">
                    <h5 class=\"card-title\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "nom", [], "any", false, false, false, 31), "html", null, true);
            echo "</h5>
                    <p class=\"card-description\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "description", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
                    <ul class=\"card-details\">
                        <li>Type: ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bien"], "type", [], "any", false, false, false, 34), "getLabel", [], "any", false, false, false, 34), "html", null, true);
            echo "</li>
                        <li>Capacité: ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "capacite", [], "any", false, false, false, 35), "html", null, true);
            echo "</li>
                        <li>Prix: ";
            // line 36
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["bien"], "prix", [], "any", false, false, false, 36) / 100), "html", null, true);
            echo " €</li>
                    </ul>
                    <a href=\"/detail/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\" class=\"btn\">Voir plus</a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "filter/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 42,  176 => 38,  171 => 36,  167 => 35,  163 => 34,  158 => 32,  154 => 31,  146 => 28,  142 => 26,  138 => 25,  135 => 24,  128 => 20,  124 => 19,  120 => 18,  113 => 16,  110 => 15,  107 => 14,  103 => 12,  100 => 11,  95 => 8,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}NBNAIR{% endblock %}

{% block body %}
    <h1>{{ title }}</h1>
    {% if not is_granted('ROLE_ADMIN') and not is_granted('ROLE_PRO') %}
        <a href=\"/register\" class=\"btn\">S'inscrire</a>
        <a href=\"/login\" class=\"btn\">Connexion</a>
    {% endif %}
    {% if is_granted('ROLE_ADMIN') %}
        <a href=\"/admin/dashboard\" class=\"btn\">Espace admin</a>
    {% endif %}
    {% if app.user %}
        <div class=\"row\">
            <div><h2>Bonjour {{ app.user.nom }}</h2></div><div><a href=\"{{ path('app_logout') }}\" class=\"btn\">Déconnexion</a></div>
            <div>
                <a href=\"{{ path('app_type_filter', {'type': 'mobilhome'}) }}\" class=\"btn\">Filtrer par Mobilhome</a>
                <a href=\"{{ path('app_type_filter', {'type': 'caravane'}) }}\" class=\"btn\">Filtrer par Caravane</a>
                <a href=\"{{ path('app_type_filter', {'type': 'place'}) }}\" class=\"btn\">Filtrer par Place</a>
            </div>
        </div>
    {% endif %}
    <div class=\"card-container\">
        {% for bien in biens %}
            <div class=\"card\">
                <div class=\"card-image bg-danger\">
                    <img src=\"/img/{{ bien.imagePath }}\" alt=\"{{ bien.nom }}\" style=\"width: 1000px\">
                </div>
                <div class=\"card-content\">
                    <h5 class=\"card-title\">{{ bien.nom }}</h5>
                    <p class=\"card-description\">{{ bien.description }}</p>
                    <ul class=\"card-details\">
                        <li>Type: {{ bien.type.getLabel }}</li>
                        <li>Capacité: {{ bien.capacite }}</li>
                        <li>Prix: {{ bien.prix/100 }} €</li>
                    </ul>
                    <a href=\"/detail/{{ bien.id }}\" class=\"btn\">Voir plus</a>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "filter/index.html.twig", "/app/templates/filter/index.html.twig");
    }
}
