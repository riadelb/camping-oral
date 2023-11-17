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

/* facture/index.html.twig */
class __TwigTemplate_a22a51f134169bbc564a22f650d6e8d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "facture/index.html.twig", 1);
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

        // line 4
        echo "    Liste des Factures
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1><a href=\"/\">Camping l'Espadrille Volante</a></h1>
    <a href=\"/admin/dashboard\" class=\"btn\">Espace admin</a>
    <h1>Liste des Factures</h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">ID</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Total</th>
            <th scope=\"col\">Date de Début</th>
            <th scope=\"col\">Date de Fin</th>
            <th scope=\"col\">Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new RuntimeError('Variable "factures" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 25
            echo "            <tr>
                <th scope=\"row\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</th>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "total", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "dateDebut", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "dateFin", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\">Télécharger PDF</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "facture/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 36,  136 => 32,  131 => 30,  127 => 29,  123 => 28,  119 => 27,  115 => 26,  112 => 25,  108 => 24,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Liste des Factures
{% endblock %}

{% block body %}
    <h1><a href=\"/\">Camping l'Espadrille Volante</a></h1>
    <a href=\"/admin/dashboard\" class=\"btn\">Espace admin</a>
    <h1>Liste des Factures</h1>

    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">ID</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Total</th>
            <th scope=\"col\">Date de Début</th>
            <th scope=\"col\">Date de Fin</th>
            <th scope=\"col\">Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for facture in factures %}
            <tr>
                <th scope=\"row\">{{ facture.id }}</th>
                <td>{{ facture.nom }}</td>
                <td>{{ facture.total }}</td>
                <td>{{ facture.dateDebut|date('Y-m-d') }}</td>
                <td>{{ facture.dateFin|date('Y-m-d') }}</td>
                <td>
                    <a href=\"{{ path('generate_pdf', {'id': facture.id}) }}\" class=\"btn btn-sm btn-success\">Télécharger PDF</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "facture/index.html.twig", "/app/templates/facture/index.html.twig");
    }
}
