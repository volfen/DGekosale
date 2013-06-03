<?php

/* default/templates/email/header.tpl */
class __TwigTemplate_b8aa4fe3dfbb62efddcdd441155ca83b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"> 
</head>
<body>
    <!-- body-table -->
    <table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\"><tr><td>
        <!-- wrapper -->
        <table width=\"604\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\"><tr><td>
            <!-- header -->
            <table width=\"604\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                <tr>
                    <td align=\"left\" style=\"padding-bottom:20px; padding-top:10px;\">
                        <a target=\"_blank\" href=\"";
        // line 15
        echo Gekosale\Template::getPathFromRoute("frontend.home");
        echo "\" title=\"";
        if (isset($context["SHOP_NAME"])) { $_SHOP_NAME_ = $context["SHOP_NAME"]; } else { $_SHOP_NAME_ = null; }
        echo $_SHOP_NAME_;
        echo "\"><img style=\"display:block; border:0;\" src='cid:logo' alt=\"\" ></a>
                    </td>
                </tr>
            </table>
            <!-- /header -->
            <!-- body -->
            <table width=\"604\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"color:#484848; border:5px solid #efefef;\">
                <tr>
                    <td style=\"font-family:'Segoe UI',Arial,sans-serif; font-size:12px; padding:10px;\" valign=\"top\">
                        <!-- content -->
                        ";
    }

    public function getTemplateName()
    {
        return "default/templates/email/header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  17 => 1,);
    }
}
