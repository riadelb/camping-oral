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

/* bien/_delete_form.html.twig */
class __TwigTemplate_67c1de6d28edaa2f36c4346efe4cccc9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bien/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bien/_delete_form.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bien_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" method=\"post\"
onsubmit=\"return confirm('Etes vous sur?')\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3))), "html", null, true);
        echo "\">
    <button type=\"submit\" class=\"btn-primary\">Supprimer</button>
</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "bien/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ path('app_bien_delete', {'id': bien.id}) }}\" method=\"post\"
onsubmit=\"return confirm('Etes vous sur?')\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete'~bien.id) }}\">
    <button type=\"submit\" class=\"btn-primary\">Supprimer</button>
</form>", "bien/_delete_form.html.twig", "/app/templates/bien/_delete_form.html.twig");
    }
}
