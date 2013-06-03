<?php

/* producer\index\index.tpl */
class __TwigTemplate_a1b63eeea7f56b8771c6bf104f0270f4 extends Twig_Template
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
        echo "_images_panel/icons/modules/producer-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_PRODUCERS_LIST");
        echo "</h2>
<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 5
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_ADD_PRODUCER");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_PRODUCER");
        echo "</span></a></li>
</ul>
<div class=\"block\">
\t<div id=\"list-producers\"></div>
</div>

<script type=\"text/javascript\">

function editProducer(dg, id) {
\tlocation.href = '";
        // line 14
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
};
\t\t
function deleteProducer(dg, id) {
\tvar oRow = theDatagrid.GetRow(id);
\tvar title = '";
        // line 19
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 20
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " <strong>' + oRow.name +'</strong> ?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeleteProducer(p.dg, p.id);
\t};
    new GF_Alert(title, msg, func, true, params);
};
\t 
function deleteMultipleProducers(dg, ids) {
\tvar title = '";
        // line 32
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 33
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " ' + ids.join(', ') + '?';
\tvar params = {
\t\tdg: dg,
\t\tids: ids
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeleteProducer(p.dg, p.ids);
\t};
\tnew GF_Alert(title, msg, func, true, params);
};

var theDatagrid;
\t 
\$(document).ready(function() {
\t\t
\tvar column_id = new GF_Datagrid_Column({
\t\tid: 'idproducer',
\t\tcaption: '";
        // line 50
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
        // line 62
        echo Gekosale\Translation::get("TXT_NAME");
        echo "',
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\tsource: xajax_GetNameSuggestions,
\t\t}
\t});
\t
\tvar column_adddate = new GF_Datagrid_Column({
\t\tid: 'adddate',
\t\tcaption: '";
        // line 71
        echo Gekosale\Translation::get("TXT_ADDDATE");
        echo "',
\t\tappearance: {
\t\t\twidth: 140,
\t\t\tvisible: false
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});
\t
\tvar options = {
\t\tid: 'producer',
\t\tmechanics: {
\t\t\tkey: 'idproducer',
\t\t\trows_per_page: ";
        // line 85
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t},
\t\tevent_handlers: {
\t\t\tload: xajax_LoadAllProducer,
\t\t\tdelete_row: deleteProducer,
\t\t\tedit_row: editProducer,
\t\t\tdelete_group: deleteMultipleProducers,
\t\t\t";
        // line 92
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 93
            echo "\t\t\tclick_row: editProducer
\t\t\t";
        }
        // line 95
        echo "\t\t},
\t\tcolumns: [
\t\t\tcolumn_id,
\t\t\tcolumn_name,
\t\t\tcolumn_adddate,
\t\t],
\t\trow_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\tGF_Datagrid.ACTION_DELETE
\t\t],
\t\tgroup_actions: [
\t\t\tGF_Datagrid.ACTION_DELETE
\t\t],
\t\tcontext_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\tGF_Datagrid.ACTION_DELETE,
\t\t]
\t};
    
    theDatagrid = new GF_Datagrid(\$('#list-producers'), options);
    
});
</script>
";
    }

    public function getTemplateName()
    {
        return "producer\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 95,  172 => 93,  169 => 92,  158 => 85,  141 => 71,  129 => 62,  114 => 50,  94 => 33,  90 => 32,  75 => 20,  71 => 19,  60 => 14,  38 => 5,  29 => 3,  26 => 2,);
    }
}
