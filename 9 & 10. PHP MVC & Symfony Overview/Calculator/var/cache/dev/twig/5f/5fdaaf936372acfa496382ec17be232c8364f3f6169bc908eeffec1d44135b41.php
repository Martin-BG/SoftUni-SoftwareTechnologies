<?php

/* base.html.twig */
class __TwigTemplate_976559b1011dd48fb807f8d14559abaeb5f064f7c4b1a5936f657d4c0ae0fdbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dae663288b7c4c098a465a5f87bb461e433ef454daa062ed1e2a9d774ef6012c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae663288b7c4c098a465a5f87bb461e433ef454daa062ed1e2a9d774ef6012c->enter($__internal_dae663288b7c4c098a465a5f87bb461e433ef454daa062ed1e2a9d774ef6012c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_dae663288b7c4c098a465a5f87bb461e433ef454daa062ed1e2a9d774ef6012c->leave($__internal_dae663288b7c4c098a465a5f87bb461e433ef454daa062ed1e2a9d774ef6012c_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_34b6f02dfe0dcf549f8db4336726cba41a2de1128fe3c61b85126b4510ebc8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b6f02dfe0dcf549f8db4336726cba41a2de1128fe3c61b85126b4510ebc8a4->enter($__internal_34b6f02dfe0dcf549f8db4336726cba41a2de1128fe3c61b85126b4510ebc8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_34b6f02dfe0dcf549f8db4336726cba41a2de1128fe3c61b85126b4510ebc8a4->leave($__internal_34b6f02dfe0dcf549f8db4336726cba41a2de1128fe3c61b85126b4510ebc8a4_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5570bf8d3aff9028c2fec16d4252d1bde838a0b7bf2936441b0e40e97fe7b1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5570bf8d3aff9028c2fec16d4252d1bde838a0b7bf2936441b0e40e97fe7b1e4->enter($__internal_5570bf8d3aff9028c2fec16d4252d1bde838a0b7bf2936441b0e40e97fe7b1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_5570bf8d3aff9028c2fec16d4252d1bde838a0b7bf2936441b0e40e97fe7b1e4->leave($__internal_5570bf8d3aff9028c2fec16d4252d1bde838a0b7bf2936441b0e40e97fe7b1e4_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_14aca14233266f170f19c37c55db651cf8d9f4fc82f1c41b4111faa43884e422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14aca14233266f170f19c37c55db651cf8d9f4fc82f1c41b4111faa43884e422->enter($__internal_14aca14233266f170f19c37c55db651cf8d9f4fc82f1c41b4111faa43884e422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_14aca14233266f170f19c37c55db651cf8d9f4fc82f1c41b4111faa43884e422->leave($__internal_14aca14233266f170f19c37c55db651cf8d9f4fc82f1c41b4111faa43884e422_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_b48351e380ff7d075989d14cadda92f0141f61398d81e05ed0d504f5d39fe028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48351e380ff7d075989d14cadda92f0141f61398d81e05ed0d504f5d39fe028->enter($__internal_b48351e380ff7d075989d14cadda92f0141f61398d81e05ed0d504f5d39fe028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_b48351e380ff7d075989d14cadda92f0141f61398d81e05ed0d504f5d39fe028->leave($__internal_b48351e380ff7d075989d14cadda92f0141f61398d81e05ed0d504f5d39fe028_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_87a9f67d8304d84e8314189133975d8587759857ff7aa47cd80649869a74a815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a9f67d8304d84e8314189133975d8587759857ff7aa47cd80649869a74a815->enter($__internal_87a9f67d8304d84e8314189133975d8587759857ff7aa47cd80649869a74a815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_87a9f67d8304d84e8314189133975d8587759857ff7aa47cd80649869a74a815->leave($__internal_87a9f67d8304d84e8314189133975d8587759857ff7aa47cd80649869a74a815_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_0733fb521ee0ae7564efaef81bdeeb61825764b860c8f30c13f11a45960c1905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0733fb521ee0ae7564efaef81bdeeb61825764b860c8f30c13f11a45960c1905->enter($__internal_0733fb521ee0ae7564efaef81bdeeb61825764b860c8f30c13f11a45960c1905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_0733fb521ee0ae7564efaef81bdeeb61825764b860c8f30c13f11a45960c1905->leave($__internal_0733fb521ee0ae7564efaef81bdeeb61825764b860c8f30c13f11a45960c1905_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c254dc6a0efe154beb5aa313c16dc8a1ee2d4292a219bb83da702d5204b8705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c254dc6a0efe154beb5aa313c16dc8a1ee2d4292a219bb83da702d5204b8705->enter($__internal_1c254dc6a0efe154beb5aa313c16dc8a1ee2d4292a219bb83da702d5204b8705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1c254dc6a0efe154beb5aa313c16dc8a1ee2d4292a219bb83da702d5204b8705->leave($__internal_1c254dc6a0efe154beb5aa313c16dc8a1ee2d4292a219bb83da702d5204b8705_prof);

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
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
