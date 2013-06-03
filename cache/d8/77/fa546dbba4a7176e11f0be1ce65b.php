<?php

/* paymentbox\accept\ondelivery.tpl */
class __TwigTemplate_d877fa546dbba4a7176e11f0be1ce65b extends Twig_Template
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
        echo "<div class=\"row-fluid row-form\">
\t<h1 class=\"large\">Krok 3. Potwierdzenie i płatność</h1>
\t<div class=\"span11\">
    \t<div class=\"alert alert-block alert-success\">
        \t<h3>Twoje zamówienie zostało przyjęte.</h3>
\t\t</div>
\t\t<p class=\"marginbt20\">Dziękujemy za złożenie zamówienia.</p>

\t\t<h4 class=\"font15\">Sprawdź status zamówienia</h4>
        <p class=\"marginbt20\">W zakładce <a href=\"";
        // line 12
        echo Gekosale\Template::getPathFromRoute("frontend.clientorder");
        echo "\" title=\"\">historia zamówień</a> w Twoim koncie znajdziesz informacje na temat zamówień oraz statusu jego realizacji.</p>

        <h4 class=\"font15\">Biuro obsługi klienta</h4>
        <p class=\"marginbt20\">Skontaktuj się z <a href=\"";
        // line 15
        echo Gekosale\Template::getPathFromRoute("frontend.contact");
        echo "\" title=\"\">Biurem Obsługi klienta</a> aby uzyskać dodatkowe informacje lub dokonać zmian w zamówieniu.</p>

        <p class=\"marginbt20\">Dziękujemy za dokonanie zakupu i zapraszamy ponowne.</p>

        <a href=\"";
        // line 19
        echo Gekosale\Template::getPathFromRoute("frontend.mainside");
        echo "\" title=\"\"><i class=\"icon icon-arrow-left-blue\"></i> Wróć do sklepu</a>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "paymentbox\\accept\\ondelivery.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  46 => 15,  40 => 12,  29 => 3,  26 => 2,);
    }
}
