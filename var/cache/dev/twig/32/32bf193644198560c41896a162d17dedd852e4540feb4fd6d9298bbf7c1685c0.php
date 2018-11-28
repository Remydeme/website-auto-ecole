<?php

/* Contacts.html.twig */
class __TwigTemplate_83ba534468d051ca3a49348bc6c00c0c0055059ddf4ea85ca5f2cbeba6401d26 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Contacts.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Contacts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Contacts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Conduite Vauclinoise";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "     <link rel=\"stylesheet\" type=\"text/css\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/navbar.css"), "html", null, true);
        echo ">
     <link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home.css"), "html", null, true);
        echo ">
     <link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
        echo ">
     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <!--Body-->

    <div id=\"body\" class=\"container\" >
        <div class=\"row\">

            <form action=\"/sign-up\" method=\"post\">
                <div class=\"form-group\">
                    <label for=\"email\">Nom</label>
                    <input name=\"lastname\" type=\"text\" class=\"form-control\" id=\"email\">
                </div>
                <div class=\"form-group\">
                    <label for=\"firstname\">Prénom</label>
                    <input name=\"firstname\" type=\"text\" class=\"form-control\" id=\"firstname\">
                </div>
                <div class=\"form-group\">
                    <label for=\"address\">Addresse</label>
                    <input name=\"address\" type=\"text\" class=\"form-control\" id=\"address\">
                </div>
                <div class=\"form-group\">
                      <label for=\"Forfait\">Forfait</label>
                      <select class=\"form-control form-control-lg\">
                          <option>Permis B</option>
                         <option>Permis Accompagne</option>
                          <option>Forfait Code</option>
                     </select>
                    </div>
                <div class=\"form-group\">
                    <label for=\"postalCode\">Code Postale</label>
                    <input name=\"postalCode\" type=\"text\" class=\"form-control\" id=\"email\">
                    <div class=\"form-group\">
                        <label for=\"email\">Addresse Email</label>
                        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"email\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\">Confirmation</label>
                        <input name=\"confirmation\" type=\"email\" class=\"form-control\" id=\"email\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"pwd\">Mot de passe</label>
                        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"pwd\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"pwd\">Confirmation</label>
                        <input type=\"password\" class=\"form-control\" id=\"pwd\">
                    </div>
                    <button  type=\"submit\" class=\"btn btn-primary\">Me connecter</button>
            </form>
        </div>
    </div>
    </div>

    ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

        <!-- jQuery library -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <!-- Latest compiled JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 65,  172 => 64,  160 => 76,  158 => 64,  105 => 13,  96 => 12,  83 => 8,  79 => 7,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Conduite Vauclinoise{% endblock %}

 {% block stylesheets %}
     <link rel=\"stylesheet\" type=\"text/css\" href={{ asset('css/navbar.css') }}>
     <link rel=\"stylesheet\" type=\"text/css\" href={{ asset('css/home.css') }}>
     <link rel=\"stylesheet\" type=\"text/css\" href={{ asset('css/footer.css') }}>
     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
 {% endblock %}

{% block body %}
    <!--Body-->

    <div id=\"body\" class=\"container\" >
        <div class=\"row\">

            <form action=\"/sign-up\" method=\"post\">
                <div class=\"form-group\">
                    <label for=\"email\">Nom</label>
                    <input name=\"lastname\" type=\"text\" class=\"form-control\" id=\"email\">
                </div>
                <div class=\"form-group\">
                    <label for=\"firstname\">Prénom</label>
                    <input name=\"firstname\" type=\"text\" class=\"form-control\" id=\"firstname\">
                </div>
                <div class=\"form-group\">
                    <label for=\"address\">Addresse</label>
                    <input name=\"address\" type=\"text\" class=\"form-control\" id=\"address\">
                </div>
                <div class=\"form-group\">
                      <label for=\"Forfait\">Forfait</label>
                      <select class=\"form-control form-control-lg\">
                          <option>Permis B</option>
                         <option>Permis Accompagne</option>
                          <option>Forfait Code</option>
                     </select>
                    </div>
                <div class=\"form-group\">
                    <label for=\"postalCode\">Code Postale</label>
                    <input name=\"postalCode\" type=\"text\" class=\"form-control\" id=\"email\">
                    <div class=\"form-group\">
                        <label for=\"email\">Addresse Email</label>
                        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"email\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\">Confirmation</label>
                        <input name=\"confirmation\" type=\"email\" class=\"form-control\" id=\"email\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"pwd\">Mot de passe</label>
                        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"pwd\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"pwd\">Confirmation</label>
                        <input type=\"password\" class=\"form-control\" id=\"pwd\">
                    </div>
                    <button  type=\"submit\" class=\"btn btn-primary\">Me connecter</button>
            </form>
        </div>
    </div>
    </div>

    {% block javascripts %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

        <!-- jQuery library -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <!-- Latest compiled JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    {% endblock %}


{% endblock %}



", "Contacts.html.twig", "/Applications/MAMP/htdocs/auto-ecole/templates/Contacts.html.twig");
    }
}
