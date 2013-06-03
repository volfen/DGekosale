<?php

/* cart_preview.tpl */
class __TwigTemplate_ba40e44c7f34a34294a671c58adf08a9 extends Twig_Template
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
        echo "<a href=\"";
        echo Gekosale\Template::getPathFromRoute("frontend.cart");
        echo "\" class=\"inherit\">
\t<p>";
        // line 2
        echo Gekosale\Translation::get("TXT_NUMBEROFITEM");
        echo ": <span>";
        if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
        echo $_count_;
        echo "</span></p>
\t<p>";
        // line 3
        echo Gekosale\Translation::get("TXT_PRODUCT_SUBTOTAL");
        echo ": <span>";
        if (isset($context["globalPrice"])) { $_globalPrice_ = $context["globalPrice"]; } else { $_globalPrice_ = null; }
        echo Gekosale\Template::priceFormat($_globalPrice_);
        echo "</span></p>
</a>
";
    }

    public function getTemplateName()
    {
        return "cart_preview.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  22 => 2,  17 => 1,);
    }
}
