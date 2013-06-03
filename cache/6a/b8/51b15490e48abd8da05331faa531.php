<?php

/* navbar.tpl */
class __TwigTemplate_6ab851b15490e48abd8da05331faa531 extends Twig_Template
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
                <li class=\"divider-vertical\"></li>
                <li class=\"dropdown ";
        // line 6
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
        // line 8
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categories_);
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
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
        // line 11
        echo "                    </ul>
                </li>
                <li class=\"divider-vertical\"></li>
                <li class=\"dropdown ";
        // line 14
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
        // line 16
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
        // line 17
        if (isset($context["contentcategory"])) { $_contentcategory_ = $context["contentcategory"]; } else { $_contentcategory_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_contentcategory_);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            if (($this->getAttribute($_cat_, "header") == 1)) {
                // line 18
                echo "                <li class=\"divider-vertical\"></li>
                <li class=\"dropdown\">
                \t<a href=\"";
                // line 20
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                echo $this->getAttribute($_cat_, "link");
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                echo $this->getAttribute($_cat_, "name");
                echo " <b class=\"caret\"></b></a>
                    ";
                // line 21
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                if ((!twig_test_empty($this->getAttribute($_cat_, "children")))) {
                    // line 22
                    echo "                    <ul class=\"dropdown-menu\">
\t\t\t\t\t\t";
                    // line 23
                    if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_cat_, "children"));
                    foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
                        if (isset($context["subcat"])) { $_subcat_ = $context["subcat"]; } else { $_subcat_ = null; }
                        if (($this->getAttribute($_subcat_, "header") == 1)) {
                            // line 24
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
                    // line 26
                    echo "                    </ul>
                    ";
                }
                // line 28
                echo "\t\t\t\t</li>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "\t\t\t</ul>
            <form id=\"product-search\" class=\"navbar-search form-search pull-right\" action=\"";
        // line 31
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
        return array (  144 => 31,  141 => 30,  133 => 28,  129 => 26,  115 => 24,  108 => 23,  105 => 22,  102 => 21,  94 => 20,  90 => 18,  83 => 17,  72 => 16,  60 => 14,  55 => 11,  42 => 9,  37 => 8,  24 => 6,  17 => 1,);
    }
}
