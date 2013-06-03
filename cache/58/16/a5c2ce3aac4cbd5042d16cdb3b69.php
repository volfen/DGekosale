<?php

/* header.tpl */
class __TwigTemplate_5816a5c2ce3aac4cbd5042d16cdb3b69 extends Twig_Template
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

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 17
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "ico/apple-touch-icon-144-precomposed.png\" sizes=\"144x144\" >
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 18
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "ico/apple-touch-icon-114-precomposed.png\" sizes=\"114x114\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 19
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "ico/apple-touch-icon-72-precomposed.png\" sizes=\"72x72\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 20
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "ico/apple-touch-icon-57-precomposed.png\">
\t<!--[if IE]>
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo Gekosale\Template::getCSSAsset("css/ie.css");
        echo "\" type=\"text/css\"/>
    <![endif]-->
    ";
        // line 24
        $this->env->loadTemplate("javascript.tpl")->display($context);
        // line 25
        echo "</head>

<body>
\t<div id=\"fb-root\"></div>
    <div class=\"container\">
        <header class=\"header\">
            <div class=\"row\">
                <div class=\"span5\">
                    <h1><a href=\"";
        // line 33
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
        // line 37
        if (isset($context["currencies"])) { $_currencies_ = $context["currencies"]; } else { $_currencies_ = null; }
        if ((twig_length_filter($this->env, $_currencies_) > 1)) {
            // line 38
            echo "                        <div class=\"span2\">
                            <form class=\"form-inline nomargin pull-right\">
                                <fieldset>
                                    <label class=\"control-label\" for=\"waluta\">";
            // line 41
            echo Gekosale\Translation::get("TXT_KIND_OF_CURRENCY");
            echo ":</label>
                                    <select class=\"span1\" id=\"waluta\" onchange=\"xajax_changeCurrency(this.value);\">
                                    ";
            // line 43
            if (isset($context["currencies"])) { $_currencies_ = $context["currencies"]; } else { $_currencies_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_currencies_);
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 44
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
            // line 46
            echo "                                    </select>
                                </fieldset>
                            </form>
                        </div>
                        ";
        }
        // line 51
        echo "                        ";
        if (isset($context["languageFlag"])) { $_languageFlag_ = $context["languageFlag"]; } else { $_languageFlag_ = null; }
        if ((twig_length_filter($this->env, $_languageFlag_) > 1)) {
            // line 52
            echo "                        <div class=\"span2\">
                            <div class=\"change\">
                                <span class=\"lang\">";
            // line 54
            echo Gekosale\Translation::get("TXT_LANGUAGE");
            echo ":</span>
                                ";
            // line 55
            if (isset($context["languageFlag"])) { $_languageFlag_ = $context["languageFlag"]; } else { $_languageFlag_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_languageFlag_);
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 56
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
            // line 58
            echo "                            </div>
                        </div>
                        ";
        }
        // line 61
        echo "                        <div class=\"span3 nomargin\">
                            <ul class=\"nav nav-pills nomargin pull-right\">
                            ";
        // line 63
        if (isset($context["clientdata"])) { $_clientdata_ = $context["clientdata"]; } else { $_clientdata_ = null; }
        if ((!twig_test_empty($_clientdata_))) {
            // line 64
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
            // line 65
            echo Gekosale\Template::getPathFromRoute("frontend.logout");
            echo "\" title=\"";
            echo Gekosale\Translation::get("TXT_LOGOUT");
            echo "\">";
            echo Gekosale\Translation::get("TXT_LOGOUT");
            echo "</a></li>
                            ";
        } else {
            // line 67
            echo "                                <li><a href=\"";
            echo Gekosale\Template::getPathFromRoute("frontend.clientlogin");
            echo "\" title=\"\">Logowanie</a></li>
                                <li><a href=\"";
            // line 68
            echo Gekosale\Template::getPathFromRoute("frontend.registration");
            echo "\" title=\"\">Rejestracja</a></li>
                                ";
        }
        // line 70
        echo "                            </ul>
                        </div>
                    </div>
                    <div class=\"row pull-right\">
                        <div class=\"span3 nomargin pull-right\">
                            <div id=\"topBasket\">
\t\t\t\t\t\t\t";
        // line 76
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
        // line 84
        $this->env->loadTemplate("navbar.tpl")->display($context);
        // line 85
        echo "\t\t";
        $this->env->loadTemplate("breadcrumb.tpl")->display($context);
        // line 86
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
        return array (  274 => 86,  271 => 85,  269 => 84,  257 => 76,  249 => 70,  244 => 68,  239 => 67,  230 => 65,  210 => 64,  207 => 63,  203 => 61,  198 => 58,  171 => 56,  166 => 55,  162 => 54,  158 => 52,  154 => 51,  147 => 46,  129 => 44,  124 => 43,  119 => 41,  114 => 38,  111 => 37,  98 => 33,  88 => 25,  86 => 24,  81 => 22,  75 => 20,  70 => 19,  65 => 18,  60 => 17,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  28 => 5,  26 => 4,  20 => 2,  17 => 1,);
    }
}
