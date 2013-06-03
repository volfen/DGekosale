<?php

/* products_grid.tpl */
class __TwigTemplate_8f179bf74244c8ca776c78058a95bd85 extends Twig_Template
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
        echo "<ul class=\"thumbnails col5 product-thumbnails\">
\t";
        // line 2
        if (isset($context["dataset"])) { $_dataset_ = $context["dataset"]; } else { $_dataset_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_dataset_, "rows"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "\t<li class=\"span1\">
    \t<div class=\"thumbnail\">
            <a href=\"";
            // line 5
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_item_, "seo")));
            echo "\" title=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "name");
            echo "\">
            \t<div class=\"labels\">
\t\t\t\t\t";
            // line 7
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "discountprice") > 0)) {
                // line 8
                echo "\t\t\t        <span class=\"label label-promotion\">";
                echo Gekosale\Translation::get("TXT_PROMOTION");
                echo "</span>
\t\t\t        ";
            }
            // line 10
            echo "\t\t\t        ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "new") == 1)) {
                // line 11
                echo "\t\t\t        <span class=\"label label-new\">";
                echo Gekosale\Translation::get("New product");
                echo "</span>
\t\t\t        ";
            }
            // line 13
            echo "\t\t\t        ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_item_, "statuses"));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 14
                echo "\t\t\t        <span class=\"label label-";
                if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                echo $this->getAttribute($_status_, "symbol");
                echo "\">";
                if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                echo $this->getAttribute($_status_, "name");
                echo "</span>
\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 16
            echo "\t       \t\t</div>
            \t<span class=\"photo\">
            \t\t<img src=\"";
            // line 18
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "photo");
            echo "\" alt=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "name");
            echo "\">
            \t</span>
            </a> 
            <div class=\"caption\">
            \t<h4><a href=\"";
            // line 22
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_item_, "seo")));
            echo "\" title=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "name");
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "name");
            echo "</a></h4>
                ";
            // line 23
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ((($this->getAttribute($_item_, "discountprice") != null) && ($this->getAttribute($_item_, "discountprice") != $this->getAttribute($_item_, "price")))) {
                // line 24
                echo "\t\t\t\t<p class=\"price promo\">";
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
\t\t\t    ";
            } else {
                // line 26
                echo "\t\t\t    <p class=\"price\">";
                if (isset($context["showtax"])) { $_showtax_ = $context["showtax"]; } else { $_showtax_ = null; }
                if (($_showtax_ == 0)) {
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo Gekosale\Template::priceFormat($this->getAttribute($_item_, "pricenetto"));
                } else {
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo Gekosale\Template::priceFormat($this->getAttribute($_item_, "price"));
                }
                echo "</p>
\t\t\t    ";
            }
            // line 28
            echo "                <p class=\"action\">
                \t";
            // line 29
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "onstock") == 1)) {
                // line 30
                echo "                \t<a class=\"btn btn-primary\" onclick=\"xajax_doQuickAddCart(";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "id");
                echo ");return false;\" href=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_item_, "seo")));
                echo "\"><i class=\"icon-shopping-cart icon-white\"></i> Do koszyka</a>
                \t";
            } else {
                // line 32
                echo "                \t<a class=\"btn btn-danger\" href=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo Gekosale\Template::getPathFromRoute("frontend.contact", array("param" => $this->getAttribute($_item_, "id")));
                echo "\"> Zapytaj o produkt</a>
                \t";
            }
            // line 34
            echo "                </p>
\t\t\t</div>
\t\t</div>
\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "products_grid.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 39,  163 => 34,  156 => 32,  146 => 30,  143 => 29,  140 => 28,  127 => 26,  105 => 24,  102 => 23,  91 => 22,  76 => 16,  51 => 11,  47 => 10,  25 => 3,  24 => 4,  75 => 17,  65 => 14,  62 => 13,  59 => 12,  55 => 11,  48 => 8,  40 => 6,  37 => 5,  68 => 15,  45 => 12,  35 => 6,  139 => 20,  116 => 16,  81 => 12,  78 => 11,  72 => 16,  64 => 8,  54 => 5,  46 => 4,  20 => 2,  33 => 2,  27 => 2,  18 => 1,  112 => 20,  109 => 19,  103 => 14,  90 => 16,  80 => 18,  77 => 13,  57 => 13,  53 => 9,  44 => 8,  41 => 8,  38 => 7,  32 => 4,  29 => 5,  26 => 2,  195 => 44,  189 => 43,  185 => 41,  179 => 40,  176 => 39,  160 => 36,  153 => 35,  150 => 34,  137 => 32,  132 => 31,  124 => 30,  121 => 29,  115 => 28,  111 => 27,  101 => 24,  94 => 23,  86 => 15,  83 => 21,  79 => 20,  74 => 19,  70 => 12,  67 => 16,  63 => 14,  56 => 12,  52 => 10,  50 => 13,  43 => 7,  36 => 6,  28 => 5,  22 => 2,  17 => 1,);
    }
}
