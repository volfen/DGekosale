<?php

/* header_checkout.tpl */
class __TwigTemplate_fb193e7c8d990d8c1735a81400d9a491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
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
    <link rel=\"shortcut icon\" href=\"ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 20
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "ico/apple-touch-icon-144-precomposed.png\" sizes=\"144x144\" >
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 21
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "ico/apple-touch-icon-114-precomposed.png\" sizes=\"114x114\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 22
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "ico/apple-touch-icon-72-precomposed.png\" sizes=\"72x72\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 23
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "ico/apple-touch-icon-57-precomposed.png\">
    ";
        // line 24
        $this->env->loadTemplate("javascript.tpl")->display($context);
        // line 25
        echo "    <!--[if IE]>
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo Gekosale\Template::getCSSAsset("css/ie.css");
        echo "\" type=\"text/css\"/>
    <![endif]-->
    ";
        // line 28
        if (isset($context["gacode"])) { $_gacode_ = $context["gacode"]; } else { $_gacode_ = null; }
        if (($_gacode_ != "")) {
            // line 29
            echo "\t<script type=\"text/javascript\">
\t    var _gaq = _gaq || [];
\t    _gaq.push(['_setAccount', '";
            // line 31
            if (isset($context["gacode"])) { $_gacode_ = $context["gacode"]; } else { $_gacode_ = null; }
            echo $_gacode_;
            echo "']);
\t    _gaq.push(['_trackPageview']);
\t    _gaq.push(['_trackPageLoadTime']);
\t</script>
\t";
        }
        // line 36
        echo "\t<script type=\"text/javascript\">
\t\tnew GCore({
\t\t\tiCookieLifetime: 30,
\t\t\tsDesignPath: '";
        // line 39
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "',
\t\t\tsAssetsPath: '";
        // line 40
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "',
\t\t\tsController: '";
        // line 41
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "',
\t\t\tsCartRedirect: '";
        // line 42
        if (isset($context["cartredirect"])) { $_cartredirect_ = $context["cartredirect"]; } else { $_cartredirect_ = null; }
        echo $_cartredirect_;
        echo "'
\t\t});

\t\t\$(document).ready(function(){
\t\t\t\$('#product-search').submit(function(){
\t\t\t\tvar query = Base64.encode(\$('#product-search-phrase').val());
\t\t\t\tvar url = '";
        // line 48
        echo Gekosale\Template::getPathFromRoute("frontend.productsearch");
        echo "/' + query;
\t\t\t\twindow.location.href = url;
\t\t\t\treturn false;
\t\t\t});
\t\t});
\t</script>
\t";
        // line 54
        if (isset($context["xajax"])) { $_xajax_ = $context["xajax"]; } else { $_xajax_ = null; }
        echo $_xajax_;
        echo "
\t";
        // line 55
        if (array_key_exists("error", $context)) {
            // line 56
            echo "\t<script type=\"text/javascript\">
\t\t\$(document).ready(function(){
\t\t\tGError('";
            // line 58
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo $_error_;
            echo "');
\t\t});
\t</script>
\t";
        }
        // line 62
        echo "</head>

<body>
    <div class=\"container\">
    \t";
        // line 66
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "header_checkout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 66,  166 => 58,  160 => 55,  155 => 54,  146 => 48,  136 => 42,  131 => 41,  126 => 40,  121 => 39,  116 => 36,  103 => 29,  100 => 28,  95 => 26,  90 => 24,  75 => 21,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  27 => 4,  21 => 2,  78 => 14,  70 => 20,  62 => 8,  38 => 6,  33 => 24,  22 => 19,  18 => 1,  512 => 86,  504 => 85,  490 => 84,  473 => 81,  461 => 79,  448 => 74,  439 => 73,  411 => 70,  408 => 69,  403 => 68,  394 => 66,  391 => 65,  379 => 63,  358 => 57,  355 => 56,  336 => 54,  331 => 53,  323 => 52,  301 => 49,  276 => 42,  268 => 41,  252 => 40,  243 => 38,  231 => 36,  218 => 31,  210 => 30,  196 => 29,  182 => 27,  174 => 62,  162 => 56,  149 => 19,  141 => 18,  127 => 17,  118 => 15,  106 => 13,  93 => 8,  85 => 23,  71 => 6,  57 => 4,  49 => 4,  37 => 1,  32 => 78,  29 => 5,  26 => 21,  20 => 23,  17 => 12,  501 => 223,  493 => 219,  481 => 82,  469 => 203,  463 => 200,  457 => 199,  450 => 197,  441 => 193,  435 => 192,  412 => 174,  406 => 173,  396 => 168,  386 => 163,  376 => 158,  366 => 58,  353 => 145,  343 => 140,  335 => 137,  325 => 132,  317 => 129,  309 => 50,  299 => 121,  289 => 47,  281 => 113,  271 => 108,  257 => 99,  247 => 94,  239 => 91,  229 => 86,  221 => 83,  213 => 80,  203 => 75,  195 => 72,  187 => 70,  179 => 67,  171 => 64,  163 => 61,  153 => 55,  139 => 54,  124 => 43,  107 => 31,  99 => 28,  92 => 25,  86 => 25,  80 => 22,  69 => 17,  55 => 16,  52 => 15,  45 => 2,  42 => 7,  40 => 11,  31 => 4,  28 => 3,  23 => 35,);
    }
}
