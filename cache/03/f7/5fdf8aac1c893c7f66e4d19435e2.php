<?php

/* deliverer\index\index.tpl */
class __TwigTemplate_03f75fdf8aac1c893c7f66e4d19435e2 extends Twig_Template
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
        echo "_images_panel/icons/modules/deliverer-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_DELIVERER_LIST");
        echo "</h2>

<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 6
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_ADD_DELIVERER");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_DELIVERER");
        echo "</span></a></li>
</ul>

<div class=\"block\">
\t<div id=\"list-deliverer\"></div>
</div>

<script type=\"text/javascript\">
   
   
   
   /*<![CDATA[*/
\t 
\t function editDeliverer(dg, id) {
    location.href = '";
        // line 20
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
\t };

\t function deleteDeliverer(dg, id) {
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
\t\t\treturn xajax_doDeleteDeliverer(p.dg, p.id);
\t\t};
    new GF_Alert(title, msg, func, true, params);
\t };
\t 
\t function deleteMultipleDeliverers(dg, ids) {
\t\tvar title = '";
        // line 38
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\t\tvar msg = '";
        // line 39
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " ' + ids.join(', ') + '?';
\t\tvar params = {
\t\t\tdg: dg,
\t\t\tids: ids
\t\t};
\t\tvar func = function(p) {
\t\t\treturn xajax_doDeleteDeliverer(p.dg, p.ids);
\t\t};
    new GF_Alert(title, msg, func, true, params);
\t };

\t var theDatagrid;
\t 
   \$(document).ready(function() {
\t\t
\t\tvar column_id = new GF_Datagrid_Column({
\t\t\tid: 'iddeliverer',
\t\t\tcaption: '";
        // line 56
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
        // line 68
        echo Gekosale\Translation::get("TXT_NAME");
        echo "',
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\t\tsource: xajax_GetNameSuggestions,
\t\t\t}
\t\t});
\t\t
\t\tvar column_www = new GF_Datagrid_Column({
\t\t\tid: 'www',
\t\t\tcaption: '";
        // line 77
        echo Gekosale\Translation::get("TXT_WEBSITE");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 140
\t\t\t},
\t\t});
\t\t
\t\tvar column_adddate = new GF_Datagrid_Column({
\t\t\tid: 'adddate',
\t\t\tcaption: '";
        // line 85
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
\t\t\tid: 'deliverer',
\t\t\tmechanics: {
\t\t\t\tkey: 'iddeliverer',
\t\t\t\trows_per_page: ";
        // line 100
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t\t},
\t\t\tevent_handlers: {
\t\t\t\tload: xajax_LoadAllDeliverer,
\t\t\t\tdelete_row: deleteDeliverer,
\t\t\t\tedit_row: editDeliverer,
\t\t\t\tdelete_group: deleteMultipleDeliverers,
\t\t\t\t";
        // line 107
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 108
            echo "\t\t\t\tclick_row: editDeliverer
\t\t\t\t";
        }
        // line 110
        echo "\t\t\t},
\t\t\tcolumns: [
\t\t\t\tcolumn_id,
\t\t\t\tcolumn_name,
\t\t\t\tcolumn_www,
\t\t\t\tcolumn_adddate,
\t\t\t],
\t\t\trow_actions: [
\t\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\t\tGF_Datagrid.ACTION_DELETE
\t\t\t],
\t\t\tgroup_actions: [
\t\t\t\tGF_Datagrid.ACTION_DELETE
\t\t\t],
\t\t\tcontext_actions: [
\t\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\t\tGF_Datagrid.ACTION_DELETE
\t\t\t]
    };
    
    theDatagrid = new GF_Datagrid(\$('#list-deliverer'), options);
\t\t
\t });
   
   /*]]>*/
   
   
   
  </script>
";
    }

    public function getTemplateName()
    {
        return "deliverer\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 110,  190 => 108,  187 => 107,  176 => 100,  158 => 85,  147 => 77,  135 => 68,  120 => 56,  100 => 39,  96 => 38,  81 => 26,  77 => 25,  66 => 20,  39 => 6,  29 => 3,  26 => 2,);
    }
}
