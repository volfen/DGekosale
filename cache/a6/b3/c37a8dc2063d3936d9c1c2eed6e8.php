<?php

/* products_list.tpl */
class __TwigTemplate_a6b3c37a8dc2063d3936d9c1c2eed6e8 extends Twig_Template
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
        if (isset($context["dataset"])) { $_dataset_ = $context["dataset"]; } else { $_dataset_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_dataset_, "rows"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "<div class=\"product-list row-fluid\">
\t<div class=\"span3 photo\">
\t\t<div class=\"labels\">
\t\t\t<a href=\"";
            // line 5
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_item_, "seo")));
            echo "\" title=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "name");
            echo "\">
\t\t\t\t";
            // line 6
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "discountprice") > 0)) {
                // line 7
                echo "\t        \t<span class=\"label label-promotion\">";
                echo Gekosale\Translation::get("TXT_PROMOTION");
                echo "</span>
\t        \t";
            }
            // line 9
            echo "\t        \t";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "new") == 1)) {
                // line 10
                echo "\t        \t<span class=\"label label-new\">";
                echo Gekosale\Translation::get("New product");
                echo "</span>
\t        \t";
            }
            // line 12
            echo "\t        \t";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_item_, "statuses"));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 13
                echo "\t            <span class=\"label label-";
                if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                echo $this->getAttribute($_status_, "symbol");
                echo "\">";
                if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                echo $this->getAttribute($_status_, "name");
                echo "</span>
\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 15
            echo "            </a>
        </div>
    \t<a href=\"";
            // line 17
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_item_, "seo")));
            echo "\" title=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "name");
            echo "\"><img src=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "photo");
            echo "\" alt=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "name");
            echo "\"></a>
\t</div>
    <div class=\"span6 info\">
\t\t<a href=\"";
            // line 20
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_item_, "seo")));
            echo "\" title=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "name");
            echo "\"><h3>";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "name");
            echo "</h3></a>
        ";
            // line 21
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "shortdescription");
            echo "
\t</div>
\t<div class=\"span3\">
\t";
            // line 24
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ((($this->getAttribute($_item_, "discountprice") != null) && ($this->getAttribute($_item_, "discountprice") != $this->getAttribute($_item_, "price")))) {
                // line 25
                echo "\t\t<p class=\"price promo\">";
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
                echo "</small></small></p>
    ";
            } else {
                // line 27
                echo "    \t<p class=\"price\">";
                if (isset($context["showtax"])) { $_showtax_ = $context["showtax"]; } else { $_showtax_ = null; }
                if (($_showtax_ == 0)) {
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo Gekosale\Template::priceFormat($this->getAttribute($_item_, "pricenetto"));
                } else {
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo Gekosale\Template::priceFormat($this->getAttribute($_item_, "price"));
                }
                echo "</p>
    ";
            }
            // line 29
            echo "    \t";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "onstock") == 1)) {
                // line 30
                echo "        <p class=\"action\"><a href=\"#\" class=\"btn btn-primary\" onclick=\"xajax_doQuickAddCart(";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "id");
                echo ");return false;\"><i class=\"icon-shopping-cart icon-white\"></i> Do koszyka</a></p>
        ";
            } else {
                // line 32
                echo "        <p class=\"action\"><a class=\"btn btn-danger\" href=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo Gekosale\Template::getPathFromRoute("frontend.contact", array("param" => $this->getAttribute($_item_, "id")));
                echo "\"> Zapytaj o produkt</a></p>
        ";
            }
            // line 34
            echo "        <a href=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_item_, "seo")));
            echo "\" class=\"more\">Więcej o produkcie <i class=\"icon-arrow-right-blue\"></i></a>
\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "products_list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 30,  149 => 29,  136 => 27,  114 => 25,  111 => 24,  104 => 21,  73 => 15,  27 => 5,  22 => 2,  46 => 7,  30 => 5,  21 => 2,  167 => 34,  157 => 34,  150 => 32,  105 => 24,  102 => 23,  91 => 22,  76 => 16,  57 => 13,  51 => 11,  47 => 10,  25 => 4,  20 => 2,  17 => 1,  269 => 78,  267 => 77,  263 => 76,  258 => 73,  237 => 71,  230 => 70,  221 => 63,  204 => 61,  197 => 60,  187 => 52,  183 => 50,  177 => 47,  174 => 46,  169 => 45,  163 => 42,  160 => 32,  156 => 40,  151 => 37,  145 => 35,  134 => 28,  123 => 29,  120 => 28,  116 => 26,  108 => 23,  92 => 21,  87 => 20,  83 => 18,  78 => 17,  75 => 16,  67 => 12,  60 => 13,  53 => 8,  50 => 7,  35 => 6,  173 => 50,  164 => 44,  148 => 42,  138 => 41,  135 => 40,  130 => 31,  125 => 36,  122 => 35,  118 => 33,  106 => 27,  80 => 18,  77 => 17,  72 => 15,  66 => 20,  58 => 18,  48 => 10,  43 => 11,  140 => 30,  137 => 29,  127 => 26,  103 => 19,  98 => 18,  93 => 20,  90 => 25,  86 => 15,  82 => 13,  71 => 12,  63 => 14,  54 => 12,  49 => 9,  44 => 9,  41 => 8,  38 => 7,  32 => 4,  29 => 5,  26 => 2,);
    }
}
