<?php

/* order\index\index.tpl */
class __TwigTemplate_107411f358c7a9d28267960dcaab70fd extends Twig_Template
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
        echo "_images_panel/icons/modules/order-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ORDERS_LIST");
        echo "</h2>

<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 6
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\" id=\"add_order\" title=\"";
        echo Gekosale\Translation::get("TXT_ADD_ORDERS");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_ORDERS");
        echo "</span></a></li>
</ul>

";
        // line 9
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        if (($_view_ == 0)) {
            // line 10
            echo "<script type=\"text/javascript\">
\$(document).ready(function(){
\t\$('#add_order').click(function(){
\t\tvar title = '";
            // line 13
            echo Gekosale\Translation::get("TXT_SELECT_VIEW_FROM_ORDER");
            echo "';
\t\tvar msg = '';
   \t \tnew GMessage(title, msg);
      \treturn false;
\t});
});
</script>
";
        }
        // line 21
        echo "
<div class=\"block\">
\t<div id=\"list-orders\"></div>
</div>

<script type=\"text/javascript\">

function processOrder(row) {

\treturn {
\t\tidorder: row.idorder,
\t\tclient: row.client,
\t\tdelivery: row.delivery,
\t\tprice: row.price + ' ' + row.currencysymbol,
\t\tproducts: row.products,
\t\tglobalprice: row.globalprice + ' ' + row.currencysymbol,
\t\tdispatchmethodprice: row.dispatchmethodprice + ' ' + row.currencysymbol,
\t\torderstatusname: '<span style=\"color: #' + row.colour + ';\">' + row.orderstatusname +'</span>',
\t\tdispatchmethodname: row.dispatchmethodname,
\t\tpaymentmethodname: row.paymentmethodname,
\t\tclientid: row.clientid,
\t\tcomments: row.comments,
\t\tadddate: row.adddate,
\t};
};

function dataLoaded(dDg) {
\tdDg.m_jBody.find('.show-thumb').mouseenter(GTooltip.ShowInfoForThis).mouseleave(GTooltip.HideInfoForThis);
};
 
function viewOrder(dg, id) {
\tlocation.href = '";
        // line 52
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/view/' + id + '';
};
\t 
function editOrder(dg, id) {
\tlocation.href = '";
        // line 56
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
};

function deleteOrder(dg, id) {
\tvar title = '";
        // line 60
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 61
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " ' + id + '?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeleteOrder(p.id, p.dg);
\t};
    new GF_Alert(title, msg, func, true, params);
};
\t 
function deleteMultipleOrders(dg, ids) {
\tvar title = '";
        // line 73
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 74
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " ' + ids.join(', ') + '?';
\tvar params = {
\t\tdg: dg,
\t\tids: ids
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeleteOrder(p.ids, p.dg);
\t};
    new GF_Alert(title, msg, func, true, params);
};

function changeStatus(dg, id, status) {
\treturn xajax_doChangeOrderStatus(id, dg, status);
};

function changeStatusMulti(dg, ids, status) {
\treturn xajax_doChangeOrderStatus(ids, dg, status);
};

var theDatagrid;
   
\$(document).ready(function() {
\t\t
\tvar column_id = new GF_Datagrid_Column({
\t\tid: 'idorder',
\t\tcaption: '";
        // line 99
        echo Gekosale\Translation::get("TXT_ID");
        echo "',
\t\tappearance: {
\t\t\twidth: 30
\t\t},
\t\tsorting: {
\t\t\tdefault_order: GF_Datagrid.SORT_DIR_DESC
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});
\t\t
\t\tvar column_client = new GF_Datagrid_Column({
\t\t\tid: 'client',
\t\t\tcaption: '";
        // line 113
        echo Gekosale\Translation::get("TXT_CLIENT");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 140
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\t\tsource: xajax_GetClientSuggestions,
\t\t\t}
\t\t});
\t\t
\t\tvar column_delivery = new GF_Datagrid_Column({
\t\t\tid: 'delivery',
\t\t\tcaption: '";
        // line 125
        echo Gekosale\Translation::get("TXT_DELIVER");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 140,
\t\t\t\tvisible: false
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_INPUT,
\t\t\t}
\t\t});
\t\t
\t\tvar column_price = new GF_Datagrid_Column({
\t\t\tid: 'price',
\t\t\tcaption: '";
        // line 137
        echo Gekosale\Translation::get("TXT_ORDER_BASE_VALUE");
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
\t\tvar column_products = new GF_Datagrid_Column({
\t\t\tid: 'products',
\t\t\tcaption: '";
        // line 149
        echo Gekosale\Translation::get("TXT_PRODUCTS");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 190,
\t\t\t\talign: GF_Datagrid.ALIGN_LEFT
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_INPUT,
\t\t\t}
\t\t});
\t\t
\t\tvar column_globalprice = new GF_Datagrid_Column({
\t\t\tid: 'globalprice',
\t\t\tcaption: '";
        // line 161
        echo Gekosale\Translation::get("TXT_TOTAL_ORDER_VALUE");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 80
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t\t}
\t\t});
\t\t
\t\tvar column_dispatchmethodprice = new GF_Datagrid_Column({
\t\t\tid: 'dispatchmethodprice',
\t\t\tcaption: '";
        // line 172
        echo Gekosale\Translation::get("TXT_DISPATCHMETHODPRICE");
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
\t\tvar column_orderstatusname = new GF_Datagrid_Column({
\t\t\tid: 'orderstatusname',
\t\t\tcaption: '";
        // line 184
        echo Gekosale\Translation::get("TXT_CURRENT_ORDER_STATUS");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 190,
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_TREE,
\t\t\t\tfiltered_column: 'orderstatusid',
\t\t\t\toptions: ";
        // line 191
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "orderstatusid");
        echo ",
\t\t\t}
\t\t});
\t\t
\t\tvar column_dispatchmethodname = new GF_Datagrid_Column({
\t\t\tid: 'dispatchmethodname',
\t\t\tcaption: '";
        // line 197
        echo Gekosale\Translation::get("TXT_DISPATCH_METHOD");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 90,
\t\t\t\tvisible: false
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_SELECT,
\t\t\t\toptions: [
\t\t\t\t\t";
        // line 205
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "dispatchmethodname");
        echo "
\t\t\t\t],
\t\t\t}
\t\t});
\t\t
\t\tvar column_paymentmethodname = new GF_Datagrid_Column({
\t\t\tid: 'paymentmethodname',
\t\t\tcaption: '";
        // line 212
        echo Gekosale\Translation::get("TXT_PAYMENT_METHOD");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 90,
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_SELECT,
\t\t\t\toptions: [
\t\t\t\t\t";
        // line 219
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "paymentmethodname");
        echo "
\t\t\t\t],
\t\t\t}
\t\t});
\t\t
\t\tvar column_adddate = new GF_Datagrid_Column({
\t\t\tid: 'adddate',
\t\t\tcaption: '";
        // line 226
        echo Gekosale\Translation::get("TXT_ADDDATE");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 110
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t\t}
\t\t});
\t\t
\t\tvar column_comments = new GF_Datagrid_Column({
\t\t\tid: 'comments',
\t\t\tcaption: '";
        // line 237
        echo Gekosale\Translation::get("TXT_COMMENT");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 110,
\t\t\t\tvisible: false
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_INPUT,
\t\t\t}
\t\t});

\t\tvar action_changeStatus = new GF_Action({
\t\t\timg: '";
        // line 248
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "/_images_panel/datagrid/change-status.png',
\t\t\tcaption: '";
        // line 249
        echo Gekosale\Translation::get("TXT_CHANGE_STATUS");
        echo "',
\t\t\taction: changeStatus,
\t\t\tvalues: ";
        // line 251
        if (isset($context["order_statuses"])) { $_order_statuses_ = $context["order_statuses"]; } else { $_order_statuses_ = null; }
        echo $_order_statuses_;
        echo "
\t\t});
\t
\t\tvar action_changeStatusMulti = new GF_Action({
\t\t\timg: '";
        // line 255
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "/_images_panel/datagrid/change-status.png',
\t\t\tcaption: '";
        // line 256
        echo Gekosale\Translation::get("TXT_CHANGE_STATUS");
        echo "',
\t\t\taction: changeStatusMulti,
\t\t\tvalues: ";
        // line 258
        if (isset($context["order_statuses"])) { $_order_statuses_ = $context["order_statuses"]; } else { $_order_statuses_ = null; }
        echo $_order_statuses_;
        echo "
\t\t});
\t
    var options = {
\t\t\tid: 'order',
\t\t\tmechanics: {
\t\t\t\tkey: 'idorder',
\t\t\t\trows_per_page: ";
        // line 265
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t\t},
\t\t\tevent_handlers: {
\t\t\t\tload: xajax_LoadAllOrder,
\t\t\t\tprocess: processOrder,
\t\t\t\tloaded: dataLoaded,
\t\t\t\tview_row: viewOrder,
\t\t\t\tdelete_row: deleteOrder,
\t\t\t\tedit_row: editOrder,
\t\t\t\tdelete_group: deleteMultipleOrders,
\t\t\t\t";
        // line 275
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 276
            echo "\t\t\t\tclick_row: editOrder
\t\t\t\t";
        }
        // line 278
        echo "\t\t\t},
\t\t\tcolumns: [
\t\t\t\tcolumn_id,
\t\t\t\tcolumn_client,
\t\t\t\tcolumn_delivery,
\t\t\t\tcolumn_products,
\t\t\t\tcolumn_price,
\t\t\t\tcolumn_dispatchmethodprice,
\t\t\t\tcolumn_orderstatusname,
\t\t\t\tcolumn_dispatchmethodname,
\t\t\t\tcolumn_paymentmethodname,
\t\t\t\tcolumn_globalprice,
\t\t\t\tcolumn_adddate,
\t\t\t\tcolumn_comments
\t\t\t],
\t\t\trow_actions: [
\t\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\t\taction_changeStatus,
\t\t\t\tGF_Datagrid.ACTION_DELETE,
\t\t\t],
\t\t\tcontext_actions: [
\t\t\t\taction_changeStatus,
\t\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\t\tGF_Datagrid.ACTION_DELETE
\t\t\t],
\t\t\tgroup_actions: [
\t\t\t\taction_changeStatus,
\t\t\t\tGF_Datagrid.ACTION_DELETE
\t\t\t],
\t\t
    };
    
    theDatagrid = new GF_Datagrid(\$('#list-orders'), options);
    
    \$('.GF_Datagrid_Col_adddate .GF_Datagrid_filter_between .from').datepicker({dateFormat: 'yy-mm-dd 00:00:00'});
    \$('.GF_Datagrid_Col_adddate .GF_Datagrid_filter_between .to').datepicker({dateFormat: 'yy-mm-dd 23:59:59'});

\t});
   
   /*]]>*/
   
   
   
  </script>
";
    }

    public function getTemplateName()
    {
        return "order\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 278,  431 => 276,  428 => 275,  414 => 265,  403 => 258,  398 => 256,  393 => 255,  385 => 251,  380 => 249,  375 => 248,  361 => 237,  347 => 226,  336 => 219,  326 => 212,  315 => 205,  304 => 197,  294 => 191,  284 => 184,  269 => 172,  255 => 161,  240 => 149,  225 => 137,  210 => 125,  195 => 113,  178 => 99,  150 => 74,  146 => 73,  131 => 61,  127 => 60,  117 => 56,  107 => 52,  74 => 21,  63 => 13,  58 => 10,  55 => 9,  39 => 6,  29 => 3,  26 => 2,);
    }
}
