<?php

/* CasinoPokerBundle:Default:index.html.twig */
class __TwigTemplate_7aaaa359dc1b01fe50e628775a671f4984bd99c671975cf8e98bad317532beae extends Twig_Template
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
        $__internal_b909cd5673a47e1b90457e67ecad003169119b5791c9649ebbb716ad5ce4a45f = $this->env->getExtension("native_profiler");
        $__internal_b909cd5673a47e1b90457e67ecad003169119b5791c9649ebbb716ad5ce4a45f->enter($__internal_b909cd5673a47e1b90457e67ecad003169119b5791c9649ebbb716ad5ce4a45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CasinoPokerBundle:Default:index.html.twig"));

        // line 1
        $this->displayBlock('Head', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('Body', $context, $blocks);
        
        $__internal_b909cd5673a47e1b90457e67ecad003169119b5791c9649ebbb716ad5ce4a45f->leave($__internal_b909cd5673a47e1b90457e67ecad003169119b5791c9649ebbb716ad5ce4a45f_prof);

    }

    // line 1
    public function block_Head($context, array $blocks = array())
    {
        $__internal_befda211864426cf3bc29cd97c23c1e35cfd203db8a6adbdb924497de938918a = $this->env->getExtension("native_profiler");
        $__internal_befda211864426cf3bc29cd97c23c1e35cfd203db8a6adbdb924497de938918a->enter($__internal_befda211864426cf3bc29cd97c23c1e35cfd203db8a6adbdb924497de938918a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

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
        
        $__internal_befda211864426cf3bc29cd97c23c1e35cfd203db8a6adbdb924497de938918a->leave($__internal_befda211864426cf3bc29cd97c23c1e35cfd203db8a6adbdb924497de938918a_prof);

    }

    // line 3
    public function block_Style($context, array $blocks = array())
    {
        $__internal_e1151b09c52d674845d5ff7e1c7c06a0da6e7a6eb82e0b430daccc22f7ce8754 = $this->env->getExtension("native_profiler");
        $__internal_e1151b09c52d674845d5ff7e1c7c06a0da6e7a6eb82e0b430daccc22f7ce8754->enter($__internal_e1151b09c52d674845d5ff7e1c7c06a0da6e7a6eb82e0b430daccc22f7ce8754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_e1151b09c52d674845d5ff7e1c7c06a0da6e7a6eb82e0b430daccc22f7ce8754->leave($__internal_e1151b09c52d674845d5ff7e1c7c06a0da6e7a6eb82e0b430daccc22f7ce8754_prof);

    }

    // line 8
    public function block_Script($context, array $blocks = array())
    {
        $__internal_56456441cf6ad56efe29bed030294e16a2c80876fe16096b60e3eb208352861e = $this->env->getExtension("native_profiler");
        $__internal_56456441cf6ad56efe29bed030294e16a2c80876fe16096b60e3eb208352861e->enter($__internal_56456441cf6ad56efe29bed030294e16a2c80876fe16096b60e3eb208352861e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 9
        echo "    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  ";
        
        $__internal_56456441cf6ad56efe29bed030294e16a2c80876fe16096b60e3eb208352861e->leave($__internal_56456441cf6ad56efe29bed030294e16a2c80876fe16096b60e3eb208352861e_prof);

    }

    // line 15
    public function block_Body($context, array $blocks = array())
    {
        $__internal_739a21e11c58f8edb8751fba7713d180ef4631e6b41d99bf428c2fefb427a7bf = $this->env->getExtension("native_profiler");
        $__internal_739a21e11c58f8edb8751fba7713d180ef4631e6b41d99bf428c2fefb427a7bf->enter($__internal_739a21e11c58f8edb8751fba7713d180ef4631e6b41d99bf428c2fefb427a7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 16
        echo "  <body>
    <div class=\"container\" id=\"casinotable\">
\t<div class=\"table-responsive\">
   <div id=\"roulet\"></div>
   <div id=\"status\"></div>
   <div id=\"score\"></div>
\t  <div style=\"margin-left: 20%; height:60%; width: 60%;\">
\t  \t<div class=\" col-md-12\">
\t  \t\t<button class=\"manque\" style=\"height:15%; width:115%;\">1,2,3,4 MANQUE 1,2,3,4</button>
\t  \t</div>
\t  \t<div style=\"margin-top: 5%; margin-bottom: 5%; height:90%; width: 15%;\" class=\" col-md-1\">
\t  \t\t<button class=\"noir\" style=\"height:100%; width: 32px; margin-left: -13.5px;\"><div id=\"triangle-1\"></div><div id=\"triangle-2\"></div></button>
\t  \t</div>
\t  \t<div style=\"margin-top: 5%; margin-bottom: 5%;width: 20%; height:80%;\" class=\" col-md-1\">
  \t\t  <div style=\"margin-top: 10px;\" class=\" row\">
  \t\t  <button class=\"un\" style=\"height:20%; width:100%;\">1</button>
  \t\t  </div>
  \t\t  <div style=\"margin-top: 10px;\" class=\" row\">
\t\t\t<button class=\"trois\" style=\"height:20%; width:100%\">3</button>
  \t\t  </div>
  \t\t  <div style=\"margin-top: 10px;\" class=\" row\">
  \t\t  \t<button class=\"six\" style=\"height:20%; width: 100%;\">6</button>
  \t\t  </div>
  \t\t  <div style=\"margin-top: 10px;\" class=\" row\">
  \t\t  \t<button class=\"huit\" style=\"height:20%; width: 100%;\">8</button>
  \t\t  </div>
\t  \t</div>
\t  \t<div style=\"margin-top: 5%; margin-bottom: 5%; width: 30%;height:80%;\" class=\"col-md-1\">
  \t\t  <div style=\"height: 70px; margin-top: 3px;\" class=\" row\">
  \t\t  \t<button class=\"impair\" style=\"height:100%; width: 100%;\">IMPAIR<br/>1,3,5,7,9</button>
  \t\t  </div>
  \t\t  <div style=\"height: 70px; margin-top: 3px;\" class=\" row\">
  \t\t  \t<button class=\"cinq\" style=\"height:100%; width: 100%;\"><div class=\"cercle\">5</div></button>
  \t\t  </div>
  \t\t  <div style=\"height: 70px; margin-top: 3px;\" class=\" row\">
  \t\t  \t<button class=\"pair\" style=\"height:100%; width: 100%;\">PAIR<br/>2,4,6,8</button>
  \t\t  </div>
\t  \t</div>
\t  \t<div style=\"margin-top: 5%; margin-bottom: 5%;width: 20%; height:80%;\" class=\"col-md-1\">
  \t\t  <div style=\"margin-top: 10px;\" class=\" row\">
  \t\t  \t<button class=\"deux\" style=\"height:20%; width: 100%;\">2</button>
  \t\t  </div>
  \t\t  <div style=\"margin-top: 10px;\" class=\" row\">
  \t\t  \t<button class=\"quatre\" style=\"height:20%; width: 100%;\">4</button>
  \t\t  </div>
  \t\t  <div style=\"margin-top: 10px;\" class=\" row\">
  \t\t  \t<button class=\"sept\" style=\"height:20%; width: 100%;\">7</button>
  \t\t  </div>
  \t\t  <div style=\"margin-top: 10px;\" class=\" row\">
  \t\t  \t<button class=\"neuf\" style=\"height:20%; width: 100%;\">9</button>
  \t\t  </div>
\t  \t</div>
\t  \t<div style=\"margin-top: 5%; margin-bottom: 5%; height:90%; width: 15%;\" class=\" col-md-1\">
\t  \t\t<button class=\"rouge\" style=\"height:100%; width:32px; margin-left: -14px; padding:10px\">
        <div class=\"centerRed\"><div id=\"triangle-3\"></div><div id=\"triangle-4\"></div></div></button>
\t  \t</div>
\t  \t<div class=\" col-md-12\">
\t  \t\t<button class=\"passe\" style=\"height:15%; width:114%; margin-left: -7%;\">6,7,8,9 PASSE 6,7,8,9</button>
\t  \t</div>
\t  </div>
\t</div>
    </div>

<p id=\"menu\"></p>

<script type=\"text/javascript\">

\$(function(){
    var NewContent='<li id=\"wessJeton\"  class=\"jeton\"></li>'
    \$(\".passe\").click(function(){
        \$(\".passe\").after(NewContent);
    });
    \$(\".rouge\").click(function(){
        \$(\".rouge\").after(NewContent);
    });
    \$(\".neuf\").click(function(){
        \$(\".neuf\").after(NewContent);
    });
    \$(\".sept\").click(function(){
        \$(\".sept\").after(NewContent);
    });
    \$(\".quatre\").click(function(){
        \$(\".quatre\").after(NewContent);
    });
    \$(\".deux\").click(function(){
        \$(\".deux\").after(NewContent);
    });
    \$(\".pair\").click(function(){
        \$(\".pair\").after(NewContent);
    });
    \$(\".cinq\").click(function(){
        \$(\".cinq\").after(NewContent);
    });
     \$(\".impair\").click(function(){
        \$(\".impair\").after(NewContent);
    });
    \$(\".huit\").click(function(){
        \$(\".huit\").after(NewContent);
    });
    \$(\".six\").click(function(){
        \$(\".six\").after(NewContent);
    });
    \$(\".trois\").click(function(){
        \$(\".trois\").after(NewContent);
    });
    \$(\".un\").click(function(){
        \$(\".un\").after(NewContent);
    });
    \$(\".noir\").click(function(){
        \$(\".noir\").after(NewContent);
    });
});

</script>
 
<script type=\"text/javascript\">

\tdocument.getElementById('roulet').innerHTML = \"<img id='roulette' src='";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/roulette.gif"), "html", null, true);
        echo "'></img>\";
\tdocument.getElementById('status').innerHTML ='Rien ne va plus!';
\tsetTimeout(function(){document.getElementById('status').innerHTML ='Les jeux sont faits';}, 1500);
\t
\t
\tvar j = Math.floor(Math.random() * (70-40) + 40);
\t
\tfunction lancerDeBoule(n) {
\t
\t\tif(n!=j){
\t\t\t
\t\t\tvar de1=Math.floor(Math.random()*9)+1;
\t\t\tif (de1 == 1 | de1 ==  3 | de1 == 6 | de1 ==  8){
\t\t\t\tdocument.getElementById('score').innerHTML =\"<div style='background-color: black'  id='fff'>\" + de1 + \"</div>\";
\t\t\t}
\t\t\telse if(de1 == 5) {
\t\t\t\tdocument.getElementById('score').innerHTML =\"<div style='background-color: yellow; color: black;'  id='fff'>\" + de1 + \"</div>\";
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById('score').innerHTML =\"<div style='background-color:  red' id='fff'>\" + de1 + \"</div>\";
\t\t\t}
\t\t\t
\t\t\t
\t\t\tsetTimeout(function(){lancerDeBoule(n+1)}, 80);
\t\t\t
\t\t}
\t\t
\t\telse{
\t\t
\t\t\tdocument.getElementById('roulet').innerHTML = \"<img id='roulette' src='";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/roulette.png"), "html", null, true);
        echo "'></img>\";
\t\t\tdocument.getElementById('status').innerHTML='Fini';
\t\t}
\t}
\t\t\t\t
\tlancerDeBoule(1);

</script>
 

    
  </body>
";
        
        $__internal_739a21e11c58f8edb8751fba7713d180ef4631e6b41d99bf428c2fefb427a7bf->leave($__internal_739a21e11c58f8edb8751fba7713d180ef4631e6b41d99bf428c2fefb427a7bf_prof);

    }

    public function getTemplateName()
    {
        return "CasinoPokerBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  255 => 162,  223 => 133,  104 => 16,  98 => 15,  89 => 10,  86 => 9,  80 => 8,  71 => 5,  68 => 4,  62 => 3,  54 => 12,  52 => 8,  49 => 7,  47 => 3,  44 => 2,  38 => 1,  31 => 15,  28 => 14,  26 => 1,);
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
/* 	<div class="table-responsive">*/
/*    <div id="roulet"></div>*/
/*    <div id="status"></div>*/
/*    <div id="score"></div>*/
/* 	  <div style="margin-left: 20%; height:60%; width: 60%;">*/
/* 	  	<div class=" col-md-12">*/
/* 	  		<button class="manque" style="height:15%; width:115%;">1,2,3,4 MANQUE 1,2,3,4</button>*/
/* 	  	</div>*/
/* 	  	<div style="margin-top: 5%; margin-bottom: 5%; height:90%; width: 15%;" class=" col-md-1">*/
/* 	  		<button class="noir" style="height:100%; width: 32px; margin-left: -13.5px;"><div id="triangle-1"></div><div id="triangle-2"></div></button>*/
/* 	  	</div>*/
/* 	  	<div style="margin-top: 5%; margin-bottom: 5%;width: 20%; height:80%;" class=" col-md-1">*/
/*   		  <div style="margin-top: 10px;" class=" row">*/
/*   		  <button class="un" style="height:20%; width:100%;">1</button>*/
/*   		  </div>*/
/*   		  <div style="margin-top: 10px;" class=" row">*/
/* 			<button class="trois" style="height:20%; width:100%">3</button>*/
/*   		  </div>*/
/*   		  <div style="margin-top: 10px;" class=" row">*/
/*   		  	<button class="six" style="height:20%; width: 100%;">6</button>*/
/*   		  </div>*/
/*   		  <div style="margin-top: 10px;" class=" row">*/
/*   		  	<button class="huit" style="height:20%; width: 100%;">8</button>*/
/*   		  </div>*/
/* 	  	</div>*/
/* 	  	<div style="margin-top: 5%; margin-bottom: 5%; width: 30%;height:80%;" class="col-md-1">*/
/*   		  <div style="height: 70px; margin-top: 3px;" class=" row">*/
/*   		  	<button class="impair" style="height:100%; width: 100%;">IMPAIR<br/>1,3,5,7,9</button>*/
/*   		  </div>*/
/*   		  <div style="height: 70px; margin-top: 3px;" class=" row">*/
/*   		  	<button class="cinq" style="height:100%; width: 100%;"><div class="cercle">5</div></button>*/
/*   		  </div>*/
/*   		  <div style="height: 70px; margin-top: 3px;" class=" row">*/
/*   		  	<button class="pair" style="height:100%; width: 100%;">PAIR<br/>2,4,6,8</button>*/
/*   		  </div>*/
/* 	  	</div>*/
/* 	  	<div style="margin-top: 5%; margin-bottom: 5%;width: 20%; height:80%;" class="col-md-1">*/
/*   		  <div style="margin-top: 10px;" class=" row">*/
/*   		  	<button class="deux" style="height:20%; width: 100%;">2</button>*/
/*   		  </div>*/
/*   		  <div style="margin-top: 10px;" class=" row">*/
/*   		  	<button class="quatre" style="height:20%; width: 100%;">4</button>*/
/*   		  </div>*/
/*   		  <div style="margin-top: 10px;" class=" row">*/
/*   		  	<button class="sept" style="height:20%; width: 100%;">7</button>*/
/*   		  </div>*/
/*   		  <div style="margin-top: 10px;" class=" row">*/
/*   		  	<button class="neuf" style="height:20%; width: 100%;">9</button>*/
/*   		  </div>*/
/* 	  	</div>*/
/* 	  	<div style="margin-top: 5%; margin-bottom: 5%; height:90%; width: 15%;" class=" col-md-1">*/
/* 	  		<button class="rouge" style="height:100%; width:32px; margin-left: -14px; padding:10px">*/
/*         <div class="centerRed"><div id="triangle-3"></div><div id="triangle-4"></div></div></button>*/
/* 	  	</div>*/
/* 	  	<div class=" col-md-12">*/
/* 	  		<button class="passe" style="height:15%; width:114%; margin-left: -7%;">6,7,8,9 PASSE 6,7,8,9</button>*/
/* 	  	</div>*/
/* 	  </div>*/
/* 	</div>*/
/*     </div>*/
/* */
/* <p id="menu"></p>*/
/* */
/* <script type="text/javascript">*/
/* */
/* $(function(){*/
/*     var NewContent='<li id="wessJeton"  class="jeton"></li>'*/
/*     $(".passe").click(function(){*/
/*         $(".passe").after(NewContent);*/
/*     });*/
/*     $(".rouge").click(function(){*/
/*         $(".rouge").after(NewContent);*/
/*     });*/
/*     $(".neuf").click(function(){*/
/*         $(".neuf").after(NewContent);*/
/*     });*/
/*     $(".sept").click(function(){*/
/*         $(".sept").after(NewContent);*/
/*     });*/
/*     $(".quatre").click(function(){*/
/*         $(".quatre").after(NewContent);*/
/*     });*/
/*     $(".deux").click(function(){*/
/*         $(".deux").after(NewContent);*/
/*     });*/
/*     $(".pair").click(function(){*/
/*         $(".pair").after(NewContent);*/
/*     });*/
/*     $(".cinq").click(function(){*/
/*         $(".cinq").after(NewContent);*/
/*     });*/
/*      $(".impair").click(function(){*/
/*         $(".impair").after(NewContent);*/
/*     });*/
/*     $(".huit").click(function(){*/
/*         $(".huit").after(NewContent);*/
/*     });*/
/*     $(".six").click(function(){*/
/*         $(".six").after(NewContent);*/
/*     });*/
/*     $(".trois").click(function(){*/
/*         $(".trois").after(NewContent);*/
/*     });*/
/*     $(".un").click(function(){*/
/*         $(".un").after(NewContent);*/
/*     });*/
/*     $(".noir").click(function(){*/
/*         $(".noir").after(NewContent);*/
/*     });*/
/* });*/
/* */
/* </script>*/
/*  */
/* <script type="text/javascript">*/
/* */
/* 	document.getElementById('roulet').innerHTML = "<img id='roulette' src='{{asset('img/roulette.gif')}}'></img>";*/
/* 	document.getElementById('status').innerHTML ='Rien ne va plus!';*/
/* 	setTimeout(function(){document.getElementById('status').innerHTML ='Les jeux sont faits';}, 1500);*/
/* 	*/
/* 	*/
/* 	var j = Math.floor(Math.random() * (70-40) + 40);*/
/* 	*/
/* 	function lancerDeBoule(n) {*/
/* 	*/
/* 		if(n!=j){*/
/* 			*/
/* 			var de1=Math.floor(Math.random()*9)+1;*/
/* 			if (de1 == 1 | de1 ==  3 | de1 == 6 | de1 ==  8){*/
/* 				document.getElementById('score').innerHTML ="<div style='background-color: black'  id='fff'>" + de1 + "</div>";*/
/* 			}*/
/* 			else if(de1 == 5) {*/
/* 				document.getElementById('score').innerHTML ="<div style='background-color: yellow; color: black;'  id='fff'>" + de1 + "</div>";*/
/* 			}*/
/* 			else {*/
/* 				document.getElementById('score').innerHTML ="<div style='background-color:  red' id='fff'>" + de1 + "</div>";*/
/* 			}*/
/* 			*/
/* 			*/
/* 			setTimeout(function(){lancerDeBoule(n+1)}, 80);*/
/* 			*/
/* 		}*/
/* 		*/
/* 		else{*/
/* 		*/
/* 			document.getElementById('roulet').innerHTML = "<img id='roulette' src='{{asset('img/roulette.png')}}'></img>";*/
/* 			document.getElementById('status').innerHTML='Fini';*/
/* 		}*/
/* 	}*/
/* 				*/
/* 	lancerDeBoule(1);*/
/* */
/* </script>*/
/*  */
/* */
/*     */
/*   </body>*/
/* {% endblock Body %}*/
