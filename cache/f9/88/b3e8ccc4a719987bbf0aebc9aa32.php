<?php

/* javascript.tpl */
class __TwigTemplate_f988b3e8ccc4a719987bbf0aebc9aa32 extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"";
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "js/jquery-1.7.2.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 2
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "js/less-1.3.0.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 3
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery-ui-1.8.14.custom.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 4
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery.onkeyup.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 5
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery.scrollTo.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 6
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/base64.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 7
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/xajax/xajax_core.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 8
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "js/jquery.jcarousel.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "js/ui.spinner.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "js/jquery.raty.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "js/application.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "js/jquery.validate.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 14
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "js/load-image.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 15
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "js/bootstrap-image-gallery.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 16
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_frontend/core/gekosale.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 17
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_frontend/core/init.js\"></script>
<script type=\"text/javascript\">
\tnew GCore({
\t\tiCookieLifetime: 30,
\t\tsDesignPath: '";
        // line 21
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "',
\t\tsAssetsPath: '";
        // line 22
        if (isset($context["ASSETSPATH"])) { $_ASSETSPATH_ = $context["ASSETSPATH"]; } else { $_ASSETSPATH_ = null; }
        echo $_ASSETSPATH_;
        echo "',
\t\tsController: '";
        // line 23
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "',
\t\tsCartRedirect: '";
        // line 24
        if (isset($context["cartredirect"])) { $_cartredirect_ = $context["cartredirect"]; } else { $_cartredirect_ = null; }
        echo $_cartredirect_;
        echo "'
\t});

\t\$(document).ready(function(){
\t\t\$('#product-search').submit(function(){
\t\t\treturn xajax_doSearchQuery(\$('#product-search-phrase').val());
\t\t});

\t\t\$('#product-search-phrase').GSearch({
\t\t\t'path': \"";
        // line 33
        echo Gekosale\Template::getPathFromRoute("frontend.searchresults");
        echo "/\",
\t\t\t'phrase': \$('#product-search-phrase').val()
\t\t}); 

\t\t";
        // line 37
        if (array_key_exists("error", $context)) {
            // line 38
            echo "\t\tGError('";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo $_error_;
            echo "');
\t\t";
        }
        // line 40
        echo "\t});
</script>
";
        // line 42
        if (isset($context["xajax"])) { $_xajax_ = $context["xajax"]; } else { $_xajax_ = null; }
        echo $_xajax_;
    }

    public function getTemplateName()
    {
        return "javascript.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  141 => 37,  134 => 33,  121 => 24,  116 => 23,  98 => 17,  88 => 15,  77 => 14,  326 => 101,  323 => 100,  321 => 99,  309 => 91,  305 => 89,  301 => 87,  293 => 86,  288 => 85,  276 => 83,  273 => 82,  267 => 78,  262 => 76,  258 => 74,  256 => 73,  250 => 70,  247 => 69,  238 => 67,  218 => 66,  215 => 65,  211 => 63,  206 => 60,  179 => 58,  174 => 57,  170 => 56,  162 => 53,  155 => 48,  137 => 46,  132 => 45,  119 => 39,  94 => 26,  83 => 14,  73 => 12,  156 => 32,  146 => 30,  143 => 38,  105 => 24,  91 => 22,  80 => 18,  38 => 5,  24 => 4,  59 => 12,  55 => 11,  48 => 7,  42 => 8,  20 => 2,  30 => 4,  25 => 3,  111 => 22,  107 => 18,  103 => 16,  75 => 17,  21 => 3,  209 => 43,  191 => 40,  186 => 39,  169 => 38,  166 => 54,  159 => 35,  153 => 33,  147 => 32,  144 => 31,  140 => 28,  127 => 43,  122 => 40,  114 => 25,  109 => 24,  106 => 21,  96 => 27,  84 => 17,  58 => 9,  46 => 8,  34 => 7,  87 => 32,  70 => 13,  65 => 14,  62 => 13,  54 => 11,  51 => 11,  49 => 9,  45 => 8,  31 => 6,  23 => 2,  90 => 17,  81 => 31,  68 => 11,  63 => 10,  41 => 6,  35 => 6,  19 => 2,  33 => 4,  27 => 6,  18 => 1,  85 => 26,  78 => 13,  76 => 16,  69 => 15,  67 => 17,  53 => 8,  47 => 8,  44 => 10,  40 => 6,  37 => 6,  32 => 4,  29 => 3,  26 => 4,  173 => 39,  167 => 36,  163 => 34,  157 => 33,  154 => 42,  138 => 29,  131 => 28,  128 => 27,  115 => 25,  110 => 24,  102 => 23,  99 => 22,  93 => 16,  89 => 18,  79 => 17,  72 => 13,  64 => 15,  61 => 15,  57 => 12,  52 => 10,  43 => 6,  36 => 5,  28 => 3,  22 => 3,  17 => 1,);
    }
}
