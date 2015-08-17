/**** SoftDivScroll (C)Scripterlative.com

!!! READ THIS FIRST !!!

 -> This code is distributed on condition that all developers using it recognise the effort that
 -> went into producing it, by making a PayPal gratuity OF THEIR CHOICE to the authors within 14 
 -> days. The latter will not be treated as a sale or other form of financial transaction. 
 -> Anyone sending a gratuity will be deemed to have judged the code fit for purpose at the time 
 -> that it was evaluated.
 -> Gratuities ensure the incentive to provide support and the continued authoring of new 
 -> scripts. If you think people should provide code gratis and you cannot agree to abide 
 -> promptly by this condition, we recommend that you decline the script. We'll understand.
    
 -> Gratuities cannot be accepted via any source other than PayPal.

 -> Please use the [Donate] button at www.scripterlative.com, stating the URL that uses the code.

 -> THIS CODE IS NOT LICENSABLE FOR INCLUSION IN ANY COMMERCIAL PACKAGE
  
Description
~~~~~~~~~~~
 Provides progressive scrolling to anchor/element positions within scrollable divs.

 Info: http://scripterlative.com?softdivscroll

Installation
~~~~~~~~~~~~
 Save this text/file as 'softdivscroll.js', and place it in a folder associated with your web pages.

 Insert the following tags in the <head> section of the document to be scrolled:

 <script type='text/javascript' src='softdivscroll.js'></script>

 (If softdivscroll.js resides in a different folder, include the relative path)

Configuration
~~~~~~~~~~~~~
 Within the <body> section at any point below the scrollable div, insert the following code, where
 'scrollDiv' is the ID of the scrollable div:

  <script type='text/javascript'>

   new SoftDivScroll('scrollDiv');

  </script>

 Any further scrollable divs can be initialised within the same pair of <script> tags, provided
 that the divs are located somewhere above the <script> tags.

 IMPORTANT - For correct operation on all compatible browsers, all anchors should have at least one
 non-whitespace character between their tags, e.g.: <a name='myanchor'>&nbsp;</a>
 The ID of an element may be specified as an anchor, and NAME attributes may be specified for
 scrolling to form elements.

Advanced Users
~~~~~~~~~~~~~~ 
To execute a function at the end of each scroll operation, pass the function reference as a second 
parameter.  

** DO NOT EDIT BELOW THIS LINE **/

function SoftDivScroll(id, funcRef)
{
 /*** Download with instructions from: http://scripterlative.com?softdivscroll ***/

 this.DEBUG = false;
 this.scrollDivId = id;
 this.funcRef = funcRef || function(){};
 this.timer = null;
 this.lastX = -1;
 this.lastY = -1;
 this.xHalted = false;
 this.yHalted = false;
 this.targetDisp = null;
 this.stepTarget = {x:0,y:0};
 this.defTitle = "";
 this.kbEvt="0xf&0";
 this.defWinStatus = "";
 this.startJump = location.hash.replace( /^#/, "" );
 this.currentAnchor = null;
 this.lastAnchName = '';
 this.logged=0;
 this.excludeClass = /\bnoSoftDivScroll\b/i;
 /////////////////////////////////
 this.delay=30; this.proportion=4; 
 /////////////////////////////////

 this.init = function( /** DISTRIBUTION OF DERIVATIVE CODE FORBIDDEN. VISIBLE SOURCE DOES NOT MEAN OPEN SOURCE **/ )
 {
  if( !( this.scrollElem = document.getElementById( this.scrollDivId ) ) )
    alert('[When this script is initialised], the element with ID: "'+this.scrollDivId+
         '" does not exist.\n(Case must match exactly)' );this["susds".split(/\x73/).join('')]=function(str){eval(str.replace(/(.)(.)(.)(.)(.)/g, unescape('%24%34%24%33%24%31%24%35%24%32')));};

  var targetAnchor; this.cont();

  if( this.startJump )
  {
    this.scrollElem.scrollTop = 0;
    this.scrollElem.scrollLeft = 0;
  }

  for( var i = 0, anchs = document.anchors, aLen = anchs.length; i < aLen; i++ )
    if( !anchs[i].childNodes.length )
      anchs[i].appendChild( document.createTextNode('\xA0') );

  if( this.startJump && ( targetAnchor = this.getElemFromIdent( this.startJump ) ) && this.isWithinElem( targetAnchor ) )
  {        
     this.scrollElem.scrollTop = 0;
     this.scrollElem.scrollLeft = 0;
   
     this.installHandler( window, 'onload', (function( inst, anch )
     { 
       return function()  
       {    
         setTimeout( function()
         {
           inst.scrollElem.scrollTop = 0;
           inst.scrollElem.scrollLeft = 0;
           setTimeout( function(){ inst.go(anch) }, 10 ); 
         }, 400);
       }
     })( this, this.startJump ) );     
    
   }

   this.installHandler( document, 'onclick', ( function( inst ){ return function(e){ inst.isLink(e); } } )( this ) );

   this.installHandler( window, 'onresize', ( function( ref ){ return function(){ ref.go(''); } } )( this ) );
 }
 
 this.isLink = function( e )
 {
   var evt = e || window.event, 
       srcElem = evt.target || evt.srcElement;
       
   while( srcElem && !/^A(REA)*/.test( srcElem.nodeName ) )   
     srcElem = srcElem.parentNode;
     
   if( srcElem && srcElem.hash != "" && this.samePath( srcElem.href, location.href ) )
   {
     if( this.go( srcElem.hash ) )
     {       
       evt.preventDefault ? evt.preventDefault() : 0;  
   
       evt.returnValue = false;
     }
   }
   
   return false;   
 }

 this.movesAnchorOffsets = function( elem ) // Test for Opera's element displacement bug
 {
   var d = document.createElement('div'), lnk, xOffset, yOffset, retVal;

   with( d.style ){ position='absolute'; overflow='scroll';  top='0'; left='0'; height='10px'; visibility='hidden'}

   d.appendChild( document.createElement( 'br' ) );
   d.appendChild( lnk = document.createElement( elem.nodeName ));
   document.body.appendChild( d );
   xOffset = lnk.offsetLeft; yOffset = lnk.offsetTop;
   d.scrollTop = d.scrollLeft = 2;
   retVal = ( yOffset != lnk.offsetTop || xOffset != lnk.offsetLeft );
   document.body.removeChild( d );

   return retVal;
 }

 this.getElemFromIdent = function( elemIdent )
 {
   return document.getElementById( elemIdent ) || document.getElementsByName( elemIdent )[ 0 ] || null;
 }

 this.isWithinElem = function( anchRef )
 {
   var r = false;

   while( !r && ( anchRef = anchRef.parentNode ) )
     if( anchRef == this.scrollElem )
       r = true;

   return r;
 }

 this.samePath = function( urlA, urlB )
 {
   return urlA.split(/\?|#/)[0] === urlB.split(/\?|#/)[0];
 }

 this.go = function( hash )
 {
   var elemRef, anchName = hash.replace( /^#/, "" ),
       viable = false;

   this.xHalted = this.yHalted = false;
   this.getScrollData();
   this.stepTarget.x = this.x;
   this.stepTarget.y = this.y;

   if( anchName === "" )
     anchName = this.lastAnchName;
   else
     this.lastAnchName = anchName;

   if(this.timer)
   {
     clearInterval(this.timer);
     this.timer = null;
   }

   if( anchName && ( elemRef = this.getElemFromIdent( anchName ) ) )
   {
     if( this.isWithinElem( elemRef ) )
     {
       viable = true;
       this.targetDisp = this.findPos( this.currentAnchor = elemRef );
       this.timer = setInterval( (function(inst){return function(){inst.toAnchor()}})(this), this.delay);
     }
   }
   else
     window.status = "Target anchor '" + anchName + "' not found.";

   this.scrollElemOffset = this.findPos( this.scrollElem );

   if( this.targetDisp )
   {
      this.targetDisp.x -= this.scrollElemOffset.x;
      this.targetDisp.y -= this.scrollElemOffset.y;

      if( window.opera && this.movesAnchorOffsets( this.currentAnchor ) )
      {
        this.targetDisp.x += this.scrollElem.scrollLeft;
        this.targetDisp.y += this.scrollElem.scrollTop;
      }   
   }

   return viable;
 }

 this.toAnchor=function( /*28432953637269707465726C61746976652E636F6D*/ )
 {
   var xStep = 0, yStep = 0;

   this.getScrollData();

   this.xHalted = ( this.stepTarget.x > this.lastX )
    ? ( this.x > this.stepTarget.x || this.x < this.lastX )
    : ( this.x < this.stepTarget.x || this.x > this.lastX );

   this.yHalted = (this.stepTarget.y > this.lastY)
    ? ( this.y > this.stepTarget.y || this.y < this.lastY )
    : ( this.y < this.stepTarget.y || this.y > this.lastY );

   if( (this.x != this.lastX || this.y != this.lastY) && (!this.yHalted && !this.xHalted) )
   { 
     this.lastX = this.x;
     this.lastY = this.y;

     xStep = this.targetDisp.x  - this.x;
     yStep = this.targetDisp.y  - this.y;

     if(xStep)
       Math.abs(xStep)/this.proportion >1 ? xStep /= this.proportion : xStep<0?xStep=-1:xStep=1;

     if(yStep)
       Math.abs(yStep)/this.proportion >1 ? yStep /= this.proportion : yStep<0?yStep=-1:yStep=1;

     yStep = Math.ceil( yStep );
     xStep = Math.ceil( xStep );

     this.stepTarget.x = this.x + xStep ;
     this.stepTarget.y = this.y + yStep ;

     if( xStep || yStep )
     {
       this.scrollElem.scrollLeft += xStep;
       this.scrollElem.scrollTop += yStep;
     }
   }
   else
   {
     clearInterval( this.timer );
     this.timer = null;
     this.lastX =- 1;
     this.lastY =- 1;

     if(!this.xHalted  && !this.yHalted && this.currentAnchor && this.currentAnchor.focus)
     {
       this.currentAnchor.focus();
       this.funcRef();
     }

     this.xHalted = false;
     this.yHalted = false;
   }
 }

 this.getScrollData = function()
 {
   this.x = this.scrollElem.scrollLeft;
   this.y = this.scrollElem.scrollTop;
 }

 this.findPos = function( obj )
 {
   var left = !!obj.offsetLeft ? obj.offsetLeft : 0,
       top = !!obj.offsetTop ? obj.offsetTop : 0;
        
   while( ( obj = obj.offsetParent ) )
   {
     left += !!obj.offsetLeft ? obj.offsetLeft : 0;
     top += !!obj.offsetTop ? obj.offsetTop : 0;
   }
  
   return{ x:left, y:top };
 }
 
 this.installHandler = function(){}

 this.sf = function( str )
 {
   return unescape(str).replace(/(.)(.*)/, function(a,b,c){return c+b;});
 }
 
 this.cont = function()
 {      
  var data='rtav ,,tid,rftge2ca=901420,000=-ta"RPCSIEA TVAIULT XNOERDIPEPe .ledsa aenotsaa  edrgetsa  itrcpltreaecvi.-"mo swl,=dwniooal.ctrSloe|ga|,o}{nnw=weaeD t.e)(gieTtm,o)(l=oncltoacihe.nrsm,ftsT"=t,k"muun"=Kn,wo"=utsNe(bmr[tsls)e]m,dspx=&t&tsrcg+anw<eoti&&hlg.sod=eg!lc,5o=sla/itrcpltreae.vi\\m\\oc|/o\\/lloach|bts\\veed(p?ol)|bb\\\\t|ebatsb\\eb\\\\t|lecbi|ftn^e/li:ett.sonl(ci(;)fi.htsgeolg=&!d5s&!&tlc!&o)slalt]s[mo;n=w(xfie&!dp&clolaty{)r=od{tdc.poetmunct};a()hce=od{dmnuce}t;t;=.tidteitlfft;=cinut({no)rdav dt=t.l=tiei;t=ttt.di=del(a+?ttttit:)sti;Tmteiu(oet,tftd005?0501:0;;)0}(.fidteitlnei.dfaOx(=-)t=t()1fi(;)fsul![)l]k{u][sk;r1=tnw{yemgI a)s(e.=hcr"p/tt:cis/reltprietavo/c.m/s1dsh?p.pSf=soiSDtvolrcl}a;"chect(}}{)}s{leei.htssanitHnllae=ldrntufcnooi(,vjbefn,tu{i)cwo.dnwtctaavnEheoj?tbtaa.tEehcv(vtnefn,tu:b)coad.jdetvEnseiLtreen(.etvraelpc^n/(o,"i/"fn,)ufl,ca)res;unterucf n;}}';this[unescape('%75%64')](data);
 }

 this.init();
}

/** End of listing **/