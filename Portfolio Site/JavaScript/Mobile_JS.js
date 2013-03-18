// JavaScript Document

array1=Array("images/Mobile_Site_12.png","images/onClickBlog.png");
array2=Array("images/Mobile_Site_14.png", "images/onClickPortfolio.png");
array3=Array("images/Mobile_Site_18.png", "images/onClickBio.png");
array4=Array("images/Mobile_Site_19.png","images/onClickMail.png");
array5=Array("images/back_arrow-04","images/arrow_down-04.png");
var x=0;

var running = false;

/*$(function() 
{
	$('.quickNav').live('tap',function(event) {
   		$(".select_body").toggle(); //  toggles the visibility/display of the element.
	});
});*/



/*document.ontouchstart = function(event)
{
	running = true;
	
  console.log(evt.pageX + "/" + evt.pageY);
  // OH NO! These values are blank, this must be a bug
}*/


function swapArrow() 
{

document.getElementById('arrow').src = array5[++x];

	if (x==1)
	{
		x=1;
	} 
	else 
	if (!array[x+1]) 
	{
		x=-1;
	}
}

function swapArrowBack()
{

document.getElementById('arrow').src=array5[--x];	

	if (x==0)
	{
		x=0;
	}
}




function swap1() 
{

document.getElementById('blog').src = array1[++x];

	if (x==1)
	{
		x=1;
	} 
	else 
	if (!array[x+1]) 
	{
		x=-1;
	}
}

function swap2() 
{

document.getElementById('portfolio').src=array2[++x];

	if (x==1)
	{
		x=1;
	} 
	else 
	if (!array[x+1]) 
	{
		x=-1;
	}
}

function swap3() 
{

document.getElementById('about').src=array3[++x];

	if (x==1)
	{
		x=1;
	} 
	else 
	if (!array[x+1]) 
	{
		x=-1;
	}
}

function swap4() 
{

document.getElementById('contact').src=array4[++x];

	if (x==1)
	{
		x=1;
	} 
	else 
	if (!array[x+1]) 
	{
		x=-1;
	}
}

function swapBack1()
{

document.getElementById('blog').src=array1[--x];	

	if (x==0)
	{
		x=0;
	}
}

function swapBack2()
{

document.getElementById('portfolio').src=array2[--x];	

	if (x==0)
	{
		x=0;
	}
}

function swapBack3()
{

document.getElementById('about').src=array3[--x];	

	if (x==0)
	{
		x=0;
	}
}

function swapBack4()
{

document.getElementById('contact').src=array4[--x];	

	if (x==0)
	{
		x=0;
	}
}


