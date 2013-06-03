<?php

/* meta.tpl */
class __TwigTemplate_d9aeff40e717cb108c1467ce19a3e0d3 extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
<title>";
        // line 2
        if (isset($context["metadata"])) { $_metadata_ = $context["metadata"]; } else { $_metadata_ = null; }
        if (($this->getAttribute($_metadata_, "keyword_title") != "")) {
            if (isset($context["metadata"])) { $_metadata_ = $context["metadata"]; } else { $_metadata_ = null; }
            echo $this->getAttribute($_metadata_, "keyword_title");
        }
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        if (($_CURRENT_CONTROLLER_ != "mainside")) {
            echo " - ";
            if (isset($context["SHOP_NAME"])) { $_SHOP_NAME_ = $context["SHOP_NAME"]; } else { $_SHOP_NAME_ = null; }
            echo $_SHOP_NAME_;
        }
        echo "</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta http-equiv=\"author\" content=\"WellCommerce; http://www.wellcommerce.pl\"/>
<meta name=\"description\" content=\"";
        // line 5
        if (isset($context["metadata"])) { $_metadata_ = $context["metadata"]; } else { $_metadata_ = null; }
        echo $this->getAttribute($_metadata_, "keyword_description");
        echo "\"/>
<meta name=\"keywords\" content=\"";
        // line 6
        if (isset($context["metadata"])) { $_metadata_ = $context["metadata"]; } else { $_metadata_ = null; }
        echo $this->getAttribute($_metadata_, "keyword");
        echo "\"/>
<meta name=\"revisit-after\" content=\"1 Day\" />
<meta http-equiv=\"content-language\" content=\"";
        // line 8
        if (isset($context["languageCode"])) { $_languageCode_ = $context["languageCode"]; } else { $_languageCode_ = null; }
        echo $_languageCode_;
        echo "\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=9\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
";
        // line 11
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        if (($_CURRENT_CONTROLLER_ == "productcart")) {
            // line 12
            echo "<meta property=\"og:title\" content=\"";
            if (isset($context["metadata"])) { $_metadata_ = $context["metadata"]; } else { $_metadata_ = null; }
            if (($this->getAttribute($_metadata_, "keyword_title") != "")) {
                if (isset($context["metadata"])) { $_metadata_ = $context["metadata"]; } else { $_metadata_ = null; }
                echo $this->getAttribute($_metadata_, "keyword_title");
            }
            if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
            if (($_CURRENT_CONTROLLER_ != "mainside")) {
                echo " - ";
                if (isset($context["SHOP_NAME"])) { $_SHOP_NAME_ = $context["SHOP_NAME"]; } else { $_SHOP_NAME_ = null; }
                echo $_SHOP_NAME_;
            }
            echo "\"/>
<meta property=\"og:url\" content=\"";
            // line 13
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_product_, "seo")));
            echo "\"/>
<meta property=\"og:image\" content=\"";
            // line 14
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo $this->getAttribute($this->getAttribute($_product_, "mainphoto"), "normal");
            echo "\"/>
<meta property=\"og:type\" content=\"product\"/>
<meta property=\"og:site_name\" content=\"";
            // line 16
            if (isset($context["SHOP_NAME"])) { $_SHOP_NAME_ = $context["SHOP_NAME"]; } else { $_SHOP_NAME_ = null; }
            echo $_SHOP_NAME_;
            echo "\"/>
";
        }
        // line 18
        if (isset($context["additionalmeta"])) { $_additionalmeta_ = $context["additionalmeta"]; } else { $_additionalmeta_ = null; }
        echo $_additionalmeta_;
    }

    public function getTemplateName()
    {
        return "meta.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 18,  83 => 16,  77 => 14,  72 => 13,  57 => 12,  54 => 11,  47 => 8,  41 => 6,  36 => 5,  20 => 2,  17 => 1,);
    }
}
