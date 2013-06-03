<?php

/* basket_modal.tpl */
class __TwigTemplate_629b1fb12698ac69639cb937677d4301 extends Twig_Template
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
";
        // line 5
        if (isset($context["recommendations"])) { $_recommendations_ = $context["recommendations"]; } else { $_recommendations_ = null; }
        if (($this->getAttribute($_recommendations_, "total") > 0)) {
            // line 6
            echo "<div class=\"modal-body\">
\t<p class=\"modal-info\">Produkty, które również mogą Cię zainteresować:</p>
    <ul class=\"thumbnails product-thumbnails\">
    \t";
            // line 9
            if (isset($context["recommendations"])) { $_recommendations_ = $context["recommendations"]; } else { $_recommendations_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_recommendations_, "rows"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "\t\t<li class=\"span1\">
\t    \t<div class=\"thumbnail\">
\t        \t<div class=\"labels\">
\t            \t";
                // line 13
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ((($this->getAttribute($_item_, "discountprice") != null) && ($this->getAttribute($_item_, "discountprice") != $this->getAttribute($_item_, "price")))) {
                    // line 14
                    echo "\t\t        \t<span class=\"label label-promotion\">";
                    echo Gekosale\Translation::get("TXT_PROMOTION");
                    echo "</span>
\t\t        \t";
                }
                // line 16
                echo "\t\t        \t";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (($this->getAttribute($_item_, "new") == 1)) {
                    // line 17
                    echo "\t\t        \t<span class=\"label label-new\">";
                    echo Gekosale\Translation::get("New product");
                    echo "</span>
\t\t        \t";
                }
                // line 19
                echo "\t\t\t\t</div>
\t            <a href=\"";
                // line 20
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_item_, "seo")));
                echo "\"><img src=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "photo");
                echo "\" alt=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "name");
                echo "\"></a>
\t            <div class=\"caption\">
\t            \t<a href=\"";
                // line 22
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_item_, "seo")));
                echo "\"><h4>";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "name");
                echo "</h4></a>
\t                ";
                // line 23
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (($this->getAttribute($_item_, "discountprice") > 0)) {
                    // line 24
                    echo "\t\t\t\t\t<p class=\"price promo\">";
                    if (isset($context["showtax"])) { $_showtax_ = $context["showtax"]; } else { $_showtax_ = null; }
                    if (($_showtax_ == 0)) {
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo Gekosale\Template::priceFormat($this->getAttribute($_item_, "discountpricenetto"));
                    } else {
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo Gekosale\Template::priceFormat($this->getAttribute($_item_, "discountprice"));
                    }
                    echo " <small>";
                    if (isset($context["showtax"])) { $_showtax_ = $context["showtax"]; } else { $_showtax_ = null; }
                    if (($_showtax_ == 0)) {
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo Gekosale\Template::priceFormat($this->getAttribute($_item_, "pricenetto"));
                    } else {
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo Gekosale\Template::priceFormat($this->getAttribute($_item_, "price"));
                    }
                    echo "</small></p>
\t\t\t\t    ";
                } else {
                    // line 26
                    echo "\t\t\t\t    <p class=\"price\">";
                    if (isset($context["showtax"])) { $_showtax_ = $context["showtax"]; } else { $_showtax_ = null; }
                    if (($_showtax_ == 0)) {
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo Gekosale\Template::priceFormat($this->getAttribute($_item_, "pricenetto"));
                    } else {
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo Gekosale\Template::priceFormat($this->getAttribute($_item_, "price"));
                    }
                    echo "</p>
\t\t\t\t    ";
                }
                // line 28
                echo "\t                <p class=\"action\">
\t                \t<a class=\"btn btn-primary\" onclick=\"xajax_doQuickAddCart(";
                // line 29
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "id");
                echo ");return false;\" href=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_item_, "seo")));
                echo "\"><i class=\"icon-shopping-cart icon-white\"></i> Do koszyka</a>
\t                </p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 35
            echo "\t</ul>
</div>
";
        }
        // line 38
        echo "<div class=\"modal-footer form-actions-clean\">
\t<a href=\"#\" class=\"btn  pull-left\" data-dismiss=\"modal\"><i class=\"icon-arrow-left\"></i> Kontynuuj zakupy</a>
\t<a href=\"";
        // line 40
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
        return array (  155 => 40,  151 => 38,  146 => 35,  130 => 29,  127 => 28,  114 => 26,  92 => 24,  89 => 23,  81 => 22,  69 => 20,  66 => 19,  60 => 17,  56 => 16,  50 => 14,  47 => 13,  42 => 10,  37 => 9,  32 => 6,  29 => 5,  21 => 3,  17 => 1,);
    }
}
