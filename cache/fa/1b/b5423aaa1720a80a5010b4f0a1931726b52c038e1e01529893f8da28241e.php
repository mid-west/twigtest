<?php

/* index.twig */
class __TwigTemplate_fa1bb5423aaa1720a80a5010b4f0a1931726b52c038e1e01529893f8da28241e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_7f3fe4bd967497fbe5ec53efc8f0aedada8083825e2eb200ab3b9f7b965c8c64' => array($this, 'block___internal_7f3fe4bd967497fbe5ec53efc8f0aedada8083825e2eb200ab3b9f7b965c8c64'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">
<link rel=\"shortcut icon\" href=\"/img/favicon.png\">
<title>Theme Template for Bootstrap</title>
<!-- Bootstrap core CSS -->
<link href=\"/css/bootstrap.css\" rel=\"stylesheet\">
<!-- Bootstrap theme -->
<link href=\"/css/bootstrap-theme.min.css\" rel=\"stylesheet\">

<!-- Custom styles for this template -->
<link href=\"theme.css\" rel=\"stylesheet\">

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src=\"../../docs-assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
<script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
<![endif]-->
</head>

<body>

";
        // line 32
        $this->env->loadTemplate("gnav.twig")->display($context);
        // line 33
        echo "

<div class=\"container theme-showcase\">

<div class=\"well\">
<h2>代入</h2>
";
        // line 39
        $context["foo1"] = "foo";
        // line 40
        $context["foo2"] = array(0 => 1, 1 => 2);
        // line 41
        $context["foo3"] = array("foo" => "bar");
        // line 42
        echo "    <br />
";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["foo1"]) ? $context["foo1"] : null), "html", null, true);
        echo "<br />
";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["foo2"]) ? $context["foo2"] : null), 1), "html", null, true);
        echo "<br />
";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["foo3"]) ? $context["foo3"] : null), "foo"), "html", null, true);
        echo "
</div>

<div class=\"well\">
    <h2>フィルタ</h2>
    ";
        // line 50
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, strip_tags((isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "<br />
    ";
        // line 51
        echo twig_escape_filter($this->env, strip_tags(twig_title_string_filter($this->env, (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "<br />
    ";
        // line 52
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, (isset($context["name"]) ? $context["name"] : null)), "html", null, true);
        echo "<br />
    <br />
    ";
        // line 54
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value2"]) ? $context["value2"] : null), "-"), "html", null, true);
        echo "      ";
        // line 55
        echo "    <br />

    ";
        // line 58
        echo "    ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_7f3fe4bd967497fbe5ec53efc8f0aedada8083825e2eb200ab3b9f7b965c8c64", $context, $blocks)), "html", null, true);
        // line 61
        echo "
</div>

<div class=\"well\">
    <h2>制御構文</h2>
    ";
        // line 66
        if ((twig_length_filter($this->env, (isset($context["value1"]) ? $context["value1"] : null)) > 1)) {
            // line 67
            echo "    if文の中
    ";
        } elseif ((twig_length_filter($this->env, (isset($context["value1"]) ? $context["value1"] : null)) > 2)) {
            // line 69
            echo "    elseの中
    ";
        }
        // line 71
        echo "
    <ul><!-- for構文？？ -->

    </ul>
</div>

<div class=\"well\">
    <h2>escape</h2>
    ";
        // line 80
        echo "    <p>Everything will be automatically escaped in this block (using the HTML strategy)</p>
    ";
        // line 82
        echo "
</div>

<div class=\"well\">
    <h2>Macros</h2>
    ???????????????

</div>


<div class=\"well\">
    <h2>Expressions</h2>
    ";
        // line 94
        $context["foo"] = array(0 => 1, 1 => array("foo" => "bar"));
        // line 95
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["foo"]) ? $context["foo"] : null), "html", null, true);
        echo "<br />
    ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["foo"]) ? $context["foo"] : null), 0), "html", null, true);
        echo "<br />
    ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["foo"]) ? $context["foo"] : null), 1), "foo"), "html", null, true);
        echo "<br />

</div>

<div class=\"well\">
    <h2>Math</h2>
    ";
        // line 103
        echo twig_escape_filter($this->env, (1 + 1), "html", null, true);
        echo "<br />
    ";
        // line 104
        echo twig_escape_filter($this->env, (3 - 2), "html", null, true);
        echo "<br />
    ";
        // line 105
        echo twig_escape_filter($this->env, (11 % 7), "html", null, true);
        echo "<br />

</div>

<div class=\"well\">
    <h2>Comparisons</h2>
    ";
        // line 111
        if ((0 === strpos("Fabien", "F"))) {
            // line 112
            echo "    START!!
    ";
        }
        // line 114
        echo "    ";
        if ((0 === substr_compare("Fabien", "n", -strlen("n")))) {
            // line 115
            echo "    END!!!
    ";
        }
        // line 117
        echo "
    ";
        // line 118
        $context["phone"] = "03-";
        // line 119
        echo "    ";
        if (preg_match("{^[d.]+\$}", (isset($context["phone"]) ? $context["phone"] : null))) {
            // line 120
            echo "    マッチ！ <!-- 正規表現 要確認 -->
    ";
        }
        // line 122
        echo "</div>

<div class=\"well\">
    <h2>Containment Operator</h2>
    ";
        // line 127
        echo "    ";
        echo twig_escape_filter($this->env, twig_in_filter(1, array(0 => 1, 1 => 2, 2 => 3)), "html", null, true);
        echo "
    ";
        // line 128
        echo twig_escape_filter($this->env, twig_in_filter("cd", "abcde"), "html", null, true);
        echo "<br />

    negative test<!-- 文法違う？ 要確認 -->
    ";
        // line 131
        echo twig_escape_filter($this->env, !twig_in_filter(1, array(0 => 2, 1 => 3)), "html", null, true);
        echo "

</div>

<div class=\"well\">
    <h2>Test Operator</h2>
    ";
        // line 138
        echo "    ";
        echo twig_escape_filter($this->env, (7 % 2 == 1), "html", null, true);
        echo "

</div>

<div class=\"well\">
    <h2>String Interpolation</h2>
    <!-- 途中で式の評価を行う -->
    ";
        // line 145
        $context["bar"] = "rab";
        // line 146
        echo "    ";
        echo twig_escape_filter($this->env, (("foo " . (isset($context["bar"]) ? $context["bar"] : null)) . " baz"), "html", null, true);
        echo "<br />
    ";
        // line 147
        echo twig_escape_filter($this->env, (("foo " . (1 + 2)) . " baz"), "html", null, true);
        echo "
</div>

<div class=\"well\">
    <h2>Whitespace Control</h2>
    ";
        // line 152
        ob_start();
        // line 153
        echo "    <div>
        <strong>foo bar</strong>
    </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 157
        echo "
    <!-- spacelessがない場合↓ -->
    <div>
        <strong>foo bar bar</strong>
    </div>

    ";
        // line 163
        $context["value"] = "no spaces";
        // line 166
        echo "<li>";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "    </li>
    <li>    ";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</li>
    <li>";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</li>



</div>



</div> <!-- /container -->

";
        // line 178
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 179
        echo "
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
<script src=\"/js/bootstrap.min.js\"></script>
<script src=\"/js/holder.js\"></script>
</body>
</html>";
    }

    // line 58
    public function block___internal_7f3fe4bd967497fbe5ec53efc8f0aedada8083825e2eb200ab3b9f7b965c8c64($context, array $blocks = array())
    {
        // line 59
        echo "    <p>abcdefg</p>
    ";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 59,  323 => 58,  311 => 179,  309 => 178,  296 => 168,  292 => 167,  287 => 166,  285 => 163,  277 => 157,  271 => 153,  269 => 152,  261 => 147,  256 => 146,  254 => 145,  243 => 138,  234 => 131,  228 => 128,  223 => 127,  217 => 122,  213 => 120,  210 => 119,  208 => 118,  205 => 117,  201 => 115,  198 => 114,  194 => 112,  192 => 111,  183 => 105,  179 => 104,  175 => 103,  166 => 97,  162 => 96,  157 => 95,  155 => 94,  141 => 82,  138 => 80,  128 => 71,  124 => 69,  120 => 67,  118 => 66,  111 => 61,  108 => 58,  104 => 55,  101 => 54,  96 => 52,  92 => 51,  88 => 50,  80 => 45,  76 => 44,  72 => 43,  69 => 42,  67 => 41,  65 => 40,  63 => 39,  55 => 33,  53 => 32,  20 => 1,);
    }
}
