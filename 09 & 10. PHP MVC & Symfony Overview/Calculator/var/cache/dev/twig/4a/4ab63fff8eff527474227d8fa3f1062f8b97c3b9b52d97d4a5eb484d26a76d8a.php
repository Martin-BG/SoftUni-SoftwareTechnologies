<?php

/* form/fields.html.twig */
class __TwigTemplate_895b4eec2056c571d242cc184ee7255423d2d7836be45f832f4804abf99e82cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2049f087e79ae6b09818214024f63b5b027a580612877d5c93706f65d717e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2049f087e79ae6b09818214024f63b5b027a580612877d5c93706f65d717e1a->enter($__internal_d2049f087e79ae6b09818214024f63b5b027a580612877d5c93706f65d717e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_d2049f087e79ae6b09818214024f63b5b027a580612877d5c93706f65d717e1a->leave($__internal_d2049f087e79ae6b09818214024f63b5b027a580612877d5c93706f65d717e1a_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_91199e37e323ac57cf6078ec00cefdaba491c2425c862f90cf47b4642fdd3fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91199e37e323ac57cf6078ec00cefdaba491c2425c862f90cf47b4642fdd3fe3->enter($__internal_91199e37e323ac57cf6078ec00cefdaba491c2425c862f90cf47b4642fdd3fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_91199e37e323ac57cf6078ec00cefdaba491c2425c862f90cf47b4642fdd3fe3->leave($__internal_91199e37e323ac57cf6078ec00cefdaba491c2425c862f90cf47b4642fdd3fe3_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
