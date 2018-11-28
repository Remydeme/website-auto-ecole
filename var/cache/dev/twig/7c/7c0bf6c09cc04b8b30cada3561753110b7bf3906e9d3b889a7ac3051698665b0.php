<?php

/* home.html.twig */
class __TwigTemplate_a0e4111eb45dd62beda14df1736c7525e0c673ae0b47118cffd39a2cb5eae1de extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

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

    <!-- caroussel code -->


    <div class=\"d-flex justify-content-center\">
        <div id=\"carouselHome\" class=\"carousel slide\" data-ride=\"carousel\">

            <!-- Indicators -->
            <ul class=\"carousel-indicators\">
                <li data-target=\"#carouselHome\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carouselHome\" data-slide-to=\"1\"></li>
                <li data-target=\"#carouselHome\" data-slide-to=\"2\"></li>
            </ul>

            <!-- The slideshow -->
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"img-rounded\" src=";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/auto.jpg"), "html", null, true);
        echo " alt=\"auto-ecole\" width=\"700\" height=\"500\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"img-rounded\" src=";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gts.jpg"), "html", null, true);
        echo " alt=\"gts\" width=\"700\" height=\"500\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"img-rounded\" src=";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/permis.jpg"), "html", null, true);
        echo " alt=\"permis\" width=\"700\" height=\"500\">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\"></span>
            </a>
            <a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\"></span>
            </a>
        </div>
    </div>


    <!-- Annonce for promottion offer -->

    <div id=\"promotion\" class=\"d-flex justify-content-center\">
        <div class=\"Code\">
            <ul>
                <h1> Code de la route </h1>
                <h2> 360 € </h2>
                <p> Questions, cours et réponses <br> illimité pendant 3 mois paiement en 2 fois.</p>
                <a href=\"contacts\" class=\"btn btn-warning  btn-lg\" role=\"button\" aria-pressed=\"true\">Nous contacter</a>
                <ul>
        </div>
        <div class=\"Permis\">
            <ul>
                <h1> Permis B </h1>
                <h2>799 € </h2>
                <p>Code de la route + 20 heures de conduite. <br>
                    Paiement en 3 fois sans frais</p>
                <a href=\"contacts\" class=\"btn btn-info  btn-lg\" role=\"button\">Nous contacter</a>
        </div>
    </div>


    <!--- How does it work part -->


    <div id=\"howStart\" class=\"container\">
        <div class=\"row\">
            <h2> Comment prendre des cours avec nous? </h2>
        </div>
        <div class=\"row\">
            <ul>
                <li class=\"nav-link\"> <h4> <img class=\"hand-img\" src=";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hand.png"), "html", null, true);
        echo " height=\"20px\" width=\"30px\">
                        Choisisser votre formule. </h4> </li>
                <li class=\"nav-link\"> <h4> <img class=\"calendar-img\" src=";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/calendar.png"), "html", null, true);
        echo " height=\"20px\" width=\"30px\">
                        Contacter nous pour réserver un crénau horraire au 0696 30.70.39 </h4> </li>
            </ul>
        </div>
    </div>

    ";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
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
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 92,  214 => 91,  202 => 103,  200 => 91,  191 => 85,  186 => 83,  137 => 37,  131 => 34,  125 => 31,  105 => 13,  96 => 12,  83 => 8,  79 => 7,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
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

    <!-- caroussel code -->


    <div class=\"d-flex justify-content-center\">
        <div id=\"carouselHome\" class=\"carousel slide\" data-ride=\"carousel\">

            <!-- Indicators -->
            <ul class=\"carousel-indicators\">
                <li data-target=\"#carouselHome\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carouselHome\" data-slide-to=\"1\"></li>
                <li data-target=\"#carouselHome\" data-slide-to=\"2\"></li>
            </ul>

            <!-- The slideshow -->
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"img-rounded\" src={{ asset('img/auto.jpg') }} alt=\"auto-ecole\" width=\"700\" height=\"500\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"img-rounded\" src={{ asset('img/gts.jpg') }} alt=\"gts\" width=\"700\" height=\"500\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"img-rounded\" src={{ asset('img/permis.jpg') }} alt=\"permis\" width=\"700\" height=\"500\">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class=\"carousel-control-prev\" href=\"#demo\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\"></span>
            </a>
            <a class=\"carousel-control-next\" href=\"#demo\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\"></span>
            </a>
        </div>
    </div>


    <!-- Annonce for promottion offer -->

    <div id=\"promotion\" class=\"d-flex justify-content-center\">
        <div class=\"Code\">
            <ul>
                <h1> Code de la route </h1>
                <h2> 360 € </h2>
                <p> Questions, cours et réponses <br> illimité pendant 3 mois paiement en 2 fois.</p>
                <a href=\"contacts\" class=\"btn btn-warning  btn-lg\" role=\"button\" aria-pressed=\"true\">Nous contacter</a>
                <ul>
        </div>
        <div class=\"Permis\">
            <ul>
                <h1> Permis B </h1>
                <h2>799 € </h2>
                <p>Code de la route + 20 heures de conduite. <br>
                    Paiement en 3 fois sans frais</p>
                <a href=\"contacts\" class=\"btn btn-info  btn-lg\" role=\"button\">Nous contacter</a>
        </div>
    </div>


    <!--- How does it work part -->


    <div id=\"howStart\" class=\"container\">
        <div class=\"row\">
            <h2> Comment prendre des cours avec nous? </h2>
        </div>
        <div class=\"row\">
            <ul>
                <li class=\"nav-link\"> <h4> <img class=\"hand-img\" src={{ asset('img/hand.png') }} height=\"20px\" width=\"30px\">
                        Choisisser votre formule. </h4> </li>
                <li class=\"nav-link\"> <h4> <img class=\"calendar-img\" src={{ asset('img/calendar.png') }} height=\"20px\" width=\"30px\">
                        Contacter nous pour réserver un crénau horraire au 0696 30.70.39 </h4> </li>
            </ul>
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





", "home.html.twig", "/Applications/MAMP/htdocs/auto-ecole/templates/home.html.twig");
    }
}
