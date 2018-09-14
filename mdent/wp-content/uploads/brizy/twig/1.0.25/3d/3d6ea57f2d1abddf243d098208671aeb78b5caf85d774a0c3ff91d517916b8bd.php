<?php

/* static.html.twig */
class __TwigTemplate_f4caf1170643db3ee88ab51e4399b8bbb38cbbb137003e72018d469324ac9107 extends Twig_Template
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
        $context["assetsUrl"] = $this->getAttribute($this->getAttribute((isset($context["editorData"]) ? $context["editorData"] : null), "urls", array()), "assets", array());
        echo " ";
        $context["serverTimestamp"] = $this->getAttribute((isset($context["editorData"]) ? $context["editorData"] : null), "serverTimestamp", array());
        echo " ";
        $context["meta"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "meta", array());
        echo " ";
        $context["blocks"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "blocks", array());
        echo " ";
        ob_start();
        echo "<!DOCTYPE html><html lang=\"en\"><head><meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">";
        echo $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "head", array());
        echo "</head><body class=\"brz\">";
        echo $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "body", array());
        echo "</body></html>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "static.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "static.html.twig", "");
    }
}
