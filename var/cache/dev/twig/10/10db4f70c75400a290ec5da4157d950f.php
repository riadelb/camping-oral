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

/* facture/pdf.html.twig */
class __TwigTemplate_ef0e5c704390867f6b645a29952876d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Facture</title>
</head>
<body>
<h1>Facture</h1>

<p>Nom: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
<p>Total: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 11, $this->source); })()), "total", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
<p>Date de Début: ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 12, $this->source); })()), "dateDebut", [], "any", false, false, false, 12), "d-m-Y"), "html", null, true);
        echo "</p>
<p>Date de Fin: ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 13, $this->source); })()), "dateFin", [], "any", false, false, false, 13), "d-m-Y"), "html", null, true);
        echo "</p>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "facture/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  62 => 12,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Facture</title>
</head>
<body>
<h1>Facture</h1>

<p>Nom: {{ facture.nom }}</p>
<p>Total: {{ facture.total }}</p>
<p>Date de Début: {{ facture.dateDebut|date('d-m-Y') }}</p>
<p>Date de Fin: {{ facture.dateFin|date('d-m-Y') }}</p>
</body>
</html>
", "facture/pdf.html.twig", "/app/templates/facture/pdf.html.twig");
    }
}
