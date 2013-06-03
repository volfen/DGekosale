<?php

/* paymentmethod\index\index.tpl */
class __TwigTemplate_061572fd94b6679de77e33b8cec9422a extends Twig_Template
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
        echo "_images_panel/icons/modules/paymentmethod-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_PAYMENTMETHOD_LIST");
        echo "</h2>
<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 5
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\"><span>";
        echo Gekosale\Translation::get("TXT_ADD_PAYMENTMETHOD");
        echo "</span></a></li>
</ul>
<div class=\"block\">
\t<div id=\"list-paymentmethod\"></div>
</div>
<script type=\"text/javascript\">

function editPaymentMethod(dg, id) {
\tlocation.href = '";
        // line 13
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
};

function deletePaymentMethod(dg, id) {
 \tvar oRow = theDatagrid.GetRow(id);
\tvar title = '";
        // line 18
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 19
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " <strong>' + oRow.name +'</strong> ?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeletePaymentMethod(p.dg, p.id);
\t};
\tnew GF_Alert(title, msg, func, true, params);
};
\t 
function enablePaymentmethod(dg, id) {
\txajax_enablePaymentmethod(dg, id);
};
   \t 
function disablePaymentmethod(dg, id) {
 \tvar oRow = theDatagrid.GetRow(id);
\tvar title = '";
        // line 36
        echo Gekosale\Translation::get("TXT_DISABLE");
        echo "';
\tvar msg = '";
        // line 37
        echo Gekosale\Translation::get("TXT_DISABLE_CONFIRM");
        echo " <strong>' + oRow.name +'</strong> ?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_disablePaymentmethod(p.dg, p.id);
\t};
\tnew GF_Alert(title, msg, func, true, params);
};\t
\t 
function enablePaymentmethod(dg, id) {
 \tvar oRow = theDatagrid.GetRow(id);
\tvar title = '";
        // line 50
        echo Gekosale\Translation::get("TXT_ENABLE");
        echo "';
\tvar msg = '";
        // line 51
        echo Gekosale\Translation::get("TXT_ENABLE_CONFIRM");
        echo " <strong>' + oRow.name +'</strong> ?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_enablePaymentmethod(p.dg, p.id);
\t};
\tnew GF_Alert(title, msg, func, true, params);
};

var theDatagrid;
\t 
\$(document).ready(function() {

\tvar action_enablePaymentmethod= new GF_Action({
\t\tcaption: '";
        // line 67
        echo Gekosale\Translation::get("TXT_ENABLE");
        echo "',
\t\taction: enablePaymentmethod,
\t\t\timg: '";
        // line 69
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/datagrid/on.png',
\t\t\tcondition: function(oR) { return oR['active'] == '0'; }
\t\t });
\t\t 
\tvar action_disablePaymentmethod= new GF_Action({
\t\tcaption: '";
        // line 74
        echo Gekosale\Translation::get("TXT_DISABLE");
        echo "',
\t\taction: disablePaymentmethod,
\t\timg: '";
        // line 76
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/datagrid/off.png',
\t\tcondition: function(oR) { return oR['active'] == '1'; }
\t});
\t
\tvar column_id = new GF_Datagrid_Column({
\t\tid: 'idpaymentmethod',
\t\tcaption: '";
        // line 82
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
        // line 94
        echo Gekosale\Translation::get("TXT_NAME");
        echo "',
\t\tappearance: {
\t\t\twidth: 340,
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\tsource: xajax_GetNameSuggestions,
\t\t}
\t});

\tvar column_hierarchy = new GF_Datagrid_Column({
\t\tid: 'hierarchy',
\t\teditable: true,
\t\tappearance: {
\t\t\twidth: 40,
\t\t},
\t\tcaption: '";
        // line 110
        echo Gekosale\Translation::get("TXT_HIERARCHY");
        echo "',
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});
\t
\tvar column_controller = new GF_Datagrid_Column({
\t\tid: 'controller',
\t\tcaption: '";
        // line 118
        echo Gekosale\Translation::get("TXT_PAYMENT_CONTROLLER");
        echo "',
\t\tappearance: {
\t\t\twidth: 140,
\t\t\tvisible: false
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\tsource: xajax_GetControllerSuggestions,
\t\t}
\t});
\t
    var options = {
\t\tid: 'paymentmethod',
\t\tappearance: {
\t\t\tcolumn_select: false
\t\t},
\t\tmechanics: {
\t\t\tkey: 'idpaymentmethod',
    \t\trows_per_page: ";
        // line 136
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t},
\t\tevent_handlers: {
\t\t\tload: xajax_LoadAllPaymentMethod,
\t\t\tdelete_row: deletePaymentMethod,
\t\t\tedit_row: editPaymentMethod,
\t\t\tupdate_row: function(sId, oRow) {
\t\t\t\txajax_doAJAXUpdateMethod({
\t\t\t\t\tid: sId,
\t\t\t\t\thierarchy: oRow.hierarchy
\t\t\t\t}, GCallback(function(eEvent) {
\t\t\t\t\ttheDatagrid.LoadData();
\t\t\t\t}));
\t\t\t},
\t\t\t";
        // line 150
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 151
            echo "\t\t\tclick_row: editPaymentMethod
\t\t\t";
        }
        // line 153
        echo "\t\t},
\t\tcolumns: [
\t\t\tcolumn_id,
\t\t\tcolumn_name,
\t\t\tcolumn_hierarchy,
\t\t\tcolumn_controller,
\t\t],
\t\trow_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\tGF_Datagrid.ACTION_DELETE,
\t\t\taction_enablePaymentmethod,
\t\t\taction_disablePaymentmethod
\t\t],
\t\tcontext_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\tGF_Datagrid.ACTION_DELETE,
\t\t\taction_enablePaymentmethod,
\t\t\taction_disablePaymentmethod
\t\t]
    };
    
    theDatagrid = new GF_Datagrid(\$('#list-paymentmethod'), options);
\t\t
});
</script>
";
    }

    public function getTemplateName()
    {
        return "paymentmethod\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 153,  248 => 151,  245 => 150,  227 => 136,  206 => 118,  195 => 110,  176 => 94,  161 => 82,  151 => 76,  146 => 74,  137 => 69,  132 => 67,  113 => 51,  109 => 50,  93 => 37,  89 => 36,  69 => 19,  65 => 18,  54 => 13,  38 => 5,  29 => 3,  26 => 2,);
    }
}
