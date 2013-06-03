<?php

/* showcasebox\index\item.tpl */
class __TwigTemplate_ff369691ab707a402ae20cbb25211401 extends Twig_Template
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
        echo "<div class=\"carousel-inner\">
\t";
        // line 2
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_items_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "\t<div class=\"item ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "first")) {
                echo "active";
            }
            echo "\">
\t\t<a href=\"";
            // line 4
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_item_, "seo")));
            echo "\" title=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "name");
            echo "\">
\t\t\t<img src=\"";
            // line 5
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "photo");
            echo "\" alt=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "name");
            echo "\"/>
\t\t</a>
\t\t<div class=\"carousel-caption\">
\t\t\t<a href=\"";
            // line 8
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_item_, "seo")));
            echo "\" title=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "name");
            echo "\">
\t\t\t\t<h2>";
            // line 9
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "name");
            echo "</h2>
\t\t\t</a>
\t\t\t";
            // line 11
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ((($this->getAttribute($_item_, "discountprice") != null) && ($this->getAttribute($_item_, "discountprice") != $this->getAttribute($_item_, "price")))) {
                // line 12
                echo "\t\t\t<p class=\"price promo\">";
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
\t\t\t";
            } else {
                // line 14
                echo "\t\t\t<p class=\"price\">";
                if (isset($context["showtax"])) { $_showtax_ = $context["showtax"]; } else { $_showtax_ = null; }
                if (($_showtax_ == 0)) {
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo Gekosale\Template::priceFormat($this->getAttribute($_item_, "pricenetto"));
                } else {
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo Gekosale\Template::priceFormat($this->getAttribute($_item_, "price"));
                }
                echo "</p>
\t\t\t";
            }
            // line 16
            echo "\t\t\t<a class=\"btn btn-primary\" onclick=\"xajax_doQuickAddCart(";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "id");
            echo ");return false;\" href=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_item_, "seo")));
            echo "\"><i class=\"icon-shopping-cart icon-white\"></i> Do koszyka</a>
\t\t</div>
\t</div>
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "</div>
<a class=\"left carousel-control\" href=\"#myCarousel\"\tdata-slide=\"prev\"></a> 
<a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"></a>";
    }

    public function getTemplateName()
    {
        return "showcasebox\\index\\item.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 20,  116 => 16,  81 => 12,  78 => 11,  72 => 9,  64 => 8,  54 => 5,  46 => 4,  20 => 2,  33 => 2,  27 => 2,  18 => 1,  112 => 20,  109 => 19,  103 => 14,  90 => 16,  80 => 14,  77 => 13,  57 => 10,  53 => 9,  44 => 8,  41 => 7,  38 => 3,  32 => 4,  29 => 3,  26 => 2,  195 => 44,  189 => 43,  185 => 41,  179 => 40,  176 => 39,  160 => 36,  153 => 35,  150 => 34,  137 => 32,  132 => 31,  124 => 30,  121 => 29,  115 => 28,  111 => 27,  101 => 24,  94 => 23,  86 => 15,  83 => 21,  79 => 20,  74 => 19,  70 => 12,  67 => 16,  63 => 14,  56 => 12,  52 => 11,  50 => 10,  43 => 7,  36 => 6,  28 => 5,  22 => 2,  17 => 1,);
    }
}
