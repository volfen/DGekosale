<?php

/* productbox/index/info_tabs.tpl */
class __TwigTemplate_2699384e16c7ad45f39137fee930e19b extends Twig_Template
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
        echo "\t<ul id=\"productTab\" class=\"nav nav-tabs\">
\t\t";
        // line 2
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if (($this->getAttribute($_product_, "description") != "")) {
            echo " 
\t\t<li class=\"active\"><a href=\"#product-description\" data-toggle=\"tab\">";
            // line 3
            echo Gekosale\Translation::get("TXT_DESCRIPTION");
            echo "</a></li>
\t\t";
        }
        // line 5
        echo "\t\t";
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if (($this->getAttribute($_product_, "longdescription") != "")) {
            echo " 
\t\t<li><a href=\"#product-longdescription\" data-toggle=\"tab\">";
            // line 6
            echo Gekosale\Translation::get("TXT_ADDITIONAL_INFO");
            echo "</a></li>
\t\t";
        }
        // line 8
        echo "\t\t";
        if (isset($context["files"])) { $_files_ = $context["files"]; } else { $_files_ = null; }
        if ((twig_length_filter($this->env, $_files_) > 0)) {
            // line 9
            echo "\t\t<li><a href=\"#files\" data-toggle=\"tab\">";
            echo Gekosale\Translation::get("TXT_FILES");
            echo "</a></li>
\t\t";
        }
        // line 11
        echo "\t\t<li><a href=\"#reviews\" data-toggle=\"tab\">Opinie</a></li>
\t</ul>
\t<div id=\"productTabContent\" class=\"tab-content\">
\t";
        // line 14
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if (($this->getAttribute($_product_, "description") != "")) {
            echo " 
\t<div class=\"tab-pane fade active in product-details\" id=\"product-description\" itemprop=\"description\">
\t\t";
            // line 16
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo $this->getAttribute($_product_, "description");
            echo "
\t</div>
\t";
        }
        // line 19
        echo "\t";
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if (($this->getAttribute($_product_, "longdescription") != "")) {
            echo " 
\t<div class=\"tab-pane fade product-details\" id=\"product-longdescription\">
\t\t";
            // line 21
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo $this->getAttribute($_product_, "longdescription");
            echo "
\t</div>
\t";
        }
        // line 24
        echo "\t";
        if (isset($context["files"])) { $_files_ = $context["files"]; } else { $_files_ = null; }
        if ((twig_length_filter($this->env, $_files_) > 0)) {
            // line 25
            echo "\t<div class=\"tab-pane fade product-details\" id=\"files\">
\t\t";
            // line 26
            $this->env->loadTemplate("productbox/index/files.tpl")->display($context);
            // line 27
            echo "\t</div>
\t";
        }
        // line 29
        echo "\t<div class=\"tab-pane fade product-details\" id=\"reviews\">
\t\t";
        // line 30
        $this->env->loadTemplate("productbox/index/opinions.tpl")->display($context);
        // line 31
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "productbox/index/info_tabs.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  99 => 30,  96 => 29,  92 => 27,  90 => 26,  87 => 25,  83 => 24,  76 => 21,  69 => 19,  62 => 16,  56 => 14,  51 => 11,  45 => 9,  41 => 8,  36 => 6,  30 => 5,  25 => 3,  20 => 2,  17 => 1,);
    }
}
