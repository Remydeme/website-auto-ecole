<?php

/* base.html.twig */
class __TwigTemplate_295e440349952fe148c35fffa57140bad91e0f0a1b9944bff936a182934bfa61 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
    <!-- Navigation bar -->
    <!--Header -->

    <div id=\"header\">
        <nav id=\"navigationBar\" class=\"navbar navbar-expand-xl justify-content-start\">
            <div class=\"d-flex justify-content-between\">
                <div class=\"p-4\">
                    <a class=\"brand\" href=\"/\"> Conduite Vauclinoise </a>
                </div>
                <div id=\"pages\" class=\"p-4\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_autoecole_permisaccompagne");
        echo "\"> Conduite accompagnée </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_autoecole_permisb");
        echo "\"> Permis B </a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_autoecole_contacts");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
                <li><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_autoecole_login");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
            </ul>
        </nav>
    </div>

    <!--Body-->
        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
    <!--footer-->
    <div id=\"footer\" >
        <footer class=\"mainfooter\" role=\"contentinfo\">
            <div class=\"footer-middle\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-6\">
                            <!--Column1-->
                            <div class=\"footer-pad\">
                                <h4>Addresse</h4>
                                <address>
                                    <ul class=\"list-unstyled\">
                                        <li>
                                            34 Rue Émile Zola<br>
                                            97280<br>
                                            Vauclin<br>
                                        </li>
                                        <li>
                                            Phone: 06 96 30 70 39
                                        </li>
                                    </ul>
                                </address>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <!--Column1-->
                            <div class=\"footer-pad\">
                                <h4>Contacts</h4>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"#\">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"footer-bottom\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <!--Footer Bottom-->
                                <p class=\"text-xs-center\">&copy; Copyright 2018 - Deme Rémy.  All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
    </div>
    ";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 89,  210 => 88,  199 => 38,  190 => 37,  173 => 6,  155 => 5,  143 => 90,  141 => 88,  91 => 40,  89 => 37,  80 => 31,  76 => 30,  67 => 24,  61 => 21,  45 => 7,  43 => 6,  39 => 5,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
    <!-- Navigation bar -->
    <!--Header -->

    <div id=\"header\">
        <nav id=\"navigationBar\" class=\"navbar navbar-expand-xl justify-content-start\">
            <div class=\"d-flex justify-content-between\">
                <div class=\"p-4\">
                    <a class=\"brand\" href=\"/\"> Conduite Vauclinoise </a>
                </div>
                <div id=\"pages\" class=\"p-4\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_autoecole_permisaccompagne') }}\"> Conduite accompagnée </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_autoecole_permisb') }}\"> Permis B </a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"{{ path('app_autoecole_contacts') }}\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
                <li><a href=\"{{ path('app_autoecole_login')}}\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
            </ul>
        </nav>
    </div>

    <!--Body-->
        {% block body %}

        {% endblock %}

    <!--footer-->
    <div id=\"footer\" >
        <footer class=\"mainfooter\" role=\"contentinfo\">
            <div class=\"footer-middle\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-6\">
                            <!--Column1-->
                            <div class=\"footer-pad\">
                                <h4>Addresse</h4>
                                <address>
                                    <ul class=\"list-unstyled\">
                                        <li>
                                            34 Rue Émile Zola<br>
                                            97280<br>
                                            Vauclin<br>
                                        </li>
                                        <li>
                                            Phone: 06 96 30 70 39
                                        </li>
                                    </ul>
                                </address>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <!--Column1-->
                            <div class=\"footer-pad\">
                                <h4>Contacts</h4>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"#\">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"footer-bottom\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <!--Footer Bottom-->
                                <p class=\"text-xs-center\">&copy; Copyright 2018 - Deme Rémy.  All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
    </div>
    {% block javascripts %}
    {% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/auto-ecole/templates/base.html.twig");
    }
}
