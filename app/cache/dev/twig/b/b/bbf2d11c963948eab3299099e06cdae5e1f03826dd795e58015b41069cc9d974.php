<?php

/* CasinoPokerBundle:Default:index.html.twig */
class __TwigTemplate_d3b4fdad708924365dcb9958db5b9350a58b22447bb45a7b82f3d9ba32b36336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Head' => array($this, 'block_Head'),
            'Style' => array($this, 'block_Style'),
            'Script' => array($this, 'block_Script'),
            'Body' => array($this, 'block_Body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95171973c9cf2a0ee8a033120f957bd30c9d9e6e06bda51d2fd22f9eb91acd58 = $this->env->getExtension("native_profiler");
        $__internal_95171973c9cf2a0ee8a033120f957bd30c9d9e6e06bda51d2fd22f9eb91acd58->enter($__internal_95171973c9cf2a0ee8a033120f957bd30c9d9e6e06bda51d2fd22f9eb91acd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CasinoPokerBundle:Default:index.html.twig"));

        // line 1
        $this->displayBlock('Head', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('Body', $context, $blocks);
        
        $__internal_95171973c9cf2a0ee8a033120f957bd30c9d9e6e06bda51d2fd22f9eb91acd58->leave($__internal_95171973c9cf2a0ee8a033120f957bd30c9d9e6e06bda51d2fd22f9eb91acd58_prof);

    }

    // line 1
    public function block_Head($context, array $blocks = array())
    {
        $__internal_4b72b211fd12b117d03e73023e5eef3a576948992f2f396812a622a311968ba5 = $this->env->getExtension("native_profiler");
        $__internal_4b72b211fd12b117d03e73023e5eef3a576948992f2f396812a622a311968ba5->enter($__internal_4b72b211fd12b117d03e73023e5eef3a576948992f2f396812a622a311968ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        // line 2
        echo "
  ";
        // line 3
        $this->displayBlock('Style', $context, $blocks);
        // line 7
        echo "
  ";
        // line 8
        $this->displayBlock('Script', $context, $blocks);
        // line 12
        echo "
";
        
        $__internal_4b72b211fd12b117d03e73023e5eef3a576948992f2f396812a622a311968ba5->leave($__internal_4b72b211fd12b117d03e73023e5eef3a576948992f2f396812a622a311968ba5_prof);

    }

    // line 3
    public function block_Style($context, array $blocks = array())
    {
        $__internal_528f1b23402a39726d184ad4d2c9155bd0d653a7536eef2772dec71444adad16 = $this->env->getExtension("native_profiler");
        $__internal_528f1b23402a39726d184ad4d2c9155bd0d653a7536eef2772dec71444adad16->enter($__internal_528f1b23402a39726d184ad4d2c9155bd0d653a7536eef2772dec71444adad16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_528f1b23402a39726d184ad4d2c9155bd0d653a7536eef2772dec71444adad16->leave($__internal_528f1b23402a39726d184ad4d2c9155bd0d653a7536eef2772dec71444adad16_prof);

    }

    // line 8
    public function block_Script($context, array $blocks = array())
    {
        $__internal_a9031f56918c30d7e81695bb48ee883ee49c9e3853207c5f61bab64acdecc5ac = $this->env->getExtension("native_profiler");
        $__internal_a9031f56918c30d7e81695bb48ee883ee49c9e3853207c5f61bab64acdecc5ac->enter($__internal_a9031f56918c30d7e81695bb48ee883ee49c9e3853207c5f61bab64acdecc5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 9
        echo "    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  ";
        
        $__internal_a9031f56918c30d7e81695bb48ee883ee49c9e3853207c5f61bab64acdecc5ac->leave($__internal_a9031f56918c30d7e81695bb48ee883ee49c9e3853207c5f61bab64acdecc5ac_prof);

    }

    // line 15
    public function block_Body($context, array $blocks = array())
    {
        $__internal_7a93e30e03fa2cf4214d5efe03ff94d9ed8c31779fe0ceddd19c827883f0a375 = $this->env->getExtension("native_profiler");
        $__internal_7a93e30e03fa2cf4214d5efe03ff94d9ed8c31779fe0ceddd19c827883f0a375->enter($__internal_7a93e30e03fa2cf4214d5efe03ff94d9ed8c31779fe0ceddd19c827883f0a375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 16
        echo "  <body>
    <div class=\"container\" id=\"casinotable\">

    <!--\t
    \t<div  class=\"profil1\"></div>
    \t<div class=\"profil2\"></div>
    \t<div class=\"profil3\"></div>
    \t<div class=\"profil4\"></div>
    \t<div class=\"profil5\"></div>
    \t<div class=\"profil6\"\"></div>
    \t<div class=\"profil7\"></div>
    \t<div class=\"profil8\"></div>    \t
        
    -->
   
\t<div class=\"table-responsive\">
   <img id=\"roulette\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/roulette.png"), "html", null, true);
        echo "\"></img>
   <div id=\"score\">";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")), "html", null, true);
        echo "</div>
\t  <div style=\"margin-left: 20%; height:60%; width: 60%;\">
\t  \t<div class=\"table-bordered col-md-12\">
\t  \t\t<button style=\"height:15%; width:115%; margin-left: -7.5%;\">1,2,3,4 MANQUE 1,2,3,4</button>
\t  \t</div>
\t  \t<div style=\"margin-top: 5%; margin-bottom: 5%; height:90%; width: 15%;\" class=\"table-bordered col-md-1\">
\t  \t\t<button style=\"height:100%; width: 32px; margin-left: -13.5px;\"><div id=\"triangle-1\"></div><div id=\"triangle-2\"></div></button>
\t  \t</div>
\t  \t<div style=\"margin-top: 5%; margin-bottom: 5%;width: 20%; height:80%;\" class=\" col-md-1\">
  \t\t  <div style=\"margin-top: 10px;\" class=\"table-bordered row\">
  \t\t  <button style=\"height:20%; width:100%;\">1</button>
  \t\t  </div>
  \t\t  <div style=\"margin-top: 10px;\" class=\"table-bordered row\">
\t\t\t<button style=\"height:20%; width:100%\">3</button>
  \t\t  </div>
  \t\t  <div style=\"margin-top: 10px;\" class=\"table-bordered row\">
  \t\t  \t<button style=\"height:20%; width: 100%;\">6</button>
  \t\t  </div>
  \t\t  <div style=\"margin-top: 10px;\" class=\"table-bordered row\">
  \t\t  \t<button style=\"height:20%; width: 100%;\">8</button>
  \t\t  </div>
\t  \t</div>
\t  \t<div style=\"margin-top: 5%; margin-bottom: 5%; width: 30%;height:80%;\" class=\"col-md-1\">
  \t\t  <div style=\"height: 70px; margin-top: 3px;\" class=\"table-bordered row\">
  \t\t  \t<button style=\"height:100%; width: 100%;\">IMPAIR<br/>1,3,5,7,9</button>
  \t\t  </div>
  \t\t  <div style=\"height: 70px; margin-top: 3px;\" class=\"table-bordered row\">
  \t\t  \t<button style=\"height:100%; width: 100%;\"><div class=\"cercle\">5</div></button>
  \t\t  </div>
  \t\t  <div style=\"height: 70px; margin-top: 3px;\" class=\"table-bordered row\">
  \t\t  \t<button style=\"height:100%; width: 100%;\">PAIR<br/>2,4,6,8</button>
  \t\t  </div>
\t  \t</div>
\t  \t<div style=\"margin-top: 5%; margin-bottom: 5%;width: 20%; height:80%;\" class=\"col-md-1\">
  \t\t  <div style=\"margin-top: 10px;\" class=\"table-bordered row\">
  \t\t  \t<button style=\"height:20%; width: 100%;\">2</button>
  \t\t  </div>
  \t\t  <div style=\"margin-top: 10px;\" class=\"table-bordered row\">
  \t\t  \t<button style=\"height:20%; width: 100%;\">4</button>
  \t\t  </div>
  \t\t  <div style=\"margin-top: 10px;\" class=\"table-bordered row\">
  \t\t  \t<button style=\"height:20%; width: 100%;\">7</button>
  \t\t  </div>
  \t\t  <div style=\"margin-top: 10px;\" class=\"table-bordered row\">
  \t\t  \t<button style=\"height:20%; width: 100%;\">9</button>
  \t\t  </div>
\t  \t</div>
\t  \t<div style=\"margin-top: 5%; margin-bottom: 5%; height:90%; width: 15%;\" class=\"table-bordered col-md-1\">
\t  \t\t<button style=\"height:100%; width:32px; margin-left: -14px; padding:10px\">
        <div class=\"centerRed\"><div id=\"triangle-3\"></div><div id=\"triangle-4\"></div></div></button>
\t  \t</div>
\t  \t<div class=\"table-bordered col-md-12\">
\t  \t\t<button style=\"height:15%; width:114%; margin-left: -7%;\">6,7,8,9 PASSE 6,7,8,9</button>
\t  \t</div>
\t  </div>
\t</div>
    </div>
  </body>
";
        
        $__internal_7a93e30e03fa2cf4214d5efe03ff94d9ed8c31779fe0ceddd19c827883f0a375->leave($__internal_7a93e30e03fa2cf4214d5efe03ff94d9ed8c31779fe0ceddd19c827883f0a375_prof);

    }

    public function getTemplateName()
    {
        return "CasinoPokerBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  122 => 32,  104 => 16,  98 => 15,  89 => 10,  86 => 9,  80 => 8,  71 => 5,  68 => 4,  62 => 3,  54 => 12,  52 => 8,  49 => 7,  47 => 3,  44 => 2,  38 => 1,  31 => 15,  28 => 14,  26 => 1,);
    }
}
/* {% block Head %}*/
/* */
/*   {% block Style %}*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*   {% endblock %}*/
/* */
/*   {% block Script %}*/
/*     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>*/
/*   {% endblock Script %}*/
/* */
/* {% endblock Head %}*/
/* */
/* {% block Body %}*/
/*   <body>*/
/*     <div class="container" id="casinotable">*/
/* */
/*     <!--	*/
/*     	<div  class="profil1"></div>*/
/*     	<div class="profil2"></div>*/
/*     	<div class="profil3"></div>*/
/*     	<div class="profil4"></div>*/
/*     	<div class="profil5"></div>*/
/*     	<div class="profil6""></div>*/
/*     	<div class="profil7"></div>*/
/*     	<div class="profil8"></div>    	*/
/*         */
/*     -->*/
/*    */
/* 	<div class="table-responsive">*/
/*    <img id="roulette" src="{{asset('img/roulette.png')}}"></img>*/
/*    <div id="score">{{ score }}</div>*/
/* 	  <div style="margin-left: 20%; height:60%; width: 60%;">*/
/* 	  	<div class="table-bordered col-md-12">*/
/* 	  		<button style="height:15%; width:115%; margin-left: -7.5%;">1,2,3,4 MANQUE 1,2,3,4</button>*/
/* 	  	</div>*/
/* 	  	<div style="margin-top: 5%; margin-bottom: 5%; height:90%; width: 15%;" class="table-bordered col-md-1">*/
/* 	  		<button style="height:100%; width: 32px; margin-left: -13.5px;"><div id="triangle-1"></div><div id="triangle-2"></div></button>*/
/* 	  	</div>*/
/* 	  	<div style="margin-top: 5%; margin-bottom: 5%;width: 20%; height:80%;" class=" col-md-1">*/
/*   		  <div style="margin-top: 10px;" class="table-bordered row">*/
/*   		  <button style="height:20%; width:100%;">1</button>*/
/*   		  </div>*/
/*   		  <div style="margin-top: 10px;" class="table-bordered row">*/
/* 			<button style="height:20%; width:100%">3</button>*/
/*   		  </div>*/
/*   		  <div style="margin-top: 10px;" class="table-bordered row">*/
/*   		  	<button style="height:20%; width: 100%;">6</button>*/
/*   		  </div>*/
/*   		  <div style="margin-top: 10px;" class="table-bordered row">*/
/*   		  	<button style="height:20%; width: 100%;">8</button>*/
/*   		  </div>*/
/* 	  	</div>*/
/* 	  	<div style="margin-top: 5%; margin-bottom: 5%; width: 30%;height:80%;" class="col-md-1">*/
/*   		  <div style="height: 70px; margin-top: 3px;" class="table-bordered row">*/
/*   		  	<button style="height:100%; width: 100%;">IMPAIR<br/>1,3,5,7,9</button>*/
/*   		  </div>*/
/*   		  <div style="height: 70px; margin-top: 3px;" class="table-bordered row">*/
/*   		  	<button style="height:100%; width: 100%;"><div class="cercle">5</div></button>*/
/*   		  </div>*/
/*   		  <div style="height: 70px; margin-top: 3px;" class="table-bordered row">*/
/*   		  	<button style="height:100%; width: 100%;">PAIR<br/>2,4,6,8</button>*/
/*   		  </div>*/
/* 	  	</div>*/
/* 	  	<div style="margin-top: 5%; margin-bottom: 5%;width: 20%; height:80%;" class="col-md-1">*/
/*   		  <div style="margin-top: 10px;" class="table-bordered row">*/
/*   		  	<button style="height:20%; width: 100%;">2</button>*/
/*   		  </div>*/
/*   		  <div style="margin-top: 10px;" class="table-bordered row">*/
/*   		  	<button style="height:20%; width: 100%;">4</button>*/
/*   		  </div>*/
/*   		  <div style="margin-top: 10px;" class="table-bordered row">*/
/*   		  	<button style="height:20%; width: 100%;">7</button>*/
/*   		  </div>*/
/*   		  <div style="margin-top: 10px;" class="table-bordered row">*/
/*   		  	<button style="height:20%; width: 100%;">9</button>*/
/*   		  </div>*/
/* 	  	</div>*/
/* 	  	<div style="margin-top: 5%; margin-bottom: 5%; height:90%; width: 15%;" class="table-bordered col-md-1">*/
/* 	  		<button style="height:100%; width:32px; margin-left: -14px; padding:10px">*/
/*         <div class="centerRed"><div id="triangle-3"></div><div id="triangle-4"></div></div></button>*/
/* 	  	</div>*/
/* 	  	<div class="table-bordered col-md-12">*/
/* 	  		<button style="height:15%; width:114%; margin-left: -7%;">6,7,8,9 PASSE 6,7,8,9</button>*/
/* 	  	</div>*/
/* 	  </div>*/
/* 	</div>*/
/*     </div>*/
/*   </body>*/
/* {% endblock Body %}*/
