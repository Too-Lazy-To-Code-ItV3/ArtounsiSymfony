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

/* tutoriel/show.html.twig */
class __TwigTemplate_602fd069e55148eeea9a82eef429956b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tutoriel/show.html.twig", 1);
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

        echo "Tutoriel";
        
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
        echo "    <h1>Tutoriel</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id_tutoriel</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 12, $this->source); })()), "idTutoriel", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pathimg</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 16, $this->source); })()), "pathimg", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Niveau</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 28, $this->source); })()), "niveau", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_edit", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 35, $this->source); })()), "id_tutoriel", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "tutoriel/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tutoriel/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 37,  137 => 35,  132 => 33,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tutoriel{% endblock %}

{% block body %}
    <h1>Tutoriel</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id_tutoriel</th>
                <td>{{ tutoriel.idTutoriel }}</td>
            </tr>
            <tr>
                <th>Pathimg</th>
                <td>{{ tutoriel.pathimg }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ tutoriel.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ tutoriel.description }}</td>
            </tr>
            <tr>
                <th>Niveau</th>
                <td>{{ tutoriel.niveau }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_tutoriel_index') }}\">back to list</a>

    <a href=\"{{ path('app_tutoriel_edit', {'id_tutoriel': tutoriel.id_tutoriel}) }}\">edit</a>

    {{ include('tutoriel/_delete_form.html.twig') }}
{% endblock %}
", "tutoriel/show.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\tutoriel\\show.html.twig");
    }
}
