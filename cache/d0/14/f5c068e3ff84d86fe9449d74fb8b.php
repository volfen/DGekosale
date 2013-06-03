<?php

/* login\index\index.tpl */
class __TwigTemplate_d014f5c068e3ff84d86fe9449d74fb8b extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"pl\">
\t<head>

\t\t<!-- begin: Meta information -->
\t\t\t<title>";
        // line 6
        if (isset($context["SHOP_NAME"])) { $_SHOP_NAME_ = $context["SHOP_NAME"]; } else { $_SHOP_NAME_ = null; }
        echo $_SHOP_NAME_;
        echo " Admin</title>
\t\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
\t\t\t<meta http-equiv=\"Author\" content=\"Verison; http://verison.pl\"/>
\t\t\t<meta http-equiv=\"Description\" content=\"Panel administracyjny systemu sklepowego Gekosale.\"/>
\t\t\t<meta name=\"robots\" content=\"noindex, nofollow\"/>
\t\t\t<link rel=\"shortcut icon\" href=\"favicon.ico\"/>
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_css_panel/core/style.css\" type=\"text/css\"/>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 13
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery-1.4.2.min.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 14
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/xajax/xajax_core.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 15
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery.jqplugin.1.0.2.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 16
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/swf.packed.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 17
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery.cookie.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 18
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery-ui-1.7.2.custom.min.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 19
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery.checkboxes.pack.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 20
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/json2.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 21
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/base64.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 22
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery.hotkeys.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 23
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery.onkeyup.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 24
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_panel/core/gekosale.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 25
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_panel/core/jquery.hoverIntent.min.js\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t
\t\t\t\t\t/*<![CDATA[*/
\t\t\t\t\t\tnew GCore({
\t\t\t\t\t\t\tiCookieLifetime: 30,
\t\t\t\t\t\t\tsDesignPath: '";
        // line 31
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "',
\t\t\t\t\t\t\tiActiveLanguage: '";
        // line 32
        if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
        echo $_language_;
        echo "',
\t\t\t\t\t\t\tiActiveView: '0',
\t\t\t\t\t\t\taoLanguages: ";
        // line 34
        if (isset($context["languages"])) { $_languages_ = $context["languages"]; } else { $_languages_ = null; }
        echo $_languages_;
        echo ",
\t\t\t\t\t\t\tsUrl: '";
        // line 35
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "',
\t\t\t\t\t\t\tsCurrentController: '";
        // line 36
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "',
\t\t\t\t\t\t\tsCurrentAction: '";
        // line 37
        if (isset($context["CURRENT_ACTION"])) { $_CURRENT_ACTION_ = $context["CURRENT_ACTION"]; } else { $_CURRENT_ACTION_ = null; }
        echo $_CURRENT_ACTION_;
        echo "',
\t\t\t\t\t\t});
\t\t\t\t\t/*]]>*/
\t\t\t\t
\t\t\t</script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 42
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_panel/core/init.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 43
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_panel/core/gf.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 44
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_panel/core/pl_PL.js\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\tGF_Debug.s_iLevel = GF_Debug.LEVEL_ALL;
\t\t\t</script>
\t\t<!-- end: GexoFramework -->
\t\t
\t\t";
        // line 50
        if (isset($context["xajax"])) { $_xajax_ = $context["xajax"]; } else { $_xajax_ = null; }
        echo $_xajax_;
        echo "
\t\t";
        // line 51
        if (array_key_exists("error", $context)) {
            // line 52
            echo "\t\t<script type=\"text/javascript\">
\t\t\$(document).ready(function(){
\t\t\tGError('";
            // line 54
            echo Gekosale\Translation::get("TXT_ERROR_OCCURED");
            echo "', '";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo $_error_;
            echo "');
\t\t});
\t\t</script>
\t\t";
        }
        // line 58
        echo "\t\t";
        if (array_key_exists("message", $context)) {
            // line 59
            echo "\t\t<script type=\"text/javascript\">
\t\t\$(document).ready(function(){
\t\t\tGMessage('";
            // line 61
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo $_message_;
            echo "');
\t\t});
\t\t</script>
\t\t";
        }
        // line 65
        echo "\t\t<script type=\"text/javascript\">
\t\t
\t\t\tfunction gtKy(ev) {
\t\t\t   var k = -1;
\t\t\t   if (ev.which) {
\t\t\t       k = ev.which;
\t\t\t   } else if (ev.keyCode) {
\t\t\t       k = ev.keyCode;
\t\t\t   }
\t\t\t   return k;
\t\t\t}

\t\t\t\$(window).keypress(function(e) {
\t\t\t    ev = e || window.event;
\t\t\t    if (ev) {
\t\t\t        var key=gtKy(ev);
\t\t\t        var shift=false;
\t\t\t        if (ev.shiftKey) {
\t\t\t            shift=ev.shiftKey;
\t\t\t        }else if (ev.modifiers) {
\t\t\t            shift=!!(ev.modifiers&4);
\t\t\t        }
\t\t\t        if ((key >= 65 && key <= 90) ||    (key >= 96 && key <= 122)) {
\t\t\t            if (((key >= 65 && key <= 90) && !shift) || ((key >= 96 && key <= 122) && shift)) {
\t\t\t                \$('#capslock').show();
\t\t\t            } else {
\t\t\t                \$('#capslock').hide();
\t\t\t            }
\t\t\t        }
\t\t\t    }
\t\t\treturn true;
\t\t\t});

\t\t\t\$(window).keydown(function(e) {
\t\t\t    ev = e || window.event;
\t\t\t    if (ev) {
\t\t\t        var key = gtKy(ev);
\t\t\t        if (key == 20) {
\t\t\t            \$('#capslock').hide()
\t\t\t        }
\t\t\t    }
\t\t\t    return true;
\t\t\t});
\t\t\t\$(document).ready(function(){
\t\t\t\t\$(\"input[name='login']\").focus();
\t\t\t});
\t\t
\t\t</script>
\t\t
\t\t<style>
\t\t
\t\t#capslock {
\t\t    display:none;
\t\t    background-color:#FAFFBD;
\t\t    border:1px solid #333;
\t\t    padding:.5em;
\t\t    font-size:90%;
\t\t    font-weight:bold;
\t\t    width:20em;
\t\t    border-radius:5px;
\t\t    -moz-border-radius:5px;
\t\t    -webkit-border-radius:5px;
\t\t    text-align:center;
\t\t    margin:0 auto;
\t\t}
\t\t
\t\t</style>
\t</head>
\t<body class=\"welcome-screen\">
\t\t
\t\t<!-- begin: Header -->
\t\t\t<div id=\"header\">
\t\t\t\t
\t\t\t\t<div class=\"layout-container\">

\t\t\t\t\t<h1><a href=\"";
        // line 140
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "mainside\" accesskey=\"0\" title=\"";
        echo Gekosale\Translation::get("TXT_RETURN_TO_DESKTOP");
        echo "\"><img src=\"data:image/png;base64,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\" /></a></h1>
\t\t\t\t
\t\t\t\t\t<!-- begin: Shop name -->
\t\t\t\t\t\t<div id=\"top-message\">
\t\t\t\t\t\t\t<p><a href=\"";
        // line 144
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "\">";
        if (isset($context["SHOP_NAME"])) { $_SHOP_NAME_ = $context["SHOP_NAME"]; } else { $_SHOP_NAME_ = null; }
        echo $_SHOP_NAME_;
        echo "</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t<!-- end: Shop name -->

\t\t\t\t</div>

\t\t\t</div>
\t\t<!-- end: Header -->

\t\t<!-- begin: Message bar -->
\t\t\t<div id=\"message-bar\">

\t\t\t\t<h2 class=\"aural\">Wiadomości</h2>

\t\t\t</div>
\t\t<!-- end: Message bar -->

\t\t<!-- begin: Content -->
\t\t\t<div id=\"content\" class=\"layout-container\">
\t\t\t\t
\t\t\t\t<div id=\"capslock\">Klawisz Caps Lock jest włączony</div>
\t\t\t\t
\t\t\t\t";
        // line 166
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_;
        echo "

\t\t\t</div>
\t\t<!-- end: Content -->

\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 166,  320 => 144,  310 => 140,  233 => 65,  225 => 61,  221 => 59,  218 => 58,  208 => 54,  204 => 52,  202 => 51,  197 => 50,  187 => 44,  182 => 43,  177 => 42,  168 => 37,  163 => 36,  158 => 35,  153 => 34,  147 => 32,  142 => 31,  132 => 25,  124 => 24,  116 => 23,  108 => 22,  100 => 21,  92 => 20,  84 => 19,  76 => 18,  68 => 17,  60 => 16,  55 => 15,  47 => 14,  39 => 13,  34 => 12,  24 => 6,  17 => 1,);
    }
}
