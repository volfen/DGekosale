<?php

/* product\add\add.tpl */
class __TwigTemplate_d1d71a1e9c70a33f716bf8309ec46d7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.tpl");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_javascript($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 4
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/ckeditor/ckeditor.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<h2><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/modules/product-edit.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_PRODUCT");
        echo "</h2>
<ul class=\"possibilities\">
   <li><a href=\"";
        // line 9
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "product\" class=\"button return\" title=\"";
        echo Gekosale\Translation::get("TXT_RETURN_TO_PREVIOUS_SCREEN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/arrow-left-gray.png\" title=\"";
        echo Gekosale\Translation::get("TXT_PRODUCTS_LIST");
        echo "\" alt=\"";
        echo Gekosale\Translation::get("TXT_PRODUCTS_LIST");
        echo "\"/></span></a></li>
   <!-- <li><a href=\"#product\" rel=\"reset\" class=\"button\" title=\"";
        // line 10
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/clean.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "</span></a></li> -->
   <li><a href=\"#product\" rel=\"submit\" class=\"button\" title=\"";
        // line 11
        echo Gekosale\Translation::get("TXT_SAVE");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/check.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_SAVE");
        echo "</span></a></li>
   <li><a href=\"#product\" rel=\"submit[next]\" class=\"button\"><span><img src=\"";
        // line 12
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/check.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_SAVE_AND_ADD_ANOTHER");
        echo "</span></a></li>
</ul>

";
        // line 15
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_;
        echo "
 <script type=\"text/javascript\">

           /*<![CDATA[*/

          \$(document).ready(function() {

         \t\$.each(GCore.aoLanguages,function(l,language){
              var name = \"#basic_pane__language_data__\"+language.id+\"__name\";
              var seo = \"#basic_pane__language_data__\"+language.id+\"__seo\";
              var keywordtitle = \"#basic_pane__language_data__\"+language.id+\"__keywordtitle\";
              \$(name).bind('change keyup',function(){
            \t  xajax_doAJAXCreateSeo({
\t\t\t\t\t\tname: \$(name).val()
\t\t\t\t  }, GCallback(function(eEvent) {
\t\t\t\t\t\t\$(seo).val(eEvent.seo);
\t\t\t\t  }));
            \t  \$(keywordtitle).val(\$(name).val());
              });
              if(\$(seo).val() == ''){
            \t  xajax_doAJAXCreateSeo({
\t\t\t\t\t\tname: \$(name).val()
\t\t\t\t\t}, GCallback(function(eEvent) {
\t\t\t\t\t\t\$(seo).val(eEvent.seo);
\t\t\t\t  }));
              }
             });
       \t});
    /*]]>*/

   </script>
   ";
    }

    public function getTemplateName()
    {
        return "product\\add\\add.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 15,  88 => 12,  79 => 11,  70 => 10,  56 => 9,  47 => 7,  44 => 6,  34 => 4,  30 => 3,  27 => 2,);
    }
}
