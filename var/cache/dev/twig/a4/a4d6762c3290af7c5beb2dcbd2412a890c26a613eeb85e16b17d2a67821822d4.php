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

/* authentification/dashboard.html.twig */
class __TwigTemplate_1be41c7c73bb5c12915663a8dc023d0caa10ed70b77e029f21681e87452ecd06 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authentification/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authentification/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "authentification/dashboard.html.twig", 1);
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

        echo "Hello AuthentificationController!";
        
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
<h4>
    <b>Numéro du contrat : </b>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "session", [], "any", false, false, false, 8), "get", [0 => "idUtilisateur"], "method", false, false, false, 8), "html", null, true);
        echo " <br>
    <b> Client : </b>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "session", [], "any", false, false, false, 9), "get", [0 => "nomUtilisateur"], "method", false, false, false, 9), "html", null, true);
        echo " 
    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "session", [], "any", false, false, false, 10), "get", [0 => "prenomUtilisateur"], "method", false, false, false, 10), "html", null, true);
        echo " <br>
</h4>
<ul class=\"nav nav-tabs\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#synthese\">Synthèse</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" data-toggle=\"tab\" href=\"#partage\">Personnes</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" data-toggle=\"tab\" href=\"#prive\">GED privée</a>
  </li>
</ul>
<div id=\"myTabContent\" class=\"tab-content\">
  <div class=\"tab-pane fade active show\" id=\"synthese\">
    <p>
        Nombre de documents accessibles : ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["nb_document"]) || array_key_exists("nb_document", $context) ? $context["nb_document"] : (function () { throw new RuntimeError('Variable "nb_document" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " <br>
        Dernier document partagé        : <br>
    </p>
  </div>
  <div class=\"tab-pane fade\" id=\"partage\">
    <p>Liste des documents en partage</p>
  </div>
   <div class=\"tab-pane fade\" id=\"prive\">
    <p>Liste des documents privés</p>

<h1>";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 36, $this->source); })()), "html", null, true);
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
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeGed"]) || array_key_exists("listeGed", $context) ? $context["listeGed"] : (function () { throw new RuntimeError('Variable "listeGed" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "
<!-- création de chaque modal -->
<div class=\"modal\" id=\"exampleModal";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModal";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\" aria-hidden=\"true\">
<div class=\"modal-dialog\" role=\"document\">
<div class=\"modal-content\">
<div class=\"modal-header\">
<h5 class=\"modal-title\">Partage du document ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 54), "nom", [], "any", false, false, false, 54), "html", null, true);
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
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 67), "nom", [], "any", false, false, false, 67), "html", null, true);
            echo "\" name=\"doc\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\" readonly>
</div>
<div class=\"form-group row\">
<label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Utilisateur</label>
<div class=\"col-sm-8\">
<select class=\"form-group\" name=\"utilisateur\">
<option class=\"form-group\" value=\"-1\"></option>
";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeUsers"]) || array_key_exists("listeUsers", $context) ? $context["listeUsers"] : (function () { throw new RuntimeError('Variable "listeUsers" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 75
                echo "<option class=\"form-group\" value= ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 75), "html", null, true);
                echo ">
";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 76), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", [], "any", false, false, false, 76), "html", null, true);
                echo "
</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "
</select>
</div>
</div>
<div class=\"form-group row\">
<label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Autorisation</label>
<div class=\"col-sm-18\">
<select class=\"form-group\" name=\"autorisation\">
";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeAutorisations"]) || array_key_exists("listeAutorisations", $context) ? $context["listeAutorisations"] : (function () { throw new RuntimeError('Variable "listeAutorisations" does not exist.', 87, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 88
                echo "<option class=\"form-group\" value= ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 88), "html", null, true);
                echo ">
";
                // line 89
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "ecriture", [], "any", false, false, false, 89) == 1)) {
                    // line 90
                    echo "Ecriture
";
                }
                // line 92
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "lecture", [], "any", false, false, false, 92) == 1)) {
                    // line 93
                    echo "Lecture
";
                } else {
                    // line 95
                    echo "Fichier protégé
";
                }
                // line 97
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
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
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117), "html", null, true);
            echo "</th>
  <td>";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 118), "nom", [], "any", false, false, false, 118), "html", null, true);
            echo "</td>
  <td>";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 119), "typeId", [], "any", false, false, false, 119), "type", [], "any", false, false, false, 119), "html", null, true);
            echo "
  <td>
        <a href=\"/deleteGed/";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121), "html", null, true);
            echo "\"><i class=\"bi bi-trash\"></i></a>
  <a href=\"/upload/";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 122), "chemin", [], "any", false, false, false, 122), "html", null, true);
            echo "\"><i class=\"bi bi-cloud-download-fill\"></i></a>
  ";
            // line 123
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "autorisationId", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123) == 1)) {
                // line 124
                echo "  <a href=\"#exampleModal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 124), "id", [], "any", false, false, false, 124), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#exampleModal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 124), "id", [], "any", false, false, false, 124), "html", null, true);
                echo "\"><i class=\"bi bi-share-fill\"></i></a>
  ";
            }
            // line 126
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "</tbody>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "authentification/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 129,  306 => 126,  298 => 124,  296 => 123,  292 => 122,  288 => 121,  283 => 119,  279 => 118,  275 => 117,  255 => 99,  248 => 97,  244 => 95,  240 => 93,  238 => 92,  234 => 90,  232 => 89,  227 => 88,  223 => 87,  213 => 79,  202 => 76,  197 => 75,  193 => 74,  181 => 67,  165 => 54,  156 => 50,  152 => 48,  148 => 47,  134 => 36,  121 => 26,  102 => 10,  98 => 9,  94 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AuthentificationController!{% endblock %}

{% block body %}
<h1>{{ controller_name }}</h1>
<h4>
    <b>Numéro du contrat : </b>{{ app.session.get('idUtilisateur') }} <br>
    <b> Client : </b>{{ app.session.get('nomUtilisateur') }} 
    {{ app.session.get('prenomUtilisateur') }} <br>
</h4>
<ul class=\"nav nav-tabs\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#synthese\">Synthèse</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" data-toggle=\"tab\" href=\"#partage\">Personnes</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" data-toggle=\"tab\" href=\"#prive\">GED privée</a>
  </li>
</ul>
<div id=\"myTabContent\" class=\"tab-content\">
  <div class=\"tab-pane fade active show\" id=\"synthese\">
    <p>
        Nombre de documents accessibles : {{ nb_document }} <br>
        Dernier document partagé        : <br>
    </p>
  </div>
  <div class=\"tab-pane fade\" id=\"partage\">
    <p>Liste des documents en partage</p>
  </div>
   <div class=\"tab-pane fade\" id=\"prive\">
    <p>Liste des documents privés</p>

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
  <td>{{ item.documentId.typeId.type }}
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

{% endblock %}", "authentification/dashboard.html.twig", "C:\\Users\\rodet\\Documents\\GitHub\\GED-project\\templates\\authentification\\dashboard.html.twig");
    }
}
