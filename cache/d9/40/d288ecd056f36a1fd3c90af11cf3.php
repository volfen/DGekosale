<?php

/* productpromotionsbox\index\index.tpl */
class __TwigTemplate_d940d288ecd056f36a1fd3c90af11cf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layoutbox.tpl");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutbox.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"head-block\">
\t<span class=\"font\">";
        // line 4
        if (isset($context["box"])) { $_box_ = $context["box"]; } else { $_box_ = null; }
        echo $this->getAttribute($_box_, "heading");
        echo "</span>
\t";
        // line 5
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        if (($_CURRENT_CONTROLLER_ == "mainside")) {
            // line 6
            echo "    <a href=\"";
            echo Gekosale\Template::getPathFromRoute("frontend.productpromotion");
            echo "\" class=\"pull-right\">";
            echo Gekosale\Translation::get("TXT_SHOW_ALL");
            echo " <i class=\"icon-arrow-right-blue\"></i></a>
    ";
        }
        // line 8
        echo "</div>

";
        // line 10
        if (isset($context["dataset"])) { $_dataset_ = $context["dataset"]; } else { $_dataset_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_dataset_, "rows")) > 0)) {
            // line 11
            echo "\t";
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            if (($_pagination_ == 1)) {
                // line 12
                echo "\t\t";
                $this->env->loadTemplate("pagination.tpl")->display($context);
                // line 13
                echo "\t";
            }
            // line 14
            echo "\t";
            $this->env->loadTemplate("products.tpl")->display($context);
            // line 15
            echo "\t";
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            if (($_pagination_ == 1)) {
                // line 16
                echo "\t\t";
                $this->env->loadTemplate("pagination.tpl")->display($context);
                // line 17
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "productpromotionsbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  55 => 11,  48 => 8,  42 => 8,  20 => 2,  30 => 4,  25 => 3,  111 => 19,  107 => 18,  103 => 16,  75 => 17,  21 => 3,  209 => 43,  191 => 40,  186 => 39,  169 => 38,  166 => 37,  159 => 35,  153 => 33,  147 => 32,  144 => 31,  140 => 29,  127 => 27,  122 => 26,  114 => 25,  109 => 24,  106 => 23,  96 => 21,  84 => 17,  58 => 11,  46 => 8,  34 => 7,  87 => 32,  70 => 13,  65 => 14,  62 => 13,  54 => 18,  51 => 17,  49 => 16,  45 => 14,  31 => 6,  23 => 5,  90 => 17,  81 => 31,  68 => 15,  63 => 10,  41 => 7,  35 => 6,  19 => 2,  33 => 2,  27 => 6,  18 => 1,  85 => 26,  78 => 30,  76 => 20,  69 => 15,  67 => 17,  53 => 12,  47 => 9,  44 => 10,  40 => 6,  37 => 5,  32 => 4,  29 => 3,  26 => 2,  173 => 37,  167 => 36,  163 => 34,  157 => 33,  154 => 32,  138 => 29,  131 => 28,  128 => 27,  115 => 25,  110 => 24,  102 => 23,  99 => 22,  93 => 21,  89 => 18,  79 => 17,  72 => 16,  64 => 15,  61 => 15,  57 => 19,  52 => 10,  43 => 7,  36 => 6,  28 => 4,  22 => 2,  17 => 1,);
    }
}
