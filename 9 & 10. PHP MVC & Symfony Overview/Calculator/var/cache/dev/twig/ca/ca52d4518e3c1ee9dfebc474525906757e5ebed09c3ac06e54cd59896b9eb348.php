<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_79acc558e4d223e5ef9ebb9106db6f47ecdae5b963da134eab91ac1c369b4bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fba9ff11bdff07402971f2052a1937ef0b955313c9c549f0d2d3b4663d1bb18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba9ff11bdff07402971f2052a1937ef0b955313c9c549f0d2d3b4663d1bb18f->enter($__internal_fba9ff11bdff07402971f2052a1937ef0b955313c9c549f0d2d3b4663d1bb18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fba9ff11bdff07402971f2052a1937ef0b955313c9c549f0d2d3b4663d1bb18f->leave($__internal_fba9ff11bdff07402971f2052a1937ef0b955313c9c549f0d2d3b4663d1bb18f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_51ac9d76dc0bb9cc26ce23ad1948aa01faea1a4f3f836b94e421f33a9eeb220f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ac9d76dc0bb9cc26ce23ad1948aa01faea1a4f3f836b94e421f33a9eeb220f->enter($__internal_51ac9d76dc0bb9cc26ce23ad1948aa01faea1a4f3f836b94e421f33a9eeb220f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_51ac9d76dc0bb9cc26ce23ad1948aa01faea1a4f3f836b94e421f33a9eeb220f->leave($__internal_51ac9d76dc0bb9cc26ce23ad1948aa01faea1a4f3f836b94e421f33a9eeb220f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ca3705e3b075f9fdb1aa65c0c9235a6594a0770c3fd6bb386df4d03eec22023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca3705e3b075f9fdb1aa65c0c9235a6594a0770c3fd6bb386df4d03eec22023->enter($__internal_6ca3705e3b075f9fdb1aa65c0c9235a6594a0770c3fd6bb386df4d03eec22023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6ca3705e3b075f9fdb1aa65c0c9235a6594a0770c3fd6bb386df4d03eec22023->leave($__internal_6ca3705e3b075f9fdb1aa65c0c9235a6594a0770c3fd6bb386df4d03eec22023_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9cc5116e7d21d21782f321580325d9f62c6ce33a1460c9b3e69f89047f16e980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc5116e7d21d21782f321580325d9f62c6ce33a1460c9b3e69f89047f16e980->enter($__internal_9cc5116e7d21d21782f321580325d9f62c6ce33a1460c9b3e69f89047f16e980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9cc5116e7d21d21782f321580325d9f62c6ce33a1460c9b3e69f89047f16e980->leave($__internal_9cc5116e7d21d21782f321580325d9f62c6ce33a1460c9b3e69f89047f16e980_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
