<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_cf8879542c48ac66f8651a50027ff95c85e2391213911de695609e4e18b8d907 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fbd304195ca5da357dfcccd407897997ca0312eaa14e44c6d75b43569d58a23 = $this->env->getExtension("native_profiler");
        $__internal_3fbd304195ca5da357dfcccd407897997ca0312eaa14e44c6d75b43569d58a23->enter($__internal_3fbd304195ca5da357dfcccd407897997ca0312eaa14e44c6d75b43569d58a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3fbd304195ca5da357dfcccd407897997ca0312eaa14e44c6d75b43569d58a23->leave($__internal_3fbd304195ca5da357dfcccd407897997ca0312eaa14e44c6d75b43569d58a23_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
