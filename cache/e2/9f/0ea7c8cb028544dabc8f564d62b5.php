<?php

/* javascript.tpl */
class __TwigTemplate_e29f0ea7c8cb028544dabc8f564d62b5 extends Twig_Template
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
        return array (  154 => 42,  150 => 40,  143 => 38,  141 => 37,  134 => 33,  121 => 24,  116 => 23,  111 => 22,  106 => 21,  98 => 17,  93 => 16,  88 => 15,  78 => 13,  73 => 12,  68 => 11,  63 => 10,  58 => 9,  53 => 8,  48 => 7,  43 => 6,  38 => 5,  33 => 4,  28 => 3,  23 => 2,  89 => 18,  83 => 14,  77 => 14,  72 => 13,  57 => 12,  54 => 11,  47 => 8,  41 => 6,  36 => 5,  20 => 2,  17 => 1,);
    }
}
