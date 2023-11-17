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

/* home/index.html.twig */
class __TwigTemplate_14d5ccb34dfbf8ade4bddd4eb48282ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Camping l'Espadrille Volante";
        
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
        echo "    <h1><a href=\"/\">Camping l'Espadrille Volante</a></h1>
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
        </div>
    ";
        }
        // line 19
        echo "    <div class=\"card-container\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new RuntimeError('Variable "biens" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 21
            echo "            <div class=\"card\">
                <div class=\"card-image bg-danger\">
                    <img src=\"/img/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "imagePath", [], "any", false, false, false, 23), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "nom", [], "any", false, false, false, 23), "html", null, true);
            echo "\" style=\"width: 1000px\">
                </div>
                <div class=\"card-content\">
                    <h5 class=\"card-title\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "nom", [], "any", false, false, false, 26), "html", null, true);
            echo "</h5>
                    <p class=\"card-description\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "description", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                    <ul class=\"card-details\">
                        <li>Type: ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bien"], "type", [], "any", false, false, false, 29), "getLabel", [], "any", false, false, false, 29), "html", null, true);
            echo "</li>
                        <li>Capacité: ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "capacite", [], "any", false, false, false, 30), "html", null, true);
            echo "</li>
                        <li>Prix: ";
            // line 31
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["bien"], "prix", [], "any", false, false, false, 31) / 100), "html", null, true);
            echo " €</li>
                    </ul>
                    <a href=\"/detail/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\" class=\"btn\">Voir plus</a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 37,  160 => 33,  155 => 31,  151 => 30,  147 => 29,  142 => 27,  138 => 26,  130 => 23,  126 => 21,  122 => 20,  119 => 19,  111 => 16,  108 => 15,  105 => 14,  101 => 12,  98 => 11,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Camping l'Espadrille Volante{% endblock %}

{% block body %}
    <h1><a href=\"/\">Camping l'Espadrille Volante</a></h1>
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
", "home/index.html.twig", "/app/templates/home/index.html.twig");
    }
}
