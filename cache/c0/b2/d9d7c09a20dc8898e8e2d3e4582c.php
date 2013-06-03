<?php

/* productnewsbox\index\index.tpl */
class __TwigTemplate_c0b2d9d7c09a20dc8898e8e2d3e4582c extends Twig_Template
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
        return array (  74 => 17,  71 => 16,  67 => 15,  61 => 13,  58 => 12,  51 => 10,  47 => 8,  39 => 6,  36 => 5,  68 => 15,  50 => 13,  45 => 12,  35 => 6,  139 => 20,  116 => 16,  81 => 12,  78 => 11,  72 => 9,  64 => 14,  54 => 11,  46 => 4,  20 => 2,  17 => 1,  112 => 20,  109 => 19,  103 => 14,  90 => 16,  86 => 15,  80 => 14,  77 => 13,  70 => 12,  57 => 10,  53 => 9,  44 => 8,  41 => 7,  38 => 3,  32 => 4,  29 => 3,  26 => 2,);
    }
}
