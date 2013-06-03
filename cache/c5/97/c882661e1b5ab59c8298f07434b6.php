<?php

/* installer.tpl */
class __TwigTemplate_c597c882661e1b5ab59c8298f07434b6 extends Twig_Template
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
\t\t<title>Gekosale Install</title>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
\t\t<meta http-equiv=\"Author\" content=\"Verison; http://www.gekosale.pl\"/>
\t\t<meta name=\"robots\" content=\"noindex, nofollow\"/>
\t\t<link rel=\"shortcut icon\" href=\"favicon.ico\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_css_panel/core/style.css\" type=\"text/css\"/>
\t\t<script type=\"text/javascript\" src=\"";
        // line 10
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery-1.4.2.min.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 11
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/xajax/xajax_core.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 12
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery.jqplugin.1.0.2.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 13
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/swf.packed.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 14
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery.scrollTo.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 15
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery.cookie.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 16
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery-ui-1.7.2.custom.min.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 17
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery.checkboxes.pack.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 18
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/json2.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 19
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/base64.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 20
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery.hotkeys.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 21
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery.onkeyup.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 22
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_panel/core/gekosale.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 23
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_panel/core/jquery.hoverIntent.min.js\"></script>
\t\t<script type=\"text/javascript\">
\t\t\tnew GCore({
\t\t\t\tiCookieLifetime: 30,
\t\t\t\tsDesignPath: '";
        // line 27
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "',
\t\t\t\tsUrl: '',
\t\t\t\tsCurrentController: '',
\t\t\t\tsCurrentAction: '',
\t\t\t});

\t\t\t\$(document).ready(function() {
\t\t\t\t\$('.block').GBlock();
\t\t\t\t\$('.box').GBox();
\t\t\t\t\$('select').GSelect();
\t\t\t\t\$('#message-bar').GMessageBar();
\t\t\t\tGCore.Init();\t
\t\t\t\t\$('.installButton').unbind('click').bind('click',function(){
\t\t\t\t\t\$('#install').submit();
\t\t\t\t\t\tif(\$('.warning').length){

\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\$('#loading').GLoading();
\t\t\t\t\t\t}
\t\t\t\t\t\treturn false;
\t\t\t\t\t});
\t\t\t\t});

\t\t\t\t\t\tGClientActivity.Language = {

\t\t\t\t\t\t\t\tadd_to_order: 'Dodaj do zamówienia'

\t\t\t\t\t\t\t};

\t\t\t 

\t\t\t\t\t\t\tGFormDate.Language = {
\t\t\t\t\t\t\t\tcloseText: 'Zamknij',
\t\t\t\t\t\t\t\tprevText: '&#x3c;Poprzedni',
\t\t\t\t\t\t\t\tnextText: 'Następny&#x3e;',
\t\t\t\t\t\t\t\tcurrentText: 'Dziś',
\t\t\t\t\t\t\t\tmonthNames: ['Styczeń','Luty','Marzec','Kwiecień','Maj','Czerwiec',
\t\t\t\t\t\t\t\t'Lipiec','Sierpień','Wrzesień','Październik','Listopad','Grudzień'],
\t\t\t\t\t\t\t\tmonthNamesShort: ['Sty','Lu','Mar','Kw','Maj','Cze',
\t\t\t\t\t\t\t\t'Lip','Sie','Wrz','Pa','Lis','Gru'],
\t\t\t\t\t\t\t\tdayNames: ['Niedziela','Poniedziałek','Wtorek','Środa','Czwartek','Piątek','Sobota'],
\t\t\t\t\t\t\t\tdayNamesShort: ['Nie','Pn','Wt','Śr','Czw','Pt','So'],
\t\t\t\t\t\t\t\tdayNamesMin: ['N','Pn','Wt','Śr','Cz','Pt','So'],
\t\t\t\t\t\t\t\tdateFormat: 'yy-m-d', firstDay: 1,
\t\t\t\t\t\t\t\tisRTL: false
\t\t\t\t\t\t\t};

\t\t\t 

\t\t\t\t\t\t\tGException.Language = {
\t\t\t\t\t\t\t\texception_has_occured: 'Wystąpił błąd!'
\t\t\t\t\t\t\t};

\t\t\t\t\t\t\tGForm.Language = {
\t\t\t\t\t\t\t\tform_data_invalid: 'Nie można wysłać formularza, ponieważ zawiera on niepoprawne informacje. Przed zapisaniem zmian należy je poprawić.',
\t\t\t\t\t\t\t\tscroll_to_field: 'Przejdź do pola',
\t\t\t\t\t\t\t\tclose_alert: 'Zamknij alert',
\t\t\t\t\t\t\t\tnext: 'Dalej',
\t\t\t\t\t\t\t\tprevious: 'Wstecz',
\t\t\t\t\t\t\t\tsave: 'Zapisz',
\t\t\t\t\t\t\t};

\t\t\t\t\t\t\tGMessageBar.Language = {
\t\t\t\t\t\t\t\tclose_alert: 'OK',
\t\t\t\t\t\t\t\tcancel: 'Anuluj',
\t\t\t\t\t\t\t\tok: 'OK',
\t\t\t\t\t\t\t\tadd: 'OK',
\t\t\t\t\t\t\t\tyes: 'Tak',
\t\t\t\t\t\t\t\tno: 'Nie'
\t\t\t\t\t\t\t};

\t\t\t 



\t\t\t\t
\t\t\t</script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 104
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_panel/core/gf.js\"></script>
\t\t\t";
        // line 105
        if (isset($context["xajax"])) { $_xajax_ = $context["xajax"]; } else { $_xajax_ = null; }
        echo $_xajax_;
        echo "
\t\t\t<script type=\"text/javascript\">
\t\t\t\tGF_Debug.s_iLevel = GF_Debug.LEVEL_ALL;
\t\t\t</script>
\t\t<!-- end: GexoFramework -->
\t\t<style>
\t\t
\t\t\t#header {
\t\t\t  min-height: 116px;
\t\t\t  margin: 0px 0 0;
\t\t\t\tposition: relative;
\t\t\t  background: #2a2b2c url(";
        // line 116
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_installer/backgrounds/header.png) 30px 0 repeat-x;
\t\t\t  color: #f3f3f3;
\t\t\t\tz-index: 10;
\t\t\t}
\t\t\t
\t\t\t#header:after {
\t\t\t  content: '.'; 
\t\t\t  display: block; 
\t\t\t  height: 0; 
\t\t\t  clear: both; 
\t\t\t  visibility: hidden;
\t\t\t}
\t\t\t
\t\t\t#header h1 {
\t\t\t  display: inline;
\t\t\t  padding: 13px 0;
\t\t\t  line-height: 90px;
\t\t\t  float: left;
\t\t\t}
\t\t\t
\t\t\t#header h1 a {
\t\t\t  display: block;
\t\t\t  width: 650px;
\t\t\t  height: 90px;
\t\t\t  background: url(";
        // line 140
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_installer/gekosale.png) 0 0 no-repeat;
\t\t\t  color: #f3f3f3;
\t\t\t  text-indent: -10000px;
\t\t\t}
\t\t\t
\t\t\t.container {
\t\t\t\twidth: 966px;
\t\t\t\tmargin: auto;
\t\t\t}
\t\t\t
\t\t\t#requirements .navigation,
\t\t\t#installation .navigation {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t\t
\t\t\t.installButton {
\t\t\t\t-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
\t\t\t\t-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
\t\t\t\tbox-shadow:inset 0px 1px 0px 0px #ffffff;
\t\t\t\tbackground:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
\t\t\t\tbackground:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
\t\t\t\tfilter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
\t\t\t\tbackground-color:#ededed;
\t\t\t\t-moz-border-radius:6px;
\t\t\t\t-webkit-border-radius:6px;
\t\t\t\tborder-radius:6px;
\t\t\t\tborder:1px solid #dcdcdc;
\t\t\t\tdisplay:inline-block;
\t\t\t\tcolor:#777777 !important;
\t\t\t\tfont-family:arial;
\t\t\t\tfont-size:18px;
\t\t\t\tfont-weight:bold;
\t\t\t\tpadding:12px 24px;
\t\t\t\ttext-decoration:none;
\t\t\t\ttext-shadow:1px 1px 0px #ffffff;
\t\t\t}
\t\t\t.installButton:hover {
\t\t\t\tbackground:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
\t\t\t\tbackground:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
\t\t\t\tfilter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
\t\t\t\tbackground-color:#dfdfdf;
\t\t\t}
\t\t\t.installButton:active {
\t\t\t\tposition:relative;
\t\t\t\ttop:1px;
\t\t\t}
\t\t\t#installation .field-static-text {
\t\t\t\ttext-align: center;
\t\t\t\tpadding-top: 30px;
\t\t\t}
\t\t
\t\t</style>
\t\t";
        // line 192
        if (array_key_exists("error", $context)) {
            // line 193
            echo "\t\t\t<script type=\"text/javascript\">
\t\t\t\$(document).ready(function() {
\t\t\t\tGMessage('TXT_ERROR_OCCURED', '";
            // line 195
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo $_error_;
            echo "');
\t\t\t});
\t\t\t</script>
\t\t";
        }
        // line 199
        echo "\t</head>
\t<body class=\"welcome-screen\">
\t\t<div id=\"header\">
\t\t\t<div class=\"container\">
\t\t\t\t<h1><a href=\"http://www.gekosale.pl\" target=\"_blank\">Gekosale - Open-source e-commerce platform</a></h1>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"message-bar\">
\t\t\t<h2 class=\"aural\"></h2>
\t\t</div>
\t\t<div id=\"content\" class=\"layout-container\">
\t\t\t<div id=\"loading\">
\t\t\t";
        // line 211
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_;
        echo "
\t\t\t</div>
\t\t</div>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "installer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 211,  337 => 199,  329 => 195,  325 => 193,  323 => 192,  267 => 140,  239 => 116,  224 => 105,  219 => 104,  138 => 27,  130 => 23,  122 => 22,  114 => 21,  106 => 20,  98 => 19,  90 => 18,  82 => 17,  74 => 16,  66 => 15,  61 => 14,  53 => 13,  48 => 12,  40 => 11,  32 => 10,  27 => 9,  17 => 1,);
    }
}
