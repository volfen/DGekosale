<?php

/* products_grid.tpl */
class __TwigTemplate_b80618f00ea546590494b967193638b1 extends Twig_Template
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
        return array (  156 => 32,  146 => 30,  143 => 29,  105 => 24,  91 => 22,  80 => 18,  38 => 7,  24 => 4,  59 => 12,  55 => 11,  48 => 8,  42 => 8,  20 => 2,  30 => 4,  25 => 3,  111 => 19,  107 => 18,  103 => 16,  75 => 17,  21 => 3,  209 => 43,  191 => 40,  186 => 39,  169 => 38,  166 => 37,  159 => 35,  153 => 33,  147 => 32,  144 => 31,  140 => 28,  127 => 26,  122 => 26,  114 => 25,  109 => 24,  106 => 23,  96 => 21,  84 => 17,  58 => 11,  46 => 8,  34 => 7,  87 => 32,  70 => 13,  65 => 14,  62 => 13,  54 => 18,  51 => 11,  49 => 16,  45 => 14,  31 => 6,  23 => 5,  90 => 17,  81 => 31,  68 => 15,  63 => 14,  41 => 8,  35 => 6,  19 => 2,  33 => 2,  27 => 6,  18 => 1,  85 => 26,  78 => 30,  76 => 16,  69 => 15,  67 => 17,  53 => 12,  47 => 10,  44 => 10,  40 => 6,  37 => 5,  32 => 4,  29 => 5,  26 => 2,  173 => 39,  167 => 36,  163 => 34,  157 => 33,  154 => 32,  138 => 29,  131 => 28,  128 => 27,  115 => 25,  110 => 24,  102 => 23,  99 => 22,  93 => 21,  89 => 18,  79 => 17,  72 => 16,  64 => 15,  61 => 15,  57 => 13,  52 => 10,  43 => 7,  36 => 6,  28 => 4,  22 => 2,  17 => 1,);
    }
}
