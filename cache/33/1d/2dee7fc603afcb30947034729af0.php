<?php

/* navbar.tpl */
class __TwigTemplate_331d2dee7fc603afcb30947034729af0 extends Twig_Template
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
        echo "<nav class=\"navbar\">
\t<div class=\"navbar-inner\">
    \t<div class=\"container\">
        \t<ul class=\"nav\">
                <li class=\"dropdown ";
        // line 5
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        if ((($_CURRENT_CONTROLLER_ == "categorylist") || ($_CURRENT_CONTROLLER_ == "productcart"))) {
            echo "active";
        }
        echo "\"><a href=\"";
        if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
        echo $this->getAttribute($_cat_, "link");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        echo Gekosale\Translation::get("TXT_PRODUCTS");
        echo " <b class=\"caret\"></b></a>
                \t <ul class=\"dropdown-menu\">
\t\t\t\t\t\t";
        // line 7
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categories_);
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "\t\t\t\t\t\t<li><a href=\"";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo $this->getAttribute($_category_, "link");
            echo "\">";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo $this->getAttribute($_category_, "label");
            echo "</a></li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 10
        echo "                    </ul>
                </li>
                <li class=\"divider-vertical\"></li>
                <li class=\"dropdown ";
        // line 13
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        if (($_CURRENT_CONTROLLER_ == "productpromotion")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo Gekosale\Template::getPathFromRoute("frontend.productpromotion");
        echo "\">";
        echo Gekosale\Translation::get("TXT_PROMOTIONS");
        echo "</a></li>
                <li class=\"divider-vertical\"></li>
                <li class=\"dropdown ";
        // line 15
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        if (($_CURRENT_CONTROLLER_ == "productnews")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo Gekosale\Template::getPathFromRoute("frontend.productnews");
        echo "\">";
        echo Gekosale\Translation::get("TXT_NEW_PRODUCTS");
        echo "</a></li>
                ";
        // line 16
        if (isset($context["contentcategory"])) { $_contentcategory_ = $context["contentcategory"]; } else { $_contentcategory_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_contentcategory_);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            if (($this->getAttribute($_cat_, "header") == 1)) {
                // line 17
                echo "                <li class=\"divider-vertical\"></li>
                <li class=\"dropdown\">
                \t<a href=\"";
                // line 19
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                echo $this->getAttribute($_cat_, "link");
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                echo $this->getAttribute($_cat_, "name");
                echo " <b class=\"caret\"></b></a>
                    ";
                // line 20
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                if ((!twig_test_empty($this->getAttribute($_cat_, "children")))) {
                    // line 21
                    echo "                    <ul class=\"dropdown-menu\">
\t\t\t\t\t\t";
                    // line 22
                    if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_cat_, "children"));
                    foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
                        if (isset($context["subcat"])) { $_subcat_ = $context["subcat"]; } else { $_subcat_ = null; }
                        if (($this->getAttribute($_subcat_, "header") == 1)) {
                            // line 23
                            echo "\t\t\t\t\t\t<li><a href=\"";
                            if (isset($context["subcat"])) { $_subcat_ = $context["subcat"]; } else { $_subcat_ = null; }
                            echo $this->getAttribute($_subcat_, "link");
                            echo "\">";
                            if (isset($context["subcat"])) { $_subcat_ = $context["subcat"]; } else { $_subcat_ = null; }
                            echo $this->getAttribute($_subcat_, "name");
                            echo "</a></li>
\t\t\t\t\t\t";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 25
                    echo "                    </ul>
                    ";
                }
                // line 27
                echo "\t\t\t\t</li>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "\t\t\t</ul>
            <form id=\"product-search\" class=\"navbar-search form-search pull-right\" action=\"";
        // line 30
        echo Gekosale\Template::getPathFromRoute("frontend.productsearch");
        echo "\" method=\"post\">
            \t<div class=\"input-append\">
                \t<input id=\"product-search-phrase\" type=\"text\" class=\"search-query span2\" placeholder=\"Szukaj produktu...\"><button class=\"btn\" type=\"submit\"><i class=\"icon-search\"></i></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</nav>";
    }

    public function getTemplateName()
    {
        return "navbar.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 30,  140 => 29,  132 => 27,  128 => 25,  114 => 23,  107 => 22,  104 => 21,  101 => 20,  93 => 19,  89 => 17,  82 => 16,  71 => 15,  59 => 13,  54 => 10,  41 => 8,  36 => 7,  23 => 5,  17 => 1,);
    }
}
