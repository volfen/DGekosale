<?php

/* default/templates/email/footer.tpl */
class __TwigTemplate_5a4aeeb69995af34a7d5c7a8f92e1a28 extends Twig_Template
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
        echo "\t\t\t\t\t\t<p>Pozdrawiamy,<br />";
        if (isset($context["SHOP_NAME"])) { $_SHOP_NAME_ = $context["SHOP_NAME"]; } else { $_SHOP_NAME_ = null; }
        echo $_SHOP_NAME_;
        echo "</p>
                        <!-- /content -->
                    </td>
                </tr>
            </table>
            <!-- /body -->
            
            <!-- footer -->
            <table width=\"604\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family:'Segoe UI',Arial,sans-serif; font-size:11px; color:#919191;\">
                <tr>
                    <td align=\"left\">
                        <p style=\"margin:11px 0;\">
                            <a href=\"";
        // line 13
        echo Gekosale\Template::getPathFromRoute("frontend.conditions");
        echo "\" title=\"Regulamin\" style=\"color:#484848; text-decoration:none;\">";
        echo Gekosale\Translation::get("TXT_CONDITIONS");
        echo "</a> &nbsp; | &nbsp;
                            <a href=\"";
        // line 14
        echo Gekosale\Template::getPathFromRoute("frontend.contact");
        echo "\" title=\"Zwroty\" style=\"color:#484848; text-decoration:none;\">";
        echo Gekosale\Translation::get("TXT_CONTACT");
        echo "</a> &nbsp; | &nbsp;
                            <a href=\"";
        // line 15
        echo Gekosale\Template::getPathFromRoute("frontend.news");
        echo "\" title=\"Reklamacje\" style=\"color:#484848; text-decoration:none;\">";
        echo Gekosale\Translation::get("TXT_NEWS");
        echo "</a> &nbsp; | &nbsp;
                            <a href=\"";
        // line 16
        echo Gekosale\Template::getPathFromRoute("frontend.clientorder");
        echo "\" title=\"FAQ\" style=\"color:#484848; text-decoration:none;\">";
        echo Gekosale\Translation::get("TXT_ORDER_STATUS");
        echo "</a>
                        </p>
                    </td>
                    <td width=\"30%\" align=\"right\">
                        <p style=\"margin:11px 0;\">&copy; 2012 ";
        // line 20
        if (isset($context["SHOP_NAME"])) { $_SHOP_NAME_ = $context["SHOP_NAME"]; } else { $_SHOP_NAME_ = null; }
        echo $_SHOP_NAME_;
        echo "</p>
                    </td>
                </tr>
                <tr>
                    <td align=\"center\">
                        <p>";
        // line 25
        echo Gekosale\Translation::get("TXT_FOOTER_EMAIL");
        echo "</p>
                    </td>
                </tr>
            </table>
            <!-- /footer -->                    
            
        </td></tr></table>
        <!-- /wrapper -->
        
    </td></tr></table>
    <!-- /body-table -->

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "default/templates/email/footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  52 => 16,  46 => 15,  40 => 14,  423 => 107,  418 => 106,  415 => 105,  406 => 102,  399 => 101,  392 => 100,  385 => 99,  378 => 98,  371 => 97,  364 => 96,  359 => 94,  349 => 90,  342 => 89,  335 => 88,  328 => 87,  321 => 86,  314 => 85,  307 => 84,  304 => 83,  295 => 82,  292 => 81,  289 => 80,  280 => 79,  277 => 78,  272 => 76,  266 => 74,  259 => 71,  255 => 70,  250 => 67,  243 => 64,  239 => 63,  236 => 62,  229 => 59,  225 => 58,  218 => 55,  213 => 54,  210 => 53,  207 => 52,  201 => 50,  196 => 49,  189 => 46,  185 => 45,  180 => 42,  173 => 40,  163 => 38,  156 => 37,  151 => 36,  146 => 35,  133 => 34,  126 => 33,  121 => 32,  118 => 31,  112 => 30,  105 => 27,  98 => 26,  93 => 25,  88 => 24,  83 => 23,  80 => 22,  77 => 21,  70 => 25,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  34 => 13,  24 => 4,  33 => 15,  17 => 1,);
    }
}
