<?php

/* productnewsbox\index\index.tpl */
class __TwigTemplate_5840775280b0f2d03117844060785729 extends Twig_Template
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
        echo Gekosale\Translation::get("TXT_NEW_PRODUCTS");
        echo "</span>
\t";
        // line 5
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        if (($_CURRENT_CONTROLLER_ != "productnews")) {
            // line 6
            echo "    <a href=\"";
            echo Gekosale\Template::getPathFromRoute("frontend.productnews");
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
        return "productnewsbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  61 => 13,  58 => 12,  39 => 6,  173 => 39,  163 => 34,  156 => 32,  146 => 30,  143 => 29,  140 => 28,  127 => 26,  105 => 24,  102 => 23,  91 => 22,  76 => 16,  51 => 10,  47 => 8,  25 => 3,  24 => 4,  75 => 17,  65 => 14,  62 => 13,  59 => 12,  55 => 11,  48 => 8,  40 => 6,  37 => 5,  68 => 15,  45 => 12,  35 => 6,  139 => 20,  116 => 16,  81 => 12,  78 => 11,  72 => 16,  64 => 14,  54 => 11,  46 => 4,  20 => 2,  33 => 2,  27 => 2,  18 => 1,  112 => 20,  109 => 19,  103 => 14,  90 => 16,  80 => 18,  77 => 13,  57 => 13,  53 => 9,  44 => 8,  41 => 8,  38 => 7,  32 => 4,  29 => 3,  26 => 2,  195 => 44,  189 => 43,  185 => 41,  179 => 40,  176 => 39,  160 => 36,  153 => 35,  150 => 34,  137 => 32,  132 => 31,  124 => 30,  121 => 29,  115 => 28,  111 => 27,  101 => 24,  94 => 23,  86 => 15,  83 => 21,  79 => 20,  74 => 17,  70 => 12,  67 => 15,  63 => 14,  56 => 12,  52 => 10,  50 => 13,  43 => 7,  36 => 5,  28 => 5,  22 => 2,  17 => 1,);
    }
}
