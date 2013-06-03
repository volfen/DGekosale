<?php

/* client\index\index.tpl */
class __TwigTemplate_faa70e1483a2fa7fdc097128589b23c8 extends Twig_Template
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
        echo "_images_panel/icons/modules/client-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_CLIENTS_LIST");
        echo "</h2>
<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 5
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_ADD_CLIENT");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_CLIENT");
        echo "</span></a></li>
</ul>
<div class=\"block\">
\t<div id=\"list-clients\"></div>
</div>
<script type=\"text/javascript\">
function editClient(dg, id) {
\tlocation.href = '";
        // line 12
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
};

function deleteClient(dg, id) {
 \tvar oRow = theDatagrid.GetRow(id);
\tvar title = '";
        // line 17
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 18
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " <strong>' + oRow.firstname + ' '+ oRow.surname +'</strong> ?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeleteClient(p.dg, p.id);
\t};
    new GF_Alert(title, msg, func, true, params);
};
\t 
function deleteMultipleClients(dg, ids) {
\tvar title = '";
        // line 30
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 31
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " ' + ids.join(', ') + '?';
\tvar params = {
\t\tdg: dg,
\t\tids: ids
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeleteClient(p.dg, p.ids);
\t};
    new GF_Alert(title, msg, func, true, params);
};
\t 
function enableClient(dg, id) {
\txajax_enableClient(dg, id);
};
\t 
function disableClient(dg, id) {
 \tvar oRow = theDatagrid.GetRow(id);
\tvar title = '";
        // line 48
        echo Gekosale\Translation::get("TXT_DISABLE");
        echo "';
\tvar msg = '";
        // line 49
        echo Gekosale\Translation::get("TXT_DISABLE_CONFIRM");
        echo " <strong>' + oRow.firstname + ' '+ oRow.surname +'</strong> ?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_disableClient(p.dg, p.id);
\t};
\tnew GF_Alert(title, msg, func, true, params);
};\t
\t 
function enableClient(dg, id) {
 \tvar oRow = theDatagrid.GetRow(id);
\tvar title = '";
        // line 62
        echo Gekosale\Translation::get("TXT_ENABLE");
        echo "';
\tvar msg = '";
        // line 63
        echo Gekosale\Translation::get("TXT_ENABLE_CONFIRM");
        echo " <strong>' + oRow.firstname + ' '+ oRow.surname +'</strong> ?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_enableClient(p.dg, p.id);
\t};
\tnew GF_Alert(title, msg, func, true, params);
};

var theDatagrid;
   
\$(document).ready(function() {
\t\t
\tvar action_enableClient = new GF_Action({
\t\tcaption: '";
        // line 79
        echo Gekosale\Translation::get("TXT_ENABLE_CLIENT");
        echo "',
\t\taction: enableClient,
\t\timg: '";
        // line 81
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/datagrid/deactivate.png',
\t\tcondition: function(oR) { return oR['disable'] != '0'; }
\t});
\t\t 
\tvar action_disableClient = new GF_Action({
\t\tcaption: '";
        // line 86
        echo Gekosale\Translation::get("TXT_DISABLE_CLIENT");
        echo "',
\t\taction: disableClient,
\t\timg: '";
        // line 88
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/datagrid/activate.png',
\t\tcondition: function(oR) { return oR['disable'] == '0'; }
\t});
\t\t 
\tvar column_id = new GF_Datagrid_Column({
\t\tid: 'idclient',
\t\tcaption: '";
        // line 94
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
\tvar column_clientorder = new GF_Datagrid_Column({
\t\tid: 'clientorder',
\t\tcaption: '";
        // line 106
        echo Gekosale\Translation::get("TXT_CLIENTORDER_VALUE");
        echo "',
\t\tappearance: {
\t\t\twidth: 40,
\t\t\tvisible: false
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});
\t\t
\tvar column_firstname = new GF_Datagrid_Column({
\t\tid: 'firstname',
\t\tcaption: '";
        // line 118
        echo Gekosale\Translation::get("TXT_FIRSTNAME");
        echo "',
\t\tappearance: {
\t\t\twidth: 200
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\tsource: xajax_GetFirstnameSuggestions,
\t\t}
\t});
\t
\tvar column_surname = new GF_Datagrid_Column({
\t\tid: 'surname',
\t\tcaption: '";
        // line 130
        echo Gekosale\Translation::get("TXT_SURNAME");
        echo "',
\t\tappearance: {
\t\t\twidth: 200
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\tsource: xajax_GetSurnameSuggestions,
\t\t}
\t});
\t
\tvar column_email = new GF_Datagrid_Column({
\t\tid: 'email',
\t\tcaption: '";
        // line 142
        echo Gekosale\Translation::get("TXT_EMAIL");
        echo "',
\t\tappearance: {
\t\t\twidth: 180,
\t\t\tvisible: false
\t\t}
\t});
\t\t
\tvar column_phone = new GF_Datagrid_Column({
\t\tid: 'phone',
\t\tcaption: '";
        // line 151
        echo Gekosale\Translation::get("TXT_PHONE");
        echo "',
\t\tappearance: {
\t\t\twidth: 110,
\t\t\tvisible: false
\t\t}
\t});

\tvar column_phone2 = new GF_Datagrid_Column({
\t\tid: 'phone2',
\t\tcaption: '";
        // line 160
        echo Gekosale\Translation::get("TXT_ADDITIONAL_PHONE");
        echo "',
\t\tappearance: {
\t\t\twidth: 110,
\t\t\tvisible: false
\t\t}
\t});
\t
\tvar column_group = new GF_Datagrid_Column({
\t\tid: 'groupname',
\t\tcaption: '";
        // line 169
        echo Gekosale\Translation::get("TXT_GROUP_NAME");
        echo "',
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_SELECT,
\t\t\toptions: [
\t\t\t\t";
        // line 173
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "groupname");
        echo "
\t\t\t],
\t\t}
\t});
\t\t
\tvar column_adddate = new GF_Datagrid_Column({
\t\tid: 'adddate',
\t\tcaption: '";
        // line 180
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
\t\t
\tvar column_view = new GF_Datagrid_Column({
\t\tid: 'view',
\t\tcaption: '";
        // line 192
        echo Gekosale\Translation::get("TXT_LAYER");
        echo "',
\t\tappearance: {
\t\t\twidth: 150
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_SELECT,
\t\t\toptions: [
\t\t\t\t";
        // line 199
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "view");
        echo "
\t\t\t],
\t\t}
\t});
\t\t
    var options = {
\t\tid: 'client',
\t\tmechanics: {
\t\t\tkey: 'idclient',
\t\t\trows_per_page: ";
        // line 208
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t},
\t\tevent_handlers: {
\t\t\tload: xajax_LoadAllClient,
\t\t\tdelete_row: deleteClient,
\t\t\tedit_row: editClient,
\t\t\tdelete_group: deleteMultipleClients,
\t\t\t";
        // line 215
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 216
            echo "\t\t\tclick_row: editClient
\t\t\t";
        }
        // line 218
        echo "\t\t},
\t\tcolumns: [
\t\t\tcolumn_id,
\t\t\tcolumn_surname,
\t\t\tcolumn_firstname,
\t\t\tcolumn_group,
\t\t\tcolumn_email,
\t\t\tcolumn_phone,
\t\t\tcolumn_phone2,
\t\t\tcolumn_adddate,
\t\t\tcolumn_clientorder,
\t\t\tcolumn_view
\t\t],
\t\trow_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\taction_enableClient,
\t\t\taction_disableClient,
\t\t\tGF_Datagrid.ACTION_DELETE
\t\t],
\t\tgroup_actions: [
\t\t\tGF_Datagrid.ACTION_DELETE
\t\t],
\t\tcontext_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\taction_enableClient,
\t\t\taction_disableClient,
\t\t\tGF_Datagrid.ACTION_DELETE
\t\t]
\t};
    
    theDatagrid = new GF_Datagrid(\$('#list-clients'), options);
\t\t
});
</script>
";
    }

    public function getTemplateName()
    {
        return "client\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 218,  350 => 216,  347 => 215,  336 => 208,  323 => 199,  313 => 192,  298 => 180,  287 => 173,  280 => 169,  268 => 160,  256 => 151,  244 => 142,  229 => 130,  214 => 118,  199 => 106,  184 => 94,  174 => 88,  169 => 86,  160 => 81,  155 => 79,  136 => 63,  132 => 62,  116 => 49,  112 => 48,  92 => 31,  88 => 30,  73 => 18,  69 => 17,  58 => 12,  38 => 5,  29 => 3,  26 => 2,);
    }
}
