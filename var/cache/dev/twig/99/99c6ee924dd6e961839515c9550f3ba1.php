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

/* bien/index.html.twig */
class __TwigTemplate_45a6545b1bee0f29579248a1c88b5a12 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bien/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bien/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bien/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1><a href=\"/\">Camping l'Espadrille Volante</a></h1>
    <h2>Liste des biens</h2>
    <div class=\"row\">
        <div>
            <a href=\"/\" class=\"btn\">Accueil</a>
            <a href=\"/admin/reservation\" class=\"btn\">Espace reservations</a>
            <a href=\"/factures/\" class=\"btn\">Factures</a>
        </div>
        <div>
            <a href=\"/logout\" class=\"btn\">Déconnexion</a>
        </div>
    </div>
        <td><a href=\" ";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bien_new");
        echo " \" class=\"btn\">Ajouter un bien</a></td>
    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Type</th>
            <th>Capacité</th>
            <th>Image</th>
            <th>Prix (€)</th>
            <th>Détails</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new RuntimeError('Variable "biens" does not exist.', 30, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 31
            echo "            <tr>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "nom", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "description", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bien"], "type", [], "any", false, false, false, 34), "getLabel", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "capacite", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "imagePath", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["bien"], "prix", [], "any", false, false, false, 37) / 100), "html", null, true);
            echo "</td>
                <td><a href=\"/detail/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\" class=\"btn\">Voir</a></td>
                <td>";
            // line 39
            $this->loadTemplate("bien/_delete_form.html.twig", "bien/index.html.twig", 39)->display($context);
            echo "</td>
                <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bien_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn\">Editer</a></td>

            </tr>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "bien/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 44,  151 => 40,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  131 => 35,  127 => 34,  123 => 33,  119 => 32,  116 => 31,  99 => 30,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1><a href=\"/\">Camping l'Espadrille Volante</a></h1>
    <h2>Liste des biens</h2>
    <div class=\"row\">
        <div>
            <a href=\"/\" class=\"btn\">Accueil</a>
            <a href=\"/admin/reservation\" class=\"btn\">Espace reservations</a>
            <a href=\"/factures/\" class=\"btn\">Factures</a>
        </div>
        <div>
            <a href=\"/logout\" class=\"btn\">Déconnexion</a>
        </div>
    </div>
        <td><a href=\" {{ path('app_bien_new') }} \" class=\"btn\">Ajouter un bien</a></td>
    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Type</th>
            <th>Capacité</th>
            <th>Image</th>
            <th>Prix (€)</th>
            <th>Détails</th>
        </tr>
        </thead>
        <tbody>
        {% for bien in biens %}
            <tr>
                <td>{{ bien.nom }}</td>
                <td>{{ bien.description }}</td>
                <td>{{ bien.type.getLabel }}</td>
                <td>{{ bien.capacite }}</td>
                <td>{{ bien.imagePath }}</td>
                <td>{{ bien.prix / 100 }}</td>
                <td><a href=\"/detail/{{ bien.id }}\" class=\"btn\">Voir</a></td>
                <td>{% include 'bien/_delete_form.html.twig' %}</td>
                <td><a href=\"{{ path('app_bien_edit', {'id': bien.id}) }}\" class=\"btn\">Editer</a></td>

            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "bien/index.html.twig", "/app/templates/bien/index.html.twig");
    }
}
