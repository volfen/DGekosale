<?php

/* buyalso\index\index.tpl */
class __TwigTemplate_b04bbba8ad0e05c4cc5db7855f0081d4 extends Twig_Template
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
        echo "_images_panel/icons/modules/similarproduct-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_BUY_ALSO_LIST");
        echo "</h2>
<div class=\"block\">
\t<div id=\"list-buyalso\"></div>
</div>
<script type=\"text/javascript\">

function viewBuyalso(dg, id) {
\tlocation.href = '";
        // line 10
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/view/' + id + '';
};

var theDatagrid;
\t 
\$(document).ready(function() {

\tvar column_id = new GF_Datagrid_Column({
\t\tid: 'productid',
\t\tcaption: '";
        // line 19
        echo Gekosale\Translation::get("TXT_ID");
        echo "',
\t\tappearance: {
\t\t\twidth: 90,
\t\t\tvisible: false
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});
\t\t
\tvar column_name = new GF_Datagrid_Column({
\t\tid: 'name',
\t\tcaption: '";
        // line 31
        echo Gekosale\Translation::get("TXT_NAME");
        echo "',
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\tsource: xajax_GetNameSuggestions,
\t\t}
\t});
\t 
    var options = {
\t\tid: 'productid',
\t\tmechanics: {
\t\t\tkey: 'productid',
\t\t\trows_per_page: ";
        // line 42
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t},
\t\tevent_handlers: {
\t\t\tload: xajax_LoadAllBuyalso,
\t\t\tedit_row: viewBuyalso,
\t\t\t";
        // line 47
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 48
            echo "\t\t\tclick_row: viewBuyalso
\t\t\t";
        }
        // line 50
        echo "\t\t},
\t\tcolumns: [
\t\t\tcolumn_id,
\t\t\tcolumn_name,
\t\t],
\t\trow_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t],
\t\tcontext_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t]
    };

    theDatagrid = new GF_Datagrid(\$('#list-buyalso'), options);
\t\t
});

</script>
";
    }

    public function getTemplateName()
    {
        return "buyalso\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 50,  99 => 48,  96 => 47,  87 => 42,  73 => 31,  58 => 19,  43 => 10,  29 => 3,  26 => 2,);
    }
}
