<?php

/* client\add\add.tpl */
class __TwigTemplate_4edf0ab1329ee7f0615e6e90db7bf055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.tpl");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h2><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/modules/client-add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_CLIENT");
        echo "</h2>
<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 5
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "client\" class=\"button return\" title=\"";
        echo Gekosale\Translation::get("TXT_RETURN_TO_PREVIOUS_SCREEN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/arrow-left-gray.png\" title=\"";
        echo Gekosale\Translation::get("TXT_CLIENTS_LIST");
        echo "\" alt=\"";
        echo Gekosale\Translation::get("TXT_CLIENTS_LIST");
        echo "\"/></span></a></li>
\t<!-- <li><a href=\"#client\" rel=\"reset\" class=\"button\" title=\"";
        // line 6
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/clean.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "</span></a></li> -->
\t<li><a href=\"#client\" rel=\"submit[next]\" class=\"button\" title=\"";
        // line 7
        echo Gekosale\Translation::get("TXT_SAVE_AND_ADD_ANOTHER");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_SAVE_AND_ADD_ANOTHER");
        echo "</span></a></li>
\t<li><a href=\"#client\" rel=\"submit\" class=\"button\" title=\"";
        // line 8
        echo Gekosale\Translation::get("TXT_SAVE_AND_FINISH");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/check.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_SAVE_AND_FINISH");
        echo "</span></a></li>
</ul>
<script type=\"text/javascript\">
\$(document).ready(function(){
\t\$('#copy').unbind('click').bind('click', function(){
\t\t\$('#shipping_data').find('input, select').each(function(){
\t\t\tvar shipping = \$(this).attr('id');
\t\t\tvar billing = shipping.replace(\"shipping_data__\", \"billing_data__\");
\t\t\tif(shipping != undefined && shipping != ''){
\t\t\t\t\$('#' + shipping).val(\$('#' + billing).val());
\t\t\t\tif(\$('#' + shipping).is('select')){
\t\t\t\t\t\$('#' + shipping).change();
\t\t\t\t}
\t\t\t}
\t\t});
\t\treturn false;
\t});
});
</script>
";
        // line 27
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_;
        echo "
";
    }

    public function getTemplateName()
    {
        return "client\\add\\add.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  70 => 8,  61 => 7,  52 => 6,  38 => 5,  29 => 3,  26 => 2,);
    }
}
