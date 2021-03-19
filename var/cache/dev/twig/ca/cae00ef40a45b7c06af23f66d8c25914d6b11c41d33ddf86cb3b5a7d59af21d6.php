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

/* ged/listeGed.html.twig */
class __TwigTemplate_c2895965be706cd12931e50a658f210a18cedb7569c536fd90b9584e9fd8f07b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ged/listeGed.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ged/listeGed.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ged/listeGed.html.twig", 1);
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

        echo "Liste des documents";
        
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
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h1>
<table class=\"table table-hover\">
<thead>
<tr>
<th scope=\"col\">Id</th>
<th scope=\"col\">Nom</th>
<th scope=\"col\">Genre</th>
<th scope=\"col\">Actions</th>
</tr>
</thead>
<tbody>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeGed"]) || array_key_exists("listeGed", $context) ? $context["listeGed"] : (function () { throw new RuntimeError('Variable "listeGed" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "<!-- création de chaque modal -->
<div class=\"modal\" id=\"exampleModal";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModal";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\" aria-hidden=\"true\">
<div class=\"modal-dialog\" role=\"document\">
<div class=\"modal-content\">
<div class=\"modal-header\">
<h5 class=\"modal-title\">Partage du document ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23), "html", null, true);
            echo "</h5>
<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
<span aria-hidden=\"true\">&times;</span>
</button>
</div>
<div class=\"modal-body\">
<p>
<!-- début du formulaire de la modal -->
<form action=\"/partageGed\" method=\"post\">
<fieldset>
<legend>Formulaire d'upload</legend>
<div class=\"form-group row\">
<label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Information</label>
<input class=\"form-group\" type=\"text\" placeholder=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "\" name=\"doc\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\" readonly>
</div>
<div class=\"form-group row\">
<label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Utilisateur</label>
<div class=\"col-sm-8\">
<select class=\"form-group\" name=\"utilisateur\">
<option class=\"form-group\" value=\"-1\"></option>
";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeUsers"]) || array_key_exists("listeUsers", $context) ? $context["listeUsers"] : (function () { throw new RuntimeError('Variable "listeUsers" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 44
                echo "<option class=\"form-group\" value= ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 44), "html", null, true);
                echo ">
";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 45), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", [], "any", false, false, false, 45), "html", null, true);
                echo "
</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "</select>
</div>
</div>
<div class=\"form-group row\">
<label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Autorisation</label>
<div class=\"col-sm-18\">
<select class=\"form-group\" name=\"autorisation\">
";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeAutorisations"]) || array_key_exists("listeAutorisations", $context) ? $context["listeAutorisations"] : (function () { throw new RuntimeError('Variable "listeAutorisations" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 56
                echo "<option class=\"form-group\" value= ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 56), "html", null, true);
                echo ">
";
                // line 57
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "ecriture", [], "any", false, false, false, 57) == 1)) {
                    // line 58
                    echo "Ecriture
";
                }
                // line 60
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "lecture", [], "any", false, false, false, 60) == 1)) {
                    // line 61
                    echo "Lecture
";
                } else {
                    // line 63
                    echo "Fichier protégé
";
                }
                // line 65
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "</select>
</div>
</div>
</fieldset>

<!-- fin du formulaire de la modal -->
</p>
</div>
<div class=\"modal-footer\">
<button type=\"submit\" class=\"btn btn-primary\">Upload</button>
<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
</div>
</form>
</div>
</div>
</div>
<!-- fin de chaque modal -->
<tr class=\"table\">
<th scope=\"row\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85), "html", null, true);
            echo "</th>
<td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 86), "nom", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
<td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 87), "typeId", [], "any", false, false, false, 87), "type", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
<td>
<a href=\"/deleteGed/";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 89), "id", [], "any", false, false, false, 89), "html", null, true);
            echo "\"><i class=\"bi bi-trash\"></i></a>
<a href=\"/upload/";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 90), "chemin", [], "any", false, false, false, 90), "html", null, true);
            echo "\"><i class=\"bi bi-cloud-download-fill\"></i></a>
";
            // line 91
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "autorisationId", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91) == 1)) {
                // line 92
                echo "<a href=\"#exampleModal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#exampleModal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92), "html", null, true);
                echo "\"><i class=\"bi bi-share-fill\"></i></a>
";
            }
            // line 94
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "</tbody>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ged/listeGed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 97,  259 => 94,  251 => 92,  249 => 91,  245 => 90,  241 => 89,  236 => 87,  232 => 86,  228 => 85,  208 => 67,  201 => 65,  197 => 63,  193 => 61,  191 => 60,  187 => 58,  185 => 57,  180 => 56,  176 => 55,  167 => 48,  156 => 45,  151 => 44,  147 => 43,  135 => 36,  119 => 23,  110 => 19,  107 => 18,  103 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des documents{% endblock %}

{% block body %}
<h1>{{ controller_name }}</h1>
<table class=\"table table-hover\">
<thead>
<tr>
<th scope=\"col\">Id</th>
<th scope=\"col\">Nom</th>
<th scope=\"col\">Genre</th>
<th scope=\"col\">Actions</th>
</tr>
</thead>
<tbody>
{% for item in listeGed %}
<!-- création de chaque modal -->
<div class=\"modal\" id=\"exampleModal{{item.documentId.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModal{{item.documentId.id}}\" aria-hidden=\"true\">
<div class=\"modal-dialog\" role=\"document\">
<div class=\"modal-content\">
<div class=\"modal-header\">
<h5 class=\"modal-title\">Partage du document {{ item.documentId.nom }}</h5>
<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
<span aria-hidden=\"true\">&times;</span>
</button>
</div>
<div class=\"modal-body\">
<p>
<!-- début du formulaire de la modal -->
<form action=\"/partageGed\" method=\"post\">
<fieldset>
<legend>Formulaire d'upload</legend>
<div class=\"form-group row\">
<label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Information</label>
<input class=\"form-group\" type=\"text\" placeholder=\"{{ item.documentId.nom }}\" name=\"doc\" value=\"{{ item.documentId.id }}\" readonly>
</div>
<div class=\"form-group row\">
<label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Utilisateur</label>
<div class=\"col-sm-8\">
<select class=\"form-group\" name=\"utilisateur\">
<option class=\"form-group\" value=\"-1\"></option>
{% for item in listeUsers %}
<option class=\"form-group\" value= {{ item.id }}>
{{ item.nom }} {{ item.prenom }}
</option>
{% endfor %}
</select>
</div>
</div>
<div class=\"form-group row\">
<label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Autorisation</label>
<div class=\"col-sm-18\">
<select class=\"form-group\" name=\"autorisation\">
{% for item in listeAutorisations %}
<option class=\"form-group\" value= {{ item.id }}>
{% if item.ecriture == 1 %}
Ecriture
{% endif %}
{% if item.lecture == 1 %}
Lecture
{% else %}
Fichier protégé
{% endif %}
</option>
{% endfor %}
</select>
</div>
</div>
</fieldset>

<!-- fin du formulaire de la modal -->
</p>
</div>
<div class=\"modal-footer\">
<button type=\"submit\" class=\"btn btn-primary\">Upload</button>
<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
</div>
</form>
</div>
</div>
</div>
<!-- fin de chaque modal -->
<tr class=\"table\">
<th scope=\"row\">{{ item.documentId.id }}</th>
<td>{{ item.documentId.nom }}</td>
<td>{{ item.documentId.typeId.type }}</td>
<td>
<a href=\"/deleteGed/{{ item.documentId.id }}\"><i class=\"bi bi-trash\"></i></a>
<a href=\"/upload/{{ item.documentId.chemin }}\"><i class=\"bi bi-cloud-download-fill\"></i></a>
{% if item.autorisationId.id == 1 %}
<a href=\"#exampleModal{{ item.documentId.id }}\" data-toggle=\"modal\" data-target=\"#exampleModal{{ item.documentId.id }}\"><i class=\"bi bi-share-fill\"></i></a>
{% endif %}
</td>
</tr>
{% endfor %}
</tbody>
</table>

{% endblock %}", "ged/listeGed.html.twig", "C:\\Users\\rodet\\Documents\\GitHub\\GED-project\\templates\\ged\\listeGed.html.twig");
    }
}
