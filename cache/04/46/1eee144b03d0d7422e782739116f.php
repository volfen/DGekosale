<?php

/* unitmeasure\index\index.tpl */
class __TwigTemplate_04461eee144b03d0d7422e782739116f extends Twig_Template
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
        echo "_images_panel/icons/modules/unitmeasure-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_UNIT_MEASURES_LIST");
        echo "</h2>

<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 6
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_ADD_UNIT_MEASURE");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_UNIT_MEASURE");
        echo "</span></a></li>
</ul>

<div class=\"block\">
\t<div id=\"list-unitmeasures\"></div>
</div>

<script type=\"text/javascript\">
function editUnitMeasure(dg, id) {
\tlocation.href = '";
        // line 15
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
};
   
function deleteUnitMeasure(dg, id) {
\tvar oRow = theDatagrid.GetRow(id);
\tvar title = '";
        // line 20
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 21
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " <strong>' + oRow.name +'</strong> ?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeleteUnitMeasure(p.dg, p.id);
\t};
\tnew GF_Alert(title, msg, func, true, params);
};
\t 
var theDatagrid;
\t 
\$(document).ready(function() {
\t\t
\tvar column_id = new GF_Datagrid_Column({
\t\tid: 'idunitmeasure',
\t\tcaption: '";
        // line 38
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
\t
\tvar column_name = new GF_Datagrid_Column({
\t\tid: 'name',
\t\tcaption: '";
        // line 50
        echo Gekosale\Translation::get("TXT_NAME");
        echo "',
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_INPUT
\t\t}
\t});

\tvar options = {
\t\tid: 'unitmeasure',
\t\tmechanics: {
\t\t\tkey: 'idunitmeasure'
\t\t},
\t\tevent_handlers: {
\t\t\tload: xajax_LoadAllUnitMeasure,
\t\t\tdelete_row: deleteUnitMeasure,
\t\t\tedit_row: editUnitMeasure,
\t\t\t";
        // line 65
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 66
            echo "\t\t\tclick_row: editUnitMeasure
\t\t\t";
        }
        // line 68
        echo "\t\t},
\t\trow_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\tGF_Datagrid.ACTION_DELETE
\t\t],
\t\tcolumns: [
\t\t\tcolumn_id,
\t\t\tcolumn_name
\t\t],
\t\tcontext_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\tGF_Datagrid.ACTION_DELETE,
\t\t],
\t};

    theDatagrid = new GF_Datagrid(\$('#list-unitmeasures'), options);
    
});
</script>
";
    }

    public function getTemplateName()
    {
        return "unitmeasure\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 68,  132 => 66,  129 => 65,  111 => 50,  96 => 38,  76 => 21,  72 => 20,  61 => 15,  39 => 6,  29 => 3,  26 => 2,);
    }
}
