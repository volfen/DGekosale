<?php

/* meta.tpl */
class __TwigTemplate_bd08b1fd9b63bad8047e41294ff5fa86 extends Twig_Template
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
        return array (  77 => 14,  326 => 101,  323 => 100,  321 => 99,  309 => 91,  305 => 89,  301 => 87,  293 => 86,  288 => 85,  276 => 83,  273 => 82,  267 => 78,  262 => 76,  258 => 74,  256 => 73,  250 => 70,  247 => 69,  238 => 67,  218 => 66,  215 => 65,  211 => 63,  206 => 60,  179 => 58,  174 => 57,  170 => 56,  162 => 53,  155 => 48,  137 => 46,  132 => 45,  119 => 39,  94 => 26,  83 => 16,  73 => 20,  156 => 32,  146 => 30,  143 => 29,  105 => 24,  91 => 22,  80 => 18,  38 => 6,  24 => 4,  59 => 12,  55 => 11,  48 => 8,  42 => 8,  20 => 2,  30 => 4,  25 => 3,  111 => 19,  107 => 18,  103 => 16,  75 => 17,  21 => 3,  209 => 43,  191 => 40,  186 => 39,  169 => 38,  166 => 54,  159 => 35,  153 => 33,  147 => 32,  144 => 31,  140 => 28,  127 => 43,  122 => 40,  114 => 25,  109 => 24,  106 => 35,  96 => 27,  84 => 17,  58 => 11,  46 => 8,  34 => 7,  87 => 32,  70 => 13,  65 => 14,  62 => 13,  54 => 11,  51 => 11,  49 => 9,  45 => 8,  31 => 6,  23 => 5,  90 => 17,  81 => 31,  68 => 19,  63 => 14,  41 => 6,  35 => 6,  19 => 2,  33 => 6,  27 => 6,  18 => 1,  85 => 26,  78 => 21,  76 => 16,  69 => 15,  67 => 17,  53 => 10,  47 => 8,  44 => 10,  40 => 6,  37 => 6,  32 => 4,  29 => 3,  26 => 4,  173 => 39,  167 => 36,  163 => 34,  157 => 33,  154 => 32,  138 => 29,  131 => 28,  128 => 27,  115 => 25,  110 => 24,  102 => 23,  99 => 22,  93 => 21,  89 => 18,  79 => 17,  72 => 13,  64 => 15,  61 => 15,  57 => 12,  52 => 10,  43 => 7,  36 => 5,  28 => 5,  22 => 3,  17 => 1,);
    }
}
