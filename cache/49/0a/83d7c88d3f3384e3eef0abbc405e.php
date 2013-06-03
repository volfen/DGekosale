<?php

/* contact\index\index.tpl */
class __TwigTemplate_490a83d7c88d3f3384e3eef0abbc405e extends Twig_Template
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
        echo "_images_panel/icons/modules/contact-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_CONTACTS_LIST");
        echo "</h2>
<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 5
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_ADD_CONTACT");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_CONTACT");
        echo "</span></a></li>
</ul>
<div class=\"block\">
\t<div id=\"datagrid\"></div>
</div>
<script type=\"text/javascript\">
function editContact(dg, id) {
\tlocation.href = '";
        // line 12
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
};

function deleteContact(dg, id) {
 \tvar oRow = theDatagrid.GetRow(id);
\tvar title = '";
        // line 17
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 18
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " <strong>' + oRow.name +'</strong> ?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeleteContact(p.dg, p.id);
\t};
\tnew GF_Alert(title, msg, func, true, params);
};
\t 
function deleteMultipleContact(dg, ids) {
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
\t\treturn xajax_doDeleteContact(p.dg, p.ids);
\t};
\tnew GF_Alert(title, msg, func, true, params);
};

var theDatagrid;
\t 
\$(document).ready(function() {
\t\t
\tvar column_id = new GF_Datagrid_Column({
\t\tid: 'idcontact',
\t\tcaption: '";
        // line 48
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
        // line 60
        echo Gekosale\Translation::get("TXT_NAME");
        echo "',
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\tsource: xajax_GetNameSuggestions,
\t\t}
\t});
\t
\tvar column_email = new GF_Datagrid_Column({
\t\tid: 'email',
\t\tcaption: '";
        // line 69
        echo Gekosale\Translation::get("TXT_EMAIL");
        echo "',
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_INPUT,
\t\t}
\t});
\t
\tvar column_phone = new GF_Datagrid_Column({
\t\tid: 'phone',
\t\tcaption: '";
        // line 77
        echo Gekosale\Translation::get("TXT_PHONE");
        echo "'
\t});
\t
\tvar column_fax = new GF_Datagrid_Column({
\t\tid: 'fax',
\t\tcaption: '";
        // line 82
        echo Gekosale\Translation::get("TXT_FAX");
        echo "'
\t});
\t
\tvar column_address = new GF_Datagrid_Column({
\t\tid: 'address',
\t\tcaption: '";
        // line 87
        echo Gekosale\Translation::get("TXT_ADDRESS");
        echo "',
\t\tappearance: {
\t\t\twidth: 240
\t\t}
\t});
\t
\tvar column_street = new GF_Datagrid_Column({
\t\tid: 'street',
\t\tcaption: '";
        // line 95
        echo Gekosale\Translation::get("TXT_STREET");
        echo "',
\t\tappearance: {
\t\t\tvisible: false
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\tsource: xajax_GetStreetSuggestions,
\t\t}
\t});
\t
\tvar column_streetno = new GF_Datagrid_Column({
\t\tid: 'streetno',
\t\tcaption: '";
        // line 107
        echo Gekosale\Translation::get("TXT_STREETNO");
        echo "',
\t\tappearance: {
\t\t\tvisible: false
\t\t}
\t});
\t
\tvar column_placeno = new GF_Datagrid_Column({
\t\tid: 'placeno',
\t\tcaption: '";
        // line 115
        echo Gekosale\Translation::get("TXT_PLACENO");
        echo "',
\t\tappearance: {
\t\t\tvisible: false
\t\t}
\t});
\t
\tvar column_placename = new GF_Datagrid_Column({
\t\tid: 'placename',
\t\tcaption: '";
        // line 123
        echo Gekosale\Translation::get("TXT_PLACENAME");
        echo "',
\t\tappearance: {
\t\t\tvisible: false
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\tsource: xajax_GetPlacenameSuggestions,
\t\t}
\t});
\t
\tvar column_postcode = new GF_Datagrid_Column({
\t\tid: 'postcode',
\t\tcaption: '";
        // line 135
        echo Gekosale\Translation::get("TXT_POSTCODE");
        echo "',
\t\tappearance: {
\t\t\tvisible: false
\t\t}
\t});

\tvar options = {
\t\tid: 'contact',
\t\tmechanics: {
\t\t\tkey: 'idcontact',
\t\t\trows_per_page: ";
        // line 145
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t},
\t\tevent_handlers: {
\t\t\tload: xajax_LoadAllContact,
\t\t\tdelete_row: deleteContact,
\t\t\tedit_row: editContact,
\t\t\tdelete_group: deleteMultipleContact,
\t\t\t";
        // line 152
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 153
            echo "\t\t\tclick_row: editContact
\t\t\t";
        }
        // line 155
        echo "\t\t},
\t\tcolumns: [
\t\t\tcolumn_id,
\t\t\tcolumn_name,
\t\t\tcolumn_email,
\t\t\tcolumn_address,
\t\t\tcolumn_phone,
\t\t\tcolumn_fax,
\t\t\tcolumn_street,
\t\t\tcolumn_streetno,
\t\t\tcolumn_placeno,
\t\t\tcolumn_placename,
\t\t\tcolumn_postcode
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
\t\t\tGF_Datagrid.ACTION_DELETE
\t\t]
\t};
    
    theDatagrid = new GF_Datagrid(\$('#datagrid'), options);
    
});
</script>
";
    }

    public function getTemplateName()
    {
        return "contact\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 155,  256 => 153,  253 => 152,  242 => 145,  229 => 135,  214 => 123,  203 => 115,  192 => 107,  177 => 95,  166 => 87,  158 => 82,  150 => 77,  139 => 69,  127 => 60,  112 => 48,  92 => 31,  88 => 30,  73 => 18,  69 => 17,  58 => 12,  38 => 5,  29 => 3,  26 => 2,);
    }
}
