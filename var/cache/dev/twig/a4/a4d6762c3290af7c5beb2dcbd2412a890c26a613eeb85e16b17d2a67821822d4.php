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
\t<b>Numéro du contrat : </b>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "session", [], "any", false, false, false, 8), "get", [0 => "idUtilisateur"], "method", false, false, false, 8), "html", null, true);
        echo " <br>
\t<b> Client : </b>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "session", [], "any", false, false, false, 9), "get", [0 => "nomUtilisateur"], "method", false, false, false, 9), "html", null, true);
        echo " 
\t";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "session", [], "any", false, false, false, 10), "get", [0 => "prenomUtilisateur"], "method", false, false, false, 10), "html", null, true);
        echo " <br>
</h4>
<!-- Debut Modal -->
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeGed"]) || array_key_exists("listeGed", $context) ? $context["listeGed"] : (function () { throw new RuntimeError('Variable "listeGed" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "    
\t<!-- création de chaque modal -->
\t\t<div class=\"modal\" id=\"exampleModal";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" \taria-labelledby=\"exampleModal";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\" aria-hidden=\"true\">
\t\t  <div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t  <div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\">Partage du document ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 19), "nom", [], "any", false, false, false, 19), "html", null, true);
            echo "</h5>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t  <span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t  </div>
\t\t\t  <div class=\"modal-body\">
\t\t\t\t<p>
\t\t\t\t<!-- début du formulaire de la modal -->
\t\t\t\t\t<form action=\"/partageGed\" method=\"post\">
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<legend>Formulaire d'upload</legend>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t  <label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Information</label>
\t\t\t\t\t\t\t\t<input class=\"form-group\" type=\"text\" placeholder=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true);
            echo "\" name=\"doc\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\" readonly>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t  <label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Utilisateur</label>
\t\t\t\t\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<select class=\"form-group\" name=\"utilisateur\">
\t\t\t\t\t\t\t\t\t\t\t<option class=\"form-group\" value=\"-1\"></option>
\t\t\t\t\t\t\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeUsers"]) || array_key_exists("listeUsers", $context) ? $context["listeUsers"] : (function () { throw new RuntimeError('Variable "listeUsers" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 40
                echo "\t\t\t\t\t\t\t\t\t\t\t<option class=\"form-group\" value= ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 40), "html", null, true);
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 41), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", [], "any", false, false, false, 41), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t  <label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Autorisation</label>
\t\t\t\t\t\t\t\t  <div class=\"col-sm-18\">
\t\t\t\t\t\t\t\t\t<select class=\"form-group\" name=\"autorisation\">
\t\t\t\t\t\t\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeAutorisations"]) || array_key_exists("listeAutorisations", $context) ? $context["listeAutorisations"] : (function () { throw new RuntimeError('Variable "listeAutorisations" does not exist.', 51, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 52
                echo "\t\t\t\t\t\t\t\t\t\t\t<option class=\"form-group\" value= ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 52), "html", null, true);
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 53
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "ecriture", [], "any", false, false, false, 53) == 1)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\tEcriture 
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "lecture", [], "any", false, false, false, 56) == 1)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\tLecture 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 59
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\tFichier protégé
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t
\t\t\t\t<!-- fin du formulaire de la modal -->
\t\t\t\t</p>
\t\t\t  </div>
\t\t\t  <div class=\"modal-footer\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Upload</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
\t\t\t  </div>
\t\t\t  </form>
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t<!-- fin de chaque modal -->
<!-- Fin Modal -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "<ul class=\"nav nav-tabs\">
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
\t\tNombre de documents accessibles : ";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["nb_document"]) || array_key_exists("nb_document", $context) ? $context["nb_document"] : (function () { throw new RuntimeError('Variable "nb_document" does not exist.', 96, $this->source); })()), "html", null, true);
        echo " <br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-4\">Dernier document partagé\t: ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documentDate"]) || array_key_exists("documentDate", $context) ? $context["documentDate"] : (function () { throw new RuntimeError('Variable "documentDate" does not exist.', 98, $this->source); })()), "nom", [], "any", false, false, false, 98), "html", null, true);
        echo "  </div>
\t\t\t<div class=\"col-6\"> </div>
\t\t\t<div class=\"col-2\"> 
\t\t\t\t<a href=\"/upload/";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documentDate"]) || array_key_exists("documentDate", $context) ? $context["documentDate"] : (function () { throw new RuntimeError('Variable "documentDate" does not exist.', 101, $this->source); })()), "chemin", [], "any", false, false, false, 101), "html", null, true);
        echo "\"><i class=\"bi bi-cloud-download-fill\"></i></a>
\t\t\t\t";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, (isset($context["autorisation"]) || array_key_exists("autorisation", $context) ? $context["autorisation"] : (function () { throw new RuntimeError('Variable "autorisation" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102) == 1)) {
            // line 103
            echo "\t\t\t\t\t<a href=\"#exampleModal";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documentDate"]) || array_key_exists("documentDate", $context) ? $context["documentDate"] : (function () { throw new RuntimeError('Variable "documentDate" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#exampleModal";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["documentDate"]) || array_key_exists("documentDate", $context) ? $context["documentDate"] : (function () { throw new RuntimeError('Variable "documentDate" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103), "html", null, true);
            echo "\"><i class=\"bi bi-share-fill\"></i></a>
\t\t\t\t";
        }
        // line 105
        echo "\t\t\t</div>
\t\t</div>
\t</p>
  </div>
  <div class=\"tab-pane fade\" id=\"partage\">
    <p>Liste des documents en partage</p>
  </div>
   <div class=\"tab-pane fade\" id=\"prive\">
    <p>nombre de documents privés : ";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["nbDocumentPrives"]) || array_key_exists("nbDocumentPrives", $context) ? $context["nbDocumentPrives"] : (function () { throw new RuntimeError('Variable "nbDocumentPrives" does not exist.', 113, $this->source); })()), "html", null, true);
        echo " </p>
\t<table class=\"table table-hover\">
  <thead>
    <tr>
\t  <th scope=\"col\">Id</th>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Genre</th>
      <th scope=\"col\">Actions</th>
    </tr>
  </thead>
  <tbody>
\t";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeDocumentPrives"]) || array_key_exists("listeDocumentPrives", $context) ? $context["listeDocumentPrives"] : (function () { throw new RuntimeError('Variable "listeDocumentPrives" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "    
\t<!-- création de chaque modal -->
\t\t<div class=\"modal\" id=\"exampleModal";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 126), "id", [], "any", false, false, false, 126), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" \taria-labelledby=\"exampleModal";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 126), "id", [], "any", false, false, false, 126), "html", null, true);
            echo "\" aria-hidden=\"true\">
\t\t  <div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t  <div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\">Partage du document ";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 130), "nom", [], "any", false, false, false, 130), "html", null, true);
            echo "</h5>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t  <span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t  </div>
\t\t\t  <div class=\"modal-body\">
\t\t\t\t<p>
\t\t\t\t<!-- début du formulaire de la modal -->
\t\t\t\t\t<form action=\"/partageGed\" method=\"post\">
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<legend>Formulaire d'upload</legend>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t  <label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Information</label>
\t\t\t\t\t\t\t\t<input class=\"form-group\" type=\"text\" placeholder=\"";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 143), "nom", [], "any", false, false, false, 143), "html", null, true);
            echo "\" name=\"doc\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 143), "id", [], "any", false, false, false, 143), "html", null, true);
            echo "\" readonly>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t  <label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Utilisateur</label>
\t\t\t\t\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<select class=\"form-group\" name=\"utilisateur\">
\t\t\t\t\t\t\t\t\t\t\t<option class=\"form-group\" value=\"-1\"></option>
\t\t\t\t\t\t\t\t\t\t";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeUsers"]) || array_key_exists("listeUsers", $context) ? $context["listeUsers"] : (function () { throw new RuntimeError('Variable "listeUsers" does not exist.', 150, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 151
                echo "\t\t\t\t\t\t\t\t\t\t\t<option class=\"form-group\" value= ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 151), "html", null, true);
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 152), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prenom", [], "any", false, false, false, 152), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t  <label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Autorisation</label>
\t\t\t\t\t\t\t\t  <div class=\"col-sm-18\">
\t\t\t\t\t\t\t\t\t<select class=\"form-group\" name=\"autorisation\">
\t\t\t\t\t\t\t\t\t\t";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeAutorisations"]) || array_key_exists("listeAutorisations", $context) ? $context["listeAutorisations"] : (function () { throw new RuntimeError('Variable "listeAutorisations" does not exist.', 162, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 163
                echo "\t\t\t\t\t\t\t\t\t\t\t<option class=\"form-group\" value= ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 163), "html", null, true);
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 164
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "ecriture", [], "any", false, false, false, 164) == 1)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\tEcriture 
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 167
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "lecture", [], "any", false, false, false, 167) == 1)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\tLecture 
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 170
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\tFichier protégé
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 172
                echo "\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t
\t\t\t\t<!-- fin du formulaire de la modal -->
\t\t\t\t</p>
\t\t\t  </div>
\t\t\t  <div class=\"modal-footer\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Upload</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
\t\t\t  </div>
\t\t\t  </form>
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t<!-- fin de chaque modal -->
    <tr class=\"table\">
      <th scope=\"row\">";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 192), "id", [], "any", false, false, false, 192), "html", null, true);
            echo "</th>
      <td>";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 193), "nom", [], "any", false, false, false, 193), "html", null, true);
            echo "</td>
      <td>";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 194), "typeId", [], "any", false, false, false, 194), "type", [], "any", false, false, false, 194), "html", null, true);
            echo "</td>
      <td>
\t\t<a href=\"/upload/";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 196), "chemin", [], "any", false, false, false, 196), "html", null, true);
            echo "\"><i class=\"bi bi-cloud-download-fill\"></i></a>
\t\t";
            // line 197
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "autorisationId", [], "any", false, false, false, 197), "id", [], "any", false, false, false, 197) == 1)) {
                // line 198
                echo "\t\t\t<a href=\"#exampleModal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 198), "id", [], "any", false, false, false, 198), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#exampleModal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "documentId", [], "any", false, false, false, 198), "id", [], "any", false, false, false, 198), "html", null, true);
                echo "\"><i class=\"bi bi-share-fill\"></i></a>
\t\t";
            }
            // line 200
            echo "\t  </td>
    </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "  </tbody>
</table>
  </div>
</div>

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
        return array (  464 => 203,  456 => 200,  448 => 198,  446 => 197,  442 => 196,  437 => 194,  433 => 193,  429 => 192,  409 => 174,  402 => 172,  398 => 170,  391 => 167,  385 => 164,  380 => 163,  376 => 162,  367 => 155,  356 => 152,  351 => 151,  347 => 150,  335 => 143,  319 => 130,  310 => 126,  303 => 124,  289 => 113,  279 => 105,  271 => 103,  269 => 102,  265 => 101,  259 => 98,  254 => 96,  238 => 82,  214 => 63,  207 => 61,  203 => 59,  196 => 56,  190 => 53,  185 => 52,  181 => 51,  172 => 44,  161 => 41,  156 => 40,  152 => 39,  140 => 32,  124 => 19,  115 => 15,  108 => 13,  102 => 10,  98 => 9,  94 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AuthentificationController!{% endblock %}

{% block body %}
<h1>{{ controller_name }}</h1>
<h4>
\t<b>Numéro du contrat : </b>{{ app.session.get('idUtilisateur') }} <br>
\t<b> Client : </b>{{ app.session.get('nomUtilisateur') }} 
\t{{ app.session.get('prenomUtilisateur') }} <br>
</h4>
<!-- Debut Modal -->
{% for item in listeGed %}    
\t<!-- création de chaque modal -->
\t\t<div class=\"modal\" id=\"exampleModal{{item.documentId.id}}\" tabindex=\"-1\" role=\"dialog\" \taria-labelledby=\"exampleModal{{item.documentId.id}}\" aria-hidden=\"true\">
\t\t  <div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t  <div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\">Partage du document {{ item.documentId.nom }}</h5>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t  <span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t  </div>
\t\t\t  <div class=\"modal-body\">
\t\t\t\t<p>
\t\t\t\t<!-- début du formulaire de la modal -->
\t\t\t\t\t<form action=\"/partageGed\" method=\"post\">
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<legend>Formulaire d'upload</legend>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t  <label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Information</label>
\t\t\t\t\t\t\t\t<input class=\"form-group\" type=\"text\" placeholder=\"{{ item.documentId.nom }}\" name=\"doc\" value=\"{{ item.documentId.id }}\" readonly>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t  <label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Utilisateur</label>
\t\t\t\t\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<select class=\"form-group\" name=\"utilisateur\">
\t\t\t\t\t\t\t\t\t\t\t<option class=\"form-group\" value=\"-1\"></option>
\t\t\t\t\t\t\t\t\t\t{% for item in listeUsers %}
\t\t\t\t\t\t\t\t\t\t\t<option class=\"form-group\" value= {{ item.id }}>
\t\t\t\t\t\t\t\t\t\t\t\t{{ item.nom }}  {{ item.prenom }}
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t  <label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Autorisation</label>
\t\t\t\t\t\t\t\t  <div class=\"col-sm-18\">
\t\t\t\t\t\t\t\t\t<select class=\"form-group\" name=\"autorisation\">
\t\t\t\t\t\t\t\t\t\t{% for item in listeAutorisations %}
\t\t\t\t\t\t\t\t\t\t\t<option class=\"form-group\" value= {{ item.id }}>
\t\t\t\t\t\t\t\t\t\t\t\t{% if item.ecriture == 1 %} 
\t\t\t\t\t\t\t\t\t\t\t\t\tEcriture 
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if item.lecture == 1 %} 
\t\t\t\t\t\t\t\t\t\t\t\t\tLecture 
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\tFichier protégé
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t
\t\t\t\t<!-- fin du formulaire de la modal -->
\t\t\t\t</p>
\t\t\t  </div>
\t\t\t  <div class=\"modal-footer\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Upload</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
\t\t\t  </div>
\t\t\t  </form>
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t<!-- fin de chaque modal -->
<!-- Fin Modal -->
{% endfor %}
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
\t\tNombre de documents accessibles : {{ nb_document }} <br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-4\">Dernier document partagé\t: {{ documentDate.nom }}  </div>
\t\t\t<div class=\"col-6\"> </div>
\t\t\t<div class=\"col-2\"> 
\t\t\t\t<a href=\"/upload/{{ documentDate.chemin }}\"><i class=\"bi bi-cloud-download-fill\"></i></a>
\t\t\t\t{% if autorisation.id == 1 %}
\t\t\t\t\t<a href=\"#exampleModal{{ documentDate.id }}\" data-toggle=\"modal\" data-target=\"#exampleModal{{ documentDate.id }}\"><i class=\"bi bi-share-fill\"></i></a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</p>
  </div>
  <div class=\"tab-pane fade\" id=\"partage\">
    <p>Liste des documents en partage</p>
  </div>
   <div class=\"tab-pane fade\" id=\"prive\">
    <p>nombre de documents privés : {{ nbDocumentPrives }} </p>
\t<table class=\"table table-hover\">
  <thead>
    <tr>
\t  <th scope=\"col\">Id</th>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Genre</th>
      <th scope=\"col\">Actions</th>
    </tr>
  </thead>
  <tbody>
\t{% for item in listeDocumentPrives %}    
\t<!-- création de chaque modal -->
\t\t<div class=\"modal\" id=\"exampleModal{{item.documentId.id}}\" tabindex=\"-1\" role=\"dialog\" \taria-labelledby=\"exampleModal{{item.documentId.id}}\" aria-hidden=\"true\">
\t\t  <div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t  <div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\">Partage du document {{ item.documentId.nom }}</h5>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t  <span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t  </div>
\t\t\t  <div class=\"modal-body\">
\t\t\t\t<p>
\t\t\t\t<!-- début du formulaire de la modal -->
\t\t\t\t\t<form action=\"/partageGed\" method=\"post\">
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<legend>Formulaire d'upload</legend>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t  <label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Information</label>
\t\t\t\t\t\t\t\t<input class=\"form-group\" type=\"text\" placeholder=\"{{ item.documentId.nom }}\" name=\"doc\" value=\"{{ item.documentId.id }}\" readonly>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t  <label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Utilisateur</label>
\t\t\t\t\t\t\t\t  <div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<select class=\"form-group\" name=\"utilisateur\">
\t\t\t\t\t\t\t\t\t\t\t<option class=\"form-group\" value=\"-1\"></option>
\t\t\t\t\t\t\t\t\t\t{% for item in listeUsers %}
\t\t\t\t\t\t\t\t\t\t\t<option class=\"form-group\" value= {{ item.id }}>
\t\t\t\t\t\t\t\t\t\t\t\t{{ item.nom }}  {{ item.prenom }}
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t  <label for=\"staticNom\" class=\"col-sm-4 col-form-label\">Autorisation</label>
\t\t\t\t\t\t\t\t  <div class=\"col-sm-18\">
\t\t\t\t\t\t\t\t\t<select class=\"form-group\" name=\"autorisation\">
\t\t\t\t\t\t\t\t\t\t{% for item in listeAutorisations %}
\t\t\t\t\t\t\t\t\t\t\t<option class=\"form-group\" value= {{ item.id }}>
\t\t\t\t\t\t\t\t\t\t\t\t{% if item.ecriture == 1 %} 
\t\t\t\t\t\t\t\t\t\t\t\t\tEcriture 
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if item.lecture == 1 %} 
\t\t\t\t\t\t\t\t\t\t\t\t\tLecture 
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\tFichier protégé
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t
\t\t\t\t<!-- fin du formulaire de la modal -->
\t\t\t\t</p>
\t\t\t  </div>
\t\t\t  <div class=\"modal-footer\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Upload</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
\t\t\t  </div>
\t\t\t  </form>
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t<!-- fin de chaque modal -->
    <tr class=\"table\">
      <th scope=\"row\">{{ item.documentId.id }}</th>
      <td>{{ item.documentId.nom }}</td>
      <td>{{ item.documentId.typeId.type }}</td>
      <td>
\t\t<a href=\"/upload/{{ item.documentId.chemin }}\"><i class=\"bi bi-cloud-download-fill\"></i></a>
\t\t{% if item.autorisationId.id == 1 %}
\t\t\t<a href=\"#exampleModal{{ item.documentId.id }}\" data-toggle=\"modal\" data-target=\"#exampleModal{{ item.documentId.id }}\"><i class=\"bi bi-share-fill\"></i></a>
\t\t{% endif %}
\t  </td>
    </tr>
\t{% endfor %}
  </tbody>
</table>
  </div>
</div>

{% endblock %}", "authentification/dashboard.html.twig", "C:\\Users\\rodet\\Documents\\GitHub\\GED-project\\templates\\authentification\\dashboard.html.twig");
    }
}
