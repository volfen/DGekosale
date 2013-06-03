<?php

/* basket_modal.tpl */
class __TwigTemplate_466aa8e2191aede47566aa41783e3d5e extends Twig_Template
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
        echo "<button class=\"close\" data-dismiss=\"modal\">&times;</button>
<div class=\"alert alert-block alert-success\">
\t<p>\"";
        // line 3
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "productname");
        echo "\" ";
        echo Gekosale\Translation::get("TXT_CART_PRODUCT_ADDED");
        echo "</p>
</div>
<div class=\"modal-footer form-actions-clean\">
\t<a href=\"#\" class=\"btn  pull-left\" data-dismiss=\"modal\"><i class=\"icon-arrow-left\"></i> Kontynuuj zakupy</a>
\t<a href=\"";
        // line 7
        echo Gekosale\Template::getPathFromRoute("frontend.cart");
        echo "\" class=\"btn btn-inverse\"><i class=\"icon-shopping-cart icon-white\"></i> ";
        echo Gekosale\Translation::get("TXT_GOTO_CART");
        echo "</a>
</div>

";
    }

    public function getTemplateName()
    {
        return "basket_modal.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  21 => 3,  17 => 1,);
    }
}
