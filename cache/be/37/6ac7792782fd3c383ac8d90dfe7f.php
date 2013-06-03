<?php

/* productsincategorybox/index/promotions.tpl */
class __TwigTemplate_be376ac7792782fd3c383ac8d90dfe7f extends Twig_Template
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
        if (isset($context["categoryPromotions"])) { $_categoryPromotions_ = $context["categoryPromotions"]; } else { $_categoryPromotions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_categoryPromotions_, "rows"));
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
            if (($this->getAttribute($_item_, "discountprice") > 0)) {
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
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_item_, "price"));
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
        return "productsincategorybox/index/promotions.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 39,  157 => 34,  150 => 32,  105 => 24,  102 => 23,  91 => 22,  76 => 16,  57 => 13,  51 => 11,  47 => 10,  25 => 3,  20 => 2,  17 => 1,  269 => 78,  267 => 77,  263 => 76,  258 => 73,  237 => 71,  230 => 70,  221 => 63,  204 => 61,  197 => 60,  187 => 52,  183 => 50,  177 => 47,  174 => 46,  169 => 45,  163 => 42,  160 => 41,  156 => 40,  151 => 37,  145 => 35,  134 => 28,  123 => 29,  120 => 28,  116 => 26,  108 => 23,  92 => 21,  87 => 20,  83 => 18,  78 => 17,  75 => 16,  67 => 12,  60 => 10,  53 => 8,  50 => 7,  35 => 4,  173 => 50,  164 => 44,  148 => 42,  138 => 41,  135 => 40,  130 => 31,  125 => 36,  122 => 35,  118 => 33,  106 => 27,  80 => 18,  77 => 23,  72 => 15,  66 => 20,  58 => 18,  48 => 12,  43 => 11,  140 => 30,  137 => 29,  127 => 26,  103 => 19,  98 => 18,  93 => 17,  90 => 25,  86 => 15,  82 => 13,  71 => 12,  63 => 14,  54 => 10,  49 => 9,  44 => 8,  41 => 8,  38 => 7,  32 => 4,  29 => 5,  26 => 2,);
    }
}
