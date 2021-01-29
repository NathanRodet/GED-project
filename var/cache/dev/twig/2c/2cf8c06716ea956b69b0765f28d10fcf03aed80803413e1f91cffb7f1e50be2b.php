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

/* authentification/insertUser.html.twig */
class __TwigTemplate_a9bd7c6e3573359e5f4f1ccf70895d2894a7c57a5a1e3d06f7968e2b1a78254a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authentification/insertUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authentification/insertUser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "authentification/insertUser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"example-wrapper\">
    <h1>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h1>
    <form action=\"/insertUserBdd\" method=\"post\">
        <fieldset>
          <legend>Formulaire d'ajout d'un nouvel utilisateur</legend>
          <div class=\"form-group row\">
            <label for=\"nom\" class=\"col-sm-2 col-form-label\">Nom</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\">
            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"prenom\" class=\"col-sm-2 col-form-label\">Prénom</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\">
            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"code\" class=\"col-sm-2 col-form-label\">Code</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"code\" name=\"code\">
            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"salt\" class=\"col-sm-2 col-form-label\">Salt</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"salt\" name=\"salt\">
            </div>
          </div>
        </fieldset>
        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
      </form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "authentification/insertUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 7,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
<div class=\"example-wrapper\">
    <h1>{{ controller_name }}</h1>
    <form action=\"/insertUserBdd\" method=\"post\">
        <fieldset>
          <legend>Formulaire d'ajout d'un nouvel utilisateur</legend>
          <div class=\"form-group row\">
            <label for=\"nom\" class=\"col-sm-2 col-form-label\">Nom</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\">
            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"prenom\" class=\"col-sm-2 col-form-label\">Prénom</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\">
            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"code\" class=\"col-sm-2 col-form-label\">Code</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"code\" name=\"code\">
            </div>
          </div>
          <div class=\"form-group row\">
            <label for=\"salt\" class=\"col-sm-2 col-form-label\">Salt</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"salt\" name=\"salt\">
            </div>
          </div>
        </fieldset>
        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
      </form>
</div>
{% endblock %}", "authentification/insertUser.html.twig", "C:\\Users\\rodet\\Documents\\GitHub\\GED-project\\templates\\authentification\\insertUser.html.twig");
    }
}
