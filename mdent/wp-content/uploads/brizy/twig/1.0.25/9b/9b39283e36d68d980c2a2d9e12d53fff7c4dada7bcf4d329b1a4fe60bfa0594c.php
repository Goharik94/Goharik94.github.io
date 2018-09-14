<?php

/* head-partial.html.twig */
class __TwigTemplate_f43c2400c65cd22d30d374d8daf627d0ab2a145188a6643461a16663f113b6a3 extends Twig_Template
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
        // line 1
        echo "<!-- BRIZY HEAD -->
";
        // line 2
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
<!-- END BRIZY HEAD -->";
    }

    public function getTemplateName()
    {
        return "head-partial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "head-partial.html.twig", "");
    }
}
