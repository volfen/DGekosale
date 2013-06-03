<?php

/* header.tpl */
class __TwigTemplate_03f97368af6e41cc04099520d8640c97 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        if (isset($context["languageCode"])) { $_languageCode_ = $context["languageCode"]; } else { $_languageCode_ = null; }
        echo $_languageCode_;
        echo "\">
<head>
    ";
        // line 4
        $this->env->loadTemplate("meta.tpl")->display($context);
        // line 5
        echo "\t<link rel=\"shortcut icon\" href=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_frontend/core/logos/";
        if (isset($context["FAVICON"])) { $_FAVICON_ = $context["FAVICON"]; } else { $_FAVICON_ = null; }
        echo $_FAVICON_;
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo Gekosale\Template::getCSSAsset("css/bootstrap.css");
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet/less\" href=\"";
        // line 7
        echo Gekosale\Template::getCSSAsset("css/mixins.less");
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet/less\" href=\"";
        // line 8
        echo Gekosale\Template::getCSSAsset("css/application.less");
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo Gekosale\Template::getCSSAsset("css/smoothness/jquery-ui-1.8.21.custom.css");
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet/less\" href=\"";
        // line 10
        echo Gekosale\Template::getCSSAsset("css/scheme.less");
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo Gekosale\Template::getCSSAsset("css/style.css");
        echo "\" type=\"text/css\"/>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 19
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "ico/apple-touch-icon-144-precomposed.png\" sizes=\"144x144\" >
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 20
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "ico/apple-touch-icon-114-precomposed.png\" sizes=\"114x114\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 21
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "ico/apple-touch-icon-72-precomposed.png\" sizes=\"72x72\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 22
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "ico/apple-touch-icon-57-precomposed.png\">
\t<!--[if IE]>
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo Gekosale\Template::getCSSAsset("css/ie.css");
        echo "\" type=\"text/css\"/>
    <![endif]-->
    ";
        // line 26
        $this->env->loadTemplate("javascript.tpl")->display($context);
        // line 27
        echo "</head>

<body>
\t<div id=\"fb-root\"></div>
    <div class=\"container\">
        <header class=\"header\">
            <div class=\"row\">
                <div class=\"span5\">
                    <h1><a href=\"";
        // line 35
        echo Gekosale\Template::getPathFromRoute("frontend.mainside");
        echo "\" title=\"";
        if (isset($context["SHOP_NAME"])) { $_SHOP_NAME_ = $context["SHOP_NAME"]; } else { $_SHOP_NAME_ = null; }
        echo $_SHOP_NAME_;
        echo "\">";
        if (isset($context["SHOP_NAME"])) { $_SHOP_NAME_ = $context["SHOP_NAME"]; } else { $_SHOP_NAME_ = null; }
        echo $_SHOP_NAME_;
        echo "</a></h1>
                </div>
                <div class=\"span7\">
                    <div class=\"row pull-right\">
                    \t";
        // line 39
        if (isset($context["currencies"])) { $_currencies_ = $context["currencies"]; } else { $_currencies_ = null; }
        if ((twig_length_filter($this->env, $_currencies_) > 1)) {
            // line 40
            echo "                        <div class=\"span2\">
                            <form class=\"form-inline nomargin pull-right\">
                                <fieldset>
                                    <label class=\"control-label\" for=\"waluta\">";
            // line 43
            echo Gekosale\Translation::get("TXT_KIND_OF_CURRENCY");
            echo ":</label>
                                    <select class=\"span1\" id=\"waluta\" onchange=\"xajax_changeCurrency(this.value);\">
                                    ";
            // line 45
            if (isset($context["currencies"])) { $_currencies_ = $context["currencies"]; } else { $_currencies_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_currencies_);
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 46
                echo "\t\t\t\t\t \t\t\t\t\t<option value=\"";
                if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
                echo $this->getAttribute($_currency_, "id");
                echo "\" ";
                if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
                if (($this->getAttribute($_currency_, "selected") == 1)) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
                echo $this->getAttribute($_currency_, "name");
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 48
            echo "                                    </select>
                                </fieldset>
                            </form>
                        </div>
                        ";
        }
        // line 53
        echo "                        ";
        if (isset($context["languageFlag"])) { $_languageFlag_ = $context["languageFlag"]; } else { $_languageFlag_ = null; }
        if ((twig_length_filter($this->env, $_languageFlag_) > 1)) {
            // line 54
            echo "                        <div class=\"span2\">
                            <div class=\"change\">
                                <span class=\"lang\">";
            // line 56
            echo Gekosale\Translation::get("TXT_LANGUAGE");
            echo ":</span>
                                ";
            // line 57
            if (isset($context["languageFlag"])) { $_languageFlag_ = $context["languageFlag"]; } else { $_languageFlag_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_languageFlag_);
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 58
                echo "                                <a href=\"#\" onclick=\"xajax_changeLanguage(";
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                echo $this->getAttribute($_language_, "id");
                echo ");\" title=\"";
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                echo $this->getAttribute($_language_, "name");
                echo "\" class=\"lang ";
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                if (($this->getAttribute($_language_, "active") == 1)) {
                    echo "active";
                }
                echo "\"><img src=\"";
                if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
                echo $_DESIGNPATH_;
                echo "_images_common/icons/languages/";
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                echo $this->getAttribute($_language_, "icon");
                echo "\" alt=\"";
                if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
                echo $this->getAttribute($_language_, "name");
                echo "\"></a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 60
            echo "                            </div>
                        </div>
                        ";
        }
        // line 63
        echo "                        <div class=\"span3 nomargin\">
                            <ul class=\"nav nav-pills nomargin pull-right\">
                            ";
        // line 65
        if (isset($context["clientdata"])) { $_clientdata_ = $context["clientdata"]; } else { $_clientdata_ = null; }
        if ((!twig_test_empty($_clientdata_))) {
            // line 66
            echo "                            \t<li><a class=\"dropdown-toggle\" href=\"";
            echo Gekosale\Template::getPathFromRoute("frontend.clientorder");
            echo "\" title=\"\">";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            if ($this->getAttribute($_client_, "firstname", array(), "any", true, true)) {
                if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
                echo $this->getAttribute($_client_, "firstname");
                echo " ";
                if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
                echo $this->getAttribute($_client_, "surname");
            } else {
                if (isset($context["clientdata"])) { $_clientdata_ = $context["clientdata"]; } else { $_clientdata_ = null; }
                echo $this->getAttribute($_clientdata_, "firstname");
                echo " ";
                if (isset($context["clientdata"])) { $_clientdata_ = $context["clientdata"]; } else { $_clientdata_ = null; }
                echo $this->getAttribute($_clientdata_, "surname");
            }
            echo "</a></li>
                                <li><a href=\"";
            // line 67
            echo Gekosale\Template::getPathFromRoute("frontend.logout");
            echo "\" title=\"";
            echo Gekosale\Translation::get("TXT_LOGOUT");
            echo "\">";
            echo Gekosale\Translation::get("TXT_LOGOUT");
            echo "</a></li>
                            ";
        } else {
            // line 69
            echo "                                <li id=\"loginTop\">
                                    <a class=\"dropdown-toggle\" href=\"";
            // line 70
            echo Gekosale\Template::getPathFromRoute("frontend.clientlogin");
            echo "\" title=\"\">Logowanie <b class=\"caret\"></b></a>
                                    <div id=\"loginTopContent\">
                                        <h4 class=\"font\">Logowane</h4>
                                        ";
            // line 73
            $this->env->loadTemplate("quicklogin.tpl")->display($context);
            // line 74
            echo "                                    </div>
                                </li>
                                <li><a href=\"";
            // line 76
            echo Gekosale\Template::getPathFromRoute("frontend.registration");
            echo "\" title=\"\">Rejestracja</a></li>
                                ";
        }
        // line 78
        echo "                            </ul>
                        </div>
                    </div>
                    <div class=\"row pull-right\">
                    \t";
        // line 82
        if (isset($context["defaultcontact"])) { $_defaultcontact_ = $context["defaultcontact"]; } else { $_defaultcontact_ = null; }
        if ((!twig_test_empty($_defaultcontact_))) {
            // line 83
            echo "                        <div class=\"span3 contact nomargin\"><a href=\"";
            echo Gekosale\Template::getPathFromRoute("frontend.contact");
            echo "\" title=\"";
            if (isset($context["defaultcontact"])) { $_defaultcontact_ = $context["defaultcontact"]; } else { $_defaultcontact_ = null; }
            echo $this->getAttribute($_defaultcontact_, "name");
            echo "\" class=\"email\">";
            if (isset($context["defaultcontact"])) { $_defaultcontact_ = $context["defaultcontact"]; } else { $_defaultcontact_ = null; }
            echo $this->getAttribute($_defaultcontact_, "email");
            echo "</a></div>
                        <div class=\"span2 phone nomargin\">
                            <h3 class=\"font\">";
            // line 85
            if (isset($context["defaultcontact"])) { $_defaultcontact_ = $context["defaultcontact"]; } else { $_defaultcontact_ = null; }
            echo $this->getAttribute($_defaultcontact_, "phone");
            echo "</h3>
                            ";
            // line 86
            if (isset($context["defaultcontact"])) { $_defaultcontact_ = $context["defaultcontact"]; } else { $_defaultcontact_ = null; }
            if (($this->getAttribute($_defaultcontact_, "businesshours") != "")) {
                echo "<span>";
                if (isset($context["defaultcontact"])) { $_defaultcontact_ = $context["defaultcontact"]; } else { $_defaultcontact_ = null; }
                echo $this->getAttribute($_defaultcontact_, "businesshours");
                echo "</span>";
            }
            // line 87
            echo "                        </div>
                        ";
        }
        // line 89
        echo "                        <div class=\"span3 nomargin pull-right\">
                            <div id=\"topBasket\">
\t\t\t\t\t\t\t";
        // line 91
        if (isset($context["cartpreview"])) { $_cartpreview_ = $context["cartpreview"]; } else { $_cartpreview_ = null; }
        echo $_cartpreview_;
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        ";
        // line 99
        $this->env->loadTemplate("navbar.tpl")->display($context);
        // line 100
        echo "\t\t";
        $this->env->loadTemplate("breadcrumb.tpl")->display($context);
        // line 101
        echo "       ";
    }

    public function getTemplateName()
    {
        return "header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 101,  323 => 100,  321 => 99,  309 => 91,  305 => 89,  301 => 87,  293 => 86,  288 => 85,  276 => 83,  273 => 82,  267 => 78,  262 => 76,  258 => 74,  256 => 73,  250 => 70,  247 => 69,  238 => 67,  218 => 66,  215 => 65,  211 => 63,  206 => 60,  179 => 58,  174 => 57,  170 => 56,  166 => 54,  162 => 53,  155 => 48,  137 => 46,  132 => 45,  127 => 43,  122 => 40,  119 => 39,  106 => 35,  96 => 27,  94 => 26,  89 => 24,  83 => 22,  78 => 21,  73 => 20,  68 => 19,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  28 => 5,  26 => 4,  20 => 2,  17 => 1,);
    }
}
