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

/* home/detail.html.twig */
class __TwigTemplate_90cd38f83af82854e62e690025e16868 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/detail.html.twig", 1);
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
        echo "    Détail du Bien
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
    <h2>Détail du Bien</h2>
    ";
        // line 10
        if ((isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "        <div class=\"card\">
            <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 12, $this->source); })()), "imagePath", [], "any", false, false, false, 12))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
            echo "</h5>
                <p class=\"card-text\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\">Capacité: ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 17, $this->source); })()), "capacite", [], "any", false, false, false, 17), "html", null, true);
            echo "</li>
                    <li class=\"list-group-item\" id=\"reservation_pro_prix\">Prix: ";
            // line 18
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 18, $this->source); })()), "prix", [], "any", false, false, false, 18) / 100), "html", null, true);
            echo " €</li>
                </ul>
                ";
            // line 20
            if ((isset($context["showReservationForm"]) || array_key_exists("showReservationForm", $context) ? $context["showReservationForm"] : (function () { throw new RuntimeError('Variable "showReservationForm" does not exist.', 20, $this->source); })())) {
                // line 21
                echo "                    <p>Réserver ce bien</p>
                    ";
                // line 22
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 22, $this->source); })()), 'form_start');
                echo "
                    ";
                // line 23
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 23, $this->source); })()), 'widget');
                echo "
                    <button type=\"submit\" class=\"btn btn-primary\">Réserver</button>
                    <div id=\"stripe-button-container\" hidden=\"hidden\">
                        <script
                                src=\"https://checkout.stripe.com/checkout.js\"
                                class=\"stripe-button\"
                                data-key=\"";
                // line 29
                echo twig_escape_filter($this->env, (isset($context["stripe_publishable_key"]) || array_key_exists("stripe_publishable_key", $context) ? $context["stripe_publishable_key"] : (function () { throw new RuntimeError('Variable "stripe_publishable_key" does not exist.', 29, $this->source); })()), "html", null, true);
                echo "\"
                                data-name=\"Réservation de bien\"
                                data-description=\"Réservation de bien\"
                                data-image=\"https://stripe.com/img/documentation/checkout/marketplace.png\"
                                data-locale=\"auto\"
                                data-currency=\"eur\"
                                data-zip-code=\"false\"
                                data-email=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "email", [], "any", false, false, false, 36), "html", null, true);
                echo "\"
                                data-debug=\"true\"
                        ></script>
                    </div>
                    ";
                // line 40
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 40, $this->source); })()), 'errors');
                echo "
                    ";
                // line 41
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 41, $this->source); })()), 'form_end');
                echo "
                ";
            } else {
                // line 43
                echo "                    <p>Connectez-vous pour effectuer une réservation.</p>
                    <a href=\"";
                // line 44
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\" class=\"btn-primary\">Connectez-vous</a>
                    <a href=\"";
                // line 45
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
                echo "\" class=\"btn-primary\">Inscrivez-vous</a>
                ";
            }
            // line 47
            echo "            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 47,  175 => 45,  171 => 44,  168 => 43,  163 => 41,  159 => 40,  152 => 36,  142 => 29,  133 => 23,  129 => 22,  126 => 21,  124 => 20,  119 => 18,  115 => 17,  110 => 15,  106 => 14,  99 => 12,  96 => 11,  94 => 10,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Détail du Bien
{% endblock %}

{% block body %}
    <h1><a href=\"/\">Camping l'Espadrille Volante</a></h1>
    <h2>Détail du Bien</h2>
    {% if bien %}
        <div class=\"card\">
            <img src=\"{{ asset('img/' ~ bien.imagePath) }}\" class=\"card-img-top\" alt=\"{{ bien.nom }}\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ bien.nom }}</h5>
                <p class=\"card-text\">{{ bien.description }}</p>
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\">Capacité: {{ bien.capacite }}</li>
                    <li class=\"list-group-item\" id=\"reservation_pro_prix\">Prix: {{ bien.prix/100 }} €</li>
                </ul>
                {% if showReservationForm %}
                    <p>Réserver ce bien</p>
                    {{ form_start(reservationForm) }}
                    {{ form_widget(reservationForm) }}
                    <button type=\"submit\" class=\"btn btn-primary\">Réserver</button>
                    <div id=\"stripe-button-container\" hidden=\"hidden\">
                        <script
                                src=\"https://checkout.stripe.com/checkout.js\"
                                class=\"stripe-button\"
                                data-key=\"{{ stripe_publishable_key }}\"
                                data-name=\"Réservation de bien\"
                                data-description=\"Réservation de bien\"
                                data-image=\"https://stripe.com/img/documentation/checkout/marketplace.png\"
                                data-locale=\"auto\"
                                data-currency=\"eur\"
                                data-zip-code=\"false\"
                                data-email=\"{{ app.user.email }}\"
                                data-debug=\"true\"
                        ></script>
                    </div>
                    {{ form_errors(reservationForm) }}
                    {{ form_end(reservationForm) }}
                {% else %}
                    <p>Connectez-vous pour effectuer une réservation.</p>
                    <a href=\"{{ path('app_login') }}\" class=\"btn-primary\">Connectez-vous</a>
                    <a href=\"{{ path('app_register') }}\" class=\"btn-primary\">Inscrivez-vous</a>
                {% endif %}
            </div>
        </div>
    {% endif %}
{% endblock %}
", "home/detail.html.twig", "/app/templates/home/detail.html.twig");
    }
}
