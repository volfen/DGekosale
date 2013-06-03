<?php

/* breadcrumb.tpl */
class __TwigTemplate_45fd7bfd5840481bb779ba8de6a1f00e extends Twig_Template
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
        echo "<ul class=\"breadcrumb\" xmlns:v=\"http://rdf.data-vocabulary.org/#\">
";
        // line 2
        if (isset($context["breadcrumb"])) { $_breadcrumb_ = $context["breadcrumb"]; } else { $_breadcrumb_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_breadcrumb_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
            // line 3
            echo "   \t";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "last")) {
                // line 4
                echo "\t<li class=\"active\" typeof=\"v:Breadcrumb\">";
                if (isset($context["crumb"])) { $_crumb_ = $context["crumb"]; } else { $_crumb_ = null; }
                echo $this->getAttribute($_crumb_, "title");
                echo "</li>
    ";
            } else {
                // line 6
                echo "    <li typeof=\"v:Breadcrumb\"><a href=\"";
                echo Gekosale\Template::getPathFromRoute("frontend.home");
                if (isset($context["crumb"])) { $_crumb_ = $context["crumb"]; } else { $_crumb_ = null; }
                echo $this->getAttribute($_crumb_, "link");
                echo "\" rel=\"v:url\" property=\"v:title\">";
                if (isset($context["crumb"])) { $_crumb_ = $context["crumb"]; } else { $_crumb_ = null; }
                echo $this->getAttribute($_crumb_, "title");
                echo "</a> <span class=\"divider\">/</span></li>
    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "breadcrumb.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  155 => 32,  152 => 31,  144 => 29,  119 => 24,  113 => 22,  66 => 12,  196 => 66,  187 => 59,  184 => 58,  175 => 55,  168 => 53,  159 => 48,  141 => 38,  136 => 37,  131 => 36,  126 => 25,  107 => 20,  104 => 19,  98 => 17,  93 => 16,  88 => 15,  23 => 5,  337 => 104,  334 => 103,  332 => 102,  320 => 94,  316 => 92,  312 => 90,  304 => 89,  299 => 88,  287 => 86,  284 => 85,  278 => 81,  273 => 79,  269 => 77,  267 => 76,  261 => 73,  258 => 72,  249 => 70,  229 => 69,  226 => 68,  222 => 66,  217 => 63,  190 => 61,  181 => 59,  177 => 57,  166 => 52,  148 => 49,  138 => 46,  133 => 43,  130 => 42,  117 => 38,  106 => 33,  96 => 27,  89 => 18,  73 => 12,  49 => 6,  19 => 2,  71 => 15,  61 => 13,  58 => 9,  39 => 6,  173 => 56,  163 => 34,  156 => 32,  146 => 39,  143 => 48,  140 => 27,  127 => 26,  105 => 21,  102 => 23,  91 => 22,  76 => 16,  51 => 10,  47 => 8,  25 => 3,  24 => 4,  75 => 17,  65 => 14,  62 => 13,  59 => 12,  55 => 11,  48 => 9,  40 => 22,  37 => 6,  68 => 44,  45 => 8,  35 => 7,  139 => 20,  116 => 23,  81 => 12,  78 => 48,  72 => 9,  64 => 14,  54 => 11,  46 => 4,  20 => 2,  33 => 4,  27 => 2,  18 => 1,  112 => 35,  109 => 19,  103 => 32,  90 => 16,  80 => 18,  77 => 14,  57 => 12,  53 => 10,  44 => 23,  41 => 6,  38 => 3,  32 => 4,  29 => 3,  26 => 4,  195 => 44,  189 => 43,  185 => 60,  179 => 57,  176 => 39,  160 => 36,  153 => 35,  150 => 34,  137 => 32,  132 => 31,  124 => 30,  121 => 29,  115 => 28,  111 => 22,  101 => 19,  94 => 18,  86 => 15,  83 => 17,  79 => 20,  74 => 17,  70 => 12,  67 => 15,  63 => 10,  56 => 12,  52 => 10,  50 => 13,  43 => 6,  36 => 5,  28 => 3,  22 => 3,  17 => 1,);
    }
}
