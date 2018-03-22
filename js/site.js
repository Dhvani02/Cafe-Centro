var i = 0;
var j=0;
var path = new Array();
 
// LIST OF IMAGES
path[0] = "img1.jpg";
path[1] = "img2.jpg";
path[2] = "img3.jpg";
path[3] = "img4.jpg";
path[4] = "img5.jpg";
path[5] = "img6.jpg";
path[6] = "img7.jpg";
path[7] = "img8.jpg";
path[8] = "img9.jpg";
path[9] = "img10.jpg";
path[10] = "img11.jpg";

function swapImage()
{
   document.slide.src = path[i];
   if(i < path.length - 1) 
    i++; 
   else 
    i = 0;
   setTimeout("swapImage()",2000);
   var j=i;
}
window.onload=swapImage;

function swapImageClickR()
{
  if(j==10)
  {
    j=0;
  }
  else
  {
      j++;
  }
  document.slide.src=path[j];
}

function swapImageClickL()
{
  if(j==0)
  {
    j=10;
  }
  else
  {
      j--;
  }
  document.slide.src=path[j];
}
