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

/* ged/uploadGed.html.twig */
class __TwigTemplate_6a37b9ae39e500069d6b975dedbdc8a7d02919aefd0315ac4ad1efc34948c5ee extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ged/uploadGed.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ged/uploadGed.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ged/uploadGed.html.twig", 1);
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

        echo "Upload Ged";
        
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
\t<h4> ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 7, $this->source); })()), "html", null, true);
        echo " </h4>
</div>
<form action=\"/insertGed\" method=\"post\" enctype=\"multipart/form-data\">
  <fieldset>
    <legend>Formulaire d'upload</legend>
    <div class=\"form-group row\">
      <label for=\"staticNom\" class=\"col-sm-2 col-form-label\">Genre</label>
      <div class=\"col-sm-10\">
        <select class=\"form-group\" name=\"genre\">
\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeGenre"]) || array_key_exists("listeGenre", $context) ? $context["listeGenre"] : (function () { throw new RuntimeError('Variable "listeGenre" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "\t\t\t\t<option class=\"form-group\" value= ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 17), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t</select>
      </div>
    </div>
\t<div class=\"form-group row\">
      <label for=\"staticPrenom\" class=\"col-sm-2 col-form-label\">Nom</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" class=\"form-group\" id=\"nom\" required name=\"nom\">
      </div>
    </div>
\t<div class=\"form-group row\">
      <label for=\"staticPrenom\" class=\"col-sm-2 col-form-label\">Document</label>
      <div class=\"col-sm-10\">
        <input type=\"file\" class=\"form-group\" id=\"boutonParcourir\" name=\"fichier\">
      </div>
    </div>
\t<div class=\"form-group row\">
      <label for=\"staticPrenom\" class=\"col-sm-2 col-form-label\">Visible</label>
      <div class=\"col-sm-10\">
        <div class=\"custom-control custom-switch\">
      <input type=\"checkbox\" class=\"custom-control-input\" id=\"customSwitch1\" checked=\"\" name=\"choix\">
      <label class=\"custom-control-label\" for=\"customSwitch1\">Actif / Inactif</label>
    </div>
      </div>
    </div>
\t<div class=\"form-group row\">
      <label for=\"staticNom\" class=\"col-sm-2 col-form-label\">Autorisation</label>
      <div class=\"col-sm-10\">
        <select class=\"form-group\" name=\"autorisation\">
\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeAutorisation"]) || array_key_exists("listeAutorisation", $context) ? $context["listeAutorisation"] : (function () { throw new RuntimeError('Variable "listeAutorisation" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "\t\t\t\t<option class=\"form-group\" value= ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo ">
\t\t\t\t\t";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "ecriture", [], "any", false, false, false, 49) == 1)) {
                echo " 
\t\t\t\t\t\tEcriture 
\t\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "lecture", [], "any", false, false, false, 52) == 1)) {
                echo " 
\t\t\t\t\t\tLecture 
\t\t\t\t\t";
            } else {
                // line 55
                echo "\t\t\t\t\t\tFichier protégé
\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t</select>
      </div>
    </div>
\t<div class=\"form-group row\">
      <label for=\"staticNom\" class=\"col-sm-2 col-form-label\">Utilisateur</label>
      <div class=\"col-sm-10\">
        <select class=\"form-group\" name=\"utilisateur\">
\t\t\t\t<option class=\"form-group\" value=\"-1\"></option>
\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeUsers"]) || array_key_exists("listeUsers", $context) ? $context["listeUsers"] : (function () { throw new RuntimeError('Variable "listeUsers" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 68
            echo "\t\t\t\t<option class=\"form-group\" value= ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo ">
\t\t\t\t\t";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 69), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", [], "any", false, false, false, 69), "html", null, true);
            echo "
\t\t\t\t</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t</select>
      </div>
    </div>
\t</fieldset>
    <button type=\"submit\" class=\"btn btn-primary\">Upload</button>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ged/uploadGed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 72,  200 => 69,  195 => 68,  191 => 67,  181 => 59,  174 => 57,  170 => 55,  163 => 52,  157 => 49,  152 => 48,  148 => 47,  118 => 19,  107 => 17,  103 => 16,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Upload Ged{% endblock %}

{% block body %}
<div class=\"example-wrapper\">
\t<h4> {{ controller_name }} </h4>
</div>
<form action=\"/insertGed\" method=\"post\" enctype=\"multipart/form-data\">
  <fieldset>
    <legend>Formulaire d'upload</legend>
    <div class=\"form-group row\">
      <label for=\"staticNom\" class=\"col-sm-2 col-form-label\">Genre</label>
      <div class=\"col-sm-10\">
        <select class=\"form-group\" name=\"genre\">
\t\t\t{% for item in listeGenre %}
\t\t\t\t<option class=\"form-group\" value= {{ item.id }}>{{ item.type }}</option>
\t\t\t{% endfor %}
\t\t</select>
      </div>
    </div>
\t<div class=\"form-group row\">
      <label for=\"staticPrenom\" class=\"col-sm-2 col-form-label\">Nom</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" class=\"form-group\" id=\"nom\" required name=\"nom\">
      </div>
    </div>
\t<div class=\"form-group row\">
      <label for=\"staticPrenom\" class=\"col-sm-2 col-form-label\">Document</label>
      <div class=\"col-sm-10\">
        <input type=\"file\" class=\"form-group\" id=\"boutonParcourir\" name=\"fichier\">
      </div>
    </div>
\t<div class=\"form-group row\">
      <label for=\"staticPrenom\" class=\"col-sm-2 col-form-label\">Visible</label>
      <div class=\"col-sm-10\">
        <div class=\"custom-control custom-switch\">
      <input type=\"checkbox\" class=\"custom-control-input\" id=\"customSwitch1\" checked=\"\" name=\"choix\">
      <label class=\"custom-control-label\" for=\"customSwitch1\">Actif / Inactif</label>
    </div>
      </div>
    </div>
\t<div class=\"form-group row\">
      <label for=\"staticNom\" class=\"col-sm-2 col-form-label\">Autorisation</label>
      <div class=\"col-sm-10\">
        <select class=\"form-group\" name=\"autorisation\">
\t\t\t{% for item in listeAutorisation %}
\t\t\t\t<option class=\"form-group\" value= {{ item.id }}>
\t\t\t\t\t{% if item.ecriture == 1 %} 
\t\t\t\t\t\tEcriture 
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if item.lecture == 1 %} 
\t\t\t\t\t\tLecture 
\t\t\t\t\t{% else %}
\t\t\t\t\t\tFichier protégé
\t\t\t\t\t{% endif %}
\t\t\t\t</option>
\t\t\t{% endfor %}
\t\t</select>
      </div>
    </div>
\t<div class=\"form-group row\">
      <label for=\"staticNom\" class=\"col-sm-2 col-form-label\">Utilisateur</label>
      <div class=\"col-sm-10\">
        <select class=\"form-group\" name=\"utilisateur\">
\t\t\t\t<option class=\"form-group\" value=\"-1\"></option>
\t\t\t{% for item in listeUsers %}
\t\t\t\t<option class=\"form-group\" value= {{ item.id }}>
\t\t\t\t\t{{ item.nom }}  {{ item.prenom }}
\t\t\t\t</option>
\t\t\t{% endfor %}
\t\t</select>
      </div>
    </div>
\t</fieldset>
    <button type=\"submit\" class=\"btn btn-primary\">Upload</button>
</form>
{% endblock %}
", "ged/uploadGed.html.twig", "C:\\Users\\rodet\\Documents\\GitHub\\GED-project\\templates\\ged\\uploadGed.html.twig");
    }
}
