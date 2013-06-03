<?php

/* clientaccountbox\index\index.tpl */
class __TwigTemplate_e9e47014c5f08cba120c68e5404d1b54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layoutbox.tpl");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutbox.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo " ";
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if ((!twig_test_empty($_client_))) {
            // line 4
            echo "<nav class=\"category-nav well\">
\t<h1>";
            // line 5
            if (isset($context["box"])) { $_box_ = $context["box"]; } else { $_box_ = null; }
            echo $this->getAttribute($_box_, "heading");
            echo "</h1>
    <ul class=\"nav nav-pills nav-stacked\">
    \t<li ";
            // line 7
            if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
            if (($_CURRENT_CONTROLLER_ == "clientsettings")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo Gekosale\Template::getPathFromRoute("frontend.clientsettings");
            echo "\">";
            echo Gekosale\Translation::get("TXT_SETTINGS");
            echo "</a></li>
\t\t<li ";
            // line 8
            if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
            if (($_CURRENT_CONTROLLER_ == "clientorder")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo Gekosale\Template::getPathFromRoute("frontend.clientorder");
            echo "\">";
            echo Gekosale\Translation::get("TXT_ORDERS");
            echo "</a></li>
\t\t<li ";
            // line 9
            if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
            if (($_CURRENT_CONTROLLER_ == "clientaddress")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo Gekosale\Template::getPathFromRoute("frontend.clientaddress");
            echo "\">";
            echo Gekosale\Translation::get("TXT_CLIENT_ADDRESS");
            echo "</a></li>
    </ul>
</nav>
";
        } else {
            // line 13
            echo "<nav class=\"category-nav well\">
\t<h1>";
            // line 14
            if (isset($context["box"])) { $_box_ = $context["box"]; } else { $_box_ = null; }
            echo $this->getAttribute($_box_, "heading");
            echo "</h1>
    <ul class=\"nav nav-pills nav-stacked\">
    \t<li><a href=\"";
            // line 16
            echo Gekosale\Template::getPathFromRoute("frontend.clientlogin");
            echo "\">";
            echo Gekosale\Translation::get("TXT_LOGIN_TO_YOUR_ACCOUNT");
            echo "</a></li>
\t\t<li><a href=\"";
            // line 17
            echo Gekosale\Template::getPathFromRoute("frontend.registration");
            echo "\">";
            echo Gekosale\Translation::get("TXT_REGISTER");
            echo "</a></li>
    </ul>
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "clientaccountbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 17,  87 => 16,  81 => 14,  78 => 13,  64 => 9,  53 => 8,  42 => 7,  36 => 5,  33 => 4,  29 => 3,  26 => 2,);
    }
}
