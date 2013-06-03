<?php

/* orderstatus\index\index.tpl */
class __TwigTemplate_27faecf67b268f30764e489235d6e5a4 extends Twig_Template
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
        echo "_images_panel/icons/modules/status-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ORDERSTATUS_LIST");
        echo "</h2>

<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 6
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_ADD_ORDERSTATUS");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_ORDERSTATUS");
        echo "</span></a></li>
</ul>

<div class=\"block\">
\t<div id=\"list-orderstatus\"></div>
</div>

<script type=\"text/javascript\">
   
   
   
   /*<![CDATA[*/
   
\t function editOrderstatus(dg, id) {
    location.href = '";
        // line 20
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
\t };

\t function deleteOrderstatus(dg, id) {
\t \tvar oRow = theDatagrid.GetRow(id);
\t\tvar title = '";
        // line 25
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\t\tvar msg = '";
        // line 26
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " <strong>' + oRow.name +'</strong> ?';
\t\tvar params = {
\t\t\tdg: dg,
\t\t\tid: id
\t\t};
\t\tvar func = function(p) {
\t\t\treturn xajax_doDeleteOrderstatus(p.dg, p.id);
\t\t};
    new GF_Alert(title, msg, func, true, params);
\t };
\t 
\t function setDefault(dg, id) {
\t \tvar oRow = theDatagrid.GetRow(id);
\t\tvar title = '";
        // line 39
        echo Gekosale\Translation::get("TXT_DEFAULT");
        echo "';
\t\tvar msg = '";
        // line 40
        echo Gekosale\Translation::get("TXT_SET_DEFAULT");
        echo " <strong>' + oRow.name +'</strong> ?';
\t\tvar params = {
\t\t\tdg: dg,
\t\t\tid: id
\t\t};
\t\tvar func = function(p) {
\t\t\treturn xajax_setDefault(p.dg, p.id);
\t\t};
\t\tnew GF_Alert(title, msg, func, true, params);
\t};\t

\t
\t var theDatagrid;
\t 
   \$(document).ready(function() {
\t\t
   \t\tvar action_setDefault = new GF_Action({
\t\t   caption: '";
        // line 57
        echo Gekosale\Translation::get("TXT_SET_DEFAULT");
        echo "',
\t\t   action: setDefault,
\t   \t\timg: '";
        // line 59
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/datagrid/on.png',
\t   \t\tcondition: function(oR) { return oR['def'] == '0'; }
\t\t   
\t   });
\t   
\t\tvar column_id = new GF_Datagrid_Column({
\t\t\tid: 'idorderstatus',
\t\t\tcaption: '";
        // line 66
        echo Gekosale\Translation::get("TXT_ID");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 90,
\t\t\t\tvisible: false
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t\t}
\t\t});
\t\t
\t\tvar column_name = new GF_Datagrid_Column({
\t\t\tid: 'name',
\t\t\tcaption: '";
        // line 78
        echo Gekosale\Translation::get("TXT_NAME");
        echo "',
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\t\tsource: xajax_GetNameSuggestions,
\t\t\t}
\t\t});
\t\t
\t\tvar column_groupname = new GF_Datagrid_Column({
\t\t\tid: 'groupname',
\t\t\tcaption: '";
        // line 87
        echo Gekosale\Translation::get("TXT_GROUP_NAME");
        echo "',
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_SELECT,
\t\t\t\toptions: [
\t\t\t\t\t";
        // line 91
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "groupname");
        echo "
\t\t\t\t],
\t\t\t}
\t\t});

\t\tvar column_adddate = new GF_Datagrid_Column({
\t\t\tid: 'adddate',
\t\t\tcaption: '";
        // line 98
        echo Gekosale\Translation::get("TXT_ADDDATE");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 140,
\t\t\t\tvisible: false
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t\t}
\t\t});
\t\t

    var options = {
\t\t\tid: 'orderstatus',
\t\t\tappearance: {
\t\t\t\tcolumn_select: false
\t\t\t},
\t\t\tmechanics: {
\t\t\t\tkey: 'idorderstatus',
\t\t\t\trows_per_page: ";
        // line 116
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t\t},
\t\t\tevent_handlers: {
\t\t\t\tload: xajax_LoadAllOrderstatus,
\t\t\t\tdelete_row: deleteOrderstatus,
\t\t\t\tedit_row: editOrderstatus,
\t\t\t\t";
        // line 122
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 123
            echo "\t\t\t\tclick_row: editOrderstatus
\t\t\t\t";
        }
        // line 125
        echo "\t\t\t},
\t\t\tcolumns: [
\t\t\t\tcolumn_id,
\t\t\t\tcolumn_name,
\t\t\t\tcolumn_groupname,
\t\t\t\tcolumn_adddate
\t\t\t],
\t\t\trow_actions: [
\t\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\t\tGF_Datagrid.ACTION_DELETE,
\t\t\t\taction_setDefault
\t\t\t],
\t\t\tcontext_actions: [
\t\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\t\tGF_Datagrid.ACTION_DELETE,
\t\t\t\taction_setDefault
\t\t\t]
    };
    
    theDatagrid = new GF_Datagrid(\$('#list-orderstatus'), options);
\t\t
\t });
   
   /*]]>*/
   
   
   
  </script>
";
    }

    public function getTemplateName()
    {
        return "orderstatus\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 125,  216 => 123,  213 => 122,  203 => 116,  182 => 98,  171 => 91,  164 => 87,  152 => 78,  137 => 66,  126 => 59,  121 => 57,  101 => 40,  97 => 39,  81 => 26,  77 => 25,  66 => 20,  39 => 6,  29 => 3,  26 => 2,);
    }
}
